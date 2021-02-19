<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_controller extends CI_Controller
    {
    	 function  __construct()
                    {
                	parent::__construct();
                    $this->load->model('Admin_model'); 
                    $this->load->library('pagination');
                    }

    	 public function index()
    	 {
    	 	$this->load->view('login');
    	 }


  public function logincheck()
  {
  $user=$this->input->post('name');
  $pass=$this->input->post('password');
  $check=$this->Admin_model->check($user,$pass);

  if($check)
  {
    $this->load->view('index');
  }
  else
  {
     $this->session->set_flashdata('item','item-value');
    return redirect('Admin_controller/index');
}
 }

function edit_attribute()
{

  $data['cat']=$this->Admin_model->wel2();
  $data['sub_cat']=$this->Admin_model->sub_cat();
  $this->load->view('manage_cat',$data);
}

function update_cat($id)
{
  $functional=$this->input->post('functional');
  $this->db->query("update functional set functional='$functional' where id='$id'");
  $this->session->set_flashdata("done",'done');
  return redirect('Admin_controller/edit_attribute');
}

function delete_cat($id)
{
  $this->db->query("delete from functional where id='$id'");
  $this->db->query("delete from jobs_category where parent_id='$id'");
  $this->session->set_flashdata("done",'done');
  return redirect('Admin_controller/edit_attribute');
}

function deactivate_cat($id)
{
  $this->db->query("update functional set status='deactivate' where id='$id'");
  $this->session->set_flashdata("done",'done');
  return redirect('Admin_controller/edit_attribute');
}

function activate_cat($id)
{
  $this->db->query("update functional set status='activate' where id='$id'");
  $this->session->set_flashdata("done",'done');
  return redirect('Admin_controller/edit_attribute');
}

function update_sub_cat($id)
{
  $category=$this->input->post('category');
  $this->db->query("update jobs_category set category='$category' where id='$id'");
  $this->session->set_flashdata("done",'done');
  return redirect('Admin_controller/edit_attribute');
}

function delete_sub_cat($id)
{

  $this->db->query("delete from jobs_category where id='$id'");
  $this->session->set_flashdata("done",'done');
  return redirect('Admin_controller/edit_attribute');
}

function deactivate_sub_cat($id)
{
  $this->db->query("update jobs_category set status='deactivate' where id='$id'");
  $this->session->set_flashdata("done",'done');
  return redirect('Admin_controller/edit_attribute');
}

function activate_sub_cat($id)
{
  $this->db->query("update jobs_category set status='activate' where id='$id'");
  $this->session->set_flashdata("done",'done');
  return redirect('Admin_controller/edit_attribute');
}

public function authenticate()
{
    $list['res']=$this->Admin_model->wel();
    $this->load->view('emp_auth',$list);
}
function accept($id)
{

 $this->Admin_model->status($id);
return redirect('Admin_controller/authenticate');
}
function reject($id)
{
  
  $this->Admin_model->status1($id);
  return redirect('Admin_controller/authenticate');
}
function block($id)
{
  $this->Admin_model->status2($id);
   return redirect('Admin_controller/authenticate');
}
function unblock($id)
{
  $this->Admin_model->status3($id);
   return redirect('Admin_controller/authenticate');
}
function view_employer()
{
  $list['res']=$this->Admin_model->wel();
  $this->load->view('view_employer',$list);
}

function top_companies()
{
  $list['res']=$this->Admin_model->company_logo();
  $this->load->view('top_companies',$list);
}
function select_top_comp($id)
{
echo $id;

$row=$this->db->query("SELECT top_companies FROM `company_registration` where id='$id'");

if($row->row()->top_companies=='yes')
{
  $this->db->query("update company_registration set top_companies='no' where id='$id'");
}
  else
 {
  $this->db->query("update company_registration set top_companies='yes' where id='$id' ");  
   }

$this->session->set_flashdata("save",'save');
return redirect("Admin_controller/top_companies");
}

public function logout()
{
  
   session_destroy();
   return redirect('Admin_controller/index');


}
public function manage()
{
 
  $rt['data']=$this->Admin_model->wel2();
   $rt['sub_cat']=$this->Admin_model->sub_cat();
  $this->load->view('manage_job',$rt);
}
public function manage1()
{
      $data['parent_id']=$this->input->post('parent_id');
  $data['category']=$this->input->post('category');
  $this->Admin_model->local($data);
  return redirect('Admin_controller/manage');
}
public function manage2()
{
  $data['state_name']=$this->input->post('state_name');
  $this->Admin_model->local1($data);
  return redirect('Admin_controller/manage');
}
public function manage3()
{
  $data[' city']=$this->input->post('city');
  $this->Admin_model->local2($data);
  return redirect('Admin_controller/manage');
}
public function manage4()
{
  $data['industry']=$this->input->post('industry');
  $this->Admin_model->local3($data);
  return redirect('Admin_controller/manage');
}
public function manage5()
{
  $data['skill']=$this->input->post('keyword');
 $data['parent_id']=$this->input->post('parent_id');


  $this->Admin_model->local4($data);
  return redirect('Admin_controller/manage');
}
public function manage6()
{
  $data['qualification']=$this->input->post('qualification');
  $this->Admin_model->local5($data);
  return redirect('Admin_controller/manage');
}
public function manage7()
{
  $data['functional']=$this->input->post('functional');
  $this->Admin_model->local6($data);
  return redirect('Admin_controller/manage');
}
public function manage8()
{
  $data['title']=$this->input->post('title');
  $this->Admin_model->local7($data);
  return redirect('Admin_controller/manage');
}
public function authenticate1()
{
    $list['res']=$this->Admin_model->job();
    $this->load->view('job_auth',$list);
}
function accept1($id)
{

 $this->Admin_model->stat($id);
return redirect('Admin_controller/authenticate1');
}
function reject1($id)
{
  
  $this->Admin_model->stat1($id);
  return redirect('Admin_controller/authenticate1');
}
function user_detail()
{
  $list['res']=$this->Admin_model->wel1();
  $this->load->view('user_detail',$list);
}


function pagination()
{
  $list['res']=$this->Admin_model->pagination();
  $this->load->view('pagination_m',$list);
}

function add_slider()
{
  $list['res']=$this->Admin_model->add_slider();
  $this->load->view('add_slider',$list);
}
function del_slider($id)
{
  $this->db->query("delete from slider where id='$id'");
     $this->session->set_flashdata("delete",'delete');
    return redirect('Admin_controller/add_slider');
}
function insert_add_slider()
{
  $config['upload_path']='upload/slider';
     $config['allowed_types'] ='gif|jpg|png|jpeg|';
       $this->load->library('upload',$config);
       if( $this->upload->do_upload('image'))

  {
          
    $data=$this->upload->data();
    $image_path=$data['raw_name'].$data['file_ext'];
    $url=$this->input->post('url');

    $this->db->query("insert into slider(image,url)values('$image_path','$url')");
    $this->session->set_flashdata("add",'add');
    return redirect('Admin_controller/add_slider');
  }
  else
  {
    $this->session->set_flashdata("nadd",'nadd');
    return redirect('Admin_controller/add_slider');
  } 
}

function update_pagination()
{
 $limit=$this->input->post('limit');

  $this->db->query("update pagination_limit set limit_p='$limit'");
  $this->session->set_flashdata("done",'update');
  return redirect('Admin_controller/pagination');
}

function user_applied()
{
  $list['res']=$this->Admin_model->wel3();
  $this->load->view('user_applied',$list);
}
 function lead()
{
   $list['lead']=$this->Admin_model->lead1();
   $this->load->view('employer-lead',$list);
}
}
?>
    	 

      
      
