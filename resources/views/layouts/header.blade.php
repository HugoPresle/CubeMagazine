<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    {{-- ICON --}}
    <link rel="shortcut icon" href="{{ asset('img/téléchargement-removebg-preview.png') }}">

    {{-- BOOSTRAP --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"
        integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"
        integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous">
    </script>
    {{-- JQUERY --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"
        integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    {{-- FONTAWESOME --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    {{-- CSS --}}
    <link rel="stylesheet" type="text/css" href="{{ url('/asset/css/css.css') }}">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top" id="navbar">
        <div class="container-fluid d-flex justify-content-center">
            <div class="p-2">
                <a class="navbar-brand" href="#">
                    <i class="fa-solid fa-cube fa-bounce fa-2xl"></i>
                </a>
            </div>
            <div class="p-2" id="navbarNav">
                <ul class="navbar-nav ">
                    <li class="nav-item">
                        <a class="nav-link active" id="cbTitle" href="#">
                            Cube Mag
                        </a>
                    </li>
            </div>
            <div class="p-2">
                <ul class="navbar-nav ">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">
                            <i class="fa-brands fa-youtube fa-lg" style="color: red;"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.instagram.com/cubemagz/" target="_blank">
                            <i class="fa-brands fa-instagram fa-lg" style="color: purple;"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    {{-- div temporaire permettant de clicker pour supprimer le menu option --}}
    <div id="hiddingDiv" class="position-absolute m-1" onclick="hideMenuGear()"
        style="width: 98vw;height: 100vh; z-index: 5;display: none; background-color: rgb(62, 23, 136)">
    </div>



    {{-- MAIN SECTION --}}
    <main class="py-4">
        @yield('content')
    </main>


    {{-- FOOTER --}}
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-4 my-4 border-top">
        <p class="col-md-4 mb-0 text-muted">© 2022 Company, Inc</p>

        <a href="/"
            class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
            <i class="fa-solid fa-cube fa-bounce fa-2xl"></i>
        </a>

        <ul class="nav col-md-4 justify-content-end">
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Home</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">About</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Contact</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">FAQs</a></li>
        </ul>
    </footer>
</body>

{{-- CSS & JS --}}
<script type="text/javascript" src="{{ url('/asset/js/js.js') }}"></script>

</html>
