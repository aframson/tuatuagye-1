$id =  !isset($_SESSION['id'])?$_SERVER['REMOTE_ADDR']:$_SESSION['id'];





 function fetchItems($id)
      {
            
          include 'db.php';
          $sele= mysqli_query($con,"SELECT * FROM ttg_product");

          while ($row  = mysqli_fetch_array($sele)) {
            
            echo '
            <div id="pid:'.$row['product_id'].':'.$id.'" class="product-item">
            <div class="pi-pic">
          
                  <img src="img/items/'.$row['image'].'" alt="">
           
               
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
                    <h5>'.$row['model'].'</h5>
                </a>
                <div class="product-price">
                    Ghc '.$row['price'].'
                </div>
            </div>
        </div>
               
                  ';

          }
      }
