@if (is_array($seo))
    @forelse ($seo as $item)
        <title>{{$item->title}}</title>
{{--        <meta name="title" content="{{$item->title}}">--}}
        <meta name="keywords" content="{{$item->keywords}}">
        <meta name="description" content="{{$item->description}}">
        <meta name="author" content="{{$item->author}}">
        <meta name="robots" content="index,follow">

{{--            meta tag social--}}
        <meta property="og:title" content="{{$item->title}}">
        <meta property="og:description" content="{{$item->description}}">
        <meta property="og:keywords " content="{{$item->keywords}}">
        <meta property="og:image" content="">
        <meta property="og:url" content="">
{{--            end meta tag social--}}
    @empty
        <meta name="keywords" content="">
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="robots" content="index,follow">

{{--            meta tag social--}}
        <meta property="og:title" content="">
        <meta property="og:description" content="">
        <meta property="og:keywords " content="">
        <meta property="og:image" content="">
        <meta property="og:url" content="">
{{--            end meta tag social--}}

    @endforelse
@else
  @if (!empty($seo))
      <title>{{$seo->title}}</title>
      <meta name="title" content="{{$seo->title}}">
      <meta name="keywords" content="{{$seo->keywords}}">
      <meta name="description" content="{{$seo->description}}">
      <meta name="author" content="{{$seo->author}}">
      <meta name="robots" content="index,follow">

{{--          meta tag social--}}
      <meta property="og:title" content="{{$seo->title}}">
      <meta property="og:description" content="{{$seo->description}}">
      <meta property="og:keywords " content="{{$seo->keywords}}">
      <meta property="og:image" content="">
      <meta property="og:url" content="">
{{--          end meta tag social--}}
  @else
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <meta name="robots" content="index,follow">

{{--          meta tag social--}}
      <meta property="og:title" content="">
      <meta property="og:description" content="">
      <meta property="og:keywords " content="">
      <meta property="og:image" content="">
      <meta property="og:url" content="">
{{--          end meta tag social--}}
  @endif

@endif
