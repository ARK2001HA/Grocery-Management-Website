<?php
class Admin_Model extends CI_MODEL
 {
// 	function householdrecords($data)
// 	{
// 		$query=$this->db->insert('householditem',$data);
// 		if($query)
// 		{
// 			return true;
// 		}
// 		else
// 		{
// 			return false;
// 		}
// 	}
// 	function displayhousehold()
// 	{
// 		$this->db->select('*');
// 		$this->db->from('householditem');
// 		$query=$this->db->get();
// 		return $query->result_array();
// 	}
// 	function displayhouseholddetails($id)
// 	{
// 		$this->db->where('id',$id);
// 		$this->db->select('*');
// 		$this->db->from('householditem');
// 		$query=$this->db->get();
// 		return $query->result_array();
// 	}
	// personal care
	function pcarerecords($data)
	{
	$query=$this->db->insert('products',$data);
		if($query)
		{
			return true;
		}
		else
		{
			return false;
		}	
	}
	function displaypersonal()
	{
		$this->db->select('*');
		$this->db->from('products');
		$query=$this->db->get();
		return $query->result_array();
	}
	function displayproducts()
	{
		$this->db->select('*');
		$this->db->from('productcatagory');
		$query=$this->db->get();
		return $query->result_array();
	}
	function dispcatagoryall2()
	{
		$this->db->select('*');
		$this->db->from('productcategory2');
		$query=$this->db->get();
		return $query->result_array();
	}
	function prodetails($id)
	{
		$this->db->where('Catagory_id',$id);
		$this->db->select('*');
		$this->db->from('products');
		$query=$this->db->get();
		return $query->result_array();
	}
	function productcatagorydetails($data)
	{
		if($this->db->insert('productcatagory',$data))
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	function addtocartdatainsert($data)
	{
		$query=$this->db->insert('checkoutdata',$data);
		if ($query) 
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	function displayproductall($id)
	{
		$this->db->where('Catagory_id',$id);
		$this->db->select('*');
		$this->db->from('products');
		$query=$this->db->get();
		return $query->result_array();
	}
	function cartdetailsdisplay($id)
	{
		$this->db->where('Userid',$id);
        $this->db->select('*');
		// $this->db->select('SUM(price) AS totalprice');
		$this->db->from('checkoutdata');
		$query=$this->db->get();
		return $query->result_array();
	}
	function deleterecords($id)
	{
		$this->db->where('Id',$id);
		if ($this->db->delete('checkoutdata')) 
		{
			return true;
		}
		else
		{
			return false;
		}
	
	}
	function userdetails()
	{
		$this->db->select('*');
		$this->db->from('userregistration');
		$query=$this->db->get();
		return $query->result_array();
	}
	function adminuserdetails()
	{
		$this->db->select('*');
		$this->db->from('products');
		$query=$this->db->get();
		return $query->result_array();
	}
	function deleterecordsadmin($id)
	{
		$this->db->where('Id',$id);
		if ($this->db->delete('products')) 
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	function editrecordsadmin($id)
	{

		$this->db->select('*');
		$this->db->from('products');
		$this->db->where('Id',$id);
		$query=$this->db->get();
		return $query->result_array();
	}
	function updateadminrecords($data,$id)
	{
		$this->db->where('Id',$id);
		if ($this->db->update('products',$data)) 
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	function admincatdetails()
	{
		$this->db->select('*');
		$this->db->from('productcatagory');
		$query=$this->db->get();
		return $query->result_array();
	}
	function deleterecordscat($id)
	{
		$this->db->where('Id',$id);
		if ($this->db->delete('productcatagory')) 
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	function editcat($id)
	{
		
		$this->db->select('*');
		$this->db->from('productcatagory');
		$this->db->where('Id',$id);
		$query=$this->db->get();
		return $query->result_array();
	}
	function admincat($data,$id)
	{
		$this->db->where('Id',$id);
		if ($this->db->update('productcatagory',$data)) 
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	function logindata($email,$password)
	{
		$this->db->select("*");
		$this->db->from('adminlogin');
		$this->db->where('email',$email);
		$this->db->where('password',$password);
		$query=$this->db->get();
		if($query->num_rows())
		{
			return true;
		}
		else
		{
			return false;
		}

	}
 function contact()
 {
 		$this->db->select('*');
		$this->db->from('contactus');
		$query=$this->db->get();
		return $query->result_array();
 }
 function deletecontact($id)
 {
 	$this->db->where('user_id',$id);
		if ($this->db->delete('contactus')) 
		{
			return true;
		}
		else
		{
			return false;
		}
 }
 function blockdata($id)
 {
 	$sql="UPDATE `userregistration` SET `Status`='Blocked' WHERE email='$id'";
		if ($this->db->query($sql)) 
		{
			return true;
		}
		else
		{
			return false;
		}
 }
 function unblockdata($id)
	{
		$sql="UPDATE `userregistration` SET `Status`='Active' WHERE email='$id'";
		if ($this->db->query($sql)) 
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	
}
?>