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
            <li class="nav-item">
                <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item active">
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
<div data-jarallax data-speed="0.2" class="jarallax" style="height: 500px;">
    <img class="jarallax-img" src="https://greens.org.au/sites/default/files/2018-11/Larissa%20Waters_Senate%201_WEB%20banner-v03.png" alt="">
    <div class="mask flex-center flex-column" style="position:absolute; top:0; left:0; z-index: 1; height: 100%; width: 100%;">
        <div class="container">
            <div class="py-5">
                <h2 class="h1 my-4 pt-4 font-weight-bold" style="font-size: 3em; color: #fff;">Get to know Youma</h2>
            </div>
        </div>
    </div>
</div>
<div class="container py-5">
    <p class="blurb">Throughout all my life, my home and my heart has always been in Canberra. Having been born and raised here, I've watched this city we know grow into how it is today, I've seen the effects bad policy and anti-canberran hatred have upon our home. Through the Abbott and Turnbull years, I saw the resilience of Canberrans in the face of a party that cared more for their own pockets then for the people of Australia, I could only observe as our home had its jobs stripped away under a false promise that it would 'fix the budget'.
    </p>
    <p class="blurb">I entered politics in early 2018, creating a movement that the major parties didn't dare to contest. I quickly found myself a passionate fighter and advocate for Canberra and it's interests, no matter where I was officially representing. Through the Bsharri, PineappleCrusher, and Second BloodyChrome government's, I was the voice singing out for change, for reason, for social democracy. Passing an act to fix the broken section within our self government act, and with this passion and this movement we saw my government elected twice.
    </p>
    <p class="blurb">Through my time in government, I always had Canberra in mind, how I could help my home grow whilst ensuring the nation prospered. I'm proud of what my government's achieved, records set that have only now been broken by another SDP government.
    </p>
    <p class="blurb">This election, it is up to us, the people of Canberra, to make a choice. I stand before our home with a plan for change, for progress, for stability in uncertain times. Having lived here my whole life, I know what needs to be changed, what needs to be enacted, what we must achieve in order to help our home. So to the inner Woden suburbs, to Gungahlin, to Belconnen, to Tuggeranong, and even to the far reaches of Tharwa, I want to serve you. I hope that on election day, you will once again bless me with that honour.
    </p>
    <h4 class="font-weight-bold sdp-text">Qualifications</h4>
    <ul>
        <li>Member for Canberra (September 2019 - Present, December 2018 - March 2019)</li>
        <li>Prime Minister of Australia (December 2018 - May 2019)</li>
        <li>Minister for States, Territories and External Territories        </li>
        <li>Minister for Foreign Affairs
        </li>
        <li>Dame of the Order of Australia
        </li>
    </ul>
</div>
@endsection
