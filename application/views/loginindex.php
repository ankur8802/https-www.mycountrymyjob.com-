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

<link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">


<style>
    

*{
  font-family: 'Poppins', sans-serif;

}

         

    .careerfy-parallex-full{
        background: #fff!important;
        border: none;
    }
@media only screen and (max-width: 766px){
.careerfy-typo-wrap-main{
  padding: 0;
}
.careerfy-banner-search ul li, .careerfy-banner-search ul li:last-child {
 
      width: 100%;
}
.careerfy-banner-search input[type="text"]{

  margin-bottom: 1%;
  border-radius: 4px;
}
 .careerfy-select-style select{
  margin-bottom: 1%;
  border-radius: 4px;
 }
  .careerfy-banner-search input[type="submit"]{

     border-radius: 4px;
  }
   .left-sec{
    padding: 0!important;
  }
  .careerfy-banner-search {
    padding: 0;
  }
  .right-section{
    padding: 0;
  }
  .right-section-two{
    padding: 0;
    width: 100%;
  }
  .right-sec{
    margin:6%!important;
  }
}
@media only screen and (min-width: 1000px) {

.careerfy-typo-wrap-main{
        height: 200px;
        padding:0px;
    

    }
}
@media only screen and (max-width: 1055px) {


.left-sec{
    width: 100%;
    padding: 20px;
}
}
.desc p{
  margin: 0px;
  margin-bottom: 10px;
  color: #000;
}
.userskils p{
  margin: 0;
  
}
.userskils span{
  font-size: 12px;
  color: #000;
}
@media only screen and (max-width: 768px) {
.second-section-left{
  margin: 0!important;
  padding: 0px!important;
  width: 100%;
}
.right-section{
  width: 100%;
}

}
@media only screen and (max-width: 999px) {
       
}
.viewall:hover a{
  color: #999;
}
.viewall a{
  color: #9ebd23;
  transition: all 0.5s;

}
.careerfy-banner-search input[type="text"] {

   height: 40px;
}
.careerfy-select-style select{
  height: 40px;
}
.careerfy-banner-search input[type="submit"]{
  height: 40px;
}
.careerfy-banner-search ul li.careerfy-banner-submit i{
  height: 40px;
  padding-top: 9px;
}
.careerfy-select-style:after{
  top: 10px;
}
.careerfy-banner-search ul li i{
  top: 10px;
}
</style>

<body>
      <div class="careerfy-banner careerfy-typo-wrap careerfy-typo-wrap-main" style="padding-left: 0;">
            <span class="careerfy-banner-transparent"></span>
           
         <div class="careerfy-banner-caption">
                 <div class="careerfy-row" style="margin:0">
                    <div class="careerfy-column-8 left-sec" style="margin-top:70px;width: 100%;">
                    
                    <form class="careerfy-banner-search " action="<?=base_url('find-jobs')?>" method="post" style="width: 65%;">
                        <ul>
                            <li>
                                <input  name="title" id="title" placeholder="Keywords"  type="text">
                                   
                                  
                                
                            </li>
                            <li>
                                <input name="state" id="title" placeholder="Location"  type="text">
                                <i class="careerfy-icon careerfy-location"></i>
                            </li>
                            <li>
                                <div class="careerfy-select-style">
                                   
                                        <select name="experience" >
                                        <option value="">Choose</option>
                                         
                                            <?php

                                                for($i=0;$i<31;$i++)
                                                {
                                            ?>
                                                        <option 
                                                        
                                                         value="<?=$i?> Year"><?=$i ?> Year </option>
                                            <?php
                                                }
                                            ?>
                                    </select>
                                </div>
                            </li>
                            <li class="careerfy-banner-submit"> <input type="submit" value=""> <i class="careerfy-icon careerfy-search"></i> </li>
                        </ul>
                    </form>
                
                </div>
                
            </div>
        </div>
        </div>
      <div class="clearfix"></div>
       
        <div class="careerfy-row" style="margin:0;background: #EEEEEE;">
          <div class="inner-row-mr" style="margin: 0px 5%;">
          <div class="col-md-8" style="margin-left:2%;">

        <div class="second-section-left" style="background: #fff;padding: 0;margin-top: 50px!important;margin: 20px;border-radius:4px;box-shadow: 5px 10px 18px #888888;border: 1px solid #999;">
          <div class="inner-second-section" style="border-bottom:1px solid #999;">
            <?php

                            $span=$data->skill;
                            $query='';
                            $array=explode(',',$span);
                            $k=count($array);
                            for($i=0;$i<$k;$i++)
                            {


                               $query=$query.'skill like "%'.$array[$i].'%" or ';
                            }
                                  $string_rev=strrev($query);

