#!/bin/bash

if [[ -z "${ENVIRONMENT}" ]]; then
    echo "Running web application: local development"
    composer install --optimize-autoloader
    php artisan migrate
    php artisan migrate --env=testing
    php artisan db:seed

    php artisan serve --host=0.0.0.0 --port=8000
elif [[ ${ENVIRONMENT} == "worker" ]]; then
    echo "Running application: ${ENVIRONMENT}"
    composer install --optimize-autoloader
    php artisan migrate --force

    php artisan optimize:clear
    php artisan optimize
    php artisan queue:work --tries=3 --memory=256
else
    echo "Running without application: ${ENVIRONMENT}"
    composer install --optimize-autoloader
    php artisan migrate --force

    php artisan optimize:clear
    php artisan optimize
    php artisan serve --host=0.0.0.0 --port=8000
    php artisan up
fi
