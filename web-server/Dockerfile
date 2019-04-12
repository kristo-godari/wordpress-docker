FROM ubuntu:16.04

RUN apt-get update -y
RUN apt-get install software-properties-common python-software-properties -y

RUN LC_ALL=C.UTF-8 add-apt-repository ppa:ondrej/php

# Install dependencies
RUN apt-get update -y
RUN apt-get install -y git \
                       curl \
                       apache2 \
                       php7.3 \
                       libapache2-mod-php7.3 \
                       php7.3-cli \
                       php7.3-common \
                       php7.3-mbstring \
                       php7.3-gd \
                       php7.3-intl \
                       php7.3-xml \
                       php7.3-mysql \
                       php7.3-zip \
                       mysql-client \
                       vim

RUN sed -i 's/session.use_cookies = 1/session.use_cookies = 0/g' /etc/php/7.3/apache2/php.ini
RUN sed -i 's/session.use_only_cookies = 1/ssion.use_only_cookies = 0/g' /etc/php/7.3/apache2/php.ini
RUN sed -i 's/upload_max_filesize = 2M/upload_max_filesize = 500M/g' /etc/php/7.3/apache2/php.ini
RUN sed -i 's/post_max_size = 8M/post_max_size = 550M/g' /etc/php/7.3/apache2/php.ini
RUN sed -i 's/memory_limit = 128M/post_max_size = 1024M/g' /etc/php/7.3/apache2/php.ini

RUN a2enmod rewrite

COPY 000-default.conf /etc/apache2/sites-available/000-default.conf

# Install app
RUN rm -rf /var/www/*

# Configure apache
RUN chown -R www-data:www-data /var/www

ENV APACHE_RUN_USER www-data
ENV APACHE_RUN_GROUP www-data
ENV APACHE_LOG_DIR /var/log/apache2

EXPOSE 80

CMD ["/usr/sbin/apache2ctl", "-D",  "FOREGROUND"]