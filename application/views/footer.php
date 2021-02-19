        <footer id="careerfy-footer" class="careerfy-footer-one">
            <div class="container">
                <!-- Footer Widget -->
                <div class="careerfy-footer-widget">
                    <div class="row">
                        <aside class="widget col-md-4 widget_contact_info">
                            <div class="widget_contact_wrap">
                                <a class="careerfy-footer-logo" href="#"><img src="<?= base_url()?>/assets/images/logo2.png" alt=""></a>
                                <p>Welcome to My Country My Job</p>
                                <!-- <a href="#" class="careerfy-classic-btn careerfy-bgcolor">Learn more</a> -->
                            </div>
                        </aside>
                        <aside class="widget col-md-3 widget_nav_manu">
                            <div class="footer-widget-title"><h2>Quick Links</h2></div>
                            <ul>
                               
                             <li><a href="<?= base_url();?>">Home</a></li>
                                <li><a href="<?= base_url('find-jobs')?>">Find Jobs</a></li>
                                <li><a href="javascript:void(0)">Contact</a></li>
                                <li><a href="javascript:void(0)">About Us</a></li>
                            </ul>
                        </aside>
                        <aside class="widget col-md-3 widget_nav_manu">
                            <div class="footer-widget-title"><h2>Jobseekers</h2></div>
                            <ul>
                                <li><a href="javascript:void(0)">Create Job Alert</a></li>
                                <li><a href="javascript:void(0)">Report a Problem</a></li>
                                <li><a href="javascript:void(0)">Our Blogs</a></li>
                            </ul>
                        </aside>
                        <aside class="widget col-md-2 widget_nav_manu">
                            <div class="footer-widget-title"><h2>Employers</h2></div>
                            <ul>
                                <li><a href="javascript:void(0)">Post Jobs</a></li>
                                <li><a href="javascript:void(0)">Access Database</a></li>
                                <li><a href="javascript:void(0)">Manage Responses</a></li>
                                <li><a href="javascript:void(0)">Report a Problem</a></li>
                            </ul>
                        </aside>
                    </div>
                </div>
                <!-- Footer Widget -->
                <!-- CopyRight -->
                <div class="careerfy-copyright">
                    <p>Copyrights © 2019 All Rights Reserved by <a href="javascript:void(0)" class="careerfy-color">My Country My Job</a></p>
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
    <div class="careerfy-modal fade careerfy-typo-wrap " id="JobSearchModalSignup">
        <div class="modal-inner-area">&nbsp;</div>
        <div class="modal-content-area">
            <div class="modal-box-area">

                <div class="careerfy-modal-title-box">
                    <h2 style="margin-left: 22%;">Login to your account</h2>
                    <span class="modal-close"><i class="fa fa-times"></i></span>
                </div>
                
                    <div class="careerfy-user-options">
                        <ul>
                            <li class="one active" style="margin-left: 25%;">
                                <a href="#">
                                     <i class="careerfy-icon careerfy-user"></i>
                                     <span>Candidate</span>
                                     <small>I want to discover awesome companies.</small>
                                </a>
                            </li>
                        
                        </ul>
                    </div>
                   
                    
                    <div class="careerfy-user-form" style="display:block; ">
                        <form action="<?=base_url('Users/login')?>" method="post"> 
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
                            <p>Forgot Password? |  <a href="#" class="careerfy-open-signin-tab">Sign Up</a></p>
                            <div class="careerfy-checkbox">
                               <!--  <input type="checkbox" id="r10" name="rr" /> -->
                               <!--  <label for="r10"><span></span> Remember Password</label> -->
                            </div>
                        </div>
                    </div>
                     <div class="careerfy-user-form1" style="display:none;">
                        <form action="<?=base_url('index.php/Employee/login1')?>" method="post"> 
                        <ul>
                            <li>
                                <label>Employee Email Address:</label>
                                <input placeholder="Enter Your Email Address" name="emp_email" required="" onblur="if(this.value == '') { this.value ='Enter Your Email Address'; }" onfocus="if(this.value =='Enter Your Email Address') { this.value = ''; }" type="email">
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
                            <p>Forgot Password? | <a href="#" class="candidatesighup">Sign Up</a></p>
                            <div class="careerfy-checkbox">
                                <input type="checkbox" id="r10" name="rr" />
                               <!--  <label for="r10"><span></span> Remember Password</label> -->
                            </div>
                        </div>
                    </div>
                   <!--  <div class="careerfy-box-title careerfy-box-title-sub">
                        <span>Or Sign In With</span>
                    </div>
                    <div class="clearfix"></div> -->
                   <!--  <ul class="careerfy-login-media">
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
                    <h2>Login to your account</h2>
                    <span class="modal-close"><i class="fa fa-times"></i></span>
                </div>
                    <div class="careerfy-box-title" style="margin-left: 25%;">
                        <span>Choose your Account Type</span>
                    </div>
                    <div class="careerfy-user-options" style="margin-left: 25%">
                        <ul>
                            <li class="one active">
                                <a href="#">
                                     <i class="careerfy-icon careerfy-user"></i>
                                     <span>Candidate</span>
                                     <small>I want to discover awesome companies.</small>
                                </a>
                            </li>
                
                        </ul>
                    </div>

            <div class="careerfy-user-form" style="display:block; ">
                        <form action="<?=base_url('Users/login')?>" method="post"> 
                           
                        <ul>
                            <li>
                                <label>Candidate Email Address:</label>
                                <input value="Enter Your Email Address" class="form-control" name="email" onblur="if(this.value == '') { this.value ='Enter Your Email Address'; }" onfocus="if(this.value =='Enter Your Email Address') { this.value = ''; }" type="text">
                                <i class="careerfy-icon careerfy-mail"></i>
                            </li>
                            <li>
                                <label>Password:</label>
                                <input value="Enter Password" class="form-control" name="password" onblur="if(this.value == '') { this.value ='Enter Password'; }" onfocus="if(this.value =='Enter Password') { this.value = ''; }" type="text">
                                <i class="careerfy-icon careerfy-multimedia"></i>
                            </li>
                            <li>
                                <input type="submit" value="Sign In">
                            </li>

                    
                  
                        </ul>
                   </form>
                   
                        <div class="clearfix"></div>
                        <div class="careerfy-user-form-info">
                            <p>Forgot Password? | <a href="" class="careerfy-open-signin-tab">Sign Up</a></p>
                            <div class="careerfy-checkbox">
                                <!-- <input type="checkbox" id="r10" name="rr" /> -->
                                <!-- <label for="r10"><span></span> Remember Password</label> -->
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
               <!--      <div class="careerfy-box-title careerfy-box-title-sub">
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

 
    <div class="careerfy-modal fade careerfy-typo-wrap" id="userform">
        <div class="modal-inner-area">&nbsp;</div>
        <div class="modal-content-area">
            <div class="modal-box-area">

                <div class="careerfy-modal-title-box">
                <h2 style="margin-left:22%">Signup to your account</h2>
                    <span class="modal-close"><i class="fa fa-times"></i></span>
                </div>
                
                   
                  
                    <div class="careerfy-user-options" style="margin-left: 25%;">
                        <ul>
                            <li class="one active">
                                <a href="#">
                                     <i class="careerfy-icon careerfy-user"></i>
                                     <span name="candidate">Candidate</span>
                                     <small>I want to discover awesome companies.</small>
                                </a>
                            </li>
                            
                        </ul>
                    </div>
                    
  <form action="<?=base_url('Users/registration')?>" method="post" class="registration"> 

