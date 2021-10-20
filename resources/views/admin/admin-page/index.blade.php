@extends('admin.layouts.master')
@section('title','welcome to admin page')


@section('content')
    <div class="show">
        <div class="row m-0">
            <div class="col-8 offset-2 bg-dark text-white jumbotron mt-5">
                <h1>hello world</h1>
                <p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex facilis, pariatur! A aliquam culpa dignissimos, dolor, doloremque fugit iusto molestiae, natus nobis odio odit quae repellat tempora temporibus unde vero.</span><span>Beatae cupiditate ipsa nulla sed voluptate. Magnam necessitatibus possimus sapiente tenetur voluptatibus? Autem, consectetur cupiditate ea eligendi harum id in neque non omnis praesentium reiciendis repellat sit tempore unde voluptatem?</span><span>Adipisci atque excepturi ipsam ipsum laboriosam maiores minus necessitatibus, nihil non numquam possimus quia quisquam recusandae repudiandae veniam vero vitae! Accusantium atque dignissimos illo qui, recusandae sapiente tempore temporibus. Ut.</span></p>

{{--                <a href="{{route('seo.index')}}" class="btn btn-outline-info mt-5  btn-block font-weight-bolder">Go To SEO</a>--}}
                <a href="{{route('seo.index')}}" class="btn btn-outline-info mt-5  btn-block font-weight-bolder">Go To SEO</a>

            </div>
        </div>
    </div>
@endsection
