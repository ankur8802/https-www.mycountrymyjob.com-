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
       <!--  -->
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
                    <!-- <li><a href="#">Home</a></li>
                    <li><a href="#">Pages</a></li> -->
                    <li>Manage Jobs</li>
                </ul>
            </div>
       <!--  </div> -->
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
                                    <div class="careerfy-employer-box-section">
                                        <!-- Profile Title -->
                                        <div class="careerfy-profile-title">
                                            <h2><?php echo $data->company_name;?></h2>
                                           <!--  <?php echo $data->emp_email;?> -->
                                           <!-- <?php echo $this->session->userdata('emp_email');?> -->
                                            <!-- <form class="careerfy-employer-search">
                                                <input value="Search orders" onblur="if(this.value == '') { this.value ='Search orders'; }" onfocus="if(this.value =='Search orders') { this.value = ''; }" type="text">
                                                <input type="submit" value="">
                                                <i class="careerfy-icon careerfy-search"></i>
                                            </form> -->
                                        </div>
                                        <!-- Manage Jobs -->
                                        <div class="careerfy-managejobs-list-wrap">
                                            <div class="careerfy-managejobs-list">
                                                <!-- Manage Jobs Header -->
                                                <div class="careerfy-table-layer careerfy-managejobs-thead">
                                                    <div class="careerfy-table-row">
                                                        <div class="careerfy-table-cell">Job Title</div>
                                                        <div class="careerfy-table-cell">Applications</div>
                                                       <!--  <div class="careerfy-table-cell">Featured</div> -->
                                                        <div class="careerfy-table-cell">Status</div>
                                                        <div class="careerfy-table-cell"></div>
                                                    </div>
                                                </div>
                                                <!-- Manage Jobs Body -->

                                                <?php
                                
                                    foreach ($result as $res) 
                                    {
                                        
                                        ?>
                                                <div class="careerfy-table-layer careerfy-managejobs-tbody">
                                                    <div class="careerfy-table-row">
                                                        <div class="careerfy-table-cell">
                                                            <h6><a href="#"><?=$res->title?></a></h6>
                                                            <ul>
                                                                <li><i class="careerfy-icon careerfy-calendar"></i> Created: <span><?=$res->date?></span></li>
                                                                <li><i class="careerfy-icon careerfy-calendar"></i> Expiry: <span><?=$res->deadline_date?></span></li>
                                                                <li><i class="careerfy-icon careerfy-maps-and-flags"></i> <?=$res->city?>,<?=$res->state?> </li>
                                                                <li><i class="careerfy-icon careerfy-filter-tool-black-shape"></i> <a href="#"><?=$res->category?></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="careerfy-table-cell"><a href="<?= base_url('index.php/Employee/applicants');?>" class="careerfy-managejobs-appli">
                                                               <?php
$row=$this->db->query("select count(id) as applied from applied_job where job_id='$res->id'");
                                    $userdata=$row->row();
                                                                echo $userdata->applied;
                                                                ?>
                                                               







                                                            <!-- <?=$total_jobs ?> Application(s) --></a></div>
                                                        <!-- <div class="careerfy-table-cell"><i class="fa fa-star-o"></i></div> -->
                                                        <div class="careerfy-table-cell"><span class="careerfy-managejobs-option"><?= $res->status?>
                                                              <!-- <?php
                                                              
                                                             $currentDate = date('d-m-y');
                                                             $deadline_date=$res->deadline_date;

                                                             if($currentDate >=$deadline_date)
                                                             {
                                                                echo "expired";
                                                             }
                                                             else
                                                               {
                                                               echo $res->status;
                                                             } 
                                                             ?> -->
                                                            </span></div>
                                                        <div class="careerfy-table-cell">
                                                            <div class="careerfy-managejobs-links">
                                                               <!--  <a href="#" class="careerfy-icon careerfy-view"></a> -->
                                                                  <a href="<?= base_url('index.php/Employee/edit_job/').$res->id;?>" class="careerfy-icon careerfy-edit"></a> 
                                                                <a href="javascript:void(0)" class="careerfy-icon careerfy-rubbish cnf_dlt"></a> 

                                                                <input type="hidden" value="<?= base_url('index.php/Employee/delete_rows/').$res->id;?>" name="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                     <?php
                                }
                              ?>  
                                       

                                               <!--  <div class="careerfy-table-layer careerfy-managejobs-tbody">
                                                    <div class="careerfy-table-row">
                                                        <div class="careerfy-table-cell">
                                                            <h6><a href="#">Praca przy produkcji</a></h6>
                                                            <ul>
                                                                <li><i class="careerfy-icon careerfy-calendar"></i> Created: <span>Sep 14, 2017</span></li>
                                                                <li><i class="careerfy-icon careerfy-calendar"></i> Expiry: <span>Dec 9, 2017</span></li>
                                                                <li><i class="careerfy-icon careerfy-maps-and-flags"></i> Netherlands, Rotterdam</li>
                                                                <li><i class="careerfy-icon careerfy-filter-tool-black-shape"></i> <a href="#">Web Developer</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="careerfy-table-cell"><a href="#" class="careerfy-managejobs-appli">6 Application(s)</a></div>
                                                        <div class="careerfy-table-cell"><i class="fa fa-star-o"></i></div>
                                                        <div class="careerfy-table-cell"><span class="careerfy-managejobs-option active">Active</span></div>
                                                        <div class="careerfy-table-cell">
                                                            <div class="careerfy-managejobs-links">
                                                                <a href="#" class="careerfy-icon careerfy-view"></a>
                                                                <a href="#" class="careerfy-icon careerfy-edit"></a>
                                                                <a href="#" class="careerfy-icon careerfy-rubbish"></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="careerfy-table-layer careerfy-managejobs-tbody">
                                                    <div class="careerfy-table-row">
                                                        <div class="careerfy-table-cell">
                                                            <h6><a href="#">Lorem ipsum dolor sit amet consectetur</a></h6>
                                                            <ul>
                                                                <li><i class="careerfy-icon careerfy-calendar"></i> Created: <span>Sep 14, 2017</span></li>
                                                                <li><i class="careerfy-icon careerfy-calendar"></i> Expiry: <span>Dec 9, 2017</span></li>
                                                                <li><i class="careerfy-icon careerfy-maps-and-flags"></i> Netherlands, Rotterdam</li>
                                                                <li><i class="careerfy-icon careerfy-filter-tool-black-shape"></i> <a href="#">Web Developer</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="careerfy-table-cell"><a href="#" class="careerfy-managejobs-appli">2 Application(s)</a></div>
                                                        <div class="careerfy-table-cell"><i class="fa fa-star-o"></i></div>
                                                        <div class="careerfy-table-cell"><span class="careerfy-managejobs-option expired">Expired</span></div>
                                                        <div class="careerfy-table-cell">
                                                            <div class="careerfy-managejobs-links">
                                                                <a href="#" class="careerfy-icon careerfy-view"></a>
                                                                <a href="#" class="careerfy-icon careerfy-edit"></a>
                                                                <a href="#" class="careerfy-icon careerfy-rubbish"></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="careerfy-table-layer careerfy-managejobs-tbody">
                                                    <div class="careerfy-table-row">
                                                        <div class="careerfy-table-cell">
                                                            <h6><a href="#">Graduate Inside Sales Representatives</a></h6>
                                                            <ul>
                                                                <li><i class="careerfy-icon careerfy-calendar"></i> Created: <span>Sep 14, 2017</span></li>
                                                                <li><i class="careerfy-icon careerfy-calendar"></i> Expiry: <span>Dec 9, 2017</span></li>
                                                                <li><i class="careerfy-icon careerfy-maps-and-flags"></i> Netherlands, Rotterdam</li>
                                                                <li><i class="careerfy-icon careerfy-filter-tool-black-shape"></i> <a href="#">Web Developer</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="careerfy-table-cell"><a href="#" class="careerfy-managejobs-appli">25 Application(s)</a></div>
                                                        <div class="careerfy-table-cell"><i class="fa fa-star-o"></i></div>
                                                        <div class="careerfy-table-cell"><span class="careerfy-managejobs-option">Pending</span></div>
                                                        <div class="careerfy-table-cell">
                                                            <div class="careerfy-managejobs-links">
                                                                <a href="#" class="careerfy-icon careerfy-view"></a>
                                                                <a href="#" class="careerfy-icon careerfy-edit"></a>
                                                                <a href="#" class="careerfy-icon careerfy-rubbish"></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="careerfy-table-layer careerfy-managejobs-tbody">
                                                    <div class="careerfy-table-row">
                                                        <div class="careerfy-table-cell">
                                                            <h6><a href="#">Java Developer Scala Spring Linux Java</a></h6>
                                                            <ul>
                                                                <li><i class="careerfy-icon careerfy-calendar"></i> Created: <span>Sep 14, 2017</span></li>
                                                                <li><i class="careerfy-icon careerfy-calendar"></i> Expiry: <span>Dec 9, 2017</span></li>
                                                                <li><i class="careerfy-icon careerfy-maps-and-flags"></i> Netherlands, Rotterdam</li>
                                                                <li><i class="careerfy-icon careerfy-filter-tool-black-shape"></i> <a href="#">Web Developer</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="careerfy-table-cell"><a href="#" class="careerfy-managejobs-appli">150 Application(s)</a></div>
                                                        <div class="careerfy-table-cell"><i class="fa fa-star-o"></i></div>
                                                        <div class="careerfy-table-cell"><span class="careerfy-managejobs-option expired">Expired</span></div>
                                                        <div class="careerfy-table-cell">
                                                            <div class="careerfy-managejobs-links">
                                                                <a href="#" class="careerfy-icon careerfy-view"></a>
                                                                <a href="#" class="careerfy-icon careerfy-edit"></a>
                                                                <a href="#" class="careerfy-icon careerfy-rubbish"></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> -->
                                       <!--          <div class="careerfy-table-layer careerfy-managejobs-tbody">
                                                    <div class="careerfy-table-row">
                                                        <div class="careerfy-table-cell">
                                                            <h6><a href="#">Overdue Accounts Officer for Audit</a></h6>
                                                            <ul>
                                                                <li><i class="careerfy-icon careerfy-calendar"></i> Created: <span>Sep 14, 2017</span></li>
                                                                <li><i class="careerfy-icon careerfy-calendar"></i> Expiry: <span>Dec 9, 2017</span></li>
                                                                <li><i class="careerfy-icon careerfy-maps-and-flags"></i> Netherlands, Rotterdam</li>
                                                                <li><i class="careerfy-icon careerfy-filter-tool-black-shape"></i> <a href="#">Web Developer</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="careerfy-table-cell"><a href="#" class="careerfy-managejobs-appli">30 Application(s)</a></div>
                                                        <div class="careerfy-table-cell"><i class="fa fa-star-o"></i></div>
                                                        <div class="careerfy-table-cell"><span class="careerfy-managejobs-option">Pending</span></div>
                                                        <div class="careerfy-table-cell">
                                                            <div class="careerfy-managejobs-links">
                                                                <a href="#" class="careerfy-icon careerfy-view"></a>
                                                                <a href="#" class="careerfy-icon careerfy-edit"></a>
                                                                <a href="#" class="careerfy-icon careerfy-rubbish"></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> -->
                                                <!-- Manage Jobs Body -->
                                            </div>
                                        </div>
                                        <!-- Pagination -->
                                        <div class="careerfy-pagination-blog">
                                           <!--  <ul class="page-numbers">
                                                <li><a class="prev page-numbers" href="#"><span><i class="careerfy-icon careerfy-arrows4"></i></span></a></li>
                                                <li><span class="page-numbers current">01</span></li>
                                                <li><a class="page-numbers" href="#">02</a></li>
                                                <li><a class="page-numbers" href="#">03</a></li>
                                                <li><a class="page-numbers" href="#">04</a></li>
                                                <li><a class="next page-numbers" href="#"><span><i class="care erfy-icon careerfy-arrows4"></i></span></a></li>
                                            </ul>-->
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

$(".cnf_dlt").click(function(){

var url=$(this).next().val();

swal({
  title: "Are you sure?",
  text: "Once deleted, you will not be able to recover this post",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
    window.location.href = url;
  } else {
    
  }
});

})

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
