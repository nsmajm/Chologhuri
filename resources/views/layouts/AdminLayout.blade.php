<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Cholo Ghuri</title>
    {{--<link rel="stylesheet" href="{{asset('css/Admin/materialdesignicons.min.css')}}">--}}
    <link rel="stylesheet" href="{{url('css/Admin/vendor.bundle.base.css')}}">
    <link rel="stylesheet" href="{{url('css/Admin/vendor.bundle.addons.css')}}">
    <link rel="stylesheet" href="{{url('css/Admin/style.css')}}">
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/2.8.94/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    @yield('css')
    <style>
        .pad-change{
            padding: 10px !important;

        }
    </style>
</head>
<body>
<div class="container-scroller">
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
            <a class="navbar-brand brand-logo" href="{{route('admin.index')}}">Cholo Ghuri</a>
            <a class="navbar-brand brand-logo-mini" href="{{route('admin.index')}}">Cholo Ghuri</a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end justify-content-lg-start">
            <ul class="navbar-nav mr-lg-2">

            </ul>
            <ul class="navbar-nav navbar-nav-right">

                <li class="nav-item nav-profile dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                        <span class="nav-profile-name"> {{Auth::user()->name}}  </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">

                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                            <i class="mdi mdi-logout text-primary"></i>
                            Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>

            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                <span class="mdi mdi-menu"></span>
            </button>
        </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">

        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('home.index')}}">
                        <i class="mdi mdi-home menu-icon"></i>
                        <span class="menu-title">Home</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('admin.index')}}">
                        <i class="mdi mdi-view-quilt menu-icon"></i>
                        <span class="menu-title">Dashboard</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                        <i class="mdi mdi-account menu-icon"></i>
                        <span class="menu-title">Users </span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="ui-basic">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="{{route('admin.user.index')}}">Active Users</a></li>
                            <li class="nav-item"> <a class="nav-link" href="{{route('admin.user.otherUsers')}}">Others Users <span class="badge badge-pill badge-danger">{{count(\App\User::where('status','0')->get())}}</span></a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#posts" aria-expanded="false" aria-controls="ui-basic">
                        <i class="mdi mdi-account menu-icon"></i>
                        <span class="menu-title">Posts
                        @if (count(\App\Model\Post::where('status','2')->get())>0)
                                <span class="badge badge-pill badge-danger">{{count(\App\Model\Post::where('status','2')->get())}}</span>
                        @endif
                        </span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="posts">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="{{route('admin.post.show')}}">All Posts</a></li>
                            <li class="nav-item"> <a class="nav-link" href="{{route('admin.post.pendingPost')}}">Pending Posts  <span class="badge badge-pill badge-danger">{{count(\App\Model\Post::where('status','2')->get())}}</span></a></li>
                            <li class="nav-item"> <a class="nav-link" href="{{route('admin.post.blockedPost')}}">Blocked Posts</a></li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#comments" aria-expanded="false" aria-controls="ui-basic">
                        <i class="mdi mdi-account menu-icon"></i>
                        <span class="menu-title">Comments </span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="comments">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="{{route('admin.showComments')}}">All Comments</a></li>
                            <li class="nav-item"> <a class="nav-link" href="{{route('admin.showBlockComments')}}">Blocked Comments</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#support" aria-expanded="false" aria-controls="ui-basic">
                        <i class="fa fa-support menu-icon"></i>
                        <span class="menu-title">Support  <span class="badge badge-pill badge-danger">{{count(\App\Model\Support::where('isSolved','0')->get())}}</span></span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="support">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="{{route('admin.viewSupport')}}">Show Support</a></li>
                            <li class="nav-item"> <a class="nav-link" href="{{route('admin.viewPendingSupport')}}">Pending Support</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
                    @yield('content')
            </div>
    </div>
</div>

            <!-- content-wrapper ends -->
            <!-- partial:partials/_footer.html -->
            <footer class="footer">
                <div class="d-sm-flex justify-content-center justify-content-sm-between">
                    <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2018 <a href="{{route('admin.index')}}" target="_blank">Cholo Ghuri</a>. All rights reserved.</span>

                </div>
            </footer>
            <!-- partial -->
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>

<script src="{{url('js/vendor.bundle.base.js')}}"></script>
<script src="{{url('js/vendor.bundle.addons.js')}}"></script>
<script src="{{url('js/dashboard.js')}}"></script>
{{--<script src="{{url('js/off-canvas.js')}}"></script>--}}
{{--<script src="{{url('js/hoverable-collapse.js')}}"></script>--}}
{{--<script src="{{url('js/template.js')}}"></script>--}}
{{--<script src="{{url('js/settings.js')}}"></script>--}}
{{--<script src="{{url('js/todolist.js')}}"></script>--}}
@yield('js')

</body>


<!-- Mirrored from www.urbanui.com/boardsterui/template/demo/vertical-default-light/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Nov 2018 17:46:40 GMT -->
</html>

