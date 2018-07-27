## LaravelChat-demo

**基于Laravel Vue和Redis的在线聊天室Demo**

### Install

拉取代码并安装依赖

```
git clone https://github.com/Lov3ling/LaravelChat-demo.git

yarn install

composer update
```
还需要为laravel配置redis连接 

注册需邮箱验证  请在env文件中增加邮箱配置 或自行修改RegisterController中的邮箱验证


### run socket server

启动Weboscket服务器

```
node Socket.js
```
启动http服务器 
```
php artisan serve
```

访问`http://127.0.0.1:8000/chat` 进入聊天室


 
 
### 效果预览

![预览](http://otn8b2ie2.bkt.clouddn.com/chat.png)
