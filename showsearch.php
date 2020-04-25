<?php 

include 'db.php';


$id = $_POST['mainid'];

$search = mysqli_query($con,"SELECT * FROM products WHERE id = '$id' ");


    while ($row = mysqli_fetch_array($search)) {
            

        echo '
        <div class="product-item">
        <div class="pi-pic">
            <img src="img/items/'.$row['name'].'" alt="">
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
                <h5>'.$row['show_name'].'</h5>
            </a>
            <div class="product-price">
                Ghc '.$row['amount'].'
            </div>
        </div>
    </div>
           
              ';

    }