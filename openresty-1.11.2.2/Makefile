.PHONY: all install clean

all:
	cd /home/nginx/openresty-1.11.2.2/build/LuaJIT-2.1-20161104 && $(MAKE) TARGET_STRIP=@: CCDEBUG=-g Q= XCFLAGS='-DLUAJIT_ENABLE_LUA52COMPAT -DLUA_USE_APICHECK -DLUA_USE_ASSERT' CC=cc PREFIX=/usr/local/openresty/luajit
	cd /home/nginx/openresty-1.11.2.2/build/lua-cjson-2.1.0.4 && $(MAKE) DESTDIR=$(DESTDIR) LUA_INCLUDE_DIR=/home/nginx/openresty-1.11.2.2/build/luajit-root/usr/local/openresty/luajit/include/luajit-2.1 LUA_CMODULE_DIR=/usr/local/openresty/lualib LUA_MODULE_DIR=/usr/local/openresty/lualib CJSON_CFLAGS="-g -O -fpic" CC=cc
	cd /home/nginx/openresty-1.11.2.2/build/lua-redis-parser-0.12 && $(MAKE) DESTDIR=$(DESTDIR) LUA_INCLUDE_DIR=/home/nginx/openresty-1.11.2.2/build/luajit-root/usr/local/openresty/luajit/include/luajit-2.1 LUA_LIB_DIR=/usr/local/openresty/lualib CFLAGS="-g -O -Wall" CC=cc
	cd /home/nginx/openresty-1.11.2.2/build/lua-rds-parser-0.06 && $(MAKE) DESTDIR=$(DESTDIR) LUA_INCLUDE_DIR=/home/nginx/openresty-1.11.2.2/build/luajit-root/usr/local/openresty/luajit/include/luajit-2.1 LUA_LIB_DIR=/usr/local/openresty/lualib CFLAGS="-g -O -Wall" CC=cc
	cd /home/nginx/openresty-1.11.2.2/build/nginx-1.11.2 && $(MAKE)

