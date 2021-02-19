<!DOCTYPE html>
<html lang="en">



<?php
    if ($this->session->userdata('emp_email') )
    {
       include('employer_nav.php');
    }
    else
    {
        
        include('nav.php');
    }
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.2.3/flatpickr.css">
<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/chosen/1.1.0/chosen.min.css">

<style>
    .careerfy-column-9 label{
        padding-left: 10px;
    }
    .careerfy-employer-profile-form li input[type="text"]{
        border-radius: 4px;
    }
    .chosen-container-multi .chosen-choices{
        height: 41px!important;
        border: 1px solid #f6f6f6;
    }
    .chosen-container-multi .chosen-choices li.search-field{
        margin: 10px;
    }
    .chosen-container-multi .chosen-choices li.search-field input[type=text]{
        color: #999;
    }
</style>
<body>
    
    <!-- Wrapper -->
    <div class="careerfy-wrapper">
        <!-- Header -->
        
        <!-- SubHeader -->
        <!-- <div class="careerfy-subheader careerfy-subheader-without-bg">
            <div class="container">
                <div class="row">
                    <?php       
     $error = $this->session->flashdata('msg');

     if($error != null)
     {
       ?>
          <li class="alert alert-danger" id="topScroll">
           <?php echo $error; ?>
          </li>
          
         <?php 
       }
        ?>
                    <div class="col-md-12">
                        <div class="careerfy-page-title">
                            <h1>Companies</h1>
                            <p>Thousands of prestigious employers for you, search for a recruiter right now.</p>
                        </div>
                    </div>
                </div>
            </div> -->
            <div class="clearfix"></div>
            <div class="careerfy-breadcrumb">
                <ul>
                   <!--  <li><a href="#">Home</a></li>
                    <li><a href="#">Pages</a></li>
                    <li>Employer</li> -->
                    <li>EDIT JOB</li>
                </ul>
            </div>
    <!--     </div> -->
        <!-- SubHeader -->

        <!-- Main Content -->
        <div class="careerfy-main-content">
            
            <!-- Main Section -->
            <div class="careerfy-main-section careerfy-dashboard-fulltwo">
                <div class="container">
                    <div class="row">

                        <aside class="careerfy-column-3  sticky">
                            <div class="careerfy-typo-wrap">
                                <div class="careerfy-employer-dashboard-nav">
                                    <figure>
                                         <a href="#" class="employer-dashboard-thumb"><img src="<?php echo base_url('upload/'. $data->image)?>" alt="" style="width: 140px ; height: 140px;"></a>
                                        <figcaption>
                                            <div class="careerfy-fileUpload">
                                                <!-- <span><i class="careerfy-icon careerfy-add"></i> Upload Photo</span> -->
                                                <input type="file" class="careerfy-upload" />
                                            </div>
                                            <h2><?php echo $data->company_name;?></h2>
                                        </figcaption>
                                    </figure>
                                    <ul>
                                        
                                  <li><a href="<?= base_url('index.php/Employee/employer_profile');?>"><i class="careerfy-icon careerfy-user"></i> Company Profile</a></li>
                                         <li><a href="<?= base_url('index.php/Employee/manage_job');?>"><i class="careerfy-icon careerfy-briefcase-1"></i> Manage Jobs</a></li> 
                                        <!-- <li><a href="#"><i class="careerfy-icon careerfy-salary"></i> Transactions</a></li> -->
                                        <li><a href="<?= base_url('index.php/Employee/applicants');?>"><i class="careerfy-icon careerfy-heart"></i>Applicants</a></li>

                                         <li><a href="<?= base_url('index.php/Employee/save_employee');?>"><i class="careerfy-icon careerfy-heart"></i>Save Employee</a></li>
                                        
                                        <li class=""><a href="<?= base_url('index.php/Employee/job_post');?>"><i class="careerfy-icon careerfy-plus"></i> Post a New Job</a></li>

                                        <li><a href="<?= base_url('index.php/Employee/change_password');?>"><i class="careerfy-icon careerfy-multimedia"></i> Change Password</a></li>
                                        <li><a href="<?= base_url('index.php/Employee/logout')?>"><i class="careerfy-icon careerfy-logout"></i> Logout</a></li>
                                    </ul>
                                </div>
                            </div>
                        </aside>
                        <div class="careerfy-column-9">
                            <div class="careerfy-typo-wrap">
                                <div class="careerfy-employer-dasboard">
                                    <form class="form-group"  action="<?=base_url('index.php/Employee/new_job1/').$result->id?>" method="post" enctype="multipart/form-data"   >
                                        <div class="careerfy-employer-box-section">
                                            <!-- Profile Title -->
                                             <div class="careerfy-profile-title" style="background-color: #8ebc00;padding:10px 0px 00px 20px">
                                                <h2 style="color: white;line-height: 0px">Job Details</h2>
                                            </div>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            
                                            <ul class="careerfy-row careerfy-employer-profile-form">
                                                <!-- <li class="careerfy-column-6">
                                                    <label>Job Title </label>
                                                    <input type="text" name="title"   value="<?= $result->title?>" class="form-control" placeholder="Title"> 
                                                </li>
 -->

                                                                 <li class="careerfy-column-6">
                                                <label>Title</label>
                                                <div class="careerfy-profile-select">
                                                <!--     <select name="state"required="">
                                                         <option value="">Choose</option>
                                                        <?php 
                                                           foreach($dabe as $res)
                                                           {

                                                            ?>
                                                        <option><?php echo $res->state;?></option>
                                                        <?php
                                                    }
                                                    ?>
                                                    </select> -->
                                                    
                                                    <select name="title" >
                                                        <?php 
                                                           foreach($job_title as $res)
                                                           {

                                                            ?>
                                                        <option

                                                        <?php
                                                        if($result->title==$res->title)
                                                            {
                                                                echo "selected";
                                                            }
                                                        ?>
                                                         value="<?php echo $res->title?>"><?php echo $res->title;?></option>
                                                        <?php
                                                    }
                                                    ?>
                                                    </select>
                                                </div>
                                            </li>
                                               
                                                 <li class="careerfy-column-6">
                                                    <label>Application Deadline Date</label>
                                                    <!-- <div class="careerfy-column-12 date"> -->
                                                        <input type="text" name="deadline_date" value="<?=$result->deadline_date?>"      style="width:100%;height:40px;" id="basicDate" data-input>
                                                   <!--  </div> -->
                                                </li>
                                               
                                                
                                                
                                   <!--  -->
                                                 
                                               


                                                 <li class="careerfy-column-6">
                                                    <label>Industry</label>
                                                    <div class="careerfy-profile-select">
                                                       <!-- <select name="industry" class="function_area"  value="" placeholder="">
                                                           <?php 
                                                           foreach($dabt as $key)
                                                           {

                                                            ?>
                                                        <option value="<?php echo $key->id;?>"><?php echo $key->industry;?></option>
                                                        <?php
                                                    }
                                                    ?>
                                                     </select> -->
                                                     <select name="industry" value="" >
                                                                             
                                                         <?php 
                                                           foreach($dabt as $res)
                                                           {

                                                            ?>
                                                        <option 
                                                        <?php
                                                            if($result->industry==$res->industry)
                                                            {
                                                                echo "selected";
                                                            }

                                                        ?> ><?php echo $res->industry;?></option>
                                                        <?php
                                                    }
                                                    ?>
                                                    </select>

                                                    </div>
                                            </li>

                                            <li class="careerfy-column-6">
                                                    <label>Functional Area</label>
                                                    <div class="careerfy-profile-select">
                                                      <!--   <select name="function" class="function_area"  value="" placeholder="">
                                                           <?php 
                                                           foreach($functional_area as $key)
                                                           {

                                                            ?>
                                                        <option value=""><?php echo $key->functional;?></option>
                                                        <?php
                                                    }
                                                    ?>
                                                     </select>  -->
                                                     <!--  <select name="functional_area" class="function_area" value="" >
                                                                             
                                                         <?php 
                                                           foreach($functional_area as $res)
                                                           {

                                                            ?>
                                                        <option><?php echo $res->functional_area;?></option>
                                                        <?php
                                                    }
                                                    ?>
                                                    </select> -->
                                                  <select name="function" class="function_area" >
                                                                             
                                                         <?php 
                                                           foreach($functional_area as $res)
                                                           {

                                                            ?>
                                                        <option value="<?php echo $res->id;?>"
                                                        <?php
                                                            if($result->function==$res->functional)
                                                            {
                                                                echo "selected";
                                                            }

                                                        ?>> <?php echo $res->functional;?></option>
                                                        <?php
                                                    }
                                                    ?>
                                                    </select>

                                                    </div>
                                            </li>

                                                    <li class="careerfy-column-6">
                                                <label>Job Category</label>
                                                <div class="careerfy-profile-select ">
                                                    <!-- <select name="category" value=""  class="category_data">
                                                          
                                                    </select> -->
                                                    <select name="category" class="category_data cat_area" value="" >
                                                                             
                                                         <?php 
                                                           foreach($job_cate as $res)
                                                           {

                                                            ?>
                                                        <option 
                                                        <?php
                                                            if($result->category==$res->category)
                                                            {
                                                                echo "selected";
                                                            }

                                                        ?> ><?php echo $res->category;?></option>
                                                        <?php
                                                    }
                                                    ?>
                                                    </select>
                                                </div>
                                            </li>


