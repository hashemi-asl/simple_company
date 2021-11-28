@extends('admin.layouts.master')
@section('title','edit parallax')
@section('content')
    <div class="container mt-4">
        @if(session('create'))
            <div class="alert alert-success">
                {{ session('create') }}
            </div>
        @endif
        <div class="card">
            <div class="card-header text-center font-weight-bold">
                Update Parallax
            </div>
            <div class="card-body">
                {!! Form::model($parallax,['route'=>['parallax.update', 'id'=>$parallax->id] , 'method'=>'put' ,'files'=>true]) !!}
                <div class="form-group">
                    {!! Form::label('title', 'title :', ['class'=>'text-capitalize']) !!}
                    {!! Form::text('title' , old('title') ,['class'=>'form-control' , 'placeholder'=>'please enter the title of the Parallax'])  !!}
                    @error('title')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group">
                    {!! Form::label('title_size', 'title size :', ['class'=>'text-capitalize']) !!}
                    {!! Form::selectRange('title_size', 16, 26 , $parallax->title_size ,['class'=>'form-control']) !!}
                    @error('title_size')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group">

                    {!! Form::label('title_color', 'title color :', ['class'=>'text-capitalize']) !!}
                    {!! Form::color('title_color', $parallax->title_color ,['id'=>'color-picker-1','class'=>'form-control']) !!}
                    @error('title')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <div
                        class="card-body text-center d-flex justify-content-center align-items-center flex-column"></div>
                    {!! Form::label('body', 'body :', ['class'=>'text-capitalize']) !!}
                    {!! Form::textarea('body' , $parallax->body ,['class'=>'form-control' , 'placeholder'=>'please enter the description for body','style'=>'resize:none; height:100px'])  !!}
                    @error('body')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group">
                    {!! Form::label('body_size', 'body size :', ['class'=>'text-capitalize']) !!}
                    {!! Form::selectRange('body_size', 16, 26 , $parallax->body_size ,['class'=>'form-control']) !!}
                    @error('body_size')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group">
                    {!! Form::label('body_color', 'body color :', ['class'=>'text-capitalize']) !!}
                    {!! Form::color('body_color', $parallax->body_color ,['class'=>'form-control']) !!}
                    @error('body_color')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group">
                    {!! Form::label('image', 'image :', ['class'=>'text-capitalize']) !!}
                    {!! Form::file('image', old('image') ,['class'=>'form-control']) !!}
                    <img src="{{asset('images/parallax/'.$parallax->image)}}" alt="" class="figure-img" " width="100px" height="100px">
                    @error('body')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group">
                    {!! Form::submit('update' ,['class'=>'btn btn-warning btn-block mt-4']) !!}
                </div>
                {!! Form::close() !!}
{{--                <div class="form-group">--}}
{{--                    <a href="{{route('parallax.index')}}" class="btn btn-info btn-block">show details</a>--}}
{{--                </div>--}}
            </div>
        </div>

    </div>

@endsection
