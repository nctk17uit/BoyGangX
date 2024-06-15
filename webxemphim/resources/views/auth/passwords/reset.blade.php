<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Kodinger">
	<meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('profilepage/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('registerpage/css/registerpage.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome-free-6.5.2/css/all.min.css') }}">
    <title>User Profile</title>
</head>
<body>
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
                            <h4 align="center">{{ __('Đổi mật khẩu') }}</h4>
                        </div>
                        <div class="card-body">
                        <form method="POST" class="my-login-validation" novalidate="" action="{{ route('password.update') }}">
                                @csrf
                                <input type="hidden" name="token" value="{{ $token }}">
									<input id="email" type="email" class="login-form-input" name="email" placeholder="Email address" value="{{ $email ?? old('email') }}">
                                    <span class="text-danger">@error('email'){{$message}} @enderror</span>
									<input id="password" type="password" class="login-form-input" name="password" placeholder="Enter new password">
                                    <span class="text-danger">@error('password'){{$message}}@enderror</span>
									<input id="password-confirm" type="password" class="login-form-input" name="password_confirmation" placeholder="Enter confirm password">
                                    <span class="text-danger">@error('password_confirmation'){{$message}} @enderror</span>
                                    <button type="submit" class="login-form-button">
										Cập Nhật Mật Khẩu
									</button>
                                <!--  -->
                               <!--  -->
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
</body>
</html>