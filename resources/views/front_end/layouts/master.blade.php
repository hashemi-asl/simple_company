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
    @yield('seo')
    {{--    end SEO--}}

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
