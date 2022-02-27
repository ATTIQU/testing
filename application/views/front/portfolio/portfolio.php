 <?php
   $this->load->view('front/common/header.php');
?>
  
   
    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area">
        <div class="container">   
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
							
                            <li><a href="<?=base_url()?>">home</a></li>
                            <li>/</li>
                            <li>portfolio</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>         
    </div>
    <!--breadcrumbs area end-->
    
    <!--portfolio section -->
    <div class="portfolio_section_area">
        <div class="container">
            <div class="portfolio_button">
                <div class="row">
                    <div class="col-12">

                        <button class="active" data-filter="*">all</button>
                        <button data-filter=".company">Company</button>
                        <button data-filter=".computers">Computers</button>
                        <button data-filter=".general">General</button>
                        <button data-filter=".hipster">Hipster</button>
                        <button data-filter=".food">Just Food</button>

                    </div>
                </div>
            </div>
            <div class="row portfolio_gallery">
                <div class="col-lg-4 col-md-4 col-sm-6 gird_item computers general">
                    <div class="single_portfolio_inner">
                        <div class="portfolio_thumb">
                            <a href="#"><img src="/assets/front/img/portfolio/portfolio1.jpg" alt=""></a>
                            <div class="portfolio_popup">
                                <a class="port_popup" href="/assets/front/img/portfolio/portfolio1.jpg"><i class="fa fa-search"></i></a>
                            </div>
                            <div class="portfolio__content">
                                <h3><a href="<?=base_url()?>Front/portfolio_details">looked up one of the more</a></h3>
                            </div>
                        </div>
                        
                    </div>

                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 gird_item computers food">
                    <div class="single_portfolio_inner">
                        <div class="portfolio_thumb">
                            <a href="#"><img src="/assets/front/img/portfolio/portfolio2.jpg" alt=""></a>
                            <div class="portfolio_popup">
                                <a class="port_popup" href="/assets/front/img/portfolio/portfolio2.jpg"><i class="fa fa-search"></i></a>
                            </div>
                            <div class="portfolio__content">
                                <h3><a href="portfolio-details.html">Coffee & Cookie Time</a></h3>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 gird_item company general">
                    <div class="single_portfolio_inner">
                        <div class="portfolio_thumb">
                            <a href="#"><img src="/assets/front/img/portfolio/portfolio3.jpg" alt=""></a>
                            <div class="portfolio_popup">
                                <a class="port_popup" href="/assets/front/img/portfolio/portfolio3.jpg"><i class="fa fa-search"></i></a>
                            </div>
                            <div class="portfolio__content">
                                <h3><a href="portfolio-details.html">accompanied by English</a></h3>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 gird_item computers hipster">
                    <div class="single_portfolio_inner">
                        <div class="portfolio_thumb">
                            <a href="#"><img src="/assets/front/img/portfolio/portfolio4.jpg" alt=""></a>
                            <div class="portfolio_popup">
                                <a class="port_popup" href="/assets/front/img/portfolio/portfolio4.jpg"><i class="fa fa-search"></i></a>
                            </div>
                            <div class="portfolio__content">
                                <h3><a href="portfolio-details.html">There are many variations</a></h3>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 gird_item computers general food">
                    <div class="single_portfolio_inner">
                        <div class="portfolio_thumb">
                            <a href="#"><img src="/assets/front/img/portfolio/portfolio5.jpg" alt=""></a>
                            <div class="portfolio_popup">
                                <a class="port_popup" href="/assets/front/img/portfolio/portfolio5.jpg"><i class="fa fa-search"></i></a>
                            </div>
                            <div class="portfolio__content">
                                <h3><a href="portfolio-details.html">passage of Lorem Ipsum</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 gird_item company general hipster">
                    <div class="single_portfolio_inner">
                        <div class="portfolio_thumb">
                            <a href="#"><img src="/assets/front/img/portfolio/portfolio7.jpg" alt=""></a>
                            <div class="portfolio_popup">
                                <a class="port_popup" href="/assets/front/img/portfolio/portfolio7.jpg"><i class="fa fa-search"></i></a>
                            </div>
                            <div class="portfolio__content">
                                <h3><a href="portfolio-details.html">looked up one of the more</a></h3>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 gird_item computers company food">
                    <div class="single_portfolio_inner">
                        <div class="portfolio_thumb">
                            <a href="#"><img src="/assets/front/img/portfolio/portfolio8.jpg" alt=""></a>
                            <div class="portfolio_popup">
                                <a class="port_popup" href="/assets/front/img/portfolio/portfolio8.jpg"><i class="fa fa-search"></i></a>
                            </div>
                            <div class="portfolio__content">
                                <h3><a href="portfolio-details.html">Coffee & Cookie Time</a></h3>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 gird_item computers general Hipster">
                    <div class="single_portfolio_inner">
                        <div class="portfolio_thumb">
                            <a href="#"><img src="/assets/front/img/portfolio/portfolio10.jpg" alt=""></a>
                            <div class="portfolio_popup">
                                <a class="port_popup" href="/assets/front/img/portfolio/portfolio10.jpg"><i class="fa fa-search"></i></a>
                            </div>
                            <div class="portfolio__content">
                                <h3><a href="portfolio-details.html">passage of Lorem Ipsum</a></h3>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 gird_item company general hipster food">
                    <div class="single_portfolio_inner">
                        <div class="portfolio_thumb">
                            <a href="#"><img src="/assets/front/img/portfolio/portfolio11.jpg" alt=""></a>
                            <div class="portfolio_popup">
                                <a class="port_popup" href="/assets/front/img/portfolio/portfolio11.jpg"><i class="fa fa-search"></i></a>
                            </div>
                            <div class="portfolio__content">
                                <h3><a href="portfolio-details.html">Coffee & Cookie Time</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 gird_item computers company hipster food">
                    <div class="single_portfolio_inner">
                        <div class="portfolio_thumb">
                            <a href="#"><img src="/assets/front/img/portfolio/portfolio7.jpg" alt=""></a>
                            <div class="portfolio_popup">
                                <a class="port_popup" href="/assets/front/img/portfolio/portfolio7.jpg"><i class="fa fa-search"></i></a>
                            </div>
                            <div class="portfolio__content">
                                <h3><a href="portfolio-details.html">accompanied by English</a></h3>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 gird_item computers company general food">
                    <div class="single_portfolio_inner">
                        <div class="portfolio_thumb">
                            <a href="#"><img src="/assets/front/img/portfolio/portfolio1.jpg" alt=""></a>
                            <div class="portfolio_popup">
                                <a class="port_popup" href="/assets/front/img/portfolio/portfolio1.jpg"><i class="fa fa-search"></i></a>
                            </div>
                            <div class="portfolio__content">
                                <h3><a href="portfolio-details.html">passage of Lorem Ipsum</a></h3>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 gird_item computers company general hipster">
                    <div class="single_portfolio_inner">
                        <div class="portfolio_thumb">
                            <a href="#"><img src="/assets/front/img/portfolio/portfolio2.jpg" alt=""></a>
                            <div class="portfolio_popup">
                                <a class="port_popup" href="/assets/front/img/portfolio/portfolio2.jpg"><i class="fa fa-search"></i></a>
                            </div>
                            <div class="portfolio__content">
                                <h3><a href="portfolio-details.html">Coffee & Cookie Time</a></h3>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--portfolio section end-->
    
<?php
	$this->load->view('front/common/footer.php');

?>