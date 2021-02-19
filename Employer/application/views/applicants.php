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

<body>
    
    <!-- Wrapper -->
    <div class="careerfy-wrapper">

        <!-- Header -->
<!--         <header id="careerfy-header" class="careerfy-header-one">
            <div class="container">
                <div class="row">
                    <aside class="col-md-2"> <a href="index.html" class="careerfy-logo"><img src="images/logo.png" alt=""></a> </aside>
                    <aside class="col-md-6">
                        <nav class="careerfy-navigation">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#careerfy-navbar-collapse-1" aria-expanded="false">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <div class="collapse navbar-collapse" id="careerfy-navbar-collapse-1">
                                <ul class="navbar-nav">
                                    <li class="active"><a href="index.html">Home</a>
                                        <ul class="sub-menu">
                                            <li><a href="index-2.html">Demo Careerfy</a></li>
                                            <li><a href="https://eyecix.com/html/careerfy-demos/hireright-demo/">Demo Hireright</a></li>
                                            <li><a href="https://eyecix.com/html/careerfy-demos/jobshub-demo/">Demo Jobshub</a></li>
                                            <li><a href="https://eyecix.com/html/careerfy-demos/belovedjobs/">Demo BelovedJobs</a></li>
                                            <li><a href="index-five.html">Demo JobsOnline</a></li>
                                            <li><a href="index-six.html">Demo JobSearch</a></li>
                                            <li><a href="index-seven.html">Demo JobFinder</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Pages</a>
                                        <ul class="sub-menu">
                                            <li><a href="about-us.html">About Us</a></li>
                                            <li><a href="cv-packages.html">CV Packages</a></li>
                                            <li><a href="faq.html">Faq's</a></li>
                                            <li><a href="job-grid-full.html">Job Grid</a></li>
                                            <li><a href="job-grid-with-filters.html">Job Grid W/filter</a></li>
                                            <li><a href="job-listings.html">Job Listings</a></li>
                                            <li><a href="job-detail.html">Job Detail</a>
                                                <ul class="sub-menu">
                                                    <li><a href="job-detail.html">Job Detail I</a></li>
                                                    <li><a href="job-detail-two.html">Job Detail II</a></li>
                                                    <li><a href="job-detail-three.html">Job Detail III</a></li>
                                                    <li><a href="job-detail-four.html">Job Detail IV</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="job-packages.html">Job Packages</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">For Candidates</a>
                                        <ul class="sub-menu">
                                            <li><a href="<?= base_url('index.php/Employee/employer_profile');?>"><i class="careerfy-icon careerfy-user"></i> Company Profile</a></li>
                                        <li><a href="#"><i class="careerfy-icon careerfy-briefcase-1"></i> Manage Jobs</a></li>
                                        <li><a href="#"><i class="careerfy-icon careerfy-salary"></i> Transactions</a></li>
                                        <li><a href="<?= base_url('index.php/Employee/applicants');?>"><i class="careerfy-icon careerfy-heart"></i>Applicants</a></li>
                                        <li class=""><a href="<?= base_url('index.php/Employee/job_post');?>"><i class="careerfy-icon careerfy-plus"></i> Post a New Job</a></li>
                                        <li><a href="<?= base_url('index.php/Employee/change_password');?>"><i class="careerfy-icon careerfy-multimedia"></i> Change Password</a></li>
                                        <li><a href="<?= base_url('index.php/Employee/logout')?>"><i class="careerfy-icon careerfy-logout"></i> Logout</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">For Employers</a>
                                        <ul class="sub-menu">
                                            <li><a href="employer-list.html">Employer List</a></li>
                                            <li><a href="employer-grid.html">Employer Grid</a></li>
                                            <li><a href="employer-detail.html">Employer Detail</a>
                                                <ul class="sub-menu">
                                                    <li><a href="employer-detail.html">Employer Detail I</a></li>
                                                    <li><a href="employer-detail-two.html">Employer Detail II</a></li>
                                                    <li><a href="employer-detail-three.html">Employer Detail III</a></li>
                                                    <li><a href="employer-detail-four.html">Employer Detail IV</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="employer-dashboard-transactions.html">Transactions</a></li>
                                            <li><a href="employer-dashboard-resumes.html">Employer Resumes</a></li>
                                            <li><a href="employer-dashboard-profile-seting.html">Profile Setting</a></li>
                                            <li><a href="employer-dashboard-pkgpayment.html">Package Payment</a></li>
                                            <li><a href="employer-dashboard-packages.html">Packages</a></li>
                                            <li><a href="employer-dashboard-newjob.html">Employer New Job</a></li>
                                            <li><a href="employer-dashboard-manage-jobs.html">Menage Jobs</a></li>
                                            <li><a href="employer-dashboard-confitmation.html">Employer Confitmation</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact-us.html">Contact</a></li>
                                </ul>
                            </div>
                      </nav>
                    </aside>
                    <aside class="col-md-4">
                        <div class="careerfy-right">
                            <ul class="careerfy-user-section">
                                <li><a class="careerfy-color careerfy-open-signin-tab" href="#">Register</a></li>
                                <li><a class="careerfy-color careerfy-open-signup-tab" href="#">Sign in</a></li>
                            </ul>
                            <a href="#" class="careerfy-simple-btn careerfy-bgcolor"><span> <i class="careerfy-icon careerfy-arrows-2"></i> Post Job</span></a>
                        </div>
                    </aside>
                </div>
            </div>
        </header> -->
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
                   <!--  <li><a href="#">Home</a></li>
                    <li><a href="#">Pages</a></li> -->
                    <li>Manage Applications</li>
                </ul>
            </div>
       <!--  </div> -->
        <!-- SubHeader -->

        <!-- Main Content -->
        <div class="careerfy-main-content">
            
            <!-- Main Section -->
            <div class="careerfy-main-section careerfy-top-full">
                <div class="container">
                    <div class="row">

                      <?php include('side_nav.php') ?>
                        <div class="careerfy-column-9">
                            <div class="careerfy-typo-wrap">
                                <div class="careerfy-employer-dasboard">
                                    <div class="careerfy-employer-box-section">
                                        <!-- Profile Title -->
                                        <div class="careerfy-profile-title">
                                            <h2>Applicants Resumes</h2>
                                             <!-- <form class="careerfy-employer-search">
                                                <input value="Search orders" onblur="if(this.value == '') { this.value ='Search orders'; }" onfocus="if(this.value =='Search orders') { this.value = ''; }" type="text">
                                                <input type="submit" value="">
                                                <i class="careerfy-icon careerfy-search"></i>
                                            </form> -->
                                        </div>
                                       <h6> Sort by:</h6>
