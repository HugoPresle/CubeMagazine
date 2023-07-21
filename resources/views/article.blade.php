@extends('layouts.header')

@section('content')
 {{-- add a display for video with a for in blade --}}
    <h1 class="text-center mt-4">Les dernières vidéos</h1>
    <hr>
    

 
@for (i = 0; i < 15; i++)
        <div class="col-md-4">
            <div class="card mt-4">
                <img src="http://127.0.0.1:8000/asset/image/lyon-22-09-11-0990.jpg" class="card-img-top" alt="..."
                    id="imgLastVideo">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card\'s content.</p>
                </div>
            </div>
        </div>
        @if (i % 3 == 0)
            <br>
        @endif
    @endfor
    
@endsection
