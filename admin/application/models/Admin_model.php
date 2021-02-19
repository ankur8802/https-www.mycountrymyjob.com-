<?php
class Admin_model extends CI_model
{

      public function check($user,$pass)
      {

      	  $q=$this->db->select("*")
      	              ->from("admin_login")
      	              ->where("name",$user)
      	              ->where("password",$pass)
      	              ->get();
      	              return $q->row(); 
      }

      public function wel()
    {
        
         $q=$this->db->select()
                 ->from('company_registration')
                 ->get();
                 return $q->result(); 
                
}

      public function company_logo()
    {
        
         $q=$this->db->select()
                 ->from('company_registration')
                 ->where("image !=' ' ")
                 ->get();
                 return $q->result(); 
                
}

      public function pagination()
    {
        
         $q=$this->db->select()
                 ->from('pagination_limit')
                 ->get();
                 return $q->row(); 
                
}
      public function add_slider()
    {
        
         $q=$this->db->select()
                 ->from('slider')
                 ->get();
                 return $q->result(); 
                
}

public function wel1()
    {
        
         $q=$this->db->select()
                 ->from('candidate_registration')
                 ->get();
                 return $q->result(); 
                
}
public function wel3()
    {
        
         $q=$this->db->select()
                 ->from('applied_job')
                 ->get();
                 return $q->result(); 
                
}
public function status($id)
{
        
        $data=array(
                    'status'=>'accept'
            
        );
         $q=$this->db->where('id',$id)
                     ->update('company_registration',$data);
                     
                
}




public function status1($id)
{
        
        $data=array(
                    'status'=>'reject'
            
        );
         $q=$this->db->where('id',$id)
                     ->update('company_registration',$data);
                     
                
}
public function status2($id)
{
$data=array(
            'status'=>'block'
            
        );
         $q=$this->db->where('id',$id)
                     ->update('company_registration',$data);
}
public function status3($id)
{
$data=array(
            'status'=>'unblock'
            
        );
         $q=$this->db->where('id',$id)
                     ->update('company_registration',$data);
}      


public function local($data)
{
  $this->db->insert('jobs_category',$data);
   
} 

public function local1($data)
{
  $this->db->insert('state_name',$data);
} 

public function local2($data)
{
  $this->db->insert('city_name',$data);
} 
  public function local3($data)
{
  $this->db->insert('industry',$data);
}  
public function local4($data)
{
  $this->db->insert('keyword',$data);
}
public function local5($data)
{
  $this->db->insert('qualification',$data);
}
public function local6($data)
{
  $this->db->insert('functional',$data);
}
public function local7($data)
{
  $this->db->insert('title',$data);
}
  public function job()
    {
        
         $q=$this->db->select()
                 ->from('job_search')
                 ->get();
                 return $q->result(); 
                
}
public function stat($id)
{
        
        $data=array(
                    'status'=>'accept'
            
        );
         $q=$this->db->where('id',$id)
                     ->update('job_search',$data);
                     
                
}
public function stat1($id)
{
        
        $data=array(
                    'status'=>'reject'
            
        );
         $q=$this->db->where('id',$id)
                     ->update('job_search',$data);
                     
                
}
public function wel2()
    {
      // $this->db->distinct();
         $q=$this->db->select()
                 ->from('functional')
                 ->get();
                 return $q->result(); 
                 }


public function sub_cat()
    {
      // $this->db->distinct();
         $q=$this->db->select()
                 ->from('jobs_category')
                 ->get();
                 return $q->result(); 
  }

public function lead1()
{
  $q=$this->db->select()
                 ->from('lead')
                 ->get();
                 return $q->result(); 
                 }
}

  ?>