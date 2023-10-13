$(document).ready(function(){
  $('.regiForm').on('submit', function(){
    $('#regiModal').modal('show');
    //Check the username field
    if($('#regifname').val() ==""){
      $('#msg').html('Please enter your first name').css('color', 'red');
      return false;
      //Check the password field
    } else if ($('#regilname').val() ==""){
      $('#msg').html('Please enter your last name').css('color', 'red');
      return false;
      //Check the selection of race
    } else if ($('#regiaccess').val() ==""){
      $('#msg').html('Please select your identity').css('color', 'red');
      return false;
      // check email
    }  else if ($('#regiemail').val() ==""){
      $('#msg').html('Please enter your email').css('color', 'red');
      return false;
      //check mobile
    }  else if ($('#regimobile').val() ==""){
      $('#msg').html('Please enter your mobile').css('color', 'red');
      return false;
      // check abn
    }  else if ($('#regiabn').val() ==""){
      $('#msg').html('Please enter your abn').css('color', 'red');
      return false;  

    }  else if ($('#regipwd').val() == ""){
      $('#msg').html('Please enter your password').css('color', 'red');
      return false;

      //Check the confirmed password field
    } else if ($('#comfirmpwd').val() == ""){
      $('#msg').html('Please confirm the password again').css('color', 'red');
      return false;
      //Check whether the retyped password matches the password
    } else if ($('#regipwd').val()!=$('#comfirmpwd').val()){
      $('#msg').html('Password do not match').css('color', 'red');
      return false;

    } else {
      $('#msg').html('Successfully Completed!').css('color', 'green');
    }
  });
});

$(document).ready(function(){
  $('#regiclient').click(function(){
    $('#regiabn').hide(200);

  });
});

//Login Modal form
// var pPattern = /^.*(?=.{6,12})(?=.*\d)(?=.*[A-Z])(?=.*[a-z])(?=.*[!@#$% ]).*$/;