<div class="careerfy-user-form careerfy-user-form-coltwo" style="display:block;">
                       

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
                                <label> Name : </label>
                                <input autocomplete="off" name="name" class="candidate" required="" placeholder="Enter Your Name" onblur="if(this.value == '') { this.value ='Enter Your Name'; }" onfocus="if(this.value =='Enter Your Name') { this.value = ''; }" type="text">
                                <i class="careerfy-icon careerfy-user"></i>
                            </li>
                            <!-- <li>
                                <label>Last Name:</label>
                                <input value="Enter Your Name" name="last_name" onblur="if(this.value == '') { this.value ='Enter Your Name'; }" onfocus="if(this.value =='Enter Your Name') { this.value = ''; }" type="text">
                                <i class="careerfy-icon careerfy-user"></i>
                            </li> -->
                            <li>
                                <label>Email Address :</label>
                                <input autocomplete="off"  name="email" required="" class="form-control" placeholder="Enter Your Email Address" onblur="if(this.value == '') { this.value ='Enter Your Email Address'; }" onfocus="if(this.value =='Enter Your Email Address') { this.value = ''; }" type="email">
                                <i class="careerfy-icon careerfy-mail"></i>
                                

                            </li>

                             <li>
                                <label>Password :</label>
                                <input autocomplete="off"  placeholder="Enter Your Password" class="form-control" name="password" required="" onblur="if(this.value == '') { this.value ='Enter Your Name'; }" onfocus="if(this.value =='Enter Your Name') { this.value = ''; }" type="password">
                                <i class="careerfy-icon careerfy-user"></i>
                            </li>
