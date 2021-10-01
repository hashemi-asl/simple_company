<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{--    website title--}}
    <title>simple company</title>
    {{--   end website title--}}

    {{--    SEO--}}
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="robots" content="index,follow">
    {{--    end SEO--}}

    {{--    meta tag social--}}
    <meta property="og:title" content="">
    <meta property="og:description" content="">
    <meta property="og:keywords " content="">
    <meta property="og:image" content="">
    <meta property="og:url" content="">
    {{--    end meta tag social--}}

    {{--    icon --}}
    <link rel="icon" href="{{asset('front_end/images/favicon/favicon.ico')}}" type="image/png"/>
    {{--    end icon --}}

    {{--    css--}}
    <link rel="stylesheet" href="{{asset('front_end/css/style.css')}}">
    @yield('css')
    {{--    end css--}}

</head>
<body>
<!--make website-->
@yield('content')
{{--end make website--}}

{{--js--}}
<script src="{{asset('js/app.js')}}"></script>
@yield('js')
{{--end js--}}

</body>
</html>
