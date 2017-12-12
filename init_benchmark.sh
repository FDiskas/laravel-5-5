#!/usr/bin/env bash

function clearCache() {
    sudo /bin/rm -rf bootstrap/cache/*
    sudo /bin/chmod -R 777 bootstrap/cache

    php artisan clear-compiled
    php artisan view:clear
    php artisan route:clear
    php artisan config:clear
    php artisan cache:clear
}

function init() {
    local pwd=$(pwd)
    composer create-project "laravel/laravel=5.5" $pwd/tmp --prefer-dist ; rsync -a $pwd/tmp/ $pwd ; rm -rf $pwd/tmp
    composer install --no-dev --optimize-autoloader
    clearCache
    php artisan key:generate
    php artisan config:cache
    php artisan route:cache
    php artisan optimize --force

    return 0;
}