<li>
                                <label>Confirm Password :</label>
                                <input  placeholder="Enter Your Password" class="form-control" name="confirm_password" required="" onblur="if(this.value == '') { this.value ='Enter Your Name'; }" onfocus="if(this.value =='Enter Your Name') { this.value = ''; }" type="password">
                                <i class="careerfy-icon careerfy-user"></i>
                            </li>
                            <li>

                                <label>Phone Number :</label>
                                <input autocomplete="off"  pattern="[6-9]{1}[0-9]{9}" name="phone"  required="" placeholder="Enter Your Phone Number" maxlength="10" type="text">
                                <i class="careerfy-icon careerfy-technology"></i>
                            </li>

                            <li>
                                 <?php
                                $rand=rand(111,999);
                                ?>
                                <label>Captcha :</label>
                                <input  id=""  required="" class="u_captcha" placeholder="Enter Captcha" maxlength="10" type="text" >

                                <input type="hidden" name="" class="captcha" value="<?= $rand ?>">
                                <!-- <i class="careerfy-icon careerfy-technology"></i> -->
                            </li>
                            <li>
                            </li>

                             <li >
                               
                               <div class="text-center" style="height: 50px;width:100px;background: silver;font-size:20px;padding: 15px;color:white"><?= $rand ?></div>
                               <p style="display: none;color:red" class="error">Please Enter Correct Captcha</p>

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
                                <input type="submit" class="sub_btn" value="Sign Up">
                            </li>
                        </ul>
                            </form>
                    </div>

                    <div class="careerfy-user-form1 careerfy-user-form-coltwo" style="display:none" >
                       
