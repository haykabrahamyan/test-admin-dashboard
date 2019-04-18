<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name') }}</title>
    <link href="{{ asset('css/dashboard.css')  }}" rel="stylesheet">
    <link href="{{ asset('css/app.css')  }}" rel="stylesheet">
    @yield('style')
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <script>
        window.Laravel =<?php echo json_encode(['csrfToken' => csrf_token(),]); ?>
    </script>
</head>
<body>
{{--Sidebar--}}
<div class="sidebar">
    <h4 class="admin-title">Admin Dashboard</h4>
    <hr>
    <div class="list {{(isset($dashboard)) ? 'active-page' : ''}}">
        <a href="{{route('dashboard')}}">
            <i class="fas fa-tachometer-alt"></i>
            Dashboard
        </a>
    </div>
    <div class="list {{(isset($create)) ? 'active-page' : ''}}">
        <a href="{{route('show-user')}}">
           <i class="fas fa-user-plus"></i>
            Add User
        </a>
    </div>
    <div class="list {{(isset($roleView)) ? 'active-page' : ''}}">
        <a href="{{route('role')}}">
           <i class="fas fa-user-tag"></i>
            Roles
        </a>
    </div>
    <div class="list">
        <a href="{{route('home')}}">
            <i class="fas fa-long-arrow-alt-left"></i>
            Back to Home
        </a>
    </div>

    <div class="list">
         <a href="{{ url('/logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
            <i class="fas fa-sign-out-alt"></i>&nbsp;
            Logout
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
    </div>
</div>

<div class="content-body">
    <div class="container">
        @yield("content")
    </div>
</div>
<script type="text/javascript" src="{{asset('js/app.js')}}"></script>
@yield('script')
</body>
</html>
