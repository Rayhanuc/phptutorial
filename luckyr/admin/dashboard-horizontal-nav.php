<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- <link rel="shortcut icon" type="image/png" href="/imgs/favicon.png" /> -->
        <title>Home</title>

        <!-- inject:css -->
        <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="bower_components/simple-line-icons/css/simple-line-icons.css">
        <link rel="stylesheet" href="bower_components/weather-icons/css/weather-icons.min.css">
        <link rel="stylesheet" href="bower_components/themify-icons/css/themify-icons.css">
        <!-- endinject -->

        <!-- Main Style  -->
        <link rel="stylesheet" href="dist/css/main.css">

        <!--bootstrap sub menu-->
        <link href="assets/js/bootstrap-submenu/css/bootstrap-submenu.css" rel="stylesheet">

        <!-- Rickshaw Chart Depencencies -->
        <link rel="stylesheet" href="bower_components/rickshaw/rickshaw.min.css">

        <!--easypiechart-->
        <link rel="stylesheet" href="assets/js/jquery-easy-pie-chart/easypiechart.css">

        <!--horizontal-timeline-->
        <link rel="stylesheet" href="assets/js/horizontal-timeline/css/style.css">


        <script src="assets/js/modernizr-custom.js"></script>
    </head>
    <body>

        <div id="ui" class="ui ui-aside-none">

            <!--header start-->
            <header id="header" class="ui-header">

                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="navbar-header">
                                <!--logo start-->
                                <a href="index.html" class="navbar-brand">
                                    <span class="logo"><img src="imgs/logo-dark.png" alt=""/></span>
                                </a>
                                <!--logo end-->
                            </div>

                            <div class="search-dropdown dropdown pull-right visible-xs">
                                <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-expanded="true"><i class="fa fa-search"></i></button>
                                <div class="dropdown-menu">
                                    <form >
                                        <input class="form-control" placeholder="Search here..." type="text">
                                    </form>
                                </div>
                            </div>

                            <div class="navbar-collapse nav-responsive-disabled">


                                <!--search start-->
                                <form class="search-content hidden-xs" >
                                    <button type="submit" name="search" class="btn srch-btn">
                                        <i class="fa fa-search"></i>
                                    </button>
                                    <input type="text" class="form-control" name="keyword" placeholder="Search here...">
                                </form>
                                <!--search end-->

                                <!--notification start-->
                                <ul class="nav navbar-nav navbar-right">
                                    <li class="dropdown">
                                        <a href="" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                            <i class="fa fa-bell-o"></i>
                                            <span class="badge">5</span>
                                        </a>
                                        <!--dropdown -->
                                        <ul class="dropdown-menu dropdown-menu--responsive">
                                            <div class="dropdown-header">Notifications (12)</div>
                                            <ul class="Notification-list Notification-list--small niceScroll list-group">
                                                <li class="Notification list-group-item">
                                                    <button class="Notification__status Notification__status--read" type="button" name="button"></button>
                                                    <a href="">
                                                        <div class="Notification__avatar Notification__avatar--danger pull-left" href="">
                                                            <i class="Notification__avatar-icon fa fa-bolt"></i>
                                                        </div>
                                                        <div class="Notification__highlight">
                                                            <p class="Notification__highlight-excerpt"><b>Server Error Report</b></p>
                                                            <p class="Notification__highlight-time">1.2 hours ago</p>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="Notification list-group-item">
                                                    <button class="Notification__status Notification__status--read" type="button" name="button"></button>
                                                    <a href="">
                                                        <div class="Notification__avatar Notification__avatar--success pull-left" href="">
                                                            <i class="Notification__avatar-icon fa fa-user-plus"></i>
                                                        </div>
                                                        <div class="Notification__highlight">
                                                            <p class="Notification__highlight-excerpt"><b>New Member Registration</b></p>
                                                            <p class="Notification__highlight-time">2 hours ago</p>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="Notification list-group-item">
                                                    <button class="Notification__status Notification__status--read" type="button" name="button"></button>
                                                    <a href="">
                                                        <div class="Notification__avatar pull-left" href="">
                                                            <img src="imgs/a0.jpg" alt="...">
                                                        </div>
                                                        <div class="Notification__highlight">
                                                            <p class="Notification__highlight-excerpt"><b>Tomas Edison</b> and 4 other people like your post “keep clam and watch the fizz”.</p>
                                                            <p class="Notification__highlight-time">1 day ago</p>
                                                        </div>
                                                    </a>
                                                </li>

                                                <li class="Notification list-group-item">
                                                    <button class="Notification__status Notification__status--unread" type="button" name="button"></button>
                                                    <a href="">
                                                        <div class="Notification__avatar pull-left" href="">
                                                            <img src="imgs/a0.jpg" alt="...">
                                                        </div>
                                                        <div class="Notification__highlight">
                                                            <p class="Notification__highlight-excerpt"><b>Luciad Extic</b> can join conference.</p>
                                                            <p class="Notification__highlight-time">1 hour ago</p>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="Notification list-group-item">
                                                    <button class="Notification__status Notification__status--unread" type="button" name="button"></button>
                                                    <a href="">
                                                        <div class="Notification__avatar Notification__avatar--info pull-left" href="">
                                                            <i class="Notification__avatar-icon fa fa-database"></i>
                                                        </div>
                                                        <div class="Notification__highlight">
                                                            <p class="Notification__highlight-excerpt"><b>Database Error</b></p>
                                                            <p class="Notification__highlight-time">2 days ago</p>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="Notification list-group-item">
                                                    <button class="Notification__status Notification__status--read" type="button" name="button"></button>
                                                    <a href="">
                                                        <div class="Notification__avatar Notification__avatar--danger pull-left" href="">
                                                            <i class="Notification__avatar-icon fa fa-bolt"></i>
                                                        </div>
                                                        <div class="Notification__highlight">
                                                            <p class="Notification__highlight-excerpt"><b>Server Error Report</b></p>
                                                            <p class="Notification__highlight-time">1.2 hours ago</p>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="Notification list-group-item">
                                                    <button class="Notification__status Notification__status--read" type="button" name="button"></button>
                                                    <a href="">
                                                        <div class="Notification__avatar Notification__avatar--success pull-left" href="">
                                                            <i class="Notification__avatar-icon fa fa-user-plus"></i>
                                                        </div>
                                                        <div class="Notification__highlight">
                                                            <p class="Notification__highlight-excerpt"><b>New Member Registration</b></p>
                                                            <p class="Notification__highlight-time">2 hours ago</p>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                            <div class="dropdown-footer"><a href="">View more</a></div>
                                        </ul>
                                        <!--/ dropdown -->
                                    </li>

                                    <li class="dropdown">
                                        <a href="" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                            <i class="fa fa-envelope-o"></i>
                                            <span class="badge">5</span>
                                        </a>
                                        <!--dropdown -->
                                        <ul class="dropdown-menu dropdown-menu--responsive">
                                            <div class="dropdown-header">Messages (12)</div>
                                            <ul class="Message-list niceScroll list-group">
                                                <li class="Message list-group-item">
                                                    <button class="Message__status Message__status--read" type="button" name="button"></button>
                                                    <a href="">
                                                        <div class="Message__avatar Message__avatar--danger pull-left" href="">
                                                            <img src="imgs/a2.jpg" alt="...">
                                                        </div>
                                                        <div class="Message__highlight">
                                                            <span class="Message__highlight-name">Lubida Teresa</span>
                                                            <p class="Message__highlight-excerpt">Hello there! Can you send me a photo please?</p>
                                                            <p class="Message__highlight-time">1 hour ago</p>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="Message list-group-item">
                                                    <button class="Message__status Message__status--unread" type="button" name="button"></button>
                                                    <a href="">
                                                        <div class="Message__avatar Message__avatar--danger pull-left" href="">
                                                            <img src="imgs/a1.jpg" alt="...">
                                                        </div>
                                                        <div class="Message__highlight">
                                                            <span class="Message__highlight-name">Sara Souaidan</span>
                                                            <p class="Message__highlight-excerpt">Hello there!</p>
                                                            <p class="Message__highlight-time">1 hour ago</p>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="Message list-group-item">
                                                    <button class="Message__status Message__status--read" type="button" name="button"></button>
                                                    <a href="">
                                                        <div class="Message__avatar Message__avatar--danger pull-left" href="">
                                                            <img src="imgs/a0.jpg" alt="...">
                                                        </div>
                                                        <div class="Message__highlight">
                                                            <span class="Message__highlight-name">Addy Osmany</span>
                                                            <p class="Message__highlight-excerpt">Blah Blah Blah</p>
                                                            <p class="Message__highlight-time">1 hour ago</p>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="Message list-group-item">
                                                    <button class="Message__status Message__status--read" type="button" name="button"></button>
                                                    <a href="">
                                                        <div class="Message__avatar Message__avatar--danger pull-left" href="">
                                                            <img src="imgs/a0.jpg" alt="...">
                                                        </div>
                                                        <div class="Message__highlight">
                                                            <span class="Message__highlight-name">Picaso Patel</span>
                                                            <p class="Message__highlight-excerpt">Bhai, are you there?</p>
                                                            <p class="Message__highlight-time">2 years ago</p>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="Message list-group-item">
                                                    <button class="Message__status Message__status--read" type="button" name="button"></button>
                                                    <a href="">
                                                        <div class="Message__avatar Message__avatar--danger pull-left" href="">
                                                            <img src="imgs/a0.jpg" alt="...">
                                                        </div>
                                                        <div class="Message__highlight">
                                                            <span class="Message__highlight-name">Bengali Tiger</span>
                                                            <p class="Message__highlight-excerpt">Mu ha ha</p>
                                                            <p class="Message__highlight-time">10 years ago</p>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                            <div class="dropdown-footer"><a href="">View more</a></div>
                                        </ul>
                                        <!--/ dropdown -->
                                    </li>

                                    <li class="dropdown dropdown-usermenu">
                                        <a href="#" class=" dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                            <div class="user-avatar"><img src="imgs/a0.jpg" alt="..."></div>
                                            <span class="hidden-sm hidden-xs">John Doe</span>
                                            <!--<i class="fa fa-angle-down"></i>-->
                                            <span class="caret hidden-sm hidden-xs"></span>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-usermenu pull-right">
                                            <li><a href="#"><i class="fa fa-cogs"></i>  Settings</a></li>
                                            <li><a href="#"><i class="fa fa-user"></i>  Profile</a></li>
                                            <li><a href="#"><i class="fa fa-commenting-o"></i>  Feedback</a></li>
                                            <li><a href="#"><i class="fa fa-life-ring"></i>  Help</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#"><i class="fa fa-sign-out"></i> Log Out</a></li>
                                        </ul>
                                    </li>

                                    <li>
                                        <a data-toggle="ui-aside-right" href=""><i class="glyphicon glyphicon-option-vertical"></i></a>
                                    </li>
                                </ul>
                                <!--notification end-->

                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!--header end-->

            <!--nav start-->
            <nav class="navbar navbar-inverse yamm navbar-default hori-nav " role="navigation">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="navbar-header">

                                <!--toggle bar for responsive star-->
                                <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#main-navigation">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <!--toggle bar for responsive end-->

                            </div>

                            <div class="collapse navbar-collapse" id="main-navigation">

                                <ul class="nav navbar-nav">
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-submenu>
                                            Dashboad <span class="fa fa-angle-down"></span>
                                        </a>

                                        <ul class="dropdown-menu">
                                            <li><a tabindex="0" href="index.html"><i class="fa fa-home"></i> Dashboard Default</a></li>
                                            <li><a tabindex="0" href="dashboard-horizontal-nav.html"><i class="fa fa-compass"></i> Dashboard 2 <small class="label label-danger">TopNav</small></a></li>
                                            <li><a tabindex="0" href="dashboard-compact.html"><i class="fa fa-dashboard"></i> Dashboard 3 <small class="label label-success">Sm Nav</small></a></li>
                                            <li><a tabindex="0" href="dashboard-mega-dropdown.html"><i class="fa fa-plane"></i> Dashboard 4 <small class="label label-primary">eCom..</small></a></li>
                                            <li><a tabindex="0" href="dashboard-lightsidebar.html"><i class="fa fa-bullhorn"></i> Dashboard 5 <small class="label label-info">Light</small></a></li>

                                        </ul>
                                    </li>
                                    <li class="dropdown mega-dropdown yamm-half">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">Components <span class="fa fa-angle-down"></span></a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <div class="yamm-content">
                                                    <div class="row">

                                                        <ul class="col-sm-4 list-unstyled">
                                                            <li><a href="#"> Link Item </a></li>
                                                            <li><a href="#"> Link Item </a></li>
                                                            <li><a href="#"> Link Item </a></li>
                                                            <li><a href="#"> Link Item </a></li>
                                                            <li><a href="#"> Link Item </a></li>
                                                            <li><a href="#"> Link Item </a></li>
                                                        </ul>
                                                        <ul class="col-sm-4 list-unstyled">
                                                            <li><a href="#"> Link Item </a></li>
                                                            <li><a href="#"> Link Item </a></li>
                                                            <li><a href="#"> Link Item </a></li>
                                                            <li><a href="#"> Link Item </a></li>
                                                            <li><a href="#"> Link Item </a></li>
                                                            <li><a href="#"> Link Item </a></li>
                                                        </ul>

                                                        <ul class="col-sm-4 list-unstyled">
                                                            <li><a href="#"> Link Item </a></li>
                                                            <li><a href="#"> Link Item </a></li>
                                                            <li><a href="#"> Link Item </a></li>
                                                            <li><a href="#"> Link Item </a></li>
                                                            <li><a href="#"> Link Item </a></li>
                                                            <li><a href="#"> Link Item </a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown mega-dropdown yamm-fw">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">Features <span class="fa fa-angle-down"></span></a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <div class="yamm-content">
                                                    <div class="row">

                                                        <ul class="col-sm-3 list-unstyled">
                                                            <li><a href="#"> Link Item </a></li>
                                                            <li><a href="#"> Link Item </a></li>
                                                            <li><a href="#"> Link Item </a></li>
                                                            <li><a href="#"> Link Item </a></li>
                                                            <li><a href="#"> Link Item </a></li>
                                                            <li><a href="#"> Link Item </a></li>
                                                        </ul>
                                                        <ul class="col-sm-3 list-unstyled">
                                                            <li><a href="#"> Link Item </a></li>
                                                            <li><a href="#"> Link Item </a></li>
                                                            <li><a href="#"> Link Item </a></li>
                                                            <li><a href="#"> Link Item </a></li>
                                                            <li><a href="#"> Link Item </a></li>
                                                            <li><a href="#"> Link Item </a></li>
                                                        </ul>

                                                        <ul class="col-sm-3 list-unstyled">
                                                            <li><a href="#"> Link Item </a></li>
                                                            <li><a href="#"> Link Item </a></li>
                                                            <li><a href="#"> Link Item </a></li>
                                                            <li><a href="#"> Link Item </a></li>
                                                            <li><a href="#"> Link Item </a></li>
                                                            <li><a href="#"> Link Item </a></li>
                                                        </ul>
                                                        <ul class="col-sm-3 list-unstyled">
                                                            <li><a href="#"> Link Item </a></li>
                                                            <li><a href="#"> Link Item </a></li>
                                                            <li><a href="#"> Link Item </a></li>
                                                            <li><a href="#"> Link Item </a></li>
                                                            <li><a href="#"> Link Item </a></li>
                                                            <li><a href="#"> Link Item </a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-submenu>
                                            Apps <span class="fa fa-angle-down"></span>
                                        </a>

                                        <ul class="dropdown-menu">
                                            <li class="dropdown-submenu">
                                                <a tabindex="0">Action</a>

                                                <ul class="dropdown-menu">
                                                    <li class="dropdown-submenu">
                                                        <a tabindex="0">Another sub action</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a tabindex="0">Sub action</a></li>
                                                            <li><a tabindex="0">Another sub action</a></li>
                                                            <li><a tabindex="0">Something else here</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown-submenu">
                                                        <a tabindex="0">Another action</a>

                                                        <ul class="dropdown-menu">
                                                            <li><a tabindex="0">Sub action</a></li>
                                                            <li><a tabindex="0">Another sub action</a></li>
                                                            <li><a tabindex="0">Something else here</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown-submenu">
                                                <a tabindex="0">Another action</a>

                                                <ul class="dropdown-menu">
                                                    <li><a tabindex="0">Sub action</a></li>
                                                    <li><a tabindex="0">Another sub action</a></li>
                                                    <li><a tabindex="0">Something else here</a></li>
                                                </ul>
                                            </li>
                                            <li><a tabindex="0">Something else here</a></li>

                                            <li><a tabindex="0">Separated link</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-submenu >
                                            Data Tables <span class="fa fa-angle-down"></span>
                                        </a>

                                        <ul class="dropdown-menu">
                                            <li class="dropdown-submenu">
                                                <a tabindex="0">Action</a>

                                                <ul class="dropdown-menu">
                                                    <li><a tabindex="0">Sub action</a></li>
                                                    <li class="dropdown-submenu">
                                                        <a tabindex="0">Another sub action</a>

                                                        <ul class="dropdown-menu">
                                                            <li><a tabindex="0">Sub action</a></li>
                                                            <li><a tabindex="0">Another sub action</a></li>
                                                            <li><a tabindex="0">Something else here</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a tabindex="0">Something else here</a></li>
                                                    <li class="dropdown-submenu">
                                                        <a tabindex="0">Another action</a>

                                                        <ul class="dropdown-menu">
                                                            <li><a tabindex="0">Sub action</a></li>
                                                            <li><a tabindex="0">Another sub action</a></li>
                                                            <li><a tabindex="0">Something else here</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown-submenu">
                                                <a tabindex="0">Another action</a>

                                                <ul class="dropdown-menu">
                                                    <li><a tabindex="0">Sub action</a></li>
                                                    <li><a tabindex="0">Another sub action</a></li>
                                                    <li><a tabindex="0">Something else here</a></li>
                                                </ul>
                                            </li>
                                            <li><a tabindex="0">Something else here</a></li>
                                            <li><a tabindex="0">Separated link</a></li>
                                        </ul>
                                    </li>

                                    <li class="dropdown">
                                        <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-submenu >
                                            Forms <span class="fa fa-angle-down"></span>
                                        </a>

                                        <ul class="dropdown-menu">
                                            <li class="dropdown-submenu">
                                                <a tabindex="0">Action</a>

                                                <ul class="dropdown-menu">
                                                    <li><a tabindex="0">Sub action</a></li>
                                                    <li class="dropdown-submenu">
                                                        <a tabindex="0">Another sub action</a>

                                                        <ul class="dropdown-menu">
                                                            <li><a tabindex="0">Sub action</a></li>
                                                            <li><a tabindex="0">Another sub action</a></li>
                                                            <li><a tabindex="0">Something else here</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a tabindex="0">Something else here</a></li>
                                                    <li class="dropdown-submenu">
                                                        <a tabindex="0">Another action</a>

                                                        <ul class="dropdown-menu">
                                                            <li><a tabindex="0">Sub action</a></li>
                                                            <li><a tabindex="0">Another sub action</a></li>
                                                            <li><a tabindex="0">Something else here</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown-submenu">
                                                <a tabindex="0">Another action</a>

                                                <ul class="dropdown-menu">
                                                    <li><a tabindex="0">Sub action</a></li>
                                                    <li><a tabindex="0">Another sub action</a></li>
                                                    <li><a tabindex="0">Something else here</a></li>
                                                </ul>
                                            </li>
                                            <li><a tabindex="0">Something else here</a></li>
                                            <li><a tabindex="0">Separated link</a></li>
                                        </ul>
                                    </li>

                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
            </nav>
            <!--nav end-->


            <!--main content start-->
            <div id="content" class="ui-content ui-content-aside-overlay">
                <div class="ui-content-body">

                    <div class="container">

                        <!--page title and breadcrumb start -->
                        <div class="row">
                            <div class="col-md-8">
                                <h1 class="page-title"> Admin Dashboard
                                    <small>data, statistics, charts, recent reports and many more</small>
                                </h1>
                            </div>
                            <div class="col-md-4">
                                <ul class="breadcrumb pull-right">
                                    <li>Home</li>
                                    <li><a href="#" class="active">Dashboard</a></li>
                                </ul>
                            </div>
                        </div>
                        <!--page title and breadcrumb end -->

                        <!--states start-->
                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                                <div class="panel short-states">
                                    <div class="panel-title">
                                        <h4> <span class="label label-danger pull-right">Daily Income</span></h4>
                                    </div>
                                    <div class="panel-body">
                                        <h1>$1,3012</h1>
                                        <div class="text-danger pull-right">53% <i class="fa fa-bolt"></i></div>
                                        <small>Daily income</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="panel short-states">
                                    <div class="panel-title">
                                        <h4> <span class="label label-info pull-right">Weekly Income</span></h4>
                                    </div>
                                    <div class="panel-body">
                                        <h1>$5,534</h1>
                                        <div class="text-info pull-right">65% <i class="fa fa-level-up"></i></div>
                                        <small>Weekly Income</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="panel short-states">
                                    <div class="panel-title">
                                        <h4> <span class="label label-warning pull-right">Monthly Income</span></h4>
                                    </div>
                                    <div class="panel-body">
                                        <h1>$22,329</h1>
                                        <div class="text-warning pull-right">77% <i class="fa fa-level-down"></i></div>
                                        <small>Monthly Income</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="panel short-states">
                                    <div class="panel-title">
                                        <h4> <span class="label label-success pull-right">Annual Income</span></h4>
                                    </div>
                                    <div class="panel-body">
                                        <h1>$268,188</h1>
                                        <div class="text-success pull-right">88% <i class="fa fa-level-up"></i></div>
                                        <small>Annual Income</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--states end-->

                        <div class="row">
                            <div class="col-md-6">
                                <div class="panel">
                                    <header class="panel-heading">
                                        Project Statistics
                                        <span class="tools pull-right">
                                            <a class="close-box fa fa-times" href="javascript:;"></a>
                                        </span>
                                    </header>
                                    <div class="panel-body">
                                        <div id="b-line" style="height: 370px"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="panel">
                                    <header class="panel-heading">
                                        Product Sales
                                        <span class="tools pull-right">
                                            <a class="close-box fa fa-times" href="javascript:;"></a>
                                        </span>
                                    </header>
                                    <div class="panel-body">
                                        <div id="b-area" style="height: 370px"></div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!--task distribution start-->
                        <div class="row">
                            <!--charts start-->
                            <div class="col-md-7 ">
                                <div class="panel">
                                    <header class="panel-heading panel-border">
                                        Latest Order
                                        <span class="tools pull-right">
                                            <a class="refresh-box fa fa-repeat" href="javascript:;"></a>
                                            <a class="collapse-box fa fa-chevron-down" href="javascript:;"></a>
                                            <a class="close-box fa fa-times" href="javascript:;"></a>
                                        </span>
                                    </header>
                                    <div class="panel-body">
                                        <div class="order-short-info">
                                            <span class="mtop-10"> Paid Orders: <strong>123 <i class="fa fa-level-up text-primary"></i></strong>,  Unpaid Orders: <strong> 212 <i class="fa fa-level-down text-danger"></i></strong></span>
                                            <a href="#" class="pull-right pull-left-xs btn btn-primary btn-sm">View Full Orders</a>
                                        </div>
                                        <hr/>
                                        <div class="table-responsive">
                                            <table  class="table table-hover latest-order">
                                                <thead>
                                                <tr>
                                                    <th>Product ID</th>
                                                    <th>Customer Name</th>
                                                    <th>Invoice#</th>
                                                    <th>Amount</th>
                                                    <th>Status</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>PID-001</td>
                                                    <td>Jhon Wiliumson</td>
                                                    <td><a href="#">IN-0001</a></td>
                                                    <td>$ 1234.00</td>
                                                    <td>
                                                        <span class="label label-success">Paid</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>PID-002</td>
                                                    <td>Jakolin Jack</td>
                                                    <td><a href="#">IN-0002</a></td>
                                                    <td>$ 2123.00</td>
                                                    <td>
                                                        <span class="label label-danger">Overdue</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>PID-003</td>
                                                    <td>Anderson Doe</td>
                                                    <td><a href="#">IN-0003</a></td>
                                                    <td>$ 345.00</td>
                                                    <td>
                                                        <span class="label label-warning">Due</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>PID-004</td>
                                                    <td>Margarita Rose</td>
                                                    <td><a href="#">IN-0004</a></td>
                                                    <td>$ 45651.00</td>
                                                    <td>
                                                        <span class="label label-success">Paid</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>PID-005</td>
                                                    <td>Jonathan Smith</td>
                                                    <td><a href="#">IN-0005</a></td>
                                                    <td>$ 2123.00</td>
                                                    <td>
                                                        <span class="label label-danger">Overdue</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>PID-006</td>
                                                    <td>Nekol Dimon</td>
                                                    <td><a href="#">IN-0006</a></td>
                                                    <td>$ 9876.00</td>
                                                    <td>
                                                        <span class="label label-warning">Due</span>
                                                    </td>
                                                </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--charts end-->

                            <div class="col-md-5">
                                <div class="panel">
                                    <!--<header class="panel-heading">-->
                                        <!--Polar Chart-->
                                        <!--<span class="tools pull-right">-->
                                            <!--<a class="refresh-box fa fa-repeat" href="javascript:;"></a>-->
                                            <!--<a class="collapse-box fa fa-chevron-down" href="javascript:;"></a>-->
                                            <!--<a class="close-box fa fa-times" href="javascript:;"></a>-->
                                        <!--</span>-->
                                    <!--</header>-->
                                    <div class="panel-body">
                                        <div id="polar-chart"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--task distribution end-->

                        <div class="row">
                            <!--daily visit start-->
                            <div class="  col-md-4  ">
                                <div class="panel">
                                    <header class="panel-heading panel-border">
                                        Daily Visit
                                        <span class="tools pull-right">
                                            <a class="refresh-box fa fa-repeat" href="javascript:;"></a>
                                            <a class="collapse-box fa fa-chevron-down" href="javascript:;"></a>
                                            <a class="close-box fa fa-times" href="javascript:;"></a>
                                        </span>
                                    </header>
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-md-4 text-center">
                                                <div class="chart-wrap">
                                                    <div id="bar-chart-1"></div>
                                                    <small>Laptop</small>
                                                </div>
                                            </div>
                                            <div class="col-md-4 text-center">
                                                <div class="chart-wrap">
                                                    <div id="bar-chart-2"></div>
                                                    <small>iPhone</small>
                                                </div>
                                            </div>
                                            <div class="col-md-4 text-center">
                                                <div class="chart-wrap">
                                                    <div id="bar-chart-3"></div>
                                                    <small>iPad</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--daily visit end-->
                            <!--Visitor Graph start-->
                            <div class="col-md-4 ">
                                <div class="panel">
                                    <header class="panel-heading panel-border">
                                        Visitor Graph
                                        <span class="tools pull-right">
                                            <a class="refresh-box fa fa-repeat" href="javascript:;"></a>
                                            <a class="collapse-box fa fa-chevron-down" href="javascript:;"></a>
                                            <a class="close-box fa fa-times" href="javascript:;"></a>
                                        </span>
                                    </header>
                                    <div class="panel-body text-center">
                                        <!--<div class="chart-wrap">-->
                                        <!--<div id="line-chart-1"></div>-->
                                        <!--<small class="mbot-2">Page visit <span class="h5">10,090</span></small>-->
                                        <!--&lt;!&ndash;<small>Page visit</small>&ndash;&gt;-->
                                        <!--</div>-->
                                        <div class="chart-wrap">
                                            <div id="line-chart-2"></div>
                                            <small class="mbot-2">Unique visitor <span class="h5">8,129</span></small>
                                            <!--<small>Avg. visit Duration</small>-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Visitor Graph end-->
                            <!--Random Info start-->
                            <div class="col-md-4 ">
                                <div class="panel">
                                    <header class="panel-heading panel-border">
                                        Random Info
                                        <span class="tools pull-right">
                                            <a class="refresh-box fa fa-repeat" href="javascript:;"></a>
                                            <a class="collapse-box fa fa-chevron-down" href="javascript:;"></a>
                                            <a class="close-box fa fa-times" href="javascript:;"></a>
                                        </span>
                                    </header>
                                    <div class="panel-body text-center">
                                        <div class="row">
                                            <div class="col-md-4 col-sm-4 text-center">
                                                <span class="chart" data-percent="80">
                                                    <span class="percent">80</span>
                                                </span>
                                                <div><small>Page Views</small></div>
                                            </div>
                                            <div class="col-md-4 col-sm-4 text-center">
                                                <span class="chart" data-percent="75">
                                                    <span class="percent">75</span>
                                                </span>
                                                <div><small>New Clients</small></div>
                                            </div>
                                            <div class="col-md-4 col-sm-4 text-center">
                                                <span class="chart" data-percent="40">
                                                    <span class="percent">40</span>
                                                </span>
                                                <div><small>Task Finished</small></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Random Info end-->

                        </div>


                        <div class="row">
                            <!--task duration start-->
                            <div class="col-md-5 ">
                                <div class="panel">
                                    <header class="panel-heading">
                                        Task Distribution
                                        <span class="tools pull-right">
                                            <a class="close-box fa fa-times" href="javascript:;"></a>
                                        </span>
                                    </header>
                                    <div>
                                        <ul class="Notification-list list-group">

                                            <li class="Notification list-group-item">
                                                <button class="Notification__status Notification__status--read" type="button" name="button"></button>
                                                <a href="javaScritp:;">
                                                    <div class="Notification__avatar pull-left" >
                                                        <img src="imgs/a0.jpg" alt="...">
                                                    </div>
                                                    <div class="Notification__highlight">
                                                        <p class="Notification__highlight-excerpt"><b>Jonathan Smith</b> and 4 other people like your post “Awesome Bootstrap dashbord”.</p>
                                                        <p class="Notification__highlight-time">1 day ago</p>
                                                    </div>
                                                </a>
                                            </li>


                                            <li class="Notification list-group-item">
                                                <button class="Notification__status Notification__status--read" type="button" name="button"></button>
                                                <a href="javaScritp:;">
                                                    <div class="Notification__avatar pull-left">
                                                        <img src="imgs/a1.jpg" alt="...">
                                                    </div>
                                                    <div class="Notification__highlight">
                                                        <p class="Notification__highlight-excerpt"><b>Tomas Edison</b> and 4 other people like your post “keep clam and watch the fizz”.</p>
                                                        <p class="Notification__highlight-time">1 day ago</p>
                                                    </div>
                                                </a>
                                            </li>

                                            <li class="Notification list-group-item">
                                                <button class="Notification__status Notification__status--unread" type="button" name="button"></button>
                                                <a href="javaScritp:;">
                                                    <div class="Notification__avatar pull-left">
                                                        <img src="imgs/a0.jpg" alt="...">
                                                    </div>
                                                    <div class="Notification__highlight">
                                                        <p class="Notification__highlight-excerpt"><b>Luciad Extic</b> can join conference.</p>
                                                        <p class="Notification__highlight-time">1 hour ago</p>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="Notification list-group-item">
                                                <button class="Notification__status Notification__status--read" type="button" name="button"></button>
                                                <a href="javaScritp:;">
                                                    <div class="Notification__avatar pull-left">
                                                        <img src="imgs/a2.jpg" alt="...">
                                                    </div>
                                                    <div class="Notification__highlight">
                                                        <p class="Notification__highlight-excerpt"><b>Tomas Edison</b> and 4 other people like your post “keep clam and watch the fizz”.</p>
                                                        <p class="Notification__highlight-time">1 day ago</p>
                                                    </div>
                                                </a>
                                            </li>


                                            <li class="Notification list-group-item">
                                                <button class="Notification__status Notification__status--read" type="button" name="button"></button>
                                                <a href="javaScritp:;">
                                                    <div class="Notification__avatar pull-left">
                                                        <img src="imgs/a1.jpg" alt="...">
                                                    </div>
                                                    <div class="Notification__highlight">
                                                        <p class="Notification__highlight-excerpt"><b>Tomas Edison</b> and 4 other people like your post “keep clam and watch the fizz”.</p>
                                                        <p class="Notification__highlight-time">1 day ago</p>
                                                    </div>
                                                </a>
                                            </li>

                                            <li class="Notification list-group-item">
                                                <button class="Notification__status Notification__status--unread" type="button" name="button"></button>
                                                <a href="javaScritp:;">
                                                    <div class="Notification__avatar pull-left">
                                                        <img src="imgs/a0.jpg" alt="...">
                                                    </div>
                                                    <div class="Notification__highlight">
                                                        <p class="Notification__highlight-excerpt"><b>Luciad Extic</b> can join conference.</p>
                                                        <p class="Notification__highlight-time">1 hour ago</p>
                                                    </div>
                                                </a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--task duration end-->

                            <!--horzontal timeline start-->
                            <div class="col-md-7 ">
                                <div class="panel">
                                    <header class="panel-heading panel-border">
                                        Horizontal Timeline
                                        <span class="tools pull-right">
                                            <a class="close-box fa fa-times" href="javascript:;"></a>
                                        </span>
                                    </header>
                                    <div class="panel-body">
                                        <section class="cd-horizontal-timeline">
                                            <div class="timeline">
                                                <div class="events-wrapper">
                                                    <div class="events">
                                                        <ol class="list-unstyled">
                                                            <li><a href="#0" data-date="11/01/2014" class="selected"><span>11 Jan</span></a></li>
                                                            <li><a href="#0" data-date="28/02/2014"><span>28 Feb</span></a></li>
                                                            <li><a href="#0" data-date="20/04/2014"><span>20 Mar</span></a></li>
                                                            <li><a href="#0" data-date="20/05/2014"><span>20 May</span></a></li>
                                                            <li><a href="#0" data-date="09/07/2014"><span>09 Jul</span></a></li>
                                                            <li><a href="#0" data-date="30/08/2014"><span>30 Aug</span></a></li>
                                                            <li><a href="#0" data-date="15/09/2014"><span>15 Sep</span></a></li>
                                                            <li><a href="#0" data-date="01/11/2014"><span>01 Nov</span></a></li>
                                                            <li><a href="#0" data-date="10/12/2014"><span>10 Dec</span></a></li>
                                                            <li><a href="#0" data-date="19/01/2015"><span>29 Jan</span></a></li>
                                                            <li><a href="#0" data-date="03/03/2015"><span>3 Mar</span></a></li>
                                                        </ol>

                                                        <span class="filling-line" aria-hidden="true"></span>
                                                    </div>
                                                </div>

                                                <ul class="cd-timeline-navigation list-unstyled">
                                                    <li><a href="#0" class="prev inactive">Prev</a></li>
                                                    <li><a href="#0" class="next">Next</a></li>
                                                </ul>
                                            </div>

                                            <div class="events-content">
                                                <ol class="list-unstyled">
                                                    <li class="selected" data-date="11/01/2014">
                                                        <h2>Timeline Title One</h2>
                                                        <em>January 11th, 2014</em>
                                                        <p>
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
                                                        </p>
                                                    </li>

                                                    <li data-date="28/02/2014">
                                                        <h2>Timeline Title Two</h2>
                                                        <em>February 28th, 2014</em>
                                                        <p>
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
                                                        </p>
                                                    </li>

                                                    <li data-date="20/04/2014">
                                                        <h2>Timeline Title Three</h2>
                                                        <em>March 20th, 2014</em>
                                                        <p>
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
                                                        </p>
                                                    </li>

                                                    <li data-date="20/05/2014">
                                                        <h2>Timeline Title Four</h2>
                                                        <em>May 20th, 2014</em>
                                                        <p>
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
                                                        </p>
                                                    </li>

                                                    <li data-date="09/07/2014">
                                                        <h2>Timeline Title Five</h2>
                                                        <em>July 9th, 2014</em>
                                                        <p>
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
                                                        </p>
                                                    </li>

                                                    <li data-date="30/08/2014">
                                                        <h2>Timeline Title Six</h2>
                                                        <em>August 30th, 2014</em>
                                                        <p>
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
                                                        </p>
                                                    </li>

                                                    <li data-date="15/09/2014">
                                                        <h2>Timeline Title Seven</h2>
                                                        <em>September 15th, 2014</em>
                                                        <p>
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
                                                        </p>
                                                    </li>

                                                    <li data-date="01/11/2014">
                                                        <h2>Timeline Title Eight</h2>
                                                        <em>November 1st, 2014</em>
                                                        <p>
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
                                                        </p>
                                                    </li>

                                                    <li data-date="10/12/2014">
                                                        <h2>Timeline Title Nine</h2>
                                                        <em>December 10th, 2014</em>
                                                        <p>
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
                                                        </p>
                                                    </li>

                                                    <li data-date="19/01/2015">
                                                        <h2>Timeline Title Ten</h2>
                                                        <em>January 19th, 2015</em>
                                                        <p>
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
                                                        </p>
                                                    </li>

                                                    <li data-date="03/03/2015">
                                                        <h2>Timeline Title Eleven</h2>
                                                        <em>March 3rd, 2015</em>
                                                        <p>
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
                                                        </p>
                                                    </li>
                                                </ol>
                                            </div>
                                        </section>
                                    </div>

                                </div>
                            </div>
                            <!--horzontal timeline end-->

                        </div>

                    </div>

                    <!--right side widget start-->
                    <div class="ui-aside-right " ui-aside-right>

                        <!--customer start-->
                        <div class="aside-widget">
                            <h5>Online Customer</h5>
                            <ul class="contact-list">
                                <li class="online">
                                    <div class="media">
                                        <a href="#" class="pull-left media-thumb">
                                            <img alt="" src="imgs/a0.jpg" class="media-object">
                                            <span class="online"></span>
                                        </a>
                                        <div class="media-body">
                                            <strong>John Doe</strong>
                                            <small>General Manager at TB</small>
                                        </div>
                                    </div><!-- media -->
                                </li>
                                <li class="online">
                                    <div class="media">
                                        <a href="#" class="pull-left media-thumb">
                                            <img alt="" src="imgs/a1.jpg" class="media-object">
                                            <span class="offline"></span>
                                        </a>
                                        <div class="media-body">
                                            <strong>Jonathan Smith</strong>
                                            <small>Lead Designer</small>
                                        </div>
                                    </div><!-- media -->
                                </li>

                                <li class="online">
                                    <div class="media">
                                        <a href="#" class="pull-left media-thumb">
                                            <img alt="" src="imgs/a2.jpg" class="media-object">
                                            <span class="busy"></span>
                                        </a>
                                        <div class="media-body">
                                            <strong>Margarita Rose</strong>
                                            <small>Human Resource Manager</small>
                                        </div>
                                    </div><!-- media -->
                                </li>
                                <li class="online">
                                    <div class="media">
                                        <a href="#" class="pull-left media-thumb">
                                            <img alt="" src="imgs/a0.jpg" class="media-object">
                                            <span class="away"></span>
                                        </a>
                                        <div class="media-body">
                                            <strong>Mr. Kameron De</strong>
                                            <small>Marketing Officer</small>
                                        </div>
                                    </div><!-- media -->
                                </li>
                                <li class="online">
                                    <div class="media">
                                        <a href="#" class="pull-left media-thumb">
                                            <img alt="" src="imgs/a2.jpg" class="media-object">
                                            <span class="offline"></span>
                                        </a>
                                        <div class="media-body">
                                            <strong>Mr. Mosa</strong>
                                            <small>Development Manager</small>
                                        </div>
                                    </div><!-- media -->
                                </li>
                            </ul>
                        </div>
                        <!--customer end-->

                        <!--stock start-->
                        <div class="aside-widget">
                            <h5>Recent Stocks</h5>
                            <table class="table">
                                <tbody>
                                <tr>
                                    <td>DOWJ</td>
                                    <td>19,764.00</td>
                                    <td><small class="label label-success">+ 0.08%</small></td>
                                </tr>
                                <tr>
                                    <td>AAPL</td>
                                    <td>116.90</td>
                                    <td><small class="label label-danger">- 0.29%</small></td>
                                </tr>
                                <tr>
                                    <td>SBUX</td>
                                    <td>50.33</td>
                                    <td><small class="label label-warning">+ 0.23%</small></td>
                                </tr>
                                <tr>
                                    <td>NKE</td>
                                    <td>164.00</td>
                                    <td><small class="label label-success">+ 0.08%</small></td>
                                </tr>
                                <tr>
                                    <td>YHOO</td>
                                    <td>764.00</td>
                                    <td><small class="label label-danger">- 0.91%</small></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <!--stock end-->

                        <!--task start-->
                        <div class="aside-widget">
                            <h5>Task Pending</h5>
                            <ul class="list-unstyled">
                                <li>
                                    <a href="#">
                                        <div class="task-info">
                                            Wp Development (66%)
                                        </div>
                                        <div class="progress progress-striped">
                                            <div style="width: 66%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="66" role="progressbar" class="progress-bar progress-bar-warning">
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="task-info">
                                            Dashboard Design (80%)
                                        </div>
                                        <div class="progress progress-striped">
                                            <div style="width: 80%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="80" role="progressbar" class="progress-bar progress-bar-success ">
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="task-info">
                                            Marketing (40%)
                                        </div>
                                        <div class="progress progress-striped">
                                            <div style="width: 40%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="40" role="progressbar" class="progress-bar progress-bar-info">
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="task-info">
                                            Mobile App Development (33%)
                                        </div>
                                        <div class="progress progress-striped">
                                            <div style="width: 33%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="80" role="progressbar" class="progress-bar progress-bar-danger">
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="text-center">
                                    <a href="#" class="btn btn-sm btn-info btn-block">See All Pending Tasks</a>
                                </li>
                            </ul>
                        </div>
                        <!--task end-->

                    </div>
                    <!--right side widget end-->

                </div>
            </div>
            <!--main content end-->

            <!--footer start-->
            <div id="footer" class="ui-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            2017 &copy; MegaDin by ThemeBucket.
                        </div>
                    </div>
                </div>
            </div>
            <!--footer end-->

        </div>

        <!-- inject:js -->
        <script src="bower_components/jquery/dist/jquery.min.js"></script>
        <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="bower_components/jquery.nicescroll/dist/jquery.nicescroll.min.js"></script>
        <script src="bower_components/autosize/dist/autosize.min.js"></script>
        <!-- endinject -->

        <!--bootstrap-submenu & dropdown-->
        <script src="assets/js/bootstrap-submenu/js/bootstrap-submenu.js"></script>
        <script src="assets/js/bootstrap-hover-dropdown.js"></script>

        <script>
            $(document).ready(function () {

                // yamm mega menu

                $(document).on('click', '.yamm .dropdown-menu', function(e) {
                    e.stopPropagation()
                });

                //bootstrap sub menu

                $('[data-submenu]').submenupicker();


            });
        </script>

        <!--highcharts-->
        <script src="bower_components/highcharts/highcharts.js"></script>
        <script src="bower_components/highcharts/highcharts-more.js"></script>
        <script src="bower_components/highcharts/modules/exporting.js"></script>
        <!--polar-chart init-->
        <script>

            //polar chart

            $(function () {

                Highcharts.chart('polar-chart', {

                    chart: {
                        polar: true
                    },

                    title: {
                        text: 'Highcharts Polar Chart'
                    },

                    pane: {
                        startAngle: 0,
                        endAngle: 360
                    },

                    xAxis: {
                        tickInterval: 45,
                        min: 0,
                        max: 360,
                        labels: {
                            formatter: function () {
                                return this.value + '°';
                            }
                        }
                    },

                    yAxis: {
                        min: 0
                    },

                    plotOptions: {
                        series: {
                            pointStart: 0,
                            pointInterval: 45
                        },
                        column: {
                            pointPadding: 0,
                            groupPadding: 0
                        }
                    },

                    series: [{
                        type: 'column',
                        name: 'Column',
                        data: [8, 7, 6, 5, 4, 3, 2, 1],
                        pointPlacement: 'between'
                    }, {
                        type: 'line',
                        name: 'Line',
                        data: [1, 2, 3, 4, 5, 6, 7, 8]
                    }, {
                        type: 'area',
                        name: 'Area',
                        data: [1, 8, 2, 7, 3, 6, 4, 5]
                    }]
                });
            });
        </script>

        <!--sparkline-->
        <script src="bower_components/bower-jquery-sparkline/dist/jquery.sparkline.retina.js"></script>
        <script src="assets/js/init-sparkline.js"></script>


        <!--echarts-->
        <script type="text/javascript" src="assets/js/echarts/echarts-all-3.js"></script>

        <!--basic line echarts init-->
        <script type="text/javascript">

            var chartOneDom = document.getElementById("b-line");
            var chartOne = echarts.init(chartOneDom);

            var chartOneOption = {
                color: ['#4aa9e9','#eac459'],

                tooltip : {
                    trigger: 'axis'
                },
                legend: {
                    data:['Max','Min']
                },

                calculable : true,
                xAxis : [
                    {
                        type : 'category',
                        boundaryGap : false,
                        data: ['Sat','Sun','Mon','Tue','Wed','Thu','Fri']
                    }
                ],
                yAxis : [
                    {
                        type : 'value',
                        axisLabel : {
                            formatter: '{value} °C'
                        }
                    }
                ],
                series : [
                    {
                        name:'Max',
                        type:'line',
                        data:[11, 11, 15, 13, 12, 13, 10],
                        markPoint : {
                            data : [
                                {type : 'max', name: 'Max'},
                                {type : 'min', name: 'Min'}
                            ]
                        },
                        markLine : {
                            data : [
                                {type : 'average', name: 'Average'}
                            ]
                        }
                    },
                    {
                        name:'Min',
                        type:'line',
                        data:[1, -2, 2, 5, 3, 2, 0],
                        markPoint : {
                            data : [
                                {name : 'Min of Week', value : -2, xAxis: 1, yAxis: -1.5}
                            ]
                        },
                        markLine : {
                            data : [
                                {type : 'average', name : 'Average'}
                            ]
                        }
                    }
                ]
            };

            if (chartOneOption && typeof chartOneOption === "object") {
                chartOne.setOption(chartOneOption, true);
            }

        </script>

        <!--basic area echarts init-->
        <script type="text/javascript">

            var dom = document.getElementById("b-area");
            var myChart = echarts.init(dom);

            var app = {};
            option = null;
            option = {
                color: ['#8dcaf3','#67f3e4', '#4aa9e9' ],

                tooltip : {
                    trigger: 'axis'
                },
                legend: {
                    data:['Preorder','Sale','Deal']
                },

                calculable : true,
                xAxis : [
                    {
                        type : 'category',
                        boundaryGap : false,
                        data : ['Mon','Tue','Wed','Thu','Fri','Sat','Sun']
                    }
                ],
                yAxis : [
                    {
                        type : 'value'
                    }
                ],
                series : [
                    {
                        name:'Deal',
                        type:'line',
                        smooth:true,
                        itemStyle: {normal: {areaStyle: {type: 'default'}}},
                        data:[10, 12, 21, 54, 260, 830, 710]
                    },
                    {
                        name:'Sale',
                        type:'line',
                        smooth:true,
                        itemStyle: {normal: {areaStyle: {type: 'default'}}},
                        data:[30, 182, 434, 791, 390, 30, 10]
                    },
                    {
                        name:'Preorder',
                        type:'line',
                        smooth:true,
                        itemStyle: {normal: {areaStyle: {type: 'default'}}},
                        data:[1320, 1132, 601, 234, 120, 90, 20]
                    }
                ]
            };

            ;
            if (option && typeof option === "object") {
                myChart.setOption(option, false);
            }

            /**
             * Resize chart on window resize
             * @return {void}
             */
            window.onresize = function() {
                chartOne.resize();
                myChart.resize();
            };


        </script>

        <!--easypiechart-->
        <script src="assets/js/jquery-easy-pie-chart/jquery.easypiechart.js"></script>
        <script>
            $(function() {
                $('.chart').easyPieChart({
                    //your configuration goes here
                });
            });
        </script>


        <!--horizontal-timeline-->
        <script src="assets/js/horizontal-timeline/js/jquery.mobile.custom.min.js"></script>
        <script src="assets/js/horizontal-timeline/js/main.js"></script>

        <!-- Common Script   -->
        <script src="dist/js/main.js"></script>


    </body>
</html>
