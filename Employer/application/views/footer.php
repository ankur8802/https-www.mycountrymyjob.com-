
    <footer id="careerfy-footer" class="careerfy-footer-one">
            <div class="container">
                <!-- Footer Widget -->
                <div class="careerfy-footer-widget">
                    <div class="row">
                        <aside class="widget col-md-4 widget_contact_info">
                            <div class="widget_contact_wrap">
                                <a class="careerfy-footer-logo" href="#"><img src="<?= base_url()?>/assets/images/logo2.png" alt=""></a>
                                <p>Welcome to My Country My Job</p>
                                <a href="#" class="careerfy-classic-btn careerfy-bgcolor">Learn more</a>
                            </div>
                        </aside>
                        <aside class="widget col-md-3 widget_nav_manu">
                            <div class="footer-widget-title"><h2>Quick Links</h2></div>
                            <ul>
                                <li><a href="<?= base_url('index.php/Users/index');?>">Home</a></li>
                                <li><a href="">Job Listings</a></li>
                                <li><a href="#">Contact</a></li>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Blog</a></li>
                            </ul>
                        </aside>
                        <aside class="widget col-md-3 widget_nav_manu">
                            <div class="footer-widget-title"><h2>Jobseekers</h2></div>
                            <ul>
                                <li><a href="#">Register Now</a></li>
                                <li><a href="job-listings.html">Search Jobs</a></li>
                                <li><a href="#">Login</a></li>
                                <li><a href="#">Create Job Alert</a></li>
                                <li><a href="#">Report a Problem</a></li>
                                <li><a href="#">Our Blogs</a></li>
                            </ul>
                        </aside>
                        <aside class="widget col-md-2 widget_nav_manu">
                            <div class="footer-widget-title"><h2>Employers</h2></div>
                            <ul>
                                <li><a href="#">Post Jobs</a></li>
                                <li><a href="#">Access Database</a></li>
                                <li><a href="#">Manage Responses</a></li>
                                <li><a href="#">Report a Problem</a></li>
                            </ul>
                        </aside>
                    </div>
                </div>
                <!-- Footer Widget -->
                <!-- CopyRight -->
                <div class="careerfy-copyright">
                    <p>Copyrights © 2019 All Rights Reserved by <a href="#" class="careerfy-color">My Country My Job</a></p>
                    <ul class="careerfy-social-network">
                        <li><a href="#" class="careerfy-bgcolorhover fa fa-facebook"></a></li>
                        <li><a href="#" class="careerfy-bgcolorhover fa fa-twitter"></a></li>
                        <li><a href="#" class="careerfy-bgcolorhover fa fa-dribbble"></a></li>
                        <li><a href="#" class="careerfy-bgcolorhover fa fa-linkedin"></a></li>
                        <li><a href="#" class="careerfy-bgcolorhover fa fa-instagram"></a></li>
                    </ul>
                </div>
                <!-- CopyRight -->
            </div>
        </footer>
        <!-- Footer -->

    </div>
    <!-- Wrapper -->

    <!-- ModalLogin Box -->
    <div class="careerfy-modal fade careerfy-typo-wrap" id="JobSearchModalSignup">
        <div class="modal-inner-area">&nbsp;</div>
        <div class="modal-content-area">
            <div class="modal-box-area">

                <div class="careerfy-modal-title-box">
                    <h2 style="margin-left: 22%;">Login to your account</h2>
                    <span class="modal-close"><i class="fa fa-times"></i></span>
                </div>
                    <div class="careerfy-box-title">
                       
                     <span>Choose your Account Type</span>
                    </div>
                    <div class="careerfy-user-options">
                        <ul>
                            <!-- <li class="one active">
                                <a href="#">
                                     <i class="careerfy-icon careerfy-user"></i>
                                     <span>Candidate</span>
                                     <small>I want to discover awesome companies.</small>
                                </a>
                            </li> -->
                            <li class="two active"style="margin-left: 25%;">
                                <a href="#">
                                     <i class="careerfy-icon careerfy-building"></i>
                                     <center><span>Employer</span></center>
                                     <small>I want to attract the best talent.</small>
                                </a>
                            </li>
                        </ul>
                    </div>
                    
                   <!--  <div class="careerfy-user-form" style="display:block; ">
                        <form action="<?=base_url('index.php/Users/login')?>" method="post"> 
                        <ul>
                            <li>
                                <label>Candidate Email Address:</label>
                                <input placeholder="Enter Your Email Address" name="email" required="" onblur="if(this.value == '') { this.value ='Enter Your Email Address'; }" onfocus="if(this.value =='Enter Your Email Address') { this.value = ''; }" type="email">
                                <i class="careerfy-icon careerfy-mail"></i>
                            </li>
                            <li>
                                <label>Password:</label>
                                <input placeholder="Enter Password" name="password" required="" onblur="if(this.value == '') { this.value ='Enter Password'; }" onfocus="if(this.value =='Enter Password') { this.value = ''; }" type="password">
                                <i class="careerfy-icon careerfy-multimedia"></i>
                            </li>
                            <li>
                                <input type="submit" value="Sign In">
                            </li>
                        </ul>
                   </form>
                        <div class="clearfix"></div>
                        <div class="careerfy-user-form-info">
                            <p>Forgot Password? | <a href="#">Sign Up</a></p>
                            <div class="careerfy-checkbox">
                                <input type="checkbox" id="r10" name="rr" />
                                <label for="r10"><span></span> Remember Password</label>
                            </div>
                        </div>
                    </div> -->
                     <div class="careerfy-user-form1">
                        <form action="<?=base_url('index.php/Employee/login1')?>" method="post"> 
                        <ul>
                            <li>
                                <label>Email Address:</label>
                                <input placeholder="Enter Your Email Address" name="emp_email" required="" onblur="if(this.value == '') { this.value ='Enter Your Email Address'; }" onfocus="if(this.value =='Enter Your Email Address') { this.value = ''; }" type="email">
                                <i class="careerfy-icon careerfy-mail"></i>
                            </li>
                            <li>
                                <label>Password:</label>
                                <input placeholder="Enter Password" name="password" required="" onblur="if(this.value == '') { this.value ='Enter Password'; }" onfocus="if(this.value =='Enter Password') { this.value = ''; }" type="password">
                                <i class="careerfy-icon careerfy-multimedia"></i>
                            </li>
                            <li>
                                <input type="submit" value="Sign In" style="background-color:#9ebd23;">
                            </li>
                             <?php       
     $error = $this->session->flashdata('mesg');

     if($error != null)
     {
       ?>
          <li class="alert alert-danger"  id="topScroll">
           <?php echo $error; ?>
          </li>
          
         <?php 
       }
        ?>
                        </ul>
                    </form>
                        <div class="clearfix"></div>
                        <div class="careerfy-user-form-info">
                            <!-- <p>Forgot Password? | <a href="#">Sign Up</a></p> -->
                            <div class="careerfy-checkbox">
                               <!--  <input type="checkbox" id="r10" name="rr" /> -->
                               <!--  <label for="r10"><span></span> Remember Password</label> -->
                            </div>
                        </div>
                    </div>
                    <!-- <div class="careerfy-box-title careerfy-box-title-sub">
                        <span>Or Sign In With</span>
                    </div>
                    <div class="clearfix"></div>
                    <ul class="careerfy-login-media">
                        <li><a href="#"><i class="fa fa-facebook"></i> Sign In with Facebook</a></li>
                        <li><a href="#" data-original-title="google"><i class="fa fa-google"></i> Sign In with Google</a></li>
                        <li><a href="#" data-original-title="twitter"><i class="fa fa-twitter"></i> Sign In with Twitter</a></li>
                        <li><a href="#" data-original-title="linkedin"><i class="fa fa-linkedin"></i> Sign In with LinkedIn</a></li>
                    </ul> -->
                
            </div>
        </div>
    </div>
    <!-- Modal Signup Box -->

