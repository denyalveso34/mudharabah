FROM alpine:latest

# Setup document root
WORKDIR /var/www/html

# Install packages and remove default server definition
RUN apk add --no-cache \
  curl \
  nginx \
  php81 \
  php81-ctype \
  php81-curl \
  php81-dom \
  php81-fpm \
  php81-gd \
  php81-intl \
  php81-json \
  php81-mbstring \
  php81-opcache \
  php81-openssl \
  php81-mysqli \
  php81-phar \
  php81-session \
  php81-tokenizer \
  php81-xml \
  php81-xmlreader \
  php81-zip \
  supervisor

# Configure nginx
COPY config/nginx.conf /etc/nginx/nginx.conf

# Configure PHP-FPM
COPY config/fpm-pool.conf /etc/php81/php-fpm.d/www.conf
COPY config/php.ini /etc/php81/conf.d/custom.ini

# Configure supervisord
COPY config/supervisord.conf /etc/supervisor/conf.d/supervisord.conf

# Initial startScript
COPY startScript.sh /usr/local/bin/startScript.sh
RUN chmod +x /usr/local/bin/startScript.sh
RUN dos2unix /usr/local/bin/startScript.sh

# Create non-root user
RUN set -x ; \
  addgroup -g 1000 -S www-data ; \
  adduser -u 1000 -D -S -G www-data www-data && exit 0 ; exit 1

# Make sure files/folders needed by the processes are accessable when they run under the www-data user
RUN chown -R www-data.www-data /var/www/html /run /var/lib/nginx /var/log/nginx

# Switch to use a non-root user from here on
USER www-data

# Add application
COPY --chown=www-data . /var/www/html/

# Expose the port nginx is reachable on
EXPOSE 8080

# Codeigniter .env file generator, let supervisord start nginx & php-fpm
ENTRYPOINT ["startScript.sh"]

# Configure a healthcheck to validate that everything is up&running
HEALTHCHECK --timeout=10s CMD curl --silent --fail http://127.0.0.1:8080/fpm-ping
