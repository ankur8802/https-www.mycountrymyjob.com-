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
        <div class="careerfy-subheader careerfy-subheader-without-bg">
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
            </div>
            <div class="clearfix"></div>
            <div class="careerfy-breadcrumb">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Pages</a></li>
                    <li>Employer</li>
                    <li>POST JOB</li>
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

                       <?php include('side_nav.php') ?>
                    <!--     <div class="careerfy-column-9">
                            <div class="careerfy-typo-wrap">
                                <div class="careerfy-employer-box-section">
                                    <div class="careerfy-profile-title">
                                        <h2>Applied Jobs</h2>
                                        
                                    </div>

                                <?php
                                
                                    foreach ($res as $re) 
                                    {

                                        $row=$this->db->query("select * from candidate_registration where email='$re->email'");
                                    $userdata=$row->row();
                                ?> 
                                    <div class="careerfy-applied-jobs">
                                        <ul class="careerfy-row">
                                            <li class="careerfy-column-12">
                                                <div class="careerfy-applied-jobs-wrap">
                                                    <!-- <a href="#" class="careerfy-applied-jobs-thumb"><img src="extra-images/candidate-01.jpg" alt=""></a> -->
                                                   <!--  <div class="careerfy-applied-jobs-text">
                                                        <div class="careerfy-applied-jobs-left">
                                                            <span><?= $re->category?></span>
                                                            <h2><a href="#"><?= $userdata->name?></a></h2>
                                                            <ul>
                                                                <li><i class="fa fa-map-marker"></i> <?= $userdata->email?></li>
                                                                <li><i class="fa fa-map-marker"></i> <?= $userdata->state?>, <?= $userdata->city?></li> -->
                                                               <!--  <li> --><!-- <i class="careerfy-icon careerfy-filter-tool-black-shape"></i> --> <!-- <a href="#"><?= $userdata->skill?></a></li> -->
                                                                <!-- <li> --><!-- <i class="careerfy-icon careerfy-filter-tool-black-shape"></i> --> <!-- <a href="#"><?= $re->status?></a></li> -->
                                                                <!-- <li><i class="careerfy-icon careerfy-calendar"></i> <?= $re->date?></li> -->

<!-- 
                                                            </u -->
                                                        </div>
                                                        <!-- <a href="#" class="careerfy-savedjobs-links"><i class="careerfy-icon careerfy-rubbish"></i></a>
                                                        <a href="#" class="careerfy-savedjobs-links"><i class="careerfy-icon careerfy-view"></i></a> -->
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <?php
                                }
                              ?>  
                                 
                                    <!-- Pagination -->
                                    <!-- <div class="careerfy-pagination-blog">
                                        <ul class="page-numbers">
                                            <li><a class="prev page-numbers" href="#"><span><i class="careerfy-icon careerfy-arrows4"></i></span></a></li>
                                            <li><span class="page-numbers current">01</span></li>
                                            <li><a class="page-numbers" href="#">02</a></li>
                                            <li><a class="page-numbers" href="#">03</a></li>
                                            <li><a class="page-numbers" href="#">04</a></li>
                                            <li><a class="next page-numbers" href="#"><span><i class="careerfy-icon careerfy-arrows4"></i></span></a></li>
                                        </ul>
                                    </div> -->
                                </div>
                            </div>
                        </div> -->

                    </div>
                </div>
            </div>
            <!-- Main Section -->

        </div>
        <!-- Main Content -->
        
    


    </div>












    <div class="careerfy-main-content">
            
            <!-- Main Section -->
            <div class="careerfy-main-section careerfy-top-full">
                <div class="container">
                    <div class="row">

                        <div class="careerfy-column-9">
                            <div class="careerfy-typo-wrap">
                                <div class="careerfy-employer-dasboard">
                                    <div class="careerfy-employer-box-section">
                                        <!-- Profile Title -->
                                        <div class="careerfy-profile-title">
                                            <h2>Shortlisted Resumes</h2>
                                            <form class="careerfy-employer-search">
                                                <input value="Search orders" onblur="if(this.value == '') { this.value ='Search orders'; }" onfocus="if(this.value =='Search orders') { this.value = ''; }" type="text">
                                                <input type="submit" value="">
                                                <i class="careerfy-icon careerfy-search"></i>
                                            </form>
                                        </div>
                                        <!-- Resumes -->
                                        <div class="careerfy-employer-resumes">
                                            <ul class="careerfy-row">
                                                <?php
                                
                                    foreach ($res as $re) 
                                    {

                                        $row=$this->db->query("select * from candidate_registration where email='$re->email'");
                                    $userdata=$row->row();
                                ?>   
                                   <li class="careerfy-column-6">
                                                    <div class="careerfy-employer-resumes-wrap">
                                                        <figure>
                                                            <a href="#" class="careerfy-resumes-thumb"><img src="extra-images/resumes-list-thumb-1.jpg" alt=""></a>
                                                            <figcaption>
                                                                <h2><a href="#"><?= $userdata->name?></a> <a href="#" class="careerfy-resumes-download"><i class="careerfy-icon careerfy-download-arrow"></i> Download CV</a></h2>
                                                                <span class="careerfy-resumes-subtitle"><?= $re->category?> <!-- <a href="#">Unodoncity</a> --></span>
                                                                <ul>
                                                                    <li>
                                                                        <span>Location:</span>
                                                                        <?= $userdata->state?>, <?= $userdata->city?>
                                                                    </li>
                                                                    <li>
                                                                        <span>Current Salary:</span>
                                                                        <?= $userdata->current_salary?><small>p.a minimum</small>
                                                                    </li>
                                                                </ul>
                                                            </figcaption>
                                                        </figure>
                                                        <ul class="careerfy-resumes-options">
                                                           <!--  <li><a href="#"><i class="careerfy-icon careerfy-mail"></i> Message</a></li> -->
                                                            <li><a href="#"><i class="careerfy-icon careerfy-user-1"></i> View Profile</a></li>
                                                           <!--  <li><a href="#"><i class="careerfy-icon careerfy-linkedin-1"></i> LinkedIn</a></li> -->
                                                        </ul>
                                                    </div>
                                                </li> 
                                                 <?php
                                }
                              ?>  
                                                <li class="careerfy-column-6">
                                                    <div class="careerfy-employer-resumes-wrap">
                                                        <figure>
                                                            <a href="#" class="careerfy-resumes-thumb"><img src="extra-images/resumes-list-thumb-1.jpg" alt=""></a>
                                                            <figcaption>
                                                                <h2><a href="#">Kyl San Antonio</a> <a href="#" class="careerfy-resumes-download"><i class="careerfy-icon careerfy-download-arrow"></i> Download CV</a></h2>
                                                                <span class="careerfy-resumes-subtitle">Charity & Voluntary at <a href="#">Unodoncity</a></span>
                                                                <ul>
                                                                    <li>
                                                                        <span>Location:</span>
                                                                        Netherlands, Rotterdam
                                                                    </li>
                                                                    <li>
                                                                        <span>Current Salary:</span>
                                                                        $2000/<small>p.a minimum</small>
                                                                    </li>
                                                                </ul>
                                                            </figcaption>
                                                        </figure>
                                                        <ul class="careerfy-resumes-options">
                                                            <li><a href="#"><i class="careerfy-icon careerfy-mail"></i> Message</a></li>
                                                            <li><a href="#"><i class="careerfy-icon careerfy-user-1"></i> View Profile</a></li>
                                                            <li><a href="#"><i class="careerfy-icon careerfy-linkedin-1"></i> LinkedIn</a></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="careerfy-column-6">
                                                    <div class="careerfy-employer-resumes-wrap">
                                                        <figure>
                                                            <a href="#" class="careerfy-resumes-thumb"><img src="extra-images/resumes-list-thumb-1.jpg" alt=""></a>
                                                            <figcaption>
                                                                <h2><a href="#">Daniel Nguyen</a> <a href="#" class="careerfy-resumes-download"><i class="careerfy-icon careerfy-download-arrow"></i> Download CV</a></h2>
                                                                <span class="careerfy-resumes-subtitle">Financial Services at <a href="#">Graveholdings</a></span>
                                                                <ul>
                                                                    <li>
                                                                        <span>Location:</span>
                                                                        Netherlands, Rotterdam
                                                                    </li>
                                                                    <li>
                                                                        <span>Current Salary:</span>
                                                                        $15000/<small>p.a minimum</small>
                                                                    </li>
                                                                </ul>
                                                            </figcaption>
                                                        </figure>
                                                        <ul class="careerfy-resumes-options">
                                                            <li><a href="#"><i class="careerfy-icon careerfy-mail"></i> Message</a></li>
                                                            <li><a href="#"><i class="careerfy-icon careerfy-user-1"></i> View Profile</a></li>
                                                            <li><a href="#"><i class="careerfy-icon careerfy-linkedin-1"></i> LinkedIn</a></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="careerfy-column-6">
                                                    <div class="careerfy-employer-resumes-wrap">
                                                        <figure>
                                                            <a href="#" class="careerfy-resumes-thumb"><img src="extra-images/resumes-list-thumb-1.jpg" alt=""></a>
                                                            <figcaption>
                                                                <h2><a href="#">Vodka beluga</a> <a href="#" class="careerfy-resumes-download"><i class="careerfy-icon careerfy-download-arrow"></i> Download CV</a></h2>
                                                                <span class="careerfy-resumes-subtitle">Engineering at <a href="#">Vsmarttech</a></span>
                                                                <ul>
                                                                    <li>
                                                                        <span>Location:</span>
                                                                        Netherlands, Rotterdam
                                                                    </li>
                                                                    <li>
                                                                        <span>Current Salary:</span>
                                                                        $3000/<small>p.a minimum</small>
                                                                    </li>
                                                                </ul>
                                                            </figcaption>
                                                        </figure>
                                                        <ul class="careerfy-resumes-options">
                                                            <li><a href="#"><i class="careerfy-icon careerfy-mail"></i> Message</a></li>
                                                            <li><a href="#"><i class="careerfy-icon careerfy-user-1"></i> View Profile</a></li>
                                                            <li><a href="#"><i class="careerfy-icon careerfy-linkedin-1"></i> LinkedIn</a></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="careerfy-column-6">
                                                    <div class="careerfy-employer-resumes-wrap">
                                                        <figure>
                                                            <a href="#" class="careerfy-resumes-thumb"><img src="extra-images/resumes-list-thumb-1.jpg" alt=""></a>
                                                            <figcaption>
                                                                <h2><a href="#">Rai Yamoto</a> <a href="#" class="careerfy-resumes-download"><i class="careerfy-icon careerfy-download-arrow"></i> Download CV</a></h2>
                                                                <span class="careerfy-resumes-subtitle">Development Manager at <a href="#">AOEVN</a></span>
                                                                <ul>
                                                                    <li>
                                                                        <span>Location:</span>
                                                                        Netherlands, Rotterdam
                                                                    </li>
                                                                    <li>
                                                                        <span>Current Salary:</span>
                                                                        $50000/<small>p.a minimum</small>
                                                                    </li>
                                                                </ul>
                                                            </figcaption>
                                                        </figure>
                                                        <ul class="careerfy-resumes-options">
                                                            <li><a href="#"><i class="careerfy-icon careerfy-mail"></i> Message</a></li>
                                                            <li><a href="#"><i class="careerfy-icon careerfy-user-1"></i> View Profile</a></li>
                                                            <li><a href="#"><i class="careerfy-icon careerfy-linkedin-1"></i> LinkedIn</a></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="careerfy-column-6">
                                                    <div class="careerfy-employer-resumes-wrap">
                                                        <figure>
                                                            <a href="#" class="careerfy-resumes-thumb"><img src="extra-images/resumes-list-thumb-1.jpg" alt=""></a>
                                                            <figcaption>
                                                                <h2><a href="#">Mary C Stanford</a> <a href="#" class="careerfy-resumes-download"><i class="careerfy-icon careerfy-download-arrow"></i> Download CV</a></h2>
                                                                <span class="careerfy-resumes-subtitle">Web Designer at <a href="#">TheOne Co</a></span>
                                                                <ul>
                                                                    <li>
                                                                        <span>Location:</span>
                                                                        Netherlands, Rotterdam
                                                                    </li>
                                                                    <li>
                                                                        <span>Current Salary:</span>
                                                                        $4000/<small>p.a minimum</small>
                                                                    </li>
                                                                </ul>
                                                            </figcaption>
                                                        </figure>
                                                        <ul class="careerfy-resumes-options">
                                                            <li><a href="#"><i class="careerfy-icon careerfy-mail"></i> Message</a></li>
                                                            <li><a href="#"><i class="careerfy-icon careerfy-user-1"></i> View Profile</a></li>
                                                            <li><a href="#"><i class="careerfy-icon careerfy-linkedin-1"></i> LinkedIn</a></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- Pagination -->
                                        <div class="careerfy-pagination-blog">
                                            <ul class="page-numbers">
                                                <li><a class="prev page-numbers" href="#"><span><i class="careerfy-icon careerfy-arrows4"></i></span></a></li>
                                                <li><span class="page-numbers current">01</span></li>
                                                <li><a class="page-numbers" href="#">02</a></li>
                                                <li><a class="page-numbers" href="#">03</a></li>
                                                <li><a class="page-numbers" href="#">04</a></li>
                                                <li><a class="next page-numbers" href="#"><span><i class="careerfy-icon careerfy-arrows4"></i></span></a></li>
                                            </ul>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>


</body>
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

