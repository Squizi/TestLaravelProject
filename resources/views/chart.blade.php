@extends('layouts.app')

@section('content')
<div class="container">
    <canvas id="myChart" width="400" height="200"></canvas>
</div>

<div class="container-cards">
    <div class="card-people">
        <img src="{{ asset('img/female.png') }}" class="card-people__image" alt="person">
        <div class="card-text">
            <h1>Samanhta Mils</h1>
            <h5>Manager</h5>
            <p>Some not so personal information about Samantha. But enough personal to get to know her a little bit. Hope this is helpfull.</p>
        </div>
        <ul class="social-icons">
            <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
            <li><a href="#"><i class="fab fa-twitter-square"></i></a></li>
            <li><a href="#"><i class="fab fa-google-plus-square"></i></a></li>
            <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
        </ul>
    </div>
    <div class="card-people">
        <img src="{{ asset('img/male.png') }}" class="card-people__image" alt="person">
        <div class="card-text">
            <h1>Anthony Floffs</h1>
            <h5>Manager</h5>
            <p>Some not so personal information about Anthony. But enough personal to get to know him a little bit. Hope this is helpfull.</p>
        </div>
        <ul class="social-icons">
            <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
            <li><a href="#"><i class="fab fa-twitter-square"></i></a></li>
            <li><a href="#"><i class="fab fa-google-plus-square"></i></a></li>
            <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
        </ul>
    </div>
    <div class="card-people">
        <img src="{{ asset('img/female.png') }}" class="card-people__image" alt="person">
        <div class="card-text">
            <h1>Samanhta Mils</h1>
            <h5>Manager</h5>
            <p>Some not so personal information about Samantha. But enough personal to get to know her a little bit. Hope this is helpfull.</p>
        </div>
        <ul class="social-icons">
            <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
            <li><a href="#"><i class="fab fa-twitter-square"></i></a></li>
            <li><a href="#"><i class="fab fa-google-plus-square"></i></a></li>
            <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
        </ul>
    </div>
</div>
@endsection