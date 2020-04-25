<?php
/***************************
      cart file
      ***********************************/
//start session to get user info
//its very likey at this point the user has already visited home and started a session
session_start();
if (empty($_SESSION['username'])){
    $_SESSION['username'] = $_SERVER['REMOTE_ADDR'];
}


      
      $dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname="tuatua";
$connect  = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);

// Check connection
if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
}
      
      
 /***********************
      php ends here
        ******************************/

?>



<!DOCTYPE html>
<html lang="eng">

<head>
 <?php include_once 'header.php';  
        get_title('cart');
        ?>
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>
    <div class="google index" style="display:none">
<p>
    Welcome to Tuatuagye, your one stop online store. Shop items and pay in installment.
    Sign in to <a href="#">Tuatuagye</a> Buy phones, 44" digital TV, freezer, blender, kettle etc.
</p>


</div>

<link href="//i.alicdn.com/ae-header/20191217202516/buyer/glofront/ae-header.css" rel="stylesheet" type="text/css" />
<div class="site-download-header" data-spm="100067" id="j-site-download-header" style="display:none;"><a href="#"><img data-src="#" /></a></div>

<div class="top-lighthouse" data-spm="1000001" id="top-lighthouse" style="z-index: 3000000">
	<div class="top-lighthouse-wrap container">
		<div class="nav-global" id="nav-global">
	

			<div class="ng-item-wrap ng-help-wrap">
				<div class="ng-item ng-help ng-sub"><span class="ng-sub-title">Help</span>
					<ul class="ng-sub-list">
						<li><a class="ng-help-link" data-role="help-center-link" href="#" rel="follow">Customer Service</a></li>
						<li><a data-role="complaint-link" href="#" rel="nofollow">Disputes & Reports</a></li>
						<li><a data-role="ipp-link" href="#" rel="nofollow">Report IPR infringement</a></li>
					</ul>
				</div>



				<div class="ng-item ng-mobile"><a href="https://play.google.com/store/apps/details?id=com.brichghana.ttgcustomer" rel="nofollow">Mobile App</a></div>
			</div>

			<div class="ng-item-wrap ng-item ng-switcher" data-role="region-pannel"><!-- switcher start -->
				<div data-role="region-pannel"><a class="switcher-info notranslate" data-role="menu" href="#" id="switcher-info" rel="nofollow">&nbsp;</a>

					<div class="switcher-sub notranslate" data-role="content">
						<div class="switcher-common">
							<div class="switcher-shipto item util-clearfix"><span class="label">Ship to</span>

								<div class="country-selector switcher-shipto-c" data-role="switch-country"></div>
							</div>

							<div class="switcher-language item util-clearfix"><span class="label">Language</span></div>

							<div class="switcher-currency item util-clearfix"><span class="label">Currency</span>

								<div class="switcher-currency-c" data-role="switch-currency"></div>
							</div>

							<div class="switcher-btn item util-clearfix"><button class="ui-button ui-button-primary go-contiune-btn" data-role="save" type="button">Save</button></div>
						</div>
					</div>
				</div>
				<!-- switcher end --></div>

			<div class="ng-item-wrap ng-personal-info">
				<div class="ng-item nav-pinfo-item nav-cart nav-cart-box"><a href="#" rel="nofollow"><i class="ng-cart-icon ng-icon-size"></i><span class="text">Cart</span> <span class="cart-number" id="nav-cart-num"></span> </a></div>

				<div class="ng-item nav-pinfo-item nav-wishlist"><a href="#" rel="nofollow"><i class="ng-wishlist-icon ng-icon-size"></i><span class="text">Wish List</span> </a></div>

				<div class="ng-item nav-pinfo-item nav-user-account" id="nav-user-account"><span class="user-account-port"><a data-role="myaliexpress-link" href="#"><i class="ng-account-icon ng-icon-size"></i><span class="text">Account</span> </a> </span>

					<div class="user-account-main" data-role="user-account-main">
						<div class="flyout-user-signIn flyout-new-user" data-role="user-signIn" style="display: block;">
							<p class="flyout-welcome-wrap">Welcome to Tuatuagye</p>

							<div class="flyout-logined"><i class="flyout-user-avatar"><img alt="" data-role="avatar-img" src="" /></i>

								<p class="flyout-welcome-text" data-role="flyout-welcome">Welcome back</p>
							</div>

							<p class="flyout-sign-out" data-role="signout-btn"><a href="#" rel="nofollow">Sign Out</a></p>

							<p class="flyout-bottons"><a class="join-btn" data-role="join-link" href="javaScript:;" rel="nofollow" style=" background-color: rgb(42, 151, 153);">Join</a> <a class="sign-btn" data-role="sign-link" href="#" rel="nofollow" style="margin:0;" style=" background-color: rgb(42, 151, 153);">Sign in</a></p>
						</div>
						<i class="flyout-line">&nbsp;</i>
						<ul class="flyout-quick-entry" data-role="quick-entry">
							<li><a href="#" rel="nofollow">My Orders</a></li>
							<li><a href="#" rel="nofollow">Message Center<span class="unread-message-count"></span></a></li>
							<li><a href="#" rel="nofollow">Wish List</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>




  <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter" style="display:none">
    Launch  modal
  </button>

  <!-- Modal -->
  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
      <div class="modal-content">

        <div class="modal-body">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            <img class="d-block w-100" src="img/web-banner.jpg" alt="" style="z-index:100000;">
        </div>

      </div>
    </div>
    <style>
            button.close span {
    right: 0;
    margin-top: -19px;
    position: fixed;
    float: right;
    font-size: 2.3rem;
    font-weight: 700;
    line-height: 1;
    z-index: 20000;
    color: #000;
    text-shadow: 0 1px 0 #fff;
    opacity: .5;
}
    </style>
  </div>



  <div class="chatpane">