<!-- <li class="careerfy-column-6">
                                                <label>Job Category</label>
                                                <select data-placeholder="Choose Category ..." name="tags[]" multiple class="chosen-select" style="height: 41px;">
                                                     <option value="">PHP</option>
                                                     <option value="">Web developer</option>
                                                     <option value="Plumbing">Web Designer</option>
                                    
                                                   </select>
                                            </li> -->



                                                
                                                <li class="careerfy-column-6">
                                                    <label>Job Type</label>
                                                    <div class="careerfy-profile-select">
<select name="job_type" value="">
                                                        <option  <?php
                                                        if($result->job_type=='Part Time')
                                                            {
                                                                echo "selected";
                                                            }
                                                        ?>>Part Time</option>
                                                        <option
                                                        <?php
                                                        if($result->job_type=='Full Time')
                                                            {
                                                                echo "selected";
                                                            }
                                                        ?>
                                                        >Full Time</option>
                                                    </select>
                                                    </div>
                                                </li>
                                               
                                                <!-- <li class="careerfy-column-6">
                                                    <label>Salary</label>
                                                    <div class="careerfy-profile">
                                                        <input type="text"  name="salary" placeholder="Enter Salary" class="form-control">
                                                    </div>
                                                </li> -->
                                                <li class="careerfy-column-6">

                                                <div class="careerfy-column-6">

                                                <label> Salary</label>
                                                <div class="careerfy-profile-select">
                                                    <select  name="salary" >

                                            <?php

                                                for($i=0;$i<31;$i++)
                                                {
                                            ?>
                                                        <option 
                                                        <?php 
                                                                if($result->salary=="$i Lakh")
                                                                    echo "selected";
                                                        ?>
                                                         value="<?=$i?> Lakh"><?=$i ?> Lakh</option>
                                            <?php
                                                }
                                            ?>
