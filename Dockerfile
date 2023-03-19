# Загрузка образа PHP
FROM php:8.1-fpm

# Установка необходимых зависимостей
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libpq-dev \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libzip-dev \
    curl \
    supervisor \
    nano \
    libmcrypt-dev \
    zlib1g-dev \
    libonig-dev

# Установка расширений PHP
RUN docker-php-ext-install mysqli

# Установка Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Копирование файлов проекта в контейнер
COPY . /var/www/html

# Установка Node.js и NPM
RUN curl -sL https://deb.nodesource.com/setup_14.x | bash -
RUN apt-get install -y nodejs

# Установка зависимостей Node.js
RUN npm install && npm run dev

# Создание символической ссылки на хранилище файлов
RUN php artisan storage:link

# Копирование supervisord.conf в контейнер
COPY supervisord.conf /etc/supervisor/conf.d/supervisord.conf

# Установка OSPanel и PHP Storm
# Для установки этих программ нужно использовать инструкции установки для вашей ОС

# Установка докера
# Для установки докера нужно использовать инструкции установки для вашей ОС

# Копирование конфигурационных файлов
COPY .env-example /var/www/html/.env
COPY docker-entrypoint.sh /usr/local/bin/

# Выполнение команд при запуске контейнера
CMD ["/usr/bin/supervisord", "-c", "/etc/supervisor/conf.d/supervisord.conf"]
ENTRYPOINT ["docker-entrypoint.sh"]


