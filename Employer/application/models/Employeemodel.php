<?php

class  Employeemodel extends CI_model
{
   public function check_data($data)	

	{
		return $this->db->insert('company_registration',$data);
	}

public function detail1()
    {
        $email=$this->session->userdata('emp_email');
         $q=$this->db->select()
                 ->from('company_registration')
                 ->where(['emp_email'=>$email])
                 ->get();
                 return $q->row(); 
                
} 
public function country()
    {

         $q=$this->db->select()
                 ->from('countries')
          
                 ->get();
                 return $q->result(); 
                
} 
  public function insert2($job) 

  {
    // $email=$this->session->userdata('email');
     $this->db->insert('save_employee',$job);

  }

public function detail3()
    {
        $email=$this->session->userdata('emp_email');
         $q=$this->db->select()
                 ->from('save_employee')
                 ->where(['email'=>$email])
                 ->get();
                 return $q->result(); 
                
}  


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
  function search_num_rows1($keyword,$keyword1,$keyword2,$keyword3,$keyword4,$keyword5)
    {
      $this->db->from('candidate_registration');
      $this->db->where("($keyword) and ($keyword1) and ($keyword2) and ($keyword3) and ($keyword4) and ($keyword5)");
      $q=$this->db->get();
      return $q->num_rows(); 
    }
function search1($keyword,$keyword1,$keyword2,$keyword3,$keyword4,$keyword5,$limit,$offset)
    {
$this->db->from('candidate_registration');
$this->db->where("($keyword) and ($keyword1) and ($keyword2) and ($keyword3) and ($keyword4) and ($keyword5)");

          $this->db->limit($limit,$offset);
       $q=$this->db->get();
           return $q->result(); 
    } 

