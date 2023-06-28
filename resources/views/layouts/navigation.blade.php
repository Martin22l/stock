<nav class="navbar mx-4" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
        <a class="navbar-item" href="https://bulma.io">
            <img src="https://bulma.io/images/bulma-logo.png" width="112" height="28">
        </a>

        <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
        </a>
    </div>

    <div id="navbarBasicExample" class="navbar-menu">
        <div class="navbar-start">
            <a class="navbar-item" href="{{ route('dashboard') }}">
                dashboard
                {{-- request()->routeIs('dashboard') --}}
            </a>

            <a class="navbar-item">
                clientes
            </a>

            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link">
                    productos
                </a>

                <div class="navbar-dropdown">
                    <a class="navbar-item">
                        grupos
                    </a>
                    <a class="navbar-item" href="{{ route('familias.index') }}">
                        familias
                    </a>
                    <a class="navbar-item">
                        productos
                    </a>
                    <hr class="navbar-divider">
                    <a class="navbar-item">
                        Report an issue
                    </a>
                </div>
            </div>
        </div>

        <div class="navbar-end">
            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link">
                    {{ Auth::user()->name }}
                </a>

                <div class="navbar-dropdown">
                    <a class="navbar-item" href="{{ route('profile.edit') }}">
                        Perfil
                    </a>

                    <hr class="navbar-divider">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a class="navbar-item" onclick="event.preventDefault(); this.closest('form').submit();">
                            Salir
                        </a>
                    </form>
                </div>
            </div>
        </div>

    </div>
    
</nav>
