<!DOCTYPE html>
<html lang="en">



<?php
      include('nav.php');
      ?>
        <!-- Header -->
        
        <!-- SubHeader -->
        <div class="careerfy-subheader">
            <span class="careerfy-banner-transparent"></span>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="careerfy-page-title">
                            <h1>Jobs For Good Programmers</h1>
                            <p>Yes! You make or may not find the right job for you, but that’s ok.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- SubHeader -->

        <!-- Main Content -->
        <div class="careerfy-main-content">
            
            <!-- Main Section -->
            <div class="careerfy-main-section careerfy-subheader-form-full">
                <div class="container">
                    <div class="row">

                        <div class="col-md-12 careerfy-typo-wrap">
                            <!-- Sub Header Form -->
                            <div class="careerfy-subheader-form">
                                <form class="careerfy-banner-search" >

                                    <ul>
                                         
                                        <li>
                                            <input value="" name="title" class="id" onblur="if(this.value == '') { this.value ='Job Title, Keywords, or Company'; }" onfocus="if(this.value =='Job Title, Keywords, or Company') { this.value = ''; }" type="text">
                                        </li>

                                        <li>
                                            <input value=" " name="state" onblur="if(this.value == '') { this.value ='City, State or ZIP'; }" onfocus="if(this.value =='City, State or ZIP') { this.value = ''; }" type="text">
                                            <i class="careerfy-icon careerfy-location"></i>
                                        </li>
                                        <li>
                                            <div class="careerfy-select-style">
                                                <select>
                                                     <?php
                                    foreach ($results as $res)  
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
                            </div>
                            <!-- Sub Header Form -->
                        </div>

                    </div>
                </div>
            </div>
            <!-- Main Section -->

            <!-- Main Section -->
            <div class="careerfy-main-section">
                <div class="container">
                    <div class="row">
                        
                        <aside class="careerfy-column-3 careerfy-typo-wrap">
                            <div class="careerfy-typo-wrap">
                                <form class="careerfy-search-filter">
                                    <div class="careerfy-search-filter-wrap careerfy-without-toggle">
                                        <h2><a href="#">Locations</a></h2>
                                        <div class="careerfy-search-box">
                                            <input value="Search" onblur="if(this.value == '') { this.value ='Search'; }" onfocus="if(this.value =='Search') { this.value = ''; }" type="text">
                                            <input type="submit" value="">
                                            <i class="careerfy-icon careerfy-search"></i>
                                        </div>
                                        <ul class="careerfy-checkbox">
                                            <li>
                                                <input type="checkbox" id="r1" name="rr" />
                                                <label for="r1"><span></span>San Francisco</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" id="r2" name="rr" />
                                                <label for="r2"><span></span>Portland</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" id="r3" name="rr" />
                                                <label for="r3"><span></span>London</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" id="r4" name="rr" />
                                                <label for="r4"><span></span>Bangalore</label>
                                            </li>
                                        </ul>
                                        <a href="#" class="careerfy-seemore">+see more</a>
                                    </div>
                                    <div class="careerfy-search-filter-wrap careerfy-search-filter-toggle">
                                        <h2><a href="#" class="careerfy-click-btn">Date Posted</a></h2>
                                        <div class="careerfy-checkbox-toggle">
                                            <ul class="careerfy-checkbox">
                                                <li>
                                                    <input type="checkbox" id="r5" name="rr" />
                                                    <label for="r5"><span></span>Last Hour</label>
                                                </li>
                                                <li>
                                                    <input type="checkbox" id="r6" name="rr" />
                                                    <label for="r6"><span></span>Last 24 hours</label>
                                                </li>
                                                <li>
                                                    <input type="checkbox" id="r7" name="rr" />
                                                    <label for="r7"><span></span>Last 7 days</label>
                                                </li>
                                                <li>
                                                    <input type="checkbox" id="r8" name="rr" />
                                                    <label for="r8"><span></span>Last 14 days</label>
                                                </li>
                                                <li>
                                                    <input type="checkbox" id="r9" name="rr" />
                                                    <label for="r9"><span></span>Last 30 days</label>
                                                </li>
                                                <li>
                                                    <input type="checkbox" id="r10" name="rr" />
                                                    <label for="r10"><span></span>All</label>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    
                                     <div class="careerfy-search-filter-wrap careerfy-search-filter-toggle">
                                        <h2><a href="#" class="careerfy-click-btn">Industry</a></h2>
                                        <div class="careerfy-checkbox-toggle">
                                            <ul class="careerfy-checkbox">
                                                <li>
                                                    <input type="checkbox" id="r5" name="rr" />
                                                    <label for="r5"><span></span>IT-Software/Softwar</label>
                                                </li>
                                                <li>
                                                    <input type="checkbox" id="r6" name="rr" />
                                                    <label for="r6"><span></span>Media</label>
                                                </li>
                                                <li>
                                                    <input type="checkbox" id="r7" name="rr" />
                                                    <label for="r7"><span></span>Sales/Marketing</label>
                                                </li>
                                                <li>
                                                    <input type="checkbox" id="r8" name="rr" />
                                                    <label for="r8"><span></span>Call Centre</label>
                                                </li>
                                                <li>
                                                    <input type="checkbox" id="r9" name="rr" />
                                                    <label for="r9"><span></span>Banking/Finance Services</label>
                                                </li>
                                                <li>
                                                    <input type="checkbox" id="r10" name="rr" />
                                                    <label for="r10"><span></span>All</label>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    
                                    
                                    <div class="careerfy-search-filter-wrap careerfy-search-filter-toggle">
                                        <h2><a href="#" class="careerfy-click-btn">Vacancy Type</a></h2>
                                        <div class="careerfy-checkbox-toggle">
                                            <ul class="careerfy-checkbox">
                                                <li>
                                                    <input type="checkbox" id="r11" name="rr" />
                                                    <label for="r11"><span></span>Freelance</label>
                                                    <small>13</small>
                                                </li>
                                                <li>
                                                    <input type="checkbox" id="r12" name="rr" />
                                                    <label for="r12"><span></span>Full Time</label>
                                                    <small>4</small>
                                                </li>
                                                <li>
                                                    <input type="checkbox" id="r13" name="rr" />
                                                    <label for="r13"><span></span>Internship</label>
                                                    <small>12</small>
                                                </li>
                                                <li>
                                                    <input type="checkbox" id="r14" name="rr" />
                                                    <label for="r14"><span></span>Part Time</label>
                                                    <small>22</small>
                                                </li>
                                                <li>
                                                    <input type="checkbox" id="r15" name="rr" />
                                                    <label for="r15"><span></span>Temporary</label>
                                                    <small>5</small>
                                                </li>
                                                <li>
                                                    <input type="checkbox" id="r16" name="rr" />
                                                    <label for="r16"><span></span>Volunteer</label>
                                                    <small>20</small>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="careerfy-search-filter-wrap careerfy-search-filter-toggle">
                                        <h2><a href="#" class="careerfy-click-btn">Categories</a></h2>
                                        <div class="careerfy-checkbox-toggle">
                                            <ul class="careerfy-checkbox">
                                                <li>
                                                    <input type="checkbox" id="r17" name="rr" />
                                                    <label for="r17"><span></span>Accountancy</label>
                                                    <small>10</small>
                                                </li>
                                                <li>
                                                    <input type="checkbox" id="r18" name="rr" />
                                                    <label for="r18"><span></span>Banking</label>
                                                    <small>2</small>
                                                </li>
                                                <li>
                                                    <input type="checkbox" id="r19" name="rr" />
                                                    <label for="r19"><span></span>Charity & Voluntary</label>
                                                    <small>6</small>
                                                </li>
                                                <li>
                                                    <input type="checkbox" id="r20" name="rr" />
                                                    <label for="r20"><span></span>Digital & Creative</label>
                                                    <small>4</small>
                                                </li>
                                                <li>
                                                    <input type="checkbox" id="r21" name="rr" />
                                                    <label for="r21"><span></span>Estate Agency</label>
                                                    <small>19</small>
                                                </li>
                                                <li>
                                                    <input type="checkbox" id="r22" name="rr" />
                                                    <label for="r22"><span></span>Graduate</label>
                                                    <small>5</small>
                                                </li>
                                                <li>
                                                    <input type="checkbox" id="r23" name="rr" />
                                                    <label for="r23"><span></span>IT Contractor</label>
                                                    <small>10</small>
                                                </li>
                                            </ul>
                                            <a href="#" class="careerfy-seemore">+see more</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </aside>
                        <div class="careerfy-column-9 careerfy-typo-wrap">
                            <div class="careerfy-typo-wrap">
                                <!-- FilterAble -->
                                <div class="careerfy-filterable">
                                    <!-- <h2>Showing 0-12 of 37 results</h2> -->
                                    <ul>
                                        <li>
                                            <i class="careerfy-icon careerfy-sort"></i>
                                            <!-- <div class="careerfy-filterable-select">
                                                <select>
                                                    <option>Sort</option>
                                                    <option>Sort</option>
                                                    <option>Sort</option>
                                                </select>
                                            </div> -->
                                        </li>
                                       <!--  <li><a href="#"><i class="careerfy-icon careerfy-squares"></i> Grid</a></li>
                                        <li><a href="#"><i class="careerfy-icon careerfy-list"></i> List</a></li> -->
                                    </ul>
                                </div>
                                <!-- FilterAble -->
                                <!-- JobGrid -->
                       
                                     
                                   
                                <?php
                                    foreach ($results as $res) 
                                    {
                                 
                                ?>    
                                             <div class="careerfy-job careerfy-joblisting-classic">
                                    <ul class="careerfy-row">
                                        <li class="careerfy-column-12">
                                            <div class="careerfy-joblisting-classic-wrap">
                                                <?php
                                                    $row=$this->db->query("select * from company_registration WHERE company_name='$res->company_name'");
                                                    $userdata=$row->row();
                                                    ?>
                                                <figure><a href="#" class="careerfy-applied-jobs-thumb"><img src="<?php echo base_url('Employer/upload/'. $userdata->image)?>" alt="" style="height:80px;width:80px;border:1px solid black;border-radius:4px;   "></a> </figure>
                                                <div class="careerfy-joblisting-text">
                                                    <div class="careerfy-list-option"style="margin-left:30px; ">
                                                       <h2> <?= $res->company_name?></h2>
                                                      <!--  <h2><a href="#"><?= $res->industry?></a></h2> -->
<!--                                                        <h2></h2>-->
                                                        <ul>
                                                            <li><?= $res->title?></li>
                                                            <li><span> Experience: <span><?= $res->experience?></span></span></li>
                                                        </ul>
                                                            <div class="skills">
                                                                <span>Skills: <a href="#"> <?= $res->skill?></a></span>
                                                            </div>
                                                            <div class="skills">
                                                                <span>Posted Date: <a href="#"> <?= $res->date?></a></span>
                                                            </div>
                                                            <div class="salary">
                                                                <span><span>Salary: </span><?= $res->salary?></span>
                                                            </div>
                                                           <a href='<?= base_url("index.php/Users/job_detail/$res->id")?>'> <button class="btn btn-primary" style="padding: 5px 20px;">Know More</button></a>
                                                            </div>
                                                       

                                                    </div>
                                                
                                                    <div class="careerfy-job-userlist">
                                                        <form action="<?= base_url("index.php/Users/save_job1")?>" method="post">
                                            
                                      <input type="hidden" name="email" value="<?php echo $this->session->userdata('email');?>" >
                                    <input type="hidden"  name="job_id" value="<?= $res->id?>">
                                    <input type="hidden"  name="company_name" value="<?= $res->company_name?>">
                                     <input type="hidden"  name="category" value="<?= $res->category?>">
                                     <input type="hidden"  name="skill" value="<?= $res->skill?>">             
                                        <input type="hidden"  name="state" value="<?= $res->state?>">
                                     <input type="hidden"  name="city" value="<?= $res->city?>">
                                             
                                                    <!-- <a href= class="careerfy-job-like"><i class="fa fa-heart"></i></a> -->
                                             <?php
                                        $email=$this->session->userdata('email');

                                        $sql=$this->db->query("select * from save_job where email='$email' and job_id='$res->id'");

                                        if($sql->row())
                                        {
                                          

                                            ?>
                                             <button class="careerfy-job-like" disabled="" type="submit" style="background:#8bb300; "><i class="fa fa-heart" style="color:#fff; "></i></button>
                                         <!--  <input type="button" value="" name=""  disabled="" class="careerfy-job-like" > -->

                                         <?php
                                     }

    else if ($this->session->userdata('email'))
    {
       ?> 
        <button  type="submit" style="background:none!important; "><a href="" class="careerfy-job-like"><i class="fa fa-heart"style="padding-top:2px!important; "></i></a></button>
       
   <?php
    }
    else

    {
      ?>  
       
    <a href="#" value="" class="careerfy-job-like" id="save-job"><i class="fa fa-heart" style="padding-top:2px!important; "></i></a>
  <?php
    }
?>       


                                                       
                                                    </form>
                                                    </div>
                                                    <div class="rec-date" style="text-align: right;margin-top: 10%;">
                                                           <span style="display: block;margin-top:10px;"><i class="careerfy-icon careerfy-maps-and-flags"></i> <?= $res->city?></span>
                                                            <span><?= $res->state?></span>
                                                        </div>
                                                <div class="clearfix"></div>
                                                </div>
                                        
                                        </li>
                                    </ul>
                                </div>
                              <?php
                                }
                              ?>     
                                   
                                    
                                        
                                       
                                </div>
                                <!-- Pagination -->
                                <div class="careerfy-pagination-blog">
                                    <ul class="page-numbers">
                                        <li><a class="prev page-numbers" href="#"><span><i class="careerfy-icon careerfy-arrows4"></i></span></a></li>
                                        <li><span class="page-numbers current">01</span></li>
                                        <li><a class="page-numbers" href="#">02</a></li>
                                        <li><a class="page-numbers" href="#">03</a></li>
                                        <li><a class="page-numbers" href="#">04</a></li>
                                        <li><a class="next page-numbers" href="#"><span><i class="careerfy-icon careerfy-arrows4"></i></span></a></li>
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
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $(".id").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

</body>



</html>
