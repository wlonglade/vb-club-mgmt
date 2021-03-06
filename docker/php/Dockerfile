FROM php:7.2-fpm

# install the PHP extensions we need
RUN set -ex; \
	\
	apt-get update; \
	apt-get install -y \
		libjpeg-dev \
		libpng-dev \
        libmcrypt-dev \
        ssmtp \
	; \
	rm -rf /var/lib/apt/lists/*; \
	\
	docker-php-ext-configure gd --with-png-dir=/usr --with-jpeg-dir=/usr; \
	docker-php-ext-install gd mbstring opcache pdo_mysql json; \
    pecl install -o -f xdebug redis mcrypt\
        && rm -rf /tmp/pear \
        && docker-php-ext-enable xdebug redis mcrypt;
# TODO consider removing the *-dev deps and only keeping the necessary lib* packages

# set recommended PHP.ini settings
# see https://secure.php.net/manual/en/opcache.installation.php
RUN { \
		echo 'opcache.memory_consumption=128'; \
		echo 'opcache.interned_strings_buffer=8'; \
		echo 'opcache.max_accelerated_files=4000'; \
		echo 'opcache.revalidate_freq=2'; \
		echo 'opcache.fast_shutdown=1'; \
		echo 'opcache.enable_cli=1'; \
	} > /usr/local/etc/php/conf.d/opcache-recommended.ini

RUN { \
        echo '[xdebug]'; \
        echo 'xdebug.default_enable = 0'; \
        echo 'xdebug.remote_enable = 1'; \
        echo 'xdebug.remote_connect_back=1'; \
        echo 'xdebug.remote_port=9001'; \
        echo ';xdebug.remote_log = /tmp/xdebug.log'; \
        echo 'xdebug.remote_handler=dbgp'; \
        echo 'xdebug.idekey = PHPSTORM'; \
    } >> /usr/local/etc/php/conf.d/xdebug.ini


RUN { \
        echo 'error_reporting  =  E_ALL'; \
        echo 'log_errors = On'; \
        echo 'display_errors = Off'; \
        echo 'include_path = ".:/usr/share/php:/usr/local/apache2/htdocs/ws_engine"'; \
    } > /usr/local/etc/php/php.ini

CMD ["php-fpm"]
EXPOSE 9000
