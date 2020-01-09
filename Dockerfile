FROM justintime50/nginx-php:7.4

COPY --chown=www-data:www-data ./src /var/www/html
COPY nginx.conf /etc/nginx/conf.d/default.conf