<div class="careerfy-modal fade careerfy-typo-wrap" id="JobSearchModalSignup1">
        <div class="modal-inner-area">&nbsp;</div>
        <div class="modal-content-area">
            <div class="modal-box-area">

                <div class="careerfy-modal-title-box">
                    <h2 style="margin-left: 22%;">Login to your account</h2>
                    <span class="modal-close"><i class="fa fa-times"></i></span>
                </div>
                    <!-- <div class="careerfy-box-title">
                        <span>Choose your Account Type</span>
                    </div> -->
                    <div class="careerfy-user-options">
                        <ul>
                            <!-- <li class="one active">
                                <a href="#">
                                     <i class="careerfy-icon careerfy-user"></i>
                                     <span>Candidate</span>
                                     <small>I want to discover awesome companies.</small>
                                </a>
                            </li> -->
                            <li class="two active"style="margin-left: 25%;">
                                <a href="#">
                                     <i class="careerfy-icon careerfy-building"></i>
                                     <span>Employer</span>
                                     <small>I want to attract the best talent.</small>
                                </a>
                            </li>
                        </ul>
                    </div>
                    
                    <div class="careerfy-user-form" style="display:block; ">
                        <form action="<?=base_url('index.php/Users/login')?>" method="post"> 
                        <ul>
                            <li>
                                <label>Candidate Email Address:</label>
                                <input value="Enter Your Email Address" name="email" onblur="if(this.value == '') { this.value ='Enter Your Email Address'; }" onfocus="if(this.value =='Enter Your Email Address') { this.value = ''; }" type="text">
                                <i class="careerfy-icon careerfy-mail"></i>
                            </li>
                            <li>
                                <label>Password:</label>
                                <input value="Enter Password" name="password" onblur="if(this.value == '') { this.value ='Enter Password'; }" onfocus="if(this.value =='Enter Password') { this.value = ''; }" type="password">
                                <i class="careerfy-icon careerfy-multimedia"></i>
                            </li>
                            <li>
                                <input type="submit" value="Sign In">
                            </li>
                        </ul>
                   </form>
                        <div class="clearfix"></div>
                        <div class="careerfy-user-form-info">
                            <p>Forgot Password? | <button class="candidatesighup">Sign Up</button></p>
                            <div class="careerfy-checkbox">
                               <!--  <input type="checkbox" id="r10" name="rr" /> -->
                               <!--  <label for="r10"><span></span> Remember Password</label> -->
                            </div>
                        </div>
                    </div>
                     <!-- <div class="careerfy-user-form1" style="display:none;">
                        <form action="<?=base_url('index.php/Employee/login1')?>" method="post"> 
                        <ul>
                            <li>
                                <label>Employee Email Address:</label>
                                <input value="Enter Your Email Address" name="email" onblur="if(this.value == '') { this.value ='Enter Your Email Address'; }" onfocus="if(this.value =='Enter Your Email Address') { this.value = ''; }" type="text">
                                <i class="careerfy-icon careerfy-mail"></i>
                            </li>
                            <li>
                                <label>Password:</label>
                                <input value="Enter Password" name="password" onblur="if(this.value == '') { this.value ='Enter Password'; }" onfocus="if(this.value =='Enter Password') { this.value = ''; }" type="text">
                                <i class="careerfy-icon careerfy-multimedia"></i>
                            </li>
                            <li>
                                <input type="submit" value="Sign In">
                            </li>
                        </ul>
                    </form>
                        <div class="clearfix"></div>
                        <div class="careerfy-user-form-info">
                            <p>Forgot Password? | <a href="#">Sign Up</a></p>
                            <div class="careerfy-checkbox">
                                <input type="checkbox" id="r10" name="rr" />
                                <label for="r10"><span></span> Remember Password</label>
                            </div>
                        </div>
                    </div> -->
                    <!-- <div class="careerfy-box-title careerfy-box-title-sub">
                        <span>Or Sign In With</span>
                    </div>
                    <div class="clearfix"></div>
                    <ul class="careerfy-login-media">
                        <li><a href="#"><i class="fa fa-facebook"></i> Sign In with Facebook</a></li>
                        <li><a href="#" data-original-title="google"><i class="fa fa-google"></i> Sign In with Google</a></li>
                        <li><a href="#" data-original-title="twitter"><i class="fa fa-twitter"></i> Sign In with Twitter</a></li>
                        <li><a href="#" data-original-title="linkedin"><i class="fa fa-linkedin"></i> Sign In with LinkedIn</a></li>
                    </ul> -->
                
            </div>
        </div>
    </div>





   <!--candidate form-->

 
    <div class="careerfy-modal fade careerfy-typo-wrap" id="JobSearchModalLogin">
        <div class="modal-inner-area">&nbsp;</div>
        <div class="modal-content-area">
            <div class="modal-box-area">

                <div class="careerfy-modal-title-box">
                    <h2 style="margin-left: 22%;" >Signup to your account</h2>
                    <span class="modal-close"><i class="fa fa-times"></i></span>
                </div>
                
                    <div class="careerfy-box-title">
                        <span>Choose your Account Type</span>
                    </div>
                  
                    <div class="careerfy-user-options">
                        <ul>
                            <li class="two active" style="margin-left: 25%;">
                                <a href="#">
                                     <i class="careerfy-icon careerfy-building"></i>
                                     <span>Employer</span>
                                     <small>I want to attract the best talent.</small>
                                </a>
                            </li>
                        </ul>
                    </div>
                    
  <form action="<?=base_url('index.php/Users/registration')?>" method="post"> 

