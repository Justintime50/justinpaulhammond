# justinpaulhammond.com

My personal website. View at [justinpaulhammond.com](https://justinpaulhammond.com).

[![Build Status](https://github.com/Justintime50/justinpaulhammond.com/workflows/build/badge.svg)](https://github.com/Justintime50/justinpaulhammond.com/actions)
[![Licence](https://img.shields.io/github/license/justintime50/justinpaulhammond.com)](LICENSE)

## Install

```bash
# Copy the env file, edit as needed
cp src/.env-example src/.env

# Run the setup script which will bootstrap all the requirements and spin up the service
just setup
```

## Usage

Visit `justinpaulhammond.localhost` locally or `justinpaulhammond.com` in production.

## Deploy

```bash
# Deploy the site locally
just run

# Deploy the site in production
just prod
```

## Development

```bash
# Get a comprehensive list of development tools
just --list
```