<button class="open-button" id="thebutton"  data-toggle="modal" data-target="#1_ModalCenter" onclick="openForm()" style="display:none;">Chat</button>

<div class="chat-popup" id="myForm" style="background-image:url(img/bg.png)">
  <form action="" id="chatmessage" class="form-container" style="background-image:url(img/bg.png)">
    <h3>Hello</h3>

    <label for="msg"><b>How may I assist you?</b></label>
    <textarea placeholder="Type message.." name="msg" required></textarea>
    <button type="submit" class="btn">Send</button>
    <button type="button" class="close btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>
</div>

<div class="modal fade" id="1_ModalCenter" tabindex="-1" role="dialog" aria-labelledby="1_ModalCenterTitle" aria-hidden="true">
</div>

    <?php include_once 'main_nav.php'; 
                    get_nav('hi'); ?>


</div>
<div class="navbar" style=" background-image: url(img/bg.PNG); margin-top: -18px"></div>


        <!-- navbar-->
         <nav class="site-header sticky-top py-1 bootstrap-nav ">
      <div class="container d-flex flex-column flex-md-row justify-content-between">
           <a class="py-2" href="index.php">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="d-block mx-auto"><circle cx="12" cy="12" r="10"></circle><line x1="14.31" y1="8" x2="20.05" y2="17.94"></line><line x1="9.69" y1="8" x2="21.17" y2="8"></line><line x1="7.38" y1="12" x2="13.12" y2="2.06"></line><line x1="9.69" y1="16" x2="3.95" y2="6.06"></line><line x1="14.31" y1="16" x2="2.83" y2="16"></line><line x1="16.62" y1="12" x2="10.88" y2="21.94"></line></svg>
        </a>


        <a class="py-2 d-none d-md-inline-block" href="product.php">Products</a>
        <a class="py-2 d-none d-md-inline-block" href="#">Tuaguagye</a>
        <a class="py-2 d-none d-md-inline-block" href="#">Catergories</a>
        <a class="py-2 d-none d-md-inline-block" href="#">others</a>
        <a class="py-2 d-none d-md-inline-block" href="#">Support</a>


    </nav>

    <!-- Header End -->
    <!-- Header End -->

    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text product-more">
                        <a href="./index.php"><i class="fa fa-home"></i> Home</a>
                        <a href="#">Shop</a>
                        <span>Detail</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section Begin -->

    <!-- Product Shop Section Begin -->
    <section class="product-shop spad page-details">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="filter-widget">
                        <h4 class="fw-title">Categories</h4>
                        <ul class="filter-catagories">
                            <li><a href="#">Men</a></li>
                            <li><a href="#">Women</a></li>
                            <li><a href="#">Kids</a></li>
                        </ul>
                    </div>
                    <div class="filter-widget">
                        <h4 class="fw-title">Brand</h4>
                        <div class="fw-brand-check">
                            <div class="bc-item">
                                <label for="bc-calvin">
                                    Calvin Klein
                                    <input type="checkbox" id="bc-calvin">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="bc-item">
                                <label for="bc-diesel">
                                    Diesel
                                    <input type="checkbox" id="bc-diesel">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="bc-item">
                                <label for="bc-polo">
                                    Polo
                                    <input type="checkbox" id="bc-polo">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="bc-item">
                                <label for="bc-tommy">
                                    Tommy Hilfiger
                                    <input type="checkbox" id="bc-tommy">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="filter-widget">
                        <h4 class="fw-title">Price</h4>
                        <div class="filter-range-wrap">
                            <div class="range-slider">
                                <div class="price-input">
                                    <input type="text" id="minamount">
                                    <input type="text" id="maxamount">
                                </div>
                            </div>
                            <div class="price-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content"
                                data-min="33" data-max="98">
                                <div class="ui-slider-range ui-corner-all ui-widget-header"></div>
                                <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                                <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                            </div>
                        </div>
                        <a href="#" class="filter-btn">Filter</a>
                    </div>
                    <div class="filter-widget">
                        <h4 class="fw-title">Color</h4>
                        <div class="fw-color-choose">
                            <div class="cs-item">
                                <input type="radio" id="cs-black">
                                <label class="cs-black" for="cs-black">Black</label>
                            </div>
                            <div class="cs-item">
                                <input type="radio" id="cs-violet">
                                <label class="cs-violet" for="cs-violet">Violet</label>
                            </div>
                            <div class="cs-item">
                                <input type="radio" id="cs-blue">
                                <label class="cs-blue" for="cs-blue">Blue</label>
                            </div>
                            <div class="cs-item">
                                <input type="radio" id="cs-yellow">
                                <label class="cs-yellow" for="cs-yellow">Yellow</label>
                            </div>
                            <div class="cs-item">
                                <input type="radio" id="cs-red">
                                <label class="cs-red" for="cs-red">Red</label>
                            </div>
                            <div class="cs-item">
                                <input type="radio" id="cs-green">
                                <label class="cs-green" for="cs-green">Green</label>
                            </div>
                        </div>
                    </div>
                    <div class="filter-widget">
                        <h4 class="fw-title">Size</h4>
                        <div class="fw-size-choose">
                            <div class="sc-item">
                                <input type="radio" id="s-size">
                                <label for="s-size">s</label>
                            </div>
                            <div class="sc-item">
                                <input type="radio" id="m-size">
                                <label for="m-size">m</label>
                            </div>
                            <div class="sc-item">
                                <input type="radio" id="l-size">
                                <label for="l-size">l</label>
                            </div>
                            <div class="sc-item">
                                <input type="radio" id="xs-size">
                                <label for="xs-size">xs</label>
                            </div>
                        </div>
                    </div>
                    <div class="filter-widget">
                        <h4 class="fw-title">Tags</h4>
                        <div class="fw-tags">
                            <a href="#">Towel</a>
                            <a href="#">Shoes</a>
                            <a href="#">Coat</a>
                            <a href="#">Dresses</a>
                            <a href="#">Trousers</a>
                            <a href="#">Men's hats</a>
                            <a href="#">Backpack</a>
                        </div>
                    </div>
                </div>
              
                <div class="col-lg-9">
                      <?php 
                        if (!empty($_GET["product_id"])) {
                            $id = $_GET['product_id'];
                                }
                                else $id = 53;
                    $query = "SELECT * FROM ttg_product WHERE product_id = $id";
                    $result = mysqli_query($connect, $query);
                    if (!$result) {
                   echo mysqli_error($connect) ;
                   // exit();
                }
                     while ($row = mysqli_fetch_array($result)) {
                    $output = ' 
                   
                
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="product-pic-zoom">
                                  <img class="product-big-img" src="http://tuatuagye.brichghana.com//upload/image/'.$row["image"].'" alt="">
                                <div class="zoom-icon">
                                    <i class="fa fa-search-plus"></i>
                                </div>
                            </div>
                            <div class="product-thumbs">
                                <div class="product-thumbs-track ps-slider owl-carousel">
                                    <div class="pt active" data-imgbigurl="http://tuatuagye.brichghana.com//upload/image/'.$row["image"].'"><img
                                            src="http://tuatuagye.brichghana.com/upload/image/'.$row["image"].'" alt=""></div>

                                            
                                    <div class="pt" data-imgbigurl="http://tuatuagye.brichghana.com//upload/image/'.$row["image"].'"><img
                                            src="http:/tuatuagye.brichghana.com/upload/image/'.$row["image"].'" alt=""></div>
                                    <div class="pt" data-imgbigurl="http://tuatuagye.brichghana.com/upload/image/'.$row["image"].'"><img
                                            src="http://tuatuagye.brichghana.com/upload/image/'.$row["image"].'" alt=""></div>
                                    <div class="pt" data-imgbigurl="http://tuatuagye.brichghana.com//upload/image/'.$row["image"].'"><img
                                            src="http://tuatuagye.com/upload/image/'.$row["image"].'" alt=""></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="product-details">
                                <div class="pd-title">
                                    <span>category</span>
                                    <h3>'. $row["model"]. '</h3>
                                    <a href="#" class="heart-icon"><i class="icon_heart_alt"></i></a>
                                </div>
                                <div class="pd-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                    <span>(5)</span>
                                </div>
                                 <div class="pd-desc">
                                    <div class="name_"></div>
                                    <h4>    Ghc '. $row["price"]. ' <span>  </span> <span>629.99</span></h4>
                                </div>
                                           <div class="pd-desc">
                                      
                         <div class="catagory-name"><h6>Tuatuagye price</h6></div>
                <br>  <div class="pi-text" style="display: inline-flex; -webkit-inline-box;">
                         <h4>    Ghc <div class="ttg_price_"></div>  </h4>
                        <button class="btn btn-submit" type="submit" style="background: rgb(42, 151, 153)">TTGCOIN</button></div>
                                    
                                
                     </div>
                                <div class="pd-size-choose">
                                    <div class="sc-item">
                                        <input type="radio" id="sm-size">
                                        <label for="sm-size">s</label>
                                    </div>
                                    <div class="sc-item">
                                        <input type="radio" id="md-size">
                                        <label for="md-size">m</label>
                                    </div>
                                    <div class="sc-item">
                                        <input type="radio" id="lg-size">
                                        <label for="lg-size">l</label>
                                    </div>
                                    <div class="sc-item">
                                        <input type="radio" id="xl-size">
                                        <label for="xl-size">xs</label>
                                    </div>
                                </div>
                                <div class="quantity">
                                    <div class="pro-qty">
                                        <input type="text" value="1">
                                    </div>
                                    <a href="#" class="primary-btn pd-cart">Add To Cart</a>
                                </div>
                                <ul class="pd-tags">
                                    <li><span>CATEGORIES</span>: More Accessories, Wallets & Cases</li>
                                    <li><span>TAGS</span>: Clothing, T-shirt, Woman</li>
                                </ul>
                                <div class="pd-share">
                                    <div class="p-code">Sku : 00012</div>
                                    <div class="pd-social">
                                        <a href="#"><i class="ti-facebook"></i></a>
                                        <a href="#"><i class="ti-twitter-alt"></i></a>
                                        <a href="#"><i class="ti-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>  ';
                                 }
                
                    echo $output;
                    ?>
             
                                
                    <div class="product-tab">
                        <div class="tab-item">
                            <ul class="nav" role="tablist">
                                <li>
                                    <a class="active" data-toggle="tab" href="#tab-1" role="tab">DESCRIPTION</a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#tab-2" role="tab">SPECIFICATIONS</a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#tab-3" role="tab">Customer Reviews (02)</a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-item-content">
                            <div class="tab-content">
                                <div class="tab-pane fade-in active" id="tab-1" role="tabpanel">
                                    <div class="product-content">
                                        <div class="row">
                                            <div class="col-lg-7">
                                              
                                                <p> <div class="description_"></div> </p>
                                                <h5>Features</h5>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                                                    ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                                    aliquip ex ea commodo consequat. Duis aute irure dolor in </p>
                                            </div>
                                            <div class="col-lg-5">
                                                <img src="img/product-single/tab-desc.jpg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab-2" role="tabpanel">
                                    <div class="specification-table">
                                        <table>
                                            <tr>
                                                <td class="p-catagory">Customer Rating</td>
                                                <td>
                                                    <div class="pd-rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <span>(5)</span>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="p-catagory">Price</td>
                                                <td>
                                                    <div class="p-price">$495.00</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="p-catagory">Add To Cart</td>
                                                <td>
                                                    <div class="cart-add">+ add to cart</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="p-catagory">Availability</td>
                                                <td>
                                                    <div class="p-stock">22 in stock</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="p-catagory">Weight</td>
                                                <td>
                                                    <div class="p-weight">1,3kg</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="p-catagory">Size</td>
                                                <td>
                                                    <div class="p-size">Xxl</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="p-catagory">Color</td>
                                                <td><span class="cs-color"></span></td>
                                            </tr>
                                            <tr>
                                                <td class="p-catagory">Sku</td>
                                                <td>
                                                    <div class="p-code">00012</div>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab-3" role="tabpanel">
                                    <div class="customer-review-option">
                                        <h4>2 Comments</h4>
                                        <div class="comment-option">
                                            <div class="co-item">
                                                <div class="avatar-pic">
                                                    <img src="img/product-single/avatar-1.png" alt="">
                                                </div>
                                                <div class="avatar-text">
                                                    <div class="at-rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                    <h5>Brandon Kelley <span>27 Aug 2019</span></h5>
                                                    <div class="at-reply">Nice !</div>
                                                </div>
                                            </div>
                                            <div class="co-item">
                                                <div class="avatar-pic">
                                                    <img src="img/product-single/avatar-2.png" alt="">
                                                </div>
                                                <div class="avatar-text">
                                                    <div class="at-rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                    <h5>Roy Banks <span>27 Aug 2019</span></h5>
                                                    <div class="at-reply">Nice !</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="personal-rating">
                                            <h6>Your Ratind</h6>
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                        </div>
                                        <div class="leave-comment">
                                            <h4>Leave A Comment</h4>
                                            <form action="#" class="comment-form">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <input type="text" placeholder="Name">
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <input type="text" placeholder="Email">
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <textarea placeholder="Messages"></textarea>
                                                        <button type="submit" class="site-btn">Send message</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Shop Section End -->

    <!-- Related Products Section End -->
    <div class="related-products spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Related Products</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="product-item">
                        <div class="pi-pic">
                            <img src="img/products/women-1.jpg" alt="">
                            <div class="sale">Sale</div>
                            <div class="icon">
                                <i class="icon_heart_alt"></i>
                            </div>
                            <ul>
                                <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
                                <li class="quick-view"><a href="#">+ Quick View</a></li>
                                <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                            </ul>
                        </div>
                        <div class="pi-text">
                            <div class="catagory-name">Coat</div>
                            <a href="#">
                                <h5>Pure Pineapple</h5>
                            </a>
                            <div class="product-price">
                                $14.00
                                <span>$35.00</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="product-item">
                        <div class="pi-pic">
                            <img src="img/products/women-2.jpg" alt="">
                            <div class="icon">
                                <i class="icon_heart_alt"></i>
                            </div>
                            <ul>
                                <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
                                <li class="quick-view"><a href="#">+ Quick View</a></li>
                                <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                            </ul>
                        </div>
                        <div class="pi-text">
                            <div class="catagory-name">Shoes</div>
                            <a href="#">
                                <h5>Guangzhou sweater</h5>
                            </a>
                            <div class="product-price">
                                $13.00
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="product-item">
                        <div class="pi-pic">
                            <img src="img/products/women-3.jpg" alt="">
                            <div class="icon">
                                <i class="icon_heart_alt"></i>
                            </div>
                            <ul>
                                <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
                                <li class="quick-view"><a href="#">+ Quick View</a></li>
                                <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                            </ul>
                        </div>
                        <div class="pi-text">
                            <div class="catagory-name">Towel</div>
                            <a href="#">
                                <h5>Pure Pineapple</h5>
                            </a>
                            <div class="product-price">
                                $34.00
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="product-item">
                        <div class="pi-pic">
                            <img src="img/products/women-4.jpg" alt="">
                            <div class="icon">
                                <i class="icon_heart_alt"></i>
                            </div>
                            <ul>
                                <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
                                <li class="quick-view"><a href="#">+ Quick View</a></li>
                                <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                            </ul>
                        </div>
                        <div class="pi-text">
                            <div class="catagory-name">Towel</div>
                            <a href="#">
                                <h5>Converse Shoes</h5>
                            </a>
                            <div class="product-price">
                                $34.00
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>  
    <!-- Related Products Section End -->
   

 <footer class="footer-section" style=" background-image: url(img/bg.PNG); color: rgb(42, 151, 153)">
        <div class="container455">
            <div class="row">
                <div class="col-lg-3">
                    <div class="footer-left">
                             <div class="footer-logo">
                        <a href="#" class="logo2" align="center">
                            <img src="./img/favicon.png" alt="">
                        </a>
                    </div>
                    <ul>
                        <li>Address: 347 Scorpion, Tabora-Accra</li>
                            <li>Phone:+233 277500001 </li>
                            <li>Email: support@tuatuagye.com</li>
                            <li>Email: Tuatuagye@gmail.com</li>
                        </ul>
                        <div class="footer-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 offset-lg-1">
                    <div class="footer-widget text">
                        <h5 >Information</h5>
                        <ul class="text">
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Checkout</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Serivius</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="footer-widget">
                        <h5 >My Account</h5>
                        <ul class="text">
                            <li><a href="#">My Account</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Shopping Cart</a></li>
                            <li><a href="#">Shop</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="newslatter-item">
                        <h5>Join Our Newsletter Now</h5>
                        <p class="text">Get E-mail updates about our latest shop and special offers.</p>
                        <form action="#" class="subscribe-form text">
                            <input type="text" placeholder="Enter Your Mail">
                            <button type="button">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
 
        <div class="copyright-reserved" float-right>
            <div class="container">
                <div class="row">
                                       <div class="copyright col-lg-12 float-left">
            &copy;
            <script>
              document.write(new Date().getFullYear())
            </script>, Powered by
            <a href="#" target="_blank">Brichghana.com</a>  <i class="material-icons">favorite</i>
          </div>
                    <div class="col-lg-12">

                        <div class="payment-pic">
                            <img src="img/payment-method.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
  
    </footer>
    <!-- Footer Section End -->


    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.zoom.min.js"></script>
    <script src="js/jquery.dd.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>


    <script>
        console.log('works');
    var formData = {
            requesting: true,
            product_id: <?php echo $id   ?>
          }
          console.log(formData);

          
