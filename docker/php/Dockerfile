FROM php:8.2-fpm-alpine
RUN apk add --no-cache mysql-client msmtp perl wget procps shadow libzip libpng libjpeg-turbo libwebp freetype icu icu-data-full

ARG user
ARG uid

RUN apk add --no-cache --virtual build-essentials \
    icu-dev icu-libs zlib-dev g++ make automake autoconf libzip-dev \
    libpng-dev libwebp-dev libjpeg-turbo-dev freetype-dev && \
    docker-php-ext-configure gd --enable-gd --with-freetype --with-jpeg --with-webp && \
    docker-php-ext-install gd && \
    docker-php-ext-install mysqli && \
    docker-php-ext-install pdo_mysql && \
    docker-php-ext-install intl && \
    docker-php-ext-install opcache && \
    docker-php-ext-install exif && \
    docker-php-ext-install zip && \
    apk del build-essentials && rm -rf /usr/src/php*

# Install Node.js and npm
RUN apk add --no-cache nodejs npm

# Install Composer
RUN wget https://getcomposer.org/composer-stable.phar -O /usr/local/bin/composer && chmod +x /usr/local/bin/composer

# Bring the entrypoint script
COPY ./phpEntrypoint.sh /usr/local/bin/

# Give execution permissions
RUN chmod +x /usr/local/bin/phpEntrypoint.sh

# Create system user to run Composer and Artisan Commands
RUN if [ "$uid" -ne 0 ]; then \
    useradd -G www-data,root -u $uid -d /home/$user $user && \
    mkdir -p /home/$user/.composer && \
    chown -R $user:$user /home/$user; \
    fi

# Start the entrypoint script
ENTRYPOINT ["/usr/local/bin/phpEntrypoint.sh"]

CMD ["php-fpm"]
