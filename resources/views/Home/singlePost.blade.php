

<!DOCTYPE html>
<html lang="en-US" >
<head>
    <meta charset="UTF-8" />
    <title>Cholo Ghuri ! lets Travel Bangladesh</title>
    <style type="text/css">
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 .07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
        #logo_wrapper {
            text-align: center;
            padding: 0px 0 0px 0 !important;
            border-bottom: 1px solid #e1e1e1;
            overflow: hidden;
            -webkit-transition: all 0.3s ease;
            -moz-transition: all 0.3s ease;
            -o-transition: all 0.3s ease;
            -ms-transition: all 0.3s ease;
            transition: all 0.3s ease;
        }

        #page_content_wrapper .inner .sidebar_content.two_cols .post.postTwo {
            width: 45% !important;
        }
        #main{
            margin-left: 0px !important;
        }

        .flexslider .slides img {
            display: block;
            max-height: 582px;
            margin: 0 auto;
        }
        a.singInComment {
            color: coral;
            font-size: 21px;
            text-transform: lowercase;
            padding: 5px;
            text-decoration: none;
        }
        #submitComment{
             display: inline-block;
             outline: none;
             cursor: pointer;
             text-align: center;
             text-decoration: none;
             padding: .5em 1.5em .5em 1.5em;
             color: #fff;
             background: #efc337;
             border: 2px solid #efc337;
             text-transform: uppercase;
             font-size: 11px;
             font-weight: 600;
             font-family: 'Lato', 'Georgia', Arial,Verdana,sans-serif;
             text-shadow: none;
             -webkit-appearance: none;
             letter-spacing: 1px;
             box-shadow: 0 0 0 0 !important;
             line-height: 1.5 !important;
             letter-spacing: 2px;
         }
    </style>
    <link rel="stylesheet" href="{{url('css/Home/reset.css')}}">
    <link rel="stylesheet" href="{{url('css/Home/animation.css')}}">
    <link rel="stylesheet" href="{{url('css/Home/custom.css')}}">
    <link rel="stylesheet" href="{{url('css/Home/style.css')}}">
    <link rel="stylesheet" href="{{url('css/Home/screen.css')}}">
    <link rel="stylesheet" href="{{url('css/Home/grid.css')}}">
    <link rel="stylesheet" href="{{url('css/Home/magnify.css')}}">

    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Lato%3A300%2C400%2C600%2C700%2C400italic%7CLustria%3A300%2C400%2C600%2C700%2C400italic&#038;subset=latin%2Clatin-ext%2Ccyrillic-ext%2Cgreek-ext%2Ccyrillic' type='text/css' media='all' />
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Lato%7CLustria&#038;subset' type='text/css' media='all' />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="{{url('css/singlePage/demo.css')}}" type="text/css" media="screen" />
    <link rel="stylesheet" href="{{url('css/singlePage/flexslider.css')}}" type="text/css" media="screen" />

