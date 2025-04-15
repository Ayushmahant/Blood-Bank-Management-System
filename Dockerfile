FROM php:8.1-apache

COPY . /var/www/html/

RUN a2enmod rewrite

# ✅ Install mysqli extension
RUN docker-php-ext-install mysqli

# Set permissions
RUN chown -R www-data:www-data /var/www/html && \
    chmod -R 755 /var/www/html

# Add directory config to prevent 403
RUN echo '<Directory /var/www/html/>\n\
    Options Indexes FollowSymLinks\n\
    AllowOverride All\n\
    Require all granted\n\
</Directory>' > /etc/apache2/conf-available/custom.conf && \
    a2enconf custom

EXPOSE 80
