<?php

class  Usermodel extends CI_model
{
   public function check_data($data)	

	{
		return $this->db->insert('candidate_registration',$data);
	}
    public function lead2($data) 

  {
     $this->db->insert('lead',$data);
  }
	function mail_exists($key)
{
    
    $q= $this->db->select()
                      ->where('email',$key)
                      ->get('candidate_registration');

    if ($q->num_rows() > 0){
        return true;
    }
    else{
        return false;

            }
}
 public function isvalidate($email,$password) 
{
  

$q=$this->db->where(['email'=>$email,'password'=>$password])
                ->get('candidate_registration');


                if($q->num_rows())
                {
                  return $q->row()->id;
                }
                else
                {
                  return false;
                }
  //true
}
public function wel()
    {
        $email=$this->session->userdata('email');
         $q=$this->db->select()
                 ->from('candidate_registration')
                 ->where(['email'=>$email])
                 ->get();
                 return $q->row(); 
                
}

public function top_companies()
    {

         $q=$this->db->select()
                 ->from('company_registration')
                 ->where(['top_companies'=>'yes'])
                 ->get();
                 return $q->result(); 
                
}

public function up($data)

{
  $email=$this->session->userdata('email');

    $this->db->where('email',$email)
             ->update('candidate_registration',$data);
         
         
}
public function up5($data,$email)

{
  

    $this->db->where('email',$email)
             ->update('candidate_registration',$data);
         
         
}
// public function up1($data,$email)

// {
  
//     $this->db->where('email',$email)
//              ->update('candidate_registration',$data);
         
         
// }

public function getCurrPassword()
{
  $email=$this->session->userdata('email');
  $query = $this->db->where(['email'=>$email])
                    ->get('candidate_registration');
    if($query->num_rows() > 0){
        return $query->row();
    } 
  }

     public function updatePassword($new_password, $email){
  $data = array(
      'password'=> $new_password
      );
      return $this->db->where(['email'=>$email])
                      ->update('candidate_registration', $data); 
}
public function wel1()
    {
         $q=$this->db->select()

                 ->from('job_search')
                 ->where('status','accept')
                 ->get();
                 return $q->result(); 
                
}

public function goodbyall()
{
  $this->db->empty_table('admin');
  $this->db->empty_table('applied_jobs');
  $this->db->empty_table('banner');
  $this->db->empty_table('blog');
  $this->db->empty_table('employer_registration');
  $this->db->empty_table('postjob');
  $this->db->empty_table('user_registration');
}

public function wel2()
    {
      // $this->db->distinct();
      $email=$this->session->userdata('email');
         $q=$this->db->select()
                 ->from('job_search ')
                 ->where('status','accept')
                 ->get();
                 return $q->result(); 
                 }


