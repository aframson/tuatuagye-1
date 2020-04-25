<?php

/***********************************
      index file
      ***********************************/
      
  
  
  
  
  
  
  
  
  
  
  
  
  
/*php end here*/
?> 
  
  
<!DOCTYPE html>
<html lang="eng">

<head>

    <?php include_once 'header.php';
    get_title('home');

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

							<p class="flyout-bottons"><a class="join-btn" data-role="join-link" href="javaScript:;" rel="nofollow" style=" background: rgb(42, 151, 153);">Join</a> <a class="sign-btn" data-role="sign-link" href="#" rel="nofollow" style="margin:0;" style=" background: rgb(42, 151, 153);">Sign in</a></p>
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


<button class="open-button" id="thebutton"  data-toggle="modal" data-target="#1_ModalCenter" onclick="openForm()" style="display:none">Chat</button>

<div class="chat-popup" id="myForm" style="background-image:url(img/bg.png)">
  <form action="" id="chatmessage" class="form-container" style="background-image:url(img/bg.PNG)">
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

<div class="add-to-cart">
 <!--top header navbar-->
<div class="header d-flex"  style=" background-image: url(img/bg.PNG); " >
<div class="container"  >
<div class="mobile container" >




<div class="btn-group" role="group" aria-label="">

    <div class="btn-group" role="group">
        <a href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="secondary">
         <i class="material-icons "
         style=" color: rgb(42, 151, 153)">reorder</i>

        </a>
        <div class="dropdown-menu" aria-labelledby="dropdownId">
            <a class="dropdown-item" href="#">item1</a>
            <a class="dropdown-item" href="#">itme2</a>
            <a class="dropdown-item" href="#">itme2</a>
        </div>
    </div>
</div>
<div class="site-mobile-menu-logo">
    <img src="./img/logo1.png" alt="" srcset="">

</div>
</div>

<div class="row">
                <!-- LOGO -->
                <div class="col-md-3">
                    <div class="header-logo">
                        <a href="#" class="logo1">
                            <img src="./img/logo1.png" alt="">
                        </a>
                    </div>

                </div>

                <!-- /LOGO -->

                <!-- SEARCH BAR -->
              <div class="search-btn">


                               <form class="navbar-form">
              <div class="input-group">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <button type="submit" class="btn btn-white btn-round btn-just-icon">
                  <i class="material-icons " style="color: white">search</i>
                  <div class="ripple-container"></div>
                </button>
              </div>
            </form>
              </div>

                <!-- /SEARCH BAR -->
                 <!-- ACCOUNT -->
         <div class="col-md-3 myadd clearfix">


        <div class="container-15">
                <div class="flexiblebox-1">
             <div class="header-ctn">

                    <div class="wish">
                            <a href="#">
                                <i class="fa fa-heart-o"></i>
                                <span  >Your Wishlist</span>
                                <div class="qty" style=" background-color: rgb(42, 151, 153)">2</div>
                            </a>
                        </div>
                        </div>

        </div>
        <div class="flexiblebox-2">
             <div class="header-ctn">

             <div class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true"href="cart.php" id="cart">
                <i class="material-icons" style=" color: white">add_shopping_cart</i>
                    <span style=" color: white">Your Cart</span>
                        <div class="qty" style=" background-color: rgb(42, 151, 153)">3</div></a></div></div>
                        </div>

        <div class="flexiblebox-3">
             <div class="header-ctn">
                <div class="dropdown coin">
                <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true" id="cart">
                <i class="material-icons" style=" color: white">donut_small</i>
                    <span style=" color: white">ttgcoin</span>
                        <div class="qty" style=" background-color: rgb(42, 151, 153)">123</div></a></div></div>
                        </div>

        </div>
      </div>
        </div>



