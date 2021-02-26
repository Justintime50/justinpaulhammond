# justinpaulhammond.com

My personal website. View at [justinpaulhammond.com](https://justinpaulhammond.com).

[![Build Status](https://github.com/Justintime50/justinpaulhammond.com/workflows/build/badge.svg)](https://github.com/Justintime50/justinpaulhammond.com/actions)
[![Licence](https://img.shields.io/github/license/justintime50/justinpaulhammond.com)](LICENSE)

## Usage

```bash
# Deploy the site locally
docker-compose up -d

# Deploy the site in production
docker-compose -f docker-compose.yml -f docker-compose-prod.yml up -d
```

Visit `justin.localhost` locally or `justinpaulhammond.com` in production.

## Development

```bash
# Compile SASS and Javascript during development
npm run dev

# Compile for production
npm run prod

# Watch for CSS and Javascript changes
npm run watch
```

## Legacy Setup

The blog used to be configured as a subfolder of this site but was moved to a subdomain for deployment purposes. View this setup in [legacy](legacy/README.md).
