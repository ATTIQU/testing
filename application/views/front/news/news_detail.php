 <?php
   $this->load->view('front/common/header.php');
?>

<?php /*?><div class="container mt-5">
	<div class="row">
    <div class="col-md-9">
							 <?php
						$id=$this->uri->segment(3);
						$news=$this->db->get_where('news',array('id'=>$id))->row();
						?>
      <h1 class="txtcolr font-weight-bold hfont"><?php if(isset($news->title))echo $news->title; else  ''; ?></h1>
			
      <img src="<?=user_profile($news->image)?>" class="img-fluid img-thumbnail d-block mt-3 mb-5 w-100">
      <small class="text-muted"><?=$news->date?></small>
      <h4 class="font-weight-bold txtcolr mt-5 mb-3">Description</h4>
      <p class="txtcolr" style="color:black">
<?php if(isset($news->description))echo $news->description; else  ''; ?>
      </p>
    </div>
    <div class="col-md-3">
      <h3 class="txtcolr font-weight-bold hfont">Latest News</h3>
		 <?php
	  $news=$this->db->get_where('news')->result();
			foreach($news as $item){
	  ?>
      <div class="card mt-3 p-1">
        <div class="d-flex">
          <div class="col-md-5 my-auto">
            <img src="<?=user_profile($item->image)?>" class="img-fluid d-block">
          </div>
          <div class="col-md-7 my-auto">
           <a href="/Front/news_detail/<?=$item->id?>"> <p class="txtcolr" style="color:black">
              <?=$item->title?>
			   </p></a>
          </div>
        </div>
      </div>
      <hr>
		<?php }?>
     <?php /*?> <div class="card mt-3 p-1">
        <div class="d-flex">
          <div class="col-md-5 my-auto">
            <img src="/assets/front/dist/img/bag.jpg" class="img-fluid d-block">
          </div>
          <div class="col-md-7 my-auto" >
            <p class="txtcolr" style="color:black">
              This is a tutorial on how to make multiple inserts.
            </p>
          </div>
        </div>
      </div>
      <hr>
      <div class="card mt-3 p-1">
        <div class="d-flex">
          <div class="col-md-5 my-auto">
            <img src="/assets/front/dist/img/books.jpeg" class="img-fluid d-block">
          </div>
          <div class="col-md-7 my-auto" >
            <p class="txtcolr" style="color:black">
              This is a tutorial on how to make multiple inserts.
            </p>
          </div>
        </div>
      </div>
      <hr>
      <div class="card mt-3 p-1">
        <div class="d-flex">
          <div class="col-md-5 my-auto">
            <img src="/assets/front/dist/img/pens.jpg" class="img-fluid d-block">
          </div>
          <div class="col-md-7 my-auto">
            <p class="txtcolr" style="color:black">
              This is a tutorial on how to make multiple inserts.
            </p>
          </div>
        </div>
      </div>
      <hr>
      <div class="card mt-3 p-1">
        <div class="d-flex">
          <div class="col-md-5 my-auto">
            <img src="/assets/front/dist/img/geometry.png" class="img-fluid d-block">
          </div>
          <div class="col-md-7 my-auto">
            <p class="txtcolr" style="color:black">
              This is a tutorial on how to make multiple inserts.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
 */?>



<?php
	$this->load->view('front/common/footer.php');

?>