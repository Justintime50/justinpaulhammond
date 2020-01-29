# justinpaulhammond.com

My personal website.

[![Build Status](https://travis-ci.org/Justintime50/justinpaulhammond.com.svg?branch=master)](https://travis-ci.org/Justintime50/justinpaulhammond.com)

## Usage

```bash
# Deploy the site in prod
docker-compose up -d

# Deploy the site AND the Laraview blog in prod
docker-compose -f docker-compose-blog.yml up -d

# Deploy the site locally
docker-compose -f docker-compose-dev.yml up -d
```

## Blog

If deploying this site with the `/blog` subdirectory, **do not** deploy the `laraview` container, only the `laraview-db` container.

### Install Laraview Blog in a Subfolder

Follow [this guide](https://serversforhackers.com/c/nginx-php-in-subdirectory) to setup the Laraview blog in a subfolder.
