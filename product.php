<?php
/***************************
      product page
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

//this will be continued later tonight after i work on the user auth
Class recently_viewed {

        public  $cart_list = array();


        public function __construct($user){
        $this->user = $user;

    }

      function user(){

        $user = $_SESSION['username'];

    }
    




    function cart_list()
    {
        array_push($cart_list, $this->item);   
    }


}

 /* 
    $connect = mysqli_connect("localhost", "vxkgn0fmfww", ">##e(a}T%5P", "TuaTuaGye Data");
    if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

  */
  
  $record_per_page = 70;
    $page = '';
    $output = '';


    if (isset($_POST["page"])) {
        $page = $_POST["page"];
    } else {
        $page = 3;
    }

    $start_from = ($page - 1) * $record_per_page;

      
 /***********************
      php ends here
        ******************************/
?>






<!DOCTYPE html>
<html lang="eng">

<head>
        <?php include_once 'header.php';  
        get_title('products');
        ?>
</head>

<body>
    <!-- Page Preloder -->
    <!-- Page Preloder -->

    <div class="menustick">
        <ul class="ul">
            
            <li class="li"><a class="a" href="#">Your Cart</a></li>
            <li class="li"><a class="a" href="#">Your wishlist</a></li>
            <li class="li"><a class="a" href="#">ttgCoin</a></li>
            <li class="li"><a class="a" href="#">Products</a></li>
            <li class="li"><a class="a" href="#">Tuaguagye</a></li>
            <li class="li"><a class="a" href="#">Catergories</a></li>
            <li class="li"><a class="a" href="#">others</a></li>
            <li class="li"><a class="a" href="#">Support</a></li>
        </ul>
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

            <?php include_once 'main_nav.php'; 
                    get_nav('hi'); ?>
<div class="navbar" style=" background-image: url(img/bg.PNG); margin-top: -18px"></div>
      
                            <!-- end of scroll advertisment -->

        <!-- navbar-->      
  
        <!-- displays search product -->

        <div class="searchdrop">
          
        </div>


        <!-- navbar-->
        <nav class="site-header sticky-top py-1 bootstrap-nav ">
      <div class="container d-flex flex-column flex-md-row justify-content-between">
          <img class="imgmenuxx" src="img/menu.png">
          <img class="imgmenuxxx" id="closex" src="img/cancel.png">

         
          <img class="midle1" src="img/logo1.png" alt="" srcset="">
         
          <!-- <img class="logogxx" src="./img/menu2.png" alt=""> -->


        <a class="py-2 d-none d-md-inline-block" href="product">Products</a>
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
                        <a href="./index.html"><i class="fa fa-home"></i> Home</a>
                        <a href="./shop.html">Shop</a>
                        <span>Detail</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section Begin -->

    <!-- Product Shop Section Begin -->

      <section class="section-name padding-y-sm hero-section" style="margin-top: 20px;">
    <div class="container">

    <header class="section-heading">
        <a href="#" class="btn btn-outline-primary float-right">See all</a>
        <h3 class="section-title">Popular products</h3>
    </header><!-- sect-heading -->
    <div class="row">

    
   

    <?php

      $query = "SELECT * FROM ttg_product ORDER BY product_id ";
    $result = mysqli_query($connect, $query);
    if (!$result) {
   echo mysqli_error($connect) ;
   // exit();
}
     while ($row = mysqli_fetch_array($result)) {
    $output .= ' 
   
                    <div class="product-item">
                        <div class="pi-pic">
                          <img src="http://tuatuagye.brichghana.com/upload/image/'.$row["image"].'" alt="">
                            <div class="icon">
                                <i class="icon_heart_alt"></i>
                            </div>
                            <ul>
                                <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
                                <li class="quick-view"><a href="#" class="buy-item" id ="'.$row['product_id'].'">Buy</a></li>
                                <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                            </ul>
                        </div>
                        <div class="pi-text">
                              <h5>'. $row["model"]. '</h5>
                            
                            <a href="#">
                        
                 
                              <div class="catagory-name"><h7>category name</h7></div>
                            </a>
                            <div class="product-price">
                             Ghc '. $row["price"]. '
                            </div>
                        </div>
                    </div>
                 ';
        // check if more than 0 record found
       
	 }

	 echo       $output;

?>
    </div>  
    </div>  
      </section>
         
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
                                <li class="quick-view shop-item-button"><a href="#">+ Quick View</a></li>
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
    <link rel="stylesheet" href="css/embedded.css" type="text/css">

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
                /************************************************/
                                //#get product id
               /************************************************/
    $(function () {

                        $('a.buy-item').click(function (e) { 
                            e.preventDefault();
                                 var id = $(this).attr('id') ;
                                 
                            <?php

                            echo '
                             //  alert("'.$_SESSION["username"].'");
                             ';

                             /*
                             $recently_viewed = new recently_viewed($user);      
                             $recently_viewed->$cart_list = $id;
                             $recently_viewed->$cart_list();


                            
                             if (empty($cart_list)){
                                //code
                             }
                             else{

                             }
                            */
                             ?>
    window.location = "./cart.php?product_id= "+ id;

                               
                         
                            console.log("thi is my first official after(data) try")
                                });

          });
                            </script>
</body>

</html>


