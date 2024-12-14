<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ELS Admin</title>
    @vite('resources/sass/app.scss')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper" id="app">
        <!-- Main Sidebar Container -->
        
        <admin-nav></admin-nav>
        <!-- Content Wrapper -->
        <div class="content-wrapper">
            <section class="content">
                <div class="container-fluid">
                    <router-view></router-view>
                </div>
            </section>
        </div>

        <!-- Footer -->
        <footer class="main-footer">
            <strong>&copy; 2024 <a href="#">ELS</a>.</strong>
            All rights reserved.
        </footer>
    </div>

    @vite(['resources/js/app.js'])
</body>
</html>
