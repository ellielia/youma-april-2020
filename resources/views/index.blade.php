@extends('layouts.master')
@section('title', 'Welcome')
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
            <li class="nav-item active">
                <a class="nav-link" href="/">Home
                <span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/gettoknowyouma">Get To Know Her</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/achievements">Achievements</a>
            </li>
            <li class="nav-item">
                <a href="/manifesto" class="nav-link">Manifesto</a>
            </li>
            </ul>
        </div>
    </div>
</nav>
<div data-jarallax data-speed="0.2" class="jarallax" style="height: 100vh;">
    <img class="jarallax-img" src="{{asset('img/mainbanner.png')}}" alt="">
    <div class="mask flex-center flex-column" style="position:absolute; top:0; left:0; z-index: 1; height: 100%; width: 100%;">
        <div class="container">
            <div class="py-5">
                <h1 class="h1 my-4 py-2 font-weight-bold" style="font-size: 3em; color: #fff;">Youma: Your dedicated<br>local MP</h1>
                <h4><a href="#findoutmore" id="discoverMore" class="white-text" style="transition:fade 0.4s;">Find out more&nbsp;&nbsp;<i class="fas fa-arrow-down"></i></a></h4>
            </div>
        </div>
    </div>
</div>
<div class="sdp" id="findoutmore">
    <div class="container py-5">
        <h4 class="white-text font-weight-bold">"Over the past few terms, I have had the honour and the privilege to be Canberra's local member of parliament. This election, I hope you can join my team in helping ensuring that Canberra is properly represented by those who care for our home, not those jumping across for political gains."</h4>
        <div class="d-flex flex-row justify-content-end">
        <img style="height: 80px;" src="{{asset('img/signature.png')}}" alt="">
        </div>
    </div>
</div>
<div class="container py-5">
    <div class="row">
        <div class="col-md-6">
            <h4 class="font-weight-bold sdp-text">Get to know Youma</h4>
            <ul class="list-unstyled ml-0 pt-3 pl-0">
                <li class="mb-3">
                    <a href="/achievements" class="btn btn-block">Achievements</a>
                </li>
                <li>
                    <a href="/manifesto" class="btn btn-block">Manifesto</a>
                </li>
            </ul>
        </div>
        <div class="col-md-6">
            <h4 class="font-weight-bold sdp-text">How to vote for Youma</h4>
            <p class="font-weight-bold sdp-text">Voting for a brighter future for Canberra is easy</p>
            <p>On your House of Representatives (green) ballot paper, number the candidates as follows to vote for Youma and the SDP:</p>
            <ul class="pl-1">
                <ol><b>1)</b> Youmaton (Social Democratic Party)</ol>
                <ol><b>2)</b> BloodyChrome (Liberal Party)</ol>
                <ol><b>3)</b> Elleeit (The Nationals)</ol>
            </ul>
            <a style="text-decoration:underline;" class="blue-text" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                Click here to view Ballot Paper Example
            </a>
            <div class="collapse" id="collapseExample">
                <img src="{{asset('img/htv.png')}}" alt="" class="img-fluid">
            </div>
        </div>
    </div>
</div>
@endsection
