<!-- This file would replace your existing navigation.blade.php -->
<div class="border-end bg-white" id="sidebar-wrapper">
    <div class="sidebar-heading border-bottom">
        {{ config('app.name', 'Laravel') }}
    </div>
    
    <div class="list-group list-group-flush">
        <a href="{{ route('dashboard') }}" class="list-group-item list-group-item-action {{ request()->routeIs('dashboard') ? 'active' : '' }}">
            <span class="sidebar-icon"><i class="fas fa-tachometer-alt"></i></span> Dashboard
        </a>
        
        <!-- Add your navigation links here -->
        <a href="#" class="list-group-item list-group-item-action">
            <span class="sidebar-icon"><i class="fas fa-users"></i></span> Users
        </a>
        <a href="#" class="list-group-item list-group-item-action">
            <span class="sidebar-icon"><i class="fas fa-cog"></i></span> Settings
        </a>
        
        <!-- Dropdown menu example -->
        <a href="#submenu1" data-bs-toggle="collapse" class="list-group-item list-group-item-action">
            <span class="sidebar-icon"><i class="fas fa-folder"></i></span> Reports <span class="ms-auto"><i class="fas fa-chevron-down"></i></span>
        </a>
        <div class="collapse" id="submenu1" style="padding-left: 20px;">
            <a href="#" class="list-group-item list-group-item-action">
                <span class="sidebar-icon"><i class="fas fa-chart-bar"></i></span> Sales Report
            </a>
            <a href="#" class="list-group-item list-group-item-action">
                <span class="sidebar-icon"><i class="fas fa-chart-line"></i></span> Analytics
            </a>
        </div>
        
        <!-- Authentication Links -->
        @guest
            <a href="{{ route('login') }}" class="list-group-item list-group-item-action">
                <span class="sidebar-icon"><i class="fas fa-sign-in-alt"></i></span> Login
            </a>
            
            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="list-group-item list-group-item-action">
                    <span class="sidebar-icon"><i class="fas fa-user-plus"></i></span> Register
                </a>
            @endif
        @else
            <form method="POST" action="{{ route('logout') }}" id="logout-form">
                @csrf
                <a href="{{ route('logout') }}" class="list-group-item list-group-item-action"
                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <span class="sidebar-icon"><i class="fas fa-sign-out-alt"></i></span> Logout
                </a>
            </form>
        @endguest
    </div>
</div>