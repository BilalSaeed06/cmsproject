<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="nav has-shadow">
          <div class="container">

          <div class="nav-left">

            <a href={{route('home')}} class="nav-item">
              <img src={{asset('images/images.png')}} style="height:60px;width:60px" alt="Dev marketer">
            </a>


            <a href="#" class="nav-item is-tab is-hidden-mobile m-l-10">Learn</a>
            <a href="#" class="nav-item is-tab is-hidden-mobile">Discuss</a>
            <a href="#" class="nav-item is-tab is-hidden-mobile">Share</a>

          </div>
          <div class="nav-right" style="overflow:visible">

            @if (Auth::guest())
              <a href="{{route('login')}}" class="nav-item is-tab">Login</a>
              <a href="{{route('register')}}" class="nav-item is-tab">Signup</a>
            @else
              <button id="user_button" class="dropdown nav-item is-aligned-right is-tab">
                Bilal Saeed <span class="icon"><i class="fa fa-caret-down"></i></span>
                <ul class="dropdown-menu">

                  <li>
                    <a href="#">
                    <span class="icon">
                      <i class="fa fa-fw fa-user-circle-o m-r-5"></i>
                    </span>
                    Profile
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <span class="icon">
                        <i class="fa fa-fw fa-bell m-r-5"></i>
                      </span>
                      Notification
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <span class="icon">
                        <i class="fa fa-fw fa-cog m-r-5"></i>
                      </span>
                      Settings
                    </a>
                  </li>
                  <li class="seperator"></li>
                  <li>
                    <a href="#">
                      <span class="icon">
                        <i class="fa fa-fw fa-sign-out m-r-5"></i>
                      </span>
                      Logout
                    </a>
                  </li>

                </ul>
              </button>
            @endif



          </div>

          </div>
        </nav>
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