$cut_string=substr($string_rev,3);
$query=strrev($cut_string);      
                                        $row=$this->db->query("select * from job_search WHERE ($query) and status='accept'");
                                    $userdata=$row->row();
                                      $result=$row->result();



                                if($userdata)
                                { 
                                ?>
          <center><h5 style="margin: 0;"><?php echo count($result);?> New Recommended Job(s)</h5></center>
          </div>
          <div class="jobs-Rec" style="margin-left: 10px;" >
          
           <div class="careerfy-job careerfy-joblisting-classic">
                                    <ul class="careerfy-row" style="margin:0;">
                                        <li class="careerfy-column-12" style="margin: 0">
                                            <div class="careerfy-joblisting-classic-wrap" style="border-radius:8px;border: none;">
                                                <!-- <figure><a href="#"><img src="<?= base_url()?>/assets/extra-images/job-listing-logo-1.png" alt=""></a></figure> -->
                                                <div class="careerfy-joblisting-text">
                                                    <div class="careerfy-list-option">
                                                       <h2><i class="careerfy-icon careerfy-filter-tool-black-shape"></i> <?= $userdata->company_name?></h2>
                                                       <h2><a href="#"><?= $userdata->industry?></a></h2>
                                                       <?= $userdata->category?>
<!--                                                        <h2></h2>-->
                                                        <ul>
                                                            <!-- <li>Web Development</li> -->
                                                            <li><span> Experience: <span><?php $experience="$userdata->experience"." "."$userdata->experience1"; ?><?php echo  $experience?></span></span></li>
                                                        </ul>
                                                            <div class="skills">
                                                                <span>Skills: <a href="#"><?= $userdata->skill?></a><a href="#"> </a><a href="#"> </a></span>
                                                            </div>
                                                            <div class="salary">
                                                                <span><span>Salary: </span><?php
                                                               $salary="$userdata->salary"." "."$userdata->salary1";
                                                                $not_disclosed=$userdata->not_disclosed;
                                                                if($salary)
                                                                {

                                                                    ?>
                                                                <span><span></span><?php echo $salary?></span>
                                                                <?php
                                                            }
                                                            else
                                                            {
                                                                ?>
                                                                <span><span></span><?php echo $not_disclosed?></span>
                                                                <?php
                                                            }
                                                            
                                                                ?></span>
                                                            </div>
                                                           <a href="<?= base_url("Users/job_detail/$userdata->id")?>"> <button class="btn btn-success" style="padding: 5px;background: #9EBD23;">Know More</button></a>
                                                            </div>
                                                       
                                                    </div>
                                                    <div class="careerfy-job-userlist">
                                                        
                                                       <!--  <a href="#" class="careerfy-job-like"><i class="fa fa-heart"></i></a> -->
                                                        
                                                  </div>
                                                    <div class="rec-date" style="text-align: right;margin-top: 10%;">
                                                           <span style="display: block;margin-top:10px;"><i class="careerfy-icon careerfy-maps-and-flags"></i><?= $userdata->city?></span>
                                                            <span><?= $userdata->state?></span>
                                                        </div>
                                                <div class="clearfix"></div>
                                                </div>
                                        
                                        </li>
                                    </ul>
                                </div>
                                <div class="viewall" style="text-align: right;margin-right: 10px;">
                                <p><a href="<?= base_url('Users/viewall');?>">VIEW ALL</a></p>
                                
                            </div>
                          <?php
                            
                          }
                          else
                          {
                          
                          
                            echo'<p style="color:#fff;margin-left:45%;">Data Not Found </p>';
                          }
                          ?>
          </div>

        </div>
        
 <div class="careerfy-row" style="background: #EEEEEE;padding:10px 20px 20px 20px;">

        <div class="careerfy-column-6 right-section">
          
           <div class="savedjob" style="border: 1px solid #999;padding: 0;margin-top: 20px;border-radius:4px;background: #fff;box-shadow: 5px 10px 18px #888888">
            <?php
                                
                                   
                              
                                       {
                                        $row=$this->db->query("select * from save_job where email='$data->email'");
                                    $save=$row->result();
                                    ?>
            <div class="inner-second-section" style="border-bottom: 1px solid #999;">
            <center><h5 style="margin: 0;">Saved Job(s)</h5></center>
          </div>
          <br>
          <div class="savedjobstotal">
          <p style="margin-left:10px;">You have <?php echo count($save);?> saved job(s) till now.</p>

          </div>
          <div class="viewall" style="text-align: right;margin-right: 10px;">
                                <p><a href="<?= base_url('Users/save_job');?>">VIEW ALL</a></p>
                            </div>
          <?php
        }
        ?>
        
              </div>

