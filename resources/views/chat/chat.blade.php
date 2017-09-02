@extends('layouts.app')

@section('content')
<chat author="{{Auth::user()->name}}"></chat>
    <div class="container-fluid">
      <div class="row">
          <div class="col-md-8 col-md-offset-2">
             <div class="panel-default panel">
                 <div class="panel panel-body">
                     <form onsubmit="return false" action="/chat/post" method="post">
                         <div class="form-group">
                             <input class="form-control" style="height: 50px" id="msg" autocomplete="off" >
                             <button class="btn btn-success" style="float: right" onclick="send()">发送</button>
                         </div>
                     </form>
                </div>
          </div>
      </div>
    </div>
    </div>
@endsection
@section('js')
    <script>
        function send() {
            var message=$("#msg").val();
            console.log(message);
            axios.post('/chat/post',{
                msg:message,
                _token:Laravel.csrfToken
            }).then((data)=>{
                console.log(data.data);
            }).catch((error)=>{
                console.error(error);
            });
            $("#msg").val("");
        }
    </script>
@endsection