 <?php
   $this->load->view('front/common/header.php');
?>
   <!--coming soon area start-->
    <div class="coming_soon_area js-ripples">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="coming_soon_container">
                        <div class="coming_soon_logo text-center">
                            <a href="#"><img src="assets/img/logo/logo-Reid4.png" alt=""></a>
                        </div>
                      
                        <div class="coming_soon_title">
                            <h2>We are coming soon</h2>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                        </div>
                       <div class="coming_soon_timing">
                            <div data-countdown="2021/12/15"></div>
                        </div>
                        

                        <div class="coming_soon_newsletter">
                            <h3>Subscribe for our next update</h3>
                            <div class="subscribe_form">
                                <form id="mc-form" class="mc-form footer-newsletter" >
                                    <input id="mc-email" type="email" autocomplete="off" placeholder="Enter your e-mial..." />
                                    <button id="mc-submit">Subscribe</button>
                                </form>
                                <!-- mailchimp-alerts Start -->
                                <div class="mailchimp-alerts text-centre">
                                    <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                                    <div class="mailchimp-success"></div><!-- mailchimp-success end -->
                                    <div class="mailchimp-error"></div><!-- mailchimp-error end -->
                                </div><!-- mailchimp-alerts end -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
    </div>
    <!--coming soon area end-->
<?php
	$this->load->view('front/common/footer.php');

?>