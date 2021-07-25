FROM ubuntu:18.04

MAINTAINER jhyeon <stjhyeon@kakao.com>

ENV DEBIAN_FRONTEND=noninteractive

RUN apt-get clean
RUN apt-get update -y
RUN apt-get install apache2 -y
RUN apt-get install php php-mysqli php-gd -y
RUN apt-get install libapache2-mod-php -y

COPY ./apache2.conf /etc/apache2/apache2.conf

ENV APACHE_RUN_USER www-data
ENV APACHE_RUN_GROUP www-data

EXPOSE 8018

CMD ["/usr/sbin/apache2ctl", "-D", "FOREGROUND"]