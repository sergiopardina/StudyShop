#!/bin/bash

# Генерация нового ключа шифрования
php artisan key:generate

# Выполнение миграций и сидов
php artisan migrate --seed

# Запуск веб-сервера
php-fpm
