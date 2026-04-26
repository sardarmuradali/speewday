FROM php:8.2-cli

# System dependencies
RUN apt-get update && apt-get install -y \
    git curl unzip zip libzip-dev libpng-dev libonig-dev libxml2-dev

# Composer install
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Working directory
WORKDIR /app

# Copy project
COPY . .

# Install PHP extensions required by Laravel
RUN docker-php-ext-install pdo pdo_mysql mbstring zip exif pcntl

# Install dependencies
RUN composer install --no-dev --optimize-autoloader

# Laravel optimizations (IMPORTANT for production)
RUN php artisan config:clear \
    && php artisan route:clear \
    && php artisan view:clear \
    && php artisan cache:clear

# Permissions fix (VERY IMPORTANT)
RUN chmod -R 775 storage bootstrap/cache

# Expose port
EXPOSE 10000

# Start server using PUBLIC folder (FIXES "Not Found")
CMD php -S 0.0.0.0:10000 -t public
