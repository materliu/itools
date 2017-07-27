#!/bin/sh
cp .env.example .env
if [ $? != 0 ];then
    echo "cp .env.example .env fail"
    exit -1
fi
composer install
# if [ $? != 0 ];then
#     echo "composer install fail"
#     exit -1
# fi
#php artisan key:generate
# if [ $? != 0 ];then
#    echo "php artisan key:generate fail"
#    exit -1
# fi
npm install
if [ $? != 0 ];then
    echo "npm install fail"
    exit -1
fi
npm run production
if [ $? != 0 ];then
    echo "npm run production fail"
    exit -1
fi
git log -1 --pretty=%h > gitversion
function modify_chmod() {
  chmod 777 * -R
  chmod 777 .* -R
}
function pack() {
   tar -zcf build.tar.gz  * .[!.]*
}
modify_chmod
pack
