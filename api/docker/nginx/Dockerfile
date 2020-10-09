ARG NGINX_VERSION=1.15

FROM nginx:${NGINX_VERSION}-alpine AS api_platform_nginx

COPY docker/nginx/conf.d/default.conf /etc/nginx/conf.d/default.conf

COPY . ./
