<?php 

class Admin_Controller extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Admin_Model');
		$this->load->library('session');
		$this->load->library('paypal_lib');
	}
	
	function personal()
	{
		$this->load->view('personal_admin');
		if($this->input->post('submit'))
		{
			$name=$this->input->post('pname');
			$price=$this->input->post('pprice');
			$disprice=$this->input->post('pdisprice');
			$catagory=$this->input->post('catagory');
			$filename=$_FILES['image']['name'];
			$tempname=$_FILES['image']['tmp_name'];
			$folder="image/".$filename;
			move_uploaded_file($tempname, $folder);
			$data=array('Name'=>$name,'Price'=>$price,'Dprice'=>$disprice,'Catagory_id'=>$catagory,'Image'=>$folder);
			if($this->Admin_Model->pcarerecords($data))
			{
				// echo "inserted";
				redirect("Admin_controller/adminproductdisplay");
			}
			else
			{
				echo "not inserted";
			}
		}
	}
	// function admindisplay()
	// {
	// 	$result['data']=$this->Admin_Model->displaypersonal();
	// 	// print_r($result);
	// 	// $this->load->view('pcaredisplay_admin',$result);
	// 	  $this->load->view('extra',$result);

	// }
	function productcatagory()
	{
		$this->load->view('product_admin');
		if ($this->input->post('submit')) 
		{
			$pcatagory=$this->input->post('pcatagory');
			$picture=$_FILES['pimage']['name'];
			$picturetemp=$_FILES['pimage']['tmp_name'];
			$folder="images/".$picture;
			move_uploaded_file($picturetemp, $folder);
			$data=array('pcatagory'=>$pcatagory,'Image'=>$folder);
			if ($this->Admin_Model->productcatagorydetails($data)) 
			{
				// echo "<script>alert('Insert Successfull!!')</script>";
				redirect("Admin_controller/displayadmincat");
			}
			else
			{
				echo "<script>alert('Not Inserted!!')</script>";
			}
		}
	}
	function displaypersonal()
	{
		$result['data']=$this->Admin_Model->displaypersonal();
		// print_r($result);
		// $this->load->view('pcaredisplay_admin',$result);
		  $this->load->view('extra',$result);

	}
	function product()
	{
		$result['data']=$this->Admin_Model->displayproducts();
		$this->load->view('product',$result);

	}
	function product2()
    {
		$result['data']=$this->Admin_Model->dispcatagoryall2();
		$this->load->view('product2',$result);
	}
	function productddetails_id()
	{
		$id=$this->input->get('id');
		$_SESSION['proid']=$id;
		$result['data']=$this->Admin_Model->prodetails($id);
		$this->load->view('pcaredisplay_admin',$result);
		// print_r($result);

	}
	function addtocartdata()
	{
		// $id=$this->input->get('id');
		$name=$this->input->get('name');
		$price=$this->input->get('price');
		$photo=$this->input->get('photo');
		$offer=$this->input->get('offer');
		$offertable="offer";
		$userid=$_SESSION['email'];
		$data=array('Product'=>$name,'Price'=>$price,'Photo'=>$photo,'Userid'=>$userid);
		if ($offer==$offertable)
		{
		   if ($_SESSION['dpriceh']>500)
			{
				if ($this->Admin_Model->addtocartdatainsert($data))
				{
					echo "<script>alert('Item added to cart!!')</script>";
					echo "<script>window.location.href='cartretuendata'</script>";
				}
				else
				{
					echo "<script>alert('Item not added to cart!!')</script>";
				}
			}	
			else
			{
				echo "<script>alert('Total amount must be 500!!')</script>";
				echo "<script>window.location.href='cartretuendata'</script>";
			}
		}
		else
		{
			if ($this->Admin_Model->addtocartdatainsert($data))
			{
				echo "<script>alert('Item added to cart!!')</script>";
				echo "<script>window.location.href='cartretuendata'</script>";
			}
			else
			{
				echo "<script>alert('Item not added to cart!!')</script>";
			}
		}
}
	function paypalconnect()
	{
		$_SESSION['item']=$this->input->get('name');
		$_SESSION['amount']=$this->input->get('price');
		if ($_SESSION['amount']>1) 
		{
			redirect('Admin_controller/buy');
		}
	}
	function buy()
	{
		$this->paypal_lib->add_field('item_name',$_SESSION['item']);
		$this->paypal_lib->add_field('amount',$_SESSION['amount']);
		$this->paypal_lib->paypal_auto_form();
	}
	function cartretuendata()
	{
		$id=$_SESSION['proid'];
		$result['data']=$this->Admin_Model->displayproductall($id);
		$this->load->view('pcaredisplay_admin',$result);
	}
	function cartdetails()
	{
	    $id=$_SESSION['email'];
		if ($id=="") 
		{
			echo "<script>alert('Your cart is empty!!')</script>";
			echo "<script>window.location.href='http://localhost/ci_project/index.php/Hellocontroller/logindata'</script>";
		}
		else
		{
			$result['data']=$this->Admin_Model->cartdetailsdisplay($id);
			 $this->load->view('cart',$result);

		}
	
		// echo "<pre>";
		// print_r($result);
		// die();

	}
	function deletedata()
	{
		$id=$this->input->get('id');
		if ($this->Admin_Model->deleterecords($id)) 
		{
			redirect("Admin_controller/cartdetails");
		}
		else
		{
			echo "Not Deleted!!";
		}
	}
	// function admin()
	// {
	// $this->load->view('index');
	// }
	function userdetails()
	{
		$result['data']=$this->Admin_Model->userdetails();
		// print_r($result);
	  $this->load->view('index',$result);
	}
	function adminproductdisplay()
	{
		$result['data']=$this->Admin_Model->adminuserdetails();
		$this->load->view('adminproductdisplay',$result);
	}
	function deleteadmindisplay()
	{
		$id=$this->input->get('delid');
		if ($this->Admin_Model->deleterecordsadmin($id)) 
		{
			redirect("Admin_controller/adminproductdisplay");
		}
		else
		{
			echo "Not Deleted!!";
		}
	}
	function updateuserdetails()
	{
		$id=$this->input->get('uid');
		// echo $id;
		$result['data']=$this->Admin_Model->editrecordsadmin($id);
		$this->load->view('userdetailsedit',$result);
		if($this->input->post('submit'))
		{
			$name=$this->input->post('pname');
			$price=$this->input->post('pprice');
			$disprice=$this->input->post('pdisprice');
			$catagory=$this->input->post('catagory');
			$oldimg=$this->input->post('oldimg');
			$newfilename=$_FILES['image']['name'];
			if($newfilename=="")
			{
				$folder=$oldimg;
			}
			else
			{
				$filename=$_FILES['image']['name'];
				$folder="Images/".$filename;
			}
			$tempname=$_FILES['image']['tmp_name'];
			move_uploaded_file($tempname, $folder);
			$data=array('Name'=>$name,'Price'=>$price,'Dprice'=>$disprice,'Catagory_id'=>$catagory,'Image'=>$folder);
			if($this->Admin_Model->updateadminrecords($data,$id))
			{
				// echo "inserted";
				redirect("Admin_controller/adminproductdisplay");
			}
			else
			{
				echo "not inserted";
			}
		}
	}
	function displayadmincat()
	{
	$result['data']=$this->Admin_Model->admincatdetails();
		$this->load->view('admincatdisplay',$result);	
	}
	function deletecatadmin()
	{
		$id=$this->input->get('delid');
		if ($this->Admin_Model->deleterecordscat($id)) 
		{
			redirect("Admin_controller/displayadmincat");
		}
		else
		{
			echo "Not Deleted!!";
		}
	}
	function updateadmincatagory()
	{
		$id=$this->input->get('uid');
		 // echo $id;
		$result['data']=$this->Admin_Model->editcat($id);
		$this->load->view('editcat',$result);
		if ($this->input->post('submit')) 
		{
			$pcatagory=$this->input->post('pcatagory');
			$oldimg=$this->input->post('oldimg');
			$newfilename=$_FILES['pimage']['name'];
			if($newfilename=="")
			{
				$folder=$oldimg;
			}
			else
			{
				$filename=$_FILES['pimage']['name'];
				$folder="Images/".$filename;
			}
			$tempname=$_FILES['pimage']['tmp_name'];
			move_uploaded_file($tempname, $folder);
			
			$data=array('pcatagory'=>$pcatagory,'Image'=>$folder);
			if ($this->Admin_Model->admincat($data,$id)) 
			{
				// echo "<script>alert('Insert Successfull!!')</script>";
				redirect("Admin_controller/displayadmincat");
			}
			else
			{
				echo "<script>alert('Not Inserted!!')</script>";
			}
		}
	}
	function adminlogin()
	{
		$this->load->view('adminlogin');
		if($this->input->post('submit'))
		{
			$_SESSION['email']=$this->input->post('email');
			$password=$this->input->post('password');
			
			if($this->Admin_Model->logindata($_SESSION['email'],$password))
			{
				echo "<script>alert('login successfull')</script>";
				echo "<script>window.location.href='userdetails'</script>";
			}
			else
			{
				echo "<script>alert('login not successfull')</script>";
			}
		}
	}
	function logout()
	{
		session_destroy();
		redirect("Admin_controller/adminlogin");
	}
	function feedback()
	{
		$result['data']=$this->Admin_Model->contact();
		$this->load->view('feedback',$result);
	}
	function deletecontact()
	{
		$id=$this->input->get('delid');
		if ($this->Admin_Model->deletecontact($id)) 
		{
			redirect("Admin_controller/feedback");
		}
		else
		{
			echo "Not Deleted!!";
		}
	}
	function block()
	{
		$id=$this->input->get('email');
		if ($this->Admin_Model->blockdata($id)) 
		{
			echo "<script>alert('Successfully blocked!!')</script>";
			echo "<script>window.location.href='userdetails'</script>";
		}
		else
		{
			echo "<script>alert('Not blocked!')</script>";
		}
	}
		function unblock()
	{
		$id=$this->input->get('emailid');
		if ($this->Admin_Model->unblockdata($id)) 
		{
			echo "<script>alert('Successfully unblocked!!')</script>";
			echo "<script>window.location.href='userdetails'</script>";
		}
		else
		{
			echo "<script>alert('Failed!')</script>";
		}
	}
	
}
?>