<div class="careerfy-user-form careerfy-user-form-coltwo" style="display:none;">
                       

                         
                        

                        <ul>
                            <li>
                                <label> Name:</label>
                                <input  name="name" required="" placeholder="Enter Your Name" onblur="if(this.value == '') { this.value ='Enter Your Name'; }" onfocus="if(this.value =='Enter Your Name') { this.value = ''; }" type="text">
                                <i class="careerfy-icon careerfy-user"></i>
                            </li>
                            <!-- <li>
                                <label>Last Name:</label>
                                <input value="Enter Your Name" name="last_name" onblur="if(this.value == '') { this.value ='Enter Your Name'; }" onfocus="if(this.value =='Enter Your Name') { this.value = ''; }" type="text">
                                <i class="careerfy-icon careerfy-user"></i>
                            </li> -->
                            <li>
                                <label>Email Address:</label>
                                <input  name="email" required="" placeholder="Enter Your Email Address" onblur="if(this.value == '') { this.value ='Enter Your Email Address'; }" onfocus="if(this.value =='Enter Your Email Address') { this.value = ''; }" type="email">
                                <i class="careerfy-icon careerfy-mail"></i>
                                <?php

if($this->session->flashdata('msg'))
{
    echo $this->session->flashdata('msg');
}

?>

                            </li>
                             <li>
                                <label>Password:</label>
                                <input  placeholder="Enter Your Password" name="password" required="" onblur="if(this.value == '') { this.value ='Enter Your Name'; }" onfocus="if(this.value =='Enter Your Name') { this.value = ''; }" type="password">
                                <i class="careerfy-icon careerfy-user"></i>
                            </li>

                            <li>

                                <label>phone Number:</label>
                                <input  name="phone"  id="txtPhoneNo" onkeypress="return isNumber(event)" required="" placeholder="Enter Your Phone Number" maxlength="10" type="text">
                                <i class="careerfy-icon careerfy-technology"></i>
                            </li>


                            <!-- <li class="careerfy-user-form-coltwo-full" style="display:none; ">
                                <label>Categories:</label>
                                <div class="careerfy-profile-select">
                                    <select name="categories">
                                        <option>Sales & Marketing</option>
                                        <option>Sales & Marketing</option>
                                    </select>
                                </div>
                            </li>  -->
                            <li class="careerfy-user-form-coltwo-full">
                                <img src="extra-images/login-robot.png" alt="">
                            </li>
                            <li class="careerfy-user-form-coltwo-full">
                                <input type="submit" value="Sign Up">
                            </li>
                        </ul>
                            </form>
                    </div>

                    <div class="careerfy-user-form1 careerfy-user-form-coltwo" style="display:block" >
                       
<form action="<?=base_url('index.php/Employee/registration1')?>" method="post"> 
                         
                        <?php       
     $error = $this->session->flashdata('msg');

     if($error != null)
     {
       ?>
          <div class="alert alert-danger" id="topScroll">
           <?php echo $error; ?>
          </div>
          
         <?php 
       }
        ?>
            <!-- 22222 -->
                        <ul>