</select>
                                                </div>
                                              </div>
                                              <div class="careerfy-column-6">
                                                     <div class="careerfy-profile-select">
                                                    <select  name="salary1" >
                                                    

                                            <?php

                                                for($i=0;$i<11;$i++)
                                                {
                                            ?>
                                                        <option 
                                                        <?php 
                                                                if($result->salary1=="$i Thousand")
                                                                    echo "selected";
                                                        ?>
                                                         value="<?=$i?> Thousand"><?=$i ?> Thousand</option>
                                            <?php
                                                }
                                            ?>
</select>
                                                </div>
                                              </div>
                                               
                                            </li>
                                                
                                            <li class="careerfy-column-6">

                                                <div class="careerfy-column-6">

                                                <label>Experience</label>
                                                <div class="careerfy-profile-select">
<select  name="experience" >

                                            <?php

                                                for($i=0;$i<11;$i++)
                                                {
                                            ?>
                                                        <option 
                                                        <?php 
                                                                if($result->experience=="$i Year")
                                                                    echo "selected";
                                                        ?>
                                                         value="<?=$i?> Year"><?=$i ?> Year</option>
                                            <?php
                                                }
                                            ?>
</select>
                                                </div>
                                              </div>
                                              <div class="careerfy-column-6">
                                                     <div class="careerfy-profile-select">
                                                 <!--    <select name="experience2" value="">
                                                        <option>0 Month</option>
                                                        <option>1 Month</option>
                                                        <option>2 Months</option>
                                                        <option>3 Months</option>
                                                        <option>4 Months</option>
                                                        <option>5 Months</option>
                                                        <option>6 Months</option>
                                                        <option>7 Months</option>
                                                        <option>8 Months</option>
                                                        <option>9 Months</option>
                                                        <option>10 Months</option>
                                                        <option>11 Months</option>
                                                        <option>12 Months</option>
                                                       
                                                    </select> -->


                                                    <select  name="experience1" >

                                            <?php

                                                for($i=0;$i<11;$i++)
                                                {
                                            ?>
                                                        <option 
                                                        <?php 
                                                                if($result->experience1=="$i Month")
                                                                    echo "selected";
                                                        ?>
                                                         value="<?=$i?> Month"><?=$i ?> Month</option>
                                            <?php
                                                }
                                            ?>