<form action="<?=base_url('index.php/Employee/registration1')?>" method="post"> 
                         
                        

                        <ul>
                            <li>
                                <label>Company Name:</label>
                                <input name="company_name" required="" placeholder="Enter Your Name" onblur="if(this.value == '') { this.value ='Enter Your Name'; }" onfocus="if(this.value =='Enter Your Name') { this.value = ''; }" type="text">
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

                                <label>phone Number:</label>
                                <input  name="phone" type="text">
                                <i class="careerfy-icon careerfy-technology"></i>
                            </li>


                            <li class="careerfy-user-form-coltwo-full">
                                <label>Categories:</label>
                                <div class="careerfy-profile-select">
                                    <select name="categories" required="">
                                        <option>Sales & Marketing</option>
                                        <option>Sales & Marketing</option>
                                    </select>
                                </div>
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

                 <!--    <div class="careerfy-box-title careerfy-box-title-sub">
                        <span>Or Sign Up With</span>
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
                            </li>
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
                               <!--  <label for="r10"><span></span> Remember Password</label> -->
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










 <div class="careerfy-modal fade careerfy-typo-wrap" id="mylogin2">
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
                                <input value="" name="emp_email" placeholder="Enter Your Email Address"   onblur="if(this.value == '') { this.value ='Enter Your Email Address'; }" onfocus="if(this.value =='Enter Your Email Address') { this.value = ''; }" type="text">
                                <i class="careerfy-icon careerfy-mail"></i>
                            </li>
                            <li>
                                <label>Password:</label>
                                <input value="" name="password" placeholder="Enter Password" onblur="if(this.value == '') { this.value ='Enter Password'; }" onfocus="if(this.value =='Enter Password') { this.value = ''; }" type="text">
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
                </form>
                
            </div>
        </div>
    </div>

      <div class="careerfy-modal fade careerfy-typo-wrap" id="applyjobform">
        <div class="modal-inner-area">&nbsp;</div>
        <div class="modal-content-area">
            <div class="modal-box-area">

                <div class="careerfy-modal-title-box">
                    <h2 style="margin-left: 22%;">Login to your account</h2>
                    <span class="modal-close"><i class="fa fa-times"></i></span>
                </div>
               
                    <div class="careerfy-user-options">
                        <ul>
                            <li class="one active" style="margin-left: 25%;">
                                <a href="#">
                                     <i class="careerfy-icon careerfy-user"></i>
                                     <span>Candidate</span>
                                     <small>I want to discover awesome companies.</small>
                                </a>
                            </li>
                       
                        </ul>
                    </div>
                   
                   
                    <div class="careerfy-user-form" style="display:block; ">
                        <form action="<?=base_url('Users/login1/').$data->id?>" method="post">
                        <ul>
                            <li>
                                <label>Candidate Email Address:</label>
                                <input placeholder="Enter Your Email Address" name="email" required="" onblur="if(this.value == '') { this.value ='Enter Your Email Address'; }" onfocus="if(this.value =='Enter Your Email Address') { this.value = ''; }" type="email">
                                <i class="careerfy-icon careerfy-mail"></i>
                            </li>
                            <!-- <input value="<?= $data->id?>" name="email" required=""> -->
                            <li>
                                <label>Password:</label>
                                <input placeholder="Enter Password" name="password" required="" onblur="if(this.value == '') { this.value ='Enter Password'; }" onfocus="if(this.value =='Enter Password') { this.value = ''; }" type="password">
                                <i class="careerfy-icon careerfy-multimedia"></i>
                            </li>
                            <li>
                                <input type="submit" value="Sign In">
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
                            <p>Forgot Password? | <a href="#">Sign Up</a></p>
                            <div class="careerfy-checkbox">
                                <input type="checkbox" id="r10" name="rr" />
                               <!--  <label for="r10"><span></span> Remember Password</label> -->
                            </div>
                        </div>
                    </div>
                     <div class="careerfy-user-form1" style="display:none;">
                        <form action="<?=base_url('index.php/Employee/login1')?>" method="post">
                        <ul>
                            <li>
                                <label>Employee Email Address:</label>
                                <input placeholder="Enter Your Email Address" name="emp_email" required="" onblur="if(this.value == '') { this.value ='Enter Your Email Address'; }" onfocus="if(this.value =='Enter Your Email Address') { this.value = ''; }" type="email">
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
                               <!--  <input type="checkbox" id="r10" name="rr" /> -->
                                <!-- <label for="r10"><span></span> Remember Password</label> -->
                            </div>
                        </div>
                    </div>
                   <!--  <div class="careerfy-box-title careerfy-box-title-sub">
                        <span>Or Sign In With</span>
                    </div>
                    <div class="clearfix"></div> -->
                   <!--  <ul class="careerfy-login-media">
                        <li><a href="#"><i class="fa fa-facebook"></i> Sign In with Facebook</a></li>
                        <li><a href="#" data-original-title="google"><i class="fa fa-google"></i> Sign In with Google</a></li>
                        <li><a href="#" data-original-title="twitter"><i class="fa fa-twitter"></i> Sign In with Twitter</a></li>
                        <li><a href="#" data-original-title="linkedin"><i class="fa fa-linkedin"></i> Sign In with LinkedIn</a></li>
                    </ul> -->
               
            </div>
        </div>
    </div>
      


       <div class="careerfy-modal fade careerfy-typo-wrap" id="savejobform">
        <div class="modal-inner-area">&nbsp;</div>
        <div class="modal-content-area">
            <div class="modal-box-area">

                <div class="careerfy-modal-title-box">
                    <h2 style="margin-left: 22%;">Login to your account</h2>
                    <span class="modal-close"><i class="fa fa-times"></i></span>
                </div>
               
                    <div class="careerfy-user-options">
                        <ul>
                            <li class="one active" style="margin-left: 25%;">
                                <a href="#">
                                     <i class="careerfy-icon careerfy-user"></i>
                                     <span>Candidate</span>
                                     <small>I want to discover awesome companies.</small>
                                </a>
                            </li>
                       
                        </ul>
                    </div>
                   
                   
                    <div class="careerfy-user-form" style="display:block; ">
                        <form action="<?=base_url('Users/login2')?>" method="post">
                        <ul>
                            <li>
                                <label>Candidate Email Address:</label>
                                <input placeholder="Enter Your Email Address" name="email" required="" onblur="if(this.value == '') { this.value ='Enter Your Email Address'; }" onfocus="if(this.value =='Enter Your Email Address') { this.value = ''; }" type="email">
                                <i class="careerfy-icon careerfy-mail"></i>
                            </li>
                            <!-- <input value="<?= $data->id?>" name="email" required=""> -->
                            <li>
                                <label>Password:</label>
                                <input placeholder="Enter Password" name="password" required="" onblur="if(this.value == '') { this.value ='Enter Password'; }" onfocus="if(this.value =='Enter Password') { this.value = ''; }" type="password">
                                <i class="careerfy-icon careerfy-multimedia"></i>
                            </li>
                            <li>
                                <input type="submit" value="Sign In">
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
                            <p>Forgot Password? | <a href="#">Sign Up</a></p>
                            <div class="careerfy-checkbox">
                                <input type="checkbox" id="r10" name="rr" />
                               <!--  <label for="r10"><span></span> Remember Password</label> -->
                            </div>
                        </div>
                    </div>
                     <div class="careerfy-user-form1" style="display:none;">
                        <form action="<?=base_url('index.php/Employee/login1')?>" method="post">
                        <ul>
                            <li>
                                <label>Employee Email Address:</label>
                                <input placeholder="Enter Your Email Address" name="emp_email" required="" onblur="if(this.value == '') { this.value ='Enter Your Email Address'; }" onfocus="if(this.value =='Enter Your Email Address') { this.value = ''; }" type="email">
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
                               <!--  <label for="r10"><span></span> Remember Password</label> -->
                            </div>
                        </div>
                    </div>
                   <!--  <div class="careerfy-box-title careerfy-box-title-sub">
                        <span>Or Sign In With</span>
                    </div>
                    <div class="clearfix"></div> -->
                   <!--  <ul class="careerfy-login-media">
                        <li><a href="#"><i class="fa fa-facebook"></i> Sign In with Facebook</a></li>
                        <li><a href="#" data-original-title="google"><i class="fa fa-google"></i> Sign In with Google</a></li>
                        <li><a href="#" data-original-title="twitter"><i class="fa fa-twitter"></i> Sign In with Twitter</a></li>
                        <li><a href="#" data-original-title="linkedin"><i class="fa fa-linkedin"></i> Sign In with LinkedIn</a></li>
                    </ul> -->
               
            </div>
        </div>
    </div>






