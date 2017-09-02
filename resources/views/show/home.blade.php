
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="MfGWP4yPa4546a47hBdXVN9PjBNzNLWskLcC8HcX">

    <title>Laravel</title>

    <!-- Styles -->
    <link href="http://app.dev/css/app.css" rel="stylesheet">
    <link href="http://app.dev/css/me.css" rel="stylesheet">
    <script>
        window.Laravel={"csrfToken":"MfGWP4yPa4546a47hBdXVN9PjBNzNLWskLcC8HcX"}    </script>
</head>
<body>
<div id="app">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="http://app.dev">
                    Laravel
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    &nbsp;
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @guest
                    <li><a href="http://app.dev/login">Login</a></li>
                    <li><a href="http://app.dev/register">Register</a></li>
                    @else
                        <li>
                            <a href="http://app.dev/user/info"><h4><span class="label label-primary">{{Auth::user()->name}}</span></h4></a>
                        </li>
                        @endguest
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <!-- 略缩图 -->
        <div class="row">
            <Thumbnail title="test" text="test" img="url('http://app.dev/images/jpg/77.jpg')" link="#"></Thumbnail>
            <Thumbnail title="test" text="test" img="url('http://app.dev/images/jpg/308.jpg')" link="#"></Thumbnail>
            <Thumbnail title="test" text="test" img="url('http://app.dev/images/jpg/477.jpg')" link="#"></Thumbnail>
            <Thumbnail title="test" text="test" img="url('http://app.dev/images/jpg/39.jpg')" link="#"></Thumbnail>
            <Thumbnail title="test" text="test" img="url('http://app.dev/images/jpg/149.jpg')" link="#"></Thumbnail>
            <Thumbnail title="test" text="test" img="url('http://app.dev/images/jpg/73.jpg')" link="#"></Thumbnail>
            <Thumbnail title="test" text="test" img="url('http://app.dev/images/jpg/444.jpg')" link="#"></Thumbnail>
            <Thumbnail title="test" text="test" img="url('http://app.dev/images/jpg/13.jpg')" link="#"></Thumbnail>
        </div>


        <!-- 分页-->
        <div class="row">
            <center>
                <nav aria-label="Page navigation">
                    <ul class="pagination">
                        <li>
                            <a href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">6</a></li>
                        <li><a href="#">7</a></li>
                        <li><a href="#">8</a></li>
                        <li><a href="#">9</a></li>
                        <li><a href="#">10</a></li>
                        <li><a href="#">11</a></li>
                        <li>
                            <a href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </center>
        </div>

    </div>
</div>

<!-- Scripts -->
<script src="http://app.dev/js/app.js"></script>
<script>
</script>
</body>
</html>
