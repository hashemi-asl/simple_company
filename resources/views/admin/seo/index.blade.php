@extends('admin.layouts.master')
@section('title', 'SEO information page')
@section('content')
    <div class="data">
        <div class="col-8 offset-2 mt-2">
            @if (session('create'))
                <section class="alert alert-success" role="alert">
                    <h4 class="text-success text-center">{{session('create    ')}}</h4>
                </section>
            @endif
            @if (session('delete'))
                <div class="alert alert-danger" role="alert">
                    <h4 class="text-danger text-center">{{session('delete')}}</h4>
                </div>
            @endif
        </div>
        <div class="row m-0">
            <div class="col-8 offset-2 mt-4">
                <table class="table table-hover table-dark">
                    <thead>
                    <tr>
                        <th>Title</th>
                        <th>Keywords</th>
                        <th>Description</th>
                        <th>Author</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    @forelse ($seo as $item)
                        <tbody>
                        <tr>
                            <td>{{$item->title}}</td>
                            <td>{{$item->keywords}}</td>
                            <td>{{$item->description}}</td>
                            <td>{{$item->author}}</td>
                            <td>
                                {!! Form::open(['route'=>['seo.destroy','id'=>$item->id],'method'=>'delete']) !!}
                                    {!! Form::submit('delete',['class'=>'btn btn-outline-danger']) !!}
                                {!! Form::close() !!}
                            </td>
                        </tr>
                        </tbody>
                    @empty
                        <tbody>
                        <tr>
                            <td colspan="5" class="text-center"> <h4>there is no data</h4></td>
                        </tr>
                        </tbody>
                    @endforelse
                </table>
                <a href="{{route('seo.create')}} " class="btn btn-outline-success font-weight-bolder btn-block mt-4"> create SEO </a>
            </div>
        </div>
    </div>
@endsection
