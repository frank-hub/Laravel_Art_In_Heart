@extends('layouts.home_layout')

@section('home')
    <div class="jumbotron jumbotron-fluid">
        <div class="container text-center">
            <h1 class="display-4">Artist</h1>
            <p class="lead">
                    Discover today's picks for you, refreshed daily.
                    <br> See something you love? Remember to save it to 
                    your favorites...it'll be gone tomorrow!
            </p>
        </div>
    </div>
<div class="container">

        <div class="row">
                @foreach ($artist_page as $artist)
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card h-100">
                        <a href="#"><img class="card-img-top img-fluid" src="{{asset('images/artist/'.$artist->images)}}" alt="" height="300px"></a>
                        <div class="card-body">
                        <h4 class="card-title">
                            <a href="#">{{$artist->name }}</a>
                        </h4>
                        <h5>Ksh. {{$artist->price}}</h5>
                        <small class="text-danger">&#9733; &#9733; &#9733; &#9733; &#9733; (5)</small>
                        <p class="card-text">{{$artist->description}}</p>
                        </div>
                    
                    </div>
                </div>
                
                @endforeach 
        </div>
                  
      
              </div>
              <!-- /.col-lg-9 -->
      
            </div>
            <!-- /.row -->
</div>
@endsection