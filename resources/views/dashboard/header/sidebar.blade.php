<!-- Left side column. contains the logo and sidebar -->
<aside class="left-side sidebar-offcanvas">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="http://127.0.0.1:8000/dashboard/img/26115.jpg" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p>Hello, Aya</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!--Form pencarian di sidebar-->
        <!-- search form -->
        <!--<form action="#" method="get" class="sidebar-form">
          <div class="input-group">
            <input type="text" name="q" class="form-control" placeholder="Search..." />
            <span class="input-group-btn">
              <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
            </span>
          </div>
        </form>-->
        <!-- /.search form -->

        <!--Konten dari sidebar-->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="nav-header">Dashboard</li>
            <li class="active">
                <a href="overview.html">
                    <i class="fa fa-home"></i> <span>&nbsp; Home</span>
                </a>
            </li>
            <li class="nav-header">Workspace</li>
            <li>
                <a href="{{route('add.doctor')}}">
                    <i class="fa fa-medkit fa-fw"></i> <span>&nbsp;Doctors</span>
                </a>
            </li>
            <li>
                <a href="{{route('add.sp')}}">
                    <i class="fa fa-cubes fa-fw"></i> <span>&nbsp; Add specializations</span>
                </a>
            </li>
            <li>
                <a href="{{url('admin/main-category')}}">
                    <i class="fa fa-cube fa-fw"></i> <span>&nbsp;Main Categories</span>
                </a>
            </li>
            <li>
                <a href="{{route('admin.languages')}}>
                    <i class="fa fa-book fa-fw"></i><span>&nbsp; Languages</span>
                </a>
            </li>
            <li class="nav-header">Community</li>
            <li>
                <a href="katalog_list.html">
                    <i class="fa fa-book fa-fw"></i> <span>&nbsp; Catalog</span>
                </a>
            </li>
            <li class="nav-header">Miscellaneous</li>
            <li>
                <a href="#">
                    <i class="fa fa-cog fa-fw"></i> <span>&nbsp; Settings</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-book fa-fw"></i> <span>&nbsp; Documentation</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-life-ring fa-fw"></i> <span>&nbsp; Support</span>
                </a>
            </li>
            <li>
        </ul>

    </section>
    <!-- /.sidebar -->
</aside>
@yield('sidebar')
