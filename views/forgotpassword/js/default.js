$(document).ready(function(){
  // alert();
  $("#email").keyup(function(){
    // alert();
    var email=$('#email').val();
    var emailObj = document.getElementById("email");
    $.post("forgotpassword/verifyemail",
    {email:email},
    function(data){
      var myresponse=(data.found_status);
      if (email=="") {
        $("#email").css("border-color","#dc3545" ).delay(9000);
        $("#email").css("padding-right","calc(1.5em + 0.75rem)" ).delay(9000);
        $("#email").css("background-image","url('public/images/download.svg')" ).delay(9000);
        $("#email").css("background-repeat","no-repeat").delay(9000);
        $("#email").css("background-position","center right calc(0.375em + 0.1875rem)" ).delay(9000);
        $("#email").css("background-size"," calc(0.75em + 0.375rem) calc(0.75em + 0.375rem)" ).delay(9000);
        document.getElementById("emailerr").innerHTML = "Email Address must not be empty";
        // $("#invalid-feedback2").css("display","none" ).delay(9000);

      }
      else if (!emailObj.checkValidity()) {
        $("#email").css("border-color","#dc3545" ).delay(9000);
        $("#email").css("padding-right","calc(1.5em + 0.75rem)" ).delay(9000);
        $("#email").css("background-image","url('public/images/download.svg')" ).delay(9000);
        $("#email").css("background-repeat","no-repeat").delay(9000);
        $("#email").css("background-position","center right calc(0.375em + 0.1875rem)" ).delay(9000);
        $("#email").css("background-size"," calc(0.75em + 0.375rem) calc(0.75em + 0.375rem)" ).delay(9000);
        document.getElementById("emailerr").innerHTML = emailObj.validationMessage;
        return;
      }
      else if(myresponse=="No"){
        // $('#email').val("");
        setTimeout(function(){
          $("#email").css("border-color","#dc3545" ).delay(9000);
          $("#email").css("padding-right","calc(1.5em + 0.75rem)" ).delay(9000);
          $("#email").css("background-image","url('public/images/download.svg')" ).delay(9000);
          $("#email").css("background-repeat","no-repeat").delay(9000);
          $("#email").css("background-position","center right calc(0.375em + 0.1875rem)" ).delay(9000);
          $("#email").css("background-size"," calc(0.75em + 0.375rem) calc(0.75em + 0.375rem)" ).delay(9000);
          document.getElementById("emailerr").innerHTML = "Email Address does not exist";
          // $("#invalid-feedback1").css("display","none" ).delay(9000);
          // $("#invalid-feedback2").css("display","block" ).delay(9000);
        },);
      }
      else if(myresponse=="Yes"){
        setTimeout(function(){
          $("#email").css("border-color","#28a745" ).delay(9000);
          $("#email").css("padding-right","calc(1.5em + 0.75rem)" ).delay(9000);
          $("#email").css("background-image","url('public/images/greentick.svg')" ).delay(9000);
          $("#email").css("background-repeat","no-repeat").delay(9000);
          $("#email").css("background-position","center right calc(0.375em + 0.1875rem)" ).delay(9000);
          $("#email").css("background-size"," calc(0.75em + 0.375rem) calc(0.75em + 0.375rem)" ).delay(9000);
          document.getElementById("emailerr").innerHTML = "";
          $("#pindiv").css("display","block" );


          // $("#invalid-feedback1").css("display","none" ).delay(9000);
          // $("#invalid-feedback2").css("display","none" ).delay(9000);
        },);
      }
    },'json');
  });
  $("#email").focusout(function(){
    var email=$('#email').val();
    $.post("forgotpassword/verifyemail",
    {email:email},
    function(data){
      var myresponse=(data.found_status);
      if (email=="") {
        $("#email").css("border-color","#dc3545" ).delay(9000);
        $("#email").css("padding-right","calc(1.5em + 0.75rem)" ).delay(9000);
        $("#email").css("background-image","url('public/images/download.svg')" ).delay(9000);
        $("#email").css("background-repeat","no-repeat").delay(9000);
        $("#email").css("background-position","center right calc(0.375em + 0.1875rem)" ).delay(9000);
        $("#email").css("background-size"," calc(0.75em + 0.375rem) calc(0.75em + 0.375rem)" ).delay(9000);
        document.getElementById("emailerr").innerHTML = "Email Address must not be empty";

        // $("#invalid-feedback1").css("display","block" ).delay(9000);
        // $("#invalid-feedback2").css("display","none" ).delay(9000);

      }
      else if(myresponse=="No"){
        $('#email').val("");
        setTimeout(function(){
          $("#email").css("border-color","#dc3545" ).delay(9000);
          $("#email").css("padding-right","calc(1.5em + 0.75rem)" ).delay(9000);
          $("#email").css("background-image","url('public/images/download.svg')" ).delay(9000);
          $("#email").css("background-repeat","no-repeat").delay(9000);
          $("#email").css("background-position","center right calc(0.375em + 0.1875rem)" ).delay(9000);
          $("#email").css("background-size"," calc(0.75em + 0.375rem) calc(0.75em + 0.375rem)" ).delay(9000);
          document.getElementById("emailerr").innerHTML = "Email Address does not exist";
          // $("#invalid-feedback1").css("display","none" ).delay(9000);
          // $("#invalid-feedback2").css("display","block" ).delay(9000);
        },);
      }
      else if(myresponse=="Yes"){
        setTimeout(function(){
          $("#email").css("border-color","#28a745" ).delay(9000);
          $("#email").css("padding-right","calc(1.5em + 0.75rem)" ).delay(9000);
          $("#email").css("background-image","url('public/images/greentick.svg')" ).delay(9000);
          $("#email").css("background-repeat","no-repeat").delay(9000);
          $("#email").css("background-position","center right calc(0.375em + 0.1875rem)" ).delay(9000);
          $("#email").css("background-size"," calc(0.75em + 0.375rem) calc(0.75em + 0.375rem)" ).delay(9000);
          document.getElementById("emailerr").innerHTML = "";
          $("#pindiv").css("display","block" );
          // $("#invalid-feedback2").css("display","none" ).delay(9000);
        },);
      }
    },'json');
  });
  $("#pin").keyup(function(){
    var email=$('#email').val();
    var pin=$('#pin').val();
    $.post("forgotpassword/matchemail",
    {email:email, pin:pin},
    function(data){
      var myresponse=(data.found_status);
      if (pin=="") {
        $("#pin").css("border-color","#dc3545" ).delay(9000);
        $("#pin").css("padding-right","calc(1.5em + 0.75rem)" ).delay(9000);
        $("#pin").css("background-image","url('public/images/download.svg')" ).delay(9000);
        $("#pin").css("background-repeat","no-repeat").delay(9000);
        $("#pin").css("background-position","center right calc(0.375em + 0.1875rem)" ).delay(9000);
        $("#pin").css("background-size"," calc(0.75em + 0.375rem) calc(0.75em + 0.375rem)" ).delay(9000);
        document.getElementById("pinerr").innerHTML = "Pin must not be empty";
        $("#emaildivpassword").addClass("disabled");
        // $("#invalid-feedback2").css("display","none" ).delay(9000);

      }
      else if(myresponse=="No"){
        // $('#pin').val("");
        setTimeout(function(){
          $("#pin").css("border-color","#dc3545" ).delay(9000);
          $("#pin").css("padding-right","calc(1.5em + 0.75rem)" ).delay(9000);
          $("#pin").css("background-image","url('public/images/download.svg')" ).delay(9000);
          $("#pin").css("background-repeat","no-repeat").delay(9000);
          $("#pin").css("background-position","center right calc(0.375em + 0.1875rem)" ).delay(9000);
          $("#pin").css("background-size"," calc(0.75em + 0.375rem) calc(0.75em + 0.375rem)" ).delay(9000);
          document.getElementById("pinerr").innerHTML = "Pin is Incorrect";
          $("#emaildivpassword").addClass("disabled");

          // $("#invalid-feedback1").css("display","none" ).delay(9000);
          // $("#invalid-feedback2").css("display","block" ).delay(9000);
        },);
      }
      else if(myresponse=="Yes"){
        setTimeout(function(){
          $("#pin").css("border-color","#28a745" ).delay(9000);
          $("#pin").css("padding-right","calc(1.5em + 0.75rem)" ).delay(9000);
          $("#pin").css("background-image","url('public/images/greentick.svg')" ).delay(9000);
          $("#pin").css("background-repeat","no-repeat").delay(9000);
          $("#pin").css("background-position","center right calc(0.375em + 0.1875rem)" ).delay(9000);
          $("#pin").css("background-size"," calc(0.75em + 0.375rem) calc(0.75em + 0.375rem)" ).delay(9000);
          document.getElementById("pinerr").innerHTML = "";
          // $("#pindiv").css("display","block" );
          $("#emaildivpassword").removeClass("disabled");

          // $("#invalid-feedback1").css("display","none" ).delay(9000);
          // $("#invalid-feedback2").css("display","none" ).delay(9000);
        },);
      }
    },'json');
  });
  $("#mobile").keyup(function(){
    // alert();
    // alert();
    var mobile=$('#mobile').val();
    $.post("forgotpassword/verifymobile",
    {mobile:mobile},
    function(data){
      var myresponse=(data.found_status);
      if (mobile=="") {
        $("#mobile").css("border-color","#dc3545" ).delay(9000);
        $("#mobile").css("padding-right","calc(1.5em + 0.75rem)" ).delay(9000);
        $("#mobile").css("background-image","url('public/images/download.svg')" ).delay(9000);
        $("#mobile").css("background-repeat","no-repeat").delay(9000);
        $("#mobile").css("background-position","center right calc(0.375em + 0.1875rem)" ).delay(9000);
        $("#mobile").css("background-size"," calc(0.75em + 0.375rem) calc(0.75em + 0.375rem)" ).delay(9000);
        document.getElementById("mobileerr").innerHTML = "Phone Number must not be empty";
        // $("#invalid-feedback2").css("display","none" ).delay(9000);

      }
      else if(myresponse=="No"){
        // $('#mobile').val("");
        setTimeout(function(){
          $("#mobile").css("border-color","#dc3545" ).delay(9000);
          $("#mobile").css("padding-right","calc(1.5em + 0.75rem)" ).delay(9000);
          $("#mobile").css("background-image","url('public/images/download.svg')" ).delay(9000);
          $("#mobile").css("background-repeat","no-repeat").delay(9000);
          $("#mobile").css("background-position","center right calc(0.375em + 0.1875rem)" ).delay(9000);
          $("#mobile").css("background-size"," calc(0.75em + 0.375rem) calc(0.75em + 0.375rem)" ).delay(9000);
          document.getElementById("mobileerr").innerHTML = "Phone Number does not exist";
          // $("#invalid-feedback1").css("display","none" ).delay(9000);
          // $("#invalid-feedback2").css("display","block" ).delay(9000);
        },);
      }
      else if(myresponse=="Yes"){
        setTimeout(function(){
          $("#mobile").css("border-color","#28a745" ).delay(9000);
          $("#mobile").css("padding-right","calc(1.5em + 0.75rem)" ).delay(9000);
          $("#mobile").css("background-image","url('public/images/greentick.svg')" ).delay(9000);
          $("#mobile").css("background-repeat","no-repeat").delay(9000);
          $("#mobile").css("background-position","center right calc(0.375em + 0.1875rem)" ).delay(9000);
          $("#mobile").css("background-size"," calc(0.75em + 0.375rem) calc(0.75em + 0.375rem)" ).delay(9000);
          document.getElementById("mobileerr").innerHTML = "";
          // alert();
          $("#smspindiv").css("display","block" );


          // $("#invalid-feedback1").css("display","none" ).delay(9000);
          // $("#invalid-feedback2").css("display","none" ).delay(9000);
        },);
      }
    },'json');
  });
  $("#mobile").focusout(function(){
    // alert();
    // alert();
    var mobile=$('#mobile').val();
    $.post("forgotpassword/verifymobile",
    {mobile:mobile},
    function(data){
      var myresponse=(data.found_status);
      if (mobile=="") {
        $("#mobile").css("border-color","#dc3545" ).delay(9000);
        $("#mobile").css("padding-right","calc(1.5em + 0.75rem)" ).delay(9000);
        $("#mobile").css("background-image","url('public/images/download.svg')" ).delay(9000);
        $("#mobile").css("background-repeat","no-repeat").delay(9000);
        $("#mobile").css("background-position","center right calc(0.375em + 0.1875rem)" ).delay(9000);
        $("#mobile").css("background-size"," calc(0.75em + 0.375rem) calc(0.75em + 0.375rem)" ).delay(9000);
        document.getElementById("mobileerr").innerHTML = "Phone Number must not be empty";
        // $("#invalid-feedback2").css("display","none" ).delay(9000);

      }
      else if(myresponse=="No"){
        // $('#mobile').val("");
        setTimeout(function(){
          $("#mobile").css("border-color","#dc3545" ).delay(9000);
          $("#mobile").css("padding-right","calc(1.5em + 0.75rem)" ).delay(9000);
          $("#mobile").css("background-image","url('public/images/download.svg')" ).delay(9000);
          $("#mobile").css("background-repeat","no-repeat").delay(9000);
          $("#mobile").css("background-position","center right calc(0.375em + 0.1875rem)" ).delay(9000);
          $("#mobile").css("background-size"," calc(0.75em + 0.375rem) calc(0.75em + 0.375rem)" ).delay(9000);
          document.getElementById("mobileerr").innerHTML = "Phone Number does not exist";
          // $("#invalid-feedback1").css("display","none" ).delay(9000);
          // $("#invalid-feedback2").css("display","block" ).delay(9000);
        },);
      }
      else if(myresponse=="Yes"){
        setTimeout(function(){
          $("#mobile").css("border-color","#28a745" ).delay(9000);
          $("#mobile").css("padding-right","calc(1.5em + 0.75rem)" ).delay(9000);
          $("#mobile").css("background-image","url('public/images/greentick.svg')" ).delay(9000);
          $("#mobile").css("background-repeat","no-repeat").delay(9000);
          $("#mobile").css("background-position","center right calc(0.375em + 0.1875rem)" ).delay(9000);
          $("#mobile").css("background-size"," calc(0.75em + 0.375rem) calc(0.75em + 0.375rem)" ).delay(9000);
          document.getElementById("mobileerr").innerHTML = "";
          // alert();
          $("#smspindiv").css("display","block" );


          // $("#invalid-feedback1").css("display","none" ).delay(9000);
          // $("#invalid-feedback2").css("display","none" ).delay(9000);
        },);
      }
    },'json');
  });
  $("#smspin").keyup(function(){
    var mobile=$('#mobile').val();
    var pin=$('#smspin').val();
    $.post("forgotpassword/matchmobile",
    {mobile:mobile, pin:pin},
    function(data){
      var myresponse=(data.found_status);
      if (pin=="") {
        $("#smspin").css("border-color","#dc3545" ).delay(9000);
        $("#smspin").css("padding-right","calc(1.5em + 0.75rem)" ).delay(9000);
        $("#smspin").css("background-image","url('public/images/download.svg')" ).delay(9000);
        $("#smspin").css("background-repeat","no-repeat").delay(9000);
        $("#smspin").css("background-position","center right calc(0.375em + 0.1875rem)" ).delay(9000);
        $("#smspin").css("background-size"," calc(0.75em + 0.375rem) calc(0.75em + 0.375rem)" ).delay(9000);
        document.getElementById("pinerr").innerHTML = "Pin must not be empty";
        $("#smsresetbtn").addClass("disabled");
        // $("#invalid-feedback2").css("display","none" ).delay(9000);

      }
      else if(myresponse=="No"){
        // $('#smspin').val("");
        setTimeout(function(){
          $("#smspin").css("border-color","#dc3545" ).delay(9000);
          $("#smspin").css("padding-right","calc(1.5em + 0.75rem)" ).delay(9000);
          $("#smspin").css("background-image","url('public/images/download.svg')" ).delay(9000);
          $("#smspin").css("background-repeat","no-repeat").delay(9000);
          $("#smspin").css("background-position","center right calc(0.375em + 0.1875rem)" ).delay(9000);
          $("#smspin").css("background-size"," calc(0.75em + 0.375rem) calc(0.75em + 0.375rem)" ).delay(9000);
          document.getElementById("pinerr").innerHTML = "Pin is Incorrect";
          $("#smsresetbtn").addClass("disabled");

          // $("#invalid-feedback1").css("display","none" ).delay(9000);
          // $("#invalid-feedback2").css("display","block" ).delay(9000);
        },);
      }
      else if(myresponse=="Yes"){
        setTimeout(function(){
          $("#smspin").css("border-color","#28a745" ).delay(9000);
          $("#smspin").css("padding-right","calc(1.5em + 0.75rem)" ).delay(9000);
          $("#smspin").css("background-image","url('public/images/greentick.svg')" ).delay(9000);
          $("#smspin").css("background-repeat","no-repeat").delay(9000);
          $("#smspin").css("background-position","center right calc(0.375em + 0.1875rem)" ).delay(9000);
          $("#smspin").css("background-size"," calc(0.75em + 0.375rem) calc(0.75em + 0.375rem)" ).delay(9000);
          document.getElementById("pinerr").innerHTML = "";
          // $("#pindiv").css("display","block" );
          $("#smsresetbtn").removeClass("disabled");

          // $("#invalid-feedback1").css("display","none" ).delay(9000);
          // $("#invalid-feedback2").css("display","none" ).delay(9000);
        },);
      }
    },'json');
  });

});
