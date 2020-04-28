<!DOCTYPE html>
<html lang="en">

<head>
  <!-- meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Tuatuagye | register</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="./assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="./assets/vendors/iconfonts/ionicons/css/ionicons.css">
  <link rel="stylesheet" href="./assets/vendors/iconfonts/typicons/src/font/typicons.css">
  <link rel="stylesheet" href="./assets/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" href="./assets/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="./assets/vendors/css/vendor.bundle.addons.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="./assets/css/shared/style.css">
  <!-- endinject -->
  <!-- Layout styles -->
  <link rel="stylesheet" href="./assets/css/demo_1/style.css">
  <!-- End Layout styles -->
  <link rel="shortcut icon" href="../img/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth register-bg-1 theme-one">
        <div class="row w-100">
          <div class="col-lg-4 mx-auto">
            <h2 class="text-center mb-4">Register</h2>
            <div class="auto-form-wrapper">
              <form action="#" id="ttg_register">
                <div class="form-group">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Username" name="user_" required>
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Firstname" name="firstname_" required>
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="lastname" name="lastname_" required>
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="phone" name="phone_" required>
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Email" name="email_" required>
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group">
                    <input type="password" class="form-control" placeholder="Password" name="pass_" required> 
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group">
                    <input type="password" class="form-control" placeholder="Confirm Password" name="confirm_pass" required>
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="form-group d-flex justify-content-center">
                  <div class="form-check form-check-flat mt-0">
                    <label class="form-check-label">
                      <input type="checkbox" class="form-check-input" id="term_"> I agree to the terms </label>
                  </div>
                </div>
                <div class="form-group">
                  <button class="btn btn-primary submit-btn btn-block  "
                    <?php echo 'id="registerme" ' ; ?>>Register</button>
                </div>
                <div class="text-block text-center my-3">
                  <span class="text-small font-weight-semibold">Already have and account ?</span>
                  <a href="#222" class="text-black text-small">Login</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <style>
    .item-purchase-banner {
      background-image: url('../img/bg.PNG');
      display: flex;
      align-content: flex-start;

    }
    .item-purchase-banner h3{
      font-family: monospace;
    }

    .bg-img {
      background: url("../img/tablet.jpg") center center no-repeat;
      background-size: cover;
    }
  </style>
  <!-- plugins:js -->
  <script src="./assets/vendors/js/vendor.bundle.base.js"></script>
  <script src="./assets/vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="./assets/js/shared/off-canvas.js"></script>
  <script src="./assets/js/shared/misc.js"></script>
  <!-- endinject -->
  <script>
    $(function () {

      $('#registerme').click(function (e) {
        e.preventDefault();

        $.ajax({  
          type: "POST",
          url: "../Source/resources/config/route?func=ttg_register",
          data: $('#ttg_register').serialize(),
          dataType: "text",
          success: function (data, textStatus, jqXHR) {
            console.log(data);
           appendBanner(data);
            // $('div .ttg_price_').after(data);

          },
          error: function (jqXHR, textStatus, errorThrown) {
            console.log(errorThrown);
          }
        });



      });





      /*************************** */
      //definition
      /*************************** */
      function appendBanner(hello) {

        $("body").addClass("purchase-banner-active");
        $("body").prepend('\
          <div class= "item-purchase-banner">\
            <p class="text" > <h3 style="color:  rgb(42, 151, 153); " align ="center"> ' + hello + '</h3></p>\
            </div>\
        ')
        setTimeout(function (){
          $(".item-purchase-banner").slideUp(300);
          $("body").removeClass("purchase-banner-active");
          localStorage.setItem('bannerState', "disabled");
         }, 4000);

      }
    });
  </script>

</body>

</html>