</div>
        <div class="careerfy-column-6 right-section-two">
           <div class="applyjob" style="border: 1px solid #999;padding: 0;margin-top: 20px;border-radius:4px;background: #fff;box-shadow: 5px 10px 18px #888888">
             <?php
                                
                                   
                              
                                       {
                                        $row=$this->db->query("select * from applied_job where email='$data->email'");
                                    $apply=$row->result();
                                    ?>
            <div class="inner-second-section" style="border-bottom: 1px solid #999;">
            <center><h5 style="margin: 0;">Application Summary</h5></center>
          </div>
          <br>
          <div class="applyjobstotal">
          <p style="margin-left:10px;">You have applied for <?php echo count($apply);?> JOB(s)</p>

          </div>
          <div class="viewall" style="text-align: right;margin-right: 10px;">
                                <p><a href="<?= base_url('Users/applied');?>">VIEW ALL</a></p>
                            </div>
          <?php
        }
        ?>

        
              </div>

        </div>
    </div>
    <div class="clearfix"></div>
</div>

   
         <div class="col-md-3 right-sec zoomIn animated slow" style="border: 1px solid #999;background:#fff;color:#000;text-align:center;border-radius: 8px;padding: 30px;margin-top:50px;min-height:300px;box-shadow: 5px 10px 18px #888888">
                  <div class="profile">
                    <div class="userimg">
                      <!-- <a href="#" class="employer-dashboard-thumb"><img src="<?php echo base_url('upload/'. $data->photo)?>" alt="" style="width: 140px ; height: 140px;"></a> -->
                       <img src="<?php echo base_url('upload/'. $data->photo)?>" alt="" width="100px" height="100px;" style="border-radius: 50%;margin-top: -70px;border:2px solid #fff;">
                    </div>
                       <div class="desc">
                        <p><?= $data->name?></p>
                        <p style="width: 100%;font-size:15px;"><?= $data->qualification?> <br>
                          at <?= $data->college?>
                        </p>
                       </div>
                       
                       <div class="userskils skillslist">
                        <h3 style="color: #fff;font-size:15px;margin: 0;color:#000;font-weight:400;"><u>Skills:</u>
                        <span><?= $data->skill?></span>
                        
                        </h3>
                      
                      
                       </div>
                       <div class="profile_percentage" style="margin-top:10%;">

                        <!-- <div class="progress">
                             <div class="progress-bar" role="progressbar"  aria-valuemin="0" aria-valuemax="100" style="width:70%">
                                <span>70% Profile Complete</span> 
                             </div>
                           </div>
                       </div> -->

                       <div class="missing_details" style="text-align: left;">

                         <!--  <p>01 Details missing <span style="float: right;"><a href="#" style="color:#337AB7;">ADD DETAILS</a></span></p>
                         -->

                             
                       </div>
                       <div class="useredit">
                       <a href="<?= base_url('Users/candidate_profile');?>">  <button type="button" style="padding:5px 10px;font-size:18px;color:#fff;background: #9EBD23;border-radius:4px;margin-top:2%;">UPDATE PROFILE</button></a>


                       </div>

                  </div>
                          
                 
                </div>
    </div>
  </div>
    <div class="clearfix"></div>
   
      
 
   
 







</body>
          <?php
      include('footer.php');
      ?>


</html>
