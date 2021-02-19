<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Candidate Profile Setting</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.2.3/flatpickr.css">

<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/chosen/1.1.0/chosen.min.css">
   
   <script src='https://www.google.com/recaptcha/api.js'></script>
    <!-- Css -->
    <link href="<?= base_url()?>/assets/css/bootstrap.css" rel="stylesheet">
    <link href="<?= base_url()?>/assets/css/font-awesome.css" rel="stylesheet">
    <link href="<?= base_url()?>/assets/css/flaticon.css" rel="stylesheet">
    <link href="<?= base_url()?>/assets/css/slick-slider.css" rel="stylesheet">
    <link href="<?= base_url()?>/assets/plugin-css/fancybox.css" rel="stylesheet">
    <link href="<?= base_url()?>/assets/plugin-css/plugin.css" rel="stylesheet">
    <link href="<?= base_url()?>/assets/css/color.css" rel="stylesheet">
    <link href="<?= base_url()?>/assets/style.css" rel="stylesheet">
    <link href="<?= base_url()?>/assets/css/responsive.css" rel="stylesheet">
    <link href="<?= base_url()?>/assets/https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=cyrillic-ext,vietnamese" rel="stylesheet">
   
    <style>
    @media only screen and (min-width: 430px) {
   .careerfy-logo{
    margin-right: 25%;
  }
}
 @media only screen and (min-width: 530px) {
   .careerfy-logo{
    margin-right: 40%;
  }
}
@media only screen and (min-width: 630px) {
   .careerfy-logo{
    margin-right: 50%;
  }
}
@media (max-width: 1054px) and (min-width: 768px)
{
     .navbar-toggle{
       
        margin: 30px 0px 20px 30px;
     }  
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
</head>


   <?php
   
       
       
         $d   = $this->session->userdata('userdata');
         ?>
        <!-- Header -->
       
        <!-- SubHeader -->
       <!--  <div class="careerfy-subheader careerfy-subheader-without-bg">
            <div class="container">
                <div class="row">
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
                    <li><a href="#">Fill Your Register Form</a></li>
                    <!-- <li><a href="#">Pages</a></li>
                    <li>Candidates</li>
                    <li>Update Profile</li> -->
                </ul>
            </div>
        </div>
        <!-- SubHeader -->

        <!-- Main Content -->
        <div class="careerfy-main-content">
           
            <!-- Main Section -->
            <div class="careerfy-main-section careerfy-dashboard-fulltwo">
                <div class="container">
                    <div class="row">

                      <!--   <aside class="careerfy-column-3 sticky">
                            <div class="careerfy-typo-wrap">
                                <div class="careerfy-employer-dashboard-nav">
                                    <figure>
                                        <form action="<?=base_url('Users/update')?>" method="post" enctype="multipart/form-data">
                                        <a href="#" class="employer-dashboard-thumb"><img src="<?php echo base_url('upload/'. $data->photo)?>" alt="" style="width: 140px ; height: 140px;"></a>
                                        <figcaption>
                                           
                                            <div class="careerfy-fileUpload">
                                                 
                                                <span><i class="careerfy-icon careerfy-add"></i> Upload Photo</span>
                                                <input type="file" class="careerfy-upload"  name="photo" />
                                            </div>
                                            <h2><?php echo $d['name'];?></h2>
                                            <span class="careerfy-dashboard-subtitle"><?php echo $data->category;?></span>
                                        </figcaption>
                                    </figure>
                                    <ul>
                                        <li class="active"><a href="candidate-dashboard-profile-seting.html"><i class="careerfy-icon careerfy-user"></i> My Profile</a></li>
                                        <li><a href="candidate-dashboard-resume.html"><i class="careerfy-icon careerfy-resume"></i> My Resume</a></li>
                                        <li><a href="candidate-dashboard-saved-jobs.html"><i class="careerfy-icon careerfy-heart"></i> Saved jobs</a></li>
                                        <li><a href="candidate-dashboard-applied-jobs.html"><i class="careerfy-icon careerfy-briefcase-1"></i> Applied jobs</a></li>
                                        <li><a href="candidate-dashboard-job-alert.html"><i class="careerfy-icon careerfy-alarm"></i> Job Alerts</a></li>
                                        <li><a href="candidate-dashboard-cv-manager.html"><i class="careerfy-icon careerfy-id-card"></i> CV Manager</a></li>
                                        <li><a href="candidate-dashboard-changed-password.html"><i class="careerfy-icon careerfy-multimedia"></i> Change Password</a></li>
                                        <li><a href="index.html"><i class="careerfy-icon careerfy-logout"></i> Logout</a></li>
                                    </ul>
                                </div>
                            </div>
                        </aside> -->
                        <form action="<?=base_url('Users/update_register')?>" method="post" enctype="multipart/form-data">
                        <div class="careerfy-column-12 form-group">
                           <div class="careerfy-typo-wrap">
                                <div class="careerfy-employer-dasboard">
                                    <div class="careerfy-employer-box-section">
                                        <div class="careerfy-profile-title"><h2>Basic Information</h2></div>
                                        <ul class="careerfy-row careerfy-employer-profile-form">
                                           
         
                                                         
         
                                    <li class="careerfy-column-6">
                                                <label>Name </label>
                                               <input value="<?php echo $d['name'];?>"   placeholder="" name="name" class="form-control" 
                                            >
                                            </li>
                                           
                                            <li class="careerfy-column-6">
                                                <label>Email </label>
                                                <input value="<?php echo $d['email'];?>" name='email' placeholder=""class="form-control" readonly>
                                            </li>
                              
                                            <li class="careerfy-column-6">
                                                <label>Phone </label>
                                           
                                                 <input pattern="[6-9]{1}[0-9]{9}"  name="phone" value="<?php echo $d['phone'];?>" id="txtPhoneNo" onkeypress="return isNumber(event)"  placeholder="Enter Your Phone Number" maxlength="10" onblur="if(this.value == '') { this.value ='Enter Your Phone Number'; }" onfocus="if(this.value =='Enter Your Phone Number') { this.value = ''; }"type="text">
                                            </li>
                                            <li class="careerfy-column-6">
                                                <label>Date of Birth:</label>
                                                <input type="text" name="dob" required="" value="" placeholder="Select Date" style="width:100%;height:40px;" id="basicDate" data-input>

                                            </li>
                                            <li class="careerfy-column-6">
                                                <label>Gender</label>
                                               
                                                  <div class="careerfy-profile-select">
                                                    <select name="gender" value="" required="" >
                                                        <option value="">Choose</option>
                                                        <option>Male</option>
                                                        <option>Female</option>
                                                    </select>
                                                </div>
                                           
                                            </li>
                                            

                                            <li class="careerfy-column-6">
                                                <label>Category </label>
                                                <div class="careerfy-profile-select">
                                                    <select name="category"  value="" required="" placeholder="">
                                                         <option value="">Choose</option>
                                                        
                                                           <?php
                                                           foreach($result as $res)
                                                           {

                                                            ?>
                                                        <option><?php echo $res->category;?></option>
                                                        <?php
                                                    }
                                                    ?>
                                                    </select>
                                                </div>
                                            </li>
                                            <li class="careerfy-column-6">
                                                <label> Qualification</label>
                                                <div class="careerfy-profile-select">
                                                    <select name="qualification"  value="" required="" placeholder="">
                                                        <option value="">Choose</option>
                                                        <?php
                                                           foreach($qualification as $res)
                                                           {

                                                            ?>
                                                        <option><?php echo $res->qualification;?></option>
                                                        <?php
                                                    }
                                                    ?>
                                                    </select>
                                                </div>
                                            </li>

                                            <li class="careerfy-column-6">
                                                <label>Skills</label>
                                                <select  data-placeholder="Choose Category ..." required="required" name="skill[]" multiple class="chosen-select"  style="height: 41px; ">
                                                    <option value="">Choose</option>
                                                    <?php 
                                                           foreach($keyword as $res)
                                                           {

                                                            ?>
                                                        <option><?php echo $res->skill;?></option>
                                                        <?php
                                                    }
                                                    ?>
                                    
                                                   </select>
                                            </li>
                                              
                                           
                                            <li class="careerfy-column-6">
                                                <label>University Name</label>
                                               <input value="" required="" placeholder="Enter your college/universityname" name="college"  type="text">
                                            </li>
                                           

                                         <li class="careerfy-column-6">
                                               <div class="file-upload">
                                                        <div class="file-select">
                                                      <div class="file-select-button" id="fileName">Upload Resume</div>
                                                        <div class="file-select-name" id="noFile">No file chosen...</div>
                                                         <input value="" placeholder="" required="" name="resume"  type="file" id="chooseFile">
                                                          </div>
                                                             </div>
                                           </li>

                                        </ul>
                                    </div>
                                    <div class="careerfy-employer-box-section">
                                        <div class="careerfy-profile-title"><h2>Address</h2></div>
                                        <ul class="careerfy-row careerfy-employer-profile-form">
                                            <li class="careerfy-column-6">
                                                <label>State</label>
                                                <div class="careerfy-profile-select">
                                                    <select class="state_val" name="state" required="">
                                                       <option value="">Choose</option>
                                                        <?php 
                                                           foreach($state_name as $res)
                                                           {

                                                            ?>
                                                        <option><?php echo $res->state;?></option>
                                                        <?php
                                                    }
                                                    ?>
                                                    </select>
                                                </div>
                                            </li>
                                            <!-- <li class="careerfy-column-6">
                                                <label>Region *</label>
                                                <div class="careerfy-profile-select">
                                                    <select>
                                                        <option>London</option>
                                                        <option>London</option>
                                                    </select>
                                                </div>
                                            </li> -->
                                            <li class="careerfy-column-6">
                                                <label>City</label>
                                                <div class="careerfy-profile-select">
                                                    <select class="city_sel" name="city" value="" required="" >
                                                       <option value="">Choose</option>
                                                        <?php
                                                           foreach($city_name as $res)
                                                           {

                                                            ?>
                                                        <option><?php echo $res->city;?></option>
                                                        <?php
                                                    }
                                                    ?>
                                                    </select>
                                                </div>
                                            </li>

                                            <li class="careerfy-column-10">
                                                <label>Full Address</label>
                                                <input value="" required="" placeholder="Enter your address"  name="address"  type="text">
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="careerfy-employer-box-section">
                                        <div class="careerfy-profile-title"><h2>Experience</h2></div>
                                        <ul class="careerfy-row careerfy-employer-profile-form">
                                            <li class="careerfy-column-6">

                                                <div class="careerfy-column-6">

                                                <label>Experience</label>
                                                <div class="careerfy-profile-select">
                                                    <select required="" name="experience1" >
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
                                                    <select  name="experience2" required="" value="" >
                                                        <option value="">Choose</option>
                                                        <?php

                                                for($i=0;$i<13;$i++)
                                                {
                                            ?>
                                                        <option 
                                                        
                                                         value="<?=$i?> Month"><?=$i ?> Month</option>
                                            <?php
                                                }
                                            ?>
                                                       
                                                    </select>
                                                </div>
                                              </div>
                                            </li>
                                            <li class="careerfy-column-6">
                                                <label>Extra Qualification / Courses</label>
                                               
                                                    <input value="" required="" 
                                                    placeholder="Enter Extra Qualification / Courses" name="extra_qualification"   type="text">
                                           
                                            </li>
                                            <!-- <li class="careerfy-column-6">
                                                <label>Age *</label>
                                                <div class="careerfy-profile-select">
                                                    <select>
                                                        <option>24</option>
                                                        <option>24</option>
                                                    </select>
                                                </div>
                                            </li> -->
                                            <li class="careerfy-column-6">

                                                <div class="careerfy-column-6">

                                                <label>Current Salary</label>
                                                <div class="careerfy-profile-select">
                                                    <select name="current_salary1" required="" value="" >
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
                                                    <select name="current_salary2" required="" value="" >
                                                        <option value="">Choose</option>
                                                        <?php
                                                        for($i=0;$i<20;$i++)
                                                            {
                                                                $amount=$i*5;
                                                        ?>
                                                        <option
                                                         value="<?=$amount?> Thousand"><?=$amount?> Thousand</option>
                                                        <?php
                                                            }
                                                        ?>
                                                    </select>
                                                </div>
                                              </div>
                                            </li>
                                            <li class="careerfy-column-6">

                                                <div class="careerfy-column-6">

                                                <label>Expected Salary</label>
                                                <div class="careerfy-profile-select">
                                                    <select name="expected_salary1" required="" value="" >
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
                                                    <select  name="expected_salary2" required=""  value="" >
                                                        <option value="">Choose</option>
                                                        <?php
                                                        for($i=0;$i<20;$i++)
                                                            {
                                                                $amount=$i*5;
                                                        ?>
                                                        <option
                                                         
                                                         value="<?=$amount?> Thousand"><?=$amount?> Thousand</option>
                                                        <?php
                                                            }
                                                        ?>
                                                    </select>
                                                </div>
                                              </div>
                                            </li>
                                            <li class="careerfy-column-6">
                                                <label>Current Job Status</label>
                                               
                                                  <div class="careerfy-profile-select">
                                                    <select name="job_status" required="" value="" >
                                                        <option value="">Choose</option>
                                                        <option>Working</option>
                                                        <option>Not Working</option>
                                                    </select>
                                                </div>
                                           
                                            </li>
                                            <li class="careerfy-column-6">
                                                <label>Current Working Company Name</label>
                                               <input value="" required="" placeholder="Enter Current Working Company Name" name="current_company"   type="text">
                                                 
                                           
                                            </li>

                                            <li class="careerfy-column-6">
                                               <input value="" required="" placeholder="Enter Current Working Company Name" name="current_company"  type="checkbox" required> I agree to the Terms and Conditions.
                                                 
                                           
                                            </li>
                                           
                                        </ul>
                                    </div>

                                    <input name="submit" type="submit" class="careerfy-employer-profile-submit" value="Submit">
                                </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- Main Section -->

        </div>
        <!-- Main Content -->
       
        <!-- Footer -->
           <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
  <script type="text/javascript">
  $(document).ready(function(){
    $('.careerfy-user-options ul li').click(function() {
        $(this).siblings('ul li').removeClass('active');
        $(this).addClass('active');
    });
});
</script>

<script>
$(document).ready(function(){
  $(".two").click(function(){
    $(".careerfy-user-form").css("display","none");
    $(".careerfy-user-form1").css("display","block");
  });
});
</script>
<script>
$(document).ready(function(){
  $(".one").click(function(){
    $(".careerfy-user-form").css("display","block");
    $(".careerfy-user-form1").css("display","none");
  });
});
</script>

<script type="text/javascript">

    $(document).ready(function(){
        $(".hr").click(function(){
          $(".careerfy-modal").show();
        });

    });
</script>

  <?php
   if(!$this->session->userdata('email'))
   {
  ?>
 <script>
    $("#hr").click(function(){
    $('#mylogin').removeClass('fade').addClass('fade-in');
    $('body').addClass('careerfy-modal-active');
    })
   
           
             $("#Employer").click(function(){
    $('#mylogin2').removeClass('fade').addClass('fade-in');
    $('body').addClass('careerfy-modal-active');
    })
   
   
    </script>
    <?php
     }
    ?>
    <script type="text/javascript">

        function isNumber(evt) {
  evt = (evt) ? evt : window.event;
  var charCode = (evt.which) ? evt.which : evt.keyCode;
  if (charCode > 31 && (charCode < 48 || charCode > 57)) {
    // alert("Please enter only Numbers.");
    return false;
  }

  return true;
}
    function ValidateNo() {
  var phoneNo = document.getElementById('txtPhoneNo');

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
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
  $(document).ready(function(){

$('#topScroll').delay(3000).fadeOut();

});

</script>

<script>
$('#chooseFile').bind('change', function () {
 var filename = $("#chooseFile").val();
 if (/^\s*$/.test(filename)) {
   $(".file-upload").removeClass('active');
   $("#noFile").text("No file chosen...");
 }
 else {
   $(".file-upload").addClass('active');
   $("#noFile").text(filename.replace("C:\\fakepath\\", ""));
 }
});



   
    </script>
    <script>
  var BASE_URL = "<?php echo base_url(); ?>";
 
 $(document).ready(function() {
    $( "#title" ).autocomplete({
 
        source: function(request, response) {
            $.ajax({
            url: BASE_URL + "ajax/search",
            data: {
                    term : request.term
             },
            dataType: "json",
            success: function(data){
               var resp = $.map(data,function(obj){
                    return obj.name;
               });
 
               response(resp);
            }
        });
    },
    minLength: 1
 });
});
 
</script>  
<script>
    $(".user-nav-profile-show").click(function(){
       hideshow();

})
    function hideshow(){
         var x = document.getElementById("user-nav-profile");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
    }
           
</script>
  
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/chosen/1.1.0/chosen.jquery.min.js"></script>


<script> 

$(".chosen-select").chosen();



</script>


 
   
  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?= base_url()?>/assets/script/jquery.js"></script>
    <script src="<?= base_url()?>/assets/script/bootstrap.js"></script>
    <script src="<?= base_url()?>/assets/script/slick-slider.js"></script>
    <script src="<?= base_url()?>/assets/plugin-script/counter.js"></script>
    <script src="<?= base_url()?>/assets/plugin-script/progressbar.js"></script>
    <script src="<?= base_url()?>/assets/plugin-script/fancybox.pack.js"></script>
    <script src="<?= base_url()?>/assets/plugin-script/isotope.min.js"></script>
    <script src="<?= base_url()?>/assets/plugin-script/functions.js"></script>
    <script src="<?= base_url()?>/assets/script/functions.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.2.3/flatpickr.js"></script>
    <script src="<?= base_url()?>/assets/main.js"></script>

<script>

    $(document).ready(function(){
        
    });
$("#basicDate").flatpickr({
    dateFormat: "d-m-Y",
    maxDate: "30-12-2006"
});

</script>


<script type="text/javascript">
     $(".state_val").change(function(){
    var id=$(this).val();

         $.ajax({
        url:"<?php echo base_url(); ?>Users/get_city",
        method:"POST",
        data:{id:id},
        success:function(data)
        {
         $('.city_sel').html(data);
       
        }
       });
    });

</script>


<script type="text/javascript">

        function isNumber(evt) {
  evt = (evt) ? evt : window.event;
  var charCode = (evt.which) ? evt.which : evt.keyCode;
  if (charCode > 31 && (charCode < 48 || charCode > 57)) {
    // alert("Please enter only Numbers.");
    return false;
  }

  return true;
}
    function ValidateNo() {
  var phoneNo = document.getElementById('txtPhoneNo');

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
