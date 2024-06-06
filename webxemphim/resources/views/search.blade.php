@extends('layoutsuser.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tìm kiếm phim</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('homepage/homepage.css') }}">
    
    
    <style>
        body {
            background-color: #969494; /* Màu nền */
        }
        a.movie {
    text-decoration: none; /* Loại bỏ gạch chân */
    color: black; /* Đổi màu chữ thành màu đen */
}
a.movie:hover {
    color: black; /* Đảm bảo màu chữ vẫn là màu đen khi hover */
    text-decoration: none; /* Đảm bảo không có gạch chân khi hover */
}

        .movie {
            border-radius: 10px;
            margin: 10px 0;
            padding: 10px;
            display: flex;
            align-items: center;
            background-color: #EDE9EA; /* Màu nền cho phần hiển thị thông tin phim */
            max-width: 100%; /* Đặt chiều rộng tối đa */
            margin-left: auto; /* Căn giữa phần tử */
            margin-right: auto; /* Căn giữa phần tử */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Đổ bóng */
            border: 1px solid #CCCCCC; /* Viền */
            transition: transform 0.3s ease; /* Hiệu ứng hover */
        }
        .movie:hover {
            transform: translateY(-5px); /* Di chuyển phần tử lên trên khi hover */
        }
        .movie img {
            max-width: 100px;
            height: auto;
            margin-right: 20px;
            border-radius: 5px;
        }
        .movie-info h3 {
            margin-top: 0;
        }
        .wide-search-bar .form-control {
            width: calc(100% - 110px); /* Chiều rộng của ô nhập trừ đi kích thước của nút tìm kiếm */
            border: 1px solid #000; /* Tạo viền cho ô tìm kiếm */
            border-radius: 5px; /* Bo tròn các góc của ô tìm kiếm */
            background-color: #3D3C3C; /* Background color của ô tìm kiếm */
       
        }
        .btn-light-green {
            background-color: #2E8B57; /* Màu nền cho nút tìm kiếm */
            border: 3px solid #2E8B57; /* Tạo viền cho nút tìm kiếm */
            border-radius: 5px; /* Bo tròn các góc của nút tìm kiếm */
            color: #FFFFFF; /* Màu chữ cho nút tìm kiếm */
            width: 100px; /* Chiều rộng của nút tìm kiếm */
        }
        .wide-search-bar .form-control::placeholder {
    color: #D4D0D1; /* Màu chữ cho placeholder */
}
.wide-search-bar .form-control {
    color: #FFFFFF; /* Màu chữ cho nội dung nhập vào */
}

    </style>
</head>
<body>
    <div class="container mt-5">
        <form action="{{ route('search') }}" method="GET" class="mb-4">
            <div class="input-group wide-search-bar">
                <input type="text" name="query" class="form-control form-control-lg" placeholder="Nhập tên phim..." value="{{ $query ?? '' }}">
                <div class="input-group-append">
                    <button type="submit" class="btn btn-light-green"><i class="bi bi-search"></i> Tìm kiếm</button>
                </div>
            </div>
        </form>
        
        <div class="container mt-5" id="search-results">
        @if($movies->isEmpty())
                <p>Không tìm thấy phim nào.</p>
            @else
                @foreach($movies as $movie)
                    @if(!empty($movie->slug)) <!-- Kiểm tra nếu slug tồn tại -->
                        <a class="movie" href="{{ route('movie.show', $movie->slug)}}">
                            @if($movie->image)
                                <img src="{{ asset('uploads/movie/' . $movie->image) }}" alt="{{ $movie->title }}">
                            @endif
                            <div class="movie-info">
                                <h3>{{ $movie->title }}</h3>
                                <p>{{ $movie->description }}</p>
                            </div>
                        </a>
                    @else
                        <div class="movie">
                            @if($movie->image)
                                <img src="{{ asset('uploads/movie/' . $movie->image) }}" alt="{{ $movie->title }}">
                            @endif
                            <div class="movie-info">
                                <h3>{{ $movie->title }}</h3>
                                <p>{{ $movie->description }}</p>
                                <p><strong>Slug không tồn tại</strong></p> 
                            </div>
                        </div>
                    @endif
                @endforeach
            @endif      
        </div>
    </div>

    <!-- Bootstrap JS và các dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script type="text/javascript" src=https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.6.8/axios.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    function showMovieDetail(movieId) {
        // Định nghĩa logic ở đây để hiển thị chi tiết phim
        alert('Hiển thị chi tiết cho phim có ID: ' + movieId);
    }
</script>
</body>
</html>

@endsection