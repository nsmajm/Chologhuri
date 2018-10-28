@extends('Layout.UserLayout')
@section('title')
    Users
@endsection
@section('css')
    <style>


    </style>


@endsection

@section('mainContent')
    <div class="empty-section" ></div>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-3">
                        <img src="{{asset('profile')}}/{{$users->userInfos->profileImage}}" class="img-thumbnail" alt="">
                    </div>
                    <div class="col-9">
                        <h3 class="about-title profileName">{{ucfirst($users->name)}}</h3>
                        <a href="#">{{$users->userInfos->interestIn}}</a>
                        <br>
                        <br>
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">TimeLine</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">About</a>
                            </li>

                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="title mt-3 profile-links">
                                    <h4>User Posts</h4>
                                </div>
                                @foreach($posts as $post)
                                    {{$post->postTitle}}
                                    {!! str_limit($post->postBody,1000) !!}
                                    <hr>
                                    @endforeach
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                               <div class="title mt-3 profile-links">
                                   <h4>Contact Information</h4>
                               </div>
                                Email : <span class="profile-links mt-2">{{$users->email}}</span> <br>
                                Address : <span class="profile-links mt-2">{{$users->userInfos->address}}</span> <br>
                                Interested Topic : <span class="profile-links mt-1">{{$users->userInfos->interestIn}}</span> <br>
                                Date Of Birth : <span class="profile-links mt-1">{{$users->userInfos->dob}}</span> <br>
                               About Me : <span class="profile-links mt-1">{{$users->userInfos->aboutme}}</span> <br>
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


    </script>
@endsection