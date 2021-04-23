<!doctype html>
<html lang="en">
<head>
    @include('layouts.head')
    @yield('head')
</head>
<body>
    <div class="wrapper">
    </div>
    <div class="overlay"></div>
    <div class="spanner">
        <div class="loader"></div>
    </div>

    <div class="page-container">
        @include('layouts.header')
        <div class="page-content">
            <!-- Page Header -->
            <div class="page-header">
                <div class="search-form">
                    <form action="#" method="GET">
                        <div class="input-group">
                            <input type="text" name="search" class="form-control search-input" placeholder="Type something...">
                            <span class="input-group-btn">
                                    <button class="btn btn-default" id="close-search" type="button"><i class="icon-close"></i></button>
                                </span>
                        </div>
                    </form>
                </div>
                <nav class="navbar navbar-default">
                    <div class="container-fluid">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <div class="logo-sm">
                                <a href="javascript:void(0)" id="sidebar-toggle-button"><i class="fa fa-bars"></i></a>
                                <a class="logo-box" href="index.html"><span>Space</span></a>
                            </div>
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <i class="fa fa-angle-down"></i>
                            </button>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->

                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                <li><a href="javascript:void(0)" id="collapsed-sidebar-toggle-button"><i class="fa fa-bars"></i></a></li>
                                <li><a href="javascript:void(0)" id="toggle-fullscreen"><i class="fa fa-expand"></i></a></li>
                                <li><a href="javascript:void(0)" id="search-button"><i class="fa fa-search"></i></a></li>
                            </ul>
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="javascript:void(0)" class="right-sidebar-toggle" data-sidebar-id="main-right-sidebar"><i class="fa fa-envelope"></i></a></li>
                                <li class="dropdown">
                                    <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-bell"></i></a>
                                    <ul class="dropdown-menu dropdown-lg dropdown-content">
                                        <li class="drop-title">Notifications<a href="#" class="drop-title-link"><i class="fa fa-angle-right"></i></a></li>
                                        <li class="slimscroll dropdown-notifications">
                                            <ul class="list-unstyled dropdown-oc">
                                                <li>
                                                    <a href="#"><span class="notification-badge bg-primary"><i class="fa fa-photo"></i></span>
                                                        <span class="notification-info">Finished uploading photos to gallery <b>"South Africa"</b>.
                                                                <small class="notification-date">20:00</small>
                                                            </span></a>
                                                </li>
                                                <li>
                                                    <a href="#"><span class="notification-badge bg-primary"><i class="fa fa-at"></i></span>
                                                        <span class="notification-info"><b>John Doe</b> mentioned you in a post "Update v1.5".
                                                                <small class="notification-date">06:07</small>
                                                            </span></a>
                                                </li>
                                                <li>
                                                    <a href="#"><span class="notification-badge bg-danger"><i class="fa fa-bolt"></i></span>
                                                        <span class="notification-info">4 new special offers from the apps you follow!
                                                                <small class="notification-date">Yesterday</small>
                                                            </span></a>
                                                </li>
                                                <li>
                                                    <a href="#"><span class="notification-badge bg-success"><i class="fa fa-bullhorn"></i></span>
                                                        <span class="notification-info">There is a meeting with <b>Ethan</b> in 15 minutes!
                                                                <small class="notification-date">Yesterday</small>
                                                            </span></a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown user-dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="http://via.placeholder.com/36x36" alt="" class="img-circle"></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Profile</a></li>
                                        <li><a href="#">Calendar</a></li>
                                        <li><a href="#"><span class="badge pull-right badge-danger">42</span>Messages</a></li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href="#">Account Settings</a></li>
                                        <li><a href="#">Log Out</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </div><!-- /.container-fluid -->
                </nav>
            </div><!-- /Page Header -->
            @yield('main')
        </div>
    </div>

    <!-- Javascripts -->
    <script src="{{ asset('theme/assets/plugins/jquery/jquery-3.1.0.min.js') }}"></script>
    <script src="{{ asset('theme/assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('theme/assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ asset('theme/assets/plugins/uniform/js/jquery.uniform.standalone.js') }}"></script>
    <script src="{{ asset('theme/assets/plugins/switchery/switchery.min.js') }}"></script>
    <script src="{{ asset('theme/assets/plugins/d3/d3.min.js') }}"></script>
    <script src="{{ asset('theme/assets/plugins/nvd3/nv.d3.min.js') }}"></script>
    <script src="{{ asset('theme/assets/plugins/flot/jquery.flot.min.js') }}"></script>
    <script src="{{ asset('theme/assets/plugins/flot/jquery.flot.time.min.js') }}"></script>
    <script src="{{ asset('theme/assets/plugins/flot/jquery.flot.symbol.min.js') }}"></script>
    <script src="{{ asset('theme/assets/plugins/flot/jquery.flot.resize.min.js') }}"></script>
    <script src="{{ asset('theme/assets/plugins/flot/jquery.flot.tooltip.min.js') }}"></script>
    <script src="{{ asset('theme/assets/plugins/flot/jquery.flot.pie.min.js') }}"></script>
    <script src="{{ asset('theme/assets/plugins/chartjs/chart.min.js') }}"></script>
    <script src="{{ asset('theme/assets/js/space.min.js') }}"></script>
    <script src="{{ asset('theme/assets/js/pages/dashboard.js') }}"></script>
</body>
</html>
