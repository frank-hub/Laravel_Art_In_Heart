@extends('layouts.home_layout')

@section('home')
    <div class="jumbotron jumbotron-fluid">
        <div class="container text-center">
            <h1 class="display-4">Featured Art</h1>
            <p class="lead">
                    Discover today's picks for you, refreshed daily.
                    <br> See something you love? Remember to save it to 
                    your favorites...it'll be gone tomorrow!
            </p>
        </div>
    </div>
<div class="container">

        <div class="row">
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card h-100">
                        <a href="#"><img class="card-img-top" src="{{asset('images/11.jpg')}}" alt="" height="150px"></a>
                        <div class="card-body">
                        <h4 class="card-title">
                            <a href="#">The Price</a>
                        </h4>
                        <h5><strong>Ksh. 3400</strong></h5>
                        <small class="text-danger">&#9733; &#9733; &#9733; &#9733; &#9733; (5)</small>
                        <p class="card-text">Some thing here</p>
                        </div>
                    
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card h-100">
                        <a href="#"><img class="card-img-top" src="{{asset('images/12.jpg')}}" alt="" height="150px"></a>
                        <div class="card-body">
                        <h4 class="card-title">
                            <a href="#">The Price</a>
                        </h4>
                        <h5><strong>Ksh. 3400</strong></h5>
                        <small class="text-danger">&#9733; &#9733; &#9733; &#9733; &#9733; (5)</small>
                        <p class="card-text">Some thing here</p>
                        </div>
                    
                    </div>
                </div>
    
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card h-100">
                        <a href="#"><img class="card-img-top" src="{{asset('images/13.jpg')}}" alt="" height="150px"></a>
                        <div class="card-body">
                        <h4 class="card-title">
                            <a href="#">The Price</a>
                        </h4>
                        <h5><strong>Ksh. 3400</strong></h5>
                        <small class="text-danger">&#9733; &#9733; &#9733; &#9733; &#9733; (5)</small>
                        <p class="card-text">Some thing here</p>
                        </div>
                    
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card h-100">
                        <a href="#"><img class="card-img-top" src="{{asset('images/12.jpg')}}" alt="" height="150px"></a>
                        <div class="card-body">
                        <h4 class="card-title">
                            <a href="#">The Price</a>
                        </h4>
                        <h5><strong>Ksh. 3400</strong></h5>
                        <small class="text-danger">&#9733; &#9733; &#9733; &#9733; &#9733; (5)</small>
                        <p class="card-text">Some thing here</p>
                        </div>
                    
                    </div>
                </div>
    
                
                </div>
                  
      
              </div>
              <!-- /.col-lg-9 -->
      
            </div>
            <!-- /.row -->
</div>
@endsection