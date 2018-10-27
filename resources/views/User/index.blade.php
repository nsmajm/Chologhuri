<div class="layout">
    <div id="navbar-top" class="container-fluid" style="padding-left: 0px !important; padding-right: 0px !important;background-color: #fff !important;">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="{{route('home.index')}}">CholoGhuri</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div id="navbarNavDropdown" class="navbar-collapse collapse">
                <ul class="navbar-nav mr-auto">

                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{Auth::user()->name}}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Edit Profile</a>
                            <div class="dropdown-divider"></div>
                            {{--<a class="dropdown-item" href="{{route('password.reset')}}">Change Password</a>--}}
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                            <i class="mdi mdi-power"></i>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>

                </ul>
            </div>
        </nav>
    </div>
</div>
<div class="container-fluid">
    <div class="row adminPanel">
        <div class="sidebar">

            <div class="admin-zone mt-3 mb-3">
                <div class="row">
                    <div class="col-md-3">
                        <img src="http://www.bootstrapdash.com/demo/purple-admin-free/images/faces/face1.jpg" alt="" class="nav-image">
                    </div>
                    <div class="col-md-9">
                        <span class="sidebar-auth-name">{{Auth::user()->name()}}</span>
                        <br>
                        <span class="sidebar-auth-role" style="color: #2a9055">{{Auth::user()->hasRole()}}</span>

                    </div>
                </div>

            </div>

            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">

                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('author.index')}}">
                            <span class="menu-title">Dashboard</span>
                            <i class="mdi mdi-home menu-icon"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span class="menu-title">Profile</span>
                            <i class="fa fa-user menu-icon"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#post-basic" aria-expanded="false" aria-controls="post-basic">
                            <span class="menu-title">Posts</span>
                            <i class="menu-arrow"></i>
                            <i class="mdi mdi-tumblr-reblog menu-icon"></i>
                        </a>
                        <div class="collapse" id="post-basic">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="{{route('author.post.create')}}">Create New Post</a></li>
                                <li class="nav-item"> <a class="nav-link" href="{{route('author.managePost')}}">Manage Posts</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#Events-basic" aria-expanded="false" aria-controls="post-basic">
                            <span class="menu-title">Events</span>
                            <i class="menu-arrow"></i>
                            <i class="mdi mdi-tumblr-reblog menu-icon"></i>
                        </a>
                        <div class="collapse" id="Events-basic">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="{{route('author.create.event')}}">Create Events</a></li>
                                <li class="nav-item"> <a class="nav-link" href="{{route('admin.user.index')}}">My Events</a></li>
                                <li class="nav-item"> <a class="nav-link" href="{{route('admin.user.index')}}">Joined Events</a></li>

                            </ul>
                        </div>
                    </li>


                </ul>
            </nav>
        </div>
        <div class="mainContent">
            @yield('mainContent')
        </div>
    </div>
</div>
</div>