<aside class="js-navbar-vertical-aside navbar navbar-vertical-aside navbar-vertical navbar-vertical-fixed navbar-expand-xl navbar-bordered bg-white  ">
    <div class="navbar-vertical-container">
        <div class="navbar-vertical-footer-offset">
            <!-- Logo -->

            <a class="navbar-brand" href="index.html" aria-label="Front">
                <img class="navbar-brand-logo" src="assets/svg/logos/logo.svg" alt="Logo" data-hs-theme-appearance="default">
                <img class="navbar-brand-logo" src="assets/svg/logos-light/logo.svg" alt="Logo" data-hs-theme-appearance="dark">
                <img class="navbar-brand-logo-mini" src="assets/svg/logos/logo-short.svg" alt="Logo" data-hs-theme-appearance="default">
                <img class="navbar-brand-logo-mini" src="assets/svg/logos-light/logo-short.svg" alt="Logo" data-hs-theme-appearance="dark">
            </a>

            <!-- End Logo -->

            <!-- Navbar Vertical Toggle -->
            <button type="button" class="js-navbar-vertical-aside-toggle-invoker navbar-aside-toggler">
                <i class="bi-arrow-bar-left navbar-toggler-short-align" data-bs-template='<div class="tooltip d-none d-md-block" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>' data-bs-toggle="tooltip" data-bs-placement="right" title="Collapse"></i>
                <i class="bi-arrow-bar-right navbar-toggler-full-align" data-bs-template='<div class="tooltip d-none d-md-block" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>' data-bs-toggle="tooltip" data-bs-placement="right" title="Expand"></i>
            </button>

            <!-- End Navbar Vertical Toggle -->

            <!-- Content -->
            <div class="navbar-vertical-content">
                <div id="navbarVerticalMenu" class="nav nav-pills nav-vertical card-navbar-nav">
                    <div class="nav-item">
                        <a class="nav-link dropdown-toggle " href="#navbarVerticalDash" role="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalDash" aria-expanded="false" aria-controls="navbarVerticalDash">
                            <i class="bi-bar-chart-steps nav-icon"></i>
                            <span class="nav-link-title">Dashboard</span>
                        </a>

                        <div id="navbarVerticalDash" class="nav-collapse collapse " data-bs-parent="#navbarVerticalMenuPagesMenu">
                            <a class="nav-link " href="users.html">Overview</a>
                            <a class="nav-link " href="users-leaderboard.html">Leaderboard</a>
                            <a class="nav-link " href="users-add-user.html">Add User <span class="badge bg-info rounded-pill ms-1">Hot</span></a>
                        </div>
                    </div>
                    <div class="nav-item">
                        <a class="nav-link dropdown-toggle {{ ($activePage == 'hospedaje' || $activePage == 'reservaciones')? '': 'collapsed'}}" href="#navbarVerticalMenuPagesUsersMenu" role="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalMenuPagesUsersMenu" aria-expanded=" {{ ($activePage == 'usuarios')? 'true': 'false'}}" aria-controls="navbarVerticalMenuPagesUsersMenu">
                            <i class="bi-calendar-date nav-icon"></i>
                            <span class="nav-link-title">Calendario</span>
                        </a>
                        <div id="navbarVerticalMenuPagesUsersMenu" class="nav-collapse collapse  {{ ($activePage == 'hospedaje' || $activePage == 'reservaciones')? 'show': ''}}" data-bs-parent="#navbarVerticalMenuPagesMenu">
                            <a class="nav-link {{ ($activePage == 'hospedaje')? 'active': ''}}" href="{{ route('hospedaje.index') }}">Hospedaje</a>
                            <a class="nav-link {{ ($activePage == 'reservaciones')? 'active': ''}}" href="{{ route('reservaciones.index') }}">Reservaciones</a>
                        </div>
                    </div>
                    
                    <div class="nav-item">
                        <a class="nav-link dropdown-toggle {{ ($activePage == 'hospedaje' || $activePage == 'reservaciones')? '': 'collapsed'}}" href="#navbarVerticalMenuPagesUsersMenu" role="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalMenuPagesUsersMenu" aria-expanded=" {{ ($activePage == 'usuarios')? 'true': 'false'}}" aria-controls="navbarVerticalMenuPagesUsersMenu">
                            <i class="bi-hospital nav-icon"></i>
                            <span class="nav-link-title">Hotel</span>
                        </a>
                        <div id="navbarVerticalMenuPagesUsersMenu" class="nav-collapse collapse  {{ ($activePage == 'hospedaje' || $activePage == 'reservaciones')? 'show': ''}}" data-bs-parent="#navbarVerticalMenuPagesMenu">
                            <a class="nav-link {{ ($activePage == 'hospedaje')? 'active': ''}}" href="{{ route('hospedaje.index') }}">Habitaciones</a>
                            <a class="nav-link {{ ($activePage == 'reservaciones')? 'active': ''}}" href="{{ route('reservaciones.index') }}">Tipo de habitaciones</a>
                        </div>
                    </div>
                    <div class="nav-item">
                        <a class="nav-link dropdown-toggle {{ ($activePage == 'usuarios' || $activePage == 'perfil')? '': 'collapsed'}}" href="#navbarVerticalMenuPagesUsersMenu" role="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalMenuPagesUsersMenu" aria-expanded=" {{ ($activePage == 'usuarios')? 'true': 'false'}}" aria-controls="navbarVerticalMenuPagesUsersMenu">
                            <i class="bi-gear nav-icon"></i>
                            <span class="nav-link-title">Configuración</span>
                        </a>

                        <div id="navbarVerticalMenuPagesUsersMenu" class="nav-collapse collapse  {{ ($activePage == 'usuarios' || $activePage == 'perfil')? 'show': ''}}" data-bs-parent="#navbarVerticalMenuPagesMenu">
                            <a class="nav-link {{ ($activePage == 'usuarios')? 'active': ''}}" href="{{ route('usuarios.index') }}">Usuarios</a>
                            <a class="nav-link {{ ($activePage == 'perfil')? 'active': ''}}" href="{{ route('perfil.index') }}">Perfil</a>
                        </div>
                    </div>
                </div>

            </div>
            <!-- End Content -->
        </div>
    </div>
</aside>
