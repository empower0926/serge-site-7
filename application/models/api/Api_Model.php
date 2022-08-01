<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Api_Model extends CI_Model
	{
		public function get_AllBlogs($number="")
			{
			    if($number=="10")
		            {
    				        $this->db->select('sb.*');
				            $this->db->from('sl_blogs sb');
				            $this->db->order_by("sb.id", "DESC");
				            $this->db->limit("10");
		            }
		        else{      
				            $this->db->select('sb.*');
				            $this->db->from('sl_blogs sb');
				            $this->db->order_by("sb.id", "DESC");
				            $this->db->limit("3");
		            }
				$query = $this->db->get();
				if ($query->num_rows() > 0) {
					$row = $query->result_array();
					return $row;
				} else {
					return false;
				}
		        
			}
		public function get_AllBlooks($number="")
			{
				if($number=="4")
		            {
    				        $this->db->select('sb.*');
				            $this->db->from('sl_books sb');
				            $this->db->order_by("sb.id", "DESC");
				            $this->db->limit("4");
		            }
		        else
		            {
		               		$this->db->select('sb.*');
                    		$this->db->from('sl_books sb');
                    		$this->db->order_by("sb.id", "DESC");
                    }
    			$query = $this->db->get();
				if ($query->num_rows() > 0) {
					$row = $query->result_array();
					return $row;
				} else {
					return false;
				}
			}		
		
		public function get_LatestBlogs()
			{
				$this->db->select('sb.id,sb.image,sb.link,sb.CreatedAt');
				$this->db->from('sl_books sb');
				$this->db->order_by("sb.id", "DESC");
				$this->db->limit("10");
				$query = $this->db->get();
				if ($query->num_rows() > 0) {
					$row = $query->result_array();
					return $row;
				} else {
					return false;
				}
			}
			
		public function get_companies($number)
			{
			    if($number=="3")
		            {
        				$this->db->select('sb.id,sb.image,sb.link,sb.CreatedAt');
				        $this->db->from('sl_companies sb');
				        $this->db->order_by("sb.id", "DESC");
				        $this->db->limit("3");
		            }
		        else
		            {
		               		$this->db->select('sb.id,sb.image,sb.link,sb.CreatedAt');
				            $this->db->from('sl_companies sb');
				            $this->db->order_by("sb.id", "DESC");
				        
                    }
				$query = $this->db->get();
				if ($query->num_rows() > 0) {
					$row = $query->result_array();
					return $row;
				} else {
					return false;
				}
			}	

        public function add_subscribe($email="")
            {
               // echo "<pre>";print_R($_POST);
                $email=trim($email);
                
                $this->db->select('sb.email');
                $this->db->from('sl_subscribers sb');
                $this->db->where('sb.email', $email);
                $query = $this->db->get();
                if ($query->num_rows() > 0) {
                   return false;
                } else {
                    $data = [
                            "email" => $email,
                            "CreatedAt" => date("Y-m-d H:i:s")
                        ];
                    $this->db->insert('sl_subscribers', $data);
                    
                    /*sending email to users */
        			$to = $email;
        			$subject = "Subscription";
        			$txt = "Thanks for being part of the community";
        			$headers = "From: webmaster@example.com";
        			mail($to,$subject,$txt,$headers);
        			return true;
                    
                }
            }
    
        public function get_bloginfo($id="")
        {
            $this->db->select(
            'sb.id,sb.title,sb.image,sb.description,sb.description_front,sb.slug,sb.CreatedAt'
            );
            $this->db->from('sl_blogs sb');
            $this->db->where('sb.slug', $id);
            $query = $this->db->get();
            if ($query->num_rows() > 0) {
                $row = $query->row_array();
                return $row;
            } else {
                return false;
            }
        }
        
         public function get_bloginfofr($id="")
        {
            $this->db->select(
            'sb.*'
            );
            $this->db->from('sl_blogs sb');
            $this->db->where('sb.slug', $id);
            $query = $this->db->get();
            //echo $this->db->last_query();
            //exit;
            
            
            if ($query->num_rows() > 0) {
                $row = $query->row_array();
                return $row;
            } else {
                return false;
            }
        }
        
         
        public function show_AllBlogs()
			{
				$this->db->select('sb.*');
				$this->db->from('sl_blogs sb');
				$this->db->order_by("sb.id", "DESC");
				$query = $this->db->get();
				if ($query->num_rows() > 0) {
					$row = $query->result_array();
					return $row;
				} else {
					return false;
				}
			}
			
		public function get_AllVideos($number="")
		    {
		        if($number=="3")
		            {
        		        $this->db->select('sv.id,sv.link,sv.VideoId,sv.CreatedAt');
        				$this->db->from('sl_videos sv');
        				$this->db->order_by("sv.id", "DESC");
        				$this->db->limit("1");
		            }
		        else
		            {
		                $this->db->select('sv.id,sv.link,sv.VideoId,sv.CreatedAt');
        				$this->db->from('sl_videos sv');
        				$this->db->order_by("sv.id", "DESC");
		            }      
				$query = $this->db->get();
				if ($query->num_rows() > 0) {
					$row = $query->result_array();
					return $row;
				} else {
					return false;
				}
		    }
			
			

	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	