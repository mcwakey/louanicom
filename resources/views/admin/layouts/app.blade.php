<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Admin - {{ config('app.name') }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body{background:#f6f8fa}
        .admin-shell{display:flex;min-height:100vh}
        .admin-sidebar{width:220px;background:#0d6efd;color:#fff;padding:20px}
        .admin-sidebar a{color:rgba(255,255,255,0.9);display:block;margin:6px 0}
        .admin-main{flex:1;padding:24px}
        .admin-top{display:flex;justify-content:space-between;align-items:center;margin-bottom:18px}
        .brand{font-weight:700;color:#fff;margin-bottom:12px}
    </style>
</head>
<body>
    <div class="admin-shell">
        <aside class="admin-sidebar">
            <div class="brand">{{ config('app.name') }} Admin</div>
            <a href="{{ route('home') }}" class="text-decoration-none">&larr; View Site</a>
            <hr style="border-color:rgba(255,255,255,0.15)">
            <a href="{{ route('admin.dashboard') }}">Dashboard</a>
            <a href="{{ route('admin.heroes.index') }}">Heroes</a>
            <a href="{{ route('admin.abouts.index') }}">Abouts</a>
            <a href="{{ route('admin.experiences.index') }}">Experiences</a>
            <a href="{{ route('admin.partners.index') }}">Partners</a>
            <a href="{{ route('admin.messages.index') }}">Messages</a>
            <a href="{{ route('admin.menu.index') }}">Menu</a>
            <a href="{{ route('admin.settings.index') }}">Settings</a>
        </aside>

        <main class="admin-main">
            <div class="admin-top">
                <div>
                    <h4 class="mb-0">Admin</h4>
                    <small class="text-muted">Manage site content</small>
                </div>
                <div>
                    <!-- future: user menu -->
                </div>
            </div>

            @yield('content')
        </main>
    </div>
</body>
</html>
