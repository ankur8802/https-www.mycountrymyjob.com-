<!DOCTYPE html>
<html lang="en">


<?php
    if ($this->session->userdata('email') )
    {
       include('candidate_nav.php');
    }
    else
    {
        
        include('nav.php');
    }
?>
<body>

  
        <!-- SubHeader -->
           
            <div class="clearfix"></div>
            <div class="careerfy-breadcrumb">
                <ul>
                    <!-- <li><a href="#">Home</a></li>
                    <li><a href="#">Pages</a></li>
                    <li>Candidates</li> -->
                    <li>Save Jobs</li>
                </ul>
            </div>
       
        <!-- SubHeader -->

        <!-- Main Content -->
        <div class="careerfy-main-content" style="background: #e9e9e9">
            
            <!-- Main Section -->
            <div class="careerfy-main-section careerfy-dashboard-full">
                <div class="container">
                    <div class="row">

                        <aside class="careerfy-column-3 sticky" >
                            <div class="careerfy-typo-wrap" >
                                <div class="careerfy-employer-dashboard-nav" style="background: white">
                                    <figure>
                                        <a href="#" class="employer-dashboard-thumb"><img src="<?php echo base_url('upload/'. $data->photo)?>" alt="" style="width: 140px ; height: 140px;"></a>
                                       
                                        <figcaption>
                                            <div class="careerfy-fileUpload">
                                               <!--  <span><i class="careerfy-icon careerfy-add"></i> Upload Photo</span> -->
                                                <input type="file" class="careerfy-upload" />
                                            </div>
                                            <h2><?php echo $data->name;?></h2>
                                            <span class="careerfy-dashboard-subtitle"><?php echo $data->category;?></span>
                                        </figcaption>
                                    </figure>
                                    <ul>
                                        
                                    <li ><a href="<?= base_url('Users/candidate_profile');?>"><i class="careerfy-icon careerfy-user"></i> My Profile</a></li>
                                       <!--  <li><a href="#"><i class="careerfy-icon careerfy-resume"></i> My Resume</a></li> -->
                                        <li class="active"><a href="<?= base_url('Users/save_job');?>"><i class="careerfy-icon careerfy-heart"></i> Saved jobs</a></li>
                                        <li><a href="<?= base_url('Users/applied');?>"><i class="careerfy-icon careerfy-briefcase-1"></i> Applied jobs</a></li>
                                        <!-- <li><a href="#"><i class="careerfy-icon careerfy-alarm"></i> Job Alerts</a></li>
                                        <li><a href="candidate-dashboard-cv-manager.html"><i class="careerfy-icon careerfy-id-card"></i> CV Manager</a></li> -->
                                        <li><a href="<?= base_url('Users/change_password');?>"><i class="careerfy-icon careerfy-multimedia"></i> Change Password</a></li>
                                        <li><a href="<?= base_url('Users/logout')?>"><i class="careerfy-icon careerfy-logout"></i> Logout</a></li>
                                    </ul>
                                </div>
                            </div>
                        </aside>
                        <div class="careerfy-column-9">
                            <div class="careerfy-typo-wrap">
                                <div class="careerfy-employer-box-section" style="background: white">
                                    <div class="careerfy-profile-title" >
                                        <h2>Save Jobs</h2>
                                        
                                    </div>

                                <?php
                                
                                    foreach ($job as $re) 
                                    {
                                 
                                ?> 
                                    <div class="careerfy-applied-jobs">
                                        <ul class="careerfy-row">
                                            <li class="careerfy-column-12">
                                                <div class="careerfy-applied-jobs-wrap">
                                                     <?php
                                                    $row=$this->db->query("select * from company_registration WHERE company_name='$re->company_name'");
                                                    $userdata=$row->row();
                                                    $image=$userdata->image;
                                                    if($image)
                                                    {
                                                    ?>
                                                    <a href="#" class="careerfy-applied-jobs-thumb"><img src="<?php echo base_url('Employer/upload/'. $image)?>" alt="" style="height:100px;width:100px;border:1px solid black;border-radius:4px;   "></a>
                                                    
                                                    <?php
                                                }
                                                ?>
                                                    <div class="careerfy-applied-jobs-text">
                                                        <div class="careerfy-applied-jobs-left"style="margin-left:20px;margin-top:25px;">
                                                            <span><?= $re->category?></span>
                                                            <h2><a href="<?= base_url("Users/job_detail/$re->job_id")?>"><?= $re->company_name?></a></h2>
                                                            <ul>
                                                                <li><i class="fa fa-map-marker"></i> <?= $re->state?>, <?= $re->city?></li>
                                                                <!-- <li><a href="#"><?= $re->skill?></a></li> -->
                                                                <li><i class="careerfy-icon careerfy-calendar"></i> <?= $re->date?></li>
                                                            </ul>
                                                        </div>
                                                         <!-- <a href="<?= base_url("Users/delete_row/$re->job_id")?>" class="careerfy-savedjobs-links"><i class="careerfy-icon careerfy-rubbish"style="margin-top:50px;"></i></a> -->
                                                         <a href="<?= base_url("Users/job_detail/$re->job_id")?>" class="careerfy-savedjobs-links"><i class="careerfy-icon careerfy-view"style="margin-top:50px;"></i></a> 
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <?php
                                }
                              ?>     
                                 
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
            <!-- Main Section -->

        </div>
        <!-- Main Content -->
        
    


    </div>

</body>
          <?php
      include('footer.php');
      ?>


</html>
