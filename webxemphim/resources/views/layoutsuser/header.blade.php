  <nav class="navbar navbar-expand-lg " id="header-inside">
    <a id="Logo" class="navbar-brand text-success" href="{{route('home')}}">BoyGangX</a>
    <button class="navbar-toggler bg-white" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto" id="header-text">
        <li class="nav-item active">
          <a class="nav-link text-custom" href="{{route('phimle')}}">Phim lẻ</a>
        </li>
        <li class="nav-item active" >
          <a class="nav-link text-custom" href="{{route('phimbo')}}">Phim bộ</a>
        </li>
        <div class="nav-item dropdown" >
          <a class="nav-link dropdown-toggle text-custom" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Thể loại
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown" >
            <a class="dropdown-item" href="#">Hành động</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Viễn tưởng</a>
          </div>
          </div>
        <div class="nav-item dropdown" >
          <a class="nav-link dropdown-toggle text-custom" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Quốc gia
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown" >
            <a class="dropdown-item" href="#">Mỹ</a>
            <a class="dropdown-item" href="#">Nhật Bản</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Hàn Quốc</a>
          </div>
          </div>
        </li>
      </ul>
    </div>
    <div class="nav-item active" id="account-text">
    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle " href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class=" dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('profile') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('profile-form').submit();">
                                        {{ __('Profile') }}
                                    </a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                    <form id="profile-form" action="{{ route('profile') }}" method="GET" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
    </div>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Tìm kiếm</button>
      </form>
    </div>
    
  </nav>  


  