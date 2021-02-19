<?php
class Employee extends CI_Controller
{




	public function index()	
{
    $this->load->model('Employeemodel');
     $cat['data']= $this->Employeemodel->job_cate();
      $cat['ciyt']= $this->Employeemodel->city1();
          $cat['state_name']=$this->Employeemodel->state_name();
             $cat['country']=$this->Employeemodel->country();
     $cat['city_name']=$this->Employeemodel->city_name();
    $this->load->view('index',$cat);	
}

function save_employee()
{
   $this->load->model('Employeemodel');
     $rt['data']= $this->Employeemodel->detail1();
      $rt['job']= $this->Employeemodel->detail3();
$this->load->view('save_employee',$rt);
}

public function save_employee1()  
{   
$id=$this->input->post('job_id');
date_default_timezone_set('asia/kolkata');
         $date=date('d-m-Y');
$job=array(
 
  'email'=>$this->input->post('email'),
  'employee_id'=>$this->input->post('job_id'),  
  'employee_name'=>$this->input->post('name'),
  'category'=>$this->input->post('category'), 
  'state'=>$this->input->post('state'),
  'skill'=>$this->input->post('skill'),
  'city'=>$this->input->post('city'),  
   'date'=>$date 
);  

        
      $this->load->model('Employeemodel');
      $this->Employeemodel->insert2($job);

      // exit;

   return redirect('Employee/save_employee');
}

public function save_employee2()  
{   
$id=$this->input->post('job_id');
date_default_timezone_set('asia/kolkata');
         $date=date('d-m-Y');
$job=array(
 
  'email'=>$this->input->post('email'),
  'employee_id'=>$this->input->post('job_id'),  
  'employee_name'=>$this->input->post('name'),
  'category'=>$this->input->post('category'), 
  'state'=>$this->input->post('state'),
  'skill'=>$this->input->post('skill'),
  'city'=>$this->input->post('city'),  
   'date'=>$date 
);  

        $id=$this->input->post('job_id');
      $this->load->model('Employeemodel');
      $this->Employeemodel->insert2($job);
      // exit;
   return redirect("Employee/candidate_detail/$id");
}

function filter()
{
$this->load->model('Employeemodel');
$btn=$this->input->post('btn');
if(isset($btn))
{
$this->session->set_userdata('keyword',$this->input->post('keyword'));
$this->session->set_userdata('keyword1',$this->input->post('keyword1'));
$this->session->set_userdata('keyword2',$this->input->post('keyword2'));

$this->session->set_userdata('city',$this->input->post('city'));
$this->session->set_userdata('category',$this->input->post('category'));
$this->session->set_userdata('industry',$this->input->post('industry'));
// echo "AGSUHA<br>AGSUHA<br>AGSUHA<br>AGSUHA<br>AGSUHA<br>AGSUHA<br>";
}


$data['keyword']=$title=$this->session->userdata('keyword');
$data['keyword1']=$this->session->userdata('keyword1');
$data['keyword2']=$year=$this->session->userdata('keyword2');

$data['side_fil_city']=$this->session->userdata('city');
$data['side_fil_cat']=$this->session->userdata('category');
$data['side_fil_ind']=$this->session->userdata('industry');

  $array=$this->session->userdata('city');
  $array2=$this->session->userdata('category');
  $array3=$this->session->userdata('industry');
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
    $query3=$query3.'industry like "%'.$array3[$i].'%" or ';
  }
$string_rev=strrev($query3);

$cut_string=substr($string_rev,3);
$query_indus=strrev($cut_string);
}
else
{
  $query_indus='industry like "%"';
}



if ($title && $array2)
{
  $sql="($query_city) and ($query_category or $query_title) and ($query_indus) and ($query_exp)";
}
else if($array2)
{
  $sql="($query_city) and ($query_category) and ($query_indus) and ($query_exp)";
}
else
{
  $sql="($query_city) and ($query_title) and ($query_indus) and ($query_exp)";
}

 $total_rows=$this->Employeemodel->filter_num_rows($sql);

