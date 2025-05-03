FROM php:8.4.6-apache-bullseye


# Copia tutto il contenuto della directory Array/ in /var/www/html/
COPY . /var/www/html/

# Imposta i permessi corretti
RUN chown -R www-data:www-data /var/www/html
