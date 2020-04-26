<?php
/***************************
      login file
      ***********************************/
//start session to get user info
//its very likey at this point the user has already visited home and started a session
session_start();
if (empty($_SESSION['username'])){
    $_SESSION['username'] = $_SERVER['REMOTE_ADDR'];
}


      
  
 
      
 /***********************
      php ends here
        ******************************/

echo '<script>console.log("script name : login.php ");</script>';

?>
    <!DOCTYPE html>
    <html lang="eng">

    <head>
        <?php include_once 'header.php'; 
            get_title("login");
        ?>
        <link rel="stylesheet" href="css/login.css">

    </head>

    <body>
        <link href="//i.alicdn.com/ae-header/20191217202516/buyer/glofront/ae-header.css" rel="stylesheet" type="text/css" />
        <div class="site-download-header" data-spm="100067" id="j-site-download-header" style="display:none;">
            <a href="#"><img data-src="#" /></a>
        </div>

        <div class="top-lighthouse" data-spm="1000001" id="top-lighthouse" style="z-index: 300">
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

                    <div class="ng-item-wrap ng-item ng-switcher" data-role="region-pannel">
                        <!-- switcher start -->
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
                        <!-- switcher end -->
                    </div>


                </div>
            </div>
        </div>



        <form id="login-form" class="login-form" name="form1" method="post" action="#">

            <div class="h1">Login</div>
            <div id="form-body" class="container">
                <div class="container">
                    <div class="form">
                        <input type="text" name="" autocomplete="off" id="" required />
                        <label for="name" class="label-name">
                    <span class="content-name"> Name</span>
                  </label>

                    </div>

                    <div class="form">
                        <input type="password" name="" autocomplete="off" id="" required />
                        <label for="name" class="label-password">
                    <span class="content-name"> Password</span>
                  </label>

                    </div>
                </div>
            </div>


            <div class="container">
                <div class="d-flex">
                    <button class="btn btn-success" style="background:white;  color: #3EC038;  margin:10px" align="center"> Sign In</button>
                    <button class="btn btn-success" style "width: 100%; margin:10px" align="center"> Sign Up</button>

                </div>

            </div>


        </form>



        <footer class="footer-section" style=" background-image: url(img/bg.PNG); color: rgb(42, 151, 153)">
            <?php include_once 'footer.php';  ?>
            <footer>


                <!-- Js Plugins -->
                <script src="js/jquery-3.3.1.min.js"></script>
                <script src="js/bootstrap.min.js"></script>
                <script src="js/jquery-ui.min.js"></script>

                <script src="js/jquery.zoom.min.js"></script>
                <script src="js/jquery.dd.min.js"></script>

                <script>
                    $(function() {

                        console.log("thi is my first official after(data) try");


                        /**********
                         * get header
                         **************/
                        var formData = {
                            requesting: true,
                            title: "login"

                        }
                        $.ajax({
                            type: "POST",
                            url: "http://tuatuagye.com/test/header.php",
                            data: formData,

                            success: function(data, textStatus, jqXHR) {
                                //   console.log(data);
                                //  $().hide('slow');
                                //   $('.main-header').before(data);
                                console.log("post request sent successfully");


                            },
                            error: function(jqXHR, textStatus, errorThrown) {
                                alert(errorThrown);

                            }
                        });






                    });
                </script>

    </body>

    </html>