$per_page=$this->Employeemodel->pagination_limit();

   $this->load->library('pagination');
    $config['base_url'] = base_url('index.php/Users/filter');
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

$data['data']=$this->Employeemodel->filter($sql,$config['per_page'], $this -> uri -> segment(3));

$data['total_jobs']=$total_rows;
// echo "<pre>";
$row=$this->db->query("select * from job_search WHERE status='accept'");
         $data['allcompany'] =$row->result();

$row=$this->db->query("select distinct(city) from job_search WHERE status='accept' ");
 $data['city'] =$row->result();
  
 $row=$this->db->query("select distinct(category) from job_search WHERE status='accept' ");
 $data['category'] =$row->result();

 $row=$this->db->query("select distinct(industry) from job_search WHERE status='accept'");

 $data['industry'] =$row->result();
  $row=$this->db->query("select distinct(job_type) from job_search WHERE status='accept'");

//  $data['daba']=$this->Employeemodel->wel5();


// print_r($data['daba']);
  $data['job_type'] =$row->result();
 $this->load->view('employee_listings',$data);

}
public function search_employee()  
{
  error_reporting(0);
// print_r($this->session->userdata());
// exit;
$this->load->model('Employeemodel');
  $per_page=$this->Employeemodel->pagination_limit();
$btn=$this->input->post('btn');
if(isset($btn))
{
  //this line
$this->session->set_userdata('keyword',$this->input->post('title'));
$this->session->set_userdata('keyword1',$this->input->post('state'));
$this->session->set_userdata('keyword2',$this->input->post('city'));
}
$keyword=$this->session->userdata('keyword');
$keyword1=$this->session->userdata('keyword1');
$keyword2=$this->session->userdata('keyword2');

         
       
// print_r($keyword2);


//CATEGORY LOOP
        $category_query='';
        $cat_auto='';
         for($i=0;$i<count($keyword);$i++)
         {
          $cate=$keyword[$i];
          $category_query=$category_query."category='$cate' or ";
          $cat_auto=$cat_auto.'"'.$cate.'",';
         }
          $data['chosen_cat']=$cat_auto;
         $category_query=strrev(substr(strrev($category_query),3));
        // echo strrev(substr(strrev($category_query),3));
//CATEGORY LOOP 

//STATE LOOP
        $state_query='';
         $state_auto='';
         for($i=0;$i<count($keyword1);$i++)
         {
          $sta=$keyword1[$i];
          $state_query=$state_query."state='$sta' or ";
           $state_auto=$state_auto.'"'.$sta.'",';
         }
          $data['chosen_state']=$state_auto;
         $state_query=strrev(substr(strrev($state_query),3));
        // echo strrev(substr(strrev($state_query),3));
//STATE LOOP 

//CITY LOOP
        $city_query='';
         $city_auto='';
         for($j=0;$j<count($keyword2);$j++)
         {
          $cit=$keyword2[$j];
          $city_query=$city_query."city='$cit' or ";
           $city_auto=$city_auto.'"'.$cit.'",';
         }
          $data['chosen_city']=$city_auto;
         $city_query=strrev(substr(strrev($city_query),3));
        // echo strrev(substr(strrev($city_query),3));
//CITY LOOP 

if(!$keyword)
{
  $category_query="category like '%'";
}
if(!$keyword1)
{
  $state_query="state like '%'";
}
if(!$keyword2)
{
  $city_query="city like '%'";
}

     $total_rows=$this->Employeemodel->search_num_rows($category_query,$state_query,$city_query);

   $this->load->library('pagination');
    $config['base_url'] = base_url('index.php/Employee/search_employee');
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

 $data['data'] =$this->Employeemodel->search($category_query,$state_query,$city_query,$config['per_page'], $this -> uri -> segment(3));
 // print_r($data['data']);
 // exit;
    $data['total_jobs']=$total_rows;

$row=$this->db->query("select * from candidate_registration");
         $data['experience'] =$row->result();
 //         $row=$this->db->query("select distinct(city) from candidate_registration");
 // $data['city'] =$row->result();
 // $row=$this->db->query("select distinct(category) from candidate_registration");
 //  $data['category'] =$row->result();
 //  $row=$this->db->query("select distinct(industry) from candidate_registration");
 //   $data['industry'] =$row->result();
 //   $row=$this->db->query("select distinct(job_type) from candidate_registration");
 //   $data['job_type'] =$row->result();

   // $row=$this->db->query("select distinct(job_type) from job_search WHERE status='accept'");
   // $data['experience'] =$row->result();

$data['keyword']=$this->session->userdata('keyword');
$data['keyword1']=$this->session->userdata('keyword1');
$data['keyword2']=$this->session->userdata('keyword2');
$data['pagination'] = $this->pagination->create_links();
         
 $data['daba']=$this->Employeemodel->jobs_category();
 $data['state']=$this->Employeemodel->wel6();
 $data['city']=$this->Employeemodel->wel7();
// print_r($data['daba']);


        $this->load->view('employee_listings',$data);
    }

