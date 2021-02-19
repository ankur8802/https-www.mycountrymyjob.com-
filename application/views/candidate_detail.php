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
        <div class="careerfy-subheader careerfy-subheader-without-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="careerfy-page-title">
                            <h1>Candidates List with Filterable</h1>
                            <p>Thousands of prestigious employers for you, search for a recruiter right now.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="careerfy-breadcrumb">
                <ul>
                   <!--  <li><a href="#">Home</a></li>
                    <li><a href="#">Pages</a></li>
                    <li>Candidates</li> -->
                    <li>Profile</li>
                </ul>
            </div>
        </div>
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
                                    <figure><img src="<?= base_url()?>/assets/extra-images/candidate-thumb-1.jpg" alt=""></figure>
                                    <h2><a href="#">Ariana Grande</a></h2>
                                    <p>Financial Supervisor at <a href="#">Deep Studio</a></p>
                                    <span>New Delhi, India</span>
                                    <small>Member Since, Aug 5, 2015</small>
                                    <ul>
                                        <li><a href="#" data-original-title="facebook" class="careerfy-icon careerfy-facebook-logo"></a></li>
                                        <li><a href="#" data-original-title="twitter" class="careerfy-icon careerfy-twitter-logo"></a></li>
                                        <li><a href="#" data-original-title="linkedin" class="careerfy-icon careerfy-linkedin-button"></a></li>
                                        <li><a href="#" data-original-title="google-plus" class="careerfy-icon careerfy-google-plus-logo-button"></a></li>
                                        <li><a href="#" data-original-title="dribbble" class="careerfy-icon careerfy-dribbble-logo"></a></li>
                                    </ul>
                                    <a href="#" class="careerfy-candidate-download-btn"><i class="careerfy-icon careerfy-download-arrow"></i> Download CV</a>
                                </div>
                                <div class="widget widget_contact_form">
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
                                </div>
                            </div>
                        </aside>
                        <div class="careerfy-column-8">
                            <div class="careerfy-typo-wrap">
                                <div class="careerfy-candidate-editor">
                                    <div class="careerfy-content-title"><h2>About Ariana Grande</h2></div>
                                    <div class="careerfy-jobdetail-services">
                                        <ul class="careerfy-row">
                                            <li class="careerfy-column-4">
                                                <i class="careerfy-icon careerfy-salary"></i>
                                                <div class="careerfy-services-text">Offerd Salary <small> 50,000+</small></div>
                                            </li>
                                            <li class="careerfy-column-4">
                                                <i class="careerfy-icon careerfy-social-media"></i>
                                                <div class="careerfy-services-text">Career Level <small>Manager</small></div>
                                            </li>
                                            <li class="careerfy-column-4">
                                                <i class="careerfy-icon careerfy-briefcase"></i>
                                                <div class="careerfy-services-text">Experience <small>7 Years</small></div>
                                            </li>
                                            <li class="careerfy-column-4">
                                                <i class="careerfy-icon careerfy-user"></i>
                                                <div class="careerfy-services-text">Gender <small>Male</small></div>
                                            </li>
                                            <li class="careerfy-column-4">
                                                <i class="careerfy-icon careerfy-network"></i>
                                                <div class="careerfy-services-text">Industry <small>Banking</small></div>
                                            </li>
                                            <li class="careerfy-column-4">
                                                <i class="careerfy-icon careerfy-mortarboard"></i>
                                                <div class="careerfy-services-text">Qualification <small>Master’s Degree</small></div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="careerfy-content-title"><h2>Candidte Description</h2></div>
                                    <div class="careerfy-description">
                                        <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."

</p>
                                    </div>
                                    <div class="careerfy-description">
                                        <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."

