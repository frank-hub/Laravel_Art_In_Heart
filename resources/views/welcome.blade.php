@extends('layouts.home_layout')

@section('home')
    <!-- Page Content -->
    <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
              <div class="carousel-item active">
                <img class="d-block img-fluid" src="{{asset('images/art-tools.png')}}" alt="First slide"
                style="width: 100%;">
                <div class="carousel-caption d-none d-md-block">
                 <h2 style="font-weight: bold;font-family: cursive;">Art In Heart</h2>
                  <p>...</p>
                </div>
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="{{asset('images/art-tools.png')}}" alt="Second slide"
                style="width: 100%;">
                <div class="carousel-caption d-none d-md-block">
                  <h2 style="font-weight: bold;font-family: cursive;">Art In Heart</h2>
                  <p>...</p>
                </div>
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="{{asset('images/art-tools.png')}}" style="width: 100%;" alt="Third slide">
                <div class="carousel-caption d-none d-md-block">
                  <h2 style="font-weight: bold;font-family: cursive;">Art In Heart</h2>
                  <p>...</p>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div> 
          
    <div class="container">
            <div class="text-center">
                <h4 class="" style="letter-spacing: 15px;">
                    <span><hr style="width: 395px;"></span>
                    Why Art In Heart ?
                    <span><hr style="width: 395px;"></span>
                </h4>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="card-body">
                        <h4 class="hrs"><i class="far fa-images"></i><span>The Title Here</span></h4>
                        <hr class="hrs bg-primary">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt porro quas animi beatae voluptate unde neque voluptatum 
                    </div>
                </div>
                <div class="col-md-4">
                        <div class="card-body">
                            <h4 class="hrs"><i class="far fa-user"></i><span>The Title Here</span></h4>
                            <hr class="hrs bg-primary">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt porro quas animi beatae voluptate unde neque volupta
                        </div>
                </div>
                <div class="col-md-4">
                        <div class="card-body">
                            <h4 class="hrs"><i class="fas fa-truck-loading"></i><span>The Title Here</span></h4>
                            <hr class="hrs bg-primary">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt porro quas animi beatae voluptate unde neque volupta
                        </div>
                </div>
            </div>
            <div class="jumbotron jumbotron-fluid">
                <div class="container text-center">
                    <h1 class="display-4">
                        Original art from <br> independent artists around the world.
                    </h1>
                </div>
            </div>
            <div class="text-center">
                    <h4 class="" style="letter-spacing: 15px;">
                        <span><hr style="width: 395px;"></span>
                        The Art Of The Week
                        <span><hr style="width: 395px;"></span>
                    </h4>
                </div>
                <div class="row">
                        @foreach ($home_w['art of the week'] as $home)
                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="card h-100">
                                <a href="#">
                                    <img class="card-img-top img-fluid" src="{{asset('images/discovery/'.$home->images)}}" alt="{{$home->name}}" height="150px">
                                </a>
                                <div class="card-body">
                                <h4 class="card-title">
                                    <a href="#">{{$home->name}}</a>
                                </h4>
                                <h5>Ksh. {{$home->price}}</h5>
                                <small class="text-danger">&#9733; &#9733; &#9733; &#9733; &#9733; (5)</small>
                                <p class="card-text">{{$home->description}}</p>
                                </div>
                            
                            </div>
                        </div>
                       
                        @endforeach>
                
                
                

                
                </div>
                  
      
              </div>
              <!-- /.col-lg-9 -->
      
            </div>
            <!-- /.row -->
      
          </div>
          <!-- /.container -->
      
         
      
@endsection