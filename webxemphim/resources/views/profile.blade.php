@extends('layoutsuser.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('profilepage/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('profilepage/profilepage.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome-free-6.5.2/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('homepage/homepage.css') }}">
    <title>User Profile</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('User Profile') }}</div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="profile-info">
                            <div><strong>{{ __('Username:') }}</strong> {{ $user->name }}</div>
                            <div><strong>{{ __('Email:') }}</strong> {{ $user->email }}</div>
                            <div>
                                <a href="{{ route('logout') }}" 
                                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </div>
                        <button onclick="document.getElementById('qr-modal').style.display='block'">Donate</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="qr-modal" class="qr-modal">
        <div class="qr-modal-content">
            <span class="close" onclick="document.getElementById('qr-modal').style.display='none'">&times;</span>
            <img src="{{ asset('profilepage/qr_code.jpg') }}" alt="QR Code">
        </div>
    </div>
</body>
</html>

@endsection