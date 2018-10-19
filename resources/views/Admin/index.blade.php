
        <div class="layout">
            <div id="navbar-top" class="container-fluid"style="padding-left: 0px !important; padding-right: 0px !important;background-color: #fff !important;">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a class="navbar-brand" href="#">CholoGhuri</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div id="navbarNavDropdown" class="navbar-collapse collapse">
                        <ul class="navbar-nav mr-auto">

                        </ul>
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{\Illuminate\Support\Facades\Auth::user()->name}}
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Another action</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
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
                                   <span class="sidebar-auth-name">{{Auth::user()->name()}}</span> <br>
                                   <span class="sidebar-auth-role">{{Auth::user()->hasRole()}}</span>

                                </div>
                            </div>

                        </div>

                        <nav class="sidebar sidebar-offcanvas" id="sidebar">
                            <ul class="nav">

                                <li class="nav-item active">
                                    <a class="nav-link" href="index.html">
                                        <span class="menu-title">Dashboard</span>
                                        <i class="mdi mdi-home menu-icon"></i>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                                        <span class="menu-title">UI Elements</span>
                                        <i class="menu-arrow"></i>
                                        <i class="mdi mdi-crosshairs-gps menu-icon"></i>
                                    </a>
                                    <div class="collapse" id="ui-basic">
                                        <ul class="nav flex-column sub-menu">
                                            <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Buttons</a></li>
                                            <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Typography</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="pages/icons/mdi.html">
                                        <span class="menu-title">Icons</span>
                                        <i class="mdi mdi-contacts menu-icon"></i>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="pages/forms/basic_elements.html">
                                        <span class="menu-title">Forms</span>
                                        <i class="mdi mdi-format-list-bulleted menu-icon"></i>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="pages/charts/chartjs.html">
                                        <span class="menu-title">Charts</span>
                                        <i class="mdi mdi-chart-bar menu-icon"></i>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="pages/tables/basic-table.html">
                                        <span class="menu-title">Tables</span>
                                        <i class="mdi mdi-table-large menu-icon"></i>
                                    </a>
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
