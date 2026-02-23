FROM httpd:2.4.66

RUN sed  -i \
	-e 's/#LoadModule proxy_module/LoadModule proxy_module/' \
	-e 's/#LoadModule proxy_fcgi_module/LoadModule proxy_fcgi_module/' \
        -e 's/#LoadModule rewrite__module/LoadModule rewrite__module/' \
	/usr/local/apache2/conf/httpd.conf 


RUN mkdir -p /usr/local/apache2/conf/custom_conf/

COPY httpd/httpd.conf /usr/local/apache2/conf/custom_conf/httpd.conf

RUN mkdir -p /var/www/html/

COPY app/ /var/www/html/

RUN chown -R www-data:www-data /var/www/html  \
	&& chmod -R 755 /var/www/html

RUN echo "Include conf/custom_conf/httpd.conf" >> /usr/local/apache2/conf/httpd.conf
