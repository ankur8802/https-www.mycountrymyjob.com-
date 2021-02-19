<!DOCTYPE html>
<html lang="en">


        <!-- Header -->

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
<style>
    
    .careerfy-parallex-full{
        background: #fff!important;
        border: none;
    }

@media only screen and (min-width: 1000px) {

.careerfy-typo-wrap-main{
        height: 450px;
        padding: 50px;
    

    }
}
@media only screen and (max-width: 1055px) {

.right-sec {
         display: none;
}
.left-sec{
    width: 100%;
    padding: 20px;
}
}


</style>
        
        
        <!-- Banner -->
        <div class="careerfy-banner careerfy-typo-wrap careerfy-typo-wrap-main" style="padding-left: 0;background-attachment: fixed">
            <span class="careerfy-banner-transparent"></span>
           
         <div class="careerfy-banner-caption">
                 <div class="row">
                    <div class="col-md-8 left-sec" style="margin-top: 40px;">
                    <h1>Looking for Growth? Over 1,00,000+ Jobs</h1>
                    <p>A better career is out there. We'll help you find it to use.</p>
                    <form class="careerfy-banner-search " action="<?=base_url('find-jobs')?>" method="post">
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
                  <div class="careerfy-banner-btn">
                        <a href="#"  class="careerfy-open-signup-tab"><i class="careerfy-icon careerfy-up-arrow"></i> Upload Your Resume</a>
                        <a href="<?= base_url('')?>/Employer" ><i class="careerfy-icon careerfy-portfolio"></i> Hiring? Post a job for free</a>
                    </div>
                </div>
             <?php
    if ($this->session->userdata('email') )
    {

        ?>
          <div class="col-md-4 right-sec" style="background-color:rgba(255,255,255,0.2);border-radius: 8px;padding: 30px;margin-top:50px;">
                    <div class="Register-btn">
                       <button type="button" style="padding: 15px;font-size:18px;color:#fff;background: #9EBD23;border-radius:32px;width:80%" id="userformopen">Welcome</button>
                       </div>
                 </div>

<?php
        }
        else
        {
        ?>


                <div class="col-md-4 right-sec" style="background-color:rgba(255,255,255,0.2);border-radius: 8px;padding: 30px;margin-top:50px;">
                    <div class="Register-btn">
                       <button type="button" style="padding: 15px;font-size:18px;color:#fff;background: #9EBD23;border-radius:32px;width:80%" id="userformopen">Register Now</button>
                       </div>
                       <div class="row" style="padding: 10px 30px 10px 40px;margin:20px;">
                        <div class="col-md-5" style="border-bottom: 1px solid #999;margin-top:20px;"></div>
                        <div class="col-md-2"><span style="color: #fff;">or</span></div>
                        <div class="col-md-5" style="border-bottom: 1px solid #999;margin-top:20px;"></div>
                       </div>
                    <div class="login-btn">
                        <button type="button" style="padding: 5px;font-size:18px;color:#fff;background:transparent;border-radius:32px;width:40%;border: 1px solid #999;" class="careerfy-open-signup-tab"><i class="fas fa-sign-in-alt" style="padding: 5px;"></i>Sign In</button>
                    </div> 
                 </div>
        <?php
            }
        ?>

            </div>
        </div>
        </div>
        <!-- Banner -->
            <div class="careerfy-main-section" style="margin-bottom: 50px;padding: 50px 0px;">
                <div class="container">
                    <div class="row">

                        <div class="col-md-12 careerfy-typo-wrap">
                            <!-- Fancy Title -->
                            <section class="careerfy-fancy-title">
                                <h2>Popular Job Categories</h2>
                                <!-- <p>A better career is out there. We'll help you find it to use.</p> -->
                            </section>
                            <!-- Categories -->
                            <div class="categories-list">
                                <ul class="careerfy-row">
                                    <li class="careerfy-column-3" >
                                        <div style="box-shadow: 0px 0px 2px #8dbb00;padding: 10px 0px">
                                        <i class="careerfy-icon careerfy-engineer"></i>
                                        <a href="#">construction / facilities</a>
                                        <span>(15 Open Vacancies)</span>
                                        </div>
                                    </li>
                                    <li class="careerfy-column-3" >
                                        <div style="box-shadow: 0px 0px 2px #8dbb00;padding: 10px 0px">
                                        <i class="careerfy-icon careerfy-car"></i>
                                        <a href="#">automotive jobs</a>
                                        <span>(12 Open Vacancies)</span>
                                        </div>
                                    </li>
                                    <li class="careerfy-column-3" >
                                        <div style="box-shadow: 0px 0px 2px #8dbb00;padding: 10px 0px">
                                        <i class="careerfy-icon careerfy-accounting"></i>
                                        <a href="#">Accounting / Finance</a>
                                        <span>(8 Open Vacancies)</span>
                                        </div>
                                    </li>
                                    <li class="careerfy-column-3" >
                                        <div style="box-shadow: 0px 0px 2px #8dbb00;padding: 10px 0px">
                                        <i class="careerfy-icon careerfy-hospital"></i>
                                        <a href="#">Health Care</a>
                                        <span>(5 Open Vacancies)</span>
                                        </div>
                                    </li>
                                    <li class="careerfy-column-3" >
                                        <div style="box-shadow: 0px 0px 2px #8dbb00;padding: 10px 0px">
                                        <i class="careerfy-icon careerfy-antenna"></i>
                                        <a href="#">Telecommunications</a>
                                        <span>(7 Open Vacancies)</span>
                                        </div>
                                    </li>
                                    <li class="careerfy-column-3" >
                                        <div style="box-shadow: 0px 0px 2px #8dbb00;padding: 10px 0px">
                                        <i class="careerfy-icon careerfy-books"></i>
                                        <a href="#">education training</a>
                                        <span>(22 Open Vacancies)</span>
                                        </div>
                                    </li>
                                    <li class="careerfy-column-3" >
                                        <div style="box-shadow: 0px 0px 2px #8dbb00;padding: 10px 0px">
                                        <i class="careerfy-icon careerfy-fast-food"></i>
                                        <a href="#">Restaurant / food services</a>
                                        <span>(30 Open Vacancies)</span>
                                        </div>
                                    </li>
                                    <li class="careerfy-column-3" >
                                        <div style="box-shadow: 0px 0px 2px #8dbb00;padding: 10px 0px">
                                        <i class="careerfy-icon careerfy-business"></i>
                                        <a href="#">Sales & Marketing</a>
                                        <span>(40 Open Vacancies)</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="careerfy-plain-btn"> <a href="javascript:void(0)">Browse All Categories</a> </div>
                            <!-- Categories -->
                        </div>

                    </div>
                </div>
            </div>
            <!-- Main Section -->


        <!-- Main Content -->
        <div class="careerfy-main-content" style="padding: 0px">
            
            <!-- Main Section -->
            <div class="careerfy-main-section careerfy-counter-full" style="margin: 0;background:#f6f6f6;padding: 50px">
                <div class="container">
                    <div class="row">

                        <div class="col-md-12">
                            <!-- Counter -->
                            <div class="careerfy-counter">
                                <ul class="row">
                                    <li class="col-md-4" style="margin: 0px;padding: 20px">
                                        <span class="word-counter">123,012</span>
                                        <small>Jobs Added</small>
                                    </li>
                                    <li class="col-md-4" style="margin: 0px;padding: 20px">
                                        <span class="word-counter">187,432</span>
                                        <small>Active Resumes</small>
                                    </li>
                                    <li class="col-md-4" style="margin: 0px;padding: 20px">
                                        <span class="word-counter">140,312</span>
                                        <small>Positions Matched</small>
                                    </li>
                                </ul>
                            </div>
                            <!-- Counter -->
                        </div>

                    </div>
                </div>
            </div>
            <!-- Main Section -->

      <!-- Main Content -->
        <div class="careerfy-main-content" style="padding: 0px">
            <style type="text/css">
                .careerfy-counter-full
                {
                    background: linear-gradient(238deg, rgba(70, 70, 70, 0.09) 0%, rgba(70, 70, 70, 0.09) 50%,rgba(214, 214, 214, 0.09) 50%, rgba(214, 214, 214, 0.09) 100%),linear-gradient(126deg, rgba(223, 223, 223, 0.05) 0%, rgba(223, 223, 223, 0.05) 50%,rgba(217, 217, 217, 0.05) 50%, rgba(217, 217, 217, 0.05) 100%),linear-gradient(152deg, rgba(116, 116, 116, 0.08) 0%, rgba(116, 116, 116, 0.08) 50%,rgba(248, 248, 248, 0.08) 50%, rgba(248, 248, 248, 0.08) 100%),linear-gradient(225deg, rgba(1, 1, 1, 0.07) 0%, rgba(1, 1, 1, 0.07) 50%,rgba(5, 5, 5, 0.07) 50%, rgba(5, 5, 5, 0.07) 100%),linear-gradient(194deg, rgba(14, 14, 14, 0.09) 0%, rgba(14, 14, 14, 0.09) 50%,rgba(206, 206, 206, 0.09) 50%, rgba(206, 206, 206, 0.09) 100%),linear-gradient(100deg, rgba(220, 220, 220, 0.07) 0%, rgba(220, 220, 220, 0.07) 50%,rgba(65, 65, 65, 0.07) 50%, rgba(65, 65, 65, 0.07) 100%),linear-gradient(190deg, rgba(194, 194, 194, 0.03) 0%, rgba(194, 194, 194, 0.03) 50%,rgba(206, 206, 206, 0.03) 50%, rgba(206, 206, 206, 0.03) 100%),linear-gradient(320deg, rgba(10, 10, 10, 0.08) 0%, rgba(10, 10, 10, 0.08) 50%,rgba(231, 231, 231, 0.08) 50%, rgba(231, 231, 231, 0.08) 100%),linear-gradient(90deg, rgb(10, 147, 39),rgb(235, 252, 123));
                    background-attachment: fixed;
                }
            </style>
            <!-- Main Section -->
            <div class="careerfy-main-section careerfy-counter-full" style="margin: 0;padding: 50px">
                <div class="container">
                    <div class="row">

                        <div class="col-md-12">
                            <!-- Counter -->
                            <div class="careerfy-counter">
                                <ul class="row">
                                    <div class="col-md-12 text-center">
                                            <h2 style="color: black">Top Companies</h2>
                                    </div>

                                    <?php
                                    foreach ($top_companies as $res) {
                                        
                                    ?>
                                    <li class="col-md-3" style="margin: 0px;padding: 20px;border:none;">
                                     <img style="padding:10px;background:white" src="<?= base_url("") ?>/Employer/upload/<?= $res->image?>" width='200px'>
                                    </li>
                                    <?php
                                        }
                                    ?>
                      <!--               <li class="col-md-3" style="margin: 0px;padding: 20px;border:none;">
                                        <img style="padding:10px;background:white" src="<?= base_url("") ?>assets/company/2.jpg">
                                    </li>
                                    <li class="col-md-3" style="margin: 0px;padding: 20px;border:none;">
                                        <img style="padding:10px;background:white" src="<?= base_url("") ?>assets/company/3.jpg">
                                    </li>
                                    <li class="col-md-3" style="margin: 0px;padding: 20px;border:none;">
                                        <img style="padding:10px;background:white" src="<?= base_url("") ?>assets/company/4.jpg">
                                    </li>
                                    <li class="col-md-3" style="margin: 0px;padding: 20px;border:none;">
                                        <img style="padding:10px;background:white" src="<?= base_url("") ?>assets/company/5.jpg">
                                    </li>
                                    <li class="col-md-3" style="margin: 0px;padding: 20px;border:none;">
                                        <img style="padding:10px;background:white" src="<?= base_url("") ?>assets/company/6.jpg">
                                    </li>
                                    <li class="col-md-3" style="margin: 0px;padding: 20px;border:none;">
                                        <img style="padding:10px;background:white" src="<?= base_url("") ?>assets/company/7.jpg">
                                    </li>
                                    <li class="col-md-3" style="margin: 0px;padding: 20px;border:none;">
                                        <img style="padding:10px;background:white" src="<?= base_url("") ?>assets/company/8.jpg">
                                    </li>
                                    <li class="col-md-3" style="margin: 0px;padding: 20px;border:none;">
                                        <img style="padding:10px;background:white" src="<?= base_url("") ?>assets/company/9.jpg">
                                    </li>
                                    <li class="col-md-3" style="margin: 0px;padding: 20px;border:none;">
                                        <img style="padding:10px;background:white" src="<?= base_url("") ?>assets/company/10.jpg">
                                    </li>
                                    <li class="col-md-3" style="margin: 0px;padding: 20px;border:none;">
                                        <img style="padding:10px;background:white" src="<?= base_url("") ?>assets/company/11.jpg">
                                    </li>
                                    <li class="col-md-3" style="margin: 0px;padding: 20px;border:none;">
                                        <img style="padding:10px;background:white" src="<?= base_url("") ?>assets/company/12.jpg">
                                    </li>
                                    <li class="col-md-3" style="margin: 0px;padding: 20px;border:none;">
                                        <img style="padding:10px;background:white" src="<?= base_url("") ?>assets/company/13.jpg">
                                    </li>
                                    <li class="col-md-3" style="margin: 0px;padding: 20px;border:none;">
                                        <img style="padding:10px;background:white" src="<?= base_url("") ?>assets/company/14.jpg">
                                    </li>
                                    <li class="col-md-3" style="margin: 0px;padding: 20px;border:none;">
                                        <img style="padding:10px;background:white" src="<?= base_url("") ?>assets/company/15.jpg">
                                    </li>
                                    <li class="col-md-3" style="margin: 0px;padding: 20px;border:none;">
                                        <img style="padding:10px;background:white" src="<?= base_url("") ?>assets/company/16.gif">
                                    </li> -->

                                </ul>
                            </div>
                            <!-- Counter -->
                        </div>

                    </div>
                </div>
            </div>
              </div>
            <!-- Main Section -->



            <!-- Main Section -->
                  <div class="careerfy-main-section careerfy-parallex-full" style="margin: 0;">
                <div class="container-fluid">
                    <div class="row">


