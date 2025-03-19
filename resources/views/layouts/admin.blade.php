<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CMS Admin Panel</title>
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
</head>
<body>
    <div class="admin-container">
        <header class="admin-header">
            <div class="admin-header-inner">
                <h1>CMS Admin</h1>
                </div>
        </header>

        <aside class="admin-sidebar">
            <ul class="admin-sidebar-menu">
                <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                <li><a href="{{ route('admin.content.index') }}">Content</a></li>
                <li><a href="{{ route('admin.media.index') }}">Media</a></li>
                <li><a href="{{ route('admin.users.index') }}">Users</a></li>
                </ul>
        </aside>

        <main class="admin-content">
            <div class="admin-content-inner">
                @yield('content')
            </div>
        </main>

        <footer class="admin-footer">
            <div class="admin-footer-inner">
                &copy; {{ date('Y') }} Your Website Name - CMS
            </div>
        </footer>
    </div>

    <script src="{{ asset('js/admin.js') }}"></script>
</body>
</html>

<style>
    /* Basic CSS for the admin layout - Customize as needed */
    body {
        font-family: sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f4f6f9;
        color: #333;
    }

    .admin-container {
        display: flex;
        min-height: 100vh;
    }

    .admin-header {
        background-color: #343a40;
        color: white;
        padding: 1rem;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        width: 100%;
        position: fixed; /* Or sticky */
        z-index: 100;
    }

    .admin-header-inner {
        max-width: 1200px;
        margin: 0 auto;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .admin-sidebar {
        background-color: #28a745; /* Example sidebar color */
        color: white;
        width: 250px;
        padding-top: 60px; /* Adjust based on header height */
        flex-shrink: 0;
        overflow-y: auto;
        height: 100vh;
    }

    .admin-sidebar-menu {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .admin-sidebar-menu li a {
        display: block;
        padding: 10px 20px;
        text-decoration: none;
        color: white;
        transition: background-color 0.3s ease;
    }

    .admin-sidebar-menu li a:hover {
        background-color: #218838;
    }

    .admin-content {
        flex-grow: 1;
        padding: 20px;
        padding-top: 80px; /* Adjust based on header height */
    }

    .admin-content-inner {
        max-width: 1200px;
        margin: 0 auto;
        background-color: white;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.05);
    }

    .admin-footer {
        background-color: #343a40;
        color: white;
        text-align: center;
        padding: 1rem 0;
        position: fixed;
        bottom: 0;
        width: 100%;
        z-index: 100;
    }

    /* Adjust footer position if you don't want it fixed */
    /*.admin-footer {
    position: relative;
    }*/
</style>