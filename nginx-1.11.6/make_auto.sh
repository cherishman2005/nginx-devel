
./configure --prefix=/usr/local/nginx --with-debug --with-http_v2_module --with-stream \
        --with-openssl=/home/nginx/openssl-1.0.2k \
        --add-module=/home/nginx/nginx-1.11.6/add_module/nginx-rtmp-module-master  \
        --add-module=/home/nginx/nginx-1.11.6/add_module/nginx-rtmpt-proxy-module-master \
        --add-module=/home/nginx/nginx-1.11.6/add_module/ngx_http_out_module \
        --add-module=/home/nginx/nginx-1.11.6/add_module/ngx_http_flv_live_module \

 
make  &&  make install

exit 0

