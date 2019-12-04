<?php include('component/header.php') ?>
<div class="join-our-team">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6 pl-0"><div class="join-our-team-img"></div></div>
      <div class="col-md-5 p-5">
        <h1 class="text-title">Join Our<br>Team</h1>
        <i class="underline"></i>

        <div class="content mt-3 mb-4">
          We at PT. Pan Rama are constantly on the lookout for talent, whether it is at our Marketing office in Jakarta, or at one of our Factories in Solo.  We believe in providing the opportunity & platform for individuals to step up within our organization and achieve mutual growth.
          We encourage creativity and independence, and are objective driven in our management approach to pave the path to growth into leadership roles. Interested candidates can either upload their application below or e-mail us at : recruitment@panrama.com
        </div>
      </div>
    </div>
  </div>
  
  <div class="bg-grey">
    <div class="container py-5">
      <h1 class="text-title">Openings</h1>
      <i class="underline"></i>

      <div class="row my-5">
        <div class="col">
          <img src="assets/images/joinOurTeam/img2.png" width="100%" />
        </div>
        <div class="col">
          <form>
            <div class="form-group">
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Full Name *" required>
            </div>
            
            <div class="form-group">
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email *" required>
            </div>
            
            <div class="form-group">
              <select class="form-control" id="exampleFormControlSelect1" required>
                <option value="">Location *</option>
                <option value="jakartaSelatan">Jakarta Selatan</option>
                <option value="jakartaPusat">Jakarta Pusat</option>
                <option value="jakartaBarat">Jakarta Barat</option>
                <option value="jakartaTimur">Jakarta Timur</option>
                <option value="jakartaUtara">Jakarta Utara</option>
              </select>
            </div>

            <div class="form-group">            
              <select class="form-control" id="exampleFormControlSelect2" required>
                <option value="">Department *</option>
                <option value="development">Development</option>
                <option value="product">Product</option>
              </select>
            </div>

            <div class="form-group">
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Your Message *" required></textarea>
            </div>

            <div class="form-group">
              <label for="file-upload" class="custom-file-upload">
                Upload Document
              </label> * Max 5mb
              <input type="file" class="form-control-file" id="file-upload" required>
            
            </div>

            <button type="submit" class="btn btn-primary">Send</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  

<div>
<?php include('component/footer.php') ?>