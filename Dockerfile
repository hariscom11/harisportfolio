# ==========================================
# STAGE 1 - Build frontend Laravel + Vite
# ==========================================
FROM node:22-alpine AS node_builder

WORKDIR /app

COPY package*.json ./

RUN npm ci

COPY . .

RUN npm run build


# ==========================================
# STAGE 2 - Laravel + PHP
# ==========================================
FROM php:8.3-fpm-alpine

WORKDIR /var/www/html

# Install kebutuhan sistem
RUN apk add --no-cache \
    nginx \
    supervisor \
    sqlite \
    sqlite-dev \
    libzip-dev \
    unzip \
    curl

# Install PHP extensions
RUN docker-php-ext-install \
    pdo \
    pdo_sqlite \
    zip

# Ambil Composer dari image resmi Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Copy seluruh project Laravel
COPY . .

# Copy hasil build Vite dari Stage 1
COPY --from=node_builder /app/public/build ./public/build

# Install dependency Laravel untuk production
RUN composer install \
    --no-dev \
    --optimize-autoloader \
    --no-interaction \
    --prefer-dist

# Berikan permission untuk Laravel
RUN chown -R www-data:www-data \
    storage \
    bootstrap/cache \
    database

# Copy konfigurasi Nginx
COPY docker/nginx.conf /etc/nginx/http.d/default.conf

# Konfigurasi Supervisor untuk menjalankan
# PHP-FPM dan Nginx secara bersamaan
RUN printf '[supervisord]\n\
nodaemon=true\n\
\n\
[program:php-fpm]\n\
command=php-fpm -F\n\
autostart=true\n\
autorestart=true\n\
\n\
[program:nginx]\n\
command=nginx -g "daemon off;"\n\
autostart=true\n\
autorestart=true\n' \
> /etc/supervisord.conf

# Port yang digunakan Render
EXPOSE 10000

# Jalankan Supervisor
CMD ["supervisord", "-c", "/etc/supervisord.conf"]
