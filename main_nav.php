<?php


function get_nav($sth){
    
    echo '


<div class="add-to-cart">
 <!--top header navbar-->
<div class="header d-flex" style=" background-image: url(img/bg.PNG);" >
<div class="container"  >
<div class="mobile container" >

<div class="btn-group" role="group" aria-label="">

    <div class="btn-group" role="group">
        <a href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="secondary">
         

        </a>
        <div class="dropdown-menu" aria-labelledby="dropdownId">
            <a class="dropdown-item" href="#">item1</a>
            <a class="dropdown-item" href="#">itme2</a>
            <a class="dropdown-item" href="#">itme2</a>
        </div>
    </div>
</div>


</div>

<div class="row">
                <!-- LOGO -->
                <div class="col-md-3">
                    <div class="header-logo">
                        <a href="#" class="logo1">
                            <img class="logog" src="./img/logo1.png" alt="">
                        </a>
                    </div>

                </div>

                <!-- /LOGO -->

                <!-- SEARCH BAR -->
              <div  class="search-btn">


             <form class="navbar-form">
                <div class="input-group">
                  <input type="text" value=""  class="form-control" placeholder="Search...">
                </div>
                <img id="sericon" src="img/ser.png">
             </form>
               
            </div>

               
         <div class="col-md-3 myadd clearfix">

         <img class="imgmenu" src="img/menu.png">
        <div class="container-15">
    
          

                <div class="flexiblebox-1">

             <div class="header-ctn">

                    <div class="wish">
                            <a href="#">
                                <i class="fa fa-heart-o"></i>
                                <span >Your Wishlist</span>
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



';
}