$(document).ready(function(){
  $("#password").keyup(function(){
    var mobile=$('#mobile').val();
    var password=$('#password').val();
    $.post("changepassword/checkpassword",
    {mobile:mobile,password:password},
    function(data)
    {
      var myresponse=(data.found_status);
      if (password=="") {
        $("#password").css("border-color","#dc3545" ).delay(9000);
        $("#password").css("padding-right","calc(1.5em + 0.75rem)" ).delay(9000);
        $("#password").css("background-image","url('public/images/download.svg')" ).delay(9000);
        $("#password").css("background-repeat","no-repeat").delay(9000);
        $("#password").css("background-position","center right calc(0.375em + 0.1875rem)" ).delay(9000);
        $("#password").css("background-size"," calc(0.75em + 0.375rem) calc(0.75em + 0.375rem)" ).delay(9000);
        document.getElementById("passworderr").innerHTML = "Password Must Not Be Empty";
      }
      else if(myresponse=="No")
      {
        $("#password").css("border-color","#dc3545" ).delay(9000);
        $("#password").css("padding-right","calc(1.5em + 0.75rem)" ).delay(9000);
        $("#password").css("background-image","url('public/images/download.svg')" ).delay(9000);
        $("#password").css("background-repeat","no-repeat").delay(9000);
        $("#password").css("background-position","center right calc(0.375em + 0.1875rem)" ).delay(9000);
        $("#password").css("background-size"," calc(0.75em + 0.375rem) calc(0.75em + 0.375rem)" ).delay(9000);
        document.getElementById("passworderr").innerHTML = "Password Incorrect Check and try again ";
      }
      else if(myresponse=="Yes")
      {
        $("#password").css("border-color","#28a745" ).delay(9000);
        $("#password").css("padding-right","calc(1.5em + 0.75rem)" ).delay(9000);
        $("#password").css("background-image","url('public/images/greentick.svg')" ).delay(9000);
        $("#password").css("background-repeat","no-repeat").delay(9000);
        $("#password").css("background-position","center right calc(0.375em + 0.1875rem)" ).delay(9000);
        $("#password").css("background-size"," calc(0.75em + 0.375rem) calc(0.75em + 0.375rem)" ).delay(9000);
        document.getElementById("passworderr").innerHTML = " ";
      }
    },'json');

  });

  $('#confirmpassword').keyup(function(){
    var confirmpassword=$('#confirmpassword').val();
    if (confirmpassword=="") {
      $("#confirmpassword").css("border-color","#dc3545" ).delay(9000);
      $("#confirmpassword").css("padding-right","calc(1.5em + 0.75rem)" ).delay(9000);
      $("#confirmpassword").css("background-image","url('public/images/download.svg')" ).delay(9000);
      $("#confirmpassword").css("background-repeat","no-repeat").delay(9000);
      $("#confirmpassword").css("background-position","center right calc(0.375em + 0.1875rem)" ).delay(9000);
      $("#confirmpassword").css("background-size"," calc(0.75em + 0.375rem) calc(0.75em + 0.375rem)" ).delay(9000);
      document.getElementById("confirmpassworderr").innerHTML = "Confirm Your Password";
    }
    else if ($("#newpassword").val()!=$("#confirmpassword").val() ) {
      // $('#password').val("");
      // $('#newpassword').val("");
      // $('#confirmpassword').val("");
      $("#confirmpassword").css("border-color","#dc3545" ).delay(9000);
      $("#confirmpassword").css("padding-right","calc(1.5em + 0.75rem)" ).delay(9000);
      $("#confirmpassword").css("background-image","url('public/images/download.svg')" ).delay(9000);
      $("#confirmpassword").css("background-repeat","no-repeat").delay(9000);
      $("#confirmpassword").css("background-position","center right calc(0.375em + 0.1875rem)" ).delay(9000);
      $("#confirmpassword").css("background-size"," calc(0.75em + 0.375rem) calc(0.75em + 0.375rem)" ).delay(9000);
      document.getElementById("confirmpassworderr").innerHTML = "Password Does Not Match";
      return;
    }else if ($("#confirmpassword").val()==$("#newpassword").val()) {
      // $('#password').val("");
      // $('#newpwd').val("");
      // $('#confirmpassword').val("");
      // $("#cpbtn").removeClass("disabled");
      $("#mypindiv").removeClass("d-none");
      $("#confirmpassword").css("border-color","#28a745" ).delay(9000);
      $("#confirmpassword").css("padding-right","calc(1.5em + 0.75rem)" ).delay(9000);
      $("#confirmpassword").css("background-image","url('public/images/greentick.svg')" ).delay(9000);
      $("#confirmpassword").css("background-repeat","no-repeat").delay(9000);
      $("#confirmpassword").css("background-position","center right calc(0.375em + 0.1875rem)" ).delay(9000);
      $("#confirmpassword").css("background-size"," calc(0.75em + 0.375rem) calc(0.75em + 0.375rem)" ).delay(9000);
      document.getElementById("confirmpassworderr").innerHTML = " ";
      return;
    }

  });
  $("#pin").keyup(function(){
    var mobile=$('#mobile').val();
    var pin=$('#pin').val();
    $.post("changepassword/matchmobile",
    {mobile:mobile, pin:pin},
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
        $("#cpbtn").addClass("disabled");
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
          $("#cpbtn").addClass("disabled");

          // $("#invalid-feedback1").css("display","none" ).delay(9000);
          // $("#invalid-feedback2").css("display","block" ).delay(9000);
        },);
      }
      else if(myresponse=="Yes"){
        $("#cpbtn").removeClass("disabled");
        setTimeout(function(){
          $("#pin").css("border-color","#28a745" ).delay(9000);
          $("#pin").css("padding-right","calc(1.5em + 0.75rem)" ).delay(9000);
          $("#pin").css("background-image","url('public/images/greentick.svg')" ).delay(9000);
          $("#pin").css("background-repeat","no-repeat").delay(9000);
          $("#pin").css("background-position","center right calc(0.375em + 0.1875rem)" ).delay(9000);
          $("#pin").css("background-size"," calc(0.75em + 0.375rem) calc(0.75em + 0.375rem)" ).delay(9000);
          document.getElementById("pinerr").innerHTML = "";
          // $("#pindiv").css("display","block" );

          // $("#invalid-feedback1").css("display","none" ).delay(9000);
          // $("#invalid-feedback2").css("display","none" ).delay(9000);
        },);
      }
    },'json');
  });
  $("#pin").focusout(function(){
    var mobile=$('#mobile').val();
    var pin=$('#pin').val();
    $.post("changepassword/matchmobile",
    {mobile:mobile, pin:pin},
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
        $("#cpbtn").addClass("disabled");
        // $("#invalid-feedback2").css("display","none" ).delay(9000);

      }
      else if(myresponse=="No"){
        $('#pin').val("");
        setTimeout(function(){
          $("#pin").css("border-color","#dc3545" ).delay(9000);
          $("#pin").css("padding-right","calc(1.5em + 0.75rem)" ).delay(9000);
          $("#pin").css("background-image","url('public/images/download.svg')" ).delay(9000);
          $("#pin").css("background-repeat","no-repeat").delay(9000);
          $("#pin").css("background-position","center right calc(0.375em + 0.1875rem)" ).delay(9000);
          $("#pin").css("background-size"," calc(0.75em + 0.375rem) calc(0.75em + 0.375rem)" ).delay(9000);
          document.getElementById("pinerr").innerHTML = "Pin is Incorrect";
          $("#cpbtn").addClass("disabled");

          // $("#invalid-feedback1").css("display","none" ).delay(9000);
          // $("#invalid-feedback2").css("display","block" ).delay(9000);
        },);
      }
      else if(myresponse=="Yes"){
        $("#cpbtn").removeClass("disabled");
        setTimeout(function(){
          $("#pin").css("border-color","#28a745" ).delay(9000);
          $("#pin").css("padding-right","calc(1.5em + 0.75rem)" ).delay(9000);
          $("#pin").css("background-image","url('public/images/greentick.svg')" ).delay(9000);
          $("#pin").css("background-repeat","no-repeat").delay(9000);
          $("#pin").css("background-position","center right calc(0.375em + 0.1875rem)" ).delay(9000);
          $("#pin").css("background-size"," calc(0.75em + 0.375rem) calc(0.75em + 0.375rem)" ).delay(9000);
          document.getElementById("pinerr").innerHTML = "";
          // $("#pindiv").css("display","block" );

          // $("#invalid-feedback1").css("display","none" ).delay(9000);
          // $("#invalid-feedback2").css("display","none" ).delay(9000);
        },);
      }
    },'json');
  });
//   $("#cpbtn").click(function(){
//     var password=$('#password').val();
//     var newpassword=$('#newpassword').val();
//     var confirmpassword=$('#confirmpassword').val();
//     if (password=="", oldpwd=="", confirmpassword=="") {}else {
//       var mobile=$('#mobile').val();
//       var confirmpassword=$('#confirmpassword').val();
//       $.post("changeuserpassword/changepassword",
//       {mobile:mobile, confirmpassword:confirmpassword},
//
//     );
//     $('#password').val("");
//     $('#newpwd').val("");
//     $('#confirmpassword').val("");
//     setTimeout(function(){
//       $("#cpresponse4").css("display","block" ).delay(10000).fadeOut('1000');
//     }, );
//     var delay=2000;
//     setTimeout(function(){
//       window.location.href = "http://localhost:8080/elim/index";
//     },delay)
//
//   }
// });

});
