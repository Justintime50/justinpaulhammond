# justinpaulhammond.com
My personal website used as a portfolio and gateway to other resources.

## Deployment
Deploy this site using Docker:
- Run `docker-compose -f docker-compose-dev.yml up -d` to deploy this site locally.
- Run `docker-compose up -d` to deploy this site in production.
- Run `docker-compose -f docker-compose-blog.yml up -d` to deploy this site AND the blog in production.

## Laravel (Blog) in a Subfolder
Follow [this guide](https://serversforhackers.com/c/nginx-php-in-subdirectory) to setup the blog in a subfolder.
