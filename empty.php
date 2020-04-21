<?php

/***************************
      empty file
 ***********************************/
//start session to get user info
//its very likey at this point the user has already visited home and started a session
session_start();
if (empty($_SESSION['username'])) {
    $_SESSION['username'] = $_SERVER['REMOTE_ADDR'];
}






/***********************
      php ends here
 ******************************/

echo '<script>console.log("script name : empty.php ");</script>';

?>
<!DOCTYPE html>
<html lang="eng">

<head>

    <?php  /* include_once 'header.php';
    get_title('empty');
                    */
    ?>

</head>

<body>

    <h1>hello world!</h1>
    <br>
    <h1>hello world!</h1><br>
    <h1>hello world!</h1><br>
    <h1>hello world!</h1><br>
    <h1>hello world!</h1>
    <h1>hello world!</h1><br>
    <h1>hello world!</h1>
    <br><br>
    <div class="test"></div>

  <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
      <link rel="stylesheet" href="css/style.css" type="text/css">
  

    <?php /* include_once 'footer.php'; */ ?>

    <footer>

        <!-- Js Plugins -->
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery-ui.min.js"></script>

        <script src="js/jquery.zoom.min.js"></script>
        <script src="js/jquery.dd.min.js"></script>

        <script>
            $(function() {

                $('a.buy-item').click(function(e) {
                    e.preventDefault();
                    var id = $(this).attr('id');

                    <?php

                    echo '
                console.log("' . $_SESSION["username"] . '");
                ';


                    ?>




                });
                console.log("thi is my first official after(data) try");
                $('.test').after("<h3>Jquery works</h3>");


                <?php

                                echo '
                console.log("' . $_SESSION["username"] . '");
                ';


                ?>



            });
        </script>

</body>

</html>