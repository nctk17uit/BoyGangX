@extends('layoutsadmin.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-13" >
            <div class="card">
                <div class="card-header">Thêm phim</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if(!isset($movie))
                    {!! Form::open(['route'=> 'movie.store','method'=>'POST','enctype'=>'multipart/form-data'])!!}
                    @else
                    {!! Form::open(['route'=> ['movie.update',$movie->id],'method'=>'PUT','enctype'=>'multipart/form-data'])!!}
                    @endif
                        <div class="form-group">
                            {!! Form::label('title', 'Title', []) !!}
                            {!! Form::text('title', isset($movie) ? $movie->title: '', ['class'=>'form-control','placeholder'=>'Nhập vào dữ liệu', 'id'=>'slug','onkeyup'=>'ChangeToSlug()']) !!}
                            </div>
                        <div class="form-group">
                            {!! Form::label('slug', 'Đường dẫn', []) !!}
                            {!! Form::text('slug', isset($movie) ? $movie->slug : '', ['class'=>'form-control','placeholder'=>'...','id'=>'convert_slug']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('linkserver1', 'Đường dẫn server 1 phim', []) !!}
                            {!! Form::text('linkserver1', isset($movie) ? $movie->linkserver1 : '', ['class'=>'form-control','placeholder'=>'...','id'=>'convert_linkserver1']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('linkserver2', 'Đường dẫn server 2 phim', []) !!}
                            {!! Form::text('linkserver2', isset($movie) ? $movie->linkserver2 : '', ['class'=>'form-control','placeholder'=>'...','id'=>'convert_linkserver2']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('description', 'Description', []) !!}
                            {!! Form::textarea('description', isset($movie) ? $movie->description : '', ['style'=>'resize:none','class'=>'form-control','placeholder'=>'Nhập vào dữ liệu', 'id'=>'description']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('active', 'Active', []) !!}
                            {!! Form::select('status', ['1'=>'Hiển thị','0'=>'Không'], isset($movie) ? $movie->status: '0', ['class'=>'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('Category', 'Danh mục', []) !!}
                            {!! Form::select('category_id',  $category, isset($movie) ? $movie->category : '', ['class'=>'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('Country', 'Quốc gia', []) !!}
                            {!! Form::select('country_id', $country, isset($movie) ? $movie->country_id : '', ['class'=>'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('Genre', 'Thể loại', []) !!}
                            {!! Form::select('genre_id', $genre, isset($movie) ? $movie->genre_id : '', ['class'=>'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('Image', 'Image', []) !!}
                            {!! Form::file('image', ['class' => 'form-control-file']) !!}
                            @if(isset($movie) ) 
                                <img width="30%" height="20%" src="{{ asset('uploads/movie/' . $movie->image) }}" >
                            @endif
                        </div>
                        @if(!isset($movie))
                        {!! Form::submit('Thêm dữ liệu', ['class'=>'btn btn-success']) !!}
                        @else
                        {!! Form::submit('Cập nhật', ['class'=>'btn btn-success']) !!}
                        @endif
                        
                        {!! Form::close()!!}
                    
                </div>
            </div>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col" >Đường dẫn</th>
                    <th scope="col" >Đường dẫn server</th>
                    <th scope="col">Image</th>
                    <th scope="col">Description</th>
                    <th scope="col">Trạng thái</th>
                    <th scope="col">Danh mục</th>
                    <th scope="col">Thể loại</th>
                    <th scope="col">Quốc gia</th>
                    <th scope="col">Manange</th>
                    
                  </tr>
                </thead>
                <tbody>
                    @foreach ($list as $key => $cate)
                        
                    
                  <tr>
                    <th scope="row">{{$key}}</th>
                    <td>{{$cate->title}}</td>
                    <td>{{$cate->slug}}</td>
                    <td>{{$cate->linkserver}}</td>
                    <td><img width ="80%" height = "50%"src ="{{asset('uploads/movie/'.$cate->image)}}"></td>
                    <td>{{$cate->description}}</td>
                    <td>
                        @if ($cate->status)

                        Hiển thị

                        @else
                        Không hiển thị
                        @endif
                        <td>
                            {{ $cate->category->title ?? 'None'}}
                        </td>
                        <td>{{$cate->genre->title  ?? 'None' }}</td>
                        <td>{{$cate->country->title ?? 'None'}}</td>
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
