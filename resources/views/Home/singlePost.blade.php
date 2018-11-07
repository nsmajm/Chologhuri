@extends('Layout.HomeLayout')
@section('post-body')

       <div class="row">
          <div class="col-2" style="border: 4px solid #efefef;">
              Left Sidebar
          </div>
          <div class="col-8">
              <div class="post-title">
                  <div class="card-title text-center">
                      <h2>{{$singlePost->postTitle}}</h2>
                      <p>{{$singlePost->created_at}}</p>
                  </div>
              </div>
              <div class="header-img ">
                  <img  class="img-responsive ml-lg-5" src="{{asset('orginal/')}}/{{$singlePost->postThumbnail}}" alt="">
              </div>
              <div class="post-body mt-5">
                  <div   style="padding: 20px">
                      {!! $singlePost->postBody !!}
                  </div>
              </div>
          </div>
          <div class="col-2" style="border: 4px solid #efefef;">
              Right SIdebar
          </div>
       </div>

    @endsection