</select>
                                                </div>
                                              </div>
                                              <li class="careerfy-column-6">
                                                   
                                                   <?php 
                                                   $not_disclosed=$result->not_disclosed;


                                                   ?>
                                                       <input type="checkbox"  name="not_disclosed" id="not_disclosed" value="Not Disclosed" style="margin-left:7%;" <?php echo ($not_disclosed=='Not Disclosed')?"checked":"" ;?>> <span>Not Disclosed</span>
                                                      
                                                    
                                                </li>
                                              <!--  <input value="<?php echo $result->experience;?>"  type="text" style="margin-top:5px; "> -->
                                            </li>
                                                <li class="careerfy-column-6">
                                                    <label>No Of Openings</label>
                                                    <div class="careerfy-profile">
                                                        <input type="text" name="vacancy" value="<?= $result->vacancy?>" placeholder="Enter Total vacancy " class="form-control">
                                                    </div>
                                                </li>
                                            <li class="careerfy-column-12">
                                                <label>Skills</label>
                                                <select  data-placeholder="Choose Category..." name="skill[]" multiple class="chosen-select skill_data"  value="" style="">
                                                    <?php 

$sql=$this->db->query("select * from keyword where status='activate' and parent_id=(select id from jobs_category where category='$result->category')");
$row=$sql->result();
print_r($row);
                                                   $skill_array=explode(',',$result->skill);
                                                   for($i=0;$i<count($skill_array);$i++)
                                                   {
                                                           foreach($row as $res)
                                                           {

                                                            ?>
                                                        <option 
                                                        <?php
                                                            if($skill_array[$i]==$res->skill)
                                                            {
                                                                echo "selected";
                                                            }

                                                        ?>><?php echo $res->skill;?></option>
                                                        <?php
                                                    }

                                                }
                                                    ?>
                                    
                                                   </select>

                                            </li>
                                              
                                                <!-- <li class="careerfy-column-6">
                                                <label>Skills</label>
                                                <div class="careerfy-profile-select">
                                                    <select value="<?php echo $data->skill?>" name="skill" type="text"> 
                                                       <?php 
                                                           foreach($daba as $res)
                                                           {

                                                            ?>
                                                        <option><?php echo $res->skill;?></option>
                                                        <?php
                                                    }
                                                    ?>
                                                    </select>
                                                </div>
                                            </li> -->
                                               <li class="careerfy-column-6">
                                                <label> Qualification</label>
                                                <div class="careerfy-profile-select">
                                                    
                                                    <select name="qualification" value="" >
                                                                             
                                                         <?php 
                                                           foreach($dab as $res)
                                                           {

                                                            ?>
                                                        <option 
                                                        <?php
                                                            if($result->qualification==$res->qualification)
                                                            {
                                                                echo "selected";
                                                            }

                                                        ?> ><?php echo $res->qualification;?></option>
                                                        <?php
                                                    }
                                                    ?>
                                                    </select>

                                                </div>
                                            </li>

                                                
                                                <li>
                                                 <label>Jobs Description </label>
                                                <textarea  class="form-control" name="description"   id="editor" placeholder="content"style="margin-top:20px;">
         <?php echo $result->description;?>
        </textarea>
                                            </li>
                                            <li>
                                                 <label>Candidate Description </label>
                                                <textarea  class="form-control" name="candidate_description"   id="editor1" placeholder="content"style="margin-top:20px;">
        <?= $result->candidate_description?>
        </textarea>
                                            </li>

                                              
                                               <!-- <li class="careerfy-column-12">
                                                    <label>Candidate Description</label>
                                                    <div class="careerfy-profile">
                                                        <textarea type="text"  name="candidate_description"  class="form-control"><?= $result->candidate_description?></textarea>
                                                    </div>
                                                </li> -->
                                            </ul>
                                        </div>
                                        <div class="careerfy-employer-box-section">
                                           <div class="careerfy-profile-title" style="background-color: #8ebc00;padding:10px 0px 00px 20px">
                                                <h2 style="color: white;line-height: 0px">Company Details</h2>
                                            </div>
                                            <ul class="careerfy-row careerfy-employer-profile-form">
                                                <li class="careerfy-column-6">
                                                    <label>Company name</label>
                                                    <input  name="company_name" value="<?= $result->company_name?>"   type="text" class="form-control">
                                                </li>
                                                <li class="careerfy-column-6">
                                                    <label>Email Address</label>
                                                    <input  name="email" value="<?= $result->email?>"  type="text" class="form-control" >
                                                </li>
                                                 <li class="careerfy-column-6">
                                                    <label>Contact Person Name</label>
                                                    <input type="text" name="contact_person" value="<?= $result->contact_person?>" placeholder="HR" class="form-control">
                                                </li>
                                                 <li class="careerfy-column-6">
                                                    <label>Phone no.</label>
                                                    <input type="text" name="phone" value="<?= $result->phone?>" id="txtPhoneNo"style="width: 70%" placeholder="Enter Contact Number" maxlength="10" class="form-control"> &nbsp;
 <span style="cursor: pointer;background-color: #8ebc00;color: white;padding: 3px;font-size: 12px" class="phone_status">
