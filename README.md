# XMASTER IPTV PANEL

Instalador XMASTER para Ubuntu 22.04 LTS.

## REQUISITOS

- Ubuntu 22.04 LTS
- Arquitectura x86_64
- Acceso root
- Instalación limpia del sistema operativo

## INSTALACIÓN

Ejecutar como usuario root:

    cd /root
    wget -O install.py3 https://raw.githubusercontent.com/xtreamdark/xtream-master/main/install/install.py3
    chmod +x install.py3
    python3.10 install.py3

Seleccionar `MAIN` para instalar el servidor principal.

El instalador prepara automáticamente las dependencias, paquetes, configuraciones y binarios necesarios.

## RUTA PRINCIPAL

    /home/xtreamcodes/iptv_xtream_codes

Usuario del sistema:

    xtreamcodes

## INICIAR / REINICIAR SERVICIOS

    /home/xtreamcodes/iptv_xtream_codes/start_services.sh

## VERIFICAR NGINX

    /home/xtreamcodes/iptv_xtream_codes/nginx/sbin/nginx -version

## VERIFICAR NGINX RTMP

    /home/xtreamcodes/iptv_xtream_codes/nginx_rtmp/sbin/nginx_rtmp -version

## VERIFICAR PHP

    /home/xtreamcodes/iptv_xtream_codes/php/bin/php -v

## XMASTER

Repositorio mantenido en GitHub bajo:

    xtreamdark/xtream-master

Incluye correcciones de instalación, runtime y compatibilidad para Ubuntu 22.04 LTS.

Este proyecto contiene código derivado de software open-source previo. Se mantienen las obligaciones de licencia y atribución aplicables.
