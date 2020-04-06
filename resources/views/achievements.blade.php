@extends('layouts.master')
@section('title', 'Achievements')
@section('content')
<nav class="navbar navbar-expand-lg navbar-dark shadow-none" style="z-index: 1000; position:absolute; top: 10px; left: 0; right: 0; min-height:60px;">
    <div class="container">
        <a class="navbar-brand" href="/"><img src="{{asset('img/socdemroseblack.png')}}" style="height: 30px;" alt=""> <b>Youma for Canberra</b></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
            aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/gettoknowyouma">Get To Know Her</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="/achievements">Achievements</a>
            </li>
            <li class="nav-item">
                <a href="/manifesto" class="nav-link">Manifesto</a>
            </li>
            </ul>
        </div>
    </div>
</nav>
<div data-jarallax data-speed="0.2" class="jarallax" style="height: 500px;">
    <img class="jarallax-img" src="https://331mrnu3ylm2k3db3s1xd1hg-wpengine.netdna-ssl.com/wp-content/uploads/2019/06/guide-to-canberra_establishing-city-shot-of-canberra_-1170x873.jpg" alt="">
    <div class="mask flex-center flex-column" style="position:absolute; top:0; left:0; z-index: 1; height: 100%; width: 100%;">
        <div class="container">
            <div class="py-5">
                <h2 class="h1 my-4 pt-4 font-weight-bold" style="font-size: 3em; color: #fff;">Achievements</h2>
            </div>
        </div>
    </div>
</div>
<div class="container py-5">
    <h4 class="font-weight-bold sdp-text">My achievements this term</h4>
    <ul>
        <li>Gaining bi-partisan approval for the dual referenda on ACT and NT Statehood
        </li>
        <li>Ensuring the SPIRE Project was fully funded in the budget
        </li>
        <li>
            Ensuring Stage 2A+B of the Light rail network was fully funded in the budget

        </li>
        <li>Keeping Australian's safe through management of the COVID-19 outbreak
        </li>
        <li>Standing up for Canberra against the coalition
        </li>
    </ul>
</div>
@endsection
