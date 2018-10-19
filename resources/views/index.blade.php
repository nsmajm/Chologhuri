@extends('Layout.HomeLayout')

@section('content')
    @include('Home.Slider')
@endsection

@section('post-body')


<div class="container-fluid main-postbody">
        <div class="row">
             {{--<div class="col-2">--}}
                {{--@include('Home.Sidebar')--}}
             {{--</div>--}}
             <div class="col-12">
                    @include('Home.blogpost') 
             </div>
             {{--<div class="col-2">--}}
                    {{--@include('Home.Sidebar')--}}
             {{--</div>--}}
        </div>
    </div>
@endsection


@section('title')
   Cholo Ghuri | Lets Travel Bangladesh
@endsection