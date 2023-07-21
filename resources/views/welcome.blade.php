@extends('layouts.header')

@section('content')
    <br>
    <div class="d-flex justify-content-center" id="wlcCard">
        <div class="card mb-3" style="max-width: 700px; max-height: 500px;">
            <div class="row g-0">
                <div class="col-md-6">
                    <div class="card-body">
                        <h5 class="card-title">A DAY IN THE LIFE OF</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="{{ url('/asset/image/lyon-22-09-11-0971.jpg') }}" class="img-fluid rounded-start"
                        alt="...">
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="container">
        <div class="row">
            <hr>
            <div>
                <div class="d-flex justify-content-start">
                    <h3>LATEST STORY</h3>
                </div>
                <div class="d-flex justify-content-start">
                    <nav class="navbar navbar-expand-md">
                        <ul class="navbar-nav ">
                            <li class="nav-item">
                                <button class="nav-link"><i class="fa-solid fa-video"></i> Video</button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link"><i class="fa-solid fa-newspaper"></i> Article</button>
                            </li>
                            <li>
                                <button class="nav-link"><i class="fa-solid fa-tag"></i> Autre</button>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="d-flex justify-content-end">
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    </form>
                </div>
            </div>
            
            <?php for ($i = 1; $i <= 6; $i++) {
                echo '
                                <div class="col-md-4">
                                    
                                    <div class="card mt-4">
                                    <img src="http://127.0.0.1:8000/asset/image/lyon-22-09-11-0990.jpg" class="card-img-top" alt="..." id="imgLastVideo">
                                    <div class="card-body">
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card\'s content.</p>
                                    </div>
                                </div>
                                </div>';
                if ($i % 3 == 0) {
                    echo '<br>';
                }
            } ?>
        </div>
        <br>
        <br>
        <div class="row">
            <hr>
            <br>
            <div class="col-md-4">
                <h3 class="col-md-4">PLAYLIST</h3>
                <div class="card mt-4">
                    <img src="{{ url('/asset/image/playlist-supprimer-spotify-restaurer.jpg') }}" class="card-img-top"
                        alt="..." id="imgLastVideo">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card\'s content.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <h3 class="col-md-4">EVENT</h3>
                <div class="card mt-4">
                    <img src="{{ url('/asset/image/event_skate.png') }}" class="card-img-top" alt="..."
                        id="imgLastVideo">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card\'s content.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <h3 class="col-md-4">PHOTO</h3>
                <div class="card mt-4">
                    <img src="{{ url('/asset/image/attire-loeil-de-la-personne-qui-prend-des-photographies-1200x800.jpg') }}"
                        class="card-img-top" alt="..." id="imgLastVideo">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card\'s content.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
