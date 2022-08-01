<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Signin_Model extends CI_Model
	{
		public function index($email,$password)
			{
			    
			    
				$data=array('email'=>$email,'password'=>md5($password));
				
				$query=$this->db->where($data);
				$login=$this->db->get('sl_admin');
			   // echo $this->db->last_query();
				if($login!=NULL){
				    //echo "uesss";
				    //$data=$login->row();
				    //print_R($data);
				    
				    //exit;
				return $login->row();
				 }
				 else
				 {
				     return false;
				 }
			}
	}