<!--                             <li>
                                <label>Employer Name:</label>
                                <input name="employer_name" class="company" required="" placeholder="Enter Employer Name" onblur="if(this.value == '') { this.value ='Enter Your Name'; }" onfocus="if(this.value =='Enter Your Name') { this.value = ''; }" type="text">
                                <i class="careerfy-icon careerfy-user"></i>
                            </li> -->
                            <li>
                                <label>Company Name:</label>
                                <input name="company_name" class="company" required="" placeholder="Enter Company Name" onblur="if(this.value == '') { this.value ='Enter Your Name'; }" onfocus="if(this.value =='Enter Your Name') { this.value = ''; }" type="text">
                                <i class="careerfy-icon careerfy-user"></i>
                            </li>
                         
                            <li>
                                <label>Email Address:</label>
                                <input  name="emp_email" required="" placeholder="Enter Your Email Address" onblur="if(this.value == '') { this.value ='Enter Your Email Address'; }" onfocus="if(this.value =='Enter Your Email Address') { this.value = ''; }" type="email">
                                <i class="careerfy-icon careerfy-mail"></i>
                               


                            </li>
                            <li>
                                <label>Contact Person Information :</label>
                                <input name="contact_person" class="company" required="" placeholder="Enter Contact Person Information" onblur="if(this.value == '') { this.value ='Enter Your Name'; }" onfocus="if(this.value =='Enter Your Name') { this.value = ''; }" type="text">
                                <i class="careerfy-icon careerfy-user"></i>
                            </li>
                             <li>
                                <label>Password:</label>
                                <input  name="password" placeholder="Enter Your Password" required="" onblur="if(this.value == '') { this.value ='Enter Your Name'; }" onfocus="if(this.value =='Enter Your Name') { this.value = ''; }" type="password">
                                <i class="careerfy-icon careerfy-user"></i>
                            </li>
                            <li>
                                <label>Confirm Password:</label>
                                <input  name="cpassword" placeholder="Enter Your Password" required="" onblur="if(this.value == '') { this.value ='Enter Your Name'; }" onfocus="if(this.value =='Enter Your Name') { this.value = ''; }" type="password">
                                <i class="careerfy-icon careerfy-user"></i>
                            </li>
                            <li>

                                <label>Phone Number:</label>
                                <input pattern="[6-9]{1}[0-9]{9}" name="phone"  id="txtPhoneNo" onkeypress="return isNumber(event)" required="" placeholder="Enter Your Phone Number" maxlength="10" type="text">
                                <i class="careerfy-icon careerfy-technology"></i>
                            </li>
                                 
                               <!-- <li>
                                <label>Registration No.:</label>
                                <input  name="registration_no" placeholder="Enter Your Registration No. " required="" onblur="if(this.value == '') { this.value ='Enter Your Name'; }" onfocus="if(this.value =='Enter Your Name') { this.value = ''; }" type="text">
                                <i class="careerfy-icon careerfy-user"></i>
                            </li> -->
                            <!-- <li class="careerfy-user-form-coltwo-full">
                                <label>Categories:</label>
                                <div class="careerfy-profile-select">
                                    <select name="categories" required="">
                                        <option value="" >Select Category</option>
                                        <?php
                                        foreach ($data as $key )
                                         {
                                            ?>
                                           
                                        <option ><?= $key->category?></option>
                                        <?php
                                    }
                                    ?>
                                    </select>
                                </div>
                            </li> -->
                            <li>

                                <label>Address:</label>
                                <input required="" placeholder="Enter your address"  name="address" type="text">
                                <i class="careerfy-icon careerfy-address"></i>
                            </li>

                            <li class="careerfy-user-form-coltwo-full">
                                <label>Country:</label>
                                <div class="careerfy-profile-select">
                                    <select name="country" class="country" required="">
                                        <option value="" >Select Country</option>
                                       <?php


                                                        foreach ($country as $country) {
                                                       ?>

                                    <option> <?= $country->CountryName ?></option>
                                                       <?php
                                                        }
                                                       

                                                        ?>
                                    </select>
                                </div>
                            </li>

                            <li class="careerfy-user-form-coltwo-full state_box">
                                <label>State:</label>
                                <div class="careerfy-profile-select">
                                    <select name="state" class="state_val" required="">
                                        <option value="" >Select State</option>
                                        <?php
                                        foreach ($state_name as $key )
                                         {
                                            ?>
                                           
                                         <option><?php echo $key->state;?></option>
                                        <?php
                                    }
                                    ?>
                                    </select>
                                </div>
                            </li>
                            <li class="careerfy-user-form-coltwo-full city_box">
                                <label>City:</label>
                                <div class="careerfy-profile-select">
                                    <select name="city" required="" class="city_sel">
                                        <option value="" >Select City</option>
                                        <?php
                                        foreach ($city_name as $key )
                                         {
                                            ?>
                                           
                                         <option><?php echo $key->city;?></option>
                                        <?php
                                    }
                                    ?>
                                    </select>
                                </div>
                            </li>

                              
                            <li>
                                 <?php
                                $rand=rand(111,999);
                                ?>
                                <label>Captcha :</label>
                                <input    id="txtPhoneNo" onkeypress="return isNumber(event)" required="" class="u_captcha" placeholder="Enter Captcha" maxlength="10" type="text">

                                <input type="hidden" name="" class="captcha" value="<?= $rand ?>">
                                <!-- <i class="careerfy-icon careerfy-technology"></i> -->
                            </li>
                            <li></li>

                             <li>
                               
                               <div class="text-center" style="height: 50px;width:100px;background: silver;font-size:20px;padding: 15px;color:white"><?= $rand ?></div>
                               <p style="display: none;color:red" class="error">Please Enter Correct Captcha</p>

                               
                            </li> 

                             <li class="careerfy-user-form-coltwo-full">
                                <p><input type="checkbox" name="" required="" style="width: auto !important"> I agree to the Terms and Conditions.</p>
                            </li>
                            <li class="careerfy-user-form-coltwo-full">
                                <img src="extra-images/login-robot.png" alt="">
                            </li>
                            <li class="careerfy-user-form-coltwo-full">
                                <input type="submit" class="sub_btn" value="Sign Up" style="background-color:#9ebd23; ">
                            </li>
                        </ul>
                            </form>
                    </div>

                    <div class="careerfy-box-title careerfy-box-title-sub">
                       <!--  <span>Or Sign Up With</span> -->
                    </div>
                    <div class="clearfix"></div>
                    <ul class="careerfy-login-media">
                        <!-- <li><a href="#"><i class="fa fa-facebook"></i> Sign In with Facebook</a></li>
                        <li><a href="#" data-original-title="google"><i class="fa fa-google"></i> Sign In with Google</a></li>
                        <li><a href="#" data-original-title="twitter"><i class="fa fa-twitter"></i> Sign In with Twitter</a></li>
                        <li><a href="#" data-original-title="linkedin"><i class="fa fa-linkedin"></i> Sign In with LinkedIn</a></li> -->
                    </ul>
            
                
            </div>
        </div>

    </div>




