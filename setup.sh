#!/bin/bash

# The following script will setup the project for the first time
# To run the project in the future, simply run `docker compose up -d`

main() {
    cd src || exit 1

    # Install dependencies
    composer install
    npm install

    # Generate a Laravel key
    php artisan key:generate

    cd .. || exit 1

    # Spin up the project (assumes you already have Traefik setup)
    docker compose up -d --build --quiet-pull
}

main
