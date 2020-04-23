<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
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
                    <input type="text" class="form-control" id="username" placeholder="Username" required>
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group">
                    <input type="text" class="form-control" id="firstname" placeholder="Firstname" required>
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group">
                    <input type="text" class="form-control" id="lastname" placeholder="lastname" required>
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group">
                    <input type="text" class="form-control" id="phone" placeholder="phone" required>
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group">
                    <input type="text" class="form-control" id="email" placeholder="Email" required>
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group">
                    <input type="password" class="form-control" id="password" placeholder="Password" required>
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group">
                    <input type="password" class="form-control" id="password_c" placeholder="Confirm Password" required>
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
                      <input type="checkbox" id="ischeck" class="form-check-input" checked required> 
                      I agree to the terms </label>
                  </div>
                </div>
                <div class="form-group">
                  <button class="btn btn-primary submit-btn btn-block">Register</button>
                </div>
                <div class="text-block text-center my-3">
                  <span class="text-small font-weight-semibold">Already have and account ?</span>
                  <a href="login.php" class="text-black text-small">Login</a>
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


      function appendBanner(message) {

        $("body").addClass("purchase-banner-active");
        $("body").prepend('\
          <div class= "item-purchase-banner">\
            <p class="text" > <h3 style="color:  rgb(42, 151, 153); " align ="center"> ' + message + '</h3></p>\
            </div>\
        ')
        setTimeout(function () {
          $(".item-purchase-banner").slideUp(300);
          $("body").removeClass("purchase-banner-active");
          localStorage.setItem('bannerState', "disabled");
        }, 5000);
                      
      }
      var formdata = {
          username : $('#username').val(),
          firstname : $('#firstname').val(),
          lastname : $('#lastname').val(),
          phone : $('#phone').val(),
          email : $('#email').val(),
          password : $('#password').val(),
          password_c : $('#password_c').val(),
          checked : $('#ischeck').is(':checked')
      }

              $('.btn-block').click(function (e) { 
                e.preventDefault();
                console.log(formdata);

                appendBanner("hello world");
              });

            
    });
  </script>
</body>

</html>