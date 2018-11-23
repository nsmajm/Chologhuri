

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
                                        <a href="http://themes.themegoods.com/letsblog/demo/about/">Blog Page</a>
                                    </li>
                                    <li id="menu-item-382" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children arrow menu-item-382">
                                        <a href="http://themes.themegoods.com/letsblog/demo/theme-support-updates/">Category</a>
                                        <ul class="sub-menu">
                                            <li id="menu-item-380" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-380">
                                                <a href="http://themes.themegoods.com/letsblog/demo/theme-support-updates/">Theme Support &#038; Updates</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li id="menu-item-150" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-150">
                                        <a href="http://themes.themegoods.com/letsblog/demo/contact-me/">Event</a>
                                    </li>
                                    <li id="menu-item-150" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-150">
                                        <a href="http://themes.themegoods.com/letsblog/demo/contact-me/">Contact Us</a>
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
    <div id="post_featured_slider" class="slider_wrapper">
        <div class="flexslider" data-height="550">
            <ul class="slides">
                <li>
                    <a href="http://themes.themegoods.com/letsblog/demo/top-10-ingredients/">
                        <div class="slider_image" style="background-image:url('http://themegoodsthemes-pzbycso8wng.stackpathdns.com/letsblog/demo/wp-content/uploads/2015/07/1.jpg');">
                            <div class="slide_post">
                                <div class="slide_post_date">July 22, 2015</div>
                                <h2>Top 10 Ingredients</h2>
                            </div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="http://themes.themegoods.com/letsblog/demo/big-city-light/">
                        <div class="slider_image" style="background-image:url('http://themegoodsthemes-pzbycso8wng.stackpathdns.com/letsblog/demo/wp-content/uploads/2015/07/DeathtoStock_NYC11-Custom1.jpg');">
                            <div class="slide_post">
                                <div class="slide_post_date">July 22, 2015</div>
                                <h2>Big City Light</h2>
                            </div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="http://themes.themegoods.com/letsblog/demo/city-center-bridge/">
                        <div class="slider_image" style="background-image:url('http://themegoodsthemes-pzbycso8wng.stackpathdns.com/letsblog/demo/wp-content/uploads/2015/07/15794918936_855690cb09_b1.jpg');">
                            <div class="slide_post">
                                <div class="slide_post_date">July 22, 2015</div>
                                <h2>City Center Bridge</h2>
                            </div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="http://themes.themegoods.com/letsblog/demo/golden-snow-land/">
                        <div class="slider_image" style="background-image:url('http://themegoodsthemes-pzbycso8wng.stackpathdns.com/letsblog/demo/wp-content/uploads/2015/07/snow-winter-fallen-trees.jpg');">
                            <div class="slide_post">
                                <div class="slide_post_date">July 22, 2015</div>
                                <h2>Golden Snow Land</h2>
                            </div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="http://themes.themegoods.com/letsblog/demo/fashion-model-shooting/">
                        <div class="slider_image" style="background-image:url('http://themegoodsthemes-pzbycso8wng.stackpathdns.com/letsblog/demo/wp-content/uploads/2015/07/photography_2.jpg');">
                            <div class="slide_post">
                                <div class="slide_post_date">July 22, 2015</div>
                                <h2>Fashion Model Shoot</h2>
                            </div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="http://themes.themegoods.com/letsblog/demo/beauty-of-nature/">
                        <div class="slider_image" style="background-image:url('http://themegoodsthemes-pzbycso8wng.stackpathdns.com/letsblog/demo/wp-content/uploads/2015/07/33dca3b1ecb01a7d-2012_WeAre-TheRhoads_oct_KinfolkVol5_10_o.jpg');">
                            <div class="slide_post">
                                <div class="slide_post_date">July 22, 2015</div>
                                <h2>Beauty of Nature</h2>
                            </div>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div id="page_content_wrapper">
        <div class="inner">
            <!-- Begin main content -->
            <div class="inner_wrapper">
                <div class="sidebar_content two_cols mixed">
                    <!-- Begin each blog post -->
                    <div id="twoRowPost" class=" post type-post status-publish format-standard has-post-thumbnail hentry category-art category-lifestyle tag-nature tag-photography tag-travel">
                        @foreach($posts as $post)

                            <div class="post_wrapper">
                                <div class="post_content_wrapper">
                                    <div class="post_header">
                                        <div class="post_header_title">
                                            <h5>
                                                <a href="{{route('singlePost.show',[$post->slug])}}">{{$post->postTitle}}</a>
                                            </h5>
                                            <div class="post_detail post_date">
                                                <span class="post_info_date"><span>
                                                        {{$post->created_at->diffForHumans()}}
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="post_img static">
                                            <a href="{{route('singlePost.show',[$post->id])}}">{{$post->postTitle}}}>
                                                <img src="{{asset('thumbnail/')}}/{{$post->postThumbnail}}" alt="" class="" style="width:960px;height:640px;"/>
                                            </a>
                                        </div>
                                        <br class="clear"/>
                                        <p>{!! $post->postBody !!}</p>
                                        <div class="post_button_wrapper">
                                            <a class="readmore" href="{{route('singlePost.show',[$post->id])}}">Read More</a>
                                        </div>
                                        <br class="clear"/>
                                        <div class="post_info_cat">
                                            <span>
                                                <a href="{{route('singlePost.show',[$post->id])}}">{{\App\Http\Controllers\CategoryController::getCategoryName($post->category_id)}}</a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach


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
                                            {!! $allpost->postBody !!}
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
                </div>
                <div class="sidebar_wrapper">
                    <div class="sidebar">
                        <div class="content">
                            <ul class="sidebar_widget">
                                <li id="text-2" class="widget widget_text">
                                    <h2 class="widgettitle">About Me</h2>
                                    <div class="textwidget">
                                        <p>
                                            <img src="http://themegoodsthemes-pzbycso8wng.stackpathdns.com/letsblog/demo/wp-content/uploads/2015/07/photography_2.jpg" alt="" style="margin-bottom:10px;"/>
                                            <br />
                                            Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus.
                                        </p>
                                        <div style="text-align:center;margin-top:10px;">
                                            <img src="http://themegoodsthemes-pzbycso8wng.stackpathdns.com/letsblog/demo/wp-content/uploads/2015/07/signature.png" style="width:50%;height: auto;"/>
                                        </div>
                                    </div>
                                </li>
                                <li id="mc4wp_form_widget-2" class="widget widget_mc4wp_form_widget">
                                    <h2 class="widgettitle">Subscribe to My Newsletter</h2>
                                    <script>(function() {
                                            if (!window.mc4wp) {
                                                window.mc4wp = {
                                                    listeners: [],
                                                    forms    : {
                                                        on: function (event, callback) {
                                                            window.mc4wp.listeners.push({
                                                                event   : event,
                                                                callback: callback
                                                            });
                                                        }
                                                    }
                                                }
                                            }
                                        })();
                                    </script>
                                    <!-- MailChimp for WordPress v4.2.5 - https://wordpress.org/plugins/mailchimp-for-wp/ -->
                                    <form id="mc4wp-form-1" class="mc4wp-form mc4wp-form-437 mc4wp-form-basic" method="post" data-id="437" data-name="Default sign-up form" >
                                        <div class="mc4wp-form-fields">
                                            <p>
                                                <input type="email" id="mc4wp_email" name="EMAIL" placeholder="Your email address" required />
                                            </p>
                                            <p>
                                                <input type="submit" value="Subscribe" />
                                            </p>
                                        </div>
                                        <label style="display: none !important;">Leave this field empty if you're human:
                                            <input type="text" name="_mc4wp_honeypot" value="" tabindex="-1" autocomplete="off" />
                                        </label>
                                        <input type="hidden" name="_mc4wp_timestamp" value="1542985554" />
                                        <input type="hidden" name="_mc4wp_form_id" value="437" />
                                        <input type="hidden" name="_mc4wp_form_element_id" value="mc4wp-form-1" />
                                        <div class="mc4wp-response"></div>
                                    </form>
                                    <!-- / MailChimp for WordPress Plugin -->
                                </li>
                                <li id="custom_instagram-2" class="widget Custom_Instagram">
                                    <h2 class="widgettitle">
                                        <span>Instagram</span>
                                    </h2>
                                    <ul class="flickr">
                                        <li>
                                            <a target="_blank" href="https://www.instagram.com/p/Bhn0rThDfOo/">
                                                <img src="https://scontent.cdninstagram.com/vp/f802f2b74a258be98a714e7e1e1f8380/5C8E33BF/t51.2885-15/e15/s150x150/30076312_2057139651228414_8955780928475496448_n.jpg" width="75" height="75" alt="" />
                                            </a>
                                        </li>
                                        <li>
                                            <a target="_blank" href="https://www.instagram.com/p/Bhn0mN3DHxP/">
                                                <img src="https://scontent.cdninstagram.com/vp/f518b4dbe130d793df80d0797899313e/5C739E4B/t51.2885-15/e15/s150x150/30591194_219528078802776_8442942265462095872_n.jpg" width="75" height="75" alt="" />
                                            </a>
                                        </li>
                                        <li>
                                            <a target="_blank" href="https://www.instagram.com/p/Bhn0kDnj9xJ/">
                                                <img src="https://scontent.cdninstagram.com/vp/3a7371e531de37e4a659fe23aeb634d7/5C94664E/t51.2885-15/e15/s150x150/30601726_589584008071390_6626412841488351232_n.jpg" width="75" height="75" alt="" />
                                            </a>
                                        </li>
                                        <li>
                                            <a target="_blank" href="https://www.instagram.com/p/Bhn0eAujxw0/">
                                                <img src="https://scontent.cdninstagram.com/vp/eb7e0ebbadfd41db1981c78705938377/5C8F563B/t51.2885-15/e15/s150x150/30079328_235005097058307_1414458517279997952_n.jpg" width="75" height="75" alt="" />
                                            </a>
                                        </li>
                                        <li>
                                            <a target="_blank" href="https://www.instagram.com/p/Bhn0YGRjjCd/">
                                                <img src="https://scontent.cdninstagram.com/vp/8d7e46d71515a0f03710959936774131/5C6FE231/t51.2885-15/e15/s150x150/30830906_371768236655648_8218516935617282048_n.jpg" width="75" height="75" alt="" />
                                            </a>
                                        </li>
                                        <li>
                                            <a target="_blank" href="https://www.instagram.com/p/Bhn0WAbD1R4/">
                                                <img src="https://scontent.cdninstagram.com/vp/19d8867297943966de0b5585804e6cd8/5C7E3A48/t51.2885-15/e15/s150x150/30592069_195795361037410_5639195040631750656_n.jpg" width="75" height="75" alt="" />
                                            </a>
                                        </li>
                                        <li>
                                            <a target="_blank" href="https://www.instagram.com/p/Bhn0UeWDHv7/">
                                                <img src="https://scontent.cdninstagram.com/vp/dd22dddedc3226f43c398a1c062fdb17/5C928A37/t51.2885-15/e15/s150x150/30605138_166132187438895_8357504701540859904_n.jpg" width="75" height="75" alt="" />
                                            </a>
                                        </li>
                                        <li>
                                            <a target="_blank" href="https://www.instagram.com/p/Bhn0QyqjQAD/">
                                                <img src="https://scontent.cdninstagram.com/vp/c6735b2180686b9b6edcfcf0a841e076/5C720BB9/t51.2885-15/e15/s150x150/30084493_377913302690811_1929625671043121152_n.jpg" width="75" height="75" alt="" />
                                            </a>
                                        </li>
                                        <li>
                                            <a target="_blank" href="https://www.instagram.com/p/Bhn0PF4jFfs/">
                                                <img src="https://scontent.cdninstagram.com/vp/b458277956619f2897ad711736d39e9a/5CACF07D/t51.2885-15/e15/s150x150/30084652_1737914732936842_334353965518946304_n.jpg" width="75" height="75" alt="" />
                                            </a>
                                        </li>
                                    </ul>
                                    <br class="clear"/>
                                </li>
                                <li id="social_profiles_posts-3" class="widget Social_Profiles_Posts">
                                    <h2 class="widgettitle">
                                        <span>Follow Me On</span>
                                    </h2>
                                    <div class="textwidget">
                                        <div class="social_wrapper shortcode light small">
                                            <ul>
                                                <li class="facebook">
                                                    <a target="_blank" title="Facebook" href="#">
                                                        <i class="fa fa-facebook"></i>
                                                    </a>
                                                </li>
                                                <li class="twitter">
                                                    <a target="_blank" title="Twitter" href="http://twitter.com/#">
                                                        <i class="fa fa-twitter"></i>
                                                    </a>
                                                </li>
                                                <li class="pinterest">
                                                    <a target="_blank" title="Pinterest" href="http://pinterest.com/#">
                                                        <i class="fa fa-pinterest"></i>
                                                    </a>
                                                </li>
                                                <li class="instagram">
                                                    <a target="_blank" title="Instagram" href="http://instagram.com/themegoodsphotography">
                                                        <i class="fa fa-instagram"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li id="custom_ads-2" class="widget Custom_Ads">
                                    <img src="http://themegoodsthemes-pzbycso8wng.stackpathdns.com/letsblog/demo/wp-content/themes/letsblog/images/banner300x250.png" alt=""/>
                                </li>
                                <li id="categories-2" class="widget widget_categories">
                                    <h2 class="widgettitle">Categories</h2>
                                    <ul>
                                        <li class="cat-item cat-item-8">
                                            <a href="http://themes.themegoods.com/letsblog/demo/category/art/" >Art</a>
                                        </li>
                                        <li class="cat-item cat-item-7">
                                            <a href="http://themes.themegoods.com/letsblog/demo/category/food/" >Food</a>
                                        </li>
                                        <li class="cat-item cat-item-4">
                                            <a href="http://themes.themegoods.com/letsblog/demo/category/lifestyle/" >Lifestyle</a>
                                        </li>
                                        <li class="cat-item cat-item-6">
                                            <a href="http://themes.themegoods.com/letsblog/demo/category/movie/" >Movie</a>
                                        </li>
                                        <li class="cat-item cat-item-5">
                                            <a href="http://themes.themegoods.com/letsblog/demo/category/music/" >Music</a>
                                        </li>
                                        <li class="cat-item cat-item-9">
                                            <a href="http://themes.themegoods.com/letsblog/demo/category/top/" >Top</a>
                                        </li>
                                        <li class="cat-item cat-item-3">
                                            <a href="http://themes.themegoods.com/letsblog/demo/category/travel/" >Travel</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
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
