@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Chat</div>

                    <div class="panel-body" style="">

                        <div class="col-md-12 col-md-offset-0">
                            <div class="row">


                                <div class="row" style="">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-10" role="alert" style="word-break: break-all;direction:rtl;">
                                        <div style="text-align: left;float: right;" class="well well-sm">
                                             妈的傻逼
                                        </div>
                                    </div>
                                    <img src="{{asset('default.jpg')}}" class="col-md-1"style="float: right">
                                </div>

                                <div class="row" style="float: left">
                                    <img src="{{asset('default.jpg')}}" class="col-md-1">
                                    <div class="col-md-10" role="alert" style="word-break: break-all;text-align: left">
                                        <div class="well well-sm">
                                            妈的智障{{str_random(200)}}
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
@endsection
@section('js')
@endsection