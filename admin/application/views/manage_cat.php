
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
          <h1 style="font-size:25px;">Manage Functional & Category </h1>
          <div class="row" style="background:white;padding:20px;box-shadow:0px 0px 9px silver">
              <div class="col-md-12">
                <h2>Functional</h2>
                <div class="table-responsive">
                <table id="dataTableExample1" class="table table-bordered table-hover">
  <thead>
    
    <tr>
      
     <th scope="col">S.No.</th>
      <th>Functional</th>
       </tr>
  </tbody>

 <tbody>
  <?php 
          $i=1;
         foreach($cat as $r)
         { 
            ?>
<form action="<?= base_url("index.php/Admin_controller/update_cat/$r->id") ?>" method="post">
  <tr>
 <td style="font-size: 12px;padding: 5px"><?php echo $i ?></td>
<td style="font-size: 12px;padding: 5px"><input type="text" value="<?php echo $r->functional ?>" name="functional">
  <input type="submit" class="btn btn-sm" value="Edit" style="background:#66bb6a;color: white;border-radius:0px;font-size: 12px;padding: 2px 5px;height: 25px;border:none;">
  <a href="<?= base_url("index.php/Admin_controller/delete_cat/$r->id") ?>"><button type='button' style="background:#b71c1c;color: white;border-radius:0px;font-size: 12px;padding: 2px 5px;border:none;height: 25px">Delete</button></a>
<?php
  if($r->status=='activate')
  {
    echo "<a href='".base_url("index.php/Admin_controller/deactivate_cat/$r->id")."'><button type='button' style='background:#e65100;color: white;border-radius:0px;font-size: 12px;padding: 2px 5px;border:none;height: 25px'>Deactivate</button></a>";
  }
  else
  {
    echo "<a href='".base_url("index.php/Admin_controller/activate_cat/$r->id")."'><button type='button' style='background:#00c853;color: white;border-radius:0px;font-size: 12px;padding: 2px 5px;border:none;height: 25px'>Activate</button></a>";
  }

?>


</td>
</tr>
</form>
<?php 
$i++;
}

?>
</tbody>
</table>

                            </div>
                       </div>


              <div class="col-md-12">
                <h2>Category</h2>
                <div class="table-responsive">
                <table id="dataTableExample1" class="table table-bordered table-hover">
  <thead>
    
    <tr>
      
     <th scope="col">S.No.</th>
      <th>Category</th>
       </tr>
  </tbody>

 <tbody>
  <?php 
          $i=1;
         foreach($sub_cat as $r)
         { 
            ?>
<form action="<?= base_url("index.php/Admin_controller/update_sub_cat/$r->id") ?>" method="post">
  <tr>
 <td style="font-size: 12px;padding: 5px"><?php echo $i ?></td>
<td style="font-size: 12px;padding: 5px"><input type="text" class="form-control" value="<?php echo $r->category ?>" name="category"><br>
  <input type="submit" class="btn btn-sm" value="Edit" style="background:#66bb6a;color: white;border-radius:0px;font-size: 12px;padding: 2px 5px;height: 25px;border:none;">
  <a href="<?= base_url("index.php/Admin_controller/delete_sub_cat/$r->id") ?>"><button type='button' style="background:#b71c1c;color: white;border-radius:0px;font-size: 12px;padding: 2px 5px;border:none;height: 25px">Delete</button></a>
<?php
  if($r->status=='activate')
  {
    echo "<a href='".base_url("index.php/Admin_controller/deactivate_sub_cat/$r->id")."'><button type='button' style='background:#e65100;color: white;border-radius:0px;font-size: 12px;padding: 2px 5px;border:none;height: 25px'>Deactivate</button></a>";
  }
  else
  {
    echo "<a href='".base_url("index.php/Admin_controller/activate_sub_cat/$r->id")."'><button type='button' style='background:#00c853;color: white;border-radius:0px;font-size: 12px;padding: 2px 5px;border:none;height: 25px'>Activate</button></a>";
  }

?>


</td>
</tr>
</form>
<?php 
$i++;
}

?>
</tbody>
</table>

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
<script type="text/javascript">
  <?php
     if($this->session->flashdata('done'))
     {
      ?>
               swal({
                       title: "",
                       text: "Done",
                       icon: "success",
                        
                     });

      <?php }?>
</script>
</body>

</html>
