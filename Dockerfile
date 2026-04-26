FROM php:8.2-cli

# System dependencies
RUN apt-get update && apt-get install -y \
    git \
    curl \
    unzip \
    zip \
    libzip-dev \
    libpng-dev \
    libonig-dev \
    libxml2-dev

# PHP extensions
RUN docker-php-ext-install \
    pdo \
    pdo_mysql \
    mbstring \
    zip \
    exif \
    pcntl

# Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Working directory
WORKDIR /app

# Copy project
COPY . .

# Install dependencies
RUN composer install --no-dev --optimize-autoloader

# Permissions
RUN chmod -R 775 storage bootstrap/cache

# ❌ DO NOT RUN optimize:clear in build (THIS WAS ERROR)
# RUN php artisan optimize:clear  ← removed

# Expose port
EXPOSE 10000

# Start Laravel using public folder (fixes Not Found)
CMD php -S 0.0.0.0:10000 -t public