<!-- 
    <div class="careerfy-modal fade careerfy-typo-wrap" id="mylogin">
        <div class="modal-inner-area">&nbsp;</div>
        <div class="modal-content-area">
            <div class="modal-box-area">

                <div class="careerfy-modal-title-box">
                    <h2>Login to your account</h2>
                    <span class="modal-close"><i class="fa fa-times"></i></span>
                </div>
                <form>
                    <div class="careerfy-box-title">
                        <span>Choose your Account Type</span>
                    </div>
                    <div class="careerfy-user-options">
                        <ul style="margin-left: 25%;">
                            <li class="active">
                                <a href="#">
                                     <i class="careerfy-icon careerfy-user"></i>
                                     <span>Candidate</span>
                                     <small>I want to discover awesome companies.</small>
                                </a>
                            </li>
                            
                        </ul>
                    </div>
                    <div class="careerfy-user-form">
                        <ul>
                            <li>
                                <label>Email Address:</label>
                                <input value="" placeholder="Enter Your Email Address" required="" onblur="if(this.value == '') { this.value ='Enter Your Email Address'; }" onfocus="if(this.value =='Enter Your Email Address') { this.value = ''; }" type="email">
                                <i class="careerfy-icon careerfy-mail"></i>
                            </li>Categories
                            <li>
                                <label>Password:</label>
                                <input value="" placeholder="Enter Password" required="" onblur="if(this.value == '') { this.value ='Enter Password'; }" onfocus="if(this.value =='Enter Password') { this.value = ''; }" type="password">
                                <i class="careerfy-icon careerfy-multimedia"></i>
                            </li>
                            <li>
                                <input type="submit" value="Sign In">
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                        <div class="careerfy-user-form-info">
                            <p>Forgot Password? | <a href="#">Sign Up</a></p>
                            <div class="careerfy-checkbox">
                                <input type="checkbox" id="r10" name="rr" />
                                <label for="r10"><span></span> Remember Password</label>
                            </div>
                        </div>
                    </div>
                    <div class="careerfy-box-title careerfy-box-title-sub">
                        <span>Or Sign In With</span>
                    </div>
                    <div class="clearfix"></div>
                    <ul class="careerfy-login-media">
                        <li><a href="#"><i class="fa fa-facebook"></i> Sign In with Facebook</a></li>
                        <li><a href="#" data-original-title="google"><i class="fa fa-google"></i> Sign In with Google</a></li>
                        <li><a href="#" data-original-title="twitter"><i class="fa fa-twitter"></i> Sign In with Twitter</a></li>
                        <li><a href="#" data-original-title="linkedin"><i class="fa fa-linkedin"></i> Sign In with LinkedIn</a></li>
                    </ul>
                </form>
                
            </div>
        </div>
    </div>
 -->









 <div class="careerfy-modal fade careerfy-typo-wrap" id="mylogin2">
        <div class="modal-inner-area">&nbsp;</div>
        <div class="modal-content-area">
            <div class="modal-box-area">

                <div class="careerfy-modal-title-box">
                    <h2>Login to your account</h2>
                    <span class="modal-close"><i class="fa fa-times"></i></span>
                </div>
                <form action="<?=base_url('index.php/Employee/login1')?>" method="post">
                    <div class="careerfy-box-title">
                        <span>Choose your Account Type</span>
                    </div>
                    <div class="careerfy-user-options">
                        <ul style="margin-left: 25%;">
                            <li class="active">
                                <a href="#">
                                     <i class="careerfy-icon careerfy-user"></i>
                                     <span>Employer</span>
                                     <small>I want to attract the best talent.</small>
                                </a>
                            </li>
                            
                        </ul>
                    </div>
                    <div class="careerfy-user-form">
                        <ul>
                            <li>
                                <label>Email Address:</label>
                                <input value="" name="emp_email" required="" placeholder="Enter Your Email Address"   onblur="if(this.value == '') { this.value ='Enter Your Email Address'; }" onfocus="if(this.value =='Enter Your Email Address') { this.value = ''; }" type="text">
                                <i class="careerfy-icon careerfy-mail"></i>
                            </li>
                            <li>
                                <label>Password:</label>
                                <input value="" name="password" required="" placeholder="Enter Password"  type="password">
                                <i class="careerfy-icon careerfy-multimedia"></i>
                            </li>
                            <li>
                                <input type="submit" value="Sign In">
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                        <div class="careerfy-user-form-info">
                            
                            <div class="careerfy-checkbox">
                              <!--   <input type="checkbox" id="r10" name="rr" /> -->
                               <!--  <label for="r10"><span></span> Remember Password</label> -->
                            </div>
                        </div>
                    </div>
                   <!--  <div class="careerfy-box-title careerfy-box-title-sub">
                        <span>Or Sign In With</span>
                    </div> -->
                    <div class="clearfix"></div>
                   <!--  <ul class="careerfy-login-media">
                        <li><a href="#"><i class="fa fa-facebook"></i> Sign In with Facebook</a></li>
                        <li><a href="#" data-original-title="google"><i class="fa fa-google"></i> Sign In with Google</a></li>
                        <li><a href="#" data-original-title="twitter"><i class="fa fa-twitter"></i> Sign In with Twitter</a></li>
                        <li><a href="#" data-original-title="linkedin"><i class="fa fa-linkedin"></i> Sign In with LinkedIn</a></li>
                    </ul> -->
                </form>
                
            </div>
        </div>
    </div>








 <div class="careerfy-modal fade careerfy-typo-wrap" id="mylogin3">
        <div class="modal-inner-area">&nbsp;</div>
        <div class="modal-content-area">
            <div class="modal-box-area">

                <div class="careerfy-modal-title-box">
                    <h2>Login to your account</h2>
                    <span class="modal-close"><i class="fa fa-times"></i></span>
                </div>
                        <form action="<?=base_url('index.php/Employee/log')?>" method="post">
               
                    <div class="careerfy-box-title">
                        <span>Choose your Account Type</span>
                    </div>
                    <div class="careerfy-user-options">
                        <ul style="margin-left: 25%;">
                            <li class="active">
                                <a href="#">
                                     <i class="careerfy-icon careerfy-user"></i>
                                     <span>Employer</span>
                                     <small>I want to attract the best talent.</small>
                                </a>
                            </li>
                            
                        </ul>
                    </div>
      

                    <div class="careerfy-user-form">
                        <ul>
                            <li>
                                <label>Email Address:</label>
                                <input value="" name="emp_email" required="" placeholder="Enter Your Email Address"   type="text">
                                <i class="careerfy-icon careerfy-mail"></i>
                            </li>
                            <li>
                                <label>Password:</label>
                                <input value="" name="password" required="" placeholder="Enter Password"  type="password">
                                <i class="careerfy-icon careerfy-multimedia"></i>
                            </li>
                            <li>
                                <input type="submit" value="Sign In">
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                        <div class="careerfy-user-form-info">
                            
                            <!-- <div class="careerfy-checkbox">
                                <input type="checkbox" id="r10" name="rr" />
                                <label for="r10"><span></span> Remember Password</label>
                            </div> -->
                        </div>
                    </div>

                    <!-- <div class="careerfy-box-title careerfy-box-title-sub">
                        <span>Or Sign In With</span>
                    </div>
                    <div class="clearfix"></div>
                    <ul class="careerfy-login-media">
                        <li><a href="#"><i class="fa fa-facebook"></i> Sign In with Facebook</a></li>
                        <li><a href="#" data-original-title="google"><i class="fa fa-google"></i> Sign In with Google</a></li>
                        <li><a href="#" data-original-title="twitter"><i class="fa fa-twitter"></i> Sign In with Twitter</a></li>
                        <li><a href="#" data-original-title="linkedin"><i class="fa fa-linkedin"></i> Sign In with LinkedIn</a></li>
                    </ul> -->
                </form>
                
            </div>
        </div>
    </div>




    <div class="careerfy-modal fade careerfy-typo-wrap" id="JobSearchModalLogin2">
        <div class="modal-inner-area">&nbsp;</div>
        <div class="modal-content-area">
            <div class="modal-box-area" style="margin: 0px;">

                <div class="careerfy-modal-title-box">
                    <h2>Signup to your account</h2>
                    <span class="modal-close"><i class="fa fa-times"></i></span>
                </div>
                
                    <div class="careerfy-box-title">
                        <span>Choose your Account Type</span>
                    </div>
                  
                    <div class="careerfy-user-options" style="margin-left: 22%;">
                        <ul> 
                            
                            <li class="two active">
                                <a href="#">
                                     <i class="careerfy-icon careerfy-building"></i>
                                     <span>Employer</span>
                                     <small>I want to attract the best talent.</small>
                                </a>
                            </li>
                        </ul>
                    </div>
                    
  <form action="<?=base_url('index.php/Users/registration')?>" method="post"> 