<!-- <---------------------sign up form start--------------------------------->

     <div class="careerfy-modal fade careerfy-typo-wrap candidatereg" >
        <div class="modal-inner-area">&nbsp;</div>
        <div class="modal-content-area">
            <div class="modal-box-area">

                <div class="careerfy-modal-title-box">
                <h2 style="margin-left:22%">Signup to your account</h2>
                    <span class="modal-close"><i class="fa fa-times"></i></span>
                </div>
                
                   
                  
                    <div class="careerfy-user-options" style="margin-left: 25%;">
                        <ul>
                            <li class="one active">
                                <a href="#">
                                     <i class="careerfy-icon careerfy-user"></i>
                                     <span name="candidate">Candidate</span>
                                     <small>I want to discover awesome companies.</small>
                                </a>
                            </li>
                            
                        </ul>
                    </div>
                    
  <form action="<?=base_url('Users/registration')?>" method="post" class="registration"> 

<div class="careerfy-user-form careerfy-user-form-coltwo" style="display:block;">
                       

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
                                <label> Name : </label>
                                <input  name="name" required="" placeholder="Enter Your Name" onblur="if(this.value == '') { this.value ='Enter Your Name'; }" onfocus="if(this.value =='Enter Your Name') { this.value = ''; }" type="text">
                                <i class="careerfy-icon careerfy-user"></i>
                            </li>
                            <!-- <li>
                                <label>Last Name:</label>
                                <input value="Enter Your Name" name="last_name" onblur="if(this.value == '') { this.value ='Enter Your Name'; }" onfocus="if(this.value =='Enter Your Name') { this.value = ''; }" type="text">
                                <i class="careerfy-icon careerfy-user"></i>
                            </li> -->
                            <li>
                                <label>Email Address :</label>
                                <input  name="email" required="" class="form-control" placeholder="Enter Your Email Address" onblur="if(this.value == '') { this.value ='Enter Your Email Address'; }" onfocus="if(this.value =='Enter Your Email Address') { this.value = ''; }" type="email">
                                <i class="careerfy-icon careerfy-mail"></i>
                                

                            </li>

                             <li>
                                <label>Password :</label>
                                <input  placeholder="Enter Your Password" class="form-control" name="password" required="" onblur="if(this.value == '') { this.value ='Enter Your Name'; }" onfocus="if(this.value =='Enter Your Name') { this.value = ''; }" type="password">
                                <i class="careerfy-icon careerfy-user"></i>
                            </li>
