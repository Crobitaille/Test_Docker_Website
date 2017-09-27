## This Dockerfile is used for the tsgsp.website.api container
## It is a base php7 image with apache with some added packages for making 
## php + mysql interfacing


#Grab the php:7-apache image
FROM php:7-apache

#Install mysql interface packages
RUN apt-get update \
  && apt-get install -y --no-install-recommends libpq-dev \
  && docker-php-ext-install mysqli pdo_pgsql pdo_mysql
