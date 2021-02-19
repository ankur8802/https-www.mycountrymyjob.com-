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
        <!-- Header -->
        
        <!-- SubHeader -->
        <div class="careerfy-job-subheader">
            <span class="careerfy-banner-transparent"></span>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- SubHeader -->

        <!-- Main Content -->
        <div class="careerfy-main-content" style="background: #e9e9e9">
            
            <!-- Main Section -->
            <div class="careerfy-main-section">
                <div class="container">
                    <div class="row">
                        
                        <!-- Job Detail List -->
                        <div class="careerfy-column-12">
                            <div class="careerfy-typo-wrap">
                                <figure class="careerfy-jobdetail-list">
                                    <?php
                                                    $row=$this->db->query("select * from company_registration WHERE company_name='$data->company_name'");
                                                    $userdata=$row->row();
                                                    ?>
                                    <div class="careerfy-jobdetail-listthumb"><img src="<?php echo base_url('Employer/upload/'. $userdata->image)?>" alt=""style="margin-right:50px!important; width:100%;   "></div>
                                    <figcaption>
                                        <?php
                                        {
                                            ?>
                                        <h2><?= $data->company_name?></h2>
                                        <?php
                                    }
                                    ?>
                                        <span><?= $data->title?></span>
                                        <ul class="careerfy-jobdetail-options">
                                            <li><i class="fa fa-map-marker"></i><?= $data->city?>,<?= $data->state?>, India </li>
                                            <li><i class="careerfy-icon careerfy-calendar"></i> Post Date: <?= $data->date?></li>
                                            <li><i class="careerfy-icon careerfy-calendar"></i> Last Date Of Apply: <?= $data->deadline_date?></li>
                                            <!-- <li><i class="careerfy-icon careerfy-summary"></i> Applications 4</li>
                                            <li><a href="#"><i class="careerfy-icon careerfy-view"></i> Views 3806</a></li> -->
                                        </ul>
                                       <!--  <a href="#" class="careerfy-jobdetail-btn active"><i class="careerfy-icon careerfy-add-list"></i> Shortlist</a> -->
                                       <!--  <a href="#" class="careerfy-jobdetail-btn"><i class="careerfy-icon careerfy-envelope"></i> Email Job</a> -->
                                        <ul class="careerfy-jobdetail-media">
                                           <!--  <li><span>Share:</span></li>
                                            <li><a href="#" data-original-title="facebook" class="careerfy-icon careerfy-facebook-logo-in-circular-button-outlined-social-symbol"></a></li>
                                            <li><a href="#" data-original-title="twitter" class="careerfy-icon careerfy-twitter-circular-button"></a></li>
                                            <li><a href="#" data-original-title="linkedin" class="careerfy-icon careerfy-linkedin"></a></li> -->
                                        </ul>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                        <!-- Job Detail List -->

                        <!-- Job Detail Content -->
                        <div class="careerfy-column-8">
                            <div class="careerfy-typo-wrap">
                                <div class="careerfy-jobdetail-content">
                                    <div class="careerfy-content-title"><h2>Job Detail</h2></div>
                                    <div class="careerfy-jobdetail-services">
                                        <ul class="careerfy-row">
                                            <li class="careerfy-column-4">
                                                <i class="careerfy-icon careerfy-salary"></i>
                                                <div class="careerfy-services-text" style="font-weight: bolder">Salary : <small style="font-weight: normal"><?php
                                                                $salary="$data->salary"." "."$data->salary1";

                                                                $not_disclosed=$data->not_disclosed;
                                                                if($salary)
                                                                {

                                                                    ?>
                                                                Rs <?php echo $salary?>
                                                                <?php
                                                            }
                                                            else
                                                            {
                                                                ?>
                                                            <?php echo $not_disclosed?></
                                                                <?php
                                                            }
                                                            
                                                                ?></small></div>
                                            </li>
                                            <li class="careerfy-column-4">
                                                <i class="careerfy-icon careerfy-social-media"></i>
                                                <div class="careerfy-services-text" style="font-weight: bolder">Category : <small style="font-weight: normal"><?= $data->category?></small></div>
                                            </li>
                                            <li class="careerfy-column-4">
                                                <i class="careerfy-icon careerfy-briefcase"></i>
                                                <div class="careerfy-services-text" style="font-weight: bolder">Experience <small style="font-weight: normal"><?php $experience="$data->experience"." "."$data->experience1"; ?><?php echo  $experience?></small></div>
                                            </li>
                                            
                                            <li class="careerfy-column-4">
                                                <i class="careerfy-icon careerfy-network"></i>
                                                <div class="careerfy-services-text" style="font-weight: bolder">Industry <small style="font-weight: normal"><?= $data->industry?></small></div>
                                            </li>
                                            <li class="careerfy-column-4">
                                                <i class="careerfy-icon careerfy-mortarboard"></i>
                                                <div class="careerfy-services-text" style="font-weight: bolder">Qualification <small style="font-weight: normal"><?= $data->qualification?></small></div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="careerfy-content-title"><h2>Job Description</h2></div>
                                    <div class="careerfy-description">
                                        <p><?= $data->description?></p>
                                    </div>
                                    <div class="careerfy-content-title"><h2>Candidate Description</h2></div>
                                    <div class="careerfy-description">
                                        <p><?= $data->candidate_description?></p>
                                    </div>
                                   <!--  <div class="careerfy-content-title"><h2>What You Will Do</h2></div> -->
                                   <!--  <div class="careerfy-description">
                                        <p>Repeatedly dreamed alas opossum but dramatically despite expeditiously that jeepers loosely yikes that as or eel underneath kept and slept compactly far purred sure abidingly up above fitting to strident wiped set waywardly far the and pangolin horse approving paid chuckled cassowary oh above a much opposite far much hypnotically more therefore wasp less that hey apart well like while superbly orca and far hence one.</p>
                                        <ul class="careerfy-list-style-icon">
                                            <li><i class="careerfy-icon careerfy-arrows22"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                            <li><i class="careerfy-icon careerfy-arrows22"></i> Pellentesque augue dignissim venenatis, turpis vestibulum lacinia dignissim venenatis.</li>
                                            <li><i class="careerfy-icon careerfy-arrows22"></i> Mus arcu euismod ad hac dui, vivamus platea netus.</li>
                                            <li><i class="careerfy-icon careerfy-arrows22"></i> Neque per nisl posuere sagittis, id platea dui.</li>
                                            <li><i class="careerfy-icon careerfy-arrows22"></i> A enim magnis dapibus, nullam odio porta, nisl class.</li>
                                            <li><i class="careerfy-icon careerfy-arrows22"></i> Turpis leo pellentesque per nam, nostra fringilla id.</li>
                                        </ul>
                                    </div> -->
                                    <!-- <div class="careerfy-content-title"><h2>What we can offer you</h2></div> -->
                                    <!-- <div class="careerfy-description">
                                        <p>Far much that one rank beheld bluebird after outside ignobly allegedly more when oh arrogantly vehement irresistibly fussy penguin insect additionally wow absolutely crud meretriciously hastily dalmatian a glowered inset one echidna cassowary some parrot and much as goodness some froze the sullen much connected bat wonderfully on instantaneously eel valiantly petted this along across highhandedly much dog out the much alas evasively neutral lazy reset.</p>
                                        <ul class="careerfy-list-style-icon">
                                            <li><i class="careerfy-icon careerfy-arrows22"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                            <li><i class="careerfy-icon careerfy-arrows22"></i> Mus arcu euismod ad hac dui, vivamus platea netus.</li>
                                            <li><i class="careerfy-icon careerfy-arrows22"></i> Neque per nisl posuere sagittis, id platea dui.</li>
                                            <li><i class="careerfy-icon careerfy-arrows22"></i> A enim magnis dapibus, nullam odio porta, nisl class.</li>
                                            <li><i class="careerfy-icon careerfy-arrows22"></i> Turpis leo pellentesque per nam, nostra fringilla id.</li>
                                        </ul>
                                    </div> -->
                                    <div class="careerfy-content-title"><h2>Required skills</h2></div>
                                    <div class="careerfy-jobdetail-tags">
                                         
                                          
                                         
                                        
                                        <a href="#"> <?= $data->skill?></a>
                                         
                                        
                                    </div>
                                </div>
                              <!--   <div class="careerfy-section-title"><h2>Other jobs you may like</h2></div> -->
                                <div class="careerfy-job careerfy-joblisting-classic careerfy-jobdetail-joblisting">
                                    <ul class="careerfy-row">
                           <!--              <li class="careerfy-column-12">
                                            <div class="careerfy-joblisting-classic-wrap">
                                                <figure><a href="#"><img src="<?= base_url()?>/assets/extra-images/job-listing-logo-1.png" alt=""></a></figure>
                                                <div class="careerfy-joblisting-text">
                                                    <div class="careerfy-list-option">
                                                       <h2><i class="careerfy-icon careerfy-filter-tool-black-shape"></i> Sales & Marketing</h2>
                                                       <h2><a href="#">@ Massimo Artemisis</a></h2>

                                                        <ul>
                                                            <li>Need Senior Rolling Stock Technician</li>
                                                            <li><span> Experience: <span>1-2 yrs</span></span></li>
                                                        </ul>
                                                            <div class="skills">
                                                                <span>Skills: <a href="#"> Target Achievement,</a><a href="#"> Negotiation Skills,</a><a href="#"> Channel Sales</a></span>
                                                            </div>
                                                            <div class="salary">
                                                                <span><span>Salary: </span>Not disclosed</span>
                                                            </div>
                                                            </div>
                                                       
                                                    </div>
                                                    <div class="careerfy-job-userlist">
                                                        
                                                        <a href="#" class="careerfy-job-like"><i class="fa fa-heart"></i></a>
                                                        
                                                    </div>
                                                    <div class="rec-date" style="text-align: right;margin-top: 10%;">
                                                           <span style="display: block;margin-top:10px;"><i class="careerfy-icon careerfy-maps-and-flags"></i> Delhi NCR, India</span>
                                                            <span>Posted by HR  , Today</span>
                                                        </div>
                                                <div class="clearfix"></div>
                                                </div>
                                        </li> -->
                                <!--         <li class="careerfy-column-12">
                                            <div class="careerfy-joblisting-classic-wrap">
                                                <figure><a href="#"><img src="<?= base_url()?>/assets/extra-images/job-listing-logo-1.png" alt=""></a></figure>
                                                <div class="careerfy-joblisting-text">
                                                    <div class="careerfy-list-option">
                                                       <h2><i class="careerfy-icon careerfy-filter-tool-black-shape"></i> Sales & Marketing</h2>
                                                       <h2><a href="#">@ Massimo Artemisis</a></h2>

                                                        <ul>
                                                            <li>Need Senior Rolling Stock Technician</li>
                                                            <li><span> Experience: <span>1-2 yrs</span></span></li>
                                                        </ul>
                                                            <div class="skills">
                                                                <span>Skills: <a href="#"> Target Achievement,</a><a href="#"> Negotiation Skills,</a><a href="#"> Channel Sales</a></span>
                                                            </div>
                                                            <div class="salary">
                                                                <span><span>Salary: </span>Not disclosed</span>
                                                            </div>
                                                            </div>
                                                       
                                                    </div>
                                                    <div class="careerfy-job-userlist">
                                                        
                                                        <a href="#" class="careerfy-job-like"><i class="fa fa-heart"></i></a>
                                                        
                                                    </div>
                                                    <div class="rec-date" style="text-align: right;margin-top: 10%;">
                                                           <span style="display: block;margin-top:10px;"><i class="careerfy-icon careerfy-maps-and-flags"></i> Delhi NCR, India</span>
                                                            <span>Posted by HR  , Today</span>
                                                        </div>
                                                <div class="clearfix"></div>
                                                </div>
                                        </li> -->
                     <!--                    <li class="careerfy-column-12">
                                           <div class="careerfy-joblisting-classic-wrap">
                                                <figure><a href="#"><img src="<?= base_url()?>/assets/extra-images/job-listing-logo-1.png" alt=""></a></figure>
                                                <div class="careerfy-joblisting-text">
                                                    <div class="careerfy-list-option">
                                                       <h2><i class="careerfy-icon careerfy-filter-tool-black-shape"></i> Sales & Marketing</h2>
                                                       <h2><a href="#">@ Massimo Artemisis</a></h2>

                                                        <ul>
                                                            <li>Need Senior Rolling Stock Technician</li>
                                                            <li><span> Experience: <span>1-2 yrs</span></span></li>
                                                        </ul>
                                                            <div class="skills">
                                                                <span>Skills: <a href="#"> Target Achievement,</a><a href="#"> Negotiation Skills,</a><a href="#"> Channel Sales</a></span>
                                                            </div>
                                                            <div class="salary">
                                                                <span><span>Salary: </span>Not disclosed</span>
                                                            </div>
                                                            </div>
                                                       
                                                    </div>
                                                    <div class="careerfy-job-userlist">
                                                        
                                                        <a href="#" class="careerfy-job-like"><i class="fa fa-heart"></i></a>
                                                        
                                                    </div>
                                                    <div class="rec-date" style="text-align: right;margin-top: 10%;">
                                                           <span style="display: block;margin-top:10px;"><i class="careerfy-icon careerfy-maps-and-flags"></i> Delhi NCR, India</span>
                                                            <span>Posted by HR  , Today</span>
                                                        </div>
                                                <div class="clearfix"></div>
                                                </div>
                                        </li> -->
                         <!--                <li class="careerfy-column-12">
                                            <div class="careerfy-joblisting-classic-wrap">
                                                <figure><a href="#"><img src="<?= base_url()?>/assets/extra-images/job-listing-logo-1.png" alt=""></a></figure>
                                                <div class="careerfy-joblisting-text">
                                                    <div class="careerfy-list-option">
                                                       <h2><i class="careerfy-icon careerfy-filter-tool-black-shape"></i> Sales & Marketing</h2>
                                                       <h2><a href="#">@ Massimo Artemisis</a></h2>

                                                        <ul>
                                                            <li>Need Senior Rolling Stock Technician</li>
                                                            <li><span> Experience: <span>1-2 yrs</span></span></li>
                                                        </ul>
                                                            <div class="skills">
                                                                <span>Skills: <a href="#"> Target Achievement,</a><a href="#"> Negotiation Skills,</a><a href="#"> Channel Sales</a></span>
                                                            </div>
                                                            <div class="salary">
                                                                <span><span>Salary: </span>Not disclosed</span>
                                                            </div>
                                                            </div>
                                                       
                                                    </div>
                                                    <div class="careerfy-job-userlist">
                                                        
                                                        <a href="#" class="careerfy-job-like"><i class="fa fa-heart"></i></a>
                                                        
                                                    </div>
                                                    <div class="rec-date" style="text-align: right;margin-top: 10%;">
                                                           <span style="display: block;margin-top:10px;"><i class="careerfy-icon careerfy-maps-and-flags"></i> Delhi NCR, India</span>
                                                            <span>Posted by HR  , Today</span>
                                                        </div>
                                                <div class="clearfix"></div>
                                                </div>
                                        </li> -->
                                        <!-- <li class="careerfy-column-12">
                                            <div class="careerfy-joblisting-classic-wrap">
                                                <figure><a href="#"><img src="<?= base_url()?>/assets/extra-images/job-listing-logo-1.png" alt=""></a></figure>
                                                <div class="careerfy-joblisting-text">
                                                    <div class="careerfy-list-option">
                                                       <h2><i class="careerfy-icon careerfy-filter-tool-black-shape"></i> Sales & Marketing</h2>
                                                       <h2><a href="#">@ Massimo Artemisis</a></h2>

                                                        <ul>
                                                            <li>Need Senior Rolling Stock Technician</li>
                                                            <li><span> Experience: <span>1-2 yrs</span></span></li>
                                                        </ul>
                                                            <div class="skills">
                                                                <span>Skills: <a href="#"> Target Achievement,</a><a href="#"> Negotiation Skills,</a><a href="#"> Channel Sales</a></span>
                                                            </div>
                                                            <div class="salary">
                                                                <span><span>Salary: </span>Not disclosed</span>
                                                            </div>
                                                            </div>
                                                       
                                                    </div>
                                                    <div class="careerfy-job-userlist">
                                                        
                                                        <a href="#" class="careerfy-job-like"><i class="fa fa-heart"></i></a>
                                                        
                                                    </div>
                                                    <div class="rec-date" style="text-align: right;margin-top: 10%;">
                                                           <span style="display: block;margin-top:10px;"><i class="careerfy-icon careerfy-maps-and-flags"></i> Delhi NCR, India</span>
                                                            <span>Posted by HR  , Today</span>
                                                        </div>
                                                <div class="clearfix"></div>
                                                </div>
                                        </li> -->
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Job Detail Content -->
                        <!-- Job Detail SideBar -->
                        <aside class="careerfy-column-4" >
                            <div class="careerfy-typo-wrap" >
                                <div class="widget widget_apply_job">
                                    <div class="widget_apply_job_wrap" style="background: white">
                                     <form action="<?=base_url('Users/job_detail1')?>" method="post" style="width: 150px;display: inline-block;"> 
                                            
                                    <input type="hidden" name="email" value="<?php echo $this->session->userdata('email');?>" >
                                    <input type="hidden"  name="job_id" value="<?= $data->id?>">
                                    <input type="hidden"  name="company_name" value="<?= $data->company_name?>">
                                     <input type="hidden"  name="category" value="<?= $data->category?>">
                                     <input type="hidden"  name="skill" value="<?= $data->skill?>">
                                     <input type="hidden"  name="state" value="<?= $data->state?>">
                                     <input type="hidden"  name="city" value="<?= $data->city?>">
                                      
                                        <?php
                                        $email=$this->session->userdata('email');

                                        $sql=$this->db->query("select * from applied_job where email='$email' and job_id='$data->id'");
                                        if($sql->row())
                                        {
                                            ?>
                                         <p style="border: 1px solid #689f38;;padding: 5px 0px"><i class="fa fa-check" aria-hidden="true"></i> Applied</p>
                                         <?php
                                     }

    else if ($this->session->userdata('email'))
    {
       ?> 
       <button style="background:#689f38;padding: 5px 10px;font-size: 14px;color: white;" class="" type="submit" >Apply for the job</button>
   <?php
    }
    else

    {
      ?>  
    <a style="background:#689f38;padding: 10px 0px;font-size: 12px;color: white;border-radius:0px" href="#" value="<?= $data->id?>" class="careerfy-applyjob-btn" id="apply-job">Apply for the job</a>
  <?php
    }
