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

<div class="careerfy-subheader" style="height: 100px;">
            <span class="careerfy-banner-transparent"></span>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="careerfy-page-title">
                            <h1> Job recommendations for you</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>



                                
                       
                                     
                                  
                                   <div class="careerfy-job careerfy-joblisting-classic" style="margin-top: 20px;">
                                    <ul class="careerfy-row">
                                    	<div class="container-fluid">
                                    	<li class="col-md-2"></li>
                                        <li class="col-md-8">

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
                                        

                                            foreach ($result as $row) { 
                                                # code...
                                          
if($result)
                                { 
                                ?>
                                            <div class="careerfy-joblisting-classic-wrap">
                                               <!--  <figure><a href="#"><img src="<?= base_url()?>/assets/extra-images/job-listing-logo-1.png" alt=""></a></figure><center></center> -->
                                                <div class="careerfy-joblisting-text">
                                                    <div class="careerfy-list-option">
                                                       <h2 style="margin-left:30px; ">
                                                        <?= $row->company_name?></h2>
                                                       
                                                       <h2 style="margin-left:30px; "><a href="#"><?= $row->category?></a></h2>
<!--                                                        <h2></h2>-->
                                                        <ul>
                                                            <li></li>
                                                            <li><span> Experience:<?php $experience="$row->experience"." "."$row->experience1"; ?><?php echo  $experience?><span></span></span></li>
                                                        </ul>
                                                            <div class="skills">
                                                                <span style="margin-left:30px; ">Skills: <a href="#"></a><a href="#"><?= $row->skill?>,</a><a href="#"> </a></span>
                                                            </div>
                                                            <div class="salary">
                                                                <span></span>
                                                            </div>
                                                           <a href='<?= base_url("index.php/Users/job_detail/").$row->id?>'> <button class="btn btn-primary"style="margin-left:30px; ">Know More</button></a>
                                                            </div>
                                                       
                                                    </div>
                                                        <div class="careerfy-job-userlist">
                                                            
                                                           <!--  <a href="#" class="careerfy-job-like"><i class="fa fa-heart"></i></a> -->
                                                            
                                                        </div>

                                                    
                                                    <div class="rec-date" style="text-align: right;margin-top: 10%;">
                                                           <span style="display: block;margin-top:10px;"><i class="careerfy-icon careerfy-maps-and-flags"></i> </span>
                                                            <span></span>
                                                        </div>
                                                <div class="clearfix"></div>
                                               </div>
                                               <?php
                            
                          }
                          else
                          {
                          
                          
                            echo'<p style="color:#fff;margin-left:45%;">Data Not Found </p>';
                          }

                           }
                          ?>
                                               
                                                  <!-- Pagination -->
                                <div class="careerfy-pagination-blog">
                                   <!--  <ul class="page-numbers">
                                        <li><a class="prev page-numbers" href="#"><span><i class="careerfy-icon careerfy-arrows4"></i></span></a></li>
                                        <li><span class="page-numbers current">01</span></li>
                                        <li><a class="page-numbers" href="#">02</a></li>
                                        <li><a class="page-numbers" href="#">03</a></li>
                                        <li><a class="page-numbers" href="#">04</a></li>
                                        <li><a class="next page-numbers" href="#"><span><i class="careerfy-icon careerfy-arrows4"></i></span></a></li>
                                    </ul> -->
                                </div>
                                        
                                        </li>
                                        <li class="col-md-2"></li>
                                    </div>
                                    </ul>
                                </div>
                               

                             
                     


             <?php
      include('footer.php');

      ?>