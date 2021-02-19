<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Country My Job</title>
    
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
</style>
</head>

<body>
    
    <!-- Wrapper -->
    <div class="careerfy-wrapper">

        <!-- Header -->
        <header id="careerfy-header" class="careerfy-header-one">
            <div class="container-fluid">
                <div class="row">
                    <aside class="col-md-2" style="padding: 0;"> <a href="<?= base_url();?>" class="careerfy-logo"><img src="<?= base_url()?>/assets/images/logo1.png" alt=""></a> </aside>
                    <aside class="col-md-5" style="padding: 0;">
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
                                    <li class=""><a href="<?= base_url();?>">Home</a>
                                        <!-- <ul class="sub-menu">
                                        </ul> -->
                                    </li>
                                     <li><a href="<?= base_url('find-jobs');?>">Find Job</a>
                                        <ul class="sub-menu">
                                         
                                             <!-- <li><a href="<?= base_url('Users/job_detail');?>">Job Detail</a></li> -->
                                             
                                            
                                        </ul>
                                    </li>
                                    <li class=""><a href="">Services</a></li>
                                    <li class=""><a href="">Job Alert</a></li>
                                     <!-- <li class="" data-toggle="modal" data-target="#myModal"><a href="javascript:void(0)">Contact</a></li> -->
                                   

                                           <!--  <li><a href="<?= base_url('Users/profile');?>">Complete profile</a></li>

                                            <li id="hr"><a class="
                                                <?php
                                                    if (!$this->session->userdata('email') )
                                                    {
                                                        echo "careerfy-open-signup-tab";
                                                    }
                                                ?>
                                                " href="

                                                <?php
                                                if ($this->session->userdata('email') )
                                                    {
                                                        echo base_url('Users/candidate_profile');
                                                    }
                                                    else
                                                    {
                                                    echo "javascript:void(0)";
                                                       } 

                                                ?>

                                                ">Profile Setting</a></li>

                                            <li><a href="<?= base_url('Users/candidate_detail');?>">Candidates Detail</a></li> -->
                                           <!--  <li><a href="candidate-dashboard-resume.html">Candidate Resume</a></li>
                                            <li><a href="candidate-dashboard-saved-jobs.html">Saved Jobs</a></li>
                                            <li><a href="candidate-listings.html">Candidate Listings</a></li>
                                            <li><a href="candidate-grid.html">Candidate Grid</a></li>
                                            <li><a href="candidate-detail.html">Candidate Detail</a> -->
                                                <!-- <ul class="sub-menu">
                                                    <li><a href="candidate-detail.html">Candidate Detail I</a></li>
                                                    <li><a href="candidate-detail-two.html">Candidate Detail II</a></li>
                                                    <li><a href="candidate-detail-three.html">Candidate Detail III</a></li>
                                                    <li><a href="candidate-detail-four.html">Candidate Detail IV</a></li>
                                                </ul> -->
                                            <!-- </li>
                                        </ul>
                                    </li> -->
                                    
                                 
                                </ul>
                            </div>
                      </nav>
                    </aside>
                    <aside class="col-md-5">
                        <div class="careerfy-right" style="padding-top: 10px;">
                            <!-- <ul class="careerfy-user-section">
                                <li><a class="careerfy-color careerfy-open-signin-tab" href="#">Register</a></li>
                                <li><a class="careerfy-color careerfy-open-signup-tab" href="#">Sign in</a></li>
                            </ul> -->
                            <a href="<?= base_url('')?>Employer" class="careerfy-simple-btn careerfy-bgcolor careerfy-open-signup-tab2"><span><i class="fas fa-users"></i>For Employers</span></a>
                        </div>
                    </aside>
                </div>
            </div>
        </header>

  <!-- The Modal -->
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
  
        
        <!-- Modal body -->
        <div class="modal-body">
                             <form class="form-group"  action="<?=base_url('Users/lead1')?>" method="post"    >
                    <div class="formtext">
                        <center><h3 style="color: #000;">GET IN TOUCH</h3></center>
                         </div>
                        <div class="form-group1"  >
                            <input type="text" name="name" required="" class="form-control"  placeholder="Name">
                         </div>
                         <p></p>
                       <div class="form-group1">
                            <input type="text"name="email" required="" class="form-control"  placeholder="Email">
                         </div>
                         <p></p>
                        <div class="form-group1">
                            <input pattern="[6-9]{1}[0-9]{9}" required="" type="text" name="phone" class="form-control"  placeholder="Phone" id="txtPhoneNo" onkeypress="return isNumber(event)" required="" placeholder="Enter Your Phone Number" maxlength="10">
                         </div>
                          <div class="form-group1">
                            
                            <select name="location" required="" style="border:none;background:none;border-bottom: 1px solid #888;">
                             <option value="" >Select City</option>
                                        <?php

$sql=$this->db->query("SELECT distinct(city) as city FROM `city_name`");
$ciyt=$sql->result();
                                        foreach ($ciyt as $key )
                                         {
                                            ?>
                                           
                                        <option ><?= $key->city?></option>
                                        <?php
                                    }
                                    ?>
                             
                              
                            </select>
                          </div>
                          <div class="form-group1">
                          <center> <button type="submit" class="btn btn-primary" style="padding: 5px;width: 100%;margin-top:20px;" >Get a Call Back</button></center>
                        </div>


                    
                     
                 
           
        </form>
        </div>
        
        <!-- Modal footer -->
    
      </div>
    </div>
  </div>
  
        <script src="https://kit.fontawesome.com/e6726924f5.js"></script>
