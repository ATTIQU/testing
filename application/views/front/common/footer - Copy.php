
<footer>
  <div class="container-fluid mt-5 px-0" style="overflow: hidden;">
    <div class="row footbg pt-2 pb-2 justify-content-between">
      <div class="col-md-8 d-flex dspl my-auto">
            <a class="nav-link text-white" href="<?=base_url()?>">Home</a>
            <a class="nav-link text-white" href="<?=base_url()?>Front/products">Products</a>
            <a class="nav-link text-white" href="#about">About Us</a>
            <a class="nav-link text-white" href="<?=base_url()?>Front/news">News</a>
            <a class="nav-link text-white" href="#contact-us">Contact Us</a>
            <a class="nav-link text-white" href="<?=base_url()?>Front/faqs">FAQ</a>
            <a class="nav-link text-white" href="<?=base_url()?>Front/terms">Terms & Conditions</a>
      </div>
      <div class="col-md-4 my-auto text-center">
        <h5 class="font-weight-bold">Follow Us</h5>
        <div class="d-flex ml-2 mr-2 justify-content-center">
          <a class="text-white" href="#"><i class="fa-2x fab fa-facebook"></i></a>
          <a class="ml-auto text-white" href="#"><i class="fa-2x fab fa-twitter"></i></a>
          <a class="ml-auto text-white" href="#"><i class="fa-2x fab fa-instagram"></i></a>
          <a class="ml-auto text-white" href="#"><i class="fa-2x fab fa-pinterest-p	"></i></a>
          <a class="ml-auto text-white" href="#"><i class="fa-2x fab fa-whatsapp	"></i></a>
        </div>
      </div>
    </div>
	  <?php

 $copyright = $this->FrontM->get_setting("copyright");

?>
    <div class="row bg-black pt-1 pb-1">
      <div class="col-md-12 text-center text-white mt-1">
        <h5><?=$copyright?></h5>
      </div>
    </div>
  </div>
</footer>
<!-- jQuery -->
<script src="/assets/front/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/assets/front/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="/assets/front/dist/js/adminlte.min.js"></script>
</body>
</html>