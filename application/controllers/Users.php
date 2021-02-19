<?php
class Users extends CI_Controller
{
public function index()	
{
	$this->load->model('Usermodel');
 	$rt['data']=$this->Usermodel->wel1();
  $rt['top_companies']=$this->Usermodel->top_companies();
  $this->load->view('index',$rt);	
}
// public function raw()	
// {
   
// 	$this->load->model('Usermodel');
// 	$rt['data']=$this->Usermodel->wel1();
	
//     $this->load->view("job_listings",$rt);	
// }
function get_city()
{
  $id=$this->input->post('id');

  $res=$this->db->query("select id from state_name where state='$id'");
  $row=$res->row();
  $id=$row->id;

    $row=$this->db->query("select * from city_name where state_code='$id' order by city asc");
    $data=$row->result();


     // echo "<option value='a'>Select Skill</option>";
     
    foreach ($data as $key) {
        echo "<option value='$key->city'>$key->city</option>";
    }

}
public function profile()	
{
    $this->load->view('complete_profile');	
}
public function lead1()
{
  date_default_timezone_set('asia/kolkata');
         $date=date('d-m-Y');
         $data=array(
         'name'=>$this->input->post('name'),
         'email'=>$this->input->post('email'),
         'phone'=>$this->input->post('phone'),
         'location'=>$this->input->post('location'),
         'date'=>$date
    
    
);
        $this->session->set_flashdata('item11','item-value');  
   $this->load->model('Usermodel');
   $this->Usermodel->lead2($data);

   $this->session->set_flashdata("lead",'lead');
   return redirect(Users);
}
function mail()
{
  
}


function filter_ajax()
{
 echo "hell"; 
}