      function search_num_rows($keyword,$keyword1,$keyword2)
    {
      $this->db->from('candidate_registration');
      $this->db->where("($keyword) and ($keyword1) and ($keyword2)");
      $q=$this->db->get();
      return $q->num_rows(); 
    }
function search($keyword,$keyword1,$keyword2,$limit,$offset)
    {
$this->db->from('candidate_registration');
$this->db->where("($keyword) and ($keyword1) and ($keyword2)");

          $this->db->limit($limit,$offset);
       $q=$this->db->get();
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
  public function lead2($data) 

  {
     $this->db->insert('lead',$data);
  }
	function mail_exists($key)
{
    
    $q= $this->db->select()
                      ->where('emp_email',$key)
                      ->get('company_registration');

    if ($q->num_rows() > 0){
        return true;
    }
    else{
        return false;
    }
}

  function comp_name_exists($key)
{
    
    $q= $this->db->select()
                      ->where('company_name',$key)
                      ->get('company_registration');

    if ($q->num_rows() > 0){
        return true;
    }
    else{
        return false;
    }
}

  function applicant($company_name)
{
    
    $q= $this->db->select()
                      ->where('company_name',$company_name)
                       ->where(['status'=>'pending'])
                      ->get('applied_job');

                    return $q->result();

  
}
function applicant1($company_name)
{
    
    $q= $this->db->select()
                      ->where('company_name',$company_name)
                       ->where(['status'=>'accept'])
                      ->get('applied_job');

                    return $q->result();

  
}
function applicant2($company_name)
{
    
    $q= $this->db->select()
                      ->where('company_name',$company_name)
                       ->where(['status'=>'reject'])
                      ->get('applied_job');

                    return $q->result();

  
}


 public function isvalidate1($email,$password) 
{
  
 /* $q=$this->db->where(['emp_email'=>$email,'password'=>$password])
                ->get('company_registration');*/
                 $q=$this->db->select()
                         ->from('company_registration')
                         ->where(['emp_email'=>$email,'password'=>$password])
                         ->get();
                if($q->num_rows())
                {
                  return $q->row();
                }
                else
                {
                  return false;
                }
  //true
}
public function wel1()
    {
        $email=$this->session->userdata('emp_email');
         $q=$this->db->select()
                 ->from('company_registration')
                 ->where(['emp_email'=>$email])
                
                 ->get();
                 return $q->row(); 
                
}
public function wel10($id)
    {
        $email=$this->session->userdata('emp_email');
         $q=$this->db->select()
                 ->from('job_search')
                 ->where(['email'=>$email])
                
                 ->get();
                 return $q->row(); 
                
}
public function wel2()
    {
        $email=$this->session->userdata('emp_email');
         $q=$this->db->select()
                 ->from('company_registration')
                 ->where(['emp_email'=>$email])
                 
                 ->get();
                 return $q->row(); 
                
}
public function wel9()
    {
        $email=$this->session->userdata('emp_email');
         $q=$this->db->select()
                 ->from('company_registration')
                 ->where(['emp_email'=>$email])
                 
                 ->get();
                 return $q->row(); 
                
}
public function up1($data)
{
     $email=$this->session->userdata('emp_email');
    $this->db->where(['emp_email'=>$email])
             ->update('company_registration',$data);
         
         
}
public function getCurrPassword()
{
  $email=$this->session->userdata('emp_email');
  $query = $this->db->where(['emp_email'=>$email])
                    ->get('company_registration');
    if($query->num_rows() > 0){
        return $query->row();
    } 
  }

     public function updatePassword($new_password, $email){
  $data = array(
      'password'=> $new_password
      );
      return $this->db->where(['emp_email'=>$email])
                      ->update('company_registration', $data); 
}
public function check_job($rt) 
  {
     $this->db->insert('job_search',$rt);
  }
  public function job_cate()
   {
         $q=$this->db->select()
                 ->from('jobs_category')
                 ->where("status !='deactivate'")
                 ->get();
                 return $q->result(); 
            
   }
  public function job_title()
   {
         $q=$this->db->select()
                 ->from('title')
                 ->get();
                 return $q->result(); 
            
   } 
   public function city1()
   {
         $q=$this->db->select()
                 ->from('city_name')
                 ->get();
                 return $q->result(); 
            
   }
   public function wel3()
    {
      // $this->db->distinct();
      $email=$this->session->userdata('emp_email');
         $q=$this->db->select()
                 ->from('jobs_category')
                 ->where("status !='deactivate'")
                 // ->where(['email'=>$email])
                 ->get();
                 return $q->result(); 
                 }  
 public function wel4()
    {
      // $this->db->distinct();
      $email=$this->session->userdata('emp_email');
         $q=$this->db->select()
                 ->from('qualification')
                 // ->where(['email'=>$email])
                 ->get();
                 return $q->result(); 
                 } 
 public function functional_area()
    {

         $q=$this->db->select()
                 ->from('functional')
                 ->where("status !='deactivate'")
                 ->get();
                 return $q->result(); 
                 }  
public function wel5()
    {
      // $this->db->distinct();
      $email=$this->session->userdata('emp_email');
         $q=$this->db->select()
                 ->from('keyword')
                 // ->where(['email'=>$email])
                 ->get();
                 return $q->result(); 
                 }  
public function jobs_category()
    {
      // $this->db->distinct();
      $email=$this->session->userdata('emp_email');
         $q=$this->db->select()
                 ->from('jobs_category')
                 ->where("status !='deactivate'")
                 // ->where(['email'=>$email])
                 ->get();
                 return $q->result(); 
                 }  
 public function wel6()
    {
      $email=$this->session->userdata('emp_email');
         $q=$this->db->select()
                 ->from('state_name')
                 // ->where(['email'=>$email])
                 ->get();
                 return $q->result(); 
                 }  
public function wel7()
    {
      $email=$this->session->userdata('email');
         $q=$this->db->select()
                 ->from('city_name')
                 // ->where(['email'=>$email])
                 ->get();
                 return $q->result(); 
                 }  
                 public function wel8()
    {
      $email=$this->session->userdata('email');
         $q=$this->db->select()
                 ->from('industry')
                 // ->where(['email'=>$email])
                 ->get();
                 return $q->result(); 
                 }  
                  public function wel11()
    {
      $email=$this->session->userdata('email');
         $q=$this->db->select()
                 ->from('title')
                 // ->where(['email'=>$email])
                 ->get();
                 return $q->result(); 
                 }            
                  public function detail($id)
   {
         $q=$this->db->select()
                 ->from('candidate_registration')
                 ->where(['id'=>$id])
                 ->get();
                 return $q->row();
   }
     function manage_job1($company_name)
{
    
    $q= $this->db->select()
                      ->where('company_name',$company_name)
                      ->get('job_search');

                    return $q->result();

  
   }
   public function count($company)
   {
    
   $query = $this->db->query("select count(id) as application from applied_job where company_name='$company'");
    $total_application=$query->num_rows();

    return $total_application;
    
}
public function edit_job1($id)
{
      $email=$this->session->userdata('emp_email');
         $q=$this->db->select()
                 ->from('job_search')
                 ->where(['id'=>$id])
                 ->get();
                 return $q->row(); 
}
public function edit_job2($data,$id)
{

                       $email=$this->session->userdata('emp_email');
    $this->db->where(['id'=>$id])
             ->update('job_search',$data);
         
                      
}
public function did_delete_rows($id){
    $this ->db-> where('id',$id)
              -> delete('job_search');
}
public function status($email)
{
        
        $data=array(
                    'status'=>'accept'
            
        );
         $q=$this->db->where('email',$email)
                     ->update('applied_job',$data);
                     
                
}




public function status1($email)
{
        
        $data=array(
                    'status'=>'reject'
            
        );
         $q=$this->db->where('email',$email)
                     ->update('applied_job',$data);
                     
                
}

}

?>