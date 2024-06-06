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
    <title>User Profile</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('User Profile') }}</div>
                    <div class="card-body">
                        <div class="profile-info">
                            <div><strong>{{ __('Username:') }}</strong> {{ $user->name }}</div>
                            <div><strong>{{ __('Email:') }}</strong> {{ $user->email }}</div>
                        </div>
                        <div class="change-password">
                            <h3>{{ __('Change Password') }}</h3>
                            <form method="POST" action="{{ route('password.update') }}">
                                @csrf
                                @method('PUT')

                                <div class="form-group">
                                    <label for="current_password">{{ __('Current Password') }}</label>
                                    <input id="current_password" type="password" class="form-control @error('current_password') is-invalid @enderror" name="current_password" required autocomplete="current-password">
                                    @error('current_password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="new_password">{{ __('New Password') }}</label>
                                    <input id="new_password" type="password" class="form-control @error('new_password') is-invalid @enderror" name="new_password" required autocomplete="new-password">
                                    @error('new_password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="new_password_confirmation">{{ __('Confirm New Password') }}</label>
                                    <input id="new_password_confirmation" type="password" class="form-control" name="new_password_confirmation" required autocomplete="new-password">
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Update Password') }}
                                    </button>
                                </div>

                                @if (session('status'))
                                    <div class="alert alert-success" role="alert" style="color: white;">
                                        {{ session('status') }}
                                    </div>
                                @endif
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="container">
        <button onclick="document.getElementById('qr-modal').style.display='block'">Donate</button>
        <div class="logout-link">
        <button onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </button>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
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
