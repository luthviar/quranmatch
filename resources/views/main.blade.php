<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Memory Game</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet prefetch" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    <link rel="stylesheet prefetch" href="https://fonts.googleapis.com/css?family=Arial">
    <!--  -->
    <link href="{{ URL::asset('/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('css/app.css')}}">

</head>
<body>

<div class="container">
    <header>
        <h1>Quran Match</h1>
    </header>

    <section class="score-panel">
        <ul class="stars">
            <li><i class="fa fa-star"></i></li>
            <li><i class="fa fa-star"></i></li>
            <li><i class="fa fa-star"></i></li>
        </ul>

        <span class="moves">0</span> Move(s)

        <div class="timer">
        </div>

        <div class="restart" onclick=restartGame()>
            <i class="fa fa-repeat"></i>
        </div>
    </section>

    <ul class="deck" id="card-deck">
        @foreach($quran as $qrn)
            <li class="card" type="{{ $qrn->id }}">
                {{ $qrn->word }}
            </li>
        @endforeach
        @foreach($quran as $qrn)
            <li class="card" type="{{ $qrn->id }}">
                {{ $qrn->trans }}
            </li>
        @endforeach
        {{--<li class="card" type="diamond">--}}
            {{--<!-- <i class="fa fa-diamond"></i> -->--}}
            {{--بِسْمِ--}}
        {{--</li>--}}
        {{--<li class="card" type="plane">--}}
            {{--<!-- <i class="fa fa-paper-plane-o"></i> -->--}}
            {{--الرَّحْمَنِ--}}
        {{--</li>--}}
        {{--<li class="card match" type="anchor">--}}
            {{--<!-- <i class="fa fa-anchor"></i> -->--}}
            {{--الرَّحِيمِ--}}
        {{--</li>--}}
        {{--<li class="card" type="bolt" >--}}
            {{--<!-- <i class="fa fa-bolt"></i> -->--}}
            {{--الْحَمْدُ--}}
        {{--</li>--}}
        {{--<li class="card" type="cube">--}}
            {{--<!-- <i class="fa fa-cube"></i> -->--}}
            {{--مَالِكِ--}}
        {{--</li>--}}
        {{--<li class="card match" type="anchor">--}}
            {{--<!-- <i class="fa fa-anchor"></i> -->--}}
            {{--the Most Merciful.--}}
        {{--</li>--}}
        {{--<li class="card" type="leaf">--}}
            {{--<!-- <i class="fa fa-leaf"></i> -->--}}
            {{--of the universe--}}
        {{--</li>--}}
        {{--<li class="card" type="bicycle">--}}
            {{--<!-- <i class="fa fa-bicycle"></i> -->--}}
            {{--يَوْمِ--}}
        {{--</li>--}}
        {{--<li class="card small" type="diamond">--}}
            {{--<!-- <i class="fa fa-diamond"></i> -->--}}
            {{--In (the) name--}}
        {{--</li>--}}
        {{--<li class="card" type="bomb">--}}
            {{--<!-- <i class="fa fa-bomb"></i> -->--}}
            {{--رَبِّ--}}
        {{--</li>--}}
        {{--<li class="card" type="leaf">--}}
            {{--<!-- <i class="fa fa-leaf"></i> -->--}}
            {{--الْعَالَمِينَ--}}
        {{--</li>--}}
        {{--<li class="card" type="bomb">--}}
            {{--<!-- <i class="fa fa-bomb"></i> -->--}}
            {{--the Lord--}}
        {{--</li>--}}
        {{--<li class="card open show" type="bolt">--}}
            {{--<!-- <i class="fa fa-bolt"></i> -->--}}
            {{--All praises and thanks--}}
        {{--</li>--}}
        {{--<li class="card" type="bicycle">--}}
            {{--<!-- <i class="fa fa-bicycle"></i> -->--}}
            {{--(of the) Day--}}
        {{--</li>--}}
        {{--<li class="card" type="plane">--}}
            {{--<!-- <i class="fa fa-paper-plane-o"></i> -->--}}
            {{--the Most Gracious--}}
        {{--</li>--}}
        {{--<li class="card" type="cube">--}}
            {{--<!-- <i class="fa fa-cube"></i> -->--}}
            {{--(The) Master--}}
        {{--</li>--}}
    </ul>

    <a class="btn btn-danger btn-lg" href="{{ url('/') }}" role="button"><i class="fa fa-home"></i> Back Home</a>

    <div id="popup1" class="overlay">
        <div class="popup">
            <h2>Congratulations 🎉</h2>
            <a class="close" href=# >×</a>
            <div class="content-1">
                Congratulations you're a winner 🎉🎉
            </div>
            <div class="content-2">
                <p>You made <span id=finalMove> </span> moves </p>
                <p>in <span id=totalTime> </span> </p>
                <p>Rating:  <span id=starRating></span></p>
            </div>
            <button id="play-again"onclick="playAgain()">
                Play again 😄</a>
            </button>
        </div>
    </div>

</div>
<script src="{{ URL::asset('js/jquery-3.3.1.js') }}"></script>
<script src="{{ URL::asset('js/app.js') }}"></script>
</body>
</html>
