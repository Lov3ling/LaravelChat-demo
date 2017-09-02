@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">User Info</div>

                    <div class="panel-body">
                        <imgupload avatar="{{$user->avatar}}"></imgupload>

                        <div class="col-md-8 col-md-offset-2">

                            <div class="row" style="word-break: break-all">

                                <table class="table">
                                    <td></td>
                                </table>

                                <form class="form-horizontal" method="post" onsubmit="return false">
                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="name" placeholder="{{Auth::user()->name}}" value="{{Auth::user()->name}}">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Phone</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="phone" placeholder="{{Auth::user()->phone}}" value="{{Auth::user()->phone}}">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Register</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" value="{{Auth::user()->created_at}}" readonly>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Email</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" placeholder="{{Auth::user()->email}}" value="{{Auth::user()->email}}" readonly>
                                        </div>
                                        <div class="col-sm-2"><button class="btn btn-info">修改绑定</button></div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-sm-offset-10 col-sm-2">
                                            <button class="btn btn-success" onclick="UpdateConfig()">保存修改</button>
                                        </div>
                                    </div>



                                </form>

                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script>
        function UpdateConfig(){
            var name=$('#name').val();
            var phone=$("#phone").val();
            axios.post('/user/update/info',{
                name:name,
                phone:phone,
                _token:Laravel.csrfToken
            }).then(res=>{
                alert(res.data);
            }).catch((error)=>{
                console.error(error)
                alert("Update Fail")
            })
        }
    </script>
    @endsection
