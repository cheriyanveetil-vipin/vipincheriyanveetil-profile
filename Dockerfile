# syntax=docker/dockerfile:1
FROM php:8.3-apache

# Silence "Could not reliably determine the server's fully qualified domain name" warning
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

WORKDIR /var/www/html

COPY . /var/www/html

# Apache's default document root user/group
RUN chown -R www-data:www-data /var/www/html

EXPOSE 80

HEALTHCHECK --interval=30s --timeout=3s --start-period=5s \
  CMD php -r "exit(@file_get_contents('http://localhost/') === false ? 1 : 0);"
