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
    <h1 class="rec" style="color:GREEN;text-align: center;">PHIM ĐỀ CỬ</h1>

    <div class="container">
      <div class="row mt-3">
        <div class="picture1 col-xl-4 px-0" id="recomment-dune">
          <a href="#"><img class="image-item" src="{{ asset('homepage/img/dune.png') }}" alt="img-1" /></a>
        </div>
        <div class="col-xl-8 px-0 " id="recomment-dune-des" style="display:none;">
          <div class="row">
            <div class="col-xl-8">
              <h2 style="color:white; ">DUNE PART2</h2>
            </div>
            <div class="col-xl-12">
              <p style="color:white; float:left;">8.5</p>
              <img class="pl-2" style="color:white; width:50px;" alt="" src="imdb.png">
            </div>
            <div class="col-xl-12">
              <p style="color:white; float:left;">Thể loại: Hành động, viễn tưởng</p>
            </div>
            <div class="col-xl-12">
              <p style="color:white; float:left;">Hãy theo dõi hành trình thần thoại của Paul Atreides khi anh đoàn kết với Chani và Fremen trong khi trên con đường trả thù những kẻ âm mưu phá hoại gia đình anh. Đứng trước sự lựa chọn giữa tình yêu của đời mình và số phận của vũ trụ đã biết, Paul cố gắng ngăn chặn một tương lai khủng khiếp mà chỉ có anh mới có thể nhìn thấy.</p>
            </div>
          </div>
        </div>
        <div class="picture2 col-xl-4 px-0" id="recomment-exhuma">
          <a href="#"><img class="image-item" src="{{ asset('homepage/img/exhuma.png') }}" alt="img-3" /></a>
        </div>
        <div class="col-xl-8 px-0" id="recomment-exhuma-des" style="display:none;">
          <div class="row">
            <div class="col-xl-12">
              <h2 style="color:white; ">EXHUMA: Quật mộ trùng ma</h2>
            </div>
            <div class="col-xl-12">
              <p style="color:white; float:left;">7.0</p>
              <img class="pl-2" style="color:white; width:50px;" alt="" src="imdb.png">
            </div>
            <div class="col-xl-12">
              <p style="color:white; float:left; ">Thể loại: Trinh thám, kinh dị, giật gân</p>
            </div>
            <div class="col-xl-12">
              <p style="color:white; float:left;">"Câu chuyện theo dõi một gia đình giàu có ở Los Angeles khi họ đối mặt với những sự kiện siêu nhiên kỳ bí. Trong hành trình giải quyết những bí ẩn đen tối, gia đình đã tìm đến sự giúp đỡ của bộ đôi pháp sư trẻ tuổi Hwa Rim và Bong Gil. Hwa Rim nhanh chóng khám phá ra rằng mọi hiện tượng siêu nhiên này liên quan đến bóng tối của tổ tiên gia đình, được biết đến với biệt danh "Mộ Trùng Ma". Phim đưa khán giả vào cuộc hành trình đầy căng thẳng để giải thoát linh hồn không yên của tổ tiên và kết thúc cơn ác mộng của gia đình.</p>
            </div>
          </div>
        </div>


        <div class="picture3 col-xl-4 px-0" id="recomment-got">
          <a href="#"><img class="image-item" src="{{ asset('homepage/img/got.png') }}" alt="img-4" /></a>
        </div>
        <div class="col-xl-8 px-0" id="recomment-got-des" style="display:none;">
          <div class="row">
            <div class="descrip col-xl-12">
              <h2 style="color:white; ">GAME OF THRONE: Trò chơi vương quyền</h2>
            </div>
            <div class="descrip col-xl-12">
              <p style="color:white; float:left;">9.2</p>
              <img class="descrip pl-2" style="color:white; width:50px;" alt="" src="imdb.png">
            </div>
            <div class="descrip col-xl-12">
              <p class="testt" style="color:white; float:left;">Thể loại: Phiêu lưu, Hành động, Tâm lý</p>
            </div>
            <div class="descrip col-xl-12">
              <p style="color:white; float:left;">Trò chơi vương quyền là một loạt phim truyền hình giả tưởng của Anh-Mỹ được sáng lập bởi David Benioff và D. B. Weiss. Bộ phim chuyển thể dựa trên loạt tiểu thuyết giả tưởng A Song of Ice and Fire của tác giả George R. R. Martin, tập đầu tiên của tiểu thuyết có tên A Game of Thrones.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script>
      document.getElementById("recomment-dune").addEventListener('mouseover', function() {
        document.getElementById("recomment-exhuma").style.display = "none";
        document.getElementById("recomment-got").style.display = "none";
        document.getElementById("recomment-got-des").style.display = "none";
        document.getElementById("recomment-exhuma-des").style.display = "none";
        document.getElementById("recomment-dune-des").style.display = "block";
      });
      document.getElementById("recomment-dune").addEventListener('mouseout', function() {
        document.getElementById("recomment-exhuma").style.display = "block";
        document.getElementById("recomment-got").style.display = "block";
        document.getElementById("recomment-dune-des").style.display = "none";
      });
      document.getElementById("recomment-exhuma").addEventListener('mouseover', function() {
        document.getElementById("recomment-dune").style.display = "none";
        document.getElementById("recomment-got").style.display = "none";
        document.getElementById("recomment-got-des").style.display = "none";
        document.getElementById("recomment-dune-des").style.display = "none";
        document.getElementById("recomment-exhuma-des").style.display = "block";
      });
      document.getElementById("recomment-exhuma").addEventListener('mouseout', function() {
        document.getElementById("recomment-dune").style.display = "block";
        document.getElementById("recomment-got").style.display = "block";
        document.getElementById("recomment-exhuma-des").style.display = "none";
      });
      document.getElementById("recomment-got").addEventListener('mouseover', function() {
        document.getElementById("recomment-exhuma").style.display = "none";
        document.getElementById("recomment-dune-des").style.display = "none";
        document.getElementById("recomment-dune").style.display = "none";
        document.getElementById("recomment-got-des").style.display = "block";
      });
      document.getElementById("recomment-got").addEventListener('mouseout', function() {
        document.getElementById("recomment-exhuma").style.display = "block";
        document.getElementById("recomment-dune").style.display = "block";
        document.getElementById("recomment-got-des").style.display = "none";
      });
    </script>

    <!--------------------------------------------------->

    <h1 class="phimle">PHIM LẺ MỚI CẬP NHẬT</h1>
    <div class="container2">
      <div class="slider-wrapper2">
        <button id="prev-slide2" class="slide-button2 material-symbols-rounded">
          chevron_left
        </button>
        <ul class="image-list2">
          <a href="#"><img class="image-item" src="{{ asset('homepage/img/exhuma.png') }}" alt="img-1" />EXHUMA: Quật mộ trùng ma</a>
          <a href="#"><img class="image-item" src="{{ asset('homepage/img/dune.png') }}" alt="img-2" /> DUNE2: Hành tinh cát</a>
          <a href="#"><img class="image-item" src="{{ asset('homepage/img/endgame.png') }}" alt="img-3" />Avengers: Hồi kết </a>
          <a href="#"><img class="image-item" src="{{ asset('homepage/img/batman-v-superman.jpg') }}" alt="img-4" />Batman vs Superman: Dawn of Justice</a>
          <a href="#"><img class="image-item" src="{{ asset('homepage/img/civil-war.jpg') }}" alt="img-5" />Captain America: Nội chiến siêu anh hùng </a>
          <a href="#"><img class="image-item" src="{{ asset('homepage/img/avengers.jpg') }}" alt="img-6" />Avengers: Biệt đội báo thù</a>
          <a href="#"><img class="image-item" src="{{ asset('homepage/img/dune.jpg') }}" alt="img-7" />DUNE1: Hành tinh cát</a>
          <a href="#"><img class="image-item" src="{{ asset('homepage/img/gxk.jpg') }}" alt="img-8" />Godzilla x Kong: Đế chế mới</a>
          <a href="#"><img class="image-item" src="{{ asset('homepage/img/gvsk.webp') }}" alt="img-9" />Godzilla đại chiến Kong</a>
          <a href="#"><img class="image-item" src="{{ asset('homepage/img/gminus1.jpg') }}" alt="img-10" />Godzilla: Minus one</a>
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

    <h1 class="phimbo">PHIM BỘ MỚI CẬP NHẬT</h1>
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
          <a href="#"><img class="image-item" src="{{ asset('homepage/img/mashle.jpg') }}" alt="img-13" />Mashle:Phép thuật và cơ bắp</a>
          <a href="#"><img class="image-item" src="{{ asset('homepage/img/mashle2.webp') }}" alt="img-14" />Mashle: Phép thuật và cơ bắp phần 2</a>
          <a href="#"><img class="image-item" src="{{ asset('homepage/img/jujutsu.webp') }}" alt="img-15" />Chú thuật hồi chiến</a>
          <a href="#"><img class="image-item" src="{{ asset('homepage/img/jujutsu2.png') }}" alt="img-16" />Chú thuật hồi chiến 2</a>
          <a href="#"><img class="image-item" src="{{ asset('homepage/img/pokemon.jpg') }}" alt="img-17" />Pokémon</a>
          <a href="#"><img class="image-item" src="{{ asset('homepage/img/solo.jpg') }}" alt="img-18" />Tôi thăng cấp một mình</a>
          <a href="#"><img class="image-item" src="{{ asset('homepage/img/DemonSlayer.jpg') }}" alt="img-19" />Thanh gươm diệt quỷ: Làng thợ rèn</a>
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

  <nav class="footer" style="font-weight: bold;">
    <div class="login-footer">
      <b class="desc">
        BoyGangX
      </b>
      <div class="grid">
        <div class="columm">
          <ul class="footer-list">
            <a class="ques">Bạn có câu hỏi? Liên hệ với chúng tôi.</a>
            <a href="https://www.facebook.com/groups/412924241643512"><i class="fb fa-brands fa-square-facebook"></i></a>
            <a href="https://discord.gg/8hDJdRpR"><i class="discord fa-brands fa-discord"></i></a>
            <a href="#"><i class="email fa-solid fa-envelope"></i></a>
            <li class="footer-item">
              <a href="/">Câu hỏi thường gặp</a>
              <a href="/">Trung tâm trợ giúp</a>
              <a href="/">Điều khoản sử dụng</a>
            </li>
          </ul>

        </div>
        <div class="columm"></div>
        <ul class="footer-list">
          <li class="footer-item">
            <a href="/">Tùy chọn cookie</a>
            <a href="/">Thông tin doanh nghiệp</a>
            <a href="/">Quyền riêng tư</a>
          </li>

        </ul>
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