
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>My Country My Job</title>

  <!-- Custom fonts for this template-->
  <link href="<?= base_url()?>assets2/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?= base_url()?>assets2/css/style-admin.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
   <?php include('sidebar.php') ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 style="font-size:25px;">Employer Authentication </h1>
          <div class="row" style="background:white;padding:20px;box-shadow:0px 0px 9px silver">
              <div class="col-md-12">
                <div class="table-responsive">
                <table id="dataTableExample1" class="table table-bordered table-hover">
  <thead>
    
 




    <tr>
      
     <th scope="col">S.No.</th>
      <th>Name</th>
      <th>Cateogry</th>
      <th>Registration no.</th>
      <th>Contact No.</th>
      <th>Email</th>
      <th >Current Status</th>
      <th >Status</th>
      
       </tr>
  </tbody>

 <tbody>
  <?php 
          $i=1;
          
         foreach($res as $r)
         { 

        

            ?>
  <tr>
 <td><?php echo $i ?></td>
<td><?php echo $r->company_name ?></td>
<td><?php echo $r->categories ?></td>
<td><?php echo $r->registration_no ?></td>
<td><?php echo $r->phone ?></td>
<td><?php echo $r->emp_email ?></td>
<td><?php echo $r->status ?></td>

<td>
                                <div class="careerfy-profile-select">
                                  <form>
                                    <select name="categories" class="status_dd">
                                      <option>pending</option>
                                        <option value="accept">Unblock</option>
                                        <!-- <option>reject</option> -->
                                        <option>Block</option>
                                    </select>
                                  </form>
                                </div></td>
<td style="display: none"><button class="btn btn-primary reject_btn" ><a href="<?= base_url("index.php/Admin_controller/reject/{$r->id}")?>"style="color:#fff; ">Reject</a></button> </td>
<td style="display: none"><button class="btn btn-danger block_btn" ><a href="<?= base_url("index.php/Admin_controller/block/{$r->id}")?>"style="color:#fff; ">Block</a></button> </td>
<td style="display: none"><button class="btn btn-success accept_btn" ><a href="<?= base_url("index.php/Admin_controller/accept/{$r->id}")?>" style="color:#fff; ">Accept</a></button> </td>


</tr>
<?php 
$i++;
}

?>
</tbody>
</table>




                           <!--  <button type="button" class="btn btn-primary" id="next1">Next</button> -->
                            </div>
                       </div>



                        <!-- second div -->
                  
               </div> 


      <!-- End of Main Content -->

      <!-- Footer -->
   <?php include('footer.php') ?>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?= base_url()?>assets2/vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url()?>assets2/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?= base_url()?>assets2/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?= base_url()?>assets2/js/sb-admin-2.min.js"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/12.2.0/classic/ckeditor.js"></script>

             <script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
          </script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php
     if($this->session->flashdata('img'))
     {
      ?>
      <script type="text/javascript">
              $(document).ready(function(){


               swal({
                       title: "Opps!",
                       text: "Their is an error in image uploading",
                       icon: "error",
                        button: "Ok",
                     });
                            

               });
      </script>
      <?php }?>
      <?php
      if($this->session->flashdata('driver'))
     {
      ?>
      <script type="text/javascript">
              $(document).ready(function(){


               swal({
                       title: "Goodjob!",
                       text: "Driver Added Successfully",
                       icon: "success",
                        button: "Ok",
                     });
                            

               });
      </script>
      <?php }?>
        <?php
      if($this->session->flashdata('msg2'))
     {
      ?>
      <script type="text/javascript">
              $(document).ready(function(){


               swal({
                      
                       text: "Data Deleted Successfully",
                   
                        button: "Ok",
                     });
                            

               });
      </script>
      <?php }?>

      <script type="text/javascript">
  $(document).ready(function(){
  

$(".status_dd").on('change',function(){
var status=$(this).val();
// alert($(this).parent().parent().parent().next().next().next().html());

if(status=='accept')
{
  // alert($(this).parent().parent().parent().next().next().next().children().children().html());
   $(this).parent().parent().parent().next().next().next().children().children()[0].click();
}
else if(status=='reject')
{
  $(this).parent().parent().parent().next().children().children()[0].click();
}
else if(status=='Block')
{
  $(this).parent().parent().parent().next().next().children().children()[0].click();
}


});

       $("#next1").click(function(){
               
                   var input=$("input").val();
                   

                $(".second-div").css("display","block");

                $(".first-div").css("display","none");

       });

        $("#prev1").click(function(){
                 var input=$("input").val();
                     

                $(".first-div").css("display","block");
                $(".second-div").css("display","none");

       });

        $("#next2").click(function(){
             $(".second-div").css("display","none");
              $(".first-div").css("display","none");
               $(".third-div").css("display","block");
        });

          $("#prev2").click(function(){
                 var input=$("input").val();
                     

                $(".second-div").css("display","block");
              $(".first-div").css("display","none");
               $(".third-div").css("display","none");

       });

      });
    </script>
</body>

</html>
