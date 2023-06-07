<header class="topbar" data-navbarbg="skin5">
    <nav class="navbar top-navbar navbar-expand-md navbar-dark">
        <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
            <!-- ============================================================== -->
            <!-- toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav float-left mr-auto">
                <!-- ============================================================== -->
                <!-- Home -->
                <!-- ============================================================== -->
                <li class="nav-item">
                    <a class="nav-link" href="/">
                        <i class="fa fa-home"></i>
                        Home
                    </a>
                </li>
            </ul>
            <!-- ============================================================== -->
            <!-- Right side toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav float-right">
                <!-- ============================================================== -->
                <!-- Login -->
                <!-- ============================================================== -->
                <li class="nav-item dropdown">
                    <a class="nav-link waves-effect waves-dark" href="/login"> <i class="mdi mdi-lock font-24"></i> Login</a>
                </li>
                <!-- ============================================================== -->
                <!-- End Login -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Register -->
                <!-- ============================================================== -->
                <li class="nav-item dropdown">
                    <a class="nav-link waves-effect waves-dark" href="/register"> <i class="mdi mdi-account-key font-24"></i> Register</a>
                </li>
                <!-- ============================================================== -->
                <!-- End Register -->
                <!-- ============================================================== -->

                <!-- ============================================================== -->
                <!-- User profile and search -->
                <!-- ============================================================== -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{{asset('assets/images/users/1.jpg')}}" alt="user" class="rounded-circle" width="31"></a>
                    <div class="dropdown-menu dropdown-menu-right user-dd animated">
                        <a class="dropdown-item" href="/blog/create"><i class="ti-user m-r-5 m-l-5"></i> Create blog</a>
                        <a class="dropdown-item" href="/blog/manage"><i class="ti-user m-r-5 m-l-5"></i> My blogs</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="javascript:void(0)"><i class="fa fa-power-off m-r-5 m-l-5"></i> Logout</a>
                    </div>
                </li>
                <!-- ============================================================== -->
                <!-- User profile and search -->
                <!-- ============================================================== -->
            </ul>
        </div>
    </nav>
</header>
