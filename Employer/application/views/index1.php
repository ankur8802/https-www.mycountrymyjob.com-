<!DOCTYPE html>
<html lang="en">


        <!-- Header -->

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
<style>
    
    .careerfy-parallex-full{
        background: #fff!important;
        border: none;
    }
</style>

        
        
        <!-- Banner -->
        <div class="careerfy-banner careerfy-typo-wrap">
            <span class="careerfy-banner-transparent"></span>
            <div class="careerfy-banner-caption">
                 <div class="container">
                    <h1>Aim Higher. Reach Farther. Dream Bigger.</h1>
                    <p>A better career is out there. We'll help you find it to use.</p>
                    <form class="careerfy-banner-search " action="<?=base_url('index.php/Employee/job1')?>" method="post">
                        <ul>
                            <li>
                                <input  name="title" placeholder="Job Title, Keywords, or Company" onblur="if(this.value == '') { this.value ='Job Title, Keywords, or Company'; }" onfocus="if(this.value =='Job Title, Keywords, or Company') { this.value = ''; }" type="text">
                            </li>
                            <li>
                                <input name="state" placeholder="state,city" onblur="if(this.value == '') { this.value ='City, State or ZIP'; }" onfocus="if(this.value =='City, State') { this.value = ''; }" type="text">
                                <i class="careerfy-icon careerfy-location"></i>
                            </li>
                            <li>
                                <div class="careerfy-select-style">
                                    <select name="company_name" >
                                        <option>choose</option>
                                        <?php
                                    foreach ($data as $res)  
                                    {
                                 
                                ?>   
                                                    <option><?= $res->company_name?></option>
                                                    
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
                        <a href="#" class="careerfy-bgcolorhover"><i class="careerfy-icon careerfy-up-arrow"></i> Upload Your Resume</a>
                        <a href="#" class="careerfy-bgcolorhover"><i class="careerfy-icon careerfy-portfolio"></i> Hiring? Post a job for free</a>
                    </div>
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
                                <p>A better career is out there. We'll help you find it to use.</p>
                            </section>
                            <!-- Categories -->
                            <div class="categories-list">
                                <ul class="careerfy-row">
                                    <li class="careerfy-column-3">
                                        <i class="careerfy-icon careerfy-engineer"></i>
                                        <a href="#">construction / facilities</a>
                                        <span>(15 Open Vacancies)</span>
                                    </li>
                                    <li class="careerfy-column-3">
                                        <i class="careerfy-icon careerfy-car"></i>
                                        <a href="#">automotive jobs</a>
                                        <span>(12 Open Vacancies)</span>
                                    </li>
                                    <li class="careerfy-column-3">
                                        <i class="careerfy-icon careerfy-accounting"></i>
                                        <a href="#">Accounting / Finance</a>
                                        <span>(8 Open Vacancies)</span>
                                    </li>
                                    <li class="careerfy-column-3">
                                        <i class="careerfy-icon careerfy-hospital"></i>
                                        <a href="#">Health Care</a>
                                        <span>(5 Open Vacancies)</span>
                                    </li>
                                    <li class="careerfy-column-3">
                                        <i class="careerfy-icon careerfy-antenna"></i>
                                        <a href="#">Telecommunications</a>
                                        <span>(7 Open Vacancies)</span>
                                    </li>
                                    <li class="careerfy-column-3">
                                        <i class="careerfy-icon careerfy-books"></i>
                                        <a href="#">education training</a>
                                        <span>(22 Open Vacancies)</span>
                                    </li>
                                    <li class="careerfy-column-3">
                                        <i class="careerfy-icon careerfy-fast-food"></i>
                                        <a href="#">Restaurant / food services</a>
                                        <span>(30 Open Vacancies)</span>
                                    </li>
                                    <li class="careerfy-column-3">
                                        <i class="careerfy-icon careerfy-business"></i>
                                        <a href="#">Sales & Marketing</a>
                                        <span>(40 Open Vacancies)</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="careerfy-plain-btn"> <a href="job-listings.html">Browse All Categories</a> </div>
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

            <!-- Main Section -->
                  <div class="careerfy-main-section careerfy-parallex-full" style="margin: 0;">
                <div class="container">
                    <div class="row">

                        <aside class="col-md-6 careerfy-typo-wrap">
                            <div class="careerfy-parallex-text">
                                <h2>Millions of jobs. <br> Find the one that’s right for you.</h2>
                                <p>Search all the open positions on the web. Get your own personalized salary estimate. Read reviews on over 600,000 companies worldwide. The right job is out there.</p>
                                <a href="job-listings.html" class="careerfy-static-btn careerfy-bgcolor"><span>Search Jobs</span></a>
                            </div>
                        </aside>
                        <aside class="col-md-6 careerfy-typo-wrap"> <div class="careerfy-right"><img src="<?= base_url()?>/assets/extra-images/parallex-thumb-1.png" alt=""></div> </aside>

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

</body>


</html>
