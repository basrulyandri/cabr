<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title')</title>

    <link href="{{url('assets/backend')}}/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{url('assets/backend')}}/font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="{{url('assets/backend')}}/css/animate.css" rel="stylesheet">
    <link href="{{url('assets/backend')}}/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="{!!url('assets/backend')!!}/js/plugins/sweetalert/sweetalert.css">
    <link href="{{url('assets/backend')}}/css/rollo-custom.css" rel="stylesheet">
    @yield('header')
</head>

<body>

    <div id="wrapper">

   @include('layouts.backend.sidebar')

        <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
        <nav class="navbar navbar-static-top  " role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
            <form role="search" class="navbar-form-custom" method="post" action="search_results.html">
                <div class="form-group">
                    <input type="text" placeholder="Search for something..." class="form-control" name="top-search" id="top-search">
                </div>
            </form>
        </div>
            <ul class="nav navbar-top-links navbar-right">
                
                <li class="dropdown">
                    <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell"></i>  <span class="label label-primary">8</span>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="mailbox.html">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> You have 16 messages
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="profile.html">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small">12 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="grid_options.html">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="text-center link-block">
                                <a href="notifications.html">
                                    <strong>See All Alerts</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </div>
                        </li>
                    </ul>
                </li>


                <li>
                    <a href="{{route('auth.logout')}}">
                        <i class="fa fa-sign-out"></i> Log out
                    </a>
                </li>
            </ul>

        </nav>
        </div>

        @yield('content')
        <div class="footer">
                <div class="pull-right">
                    10GB of <strong>250GB</strong> Free.
                </div>
                <div>
                    <strong>Copyright</strong> Example Company &copy; 2014-2015
                </div>
            </div>

        </div>
        </div>

    <!-- Mainly scripts -->
    <script src="{{url('assets/backend')}}/js/jquery-2.1.1.js"></script>
    <script src="{{url('assets/backend')}}/js/bootstrap.min.js"></script>
    <script src="{{url('assets/backend')}}/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="{{url('assets/backend')}}/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="{!!url('assets/backend')!!}/js/plugins/sweetalert/sweetalert.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="{{url('assets/backend')}}/js/inspinia.js"></script>
    <script src="{{url('assets/backend')}}/js/plugins/pace/pace.min.js"></script>
    <script>
        @if(Session::has('success'))
          swal({title: "Success",
                type: 'success',
                text: "{{Session::get('success')}} !",
                timer: 3000,
                showConfirmButton: true });
          @endif

          @if(Session::has('warning'))
            swal({title: "SURE ?",
                  type: 'warning',
                  text: "{{Session::get('success')}} !",
                  timer: 3000,
                  showConfirmButton: true });
          @endif
    </script>
    @yield('footer')
</body>

</html>