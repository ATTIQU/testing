 <?php
   $this->load->view('front/common/header.php');
?>
   
     
    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area product_bread">
        <div class="container">   
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="<?=base_url()?>">home</a></li>
                            <li>/</li>
                            <li>product sidebar</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>         
    </div>
    <!--breadcrumbs area end-->
    
    <!--product details start-->
    <div class="product_details product_sidebar">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-12">
                   <!--sidebar widget start-->
                     <div class="sidebar_widget">
                        <div class="widget_list widget_filter">
                            <h2>Filter by price</h2>
                            <form action="#"> 
                                <div id="slider-range"></div>   
                                <button type="submit">Filter</button>
                                <input type="text" name="text" id="amount" />   

                            </form> 
                        </div>
                        <div class="widget_list widget_categories">
                            <h2>Product categories</h2>
                            <ul>
                                <li><a href="#">Categories1 <span>6</span></a> </li>
                                <li><a href="#"> Categories2 <span>10</span></a> </li>
                                <li><a href="#">Categories3 <span>4</span></a> </li>
                                <li><a href="#"> Categories4 <span>4</span></a> </li>
                                <li><a href="#">Categories5 <span>3</span></a> </li>

                            </ul>
                        </div>

                        <div class="widget_list widget_categories">
                            <h2>Manufacturer</h2>
                            <ul>
                                <li><a href="#">Calvin Klein <span>6</span></a> </li>
                                <li><a href="#"> Chanel <span>10</span></a> </li>
                                <li><a href="#">Christian Dior <span>4</span></a> </li>
                                <li><a href="#"> ferragamo <span>4</span></a> </li>
                                <li><a href="#">hermes <span>10</span></a> </li>
                                <li><a href="#">louis vuitton <span>8</span></a> </li>
                                <li><a href="#">Tommy Hilfiger <span>7</span></a> </li>
                                <li><a href="#">Versace <span>6</span></a> </li>

                            </ul>
                        </div>
                        <div class="widget_list widget_categories">
                            <h2>Select By Color</h2>
                            <ul>
                                <li><a href="#">Black <span>6</span></a> </li>
                                <li><a href="#"> Blue <span>10</span></a> </li>
                                <li><a href="#">Brown <span>4</span></a> </li>
                                <li><a href="#"> Green <span>4</span></a> </li>
                                <li><a href="#">Pink <span>7</span></a> </li>
                                <li><a href="#">White<span>8</span></a> </li>
                                <li><a href="#">Yellow <span>5</span></a> </li>

                            </ul>
                        </div>
                        <div class="widget_list tag-cloud">
                            <h2>Popular Tags</h2>
                            <div class="tag_widget">
                                <ul>
                                    <li><a href="#">Creams</a></li>
                                    <li><a href="#">Eyebrow Pencil</a></li>
                                    <li><a href="#">Eyeliner</a></li>
                                    <li><a href="#">Eye Shadow</a></li>
                                    <li><a href="#">Lotions</a></li>
                                    <li><a href="#">Mascara</a></li>
                                    <li><a href="#">Oils</a></li>
                                    <li><a href="#">Powders</a></li>
                                    <li><a href="#">Shampoos</a></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                    <!--sidebar widget end-->
                </div>
                <div class="col-lg-9 col-md-12">
                    <div class="product_right_sidebar">
                        <div class="row">
                            <div class="col-lg-5 col-md-6">
                               <div class="product-details-tab">

                                    <div id="img-1" class="zoomWrapper single-zoom">
                                        <a href="#">
                                            <img id="zoom1" src="/assets/front/img/product/product5.jpg" data-zoom-image="/assets/front/img/product/product5.jpg" alt="big-1">
                                        </a>
                                    </div>

                                    <div class="single-zoom-thumb">
                                        <ul class="s-tab-zoom owl-carousel single-product-active" id="gallery_01">
                                            <li>
                                                <a href="#" class="elevatezoom-gallery active" data-update="" data-image="/assets/front/img/product/product4.jpg" data-zoom-image="/assets/front/img/product/product4.jpg">
                                                    <img src="/assets/front/img/s-product/product3.jpg" alt="zo-th-1"/>
                                                </a>

                                            </li>
                                            <li >
                                                <a href="#" class="elevatezoom-gallery active" data-update="" data-image="/assets/front/img/product/product6.jpg" data-zoom-image="/assets/front/img/product/product6.jpg">
                                                    <img src="/assets/front/img/s-product/product.jpg" alt="zo-th-1"/>
                                                </a>

                                            </li>
                                            <li >
                                                <a href="#" class="elevatezoom-gallery active" data-update="" data-image="/assets/front/img/product/product8.jpg" data-zoom-image="/assets/front/img/product/product8.jpg">
                                                    <img src="/assets/front/img/s-product/product2.jpg" alt="zo-th-1"/>
                                                </a>

                                            </li>
                                            <li >
                                                <a href="#" class="elevatezoom-gallery active" data-update="" data-image="/assets/front/img/product/product2.jpg" data-zoom-image="/assets/front/img/product/product2.jpg">
                                                    <img src="/assets/front/img/s-product/product4.jpg" alt="zo-th-1"/>
                                                </a>

                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-6">
                                <div class="product_d_right">
                                   <form action="#">

                                        <h1>Fusce dolor enim</h1>
                                        <div class=" product_ratting">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li class="review"><a href="#"> 1 review </a></li>
                                                <li class="review"><a href="#"> Write a review </a></li>
                                            </ul>
                                        </div>
                                        <div class="product_price">
                                            <span class="current_price">£70.00</span>
                                        </div>
                                        <div class="product_desc">
                                            <p>eget velit. Donec ac tempus ante. Fusce ultricies massa massa. Fusce aliquam, purus eget sagittis vulputate, sapien libero hendrerit est, sed commodo augue nisi non neque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempor, lorem et placerat vestibulum, metus nisi posuere nisl, in </p>
                                        </div>

                                        <div class="product_variant color">
                                            <h3>color</h3>
                                            <select class="niceselect_option" id="color" name="produc_color">
                                                <option selected value="1">choose in option</option>        
                                                <option value="2">choose in option2</option>              
                                                <option value="3">choose in option3</option>              
                                                <option value="4">choose in option4</option>              
                                            </select>   
                                        </div>
                                        <div class="product_variant size">
                                            <h3>size</h3>
                                            <select class="niceselect_option" id="color1" name="produc_color">
                                                <option selected value="1">size</option>        
                                                <option value="2">x</option>              
                                                <option value="2">xl</option>              
                                                <option value="3">md</option>              
                                                <option value="4">xxl</option>              
                                                <option value="4">s</option>              
                                            </select> 
                                        </div>
                                        <div class="product_variant quantity">
                                            <label>quantity</label>
                                            <input min="1" max="100" value="1" type="number">
                                            <button class="button" type="submit">add to cart</button>  
                                            
                                        </div>
                                        <div class=" product_d_action">
                                           <ul>
                                               <li><a href="#" title="Add to wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i> Add to Wish List</a></li>
                                               <li><a href="#" title="Add to Compare"><i class="fa fa-sliders" aria-hidden="true"></i> Compare this Product</a></li>
                                           </ul>
                                        </div>

                                    </form>
                                    <div class="priduct_social">
                                        <h3>Share on:</h3>
                                        <ul>
                                            <li><a href="#"><i class="fa fa-rss"></i></a></li>           
                                            <li><a href="#"><i class="fa fa-vimeo"></i></a></li>           
                                            <li><a href="#"><i class="fa fa-tumblr"></i></a></li>           
                                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>        
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>        
                                        </ul>      
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!--product info start-->
                    <div class="product_d_info">  
                        <div class="product_d_inner">   
                            <div class="product_info_button">    
                                <ul class="nav" role="tablist">
                                    <li >
                                        <a class="active" data-bs-toggle="tab" href="#info" role="tab" aria-controls="info" aria-selected="false">More info</a>
                                    </li>
                                    <li>
                                         <a data-bs-toggle="tab" href="#sheet" role="tab" aria-controls="sheet" aria-selected="false">Data sheet</a>
                                    </li>
                                    <li>
                                       <a data-bs-toggle="tab" href="#reviews" role="tab" aria-controls="reviews" aria-selected="false">Reviews</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="info" role="tabpanel" >
                                    <div class="product_info_content">
                                        <p>Fashion has been creating well-designed collections since 2010. The brand offers feminine designs delivering stylish separates and statement dresses which have since evolved into a full ready-to-wear collection in which every item is a vital part of a woman's wardrobe. The result? Cool, easy, chic looks with youthful elegance and unmistakable signature style. All the beautiful pieces are made in Italy and manufactured with the greatest attention. Now Fashion extends to a range of accessories including shoes, hats, belts and more!</p>
                                    </div>    
                                </div>

                                <div class="tab-pane fade" id="sheet" role="tabpanel" >
                                    <div class="product_d_table">
                                       <form action="#">
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td class="first_child">Compositions</td>
                                                        <td>Polyester</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="first_child">Styles</td>
                                                        <td>Girly</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="first_child">Properties</td>
                                                        <td>Short Dress</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </form>
                                    </div>
                                    <div class="product_info_content">
                                        <p>Fashion has been creating well-designed collections since 2010. The brand offers feminine designs delivering stylish separates and statement dresses which have since evolved into a full ready-to-wear collection in which every item is a vital part of a woman's wardrobe. The result? Cool, easy, chic looks with youthful elegance and unmistakable signature style. All the beautiful pieces are made in Italy and manufactured with the greatest attention. Now Fashion extends to a range of accessories including shoes, hats, belts and more!</p>
                                    </div>    
                                </div>
                                <div class="tab-pane fade" id="reviews" role="tabpanel" >
                                    <div class="product_info_content">
                                        <p>Fashion has been creating well-designed collections since 2010. The brand offers feminine designs delivering stylish separates and statement dresses which have since evolved into a full ready-to-wear collection in which every item is a vital part of a woman's wardrobe. The result? Cool, easy, chic looks with youthful elegance and unmistakable signature style. All the beautiful pieces are made in Italy and manufactured with the greatest attention. Now Fashion extends to a range of accessories including shoes, hats, belts and more!</p>
                                    </div>
                                    <div class="product_info_inner">
                                        <div class="product_ratting mb-10">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            </ul>
                                            <strong>Posthemes</strong> 
                                            <p>09/07/2018</p>
                                        </div>
                                        <div class="product_demo">
                                            <strong>demo</strong>
                                            <p>That's OK!</p>
                                        </div>
                                    </div> 
                                    <div class="product_review_form">
                                        <form action="#">
                                            <h2>Add a review </h2>
                                            <p>Your email address will not be published. Required fields are marked </p>
                                            <div class="row">
                                                <div class="col-12">
                                                    <label for="review_comment">Your review </label>
                                                    <textarea name="comment" id="review_comment" ></textarea>
                                                </div> 
                                                <div class="col-lg-6 col-md-6">
                                                    <label for="author">Name</label>
                                                    <input id="author"  type="text">

                                                </div> 
                                                <div class="col-lg-6 col-md-6">
                                                    <label for="email">Email </label>
                                                    <input id="email"  type="text">
                                                </div>  
                                            </div>
                                            <button type="submit">Submit</button>
                                         </form>   
                                    </div>     
                                </div>
                            </div>
                        </div>      
                    </div>  
                    <!--product info end-->
                    
                    <!--product section area start-->
                    <div class="product_section product_section--p0  related_product">
                        <div class="section_title">
                           <h2>Related Products</h2>
                           <p>Contemporary, minimal and modern designs embody the Lavish Alice handwriting</p>
                        </div> 
                        <div class="product_area"> 
                             <div class="row">
                                <div class="product_carousel product_three_column4 owl-carousel">
                                    <div class="col-lg-3">
                                        <div class="single_product">
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img src="/assets/front/img/product/product21.jpg" alt=""></a>
                                                <a class="secondary_img" href="product-details.html"><img src="/assets/front/img/product/product22.jpg" alt=""></a>
                                                <div class="product_action">
                                                    <div class="hover_action">
                                                       <a  href="#"><i class="fa fa-plus"></i></a>
                                                        <div class="action_button">
                                                            <ul>

                                                                <li><a title="add to cart" href="cart.html"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
                                                                <li><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>

                                                                <li><a href="compare.html" title="Add to Compare"><i class="fa fa-sliders" aria-hidden="true"></i></a></li>

                                                            </ul>
                                                        </div>
                                                   </div>

                                                </div>
                                                <div class="quick_button">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box" title="quick_view">+ quick view</a>
                                                </div>

                                                <div class="product_sale">
                                                    <span>-7%</span>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <h3><a href="product-details.html">Marshall Portable  Bluetooth</a></h3>
                                                <span class="current_price">£60.00</span>
                                                <span class="old_price">£86.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="single_product">
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img src="/assets/front/img/product/product27.jpg" alt=""></a>
                                                <a class="secondary_img" href="product-details.html"><img src="/assets/front/img/product/product28.jpg" alt=""></a>
                                                <div class="product_action">
                                                    <div class="hover_action">
                                                       <a  href="#"><i class="fa fa-plus"></i></a>
                                                        <div class="action_button">
                                                            <ul>

                                                                <li><a title="add to cart" href="cart.html"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
                                                                <li><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>

                                                                <li><a href="compare.html" title="Add to Compare"><i class="fa fa-sliders" aria-hidden="true"></i></a></li>

                                                            </ul>
                                                        </div>
                                                   </div>

                                                </div>
                                                <div class="quick_button">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box" title="quick_view">+ quick view</a>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <h3><a href="product-details.html">Koss KPH7 Portable</a></h3>
                                                <span class="current_price">£60.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="single_product">
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img src="/assets/front/img/product/product6.jpg" alt=""></a>
                                                <a class="secondary_img" href="product-details.html"><img src="/assets/front/img/product/product5.jpg" alt=""></a>
                                                <div class="product_action">
                                                    <div class="hover_action">
                                                       <a  href="#"><i class="fa fa-plus"></i></a>
                                                        <div class="action_button">
                                                            <ul>

                                                                <li><a title="add to cart" href="cart.html"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
                                                                <li><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>

                                                                <li><a href="compare.html" title="Add to Compare"><i class="fa fa-sliders" aria-hidden="true"></i></a></li>

                                                            </ul>
                                                        </div>
                                                   </div>

                                                </div>
                                                <div class="quick_button">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box" title="quick_view">+ quick view</a>
                                                </div>

                                            </div>
                                            <div class="product_content">
                                                <h3><a href="product-details.html">Beats Solo2 Solo 2</a></h3>
                                                <span class="current_price">£60.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="single_product">
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img src="/assets/front/img/product/product7.jpg" alt=""></a>
                                                <a class="secondary_img" href="product-details.html"><img src="/assets/front/img/product/product8.jpg" alt=""></a>
                                                <div class="product_action">
                                                    <div class="hover_action">
                                                       <a  href="#"><i class="fa fa-plus"></i></a>
                                                        <div class="action_button">
                                                            <ul>

                                                                <li><a title="add to cart" href="cart.html"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
                                                                <li><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>

                                                                <li><a href="compare.html" title="Add to Compare"><i class="fa fa-sliders" aria-hidden="true"></i></a></li>

                                                            </ul>
                                                        </div>
                                                   </div>

                                                </div>
                                                <div class="quick_button">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box" title="quick_view">+ quick view</a>
                                                </div>

                                                <div class="product_sale">
                                                    <span>-7%</span>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <h3><a href="product-details.html">Beats EP Wired</a></h3>
                                                <span class="current_price">£60.00</span>
                                                <span class="old_price">£86.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="single_product">
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img src="/assets/front/img/product/product24.jpg" alt=""></a>
                                                <a class="secondary_img" href="product-details.html"><img src="/assets/front/img/product/product25.jpg" alt=""></a>
                                                <div class="product_action">
                                                    <div class="hover_action">
                                                       <a  href="#"><i class="fa fa-plus"></i></a>
                                                        <div class="action_button">
                                                            <ul>

                                                                <li><a title="add to cart" href="cart.html"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
                                                                <li><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>

                                                                <li><a href="compare.html" title="Add to Compare"><i class="fa fa-sliders" aria-hidden="true"></i></a></li>

                                                            </ul>
                                                        </div>
                                                   </div>

                                                </div>
                                                <div class="quick_button">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box" title="quick_view">+ quick view</a>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <h3><a href="product-details.html">Bose SoundLink Bluetooth</a></h3>
                                                <span class="current_price">£60.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="single_product">
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img src="/assets/front/img/product/product10.jpg" alt=""></a>
                                                <a class="secondary_img" href="product-details.html"><img src="/assets/front/img/product/product11.jpg" alt=""></a>
                                                <div class="product_action">
                                                    <div class="hover_action">
                                                       <a  href="#"><i class="fa fa-plus"></i></a>
                                                        <div class="action_button">
                                                            <ul>

                                                                <li><a title="add to cart" href="cart.html"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
                                                                <li><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>

                                                                <li><a href="compare.html" title="Add to Compare"><i class="fa fa-sliders" aria-hidden="true"></i></a></li>

                                                            </ul>
                                                        </div>
                                                   </div>

                                                </div>
                                                <div class="quick_button">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box" title="quick_view">+ quick view</a>
                                                </div>

                                                <div class="product_sale">
                                                    <span>-7%</span>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <h3><a href="product-details.html">Apple iPhone SE 16GB</a></h3>
                                                <span class="current_price">£60.00</span>
                                                <span class="old_price">£86.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="single_product">
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img src="/assets/front/img/product/product23.jpg" alt=""></a>
                                                <a class="secondary_img" href="product-details.html"><img src="/assets/front/img/product/product24.jpg" alt=""></a>
                                                <div class="product_action">
                                                    <div class="hover_action">
                                                       <a  href="#"><i class="fa fa-plus"></i></a>
                                                        <div class="action_button">
                                                            <ul>

                                                                <li><a title="add to cart" href="cart.html"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
                                                                <li><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>

                                                                <li><a href="compare.html" title="Add to Compare"><i class="fa fa-sliders" aria-hidden="true"></i></a></li>

                                                            </ul>
                                                        </div>
                                                   </div>

                                                </div>
                                                <div class="quick_button">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box" title="quick_view">+ quick view</a>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <h3><a href="product-details.html">JBL Flip 3 Portable</a></h3>
                                                <span class="current_price">£60.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--product section area end-->
    
                    <!--product section area start-->
                    <div class="product_section product_section--p0 upsell_product">
                        <div class="section_title">
                           <h2>Upsell Products</h2>
                           <p>Contemporary, minimal and modern designs embody the Lavish Alice handwriting</p>
                        </div>
                        <div class="product_area"> 
                             <div class="row">
                                <div class="product_carousel product_three_column4 owl-carousel">
                                    <div class="col-lg-3">
                                        <div class="single_product">
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img src="/assets/front/img/product/product15.jpg" alt=""></a>
                                                <a class="secondary_img" href="product-details.html"><img src="/assets/front/img/product/product16.jpg" alt=""></a>
                                                <div class="product_action">
                                                    <div class="hover_action">
                                                       <a  href="#"><i class="fa fa-plus"></i></a>
                                                        <div class="action_button">
                                                            <ul>

                                                                <li><a title="add to cart" href="cart.html"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
                                                                <li><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>

                                                                <li><a href="compare.html" title="Add to Compare"><i class="fa fa-sliders" aria-hidden="true"></i></a></li>

                                                            </ul>
                                                        </div>
                                                   </div>

                                                </div>
                                                <div class="quick_button">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box" title="quick_view">+ quick view</a>
                                                </div>

                                                <div class="product_sale">
                                                    <span>-7%</span>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <h3><a href="product-details.html">Marshall Portable  Bluetooth</a></h3>
                                                <span class="current_price">£60.00</span>
                                                <span class="old_price">£86.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="single_product">
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img src="/assets/front/img/product/product17.jpg" alt=""></a>
                                                <a class="secondary_img" href="product-details.html"><img src="/assets/front/img/product/product18.jpg" alt=""></a>
                                                <div class="product_action">
                                                    <div class="hover_action">
                                                       <a  href="#"><i class="fa fa-plus"></i></a>
                                                        <div class="action_button">
                                                            <ul>

                                                                <li><a title="add to cart" href="cart.html"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
                                                                <li><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>

                                                                <li><a href="compare.html" title="Add to Compare"><i class="fa fa-sliders" aria-hidden="true"></i></a></li>

                                                            </ul>
                                                        </div>
                                                   </div>

                                                </div>
                                                <div class="quick_button">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box" title="quick_view">+ quick view</a>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <h3><a href="product-details.html">Koss KPH7 Portable</a></h3>
                                                <span class="current_price">£60.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="single_product">
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img src="/assets/front/img/product/product19.jpg" alt=""></a>
                                                <a class="secondary_img" href="product-details.html"><img src="/assets/front/img/product/product20.jpg" alt=""></a>
                                                <div class="product_action">
                                                    <div class="hover_action">
                                                       <a  href="#"><i class="fa fa-plus"></i></a>
                                                        <div class="action_button">
                                                            <ul>

                                                                <li><a title="add to cart" href="cart.html"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
                                                                <li><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>

                                                                <li><a href="compare.html" title="Add to Compare"><i class="fa fa-sliders" aria-hidden="true"></i></a></li>

                                                            </ul>
                                                        </div>
                                                   </div>

                                                </div>
                                                <div class="quick_button">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box" title="quick_view">+ quick view</a>
                                                </div>

                                            </div>
                                            <div class="product_content">
                                                <h3><a href="product-details.html">Beats Solo2 Solo 2</a></h3>
                                                <span class="current_price">£60.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="single_product">
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img src="/assets/front/img/product/product7.jpg" alt=""></a>
                                                <a class="secondary_img" href="product-details.html"><img src="/assets/front/img/product/product8.jpg" alt=""></a>
                                                <div class="product_action">
                                                    <div class="hover_action">
                                                       <a  href="#"><i class="fa fa-plus"></i></a>

                                                        <div class="action_button">
                                                            <ul>

                                                                <li><a title="add to cart" href="cart.html"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
                                                                <li><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>

                                                                <li><a href="compare.html" title="Add to Compare"><i class="fa fa-sliders" aria-hidden="true"></i></a></li>

                                                            </ul>
                                                        </div>
                                                   </div>

                                                </div>
                                                <div class="quick_button">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box" title="quick_view">+ quick view</a>
                                                </div>

                                                <div class="product_sale">
                                                    <span>-7%</span>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <h3><a href="product-details.html">Beats EP Wired</a></h3>
                                                <span class="current_price">£60.00</span>
                                                <span class="old_price">£86.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="single_product">
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img src="/assets/front/img/product/product24.jpg" alt=""></a>
                                                <a class="secondary_img" href="product-details.html"><img src="/assets/front/img/product/product25.jpg" alt=""></a>
                                                <div class="product_action">
                                                    <div class="hover_action">
                                                       <a  href="#"><i class="fa fa-plus"></i></a>
                                                        <div class="action_button">
                                                            <ul>

                                                                <li><a title="add to cart" href="cart.html"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
                                                                <li><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>

                                                                <li><a href="compare.html" title="Add to Compare"><i class="fa fa-sliders" aria-hidden="true"></i></a></li>

                                                            </ul>
                                                        </div>
                                                   </div>

                                                </div>
                                                <div class="quick_button">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box" title="quick_view">+ quick view</a>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <h3><a href="product-details.html">Bose SoundLink Bluetooth</a></h3>
                                                <span class="current_price">£60.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="single_product">
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img src="/assets/front/img/product/product10.jpg" alt=""></a>
                                                <a class="secondary_img" href="product-details.html"><img src="/assets/front/img/product/product11.jpg" alt=""></a>
                                                <div class="product_action">
                                                    <div class="hover_action">
                                                       <a  href="#"><i class="fa fa-plus"></i></a>
                                                        <div class="action_button">
                                                            <ul>

                                                                <li><a title="add to cart" href="cart.html"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
                                                                <li><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>

                                                                <li><a href="compare.html" title="Add to Compare"><i class="fa fa-sliders" aria-hidden="true"></i></a></li>

                                                            </ul>
                                                        </div>
                                                   </div>

                                                </div>
                                                <div class="quick_button">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box" title="quick_view">+ quick view</a>
                                                </div>

                                                <div class="product_sale">
                                                    <span>-7%</span>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <h3><a href="product-details.html">Apple iPhone SE 16GB</a></h3>
                                                <span class="current_price">£60.00</span>
                                                <span class="old_price">£86.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="single_product">
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img src="/assets/front/img/product/product23.jpg" alt=""></a>
                                                <a class="secondary_img" href="product-details.html"><img src="/assets/front/img/product/product24.jpg" alt=""></a>
                                                <div class="product_action">
                                                    <div class="hover_action">
                                                       <a  href="#"><i class="fa fa-plus"></i></a>
                                                        <div class="action_button">
                                                            <ul>

                                                                <li><a title="add to cart" href="cart.html"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
                                                                <li><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>

                                                                <li><a href="compare.html" title="Add to Compare"><i class="fa fa-sliders" aria-hidden="true"></i></a></li>

                                                            </ul>
                                                        </div>
                                                   </div>

                                                </div>
                                                <div class="quick_button">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box" title="quick_view">+ quick view</a>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <h3><a href="product-details.html">JBL Flip 3 Portable</a></h3>
                                                <span class="current_price">£60.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--product section area end-->
                    
                </div>
                
            </div>
        </div>    
    </div>
    <!--product details end-->
<?php
	$this->load->view('front/common/footer.php');

?>