@extends('layoutsuser.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('homepage/homepage.css') }}">
</head>
<body>
<nav>


    <!--------------------------------------------------->


    <h1 class="phimbo">PHIM BỘ</h1>
    <div class="container3">
      <div class="slider-wrapper3">
        <button id="prev-slide3" class="slide-button3 material-symbols-rounded">
          chevron_left
        </button>
        <ul class="image-list3">
        <a href="#"><img class="image-item" src="{{ asset('homepage/img/loki2.jpg') }}" alt="img-1" />Loki 2</a>
          <a href="#"><img class="image-item" src="{{ asset('homepage/img/onepiece.jpg') }}" alt="img-2" />Đảo hải tặc</a>
          <a href="#"><img class="image-item" src="{{ asset('homepage/img/lupin2.jpg') }}" alt="img-3" />Lupin 2</a>
          <a href="#"><img class="image-item" src="{{ asset('homepage/img/squid-game.jpg') }}" alt="img-4" />Trò chơi con mực</a>
          <a href="#"><img class="image-item" src="{{ asset('homepage/img/penthouse.jpg') }}" alt="img-5" />Penthouse: Cuộc chiến thượng lưu</a>
          <a href="#"><img class="image-item" src="{{ asset('homepage/img/theglory.jpg') }}" alt="img-6" />Vinh quang trong thù hận</a>
          <a href="#"><img class="image-item" src="{{ asset('homepage/img/hometown.jpeg') }}" alt="img-7" />Điệu cha-cha-cha làng biển</a>
          <a href="#"><img class="image-item" src="{{ asset('homepage/img/Mouse.jpg') }}" alt="img-8" />Mouse: Kẻ săn người</a>
          <a href="#"><img class="image-item" src="{{ asset('homepage/img/frieren.jpg') }}" alt="img-9" />Frieren: Pháp sư tiễn táng</a>
          <a href="#"><img class="image-item" src="{{ asset('homepage/img/Duocsutusu.jpg') }}" alt="img-10" />Dược sư tự sự</a>
          <a href="#"><img class="image-item" src="{{ asset('homepage/img/haikyu.jpg') }}" alt="img-11" />Haikyuu: Vua bóng chuyền</a>
          <a href="#"><img class="image-item" src="{{ asset('homepage/img/datealiveIV.jpe') }}" alt="img-12" />Date A Live SS4</a>
          <a href="#"><img class="image-item" src="{{ asset('homepage/img/mashle.jpg') }}" alt="img-13" />Mashle: Phép thuật và cơ bắp</a>
          <a href="#"><img class="image-item" src="{{ asset('homepage/img/mashle2.webp') }}" alt="img-14" />Mashle: Phép thuật và cơ bắp phần 2</a>
          <a href="#"><img class="image-item" src="{{ asset('homepage/img/jujutsu.webp') }}" alt="img-15" />Chú thuật hồi chiến</a>
          <a href="#"><img class="image-item" src="{{ asset('homepage/img/jujutsu2.png') }}" alt="img-16" />Chú thuật hồi chiến 2</a>
          <a href="#"><img class="image-item" src="{{ asset('homepage/img/pokemon.jpg') }}" alt="img-17" />Pokémon</a>
          <a href="#"><img class="image-item" src="{{ asset('homepage/img/solo.jpg') }}" alt="img-18" />Tôi thăng cấp một mình</a>
          <a href="#"><img class="image-item" src="{{ asset('homepage/img/DemonSlayer.jpg') }}" alt="img-19" />Thanh gươm diệt quỷ: Làn   g thợ rèn</a>
          <a href="#"><img class="image-item" src="{{ asset('homepage/img/Kny.webp') }}" alt="img-20" />Thanh gươm diệt quỷ: Kỹ viện trấn</a>
        </ul>
        <button id="next-slide3" class="slide-button3 material-symbols-rounded">
          chevron_right
        </button>

      </div>
      <div class="slider-scrollbar3">
        <div class="scrollbar-track3">
          <div class="scrollbar-thumb3"></div>
        </div>
      </div>
    </div>
  </nav>


  <!-- Link Bootstrap JS -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script>
    function timkiem() {
      const timkiem1 = document.querySelector('.box')
      timkiem1.style.display = 'inline'
      const timkiem2 = document.querySelector('.nuthuy')
      timkiem2.style.display = 'inline'
      const timkiem3 = document.querySelector('.nuttim')
      timkiem3.style.display = 'inline'

    }

    function huytimkiem() {
      const timkiem4 = document.querySelector('.nuthuy')
      timkiem4.style.display = 'none'
      const timkiem5 = document.querySelector('.box')
      timkiem5.style.display = 'none'
    }

    const initSlider2 = () => {
      const imageList = document.querySelector(".slider-wrapper2 .image-list2");
      const slideButtons = document.querySelectorAll(".slider-wrapper2 .slide-button2");
      const sliderScrollbar = document.querySelector(".container2 .slider-scrollbar2");
      const scrollbarThumb = sliderScrollbar.querySelector(".scrollbar-thumb2");
      const maxScrollLeft = imageList.scrollWidth - imageList.clientWidth;



      scrollbarThumb.addEventListener("mousedown", (e) => {
        const startX = e.clientX;
        const thumbPosition = scrollbarThumb.offsetLeft;
        const maxThumbPosition = sliderScrollbar.getBoundingClientRect().width - scrollbarThumb.offsetWidth;


        const handleMouseMove = (e) => {
          const deltaX = e.clientX - startX;
          const newThumbPosition = thumbPosition + deltaX;


          const boundedPosition = Math.max(0, Math.min(maxThumbPosition, newThumbPosition));
          const scrollPosition = (boundedPosition / maxThumbPosition) * maxScrollLeft;

          scrollbarThumb.style.left = `${boundedPosition}px`;
          imageList.scrollLeft = scrollPosition;
        }


        const handleMouseUp = () => {
          document.removeEventListener("mousemove", handleMouseMove);
          document.removeEventListener("mouseup", handleMouseUp);
        }


        document.addEventListener("mousemove", handleMouseMove);
        document.addEventListener("mouseup", handleMouseUp);
      });


      slideButtons.forEach(button => {
        button.addEventListener("click", () => {
          const direction = button.id === "prev-slide2" ? -1 : 1;
          const scrollAmount = imageList.clientWidth * direction;
          imageList.scrollBy({
            left: scrollAmount,
            behavior: "smooth"
          });
        });
      });


      const handleSlideButtons = () => {
        slideButtons[0].style.display = imageList.scrollLeft <= 0 ? "none" : "flex";
        slideButtons[1].style.display = imageList.scrollLeft >= maxScrollLeft ? "none" : "flex";
      }


      const updateScrollThumbPosition = () => {
        const scrollPosition = imageList.scrollLeft;
        const thumbPosition = (scrollPosition / maxScrollLeft) * (sliderScrollbar.clientWidth - scrollbarThumb.offsetWidth);
        scrollbarThumb.style.left = `${thumbPosition}px`;
      }


      imageList.addEventListener("scroll", () => {
        updateScrollThumbPosition();
        handleSlideButtons();
      });
    }

    window.addEventListener("resize", initSlider2);
    window.addEventListener("load", initSlider2);





    const initSlider3 = () => {
      const imageList = document.querySelector(".slider-wrapper3 .image-list3");
      const slideButtons = document.querySelectorAll(".slider-wrapper3 .slide-button3");
      const sliderScrollbar = document.querySelector(".container3 .slider-scrollbar3");
      const scrollbarThumb = sliderScrollbar.querySelector(".scrollbar-thumb3");
      const maxScrollLeft = imageList.scrollWidth - imageList.clientWidth;

      scrollbarThumb.addEventListener("mousedown", (e) => {
        const startX = e.clientX;
        const thumbPosition = scrollbarThumb.offsetLeft;
        const maxThumbPosition = sliderScrollbar.getBoundingClientRect().width - scrollbarThumb.offsetWidth;


        const handleMouseMove = (e) => {
          const deltaX = e.clientX - startX;
          const newThumbPosition = thumbPosition + deltaX;


          const boundedPosition = Math.max(0, Math.min(maxThumbPosition, newThumbPosition));
          const scrollPosition = (boundedPosition / maxThumbPosition) * maxScrollLeft;

          scrollbarThumb.style.left = `${boundedPosition}px`;
          imageList.scrollLeft = scrollPosition;
        }


        const handleMouseUp = () => {
          document.removeEventListener("mousemove", handleMouseMove);
          document.removeEventListener("mouseup", handleMouseUp);
        }


        document.addEventListener("mousemove", handleMouseMove);
        document.addEventListener("mouseup", handleMouseUp);
      });


      slideButtons.forEach(button => {
        button.addEventListener("click", () => {
          const direction = button.id === "prev-slide3" ? -1 : 1;
          const scrollAmount = imageList.clientWidth * direction;
          imageList.scrollBy({
            left: scrollAmount,
            behavior: "smooth"
          });
        });
      });


      const handleSlideButtons = () => {
        slideButtons[0].style.display = imageList.scrollLeft <= 0 ? "none" : "flex";
        slideButtons[1].style.display = imageList.scrollLeft >= maxScrollLeft ? "none" : "flex";
      }


      const updateScrollThumbPosition = () => {
        const scrollPosition = imageList.scrollLeft;
        const thumbPosition = (scrollPosition / maxScrollLeft) * (sliderScrollbar.clientWidth - scrollbarThumb.offsetWidth);
        scrollbarThumb.style.left = `${thumbPosition}px`;
      }


      imageList.addEventListener("scroll", () => {
        updateScrollThumbPosition();
        handleSlideButtons();
      });
    }

    window.addEventListener("resize", initSlider3);
    window.addEventListener("load", initSlider3);
  </script>

</body>
<script type="text/javascript" src=https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.6.8/axios.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</html>

@endsection
