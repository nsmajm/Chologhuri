<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.js"></script>
<div class="sidebar">
    <div class="content">
        <ul class="sidebar_widget">
            <li id="text-2" class="widget widget_text">
                <h2 class="widgettitle">Latest Event</h2>
                <div class="textwidget">
                    <p>
                        <img src="{{url('EventImage/event')}}/{{$event->eventImage}}" alt="" style="margin-bottom:10px;"/>
                        <br />
                        <p style="text-align: center">
                        {{$event->eventName}}
                    </p>
                    <p class="text-center"> Location : {{$event->eventLocation}}</p>
                    <p class="text-center"> Budget : {{$event->additionalBudget}}</p>
                    <p class="text-center"> Max People : {{$event->maxperson }}</p>
                    <p class="text-center"> Event Start : {{$event->eventDate}}</p>
                    <p class="text-center"> {!! str_limit($event->eventDescription,100) !!}<br></p>

                    <p class="text-center"><button class="btn btn-warning "
                                                   data-panel-id="{{$event->id}}"
                                                   data-panel-name="{{$event->eventName}}"
                                                   data-panel-location="{{$event->eventLocation}}"
                                                   data-panel-eventdate="{{$event->eventDate}}"
                                                   data-panel-eventtime="{{$event->eventTimeStart}}"
                                                   data-panel-eventdes="{{$event->eventDescription}}"
                                                   data-panel-status="{{$event->status}}"
                                                   data-panel-eventduration="{{$event->eventDuration}}"
                                                   data-panel-additionalbudget="{{$event->additionalBudget}}"
                                                   data-panel-maxperson="{{$event->maxperson}}"
                                                   onclick="details(this,this,this,this,this,this,this,this,this,this)" id="btnDetails" >Details</button></p>
                    </p>
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

            </li>
        </ul>
    </div>
</div>

