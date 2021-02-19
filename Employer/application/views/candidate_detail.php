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
        <!-- Header -->
        
        <!-- SubHeader -->
       <!--  <div class="careerfy-subheader careerfy-subheader-without-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="careerfy-page-title"> 
                           <h1>Candidates List with Filterable</h1>
                            <p>Thousands of prestigious employers for you, search for a recruiter right now.</p> 
                        </div>
                    </div>
                </div>
            </div> -->
            <div class="clearfix"></div>
            <div class="careerfy-breadcrumb">
                <ul>
                    <!-- <li><a href="#">Home</a></li>
                    <li><a href="#">Pages</a></li>
                    <li>Candidates</li> -->
                    <li>Candidate Profile</li>
                </ul>
            </div>
       <!--  </div> -->
        <!-- SubHeader -->

        <!-- Main Content -->
        <div class="careerfy-main-content">
            
            <!-- Main Section -->
            <div class="careerfy-main-section careerfy-dashboard-fulltwo">
                <div class="container">
                    <div class="row">

                        <aside class="careerfy-column-4 sticky">
                            <div class="careerfy-typo-wrap">
                                <div class="jobsearch_candidate_info">
                                    <?php
                                
                                    
                                    {

                                    //     $row=$this->db->query("select * from candidate_registration where email='$re->email'");
                                    // $userdata=$row->row();
                                ?>   
                                    <a href="#" class="careerfy-resumes-thumb"><img src="<?php echo base_url('../upload/'. $data->photo)?>" alt="" style="width: 150px ; height: 150px;margin-left:30px; "></a>
                                    <h2><a href="#"><?= $data->name?></a></h2>
                                    <p><?= $data->category?></p>
                                    <span><?= $data->state?>, <?= $data->city?></span>
                                    <!-- <small><?= $data->date?></small> -->
                                    <!-- <ul>
                                        <li><a href="#" data-original-title="facebook" class="careerfy-icon careerfy-facebook-logo"></a></li>
                                        <li><a href="#" data-original-title="twitter" class="careerfy-icon careerfy-twitter-logo"></a></li>
                                        <li><a href="#" data-original-title="linkedin" class="careerfy-icon careerfy-linkedin-button"></a></li>
                                        <li><a href="#" data-original-title="google-plus" class="careerfy-icon careerfy-google-plus-logo-button"></a></li>
                                        <li><a href="#" data-original-title="dribbble" class="careerfy-icon careerfy-dribbble-logo"></a></li>
                                    </ul> -->
                                    <a href="<?= base_url('../upload/'. $data->resume)?>" class="careerfy-candidate-download-btn"><i class="careerfy-icon careerfy-download-arrow"></i> Download CV</a>


   <form action="<?= base_url("index.php/Employee/save_employee2")?>" method="post">
                                            
                                      <input type="hidden" name="email" value="<?php echo $this->session->userdata('emp_email');?>" >
                                    <input type="hidden"  name="job_id" value="<?= $data->id?>">
                                    <input type="hidden"  name="name" value="<?= $data->name?>">
                                     <input type="hidden"  name="category" value="<?= $data->category?>">
                                     <input type="hidden"  name="skill" value="<?= $data->skill?>">             
                                        <input type="hidden"  name="state" value="<?= $data->state?>">
                                     <input type="hidden"  name="city" value="<?= $data->city?>">
                                             
                                                    <!-- <a href= class="careerfy-job-like"><i class="fa fa-heart"></i></a> -->
                                             <?php
                                        $email=$this->session->userdata('emp_email');

                                        $sql=$this->db->query("select * from save_employee where email='$email' and employee_id='$data->id'");

                                        if($sql->row())
                                        {
                                          

                                            ?>
                                            <br>
                                             <p class="" style="background: transparent;"> <i class="fa fa-check" aria-hidden="true"></i> Saved Employee</p>
                                         <!--  <input type="button" value="" name=""  disabled="" class="careerfy-job-like" > -->

                                         <?php
                                     }

    else if ($this->session->userdata('emp_email'))
    {
       ?> 
       <br>
        <button data-toggle="tooltip" data-placement="right" title="Save This Employee" type="submit" style="background:none!important; "><a href="" class=""><i class="fa fa-heart"style="padding-top:2px!important;color:#ff5722; "></i></a></button>
       
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

                                </div>
                           <!--      <div class="widget widget_contact_form">
                                <div class="careerfy-widget-title"><h2>Contact Form</h2></div>
                                    <form>
                                        <ul>
                                            <li>
                                                <label>User Name:</label>
                                                <input value="Enter Your Name" onblur="if(this.value == '') { this.value ='Enter Your Name'; }" onfocus="if(this.value =='Enter Your Name') { this.value = ''; }" type="text">
                                                <i class="careerfy-icon careerfy-user"></i>
                                            </li>
                                            <li>
                                                <label>Email Address:</label>
                                                <input value="Enter Your Email Address" onblur="if(this.value == '') { this.value ='Enter Your Email Address'; }" onfocus="if(this.value =='Enter Your Email Address') { this.value = ''; }" type="text">
                                                <i class="careerfy-icon careerfy-mail"></i>
                                            </li>
                                            <li>
                                                <label>Phone Number:</label>
                                                <input value="Enter Your Phone Number" onblur="if(this.value == '') { this.value ='Enter Your Phone Number'; }" onfocus="if(this.value =='Enter Your Phone Number') { this.value = ''; }" type="text">
                                                <i class="careerfy-icon careerfy-technology"></i>
                                            </li>
                                            <li>
                                                <label>Message:</label>
                                                <textarea>After using Big Interview, I now feel much more confident about handling real interviews. I really liked the recording & playback functionality, which allowed me to hear my voice and analyze the strength and confidence of my answer.</textarea>
                                            </li>
                                            <li> <img src="extra-images/widget-contact-captcha.jpg" alt=""> </li>
                                            <li>
                                                <input type="submit" value="Send now">
                                                <p>You accepts our <a href="#">Terms and Conditions</a></p>
                                            </li>
                                        </ul>
                                    </form>
                                </div> -->
                            </div>
                        </aside>
                        <div class="careerfy-column-8">
                            <div class="careerfy-typo-wrap">

<div class="careerfy-candidate-editor">
                                    <div class="careerfy-content-title"><h2>CONTACT DETAILS</h2></div>
                                    <div class="careerfy-jobdetail-services">
                                        <ul class="careerfy-row">
                                            <li class="careerfy-column-4">
                                  
                                                <div style="color:grey !important"><span style="font-weight: bolder">Phone</span> : <?= $data->phone?></div>

                                                <div style="color:grey !important"><span style="font-weight: bolder">Address</span> : <?= $data->address?></div>

                                                <div style="color:grey !important"><span style="font-weight: bolder">City</span> : <?= $data->city?></div>

                                                <div style="color:grey !important"><span style="font-weight: bolder">State</span> : <?= $data->state?></div>
                                            </li>                 
                                        </ul>
                                    </div>
                                
                                </div>


                                <div class="careerfy-candidate-editor">
                                    <div class="careerfy-content-title"><h2>ABOUT <?= $data->name?></h2></div>
                                    <div class="careerfy-jobdetail-services">
                                        <ul class="careerfy-row">
                                            <li class="careerfy-column-4">
                                                <i class="careerfy-icon careerfy-salary"></i>
                                                <div class="careerfy-services-text">Current Salary <small>
                                                 <?php
                                                    $current_salary1=$data->current_salary1;
                                                    $current_salary2=$data->current_salary2;
                                                    $current_salary=$current_salary1." ".$current_salary2;
                                                    echo $current_salary;
                                                ?>
                                                  
                                                </small></div>
                                            </li>
                                            <li class="careerfy-column-4">
                                                <i class="careerfy-icon careerfy-social-media"></i>
                                                <div class="careerfy-services-text">Category <small><?= $data->category?></small></div>
                                            </li>
                                            <li class="careerfy-column-4">
                                                <i class="careerfy-icon careerfy-briefcase"></i>
                                                <div class="careerfy-services-text">Experience <small>
                                                    <?php
                                                    $experience1=str_replace(" Year","", $data->experience1);
                                                    $experience2=str_replace(" Month","", $data->experience2);
                                                    $experience=$experience1.".".$experience2." yrs";
                                                    echo $experience;
                                                ?></small></div>
                                            </li>
                                            <div class="clearfix"></div>
                                             <li class="careerfy-column-4">
                                                <i class="careerfy-icon careerfy-user"></i>
                                                <div class="careerfy-services-text">Gender <small><?= $data->gender?></small></div>
                                            </li>  
                                            <li class="careerfy-column-4">
                                                <i class="careerfy-icon careerfy-mortarboard"></i>
                                                <div class="careerfy-services-text">Qualification <small><?= $data->qualification?></small></div>
                                            </li>
                                              <li class="careerfy-column-4">
                                                <i class="careerfy-icon careerfy-network"></i>
                                                <div class="careerfy-services-text">Skill <small><?= $data->skill?></small></div>
                                            </li>  
                                            
                                        </ul>
                                    </div>
                                    <div class="careerfy-content-title"><h2>CANDIDATE DESCRIPTION</h2></div>
                                    <div class="careerfy-description">
                                        <?= $data->description?>
                                    </div>
                                </div>
                                <div class="careerfy-candidate-title"> <h2><i class="careerfy-icon careerfy-mortarboard"></i> Education</h2> </div>
                                <div class="careerfy-candidate-timeline">
                                    <ul class="careerfy-row">
                                        <li class="careerfy-column-12">
                                            
                                            <div class="careerfy-candidate-timeline-text" style="margin-left: 100px">
                                                <span><?= $data->qualification?></span>
                                                <?= $data->college?>
                                               <!--  <p>Fussy penguin insect additionally wow absolutely crud meretriciously hastily dalmatian a glowered. outside oh arrogantly vehement.</p> -->
                                            </div>
                                        </li>
                                        <li class="careerfy-column-12">
                                            <!-- <small>2012 - 2015</small> -->
                                            <div class="careerfy-candidate-timeline-text">
                                               <!--  <span><?= $data->extra_qualification?></span> -->
                                               <!--  <h2><a href="#"><?= $data->college?></a></h2> -->
                                               <!--  <p>That one rank beheld bluebird after outside ignobly allegedly more when oh arrogantly vehement irresistibly fussy penguin insect additionally.</p> -->
                                            </div>
                                        </li>
                                        <!-- <li class="careerfy-column-12">
                                            <small>2014 - 2015</small>
                                            <div class="careerfy-candidate-timeline-text">
                                                <span>Imperieal Institute of Art Direction</span>
                                                <h2><a href="#">Diploma in Fine Arts</a></h2>
                                                <p>Outside ignobly allegedly more when oh arrogantly vehement irresistibly fussy penguin insect additionally wow absolutely crud meretriciously  a glowered.</p>
                                            </div>
                                        </li> -->
                                    </ul>
                                </div>
                                <div class="careerfy-candidate-title"> <h2><i class="careerfy-icon careerfy-social-media"></i> Experince</h2> </div>
                                <div class="careerfy-candidate-timeline">
                                    <ul class="careerfy-row">
                                        <li class="careerfy-column-12">
                                           
                                            <div class="careerfy-candidate-timeline-text" style="margin-left: 100px">
                                                <span><?= $data->current_company?></span>
                                                 <?php echo $experience;?>
                                                 <br>
                                                Category:<?= $data->category?>
                                            </div>
                                        </li>
                                        <!-- <li class="careerfy-column-12">
                                            <small>2006 - 2008</small>
                                            <div class="careerfy-candidate-timeline-text">
                                                <span>Bachlors in Fine Arts</span>
                                                <h2><a href="#">Minor Solutions</a></h2>
                                                <p>Far much that one rank beheld bluebird after outside ignobly allegedly more when oh arrogantly vehement irresistibly fussy penguin insect additionally.</p>
                                            </div>
                                        </li> -->
                                       <!--  <li class="careerfy-column-12">
                                            <small>2002 - 2004</small>
                                            <div class="careerfy-candidate-timeline-text">
                                                <span>Abstraxct Max</span>
                                                <h2><a href="#">Self Employed Professional</a></h2>
                                                <p>Outside ignobly allegedly more when oh arrogantly vehement irresistibly fussy penguin insect additionally wow absolutely crud meretriciously</p>
                                            </div>
                                        </li> -->
                                    </ul>
                                </div>
                                <div class="jobsearch_progressbar_wrap">
                                    <div class="careerfy-row">
                                        <div class="careerfy-column-6">
                                            <div class="careerfy-candidate-title"> <h2><i class="careerfy-icon careerfy-design-skills" ></i> Skills</h2> </div>
                                            <div class="careerfy-candidate-timeline">
                                    <ul class="careerfy-row">
                                        <li class="careerfy-column-12">
                                           
                                            <div class="careerfy-candidate-timeline-text" style="margin-left: 100px">
                                                 <span ><?= $data->skill?></span>
                                            </div>
                                        </li>
                   
                                           <!--  <div class="jobsearch_progressbar1" data-width='90'>Sale Product</div>
                                            <div class="jobsearch_progressbar1" data-width='72'>Google Seo</div>
                                            <div class="jobsearch_progressbar1" data-width='50'>Listening</div>
                                            <div class="jobsearch_progressbar1" data-width='95'>Graphic Design</div>
                                            <div class="jobsearch_progressbar1" data-width='75'>Business Sense</div> -->
                                        </div>
                                        <!-- <div class="careerfy-column-6">
                                            <span class="jobsearch_progressbar_subtitle">Personal Skills</span>
                                            <div class="jobsearch_progressbar1" data-width='90'>Creativity</div>
                                            <div class="jobsearch_progressbar1" data-width='72'>Team Group</div>
                                            <div class="jobsearch_progressbar1" data-width='50'>Organizations</div>
                                            <div class="jobsearch_progressbar1" data-width='95'>Flexibilty</div>
                                            <div class="jobsearch_progressbar1" data-width='75'>Communication</div>
                                        </div> -->
                                    </div>
                                </div>
                               <!--  <div class="careerfy-candidate-title"> <h2><i class="careerfy-icon careerfy-briefcase"></i> Portfolio</h2> </div>
                                <div class="careerfy-gallery careerfy-simple-gallery candidate_portfolio">
                                    <ul class="careerfy-row grid">
                                        <li class="grid-item careerfy-column-3"> <a href="extra-images/employer-gallery-2.jpg" class="fancybox" data-fancybox-group="group"><img src="<?= base_url()?>/assets/extra-images/employer-gallery-1.jpg" alt=""></a> </li>
                                        <li class="grid-item careerfy-column-6"> <a href="extra-images/employer-gallery-2.jpg" class="fancybox" data-fancybox-group="group"><img src="<?= base_url()?>/assets/extra-images/employer-gallery-2.jpg" alt=""></a> </li>
                                        <li class="grid-item careerfy-column-3"> <a href="extra-images/employer-gallery-2.jpg" class="fancybox" data-fancybox-group="group"><img src="<?= base_url()?>/assets/extra-images/employer-gallery-3.jpg" alt=""></a> </li>
                                        <li class="grid-item careerfy-column-3"> <a href="extra-images/employer-gallery-2.jpg" class="fancybox" data-fancybox-group="group"><img src="<?= base_url()?>/assets/extra-images/employer-gallery-4.jpg" alt=""></a> </li>
                                        <li class="grid-item careerfy-column-3"> <a href="extra-images/employer-gallery-2.jpg" class="fancybox" data-fancybox-group="group"><img src="<?= base_url()?>/assets/extra-images/employer-gallery-5.jpg" alt=""></a> </li>
                                    </ul>
                                </div> -->
                                <!-- <div class="careerfy-candidate-title"> <h2><i class="careerfy-icon careerfy-trophy"></i> Honors & awards</h2> </div> -->
                        <!--         <div class="careerfy-candidate-timeline">
                                    <ul class="careerfy-row">
                                        <li class="careerfy-column-12">
                                            <small>2007</small>
                                            <div class="careerfy-candidate-timeline-text">
                                                <span>Yeartam</span>
                                                <h2><a href="#">Distinguished Service Award</a></h2>
                                                <p>Fussy penguin insect additionally wow absolutely crud meretriciously hastily dalmatian a glowered. outside ignobly allegedly more when vehement.</p>
                                            </div>
                                        </li>
                                        <li class="careerfy-column-12">
                                            <small>2012</small>
                                            <div class="careerfy-candidate-timeline-text">
                                                <span>Goldtech</span>
                                                <h2><a href="#">Robin Milner Young Researcher Award</a></h2>
                                                <p>That one rank beheld bluebird after outside ignobly allegedly more when oh arrogantly vehement irresistibly fussy penguin insect additionally.</p>
                                            </div>
                                        </li>
                                        <li class="careerfy-column-12">
                                            <small>2014</small>
                                            <div class="careerfy-candidate-timeline-text">
                                                <span>Unodoncity</span>
                                                <h2><a href="#">Doctoral Dissertation Award</a></h2>
                                                <p>Outside ignobly allegedly more when oh arrogantly vehement irresistibly fussy penguin insect additionally wow absolutely crud meretriciously a glowered.</p>
                                            </div>
                                        </li>
                                        <li class="careerfy-column-12">
                                            <small>Dec 2016</small>
                                            <div class="careerfy-candidate-timeline-text">
                                                <span>Techzenbam</span>
                                                <h2><a href="#">Programming Languages Achievement</a></h2>
                                                <p>Outside ignobly allegedly more when oh arrogantly vehement irresistibly fussy penguin insect additionally wow absolutely hastily dalmatian a glowered.</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div> -->
                            </div>
                            <?php
                        }
                        ?>
                        </div>

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
