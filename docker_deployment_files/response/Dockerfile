FROM php:apache
RUN apt update \
    && apt install -y wget zip

COPY files/* /var/www/html/
RUN chmod -R 755 /var/www/html
EXPOSE 80
