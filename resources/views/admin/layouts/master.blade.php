<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    {{--    css--}}
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    @yield('css')
    {{--    end css--}}
</head>
<body>

<div class="container-fluid">
    <div class="menu">
        <nav class="navbar navbar-expand-sm navbar-light bg-secondary">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link text-white font-weight-bolder" href="{{route('admin')}}">Home <span class="sr-only">(current)</span></a>
                    </li>
 
                </ul>
                <form class="form-inline my-2 my-lg-0"> 
                    <input class="form-control mr-sm-2" type="text" placeholder="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
                <ul class="navbar-nav mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="btn btn-outline-danger my-2 my-sm-0 nav-item ml-2 " href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}  </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                </ul>

            </div>
        </nav>
        @yield('content')
    </div>
</div>

{{--js--}}
<script src="{{asset('js/app.js')}}"></script>
@yield('js')
{{--end js--}}
</body>
</html>