public function advance_search()  
{
  error_reporting(0);
// print_r($this->session->userdata());
// exit;
$this->load->model('Employeemodel');
  $per_page=$this->Employeemodel->pagination_limit();
$btn=$this->input->post('btn');

if(isset($btn))
{
  //this line
$this->session->set_userdata('keyword',$this->input->post('title'));
$this->session->set_userdata('keyword1',$this->input->post('state'));
$this->session->set_userdata('keyword2',$this->input->post('city'));
$this->session->set_userdata('qualification',$this->input->post('qualification'));
$this->session->set_userdata('experience',$this->input->post('experience'));
$this->session->set_userdata('skill',$this->input->post('skill'));
}

$keyword=$this->session->userdata('keyword');
$keyword1=$this->session->userdata('keyword1');
$keyword2=$this->session->userdata('keyword2');
$qualification=$this->session->userdata('qualification');
$experience=$this->session->userdata('experience'); 
$skill=$this->session->userdata('skill');         
       
// print_r($experience);
// exit;

//CATEGORY LOOP
        $category_query='';
        $cat_auto='';
         for($i=0;$i<count($keyword);$i++)
         {
          $cate=$keyword[$i];
          $category_query=$category_query."category='$cate' or ";
          $cat_auto=$cat_auto.'"'.$cate.'",';
         }
          $data['chosen_cat']=$cat_auto;
         $category_query=strrev(substr(strrev($category_query),3));
        // echo strrev(substr(strrev($category_query),3));
//CATEGORY LOOP 

//STATE LOOP
        $state_query='';
         $state_auto='';
         for($i=0;$i<count($keyword1);$i++)
         {
          $sta=$keyword1[$i];
          $state_query=$state_query."state='$sta' or ";
           $state_auto=$state_auto.'"'.$sta.'",';
         }
          $data['chosen_state']=$state_auto;
         $state_query=strrev(substr(strrev($state_query),3));
        // echo strrev(substr(strrev($state_query),3));
//STATE LOOP 

//CITY LOOP
        $city_query='';
         $city_auto='';
         for($j=0;$j<count($keyword2);$j++)
         {
          $cit=$keyword2[$j];
          $city_query=$city_query."city='$cit' or ";
           $city_auto=$city_auto.'"'.$cit.'",';
         }
          $data['chosen_city']=$city_auto;
         $city_query=strrev(substr(strrev($city_query),3));
        // echo strrev(substr(strrev($city_query),3));
//CITY LOOP 

//qualification LOOP
        $qualification_query='';
         $qualification_auto='';
         for($j=0;$j<count($qualification);$j++)
         {
          $quali=$qualification[$j];
          $qualification_query=$qualification_query."qualification='$quali' or ";
           $qualification_auto=$qualification_auto.'"'.$quali.'",';
         }
          $data['chosen_qualification']=$qualification_auto;
         $qualification_query=strrev(substr(strrev($qualification_query),3));
        // echo strrev(substr(strrev($qualification_query),3));
//qualification LOOP 

//experience_query LOOP
        $experience_query='';
         $experience_auto='';
         for($j=0;$j<count($experience);$j++)
         {
          $exp=$experience[$j];
          $experience_query=$experience_query."experience1='$exp' or ";
           $experience_auto=$experience_auto.'"'.$exp.'",';
         }
          $data['chosen_experience']=$experience_auto;
         $experience_query=strrev(substr(strrev($experience_query),3));
        // strrev(substr(strrev($experience_query),3));
//experience_query LOOP 

//experience_query LOOP
        $skill_query='';
         $skill_auto='';
         for($j=0;$j<count($skill);$j++)
         {
          $sk=$skill[$j];
          $skill_query=$skill_query."skill like '%$sk%' or ";
           $skill_auto=$skill_auto.'"'.$sk.'",';
         }
          $data['chosen_skill']=$skill_auto;
         $skill_query=strrev(substr(strrev($skill_query),3));
          strrev(substr(strrev($skill_query),3));
//experience_query LOOP 

if(!$keyword)
{
  $category_query="category like '%'";
}
if(!$keyword1)
{
  $state_query="state like '%'";
}
if(!$keyword2)
{
  $city_query="city like '%'";
}
if(!$qualification)
{
  $qualification_query="qualification like '%'";
}
if(!$experience)
{
  $experience_query="experience1 like '%'";
}
if(!$skill)
{
  $skill_query="skill like '%'";
}
     $total_rows=$this->Employeemodel->search_num_rows1($category_query,$state_query,$city_query,$qualification_query,$experience_query,$skill_query);

   $this->load->library('pagination');
    $config['base_url'] = base_url('index.php/Employee/search_employee');
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

 $data['data'] =$this->Employeemodel->search1($category_query,$state_query,$city_query,$qualification_query,$experience_query,$skill_query,$config['per_page'], $this -> uri -> segment(3));
 // print_r($data['data']);
 // exit;
    $data['total_jobs']=$total_rows;

$row=$this->db->query("select * from candidate_registration");
         $data['experience'] =$row->result();
 //         $row=$this->db->query("select distinct(city) from candidate_registration");
 // $data['city'] =$row->result();
 // $row=$this->db->query("select distinct(category) from candidate_registration");
 //  $data['category'] =$row->result();
 //  $row=$this->db->query("select distinct(industry) from candidate_registration");
 //   $data['industry'] =$row->result();
 //   $row=$this->db->query("select distinct(job_type) from candidate_registration");
 //   $data['job_type'] =$row->result();

   // $row=$this->db->query("select distinct(job_type) from job_search WHERE status='accept'");
   // $data['experience'] =$row->result();

$data['keyword']=$this->session->userdata('keyword');
$data['keyword1']=$this->session->userdata('keyword1');
$data['keyword2']=$this->session->userdata('keyword2');
$data['pagination'] = $this->pagination->create_links();
         
 $data['daba']=$this->Employeemodel->jobs_category();
 $data['state']=$this->Employeemodel->wel6();
 $data['city']=$this->Employeemodel->wel7();
  $data['qualification']=$this->Employeemodel->wel4();
    $data['skill']=$this->Employeemodel->wel5();
// print_r($data['daba']);


        $this->load->view('advance_search',$data);
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
   $this->load->model('Employeemodel');
   $this->Employeemodel->lead2($data);
   return redirect('Employee/index');
}
	public function registration1()	
 {
  date_default_timezone_set('asia/kolkata');
         $date=date('d-m-Y');
$pass=$this->input->post('password');
$cpass=$this->input->post('cpassword');
if($pass!=$cpass)
{
  $this->session->set_flashdata("pass_not","pass not match");
  return redirect("Employee/index");
}


 		$data=array(
        'employer_name'=>$this->input->post('contact_person'),
 	'company_name'=>$this->input->post('company_name'),
 	'emp_email'=>$this->input->post('emp_email'),
 	'password'=>$this->input->post('password'),
  'contact_person_info'=>$this->input->post('contact_person'),
    'phone'=>$this->input->post('phone'),
    'city'=>$this->input->post('city'),
    'state'=>$this->input->post('state'),
    'country'=>$this->input->post('country'),
    'address'=>$this->input->post('address'),
    'date'=>$date
    
    
);
 		$key=$this->input->post('emp_email');
$company_name=$this->input->post('company_name');
		$this->load->model('Employeemodel');

		$checkmail=$this->Employeemodel->mail_exists($key);
		 if($checkmail){
		$this->session->set_flashdata('item14','item-value');
		return redirect('Employee/index');
		
		 }
		else{

      $checkcomp_name=$this->Employeemodel->comp_name_exists($company_name);
     if($checkcomp_name){
          $this->session->set_flashdata('company_name_exist','item-value');
          return redirect('Employee/index');
     }
     else
     {

              $this->session->set_flashdata('item1','item-value');
      $this->Employeemodel->check_data($data);
      return redirect('Employee/index');
     }



		}
}
public function login1()
	{
	$email=$this->input->post('emp_email');
	$password=$this->input->post('password');
	$this->load->model('Employeemodel');
	$check =$this->Employeemodel->isvalidate1($email,$password);

	if($check)
	{
        $status = $check->status ;
		 
         
          
            if($status=='accept')
            {
                $this->session->set_userdata('emp_email',$email);
              return redirect('Employee/employer_profile');
            }
            elseif($status=='pending'){


                  $this->session->set_flashdata('item12','item-value');
                   return redirect('Employee/index');
            }
            elseif($status=='block'){


                 $this->session->set_flashdata('item13','item-value');
                   return redirect('Employee/index');
            }  
            elseif($status=='reject'){


                 $this->session->set_flashdata('item15','item-value');
                   return redirect('Employee/index');
            }  
        }
	else
	{
		$this->session->set_flashdata('item3','itemvalue');
           return redirect('Employee/index');
}
}
public function log()
  {
  $email=$this->input->post('emp_email');
  $password=$this->input->post('password');
  $this->load->model('Employeemodel');
  $check =$this->Employeemodel->isvalidate1($email,$password);

  if($check)
  {
        $status = $check->status ;
     
         
          
            if($status=='accept')
            {
                $this->session->set_userdata('emp_email',$email);
              return redirect('Employee/job_post');
            }
            elseif($status=='pending'){
                   $this->session->set_flashdata('item2','item-value');

                return redirect('Employee/index');
            }
            elseif($status=='block'){


                 return redirect('Employee/index');
            }  
        }
  else
  {
    $this->session->set_flashdata('item3','itemvalue');
           return redirect('Employee/index');
}
}
public function employer_profile()	
{
	$this->load->model('Employeemodel');
	$rt['data']=$this->Employeemodel->wel1();
  $rt['job_cate']=$this->Employeemodel->wel8();
   $rt['sta']=$this->Employeemodel->wel6();
   $rt['cit']=$this->Employeemodel->wel7();

   $rt['country']=$this->Employeemodel->country();

    $row=$this->db->query("SELECT about_company_limit FROM `manage`");
$rt['char_limit']=$row->row()->about_company_limit;
    $this->load->view("employer_dashboard_profile_setting",$rt);	
}
public function logout()
{
	
	 session_destroy();
	 return redirect('employee/index');


}
public function update1()
{
$config['upload_path']='upload/';
     $config['allowed_types'] ='gif|jpg|png|jpeg|docx|pdf';
date_default_timezone_set('asia/kolkata');
         $date=date('d-m-Y');
    $this->load->library('upload',$config);
	if( $this->upload->do_upload('image'))

	{
          
		$data=$this->upload->data();
		$image_path=$data['raw_name'].$data['file_ext'];
   
if($image_path)
{

	$data=array('company_name'=>$this->input->post('company_name'),
   'phone'=> $this->input->post('phone'),
    'industry'=>$this->input->post('industry'),
    'website'=>$this->input->post('website'),
        'founded_date'=>$this->input->post('founded_date'),
    'registration_no'=>$this->input->post('registration_no'),
    'description'=>$this->input->post('description'),
    'country'=>$this->input->post('country'),
    'state'=>$this->input->post('state'),
    'city'=>$this->input->post('city'),
    'postcode'=>$this->input->post('postcode'),
    'address'=>$this->input->post('address'),
   'facebook'=> $this->input->post('facebook'),
   'twitter'=> $this->input->post('twitter'),
    'google_plus'=>$this->input->post('google_plus'),
    'youtube'=>$this->input->post('youtube'),
    'linkedin'=>$this->input->post('linkedin'),
    'image'=>$image_path,
    'employer_name'=>$this->input->post('employer_name'),
    'contact_person_info'=>$this->input->post('contact_person_info'),
    'date'=>$date
);
	$this->load->model('Employeemodel');
$this->Employeemodel->up1($data);
 return redirect('Employee/employer_profile');
}
}

else
	{
    
		$data=array('company_name'=>$this->input->post('company_name'),
   'phone'=> $this->input->post('phone'),
    'industry'=>$this->input->post('industry'),
    'website'=>$this->input->post('website'),
        'founded_date'=>$this->input->post('founded_date'),
    'registration_no'=>$this->input->post('registration_no'),
    'description'=>$this->input->post('description'),
    'country'=>$this->input->post('country'),
    'state'=>$this->input->post('state'),
    'city'=>$this->input->post('city'),
    'postcode'=>$this->input->post('postcode'),
    'address'=>$this->input->post('address'),
   'facebook'=> $this->input->post('facebook'),
   'twitter'=> $this->input->post('twitter'),
    'employer_name'=>$this->input->post('employer_name'),
    'contact_person_info'=>$this->input->post('contact_person_info'),
    'google_plus'=>$this->input->post('google_plus'),
    'youtube'=>$this->input->post('youtube'),
    'linkedin'=>$this->input->post('linkedin'),
    'date'=>$date
    
);
  $this->session->set_flashdata('item5','itemvalue');
	$this->load->model('Employeemodel');
$this->Employeemodel->up1($data);
 return redirect('Employee/employer_profile');	
	}
}
public function change_password()
{

    $this->load->model('Employeemodel');
     $rt['data']=$this->Employeemodel->wel1();
	$this->load->view("employer_change_password",$rt);
}


    public function change()
    {
   
        $cur_password = $this->input->post('old_password');
        $new_password = $this->input->post('new_password');
        $con_password = $this->input->post('con_password');
        $this->load->model('Employeemodel');
        $email =$this->session->userdata('emp_email');
        $password = $this->Employeemodel->getCurrPassword($email);
        if($password->password == $cur_password){
            if($new_password == $con_password){

            	if($cur_password!=$new_password)
            	{
					if($this->Employeemodel->updatePassword($new_password, $email)){
                        $this->session->set_flashdata('item6','itemvalue');
	                   
                        return redirect('Employee/change_password');   
	                }
	                else{
	                    
                        $this->session->set_flashdata('item7','itemvalue');
                        return redirect('Employee/change_password');   
	                }
				}
	            else
	            {
	            	
                    $this->session->set_flashdata('item8','itemvalue');
                    return redirect('Employee/change_password');   
	            }
            }
            else{
                
                $this->session->set_flashdata('item9','itemvalue');
                return redirect('Employee/change_password');   
            }
        }
        else{
            
            $this->session->set_flashdata('item10','itemvalue');
            return redirect('Employee/change_password');   

    }

}
public function staus_check()
    {
    $email=$this->input->post('emp_email');
    $pass=$this->input->post('password');
    $this->load->model('signup_model');
    $check=$this->signup_model->check($email,$pass);

    
    if($check)
    {

      $this->load->view('pannel');          
    }
    else
    {
        echo "you are blocked";
        // return redirect('log');
}

}
public function job_post()
{
   $this->load->model('Employeemodel');
   $rt['data']=$this->Employeemodel->wel1();
  $rt['result']=$this->Employeemodel->wel3();
  $rt['dab']=$this->Employeemodel->wel4();
  $rt['daba']=$this->Employeemodel->wel5();
  $rt['dabe']=$this->Employeemodel->wel6(); 
  $rt['dabc']=$this->Employeemodel->wel7();
   $rt['dabt']=$this->Employeemodel->wel8();
    $rt['job_title']=$this->Employeemodel->wel11();
    $rt['functional_area']=$this->Employeemodel->functional_area();

  
    $this->load->view('employer_postjob',$rt);
}

