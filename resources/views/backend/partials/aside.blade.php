<aside class="left-sidebar" data-sidebarbg="skin6">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar" data-sidebarbg="skin6">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{ route('backend.dashboard.index') }}"
                        aria-expanded="false"><i data-feather="monitor" class="feather-icon"></i><span
                            class="hide-menu">Painel</span></a></li>

                <!-- Menu divider -->
                <li class="list-divider"></li>

                @canany('manage-results')
                <!-- Title -->
                <li class="nav-small-cap">
                    <span class="hide-menu">Resultados de Testes</span>
                </li>

                <!-- Menu Item -->
                <li class="sidebar-item">
                    <a class="sidebar-link" href="#"
                        aria-expanded="false"><i data-feather="file-text" class="feather-icon"></i>
                        <span class="hide-menu">AMS</span>
                    </a>
                </li>

                <!-- Menu Item -->
                <li class="sidebar-item">
                    <a class="sidebar-link" href="#"
                        aria-expanded="false"><i data-feather="file-text" class="feather-icon"></i>
                        <span class="hide-menu">Disfunção Erétil</span>
                    </a>
                </li>
                @endcanany

                @canany('manage-users', 'manage-contacts', 'manage-settings')
                <!-- Menu divider -->
                <li class="list-divider"></li>

                <!-- Title -->
                <li class="nav-small-cap">
                    <span class="hide-menu">Administração</span>
                </li>

                @can('manage-users')
                <!-- Menu Item -->
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{ route('backend.users.index') }}"
                        aria-expanded="false"><i data-feather="users" class="feather-icon"></i>
                        <span class="hide-menu">Usuários</span>
                    </a>
                </li>
                @endcan

                @can('edit-contacts')
                <!-- Menu Item -->
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{ route('backend.contacts.index') }}"
                        aria-expanded="false"><i data-feather="home" class="feather-icon"></i>
                        <span class="hide-menu">Contatos</span>
                    </a>
                </li>
                @endcan

                @can('manage-settings')
                <!-- Menu Item -->
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{ route('backend.settings.index') }}"
                        aria-expanded="false"><i data-feather="settings" class="feather-icon"></i>
                        <span class="hide-menu">Configurações</span>
                    </a>
                </li>
                @endcan
                @endcanany

                <!-- Menu divider -->
                <li class="list-divider"></li>

                <li class="sidebar-item">
                    <a class="sidebar-link" href="/" target="_blank"
                        aria-expanded="false"><i data-feather="globe" class="feather-icon"></i>
                        <span class="hide-menu">Website</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();"
                        aria-expanded="false">
                        <i data-feather="log-out" class="feather-icon"></i>
                        <span class="hide-menu">Sair</span>
                    </a>
                </li>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>

        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
