@extends('layouts.master')
@section('title', 'Manifesto')
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
            <li class="nav-item">
                <a class="nav-link" href="/achievements">Achievements</a>
            </li>
            <li class="nav-item active">
                <a href="/manifesto" class="nav-link">Manifesto</a>
            </li>
            </ul>
        </div>
    </div>
</nav>
<div data-jarallax data-speed="0.2" class="jarallax" style="height: 500px;">
    <img class="jarallax-img" src="https://www.qantas.com/content/travelinsider/en/explore/australia/australian-capital-territory/canberra/the-best-free-things-to-do-with-kids-in-canberra/_jcr_content/parsysTop/hero.img.full.medium.jpg/1544505298207.jpg" alt="">
    <div class="mask flex-center flex-column" style="position:absolute; top:0; left:0; z-index: 1; height: 100%; width: 100%;">
        <div class="container">
            <div class="py-5">
                <h2 class="h1 my-4 pt-4 font-weight-bold" style="font-size: 3em; color: #fff;">Manifesto</h2>
            </div>
        </div>
    </div>
</div>
<div class="sdp">
<div class="container py-5">
<p class="manifestoblurb">This election, Canberra faces a yet another choice
to make about its future. We face the choice of a
government 100% committed to delivering for
Canberra, or a coalition that does not under stand
our legal system and insults our very existance.</p>

<p class="manifestoblurb">Over the past term, I have been a strong advocate
for our local community, personally securing
much needed funding for the SPIRE Project at the
Canberra Hospital, Stage 2A + 2B of the Light Rail
project, and our long-awaited statehood
referendum. Within cabinet, I have put Canberran
interests first, ensuring our jobs and our
livelihoods are protected from a coalition
increasingly hostile towards our home.</p>

<p class="manifestoblurb">Together, we can continue to build a stronger and
more prosperous Canberra, but this is only
achievable with your support. Through reflection
upon my record and my new promises, I hope you
will consider letting me continue the honour of
representing you in federal parliament.</p>
<img style="height: 80px;" src="{{asset('img/signature.png')}}" alt="">
</div>
</div>

<div class="container py-5">
    <h4 class="font-weight-bold sdp-text">My original 10 promises to you</h4>
    <div class="row">
        <div class="col-md-6">
            <div style="font-size: 1.1em;" class="pb-2">
                <span class="sdp-text font-weight-bold">Promise #1:</span> Referendum on ACT Statehood&nbsp;&nbsp;<span class="sdp" style="padding: 2px; padding-left: 5px; padding-right: 5px; font-weight: 800; color:white;">DELIVERED</span>
            </div>
        </div>
        <div class="col-md-6">
            <div style="font-size: 1.1em;" class="pb-2">
                <span class="sdp-text font-weight-bold">Promise #2:</span> Approval for Stage 2A & 2B Light Rail&nbsp;&nbsp;<span class="sdp" style="padding: 2px; padding-left: 5px; padding-right: 5px; font-weight: 800; color:white;">DELIVERED</span>
            </div>
        </div>
        <div class="col-md-6">
            <div style="font-size: 1.1em;" class="pb-2">
                <span class="sdp-text font-weight-bold">Promise #3:</span> 100% Vote Attendance Record&nbsp;&nbsp;<span class="sdp" style="padding: 2px; padding-left: 5px; padding-right: 5px; font-weight: 800; color:white;">89.8%</span>
            </div>
        </div>
        <div class="col-md-6">
            <div style="font-size: 1.1em;" class="pb-2">
                <span class="sdp-text font-weight-bold">Promise #4:</span> Free University&nbsp;&nbsp;<span class="sdp" style="padding: 2px; padding-left: 5px; padding-right: 5px; font-weight: 800; color:white;">FULLY FUNDED</span>
            </div>
        </div>
        <div class="col-md-6">
            <div style="font-size: 1.1em;" class="pb-2">
                <span class="sdp-text font-weight-bold">Promise #5:</span> Promote Local Community&nbsp;&nbsp;<span class="sdp" style="padding: 2px; padding-left: 5px; padding-right: 5px; font-weight: 800; color:white;">AS PROMISED</span>
            </div>
        </div>
        <div class="col-md-6">
            <div style="font-size: 1.1em;" class="pb-2">
                <span class="sdp-text font-weight-bold">Promise #6:</span> Start the Spire Project&nbsp;&nbsp;<span class="sdp" style="padding: 2px; padding-left: 5px; padding-right: 5px; font-weight: 800; color:white;">FULLY FUNDED</span>
            </div>
        </div>
        <div class="col-md-6">
            <div style="font-size: 1.1em;" class="pb-2">
                <span class="sdp-text font-weight-bold">Promise #7:</span> Renewable Transition&nbsp;&nbsp;<span class="sdp" style="padding: 2px; padding-left: 5px; padding-right: 5px; font-weight: 800; color:white;">UNDERWAY</span>
            </div>
        </div>
        <div class="col-md-6">
            <div style="font-size: 1.1em;" class="pb-2">
                <span class="sdp-text font-weight-bold">Promise #8:</span> Protect Canberran Jobs&nbsp;&nbsp;<span class="sdp" style="padding: 2px; padding-left: 5px; padding-right: 5px; font-weight: 800; color:white;">NEVERENDING</span>
            </div>
        </div>
        <div class="col-md-6">
            <div style="font-size: 1.1em;" class="pb-2">
                <span class="sdp-text font-weight-bold">Promise #9:</span> Protect our Environment&nbsp;&nbsp;<span class="sdp" style="padding: 2px; padding-left: 5px; padding-right: 5px; font-weight: 800; color:white;">SAFER THAN EVER</span>
            </div>
        </div>
        <div class="col-md-6">
            <div style="font-size: 1.1em;" class="pb-2">
                <span class="sdp-text font-weight-bold">Promise #10:</span> Unite our Local Community&nbsp;&nbsp;<span class="sdp" style="padding: 2px; padding-left: 5px; padding-right: 5px; font-weight: 800; color:white;">TOGETHER ALWAYS</span>
            </div>
        </div>
    </div>
