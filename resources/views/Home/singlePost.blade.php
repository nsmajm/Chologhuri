

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
    </style>
    <link rel="stylesheet" href="{{url('css/Home/reset.css')}}">
    <link rel="stylesheet" href="{{url('css/Home/animation.css')}}">
    <link rel="stylesheet" href="{{url('css/Home/custom.css')}}">
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
    <div class="page_content_wrapper">
        <div class="inner">
            <div id="post_featured_slider" class="slider_wrapper">
                <div id="main" role="main">
                    <section class="slider">
                        <div id="slider" class="flexslider">
                            <ul class="slides">
                                @foreach($imagepost as $img)
                                <li>
                                    <img src="{{asset('public/Gallery/')}}/{{$img->postImage}}" />
                                </li>
                                @endforeach

                            </ul>
                        </div>
                        <div id="carousel" class="flexslider">
                            <ul class="slides">
                                @foreach($imagepost as $img)
                                    <li>
                                        <img src="{{asset('public/Gallery/')}}/{{$img->postImage}}" />
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
			    			        <a href="#">Art</a>
			    			        /
			    			        <a href="#">Lifestyle</a>
			    			    </span>
                                </div>
                                <br class="clear">

                                <div id="about_the_author">
                                    <div class="gravatar"><img alt="" src="http://1.gravatar.com/avatar/db6f032dce962144efc9b625779461a1?s=200&amp;d=mm&amp;r=g" srcset="http://1.gravatar.com/avatar/db6f032dce962144efc9b625779461a1?s=400&amp;d=mm&amp;r=g 2x" class="avatar avatar-200 photo" height="200" width="200"></div>
                                    <div class="author_detail">
                                        <div class="author_content">
                                            <strong>John Philipe</strong><br>
                                            Sit amet cursus nisl aliquam. Aliquam et elit eu nunc rhoncus viverra quis at felis. Sed do.Lorem ipsum dolor sit amet, consectetur Nulla fringilla purus Lorem ipsum dosectetur adipisicing elit at leo dignissim congue.			     	</div>
                                    </div>
                                    <br class="clear">
                                </div>


                                <h2 class="widgettitle"><span class="content_title">You might also like</span></h2>
                                <div class="post_related">
                                    <div class="one_third ">
                                        <!-- Begin each blog post -->
                                        <div id="post-73" class="post-73 post type-post status-publish format-standard has-post-thumbnail hentry category-art category-lifestyle category-movie tag-model tag-photography tag-portrait tag-travel">

                                            <div class="post_wrapper grid_layout">


                                                <div class="post_img small static">
                                                    <a href="http://themes.themegoods.com/letsblog/demo/fashion-model-shooting/">
                                                        <img src="http://themegoodsthemes-pzbycso8wng.stackpathdns.com/letsblog/demo/wp-content/uploads/2015/07/photography_2-700x529.jpg" alt="" class="" style="width:700px;height:529px;">
                                                    </a>
                                                </div>


                                                <div class="blog_grid_content">
                                                    <div class="post_header grid">
                                                        <strong><a href="http://themes.themegoods.com/letsblog/demo/fashion-model-shooting/" title="Fashion Model Shoot">Fashion Model Shoot</a></strong>
                                                        <div class="post_attribute">
                                                            July 22, 2015									    </div>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                        <!-- End each blog post -->
                                    </div>
                                    <div class="one_third ">
                                        <!-- Begin each blog post -->
                                        <div id="post-67" class="post-67 post type-post status-publish format-standard has-post-thumbnail hentry category-art category-food category-music category-top tag-food tag-nature">

                                            <div class="post_wrapper grid_layout">


                                                <div class="post_img small static">
                                                    <a href="http://themes.themegoods.com/letsblog/demo/golden-snow-land/">
                                                        <img src="http://themegoodsthemes-pzbycso8wng.stackpathdns.com/letsblog/demo/wp-content/uploads/2015/07/snow-winter-fallen-trees-700x529.jpg" alt="" class="" style="width:700px;height:529px;">
                                                    </a>
                                                </div>


                                                <div class="blog_grid_content">
                                                    <div class="post_header grid">
                                                        <strong><a href="http://themes.themegoods.com/letsblog/demo/golden-snow-land/" title="Golden Snow Land">Golden Snow Land</a></strong>
                                                        <div class="post_attribute">
                                                            July 22, 2015									    </div>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                        <!-- End each blog post -->
                                    </div>
                                    <div class="one_third last">
                                        <!-- Begin each blog post -->
                                        <div id="post-56" class="post-56 post type-post status-publish format-standard has-post-thumbnail hentry category-food category-lifestyle category-travel tag-family tag-nature tag-sport">

                                            <div class="post_wrapper grid_layout">


                                                <div class="post_img small static">
                                                    <a href="http://themes.themegoods.com/letsblog/demo/family-comes-first/">
                                                        <img src="http://themegoodsthemes-pzbycso8wng.stackpathdns.com/letsblog/demo/wp-content/uploads/2015/07/02-700x529.jpg" alt="" class="" style="width:700px;height:529px;">
                                                    </a>
                                                </div>


                                                <div class="blog_grid_content">
                                                    <div class="post_header grid">
                                                        <strong><a href="http://themes.themegoods.com/letsblog/demo/family-comes-first/" title="Family Comes First">Family Comes First</a></strong>
                                                        <div class="post_attribute">
                                                            July 22, 2015									    </div>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                        <!-- End each blog post -->
                                    </div>
                                </div>


                            </div>

                        </div>

                    </div>
                    <!-- End each blog post -->

                    <div class="fullwidth_comment_wrapper sidebar">
                        <h2 class="widgettitle"><span class="content_title">Leave A Reply</span></h2><br class="clear">







                        <div id="respond">
                            <div id="respond" class="comment-respond">
                                <h3 id="reply-title" class="comment-reply-title">Leave a Reply <small><a rel="nofollow" id="cancel-comment-reply-link" href="/letsblog/demo/beauty-of-nature/#respond" style="display:none;">Cancel reply</a></small></h3>			<form action="http://themes.themegoods.com/letsblog/demo/wp-comments-post.php" method="post" id="commentform" class="comment-form">
                                    <p class="comment-notes"><span id="email-notes">Your email address will not be published.</span> Required fields are marked <span class="required">*</span></p><p class="comment-form-comment"><label for="comment">Comment</label> <textarea id="comment" name="comment" cols="45" rows="8" maxlength="65525" required="required"></textarea></p><p class="comment-form-author"><label for="author">Name <span class="required">*</span></label> <input placeholder="Name*" id="author" name="author" type="text" value="" size="30" maxlength="245" required="required"></p>
                                    <p class="comment-form-email"><label for="email">Email <span class="required">*</span></label> <input type="email" placeholder="Email*" id="email" name="email" value="" size="30" maxlength="100" aria-describedby="email-notes" required="required"></p>
                                    <p class="comment-form-url"><label for="url">Website</label> <input placeholder="Website" id="url" name="url" type="url" value="" size="30" maxlength="200"></p>
                                    <p class="form-submit"><input name="submit" type="submit" id="submit" class="submit" value="Post Comment"> <input type="hidden" name="comment_post_ID" value="79" id="comment_post_ID">
                                        <input type="hidden" name="comment_parent" id="comment_parent" value="0">
                                    </p>			</form>
                            </div><!-- #respond -->
                        </div>

                    </div>


                </div>

                <div class="sidebar_wrapper">

                    <div class="sidebar_top"></div>

                    <div class="sidebar">

                        <div class="content">

                            <ul class="sidebar_widget">
                                <li id="text-4" class="widget widget_text"><h2 class="widgettitle">About Me</h2>
                                    <div class="textwidget"><p><img src="http://themegoodsthemes-pzbycso8wng.stackpathdns.com/letsblog/demo/wp-content/uploads/2015/07/photography_2.jpg" alt="" style="margin-bottom:10px;"><br>
                                            Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus.</p>
                                        <div style="text-align:center;margin-top:10px;"><img src="http://themegoodsthemes-pzbycso8wng.stackpathdns.com/letsblog/demo/wp-content/uploads/2015/07/signature.png" style="width:50%;height: auto;"></div>
                                    </div>
                                </li>
                                <li id="mc4wp_form_widget-4" class="widget widget_mc4wp_form_widget"><h2 class="widgettitle">Subscribe to My Newsletter</h2>
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
                                    </script><!-- MailChimp for WordPress v4.2.5 - https://wordpress.org/plugins/mailchimp-for-wp/ --><form id="mc4wp-form-1" class="mc4wp-form mc4wp-form-437 mc4wp-form-basic" method="post" data-id="437" data-name="Default sign-up form"><div class="mc4wp-form-fields"><p>
                                                <input type="email" id="mc4wp_email" name="EMAIL" placeholder="Your email address" required="">
                                            </p>

                                            <p>
                                                <input type="submit" value="Subscribe">
                                            </p></div><label style="display: none !important;">Leave this field empty if you're human: <input type="text" name="_mc4wp_honeypot" value="" tabindex="-1" autocomplete="off"></label><input type="hidden" name="_mc4wp_timestamp" value="1543000595"><input type="hidden" name="_mc4wp_form_id" value="437"><input type="hidden" name="_mc4wp_form_element_id" value="mc4wp-form-1"><div class="mc4wp-response"></div></form><!-- / MailChimp for WordPress Plugin --></li>
                                <li id="custom_instagram-4" class="widget Custom_Instagram"><h2 class="widgettitle"><span>Instagram</span></h2><ul class="flickr"><li><a target="_blank" href="https://www.instagram.com/p/Bhn0rThDfOo/"><img src="https://scontent.cdninstagram.com/vp/f802f2b74a258be98a714e7e1e1f8380/5C8E33BF/t51.2885-15/e15/s150x150/30076312_2057139651228414_8955780928475496448_n.jpg" width="75" height="75" alt=""></a></li><li><a target="_blank" href="https://www.instagram.com/p/Bhn0mN3DHxP/"><img src="https://scontent.cdninstagram.com/vp/f518b4dbe130d793df80d0797899313e/5C739E4B/t51.2885-15/e15/s150x150/30591194_219528078802776_8442942265462095872_n.jpg" width="75" height="75" alt=""></a></li><li><a target="_blank" href="https://www.instagram.com/p/Bhn0kDnj9xJ/"><img src="https://scontent.cdninstagram.com/vp/3a7371e531de37e4a659fe23aeb634d7/5C94664E/t51.2885-15/e15/s150x150/30601726_589584008071390_6626412841488351232_n.jpg" width="75" height="75" alt=""></a></li><li><a target="_blank" href="https://www.instagram.com/p/Bhn0eAujxw0/"><img src="https://scontent.cdninstagram.com/vp/eb7e0ebbadfd41db1981c78705938377/5C8F563B/t51.2885-15/e15/s150x150/30079328_235005097058307_1414458517279997952_n.jpg" width="75" height="75" alt=""></a></li><li><a target="_blank" href="https://www.instagram.com/p/Bhn0YGRjjCd/"><img src="https://scontent.cdninstagram.com/vp/8d7e46d71515a0f03710959936774131/5C6FE231/t51.2885-15/e15/s150x150/30830906_371768236655648_8218516935617282048_n.jpg" width="75" height="75" alt=""></a></li><li><a target="_blank" href="https://www.instagram.com/p/Bhn0WAbD1R4/"><img src="https://scontent.cdninstagram.com/vp/19d8867297943966de0b5585804e6cd8/5C7E3A48/t51.2885-15/e15/s150x150/30592069_195795361037410_5639195040631750656_n.jpg" width="75" height="75" alt=""></a></li><li><a target="_blank" href="https://www.instagram.com/p/Bhn0UeWDHv7/"><img src="https://scontent.cdninstagram.com/vp/dd22dddedc3226f43c398a1c062fdb17/5C928A37/t51.2885-15/e15/s150x150/30605138_166132187438895_8357504701540859904_n.jpg" width="75" height="75" alt=""></a></li><li><a target="_blank" href="https://www.instagram.com/p/Bhn0QyqjQAD/"><img src="https://scontent.cdninstagram.com/vp/c6735b2180686b9b6edcfcf0a841e076/5C720BB9/t51.2885-15/e15/s150x150/30084493_377913302690811_1929625671043121152_n.jpg" width="75" height="75" alt=""></a></li><li><a target="_blank" href="https://www.instagram.com/p/Bhn0PF4jFfs/"><img src="https://scontent.cdninstagram.com/vp/b458277956619f2897ad711736d39e9a/5CACF07D/t51.2885-15/e15/s150x150/30084652_1737914732936842_334353965518946304_n.jpg" width="75" height="75" alt=""></a></li></ul><br class="clear"></li>
                                <li id="social_profiles_posts-5" class="widget Social_Profiles_Posts"><h2 class="widgettitle"><span>Follow Me On</span></h2><div class="textwidget"><div class="social_wrapper shortcode light small"><ul><li class="facebook"><a target="_blank" title="Facebook" href="#"><i class="fa fa-facebook"></i></a></li><li class="twitter"><a target="_blank" title="Twitter" href="http://twitter.com/#"><i class="fa fa-twitter"></i></a></li><li class="pinterest"><a target="_blank" title="Pinterest" href="http://pinterest.com/#"><i class="fa fa-pinterest"></i></a></li><li class="instagram"><a target="_blank" title="Instagram" href="http://instagram.com/themegoodsphotography"><i class="fa fa-instagram"></i></a></li></ul></div></div></li>
                                <li id="tag_cloud-5" class="widget widget_tag_cloud"><h2 class="widgettitle">Tags</h2>
                                    <div class="tagcloud"><a href="http://themes.themegoods.com/letsblog/demo/tag/bridge/" class="tag-cloud-link tag-link-18 tag-link-position-1" style="font-size: 13px;">bridge</a>
                                        <a href="http://themes.themegoods.com/letsblog/demo/tag/city/" class="tag-cloud-link tag-link-17 tag-link-position-2" style="font-size: 13px;">city</a>
                                        <a href="http://themes.themegoods.com/letsblog/demo/tag/cooking/" class="tag-cloud-link tag-link-15 tag-link-position-3" style="font-size: 13px;">cooking</a>
                                        <a href="http://themes.themegoods.com/letsblog/demo/tag/family/" class="tag-cloud-link tag-link-19 tag-link-position-4" style="font-size: 13px;">family</a>
                                        <a href="http://themes.themegoods.com/letsblog/demo/tag/food/" class="tag-cloud-link tag-link-14 tag-link-position-5" style="font-size: 13px;">food</a>
                                        <a href="http://themes.themegoods.com/letsblog/demo/tag/lifestyle/" class="tag-cloud-link tag-link-10 tag-link-position-6" style="font-size: 13px;">lifestyle</a>
                                        <a href="http://themes.themegoods.com/letsblog/demo/tag/model/" class="tag-cloud-link tag-link-21 tag-link-position-7" style="font-size: 13px;">model</a>
                                        <a href="http://themes.themegoods.com/letsblog/demo/tag/nature/" class="tag-cloud-link tag-link-16 tag-link-position-8" style="font-size: 13px;">nature</a>
                                        <a href="http://themes.themegoods.com/letsblog/demo/tag/photography/" class="tag-cloud-link tag-link-22 tag-link-position-9" style="font-size: 13px;">photography</a>
                                        <a href="http://themes.themegoods.com/letsblog/demo/tag/portrait/" class="tag-cloud-link tag-link-20 tag-link-position-10" style="font-size: 13px;">portrait</a>
                                        <a href="http://themes.themegoods.com/letsblog/demo/tag/sport/" class="tag-cloud-link tag-link-12 tag-link-position-11" style="font-size: 13px;">sport</a>
                                        <a href="http://themes.themegoods.com/letsblog/demo/tag/travel/" class="tag-cloud-link tag-link-11 tag-link-position-12" style="font-size: 13px;">travel</a></div>
                                </li>
                            </ul>

                        </div>

                    </div>
                    <br class="clear">

                    <div class="sidebar_bottom"></div>
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
                <ul id="footer_menu" class="footer_nav">
                    <li id="menu-item-152" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-152">
                        <a href="http://themes.themegoods.com/letsblog/demo/">Home</a>
                    </li>
                    <li id="menu-item-153" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-153">
                        <a href="http://themes.themegoods.com/letsblog/demo/category/lifestyle/">Lifestyle</a>
                    </li>
                    <li id="menu-item-156" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-156">
                        <a href="http://themes.themegoods.com/letsblog/demo/about/">About</a>
                    </li>
                    <li id="menu-item-155" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-155">
                        <a href="http://themes.themegoods.com/letsblog/demo/contact-me/">Contact Me</a>
                    </li>
                </ul>
            </div>
            <div id="copyright">© Copyright LetsBlog Theme Demo - Theme by ThemeGoods</div>
            <br class="clear"/>
        </div>
    </div>
</div>
<div id="overlay_background"></div>
<script type='text/javascript' src='{{url('css/Home/js/custom.js')}}'></script>
<script type='text/javascript' src='{{url('css/Home/js/flexslider.js')}}'></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
{{--<script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.min.js">\x3C/script>')</script>--}}

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

</body>
</html>
