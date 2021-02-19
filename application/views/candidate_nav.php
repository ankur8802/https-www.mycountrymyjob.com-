<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Coutry My Job</title>
    
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">

    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
     <style>  
        
       .{
              animation-iteration-count: infinite;
            }

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
#user-nav-profile{
   position: absolute;
   right: 0;
   z-index:1;
   background:#fff;
   border-radius: 8px;
   opacity: 0;
   z-index:1;
   width: 160px;
  transition: opacity 0.8s;
}
.user-nav-profile-show{
    
  
}
.user-nav-profile-show:hover + #user-nav-profile{
    
 opacity: 1;

}
#user-nav-profile:hover{
   opacity: 1;
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
                    <aside class="col-md-2" style="padding: 0;"> <a href="<?= base_url(Users);?>" class="careerfy-logo"><img src="<?= base_url()?>/assets/images/logo1.png" alt=""></a> </aside>
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
                                    <li class=""><a href="<?= base_url(Users);?>">Home</a>
                                        <!-- <ul class="sub-menu">
                                        </ul> -->
                                    </li>
                                     <li><a href="<?= base_url('find-jobs');?>">Find Job</a>
                                        
                                    </li>
<!--
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
                                    </li>-->
                                    <li><!-- <a href="#">For Candidates</a> -->
                                        <ul class="sub-menu">
                                           <!--  <li><a href="candidate-dashboard-applied-jobs.html">Applied Jobs</a></li>
                                            <li><a href="candidate-dashboard-changed-password.html">Changed Password</a></li>
                                            <li><a href="candidate-dashboard-cv-manager.html">CV Manager</a></li>
                                            <li><a href="candidate-dashboard-job-alert.html">Job Alert</a></li> -->

                                           <!--  <li><a href="<?= base_url('Users/profile');?>">Complete profile</a></li> -->

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

                                                ">Edit Profile</a></li>
                                              <li><a href="<?= base_url('Users/change_password');?>">Change Password</a></li>
                                            <li><a href="<?= base_url('Users/candidate_detail');?>">Candidates Detail</a></li>
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
                                            </li>
                                        </ul>
                                    </li>
                                    <!---<li><a href="#">For Employers</a>
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
                                 <li><a href="contact-us.html">Contact</a></li>-->
                                 
                                </ul>
                            </div>
                      </nav>
                    </aside>
                    <aside class="col-md-5">
                        <div class="careerfy-right">
                            <ul class="careerfy-user-section" style="margin-top:5%;">
                                <li class="swing animated" style="padding: 0;"><img src="<?= base_url()?>/assets/images/alert.png" style="width: 42px;height:42px;padding:6px;"></li>

                              
                               <li style="position: relative;padding:0;">
                                
                                <img src="<?= base_url()?>/assets/images/user.png" class="fas fa-user-circle user-nav-profile-show"  style="padding:6px;width: 42px;height:42px;">
                                <div class="" style="" id="user-nav-profile">
                                    <ul>
                                        <!-- <li><a href="#">Job Alert</a></li> -->
                                        <li><span><a class="nav-link" href="<?= base_url('Users/login5')?>">Dashboard</a></span> </li>
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

                                                ">Account Setting</a></li>
                                        
                                
                                       <li>
                                             <?php
                            if($this->session->userdata('email'))
                                { 
                                    ?>
                            <a class="nav-link" href="<?= base_url('Users/logout')?>"><i class="fa fa-power-off"></i> Sign out</a>
                            <?php
                        }
                        ?> </li>
       
                                        
                                        
                                    </ul>
                                </div>
                               </li>
                            </ul>
                                  
                        </div>
                    </aside>
                </div>
            </div>
        </header>
      
         
