 <?php
   $this->load->view('front/common/header.php');
?>

<div class="container-fluid px-0" style="overflow: hidden;">
  <div id="venue">
        <div class="row animate-in-down justify-content-center">
            <div class="col-md-5 my-auto pl-3">
                <h1 class="font-weight-bold txtcolr xtrabold" style="font-size: 5vw;">Latest News</h1>
            </div>
            <div class="col-md-7 align-self-center text-color dspnone">
              <img src="/assets/front/dist/img/sliderimg1.png" class="img-fluid d-block">
            </div>
        </div>
    </div>
</div>

<div class="container mt-5">
  <div class="row">
	  <?php
	  //$news=$this->db->get_where('news')->result();
			for($i;$i<=5;$i++){
				//user_profile($item->image)
	  ?>
    <div class="col-md-12 mt-3">
      <div class="card h-100 p-3">
        <div class="row">
          <div class="col-md-5 my-auto p-3">
            <img src="" class="img-fluid">
          </div>
          <div class="col-md-7 my-auto">
            <small class="text-muted">22/10/3232</small>
			  <a href="/Front/news_detail"> <h3 class="txtcolr">Hello this is title</h3></a>
            <p><?=$item->description?></p>
            <a href="/Front/news_detail" class="txtcolr">Read more</a>
          </div>
        </div>
      </div>
    </div>
    <?php }?>
  </div>
  
</div>

<?php
	$this->load->view('front/common/footer.php');

?>