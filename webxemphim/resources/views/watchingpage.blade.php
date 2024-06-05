@extends('layoutsuser.app')

@section('content')
<!DOCTYPE html>
<html>
  <head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0"
    />
    <script
      src="https://kit.fontawesome.com/35307607a8.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="./global.css" />
    <link rel="stylesheet" href="{{asset('trangxemphim2/trangxemphim1.css')}}" />
    <script src="{{ asset('js/comment.js') }}"></script>


    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Open Sans:wght@400;700&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Kanit:wght@400&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400&display=swap"
    />
    <link rel="stylesheet" href="{{ asset('homepage/homepage.css') }}">
  </head>
  <body>
    <div class="trang-xem-film-2-sau-khi-bm">
      <div class="bao">
        <div class="background"></div>
        
      
        <div class="enable-site">
          <div class="kichhoat-block1"></div>
          <div class="kickhoat-description">
            Nếu phim load chậm, bạn cũng có thể kích hoạt VipMode để xem phim
            với tốc độ cao
          </div>
          <div class="kichhoat-button">
            <button class="kichhoat-block2">
              <span class="kch-hot">Kích hoạt</span>
            </button>
          </div>
        </div>
        <div class="btn-group">
</div>



        <div class="interact-site" style="position: relative">
          <div class="like">
            <a href="#">
                <img class="like-block-icon" alt="" src="{{ asset('img/likeblock.svg') }}" />
                <b class="like-text">Thích</b>
                <img class="facebook-icon" alt="" src="{{ asset('img/facebook@2x.png') }}" />
            </a>
            <div class="iframe-container">
                <iframe 
                    src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fpermalink.php%3Fstory_fbid%3D122095192916352891%26id%3D61560586735457&show_text=true&width=500&preview=comet_preview" 
                    width="1920" 
                    height="494" 
                    style="border:none;overflow:hidden" 
                    scrolling="no" 
                    frameborder="0" 
                    allowfullscreen="true" 
                    allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share">
                </iframe>
            </div>
        </div>
          <div class="share">
            <a href="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fpermalink.php%3Fstory_fbid%3D122095192916352891%26id%3D61560586735457&show_text=true&width=500&preview=comet_preview" >
              
              <img
                class="like-block-icon"
                alt=""
                src="{{asset('img/blockchiase.svg')}}"
              />
              <b class="chia-s">Chia sẻ</b>
              <img class="facebook-icon1" alt="" src="{{asset('img/facebook@2x.png')}}" />
            </a >
            <div class="iframe-container">
              <iframe 
                  src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fpermalink.php%3Fstory_fbid%3D122095192916352891%26id%3D61560586735457&show_text=true&width=500&preview=comet_preview" 
                  width="1920" 
                  height="494"
                  style="border:none;overflow:hidden" 
                  scrolling="no" 
                  frameborder="0" 
                  allowfullscreen="true" 
                  allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share">
              </iframe>
          </div>
          </div>
        </div>
        <div class="movie-details" style="margin-top:100px;">
          <b class="movie-title">{{$movie->title}} </b>
          <div class="views">
          {{$movie->description}}</div>
        </div>
          <div class="video-display">
          <button type="button" class="btn btn-success rounded-lg mb-1" style="margin-right: 10px; padding: 10px ; font-size: 18px; color:black; font-weight: bold;" onclick="changeStreamingLink('{{ $movie->linkserver1 }}')">Server 1</button>
          <button type="button" class="btn btn-success rounded-lg mb-1" style="margin-right: 10px; padding: 10px ; font-size: 18px;color:black; font-weight: bold;"onclick="changeStreamingLink('{{ $movie->linkserver2 }}')">Server 2</button>
        
          <p>
            <iframe
              allowfullscreen
              frameborder="0"
              width="1920px"
              height="650px"
              scrolling="0"
              id="streamingFrame"
              src={{$movie->linkserver1}}
              width="100%"
            ></iframe>
          </p>
        </div>
        <script>
          function changeStreamingLink(newLink) {
              var streamingFrame = document.getElementById('streamingFrame');
              streamingFrame.src = newLink;
          }
        </script>
      </div>
      <div class="baoCMT">
      <div class="fb-comments" data-href="http://127.0.0.1:8000/trangxemphim" data-width="1280"  data-numposts="8" data-color="white"></div>
      </div>
      </html>
      
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
  <script>
    console.log('CSRF Token:', '{{ csrf_token() }}');
