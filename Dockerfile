FROM php:8.2-cli

# System dependencies (important for Laravel)
RUN apt-get update && apt-get install -y \
    git \
    curl \
    unzip \
    zip \
    libzip-dev \
    libpng-dev \
    libonig-dev \
    libxml2-dev

# Install PHP extensions required by Laravel
RUN docker-php-ext-install \
    pdo \
    pdo_mysql \
    mbstring \
    zip \
    exif \
    pcntl

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /app

# Copy project files
COPY . .

# Install Laravel dependencies
RUN composer install --no-dev --optimize-autoloader

# Fix permissions (VERY IMPORTANT for storage & cache)
RUN chmod -R 775 storage bootstrap/cache

# Clear Laravel cache (prevents many deploy issues)
RUN php artisan optimize:clear

# Expose Render port
EXPOSE 10000

# Start Laravel using PUBLIC folder (FIXES 404 / Not Found issue)
CMD php -S 0.0.0.0:10000 -t public