<?php
if($result->phone_status=='hide')
  echo "Phone Show";
else
  echo "Phone Hide";
?>
</span>
<input class="phone_status_inp" type="hidden" name="phone_status" value="<?php
if($result->phone_status=='hide')
  echo "hide";
else
  echo "show";
?>">

                                                </li>
                                                
                                               <li class="careerfy-column-6">
                                                <label>State</label>
                                                <div class="careerfy-profile-select">
                                                    <select name="state" >
                                                                             
                                                         <?php 
                                                           foreach($dabe as $res)
                                                           {

                                                            ?>
                                                        <option

                                                        <?php
                                                        if($result->state==$res->state)
                                                            {
                                                                echo "selected";
                                                            }
                                                        ?>
                                                         ><?php echo $res->state;?></option>
                                                        <?php
                                                    }
                                                    ?> 
                                                    </select>
                                                </div>
                                            </li>
                                               
                                                 <li class="careerfy-column-6">
                                                <label>City</label>
                                                <div class="careerfy-profile-select">
                                                    <!-- <select name="city" value="">
                                                        <?php 
                                                           foreach($dabc as $res)
                                                           {

                                                            ?>
                                                        <option><?php echo $res->city;?></option>
                                                        <?php
                                                    }
                                                    ?>
                                                    </select> -->
                                                     <select name="city" >
                                                                             
                                                         <?php 
                                                           foreach($dabc as $res)
                                                           {

                                                            ?>
                                                        <option

                                                        <?php
                                                        if($result->city==$res->city)
                                                            {
                                                                echo "selected";
                                                            }
                                                        ?>
                                                         ><?php echo $res->city;?></option>
                                                        <?php
                                                    }
                                                    ?> 
                                                    </select>
                                                </div>
                                            </li>
                                                   
                                                <li class="careerfy-column-6">
                                                    <label>Pin Code</label>
                                                    <input value="<?= $result->pin_code?>" name="pin_code"  onblur="if(this.value == '') { this.value ='746000'; }" onfocus="if(this.value =='746000') { this.value = ''; }" type="text" class="form-control">
                                                </li>
                                                <li class="careerfy-column-10">
                                                    <label>Full Address</label>
                                                    <input value="<?= $result->address?>" name="address"   type="text" class="form-control">
                                                </li>
                                                
                                                
                                                
                                               
                                            </ul>
                                        </div>
                                        <input type="submit" class="careerfy-employer-profile-submit" value="Post Now">
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- Main Section

        </div> -->
        <!-- Main Content -->
        
        <!-- Footer -->
                 
        <!-- Footer -->

    </div>
    <!-- Wrapper -->

    <!-- ModalLogin Box -->
