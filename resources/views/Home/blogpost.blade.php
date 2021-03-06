
    <section class="fetures-area pt-80 pb-100 mb-5">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 pb-70 mb-5">
                    <div class="section-title">
                        <div class="title">
                            <h2>Latest Post</h2>
                        </div>
                        <div class="more">
                            <a href="#">More <i class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-xl-6 col-lg-6">
                    @foreach($blogPostfirst as $post)

                    <div class="post-wrapeer">

                        <div class="card">

                            <div class="post-thumb position-a">
                                <a href="{{route('singlePost.show',[$post->slug])}}"></a>
                                <img class="card-img-top" src="{{asset('thumbnail/')}}/{{$post->postThumbnail}}" alt="post">
                                <a href="#" class="tag tag-orange">Lifestyle</a>
                            </div>
                            <div class="post-content">
                                <div class="card-body padding-30">
                                    <h3><a href="{{route('singlePost.show',[$post->slug])}}">{{$post->postTitle}}</a></h3>
                                    <p>{!!str_limit($post->postBody, 300) !!}
                                    <div class="author-info d-flex align-items-center">
                                        <img src="{{asset('profile/')}}/{{\App\Model\UserInfo::where('user_id',$post->user_id)->first()->profileImage}}"
                                             width="69px" height="69px" style="border-radius: 69px" alt="author">
                                        <div class="author-name">
                                            <h5><a href="#">{{\App\User::where('id',$post->user_id)->first()->name}}</a></h5>
                                            <span>{{$post->created_at->diffForHumans()}}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="post-meta">
                                    <div class="left f-left">
                                        <form action="#" method="post">
                                            <input type="hidden" name="reaction">
                                            <button style="background: none;color: inherit;border: none;padding: 0;font: inherit;cursor: pointer;outline: inherit;"
                                                    type="submit"><span class="lnr lnr-heart"> </span></button>110
                                        </form>
                                        <a href="#"><span class="lnr lnr-bubble"></span>
                                            {{\App\Http\Controllers\CommentController::countComments($post->id)}}
                                        </a>
                                        <a href="#"><span class="lnr lnr-eye"></span>300</a>
                                    </div>
                                    <div class="right f-right">
                                        <a href="#"><span class="lnr lnr-bookmark"></span></a>
                                        <a href="#"><span class="fas fa-share-alt"></span></a>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                    @endforeach
                </div>
                <div class="col-xl-6 col-lg-6">
            @foreach($takeSecond as $takeOne)
                    <div class="post-wrapeer post-small post-border mb-30">
                        <div class="row">
                            <div class="col-xl-5 col-lg-5 col-md-5 pr-0 pr-xs-15">
                                <div class="post-thumb">
                                    <img src="{{asset('thumbnail/')}}/{{$takeOne->postThumbnail}}" class="img-fluid" alt="">
                                </div>
                            </div>
                            <div class="col-xl-7 col-lg-7 col-md-7 pl-0 pl-xs-15">
                                <div class="post-content">
                                    <div class="post-content-wrap">
                                        <a href="#" class="tag tag-red">
                                            {{\App\Http\Controllers\CategoryController::getCategoryName($takeOne->category_id)}}
                                        </a>
                                        <h3 class="mb-10"><a href="{{route('singlePost.show',[$takeOne->slug])}}">{{$takeOne->postTitle}}</a></h3>

                                        <div class="author-info d-flex align-items-center sm-margin">
                                            <img src="{{asset('profile/')}}/{{\App\Model\UserInfo::where('user_id',$post->user_id)->first()->profileImage}}"
                                                 width="69px" height="69px" style="border-radius: 69px" alt="author">
                                            <div class="author-name">
                                                <h5><a href="#">{{\App\User::where('id',$takeOne->user_id)->first()->name}}</a></h5>
                                                <span>{{$takeOne->created_at->diffForHumans()}}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="post-meta">
                                        <div class="left f-left">
                                            <form action="#" method="post">
                                                <input type="hidden" name="reaction">
                                                <button style="background: none;color: inherit;border: none;padding: 0;font: inherit;cursor: pointer;outline: inherit;"
                                                        type="submit"><span class="lnr lnr-heart"> </span></button>110
                                            </form>
                                            <a href="#"><span class="lnr lnr-bubble"></span>
                                                {{\App\Http\Controllers\CommentController::countComments($takeOne->id)}}
                                            </a>
                                            <a href="#"><span class="lnr lnr-eye"></span>300</a>
                                        </div>
                                        <div class="right f-right">
                                            <a href="#"><span class="lnr lnr-bookmark"></span></a>
                                            <a href="#"><span class="fas fa-share-alt"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                @if (count($takeThird) !=0)


                   @foreach($takeThird as $thirdPost)

                    <div class="post-wrapeer post-small post-border">
                        <div class="row">
                            <div class="col-xl-5 col-lg-5 col-md-5 pr-0 pr-xs-15">
                                <div class="post-thumb">
                                    <img src="{{asset('thumbnail/')}}/{{$thirdPost->postThumbnail}}" class="img-fluid" alt="">
                                </div>
                            </div>
                            <div class="col-xl-7 col-lg-7 col-md-7 pl-0 pl-xs-15">
                                <div class="post-content">
                                    <div class="post-content-wrap">
                                        <a href="#" class="tag tag-green">
                                            {{\App\Http\Controllers\CategoryController::getCategoryName($thirdPost->category_id)}}
                                        </a>
                                        <h3 class="mb-10"><a href="{{route('singlePost.show',[$thirdPost->slug])}}">{{$thirdPost->postTitle}}}</a></h3>

                                        <div class="author-info d-flex align-items-center sm-margin">
                                            <img src="{{asset('profile/')}}/{{\App\Model\UserInfo::where('user_id',$post->user_id)->first()->profileImage}}"
                                                 width="69px" height="69px" style="border-radius: 69px" alt="author">
                                            <div class="author-name">
                                                <h5><a href="#">{{\App\User::where('id',$thirdPost->user_id)->first()->name}}</a></h5>
                                                <span>{{$thirdPost->created_at->diffForHumans()}}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="post-meta">
                                        <div class="left f-left">
                                            <form action="#" method="post">
                                                <input type="hidden" name="reaction">
                                                <button style="background: none;color: inherit;border: none;padding: 0;font: inherit;cursor: pointer;outline: inherit;"
                                                        type="submit"><span class="lnr lnr-heart"> </span></button>110
                                            </form>
                                            <a href="#"><span class="lnr lnr-bubble"></span>
                                                {{\App\Http\Controllers\CommentController::countComments($thirdPost->id)}}
                                            </a>
                                            <a href="#"><span class="lnr lnr-eye"></span>300</a>
                                        </div>
                                        <div class="right f-right">
                                            <a href="#"><span class="lnr lnr-bookmark"></span></a>
                                            <a href="#"><span class="fas fa-share-alt"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                @endforeach
                        @endif
                </div>
            </div>
        </div>
    </section>
    <section class="travel-area pb-90 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 pb-70 mb-5">
                    <div class="section-title">
                        <div class="title">
                            <h2>All Post</h2>
                        </div>
                        <div class="more">
                            <a href="#">More <i class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($allposts as $allpost)
                <div class="col-xl-3 col-md-6 mb-30">

                    <div class="post-wrapeer">

                        <div class="card">
                            <div class="post-thumb position-a">
                                <img class="card-img-top" src="{{asset('thumbnail/')}}/{{$allpost->postThumbnail}}" alt="post">
                                <a href="#" class="tag tag-red">
                                    {{\App\Http\Controllers\CategoryController::getCategoryName($allpost->category_id)}}
                                </a>
                            </div>
                            <div class="post-content travel-post">
                                <div class="card-body paddingXY">
                                    <h4><a href="{{route('singlePost.show',[$allpost->slug])}}">{{$allpost->postTitle}}}</a></h4>
                                    <div class="author-info d-flex align-items-center">
                                        <img src="{{asset('profile/')}}/{{\App\Model\UserInfo::where('user_id',$allpost->user_id)->first()->profileImage}}"
                                             width="69px" height="69px" style="border-radius: 69px" alt="author">
                                        <div class="author-name">
                                            <h5><a href="">{{\App\User::where('id',$thirdPost->user_id)->first()->name}}</a></h5>
                                            <span>{{$allpost->created_at->diffForHumans()}}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="post-meta">
                                    <div class="left f-left">
                                                <form action="#" method="post">
                                                    <input type="hidden" name="reaction">
                                                    <button style="background: none;color: inherit;border: none;padding: 0;font: inherit;cursor: pointer;outline: inherit;"
                                                            type="submit"><span class="lnr lnr-heart"> </span></button>

                                                    {{\App\Http\Controllers\CommentController::countReaction($allpost->id)}}
                                                </form>
                                        <a href="#"><span class="lnr lnr-bubble"></span>
                                            {{\App\Http\Controllers\CommentController::countComments($allpost->id)}}
                                        </a>
                                        <a href="#"><span class="lnr lnr-eye"></span>300</a>
                                    </div>
                                    <div class="right f-right">
                                        <a href="#"><span class="lnr lnr-bookmark"></span></a>
                                        <a href="#"><span class="fas fa-share-alt"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                @endforeach
            </div>
        </div>

    </section>
    <!--pagination -->
    <div class="container mt-5">
        <div class="row row justify-content-md-center">
            <nav aria-label="...">
                <ul class="pagination">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1">Previous</a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item ">
                        <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                    <li class="page-item"><a class="page-link" href="#">6</a></li>
                    <li class="page-item"><a class="page-link" href="#">7</a></li>
                    <li class="page-item"><a class="page-link" href="#">8</a></li>
                    <li class="page-item"><a class="page-link" href="#">9</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>

    @section('css')
        <link rel="stylesheet" href="{{asset('css/poststyle.css')}}">
        @endsection