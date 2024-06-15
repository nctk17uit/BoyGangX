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
    <div class="container" style="margin-bottom:100px;">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('User Profile') }}</div>
                    <div class="card-body">
                        <div class="profile-info">
                            <div><strong>{{ __('Username:') }}</strong> {{ $user->name }}</div>
                            <div><strong>{{ __('Email:') }}</strong> {{ $user->email }}</div>
                            <div><strong>{{ __('Số dư:') }}</strong> {{ $user->money }} <button id="kickhoatdonate" > <b>Donate</b></button></div>
                        </div>
                        <div id="donate" >
                            <label for="amount" style="font-size: 21px;"> Chọn số tiền muốn nạp:</label>
                            <select name="amount" id="amount">
                                <option style="font-size: 20px; "value="5000">5,000 đồng</option>
                                <option style="font-size: 20px; "value="10000">10,000 đồng</option>
                                <option style="font-size: 20px; "value="15000">15,000 đồng</option>
                                <option style="font-size: 20px; "value="20000">20,000 đồng</option>
                            </select>
                            <button id="naptien" >Thanh Toán</button>
                        </div>
                        <div class="change-password">
                            <h3>{{ __('Change Password') }}</h3>
                            <form method="POST" action="{{ route('password.updateprofile') }}">
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
                <div class="logout-link" style="float:right;">
                    <button style="background-color:rgb(243, 105, 105);" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </button>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div id="qr-modal" class="qr-modal">
        <div class="qr-modal-content">
            <p id="timer" class="timer">Thời gian còn lại: <span id="time-remaining" style="color:rgba(26, 255, 0, 0.8);" ></span></p> <!-- Đồng hồ đếm ngược -->
            <span class="close" onclick="document.getElementById('qr-modal').style.display='none'">&times;</span>
            <img id="qrcode" src="{{ asset('profilepage/qr_code.jpg') }}" alt="QR Code">
            <p>Nội dung chuyển khoản: <span style="color:#f5786c;" id="selected-content"></span></p>
            <p>Số tiền: <span id="selected-amount" style="color:rgba(26, 255, 0, 0.8);"></span></p>
            <div id="success-tick" class="success-tick">
                <div class="circle">
                    <div class="tick"></div>
                </div>
                <p class="success-message">Bạn đã thanh toán thành công</p>
            </div>
        </div>
    </div>
    <!--  -->
    <script>
        let isSuccess = false;
        let intervalId;
        let countdownInterval; 
        function generateRandomString(length) {
            const characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
            let result = '';
            const charactersLength = characters.length;
            for (let i = 0; i < length; i++) {
                result += characters.charAt(Math.floor(Math.random() * charactersLength));
            }
            return result;
        }
        document.getElementById('kickhoatdonate').addEventListener('click', function() {
            var donateSection = document.getElementById('donate');
            if (donateSection.style.display === 'none' || donateSection.style.display === '') {
                donateSection.style.display = 'block';
            } else {
                donateSection.style.display = 'none';
            }
        });
        document.getElementById('naptien').addEventListener('click', function() {
            var selectedValue = $("#amount").val(); 
            var selectedContent = document.getElementById('selected-content'); 
            const BANK_ID = "970422";
            const ACCOUNT_NO = "0886739858";
            const CONTEND_ID = "{{ $user->id }}"+ generateRandomString(15);
            const QRcode = `https://img.vietqr.io/image/${BANK_ID}-${ACCOUNT_NO}-qr_only.png?amount=${selectedValue}&addInfo=${CONTEND_ID}`;
            var imgcode = document.getElementById('qrcode');
            imgcode.src=QRcode;
            document.getElementById('selected-amount').innerText = selectedValue + ' đồng';
            document.getElementById('qr-modal').style.display='block';
            selectedContent.innerHTML = CONTEND_ID; 

            startCountdown(300); 
            isSuccess = false;
            clearInterval(intervalId);
            setTimeout(() => {
                            intervalId = setInterval(() => {
                                checkPaid(selectedValue, CONTEND_ID, intervalId);
                            }, 3000);
            }, 20000);
        });
        function startCountdown(duration) {
            var timerDisplay = document.getElementById('time-remaining');
            var remainingTime = duration;
            clearInterval(countdownInterval); // Xóa bất kỳ khoảng thời gian nào đang chạy trước đó

            countdownInterval = setInterval(() => {
                remainingTime--;
                timerDisplay.textContent = remainingTime + " giây";
                
                if (remainingTime <= 0) {
                    disableQRCode();
                    clearInterval(countdownInterval);
                    clearInterval(intervalId); // Ngừng kiểm tra thanh toán
                }
            }, 1000);
        }
        function disableQRCode() {
            var imgcode = document.getElementById('qrcode');
            imgcode.src = ''; // Xóa mã QR
            document.getElementById('qrcode').style.display='none';
            document.getElementById('selected-content').textContent = 'Hết hạn';
            document.getElementById('selected-amount').textContent = '0';
        }
        async function checkPaid(price, content,  intervalId) {
            if (isSuccess) {
                clearInterval(intervalId);
                return;
            } else {
                try {
                    const response = await fetch("https://script.google.com/macros/s/AKfycbyPxsy_k4VJKo-m50rvNWGs6UFql92fNNeXQoJsf7O-aEUaUmo65x6rhEnAT10bUYXV3Q/exec");
                    const data = await response.json();
                    const lastPaid = data.data[data.data.length - 1];
                    const lastPrice = lastPaid["Giá trị"];
                    const lastContent = lastPaid["Mô tả"];
                    if (lastPrice >= price && lastContent.includes(content)) {
                        isSuccess = true;
                        clearInterval(intervalId);
                        clearInterval(countdownInterval); // Clear countdown interval=
                        document.getElementById('naptien').disabled = false;
                        await topUpBalance();
                        showSuccessTick();
                    } else {
                        console.log("Không thành công");
                    }
                } catch (error) {
                    console.error("Lỗi", error);
                }
            }
        }
        function topUpBalance() {
            var selectedValue = $("#amount").val();

            $.ajax({
                url: "{{ route('topup') }}",
                type: "POST",
                data: {
                    _token: "{{ csrf_token() }}",
                    amount: selectedValue
                },
            });
        }
        function showSuccessTick() {
            document.getElementById('success-tick').style.display='block';
            document.getElementById('qrcode').style.display='none';
            document.getElementById('selected-content').style.display='none';
            document.getElementById('selected-amount').style.display='none';
            setTimeout(() => {
                window.location.reload();
            }, 2000);
        }
    </script>
<!--  -->
</body>
</html>

@endsection