<div class="careerfy-user-form careerfy-user-form-coltwo" style="display:none;">
                       

                         
                        

                        <ul>
                            <li>
                                <label> Name:</label>
                                <input  name="name" required="" placeholder="Enter Your Name" onblur="if(this.value == '') { this.value ='Enter Your Name'; }" onfocus="if(this.value =='Enter Your Name') { this.value = ''; }" type="text">
                                <i class="careerfy-icon careerfy-user"></i>
                            </li>
                            <!-- <li>
                                <label>Last Name:</label>
                                <input value="Enter Your Name" name="last_name" onblur="if(this.value == '') { this.value ='Enter Your Name'; }" onfocus="if(this.value =='Enter Your Name') { this.value = ''; }" type="text">
                                <i class="careerfy-icon careerfy-user"></i>
                            </li> -->
                            <li>
                                <label>Email Address:</label>
                                <input  name="email" required="" placeholder="Enter Your Email Address" onblur="if(this.value == '') { this.value ='Enter Your Email Address'; }" onfocus="if(this.value =='Enter Your Email Address') { this.value = ''; }" type="email">
                                <i class="careerfy-icon careerfy-mail"></i>
                                <?php

if($this->session->flashdata('msg'))
{
    echo $this->session->flashdata('msg');
}

?>

                            </li>
                             <li>
                                <label>Password:</label>
                                <input  placeholder="Enter Your Password" name="password" required="" onblur="if(this.value == '') { this.value ='Enter Your Name'; }" onfocus="if(this.value =='Enter Your Name') { this.value = ''; }" type="password">
                                <i class="careerfy-icon careerfy-user"></i>
                            </li>

                            <li>

                                <label>Phone Number:</label>
                                <input pattern="[6-9]{1}[0-9]{9}" name="phone"  id="txtPhoneNo" onkeypress="return isNumber(event)" required="" placeholder="Enter Your Phone Number" maxlength="10" type="text">
                                <i class="careerfy-icon careerfy-technology"></i>
                            </li>


                            <!-- <li class="careerfy-user-form-coltwo-full" style="display:none; ">
                                <label>Categories:</label>
                                <div class="careerfy-profile-select">
                                    <select name="categories">
                                        <option>Sales & Marketing</option>
                                        <option>Sales & Marketing</option>
                                    </select>
                                </div>
                            </li>  -->
                            <li class="careerfy-user-form-coltwo-full">
                                <img src="extra-images/login-robot.png" alt="">
                            </li>
                            <li class="careerfy-user-form-coltwo-full">
                                <input type="submit" value="Sign Up">
                            </li>
                        </ul>
                            </form>
                    </div>

                    <div class="careerfy-user-form1 careerfy-user-form-coltwo" style="display:block;" >
                       
