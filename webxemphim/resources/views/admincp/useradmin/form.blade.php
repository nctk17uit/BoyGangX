@extends('layoutsadmin.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Liệt kê User') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table class="table table-striped table-responsive">
                        <thread>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Tên User</th>
                                <th scope="col">Email</th>
                                <th scope="col">Password</th>
                                <th scope="col">Vai trò</th>
                                <th scope="col">Quyền</th>
                            </tr>
                        </thread>
                        <tbody>
                            @foreach($user as $key => $u)
                            <tr>
                                <th scope="row">{{$key}}</th>
                                <th scope="row">{{$u->name}}</th>
                                <th scope="row">{{$u->email}}</th>
                                <th scope="row">{{$u->password}}</th>
                                <th scope="row">{{$u->role}}</th>
                                <th scope="row">{{$u->$key}}</th>
                                <th scope="row">
                                    <a href="" class="btn btn-success">Phân quyền</a>
                                    <a href="" class="btn btn-primary">Chuyển quyền</a>
                                </th>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection