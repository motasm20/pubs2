<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{url('CSS\style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
          integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
          crossorigin="anonymous" referrerpolicy="no-referrer">
    <title>Bind</title>
</head>
<body>
<header>
    <nav>
        <ul class="links">
        <li><a href="/Maps"><span class="neon_hover">Home</span></a></li>
    <li><a href="/Maps/Split"><span class="neon_hover">Split</span></a></li>
    <li><a href="/Maps/Bind"><span class="neon_hover">Bind</span></a></li>
    <li><a href="/Maps/Haven"><span class="neon_hover">Haven</span></a></li>

        </ul>
        <a class="logo" href="/Maps"><img class="nav_logo" src="{{asset('/img/Valorant-logo.png')}}" alt="Valorant-logo"></a>

    </nav>
</header>
<main>
        <h1>Kies een rol</h1>
        <div class="container-rollen">
            @foreach($roles as $role)
                <a href="/Maps/Bind/{{ $role }}">
                    <img style="justify-items: center" class="roll-logo" src="{{ asset('/img/' .$role. '-logo.png') }}" alt="{{ $role }}-logo">
                    <div style="text-align: center">{{ $role }}</div>
                </a>
            @endforeach
        </div>

        @isset($selectedRole)
        <h2 style="text-align: center;">{{ $selectedRole }}</h2>
        <div class="container-geslecteerde-rol">
            @foreach($agents as $agent)
                <img style="justify-self: right; cursor: pointer" class="geslecterde-agent" src="{{ asset('/img/' .$agent.'_icon.png') }}" alt="{{ $agent }}">
                <div style="text-align: left; cursor: pointer" >{{ $agent }}</div>
            @endforeach
        </div>
        @endisset
</main>
<footer>
<div class="social_media">
        <div class="logos">
          <a class="S_M_logo" href="https://www.facebook.com">
            <img src="{{asset('/img/facebook.png')}}" alt="facebook-logo">
          </a><a class="S_M_logo" href="https://www.www.instagram.com/">
            <img src="{{asset('/img/instagram.png')}}" alt="instagram-logo">
          </a>
          <a class="S_M_logo" href="https://www.twitter.com">
            <img src="{{asset('/img/twitter.png')}}" alt="twitter-logo">
          </a>
          <a class="S_M_logo" href="https://www.youtube.com">
            <img src="{{asset('/img/youtube.png')}}" alt="youtube-logo">
          </a>
        </div>
        <a class="logos" href="/Maps"><img class="nav_logo" src="{{asset('/img/Valorant-logo.png')}}" alt="Valorant-logo"></a>
      </div>
</footer>
</body>
</html>
