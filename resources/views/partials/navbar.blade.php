<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
    <div class="container-fluid gap-3 mx-2">
        <a class="navbar-brand">
            <img src="/Assets/Logo_Rentit.png" style="max-width: 100px; height: auto;">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav fs-5">
                <li class="nav-item">
                    <a class="nav-link {{  Request::is('homepage') ? 'active' : ' ' }}" href="/homepage">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{  Request::is('facility') ? 'active' : ' ' }}" href="/facility">Facility</a>
                </li>
                @auth
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Other
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" >Pembatalan</a></li>
                        <li><a class="dropdown-item" >Lapor Kerusakan</a></li>
                    </ul>
                </li>
                @endauth
            </ul>
        </div>
        @auth
        <div class="flex-shrink-0 dropdown">
            <a class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
                {{-- <img src="Assets/cristiano_profile.jpg" alt="mdo" width="32" height="32" class="rounded-circle"> --}}
                Hello, {{ auth() ->user()->name}}
            </a>
            <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2">
                <li>
                    <form action="/logout" method="POST">
                        @csrf
                        <button class="dropdown-item">Sign out</button>
                    </form>    
                </li>
                <li><a class="dropdown-item" >Status Pemesanan</a></li>
            </ul>
        </div>
        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
            <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
        </form>
        @else
       
        @endauth
    </div>
</nav>