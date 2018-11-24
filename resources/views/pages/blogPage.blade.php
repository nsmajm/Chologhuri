

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
        .footer_bar_wrapper{
            border: none !important;
        }
        .footer_bar {
            background-color: #222222 !important;
        }
        #page_content_wrapper .inner .sidebar_content.two_cols .post.postTwo {
            width: 45% !important;
        }
        a{
            text-decoration: none !important;
        }

        #menu_wrapper .nav ul li a, #menu_wrapper div .nav li > a {
            font-size: 16px !important;
        }
        .scroll>.social_wrapper{
            display: none;
        }
    </style>
    <link rel="stylesheet" href="{{url('css/Home/reset.css')}}">
    <link rel="stylesheet" href="{{url('css/Home/animation.css')}}">
    <link rel="stylesheet" href="{{url('css/Home/custom.css')}}">
    <link rel="stylesheet" href="{{url('css/Home/flexslider.css')}}">
    <link rel="stylesheet" href="{{url('css/Home/style.css')}}">
    <link rel="stylesheet" href="{{url('css/Home/screen.css')}}">
    <link rel="stylesheet" href="{{url('css/Home/grid.css')}}">
    <link rel="stylesheet" href="{{url('css/Home/magnify.css')}}">
    <link rel="stylesheet" href="{{url('css/Home/')}}">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Lato%3A300%2C400%2C600%2C700%2C400italic%7CLustria%3A300%2C400%2C600%2C700%2C400italic&#038;subset=latin%2Clatin-ext%2Ccyrillic-ext%2Cgreek-ext%2Ccyrillic' type='text/css' media='all' />
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Lato%7CLustria&#038;subset' type='text/css' media='all' />
    <script type='text/javascript' src='https://code.jquery.com/jquery-3.3.1.js'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script type='text/javascript' src='{{url('css/Home/js/migrate.js')}}'></script>
    <script type='text/javascript' src='http://themegoodsthemes-pzbycso8wng.stackpathdns.com/letsblog/demo/wp-content/themes/letsblog/js/jquery.easing.js'></script>
    <script type='text/javascript' src='http://themegoodsthemes-pzbycso8wng.stackpathdns.com/letsblog/demo/wp-content/themes/letsblog/js/custom_plugins.js'></script>
    <script type='text/javascript' src='http://themegoodsthemes-pzbycso8wng.stackpathdns.com/letsblog/demo/wp-content/themes/letsblog/js/jquery.isotope.js'></script>
    <script type='text/javascript' src='http://themegoodsthemes-pzbycso8wng.stackpathdns.com/letsblog/demo/wp-content/themes/letsblog/js/waypoints.min.js'></script>
    <script type='text/javascript' src='http://themegoodsthemes-pzbycso8wng.stackpathdns.com/letsblog/demo/wp-content/themes/letsblog/js/jquery.magnific-popup.js'></script>
