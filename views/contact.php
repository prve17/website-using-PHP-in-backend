<?php 
require dirname(__FILE__).'\header.php';
?>

<!-- banner section  -->
<div class="container-fluid con">
  <h1 class="text-center">Get in</h1>
  <h2 class="text-center">Touch</h2>
</div>
<!-- ===========get in touch form ======== -->
<div class="container contact-p">
  <div class="row">
    <div class="col-md-12 contact-page">
      <h1>We craft perfect solutions for your project.</h1>
      <p class="text-center">Get in touch, and our experts will reach out to you soon.</p>
    </div>
      <div class="col-md-12">
        <form>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label>Your Name</label>
              <input type="text" name="uname" class="form-control" required>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label>Company Name</label>
              <input type="text" name="uname" class="form-control" required>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label>Email</label>
              <input type="text" name="uname" class="form-control" required>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label>Phone Number</label>
              <input type="text" name="uname" class="form-control" required>
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <label>Message</label>
              <textarea rows="5" class="form-control"></textarea>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <input type="submit" class="form-control" value="Get a quote">
            </div>
          </div>
        </div>
        </form>
      </div>
  </div>
</div>
<!-- ==========End of get in touch form === -->
<!-- ============ address section ========= -->
<div class="container address-section" style="background: linear-gradient(to right,#068793,#0a2e59);">
  <div class="row">
    <div class="col-md-4 add-phone">
      <div>
        <p class="text-center"><i class="fa fa-phone"></i></p>
        <h3 class="text-center text-danger">Call Us</h3>
        <h5 class="text-center">+91 <a href="tel:8709355372" class="text-white">8709355372</a> <a href="tel:9508221606" class="text-white">9508221606</a></h5>
      </div>
    </div>
    <div class="col-md-4 add-phone">
      <div>
        <p class="text-center"><i class="fa fa-envelope"></i></p>
        <h3 class="text-center text-danger">Email</h3>
        <h5 class="text-center"><a href="#" class="text-white">appcubicsoftech@gmail.com</a></h5>
      </div>
    </div>
    <div class="col-md-4 add-phone border-0">
      <div>
        <p class="text-center"><i class="fa fa-map-marker"></i></p>
        <h3 class="text-center text-danger">Address</h3>
        <h5 class="text-center">Kanpur, Uttar Pradesh (UP)</h5>
      </div>
    </div>
    
  </div>
</div>
<!-- ===========end of address section ==== -->
<!-- ============office address section ======= -->
<div class="container">
  <div class="row">
    <div class="col-md-12 office-head">
      <h1 class="text-center">Our Footprints across Three Different Time Zones</h1>
    </div>
    <div class="col-md-6">
      <div class="office1">
        <img src="<?php echo url.'assets/images/canada.png' ?>" class="d-block mx-auto pt-4">
        <h1 class="text-center mt-3">Bihar</h1>
        <p class="text-center mt-5">Bihar</p>
        <h6 class="text-center mt-3"><a href="tel:8709355372">+91 8709355372</a></h6>
        <h6 class="text-center office-mail mt-3">appcubicsofttech@gmail.com</h6>
      </div>
    </div>
    <div class="col-md-6">
      <div class="office1">
        <img src="<?php echo url.'assets/images/india.png' ?>" class="d-block mx-auto pt-4">
        <h1 class="text-center mt-3">Uttar Pradesh (UP)</h1>
        <h5 class="text-center"><span>HeadQuarters</span></h5>
        <p class="text-center mt-3">Kanpur, Uttar Pradesh (UP)</p>
        <h6 class="text-center mt-3"><a href="tel:9508221606">+91 9508221606</a></h6>
        <h6 class="text-center office-mail mt-3">appcubicsofttech@gmail.com</h6>
      </div>
    </div>
  </div>
</div>
<!-- ============End of office address section  -->
<?php 
require dirname(__FILE__).'\footer.php';
 ?>