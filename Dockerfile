# ============================================================

# Stage 1: Build Vite / Tailwind assets

# ============================================================

FROM node:24-alpine AS frontend


WORKDIR /app


COPY package.json package-lock.json ./

RUN npm ci


COPY resources ./resources

COPY public ./public

COPY vite.config.js ./


RUN npm run build



# ============================================================

# Stage 2: Laravel application

# ============================================================

FROM php:8.4-apache


RUN apt-get update && apt-get install -y libzip-dev libsqlite3-dev unzip git curl && docker-php-ext-install pdo_sqlite zip opcache && a2enmod rewrite && rm -rf /var/lib/apt/lists/*

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer


WORKDIR /var/www/html


COPY . .


RUN composer install --no-dev --prefer-dist --no-interaction --optimize-autoloader


COPY --from=frontend /app/public/build ./public/build


RUN sed -i 's#DocumentRoot /var/www/html#DocumentRoot /var/www/html/public#' /etc/apache2/sites-available/000-default.conf


RUN printf '%s\n' '<Directory /var/www/html/public>' '    AllowOverride All' '    Require all granted' '</Directory>' > /etc/apache2/conf-available/laravel.conf


RUN a2enconf laravel


RUN mkdir -p /var/lib/metro-mobilia /var/www/html/storage /var/www/html/bootstrap/cache


RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache /var/lib/metro-mobilia


RUN chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache /var/lib/metro-mobilia


RUN printf '%s\n' 'opcache.enable=1' 'opcache.validate_timestamps=0' 'opcache.memory_consumption=128' 'opcache.max_accelerated_files=20000' > /usr/local/etc/php/conf.d/opcache.ini


EXPOSE 80


CMD ["apache2-foreground"]
