<template>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Chat<p style="float: right;color: darkred">聊天记录</p></div>

                    <div class="panel-body" style="min-height: 400px" id="pannel">

                        <div class="col-md-12 col-md-offset-0">
                            <div class="row">
                                <!--循环出会话消息-->
                                <div v-for="session in sessions">

                                    <!-- 判断消息来源 决定左侧还是右侧 -->
                                    <div class="row me" style="" v-if="session.user==author">

                                        <div class="col-md-1"></div>

                                        <div class="col-md-10 me" role="alert" style="word-break: break-all;direction:rtl;">

                                            <div style="text-align: left;float: right;" class="well well-sm">
                                                {{session.msg}}
                                            </div>

                                        </div>
                                        <img :src="session.avatar" class="col-md-1"style="float: right">
                                    </div>

                                        <!-- 不是当前用户放入左侧-->
                                    <div class="row other" style="" v-else>
                                        <img :src="session.avatar" class="col-md-1">
                                        <div class="col-md-10 other" role="alert" style="word-break: break-all;direction: ltr">
                                            <div class="well well-sm" style="text-align: left;float: left;">
                                                {{session.msg}}
                                            </div>
                                        </div>
                                        <div class="col-md-1"></div>
                                    </div>

                                </div>



                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import $ from 'jquery'
    export default {
        mounted() {
            var vm=this;
            var socket=new io('192.168.10.10:3000');            //绑定io端口 from Sokect.js

            socket.on('new-channel',function (data) {           //监听新消息  from Socket.js
                //console.log(data);

                var newdata=JSON.parse(data);                   // 格式化数据

                vm.sessions.push(newdata);                      // 写入数组

                console.log(vm.sessions);

                /*console.log(parseInt($('#pannel').css('height')));        //获取聊天面板高度 */

                if(parseInt($('#pannel').css('height'))>450){          //解决消息太长造成div高度

                    var log=vm.sessions.splice(0,1);                // 删除顶部消息

                    vm.logs.push(log);                              // 顶部消息加入历史记录
                }
            })
        },
        props:[
            "author"                            /* 获取当前用户 */
        ],
        data(){
            return{
                sessions:[          //当前窗口消息
                    {msg:"welcome to chat",user:null,avatar:"http://app.dev/default.jpg"},
                ],

                logs:[          //消息记录
                ]
            }
        },
        created(){
                //this.sessions.push({msg:"welcome to chat",user:null,avatar:"http://app.dev/default.jpg"})       /*发送欢迎消息*/
        },
        methods:{

        },
        computed:{

        }
    }
</script>
<style>
    div.me{
        word-break: break-all;direction:rtl;
    }
    div.other{
        word-break: break-all;direction: ltr
    }
</style>
