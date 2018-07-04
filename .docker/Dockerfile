FROM ubuntu:14.04

LABEL maintainer="Geros valios projektai"

#RUN apt-get -yqq update \
#    && apt-get -yqq install \
#    apache2 \
#    libapache2-mod-php5 \
#    php5 \
#    php5-mysql \
#    php5-mcrypt \
#    php5-suhosin \
#    && a2enmod rewrite

COPY . /var/www/aukok/aukokdaiktus.lt/
WORKDIR /var/www/aukok/aukokdaiktus.lt/

RUN apt-get -yqq update \
    && apt-get -yqq install \
    nginx \
    mysql-server-5.6 \
    php5-fpm \
    php5-cli \
    php5-mysqlnd \
    php5-apcu \
    php5-curl \
    php5-gd \
    php5-intl \
    php5-xmlrpc \
    && mkdir -p /home/aukok \
    # /home/aukok/www -> /var/www/aukok
    && ln -sf /var/www/aukok /home/aukok/www

COPY .docker/nginx /etc/nginx/
COPY .docker/mysql /etc/mysql/
COPY .docker/php5 /etc/php5/

CMD ["nginx", "-g", "daemon off;"]
#CMD ["php5-fpm", "-g", "daemon off;"]

#RUN service nginx restart \
#    && service php5-fpm restart

# \
#    && apt-get -yqq install \
##apache2 \
#    nginx \
#    mysql-server \
#    php5-fpm \
#    php5-mysql \
#    php5-mcrypt \
#    && mysql_install_db \
#    && chown -R www-data:www-data /home/aukok/www/aukokdaiktus.lt \
#    && service nginx restart \
#    && service php5-fpm restart

#COPY docker/apache2 /etc/
#COPY .docker/mysql /etc/
#COPY .docker/nginx /etc/
#COPY .docker/php5 /etc/
#COPY docker/php/php.ini /usr/local/etc/php/