<form action="<?=base_url('index.php/Employee/registration1')?>" method="post"> 
                         
                        <?php       
     $error = $this->session->flashdata('msg');

     if($error != null)
     {
       ?>
          <div class="alert alert-danger" id="topScroll">
           <?php echo $error; ?>
          </div>
          
         <?php 
       }
        ?>

                        <ul>
                            <li>
                                <label>Company Name:</label>
                                <input name="company_name" required="" class="company" placeholder="Enter Your Name" onblur="if(this.value == '') { this.value ='Enter Your Name'; }" onfocus="if(this.value =='Enter Your Name') { this.value = ''; }" type="text">
                                <i class="careerfy-icon careerfy-user"></i>
                            </li>
                            <!-- <li>
                                <label>Last Name:</label>
                                <input value="Enter Your Name" name="last_name" onblur="if(this.value == '') { this.value ='Enter Your Name'; }" onfocus="if(this.value =='Enter Your Name') { this.value = ''; }" type="text">
                                <i class="careerfy-icon careerfy-user"></i>
                            </li> -->
                            <li>
                                <label>Email Address:</label>
                                <input  name="emp_email" required="" placeholder="Enter Your Email Address" onblur="if(this.value == '') { this.value ='Enter Your Email Address'; }" onfocus="if(this.value =='Enter Your Email Address') { this.value = ''; }" type="email">
                                <i class="careerfy-icon careerfy-mail"></i>
                               


                            </li>
                             <li>
                                <label>Password:</label>
                                <input  name="password" placeholder="Enter Your Password" required="" onblur="if(this.value == '') { this.value ='Enter Your Name'; }" onfocus="if(this.value =='Enter Your Name') { this.value = ''; }" type="password">
                                <i class="careerfy-icon careerfy-user"></i>
                            </li>

                           <li>

                                <label>Phone Number:</label>
                                <input pattern="[6-9]{1}[0-9]{9}" name="phone"  id="txtPhoneNo" onkeypress="return isNumber(event)" required="" placeholder="Enter Your Phone Number" maxlength="10" type="text">
                                <i class="careerfy-icon careerfy-technology"></i>
                            </li>
                                 
                               <!-- <li>
                                <label>Registration No.:</label>
                                <input  name="registration_no" placeholder="Enter Your Registration No. " required="" onblur="if(this.value == '') { this.value ='Enter Your Name'; }" onfocus="if(this.value =='Enter Your Name') { this.value = ''; }" type="text">
                                <i class="careerfy-icon careerfy-user"></i>
                            </li> -->
                            <li class="careerfy-user-form-coltwo-full">
                                <label>Categories:</label>
                                <div class="careerfy-profile-select">
                                   <select name="categories" required="">
                                        <option value="" >Select Category</option>
                                        <?php
                                        foreach ($data as $key )
                                         {
                                            ?>
                                           
                                        <option ><?= $key->category?></option>
                                        <?php
                                    }
                                    ?>
                                    </select>
                                </div>
                            </li> 
                            <li>
                                 <?php
                                $rand=rand(111,999);
                                ?>
                                <label>Captcha :</label>
                                <input    id="txtPhoneNo" onkeypress="return isNumber(event)" required="" class="u_captcha" placeholder="Enter Captcha" maxlength="10" type="text">

                                <input type="hidden" name="" class="captcha" value="<?= $rand ?>">
                                <!-- <i class="careerfy-icon careerfy-technology"></i> -->
                            </li>
                            <li></li>

                             <li>
                               
                               <div class="text-center" style="height: 50px;width:100px;background: silver;font-size:20px;padding: 15px;color:white"><?= $rand ?></div>
                               <p style="display: none;color:red" class="error">Please Enter Correct Captcha</p>

                            </li> 
                            <li class="careerfy-user-form-coltwo-full">
                                <img src="extra-images/login-robot.png" alt="">
                            </li>
                            <li class="careerfy-user-form-coltwo-full">
                                <input type="submit" value="Sign Up">
                            </li>
                        </ul>
                            </form>
                    </div>

                    <div class="careerfy-box-title careerfy-box-title-sub">
                       <!--  <span>Or Sign Up With</span> -->
                    </div>
                    <div class="clearfix"></div>
                   <!--  <ul class="careerfy-login-media">
                        <li><a href="#"><i class="fa fa-facebook"></i> Sign In with Facebook</a></li>
                        <li><a href="#" data-original-title="google"><i class="fa fa-google"></i> Sign In with Google</a></li>
                        <li><a href="#" data-original-title="twitter"><i class="fa fa-twitter"></i> Sign In with Twitter</a></li>
                        <li><a href="#" data-original-title="linkedin"><i class="fa fa-linkedin"></i> Sign In with LinkedIn</a></li>
                    </ul> -->
            
                
            </div>
        </div>


 <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
     
  <script type="text/javascript">
     
 
 
  $(document).ready(function(){
    $('.careerfy-user-options ul li').click(function() {
        $(this).siblings('ul li').removeClass('active');
        $(this).addClass('active');
    });
});
</script>
<script type="text/javascript">
    $(document).ready(function() {

$(".u_captcha").keyup(function(){
    if($(this).val()==$(".captcha").val())
    {
        $('.sub_btn').attr("disabled",false);
        $(".error").hide();
    }
    else
    {
        $('.sub_btn').attr("disabled",true);
         $(".error").show();
    }
});
});
    </script>


<script>
$(document).ready(function(){
  $(".two").click(function(){
    $(".careerfy-user-form").css("display","none");
    $(".careerfy-user-form1").css("display","block");
  });
});
</script>
<script>
$(document).ready(function(){
  $(".one").click(function(){
    $(".careerfy-user-form").css("display","block");
    $(".careerfy-user-form1").css("display","none");
  });
});
</script>

<script type="text/javascript">

    $(document).ready(function(){
        $(".hr").click(function(){
          $(".careerfy-modal").show();
        });

    });
</script>

  <?php
   if(!$this->session->userdata('email'))
   {
  ?>
 <script>
    $("#hr").click(function(){
    $('#mylogin').removeClass('fade').addClass('fade-in'); 
    $('body').addClass('careerfy-modal-active');
    })
    
            
             $("#Employer").click(function(){
    $('#mylogin2').removeClass('fade').addClass('fade-in'); 
    $('body').addClass('careerfy-modal-active');
    })

                        $("#postjob").click(function(){
    $('#mylogin3').removeClass('fade').addClass('fade-in'); 
    $('body').addClass('careerfy-modal-active');
    })
       
                             $("#employer-signup").click(function(){
    $('#JobSearchModalLogin2').removeClass('fade').addClass('fade-in'); 
    $('body').addClass('careerfy-modal-active');
    }) 
    
    </script>
    <?php
     }
    ?>
    <script type="text/javascript">

        function isNumber(evt) {
  evt = (evt) ? evt : window.event;
  var charCode = (evt.which) ? evt.which : evt.keyCode;
  if (charCode > 31 && (charCode < 48 || charCode > 57)) 
    // alert("Please enter only Numbers.");
    return false;
  

  return true;
}
    function ValidateNo() {
  var phoneNo = document.getElementById('#txtPhoneNo');

  if (phoneNo.value == "" || phoneNo.value == null) {
    alert("Please enter your Mobile No.");
    return false;
  }
  if (phoneNo.value.length < 10 || phoneNo.value.length > 10) {
    alert("Mobile No. is not valid, Please Enter 10 Digit Mobile No.");
    return false;
  }

  alert("Success ");
  return true;
}
      </script>
      <script type="text/javascript">
        $(document).ready(function(){
          $('.company').keyup(function(){

this.value = this.value.toUpperCase();

});
          });
      </script>

      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>



 <!-- <script>
                    <?php
                    
                   
                        if( $_SESSION['submit']=='on')
                        {
                    ?>
               swal({
  title: "",
  text: "Waiting For Approval",
  icon: "success",
  button: "ok",
});
                <?php
                
                    }

                    unset($_SESSION['submit']);
                ?>
            </script>

             -->
             <script>
 <?php
     if($this->session->flashdata('item1'))
      { 
        ?> 
swal({
  title:"Try Again",
  text:"Email Aready Exists",
  icon:"",
  button:"ok",
   dangerMode: true,
});
       
<?php } ?>
</script>

