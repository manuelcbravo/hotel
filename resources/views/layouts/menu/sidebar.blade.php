<div id="sidebarMain" class="d-none">
    <aside class="js-navbar-vertical-aside navbar navbar-vertical-aside navbar-vertical navbar-vertical-fixed navbar-expand-xl">
        <div class="navbar-vertical-container">
            <div class="navbar-vertical-footer-offset">
                <div class="navbar-brand-wrapper justify-content-center bg-dark-blue">
                    <!-- Logo -->
                    <a class="navbar-brand" href="#" aria-label="Front">
                        <img class="navbar-brand-logo" src="{{ asset('material') }}/logos/logo_light.svg" alt="Logo" style="max-width: 2.73rem; min-width: 2.73rem">
                        <img class="navbar-brand-logo-mini" src="{{ asset('material') }}/logos/logo_light.svg" alt="Logo">
                    </a>
                    <!-- End Logo -->
                </div>

                <!-- Content -->
                <div class="navbar-vertical-content">
                    <ul class="navbar-nav navbar-nav-lg nav-tabs">
                        @foreach($menu as $item)
                            @if ($item->submenu->count())
                                <li class="navbar-vertical-aside-has-menu">
                                    <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle " href="javascript:;" title="Dashboard">
                                        <i class="{{ $item->icon }} nav-icon"></i>
                                        <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">{{ $item->nombre }}</span>
                                    </a>
                                    <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                                        @foreach ($item->submenu as $subitem)
                                        <li class="nav-item">
                                            <a class="nav-link nav-jet-link" id="nav-link-{{ $subitem->ruta }}" href="#" data-action="{{ $subitem->ruta }}" title="{{ $subitem->nombre }}">
                                                <span class="bi bi-circle-fill nav-indicator-icon"></span>
                                                <span class="text-truncate">{{ $subitem->nombre }}</span>
                                            </a>
                                        </li>
                                        @endforeach
                                    </ul>
                                </li>
                            @else
                                <li class="nav-item">
                                    <a class="js-nav-tooltip-link nav-link nav-jet-link" href="#" data-action="{{ $item->ruta }}" title="{{ $item->nombre }}"
                                       data-placement="left">
                                        <i class="{{ $item->icon }} nav-icon"></i>
                                        <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">{{ $item->nombre }}</span>
                                    </a>
                                </li>
                            @endif
                        @endforeach
                    </ul>
                </div>
                <!-- End Content -->
            </div>
        </div>
    </aside>
</div>