</script>
    <script>
     

      const initSlider2 = () => {
        const imageList = document.querySelector(
          ".slider-wrapper2 .image-list2"
        );
        const slideButtons = document.querySelectorAll(
          ".slider-wrapper2 .slide-button2"
        );
        const sliderScrollbar = document.querySelector(
          ".container2 .slider-scrollbar2"
        );
        const scrollbarThumb =
          sliderScrollbar.querySelector(".scrollbar-thumb2");
        const maxScrollLeft = imageList.scrollWidth - imageList.clientWidth;

        scrollbarThumb.addEventListener("mousedown", (e) => {
          const startX = e.clientX;
          const thumbPosition = scrollbarThumb.offsetLeft;
          const maxThumbPosition =
            sliderScrollbar.getBoundingClientRect().width -
            scrollbarThumb.offsetWidth;

          const handleMouseMove = (e) => {
            const deltaX = e.clientX - startX;
            const newThumbPosition = thumbPosition + deltaX;

            const boundedPosition = Math.max(
              0,
              Math.min(maxThumbPosition, newThumbPosition)
            );
            const scrollPosition =
              (boundedPosition / maxThumbPosition) * maxScrollLeft;

            scrollbarThumb.style.left = `${boundedPosition}px`;
            imageList.scrollLeft = scrollPosition;
          };

          const handleMouseUp = () => {
            document.removeEventListener("mousemove", handleMouseMove);
            document.removeEventListener("mouseup", handleMouseUp);
          };

          document.addEventListener("mousemove", handleMouseMove);
          document.addEventListener("mouseup", handleMouseUp);
        });

        slideButtons.forEach((button) => {
          button.addEventListener("click", () => {
            const direction = button.id === "prev-slide2" ? -1 : 1;
            const scrollAmount = imageList.clientWidth * direction;
            imageList.scrollBy({ left: scrollAmount, behavior: "smooth" });
          });
        });

        const handleSlideButtons = () => {
          slideButtons[0].style.display =
            imageList.scrollLeft <= 0 ? "none" : "flex";
          slideButtons[1].style.display =
            imageList.scrollLeft >= maxScrollLeft ? "none" : "flex";
        };

        const updateScrollThumbPosition = () => {
          const scrollPosition = imageList.scrollLeft;
          const thumbPosition =
            (scrollPosition / maxScrollLeft) *
            (sliderScrollbar.clientWidth - scrollbarThumb.offsetWidth);
          scrollbarThumb.style.left = `${thumbPosition}px`;
        };

        imageList.addEventListener("scroll", () => {
          updateScrollThumbPosition();
          handleSlideButtons();
        });
      };

      window.addEventListener("resize", initSlider2);
      window.addEventListener("load", initSlider2);

      const initSlider3 = () => {
        const imageList = document.querySelector(
          ".slider-wrapper3 .image-list3"
        );
        const slideButtons = document.querySelectorAll(
          ".slider-wrapper3 .slide-button3"
        );
        const sliderScrollbar = document.querySelector(
          ".container3 .slider-scrollbar3"
        );
        const scrollbarThumb =
          sliderScrollbar.querySelector(".scrollbar-thumb3");
        const maxScrollLeft = imageList.scrollWidth - imageList.clientWidth;

        scrollbarThumb.addEventListener("mousedown", (e) => {
          const startX = e.clientX;
          const thumbPosition = scrollbarThumb.offsetLeft;
          const maxThumbPosition =
            sliderScrollbar.getBoundingClientRect().width -
            scrollbarThumb.offsetWidth;

          const handleMouseMove = (e) => {
            const deltaX = e.clientX - startX;
            const newThumbPosition = thumbPosition + deltaX;

            const boundedPosition = Math.max(
              0,
              Math.min(maxThumbPosition, newThumbPosition)
            );
            const scrollPosition =
              (boundedPosition / maxThumbPosition) * maxScrollLeft;

            scrollbarThumb.style.left = `${boundedPosition}px`;
            imageList.scrollLeft = scrollPosition;
          };

          const handleMouseUp = () => {
            document.removeEventListener("mousemove", handleMouseMove);
            document.removeEventListener("mouseup", handleMouseUp);
          };

          document.addEventListener("mousemove", handleMouseMove);
          document.addEventListener("mouseup", handleMouseUp);
        });

        slideButtons.forEach((button) => {
          button.addEventListener("click", () => {
            const direction = button.id === "prev-slide3" ? -1 : 1;
            const scrollAmount = imageList.clientWidth * direction;
            imageList.scrollBy({ left: scrollAmount, behavior: "smooth" });
          });
        });

        const handleSlideButtons = () => {
          slideButtons[0].style.display =
            imageList.scrollLeft <= 0 ? "none" : "flex";
          slideButtons[1].style.display =
            imageList.scrollLeft >= maxScrollLeft ? "none" : "flex";
        };

        const updateScrollThumbPosition = () => {
          const scrollPosition = imageList.scrollLeft;
          const thumbPosition =
            (scrollPosition / maxScrollLeft) *
            (sliderScrollbar.clientWidth - scrollbarThumb.offsetWidth);
          scrollbarThumb.style.left = `${thumbPosition}px`;
        };

        imageList.addEventListener("scroll", () => {
          updateScrollThumbPosition();
          handleSlideButtons();
        });
      };

      window.addEventListener("resize", initSlider3);
      window.addEventListener("load", initSlider3);
    </script>
    <script src="{{ asset('js/comment.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.6.8/axios.js"></script>
  </body>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v20.0" nonce="ZSqNcsgT"></script>
</html>
<script type="text/javascript" src=https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.6.8/axios.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endsection