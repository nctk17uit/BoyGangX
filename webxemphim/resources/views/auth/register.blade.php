<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('registerpage/css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('registerpage/css/registerpage.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome-free-6.5.2/css/all.min.css') }}">
</head>
<body>
<form method="POST" action="{{ route('register') }}"> 
    @csrf
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="login-container">
                <div class="login-header">
                    <a href="/">BoyGangX</a>
                </div>
                <div class="login-body">
                    <div class="login-form-container">
                        <div class="login-form-header">
                            <h4 align="center">{{ __('Đăng kí') }}</h4>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="login-form">
                                    <div class="icon1">
                                        <i class="fa-solid fa-user"></i>
                                    </div>
                                    <input id="name" type="text" class="login-form-input @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Tên đầy đủ">
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                    <div class="icon2">
                                        <i class="fa-solid fa-envelope"></i>
                                    </div>
                                    <input id="email" type="email" class="login-form-input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                    <div class="icon3">
                                        <i class="fa-solid fa-key"></i>
                                    </div>
                                    <input id="password" type="password" class="login-form-input @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Mật khẩu">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                    <div class="icon4">
                                        <i class="fa-solid fa-key"></i>
                                    </div>
                                    <input id="password-confirm" type="password" class="login-form-input" name="password_confirmation" required autocomplete="new-password" placeholder="Xác nhận mật khẩu">

                                    <input type="submit" value="Đăng kí" class="login-form-button">
                                </div>
                                <div class="login-form-other">
                                    <div class="login-form-signupnow" align="center">
                                        Đã có tài khoản?
                                        <a class="login-form-signupnow-link" href="{{ route('login') }}">{{ __('Đăng nhập') }}</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="login-footer">
                    <div class="grid">
                        <div class="columm">
                            <ul class="footer-list">
                                <a href="/">Bạn có câu hỏi? Liên hệ với chúng tôi.</a>
                                <li class="footer-item">
                                    <a href="/">Câu hỏi thường gặp</a>
                                    <a href="/">Trung tâm trợ giúp</a>
                                    <a href="/">Điều khoản sử dụng</a>
                                </li>
                            </ul>
                        </div>
                        <div class="columm"></div>  
                        <ul class="footer-list">      
                            <li class="footer-item">
                                <a href="/">Tùy chọn cookie</a>
                                <a href="/">Thông tin doanh nghiệp</a>
                                <a href="/">Quyền riêng tư</a>   
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</form>
</body>
</html>