</head>
<body class="home blog" style="background:#fff !important;">
<input type="hidden" id="pp_enable_right_click" name="pp_enable_right_click" value=""/>
<input type="hidden" id="pp_enable_dragging" name="pp_enable_dragging" value=""/>
<input type="hidden" id="pp_ajax_search" name="pp_ajax_search" value="1"/>
<input type="hidden" id="pp_fixed_menu" name="pp_fixed_menu" value="1"/>
<input type="hidden" id="pp_topbar" name="pp_topbar" value=""/>
<input type="hidden" id="pp_page_title_img_blur" name="pp_page_title_img_blur" value="1"/>
<input type="hidden" id="tg_blog_slider_layout" name="tg_blog_slider_layout" value="slider"/>
<input type="hidden" id="pp_back" name="pp_back" value="Back"/>
<input type="hidden" id="pp_footer_style" name="pp_footer_style" value="4"/>
<!-- End mobile menu -->
<!-- Begin template wrapper -->
<div id="wrapper">
    <div class="header_style_wrapper">
        <!-- End top bar -->
        <div class="top_bar">
            <div class="row" style="background: #ffff;">
                <div class="col-4">
                    <div class="social_wrapper">
                        <a id="custom_logo" class="logo_wrapper default" href="{{route('home.index')}}">
                            <img src="{{url('logo_transparent.png')}}" alt="" width="80" height="50">
                        </a>
                    </div>
                </div>
                <div class="col-4">
                    <input type="text" class="form-control" placeholder="Enter Division Name">
                </div>
                <div class="col-4">
                    <div class="social_wrapper">
                        <ul>
                            @if(Auth::id())

                                <li class="facebook">
                                    <a target="_blank" href="#">{{Auth::user()->name}}</a>
                                </li>
                                <li class="twitter">
                                    <a target="_blank" href="http://twitter.com/#">Go To Dashboard</a>
                                </li>
                                <li class="twitter">
                                    <a target="_blank" href="http://twitter.com/#">Logout</a>
                                </li>
                            @else

                                <li class="twitter">
                                    <a target="_blank" href="http://twitter.com/#">Login</a>
                                </li>
                                <li class="twitter">
                                    <a target="_blank" href="http://twitter.com/#">Register</a>
                                </li>
                            @endif

                        </ul>
                    </div>
                </div>
            </div>
            <!-- Begin logo -->
            <div id="logo_wrapper">
                <!-- Begin right corner buttons -->
            {{--
                                                                    <div id="logo_right_button">--}}

            {{--
                                                                    <input type="text">--}}

            {{--
                                                                        </div>--}}

            <!-- End right corner buttons -->
                <!-- End logo -->
            </div>

        </div>
    </div>
    <div class="page_content_wrapper" style="margin-top:-172px">
        <div class="inner">

            <div id="post_featured_slider" class="slider_wrapper" >
                <div id="main" role="main">
                    <section class="slider">
                        <div id="slider" class="flexslider">
                            <ul class="slides">
                                @foreach($imagepost as $img)
                                <li>
                                    <img src="{{asset('Gallery/')}}/{{$img->postImage}}" />
                                </li>
                                @endforeach

                            </ul>
                        </div>
                        <div id="carousel" class="flexslider">
                            <ul class="slides">
                                @foreach($imagepost as $img)
                                    <li>
                                        <img src="{{asset('Gallery/')}}/{{$img->postImage}}" />
                                    </li>
                                @endforeach

                            </ul>
                        </div>
                    </section>
                    <aside>


                    </aside>
                </div>
            </div>
        </div>
    </div>


    <div id="page_content_wrapper">
        <div class="inner">
            <!-- Begin main content --><div class="inner_wrapper">

                <div class="sidebar_content">

                    <div class="post_header">
                        <div class="post_header_title">
                            <h1>{{$singlePost->postTitle}}</h1>
                            <div class="post_detail post_date">
				      		<span class="post_info_date">
				      			<span>
				       				{{$singlePost->created_at->diffForHumans()}}				      			</span>
				      		</span>
                            </div>
                        </div>
                    </div>


                    <!-- Begin each blog post -->
                    <div id="post-79" class="post-79 post type-post status-publish format-standard has-post-thumbnail hentry category-art category-lifestyle tag-nature tag-photography tag-travel">

                        <div class="post_wrapper">

                            <div class="post_content_wrapper">


                                <div class="post_header single">
                                    {!! $singlePost->postBody !!}
                                </div>
                                <br class="clear">

                                <div class="post_info_cat">
			    <span>
			    			        <a href="{{route('home.showByCategory',[$singlePost->category_id])}}">{{\App\Http\Controllers\CategoryController::getCategoryName($singlePost->category_id)}}</a>
			    			        /
			    			        <a href="{{route('home.showBySubCategory',[$singlePost->subcategory_id])}}">{{\App\Http\Controllers\SubCategoryController::getSubCateogryName($singlePost->subcategory_id)}}</a>
			    			    </span>
                                </div>
                                <br class="clear">

                                <div id="about_the_author">
                                    <div class="gravatar"><img alt="" src="{{url('profile/'.App\Http\Controllers\UserController::getUserpic($singlePost->user_id))}}" class="avatar avatar-200 photo" height="200" width="200"></div>
                                    <div class="author_detail">
                                        <div class="author_content">
                                            <strong>{{\App\User::where('id',$singlePost->user_id)->first()->name}}</strong><br><br>
                                            Member Since
                                            {{\Carbon\Carbon::parse(\App\User::where('id',$singlePost->user_id)->first()->created_at)->format('Y-m-d')}}
                                            <br>
                                            <br>
                                            Total Post {{\App\Model\Post::where('user_id',$singlePost->user_id)->count()}}
                                        </div>
                                    </div>
                                    <br class="clear">
                                </div>


                                <h2 class="widgettitle"><span class="content_title">You might also like</span></h2>
                                <div class="post_related">
                                    @foreach($randomPost as $random)
                                    <div class="one_third ">
                                        <!-- Begin each blog post -->
                                        <div id="post-73" class="post-73 post type-post status-publish format-standard has-post-thumbnail hentry category-art category-lifestyle category-movie tag-model tag-photography tag-portrait tag-travel">

                                            <div class="post_wrapper grid_layout">
                                                <div class="post_img small static">
                                                    <a href="{{route('singlePost.show',[$random->id])}}">
                                                        <img src="{{asset('thumbnail/')}}/{{$random->postThumbnail}}" alt="" class="" style="width:700px;height:529px;">
                                                    </a>
                                                </div>


                                                <div class="blog_grid_content">
                                                    <div class="post_header grid">
                                                        <strong><a href="{{route('singlePost.show',[$random->id])}}" >{{$random->postTitle}}</a></strong>
                                                        <div class="post_attribute">
                                                            {{\Carbon\Carbon::parse($random->created_at)->format('d M Y')}}						    </div>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                        @endforeach
                                        <!-- End each blog post -->
                                    </div>

                                </div>


                            </div>

                        </div>

                    </div>
                    <!-- End each blog post -->
                    <div id="commentDiv">
                       @foreach(\App\Http\Controllers\CommentController::show($singlePost->id) as $comment)
                        <div class="comment" id="comment-4">
                            <div class="gravatar">
                                <img  src="{{url('profile/'.App\Http\Controllers\UserController::getUserpic($comment->user_id))}}" class="avatar avatar-60 photo" height="60" width="60">

                            </div>

                            <div class="right">

                                <h7>{{\App\Http\Controllers\UserController::getUserName($comment->user_id)}}</h7>

                                <div class="comment_date"> {{\Carbon\Carbon::parse($comment->created_at)->format('d M Y')}}	</div>
                                <br class="clear">
                                <p>{{$comment->commentBody}}</p>

                            </div>

                        </div>
                           @endforeach

                    </div>
                    <div class="fullwidth_comment_wrapper sidebar">
                        <h2 class="widgettitle"><span class="content_title">Leave A Reply</span></h2><br class="clear">

                        <div id="respond">
                            <div id="respond" class="comment-respond">
                                @if (Auth::id())

                                    <form  id="commentform" class="comment-form">
                                        <p class="comment-form-comment">
                                            <input type="hidden" name="id" id="postId" value="{{$singlePost->id}}">
                                            <label for="comment">Comment</label>
                                            <textarea id="postBody" name="postBody">
                                             </textarea>
                                        </p>

                                        <p class="form-submit">
                                           <button type="button" id="submitComment">Post Comment</button>
                                        </p>
                                    </form>
                                    @else
                                    <p style="text-align: center">please <b><a class="singInComment" href="{{route('login')}}">Sign In</a></b>To Comment</p>
                                @endif
                            </div><!-- #respond -->
                        </div>

                    </div>


                </div>

                <div class="sidebar_wrapper">

                    @include('pages.sidebar')
                    <br class="clear">

                    <div class="sidebar_bottom"></div>
                </div>

            </div>
            <!-- End main content -->
        </div>
    </div>
    <br class="clear"/>
    <div class="footer_bar" style="background: #000;">
        <br class="clear"/>

            <div id="copyright" style="text-align: center;font-size: 17px;">© Copyright CholoGhuri ! Lets Travel Bangladesh</div>
            <br class="clear"/>

    </div>
