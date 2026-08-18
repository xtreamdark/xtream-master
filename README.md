# XMASTER IPTV PANEL

Instalador XMASTER para Ubuntu 22.04 LTS.

## REQUISITOS

- Ubuntu 22.04 LTS
- Arquitectura x86_64
- Acceso root
- Instalación limpia del sistema operativo

## INSTALACIÓN

Ejecutar como usuario root:

```bash
cd /root
rm -f /root/install.py3
wget -O /root/install.py3 https://raw.githubusercontent.com/xtreamdark/xtream-master/main/install/install.py3
chmod +x /root/install.py3
python3.10 /root/install.py3
```

Seleccionar `MAIN` para instalar el servidor principal.

El instalador prepara automáticamente las dependencias, paquetes, configuraciones y binarios necesarios.

## RUTA PRINCIPAL

```text
/home/xtreamcodes/iptv_xtream_codes
```

Usuario del sistema:

```text
xtreamcodes
```

## INICIAR / REINICIAR SERVICIOS

```bash
/home/xtreamcodes/iptv_xtream_codes/start_services.sh
```

## XMASTER

Repositorio mantenido por Darksite.

Telegram: https://t.me/xmastertv

Repositorio: https://github.com/xtreamdark/xtream-master
