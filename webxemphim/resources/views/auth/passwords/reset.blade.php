<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('forgotpwpage/css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('forgotpwpage/css/forgotpwpage.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome-free-6.5.2/css/all.min.css') }}">
    <title>Reset Password</title>
</head>
<body>
<form method="POST" action="{{ route('password.update') }}">
    @csrf
    <input type="hidden" name="token" value="{{ $token }}">
    <div class="login-container">
        <div class="login-header">
            <a href="/">BoyGangX</a>
        </div>
        <div class="login-body">
            <div class="login-form-container">
                <div class="login-form-header">
                    <h4 align="center">Đặt lại mật khẩu</h4>
                </div>
                <div class="login-form">
                    <div class="icon1">
                        <i class="fa-solid fa-envelope"></i>
                    </div>
                    <input type="email" id="email" class="login-form-input @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus placeholder="Email">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <div class="icon2">
                        <i class="fa-solid fa-key"></i>
                    </div>
                    <input type="password" id="password" class="login-form-input @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Mật khẩu mới">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <div class="icon2">
                        <i class="fa-solid fa-key"></i>
                    </div>
                    <input type="password" id="password-confirm" class="login-form-input" name="password_confirmation" required autocomplete="new-password" placeholder="Xác nhận mật khẩu mới">
                    <input type="submit" value="Đặt lại mật khẩu" class="login-form-button">
                </div>
                <div class="login-form-other">
                    <div class="login-form-backtologin" align="center">
                        Nhớ mật khẩu?
                        <a class="login-form-backtologin-link" href="{{ route('login') }}">{{ __('Đăng nhập ngay') }}</a>  
                    </div>
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
</form>
</body>
</html>
