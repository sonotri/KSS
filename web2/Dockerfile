FROM php:7.4-apache
RUN docker-php-ext-install mysqli
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN composer require vlucas/phpdotenv
COPY . /var/www/html/
EXPOSE 80


CMD ["apache2-foreground"]
