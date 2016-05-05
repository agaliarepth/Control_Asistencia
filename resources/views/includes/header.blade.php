<header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">ASISTENCIA - 2015</a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
        </a>
        <a>SALIR</a>
        <div class="navbar-custom-menu">

            <ul class="nav navbar-nav">

              
                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="user-image" alt="User Image"/>
                    <span class="hidden-xs" >{{Auth::user()->name}}</span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image" />
                            <p>
                            <small>{{Auth::user()->name}}</small>
                            </p>
                        </li>
                        <!-- Menu Body -->
                        <li class="user-body">
                           
                            <div class="pull-right">
                                <a href="{{route('logout')}}" class="btn btn-default btn-flat">SALIR</a>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>