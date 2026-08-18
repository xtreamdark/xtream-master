<?php

set_time_limit(0);

$configFile = "/home/xtreamcodes/iptv_xtream_codes/config";
$key = "5709650b0d7806074842c6de575025b1";

function xorDecode($data, $key) {
    $out = "";
    $keyLen = strlen($key);

    for ($i = 0; $i < strlen($data); $i++) {
        $out .= chr(ord($data[$i]) ^ ord($key[$i % $keyLen]));
    }

    return $out;
}

function getInterface() {
    $route = trim(shell_exec("ip route | awk '/^default/ {print \$5; exit}'"));
    return $route ?: "eth0";
}

if (!file_exists($configFile)) {
    exit(1);
}

$encoded = trim(file_get_contents($configFile));
$decoded = base64_decode($encoded, true);

if ($decoded === false) {
    exit(1);
}

$json = xorDecode($decoded, $key);
$config = json_decode($json, true);

if (!$config) {
    exit(1);
}

$serverId = intval($config["server_id"]);
$interface = getInterface();

while (true) {

    try {
        $db = @new mysqli(
            $config["host"],
            $config["db_user"],
            $config["db_pass"],
            $config["db_name"],
            intval($config["db_port"])
        );

        if (!$db->connect_errno) {

            $iface = $db->real_escape_string($interface);

            $sql = "
                UPDATE streaming_servers
                SET
                    status = 1,
                    last_check_ago = UNIX_TIMESTAMP(),
                    network_interface = '{$iface}'
                WHERE id = {$serverId}
            ";

            $db->query($sql);
            $db->close();
        }

    } catch (Throwable $e) {
        // No detener el proceso si temporalmente no hay conexión.
    }

    sleep(10);
}