<!-- SLIDER -->

<?php
$row=$this->db->query("select * from slider");
$res2=$res=$row->result();

?>
                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <?php
        $i=0;
        foreach ($res as $result) {
          ?>
      <li data-target="#myCarousel" data-slide-to="<?= $i ?>" class="active"></li>
         <?php
         $i++;
        }
        ?>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

<?php

        $i=0;
        foreach ($res as $result) {
            if($result->url=='')
            {
                $a_open="";
                $a_close="";
            }
            else
            {
               $a_open="<a target='_blank' href='$result->url'>";
                $a_close="</a>";
            }

          ?>
      <div class="item <?php if($i==0) echo "active"?>">
       <?= $a_open ?><img src="<?= base_url()?>/admin/upload/slider/<?= $result->image ?>" alt="Los Angeles" style="width:100%"><?= $a_close ?>
      </div>
         <?php
         $i++;
        }
        ?>
      

    

    <!-- Left and right controls -->
    <a class="left carousel-control" style="background-image: none !important" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"><</span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" style="background-image: none !important" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right">></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<!-- SLIDER -->

                       <!--  <aside class="col-md-6 careerfy-typo-wrap">
                            <div class="careerfy-parallex-text">
                                <h2>Millions of jobs. <br> Find the one that’s right for you.</h2>
                                <p>Search all the open positions on the web. Get your own personalized salary estimate. Read reviews on over 600,000 companies worldwide. The right job is out there.</p>
                                <a href="<?= base_url('find-jobs');?>" class="careerfy-static-btn careerfy-bgcolor"><span>Search Jobs</span></a>
                            </div>
                        </aside>
                        <aside class="col-md-6 careerfy-typo-wrap"> <div class="careerfy-right"><img src="<?= base_url()?>/assets/extra-images/parallex-thumb-1.png" alt=""></div> </aside>
 -->


                    </div>
                </div>
            </div>

            <!-- Main Section -->

            <!-- Main Section -->
          


        </div>

        <!-- Main Content -->
        
        <!-- Footer -->

                    
             <?php
      include('footer.php');
      ?>
<script type="text/javascript">
    <?php
    if( $this->session->flashdata("lead"))
        echo "swal('','We will contact you soon as possible.','success')";
    ?>
    
</script>
</body>


</html>
