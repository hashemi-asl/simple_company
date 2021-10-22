@extends('admin.layouts.master')
@section('content')
    <div class="data">
        <div class="row m-0">
            <div class="col-8 offset-2 mt-4 jumbotron">
                @if (session())

                @endif
                {!! Form::open(['route'=>'seo.store' , 'method'=>'post']) !!}
                    <div class="form-group">
                        {!! Form::label('title', 'title :', ['class'=>'text-capitalize']) !!}
                        {!! Form::text('title' , old('title') ,['class'=>'form-control' , 'placeholder'=>'please enter the title of the SEO'])  !!}
                        @error('title')
                            <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        {!! Form::label('keywords', 'keywords :', ['class'=>'text-capitalize']) !!}
                        {!! Form::text('keywords' , old('keywords') ,['class'=>'form-control' , 'placeholder'=>'please enter the keywords of the SEO'])  !!}
                        @error('keywords')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        {!! Form::label('description', 'description :', ['class'=>'text-capitalize']) !!}
                        {!! Form::textarea('description' , old('description') ,['class'=>'form-control' , 'placeholder'=>'please enter the description of the SEO' ,'style'=>'resize:none; height:130px'])  !!}
                        @error('description')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        {!! Form::label('author', 'author :', ['class'=>'text-capitalize']) !!}
                        {!! Form::text('author' , old('author') ,['class'=>'form-control' , 'placeholder'=>'please enter the author name'])  !!}
                        @error('author')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        {!! Form::submit('submit' ,['class'=>'btn btn-success btn-block mt-4']) !!}
                    </div>
                {!! Form::close() !!}
                <div class="form-group">
                    <a href="{{route('seo.index')}}" class="btn btn-info btn-block">show details</a>
                </div>
            </div>
        </div>
    </div>
@endsection
