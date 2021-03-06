<!--Start the top Menu Part -->
<section id="top-menu">
    <div class="container-fluid top-nav-menu">
        <div class="row">
            <div class="col-sm-5 col-md-5">
                <ul class="left-top-menu">
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
            <div class="col-sm-7  col-md-7">
                <ul class="right-top-menu">
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>

                    @guest
                    <li class="auth"><a href="{{route('login')}}">Login</a></li>
                    <li class="auth"><a href="{{route('register')}}">Register</a></li>
                    @else
                    <li class="auth">
                        <a class="username" href="#">{{strtolower(\Illuminate\Support\Facades\Auth::user()->name)}}</a>
                    </li>
                    <li class="auth">
                        <a href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                        @if(Auth::user()->hasRole() == 'admin')
                        <li class="auth"><a href="{{route('admin.index')}}">Go To Dashboard</a></li>
                            @elseif(Auth::user()->hasRole() == 'moderator')
                            <li class="auth"><a href="{{route('moderator.index')}}">Go To Dashboard</a></li>
                            @elseif(Auth::user()->hasRole() == 'author')
                            <li class="auth"><a href="{{route('author.index')}}">Go To Dashboard</a></li>

                            @endif
                        @endguest

                </ul>

            </div>
        </div>
    </div>
</section>

<!--End The Top Menu -->

<div class="empty-space"></div>

<!-- Start Top Center Menu-->
<section id="top-center-menu">
    <div class="site-title">
        <a href="{{route('home.index')}}">Cholo Ghuri</a>
    </div>
    <div class="container">
        <div class="row">
            <div class="col align-self-center">
                <div class="site-tagline">
                    <p>
                        Lets Travel Bangladesh
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Top Center Menu -->
<div class="empty-space"></div>
<!--Start Top Bottom Menu -->

{{--<section id="top-bottom-menu" class="mb-5">--}}
    {{--<div class="top-bottom-menu container-fluid">--}}
        {{--<div class="container main-navbar">--}}
            {{--<div class="row">--}}
                {{--<nav class="navbar navbar-expand-lg navbar-light ">--}}

                    {{--<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">--}}
                        {{--<span class="navbar-toggler-icon"></span>--}}
                    {{--</button>--}}

                    {{--<div class="collapse navbar-collapse" id="navbarSupportedContent">--}}
                        {{--<ul class="navbar-nav mr-auto">--}}
                            {{--<li class="nav-item active">--}}
                                {{--<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>--}}
                            {{--</li>--}}
                            {{--@foreach($navCategories as $navMenu)--}}
                                {{--<li class="nav-item dropdown">--}}
                                    {{--<a class="nav-link dropdown-toggle" href="{{route('home.index')}}" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
                                        {{--{{$navMenu->categoryName}}--}}
                                    {{--</a>--}}

                                    {{--<div class="dropdown-menu" aria-labelledby="navbarDropdown">--}}
                                        {{--@foreach(\App\Model\SubCategory::all()->where('category_id',$navMenu->id) as $subCat)--}}
                                                {{--<a class="dropdown-item" href="#">{{$subCat->subCategoryName}}</a>--}}
                                                {{--<div class="dropdown-divider"></div>--}}
                                        {{--@endforeach--}}
                                    {{--</div>--}}

                                {{--</li>--}}

                            {{--@endforeach--}}

                        {{--</ul>--}}

                    {{--</div>--}}
                {{--</nav>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</section>--}}
<!--End Top Bottom Menu -->

<!-- End Comment-->