function ajax_role()
{
    $id=$this->input->post('id');
    $row=$this->db->query("select * from jobs_category where parent_id='$id' and status!='deactivate'");
    $data=$row->result();

     echo "<option value=''>Select Jobs Category</option>";
     
    foreach ($data as $key) {
        echo "<option value='$key->category'>$key->category</option>";
    }

}

function get_skill()
{
  $id=$this->input->post('id');
  $res=$this->db->query("select id from jobs_category where category='$id'");
  $row=$res->row();
  $id=$row->id;

    $row=$this->db->query("select * from keyword where parent_id='$id' and status!='deactivate'");
    $data=$row->result();


     // echo "<option value='a'>Select Skill</option>";
     
    foreach ($data as $key) {
        echo "<option value='$key->skill'>$key->skill</option>";
    }

}

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

public function new_job()
{

  
$skill=$this->input->post('skill');
$skillset=implode(',',$skill);

    date_default_timezone_set('asia/kolkata');
         $date=date('d-m-Y');
    $data=array('company_name'=>$this->input->post('company_name'),
    'phone'=> $this->input->post('phone'),
    'category'=>$this->input->post('category'),
    'email'=>$this->input->post('email'),
     'deadline_date'=>$this->input->post('deadline_date'),
    'skill'=>$skillset,
    'description'=>$this->input->post('description'),
     'candidate_description'=>$this->input->post('candidate_description'),
    'title'=>$this->input->post('title'),
    'state'=>$this->input->post('state'),
    'city'=>$this->input->post('city'),
    'pin_code'=>$this->input->post('pin_code'),
    'function'=>$this->input->post('function'),
    'address'=>$this->input->post('address'),
    'industry'=> $this->input->post('industry'),
    'job_type'=> $this->input->post('job_type'),
    'phone_status'=> $this->input->post('phone_status'),
    'contact_person'=>$this->input->post('contact_person'),
    'salary'=>$this->input->post('salary'),
    'salary1'=>$this->input->post('salary1'),
    'not_disclosed'=>$this->input->post('not_disclosed'),
   'experience'=>$this->input->post('experience'),
    'experience1'=>$this->input->post('experience1'),
    'vacancy'=>$this->input->post('vacancy'),
    'qualification'=>$this->input->post('qualification'),
    'date'=>$date
    
);

// echo $this->input->post('industry');
//     exit;
    $this->session->set_flashdata('item','item-value');
    $this->load->model('Employeemodel');
    $this->Employeemodel->check_job($data);
           return redirect('Employee/job_post');
       }




