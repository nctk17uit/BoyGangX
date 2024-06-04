<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('header/header.css') }}">

    <!-- Scripts -->
    
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Web Phim BoyGangX</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="{{asset('trangxemphim2/trangxemphim1.css')}}" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0">
  <script src="https://kit.fontawesome.com/35307607a8.js" crossorigin="anonymous"></script>
</head>

<body>
        <main>
            @include('layoutsuser.header')
            @yield('content')
        </main>
    </div> 


    <!----FOOTER--> 
    <nav class="footer" style="font-weight: bold;">
    <div class="login-footer">
      <b class="desc">
        BoyGangX
      </b>
      <div class="grid">
        <div class="columm">
          <ul class="footer-list">
            <a class="ques">Bạn có câu hỏi? Liên hệ với chúng tôi.</a>
            <a href="https://www.facebook.com/groups/412924241643512"><i class="fb fa-brands fa-square-facebook"></i></a>
            <a href="https://discord.gg/8hDJdRpR"><i class="discord fa-brands fa-discord"></i></a>
            <a href="#"><i class="email fa-solid fa-envelope"></i></a>
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
  </nav>
    <script type="text/javascript" src=https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.6.8/axios.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