?>
              </form>  

               <form action="<?= base_url("Users/save_job2")?>" method="post" style="width: 150px;display: inline-block;">
                                            
                                      <input type="hidden" name="email" value="<?php echo $this->session->userdata('email');?>" >
                                    <input type="hidden"  name="job_id" value="<?= $data->id?>">
                                    <input type="hidden"  name="company_name" value="<?= $data->company_name?>">
                                     <input type="hidden"  name="category" value="<?= $data->category?>">
                                     <input type="hidden"  name="skill" value="<?= $data->skill?>">             
                                        <input type="hidden"  name="state" value="<?= $data->state?>">
                                     <input type="hidden"  name="city" value="<?= $data->city?>">
                                             
                                                    <!-- <a href= class="careerfy-job-like"><i class="fa fa-heart"></i></a> -->
                                             <?php
                                        $email=$this->session->userdata('email');

                                        $sql=$this->db->query("select * from save_job where email='$email' and job_id='$data->id'");

                                        if($sql->row())
                                        {
                                          

                                            ?>
                                            <br>
                                             <p class="" style="background: transparent;border: 1px solid silver;padding: 5px 0px"> <i class="fa fa-check" aria-hidden="true"></i> Saved Job</p>
                                         <!--  <input type="button" value="" name=""  disabled="" class="careerfy-job-like" > -->

                                         <?php
                                     }

    else if ($this->session->userdata('email'))
    {
       ?> 
       <br>
        <button data-toggle="tooltip" data-placement="right" title="Save This Job" type="submit" style="border:2px solid #689f38;background:white;padding:3px 10px;color:#689f38;"><i class="fa fa-heart"style="padding-top:2px!important;"></i> Save Job</button>
       
   <?php
    }
    else

    {
      ?>  
       
<!--     <a href="#" value="" class="" id="save-job" style="margin-top: -8px;margin-left: 5px;"><i class="fa fa-heart" style="padding-top:2px!important;color:#ff5722; "></i></a> -->
  <?php
    }