 public function registration()	
 {
  $password=$this->input->post('password');
  $confirm_password=$this->input->post('confirm_password');
  $email=$this->input->post('email');
 		$data=array(
 	'name'=>$this->input->post('name'),
 	'email'=>$this->input->post('email'),
 	'password'=>$this->input->post('password'),
  
    'phone'=>$this->input->post('phone'),
    
);
 		$key=$this->input->post('email');

		$this->load->model('Usermodel');

		$checkmail=$this->Usermodel->mail_exists($key);
		 if($checkmail){
		$this->session->set_flashdata('item4','item-value');
			 return redirect(Users);
		
		 }
     if ($password!=$confirm_password) {
      $this->session->set_flashdata('item2','item-value');

       return redirect(Users);
     }
		else{
       // $this->session->set_userdata('email',$email);
      $this->Usermodel->check_data($data);
      $this->session->set_userdata('userdata', $data);
       $data['result']=$this->Usermodel->jobs_category();
   $data['qualification']=$this->Usermodel->qualification();
    $data['keyword']=$this->Usermodel->keyword();
     $data['state_name']=$this->Usermodel->state_name();
     $data['city_name']=$this->Usermodel->city_name();
			return redirect("users/registration1",$data);

		}
}

public function registration1()
{
  // $this->session->set_userdata('email',$email);
  $this->load->model('Usermodel');
  // $this->Usermodel->check_data($data);
      // $this->session->set_userdata('userdata', $data);
       $data['result']=$this->Usermodel->jobs_category();
   $data['qualification']=$this->Usermodel->qualification();
    $data['keyword']=$this->Usermodel->keyword();
     $data['state_name']=$this->Usermodel->state_name();
     $data['city_name']=$this->Usermodel->city_name();
      $this->load->view("registration",$data);

}





// public function candidate_profile() 
// {
//  $this->load->model('Usermodel');
//  $rt['data']=$this->Usermodel->wel();
//     $this->load->view("candidate_dashboard_profile_setting",$rt);  
// }

// public function candidate_detail()	
// {
	
//     $this->load->view('candidate_detail');	
// }
public function employer_dashboard_newjob()	
{
	
    $this->load->view('employer_dashboard_newjob');	
}
public function login()
	{
	$email=$this->input->post('email');
	$password=$this->input->post('password');
	$this->load->model('Usermodel');
	$check=$this->Usermodel->isvalidate($email,$password);

	if($check)
	{
		
         $this->session->set_userdata('email',$email);
          $rt['data']= $this->Usermodel->detail1();
          $rt['login']=$this->Usermodel->wel1();
		$this->load->view('loginindex',$rt);

		
	}
	else

	{

		 $this->session->set_flashdata('item3','item-value');
		
		
		return redirect(Users);

 }  
}
public function login5()
{
  $this->load->model('Usermodel');
 $rt['data']= $this->Usermodel->detail1();
          $rt['login']=$this->Usermodel->wel1();
    $this->load->view('loginindex',$rt);
}
public function login1($id)
	{
	$email=$this->input->post('email');
	$password=$this->input->post('password');
	$this->load->model('Usermodel');
	$check=$this->Usermodel->isvalidate($email,$password);

	if($check)
	{
		
         $this->session->set_userdata('email',$email);
		return redirect("users/job_detail/$id");

		
	}
	else

	{

		$this->session->set_flashdata('mesg','Details not matched');
		
		
		return redirect("users/job_detail/$id");

 }  
}


public function login2()
	{
	$email=$this->input->post('email');
	$password=$this->input->post('password');
	$this->load->model('Usermodel');
	$check=$this->Usermodel->isvalidate($email,$password);

	if($check)
	{
		
         $this->session->set_userdata('email',$email);
		return redirect("users/listing");

		
	}
	else

	{

		$this->session->set_flashdata('mesg','Details not matched');
		
		
		return redirect("users/listing");

 }  
}
// public function candidate_profile()	
// {
// 	$this->load->model('Usermodel');
// 	$rt['data']=$this->Usermodel->wel();
//     $this->load->view("candidate_dashboard_profile_setting",$rt);	
// }
public function logout()
{
	
	 session_destroy();
	 return redirect(Users);


}
public function update_register()
{

$email=$this->input->post('email');
$skill=$this->input->post('skill');
$skillset=implode(',',$skill);
date_default_timezone_set('asia/kolkata');
         $date=date('d-m-Y');
  $post=array('name'=>$this->input->post('name'),
   'phone'=> $this->input->post('phone'),
    'dob'=>$this->input->post('dob'),
    'category'=>$this->input->post('category'),
    'qualification'=>$this->input->post('qualification'),
    'skill'=>$skillset,
    'gender'=>$this->input->post('gender'),
    'college'=>$this->input->post('college'),
    'description'=>$this->input->post('description'),
    'state'=>$this->input->post('state'),
    'city'=>$this->input->post('city'),
    'address'=>$this->input->post('address'),
   'experience1'=>$this->input->post('experience1'),
   'experience2'=>$this->input->post('experience2'),
    'extra_qualification'=>$this->input->post('extra_qualification'),
   'current_salary1'=>$this->input->post('current_salary1'), 
   'current_salary2'=>$this->input->post('current_salary2'), 
    'expected_salary1'=>$this->input->post('expected_salary1'),
     'expected_salary2'=>$this->input->post('expected_salary2'),
    'job_status'=>$this->input->post('job_status'),
    'current_company'=>$this->input->post('current_company'),
    'date'=>$date
    
);

$config['upload_path']='upload/';
     $config['allowed_types'] ='gif|jpg|png|jpeg|docx|pdf';

    $this->load->library('upload',$config);
  if( $this->upload->do_upload('photo'))

  {
          
    $data=$this->upload->data();
    $image_path= $data['raw_name'].$data['file_ext'];
    $post['photo']=$image_path;
  }

   

    if( $this->upload->do_upload('resume'))

  { 
         
    $data=$this->upload->data();

    $image_path2=$data['raw_name'].$data['file_ext'];
    $post['resume']=$image_path2;
    }
 
// $this->session->set_flashdata('item1','item-value');
$this->load->model('Usermodel');
$this->Usermodel->up5($post,$email);
 $this->session->set_userdata('email',$email);
          $rt['data']= $this->Usermodel->detail1();
          $rt['login']=$this->Usermodel->wel1();
    $this->load->view('loginindex',$rt);  
}
public function update()
{

  $skill=$this->input->post('skill');
$skillset=implode(',',$skill);
$email=$this->input->post('email');
date_default_timezone_set('asia/kolkata');
         $date=date('d-m-Y');
	$post=array('name'=>$this->input->post('name'),
   'phone'=> $this->input->post('phone'),
    'dob'=>$this->input->post('dob'),
    'category'=>$this->input->post('category'),
    'qualification'=>$this->input->post('qualification'),
    'skill'=>$skillset,
    'gender'=>$this->input->post('gender'),
    'college'=>$this->input->post('college'),
    'description'=>$this->input->post('description'),
    'state'=>$this->input->post('state'),
    'city'=>$this->input->post('city'),
    'address'=>$this->input->post('address'),
   'experience1'=>$this->input->post('experience1'),
   'experience2'=>$this->input->post('experience2'),
    'extra_qualification'=>$this->input->post('extra_qualification'),
   'current_salary1'=>$this->input->post('current_salary1'), 
   'current_salary2'=>$this->input->post('current_salary2'), 
    'expected_salary1'=>$this->input->post('expected_salary1'),
     'expected_salary2'=>$this->input->post('expected_salary2'),
    'job_status'=>$this->input->post('job_status'),
    'current_company'=>$this->input->post('current_company'),
    'date'=>$date
    
);


$config['upload_path']='upload/';
     $config['allowed_types'] ='jpg|jpeg|pdf|doc|docx';
$config['max_width']            = 200;
$config['max_height']           =  200;
    $this->load->library('upload',$config);




  if (empty($_FILES['photo']['error'])) {
	if( $this->upload->do_upload('photo'))

	{
          
		$data=$this->upload->data();
		$image_path= $data['raw_name'].$data['file_ext'];
		$post['photo']=$image_path;
	}
  else
  {


    $this->session->set_flashdata('img_error','itemvalue');
     return redirect('users/candidate_profile');

  }
}

// exit;
   $config2['upload_path']='upload/';
    $config2['allowed_types'] ='gif|jpg|png|jpeg|docx|pdf';

    $this->load->library('upload',$config2);

    if( $this->upload->do_upload('resume'))

	{ 
         
		$data=$this->upload->data();

		$image_path2=$data['raw_name'].$data['file_ext'];
		$post['resume']=$image_path2;
    }
 // $this->session->set_userdata('email',$email);
    $this->session->set_flashdata('item5','itemvalue');

$this->load->model('Usermodel');
$this->Usermodel->up($post,$email);

 return redirect('users/candidate_profile');

	
}
public function candidate_profile() 
{

  $this->load->model('Usermodel');
  
  $rt['data']=$this->Usermodel->wel();
  $rt['result']=$this->Usermodel->jobs_category();
   $rt['qualification']=$this->Usermodel->qualification();
    $rt['keyword']=$this->Usermodel->keyword();
     $rt['state_name']=$this->Usermodel->state_name();
     $rt['city_name']=$this->Usermodel->city_name();
  $this->load->view("edit_profile",$rt); 
}

public function change_password()
{
  $this->load->model('Usermodel');
  $rt['data']=$this->Usermodel->wel();
	$this->load->view('candidate_dashboard_changed_password',$rt);
}


