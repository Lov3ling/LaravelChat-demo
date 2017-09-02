@extends('layouts.app')

@section('content')
    <div class="container">
        <!-- 略缩图 -->
        <div class="row">
            @for($i=0;$i<8;$i++)
          <Thumbnail title="test" text="test" img="url('http://app.dev/images/jpg/{{rand(1,500)}}.jpg')" link="#"></Thumbnail>
                @endfor
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
                    @for($i=1;$i<12;$i++)
                    <li><a href="#">{{$i}}</a></li>
                    @endfor
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
@endsection
@section('js')
        <script>
    </script>
    @endsection