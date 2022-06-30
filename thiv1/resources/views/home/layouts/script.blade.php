<script src="https://kit.fontawesome.com/79e1832a3e.js" crossorigin="anonymous"></script>
  <script defer src="https://unpkg.com/alpinejs@3.2.4/dist/cdn.min.js"></script>
  <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <script src="https://cdn.tailwindcss.com"></script>
  <script defer src="https://unpkg.com/alpinejs@3.2.4/dist/cdn.min.js"></script>
  <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <script type="text/javascript">
    var loader = document.querySelector('.loader')
    var content = document.querySelector('.content')
    window.addEventListener('load', function() {
      loader.style.display = "none"
      content.style.display = "block"
    })
    
    //loading
    $(document).ready(function() {
      $('.your-class').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 4000,
        arrows: false
      });
    });
  </script>