</p>
                                    </div>
                                </div>
                                <div class="careerfy-candidate-title"> <h2><i class="careerfy-icon careerfy-mortarboard"></i> Education</h2> </div>
                                <div class="careerfy-candidate-timeline">
                                    <ul class="careerfy-row">
                                        <li class="careerfy-column-12">
                                            <small>2002 - 2004</small>
                                            <div class="careerfy-candidate-timeline-text">
                                                <span>Walters University</span>
                                                <h2><a href="#">Masters in Fine Arts</a></h2>
                                                <p>Fussy penguin insect additionally wow absolutely crud meretriciously hastily dalmatian a glowered. outside oh arrogantly vehement.</p>
                                            </div>
                                        </li>
                                        <li class="careerfy-column-12">
                                            <small>2012 - 2015</small>
                                            <div class="careerfy-candidate-timeline-text">
                                                <span>Bachlors in Fine Arts</span>
                                                <h2><a href="#">Tommers College</a></h2>
                                                <p>That one rank beheld bluebird after outside ignobly allegedly more when oh arrogantly vehement irresistibly fussy penguin insect additionally.</p>
                                            </div>
                                        </li>
                                        <li class="careerfy-column-12">
                                            <small>2014 - 2015</small>
                                            <div class="careerfy-candidate-timeline-text">
                                                <span>Imperieal Institute of Art Direction</span>
                                                <h2><a href="#">Diploma in Fine Arts</a></h2>
                                                <p>Outside ignobly allegedly more when oh arrogantly vehement irresistibly fussy penguin insect additionally wow absolutely crud meretriciously  a glowered.</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="careerfy-candidate-title"> <h2><i class="careerfy-icon careerfy-social-media"></i> Experince</h2> </div>
                                <div class="careerfy-candidate-timeline">
                                    <ul class="careerfy-row">
                                        <li class="careerfy-column-12">
                                            <small>2010 - 2012</small>
                                            <div class="careerfy-candidate-timeline-text">
                                                <span>Atract Solutions</span>
                                                <h2><a href="#">Development Manager</a></h2>
                                                <p>Arrogantly vehement irresistibly fussy penguin insect additionally wow absolutely crud meretriciously hastily dalmatian a glowered.</p>
                                            </div>
                                        </li>
                                        <li class="careerfy-column-12">
                                            <small>2006 - 2008</small>
                                            <div class="careerfy-candidate-timeline-text">
                                                <span>Bachlors in Fine Arts</span>
                                                <h2><a href="#">Minor Solutions</a></h2>
                                                <p>Far much that one rank beheld bluebird after outside ignobly allegedly more when oh arrogantly vehement irresistibly fussy penguin insect additionally.</p>
                                            </div>
                                        </li>
                                        <li class="careerfy-column-12">
                                            <small>2002 - 2004</small>
                                            <div class="careerfy-candidate-timeline-text">
                                                <span>Abstraxct Max</span>
                                                <h2><a href="#">Self Employed Professional</a></h2>
                                                <p>Outside ignobly allegedly more when oh arrogantly vehement irresistibly fussy penguin insect additionally wow absolutely crud meretriciously</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="jobsearch_progressbar_wrap">
                                    <div class="careerfy-row">
                                        <div class="careerfy-column-6">
                                            <div class="careerfy-candidate-title"> <h2><i class="careerfy-icon careerfy-design-skills"></i> Skills</h2> </div>
                                            <div class="jobsearch_progressbar1" data-width='90'>Sale Product</div>
                                            <div class="jobsearch_progressbar1" data-width='72'>Google Seo</div>
                                            <div class="jobsearch_progressbar1" data-width='50'>Listening</div>
                                            <div class="jobsearch_progressbar1" data-width='95'>Graphic Design</div>
                                            <div class="jobsearch_progressbar1" data-width='75'>Business Sense</div>
                                        </div>
                                        <div class="careerfy-column-6">
                                            <span class="jobsearch_progressbar_subtitle">Personal Skills</span>
                                            <div class="jobsearch_progressbar1" data-width='90'>Creativity</div>
                                            <div class="jobsearch_progressbar1" data-width='72'>Team Group</div>
                                            <div class="jobsearch_progressbar1" data-width='50'>Organizations</div>
                                            <div class="jobsearch_progressbar1" data-width='95'>Flexibilty</div>
                                            <div class="jobsearch_progressbar1" data-width='75'>Communication</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="careerfy-candidate-title"> <h2><i class="careerfy-icon careerfy-briefcase"></i> Portfolio</h2> </div>
                                <div class="careerfy-gallery careerfy-simple-gallery candidate_portfolio">
                                    <ul class="careerfy-row grid">
                                        <li class="grid-item careerfy-column-3"> <a href="extra-images/employer-gallery-2.jpg" class="fancybox" data-fancybox-group="group"><img src="<?= base_url()?>/assets/extra-images/employer-gallery-1.jpg" alt=""></a> </li>
                                        <li class="grid-item careerfy-column-6"> <a href="extra-images/employer-gallery-2.jpg" class="fancybox" data-fancybox-group="group"><img src="<?= base_url()?>/assets/extra-images/employer-gallery-2.jpg" alt=""></a> </li>
                                        <li class="grid-item careerfy-column-3"> <a href="extra-images/employer-gallery-2.jpg" class="fancybox" data-fancybox-group="group"><img src="<?= base_url()?>/assets/extra-images/employer-gallery-3.jpg" alt=""></a> </li>
                                        <li class="grid-item careerfy-column-3"> <a href="extra-images/employer-gallery-2.jpg" class="fancybox" data-fancybox-group="group"><img src="<?= base_url()?>/assets/extra-images/employer-gallery-4.jpg" alt=""></a> </li>
                                        <li class="grid-item careerfy-column-3"> <a href="extra-images/employer-gallery-2.jpg" class="fancybox" data-fancybox-group="group"><img src="<?= base_url()?>/assets/extra-images/employer-gallery-5.jpg" alt=""></a> </li>
                                    </ul>
                                </div>
                                <div class="careerfy-candidate-title"> <h2><i class="careerfy-icon careerfy-trophy"></i> Honors & awards</h2> </div>
                                <div class="careerfy-candidate-timeline">
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
                                </div>
                            </div>
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
