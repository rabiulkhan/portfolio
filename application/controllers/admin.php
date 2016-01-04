<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		if ($this->session->userdata('admin_login') !== 1)
			redirect(base_url() . 'index.php/login', 'refresh');
			
		$page_data['page_name']='dashboard';
		$this->load->view('backend/index',$page_data);
	}
	
	public function dashboard()
	{
	
		if ($this->session->userdata('admin_login') != 1)
			redirect(base_url() . 'index.php/login', 'refresh');
	
		$page_data['page_name']='dashboard';
		$this->load->view('backend/index',$page_data);
	}
	
	function about($param1="",$param2="")
	{
		if($param1 == "view"){
			$page_data['about']   = $this->db->get('about')->result_array();
			$page_data['page_name']   = 'about';
			$this->load->view('backend/index',$page_data);
		}else if($param1 == "do_update"){
			$val = $this->db->get_where('about')->result_array();
			foreach($val as $row){
				$data['name']       				= $this->input->post('name');
				$data['sname']       				= $this->input->post('sname');
				$data['company']         			= $this->input->post('company');
				$data['birthday']         			= $this->input->post('birthday');
				$data['birthplace']         		= $this->input->post('birthplace');
				$data['hobbies']         			= $this->input->post('hobbies');
				$data['address']        	 		= $this->input->post('address');
				$data['phone']        	 			= $this->input->post('phone');
				$data['email']        	 			= $this->input->post('email');
				$data['web']        	 			= $this->input->post('web');
				$data['city']        	 			= $this->input->post('city');
				$data['experience']        	 		= $this->input->post('experience');
				$data['description']        	 	= $this->input->post('description');
				
				$this->db->where('about_id',$row['about_id']);
				$this->db->update('about',$data);
				}
				redirect(base_url().'index.php/admin/about/view', 'refresh');
		} else if($param1 == "gallary"){
			
			foreach ($_FILES["files"]['name'] as $f => $name){
				$data['about'] = '';
				$this->db->insert('about_gallary',$data);
				$id = mysql_insert_id();
				move_uploaded_file($_FILES["files"]["tmp_name"][$f],"uploads/about_gallary_image/about_gallary_".$id.".jpg");	
			}
			redirect(base_url().'index.php/admin/about/view', 'refresh');
		} else if($param1 == "delete1"){
			
			if(file_exists("uploads/about_gallary_image/about_gallary_".$param2.".jpg"))
			{
				unlink("uploads/about_gallary_image/about_gallary_".$param2.".jpg");
			}
			
			$this->db->where('about_gallary_id',$param2);
			$this->db->delete('about_gallary');
			redirect(base_url().'index.php/admin/about/view', 'refresh');
		} else if($param1 == "add"){
			
			$id = mysql_insert_id();
			move_uploaded_file($_FILES['image']['tmp_name'],"uploads/parallax_image/bck.jpg");
			redirect(base_url().'index.php/admin/about/view', 'refresh');
		}
		
		else if($param1 == "r_add"){
			
			$id = mysql_insert_id();
			move_uploaded_file($_FILES['image']['tmp_name'],"uploads/resume/rsm.pdf");
			redirect(base_url().'index.php/admin/about/view', 'refresh');
		}
	}
	
	function education($param1="",$param2="")
	{
		if($param1 == "add"){
			$data['institute']         				    = $this->input->post('institute');
			$data['subject']         					= $this->input->post('subject');
			$data['starting_year']        				= $this->input->post('starting_year');
			$data['ending_year']        	 			= $this->input->post('ending_year');
			$data['city']        	 					= $this->input->post('city');
			$data['description']        	 			= $this->input->post('description');
				
			$this->db->insert('education',$data);
			$id = mysql_insert_id();
			redirect(base_url().'index.php/admin/education/view', 'refresh');
		} else if($param1 == "view"){
			$page_data['education']   = $this->db->get('education')->result_array();
			$page_data['page_name']   = 'education_list';
			$this->load->view('backend/index',$page_data);
		}else if($param1 == "do_update"){
			$data['institute']         				    = $this->input->post('institute');
			$data['subject']         					= $this->input->post('subject');
			$data['starting_year']        				= $this->input->post('starting_year');
			$data['ending_year']        	 			= $this->input->post('ending_year');
			$data['city']        	 					= $this->input->post('city');
			$data['description']        	 			= $this->input->post('description');
			
			$this->db->where('education_id',$param2);
			$this->db->update('education',$data);
			redirect(base_url().'index.php/admin/education/view', 'refresh');
		} else if($param1 == "delete"){
			
			$this->db->where('education_id',$param2);
			$this->db->delete('education');
			redirect(base_url().'index.php/admin/education/view', 'refresh');
		}
	}
	
	function work_experience($param1="",$param2="")
	{
		if($param1 == "add"){
			$data['company']         				    = $this->input->post('company');
			$data['designation']         				= $this->input->post('designation');
			$data['starting_year']        				= $this->input->post('starting_year');
			$data['ending_year']        	 			= $this->input->post('ending_year');
			$data['city']        	 					= $this->input->post('city');
			$data['description']        	 			= $this->input->post('description');
			$data['web']        	 					= $this->input->post('web');
				
			$this->db->insert('work_experience',$data);
			$id = mysql_insert_id();
			redirect(base_url().'index.php/admin/work_experience/view', 'refresh');
		} else if($param1 == "view"){
			$page_data['work_experience']   = $this->db->get('work_experience')->result_array();
			$page_data['page_name']   = 'work_experience_list';
			$this->load->view('backend/index',$page_data);
		}else if($param1 == "do_update"){
			$data['company']         				    = $this->input->post('company');
			$data['designation']         				= $this->input->post('designation');
			$data['starting_year']        				= $this->input->post('starting_year');
			$data['ending_year']        	 			= $this->input->post('ending_year');
			$data['city']        	 					= $this->input->post('city');
			$data['description']        	 			= $this->input->post('description');
			$data['web']        	 					= $this->input->post('web');
			
			$this->db->where('work_experience_id',$param2);
			$this->db->update('work_experience',$data);
			redirect(base_url().'index.php/admin/work_experience/view', 'refresh');
		} else if($param1 == "delete"){
			
			$this->db->where('work_experience_id',$param2);
			$this->db->delete('work_experience');
			redirect(base_url().'index.php/admin/work_experience/view', 'refresh');
		}
	}
	
	function project($param1="",$param2="")
	{
		if($param1 == "add"){
			$data['name']         				 	   	    = $this->input->post('name');
			$data['description']         					= $this->input->post('description');
			$data['duration']        						= $this->input->post('duration');
			$data['type']        							= $this->input->post('type');
			$data['language']         				 	   	= $this->input->post('language');
			$data['database']         						= $this->input->post('database');
			$data['design']        							= $this->input->post('design');
			$data['frameworks']        						= $this->input->post('frameworks');
				
			$this->db->insert('project',$data);
			$id = mysql_insert_id();
			move_uploaded_file($_FILES['image']['tmp_name'],"uploads/project_image/project_".$id.".jpg");
			redirect(base_url().'index.php/admin/project/view', 'refresh');
		} else if($param1 == "view"){
			$page_data['project']   = $this->db->get('project')->result_array();
			$page_data['page_name']   = 'project_list';
			$this->load->view('backend/index',$page_data);
		}else if($param1 == "do_update"){
			$data['name']         				 	   	    = $this->input->post('name');
			$data['description']         					= $this->input->post('description');
			$data['duration']        						= $this->input->post('duration');
			$data['type']        							= $this->input->post('type');
			$data['language']         				 	   	= $this->input->post('language');
			$data['database']         						= $this->input->post('database');
			$data['design']        							= $this->input->post('design');
			$data['frameworks']        						= $this->input->post('frameworks');
			
			$this->db->where('project_id',$param2);
			$this->db->update('project',$data);
			move_uploaded_file($_FILES['image']['tmp_name'],"uploads/project_image/project_".$param2.".jpg");
			redirect(base_url().'index.php/admin/project/view', 'refresh');
		} else if($param1 == "delete"){
			if(file_exists("uploads/project_image/project_".$param2.".jpg"))
			{
				unlink("uploads/project_image/project_".$param2.".jpg");
			}
			$this->db->where('project_id',$param2);
			$this->db->delete('project');
			redirect(base_url().'index.php/admin/project/view', 'refresh');
		}
	}
	
	function skill($param1="",$param2="")
	{
		if($param1 == "add"){
			$data['name']         				 	   	    = $this->input->post('name');
			$data['percentage']         					= $this->input->post('percentage');
			
				
			$this->db->insert('skill',$data);
			$id = mysql_insert_id();
			redirect(base_url().'index.php/admin/skill/view', 'refresh');
		} else if($param1 == "view"){
			$page_data['skill']   = $this->db->get('skill')->result_array();
			$page_data['page_name']   = 'skill_list';
			$this->load->view('backend/index',$page_data);
		}else if($param1 == "do_update"){
			$data['name']         				 	   	    = $this->input->post('name');
			$data['percentage']         					= $this->input->post('percentage');
			
			$this->db->where('skill_id',$param2);
			$this->db->update('skill',$data);
			redirect(base_url().'index.php/admin/skill/view', 'refresh');
		} else if($param1 == "delete"){
			
			$this->db->where('skill_id',$param2);
			$this->db->delete('skill');
			redirect(base_url().'index.php/admin/skill/view', 'refresh');
		}
	}
	
	function award($param1="",$param2="")
	{
		if($param1 == "add"){
			$data['title']         				 	   	    = $this->input->post('title');
			$data['institute']         						= $this->input->post('institute');
			$data['year']         							= $this->input->post('year');
				
			$this->db->insert('award',$data);
			$id = mysql_insert_id();
			move_uploaded_file($_FILES['image']['tmp_name'],"uploads/award_image/award_".$id.".jpg");
			redirect(base_url().'index.php/admin/award/view', 'refresh');
		} else if($param1 == "view"){
			$page_data['award']   = $this->db->get('award')->result_array();
			$page_data['page_name']   = 'award_list';
			$this->load->view('backend/index',$page_data);
		}else if($param1 == "do_update"){
			$data['title']         				 	   	    = $this->input->post('title');
			$data['institute']         						= $this->input->post('institute');
			$data['year']         							= $this->input->post('year');
			
			$this->db->where('award_id',$param2);
			$this->db->update('award',$data);
			move_uploaded_file($_FILES['image']['tmp_name'],"uploads/award_image/award_".$param2.".jpg");
			redirect(base_url().'index.php/admin/awards/view', 'refresh');
		} else if($param1 == "delete"){
			if(file_exists("uploads/award_image/award_".$param2.".jpg"))
			{
				unlink("uploads/award_image/award_".$param2.".jpg");
			}
			$this->db->where('award_id',$param2);
			$this->db->delete('award');
			redirect(base_url().'index.php/admin/awards/view', 'refresh');
		}
	}
	
	function work($param1="",$param2="")
	{
		if($param1 == "add"){
			$data['work_field']         				= $this->input->post('work_field');
			$data['description']         				= $this->input->post('description');
				
			$this->db->insert('work',$data);
			$id = mysql_insert_id();
			redirect(base_url().'index.php/admin/work/view', 'refresh');
		} else if($param1 == "view"){
			$page_data['work']   = $this->db->get('work')->result_array();
			$page_data['page_name']   = 'work_list';
			$this->load->view('backend/index',$page_data);
		}else if($param1 == "do_update"){
			$data['work_field']         				= $this->input->post('work_field');
			$data['description']         				= $this->input->post('description');
			
			$this->db->where('work_id',$param2);
			$this->db->update('work',$data);
			redirect(base_url().'index.php/admin/work/view', 'refresh');
		} else if($param1 == "delete"){
			
			$this->db->where('work_id',$param2);
			$this->db->delete('work');
			redirect(base_url().'index.php/admin/work/view', 'refresh');
		}
	}
	
	function research($param1="",$param2="")
	{
		if($param1 == "add"){
			$data['name']         				            = $this->input->post('name');
			$data['description']         					= $this->input->post('description');
			$data['duration']        			    		= $this->input->post('duration');
				
			$this->db->insert('research',$data);
			$id = mysql_insert_id();
			redirect(base_url().'index.php/admin/research/view', 'refresh');
		} else if($param1 == "view"){
			$page_data['research']   = $this->db->get('research')->result_array();
			$page_data['page_name']   = 'research_list';
			$this->load->view('backend/index',$page_data);
		}else if($param1 == "do_update"){
			$data['name']         				            = $this->input->post('name');
			$data['description']         					= $this->input->post('description');
			$data['duration']        			    		= $this->input->post('duration');
			
			$this->db->where('research_id',$param2);
			$this->db->update('research',$data);
			redirect(base_url().'index.php/admin/research/view', 'refresh');
		} else if($param1 == "delete"){
			
			$this->db->where('research_id',$param2);
			$this->db->delete('research');
			redirect(base_url().'index.php/admin/research/view', 'refresh');
		}
	}
	
	function system_settings($pamr1="",$pamr2=""){
		if($pamr1 == "view"){
			$page_data['system_settings']   = $this->db->get('system_settings')->result_array();
			$page_data['page_name']   = 'system_settings';
			$this->load->view('backend/index',$page_data);
		}else if($pamr1 == "do_update"){
			$val = $this->db->get_where('system_settings')->result_array();
			foreach($val as $row){
				$data['system_name']       				= $this->input->post('system_name');
				$data['system_title']        	 		= $this->input->post('system_title');
				$data['address']        	 			= $this->input->post('address');
				$data['phone']         					= $this->input->post('phone');
				$data['about']         					= $this->input->post('about');
				
				$this->db->where('system_settings_id',$row['system_settings_id']);
				$this->db->update('system_settings',$data);
				}
				redirect(base_url().'index.php/admin/system_settings/view', 'refresh');
		} 
		
		else if($pamr1 == "network_update"){
			$val = $this->db->get_where('network_settings')->result_array();
			foreach($val as $row){
				$data['facebook']       				= $this->input->post('facebook');
				$data['linkedin']        	 			= $this->input->post('linkedin');
				$data['google_plus']        	 		= $this->input->post('google_plus');
				$data['twitter']         					= $this->input->post('twitter');
				
				$this->db->where('network_settings_id',$row['network_settings_id']);
				$this->db->update('network_settings',$data);
				}
				redirect(base_url().'index.php/admin/system_settings/view', 'refresh');
		}
	}
	
	function manage_profile($pamr1="",$pamr2=""){
		if($pamr1 == "view"){
			$page_data['manage_profile']   = $this->db->get('admin')->result_array();
			$page_data['page_name']   = 'manage_profile';
			$this->load->view('backend/index',$page_data);
		}else if($pamr1 == "update_profile_info"){
			$val = $this->db->get_where('admin')->result_array();
			foreach($val as $row){
				$data['email']       				= $this->input->post('email');
				
				$this->db->where('admin_id',$row['admin_id']);
				$this->db->update('admin',$data);
				}
				redirect(base_url().'index.php/admin/manage_profile/view', 'refresh');
		}
		if ($pamr1 == 'change_password') {
            $data['password']             = $this->input->post('password');
            $data['new_password']         = $this->input->post('new_password');
            $data['confirm_new_password'] = $this->input->post('confirm_new_password');
            
            $current_password = $this->db->get_where('admin', array(
                'admin_id' => $this->session->userdata('admin_id')
            ))->row()->password;
            if ($current_password == $data['password'] && $data['new_password'] == $data['confirm_new_password']) {
                $this->db->where('admin_id', $this->session->userdata('admin_id'));
                $this->db->update('admin', array(
                    'password' => $data['new_password']
                ));
            redirect(base_url() . 'index.php/admin/manage_profile/view', 'refresh');
        }
	}
	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */