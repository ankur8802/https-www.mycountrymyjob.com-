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
        <!-- <div class="careerfy-subheader careerfy-subheader-without-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="careerfy-page-title">
                            <h1>Companies</h1>
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
                    <li>Employee</li> -->
                    <li>Change Password</li>
                </ul>
            </div>
        <!-- </div> -->
        <!-- SubHeader -->

        <!-- Main Content -->
        <div class="careerfy-main-content">
            
            <!-- Main Section -->
            <div class="careerfy-main-section careerfy-dashboard-full">
                <div class="container">
                    <div class="row">

                       <?php include('side_nav.php') ?>
                        <div class="careerfy-column-9">
                            <div class="careerfy-typo-wrap">
                                <div class="careerfy-employer-dasboard">
                                    <div class="careerfy-employer-box-section">
                                        <div class="careerfy-profile-title">
                                            <form action="<?=base_url('index.php/Employee/change')?>" method="post" enctype="multipart/form-data">
                                            <h2>Change Password</h2>
                                        </div>
                                        <ul class="careerfy-row careerfy-employer-profile-form">
                                            <li class="careerfy-column-12">
                                                <label>Old Password </label>
                                                <input required value="" name="old_password" onblur="if(this.value == '') { this.value ='Old Password'; }" onfocus="if(this.value =='Old Password') { this.value = ''; }" type="password">
                                            </li>
                                            <li class="careerfy-column-6">
                                                <label>New Password </label>
                                                <input required value="" name="new_password" onblur="if(this.value == '') { this.value ='Old Password'; }" onfocus="if(this.value =='Old Password') { this.value = ''; }" type="password">
                                            </li>
                                            <li class="careerfy-column-6">
                                                <label>Confirm New Password  </label>
                                                <input required value="" name="con_password" onblur="if(this.value == '') { this.value ='Old Password'; }" onfocus="if(this.value =='Old Password') { this.value = ''; }" type="password">
                                            </li>
                                              <?php       
     $error = $this->session->flashdata('msg');

     if($error != null)
     {
       ?>
          <li class="alert alert-danger" id="topScroll">
           <?php echo $error; ?>
          </li>
          
         <?php 
       }
        ?>
                                        </ul>
                                        <!-- <div class="careerfy-profile-title">
                                            <h2>Secuirty Questions</h2>
                                        </div> -->
                                        <!-- <ul class="careerfy-row careerfy-employer-profile-form">
                                            <li class="careerfy-column-6">
                                                <label>Question No1 :</label>
                                                <div class="careerfy-profile-select">
                                                    <select>
                                                        <option>What is your Mother Name?</option>
                                                        <option>What is your Mother Name?</option>
                                                    </select>
                                                </div>
                                            </li>
                                            <li class="careerfy-column-6">
                                                <label>Answer :</label>
                                                <input value="Katie Monree" onblur="if(this.value == '') { this.value ='Katie Monree'; }" onfocus="if(this.value =='Katie Monree') { this.value = ''; }" type="text">
                                            </li>
                                            <li class="careerfy-column-6">
                                                <label>Question No2 :</label>
                                                <div class="careerfy-profile-select">
                                                    <select>
                                                        <option>Your place of Birth?</option>
                                                        <option>Your place of Birth?</option>
                                                    </select>
                                                </div>
                                            </li>
                                            <li class="careerfy-column-6">
                                                <label>Answer :</label>
                                                <input value="London" onblur="if(this.value == '') { this.value ='London'; }" onfocus="if(this.value =='London') { this.value = ''; }" type="text">
                                            </li>
                                            <li class="careerfy-column-6">
                                                <label>Question No3 :</label>
                                                <div class="careerfy-profile-select">
                                                    <select>
                                                        <option>Your favorite Teacher Name?</option>
                                                        <option>Your favorite Teacher Name?</option>
                                                    </select>
                                                </div>
                                            </li>
                                            <li class="careerfy-column-6">
                                                <label>Answer :</label>
                                                <input value="Mateusz Dembek" onblur="if(this.value == '') { this.value ='Mateusz Dembek'; }" onfocus="if(this.value =='Mateusz Dembek') { this.value = ''; }" type="text">
                                            </li>
                                        </ul> -->
                                    </div>
                                    <input type="submit" class="careerfy-employer-profile-submit" value="Update Password">

                                </form>

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
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
  $(document).ready(function(){

$('#topScroll').delay(3000).fadeOut();

});
</script>
            
                    <?php
      include('footer.php');
      ?>
</body>

</html>
