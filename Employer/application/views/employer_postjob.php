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
       <!--  <div class="careerfy-subheader careerfy-subheader-without-bg">
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
                    <!-- <li><a href="#">Home</a></li>
                    <li><a href="#">Pages</a></li>
                    <li>Employer</li> -->
                    <li>Post Job</li>
                </ul>
            </div>
      <!--   </div> -->
        <!-- SubHeader -->

        <!-- Main Content -->
        <div class="careerfy-main-content">
            
            <!-- Main Section -->
            <div class="careerfy-main-section careerfy-dashboard-fulltwo">
                <div class="container">
                    <div class="row">

                        <?php include('side_nav.php') ?>
                        
                        <div class="careerfy-column-9">
                            <div class="careerfy-typo-wrap">
                                <div class="careerfy-employer-dasboard">
                                    <form class="form-group"  action="<?=base_url('index.php/Employee/new_job')?>" method="post" enctype="multipart/form-data"   >
                                        <div class="careerfy-employer-box-section">
                                            <!-- Profile Title -->
                                            <div class="careerfy-profile-title" style="background-color: #8ebc00;padding:10px 0px 00px 20px">
                                                <h2 style="color: white;line-height: 0px">Job Details</h2>
                                            </div>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            
                                            <ul class="careerfy-row careerfy-employer-profile-form">
                                                <!-- <li class="careerfy-column-6">
                                                    <label>Job Title </label>
                                                    <input type="text" name="title" required=""  value="" class="form-control" placeholder="Title"> 
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
                                                    <select name="title"  required="" class="form-control" >
                                                       <option value="">Choose</option>
                                                        <?php 
                                                           foreach($job_title as $res)
                                                           {

                                                            ?>
                                                        <option ><?php echo $res->title;?></option>

                                                        
                                                        
                                                        <?php
                                                    }
                                                    ?>
                                                    </select>
                                                </div>
                                            </li>
                                                 <li class="careerfy-column-6">
                                                    <label>Application Deadline Date</label>
                                                    <div class="careerfy-column-12 date">
                                                        <input type="text" required="" placeholder="Select Date" name="deadline_date" style="width:100%;height:40px;" id="basicDate" data-input>
                                                    </div>
                                                </li>
                                               
                                                
                                                
                                   <!--  -->
                                                 
                                               


                                                 <li class="careerfy-column-6">
                                                    <label>Industry</label>
                                                    <div class="careerfy-profile-select">
                                                       <select name="industry" class="function_area" required=""  placeholder="">
                                                       <option value="">Choose</option>
                                                           <?php 
                                                           foreach($dabt as $key)
                                                           {

                                                            ?>
                                                        <option value="<?php echo $key->industry;?>"><?php echo $key->industry;?></option>
                                                        <?php
                                                    }
                                                    ?>
                                                     </select>
                                                    </div>
                                            </li>

                                            <li class="careerfy-column-6">
                                                    <label>Functional Area</label>
                                                    <div class="careerfy-profile-select">
                                                       <select name="function" class="function_area" required=""  placeholder="">
                                                         <option value="">Choose</option>
                                                           <?php 
                                                           foreach($functional_area as $key)
                                                           {

                                                            ?>
                                                        <option value="<?php echo $key->id;?>"><?php echo $key->functional;?></option>
                                                        <?php
                                                    }
                                                    ?>
                                                     </select>
                                                    </div>
                                            </li>

                                                    <li class="careerfy-column-6">
                                                <label>Job Category</label>
                                                <div class="careerfy-profile-select ">
                                                    <select name="category" value="" required="" class="category_data cat_area">
                                                          
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
                                                        <select class="form-controls" required="" name="job_type">
                                                            <option>Part Time</option>
                                                            <option>Full Time</option>
                                                        </select>
                                                    </div>
                                                </li>
                                               
                                                <!-- <li class="careerfy-column-6">
                                                    <label>Salary</label>
                                                    <div class="careerfy-profile">
                                                        <input type="text" required="" name="salary" placeholder="Enter Salary" class="form-control">
                                                    </div>
                                                </li> -->
                                                <li class="careerfy-column-6">

                                                <div class="careerfy-column-6">

                                                <label> Salary</label>
                                                <div class="careerfy-profile-select">
                                                    
                                                    <select  name="salary" >
                                                      <option value="">Choose</option>

                                            <?php

                                                for($i=0;$i<11;$i++)
                                                {
                                            ?>
                                                        <option 
                                                        
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
                                                      <option value="">Choose</option>

                                            <?php

                                                for($i=0;$i<11;$i++)
                                                {
                                            ?>
                                                        <option 
                                                        
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
                                                  
                                                    <select required="" name="experience" >
                                                      <option value="">Choose</option>

                                            <?php

                                                for($i=0;$i<31;$i++)
                                                {
                                            ?>
                                                        <option 
                                                        
                                                         value="<?=$i?> Year"><?=$i ?> Year</option>
                                            <?php
                                                }
                                            ?>
</select>
                                                </div>
                                              </div>
                                              <div class="careerfy-column-6">
                                                     <div class="careerfy-profile-select">
                                                   <select required="" name="experience1" >
                                                    <option value="">Choose</option>

                                            <?php

                                                for($i=0;$i<11;$i++)
                                                {
                                            ?>
                                                        <option 
                                                        
                                                         value="<?=$i?> Month"><?=$i ?>Month</option>
                                            <?php
                                                }
                                            ?>
</select>
                                                </div>
                                              </div>
                                            </li>
                                            <li class="careerfy-column-6">
                                                   
                                                   
                                                       <input type="checkbox"  name="not_disclosed" value="Not Disclosed" style="margin-left:7%;"> <span>Not Disclosed</span>
                                                    
                                                </li>

                                                <li class="careerfy-column-6">
                                                    <label>No of Openings</label>
                                                    
                                                        <input type="text" required="" name="vacancy" placeholder="Enter Total vacancy " class="form-control">
                                                    
                                                </li>
                                                  <li class="careerfy-column-6">
                                                <label>Skills</label>
                                                <select  data-placeholder="Choose Skill ..." name="skill[]" multiple class="chosen-select skill_data" required="" style="height: 41px; " id='skill' >
                                                    <!-- <?php 
                                                           foreach($daba as $res)
                                                           {

                                                            ?>
                                                        <option id="<?php echo $res->id;?>"><?php echo $res->skill;?></option>
                                                        <?php
                                                    }
                                                    ?> -->
                                    
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
                                                <label> Qualification / Eligibility</label>
                                                <div class="careerfy-profile-select">
                                                    <select name="qualification"  placeholder=""required="">
                                                         <option value="">Choose</option>
                                                       <?php 
                                                           foreach($dab as $res)
                                                           {

                                                            ?>
                                                        <option><?php echo $res->qualification;?></option>
                                                        <?php
                                                    }
                                                    ?>
                                                    </select>
                                                </div>
                                            </li>

                                                 <!-- <li class="careerfy-column-12">
                                                    <label>Job Description</label>
                                                    <div class="careerfy-profile">
                                                        <textarea type="text" required="" name="description" placeholder="Enter description " class="form-control"></textarea>
                                                    </div>
                                                </li> -->
                                                </li>

                                                
                                                <li>
                                                 <label>Job Responsibilities </label>
                                                <textarea  class="form-control" name="description"  required="" id="editor" placeholder="content"style="margin-top:20px;">
        
        </textarea>
                                            </li>
                                            <li>
                                                 <label>Candidate Profile </label>
                                                <textarea  class="form-control" name="candidate_description" required=""  id="editor1" placeholder="content"style="margin-top:20px;">
        
        </textarea>
                                            </li>
                                            </ul>
                                        </div>
                                        <div class="careerfy-employer-box-section">
                                            <div class="careerfy-profile-title" style="background-color: #8ebc00;padding:10px 0px 00px 20px">
                                                <h2 style="color: white;line-height: 0px">Company Details</h2>
                                            </div>
                                            <ul class="careerfy-row careerfy-employer-profile-form">
                                                <li class="careerfy-column-6">
                                                    <label>Company name</label>
                                                    <input readonly="" value="<?php echo $data->company_name;?>" name="company_name" required="" type="text" class="form-control">
                                                </li>
                                                <li class="careerfy-column-6">
                                                    <label>Email Address</label>
                                                    <input value="<?php echo $data->emp_email;?>" name="email" required="" type="text" class="form-control" >
                                                </li>
                                                 <li class="careerfy-column-6">
                                                    <label>Contact Person Name</label>
                                                    <input type="text" name="contact_person" value="<?php echo $data->contact_person_info;?>" required="" value="<?php echo $data->contact_person_info;?>" class="form-control hr">
                                                </li>
                                                 <li class="careerfy-column-6">
                                                    <label>Phone no.</label>
                                                    <input readonly="" pattern="[6-9]{1}[0-9]{9}" type="text" value="<?php echo $data->phone?>" name="phone" required="" id="txtPhoneNo" style="width: 70%"  placeholder="Enter Contact Number" maxlength="10" class="form-control">
                                                    &nbsp;
                                                    <span style="cursor: pointer;background-color: #8ebc00;color: white;padding: 3px;font-size: 12px" class="phone_status">Phone Hide</span>
                                                     <input class="phone_status_inp" type="hidden" name="phone_status" value="show">

                                                </li>
                                                
                                               <li class="careerfy-column-6">
                                                <label>State</label>
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
                                                    <select name="state"  readonly>
                                                        
                                                        <option value="<?php echo $data->state?>"><?php echo $data->state;?></option>
                                                       
                                                    </select>
                                                </div>
                                            </li>
                                               
                                                 <li class="careerfy-column-6">
                                                <label>City</label>
                                                <div class="careerfy-profile-select">
                                                    <select name="city" readonly>
   
                                                        <option><?php echo $data->city;?></option>
                                                       
                                                    </select>
                                                    </select>
                                                </div>
                                            </li>
                                                   
                                                <li class="careerfy-column-6">
                                                    <label>Pin Code</label>
                                                    <input readonly value="<?php echo $data->postcode;?>"  name="pin_code" required=""  type="text" class="form-control">
                                                </li>
                                                <li class="careerfy-column-10">
                                                    <label>Full Address</label>
                                                    <input readonly name="address" required="" value="<?php echo $data->address;?>" type="text" class="form-control">
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

        </div>
 
        
     Footer -->
                 
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

$(".chosen-select").chosen();

$(document).ready(function(){

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
  // text:"Waiting For Approval",
  icon:"success",
  button:"ok",
});
       
<?php } ?>
</script>



<script>
  $(document).ready(function(){

$(".phone_status").click(function(){
var val=$(this).text();
if(val=='Phone Hide')
{
    $(".phone_status_inp").val("hide");
    $(this).text("Phone Show");
}

if(val=='Phone Show')
{
    $(".phone_status_inp").val("show");
    $(this).text("Phone Hide");
}
})

$('#topScroll').delay(3000).fadeOut();

});
</script>

   <script type="text/javascript">

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
