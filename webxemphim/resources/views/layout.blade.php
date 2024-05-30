<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Trang xem phim</title>
    <link rel="stylesheet" href="globals.css" />
    <link rel="stylesheet" href="styleguide.css" />
    <link rel="stylesheet" href="{{asset('css/trang1.css')}}" />

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap"
      rel="stylesheet"
    />
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
  </head>
  <body>
    <div id="main-movie">
      <img src="img/endgame1.jpg" alt="wallpaper" id="wallpaper" />
      <div id="detail">
        <div>
          <p id="top">
            <span id="title">#1 hôm nay</span> <br /><br />
            Trải nghiệm cuối cùng của cuộc hành trình<br />
            siêu anh hùng đỉnh cao và đầy cảm xúc - Avengers: Endgame (2019).
          </p>
        </div>
      </div>
      <div id="button-container">
        <button id="xem-ngay">
          <a href="#" class="btn-text1">
            <img src="img/circled-play.png" alt="play-now" id="play" />XEM NGAY
          </a>
        </button>
        <button id="chi-tiet">
          <a href="#" class="btn-text2">
            <img src="img/information.png" alt="detail" id="detail2" />
            <span id="padding">Chi tiết</span>
          </a>
        </button>
      </div>
    </div>

    <div class="recommend">
      <div id="overlay">
        <span class="inline"></span>
        <p id="recommend-text" class="text-white custom-font-size">
          PHIM ĐỀ XUẤT
        </p>
        <br />

        <div class="slider-wrapper3">
          <ul class="container">
            <li>
              <a class="option" href="#">
                <img
                  src="img/oppenheimer.png"
                  alt="Oppenheimer"
                  class="film-img"
                />
                <p class="film-name">Oppenheimer</p>
                <p class="rating">7.4</p>
                <img class="star1" src="img/star.png" alt="rating-star" />
              </a>
            </li>
            <li>
              <a href="#" class="option">
                <img src="img/barbie-1.png" alt="Barbie" class="film-img" />
                <p class="film-name">Barbie</p>
                <p class="rating">7.4</p>
                <img class="star1" src="img/star.png" alt="rating-star" />
              </a>
            </li>
            <li>
              <a href="#" class="option">
                <img src="img/pirate.png" alt="Pirates" class="film-img" />
                <p class="film-name">Pirates</p>
                <p class="rating">7.4</p>
                <img class="star1" src="{{asset('img/star.png')}}" alt="rating-star" />
              </a>
            </li>
            <li>
              <a href="#" class="option">
                <img src="img/parasite2.jpg" alt="Parasite" class="film-img" />
                <p class="film-name">Parasite</p>
                <p class="rating">7.4</p>
                <img class="star1" src="img/star.png" alt="rating-star" />
              </a>
            </li>
            <li>
              <a href="#" class="option">
                <img src="img/endgame1.jpg" alt="Endgame" class="film-img" />
                <p class="film-name">Endgame</p>
                <p class="rating">7.4</p>
                <img class="star1" src="img/star.png" alt="rating-star" />
              </a>
            </li>
            <li>
              <a href="#" class="option">
                <img src="img/dune-2021-1.png" alt="Endgame" class="film-img" />
                <p class="film-name">Endgame</p>
                <p class="rating">7.4</p>
                <img class="star1" src="img/star.png" alt="rating-star" />
              </a>
            </li>
          </ul>
        </div>

        <br />
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
