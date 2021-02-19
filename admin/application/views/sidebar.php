                             <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url("index.php/Admin_controller/index")?>" style="background:white;">
       
        <div class="sidebar-brand-text mx-3"><img src="<?= base_url()?>assets2/img/logo.png" style="max-width:100%;"></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="<?= base_url("Admin_controller/index")?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
     <!--  <hr class="sidebar-divider"> -->

      <!-- Heading -->
     <!--  <div class="sidebar-heading">
       General Settings
      </div>
 -->
      <!-- Nav Item - Pages Collapse Menu -->
   <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>Manage Employers</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Manage Employers</h6>
   <a class="collapse-item" href="<?= base_url('index.php/Admin_controller/lead')?>">Employer lead</a>
           <a class="collapse-item" href="<?= base_url('index.php/Admin_controller/authenticate')?>">Authenticate Employer</a>
          <a class="collapse-item" href="<?= base_url("index.php/Admin_controller/view_employer")?>"> Employer Details</a>
        
          
          </div>
        </div>
      </li>


   <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo2" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>Manage Jobs</span>
        </a>
        <div id="collapseTwo2" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Manage Jobs</h6>

           <a class="collapse-item" href="<?= base_url("index.php/Admin_controller/authenticate1")?>">All Jobs</a>
          
          </div>
        </div>
      </li>
      <!-- Nav Item - Utilities Collapse Menu -->
     

      <!-- Divider -->
<!--       <hr class="sidebar-divider"> -->

      <!-- Heading -->
      <!-- <div class="sidebar-heading">
        Category Management
      </div>
 -->
      <!-- Nav Item - Pages Collapse Menu -->
       <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-folder"></i>
          <span>Add Attributes</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">

<a class="collapse-item" href="<?= base_url('index.php/Admin_controller/manage')?>">Add Attributes</a>

<a class="collapse-item" href="<?= base_url('index.php/Admin_controller/edit_attribute')?>">Manage Job Categories
</a>


<!-- <a class="collapse-item" href="<?= base_url('index.php/Admin_controller/sub_category')?>">Add Sub Category</a>
<a class="collapse-item" href="<?= base_url('index.php/Admin_controller/subsub_category')?>">Add Sub Sub Category</a>  -->
           <!-- <div class="collapse-divider"></div> -->
            <!-- <h6 class="collapse-header">Other Pages:</h6>
            <a class="collapse-item" href="404.html">404 Page</a>
            <a class="collapse-item" href="blank.html">Blank Page</a> --> 
        </div>
        </div>
      </li>
<!--  <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-folder"></i>
          <span>Manage Users</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded"> -->
<!-- <a class="collapse-item" href="<?= base_url('index.php/Admin_controller/manage')?>">Add Attributes</a> -->
<!-- <a class="collapse-item" href="<?= base_url('index.php/Admin_controller/sub_category')?>">Add Sub Category</a>
<a class="collapse-item" href="<?= base_url('index.php/Admin_controller/subsub_category')?>">Add Sub Sub Category</a>  -->
           <!-- <div class="collapse-divider"></div> -->
            <!-- <h6 class="collapse-header">Other Pages:</h6>
            <a class="collapse-item" href="404.html">404 Page</a>
            <a class="collapse-item" href="blank.html">Blank Page</a> --> 
        <!-- </div>
        </div>
      </li> -->

     <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Manage Users</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
<a class="collapse-item" href="<?= base_url('index.php/Admin_controller/user_detail')?>">Users Details</a>
 <a class="collapse-item" href="<?= base_url('index.php/Admin_controller/user_applied')?>">User Applied Job</a>

        </div>
      </li>


     <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities2" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Manage</span>
        </a>
        <div id="collapseUtilities2" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
<a class="collapse-item" href="<?= base_url('index.php/Admin_controller/pagination')?>">Pagination</a>
 <a class="collapse-item" href="<?= base_url('index.php/Admin_controller/top_companies')?>">Top Companies Logo</a>
  <a class="collapse-item" href="<?= base_url('index.php/Admin_controller/add_slider')?>">Add Slider Image</a>

        </div>
      </li>

      <!-- Heading -->
    
<!--  <hr class="sidebar-divider d-none d-md-block">
      <div class="sidebar-heading">
        CAB Mmanagement
      </div>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('index.php/Admin_controller/registercab')?>">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Register Driver / CAB</span></a>
      </li> -->
      <!-- Nav Item - Pages Collapse Menu -->
 

      <!-- Nav Item - Charts -->
       <!-- <hr class="sidebar-divider d-none d-md-block">
      <div class="sidebar-heading">
       Add Jobs Attributes
      </div>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('index.php/Admin_controller/manage')?>">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Jobs Attributes</span></a>
      </li>


       <hr class="sidebar-divider d-none d-md-block">
      <div class="sidebar-heading">
        User Management
      </div>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('index.php/Admin_controller/manageproducts')?>">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>User Details</span></a>
      </li> -->
<!--  -->
  <!-- <hr class="sidebar-divider d-none d-md-block">
 <div class="sidebar-heading">
      Attributes Management
      </div>
           <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Add Attributes</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
<a class="collapse-item" href="<?= base_url('index.php/Admin_controller/add_color')?>">Add Colour</a>
<a class="collapse-item" href="<?= base_url('index.php/Admin_controller/add_material')?>">Add Material</a>
<a class="collapse-item" href="<?= base_url('index.php/Admin_controller/add_fabric')?>">Add Fabric</a> -->
<!-- <a class="collapse-item" href="#"> Seller Management</a> -->

            <!-- <div class="collapse-divider"></div>
            <h6 class="collapse-header">Other Pages:</h6>
            <a class="collapse-item" href="404.html">404 Page</a>
            <a class="collapse-item" href="blank.html">Blank Page</a>
          </div> -->
        <!-- </div>
      </li>
 -->
      <!-- Nav Item - Tables -->


      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>
           <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

       
            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $this->session->userdata("email") ?></span>
                <img class="img-profile rounded-circle" src="<?= base_url()?>/assets2/img/2.jpg">
              </a>
           
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
   
                <a class="dropdown-item" href="<?= base_url('index.php/Admin_controller/logout')?>" >
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>
          <!-- Topbar Search -->
        

          <!-- Topbar Navbar -->
         

        </nav>