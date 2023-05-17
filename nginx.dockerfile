FROM nginx:stable-alpine

ADD ./nginx/default.conf /etc/nginx/conf.d/default.conf
#ADD ./nginx/certs /etc/nginx/certs/self-signed

RUN mkdir -p /var/www/html
RUN mkdir -p /var/www/html/highcharts
RUN mkdir -p /var/www/html/upload
