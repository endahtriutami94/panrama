<!-- Start Footer -->
<div class="bg-dark-blue footer py-5">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <ul>
          <li><a href="about.php">About Us</a></li>
          <li><a href="ourFactories.php">Our Factories</a></li>
          <li><a href="ourProducts.php">Products</a></li>
        </ul>
      </div>
      <div class="col-md-4">
        <ul>
          <li><a href="csr.php">CSR</a></li>
          <li><a href="joinOurTeam.php">Join Our Team</a></li>
          <li><a href="contactUs.php">Contact Us</a></li>
        </ul>
      </div>
      <div class="col-md-4">
        <ul class=" d-flex flex-row justify-content-end pt-3">
          <li><a href="https://www.instagram.com"><img src="assets/images/whatsapp.png" /></a></li>
          <li class="px-4"><a href="https://www.youtube.com"><img src="assets/images/youtube.png" /></a></li>
          <li><a href="https://www.instagram.com"><img src="assets/images/instagram.png" /></a></li>
        </ul>
      </div>
    </div>

    <p class="text-center mb-0 mt-5">© Idealights Indonesia</p>
  </div>
</div>
<!-- End Footer -->
</body>

<script type="text/javascript" src="./assets/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="./assets/js/swiper.min.js"></script>
<!-- <script src="https://unpkg.com/swiper/js/swiper.min.js"></script> -->
<script>
  var swiper = new Swiper('.swiper-container', {
    pagination: {
      el: '.swiper-pagination',
      dynamicBullets: true,
    },
  });
  var galleryThumbs = new Swiper('.gallery-thumbs', {
    spaceBetween: 10,
    slidesPerView: 4,
    freeMode: true,
    watchSlidesVisibility: true,
    watchSlidesProgress: true,
  });
  var galleryTop = new Swiper('.gallery-top', {
    spaceBetween: 10,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    thumbs: {
      swiper: galleryThumbs
    }
  });
</script>
</html>
