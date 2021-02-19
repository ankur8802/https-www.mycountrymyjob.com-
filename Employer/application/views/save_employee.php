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
        <div class="careerfy-main-content" >
            
            <!-- Main Section -->
            <div class="careerfy-main-section careerfy-dashboard-full" >
                <div class="container">
                    <div class="row">

                         <?php include('side_nav.php') ?>
                        <div class="careerfy-column-9">
                            <div class="careerfy-typo-wrap">
                                <div class="careerfy-employer-box-section" >
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
                                                    $row=$this->db->query("select * from candidate_registration WHERE id='$re->employee_id'");
                                                    $userdata=$row->row();
                                                    $image=$userdata->photo;
                                                    if($image)
                                                    {
                                                    ?>
                                                    <a href="#" class="careerfy-applied-jobs-thumb"><img src="<?php echo base_url('../upload/'. $image)?>" alt="" style="height:100px;width:100px;border:1px solid black;border-radius:4px;   "></a>
                                                    
                                                    <?php
                                                }
                                                ?>
                                                    <div class="careerfy-applied-jobs-text">
                                                        <div class="careerfy-applied-jobs-left"style="margin-left:20px;margin-top:25px;">
                                                            <span><?= $re->category?></span>
                                                            <h2><a href="<?= base_url("index.php/Employee/candidate_detail/$re->employee_id")?>"><?= $re->employee_name?></a></h2>
                                                            <ul>
                                                                <li><i class="fa fa-map-marker"></i> <?= $re->state?>, <?= $re->city?></li>
                                                                <!-- <li><a href="#"><?= $re->skill?></a></li> -->
                                                                <li><i class="careerfy-icon careerfy-calendar"></i> <?= $re->date?></li>
                                                            </ul>
                                                        </div>
                                                         <!-- <a href="<?= base_url("index.php/Users/delete_row/$re->job_id")?>" class="careerfy-savedjobs-links"><i class="careerfy-icon careerfy-rubbish"style="margin-top:50px;"></i></a> -->
                                                         <a href="<?= base_url("index.php/Employee/candidate_detail/$re->employee_id")?>" class="careerfy-savedjobs-links"><i class="careerfy-icon careerfy-view"style="margin-top:50px;"></i></a> 
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