install: all
	cd /home/nginx/openresty-1.11.2.2/build/LuaJIT-2.1-20161104 && $(MAKE) install TARGET_STRIP=@: CCDEBUG=-g Q= XCFLAGS='-DLUAJIT_ENABLE_LUA52COMPAT -DLUA_USE_APICHECK -DLUA_USE_ASSERT' CC=cc PREFIX=/usr/local/openresty/luajit DESTDIR=$(DESTDIR)
	cd /home/nginx/openresty-1.11.2.2/build/lua-cjson-2.1.0.4 && $(MAKE) install DESTDIR=$(DESTDIR) LUA_INCLUDE_DIR=/home/nginx/openresty-1.11.2.2/build/luajit-root/usr/local/openresty/luajit/include/luajit-2.1 LUA_CMODULE_DIR=/usr/local/openresty/lualib LUA_MODULE_DIR=/usr/local/openresty/lualib CJSON_CFLAGS="-g -O -fpic" CC=cc
	cd /home/nginx/openresty-1.11.2.2/build/lua-redis-parser-0.12 && $(MAKE) install DESTDIR=$(DESTDIR) LUA_INCLUDE_DIR=/home/nginx/openresty-1.11.2.2/build/luajit-root/usr/local/openresty/luajit/include/luajit-2.1 LUA_LIB_DIR=/usr/local/openresty/lualib CFLAGS="-g -O -Wall" CC=cc
	cd /home/nginx/openresty-1.11.2.2/build/lua-rds-parser-0.06 && $(MAKE) install DESTDIR=$(DESTDIR) LUA_INCLUDE_DIR=/home/nginx/openresty-1.11.2.2/build/luajit-root/usr/local/openresty/luajit/include/luajit-2.1 LUA_LIB_DIR=/usr/local/openresty/lualib CFLAGS="-g -O -Wall" CC=cc
	cd /home/nginx/openresty-1.11.2.2/build/lua-resty-dns-0.18 && $(MAKE) install DESTDIR=$(DESTDIR) LUA_LIB_DIR=/usr/local/openresty/lualib INSTALL=/home/nginx/openresty-1.11.2.2/build/install
	cd /home/nginx/openresty-1.11.2.2/build/lua-resty-memcached-0.14 && $(MAKE) install DESTDIR=$(DESTDIR) LUA_LIB_DIR=/usr/local/openresty/lualib INSTALL=/home/nginx/openresty-1.11.2.2/build/install
	cd /home/nginx/openresty-1.11.2.2/build/lua-resty-redis-0.26 && $(MAKE) install DESTDIR=$(DESTDIR) LUA_LIB_DIR=/usr/local/openresty/lualib INSTALL=/home/nginx/openresty-1.11.2.2/build/install
	cd /home/nginx/openresty-1.11.2.2/build/lua-resty-mysql-0.17 && $(MAKE) install DESTDIR=$(DESTDIR) LUA_LIB_DIR=/usr/local/openresty/lualib INSTALL=/home/nginx/openresty-1.11.2.2/build/install
	cd /home/nginx/openresty-1.11.2.2/build/lua-resty-string-0.09 && $(MAKE) install DESTDIR=$(DESTDIR) LUA_LIB_DIR=/usr/local/openresty/lualib INSTALL=/home/nginx/openresty-1.11.2.2/build/install
	cd /home/nginx/openresty-1.11.2.2/build/lua-resty-upload-0.10 && $(MAKE) install DESTDIR=$(DESTDIR) LUA_LIB_DIR=/usr/local/openresty/lualib INSTALL=/home/nginx/openresty-1.11.2.2/build/install
	cd /home/nginx/openresty-1.11.2.2/build/lua-resty-websocket-0.06 && $(MAKE) install DESTDIR=$(DESTDIR) LUA_LIB_DIR=/usr/local/openresty/lualib INSTALL=/home/nginx/openresty-1.11.2.2/build/install
	cd /home/nginx/openresty-1.11.2.2/build/lua-resty-lock-0.04 && $(MAKE) install DESTDIR=$(DESTDIR) LUA_LIB_DIR=/usr/local/openresty/lualib INSTALL=/home/nginx/openresty-1.11.2.2/build/install
	cd /home/nginx/openresty-1.11.2.2/build/lua-resty-lrucache-0.04 && $(MAKE) install DESTDIR=$(DESTDIR) LUA_LIB_DIR=/usr/local/openresty/lualib INSTALL=/home/nginx/openresty-1.11.2.2/build/install
	cd /home/nginx/openresty-1.11.2.2/build/lua-resty-core-0.1.9 && $(MAKE) install DESTDIR=$(DESTDIR) LUA_LIB_DIR=/usr/local/openresty/lualib INSTALL=/home/nginx/openresty-1.11.2.2/build/install
	cd /home/nginx/openresty-1.11.2.2/build/lua-resty-upstream-healthcheck-0.04 && $(MAKE) install DESTDIR=$(DESTDIR) LUA_LIB_DIR=/usr/local/openresty/lualib INSTALL=/home/nginx/openresty-1.11.2.2/build/install
	cd /home/nginx/openresty-1.11.2.2/build/lua-resty-limit-traffic-0.01 && $(MAKE) install DESTDIR=$(DESTDIR) LUA_LIB_DIR=/usr/local/openresty/lualib INSTALL=/home/nginx/openresty-1.11.2.2/build/install
	cd /home/nginx/openresty-1.11.2.2/build/opm-0.0.2 && /home/nginx/openresty-1.11.2.2/build/install bin/* $(DESTDIR)/usr/local/openresty/bin/
	cd /home/nginx/openresty-1.11.2.2/build/resty-cli-0.16 && /home/nginx/openresty-1.11.2.2/build/install bin/* $(DESTDIR)/usr/local/openresty/bin/
	cp /home/nginx/openresty-1.11.2.2/build/resty.index $(DESTDIR)/usr/local/openresty/
	cp -r /home/nginx/openresty-1.11.2.2/build/pod $(DESTDIR)/usr/local/openresty/
	cd /home/nginx/openresty-1.11.2.2/build/nginx-1.11.2 && $(MAKE) install DESTDIR=$(DESTDIR)
	mkdir -p $(DESTDIR)/usr/local/openresty/site/lualib $(DESTDIR)/usr/local/openresty/site/pod $(DESTDIR)/usr/local/openresty/site/manifest
	ln -sf /usr/local/openresty/nginx/sbin/nginx $(DESTDIR)/usr/local/openresty/bin/openresty

clean:
	rm -rf build
