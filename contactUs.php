<?php include('component/header.php') ?>

<div class="contact-us container">
  <div class="d-flex align-items-center my-5">
    <div class="mr-5"><img src="assets/images/contactUs/img1.png" width="731px" height="637px" /></div>

    <div class="w-50">
      <h1 class="text-title">Contact Us</h1>

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
    <h1 class="text-title">Our Locations</h1>
    <i class="underline"></i>

    <div class="d-flex justify-content-center mb-3 bg-dark-blue">
      <div class="d-flex flex-column">
        <img src="assets/images/contactUs/map.png" width="100%" />
          <div class="p-4">
            <p>PT. Pan Rama Vista Garment Industries</p>
            <p>Marketing Office (Jakarta) :</p>

            <p>JL. Bisma Raya Blok A No.70</p>
            <p>Sunter Agung Podomoro</p>
            <p>Jakarta Utara 14350 – Indonesia</p>

            <p>Telp   : (62-21) 6503510</p>
            <p>Fax    : (62-21) 6503511</p>
            <p>Email : jkt@panrama.com</p>
          </div>
      </div>

      <div class="mx-3">
        <div class="d-flex flex-column bg-dark-blue">
          <img src="assets/images/contactUs/map.png" width="100%" />
          <div class="p-4">
            <p>Factory 1 (PRV 1) :</p>

            <p>Dukuh Pinggir RT05 RW07</p>
            <p>Desa Telukan, Kecamatan Grogol</p>
            <p>Sukoharjo 57552, Solo – Indonesia</p>

            <p>Telp : (62-271) 624301 / 624302</p>
          </div>
        </div>
      </div>
      
      

      <div class="d-flex flex-column bg-dark-blue">
        <img src="assets/images/contactUs/map.png" width="100%" />
          <div class="p-4">
            <p>Factory 1 (PRV 1) :</p>

            <p>Dukuh Pinggir RT05 RW07</p>
            <p>Desa Telukan, Kecamatan Grogol</p>
            <p>Sukoharjo 57552, Solo – Indonesia</p>

            <p>Telp : (62-271) 624301 / 624302</p>
          </div>
      </div>
      
    </div>
  </div>
</div>

<?php include('component/footer.php') ?>