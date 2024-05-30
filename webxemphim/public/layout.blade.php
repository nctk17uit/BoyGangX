<!DOCTYPE html>
<html>
  <head>
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
    <link rel="stylesheet" href="./index.css" />
    <link rel="stylesheet" href="Trangchu.css" />

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
        <div class="comment-box">
          <div class="comment-site">
            <b class="comment-text">Bình luận</b>
            <div class="comment">
              <div class="comment-block"></div>
              <div id="textarea-position">
                <textarea
                  class="add-comment"
                  placeholder="Thêm bình luận..."
                  maxlength="120"
                ></textarea>
              </div>
            </div>
          </div>
          <div class="sent-comment">
            <div class="comment-sent-block">
              <button class="gi">Gửi</button>
            </div>
          </div>
        </div>
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
            <img class="like-block-icon" alt="" src="./public/likeblock.svg" />
            <b class="like-text">Thích</b>
            <img class="facebook-icon" alt="" src="./public/facebook@2x.png" />
          </div>
          <div class="share">
            <img
              class="like-block-icon"
              alt=""
              src="./public/blockchiase.svg"
            />

            <b class="chia-s">Chia sẽ</b>
            <img class="facebook-icon1" alt="" src="./public/facebook@2x.png" />
          </div>
        </div>
        <div class="movie-details">
          <b class="movie-title">Avenger: End game (2019) </b>
          <div class="views">Lượt xem: 10,047,011</div>
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
      <div class="header">
        <nav class="navbar navbar-expand-lg navbar-light bg-black">
          <strong class="navbar-brand text-success fs-1 m-2"> BoyGangX</strong>
          <button
            class="navbar-toggler bg-light"
            type="button"
            data-toggle="collapse"
            data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul
              class="navbar-nav navbar-expand-lg d-flex w-100 justify-content-around"
            >
              <li class="nav-item m-2">
                <a
                  class="finding nav-link text-light fs-3"
                  href="#"
                  onclick="timkiem()"
                >
                  <img src="finding.svg" alt="" />Tìm kiếm</a
                >
                <span class="box">
                  <input type="text" placeholder="Search..." /><a>
                    <button type="submit"><i class="fas fa-search"></i></button>
                    <svg
                      class="nuthuy"
                      style="display: none"
                      onclick="huytimkiem()"
                      xmlns="http://www.w3.org/2000/svg"
                      height="24px"
                      viewBox="0 -960 960 960"
                      width="20px"
                      fill="red"
                    >
                      <path
                        d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"
                      />
                    </svg>
                  </a>
                </span>
              </li>
              <li class="nav-item m-2">
                <a class="nav-link text-light fs-3" href="#">
                  <img src="Movie Ticket.png" alt="" />Phim Lẻ</a
                >
              </li>
              <li class="nav-item m-2">
                <a class="nav-link text-light fs-3" href="#">
                  <img src="Cinema.png" alt="" />Phim Bộ</a
                >
              </li>
              <li class="nav-item dropdown m-2">
                <a class="nav-link text-light fs-3" href="#">
                  <img src="Ask Question.png" alt="" />
                  FAQ
                </a>
              </li>
              <li class="nav-item dropdown m-2">
                <a class="nav-link text-light fs-3" href="#" id="account">
                  <img src="account.svg" alt="" />
                  Your Account
                </a>
                <div
                  class="dropdown-menu"
                  aria-labelledby="navbarDropdownQuocGia"
                ></div>
              </li>
            </ul>
          </div>
        </nav>

        <nav
          class="navbar navbar-expand-lg navbar-light bg-success mb-5"
          id="nav-color"
        >
          <button
            class="navbar-toggler bg-light"
            type="button"
            data-toggle="collapse"
            data-target="#navbarSupportedContent2"
            aria-controls="navbarSupportedContent2"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" ; id="navbarSupportedContent2">
            <ul
              class="navbar-nav navbar-expand-lg d-flex justify-content-around w-100 mr-auto"
            >
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle text-light fs-3"
                  href="#"
                  id="navbarDropdownTheloai"
                  role="button"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  Thể Loại
                </a>
                <div
                  class="dropdown-menu"
                  aria-labelledby="navbarDropdownTheloai"
                >
                  <a class="dropdown-item fs-4" href="#">Hành Động</a>
                  <a class="dropdown-item fs-4" href="#">Kinh Dị</a>
                  <a class="dropdown-item fs-4" href="#">Tình Cảm</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item fs-4" href="#">Viễn Tưởng</a>
                  <!-- Thêm phần tử mới -->
                  <a class="dropdown-item fs-4" href="#">Khác</a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle text-light fs-3"
                  href="#"
                  id="navbarDropdownLoaiphim"
                  role="button"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  Loại phim
                </a>
                <div
                  class="dropdown-menu"
                  aria-labelledby="navbarDropdownLoaiphim"
                >
                  <a class="dropdown-item fs-4" href="#">Phim bộ</a>
                  <a class="dropdown-item fs-4" href="#">Phim lẻ</a>
                  <a class="dropdown-item fs-4" href="#">Phim hot</a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle text-light fs-3"
                  href="#"
                  id="navbarDropdownQuocGia"
                  role="button"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  Quốc Gia
                </a>
                <div
                  class="dropdown-menu"
                  aria-labelledby="navbarDropdownQuocGia"
                >
                  <a class="dropdown-item fs-4" href="#">Việt Nam</a>
                  <a class="dropdown-item fs-4" href="#">Hoa Kỳ</a>
                  <a class="dropdown-item fs-4" href="#">Hàn Quốc</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item fs-4" href="#">Nhật Bản</a>
                  <!-- Thêm phần tử mới -->
                  <a class="dropdown-item fs-4" href="#">Khác</a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle text-light fs-3"
                  href="#"
                  id="navbarDropdownThoiluong"
                  role="button"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  Thời lượng
                </a>
                <div
                  class="dropdown-menu"
                  aria-labelledby="navbarDropdownQuocGia"
                >
                  <a class="dropdown-item fs-4" href="#">Dưới 30 phút</a>
                  <a class="dropdown-item fs-4" href="#">30 phút - 60 phút</a>
                  <a class="dropdown-item fs-4" href="#">Trên 1 Tiếng</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item fs-4" href="#"
                    >Trên 1 Tiếng 30 phút</a
                  >
                  <!-- Thêm phần tử mới -->
                  <a class="dropdown-item fs-4" href="#">Trên 2 tiếng</a>
                  <a class="dropdown-item fs-4" href="#">Khác</a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle text-light fs-3"
                  href="#"
                  id="navbarNam"
                  role="button"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  Năm
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownNam">
                  <a class="dropdown-item fs-4" href="#">2024</a>
                  <a class="dropdown-item fs-4" href="#">2023</a>
                  <a class="dropdown-item fs-4" href="#">2022</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item fs-4" href="#">2021</a>
                  <!-- Thêm phần tử mới -->
                  <a class="dropdown-item fs-4" href="#">Khác</a>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </div>
    <!-- Link Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
      function timkiem() {
        const timkiem1 = document.querySelector(".box");
        timkiem1.style.display = "inline";
        const timkiem2 = document.querySelector(".nuthuy");
        timkiem2.style.display = "inline";
        const timkiem3 = document.querySelector(".nuttim");
        timkiem3.style.display = "inline";
      }
      function huytimkiem() {
        const timkiem4 = document.querySelector(".nuthuy");
        timkiem4.style.display = "none";
        const timkiem5 = document.querySelector(".box");
        timkiem5.style.display = "none";
      }

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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.6.8/axios.js"></script>
  </body>
</html>
