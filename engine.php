<?php  



include 'db.php';

$select  = mysqli_query($con,"SELECT * FROM ttg_cart ");

while ($row = mysqli_fetch_array($select)) {

    
       $total[] = $row['price']*$row['quantity'];

        echo '
             <li class="fw-normal">'.$row['product_name'].' x '.$row['quantity'].' <span>'.$row['price']*$row['quantity'].'</span></li>';

}

     echo '<li class="total-price">Total <span>$'.array_sum($total).'</span></li>';;

