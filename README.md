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

## Blog Deployment

If deploying this site with the `/blog` subdirectory, **do not** deploy the `laraview` container, only the `laraview-db` container.

To run migrations on the block, use the following:

```bash
docker exec -it justinpaulhammond /bin/sh -c "cd blog && php artisan migrate"
```

### Install Laraview Blog in a Subfolder

Follow [this guide](https://serversforhackers.com/c/nginx-php-in-subdirectory) to setup the Laraview blog in a subfolder.
