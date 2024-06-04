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
    <link rel="stylesheet" href="{{asset('trangxemphim2/Trangchu.css')}}" />
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
  </head>
  <body>
    <div class="trang-xem-film-2-sau-khi-bm">
      <div class="body">
        <div class="background"></div>
        
        {{-- <div class="comment-box">
          <div class="comment-site">
              <b class="comment-text">Bình luận</b>
              <div class="comment">
                  <div class="comment-block" id="comment-block"></div>
                  <div id="textarea-position">
                      <textarea
                          class="add-comment"
                          placeholder="Thêm bình luận..."
                          maxlength="200"
                          id="comment-textarea"
                      ></textarea>
                  </div>
              </div>
          </div>
          <button class="gi" onclick="submitComment()">Gửi</button>
      </div> --}}
      
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
        <div class="episode">
          <button class="block-tap3"><div class="tp-3">Tập 3</div></button>
          <button class="block-tap2"><div class="tp-2">Tập 2</div></button>
          <button class="block-tap1"><div class="tp-1">Tập 1</div></button>
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
                    width="500" 
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
  
              <b class="chia-s">Chia sẽ</b>
              <img class="facebook-icon1" alt="" src="{{asset('img/facebook@2x.png')}}" />
            </a >
            <div class="iframe-container">
              <iframe 
                  src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fpermalink.php%3Fstory_fbid%3D122095192916352891%26id%3D61560586735457&show_text=true&width=500&preview=comet_preview" 
                  width="500" 
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
        <div class="movie-details">
          <b class="movie-title">Avenger: End game (2019) </b>
          <div class="views">

            Mô tả: Sau cú búng tay của Thanos, một nửa dân số của toàn thế giới đã bị “bay màu”, trong đó không ngoại trừ những siêu anh hùng như: Spider-man, Scarlet Witch, Black Panther, The Wasp,...v.v… và rất nhiều người dân vô tội khác. Những người còn lại phải tham gia một trận chiến cuối cùng trong Avengers: Engame.</div>
        </div>
        <div class="video-display">
          <p>
            <iframe
              allowfullscreen
              frameborder="0"
              height="500px"
              scrolling="0"
              src="https://vip.opstream11.com/share/c366c2c97d47b02b24c3ecade4c40a01"
              width="100%"
            ></iframe>
          </p>
        </div>
      </div>
      <div class="fb-comments" data-href="http://127.0.0.1:8000/trangxemphim" data-width="600" data-numposts="6"></div>
      
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
