<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
      <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('font-awesome/css/font-awesome.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{ asset('css/ionicons.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

    @yield('customjs')
    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};



    </script>


</head>
<body class="skin-blue layout-boxed sidebar-mini" style="height: 100%;" >

    <div class="wrapper" >
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('home') }}">
                        {{ config('app.name', 'hrmsystem') }}
                    </a>
                </div>
                 <!-- dropdown -->
                 @if (Auth::guest())
                           <!-- nothing are here -->
                  @else
                <ul class="nav navbar-nav" id="mainNav">
                  <li>
                    <a href="#" class="menu_text">Salary</a>
                       <div class="parent_menu" >                                   
                          <div class="dropdown">
                            <ul class="dropdown-menu submenu_employee" id="menu1">
                              <h2 class="name">Employees</h2>
                              <li>
                                <ul class="menu_ul">
                                  <li><a href="#">HTML</a></li>
                                  <li><a href="#">CSS</a></li>
                                  <li><a href="#">JavaScript</a></li>
                                  <li><a href="#">HTML</a></li>
                                  <li><a href="#">CSS</a></li>
                                  <li><a href="#">JavaScript</a></li>
                                  <li><a href="#">JavaScript</a></li>
                                </ul>
                                <ul class="menu_ul">
                                  <li><a href="#">HTML</a></li>
                                  <li><a href="#">CSS</a></li>
                                  <li><a href="#">JavaScript</a></li>
                                  <li><a href="#">HTML</a></li>
                                  <li><a href="#">CSS</a></li>
                                  <li><a href="#">JavaScript</a></li>
                                  <li><a href="#">JavaScript</a></li>
                                </ul>
                                 <ul class="menu_ul">
                                  <li><a href="#">HTML</a></li>
                                  <li><a href="#">CSS</a></li>
                                  <li><a href="#">JavaScript</a></li>
                                  <li><a href="#">HTML</a></li>
                                  <li><a href="#">CSS</a></li>
                                  <li><a href="#">JavaScript</a></li>
                                  <li><a href="#">JavaScript</a></li>
                                </ul>
                              </li>
                            </ul>
                          </div>
                        </div>
                  </li>
                  <li>
                    <a href="#" class="menu_text">Employee</a>
                       <div class="parent_menu" >                                   
                          <div class="dropdown">
                            <ul class="dropdown-menu submenu_employee">
                              <h2 class="name">Employees</h2>
                              <li>
                                <ul class="menu_ul">
                                  <li><a href="#">HTML</a></li>
                                  <li><a href="#">CSS</a></li>
                                  <li><a href="#">JavaScript</a></li>
                                  <li><a href="#">HTML</a></li>
                                  <li><a href="#">CSS</a></li>
                                  <li><a href="#">JavaScript</a></li>
                                  <li><a href="#">JavaScript</a></li>
                                </ul>
                                <ul class="menu_ul">
                                  <li><a href="#">HTML</a></li>
                                  <li><a href="#">CSS</a></li>
                                  <li><a href="#">JavaScript</a></li>
                                  <li><a href="#">HTML</a></li>
                                  <li><a href="#">CSS</a></li>
                                  <li><a href="#">JavaScript</a></li>
                                  <li><a href="#">JavaScript</a></li>
                                </ul>
                                 <ul class="menu_ul">
                                  <li><a href="#">HTML</a></li>
                                  <li><a href="#">CSS</a></li>
                                  <li><a href="#">JavaScript</a></li>
                                  <li><a href="#">HTML</a></li>
                                  <li><a href="#">CSS</a></li>
                                  <li><a href="#">JavaScript</a></li>
                                  <li><a href="#">JavaScript</a></li>
                                </ul>
                              </li>
                            </ul>
                          </div>
                        </div>
                  </li>
                </ul>
                @endif
               <!--  end dropdown -->

                <!-- <div class="collapse navbar-collapse" id="app-navbar-collapse"> -->
                    <!-- Left Side Of Navbar -->

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="#" class="plslogin">Please Login !</a></li>
                        @else
                        <header class="main-header">
                        <!-- Header Navbar -->
                        <nav class="navbar navbar-static-top" role="navigation">
                          <!-- Sidebar toggle button-->
                            <span class="sr-only">Toggle navigation</span>
                          </a>
                          <!-- Navbar Right Menu -->

                          <div class="navbar-custom-menu">

                            <ul class="nav navbar-nav">
                              <!-- Messages: style can be found in dropdown.less-->
                              <li class="dropdown messages-menu">
                                <!-- Menu toggle button -->
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                  <i class="fa fa-envelope-o"></i>
                                  <span class="label label-success">4</span>
                                </a>
                                <ul class="dropdown-menu">
                                  <li class="header">You have 4 messages</li>
                                  <li>
                                    <!-- inner menu: contains the messages -->
                                    <ul class="menu">
                                      <li><!-- start message -->
                                        <a href="#">
                                          <div class="pull-left">
                                            <!-- User Image -->
                                            <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                                          </div>
                                          <!-- Message title and timestamp -->
                                          <h4>
                                            Support Team
                                            <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                          </h4>
                                          <!-- The message -->
                                          <p>Why not buy a new awesome theme?</p>
                                        </a>
                                      </li>
                                      <!-- end message -->
                                    </ul>
                                    <!-- /.menu -->
                                  </li>
                                  <li class="footer"><a href="#">See All Messages</a></li>
                                </ul>
                              </li>
                              <!-- /.messages-menu -->

                              <!-- Notifications Menu -->
                              <li class="dropdown notifications-menu">
                                <!-- Menu toggle button -->
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                  <i class="fa fa-bell-o"></i>
                                  <span class="label label-warning">10</span>
                                </a>
                                <ul class="dropdown-menu">
                                  <li class="header">You have 10 notifications</li>
                                  <li>
                                    <!-- Inner Menu: contains the notifications -->
                                    <ul class="menu">
                                      <li><!-- start notification -->
                                        <a href="#">
                                          <i class="fa fa-users text-aqua"></i> 5 new members joined today
                                        </a>
                                      </li>
                                      <!-- end notification -->
                                    </ul>
                                  </li>
                                  <li class="footer"><a href="#">View all</a></li>
                                </ul>
                              </li>
                              <!-- Tasks Menu -->
                              <li class="dropdown tasks-menu">
                                <!-- Menu Toggle Button -->
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                  <i class="fa fa-flag-o"></i>
                                  <span class="label label-danger">9</span>
                                </a>
                                <ul class="dropdown-menu">
                                  <li class="header">You have 9 tasks</li>
                                  <li>
                                    <!-- Inner menu: contains the tasks -->
                                    <ul class="menu">
                                      <li><!-- Task item -->
                                        <a href="#">
                                          <!-- Task title and progress text -->
                                          <h3>
                                            Design some buttons
                                            <small class="pull-right">20%</small>
                                          </h3>
                                          <!-- The progress bar -->
                                          <div class="progress xs">
                                            <!-- Change the css width attribute to simulate progress -->
                                            <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                              <span class="sr-only">20% Complete</span>
                                            </div>
                                          </div>
                                        </a>
                                      </li>
                                      <!-- end task item -->
                                    </ul>
                                  </li>
                                  <li class="footer">
                                    <a href="#">View all tasks</a>
                                  </li>
                                </ul>
                              </li>
                              <!-- User Account Menu -->
                              <li class="dropdown user user-menu">
                                <!-- Menu Toggle Button -->
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                  <!-- The user image in the navbar-->
                                  <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                                  <!-- hidden-xs hides the username on small devices so only the image appears. -->
                                  <span class="hidden-xs"> {{ Auth::user()->name }}</span>
                                </a>
                                <ul class="dropdown-menu">
                                  <!-- The user image in the menu -->
                                  <li class="user-header">
                                    <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                                    <h4>Alexander Pierce - Web Developer</h4>
                                    <h5><i>Member since Nov. 2012</i></h5>
                                  </li>
                                  <!-- Menu Body -->
                                  <li class="user-body">
                                    <div class="row">
                                      <div class="col-xs-5 text-center">
                                        <a href="#" class="info"> Timesheet</a>
                                      </div>
                                      <div class="col-xs-3 text-center">
                                        <a href="#" class="info"> Leaves</a>
                                      </div>
                                      <div class="col-xs-4 text-center">
                                        <a href="#" class="info"> Tasks</a>
                                      </div>
                                    </div>
                                    <!-- /.row -->
                                  </li>
                                  <!-- Menu Footer-->
                                  <li class="user-footer">
                                    <div class="pull-left">
                                      <a href="profile" class="btn btn-default btn-flat btn_info"><i class="fa fa-user" aria-hidden="true"></i> Profile</a>
                                    </div>
                                    <div class="pull-right">
                                      <a href="{{ route('logout') }}"  onclick="event.preventDefault();
                                                                         document.getElementById('logout-form').submit();" class="btn btn-default btn-flat btn_info"><i class="fa fa-sign-out" aria-hidden="true"></i> Sign out</a>
                                         <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                                {{ csrf_field() }}
                                                            </form>                                                     
                                    </div>
                                  </li>
                                </ul>
                              </li>
                            </ul>
                          </div>
                        </nav>
                        </header>
                        @endif
                    </ul>
            </div>

        </nav>
        @yield('content')
    </div>
    
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/jquery-3.1.1.min.js') }}"></script>

</body>
</html>
