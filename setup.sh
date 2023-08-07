#!/bin/bash

# The following script will setup the project for the first time
# To run the project in the future, simply run `docker compose up -d`

PROJECT_NAME=justinpaulhammond
HAS_DATABASE=

setup() {
    setup_dependencies
    docker_build

    # Run database migrations once the database container is up and able to accept connections
    for ((ATTEMPT = 0; ATTEMPT <= 10; ATTEMPT += 1)); do
        if ! healthcheck; then
            echo "Database is not ready for connections after attempt #$ATTEMPT, retrying..."
            sleep 1
        else
            if [ -n "$HAS_DATABASE" ]; then
                cd src || exit 1
                composer migrate-seed
            fi
            echo "Setup complete!"
            exit 0
        fi
    done

    echo "Healthchecks failed on setup!"
    exit 1
}

setup_dependencies() {
    cd src || exit 1

    composer install
    npm install
    php artisan key:generate

    cd .. || exit 1
}

docker_build() {
    docker compose up -d --build --quiet-pull
}

healthcheck() {
    docker ps | grep -q "$PROJECT_NAME-$PROJECT_NAME-1"
    if [ -n "$HAS_DATABASE" ]; then
        docker ps | grep -q "$PROJECT_NAME-$PROJECT_NAME-db-1"
        docker exec -t "$PROJECT_NAME-$PROJECT_NAME-db-1" mysql -uroot -ppassword -e "show databases;" &>/dev/null || false
    fi
}

setup