<script>
   function details(id,name,eventLocation, eventDate,eventTimeStart,eventDescription,status,eventDuration,additionalBudget,maxperson) {
       var id=$(id).data('panel-id');
       var name=$(name).data('panel-name');
       var eLocation=$(eventLocation).data('panel-location');
       var eventDate=$(eventDate).data('panel-eventdate');
       var eventTimeStart=$(eventTimeStart).data('panel-eventtime');
       var eventDescription=$(eventDescription).data('panel-eventdes');
       var status=$(status).data('panel-status');
       var eventDuration=$(eventDuration).data('panel-eventduration');
       var additionalBudget=$(additionalBudget).data('panel-additionalbudget');
       var maxperson=$(maxperson).data('panel-maxperson');
       $.confirm({
           title: 'Confirm!',
           content: "\n" +
               "    <link rel=\"stylesheet\" href=\"{{url('css/Admin/style.css')}}\">\n" +
               "    <style>\n" +
               "        .form-control{\n" +
               "            border:1px solid #efefef !important;\n" +
               "        }\n" +
               "        .card-body {\n" +
               "            flex: 1 1 auto;\n" +
               "            padding: 1.25rem;\n" +
               "            border: 1px solid #efefef !important;\n" +
               "        }\n" +
               "        .site-title {\n" +
               "            text-decoration: none;\n" +
               "            font-size: 48px;\n" +
               "            line-height: 62px;\n" +
               "            color: #558b2f;\n" +
               "            font-weight: 700;\n" +
               "            font-style: normal;\n" +
               "            text-transform: uppercase;\n" +
               "            font-family: 'Cantata One', serif;\n" +
               "        }\n" +
               "    </style>\n" +
               "    <title>Document</title>\n" +
               "</head>\n" +
               "<body>\n" +
               "<div class=\"offset-2 col-8 offset-2 grid-margin stretch-card mt-5\">\n" +
               "    <div class=\"card\">\n" +
               "        <div class=\"card-body\">\n" +
               "\n" +
               "            <div class=\"alert alert-danger\" style=\"display:none\"></div>\n" +
               "            <div class=\"faq-section mt-4\">\n" +
               "                <div class=\"container-fluid bg-danger py-2 mt-5\">\n" +
               "                    <p class=\"mb-0 text-white\">Event Details</p>\n" +
               "                </div>\n" +
               "                <div id=\"accordion-3\" class=\"accordion\">\n" +
               "                    <div class=\"card\">\n" +
               "                        <div class=\"card-header\" id=\"headingOne-3\">\n" +
               "                            <h5 class=\"mb-0\">\n" +
               "                                <a data-toggle=\"collapse\" data-target=\"#collapseOne-3\" aria-expanded=\"true\" aria-controls=\"collapseOne-3\">\n" +
               "                                  Event Name :  \n" +name+
               "                                </a>\n" +
               "                            </h5>\n" +
               "                            <h5 class=\"mb-0\">\n" +
               "                                <a data-toggle=\"collapse\" data-target=\"#collapseOne-3\" aria-expanded=\"true\" aria-controls=\"collapseOne-3\">\n" +
               "                                  Event Location :  \n" +eLocation+
               "                                </a>\n" +
               "                            </h5>\n" +
               "\n" +
               "                            <h5 class=\"mb-0\">\n" +
               "                                <a data-toggle=\"collapse\" data-target=\"#collapseOne-3\" aria-expanded=\"true\" aria-controls=\"collapseOne-3\">\n" +
               "                                  Event Location :  "+eLocation+"\n" +
               "                                </a>\n" +
               "                            </h5>\n" +
               "                            <h5 class=\"mb-0\">\n" +
               "                                <a data-toggle=\"collapse\" data-target=\"#collapseOne-3\" aria-expanded=\"true\" aria-controls=\"collapseOne-3\">\n" +
               "                                  Event Start DAte :  "+eventDate+"\n" +
               "                                </a>\n" +
               "                            </h5>\n" +
               "                            <h5 class=\"mb-0\">\n" +
               "                                <a data-toggle=\"collapse\" data-target=\"#collapseOne-3\" aria-expanded=\"true\" aria-controls=\"collapseOne-3\">\n" +
               "                                  Event Name :  +eventTimeStart+\n" +
               "                                </a>\n" +
               "                            </h5>\n" +
               "                            <h5 class=\"mb-0\">\n" +
               "                                <a data-toggle=\"collapse\" data-target=\"#collapseOne-3\" aria-expanded=\"true\" aria-controls=\"collapseOne-3\">\n" +
               "                                  Event Name :  +eventDescription+\n" +
               "                                </a>\n" +
               "                            </h5>\n" +
               "                            <h5 class=\"mb-0\">\n" +
               "                                <a data-toggle=\"collapse\" data-target=\"#collapseOne-3\" aria-expanded=\"true\" aria-controls=\"collapseOne-3\">\n" +
               "                                  Event Name :  +status+\n" +
               "                                </a>\n" +
               "                            </h5>\n" +
               "                            <h5 class=\"mb-0\">\n" +
               "                                <a data-toggle=\"collapse\" data-target=\"#collapseOne-3\" aria-expanded=\"true\" aria-controls=\"collapseOne-3\">\n" +
               "                                  Event Name :  +eventDuration+\n" +
               "                                </a>\n" +
               "                            </h5>\n" +
               "                            <h5 class=\"mb-0\">\n" +
               "                                <a data-toggle=\"collapse\" data-target=\"#collapseOne-3\" aria-expanded=\"true\" aria-controls=\"collapseOne-3\">\n" +
               "                                  Event Name :  +additionalBudget+\n" +
               "                                </a>\n" +
               "                            </h5>\n" +
               "\n" +
               "                        </div>\n" +
               "                        <div id=\"collapseOne-3\" class=\"collapse show\" aria-labelledby=\"headingOne-3\" data-parent=\"#accordion-3\">\n" +
               "                            <div class=\"card-body\">\n" +
               "                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird\n" +
               "                                on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table,\n" +
               "                                raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.\n" +
               "                            </div>\n" +
               "                        </div>\n" +
               "                    </div>\n" +
               "\n" +
               "                </div>\n" +
               "            </div>\n" +
               "\n" +
               "        </div>\n" +
               "\n" +
               "    </div>\n" +
               "\n" +
               "</div>\n" +
               "\n",
           columnClass: 'col-md-12',
           buttons: {
               confirm: function () {
                   $.alert('Confirmed!');
               },
               close:{

               }


           }
       });

   }
</script>