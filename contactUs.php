<?php include('component/header.php') ?>

<div class="contact-us container">
  <div class="d-flex align-items-center my-5">
    <div class="mr-5"><img src="assets/images/contactUs/img1.png" width="631px" height="537px" /></div>

    <div class="custom-width-contact">
      <h1 class="text-title mb-4">Contact <span>Us</span></h1>

      <form>
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Full Name *" required>
        </div>
        
        <div class="form-group">
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email *" required>
        </div>

        <div class="form-group">
          <input type="text" class="form-control" placeholder="Company / Institution">
        </div> 

        <div class="form-group">
          <input type="number" class="form-control" placeholder="Contact Number *" required>
        </div> 

        <div class="form-group">
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Your Message *" required></textarea>
        </div>


        <button type="submit" class="btn btn-primary">Send</button>
      </form>
    </div>
  </div>

  <div>
    <div class="mb-5">
      <h1 class="text-title text-center">Our <span>Locations</span></h1>
      <i class="underline text-center my-0 mx-auto"></i>
    </div>
  
    <div class="d-flex justify-content-center mb-3 locations">
      <div class="d-flex flex-column bg-dark-blue">
        <img src="assets/images/contactUs/map.png" width="100%" />
          <div class="p-4 content-locations">
            <p class="locations-title mb-3">PT. Pan Rama Vista Garment Industries<br>Marketing Office (Jakarta) :</p>

            <p class="mb-3">JL. Bisma Raya Blok A No.70<br>Sunter Agung Podomoro<br>Jakarta Utara 14350 – Indonesia</p>

            <p class="mb-3">
              <span>Telp</span>: (62-21) 6503510<br>
              <span>Fax</span>: (62-21) 6503511<br>
              <span>Email</span>: jkt@panrama.com
            </p>

            <div class="d-flex map-link-box">
              <img src="assets/images/contactUs/icon-map.png" height="20px" />
              <a href="https://www.google.com/maps" class="ml-2 map-link">Find on Google Maps</a>
            </div>
          </div>
      </div>

      <div class="mx-3">
        <div class="d-flex flex-column bg-dark-blue">
          <img src="assets/images/contactUs/map.png" width="100%" />
          <div class="p-4 content-locations">
            <p class="locations-title mb-3">Factory 1 (PRV 1) :</p>

            <p class="mb-3">Dukuh Pinggir RT05 RW07<br>Desa Telukan, Kecamatan Grogol<br>Sukoharjo 57552, Solo – Indonesia</p>

            <p class="mb-3">
              <span>Telp</span>: (62-271) 624301 / 624302
            </p>

            <div class="d-flex map-link-box">
              <img src="assets/images/contactUs/icon-map.png" height="20px" />
              <a href="https://www.google.com/maps" class="ml-2 map-link">Find on Google Maps</a>
            </div>
          </div>
        </div>
      </div>
      
      

      <div class="d-flex flex-column bg-dark-blue">
        <img src="assets/images/contactUs/map.png" width="100%" />
          <div class="p-4 content-locations">
            <p class="locations-title mb-3">Factory 1 (PRV 1) :</p>

            <p class="mb-3">Dukuh Pinggir RT05 RW07<br>Desa Telukan, Kecamatan Grogol<br>Sukoharjo 57552, Solo – Indonesia</p>

            <p class="mb-3"><span>Telp</span>: (62-271) 624301 / 624302</p>

            <div class="d-flex map-link-box">
              <img src="assets/images/contactUs/icon-map.png" height="20px" />
              <a href="https://www.google.com/maps" class="ml-2 map-link">Find on Google Maps</a>
            </div>
          </div>
      </div>
      
    </div>
  </div>
</div>

<?php include('component/footer.php') ?>