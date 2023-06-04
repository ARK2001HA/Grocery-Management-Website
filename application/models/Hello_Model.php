<?php
class Hello_Model extends CI_MODEL
{
	function registrationrecords($data)
	{
		$query=$this->db->insert('userregistration',$data);
		if($query)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	function loginrecords($email,$password)
	{
		$this->db->select('*');
		$this->db->from('userregistration');
		$this->db->where('email',$email);
		$this->db->where('Password',$password);
		$query=$this->db->get();
		if ($query->num_rows()) 
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	function display($email)
	{
		$this->db->where('email',$email);
		$this->db->select("*");
		$this->db->from("userregistration");
        $query=$this->db->get();
         return $query->result_array();   
	}
	function editrecordsuser($id)
	{
		$this->db->select('*');
		$this->db->from('userregistration');
		$this->db->where('email',$id);
		$query=$this->db->get();
		return $query->result_array();
	}
	function userregistrationbyid($data,$id)
	{
		$this->db->where('email',$id);
		if ($this->db->update('userregistration',$data)) 
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	function photochange($folder,$email)
	{
		$sql="UPDATE `userregistration` SET `image`='$folder' WHERE email='$email'";
		if ($this->db->query($sql)) 
		{
			return true;
		}
		else
		{
			return false;
		}
		
	}
	function contactdetails($data)
	{
		$query=$this->db->insert('contactus',$data);
		if($query)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	
	function statuscheck($id,$status)
	{
		$query=$this->db->query("SELECT * FROM userregistration WHERE email='$id'");
		if ($query->num_rows()>0) 
		{
			$row=$query->row();
			if($status==$row->status) 
			{
				return true;
			}
			else
			{
				return false;
			}
		}
	}
	function forgotpasswordemail($email)
	{
		$this->db->where('Email',$email);
		$this->db->select('*');
		$this->db->from('userregistration');
		$query=$this->db->get();
		if ($query->num_rows()) 
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	function updatepasswordbyid($passwordcon,$id)
	{
		$sql="UPDATE `userregistration` SET `Password`='$passwordcon' WHERE Email='$id'";
		if ($this->db->query($sql)) 
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	function check($email)
	{
		$this->db->select('*');
		$this->db->from('userregistration');
		$this->db->where('email',$email);
		$query=$this->db->get();
		if ($query->num_rows()>0) 
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