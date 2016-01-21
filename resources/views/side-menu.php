<!-- left side start-->
<div class="left-side sticky-left-side">

    <!--logo and iconic logo start-->
    <div class="logo">
        <a href="/home"><img src="/images/logo.gif" alt="" style="width: 100%;margin-left: -20px;"></a>
    </div>

    <div class="logo-icon text-center">
        <a href="/home"><img src="/images/logo_icon.png" alt=""></a>
    </div>
    <!--logo and iconic logo end-->

    <div class="left-side-inner">

        <!-- visible to small devices only -->
        <div class="visible-xs hidden-sm hidden-md hidden-lg">
            <div class="media logged-user">
                <img alt="" src="/images/photos/user-avatar.png" class="media-object">
                <div class="media-body">
                    <h4><a href="#">{{ Auth::user()->name }}</a></h4>
                    <span>"Hello There..."</span>
                </div>
            </div>

            <h5 class="left-nav-title">Account Information</h5>
            <ul class="nav nav-pills nav-stacked custom-nav">
                <li><a href="#"><i class="fa fa-sign-out"></i> <span>Sign Out</span></a></li>
            </ul>
        </div>

        <!--sidebar nav start-->
        <ul class="nav nav-pills nav-stacked custom-nav">
            <li class="menu-list"><a href="/home"><i class="fa fa-home"></i> <span>Inicio</span></a>
                <ul class="sub-menu-list">
                    <li><a href="#" data-toggle="modal" data-target="#gantSelect">Gantt</a></li>
                    <li ><a href="#"  data-toggle="modal" data-target="#otSelect">OT's</a></li>
                    <li ><a href="#">KPI</a></li>
                    <li><a href="#">Documentos</a></li>
                </ul>
            </li>

            <li class="menu-list"><a href=""><i class="fa fa-user"></i> <span>Usuarios</span></a>
                <ul class="sub-menu-list">
                    <li><a href="#" class="masUser2">Crear</a></li>
                    <li><a href="/admin/users">Listado</a></li>
                </ul>
            </li>
            <li class="menu-list"><a href=""><i class="fa  fa-credit-card"></i> <span>Viaticos</span></a>
                <ul class="sub-menu-list">
                    <li><a href="#" class="masAllowance2">Crear</a></li>
                    <li><a href="/admin/allowances">Listado</a></li>
                </ul>
            </li>
            <li class="menu-list"><a href=""><i class="fa fa-car"></i> <span>Autos</span></a>
                <ul class="sub-menu-list">
                    <li><a href="#" class="masCar2">Crear</a></li>
                    <li><a href="/admin/cars">Listado</a></li>
                </ul>
            </li>

            <li class="menu-list"><a href=""><i class="fa fa-users"></i> <span>Grupos</span></a>
                <ul class="sub-menu-list">
                    <li><a href="#" class="masGroup2">Crear</a></li>
                    <li><a href="/admin/groups">Listado</a></li>
                    <li><a href="#" class="groupDetail">Detalle</a></li>
                </ul>
            </li>
            <li class="menu-list"><a href=""><i class="fa fa-bar-chart"></i> <span>Indicadores</span></a>
                <ul class="sub-menu-list">
                    <li><a href="#" class="masIndicator2">Crear</a></li>
                    <li><a href="/admin/indicators">Listado</a></li>
                </ul>
            </li>
            <li class="menu-list"><a href=""><i class="fa fa-industry"></i> <span>Dueños</span></a>
                <ul class="sub-menu-list">
                    <li><a href="#" class="masOwner2">Crear</a></li>
                    <li><a href="/admin/owners">Listado</a></li>
                </ul>
            </li>
            <li class="menu-list"><a href=""><i class="fa fa-money"></i> <span>Solicitantes</span></a>
                <ul class="sub-menu-list">
                    <li><a href="#" class="masRequester2">Crear</a></li>
                    <li><a href="/admin/requesters">Listado</a></li>
                </ul>
            </li>
            <li class="menu-list"><a href=""><i class="fa fa-street-view"></i> <span>Sitios</span></a>
                <ul class="sub-menu-list">
                    <li><a href="#" class="masSite2">Crear</a></li>
                    <li><a href="/admin/sites">Listado</a></li>
                </ul>
            </li>
            <li><a href="{{ url('/auth/logout') }}"><i class="fa fa-sign-in"></i> <span>Login Page</span></a></li>

        </ul>
        <!--sidebar nav end-->

    </div>
</div>
<!-- left side end-->