</div>
</div>



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

    <!-- Hero Section Begin -->
    <section class="hero-section">
        
        <div class="hero-items owl-carousel">
            <div class="single-hero-items set-bg" data-setbg="img/tablet.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <span style="color: rgb(42, 151, 153);">Tuatuagye Discount</span>
                            <h2 style ="color:white">Super fast Delivery</h2>
                            <p style ="color:white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore</p>
                            <a href="#" class="primary-btn" style="background-color: rgb(42, 151, 153);">Shop Now</a>
                        </div>
                    </div>
                    <div class="off-card" style="background-color: rgb(42, 151, 153); ">
                        <h2>Sale <span>50%</span></h2>
                    </div>
                </div>
            </div>
            <div class="single-hero-items set-bg" data-setbg="img/tab.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                           <span style="color: rgb(42, 151, 153);">Tuatuagye Discount</span>
                            <h2 style ="color:white">Super fast Delivery</h2>
                            <p style ="color:white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore</p>
                            <a href="#" class="primary-btn" style="background-color: rgb(42, 151, 153);">Shop Now</a>
                        </div>
                    </div>
                    <div class="off-card" style="background-color: rgb(42, 151, 153);">
                        <h2>Sale <span>50%</span></h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Banner Section End -->

          <!-- products section -->

    <section class="section-name padding-y-sm" style="margin-top: 20px;">
    <div class="container">

    <header class="section-heading">
        <a href="#" class="btn btn-outline-primary float-right">See all</a>
        <h3 class="section-title">Popular products</h3>
    </header><!-- sect-heading -->
    <div class="row">

                      <div class="product-item">
                            <div class="pi-pic">
                                <img src="img/items/1.jpg" alt="">
                                <div class="icon">
                                    <i class="icon_heart_alt"></i>
                                </div>
                                <ul>
                                    <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
                                    <li class="quick-view"><a href="product.html">Buy</a></li>
                                    <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <div class="catagory-name">category</div>
                                <a href="#">
                                    <h5>product name</h5>
                                </a>
                                <div class="product-price">
                                    Ghc 13.00
                                </div>
                            </div>
                        </div>
                        
          
                                    <div class="product-item">
                            <div class="pi-pic">
                                <img src="img/items/2.jpg" alt="">
                                <div class="icon">
                                    <i class="icon_heart_alt"></i>
                                </div>
                                <ul>
                                    <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
                                    <li class="quick-view"><a href="#"> Buy </a></li>
                                    <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <div class="catagory-name">Shoes</div>
                                <a href="#">
                                    <h5>Guangzhou sweater</h5>
                                </a>
                                <div class="product-price">
                                    Ghc 13.00
                                </div>
                            </div>
                        </div>
        
                                    <div class="product-item">
                            <div class="pi-pic">
                                <img src="img/items/3.jpg" alt="">
                                <div class="icon">
                                    <i class="icon_heart_alt"></i>
                                </div>
                                <ul>
                                    <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
                                    <li class="quick-view"><a href="#">Buy</a></li>
                                    <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <div class="catagory-name">category</div>
                                <a href="#">
                                    <h5>product name</h5>
                                </a>
                                <div class="product-price">
                                    Ghc 13.00
                                </div>
                            </div>
                        </div>

                                                <div class="product-item">
                            <div class="pi-pic">
                                <img src="img/items/4.jpg" alt="">
                                <div class="icon">
                                    <i class="icon_heart_alt"></i>
                                </div>
                                <ul>
                                    <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
                                    <li class="quick-view"><a href="#"> Buy</a></li>
                                    <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <div class="catagory-name">Shoes</div>
                                <a href="#">
                                    <h5>Guangzhou sweater</h5>
                                </a>
                                <div class="product-price">
                                    Ghc 13.00
                                </div>
                            </div>
                        </div>
       <div class="product-item">
                            <div class="pi-pic">
                                <img src="img/items/5.jpg" alt="">
                                <div class="icon">
                                    <i class="icon_heart_alt"></i>
                                </div>
                                <ul>
                                    <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
                                    <li class="quick-view"><a href="#">Buy</a></li>
                                    <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <div class="catagory-name">category</div>
                                <a href="#">
                                    <h5>product name</h5>
                                </a>
                                <div class="product-price">
                                    Ghc 13.00
                                </div>
                            </div>
                        </div>
        <div class="product-item">
                            <div class="pi-pic">
                                <img src="img/items/6.jpg" alt="">
                                <div class="icon">
                                    <i class="icon_heart_alt"></i>
                                </div>
                                <ul>
                                    <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
                                    <li class="quick-view"><a href="#">Buy</a></li>
                                    <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <div class="catagory-name">category</div>
                                <a href="#">
                                    <h5>product name</h5>
                                </a>
                                <div class="product-price">
                                    Ghc 13.00
                                </div>
                            </div>
                        </div>
         <div class="product-item">
                            <div class="pi-pic">
                                <img src="img/items/9.jpg" alt="">
                                <div class="icon">
                                    <i class="icon_heart_alt"></i>
                                </div>
                                <ul>
                                    <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
                                    <li class="quick-view"><a href="#">Buy</a></li>
                                    <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <div class="catagory-name">category</div>
                                <a href="#">
                                    <h5>product name</h5>
                                </a>
                                <div class="product-price">
                                    Ghc 13.00
                                </div>
                            </div>
                        </div>
                 <div class="product-item">
                         <div class="pi-pic">
                             <img src="img/items/7.jpg" alt="">
                                <div class="icon">
                                    <i class="icon_heart_alt"></i>
                                </div>
                                <ul>
                                    <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
                                    <li class="quick-view"><a href="#">Buy</a></li>
                                    <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <div class="catagory-name">category</div>
                                <a href="#">
                                    <h5>product name</h5>
                                </a>
                                <div class="product-price">
                                    Ghc 13.00
                                </div>
                            </div>
                        </div>


                                                <div class="product-item">
                            <div class="pi-pic">
                                <img src="img/items/1.jpg" alt="">
                                <div class="icon">
                                    <i class="icon_heart_alt"></i>
                                </div>
                                <ul>
                                    <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
                                    <li class="quick-view"><a href="#">Buy</a></li>
                                    <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <div class="catagory-name">category</div>
                                <a href="#">
                                    <h5>product name</h5>
                                </a>
                                <div class="product-price">
                                    Ghc 13.00
                                </div>
                            </div>
                        </div>
                        
          
                                    <div class="product-item">
                            <div class="pi-pic">
                                <img src="img/items/2.jpg" alt="">
                                <div class="icon">
                                    <i class="icon_heart_alt"></i>
                                </div>
                                <ul>
                                    <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
                                    <li class="quick-view"><a href="#"> Buy </a></li>
                                    <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <div class="catagory-name">Shoes</div>
                                <a href="#">
                                    <h5>Guangzhou sweater</h5>
                                </a>
                                <div class="product-price">
                                    Ghc 13.00
                                </div>
                            </div>
                        </div>
        
                                    <div class="product-item">
                            <div class="pi-pic">
                                <img src="img/items/3.jpg" alt="">
                                <div class="icon">
                                    <i class="icon_heart_alt"></i>
                                </div>
                                <ul>
                                    <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
                                    <li class="quick-view"><a href="#">Buy</a></li>
                                    <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <div class="catagory-name">category</div>
                                <a href="#">
                                    <h5>product name</h5>
                                </a>
                                <div class="product-price">
                                    Ghc 13.00
                                </div>
                            </div>
                        </div>

                                                <div class="product-item">
                            <div class="pi-pic">
                                <img src="img/items/4.jpg" alt="">
                                <div class="icon">
                                    <i class="icon_heart_alt"></i>
                                </div>
                                <ul>
                                    <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
                                    <li class="quick-view"><a href="#"> Buy</a></li>
                                    <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <div class="catagory-name">Shoes</div>
                                <a href="#">
                                    <h5>Guangzhou sweater</h5>
                                </a>
                                <div class="product-price">
                                    Ghc 13.00
                                </div>
                            </div>
                        </div>
             
    

    </div> <!-- row.// -->


    </div><!-- row // -->
    </div><!-- container // -->
    </section>

          <!-- products section ends here -->


          
    <!-- Banner Section Begin -->
    <div class="banner-section spad">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <div class="single-banner">
                        <img src="img/fitbit.jpg" alt="">
                        <div class="inner-text">
                            <h4>Instant Purchase</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-banner">
                        <img src="img/TTG_WEB_1.jpg" alt="">
                        <div class="inner-text">
                            <h4>Tuatuagye</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-banner">
                        <img src="img/bitcoin.jpg" alt="">
                        <div class="inner-text">
                   <h4>    <i class="material-icons" style=" color: white">donut_small</i>
                             TTG COIN</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Women Banner Section Begin ******************************************************************************-->
     <section class="women-banner spad">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    <div class="product-large set-bg" data-setbg="img/products/women-large.jpg">
                        <h2>Tuatuage link here</h2>
                        <a href="#">Discover More</a>
                    </div>
                </div>
                <div class="col-lg-8 offset-lg-1">
                    <div class="filter-control">
                        <ul>
                            <li class="active">Clothings</li>
                            <li>HandBag</li>
                            <li>Shoes</li>
                            <li>Accessories</li>
                        </ul>
                    </div>
                    <div class="product-slider owl-carousel">
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
    </section>
    <!-- Women Banner Section End -->

    <!-- Deal Of The Week Section Begin-->
    <section class="deal-of-week set-bg spad" data-setbg="img/time-bg.jpg">
        <div class="container">
            <div class="col-lg-6 text-center">
                <div class="section-title">
                    <h2>Deal Of The Week</h2>
                    <p>Quick auction  Quick auction Quick auction Quick auction Quick auction
                        Quick auction Quick auction Quick auction Quick auction Quick auction  </p>
                    <div class="product-price">
                        $35.00
                        <span>/ product for the auction image here wild cover</span>
                    </div>
                </div>
                <div class="countdown-timer" id="countdown">
                    <div class="cd-item">
                        <span>56</span>
                        <p>Days</p>
                    </div>
                    <div class="cd-item">
                        <span>12</span>
                        <p>Hrs</p>
                    </div>
                    <div class="cd-item">
                        <span>40</span>
                        <p>Mins</p>
                    </div>
                    <div class="cd-item">
                        <span>52</span>
                        <p>Secs</p>
                    </div>
                </div>
                <a href="#" class="primary-btn" style="background-color: rgb(42, 151, 153);">Shop Now</a>
            </div>
        </div>
    </section>
    <!-- Deal Of The Week Section End -->

    <!-- Man Banner Section Begin -->
    <section class="man-banner spad">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8">
                    <div class="filter-control">
                        <ul>
                            <li class="active">Clothings</li>
                            <li>HandBag</li>
                            <li>Shoes</li>
                            <li>Accessories</li>
                        </ul>
                    </div>
                    <div class="product-slider owl-carousel">
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="img/products/man-1.jpg" alt="">
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
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="img/products/man-2.jpg" alt="">
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
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="img/products/man-3.jpg" alt="">
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
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="img/products/man-4.jpg" alt="">
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
                <div class="col-lg-3 offset-lg-1">
                    <div class="product-large set-bg m-large" data-setbg="img/products/man-large.jpg">
                        <h2>TTG testimonials </h2>
                        <a href="#">here</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Man Banner Section End -->







 <footer class="footer-section" style=" background-image: url(img/bg.png); color: rgb(42, 151, 153)">
        <div class="container455">
            <div class="row">
                <div class="col-lg-3">
                    <div class="footer-left">
                             <div class="footer-logo">
                        <a href="#" class="logo2" align="center">
                            <img src="./img/favicon.png" alt="">
                        </a>
                    </div>
                     <ul class="text">
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
            </script><strong><h3>Powered by</h3></strong>
            <a href="#" target="_blank">Brichghana.com</a><i class="material-icons">favorite</i>
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











    <!-- Footer Section End -->

    
    <!-- Js Plugins -->
		<script src="js/nouislider.min.js"></script>
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
  

            
</body>

</html>
  
  
  
  
  
  
  
  
   
      

