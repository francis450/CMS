<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Fisacom Capital') }}</title>

        <link rel="apple-touch-icon" sizes="180x180" href=" {{ asset('img/apple-touch-icon.png') }} ">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/favicon-32x32.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/favicon-16x16.png') }}">
        <link rel="manifest" href="{{ asset('img/site.webmanifest') }}">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
        <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">

        <!-- Sidebar Custom CSS -->
        <style>
            #sidebar-wrapper {
                min-height: 100vh;
                width: 250px;
                margin-left: -250px;
                transition: margin .25s ease-out;
                background-color: #1a1a2e;
            }
            
            #sidebar-wrapper .sidebar-heading {
                padding: 0.875rem 1.25rem;
                font-size: 1.2rem;
            }
            
            #sidebar-wrapper .list-group {
                width: 250px;
            }
            
            #sidebar-wrapper .list-group-item {
                border: none;
                padding: 0.75rem 1.25rem;
                background-color: transparent;
                transition: all 0.3s;
            }
            
            #sidebar-wrapper .list-group-item:hover {
                background-color: rgba(255, 255, 255, 0.1);
            }
            
            #sidebar-wrapper .list-group-item.active {
                background-color: rgba(255, 255, 255, 0.2);
                border-left: 4px solid #0d6efd;
            }
            
            #page-content-wrapper {
                min-width: 100vw;
                transition: margin-left .25s ease-out;
            }
            
            #wrapper.toggled #sidebar-wrapper {
                margin-left: 0;
            }
            
            .sidebar-icon {
                width: 20px;
                text-align: center;
                margin-right: 10px;
            }
            
            #menu-toggle {
                cursor: pointer;
                padding: 10px;
                border-radius: 4px;
                background-color: transparent;
                border: none;
                color: #6b7280;
            }
            
            @media (min-width: 768px) {
                #sidebar-wrapper {
                    margin-left: 0;
                }
                
                #page-content-wrapper {
                    min-width: 0;
                    width: 100%;
                    /* margin-left: 250px; */
                }
                
                #wrapper.toggled #sidebar-wrapper {
                    margin-left: -250px;
                }
                
                #wrapper.toggled #page-content-wrapper {
                    margin-left: 0;
                }
            }
            
            /* Mobile adjustments */
            @media (max-width: 767.98px) {
                #page-content-wrapper {
                    margin-left: 0;
                }
                
                #wrapper.toggled #page-content-wrapper {
                    margin-left: 250px;
                }
            }
            
            .user-profile {
                padding: 20px;
                text-align: center;
                border-bottom: 1px solid rgba(255,255,255,0.1);
                margin-bottom: 15px;
            }
            
            .user-profile img {
                width: 70px;
                height: 70px;
                border-radius: 50%;
                object-fit: cover;
                margin-bottom: 10px;
            }
            
            .user-profile h5 {
                margin-bottom: 5px;
            }
            
            .user-profile p {
                color: rgba(255,255,255,0.7);
                font-size: 0.85rem;
                margin-bottom: 0;
            }
        </style>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="d-flex" id="wrapper">
            <!-- Sidebar -->
            <div class="border-end bg-white" id="sidebar-wrapper">
                <div class="sidebar-heading border-bottom">
                    {{ config('app.name', 'Fisacom Capital') }}
                </div>
                
                <div class="list-group list-group-flush">
                    <a href="{{ route('dashboard') }}" class="list-group-item list-group-item-action {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                        <span class="sidebar-icon"><i class="fas fa-tachometer-alt"></i></span> Dashboard
                    </a>

                    <a href="#submenu" data-bs-toggle="collapse" class="list-group-item list-group-item-action">
                        <span class="sidebar-icon"><i class="fas fa-folder"></i></span> Content <span class="ms-auto"><i class="fas fa-chevron-down"></i></span>
                    </a>
                    <div class="collapse" id="submenu" style="padding-left: 20px;">
                        <a href="{{ route('categories.index') }}" class="list-group-item list-group-item-action">
                            <span class="sidebar-icon"> <i class="fas fa-list"></i> </span> Categories
                        </a>
                        <a href="{{ route('content.index') }}" class="list-group-item list-group-item-action">
                            <span class="sidebar-icon"><i class="fas fa-newspaper"></i></span> Posts
                        </a>
                        <a href="{{ route('content.index') }}" class="list-group-item list-group-item-action">
                            <span class="sidebar-icon"> <i class="fas fa-file"></i> </span> Pages
                        </a>
                    </div>
                                                            
                    <!-- Dropdown menu example -->
                    <a href="#submenu1" data-bs-toggle="collapse" class="list-group-item list-group-item-action">
                        <span class="sidebar-icon"><i class="fas fa-images"></i></span> Gallery <span class="ms-auto"><i class="fas fa-chevron-down"></i></span>
                    </a>
                    <div class="collapse" id="submenu1" style="padding-left: 20px;">
                        <a href="{{ route('images.index') }}" class="list-group-item list-group-item-action">
                            <span class="sidebar-icon"><i class="fas fa-image"></i></span> Photos
                        </a>
                        <a href="{{ route('videos.index') }}" class="list-group-item list-group-item-action">
                            <span class="sidebar-icon"> <i class="fas fa-video"></i> </span> Videos
                        </a>
                        <a href="{{ route('files.index') }}" class="list-group-item list-group-item-action">
                            <span class="sidebar-icon"> <i class="fas fa-file"></i> </span> Files
                        </a>
                    </div>

                    <a href="{{ route('users.index') }}" class="list-group-item list-group-item-action">
                        <span class="sidebar-icon"><i class="fas fa-users"></i></span> Users
                    </a>

                    <a href="{{ route('settings.index') }}" class="list-group-item list-group-item-action">
                        <span class="sidebar-icon"><i class="fas fa-cog"></i></span> Settings
                    </a>
                    
                    <!-- Logout Option -->
                    <form method="POST" action="{{ route('logout') }}" id="logout-form">
                        @csrf
                        <a href="{{ route('logout') }}" class="list-group-item list-group-item-action"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <span class="sidebar-icon"><i class="fas fa-sign-out-alt"></i></span> Logout
                        </a>
                    </form>
                </div>
            </div>
            
            <!-- Page Content Wrapper -->
            <div id="page-content-wrapper">
                <!-- Top Navigation - Using your original navigation structure but with the sidebar toggle -->
                <nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
                    <!-- Primary Navigation Menu -->
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                        <div class="flex justify-between h-16">
                            <div class="flex">
                                <!-- Sidebar Toggle -->
                                <div class="shrink-0 flex items-center">
                                    <button id="menu-toggle toggled" class="inline-flex items-center">
                                        <i class="fas fa-bars"></i>
                                    </button>
                                </div>

                             
                            </div>

                            <!-- Settings Dropdown - From your original layout -->
                            <div class="hidden sm:flex sm:items-center sm:ml-6">
                                <x-dropdown align="right" width="48">
                                    <x-slot name="trigger">
                                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                                            <div>{{ Auth::user()->name ?? 'User' }}</div>

                                            <div class="ml-1">
                                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                                </svg>
                                            </div>
                                        </button>
                                    </x-slot>

                                    <x-slot name="content">
                                        <x-dropdown-link :href="route('profile.edit')">
                                            {{ __('Profile') }}
                                        </x-dropdown-link>

                                        <!-- Authentication -->
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf

                                            <x-dropdown-link :href="route('logout')"
                                                    onclick="event.preventDefault();
                                                                this.closest('form').submit();">
                                                {{ __('Log Out') }}
                                            </x-dropdown-link>
                                        </form>
                                    </x-slot>
                                </x-dropdown>
                            </div>

                            <!-- Hamburger -->
                            <div class="-mr-2 flex items-center sm:hidden">
                                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Responsive Navigation Menu -->
                    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
                        <div class="pt-2 pb-3 space-y-1">
                            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                                {{ __('Dashboard') }}
                            </x-responsive-nav-link>
                            <!-- Add your other responsive navigation links as they were in the original layout -->
                        </div>

                        <!-- Responsive Settings Options -->
                        <div class="pt-4 pb-1 border-t border-gray-200">
                            <div class="px-4">
                                <div class="font-medium text-base text-gray-800">{{ Auth::user()->name ?? 'User' }}</div>
                                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email ?? 'email@example.com' }}</div>
                            </div>

                            <div class="mt-3 space-y-1">
                                <x-responsive-nav-link :href="route('profile.edit')">
                                    {{ __('Profile') }}
                                </x-responsive-nav-link>

                                <!-- Authentication -->
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <x-responsive-nav-link :href="route('logout')"
                                            onclick="event.preventDefault();
                                                        this.closest('form').submit();">
                                        {{ __('Log Out') }}
                                    </x-responsive-nav-link>
                                </form>
                            </div>
                        </div>
                    </div>
                </nav>
                
                <!-- Page Heading -->
                @isset($header)
                    <header class="bg-white shadow">
                        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                            {{ $header }}
                        </div>
                    </header>
                @endisset
                
                <!-- Page Content -->
                <main>
                    {{ $slot }}
                </main>
            </div>
        </div>
        
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
        <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
        <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
        <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('js/main.js') }}"></script>
        
        <!-- Sidebar Toggle Script -->
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                // Toggle the sidebar
                document.getElementById("menu-toggle").addEventListener("click", function(e) {
                    e.preventDefault();
                    document.getElementById("wrapper").classList.toggle("toggled");
                });

                // Handle active states for sidebar items
                const sidebarItems = document.querySelectorAll('#sidebar-wrapper .list-group-item');
                const currentPath = window.location.pathname;

                sidebarItems.forEach(item => {
                    const href = item.getAttribute('href');
                    if (href && currentPath.includes(href) && href !== '#') {
                        item.classList.add('active');
                    }
                });

                // Collapse sidebar on mobile when clicking a link
                if (window.innerWidth < 768) {
                    sidebarItems.forEach(item => {
                        item.addEventListener('click', function() {
                            if (!this.classList.contains('dropdown-toggle')) {
                                document.getElementById("wrapper").classList.remove("toggled");
                            }
                        });
                    });
                }

                // Add responsive behavior
                function handleResize() {
                    if (window.innerWidth < 768) {
                        document.getElementById("wrapper").classList.remove("toggled");
                    } else {
                        document.getElementById("wrapper").classList.add("toggled");
                    }
                }

                window.addEventListener('resize', handleResize);
                handleResize(); // Initial call
            });
        </script>
    </body>
</html>