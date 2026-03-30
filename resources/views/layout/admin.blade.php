<!DOCTYPE html>
<html>

<head>

    <title>Admin Panel</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('admin/css/style.css') }}">

</head>

<body>

    <div class="admin-wrapper">

        @include('layout.adminSidebar')

        <div class="admin-main">

            @include('layout.adminNav')

            <div class="admin-content">

                @yield('content')

            </div>

            
            @include('layout.adminFooter')

        </div>
        
    </div>

</body>

</html>