<?php
   
        
        include('footer.php');
    
?>
  
</body>
<!--
<script>
    $(document).ready(function(){
     $('.add-skils').click(function(){
      $('<div class="careerfy-profile skils-add-effect"><input type="text`1" name="skils" placeholder="Enter Required Skils"><button type="button" class="btn btn-danger remove-skils">-</button></div>').insertAfter( $( ".skils-effect" ) );
         
      $('.remove-skils').click(function(){
            $(this).parent().remove();
      
        })
});
       
    })
    
    </script>
-->

<script src="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.2.3/flatpickr.js"></script>

<script> 
$("#basicDate").flatpickr({
    dateFormat: "d-m-Y",
    minDate: "today"
});

$(document).ready(function(){

    $(".function_area").change(function(){
    var id=$(this).val();

         $.ajax({
        url:"<?php echo base_url(); ?>index.php/Employee/ajax_role",
        method:"POST",
        data:{id:id},
        success:function(data)
        {
         $('.category_data').html(data);
        }
       });
    });
});


</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.2.3/flatpickr.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/chosen/1.1.0/chosen.jquery.min.js"></script>


 <script> 
// $("#basicDate").flatpickr({
//     dateFormat: "d-m-Y",
//     minDate: "today"
// });


$(document).ready(function(){
$(".chosen-select").chosen();
 $(".cat_area").change(function(){
    var id=$(this).val();

         $.ajax({
        url:"<?php echo base_url(); ?>index.php/Employee/get_skill",
        method:"POST",
        data:{id:id},
        success:function(data)
        {
         $('.skill_data').html(data);
         $('.chosen-select').trigger("chosen:updated");
        }
       });
    });

});


</script> 

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>



 <!-- <script>
                    <?php
                    
                   
                        if( $_SESSION['submit']=='on')
                        {
                    ?>
               swal({
  title: "",
  text: "Waiting For Approval",
  icon: "success",
  button: "ok",
});
                <?php
                
                    }

                    unset($_SESSION['submit']);
                ?>
            </script>

             -->
<script>
 <?php
     if($this->session->flashdata('item'))
      { 
        ?> 
swal({
  title:"Job is Posted",
  text:"Waiting For Approval",
  icon:"success",
  button:"ok",
});
       
<?php } ?>
</script>



<script>
  $(document).ready(function(){

$('#topScroll').delay(3000).fadeOut();

});
</script>

<script> 

$(".chosen-select").chosen();


// $(".chosen-select").val("<?php echo $data->skill;?>").trigger("chosen:updated");

</script>

   <script type="text/javascript">
$(".phone_status").click(function(){

var val=$(this).text();

if(val.trim()=='Phone Hide')
{
    $(".phone_status_inp").val("hide");
    $(this).text("Phone Show");
}

if(val.trim()=='Phone Show')
{
    $(".phone_status_inp").val("show");
    $(this).text("Phone Hide");
}
});
        function isNumber(evt) {
  evt = (evt) ? evt : window.event;
  var charCode = (evt.which) ? evt.which : evt.keyCode;
  if (charCode > 31 && (charCode < 48 || charCode > 57)) 
    // alert("Please enter only Numbers.");
    return false;
  

  return true;
}
    function ValidateNo() {
  var phoneNo = document.getElementById('#txtPhoneNo');

  if (phoneNo.value == "" || phoneNo.value == null) {
    alert("Please enter your Mobile No.");
    return false;
  }
  if (phoneNo.value.length < 10 || phoneNo.value.length > 10) {
    alert("Mobile No. is not valid, Please Enter 10 Digit Mobile No.");
    return false;
  }

  alert("Success ");
  return true;
}
      </script>
      <script src="https://cdn.ckeditor.com/ckeditor5/12.2.0/classic/ckeditor.js"></script>
                     <script>
   ClassicEditor
       .create( document.querySelector( '#editor' ) )
       .catch( error => {
           console.error( error );
       } );
         </script>
          <script>
   ClassicEditor
       .create( document.querySelector( '#editor1' ) )
       .catch( error => {
           console.error( error );
       } );
         </script>


</html>
