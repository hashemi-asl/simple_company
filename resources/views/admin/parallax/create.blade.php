@extends('admin.layouts.master')
@section('title','create parallax')
@section('content')
    <div class="data">
        <div class="row m-0">
            <div class="col-8 offset-2 mt-4 jumbotron">
                @if (session())

                @endif
                {!! Form::open(['route'=>'parallax.store'] , ['method'=>'post']) !!}
                <div class="form-group">
                    {!! Form::label('title', 'title :', ['class'=>'text-capitalize']) !!}
                    {!! Form::text('title' , old('title') ,['class'=>'form-control' , 'placeholder'=>'please enter the title of the Parallax'])  !!}
                    @error('title')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group">
                    {!! Form::label('title_size', 'title size :', ['class'=>'text-capitalize']) !!}
                    {!! Form::selectRange('title_size', 10, 30 , old('title_size') ,['class'=>'form-control']) !!}
                    @error('title_size')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group">
                    {!! Form::label('title_color', 'title color :', ['class'=>'text-capitalize']) !!}
                    {!! Form::color('title_color', old('title-color') ,['class'=>'form-control']) !!}
                    @error('title')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group">
                    {!! Form::label('body', 'body :', ['class'=>'text-capitalize']) !!}
                    {!! Form::textarea('body' , old('body') ,['class'=>'form-control' , 'placeholder'=>'please enter the description for body','style'=>'resize:none; height:130px'])  !!}
                    @error('body')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group">
                    {!! Form::label('body_size', 'body size :', ['class'=>'text-capitalize']) !!}
                    {!! Form::selectRange('body_size', 10, 30 , old('body_size') ,['class'=>'form-control']) !!}
                    @error('body_size')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group">
                    {!! Form::label('body_color', 'body color :', ['class'=>'text-capitalize']) !!}
                    {!! Form::color('body_color', old('body-color') ,['class'=>'form-control']) !!}
                    @error('body_color')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group">
                    {!! Form::label('image', 'image :', ['class'=>'text-capitalize']) !!}
                    {!! Form::file('image', old('image') ,['class'=>'form-control']) !!}
                    @error('body')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group">
                    {!! Form::submit('submit','submit' ,['class'=>'btn btn-success btn-block mt-4']) !!}
                </div>
                {!! Form::close() !!}
                <div class="form-group">
                    <a href="{{route('parallax.index')}}" class="btn btn-info btn-block">show details</a>
                </div>
            </div>
        </div>
    </div>
@endsection
