
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

    <link href="{{ asset('css/app.css')  }}" rel="stylesheet">
    <link href="{{ asset('css/style.css')  }}" rel="stylesheet">
    @yield('styles')
    <!-- Scripts -->
    <script>
        window.Laravel =<?php echo json_encode([
			'csrfToken' => csrf_token(),
		]); ?>
    </script>
</head>
<body>
<nav class="navbar navbar-inverse">
    <div class="container">
        <div class="navbar-header">
            @if(Auth::check())
                <li>
                    <a class="navbar-brand" href="{{route('home')}}">
                        {{ Auth::user()->name }}
                    </a>
                </li>
            @else
                <a class="navbar-brand" href="{{route('home')}}">{{config("app.name")}}</a>
            @endif
        </div>
		<ul class="nav navbar-nav navbar-right">
            <!-- Authentication Links -->
			<li>
				<a href="{{route('home')}}" class="{{(isset($home)?'active':'')}}">Home</a>
			</li>
            @if (Auth::guest())
                <li>
					<a href="{{ url('/login') }}" class="{{(isset($login)?'active':'')}}">Login</a>
				</li>
            @else
                @if(auth()->user()->isAdmin())
                    <li>
                        <a href="{{ route('dashboard') }}">Dashboard</a>
                    </li>
                @endif
                <li>
                    <a href="{{ url('/logout') }}"
                       onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                        Logout
                    </a>
                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
            @endif
        </ul>
    </div>
</nav>

@yield("content")
@yield("script")

</body>
</html>