<li>
                                <label>Confirm Password :</label>
                                <input  placeholder="Enter Your Password" class="form-control" name="confirm_password" required="" onblur="if(this.value == '') { this.value ='Enter Your Name'; }" onfocus="if(this.value =='Enter Your Name') { this.value = ''; }" type="password">
                                <i class="careerfy-icon careerfy-user"></i>
                            </li>
                            <li>

                                <label>Phone Number :</label>
                                <input pattern="[6-9]{1}[0-9]{9}" name="phone"  id="txtPhoneNo" onkeypress="return isNumber(event)" required="" placeholder="Enter Your Phone Number" maxlength="10" type="text">
                                <i class="careerfy-icon careerfy-technology"></i>
                            </li>

                            <li>
                                 <?php
                                $rand=rand(111,999);
                                ?>
                                <label>Captcha :</label>
                                <input   id="txtPhoneNo" onkeypress="return isNumber(event)" required="" class="u_captcha" placeholder="Enter Captcha" maxlength="10" type="text">

                                <input type="hidden" name="" class="captcha" value="<?= $rand ?>">
                                <!-- <i class="careerfy-icon careerfy-technology"></i> -->
                            </li>
                            <li>
                            </li>

                             <li >
                               
                               <div class="text-center" style="height: 50px;width:100px;background: silver;font-size:20px;padding: 15px;color:white"><?= $rand ?></div>
                               <p style="display: none;color:red" class="error">Please Enter Correct Captcha</p>

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
                                <input type="submit" class="sub_btn" value="Sign Up">
                            </li>
                        </ul>
                            </form>
                    </div>

                    <div class="careerfy-user-form1 careerfy-user-form-coltwo" style="display:none" >
                       
