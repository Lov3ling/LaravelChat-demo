# LaravelChat-demo

**基于Laravel Vue和Redis的在线聊天室Demo**

## Install

拉取代码安装依赖
```
git clone https://github.com/Lov3ling/LaravelChat-demo.git

yarn install

composer update
```
还需要为laravel配置redis连接 

### run socket server
启动Weboscket服务器
```
node Socket.js
```
启动http服务器
```
php artisan serve
```
