<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('loginpage/css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('loginpage/css/loginpage.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome-free-6.5.2/css/all.min.css') }}">


</head>
<body>
<form method="POST" action="{{ route('login') }}"> 
    @csrf
    <div class="login-container">
        <div class="login-header">
            <a href="/">BoyGangX</a>
        </div>
        <div class="login-body">
            <div class="login-form-container">
                <div class="login-form-header">
                    <h4 align="center">Đăng nhập</h4>
                </div>
                <div class="login-form">
                    <div class="icon1">
                        <i class="fa-solid fa-user"></i>
                    </div>
                    <input type="email" class="login-form-input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email hoặc số điện thoại">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <div class="icon2">
                        <i class="fa-solid fa-key"></i>
                    </div>
                    <input type="password" class="login-form-input @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Mật khẩu">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <input type="submit" value="Đăng nhập" class="login-form-button">
                    <div class="login-form-help">
                        <div class="login-form-rememberMe">
                            <input type="checkbox" class="remberMe-cbx" id="checkbox_id" name="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="remember-lbl" for="checkbox_id">Ghi nhớ đăng nhập</label>
                        </div>
                        <a class="fg-pw" href="{{ route('password.request') }}">Quên mật khẩu?</a>
                    </div>
                </div>
                <div class="login-form-other">
                    <div class="login-form-signupnow" align="center">
                        Chưa có tài khoản?
                        <a class="login-form-signupnow-link" href="{{ route('register') }}">{{ __('Đăng kí ngay') }}</a>  
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
