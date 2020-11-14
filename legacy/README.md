# Legacy Site Setup

There are other sites contained in this legacy folder that are no longer live such as `music`, `silverwolfgames`, and `wedding`.

## Blog Deployment

If deploying this site with the `/blog` subdirectory, **do not** deploy the `laraview` container, only the `laraview-db` container.

### Deploy the site AND the Laraview blog in prod

```bash
docker-compose -f docker-compose-blog.yml up -d
```

To run migrations on the blog, use the following:

```bash
docker exec -it justinpaulhammond /bin/sh -c "cd blog && php artisan migrate"
```

### Install Laraview Blog in a Subfolder

Follow [this guide](https://serversforhackers.com/c/nginx-php-in-subdirectory) to setup the Laraview blog in a subfolder.
