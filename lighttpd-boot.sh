#!/usr/bin/env bash

echo "Booting lighttpd web server"

/app/vendor/php/bin/php -d extension=midgard2.so midgard-config-create.php

/app/vendor/lighttpd/sbin/lighttpd -D -f /app/lighttpd.conf