<script>
 <?php
     if($this->session->flashdata('item1'))
      { 
        ?> 
swal({
  title:"",
  text:"Registration Successful",
  icon:"success",
  button:"ok",

});
       
<?php } ?>
</script>
<script>
 <?php
     if($this->session->flashdata('item'))
      { 
        ?> 
swal({
  title:"Job Post Successfully",
  text:"Waiting For Approval",
  icon:"success",
  button:"ok",

});
       
<?php } ?>
</script>
<script>
 <?php
     if($this->session->flashdata('item2'))
      { 
        ?> 
swal({
  title:"",
  text:"Waiting For Approval",
  icon:"success",
  button:"ok",

});
       
<?php } ?>
</script>
<script>
 <?php
     if($this->session->flashdata('item3'))
      { 
        ?> 
swal({
  title:"",
  text:"Details Not Matched",
  icon: "error",
  button:"Try Again",
  dangerMode: true,

});
       
<?php } ?>
</script>
<script>
 <?php
     if($this->session->flashdata('item4'))
      { 
        ?> 
swal({
  title:"",
  text:"Profile updated Successfully",
  icon:"success",
  button:"ok",

});
       
<?php } ?>
</script>
<script>
 <?php
     if($this->session->flashdata('item5'))
      { 
        ?> 
swal({
  title:"",
  text:"Profile updated successfully",
  icon:"success",
  button:"ok",

});
       
<?php } ?>
</script>
<script>
 <?php
     if($this->session->flashdata('item11'))
      { 
        ?> 
swal({
  title:"",
  text:"We will contact you soon as possible.",
  icon:"success",
  button:"ok",

});
       
<?php } ?>
</script>

<script>
 <?php
     if($this->session->flashdata('item6'))
      { 
        ?> 
swal({
  title:"",
  text:"Password updated successfully",
  icon:"success",
  button:"ok",

});
       
<?php } ?>
</script>
<script>
 <?php
     if($this->session->flashdata('item7'))
      { 
        ?> 
swal({
  title:"",
  text:"Failed to update password",
 icon: "error",
  button:"Try Again",
  dangerMode: true,

});
       
<?php } ?>
</script>
<script>
 <?php
     if($this->session->flashdata('item8'))
      { 
        ?> 
swal({
  title:"",
  text:"old and new pass can not be same",
  icon: "error",
  button:"Try Again",
  dangerMode: true,
});
       
<?php } ?>
</script>
<script>
 <?php
     if($this->session->flashdata('item9'))
      { 
        ?> 
swal({
  title:"",
  text:"New password & Confirm password is not matching",
 icon: "error",
  button:"Try Again",
  dangerMode: true,

});
       
<?php } ?>
</script>
<script>
 <?php
     if($this->session->flashdata('item10'))
      { 
        ?> 
swal({
  title:"",
  text:"Sorry! Current password is not matching",
  icon: "error",
  button:"Try Again",
  dangerMode: true,

});
       
<?php } ?>
</script>
<script>
 <?php
     if($this->session->flashdata('item12'))
      { 
        ?> 
swal({
  title:"",
  text:"Your status is Pending,Waiting For Approval",
 icon: "error",
  button:"Try Again",
  dangerMode: true,

});
       
<?php } ?>
</script>
<script>
 <?php
     if($this->session->flashdata('item13'))
      { 
        ?> 
swal({
  title:"",
  text:"You are blocked",
 icon: "error",
  button:"Try Again",
  dangerMode: true,

});
       
<?php } ?>
</script>
<script>
 <?php
     if($this->session->flashdata('item14'))
      { 
        ?> 
swal({
  title:"",
  text:"Email Already Exists",
 icon: "error",
  button:"Try Again",
  dangerMode: true,

});
       
<?php } ?>
</script>
<script>
 <?php
     if($this->session->flashdata('company_name_exist'))
      { 
        ?> 
swal({
  title:"",
  text:"Company Name Already Exists",
 icon: "error",
  button:"Try Again",
  dangerMode: true,

});
       
<?php } ?>
</script>
<script>
 <?php
     if($this->session->flashdata('item15'))
      { 
        ?> 
swal({
  title:"",
  text:"You Are Rejected",
 icon: "error",
  button:"Try Again",
  dangerMode: true,

});
       
<?php } ?>
</script>

<script>
      $(document).ready(function() {

$(".state_box").hide();
    $(".city_box").hide();

$(".country").on("change",function(){
    if($(".country").val()!='India')
{
    $(".state_box").hide();
    $(".city_box").hide();
}
else
{
   $(".state_box").show();
    $(".city_box").show();
}
});


    $('.hr').on('keydown', function(event) {
        if (this.selectionStart == 0 && event.keyCode >= 65 && event.keyCode <= 90 && !(event.shiftKey) && !(event.ctrlKey) && !(event.metaKey) && !(event.altKey)) {
           var $t = $(this);
           event.preventDefault();
           var char = String.fromCharCode(event.keyCode);
           $t.val(char + $t.val().slice(this.selectionEnd));
           this.setSelectionRange(1,1);
        }
    });
});
</script>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?= base_url()?>/assets/script/jquery.js"></script>
    <script src="<?= base_url()?>/assets/script/bootstrap.js"></script>
    <script src="<?= base_url()?>/assets/script/slick-slider.js"></script>
    <script src="<?= base_url()?>/assets/plugin-script/counter.js"></script>
    <script src="<?= base_url()?>/assets/plugin-script/progressbar.js"></script>
    <script src="<?= base_url()?>/assets/plugin-script/fancybox.pack.js"></script>
    <script src="<?= base_url()?>/assets/plugin-script/isotope.min.js"></script>
    <script src="<?= base_url()?>/assets/plugin-script/functions.js"></script>
    <script src="<?= base_url()?>/assets/script/functions.js"></script>