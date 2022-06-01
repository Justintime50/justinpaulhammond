# justinpaulhammond.com

My personal website. View at [justinpaulhammond.com](https://justinpaulhammond.com).

[![Build Status](https://github.com/Justintime50/justinpaulhammond.com/workflows/build/badge.svg)](https://github.com/Justintime50/justinpaulhammond.com/actions)
[![Licence](https://img.shields.io/github/license/justintime50/justinpaulhammond.com)](LICENSE)

## Install

```bash
# Copy the env file, edit as needed
cp src/.env-example src/.env

# Run the setup script which will bootstrap all the requirements and spin up the service
./setup.sh
```

## Usage

Visit `justinpaulhammond.localhost` locally or `justinpaulhammond.com` in production.

## Deploy

```bash
# Deploy the site locally
docker compose up -d

# Deploy the site in production
docker compose -f docker-compose.yml -f docker-compose-prod.yml up -d
```

## Development

```bash
# Install dependencies
composer install

# Lint the PHP files
composer lint

# Fix PHP linting
composer fix

# Lint the SASS files
npm run lint

# Fix SASS linting
npm run fix

# Compile SASS and Javascript during development
npm run dev

# Compile for production
npm run prod

# Watch for CSS and Javascript changes
npm run watch
```