</div>
<div id="overlay_background"></div>
<script type='text/javascript' src='{{url('css/Home/js/custom.js')}}'></script>
<script type='text/javascript' src='{{url('css/Home/js/flexslider.js')}}'></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" type="text/javascript"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">

<script>
    $(document).ready(function () {
        $('#postBody').val('')
        $('#submitComment').click(function (e) {
            if($('#postBody').val().length==0){
                return toastr.error("please Write Something to make a comment");
            }
            else {
                $.ajax({
                    type: 'POST',
                    url: "{!! route('comment.store') !!}",
                    cache: false,
                    data: {_token: "{{csrf_token()}}",'id':$('#postId').val(),'postbody':$('#postBody').val()},
                    success: function (data) {

                        $('#postBody').val(" ")
                        toastr.success("Comment Posted");
                        commentDiv
                        $("#commentDiv").load(" #commentDiv");
                    }
                });
            }

        });
    });
</script>

<!-- FlexSlider -->
<script src="{{url('css/singlePage/jqueryflexslider.js')}}"></script>

<script type="text/javascript">
    $(function(){
        SyntaxHighlighter.all();
    });
    $(window).load(function(){
        $('#carousel').flexslider({
            animation: "slide",
            controlNav: false,
            animationLoop: false,
            slideshow: false,
            itemWidth: 210,
            itemMargin: 5,
            asNavFor: '#slider'
        });

        $('#slider').flexslider({
            animation: "slide",
            controlNav: false,
            animationLoop: false,
            slideshow: false,
            sync: "#carousel",
            start: function(slider){
                $('body').removeClass('loading');
            }
        });
    });
</script>
<script type="text/javascript">

</script>
</body>
</html>
