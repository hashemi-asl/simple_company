@extends('front_end.layouts.master')
@section('seo')
    @include('front_end.partials.seo',['seo'=>$seo])
@endsection
@section('content')
<main class="wrapper">
    <!--make menu-->
    @include('front_end.partials.menu')
    <!--end make menu-->

    <!-- make parallax-->
    @include('front_end.partials.parallax')
    <!-- end make parallax-->

    <!--  make news-->
    @include('front_end.partials.news')
    <!--  end make news-->

    <!--  make form-->
    @include('front_end.partials.contact')
    <!--  end make form-->

    <!--  make product-->
    @include('front_end.partials.product')
    <!--  end make product-->

    <!--make footer-->
    @include('front_end.partials.footer')
    <!--end make footer-->

@endsection