/**********
 * product description
 **************/

$.ajax({
    type: "POST",
    url: "http://tuatuagye.com/test/Source/resources/config/route.php?func=get_descrip",
    data: formData, 

    success: function(data, textStatus, jqXHR)
            {
             console.log(data);
              $('div .description_').after(data);

            },
error: function (jqXHR, textStatus, errorThrown)
            {
              alert(errorThrown);
              
            }
});


//all this should be a unit function and called on this file

/**********
 * product name
 **************/

$.ajax({
    type: "POST",
    url: "http://tuatuagye.com/test/Source/resources/config/route.php?func=get_name",
    data: formData, 

    success: function(data, textStatus, jqXHR)
            {
             console.log(data);
              $('div .name_').after(data);

            },
error: function (jqXHR, textStatus, errorThrown)
            {
              alert(errorThrown);
              
            }
});


/**********
 * product ttg price
 **************/

$.ajax({
    type: "POST",
    url: "http://tuatuagye.com/test/Source/resources/config/route.php?func=get_ttg_price",
    data: formData, 

    success: function(data, textStatus, jqXHR)
            {
             console.log(data);
              $('div .ttg_price_').after(data);

            },
error: function (jqXHR, textStatus, errorThrown)
            {
              alert(errorThrown);
              
            }
});



    </script>

         
            
</body>

</html>


