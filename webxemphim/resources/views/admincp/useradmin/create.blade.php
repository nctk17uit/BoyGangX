@extends('layoutsadmin.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Thêm User</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if(!isset($useradmin))
                    {!! Form::open(['route'=> 'useradmin.store','method'=>'POST'])!!}
                    @else
                    {!! Form::open(['route'=> ['useradmin.update',$useradmin->id],'method'=>'PUT'])!!}
                    @endif
                        <div class="form-group">
                        {!! Form::label('name', 'Tên User', []) !!}
                        {!! Form::text('name', isset($useradmin) ? $useradmin->name:'' , ['class'=>'form-control','placeholder'=>'Nhập vào dữ liệu', 'id'=>'title']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('email', 'Email', []) !!}
                            {!! Form::text('email', isset($useradmin) ? $useradmin->email:'', ['class'=>'form-control','placeholder'=>'Nhập vào dữ liệu', 'id'=>'title']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('password', 'Password', []) !!}
                            {!! Form::text('password', isset($useradmin) ? $useradmin->password:'', ['class'=>'form-control','placeholder'=>'Nhập vào dữ liệu', 'id'=>'title']) !!}
                        </div>
                        
                        {!! Form::submit('Thêm User', ['class'=>'btn btn-success']) !!}
                    {!! Form::close()!!}
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection