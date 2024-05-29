<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Navbar Example</title>
  <!-- Link Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- Link Custom CSS -->
  <link rel="stylesheet" href="./css/style.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">BoyGangX</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="#">Phim Mới</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Phim Lẻ</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Phim Bộ</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownTheloai" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Thể Loại
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownTheloai">
          <a class="dropdown-item" href="#">Hành Động</a>
          <a class="dropdown-item" href="#">Kinh Dị</a>
          <a class="dropdown-item" href="#">Tình Cảm</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Khác</a>
          <!-- Thêm phần tử mới -->
          <a class="dropdown-item" href="#">Phim Viễn Tưởng</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownQuocGia" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Quốc Gia
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownQuocGia">
          <a class="dropdown-item" href="#">Việt Nam</a>
          <a class="dropdown-item" href="#">Hoa Kỳ</a>
          <a class="dropdown-item" href="#">Hàn Quốc</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Khác</a>
          <!-- Thêm phần tử mới -->
          <a class="dropdown-item" href="#">Nhật Bản</a>
        </div>
      </li>
    </ul>
  </div>
</nav>

<!-- Link Bootstrap JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>