<style type="text/css">
    .btn_active
    {
           background:green; 
        color: white;
    }
</style>


                                       <a  href="<?= base_url('index.php/Employee/applicants');?>"><button type="submit" class="btn btn-primary 
<?php



if($status=='pending')
echo "btn_active";

?>

                                        " style="padding: 5px;width: 20%;margin-left:90px;margin-top:-70px; " >PENDING</button></a>


                                       <a href="<?= base_url('index.php/Employee/applicants1');?>"><button type="submit" class="btn btn-primary
<?php

if($status=='accept')
echo "btn_active";

?>
                                        " style="padding: 5px;width: 20%;margin-left:20px;margin-top:-70px;" >ACCEPT</button></a>

                                       <a href="<?= base_url('index.php/Employee/applicants2');?>"><button type="submit" class="btn btn-primary
<?php

if($status=='reject')
echo "btn_active";

?>
                                        " style="padding: 5px;width: 20%;margin-left:20px;margin-top:-70px;" >REJECT</button></a>


                                        <!-- Resumes -->
                                        <div class="careerfy-employer-resumes" style="margin-top:20px; ">
                                            <ul class="careerfy-row">

                                                <?php
                                
                                    foreach ($res as $re) 
                                    {

                                        $row=$this->db->query("select * from candidate_registration where email='$re->email'");
                                    $userdata=$row->row();
                                ?>   
                                                <li class="careerfy-column-12">
                                                    <div class="careerfy-employer-resumes-wrap">
                                                        <figure>
                                                            <a href="#" class="careerfy-resumes-thumb"><img src="<?php echo base_url('../upload/'. $userdata->photo)?>" alt="" style="width: 60px ; height: 60px;"></a>
                                                            <figcaption>
                                                                <h2 ><a href="#"><?= $userdata->name?></a>
                                                                 <a href="<?= base_url('../upload/'. $userdata->resume)?>" class="careerfy-resumes-download"><i class="careerfy-icon careerfy-download-arrow" ></i> Download CV</a></h2>
                                                                <span class="careerfy-resumes-subtitle"><?= $userdata->category?> <!-- <a href="#">Vivatam</a> --></span>
                                                                <ul style="display:flex; ">
                                                                    <li>
                                                                        <span>Location:</span>
                                                                        <?= $userdata->state?>, <?= $userdata->city?>
                                                                    </li>

                                                                    
                                                                    <li>
                                                                        <span>Current Salary:</span>
                                                                       <?php
                                                    $current_salary1=$userdata->current_salary1;
                                                    $current_salary2=$userdata->current_salary2;
                                                    $current_salary=$current_salary1." ".$current_salary2;
                                                    echo $current_salary;
                                                ?><small>&nbsp;p.a minimum</small>
                                                                    </li>
                                                                    <li>
                                                                        <span>Status:</span>
                                                                      <small style="font-size:13px;"> <?= $re->status?></small>
                                                    
                                              
                                                                    </li>
                                                                </ul>
                                                            </figcaption>
                                                        </figure>
                                                        <ul class="careerfy-resumes-options" style="display:flex;
                                                         ">
                                                         <li><a href="<?= base_url('index.php/Employee/candidate_detail/').$userdata->id?>"><i class="careerfy-icon careerfy-user-1"></i> View Profile</a></li>
                                                            <li><a href="#"><i class="careerfy-icon careerfy-mail"></i>Send Mail</a></li>
                                                             <?php 
                                                            $status=$re->status;
                                                            if($status=='pending')
                                                            {
                                                                ?>
                                                             

                                                             <li><a href="<?= base_url("index.php/Employee/accept/{$userdata->email}")?>"><i class="careerfy-icon careerfy-user-1"></i>Accept</a></li>
                                                             <li><a href="<?= base_url("index.php/Employee/reject/$userdata->email")?>"><i class="careerfy-icon careerfy-user-1"></i> Reject</a></li>
                                                             <?php
                                                         }
                                                         ?>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <?php
                                }
                              ?>  
                                                
                                            </ul>
                                        </div>
                                        <!-- Pagination -->
                                        <div class="careerfy-pagination-blog">
                                            <!-- <ul class="page-numbers">
                                                <li><a class="prev page-numbers" href="#"><span><i class="careerfy-icon careerfy-arrows4"></i></span></a></li>
                                                <li><span class="page-numbers current">01</span></li>
                                                <li><a class="page-numbers" href="#">02</a></li>
                                                <li><a class="page-numbers" href="#">03</a></li>
                                                <li><a class="page-numbers" href="#">04</a></li>
                                                <li><a class="next page-numbers" href="#"><span><i class="careerfy-icon careerfy-arrows4"></i></span></a></li>
                                            </ul> -->
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- Main Section -->

        </div>
        <!-- Main Content -->
        
        <!-- Footer -->
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
    dateFormat: "d-F-Y",
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
script src="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.2.3/flatpickr.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/chosen/1.1.0/chosen.jquery.min.js"></script>


<script> 
$("#basicDate").flatpickr({
    dateFormat: "d-m-Y",
    minDate: "today"
});
$(".chosen-select").chosen();



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


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
  $(document).ready(function(){

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

</html>
