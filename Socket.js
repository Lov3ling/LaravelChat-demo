var http=require("http").Server();
var io=require('socket.io')(http);
var Redis=require('ioredis');
var redis=new Redis();
var pub = new Redis();


/*redis.subscribe('news', 'music', function (err, count) {
    // Now we are subscribed to both the 'news' and 'music' channels.
    // `count` represents the number of channels we are currently subscribed to.

    pub.publish('news', 'Hello world!');
    pub.publish('music', 'Hello again!');
});

redis.on('message', function (channel, message) {
    // Receive message Hello world! from channel news
    // Receive message Hello again! from channel music
    console.log('Receive message %s from channel %s', message, channel);
});
*/

redis.subscribe('chat-channel');        // subscribe方法订阅 chat-channel频道   from ChatController@NewMessage

redis.on('message',function (channel,message) {     // on方法监听频道有message时触发回调函数
    console.log(message);

    io.emit('new-channel',message);      /* 发送消息至所有客户端*/
    /* redirect Vue/components/Chat.Vue */
});


http.listen(3000);
