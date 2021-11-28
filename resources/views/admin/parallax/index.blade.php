@extends('admin.layouts.master')
@section('title','index-parallax')
@section('content')
    <div class="data">
        <div class="col-10 offset-1 mt-2">
            @if (session('create'))
                <section class="alert alert-success" role="alert">
                    <h4 class="text-success text-center">{{session('create')}}</h4>
                </section>
            @endif
            @if (session('delete'))
                <div class="alert alert-danger" role="alert">
                    <h4 class="text-danger text-center">{{session('delete')}}</h4>
                </div>
            @endif
            @if (session('update'))
                <div class="alert alert-success" role="alert">
                    <h4 class="text-success text-center">{{session('update')}}</h4>
                </div>
            @endif
        </div>
        <div class="row m-0">
            <div class="col-10 offset-1 mt-4">
                <table class="table table-hover table-dark">
                    <thead>
                    <tr>
                        <th>Title</th>
                        <th>Title Size</th>
                        <th>Title Color</th>
                        <th>Body</th>
                        <th>Body Size</th>
                        <th>Body Color</th>
                        <th>Image</th>
                        <th>Update</th>
                        <th>Delete</th>

                    </tr>
                    </thead>
                    @forelse ($parallax as $item)
                        <tbody>
                        <tr>
                            <td>{{\Illuminate\Support\Str::limit($item->title,20)}}</td>
                            <td>{{$item->title_size}}</td>
                            <td>{{$item->title_color}}</td>
                            <td>{{\Illuminate\Support\Str::limit($item->body,50)}}</td>
                            <td>{{$item->body_size}}</td>
                            <td>{{$item->body_color}}</td>
                            <td><img src="{{asset('images/parallax/'.$item->image)}}" alt="" width="65px" height="65px"
                                     class="img-fluid"></td>
                            <td>
                                {!! Form::open(['route'=>['parallax.edit','id'=>$item->id],'method'=>'get']) !!}
                                {!! Form::submit('update',['class'=>'btn btn-outline-warning']) !!}
                                {!! Form::close() !!}
                            </td>
                            <td>
                                {!! Form::open(['route'=>['parallax.destroy','id'=>$item->id],'method'=>'delete']) !!}
                                {!! Form::submit('delete',['class'=>'btn btn-outline-danger']) !!}
                                {!! Form::close() !!}
                            </td>
                        </tr>
                        </tbody>
                    @empty
                        <tbody>
                        <tr>
                            <td colspan="9" class="text-center"><h4>there is no data</h4></td>
                        </tr>
                        </tbody>
                    @endforelse
                </table>
                <a href="{{route('parallax.create')}}"
                   class="btn btn-outline-success font-weight-bolder btn-block mt-4">
                    create new parallax </a>
            </div>
        </div>
    </div>
@endsection
