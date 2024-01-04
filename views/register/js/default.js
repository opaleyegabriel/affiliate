$(document).ready(function(){
  $("#fullname").keyup(function(){
    var fullname=$('#fullname').val();
    if (fullname=="") {
      $("#fullname").css("border-color","#dc3545" ).delay(9000);
      $("#fullname").css("padding-right","calc(1.5em + 0.75rem)" ).delay(9000);
      $("#fullname").css("background-image","url('public/images/download.svg')" ).delay(9000);
      $("#fullname").css("background-repeat","no-repeat").delay(9000);
      $("#fullname").css("background-position","center right calc(0.375em + 0.1875rem)" ).delay(9000);
      $("#fullname").css("background-size"," calc(0.75em + 0.375rem) calc(0.75em + 0.375rem)" ).delay(9000);
      $("#invalid-feedback1").css("display","block" ).delay(9000);
      document.getElementById("fullnameerr").innerHTML = "Full Name Must Not Be Empty";
    }else{
      $("#fullname").css("border-color","#28a745" ).delay(9000);
      $("#fullname").css("padding-right","calc(1.5em + 0.75rem)" ).delay(9000);
      $("#fullname").css("background-image","url('public/images/greentick.svg')" ).delay(9000);
      $("#fullname").css("background-repeat","no-repeat").delay(9000);
      $("#fullname").css("background-position","center right calc(0.375em + 0.1875rem)" ).delay(9000);
      $("#fullname").css("background-size"," calc(0.75em + 0.375rem) calc(0.75em + 0.375rem)" ).delay(9000);
      document.getElementById("fullnameerr").innerHTML = "";
    }
  });
  $("#fullname").focusout(function(){
    var fullname=$('#fullname').val();
    if (fullname=="") {
      $("#fullname").css("border-color","#dc3545" ).delay(9000);
      $("#fullname").css("padding-right","calc(1.5em + 0.75rem)" ).delay(9000);
      $("#fullname").css("background-image","url('public/images/download.svg')" ).delay(9000);
      $("#fullname").css("background-repeat","no-repeat").delay(9000);
      $("#fullname").css("background-position","center right calc(0.375em + 0.1875rem)" ).delay(9000);
      $("#fullname").css("background-size"," calc(0.75em + 0.375rem) calc(0.75em + 0.375rem)" ).delay(9000);
      $("#invalid-feedback1").css("display","block" ).delay(9000);
      document.getElementById("fullnameerr").innerHTML = "Full Name Must Not Be Empty";
    }else{
      $("#fullname").css("border-color","#28a745" ).delay(9000);
      $("#fullname").css("padding-right","calc(1.5em + 0.75rem)" ).delay(9000);
      $("#fullname").css("background-image","url('public/images/greentick.svg')" ).delay(9000);
      $("#fullname").css("background-repeat","no-repeat").delay(9000);
      $("#fullname").css("background-position","center right calc(0.375em + 0.1875rem)" ).delay(9000);
      $("#fullname").css("background-size"," calc(0.75em + 0.375rem) calc(0.75em + 0.375rem)" ).delay(9000);
      document.getElementById("fullnameerr").innerHTML = "";
    }
  });
  $("#email").keyup(function(){
    // alert();
    var email=$('#email').val();
    var emailObj = document.getElementById("email");
    if (email=="") {
      $("#email").css("border-color","#dc3545" ).delay(9000);
      $("#email").css("padding-right","calc(1.5em + 0.75rem)" ).delay(9000);
      $("#email").css("background-image","url('public/images/download.svg')" ).delay(9000);
      $("#email").css("background-repeat","no-repeat").delay(9000);
      $("#email").css("background-position","center right calc(0.375em + 0.1875rem)" ).delay(9000);
      $("#email").css("background-size"," calc(0.75em + 0.375rem) calc(0.75em + 0.375rem)" ).delay(9000);
      $("#invalid-feedback1").css("display","block" ).delay(9000);
      document.getElementById("emailerr").innerHTML = "Email Must Not Be Empty";
    }
    $.post("register/email",
    {email:email},
    function(data){
      var myresponse=(data.found_status);
      if(myresponse=="Yes"){
        // alert();
        // $("#invalid-feedback10").css("display","block" ).delay(9000);
        document.getElementById("emailerr").innerHTML = "There Is a User With The Same Email Address Supplied";
        $("#email").css("border-color","#dc3545" ).delay(9000);
        $("#email").css("padding-right","calc(1.5em + 0.75rem)" ).delay(9000);
        $("#email").css("background-image","url('public/images/download.svg')" ).delay(9000);
        $("#email").css("background-repeat","no-repeat").delay(9000);
        $("#email").css("background-position","center right calc(0.375em + 0.1875rem)" ).delay(9000);
        $("#email").css("background-size"," calc(0.75em + 0.375rem) calc(0.75em + 0.375rem)" ).delay(9000);
        $('#email').val("");
        return;
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
      else if(myresponse="No") {
        $("#email").css("border-color","#28a745" ).delay(9000);
        $("#email").css("padding-right","calc(1.5em + 0.75rem)" ).delay(9000);
        $("#email").css("background-image","url('public/images/greentick.svg')" ).delay(9000);
        $("#email").css("background-repeat","no-repeat").delay(9000);
        $("#email").css("background-position","center right calc(0.375em + 0.1875rem)" ).delay(9000);
        $("#email").css("background-size"," calc(0.75em + 0.375rem) calc(0.75em + 0.375rem)" ).delay(9000);
        document.getElementById("emailerr").innerHTML = "";

      }
      else {
        $("email").css("border-color","#dc3545" ).delay(9000);
        $("email").css("padding-right","calc(1.5em + 0.75rem)" ).delay(9000);
        $("email").css("background-image","url('public/images/download.svg')" ).delay(9000);
        $("email").css("background-repeat","no-repeat").delay(9000);
        $("email").css("background-position","center right calc(0.375em + 0.1875rem)" ).delay(9000);
        $("email").css("background-size"," calc(0.75em + 0.375rem) calc(0.75em + 0.375rem)" ).delay(9000);
      }
    },'json');
  });
  $("#email").focusout(function(){
    // alert();
    var email=$('#email').val();
    var emailObj = document.getElementById("email");
    if (email=="") {
      $("#email").css("border-color","#dc3545" ).delay(9000);
      $("#email").css("padding-right","calc(1.5em + 0.75rem)" ).delay(9000);
      $("#email").css("background-image","url('public/images/download.svg')" ).delay(9000);
      $("#email").css("background-repeat","no-repeat").delay(9000);
      $("#email").css("background-position","center right calc(0.375em + 0.1875rem)" ).delay(9000);
      $("#email").css("background-size"," calc(0.75em + 0.375rem) calc(0.75em + 0.375rem)" ).delay(9000);
      $("#invalid-feedback1").css("display","block" ).delay(9000);
      document.getElementById("emailerr").innerHTML = "Email Must Not Be Empty";
    }
    $.post("register/email",
    {email:email},
    function(data){
      var myresponse=(data.found_status);
      if(myresponse=="Yes"){
        // alert();
        // $("#invalid-feedback10").css("display","block" ).delay(9000);
        document.getElementById("emailerr").innerHTML = "There Is a User With The Same Email Address Supplied";
        $("#email").css("border-color","#dc3545" ).delay(9000);
        $("#email").css("padding-right","calc(1.5em + 0.75rem)" ).delay(9000);
        $("#email").css("background-image","url('public/images/download.svg')" ).delay(9000);
        $("#email").css("background-repeat","no-repeat").delay(9000);
        $("#email").css("background-position","center right calc(0.375em + 0.1875rem)" ).delay(9000);
        $("#email").css("background-size"," calc(0.75em + 0.375rem) calc(0.75em + 0.375rem)" ).delay(9000);
        $('#email').val("");
        return;
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
      else if(myresponse="No") {
        $("#email").css("border-color","#28a745" ).delay(9000);
        $("#email").css("padding-right","calc(1.5em + 0.75rem)" ).delay(9000);
        $("#email").css("background-image","url('public/images/greentick.svg')" ).delay(9000);
        $("#email").css("background-repeat","no-repeat").delay(9000);
        $("#email").css("background-position","center right calc(0.375em + 0.1875rem)" ).delay(9000);
        $("#email").css("background-size"," calc(0.75em + 0.375rem) calc(0.75em + 0.375rem)" ).delay(9000);
        document.getElementById("emailerr").innerHTML = "";

      }
      else {
        $("email").css("border-color","#dc3545" ).delay(9000);
        $("email").css("padding-right","calc(1.5em + 0.75rem)" ).delay(9000);
        $("email").css("background-image","url('public/images/download.svg')" ).delay(9000);
        $("email").css("background-repeat","no-repeat").delay(9000);
        $("email").css("background-position","center right calc(0.375em + 0.1875rem)" ).delay(9000);
        $("email").css("background-size"," calc(0.75em + 0.375rem) calc(0.75em + 0.375rem)" ).delay(9000);
      }
    },'json');
  });
  $("#mobile").keyup(function(){
    var mobile=$('#mobile').val();
    var mobilelen = mobile.length;

    // alert(mobilelen);
    if (mobile=="") {
      $("#mobile").css("border-color","#dc3545" ).delay(9000);
      $("#mobile").css("padding-right","calc(1.5em + 0.75rem)" ).delay(9000);
      $("#mobile").css("background-image","url('public/images/download.svg')" ).delay(9000);
      $("#mobile").css("background-repeat","no-repeat").delay(9000);
      $("#mobile").css("background-position","center right calc(0.375em + 0.1875rem)" ).delay(9000);
      $("#mobile").css("background-size"," calc(0.75em + 0.375rem) calc(0.75em + 0.375rem)" ).delay(9000);
      // $("#invalid-feedback3").css("display","block" ).delay(9000);
      // $("#invalid-feedback9").css("display","none" ).delay(9000);
      document.getElementById("mobileerr").innerHTML = "Phone Number Must Not Be Empty";


    }
    $.post("register/mobile",
    {mobile:mobile},
    function(data){
      var myresponse=(data.found_status);
      if(myresponse=="Yes"){
        // setTimeout(function(){
        //   $(".javascriptdiv3").css("display","block" ).delay(9000).fadeOut('1000');
        // },);
        $("#mobile").css("border-color","#dc3545" ).delay(9000);
        $("#mobile").css("padding-right","calc(1.5em + 0.75rem)" ).delay(9000);
        $("#mobile").css("background-image","url('public/images/download.svg')" ).delay(9000);
        $("#mobile").css("background-repeat","no-repeat").delay(9000);
        $("#mobile").css("background-position","center right calc(0.375em + 0.1875rem)" ).delay(9000);
        $("#mobile").css("background-size"," calc(0.75em + 0.375rem) calc(0.75em + 0.375rem)" ).delay(9000);
        document.getElementById("mobileerr").innerHTML = "Phone Already Exist";
        $('#mobile').val("");



      }
      else if(myresponse="No") {
        $("#mobile").css("border-color","#28a745" ).delay(9000);
        $("#mobile").css("padding-right","calc(1.5em + 0.75rem)" ).delay(9000);
        $("#mobile").css("background-image","url('public/images/greentick.svg')" ).delay(9000);
        $("#mobile").css("background-repeat","no-repeat").delay(9000);
        $("#mobile").css("background-position","center right calc(0.375em + 0.1875rem)" ).delay(9000);
        $("#mobile").css("background-size"," calc(0.75em + 0.375rem) calc(0.75em + 0.375rem)" ).delay(9000);
        document.getElementById("mobileerr").innerHTML = "";

      }
      else {
        $("mobile").css("border-color","#dc3545" ).delay(9000);
        $("mobile").css("padding-right","calc(1.5em + 0.75rem)" ).delay(9000);
        $("mobile").css("background-image","url('public/images/download.svg')" ).delay(9000);
        $("mobile").css("background-repeat","no-repeat").delay(9000);
        $("mobile").css("background-position","center right calc(0.375em + 0.1875rem)" ).delay(9000);
        $("mobile").css("background-size"," calc(0.75em + 0.375rem) calc(0.75em + 0.375rem)" ).delay(9000);
      }
    },'json');

});
  $("#mobile").focusout(function(){
    var mobile=$('#mobile').val();
    var mobilelen = mobile.length;

    $.post("register/mobile",
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
        // $("#invalid-feedback3").css("display","block" ).delay(9000);
        // $("#invalid-feedback9").css("display","none" ).delay(9000);
        document.getElementById("mobileerr").innerHTML = "Phone Number Must Not Be Empty"

      }
      else if(myresponse=="Yes"){
        // setTimeout(function(){
        //   $(".javascriptdiv3").css("display","block" ).delay(9000).fadeOut('1000');
        // },);
        $("#mobile").css("border-color","#dc3545" ).delay(9000);
        $("#mobile").css("padding-right","calc(1.5em + 0.75rem)" ).delay(9000);
        $("#mobile").css("background-image","url('public/images/download.svg')" ).delay(9000);
        $("#mobile").css("background-repeat","no-repeat").delay(9000);
        $("#mobile").css("background-position","center right calc(0.375em + 0.1875rem)" ).delay(9000);
        $("#mobile").css("background-size"," calc(0.75em + 0.375rem) calc(0.75em + 0.375rem)" ).delay(9000);
        document.getElementById("mobileerr").innerHTML = "Phone Already Exist";
        $('#mobile').val("");



      }
      else if(myresponse="No") {
        $("#mobile").css("border-color","#28a745" ).delay(9000);
        $("#mobile").css("padding-right","calc(1.5em + 0.75rem)" ).delay(9000);
        $("#mobile").css("background-image","url('public/images/greentick.svg')" ).delay(9000);
        $("#mobile").css("background-repeat","no-repeat").delay(9000);
        $("#mobile").css("background-position","center right calc(0.375em + 0.1875rem)" ).delay(9000);
        $("#mobile").css("background-size"," calc(0.75em + 0.375rem) calc(0.75em + 0.375rem)" ).delay(9000);
        document.getElementById("mobileerr").innerHTML = "";

      }
      else {
        $("mobile").css("border-color","#dc3545" ).delay(9000);
        $("mobile").css("padding-right","calc(1.5em + 0.75rem)" ).delay(9000);
        $("mobile").css("background-image","url('public/images/download.svg')" ).delay(9000);
        $("mobile").css("background-repeat","no-repeat").delay(9000);
        $("mobile").css("background-position","center right calc(0.375em + 0.1875rem)" ).delay(9000);
        $("mobile").css("background-size"," calc(0.75em + 0.375rem) calc(0.75em + 0.375rem)" ).delay(9000);
      }
    },'json');

});
$('#confirmpassword').keyup(function(){
var confirmpassword=$('#confirmpassword').val();

if (confirmpassword=="") {
  $("#confirmpassword").css("border-color","#dc3545" ).delay(9000);
  $("#buttonborder").css("border-color","#dc3545" ).delay(9000);
  $("#buttonborder").css("border-left-color","#e0e0ef" ).delay(9000);
  $("#confirmpassword").css("padding-right","calc(1.5em + 0.75rem)" ).delay(9000);
  $("#confirmpassword").css("background-image","url('public/images/download.svg')" ).delay(9000);
  $("#confirmpassword").css("background-repeat","no-repeat").delay(9000);
  $("#confirmpassword").css("background-position","center right calc(0.375em + 0.1875rem)" ).delay(9000);
  $("#confirmpassword").css("background-size"," calc(0.75em + 0.375rem) calc(0.75em + 0.375rem)" ).delay(9000);
    document.getElementById("confirmpassworderr").innerHTML = "Please Confirm Your Password"
  }
  else if ($("#password").val()!=$("#confirmpassword").val() ) {
    // $('#password').val("");
    // $('#password').val("");
    // $('#confirmpassword').val("");
    $("#confirmpassword").css("border-color","#dc3545" ).delay(9000);
    $("#buttonborder").css("border-color","#dc3545" ).delay(9000);
    $("#buttonborder").css("border-left-color","#e0e0ef" ).delay(9000);
    $("#confirmpassword").css("padding-right","calc(1.5em + 0.75rem)" ).delay(9000);
    $("#confirmpassword").css("background-image","url('public/images/download.svg')" ).delay(9000);
    $("#confirmpassword").css("background-repeat","no-repeat").delay(9000);
    $("#confirmpassword").css("background-position","center right calc(0.375em + 0.1875rem)" ).delay(9000);
    $("#confirmpassword").css("background-size"," calc(0.75em + 0.375rem) calc(0.75em + 0.375rem)" ).delay(9000);
    document.getElementById("confirmpassworderr").innerHTML = "Password Does Not Match";

    return;
  }
  else if ($("#confirmpassword").val()==$("#password").val()) {
    // $('#password').val("");
    // $('#password').val("");
    // $('#confirmpassword').val("");
    $("#confirmpassword").css("border-color","#28a745" ).delay(9000);
    $("#buttonborder").css("border-color","#28a745" ).delay(9000);
    $("#buttonborder").css("border-left-color","#e0e0ef" ).delay(9000);
    $("#confirmpassword").css("padding-right","calc(1.5em + 0.75rem)" ).delay(9000);
    $("#confirmpassword").css("background-image","url('public/images/greentick.svg')" ).delay(9000);
    $("#confirmpassword").css("background-repeat","no-repeat").delay(9000);
    $("#confirmpassword").css("background-position","center right calc(0.375em + 0.1875rem)" ).delay(9000);
    $("#confirmpassword").css("background-size"," calc(0.75em + 0.375rem) calc(0.75em + 0.375rem)" ).delay(9000);
  document.getElementById("confirmpassworderr").innerHTML = ""
    return;
  }
});
$('#confirmpassword').focusout(function(){

 if ($("#password").val()!=$("#confirmpassword").val() ) {
  // $('#password').val("");
  // $('#password').val("");
  $('#confirmpassword').val("");
  $("#confirmpassword").css("border-color","#dc3545" ).delay(9000);
  $("#buttonborder").css("border-color","#dc3545" ).delay(9000);
  $("#buttonborder").css("border-left-color","#e0e0ef" ).delay(9000);
  $("#confirmpassword").css("padding-right","calc(1.5em + 0.75rem)" ).delay(9000);
  $("#confirmpassword").css("background-image","url('public/images/download.svg')" ).delay(9000);
  $("#confirmpassword").css("background-repeat","no-repeat").delay(9000);
  $("#confirmpassword").css("background-position","center right calc(0.375em + 0.1875rem)" ).delay(9000);
  $("#confirmpassword").css("background-size"," calc(0.75em + 0.375rem) calc(0.75em + 0.375rem)" ).delay(9000);
  document.getElementById("confirmpassworderr").innerHTML = "Password Does Not Match";
  return;
}
});
});
