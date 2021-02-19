<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Candidate Profile </title>
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
        <div class="careerfy-subheader careerfy-subheader-without-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="careerfy-page-title">
                            <h1>Companies</h1>
                            <p>Thousands of prestigious employers for you, search for a recruiter right now.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="careerfy-breadcrumb">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Pages</a></li>
                    <li>Candidates</li>
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

                        <!-- <aside class="careerfy-column-3">
                            <div class="careerfy-typo-wrap">
                                <div class="careerfy-employer-dashboard-nav"> -->
                                    <!-- <figure>
                                        <a href="#" class="employer-dashboard-thumb"><img src="extra-images/candidate-dashboard-navthumb.jpg" alt=""></a>
                                        <figcaption> -->
                                            <!-- <div class="careerfy-fileUpload">
                                                <span><i class="careerfy-icon careerfy-add"></i> Upload Photo</span>
                                                <input type="file" class="careerfy-upload" />
                                            </div> -->
                                           <!--  <h2>Nora Tsunoda</h2>
                                            <span class="careerfy-dashboard-subtitle">UI/UX Designer</span> -->
                                        <!-- </figcaption>
                                    </figure> -->
                                    <!-- <ul>
                                        <li class="active"><a href="candidate-dashboard-profile-seting.html"><i class="careerfy-icon careerfy-user"></i> My Profile</a></li>
                                        <li><a href="candidate-dashboard-resume.html"><i class="careerfy-icon careerfy-resume"></i> My Resume</a></li>
                                        <li><a href="candidate-dashboard-saved-jobs.html"><i class="careerfy-icon careerfy-heart"></i> Saved jobs</a></li>
                                        <li><a href="candidate-dashboard-applied-jobs.html"><i class="careerfy-icon careerfy-briefcase-1"></i> Applied jobs</a></li>
                                        <li><a href="candidate-dashboard-job-alert.html"><i class="careerfy-icon careerfy-alarm"></i> Job Alerts</a></li>
                                        <li><a href="candidate-dashboard-cv-manager.html"><i class="careerfy-icon careerfy-id-card"></i> CV Manager</a></li>
                                        <li><a href="candidate-dashboard-changed-password.html"><i class="careerfy-icon careerfy-multimedia"></i> Change Password</a></li>
                                        <li><a href="index.html"><i class="careerfy-icon careerfy-logout"></i> Logout</a></li>
                                    </ul> -->
                                <!-- </div>
                            </div>
                        </aside> -->
                        <div class="careerfy-column-12">
                            <div class="careerfy-typo-wrap">
                                <form class="careerfy-employer-dasboard">
                                    <div class="careerfy-employer-box-section">
                                        <div class="careerfy-profile-title"><h2>Basic Information</h2></div>
                                        <ul class="careerfy-row careerfy-employer-profile-form">
                                            <li class="careerfy-column-6">
                                                <label>Your Name </label>
                                                <input value="" placeholder="Enter your name" onblur="if(this.value == '') { this.value ='Jody Wisternoff'; }" onfocus="if(this.value =='Jody Wisternoff') { this.value = ''; }" type="text">
                                            </li>
                                            <li class="careerfy-column-6">
                                                <label>Email </label>
                                                <input value="" placeholder="Enter your email" onblur="if(this.value == '') { this.value ='contact@jodywisternoff'; }" onfocus="if(this.value =='contact@jodywisternoff') { this.value = ''; }" type="text">
                                            </li>
                                            <li class="careerfy-column-6">
                                                <label>Date of Birth:</label>
                                                <input type="date" placeholder="Enter your phone number" class="form-control"onblur="if(this.value == '') { this.value ='0979380947'; }" onfocus="if(this.value =='0979380947') { this.value = ''; }" >
                                            </li>
                                            <li class="careerfy-column-6">
                                                <label>Phone </label>
                                                <input value="" placeholder="Enter your phone number" onblur="if(this.value == '') { this.value ='0979380947'; }" onfocus="if(this.value =='0979380947') { this.value = ''; }" type="text">
                                            </li>
                                            <li class="careerfy-column-6">
                                                <label>Category </label>
                                                <div class="careerfy-profile-select">
                                                    <select>
                                                        <option>PHP Developer</option>
                                                        <option>Web designer</option>
                                                    </select>
                                                </div>
                                            </li>
                                            <li class="careerfy-column-6">
                                                <label> Qualification</label>
                                                <div class="careerfy-profile-select">
                                                    <select>
                                                        <option>B.sc Master</option>
                                                        <option>B.sc Master</option>
                                                    </select>
                                                </div>
                                            </li>
                                            <li class="careerfy-column-12">
                                                <label>Description </label>
                                                <textarea placeholder="Enter Description "></textarea>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="careerfy-employer-box-section">
                                        <div class="careerfy-profile-title"><h2>Address</h2></div>
                                        <ul class="careerfy-row careerfy-employer-profile-form">
                                            <li class="careerfy-column-6">
                                                <label>State</label>
                                                <div class="careerfy-profile-select">
                                                    <select>
                                                        <option>Select your state</option>
                                                        <option>Uttar Pradesh</option>
                                                        <option>Noida</option>
                                                    </select>
                                                </div>
                                            </li>
                                            <!-- <li class="careerfy-column-6">
                                                <label>Region *</label>
                                                <div class="careerfy-profile-select">
                                                    <select>
                                                        <option>London</option>
                                                        <option>London</option>
                                                    </select>
                                                </div>
                                            </li> -->
                                            <li class="careerfy-column-6">
                                                <label>City</label>
                                                <div class="careerfy-profile-select">
                                                    <select>
                                                        <option>Select your city</option>
                                                        <option>Gaziabad</option>
                                                        <option>Meerut</option>
                                                    </select>
                                                </div>
                                            </li>
                                            <!-- <li class="careerfy-column-6">
                                                <label>Postcode *</label>
                                                <input value="746000" onblur="if(this.value == '') { this.value ='746000'; }" onfocus="if(this.value =='746000') { this.value = ''; }" type="text">
                                            </li> -->
                                            <li class="careerfy-column-10">
                                                <label>Full Address</label>
                                                <input value=""  placeholder="Enter your address" onblur="if(this.value == '') { this.value ='Ha Dong - Ha Noi - Viet Nam'; }" onfocus="if(this.value =='Ha Dong - Ha Noi - Viet Nam') { this.value = ''; }" type="text">
                                            </li>
                                            <!-- <li class="careerfy-column-2">
                                                <button class="careerfy-findmap-btn">Find on Map</button>
                                            </li>
                                            <li class="careerfy-column-6">
                                                <label>Latitude</label>
                                                <input value="51.4935825" onblur="if(this.value == '') { this.value ='51.4935825'; }" onfocus="if(this.value =='51.4935825') { this.value = ''; }" type="text">
                                            </li>
                                            <li class="careerfy-column-6">
                                                <label>Longitude</label>
                                                <input value="-0.16803379999998924" onblur="if(this.value == '') { this.value ='-0.16803379999998924'; }" onfocus="if(this.value =='-0.16803379999998924') { this.value = ''; }" type="text">
                                            </li>
                                            <li class="careerfy-column-12">
                                                <div class="careerfy-profile-map"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d22589232.038285658!2d-103.9763543971716!3d46.28054447273778!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1507595834401"></iframe></div>
                                                <span class="careerfy-short-message">For the precise location, you can drag and drop the pin.</span>
                                            </li> -->
                                        </ul>
                                    </div>
                                    <div class="careerfy-employer-box-section">
                                        <div class="careerfy-profile-title"><h2>Other Information</h2></div>
                                        <ul class="careerfy-row careerfy-employer-profile-form">
                                            <li class="careerfy-column-6">
                                                <label>Experience </label>
                                                <div class="careerfy-profile-select">
                                                    <select >
                                                         <option>Select your experience</option>
                                                        <option>5 Years</option>
                                                        <option>5 Years</option>
                                                    </select>
                                                </div>
                                            </li>
                                            <li class="careerfy-column-6">
                                                <label>Extra Qualification / Courses</label>
                                                
                                                    <input value="" placeholder="Enter Extra Qualification / Courses" onblur="if(this.value == '') { this.value ='Ha Dong - Ha Noi - Viet Nam'; }" onfocus="if(this.value =='Ha Dong - Ha Noi - Viet Nam') { this.value = ''; }" type="text">
                                            
                                            </li>
                                            <!-- <li class="careerfy-column-6">
                                                <label>Age *</label>
                                                <div class="careerfy-profile-select">
                                                    <select>
                                                        <option>24</option>
                                                        <option>24</option>
                                                    </select>
                                                </div>
                                            </li> -->
                                            <li class="careerfy-column-6">
                                                <label>Current Salary</label>
                                               
                                                    <input placeholder="Enter current salary" onblur="if(this.value == '') { this.value ='Ha Dong - Ha Noi - Viet Nam'; }" onfocus="if(this.value =='Ha Dong - Ha Noi - Viet Nam') { this.value = ''; }" type="text">
                                            
                                            </li>
                                            <li class="careerfy-column-6">
                                                <label>Expected Salary</label>
                                                
                                                    <input value="" placeholder="Enter expected salary" onblur="if(this.value == '') { this.value ='Ha Dong - Ha Noi - Viet Nam'; }" onfocus="if(this.value =='Ha Dong - Ha Noi - Viet Nam') { this.value = ''; }" type="text">
                                                
                                            </li>
                                            <li class="careerfy-column-6">
                                                <label>Current Job</label>
                                               
                                                    <input value="" placeholder="Enter current job" onblur="if(this.value == '') { this.value ='Ha Dong - Ha Noi - Viet Nam'; }" onfocus="if(this.value =='Ha Dong - Ha Noi - Viet Nam') { this.value = ''; }" type="text">
                                            
                                            </li>
                                             <li class="careerfy-column-6">
                                                <label>Job Type</label>
                                               
                                                    <input value="" placeholder="Enter job type" onblur="if(this.value == '') { this.value ='Ha Dong - Ha Noi - Viet Nam'; }" onfocus="if(this.value =='Ha Dong - Ha Noi - Viet Nam') { this.value = ''; }" type="text">
                                            
                                            </li>
                                            <!-- <li class="careerfy-column-6">
                                                <label>Languages *</label>
                                                <div class="careerfy-profile-select">
                                                    <select>
                                                        <option>English</option>
                                                        <option>English</option>
                                                    </select>
                                                </div>
                                            </li> -->
                                            
                                        </ul>
                                    </div>
                                    <input type="submit" class="careerfy-employer-profile-submit" value="submit">
                                </form>
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
