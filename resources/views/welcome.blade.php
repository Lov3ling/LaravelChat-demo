<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <script src="https://cdn.bootcss.com/socket.io/2.0.3/socket.io.js"></script>

        <!-- Fonts -->

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height" id="app">


            <div class="content">
                <div class="title m-b-md" v-for="ate in name">
                    @{{ate}}
                </div>

                <div class="links">
                </div>
            </div>
        </div>
    </body>
    <script src="https://cdn.bootcss.com/vue/2.4.2/vue.js"></script>
<script>
    var socket=new io('192.168.10.10:3000');
    var app=new Vue({
        el : "#app",
        data:{
            name:[]
        },
        mounted:function(){
            socket.on('new-channel',(data)=>{
                console.log(data);
            app.name.push(data);
        });
        }
    });

</script>
</html>
