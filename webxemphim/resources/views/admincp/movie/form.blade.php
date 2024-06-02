
@extends('layouts.appadmin')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Thêm phim</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {!! Form::open(['route'=> 'movie.store','method'=>'POST','enctype'=>'multipart/form-data'])!!}
                        <div class="form-group">
                        {!! Form::label('title', 'Title', []) !!}
                        {!! Form::text('title', isset($movie) ? $movie->title: '', ['class'=>'form-control','placeholder'=>'Nhập vào dữ liệu', 'id'=>'slug']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('description', 'Description', []) !!}
                            {!! Form::textarea('description', isset($movie) ? $movie->description : '', ['style'=>'resize:none','class'=>'form-control','placeholder'=>'Nhập vào dữ liệu', 'id'=>'description']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('active', 'Active', []) !!}
                            {!! Form::select('status', ['1'=>'Hiển thị','0'=>'Không'], isset($movie) ? $movie->status : '', ['class'=>'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('Category', 'Category', []) !!}
                            {!! Form::select('category_id',  $category, isset($movie) ? $movie->category : '', ['class'=>'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('Image', 'Image', []) !!}
                            {!! Form::file('image', ['class' => 'form-control-file']) !!}
                            @if(isset($movie) ) 
                                <img width="30%" height="20%" src="{{ asset('uploads/movie/' . $movie->image) }}" >
                            @endif
                        </div>
                 
                        {!! Form::submit('Thêm dữ liệu', ['class'=>'btn btn-success']) !!}
                        {!! Form::close()!!}
                    
                </div>
            </div>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Image</th>
                    <th scope="col">Description</th>
                    <th scope="col">Active/Inactive</th>
                    <th scope="col">Category</th>
                    <th scope="col">Manange</th>
                    
                  </tr>
                </thead>
                <tbody>
                    @foreach ($list as $key => $cate)
                        
                    
                  <tr>
                    <th scope="row">{{$key}}</th>
                    <td>{{$cate->title}}</td>
                    <td><img width ="30%" height = "20%"src ="{{asset('uploads/movie/'.$cate->image)}}"></td>
                    <td>{{$cate->description}}</td>
                    <td>
                        @if ($cate->status)

                        Hiển thị

                        @else
                        Không hiển thị
                        @endif
                        <td>
                            {{ $cate->category->title }}
                        </td>
                        
                        <td>
                            {!! Form::open(['method' => 'DELETE', 'route' => ['movie.destroy', $cate->id], 'onsubmit' => 'return confirm("Xóa?")']) !!}
                                {!! Form::submit('Xóa', ['class' => 'btn btn-danger']) !!}
                            {!! Form::close() !!}
                            <a href="{{route('movie.edit', $cate->id)}}" class="btn btn-warning"> Sửa </a>
                        </td>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
        </div>
    </div>
</div>
@endsection
