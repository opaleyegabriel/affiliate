$(document).ready(function(){
  $("#mobile").keyup(function(){
    var mobile=$('#mobile').val();
    $.post("index/verify",
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

          // $("#invalid-feedback1").css("display","none" ).delay(9000);
          // $("#invalid-feedback2").css("display","none" ).delay(9000);
        },);
      }
    },'json');
  });
  $("#mobile").focusout(function(){
    var mobile=$('#mobile').val();
    $.post("index/verify",
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

        // $("#invalid-feedback1").css("display","block" ).delay(9000);
        // $("#invalid-feedback2").css("display","none" ).delay(9000);

      }
      else if(myresponse=="No"){
        $('#mobile').val("");
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
          // $("#invalid-feedback1").css("display","none" ).delay(9000);
          // $("#invalid-feedback2").css("display","none" ).delay(9000);
        },);
      }
    },'json');
  });
  $("#loginbtn").click(function(){
    var mobile=$('#mobile').val();
    var password=$('#password').val();
    $.post("index/login",
    {mobile:mobile, password:password},
    function(data){
      var myresponse=(data.found_status);
      if (password=="") {
        $("#password").css("border-color","#dc3545" ).delay(9000);
        $("#password").css("padding-right","calc(1.5em + 0.75rem)" ).delay(9000);
        $("#password").css("background-image","url('public/images/download.svg')" ).delay(9000);
        $("#password").css("background-repeat","no-repeat").delay(9000);
        $("#password").css("background-position","center right calc(0.375em + 0.1875rem)" ).delay(9000);
        $("#password").css("background-size"," calc(0.75em + 0.375rem) calc(0.75em + 0.375rem)" ).delay(9000);
        document.getElementById("passworderr").innerHTML = "Password must not be empty";

      }
      else if(myresponse=="Yes"){
        setTimeout(function(){
          $("#confirmation").css("display","block" ).delay(10000).fadeOut('1000');
        }, );
        var delay=2000;
        setTimeout(function(){
          window.location.href = "dashboard";
        },delay)
      }else {
        $('#password').val("");
        $("#password").css("border-color","#dc3545" ).delay(9000);
        $("#password").css("padding-right","calc(1.5em + 0.75rem)" ).delay(9000);
        $("#password").css("background-image","url('public/images/download.svg')" ).delay(9000);
        $("#password").css("background-repeat","no-repeat").delay(9000);
        $("#password").css("background-position","center right calc(0.375em + 0.1875rem)" ).delay(9000);
        $("#password").css("background-size"," calc(0.75em + 0.375rem) calc(0.75em + 0.375rem)" ).delay(9000);
        document.getElementById("passworderr").innerHTML = "Incorrect Password please check and try again";

        // $("#javascriptdiv").css("display","block" );
      }
    },'json');
  });
});
