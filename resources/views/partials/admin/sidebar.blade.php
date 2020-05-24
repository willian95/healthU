<div id="layout-sidenav" class="layout-sidenav sidenav sidenav-vertical bg-white logo-dark">

    <div class="app-brand demo">
        <span class="app-brand-logo demo">
            <img src="{{ url('admin/assets/img/logo.png') }}" alt="Brand Logo" class="img-fluid">
        </span>
        <a href="index-2.html" class="app-brand-text demo sidenav-text font-weight-normal ml-2">Empire</a>
        <a href="javascript:" class="layout-sidenav-toggle sidenav-link text-large ml-auto">
            <i class="ion ion-md-menu align-middle"></i>
        </a>
    </div>
    <div class="sidenav-divider mt-0"></div>

    <ul class="sidenav-inner py-1">

        <li class="sidenav-item active open">
            <a href="javascript:" class="sidenav-link sidenav-toggle">
                <i class="sidenav-icon feather icon-home"></i>
                <div>Dashboard</div>
                <!--<div class="pl-1 ml-auto">
                    <div class="badge badge-danger">Hot</div>
                </div>-->
            </a>
            <ul class="sidenav-menu">
                <li class="sidenav-item">
                    <a href="{{ route('admin.dashboard') }}" class="sidenav-link">
                        <div>Inicio</div>
                    </a>
                </li>
                <li class="sidenav-item">
                    <a href="{{ route('admin.video.index') }}" class="sidenav-link">
                        <div>Videos</div>
                    </a>
                </li>
                <li class="sidenav-item">
                    <a href="{{ route('admin.users.index') }}" class="sidenav-link">
                        <div>Usuarios</div>
                    </a>
                </li>

                <li class="sidenav-item">
                    <a href="{{ route('admin.deposit.index') }}" class="sidenav-link">
                        <div>Depositos</div>
                    </a>
                </li>

                <li class="sidenav-item">
                    <a href="{{ route('admin.notice.index') }}" class="sidenav-link">
                        <div>Noticias</div>
                    </a>
                </li>

                <li class="sidenav-item">
                    <a href="{{ route('admin.category.index') }}" class="sidenav-link">
                        <div>Categorías</div>
                    </a>
                </li>
                
                <li class="sidenav-item">
                    <a href="{{ url('/logout') }}" class="sidenav-link">
                        <div>Cerrar sesión</div>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</div>