?>       


                                                       
                                                    </form>
<!-- <?php

if($sql="select * from applied_job where email==job_id")
{
    ?> 
  <button class="careerfy-applyjob-btn" type="submit">Applied</button>  
  <?php
}
?> -->

                                   
                                        <!-- <div class="careerfy-applywith-title"><small>OR apply with</small></div> -->
                                       <!--  <p>Know someone who would be perfect for  this role this role? Be a pal, let them know.</p> -->
                                       <!--  <ul>
                                            <li><a href="#"><i class="careerfy-icon careerfy-facebook-logo-1"></i> Facebook</a></li>
                                            <li><a href="#"><i class="careerfy-icon careerfy-linkedin-logo"></i> LinkedIn</a></li>
                                        </ul> -->
                                    </div>
                                    <!-- <a href="#" class="careerfy-sendmessage-btn"><i class="careerfy-icon careerfy-envelope"></i> Send a message</a> -->
                                </div>
                                <div class="widget jobsearch_widget_map">
                                    <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d22589232.038285658!2d-103.9763543971716!3d46.28054447273778!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1507595834401"></iframe> -->
                                </div>
                                <div class="widget widget_add">
                                    <img src="extra-images/jobdetail-add.jpg" alt="">
                                </div>
                                <!-- <div class="widget widget_view_jobs">
                                    <div class="careerfy-widget-title"><h2>More Jobs from Allied Group</h2></div>
                                    <ul>
                                        <li>
                                            <h6><a href="#">Electrical & Mechanical Engineer / Site Maintenance Technician</a></h6>
                                            <span>&#8377 32,000 - &#8377 35,000 per annum</span>
                                            <small>Delhi, India</small>
                                        </li>
                                        <li>
                                            <h6><a href="#">Electrical Maintenance Engineer PLCs</a></h6>
                                            <span>&#8377 25,000 - &#8377 33,000 per annum</span>
                                            <small>Delih, India</small>
                                        </li>
                                        <li>
                                            <h6><a href="#">Electrical Maintenance Engineer FMCG Manufacturer</a></h6>
                                            <span>&#8377 30,000 - &#8377 33,000 per annum</span>
                                            <small>Delhi, India</small>
                                        </li>
                                    </ul>
                                    <a href="#" class="widget_view_jobs_btn">View all jobs <i class="careerfy-icon careerfy-arrows32"></i></a>
                                </div> -->
                            </div>
                        </aside>
                        <!-- Job Detail SideBar -->

                    </div>
                </div>
            </div>
            <!-- Main Section -->

        </div>
        <!-- Main Content -->
        
        <!-- Footer -->

                    <?php
      include('footer.php');
      ?>

</body>


</html>
