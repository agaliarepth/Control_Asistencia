<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p>{{Auth::user()->name}}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
         
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">MENU</li>

            <li >
                <a href="{{url('/usuarios')}}" id="list_usuarios" >
                <i class="fa fa-dashboard"></i> <span>USUARIOS</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
               
            </li>
            <li  >
                <a href="{{url('horarios')}}">
                <i class="fa fa-files-o"></i>
                <span>HORARIOS</span>
                </a>
               
            </li>
             <li  >
                <a href="{{url('empleados')}}">
                <i class="fa fa-files-o"></i>
                <span>EMPLEADOS</span>
                </a>
               
            </li>

            <li  >
                <a href="{{url('registros')}}">
                <i class="fa fa-files-o"></i>
                <span>REGISTROS</span>
                </a>
               
            </li>
            <li  >
                <a href="{{url('reportes')}}">
                <i class="fa fa-files-o"></i>
                <span>REPORTES</span>
                </a>
               
            </li>
           
          
           
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
  