<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-dark">
  <strong class="navbar-brand text-success" href="<?php echo e(route('home')); ?>">BoyGangX</strong>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link text-light" href="<?php echo e(route('genre.create')); ?>">Thể loại </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="<?php echo e(route('category.create')); ?>">Danh mục phim</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="<?php echo e(route('country.create')); ?>">Quốc gia</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="<?php echo e(route('movie.create')); ?>">Phim </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="<?php echo e(route('episode.create')); ?>">Tập phim </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

</body>

</html>
<?php /**PATH C:\xampp1\htdocs\laravel\web-phim\resources\views/layouts/navbar.blade.php ENDPATH**/ ?>