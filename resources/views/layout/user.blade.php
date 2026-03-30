<!DOCTYPE html>
<html>

<head>

    <title>@yield('title','GharBasao') | GharBasao </title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <style>
    body {
        font-family: Poppins;
    }

    .primary-color {
        background: #E11D48;
        color: white;
    }

    /* PAGE LOADER */

    #loader {

        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: #ffffff;
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 9999;

    }


    /* SPINNER */

    .spinner {

        width: 45px;
        height: 45px;
        border: 5px solid #f3f3f3;
        border-top: 5px solid #dc2626;
        border-radius: 50%;
        animation: spin 1s linear infinite;

    }


    @keyframes spin {

        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
        }

    }

    </style>

    @stack('styles')

</head>

<body class="d-flex flex-column min-vh-100">

    <div id="loader">

        <div class="spinner"></div>

    </div>

    @include('layout.usernav')

    <main class="flex-grow-1">
        @yield('content')
     
    </main>
 

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>



    @stack('scripts')

    <footer class="bg-dark text-white text-center p-3">
    @include('layout.userfooter')
    </footer>


    <script>
    window.addEventListener("load", function() {

        document.getElementById("loader").style.display = "none";

    });
    </script>
</body>

</html>