</div>
<div class="sdp white-text">
    <div class="container py-5">
        <h4 class="font-weight-bold">My new 10 promises to you</h4>
        <div class="row">
            <div class="col-md-6">
                <div style="font-size: 1.1em;" class="pb-2">
                    <span class="font-weight-bold">Promise #1:</span> Lead Through the COVID-19 Crisis
                </div>
            </div>
            <div class="col-md-6">
                <div style="font-size: 1.1em;" class="pb-2">
                    <span class="font-weight-bold">Promise #2:</span> Protect Our Public Service
                </div>
            </div>
            <div class="col-md-6">
                <div style="font-size: 1.1em;" class="pb-2">
                    <span class="font-weight-bold">Promise #3:</span> Protect Local Jobs
                </div>
            </div>
            <div class="col-md-6">
                <div style="font-size: 1.1em;" class="pb-2">
                    <span class="font-weight-bold">Promise #4:</span> Continue Fighting Climate Change
                </div>
            </div>
            <div class="col-md-6">
                <div style="font-size: 1.1em;" class="pb-2">
                    <span class="font-weight-bold">Promise #5:</span> Win The Statehood Referendum
                </div>
            </div>
            <div class="col-md-6">
                <div style="font-size: 1.1em;" class="pb-2">
                    <span class="font-weight-bold">Promise #6:</span> Represent Canberra Globally
                </div>
            </div>
            <div class="col-md-6">
                <div style="font-size: 1.1em;" class="pb-2">
                    <span class="font-weight-bold">Promise #7:</span> Keep Our Education System Properly Funded
                </div>
            </div>
            <div class="col-md-6">
                <div style="font-size: 1.1em;" class="pb-2">
                    <span class="font-weight-bold">Promise #8:</span> Spare No Limit in Protecting Our Health
                </div>
            </div>
            <div class="col-md-6">
                <div style="font-size: 1.1em;" class="pb-2">
                    <span class="font-weight-bold">Promise #9:</span> Hold The Parliament to Account
                </div>
            </div>
            <div class="col-md-6">
                <div style="font-size: 1.1em;" class="pb-2">
                    <span class="font-weight-bold">Promise #10:</span> Keep Education Free
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
