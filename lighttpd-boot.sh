#!/usr/bin/env bash

echo "Booting lighttpd web server"

/app/vendor/lighttpd/sbin/lighttpd -D -f /app/lighttpd.conf
