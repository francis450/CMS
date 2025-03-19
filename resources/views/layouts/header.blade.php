<nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
    <a href="{{ route('home') }}" class="navbar-brand p-0">
        <img src="{{ asset('img/logo-9.png') }}" alt="Logo">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="fa fa-bars"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-0">
            <a href="{{ route('home') }}" class="nav-item nav-link {{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
            <a href="{{ route('about') }}" class="nav-item nav-link {{ request()->routeIs('about') ? 'active' : '' }}">About</a>
            <a href="{{ route('services') }}" class="nav-item nav-link {{ request()->routeIs('services') ? 'active' : '' }}">Service</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                <div class="dropdown-menu m-0">
                    <a href="{{ route('features') }}" class="dropdown-item {{ request()->routeIs('features') ? 'active' : '' }}">Features</a>
                    <a href="{{ route('quote') }}" class="dropdown-item {{ request()->routeIs('quote') ? 'active' : '' }}">Free Quote</a>
                    <a href="{{ route('team') }}" class="dropdown-item {{ request()->routeIs('team') ? 'active' : '' }}">Our Team</a>
                    <a href="{{ route('testimonial') }}" class="dropdown-item {{ request()->routeIs('testimonial') ? 'active' : '' }}">Testimonial</a>
                    <a href="{{ route('404') }}" class="dropdown-item {{ request()->routeIs('404') ? 'active' : '' }}">404 Page</a>
                </div>
            </div>
            <a href="{{ route('contact') }}" class="nav-item nav-link {{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a>
        </div>

        @auth
        <a href="{{ url('/dashboard') }}" class="btn btn-light rounded-pill text-primary py-2 px-4 ms-lg-3">
            Dashboard
        </a>
        @else
        <a href="{{ route('login') }}" class="btn btn-outline-primary rounded-pill py-2 px-4 ms-lg-3">
            Log in
        </a>
        @endauth
    </div>
</nav>