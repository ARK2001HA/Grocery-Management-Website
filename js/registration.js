$("document").ready(function(){
	$("#submit").click(function(){
		var name=$("#name").val();
		email=$("#email").val();
		phone=$("#phone").val();
		password=$("#password").val();
		conpassword=$("#conpassword").val();
		add=$("#add").val();
		if (name=="") 
		{
			alert('Name cannot blank');
			return false;
		}
	 if (email=="") 
		{
			alert('Email cannot blank');
			return false;
		}
	 if(IsEmail(email)==false)
		{
      alert('Please put your valid email');
      return false;
        }
		 if (phone=="") 
		{
			alert('Phone cannot blank');
			return false;
		}
		 if(phone.length!=10)
		{
			alert('number must 10 digit');
			return false;
		}
		// else if(check_password(password)==false)
		// {
  //         	alert('Please put your valid password');
  //         	return false;
  //       }
	 if (password==" ") 
		{
			alert('Password cannot blank');
			return false;
		}
		if (password.length>8) 
		{
			alert('Password must be 8 digit');
			return false;
		}
		
 if (conpassword=="") 
		{
			alert('Conpassword cannot blank');
			return false;
		}
		 if (password!=conpassword) 
		{
			alert('Password and Conpassword not match');
			return false;
		}
	 if (add=="") 
		{
			alert('Please select your address');
			return false;
		}
	});
});
function IsEmail(email) 
{
  var regex = /[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$/;
  if(!regex.test(email)) 
  {
    return false;
  }
  else
  {
    return true;
  }
   // function check_password(password) {
   //          var password_length = $("#form_password").val().length;
   //          if (password_length < 8) {
   //             $("#password_error_message").html("Atleast 8 Characters");
   //             $("#password_error_message").show();
   //             $("#form_password").css("border-bottom","2px solid #F90A0A");
   //             error_password = true;
   //          } else {
   //             $("#password_error_message").hide();
   //             $("#form_password").css("border-bottom","2px solid #34F458");
   //          }
   //       }
}