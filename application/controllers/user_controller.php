<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class user_controller extends CI_Controller
{
	function __construct()
	{
		parent::__construct();

		// $this->load->helper('url');
		$this->load->helper(array('form', 'url'));
		$this->load->library('tank_auth');
	}

	function index()
	{
		if($this->tank_auth->is_logged_in())
		{
			$this->load->model('user_model');
			// $this->load->model('admin_model');
			$group_id=$this->user_model->group_id();
			if($group_id==0)
			{
				// $this->load->view('templates/header.html');
				$id=$this->tank_auth->get_user_id();
	  			$data['det']=$this->user_model->show_my_complaints($id);
				$this->load->view('user/home.html', $data);
				// $this->load->view('templates/footer.html');
			}
			else if($group_id==1)
			{
				$this->load->view('templates/header.html');
				$this->load->model('user_model');
    			$data['det']=$this->user_model->get_complaints_all();
    			$data['assignee']=$this->user_model->get_moderators_all();
				$this->load->view('admin/home.html', $data);
				// $this->load->view('templates/footer.html');
				
			}
			else if($group_id==3)
			{
				$this->load->view('templates/header.html');
				$this->load->model('user_model');
    			$data['det']=$this->user_model->get_complaints($group_id);
    			$data['assignee']=$this->user_model->get_moderators($group_id);
				$this->load->view('admin/wsdc_admin.html', $data);
				// $this->load->view('templates/footer.html');
			}
			else if($group_id==303)
			{
				$this->load->view('templates/header.html');
				$this->load->model('user_model');
    			$data['det']=$this->user_model->get_complaints($group_id);
    			$data['assignee']=$this->user_model->get_moderators($group_id);
				$this->load->view('admin/wsdcmoderator.html', $data);
				// $this->load->view('templates/footer.html');
			}
			else if($group_id==2)
			{
				$this->load->view('templates/header.html');
				$this->load->model('user_model');
    			$data['det']=$this->user_model->get_complaints_all($group_id);
    			$data['assignee']=$this->user_model->get_moderators_all($group_id);
				$this->load->view('admin/home.html', $data);
				// $this->load->view('templates/footer.html');
			}
			else if($group_id==202)
			{
				$this->load->view('templates/header.html');
				$this->load->model('user_model');
    			$data['det']=$this->user_model->get_complaints($group_id);
    			$data['assignee']=$this->user_model->get_moderators($group_id);
				$this->load->view('admin/home.html', $data);
				// $this->load->view('templates/footer.html');
			}
			else if($group_id==4)
			{
				$this->load->view('templates/header.html');
				$this->load->model('user_model');
    			$data['det']=$this->user_model->get_complaints($group_id);
    			$data['assignee']=$this->user_model->get_moderators($group_id);
				$this->load->view('admin/StudentCouncil_admin.html', $data);
				// $this->load->view('templates/footer.html');	
			}
			else if($group_id==404)
			{
				$this->load->view('templates/header.html');
				$this->load->model('user_model');
    			$data['det']=$this->user_model->get_complaints($group_id);
    			$data['assignee']=$this->user_model->get_moderators($group_id);
				$this->load->view('admin/scmoderator.html', $data);
				// $this->load->view('templates/footer.html');	
			}
			else if($group_id==5)
			{
				$this->load->view('templates/header.html');
				$this->load->model('user_model');
    			$data['det']=$this->user_model->get_complaints($group_id);
    			$data['assignee']=$this->user_model->get_moderators($group_id);
				$this->load->view('admin/hostel_admin.html', $data);
				// $this->load->view('templates/footer.html');
			}
			else if($group_id==505)
			{
				$this->load->view('templates/header.html');
				$this->load->model('user_model');
    			$data['det']=$this->user_model->get_complaints($group_id);
    			$data['assignee']=$this->user_model->get_moderators($group_id);
				$this->load->view('admin/hostelmoderator.html', $data);
				// $this->load->view('templates/footer.html');
			}
			else if($group_id==6)
			{
				$this->load->view('templates/header.html');
				$this->load->model('user_model');
    			$data['det']=$this->user_model->get_complaints($group_id);
    			$data['assignee']=$this->user_model->get_moderators($group_id);
				$this->load->view('admin/mess_admin.html', $data);
				// $this->load->view('templates/footer.html');
			}
			else if($group_id==606)
			{
				$this->load->view('templates/header.html');
				$this->load->model('user_model');
    			$data['det']=$this->user_model->get_complaints($group_id);
    			$data['assignee']=$this->user_model->get_moderators($group_id);
				$this->load->view('admin/messmoderator.html', $data);
				// $this->load->view('templates/footer.html');
			}
			else if($group_id==7)
			{
				$this->load->view('templates/header.html');
				$this->load->model('user_model');
    			$data['det']=$this->user_model->get_complaints($group_id);
    			$data['assignee']=$this->user_model->get_moderators($group_id);
				$this->load->view('admin/academic_admin.html', $data);
				// $this->load->view('templates/footer.html');
			}
			else if($group_id==707)
			{
				$this->load->view('templates/header.html');
				$this->load->model('user_model');
    			$data['det']=$this->user_model->get_complaints($group_id);
    			$data['assignee']=$this->user_model->get_moderators($group_id);
				$this->load->view('admin/academicmoderator.html', $data);
				// $this->load->view('templates/footer.html');				
			}
			else if($group_id==11)
			{
				$arr['det'] = $this->fetch_complaints($group_id);
				$this->load->view('templates/header.html');
				$this->load->view('admin/elec_admin.html',$arr);
				// $this->load->view('templates/footer.html');
			}
				
			else if($group_id==44)
			{
				$arr['det'] = $this->fetch_complaints($group_id);
				$this->load->view('templates/header.html');
				$this->load->view('admin/carpenter_admin.html',$arr);
				// $this->load->view('templates/footer.html');
			}
				
			else if($group_id==33)
			{
				$arr['det'] = $this->fetch_complaints($group_id);
				$this->load->view('templates/header.html');
				$this->load->view('admin/lan_admin.html',$arr);
				// $this->load->view('templates/footer.html');
			}
				
			else if($group_id==22)
			{
				$arr['det'] = $this->fetch_complaints($group_id);
				$this->load->view('templates/header.html');
				$this->load->view('admin/plumber_admin.html',$arr);
				// $this->load->view('templates/footer.html');
			}
				
		}
		else
	 	{
			redirect('/auth/login/');
		}
	
	}


	function assign_to_issue()
	{
			// echo 'hurray!';
			// return "jhhh";
		$this->load->model('user_model');
		$dt['cid'] = $_POST['cid'];
		$dt['assignee'] = $_POST['assignee'];
		// print_r($dt);				
		$str = $this->user_model->assignee($dt);
		return $str;	
	}


	function submit_complaint()   ///complaint form submit
	{
		$this->load->model('user_model');
		$this->user_model->reg_complaint();
		$this->complaint_reg_success();
	}

	function complaint_reg_success()
	{
		$this->load->view('successs_submission page.html');
	}





  function fetch_complaints($hcdid)
  {
  	if(!$this->tank_auth->is_logged_in())
			redirect('auth/login');
    $this->load->model('user_model');
    $res=$this->user_model->get_complaints($hcdid);
    return $res;
  }

function fetch_grievences($hcdid)
  {
  	if(!$this->tank_auth->is_logged_in())
			redirect('auth/login');
    $this->load->model('user_model');
    $res=$this->user_model->get_grievences($hcdid);
    return $res;
  }


	function do_upload()
	{
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '100';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';
		// $config['file_name']  = ($this->db->insert_id() + 1)."jpg";  

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload())
		{
			// $error = array('error' => $this->upload->display_errors());

			// $this->load->view('upload_form', $error);

			$this->load->model('user_model');
			$this->user_model->reg_grievance();
		}
		else
		{
			$data = array('upload_data' => $this->upload->data());

			// $this->load->view('upload_success', $data);
			// print_r($data);
			// echo('<h1>hii !!</h1>');
			// var_dump($data);
			// echo('<h1>hii !!</h1>');
			// print($data['upload_data']['file_name']);
			echo('<h1>done!!</h1>');
						$insert_data = array(
                    'name' => $data['upload_data']['file_name'],
                    'path' => $data['upload_data']['full_path'],
                    // 'thumb_path'=> $data['upload_data']['file_path'] . 'thumbs/'. $data['upload_data']['file_name'],
                     );
			$this->load->model('user_model');
			$this->user_model->reg_grievance($insert_data);
			$this->complaint_reg_success();
			// $this->load->view('upload_success', $data);
			// $this->complaint_reg_success();
		}

	}

  function show_c_details()
  {
	  	if(!$this->tank_auth->is_logged_in())
				redirect('auth/login');
	  	$cid=$_GET['cid'];
	  	// echo $cid;
	  	$id=$this->tank_auth->get_user_id();
	  	$this->load->model('user_model');
	  	 // echo ' bullshit';
	  	 $data['inf']=$this->user_model->get_c_details($cid);
	  	 $data['user_grp']=$this->user_model->get_user_grp($id);
	  	 $this->load->view('templates/header.html');
	     $this->load->view('user/complaint_description.html',$data);
	     $data['query']=$this->user_model->get_report($cid);
	     $this->load->view('user/complaint_report.html',$data);
	     $this->load->view('templates/footer.html');
     
  }

    function show_ad_c_details()
  {
	  	if(!$this->tank_auth->is_logged_in())
				redirect('auth/login');
	  	$cid=$_GET['cid'];
	  	//echo $cid;
	  	$id=$this->tank_auth->get_user_id();
	  	$this->load->model('user_model');
	  	 $data['inf']=$this->user_model->get_c_details($cid);
	  	 $data['user_grp']=$this->user_model->get_user_grp($id);
	  	 $this->load->view('templates/header.html');
	     $this->load->view('admin/complaint_description.html',$data);
	     $data['query']=$this->user_model->get_report($cid);
	     $this->load->view('admin/complaint_report.html',$data);
	     $this->load->view('templates/footer.html');
     
  }



  function resolved()
  {
  	if(!$this->tank_auth->is_logged_in())
			redirect('auth/login');
   $cid=$_GET['cid'];
   //echo $cid;
    $this->load->model('admin_model');
    $this->admin_model->status_change($cid,'1');
    echo('<h2> Status Updated Successfully. <a href ="http://localhost/SAG-portal-nitw/index.php/user_controller" > click here </a> to go back</h2>');
    //$this->load->view('rahul/message.html'); ///temperory
   // $this->load->view('rahul/complaint_discription.html',$data);

  }
  function postpone()
  {
  	if(!$this->tank_auth->is_logged_in())
			redirect('auth/login');
   $cid=$_GET['cid'];
   //echo $cid;
    $this->load->model('admin_model');
    $this->admin_model->status_change($cid,'2');
    echo('<h2> Status Updated Successfully. <a href ="http://localhost/SAG-portal-nitw/index.php/user_controller" > click here </a> to go back</h2>');
    //$this->load->view('rahul/message.html'); ///temperory
   // $this->load->view('rahul/complaint_discription.html',$data);
	}

	function deleted()
  {
  	if(!$this->tank_auth->is_logged_in())
			redirect('auth/login');
   $cid=$_GET['cid'];
   //echo $cid;
    $this->load->model('admin_model');
    $this->admin_model->status_change($cid,'-1');
    //$this->load->view('rahul/message.html'); ///temperory
   // $this->load->view('rahul/complaint_discription.html',$data);
    echo('<h2> Status Updated Successfully. <a href ="http://localhost/SAG-portal-nitw/index.php/user_controller" > click here </a> to go back</h2>');
  }



	
	function show_grievances()
	{
		// $this->load->view('upvote.html');
		if(!$this->tank_auth->is_logged_in())
			redirect('auth/login');
		$this->load->model('user_model');
		$res['index'] = $this->user_model->get_grievances();
		// $res['image'] = $this->user_model->get_images();
		// $this->load->view('upvote.html',$res);
		$this->load->view('templates/header.html');
		$this->load->view('user/timeline.html',$res);
		$this->load->view('templates/footer.html');
	}


	function inc_upvotes()
	{
		if(!$this->tank_auth->is_logged_in())
			redirect('auth/login');
		$gid = $_GET["gid"];
		$this->load->model('user_model');
		$this->user_model->inc_upvotes($gid);
		$this->load->model('user_model');
		$res['index'] = $this->user_model->get_grievances();
		// $this->load->view('upvote.html',$res);
		$this->load->view('templates/header.html');
		$this->load->view('user/timeline.html',$res);
		$this->load->view('templates/footer.html');
	}

	function show_my_complaints()
	{
		// echo('<h1>gsaknhv</h1>');
		if(!$this->tank_auth->is_logged_in())
				redirect('auth/login');
	  $id=$this->tank_auth->get_user_id();
	  $this->load->model('user_model');
	  $data['det']=$this->user_model->show_my_complaints($id);
	  // echo $data['no_of_c'];
	  $this->load->view('templates/header.html');
	  $this->load->view('user/my_complaints.html',$data);
	  $this->load->view('templates/footer.html');
	}

	function time_line()
	{

		if(!$this->tank_auth->is_logged_in())
			redirect('auth/login');
		$this->load->model('user_model');
		$res['index'] = $this->user_model->get_grievances();
		$this->load->view('templates/header.html');
		$this->load->view('user/timeline.html',$res);
		$this->load->view('templates/footer.html');
	}


	function table()
	{
		if(!$this->tank_auth->is_logged_in())
				redirect('auth/login');
		$this->load->view('table/table.html');
	}


	function all_problems()
	{
		if(!$this->tank_auth->is_logged_in())
				redirect('auth/login');
		$this->load->model('user_model');
		$res['index'] = $this->user_model->get_all();
		$this->load->view('templates/header.html');
		$this->load->view('user/timeline.html',$res);
		$this->load->view('templates/footer.html');
	}


	function elec_problems()
	{
		if(!$this->tank_auth->is_logged_in())
				redirect('auth/login');
		$this->load->model('user_model');
		$res['index'] = $this->user_model->get_elec();
		$this->load->view('templates/header.html');
		$this->load->view('user/timeline.html',$res);
		$this->load->view('templates/footer.html');

	}


	function lan_problems()
	{
		if(!$this->tank_auth->is_logged_in())
				redirect('auth/login');
		$this->load->model('user_model');
		$res['index'] = $this->user_model->get_lan();
		$this->load->view('templates/header.html');
		$this->load->view('user/timeline.html',$res);
		$this->load->view('templates/footer.html');

	}


	function car_problems()
	{
		if(!$this->tank_auth->is_logged_in())
				redirect('auth/login');
		$this->load->model('user_model');
		$res['index'] = $this->user_model->get_grievances();
		$this->load->view('templates/header.html');
		$this->load->view('user/timeline.html',$res);
		$this->load->view('templates/footer.html');

	}

	function wsdc()
	{
		if(!$this->tank_auth->is_logged_in())
				redirect('auth/login');
		// $this->load->model('user_model');
		$this->load->view('templates/header.html');
		$this->load->view('user/wsdc.html');
		$this->load->view('templates/footer.html');
	}

	function hostel()
	{
		if(!$this->tank_auth->is_logged_in())
				redirect('auth/login');
		// $this->load->model('user_model');
		$this->load->view('templates/header.html');
		$this->load->view('user/hostel.html');
		$this->load->view('templates/footer.html');

	}

	function mess()
	{
		if(!$this->tank_auth->is_logged_in())
				redirect('auth/login');
		// $this->load->model('user_model');
		$this->load->view('templates/header.html');
		$this->load->view('user/mess.html');
		$this->load->view('templates/footer.html');

	}

	function academics()
	{
		if(!$this->tank_auth->is_logged_in())
				redirect('auth/login');
		// $this->load->model('user_model');
		$this->load->view('templates/header.html');
		$this->load->view('user/academics.html');
		$this->load->view('templates/footer.html');

	}

	function studentcouncil()
	{
		if(!$this->tank_auth->is_logged_in())
				redirect('auth/login');
		// $this->load->model('user_model');
		$this->load->view('templates/header.html');
		$this->load->view('user/studentcouncil.html.html');
		$this->load->view('templates/footer.html');

	}


	function plum_problems()
	{
		if(!$this->tank_auth->is_logged_in())
				redirect('auth/login');
		$this->load->model('user_model');
		$res['index'] = $this->user_model->get_grievances();
		$this->load->view('templates/header.html');
		$this->load->view('user/timeline.html',$res);
		$this->load->view('templates/footer.html');
	}

	function complaint_resolved()
	{
		// echo ("fjkqhwoi eklqgh ");
		if(!$this->tank_auth->is_logged_in())
			redirect('auth/login');
	   $cid=$_POST['cid'];
	    $this->load->model('admin_model');
	    $this->admin_model->status_change($cid,'1');
	    date_default_timezone_set('Asia/Kolkata');
	     $tym = date('Y-m-d H:i:s');
	     print($tym." The complaint is updated as resolved");

	}


}
