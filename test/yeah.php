<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div id="product-grid">
	<div class="txt-heading">Products</div>
	<?php
	$product_array = $db_handle->runQuery("SELECT * FROM tblproduct ORDER BY id ASC");
	if (!empty($product_array)) { 
		foreach($product_array as $key=>$value){
	?>
			<div class="product-item">
			<form id="frmCart">
			<div class="pi-pic">  <img src="<?php echo $product_array[$key]["image"]; ?>" alt="">
			<div class="icon"><i class="icon_heart_alt"></i></div>
    <ul><li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li><li class="quick-view"><a href="#"> Buy</a></li><li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li></ul></div>
    <div class="pi-text"><div class="catagory-name"><a href="#"><h5><strong><?php echo $product_array[$key]["name"]; ?></strong</h5></a></div>
	<div class="product-price">Ghc <?php echo "$".$product_array[$key]["price"]; ?></div> 
			<div><input type="text" id="qty_<?php echo $product_array[$key]["code"]; ?>" name="quantity" value="1" size="2" />
			<?php
				$in_session = "0";
				if(!empty($_SESSION["cart_item"])) {
					$session_code_array = array_keys($_SESSION["cart_item"]);
				    if(in_array($product_array[$key]["code"],$session_code_array)) {
						$in_session = "1";
				    }
				}
			?>
			<input type="button" id="add_<?php echo $product_array[$key]["code"]; ?>" value="Add to cart" class="btnAddAction cart-action" onClick = "cartAction('add','<?php echo $product_array[$key]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?> />
			<input type="button" id="added_<?php echo $product_array[$key]["code"]; ?>" value="Added" class="btnAdded" <?php if($in_session != "1") { ?>style="display:none" <?php } ?> />
			</div>
			</form>
		</div>
	<?php
			}
	}
	?>
</div>


<section class="section-name padding-y-sm" style="margin-top: 20px;">
    <div class="container">

    <header class="section-heading">
        <a href="#" class="btn btn-outline-primary float-right">See all</a>
        <h3 class="section-title">Popular products</h3>
    </header><!-- sect-heading -->
		<div class="row">
    <div class="product-item">
                            <div class="pi-pic">
                                <img src="img/items/4.jpg" alt="">
                                <div class="icon"><i class="icon_heart_alt"></i></div>
    <ul><li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li><li class="quick-view"><a href="#"> Buy</a></li><li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li></ul></div>
    <div class="pi-text"><div class="catagory-name">Shoes</div><a href="#"><h5>Guangzhou sweater</h5></a>
	<div class="product-price"> Ghc 13.00</div> 
</div> </div></div><!-- row // -->
    </div><!-- container // -->
    </section>



</body>
</html>



			<div class="product-item">
			<div class="pi-pic">  <img src="<?php echo $product_array[$key]["image"]; ?>" alt="">
			<div class="icon"><i class="icon_heart_alt"></i></div>
    <ul><li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li><li class="quick-view"><a href="#"> Buy</a></li><li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li></ul></div>
    <div class="pi-text"><div class="catagory-name"><a href="#"><h5><strong><?php echo $product_array[$key]["name"]; ?></strong</h5></a></div>
	<div class="product-price">Ghc <?php echo "$".$product_array[$key]["price"]; ?></div> 