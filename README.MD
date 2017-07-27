# 工具平台黄页
该平台主要起一个工具平台黄页的作用

# 项目技术历程
参见TECHNOLOGY.MD

## 本地运行环境要求
* PHP > 7.0 
* Nginx
* composer > 1.1.0

## 本地运行
* checkout code to work folder
* cd project folder
* copy .env.example to .env 修改你自己的mongo数据库和ldap服务器连接
* run `composer install`
* run `php artisan key:generate`

## nginx config

```
server {
    listen 80;
    server_name itools.mater.io;
    access_log logs/itools.mater.io.access.log;
    error_log logs/itools.mater.io.error.log;
    root /home/op/app/www/itools/public;
    index index.php;

    location / {
        try_files $uri $uri/ /index.php?$query_string;
    }

    location ~ .*\.(php|php5)?$ {
         fastcgi_split_path_info ^(.+\.php)(/.+)$;
         fastcgi_pass 127.0.0.1:9000;
         fastcgi_index index.php;
         include fastcgi_params;
         fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
         fastcgi_intercept_errors off;
         fastcgi_buffer_size 16k;
         fastcgi_buffers 4 16k;
    }

    location ~ .*\.(gif|jpg|jpeg|png|bmp|swf|flv|ico)$ {
        expires 30d;
        access_log off;
    }

    location ~ .*\.(js|css)?$ {
        expires 7d;
        access_log off;
    }

    location ~* ^.+\.(eot|ttf|otf|woff|svg)$ {
        access_log   off;
        expires max;
    }
}
```
* change localhost > 127.0.0.1 itools.mater.io
* visit http://itools.mater.io

## 特殊说明
该平台衍生自公司内部的工具黄页，连接了公司的LDAP服务器，这样就统一了公司内账号，每个人都只有唯一的一套账号，如果你没有ldap服务器，或者只是自己本地搭建玩一玩，可以编辑 /config/adldap.php， 将auto_connect 改为false，参见 `https://github.com/Adldap2/Adldap2-Laravel/blob/master/docs/auth/fallback.md#developing-locally-without-an-ad-connection`  同时生成对应的user信息，前提是你已经在搭建好了mongo数据库，同时在.env中配置好了对应的mongo连接。

### 如何生成自己的账号信息
编辑 database/seeds/UsersTableSeeder.php 文件 对应修改账号，密码， 在命令行项目目录下执行 `php artisan db:seed --class=UsersTableSeeder` 会在对应数据库生成相应用户信息

### 如何添加工具集
编辑 database/seeds/ToolsTableSeeder.php 文件 对应修改平台描述， 在命令行项目目录下执行 `php artisan db:seed --class=ToolsTableSeeder` 会在对应数据库生成相应平台信息
