<?php
class HelloController extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('Hello_Model');
		$this->load->library('session');
	}
	
	function home()
	{
		$this->load->view('homepage');
	}
	function duplicate(){
		$email=$_SESSION['email'];
		$result['data']=$this->Hello_Model->display($email);
		$this->load->view('duplicatehome',$result);

	}
	function userprofile()
	{
		$email=$_SESSION['email'];
		$result['data']=$this->Hello_Model->display($email);
		$this->load->view('loginuserprofile',$result);
		// if($this->input->post('update'))
		// {
		// 	$oldphoto=$this->input->post('oldphoto');
		// 	$filename=$_FILES['newphoto']['name'];

		// 	if ($filename=="") 
		// 	{
		// 		$folder=$oldphoto;
		// 	}
		// 	else
		// 	{
		// 		$file=$_FILES['newphoto']['name'];
		// 		$folder="image/".$file;

		// 	}
		// 	$tempfile=$_FILES['newphoto']['tmp_name'];
		// 	move_uploaded_file($tempfile, $folder);
		// 	if($this->Hello_Model->photochange($folder,$email))
		// 	{
		// 		redirect("Hellocontroller/userprofile");
		// 	}
		// 	else
		// 	{
		// 		echo "<script>alert('Not updated!!')</script>";
		// 	}
		// }
	}
	function contactdata()
	{
		$this->load->view('contact');
		if($this->input->post('submit'))
		{
			$name=$this->input->post('name');
			$mobile=$this->input->post('mobile');
			$email=$this->input->post('email');
			$feedback=$this->input->post('feedback');
			$data=array('name'=>$name,'mobile'=>$mobile,'email'=>$email,'feedback'=>$feedback);
			if($this->Hello_Model->contactdetails($data))
			{
			echo "<script>alert('send')</script>";
			}
			else
			{
			echo "<script>alert('Feedback not send')</script>";
			}
		}
	}
	function about()
	{
		$this->load->view('aboutus');
	}
	function readmore()
	{
		$this->load->view('readmore');
	}
	function service(){
		$this->load->view('service');
	}
	function gallery()
	{
		$this->load->view('gallery');
	}
	// function registration()
	// {

	// 	$this->load->view('registration');
	// 	if($this->input->post('submit'))
	// 	{

	// 		$name=$this->input->post('name');
	// 		$email=$this->input->post('email');
	// 		$phone=$this->input->post('phone');
	// 		$password=$this->input->post('password');
	// 		$address=$this->input->post('address');
	// 		$filename=$_FILES['image']['name'];
	// 		$tempname=$_FILES['image']['tmp_name'];
	// 		$folder="image/".$filename;
	// 		move_uploaded_file($tempname, $folder);
	// 		 // echo $password;
	// 		$data=array('fullname'=>$name,'email'=>$email,'phonenumber'=>$phone,'password'=>$password,'address'=>$address,'image'=>$folder);
	// 		if($this->Hello_Model->registrationrecords($data))
	// 		{
	// 			echo "<script>alert('Registration successfull')</script>";
	// 			// echo "<script>window.location.href='echo base_url().index.php/Hellocontroller/logindata'</script>";
	// 			// redirect("HelloController/logindata");
	// 		}
	// 		else
	// 		{
	// 			echo "<script>alert('Registration Not successfull')</script>";
	// 		}
	// 		function sent()
	// {
	// 	$config=array(
	// 		'protocol'=>'smtp',
	// 		'smpt_host'=>'ssl://smtp.googlemail.com',
	// 		'smtp_post'=>'465',
	// 		'smtp_user'=>'phpgrout@gmail.com',
	// 		'smtp_pass'=>'Hello@123',
	// 		'charset'=>'iso-8859-1',
	// 		'mailtype'=>'html',
	// 		'wordwrap'=> true
	// 	);
	// 	$to=$email;
	// 	$subject= "registration successfull";
	// 	$body= "you have successfully registered in our site";
	// 	$this->$load->library('email',$config);
	// 	$this->email->set_newline("\r\n");
	// 	$this->email->from('phpgrout@gmail.com','');
	// 	$this->email->to($to);
	// 	$this->email->subject($subject);
	// 	$this->email->message($body);
	// 	if($this->email->send())
	// 	{
	// 		// echo "mail sent successfully";
	// 		echo "<script>alert('mail sent successfully')</script>";
	// 	}
	// 	else
	// 	{
	// 		echo "mail not sent";
	// 	}
	// }
			
	// 	}

	// }
	function registration()
{
	$this->load->view('registration');
	if($this->input->post('submit'))
	{
		$name=$this->input->post('name');
		$email=$this->input->post('email');
		$phone=$this->input->post('phone');
		$password=$this->input->post('conpassword');
		$address=$this->input->post('address');
		$status="Active";
		$filename=$_FILES['image']['name'];
		$tempfile=$_FILES['image']['tmp_name'];
		$folder="images/".$filename;
		move_uploaded_file($tempfile, $folder);
		if($this->Hello_Model->check($email))
		{
			echo "<script>alert('Email already exists!!')</script>";
		}
		else
		{
			$data=array('fullname'=>$name,'email'=>$email,'phonenumber'=>$phone,'password'=>$password,'address'=>$address,'image'=>$folder,'Status'=>$status);
			if ($this->Hello_Model->registrationrecords($data))
			{
				$config=array(
				'protocol'=>'smtp',
				'smtp_host'=>'ssl://smtp.googlemail.com',
				'smtp_port'=>'465',
				'smtp_user'=>'phpgrout@gmail.com',
				'smtp_pass'=>'Hello@123',
				'charset'=>'iso-8859-1',
				'mailtype'=>'html',
				'wordwrap'=> true
				);
				$subject= "Registration Succesfull";
				$body= "You have successfully registered with our site.";
				$this->load->library('email',$config);
				$this->email->set_newline("\r\n");
				$this->email->from('phpgrout@gmail.com','');
				$this->email->to($email);
				$this->email->subject($subject);
				$this->email->message($body);
				if($this->email->send())
				{
				echo "<script>alert('Registration Successfull!!')</script>";
				echo "<script>window.location.href='logindata'</script>";
				}
				else
				{
				echo "<script>alert('Registration Failed!!')</script>";
				}
			}
			else
			{
				echo "<script>alert('Not Inserted!!')</script>";
			}
		}
	}
}
	function logindata()
	{
		$this->load->view('login');
		if($this->input->post('submit'))
		{
			$_SESSION['email']=$this->input->post('email1');
			$password=$this->input->post('password1');
			$status="Active";
			if ($this->Hello_Model->loginrecords($_SESSION['email'],$password)) 
			{
				if($this->Hello_Model->statuscheck($_SESSION['email'],$status))
				{
					echo "<script>alert('Login successfull!!')</script>";
					echo "<script>window.location.href='duplicate'</script>";
				}
				else
				{
					echo "<script>alert('Your account has been blocked!!')</script>";
				}
				
				// redirect("Hellocontroller/duplicate");
			}
			else
			{
				echo "<script>alert('Login failed!!')</script>";
			}
		}
	}
	function logout()
	{
		session_unset();
		redirect("Hellocontroller/home");
	}
	function editdatauser()
	{
		$email=$_SESSION['email'];
		$id=$this->input->get('ep');
		// echo $id;
		$result['data']=$this->Hello_Model->editrecordsuser($id);
		$this->load->view('edituser',$result);
		if($this->input->post('submit'))
		{
			$name=$this->input->post('name');
			$email=$this->input->post('email');
			$phone=$this->input->post('phone');
			$address=$this->input->post('address');
			$data=array('fullname'=>$name,'email'=>$email,'phonenumber'=>$phone,'address'=>$address);
			if($this->Hello_Model->userregistrationbyid($data,$id))
			{
				// echo "<script>alert('Edit successfull')</script>";
				// echo "<script>window.location.href='echo base_url().index.php/Hellocontroller/logindata'</script>";
				redirect("HelloController/userprofile");
			}
			else
			{
				echo "<script>alert('Edit Not successfull')</script>";
			}
			
			
		}
		if($this->input->post('update1'))
		{
			$oldphoto=$this->input->post('oldphoto');
			$filename=$_FILES['image']['name'];
			// echo $oldphoto,$filename;

			if ($filename=="") 
			{
				$folder=$oldphoto;
			}
			else
			{
				$file=$_FILES['image']['name'];
				$folder="image/".$file;

			}
			$tempfile=$_FILES['image']['tmp_name'];
			move_uploaded_file($tempfile, $folder);
			if($this->Hello_Model->photochange($folder,$email))
			{
				redirect("Hellocontroller/userprofile");
			}
			else
			{
				echo "<script>alert('Not updated!!')</script>";
			}
		}
	}
	function userproduct()
	{
		$this->load->view('userproduct');
	}
	// function cart()
	// {
	// 	$this->load->view('cart');
	// }
	// function nav()
	// {
	// 	$this->load->view('navbar1');
	// }
	function forgotpassword()
	{
		$this->load->view('forgotpassword');
		if ($this->input->post('forgotpassword')) 
		{
			$_SESSION['emailchk']=$this->input->post('passemail');
			if ($this->Hello_Model->forgotpasswordemail($_SESSION['emailchk'])) 
			{
				redirect("Hellocontroller/passrest");
			}
			else
			{
				echo "<script>alert('Email does not exists!!')</script>";
			}
		}
	}
function passrest()
{
$id=$_SESSION['emailchk'];
$this->load->view('passwordupdate');
if ($this->input->post('changepassword'))
{
$passwordnew=$this->input->post('password');
$passwordcon=$this->input->post('cpassword');
if ($passwordnew==$passwordcon)
{
if ($this->Hello_Model->updatepasswordbyid($passwordcon,$id))  
{
redirect("Hellocontroller/logindata");
}
else
{
echo "<script>alert('Not Updated!!')</script>";
}
}
else
{
echo "<script>alert('Password and Confirm Password not match!!')</script>";
}
}
}
}

?>