<form action="<?=base_url('index.php/Employee/registration1')?>" method="post"> 
                         
                        

                        <ul>
                            <li>
                                <label>Company Name:</label>
                                <input name="company_name" required="" placeholder="Enter Your Name" onblur="if(this.value == '') { this.value ='Enter Your Name'; }" onfocus="if(this.value =='Enter Your Name') { this.value = ''; }" type="text">
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

                                <label>phone Number:</label>
                                <input  name="phone" type="text">
                                <i class="careerfy-icon careerfy-technology"></i>
                            </li>


                            <li class="careerfy-user-form-coltwo-full">
                                <label>Categories:</label>
                                <div class="careerfy-profile-select">
                                    <select name="categories" required="">
                                        <option>Sales & Marketing</option>
                                        <option>Sales & Marketing</option>
                                    </select>
                                </div>
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

                 <!--    <div class="careerfy-box-title careerfy-box-title-sub">
                        <span>Or Sign Up With</span>
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

<!-- <----------end------------> 


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
    
     $("#userformopen").click(function(){
    $('#userform').removeClass('fade').addClass('fade-in'); 
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
  if (charCode > 31 && (charCode < 48 || charCode > 57)) {
    // alert("Please enter only Numbers.");
    return false;
  }

  return true;
}
    function ValidateNo() {
  var phoneNo = document.getElementById('txtPhoneNo');

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
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
  $(document).ready(function(){

$('#topScroll').delay(3000).fadeOut();

});

</script>

<script>
$('#chooseFile').bind('change', function () {
 var filename = $("#chooseFile").val();
 if (/^\s*$/.test(filename)) {
   $(".file-upload").removeClass('active');
   $("#noFile").text("No file chosen...");
 }
 else {
   $(".file-upload").addClass('active');
   $("#noFile").text(filename.replace("C:\\fakepath\\", ""));
 }
});

           $("#apply-job").click(function(){
   $('#applyjobform').removeClass('fade').addClass('fade-in');
   $('body').addClass('careerfy-modal-active');
   })

                      $("#save-job").click(function(){
   $('#savejobform').removeClass('fade').addClass('fade-in');
   $('body').addClass('careerfy-modal-active');
   })

   $(".candidatesighup").click(function(){
    $("#JobSearchModalSignup").addClass('fade').removeClass('fade-in');
    $(".candidatereg").removeClass('fade').addClass('fade-in');
    $('body').addClass('careerfy-modal-active');
   })

    
    </script>
    <script>
  var BASE_URL = "<?php echo base_url(); ?>";
 
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
})


    $( "#title" ).autocomplete({
 
        source: function(request, response) {
            $.ajax({
            url: BASE_URL + "ajax/search",
            data: {
                    term : request.term
             },
            dataType: "json",
            success: function(data){
               var resp = $.map(data,function(obj){
                    return obj.name;
               }); 
 
               response(resp);
            }
        });
    },
    minLength: 1
 });
});
 

</script>  
<script>
    $(".user-nav-profile-show").click(function(){
       hideshow();

})
    function hideshow(){
         var x = document.getElementById("user-nav-profile");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
    }
            
</script> 
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>           
 <script>
 <?php
     if($this->session->flashdata('item1'))
      { 
        ?> 
swal({
  title:"Registration Successful",
  text:"",
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
  title:"Password not matched",
  text:"",
  icon:"",
  button:"ok",
});
       
<?php } ?>
</script>

<script>
 <?php
     if($this->session->flashdata('img_error'))
      { 
        ?> 
swal({
  title:"Image Not Upload",
  text:"Diemensions should be 200*200 and only jpg, jpeg file supported.",
  icon:"error",
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
  title:"Incorrect email and password",
  text:"",
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
  title:"Email Already Exists",
  text:"",
  icon: "warning",
  button:"Register With Another Email",
  dangerMode: true,
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
<script type="text/javascript">
        $(document).ready(function(){
          $('.candidate').keyup(function(){

this.value = this.value.toUpperCase();

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