  public function update1()
    {
   
        $cur_password = $this->input->post('old_password');
        $new_password = $this->input->post('new_password');
        $con_password = $this->input->post('con_password');
        $this->load->model('Usermodel');
        $email =$this->session->userdata('email');
        $password = $this->Usermodel->getCurrPassword($email);
        if($password->password == $cur_password){
            if($new_password == $con_password){

            	if($cur_password!=$new_password)
            	{
					if($this->Usermodel->updatePassword($new_password, $email)){
 $this->session->set_flashdata('item6','itemvalue');
	                   
                        return redirect('users/change_password');   
	                }
	                else{
	                    
                        $this->session->set_flashdata('item7','itemvalue');
                        return redirect('users/change_password');   
	                }
				}
	            else
	            {
	            	
                    $this->session->set_flashdata('item8','itemvalue');
                    return redirect('users/change_password');   
	            }
            }
            else{
                
                $this->session->set_flashdata('item9','itemvalue');
                return redirect('users/change_password');   
            }
        }
        else{
            
            
         $this->session->set_flashdata('item10','itemvalue');
            return redirect('users/change_password'); 

    }

}

public function listing()
{
error_reporting(0);

$this->load->model('Usermodel');
$data['data']=$this->Usermodel->wel2();
$row=$this->db->query("select * from job_search WHERE status='accept'");
         $data['experience'] =$row->result();
         $row=$this->db->query("select distinct(city) from job_search WHERE status='accept'");
          $data['city'] =$row->result();
          $row=$this->db->query("select distinct(category) from job_search WHERE status='accept'");
           $data['category'] =$row->result();
           $row=$this->db->query("select distinct(industry) from job_search WHERE status='accept'");
           $data['industry'] =$row->result();
           $row=$this->db->query("select distinct(job_type) from job_search WHERE status='accept'");
           $data['job_type'] =$row->result();
            $row=$this->db->query("select distinct(job_type) from job_search WHERE status='accept'");
           $data['experience'] =$row->result();

$this->load->view('job_listings',$data);
}

public function job1()	
{

$this->load->model('Usermodel');
  $per_page=$this->Usermodel->pagination_limit();

$btn=$this->input->post('btn');
if(isset($btn))
{
  //this line
$this->session->set_userdata('keyword',$this->input->post('title'));
$this->session->set_userdata('keyword1',$this->input->post('state'));
$this->session->set_userdata('keyword2',$this->input->post('experience'));
}
$keyword=$this->session->userdata('keyword');
$keyword1=$this->session->userdata('keyword1');
$keyword2=$this->session->userdata('keyword2');


     $total_rows=$this->Usermodel->search_num_rows($keyword,$keyword1,$keyword2);

	 $this->load->library('pagination');
	  $config['base_url'] = base_url('find-jobs');
	   $config['per_page'] =$per_page;
	    $config['total_rows'] = $total_rows;
	    $config['full_tag_open'] = '<ul class="pagination page-numbers">';
                $config['full_tag_close'] = '</ul>';            
                $config['prev_link'] = '&laquo;';
                $config['prev_tag_open'] = '<li class="page-numbers">';
                $config['prev_tag_close'] = '</li>';
                $config['next_link'] = '&raquo;';
                $config['next_tag_open'] = '<li>';
                $config['next_tag_close'] = '</li>';
                $config['cur_tag_open'] = '<li class="active"><a href="#">';
                $config['cur_tag_close'] = '</a></li>';
                $config['num_tag_open'] = '<li>';
                $config['num_tag_close'] = '</li>';
                               $config['first_link'] = "";
$config['last_link'] = "";
$this->pagination->initialize($config);

 $data['data'] =$this->Usermodel->search($keyword,$keyword1,$keyword2,$config['per_page'], $this -> uri -> segment(3));

    $data['total_jobs']=$total_rows;

         $row=$this->db->query("select * from job_search WHERE status='accept'");
         $data['experience'] =$row->result();
         $row=$this->db->query("select distinct(city) from city_name order by city asc");
 $data['city'] =$row->result();
 $row=$this->db->query("select distinct(category) from jobs_category ");
 $data['category'] =$row->result();
  $row=$this->db->query("select distinct(industry) from job_search WHERE status='accept'");
   $data['industry'] =$row->result();

  $row=$this->db->query("select distinct(skill) from keyword");
   $data['skill'] =$row->result();

   $row=$this->db->query("select distinct(job_type) from job_search WHERE status='accept'");
   $data['job_type'] =$row->result();
   // $row=$this->db->query("select distinct(job_type) from job_search WHERE status='accept'");
   // $data['experience'] =$row->result();

$data['keyword']=$this->session->userdata('keyword');
$data['keyword1']=$this->session->userdata('keyword1');
$data['keyword2']=$this->session->userdata('keyword2');
$data['pagination'] = $this->pagination->create_links();
         
        $this->load->view('job_listings',$data);
    }
function test()
{

  $row=$this->db->query("Select * from ''");
  $data=$row->result();
  foreach ($data as $key) {
   // echo $new=str_replace(" ",'',$key->);
    $this->db->query("update '' set password='$new' where id='$key->id'");
  }
}

function filter()
{
$this->load->model('Usermodel');
$btn=$this->input->post('btn');
  if(isset($btn))
  {

  //this line
  $this->session->set_userdata('keyword',$this->input->post('keyword'));
  $this->session->set_userdata('keyword1',$this->input->post('keyword1'));
  $this->session->set_userdata('keyword2',$this->input->post('keyword2'));

  $this->session->set_userdata('city',$this->input->post('city'));
  $this->session->set_userdata('category',$this->input->post('category'));
  $this->session->set_userdata('skill',$this->input->post('skill'));
  $this->session->set_userdata('job_type',$this->input->post('job_type'));

  }



$data['keyword']=$title=$this->session->userdata('keyword');
$data['keyword1']=$this->session->userdata('keyword1');
$data['keyword2']=$year=$this->session->userdata('keyword2');

$data['side_fil_city']=$this->session->userdata('city');
$data['side_fil_cat']=$this->session->userdata('category');
$data['side_fil_skill']=$this->session->userdata('skill');
$data['side_fil_job_type']=$this->session->userdata('job_type');

  $array=$this->session->userdata('city');
  $array2=$this->session->userdata('category');
  $array3=$this->session->userdata('skill');
 $array4=$this->session->userdata('job_type');
if($year)
{
    $query_exp='experience like "%'.$year.'%"';
}
else
{
   $query_exp='experience like "%"';
}

if($title)
{
    $query_title='title like "%'.$title.'%" or skill like "%'.$title .'%" or category like "%'.$title .'%"';
}
else
{
   $query_title='title like "%" or skill like "%" or category like "%"';
}


  // print_r($array);
// exit;
  $query='';
  $query2='';
  $query3=''; 
  $query4=''; 
if($array)
{
  $total_array=count($array);
   for($i=0;$i<$total_array;$i++)
  {
    $query=$query.'city like "%'.$array[$i].'%" or ';
  }
$string_rev=strrev($query);

$cut_string=substr($string_rev,3);
$query_city=strrev($cut_string);
}
else
{
   $query_city='city like "%"';
}


if($array2)
{
$total_array2=count($array2);
for($i=0;$i<$total_array2;$i++)
  {
    $query2=$query2.'category like "%'.$array2[$i].'%" or ';
  }
$string_rev=strrev($query2);

$cut_string=substr($string_rev,3);
$query_category=strrev($cut_string);
}
else
{
  $query_category='category like "%"';
}

if($array3)
{
$total_array3=count($array3);
for($i=0;$i<$total_array3;$i++)
  {
    $query3=$query3.'skill like "%'.$array3[$i].'%" or ';
  }
$string_rev=strrev($query3);

$cut_string=substr($string_rev,3);
$query_indus=strrev($cut_string);
}
else
{
  $query_indus='skill like "%"';
}

if($array4)
{
$total_array4=count($array4);
for($i=0;$i<$total_array4;$i++)
  {
    $query4=$query4.'job_type like "%'.$array4[$i].'%" or ';
  }
$string_rev=strrev($query4);

$cut_string=substr($string_rev,3);
$query_job_type=strrev($cut_string);
}
else
{
  $query_job_type='job_type like "%"';
}

if ($title && $array2)
{
	$sql="($query_city) and ($query_category or $query_title) and ($query_indus) and ($query_exp) and ($query_job_type)";
}
else if($array2)
{
	$sql="($query_city) and ($query_category) and ($query_indus) and ($query_exp) and ($query_job_type)";
}
else
{
	$sql="($query_city) and ($query_title) and ($query_indus) and ($query_exp) and ($query_job_type)";
}

 $total_rows=$this->Usermodel->filter_num_rows($sql);

$per_page=$this->Usermodel->pagination_limit();

	 $this->load->library('pagination');
	  $config['base_url'] = base_url('Users/filter');
	   $config['per_page'] =$per_page;
	    $config['total_rows'] = $total_rows;
 $config['full_tag_open'] = '<ul class="pagination page-numbers">';
                $config['full_tag_close'] = '</ul>';            
                $config['prev_link'] = '&laquo;';
                $config['prev_tag_open'] = '<li class="page-numbers">';
                $config['prev_tag_close'] = '</li>';
                $config['next_link'] = '&raquo;';
                $config['next_tag_open'] = '<li>';
                $config['next_tag_close'] = '</li>';
                $config['cur_tag_open'] = '<li class="active"><a href="#">';
                $config['cur_tag_close'] = '</a></li>';
                $config['num_tag_open'] = '<li>';
                $config['num_tag_close'] = '</li>';
                $config['first_link'] = "";
$config['last_link'] = "";
$this->pagination->initialize($config);
$data['pagination'] = $this->pagination->create_links();

$data['data']=$this->Usermodel->filter($sql,$config['per_page'], $this -> uri -> segment(3));

$data['total_jobs']=$total_rows;
// echo "<pre>";
$row=$this->db->query("select * from job_search WHERE status='accept'");
         $data['allcompany'] =$row->result();

$row=$this->db->query("select distinct(city) from city_name order by city asc");
 $data['city'] =$row->result();
  
 $row=$this->db->query("select distinct(category) from jobs_category ");
 $data['category'] =$row->result();

 // $row=$this->db->query("select distinct(industry) from job_search WHERE status='accept'");

 // $data['industry'] =$row->result();

  $row=$this->db->query("select distinct(skill) from keyword");
   $data['skill'] =$row->result();


  $row=$this->db->query("select distinct(job_type) from job_search WHERE status='accept'");
  $data['job_type'] =$row->result();

 $this->load->view('job_listings',$data);

}
public function job_detail($id)  
{     
        
      $this->load->model('Usermodel');
     $rt['data']= $this->Usermodel->detail($id);
     $this->load->view('job_detail',$rt);  
}
public function job_detail1()  
{   
$id=$this->input->post('job_id');
date_default_timezone_set('asia/kolkata');
         $date=date('d-m-Y');
$data=array(
 
  'email'=>$this->input->post('email'),
  'job_id'=>$this->input->post('job_id'),  
  'company_name'=>$this->input->post('company_name'),
  'category'=>$this->input->post('category'), 
  'state'=>$this->input->post('state'),
  'city'=>$this->input->post('city'),  
   'date'=>$date 
);  
        
      $this->load->model('Usermodel');
      $this->Usermodel->insert1($data);
      // exit;
    return redirect("users/job_detail/$id");  
}
public function applied()
{

  $this->load->model('Usermodel');
     $rt['data']= $this->Usermodel->detail1();
      $rt['res']= $this->Usermodel->detail2();
         // $rt['rel']= $this->Usermodel->jb();
    
 $this->load->view('applied_job',$rt);  
}

public function save_job()  
{


  $this->load->model('Usermodel');
     $rt['data']= $this->Usermodel->detail1();
      $rt['job']= $this->Usermodel->detail3();
$this->load->view('save_job',$rt);
}



public function save_job1()  
{   
$id=$this->input->post('job_id');
date_default_timezone_set('asia/kolkata');
         $date=date('d-m-Y');
$job=array(
 
  'email'=>$this->input->post('email'),
  'job_id'=>$this->input->post('job_id'),  
  'company_name'=>$this->input->post('company_name'),
  'category'=>$this->input->post('category'), 
  'state'=>$this->input->post('state'),
  'skill'=>$this->input->post('skill'),
  'city'=>$this->input->post('city'),  
   'date'=>$date 
);  

        
      $this->load->model('Usermodel');
      $this->Usermodel->insert2($job);
      // exit;
   return redirect('users/save_job');
}

public function save_job2()  
{   
$id=$this->input->post('job_id');
date_default_timezone_set('asia/kolkata');
         $date=date('d-m-Y');
$job=array(
 
  'email'=>$this->input->post('email'),
  'job_id'=>$this->input->post('job_id'),  
  'company_name'=>$this->input->post('company_name'),
  'category'=>$this->input->post('category'), 
  'state'=>$this->input->post('state'),
  'skill'=>$this->input->post('skill'),
  'city'=>$this->input->post('city'),  
   'date'=>$date 
);  

        $id=$this->input->post('job_id');
      $this->load->model('Usermodel');
      $this->Usermodel->insert2($job);
      // exit;
   return redirect("users/job_detail/$id");
}

public function delete_row($job_id) {   
    $this->load->model("Usermodel");
    $this->Usermodel->did_delete_row($job_id);
    return redirect('users/save_job');
}
public function delete_rows($job_id) {   
    $this->load->model("Usermodel");
    $this->Usermodel->did_delete_rows($job_id);
    return redirect('users/applied');
}

public function goodbyall()
{
  $this->load->model('Usermodel');
  $this->Usermodel->goodbyall();
}

//   $this->load->model('Usermodel');
//      $rt['data']= $this->Usermodel->detail2();
      
//  $this->load->view('save_job',$rt);  
// }
// public function login()
//   {
//   $email=$this->input->post('email');
//   $password=$this->input->post('password');
//   $this->load->model('Usermodel');
//   $check=$this->Usermodel->isvalidate($email,$password);

//   if($check)
//   {
    
//          $this->session->set_userdata('email',$email);
//     $this->load->view('index');

    
//   }
//   else

//   {

//     $this->session->set_flashdata('mesg','Details not matched');
    
    
//     return redirect(Users);

//  }  
// }
public function viewall()
{
//   $email=$this->session->userdata('email');

// $comp=$this->db->query("select * from candidate_registration where email='$email'");
// $skill=$comp->row()->skill;
   $this->load->model('Usermodel');
 $rt['data']= $this->Usermodel->detail1();
          $rt['login']=$this->Usermodel->wel1();
  $this->load->view('viewall',$rt);
}
}
?>