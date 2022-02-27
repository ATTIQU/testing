<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>e-Fashion Connect </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="/assets/front/img/favicon.ico">

    <link rel="stylesheet" href="/assets/front/css/plugins.css">
    
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="/assets/front/css/style.css">

</head>

<body>

    <div class="off_canvars_overlay">
                
    </div>
    <div class="offcanvas_menu">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="canvas_open">
                        <a href="javascript:void(0)"><i class="ion-navicon"></i></a>
                    </div>
                    <div class="offcanvas_menu_wrapper">
                        <div class="canvas_close">
                              <a href="javascript:void(0)"><i class="ion-android-close"></i></a>  
                        </div>
                        <div class="welcome_text">
                           <ul>
                               <li><span>Free Delivery:</span> Take advantage of our time to save event</li>
                               <li><span>Free Returns *</span> Satisfaction guaranteed</li>
                           </ul>
                        </div>
                        
                        <div class="top_right">
                            <ul>
                               <li class="top_links"><a href="#">My Account <i class="ion-chevron-down"></i></a>
                                    <ul class="dropdown_links">
                                        <li><a href="<?=base_url()?>Front/wishlist">My Wish List </a></li>
                                        <li><a href="<?=base_url()?>Front/my_account">My Account </a></li>
                                        <li><a href="#">Sign In</a></li>
                                        <li><a href="<?=base_url()?>Front/compare">Compare Products  </a></li>
                                    </ul>
                                </li> 
                                
                                
                            </ul>
                        </div> 
                        <div class="search_bar">
                            <form action="#">
                                <select class="select_option" name="select">
                                    <option selected value="1">All Categories</option>
                                    <option  value="2">Accessories</option>
                                    <option  value="3">Bridge</option>
                                    <option  value="4">Hub</option>
                                    <option  value="5">Repeater</option>
                                    <option  value="6">Switch</option>
                                    <option  value="7">Video Games</option>
                                    <option  value="8">PlayStation 3</option>
                                    <option  value="9">PlayStation 4</option>
                                    <option  value="10">Xbox 360</option>
                                    <option  value="11">Xbox One</option>
                                </select>
                                <input placeholder="Search entire store here..." type="text">
                                <button type="submit"><i class="ion-ios-search-strong"></i></button>
                            </form>
                        </div>
                        <div class="cart_area">
                            <div class="middel_links">
                               <ul>
                                   <li><a href="<?=base_url()?>Front/login">Login</a></li>
                                   <li>/</li>
                                   <li><a href="<?=base_url()?>Front/login">Register</a></li>
                               </ul>

                            </div>
                            <div class="cart_link">
                                <a href="#"><i class="fa fa-shopping-basket"></i>2 item(s)</a>
                                <!--mini cart-->
                                 <div class="mini_cart">
                                    <div class="cart_item top">
                                       <div class="cart_img">
                                           <a href="#"><img src="/assets/front/img/s-product/product.jpg" alt=""></a>
                                       </div>
                                        <div class="cart_info">
                                            <a href="#">Apple iPhone SE 16GB</a>

                                            <span>1x $60.00</span>
    
                                        </div>
                                        <div class="cart_remove">
                                            <a href="#"><i class="ion-android-close"></i></a>
                                        </div>
                                    </div>
                                    <div class="cart_item bottom">
                                       <div class="cart_img">
                                           <a href="#"><img src="/assets/front/img/s-product/product2.jpg" alt=""></a>
                                       </div>
                                        <div class="cart_info">
                                            <a href="#">Marshall Portable  Bluetooth</a>
                                                <span> 1x $160.00</span>
                                        </div>
                                        <div class="cart_remove">
                                            <a href="#"><i class="ion-android-close"></i></a>
                                        </div>
                                    </div>
                                    <div class="cart__table">
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td class="text-left">Sub-Total :</td>
                                                    <td class="text-right">$150.00</td>
                                                </tr>
                                             
                                                <tr>
                                                    <td class="text-left">Total :</td>
                                                    <td class="text-right">$184.00</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    
                                    <div class="cart_button view_cart">
                                        <a href="<?=base_url()?>Front/cart">View Cart</a>
                                    </div>
                                    <div class="cart_button checkout">
                                        <a href="<?=base_url()?>Front/checkout">Checkout</a>
                                    </div>
                                </div>
                                <!--mini cart end-->
                            </div>
                        </div>
                        <div class="contact_phone">
                            <p>Call Free Support: <a href="tel:01234567890">01234567890</a></p>
                        </div>
                        <div id="menu" class="text-left ">
                            <ul class="offcanvas_main_menu">
                                <li class="menu-item-has-children active">
                                    <a href="#">Home</a>
                                    <ul class="sub-menu">
                                        <li><a href="<?=base_url()?>/Front/index1">Home 1</a></li>
                                        <li><a href="<?=base_url()?>Front/index2">Home 2</a></li>
                                        <li><a href="<?=base_url()?>/Front/index3">Home 3</a></li>
                                       
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">Shop</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item-has-children">
                                            <a href="#">Shop Layouts</a>
                                            <ul class="sub-menu">
                                                <li><a href="<?=base_url()?>Front/shop">shop</a></li>
                                                <li><a href="<?=base_url()?>Front/shop_fullwidth">Full Width</a></li>
                                                <li><a href="<?=base_url()?>Front/shop_fullwidth_list">Full Width list</a></li>
                                                <li><a href="<?=base_url()?>Front/shop_right_sidebar">Right Sidebar </a></li>
                                                <li><a href="<?=base_url()?>Front/shop_rightsidebar_list"> Right Sidebar list</a></li>
                                                <li><a href="<?=base_url()?>Front/shop_list">List View</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="#">other Pages</a>
                                            <ul class="sub-menu">
                                                <li><a href="<?=base_url()?>Front/portfolio">portfolio</a></li>
                                                <li><a href="<?=base_url()?>Front/portfolio_details">portfolio details</a></li>
                                                <li><a href="<?=base_url()?>Front/cart">cart</a></li>
                                                <li><a href="<?=base_url()?>Front/checkout">Checkout</a></li>
                                                <li><a href="<?=base_url()?>Front/my_account">my account</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="#">Product Types</a>
                                            <ul class="sub-menu">
                                               <li><a href="<?=base_url()?>Front/product_details">product details</a></li>
                                                            <li><a href="<?=base_url()?>Front/product_sidebar">product sidebar</a></li>
                                                            <li><a href="<?=base_url()?>Front/product_gallery">product gallery</a></li>
                                                            <li><a href="<?=base_url()?>Front/product_grouped">product grouped</a></li>
                                                            <li><a href="<?=base_url()?>Front/variable_product">product variable</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">blog</a>
									
                                    <ul class="sub-menu">
                                         <li><a href="<?=base_url()?>Front/blog_details">blog details</a></li>
                                         <li><a href="<?=base_url()?>Front/blog_sidebar">blog  Sidebar</a></li>
                                    </ul>

                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">pages </a>
                                    <ul class="sub-menu">
                                        <li><a href="<?=base_url()?>Front/about">About Us</a></li>
                                        <li><a href="<?=base_url()?>Front/services">services</a></li>
                                        <li><a href="<?=base_url()?>Front/faq">Frequently Questions</a></li>
                                        <li><a href="<?=base_url()?>Front/contact">contact</a></li>
                                        <li><a href="<?=base_url()?>Front/login">login</a></li>
                                        <li><a href="<?=base_url()?>Front/wishlist">Wishlist</a></li>
                                        <li><a href="<?=base_url()?>Front/error_404">Error 404</a></li>
                                        <li><a href="<?=base_url()?>Front/compare">compare</a></li>
                                        <li><a href="<?=base_url()?>Front/privacy_policy">privacy policy</a></li>
                                        <li><a href="<?=base_url()?>Front/coming_soon">coming soon</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="<?=base_url()?>Front/my_account">my account</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="<?=base_url()?>Front/about">About Us</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="<?=base_url()?>Front/contact"> Contact Us</a> 
                                </li>
                            </ul>
                        </div>
                        <div class="offcanvas_footer">
                            <span><a href="#"><i class="fa fa-envelope-o"></i> info@yourdomain.com</a></span>
                            <ul>
                                <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li class="pinterest"><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
    <header class="header_area">
        <!--header top start-->
        <div class="header_top">
            <div class="container">   
                <div class="row align-items-center">
                    <div class="col-lg-7 col-md-12">
                        <div class="welcome_text">
                           <ul>
                               <li><span>Free Delivery:</span> Take advantage of our time to save event</li>
                               <li><span>Free Returns *</span> Satisfaction guaranteed</li>
                           </ul>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-12">
                        <div class="top_right text-right">
                            <ul>
                               <li class="top_links"><a href="#">My Account <i class="ion-chevron-down"></i></a>
                                    <ul class="dropdown_links">
                                        <li><a href="<?=base_url()?>Front/wishlist">My Wish List </a></li>
                                        <li><a href="<?=base_url()?>Front/my_account">My Account </a></li>
                                        <li><a href="<?=base_url()?>Front/login">Sign In</a></li>
                                        <li><a href="<?=base_url()?>Front/compare">Compare Products  </a></li>
                                    </ul>
                                </li> 
                               
                               
                            </ul>
                        </div>   
                    </div>
                </div>
            </div>
        </div>
        <!--header top start-->
        
        <!--header middel start-->
        <div class="header_middel">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-5">
                        <div class="logo">
                            <a href="<?=base_url()?>"><img src="/assets/front/img/logo/logo.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="search_bar">
                            <form action="#">
                                <select class="select_option" name="select">
                                    <option selected value="1">All Categories</option>
                                    <option  value="2">Accessories</option>
                                    <option  value="3">Bridge</option>
                                    <option  value="4">Hub</option>
                                    <option  value="5">Repeater</option>
                                    <option  value="6">Switch</option>
                                    <option  value="7">Video Games</option>
                                    <option  value="8">PlayStation 3</option>
                                    <option  value="9">PlayStation 4</option>
                                    <option  value="10">Xbox 360</option>
                                    <option  value="11">Xbox One</option>
                                </select>
                                <input placeholder="Search entire store here..." type="text">
                                <button type="submit"><i class="ion-ios-search-strong"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 offset-md-6 offset-lg-0">
                        <div class="cart_area">
                            <div class="middel_links">
                               <ul>
                                   <li><a href="<?=base_url()?>Front/login">Login</a></li>
                                   <li>/</li>
                                   <li><a href="<?=base_url()?>Front/login">Register</a></li>
                               </ul>

                            </div>
                            <div class="cart_link">
                                <a href="#"><i class="fa fa-shopping-basket"></i>2 item(s)</a>
                                <!--mini cart-->
                                 <div class="mini_cart">
                                    <div class="cart_item top">
                                       <div class="cart_img">
                                           <a href="#"><img src="/assets/front/img/s-product/product.jpg" alt=""></a>
                                       </div>
                                        <div class="cart_info">
                                            <a href="#">Apple iPhone SE 16GB</a>

                                            <span>1x $60.00</span>
    
                                        </div>
                                        <div class="cart_remove">
                                            <a href="#"><i class="ion-android-close"></i></a>
                                        </div>
                                    </div>
                                    <div class="cart_item bottom">
                                       <div class="cart_img">
                                           <a href="#"><img src="/assets/front/img/s-product/product2.jpg" alt=""></a>
                                       </div>
                                        <div class="cart_info">
                                            <a href="#">Marshall Portable  Bluetooth</a>
                                                <span> 1x $160.00</span>
                                        </div>
                                        <div class="cart_remove">
                                            <a href="#"><i class="ion-android-close"></i></a>
                                        </div>
                                    </div>
                                    <div class="cart__table">
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td class="text-left">Sub-Total :</td>
                                                    <td class="text-right">$150.00</td>
                                                </tr>
                                             
                                                <tr>
                                                    <td class="text-left">Total :</td>
                                                    <td class="text-right">$184.00</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    
                                    <div class="cart_button view_cart">
                                        <a href="<?=base_url()?>Front/cart">View Cart</a>
                                    </div>
                                    <div class="cart_button checkout">
                                        <a href="<?=base_url()?>Front/checkout">Checkout</a>
                                    </div>
                                </div>
                                <!--mini cart end-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--header middel end-->

        <!--header bottom satrt-->
        <div class="header_bottom sticky-header">
            <div class="container">
                <div class="row align-items-center">                   
                    <div class="col-12">
                        <div class="header_static">
                            <div class="main_menu_inner">
                                <div class="main_menu"> 
                                    <nav>  
                                        <ul>
                                            <li class="active"><a href="<?=base_url()?>">Home <i class="fa fa-angle-down"></i></a>
                                                <ul class="sub_menu">
                                                    <li><a href="<?=base_url()?>Front/index">Home 1</a></li>
                                                    <li><a href="<?=base_url()?>Front/index2">Home 2</a></li>
                                                    <li><a href="<?=base_url()?>Front/index3">Home 3</a></li>
                                                    
                                                </ul>
                                            </li>
                                            <li class="mega_items"><a href="<?=base_url()?>Front/shop">shop <i class="fa fa-angle-down"></i></a>
                                                <ul class="mega_menu">
                                                    <li><a href="#">Shop Layouts</a>
                                                        <ul>
                                                            <li><a href="<?=base_url()?>Front/shop_fullwidth">Full Width</a></li>
                                                            <li><a href="<?=base_url()?>Front/shop_fullwidth_list">Full Width list</a></li>
                                                            <li><a href="<?=base_url()?>Front/shop_right_sidebar">Right Sidebar </a></li>
                                                            <li><a href="<?=base_url()?>Front/shop_right_sidebar"> Right Sidebar list</a></li>
                                                            <li><a href="<?=base_url()?>Front/shop_list">List View</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#">other Pages</a>
                                                        <ul>
                                                            <li><a href="<?=base_url()?>Front/portfolio">portfolio</a></li>
                                                            <li><a href="<?=base_url()?>Front/portfolio_detail">portfolio details</a></li>
                                                            <li><a href="<?=base_url()?>Front/cart">cart</a></li>
                                                            <li><a href="<?=base_url()?>Front/checkout">Checkout</a></li>
                                                            <li><a href="<?=base_url()?>Front/my_account">my account</a></li>


                                                        </ul>
                                                    </li>
                                                    <li><a href="#">Product Types</a>
                                                        <ul>
                                                            <li><a href="<?=base_url()?>Front/product_details">product details</a></li>
                                                            <li><a href="<?=base_url()?>Front/product_sidebar">product sidebar</a></li>
                                                            <li><a href="<?=base_url()?>Front/product_gallery">product gallery</a></li>
                                                            <li><a href="<?=base_url()?>Front/product_grouped">product grouped</a></li>
                                                            <li><a href="<?=base_url()?>Front/variable_product">product variable</a></li>

                                                        </ul>
                                                    </li>
                                                    
                                                    <li class="banner_menu"><a href="#"><img src="/assets/front/img/bg/banner1.jpg" alt=""></a></li>
                                                </ul>
                                            </li>
                                            <li><a href="blog">blog <i class="fa fa-angle-down"></i></a>
                                                <ul class="sub_menu pages">
                                                    <li><a href="<?=base_url()?>Front/blog_details">blog details</a></li>
                                                    <li><a href="<?=base_url()?>Front/blog_sidebar">blog  Sidebar</a></li>
                                                   
                                                </ul>
                                            </li>
                                            <li><a href="#">pages <i class="fa fa-angle-down"></i></a>
                                                <ul class="sub_menu pages">
                                                    <li><a href="<?=base_url()?>Front/about">About Us</a></li>
                                                    <li><a href="<?=base_url()?>Front/services">services</a></li>
                                                    <li><a href="<?=base_url()?>Front/faq">Frequently Questions</a></li>
                                                    <li><a href="<?=base_url()?>Front/login">login</a></li>
                                                    <li><a href="<?=base_url()?>Front/my_account">my account</a></li>
                                                    <li><a href="<?=base_url()?>Front/wishlist">Wishlist</a></li>
                                                    <li><a href="<?=base_url()?>Front/error_404">Error 404</a></li>
                                                    <li><a href="<?=base_url()?>Front/compare">compare</a></li>
                                                    <li><a href="privacy_policy">privacy policy</a></li>
                                                    <li><a href="<?=base_url()?>Front/coming_soon">coming soon</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="<?=base_url()?>Front/about">About us</a></li>
                                            <li><a href="<?=base_url()?>Front/contact">Contact Us</a></li>
                                        </ul>  
                                    </nav> 
                                </div>
                            </div> 
                        
                            <div class="contact_phone">
                                <p>Call Free Support: <a href="tel:01234567890">01234567890</a></p>
                            </div>
                        </div>    
                    </div>
                </div>
            </div>
        </div>
        <!--header bottom end-->
    </header>
    <!--header area end-->



 