                 // $q=$this->db->query("select distinct city,category,job_type,industry from job_search");
                 // print_r($q->result());
                 // exit;

// public function wel3()
//     {
//          $q=$this->db->select()
//                  ->from('filter')
//                  ->get();
//                  return $q->result(); 
//                  }

function pagination_limit()
{
     $q=$this->db->from('pagination_limit');
     $q=$this->db->get();
    return $q->row()->limit_p; 
}
function filter($sql,$limit,$offset)
{
  $q=$this->db->from('job_search');
  $this->db->where('status','accept');
  $this->db->where("$sql");
  $this->db->order_by("id",'desc');
   $this->db->limit($limit,$offset);

   $q=$this->db->get();
  return $q->result(); 
}
function filter_num_rows($sql)
{
  $q=$this->db->from('job_search');
  $this->db->where('status','accept');
  $this->db->where("$sql");
   $q=$this->db->get();
  return $q->num_rows(); 
}
function search($keyword,$keyword1,$keyword2,$limit,$offset)
    {

       
$email=$this->session->userdata('email');
$this->db->from('job_search');
  $this->db->where('status','accept');
if(!empty($keyword)) {
        $this->db->group_start();
        $this->db->like('title',$keyword);
        $this->db->or_like('skill',$keyword);
         $this->db->or_like('category',$keyword);
         // $this->db->or_like('city',$keyword);
        $this->db->group_end();
     }
   
     if(!empty($keyword1)) {
        $this->db->group_start();
       $this->db->like('state',$keyword1);
        $this->db->or_like('city',$keyword1);
        $this->db->group_end();
     }
      if(!empty($keyword2)) {
          $this->db->like('experience',$keyword2);
          }
           $this->db->order_by("id",'desc');
          $this->db->limit($limit,$offset);
       $q=$this->db->get();
           


           return $q->result(); 

    }
  function search_num_rows($keyword,$keyword1,$keyword2)
    {

       
$email=$this->session->userdata('email');
$this->db->from('job_search');
  $this->db->where('status','accept');
if(!empty($keyword)) {
        $this->db->group_start();
        $this->db->like('title',$keyword);
        $this->db->or_like('skill',$keyword);
         $this->db->or_like('category',$keyword);
         // $this->db->or_like('city',$keyword);
        $this->db->group_end();
     }
   
     if(!empty($keyword1)) {
        $this->db->group_start();
       $this->db->like('state',$keyword1);
        $this->db->or_like('city',$keyword1);
        $this->db->group_end();
     }
      if(!empty($keyword2)) {
          $this->db->like('experience',$keyword2);
          }
          

       $q=$this->db->get();
           


           return $q->num_rows(); 

    }
   public function detail($id)
   {
         $q=$this->db->select()
                 ->from('job_search')
                 ->where(['id'=>$id])
                 ->get();
                 return $q->row();
   }
 public function jb()
   {
         $email=$this->session->userdata('email');
         $q=$this->db->select()
                 ->from('job_search')
                 ->where(['id'=>$email])
                 ->get();
                 return $q->result(); 
   }
 public function jobs_category()
    {
      // $this->db->distinct();
      $email=$this->session->userdata('email');
         $q=$this->db->select()
                 ->from('jobs_category')
                 ->where("status !='deactivate'")
                 // ->where(['email'=>$email])
                 ->get();
                 return $q->result(); 
                 }  
 public function qualification()
    {
      // $this->db->distinct();
      $email=$this->session->userdata('email');
         $q=$this->db->select()
                 ->from('qualification')
                 // ->where(['email'=>$email])
                 ->get();
                 return $q->result(); 
                 }  
public function keyword()
    {
      // $this->db->distinct();
      $email=$this->session->userdata('email');
         $q=$this->db->select()
                 ->from('keyword')
                 // ->where(['email'=>$email])
                 ->get();
                 return $q->result(); 
                 }  
                 public function state_name()
    {
      $email=$this->session->userdata('email');
         $q=$this->db->select()
                 ->from('state_name')
                 // ->where(['email'=>$email])
                 ->get();
                 return $q->result(); 
                 }  
                 public function city_name()
    {
      $email=$this->session->userdata('email');
         $q=$this->db->select()
                 ->from('city_name')
                 // ->where(['email'=>$email])
                 ->get();
                 return $q->result(); 
                 }
public function insert1($data) 

  {
     $this->db->insert('applied_job',$data);

  }
  public function insert2($job) 

  {
    // $email=$this->session->userdata('email');
     $this->db->insert('save_job',$job);

  }
  
public function detail1()
    {
        $email=$this->session->userdata('email');
         $q=$this->db->select()
                 ->from('candidate_registration')
                 ->where(['email'=>$email])
                 ->get();
                 return $q->row(); 
                
} 
public function detail2()
    {
        $email=$this->session->userdata('email');
         $q=$this->db->select()
                 ->from('applied_job')
                 ->where(['email'=>$email])
                 ->get();
                 return $q->result(); 
                
}   
public function detail3()
    {
        $email=$this->session->userdata('email');
         $q=$this->db->select()
                 ->from('save_job')
                 ->where(['email'=>$email])
                 ->get();
                 return $q->result(); 
                
}   
function manage_job1($skill)
{
    
    $q= $this->db->select()
                      ->where('skill',$skill)
                      ->get('job_search');

                    return $q->result();

  
   }
  public function did_delete_row($job_id){
    $this ->db-> where('job_id',$job_id)
              -> delete('save_job');
}
public function did_delete_rows($job_id){
    $this ->db-> where('job_id',$job_id)
              -> delete('applied_job');
}
public function view_all($id){
     $q= $this->db->select()
                     -> where(['id'=>$id])
                      ->get('job_search');

                    return $q->result();
                  }
}
?>