FROM httpd:2.4.66

RUN sed  -i \
	-e 's/#LoadModule proxy_module/LoadModule proxy_module/' \
	-e 's/#LoadModule proxy_fcgi_module/LoadModule proxy_fcgi_module/' \
        -e 's/#LoadModule rewrite__module/LoadModule rewrite__module/' \
	/usr/local/apache2/conf/httpd.conf 


RUN mkdir -p /usr/local/apache2/conf/custom_conf/

COPY ./httpd.conf /usr/local/apache2/conf/custom_conf/httpd.conf

RUN echo "Include conf/custom_conf/httpd.conf" >> /usr/local/apache2/conf/httpd.conf
