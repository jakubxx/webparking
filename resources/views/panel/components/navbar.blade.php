<nav class="navbar sticky-top navbar-expand-lg bg-white">
    <div class="container">

        <a class="navbar-brand" href="{{ url('panel/start') }}"><img src="{{asset('img/logo.svg')}}" class="logo" alt="logo"> <span class="logo-text">WebParking</span></a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon"></span>
            <span class="navbar-toggler-icon"></span>
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item {{ Request::is('panel/start') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ url('panel/start') }}"><span class="material-icons">account_balance_wallet</span> Start</a>
                </li>
                <li class="nav-item {{ Request::is('panel/parking') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ url('panel/parking') }}"><span class="material-icons">directions_car</span> Parking</a>
                </li>
                <li class="nav-item {{ Request::is('panel/ustawienia') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ url('panel/ustawienia') }}"><span class="material-icons">settings</span> Ustawienia</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link logout" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><span class="material-icons">power_settings_new</span> Wyloguj się</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            </ul>
        </div>

    </div>
</nav>