</head>
<body class="home blog">
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
            <div class="social_wrapper" style="position: relative;left: 38%;">
                <ul>
                    <li class="searchTop" style="margin-right: 40px">
                        <input type="text"  style="width: 400px;">
                    </li>
                    @if(Auth::id())

                        <li class="facebook">
                            <a target="_blank" href="#">{{Auth::user()->name}}</a>
                        </li>
                        @if(Auth::user()->hasRole() == 'admin')
                            <li class="auth"><a href="{{route('admin.index')}}">Go To Dashboard</a></li>
                        @elseif(Auth::user()->hasRole() == 'moderator')
                            <li class="auth"><a href="{{route('moderator.index')}}">Go To Dashboard</a></li>
                        @elseif(Auth::user()->hasRole() == 'author')
                            <li class="auth"><a href="{{route('author.index')}}">Go To Dashboard</a></li>

                        @endif
                        <li class="twitter">
                            <a href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                    @else

                        <li class="twitter">
                            <a  href="{{route('login')}}">Login</a>
                        </li>
                        <li class="twitter">
                            <a   href="{{route('register')}}">Register</a>
                        </li>
                    @endif


                </ul>
            </div>
            <!-- Begin logo -->
            <div id="logo_wrapper">
                <!-- Begin right corner buttons -->

            {{--<div id="logo_right_button">--}}


            {{--<input type="text">--}}


            {{--</div>--}}

            <!-- End right corner buttons -->
                <div id="logo_normal" class="logo_container">
                    <div class="logo_align">
                        <a id="custom_logo" class="logo_wrapper default" href="{{route('home.index')}}">
                            <img src="{{url('logo.png')}}" alt="" width="251" height="143">
                        </a>
                    </div>
                </div>
                <!-- End logo -->
            </div>
            <div id="menu_wrapper">
                <div id="nav_wrapper">
                    <div class="nav_wrapper_inner">
                        <div id="menu_border_wrapper">
                            <div class="menu-main-menu-container">
                                <ul id="main_menu" class="nav">
                                    <li id="menu-item-111" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-111">
                                        <a href="{{route('home.index')}}">Home</a>
                                    </li>
                                    <li id="menu-item-146" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-146">
                                        <a href="#">Blog Page</a>
                                    </li>
                                    <li id="menu-item-382" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children arrow menu-item-382">
                                        <a href="#">Category</a>
                                        <ul class="sub-menu">
                                            @foreach($categories as $cat)
                                                <li id="menu-item-380" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-380">
                                                    <a href="{{route('home.showByCategory',[$cat->id])}}">{{$cat->categoryName}}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    <li id="menu-item-150" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-150">
                                        <a href="http://themes.themegoods.com/letsblog/demo/contact-me/">Event</a>
                                    </li>
                                    <li id="menu-item-150" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-150">
                                        <a href="{{route('support.index')}}">Contact Us</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End main nav -->
            </div>
        </div>
    </div>

    <div id="page_content_wrapper">
        <div class="inner">
            <!-- Begin main content -->
            <div class="inner_wrapper">
                <div class="sidebar_content two_cols mixed">
                    <!-- Begin each blog post -->
                    <div id="twoRowPost" class=" post type-post status-publish format-standard has-post-thumbnail hentry category-art category-lifestyle tag-nature tag-photography tag-travel">
                       @if (count($allPost)==0)
                           <div class="alert alert-warning">No Post In This Category</div>
                      @else
                        {{--@foreach($posts as $post)--}}

                            {{--<div class="post_wrapper">--}}
                                {{--<div class="post_content_wrapper">--}}
                                    {{--<div class="post_header">--}}
                                        {{--<div class="post_header_title">--}}
                                            {{--<h5>--}}
                                                {{--<a href="{{route('singlePost.show',[$post->slug])}}">{{$post->postTitle}}</a>--}}
                                            {{--</h5>--}}
                                            {{--<div class="post_detail post_date">--}}
                                                {{--<span class="post_info_date"><span>--}}
                                                        {{--{{$post->created_at->diffForHumans()}}--}}
                                                    {{--</span>--}}
                                                {{--</span>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="post_img static">--}}
                                            {{--<a href="{{route('singlePost.show',[$post->id])}}">{{$post->postTitle}}}>--}}
                                                {{--<img src="{{asset('thumbnail/')}}/{{$post->postThumbnail}}" alt="" class="" style="width:960px;height:640px;"/>--}}
                                            {{--</a>--}}
                                        {{--</div>--}}
                                        {{--<br class="clear"/>--}}
                                        {{--<p>{!! str_limit($post->postBody,300) !!}</p>--}}
                                        {{--<div class="post_button_wrapper">--}}
                                            {{--<a class="readmore" href="{{route('singlePost.show',[$post->id])}}">Read More</a>--}}
                                        {{--</div>--}}
                                        {{--<br class="clear"/>--}}
                                        {{--<div class="post_info_cat">--}}
                                            {{--<span>--}}
                                                {{--<a href="{{route('singlePost.show',[$post->id])}}">{{\App\Http\Controllers\CategoryController::getCategoryName($post->category_id)}}</a>--}}
                                            {{--</span>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--@endforeach--}}
                        @endif

                    </div>
                    <br class="clear"/>
                    <!-- End each blog post -->
                    <!-- Begin each blog post -->
                    @foreach($allPost as $allpost)
                        <div class="postTwo post type-post status-publish format-standard has-post-thumbnail
                         hentry category-art category-lifestyle category-movie tag-model tag-photography tag-portrait
                          tag-travel">

                            <div class="post_wrapper">

                                <div class="post_content_wrapper">

                                    <div class="post_header">

                                        <div class="post_img static">
                                            <a href="{{route('singlePost.show',[$allpost->id])}}">
                                                <img src="{{asset('thumbnail/')}}/{{$allpost->postThumbnail}}" alt=""
                                                     class="" style="width:700px;height:529px;">
                                            </a>
                                        </div>
                                        <br class="clear">

                                        <div class="post_header_title">
                                            <h5><a href="{{route('singlePost.show',[$allpost->id])}}">{{$allpost->postTitle}}</a></h5>
                                            <div class="post_detail post_date">
                                             <span class="post_info_date">
			      		                	<span>
			       				{{$allpost->created_at->diffForHumans()}}			      			</span>
                        </span>
                                            </div>
                                        </div>

                                        <p></p>
                                        <p>
                                            {!!str_limit( $allpost->postBody,300) !!}
                                        </p>
                                        <p></p>
                                        <div class="post_button_wrapper">
                                            <a class="readmore" href="{{route('singlePost.show',[$allpost->id])}}">Read More</a>
                                        </div>


                                    </div>

                                </div>

                            </div>

                        </div>
                        <!-- End each blog post -->
                        <!-- End each blog post -->
                    @endforeach

                    {{--{{ $allpost->fragment('posts')->links() }}--}}
                </div>
                <div class="sidebar_wrapper">
                        @include('pages.sidebar')
                    <br class="clear"/>
                </div>
            </div>
            <!-- End main content -->
        </div>
    </div>
    <br class="clear"/>
    <div class="footer_bar   ">
        <br class="clear"/>
        <div class="footer_bar_wrapper ">
            <div class="menu-footer-menu-container">

            </div>
            <div id="copyright">© Copyright CholoGhuri</div>
            <br class="clear"/>
        </div>
    </div>
</div>
<div id="overlay_background"></div>
<script type='text/javascript' src='{{url('css/Home/js/custom.js')}}'></script>
<script type='text/javascript' src='{{url('css/Home/js/flexslider.js')}}'></script>
<script type="text/javascript">
    jQuery(window).load(function(){
        jQuery('.slider_wrapper').flexslider({
            animation: "slide",
            animationLoop: true,
            itemMargin: 0,
            minItems: 1,
            maxItems: 1,
            controlNav: false,
            smoothHeight: false,
            slideshow: 0,
            animationSpeed: 1000,
            move: 1,
            slideshow: 0,
            slideshowSpeed: 3000	});
    });
</script>

</body>
</html>
