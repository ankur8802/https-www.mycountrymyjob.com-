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
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
    
    </style>
</head>

<body>
    
    <!-- Wrapper -->
   
 <div class="careerfy-wrapper">

        <!-- Header -->
        <header id="careerfy-header" class="careerfy-header-one">
            <div class="container-fluid">
                <div class="row">
                    <aside class="col-md-2"> <a href="<?= base_url('../');?>" class="careerfy-logo"><img src="<?= base_url()?>/assets/images/logo1.png" alt="" style="width:100%;margin-top:7px; "></a> </aside>
                    <aside class="col-md-5">
                        <nav class="careerfy-navigation">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#careerfy-navbar-collapse-1" aria-expanded="false">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <div class="collapse navbar-collapse" id="careerfy-navbar-collapse-1" style="padding-top: 7px;">
                                <ul class="navbar-nav">
                                    <li class=""><a href="<?= base_url('../');?>">Home</a>
                                        <ul class="sub-menu">
                                           <!--  -->
                                            
                                             
                                            
                                        </ul>
                                    </li>
                                     <li><a href="<?= base_url('../');?>">Job Seeker</a>
                                        <ul class="sub-menu">
                                          
                                            <!-- li><a href="<?= base_url('index.php/Employee/job_detail');?>">Job Detail</a></li> -->
                                             
                                        </ul>
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
                                   <!--  <li><a href="#">For Candidates</a>
                                        <ul class="sub-menu"> -->
                                           <!--  <li><a href="candidate-dashboard-applied-jobs.html">Applied Jobs</a></li>
                                            <li><a href="candidate-dashboard-changed-password.html">Changed Password</a></li>
                                            <li><a href="candidate-dashboard-cv-manager.html">CV Manager</a></li>
                                            <li><a href="candidate-dashboard-job-alert.html">Job Alert</a></li> -->

                                           <!--  <li><a href="<?= base_url('index.php/Employer/profile');?>">Complete profile</a></li>

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
                                                        echo base_url('index.php/Employer/candidate_profile');
                                                    }
                                                    else
                                                    {
                                                    echo "javascript:void(0)";
                                                       } 

                                                ?>

                                                ">Profile Setting</a></li>

                                            <li><a href="<?= base_url('index.php/Users/candidate_detail');?>">Candidates Detail</a></li> -->
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
                    <aside class="col-md-5" style="padding: 10px;">
                        <div class="careerfy-right">
                            <ul class="careerfy-user-section">
                                <li><a class="careerfy-color careerfy-open-signin-tab" href="#">Register</a></li>
                                <li><a class="careerfy-color careerfy-open-signup-tab" href="#">Sign in</a></li>
                            </ul>
                            <a class="careerfy-simple-btn careerfy-bgcolor careerfy-color" id="postjob" style="cursor: pointer;"><span> <i class="careerfy-icon careerfy-arrows-2"></i> Post Job</span></a>
                        </div>
                    </aside>
                </div>
            </div>
        </header>