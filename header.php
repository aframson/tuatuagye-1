<?php
/***************************
                header
      ***********************************/
function get_title($title){
      
      
if (!empty($title)){
    
$title = $title ;


}
else {$title = "online web store"; }

echo '
   <meta charset="UTF-8">
    <meta name="description" content="Tuatuagye">
    <meta name="keywords" content="Tuatuagye, BRICH, webapp, javascript">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tuatuagye | '.$title.'</title>

   

 <!-- Google Font -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <!-- Css Styles -->

	<link type="text/css" rel="stylesheet" href="css/slick.css"/>
 	<link type="text/css" rel="stylesheet" href="css/slick-theme.css"/>
    <!-- nouislider -->
 	<link type="text/css" rel="stylesheet" href="css/nouislider.min.css"/>
    <link rel="stylesheet" href="css/electro.css" type="text/css">
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/themify-icons.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">  
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
  <link href="css/material-dashboard.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/materialdemo.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
     <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="css/embedded.css" type="text/css">


         <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-PY66NSKPP7"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag("js", new Date());

  gtag("config", "G-PY66NSKPP7");
  function openForm() {
      document.getElementById("thebutton").style.display ="none";
document.getElementById("myForm").style.display = "block";
}

function closeForm() {

  document.getElementById("myForm").style.display = "none";
  document.getElementById("thebutton").style.display ="block";
  document.getElementById("1_ModalCenter").style.display ="none";


}

</script>

';

}
?>