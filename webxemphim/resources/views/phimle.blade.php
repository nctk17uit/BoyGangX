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

    <h1 class="phimle">PHIM LẺ</h1>
    <div class="container2">
      <div class="slider-wrapper2">
        <button id="prev-slide2" class="slide-button2 material-symbols-rounded">
          chevron_left
        </button>
        <ul class="image-list2">
          @foreach ($category_home as $category)
            @foreach ($category->movie as $mov)
                @if(!empty($mov->slug))
                  <a href="{{ route('movie.show', $mov->slug)}}"><img class="image-item" src="{{asset('uploads/movie/'.$mov->image)}}" alt="img-1" /> {{$mov->title}}</a>
                  @else
                    <li>
                        <p>{{ $mov->title }} - Slug is missing</p>
                    </li>
                @endif
            @endforeach
          @endforeach
        </ul>
        <button id="next-slide2" class="slide-button2 material-symbols-rounded">
          chevron_right
        </button>

      </div>


      <div class="slider-scrollbar2">
        <div class="scrollbar-track2">
          <div class="scrollbar-thumb2"></div>
        </div>
      </div>
    </div>

    <!--------------------------------->

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