public function category() 
{
$this->load->model('Employeemodel');
     $cat['data']= $this->Employeemodel->job_cate();
   $this->load->view('Employee/index',$cat);
} 
public function applicants() 
{
$emp_mail=$this->session->userdata('emp_email');

$comp=$this->db->query("select * from company_registration where emp_email='$emp_mail'");
$company_name=$comp->row()->company_name;

$this->load->model('Employeemodel');
  $rt['data']=$this->Employeemodel->wel1();
   $rt['res']=$this->Employeemodel->applicant($company_name);
   $rt['status']='pending';
   $this->load->view('applicants',$rt);
}
public function applicants1() 
{
$emp_mail=$this->session->userdata('emp_email');

$comp=$this->db->query("select * from company_registration where emp_email='$emp_mail'");
$company_name=$comp->row()->company_name;

$this->load->model('Employeemodel');
  $rt['data']=$this->Employeemodel->wel2();
   $rt['res']=$this->Employeemodel->applicant1($company_name);
   $rt['status']='accept';
   $this->load->view('applicants',$rt);
}
public function applicants2() 
{
$emp_mail=$this->session->userdata('emp_email');

$comp=$this->db->query("select * from company_registration where emp_email='$emp_mail'");
$company_name=$comp->row()->company_name;

$this->load->model('Employeemodel');
  $rt['data']=$this->Employeemodel->wel9();
   $rt['res']=$this->Employeemodel->applicant2($company_name);

   $rt['status']='reject';
   $this->load->view('applicants',$rt);
}


public function resume()  
 {
  
     $this->load->view('short_resumes'); 
 }
public function candidate_detail($id)  
 {
    $this->load->model('Employeemodel');
    $rt['data']=$this->Employeemodel->detail($id);
     $this->load->view('candidate_detail',$rt); 
 }
 public function manage_job()  
 {

  $emp_mail=$this->session->userdata('emp_email');

$comp=$this->db->query("select * from company_registration where emp_email='$emp_mail'");
$company_name=$comp->row()->company_name;

   $this->load->model('Employeemodel');
   $rt['data']=$this->Employeemodel->wel1();
   $rt['result']=$this->Employeemodel->manage_job1($company_name);
// print_r($rt['result']);
//    exit;
   $rt['total_jobs']=$this->Employeemodel->count($company_name);
     $this->load->view('empmanage_job',$rt); 
 }
 public function edit_job($id)  
 {
  $this->load->model('Employeemodel');
   $rt['data']=$this->Employeemodel->wel1();
   $rt['result']=$this->Employeemodel->wel3();
  $rt['dab']=$this->Employeemodel->wel4();
  $rt['daba']=$this->Employeemodel->wel5();
  $rt['dabe']=$this->Employeemodel->wel6(); 
  $rt['dabc']=$this->Employeemodel->wel7();
   $rt['dabt']=$this->Employeemodel->wel8();
    $rt['functional_area']=$this->Employeemodel->functional_area();
     $rt['job_cate']=$this->Employeemodel->job_cate();
      $rt['job_title']=$this->Employeemodel->job_title();
   $rt['result']=$this->Employeemodel->edit_job1($id);
   $this->load->view('edit_job',$rt); 
 }
 public function new_job1($id)
 {

  // $id=$this->input->post('id');
   $not_disclosed = $this->input->post('not_disclosed');
$skill=$this->input->post('skill');
$skillset=implode(',',$skill);

    date_default_timezone_set('asia/kolkata');
         $date=date('d-m-Y');
    $data=array('company_name'=>$this->input->post('company_name'),
    'phone'=> $this->input->post('phone'),
    'category'=>$this->input->post('category'),
    'email'=>$this->input->post('email'),
     'deadline_date'=>$this->input->post('deadline_date'),
    'skill'=>$skillset,
    'description'=>$this->input->post('description'),
    'candidate_description'=>$this->input->post('candidate_description'),
    'title'=>$this->input->post('title'),
    'state'=>$this->input->post('state'),
    'city'=>$this->input->post('city'),
    'pin_code'=>$this->input->post('pin_code'),
    'address'=>$this->input->post('address'),
    'industry'=> $this->input->post('industry'),
    'job_type'=> $this->input->post('job_type'),
    'function'=>$this->input->post('function'),
    'phone_status'=> $this->input->post('phone_status'),
    'contact_person'=>$this->input->post('contact_person'),
    'salary'=>$this->input->post('salary'),
    'salary1'=>$this->input->post('salary1'),
    'not_disclosed'  => (!empty($not_disclosed)) ? $not_disclosed: NULL,
    'experience'=>$this->input->post('experience'),
    'experience1'=>$this->input->post('experience1'),
    'vacancy'=>$this->input->post('vacancy'),
    'qualification'=>$this->input->post('qualification'),
    'date'=>$date
    
);
    $this->session->set_flashdata('item4','item-value');
    $this->load->model('Employeemodel');
    $this->Employeemodel->edit_job2($data,$id);
           return redirect("Employee/edit_job/$id");

 }
public function delete_rows($id) {   
    $this->load->model("Employeemodel");
    $this->Employeemodel->did_delete_rows($id);
    return redirect('Employee/manage_job');
}
function accept($email)
{

  $this->load->model('Employeemodel');
 $this->Employeemodel->status($email);
return redirect('Employee/applicants');
}
function reject($email)
{
    $this->load->model('Employeemodel');
  $this->Employeemodel->status1($email);
  return redirect('Employee/applicants');
}
}
?>
