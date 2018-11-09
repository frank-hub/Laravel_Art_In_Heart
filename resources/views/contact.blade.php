@extends('layouts.home_layout')

@section('home')
<div class="container" style="margin-top:50px;">
        <div class="row" style="margin-bottom:20px">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-6">
                        <p class="text-muted" style="font-size:250px;">
                    <i class="fa fa-globe-africa"></i>
                    </p>
                    </div>
                    <div class="col-md-6">
                        <address style="margin-top:150px;">
                            <p><span><i class="fas fa-map-marked" style="font-size:25px;"></i></span> P.O.Box : 252 , Nakuru</p>
                            <p><span><i class="fas fa-phone" style="font-size:25px;"></i></span> 07********</p>
                            <p><span><i class="fas fa-envelope" style="font-size:25px;"></i></span><a href="mailto:sumbi@artofheart.com"> sumbi@artofheart.com</a></p>
                        </address>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <form action="sendemail.php" method="post">
                  <div class="form-group">
                        <label for="fname">Full Name</label>
                        <input type="text" name="name" id="fname" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="mail">Email Address</label>
                        <input type="email" name="email" id="mail" class="form-control" required>
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="sub">Subject</label>
                        <input type="text" name="subject" id="sub" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <textarea name="message" class="form-control" id="" cols="30" rows="10" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-block btn-outline-info">Mail It</button>
                </form>
            </div>
        </div>
    </div>
@endsection