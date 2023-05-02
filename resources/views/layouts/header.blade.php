<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!--BOOSTRAP LINKS  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- JS BOOSTRAP -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <!-- ICON LINKS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <link rel="stylesheet" type="text/css" href="{{ url('/asset/css/css.css') }}">
    <script type="text/javascript" src="{{ url('/asset/js/js.js') }}"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
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
                            Cube Magazine
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
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="collapse"
                            data-target="#navbarToggleExternalContent">
                            <i class="fa-solid fa-bars fa-xl"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="collapse" id="navbarToggleExternalContent">
        <div class="d-flex justify-content-end">
            <div class="card bg-body-tertiary">
                <div class="card-body">
                    <nav class="navbar navbar-expand-lg ">
                        <ul >
                            <li class="nav-item">
                                <a class="nav-link" href="">sd s</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="">sd s</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="">sd s</a>
                            </li>
                        </ul>

                    </nav>
                </div>
            </div>
        </div>
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
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Features</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Pricing</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">FAQs</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">About</a></li>
        </ul>
    </footer>
</body>

</html>
