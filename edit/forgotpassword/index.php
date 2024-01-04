
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Forgot Password | Affiliate Marketing - Sell Land Remotely</title>

  <!-- Favicon -->
  <link rel="shortcut icon" href="<?php echo URL; ?>public/assets/images/favicon.ico" />

  <!-- Library / Plugin Css Build -->
  <link rel="stylesheet" href="<?php echo URL; ?>public/assets/css/core/libs.min.css" />


  <!-- Hope Ui Design System Css -->
  <link rel="stylesheet" href="<?php echo URL; ?>public/assets/css/hope-ui.min.css?v=2.0.0" />

  <!-- Custom Css -->
  <link rel="stylesheet" href="<?php echo URL; ?>public/assets/css/custom.min.css?v=2.0.0" />

  <!-- Dark Css -->
  <link rel="stylesheet" href="<?php echo URL; ?>public/assets/css/dark.min.css"/>

  <!-- Customizer Css -->
  <link rel="stylesheet" href="<?php echo URL; ?>public/assets/css/customizer.min.css" />

  <!-- RTL Css -->
  <link rel="stylesheet" href="<?php echo URL; ?>public/assets/css/rtl.min.css"/>
  <script src="https://smtpjs.com/v3/smpt.js"></script>


</head>
<body class=" " data-bs-spy="scroll" data-bs-target="#elements-section" data-bs-offset="0" tabindex="0">
  <!-- loader Start -->
  <div id="loading">
    <div class="loader simple-loader">
      <div class="loader-body"></div>
    </div>    </div>
    <!-- loader END -->
    <style media="screen">
      input::-webkit-outer-spin-button,
      input::-webkit-inner-spin-button{
      -webkit-appearance:none;
      margin: 0;
      }
    </style>
    <div class="wrapper">
      <section class="login-content">
        <div class="row m-0 align-items-center bg-white vh-100">
          <div class= "col-md-6 d-md-block d-none bg-white  overflow-hidden">
             <!-- <img src="<?php echo URL; ?>public/assets/images/auth/01.png" class="img-fluid gradient-main animated-scaleX" alt="images"> -->
             <div id="demo" class="  carousel slide " data-bs-ride="carousel">

               <!-- Indicators/dots -->
               <div class="carousel-indicators">
                 <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                 <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                 <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
               </div>

               <!-- The slideshow/carousel -->
               <div class="carousel-inner">
                 <div class="carousel-item active">
                   <img src="<?php echo URL; ?>public/images/step1.jpg" alt="Los Angeles" class="d-block" style="width:100%">
                 </div>
                 <div class="carousel-item">
                   <img src="<?php echo URL; ?>public/images/step2.jpg" alt="Chicago" class="d-block" style="width:100%">
                 </div>
                 <div class="carousel-item">
                   <img src="<?php echo URL; ?>public/images/step1.jpg" alt="New York" class="d-block" style="width:100%">
                 </div>
               </div>

               <!-- Left and right controls/icons -->
               <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                 <span class="carousel-control-prev-icon"></span>
               </button>
               <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                 <span class="carousel-control-next-icon"></span>
               </button>
             </div>

          </div>
          <div class="col-md-6 p-0">
            <div class="card card-transparent auth-card shadow-none d-flex justify-content-center mb-0">
              <div class="card-body">
                <a href="" class="navbar-brand d-flex align-items-center justify-content-center text-center mb-3">
                  <!--Logo start-->
                  <!--logo End-->

                  <!--Logo start-->
                  <img src="<?php echo URL; ?>public/images/logo.png" alt="" height="90px;">

                  <!--logo End-->




                </a>
                <h2 class="mb-2">Forgot Password</h2>
                <p class="text-center">Affiliate Marketing Dashboard.</p>
                <div class="d-flex justify-content-between pt-4 mb-3 " style="padding-left:20px; padding-right:20px;" >
                  <button type="button" class="btn btn-primary tablinks" name="button" id="ResetEmail_tab"><i class="fa fa-envelope ml-4"></i>By Email</button>
                  <button type="button" class="btn btn-primary tabliks" name="button" id="ResetSms_tab"><i class="fa fa-phone-alt ml-4"></i>By SMS</button>
                </div>
                <div id="ResetEmail">
                  <p>Enter your email address and we'll send you an email with instructions to reset your password.</p>
                  <form action="<?php echo URL; ?>forgotpassword/sendemail" method="post" >
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="floating-label form-group">
                          <!-- <label for="email" class="form-label">Email</label> -->
                          <input class="form-control" type="email" id="email" name="email" required="" placeholder="Enter your email">
                          <div class="text-danger fs-7" id="emailerr">

                          </div>
                        </div>
                      </div>
                      <div class="mb-3" style="display:none;" id="pindiv">
                          <label for="phone" class="form-label">Enter Pin to Continue</label>
                          <input class="form-control" type="number" id="pin" name="pin" required="" placeholder="Enter your Pin" maxlength="4">
                          <div class="text-danger fs-7" id="pinerr">

                          </div>
                      </div>
                    </div>
                    <button class="btn btn-primary disabled " id="emaildivpassword" type="submit" > Reset Password </button>
                  </form>
                </div>
                <div id="ResetSms" style="display:none;">
                  <p>Enter your Phone Number and we'll send you a SMS with instructions to reset your password.</p>
                  <form>
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="floating-label form-group">
                          <!-- <label for="mobile" class="form-label">Phone Number</label> -->
                          <input class="form-control" type="number" id="mobile"  name="mobile" required="" placeholder="Enter your Phone Number" maxlength="11">
                          <div class="text-danger fs-7" id="mobileerr">

                          </div>
                        </div>
                      </div>
                      <div class="mb-3" style="display:none;" id="smspindiv">
                          <label for="phone" class="form-label">Enter Pin to Continue</label>
                          <input class="form-control" type="number" id="smspin" name="pin" required="" placeholder="Enter your Pin" maxlength="4">
                          <div class="text-danger fs-7" id="smspinerr">

                          </div>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Reset</button>
                  </form>
                </div>
                <p class="mt-3 text-center">
                   Back to <a href="<?php echo URL; ?>index" class="text-underline">Login</a>
                </p>
              </div>
            </div>

          </div>
        </div>
      </section>
    </div>
    <script type="text/javascript">
    // var inputQuantity = [];
    $(function() {
      $("#pin").on("keyup", function (e) {
        var $field = $(this),
            val=this.value,
            $thisIndex=parseInt($field.data("idx"),10);
        if (this.validity && this.validity.badInput || isNaN(val) || $field.is(":invalid") ) {
            this.value = inputQuantity[$thisIndex];
            return;
        }
        if (val.length > Number($field.attr("maxlength"))) {
          val=val.slice(0, 4);
          $field.val(val);
        }
        inputQuantity[$thisIndex]="";
      });
    });
    $(function() {
      $("#smspin").on("keyup", function (e) {
        var $field = $(this),
            val=this.value,
            $thisIndex=parseInt($field.data("idx"),10);
        if (this.validity && this.validity.badInput || isNaN(val) || $field.is(":invalid") ) {
            this.value = inputQuantity[$thisIndex];
            return;
        }
        if (val.length > Number($field.attr("maxlength"))) {
          val=val.slice(0, 4);
          $field.val(val);
        }
        inputQuantity[$thisIndex]="";
      });
    });
    // var inputQuantity = [];
    $(function() {
      $("#mobile").on("keyup", function (e) {
        var $field = $(this),
            val=this.value,
            $thisIndex=parseInt($field.data("idx"),10);
        if (this.validity && this.validity.badInput || isNaN(val) || $field.is(":invalid") ) {
            this.value = inputQuantity[$thisIndex];
            return;
        }
        if (val.length > Number($field.attr("maxlength"))) {
          val=val.slice(0, 11);
          $field.val(val);
        }
        inputQuantity[$thisIndex]="";
      });
    });

    </script>
    <script type="text/javascript">
    $("#ResetSms_tab").click(function(){
      // alert();
      $("#ResetSms").css("display", "block");
      $("#ResetEmail").css("display", "none");

    });

    $("#ResetEmail_tab").click(function(){
      // alert();
      $("#ResetSms").css("display", "none");
      $("#ResetEmail").css("display", "block");

    });

    </script>
    <!-- Library Bundle Script -->
    <script src="<?php echo URL; ?>public/assets/js/core/libs.min.js"></script>

    <!-- External Library Bundle Script -->
    <script src="<?php echo URL; ?>public/assets/js/core/external.min.js"></script>

    <!-- Widgetchart Script -->
    <script src="<?php echo URL; ?>public/assets/js/charts/widgetcharts.js"></script>

    <!-- mapchart Script -->
    <script src="<?php echo URL; ?>public/assets/js/charts/vectore-chart.js"></script>
    <script src="<?php echo URL; ?>public/assets/js/charts/dashboard.js" ></script>

    <!-- fslightbox Script -->
    <script src="<?php echo URL; ?>public/assets/js/plugins/fslightbox.js"></script>

    <!-- Settings Script -->
    <script src="<?php echo URL; ?>public/assets/js/plugins/setting.js"></script>

    <!-- Slider-tab Script -->
    <script src="<?php echo URL; ?>public/assets/js/plugins/slider-tabs.js"></script>

    <!-- Form Wizard Script -->
    <script src="<?php echo URL; ?>public/assets/js/plugins/form-wizard.js"></script>

    <!-- AOS Animation Plugin-->

    <!-- App Script -->
    <script src="<?php echo URL; ?>public/assets/js/hope-ui.js" defer></script>

  </body>
  </html>
