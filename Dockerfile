FROM php:8.1-fpm

RUN apt-get update && apt-get install -y \
    git \
    curl \
    unzip \
    zip \
    libzip-dev \
    libpq-dev \
    && docker-php-ext-install pdo_mysql

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Set the working directory inside the Docker image
WORKDIR /var/www/html

# Copy the entire Laravel project into the Docker image
COPY . .

# Install Laravel dependencies
RUN composer install --optimize-autoloader --no-dev

RUN php artisan key:generate

RUN php artisan migrate

# Install Nginx
RUN apt-get install -y nginx

# Remove default Nginx configuration
RUN rm /etc/nginx/sites-enabled/default

# Copy custom Nginx configuration
COPY nginx/default.conf /etc/nginx/conf.d/default.conf

# Expose port 80 for Nginx
EXPOSE 80

# Start PHP-FPM and Nginx
CMD ["sh", "-c", "php-fpm -D && nginx -g 'daemon off;'"]
