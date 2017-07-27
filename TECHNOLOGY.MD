# 工具平台黄页项目历程

该项目在开发过程中有几个milestone里程碑记录如下

* 项目切换mongo数据库来做默认连接。   

见： https://github.com/jenssegers/laravel-mongodb

需要额外操作的

/database/seeds/DatabaseSeeder.php

AppServiceProvider.php

`php artisan make:auth`

* 项目使用LDAP作为账号认证。   完成adldap2/adldap2-laravel的接入。

见： https://github.com/Adldap2/Adldap2-Laravel

需要额外操作的

.env 中添加 ldap 相关的配置项

/config/adldap.php 和 /config/adldap_auth.php 均有修改
/config/adldap.php 添加  'admin_account_prefix' => env('ADLDAP_ADMIN_ACCOUNT_PREFIX', ''),

/config/adldap_auth.php 中 将 scopes 里边的内容注释掉 或者修改本地（此种方法不推荐，写出来是为了让大家知道咋回事，这个方法在查询语句filter中添加了一个过滤条件，导致我们查询不到内容）
/vendor/adldap2/adldap2-laravel/src/Scopes/UpnScope.php 中 将 $builder->whereHas($builder->getSchema()->userPrincipalName());  这一句注释掉

filter中添加的查询条件是：(见第二条)

```
SRCH base="dc=ldap,dc=dingfudata,dc=com" scope=2 deref=0 filter="(&(objectClass=inetOrgPerson)(uid=materliu))"
591e645d conn=16616 op=1 SEARCH RESULT tag=101 err=0 nentries=1 text=

SRCH base="dc=ldap,dc=dingfudata,dc=com" scope=2 deref=0 filter="(&(objectClass=inetOrgPerson)(?userprincipalname=*)(uid=materliu))"
591e6495 conn=16618 op=1 SEARCH RESULT tag=101 err=0 nentries=0 text=

```

* 工具平台类项目前端脚手架     前端项目脚手架完成。所有的工具平台都可以从这里checkout开始搞。

