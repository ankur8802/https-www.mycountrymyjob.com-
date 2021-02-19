<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Candidate Profile Setting</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.2.3/flatpickr.css">
    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/chosen/1.1.0/chosen.min.css">
    
   <?php
    if ($this->session->userdata('email') )
    {
       include('candidate_nav.php');
    }
    else
    {
        
        include('nav.php');
    }
         $d   = $this->session->userdata('userdata');
         ?>
         <style>
            .chosen-container-multi .chosen-choices{
        /*height: 41px!important;*/
        border: 1px solid #f6f6f6;
    }
    .chosen-container-multi .chosen-choices li.search-field{
        margin: 10px;
    }
    .chosen-container-multi .chosen-choices li.search-field input[type=text]{
        color: #999;
    }
         </style>
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
                    <li>Candidates</li> -->
                    <li>My Profile</li>
                </ul>
            </div>
       <!--  </div> -->
        <!-- SubHeader -->

        <!-- Main Content -->
        <div class="careerfy-main-content" style="background: #e9e9e9">
            
            <!-- Main Section -->
            <div class="careerfy-main-section careerfy-dashboard-fulltwo">
                <div class="container">
                    <div class="row">

                        <aside class="careerfy-column-3 sticky">
                            <div class="careerfy-typo-wrap">
                                <div class="careerfy-employer-dashboard-nav" style="background: white">
                                    <figure>
                                        <form action="<?=base_url('Users/update')?>" method="post" enctype="multipart/form-data">
                                        <a href="#" class="employer-dashboard-thumb"><img src="<?php echo base_url('upload/'. $data->photo)?>" alt="" style="width: 140px ; height: 140px;"></a>
                                        <figcaption>
                                            
                                            <div class="careerfy-fileUpload">
                                                 
                                                <span><i class="careerfy-icon careerfy-add"></i> Upload Photo</span>
                                                <input type="file" class="careerfy-upload"  name="photo" />
                                            </div>
                                            <h2><?php echo $data->name;?></h2>
                                            <span class="careerfy-dashboard-subtitle"><?php echo $data->category;?></span>
                                        </figcaption>
                                    </figure>
                                    <ul>
                                         <li class="active"><a href="<?= base_url('Users/candidate_profile');?>"><i class="careerfy-icon careerfy-user"></i> My Profile</a></li>
                                       <!--  <li><a href="#"><i class="careerfy-icon careerfy-resume"></i> My Resume</a></li> -->
                                        <li><a href="<?= base_url('Users/save_job');?>"><i class="careerfy-icon careerfy-heart"></i> Saved jobs</a></li>
                                        <li><a href="<?= base_url('Users/applied');?>"><i class="careerfy-icon careerfy-briefcase-1"></i> Applied jobs</a></li>
                                       <!--  <li><a href="#"><i class="careerfy-icon careerfy-alarm"></i> Job Alerts</a></li> -->
                                       <!--  <li><a href="candidate-dashboard-cv-manager.html"><i class="careerfy-icon careerfy-id-card"></i> CV Manager</a></li> -->
                                        <li><a href="<?= base_url('Users/change_password');?>"><i class="careerfy-icon careerfy-multimedia"></i> Change Password</a></li>
                                        <li><a href="<?= base_url('Users/logout')?>"><i class="careerfy-icon careerfy-logout"></i> Logout</a></li>
                                    </ul>
                                </div>
                            </div>
                        </aside>
                        <div class="careerfy-column-9 form-group"  >
                           <div class="careerfy-typo-wrap" >
                                <div class="careerfy-employer-dasboard" style="background: white">
                                    <div class="careerfy-employer-box-section">
                                        <div class="careerfy-profile-title"><h2>Basic Information</h2></div>
                                        <ul class="careerfy-row careerfy-employer-profile-form">
                                            
         
           
         
                                    <li class="careerfy-column-6">
                                                <label>Name </label>
                                               <input value="<?php echo $data->name;?>"  placeholder="" name="name" class="form-control">
                                            </li>
                                           
                                            <li class="careerfy-column-6">
                                                <label>Email </label>
                                                <input value="<?php echo $this->session->userdata('email');?>" placeholder=""class="form-control" readonly>
                                            </li>
                                            <li class="careerfy-column-6">
                                                <label>Date of Birth:</label>
                                                <input type="text" name="dob" value="<?php echo $data->dob;?>" placeholder="Select Date" style="width:100%;height:40px;" id="basicDate" data-input>

                                            </li>
                                            <li class="careerfy-column-6">
                                                <label>Gender</label>
                                               
                                                  <div class="careerfy-profile-select">
                                                    <select name="gender" value="">
                                                        <option  <?php
                                                        if($data->gender=='Male')
                                                            {
                                                                echo "selected";
                                                            }
                                                        ?>>Male</option>
                                                        <option
                                                        <?php
                                                        if($data->gender=='Female')
                                                            {
                                                                echo "selected";
                                                            }
                                                        ?>
                                                        >Female</option>
                                                    </select>
                                                </div>
                                            
                                            </li>
                                            <li class="careerfy-column-6">
                                                <label>Phone </label>
                                            
                                                 <input pattern="[6-9]{1}[0-9]{9}"  name="phone" value="<?php echo $data->phone;?>" id="txtPhoneNo" onkeypress="return isNumber(event)" required="" placeholder="Enter Your Phone Number" maxlength="10" type="text">
                                            </li>
                                            <li class="careerfy-column-6">
                                                <label>Category</label>
                                                <div class="careerfy-profile-select">
                                                    <select name="category"  placeholder="">
                                                           <?php 
                                                           foreach($result as $res)
                                                           {

                                                            ?>
                                                        <option

                                                        <?php
                                                        if($data->category==$res->category)
                                                            {
                                                                echo "selected";
                                                            }

                                                        ?>
                                                         value="<?php echo $res->category;?>" ><?php echo $res->category;?></option>
                                                        <?php
                                                    }
                                                    ?>
                                                        
                                                    </select>
                                                </div>
                                            </li>
                                            <li class="careerfy-column-6">
                                                <label> Qualification</label>
                                                <div class="careerfy-profile-select">
                                                    <select name="qualification"  placeholder="">
                                                       <?php 
                                                           foreach($qualification as $res)
                                                           {

                                                            ?>
                                                        <option 
                                                        <?php
                                                            if($data->qualification==$res->qualification)
                                                            {
                                                                echo "selected";
                                                            }

                                                        ?> ><?php echo $res->qualification;?></option>
                                                        <?php
                                                    }
                                                    ?>
                                                    </select>
                                                </div>
                                            </li>
                                            <li class="careerfy-column-12">
                                                <label>Skills</label>
                                                <select  data-placeholder="Choose Category..." name="skill[]" multiple class="chosen-select" required="" value="" style="">
                                                    <?php 
                                                   $skill_array=explode(',',$data->skill);
                                                   for($i=0;$i<count($skill_array);$i++)
                                                   {
                                                           foreach($keyword as $res)
                                                           {

                                                            ?>
                                                        <option 
                                                        <?php
                                                            if($skill_array[$i]==$res->skill)
                                                            {
                                                                echo "selected";
                                                            }

                                                        ?>><?php echo $res->skill;?></option>
                                                        <?php
                                                    }

                                                }
                                                    ?>
                                    
                                                   </select>

                                            </li>
                                            
                                            <li class="careerfy-column-12">
                                                <label>University Name</label>
                                               <input value="<?php echo $data->college;?>" placeholder="Enter your college/universityname" name="college"  type="text">
                                            </li>
                                            <li class="careerfy-column-12">
                                                <label>Description </label>
                                                <textarea value="" placeholder="Enter Description " name="description" id="editor"><?php echo $data->description;?></textarea>
                                            </li>

                                         <li class="careerfy-column-6">
                                               <div class="file-upload">
                                                        <div class="file-select">
                                                      <div class="file-select-button" id="fileName">Upload Resume</div>
                                                        <div class="file-select-name" id="noFile">No file chosen...</div>
                                                         <input value="<?php echo $data->resume;?>" placeholder="" name="resume"  type="file" id="chooseFile">
                                                          </div>
                                                             </div>
                                           </li>

                                        </ul>
                                    </div>
                                    <div class="careerfy-employer-box-section">
                                        <div class="careerfy-profile-title"><h2>Address</h2></div>
                                        <ul class="careerfy-row careerfy-employer-profile-form">
                                            <li class="careerfy-column-6">
                                                <label>State</label>
                                                <div class="careerfy-profile-select">
                                                    <select class="state_val" name="state" >
                                                        <?php 
                                                           foreach($state_name as $res)
                                                           {

                                                            ?>
                                                        <option

                                                        <?php
                                                        if($data->state==$res->state)
                                                            {
                                                                echo "selected";
                                                            }
                                                        ?>
                                                         value="<?php echo $res->state?>"><?php echo $res->state;?></option>
                                                        <?php
                                                    }
                                                    ?>
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
                                                    <select class="city_sel" name="city" >
                                                                             
                                                         <?php 
                                                           foreach($city_name as $res)
                                                           {

                                                            ?>
                                                        <option

                                                        <?php
                                                        if($data->city==$res->city)
                                                            {
                                                                echo "selected";
                                                            }
                                                        ?>
                                                         ><?php echo $res->city;?></option>
                                                        <?php
                                                    }
                                                    ?> 
                                                    </select>
                                                </div>
                                            </li>
                                            <!-- <li class="careerfy-column-6">
                                                <label>Postcode *</label>
                                                <input value="746000" onblur="if(this.value == '') { this.value ='746000'; }" onfocus="if(this.value =='746000') { this.value = ''; }" type="text">
                                            </li> -->
                                            <li class="careerfy-column-10">
                                                <label>Full Address</label>
                                                <input value="<?php echo $data->address;?>"  placeholder="Enter your address" name="address" onblur="if(this.value == '') { this.value ='Ha Dong - Ha Noi - Viet Nam'; }" onfocus="if(this.value =='Ha Dong - Ha Noi - Viet Nam') { this.value = ''; }" type="text">
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
                                        <div class="careerfy-profile-title"><h2>Experience</h2></div>
                                        <ul class="careerfy-row careerfy-employer-profile-form">
                                            <!-- <li class="careerfy-column-6">
                                                <label>Experience </label>
                                                 <input value="<?php echo $data->experience;?>" placeholder="Enter your experience" name="experience" onblur="if(this.value == '') { this.value ='Ha Dong - Ha Noi - Viet Nam'; }" onfocus="if(this.value =='Ha Dong - Ha Noi - Viet Nam') { this.value = ''; }" type="text">
                                                
                                            </li> -->
                                            <li class="careerfy-column-6">

                                                <div class="careerfy-column-6">

                                                <label>Experience <?php echo $data->experience2;?></label>
                                                <div class="careerfy-profile-select">
                                                    <select required="" name="experience1" >

                                            <?php

                                                for($i=0;$i<31;$i++)
                                                {
                                            ?>
                                                        <option 
                                                        <?php 
                                                                if($data->experience1=="$i Year")
                                                                    echo "selected";
                                                        ?>
                                                         value="<?=$i?> Year"><?=$i ?> Year</option>
                                            <?php
                                                }
                                            ?>
</select>
                                                  
                                                </div>
                                              </div>
                                              <div class="careerfy-column-6">
                                                <div class="careerfy-profile-select">
                                                    <select required="" name="experience2" value="">
                                                        <?php

                                                for($i=0;$i<13;$i++)
                                                {
                                            ?>
                                                        <option 
                                                        <?php 
                                                                if($data->experience2=="$i Month")
                                                                    echo "selected";
                                                        ?>
                                                         value="<?=$i?> Month"><?=$i ?> Month</option>
                                            <?php
                                                }
                                            ?>
                                                        <!-- <option>0 Month</option>
                                                        <option>1 Month</option>
                                                        <option>2 Months</option>
                                                        <option>3 Months</option>
                                                        <option>4 Months</option>
                                                        <option>5 Months</option>
                                                        <option>6 Months</option>
                                                        <option>7 Months</option>
                                                        <option>8 Months</option>
                                                        <option>9 Months</option>
                                                        <option>10 Months</option>
                                                        <option>11 Months</option>
                                                        <option>12 Months</option> -->
                                                       
                                                    </select>
                                                </div>
                                              </div>
                                             
                                            </li>
                                            <li class="careerfy-column-6">
                                                <label>Extra Qualification / Courses</label>
                                                
                                                    <input value="<?php echo $data->extra_qualification;?>" placeholder="Enter Extra Qualification / Courses" name="extra_qualification" onblur="if(this.value == '') { this.value ='Ha Dong - Ha Noi - Viet Nam'; }" onfocus="if(this.value =='Ha Dong - Ha Noi - Viet Nam') { this.value = ''; }" type="text">
                                            
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

                                                <div class="careerfy-column-6">

                                                <label>Current Salary</label>
                                                <div class="careerfy-profile-select">
                                                    <select name="current_salary1" value="">
                                                         <?php

                                                for($i=0;$i<11;$i++)
                                                {
                                            ?>
                                                        <option 
                                                        <?php 
                                                                if($data->current_salary1=="$i Lakh")
                                                                    echo "selected";
                                                        ?>
                                                         value="<?=$i?> Lakh"><?=$i ?> Lakh</option>
                                            <?php
                                                }
                                            ?>
                                                        <!-- <option >0 Lac</option>
                                                        <option>1 Lac</option>
                                                        <option>2 Lacs</option>
                                                        <option>3 Lacs</option>
                                                        <option>4 Lacs</option>
                                                        <option>5 Lacs</option>
                                                        <option>6 Lacs</option>
                                                        <option>7 Lacs</option>
                                                        <option>8 Lacs</option>
                                                        <option>9 Lacs</option>
                                                        <option>10 Lacs</option> -->
                                                    </select>
                                                </div>
                                              </div>
                                              <div class="careerfy-column-6">
                                                     <div class="careerfy-profile-select">
                                                    <select name="current_salary2" value="">
                                                           <?php
                                                        for($i=0;$i<20;$i++)
                                                            {
                                                                $amount=$i*5;
                                                        ?>
                                                        <option
                                                         <?php 
                                                                if($data->current_salary2=="$amount Thousand")
                                                                    echo "selected";
                                                        ?>
                                                         value="<?=$amount?> Thousand"><?=$amount?> Thousand</option>
                                                        <?php
                                                            }
                                                        ?>

                                                       <!--  <option>0 Thousand</option>
                                                        <option>5 Thousand</option>
                                                        <option>10 Thousands</option>
                                                        <option>15 Thousands</option>
                                                        <option>20 Thousands</option>
                                                        <option>25 Thousands</option>
                                                        <option>30 Thousands</option>
                                                        <option>35 Thousands</option>
                                                        <option>40 Thousands</option>
                                                        <option>45 Thousands</option>
                                                        <option>50 Thousands</option>
                                                        <option>55 Thousands</option>
                                                        <option>60 Thousands</option>
                                                        <option>65 Thousands</option>
                                                        <option>70 Thousands</option>
                                                        <option>75 Thousands</option>
                                                        <option>80 Thousands</option>
                                                        <option>85 Thousands</option>
                                                        <option>90 Thousands</option>
                                                        <option>95 Thousands</option> -->
                                                    </select>
                                                </div>
                                              </div>
                                              <!-- <input value="<?php echo $data->current_salary;?>"  type="text" style="margin-top:5px; "> -->
                                            </li>
                                            <li class="careerfy-column-6">

                                                <div class="careerfy-column-6">

                                                <label>Expected Salary</label>
                                                <div class="careerfy-profile-select">
                                                    <select name="expected_salary1" value="">
                                                        <?php

                                                for($i=0;$i<11;$i++)
                                                {
                                            ?>
                                                        <option 
                                                        <?php 
                                                                if($data->expected_salary1=="$i Lakh")
                                                                    echo "selected";
                                                        ?>
                                                         value="<?=$i?> Lakh"><?=$i ?> Lakh</option>
                                            <?php
                                                }
                                            ?>
                                                    </select>
                                                </div>
                                              </div>
                                              <div class="careerfy-column-6">
                                                     <div class="careerfy-profile-select">
                                                    <select  name="expected_salary2"  value="">
                                                        <?php
                                                        for($i=0;$i<20;$i++)
                                                            {
                                                                $amount=$i*5;
                                                        ?>
                                                        <option
                                                         <?php 
                                                                if($data->expected_salary2=="$amount Thousand")
                                                                    echo "selected";
                                                        ?>
                                                         value="<?=$amount?> Thousand"><?=$amount?> Thousand</option>
                                                        <?php
                                                            }
                                                        ?>
                                          
                                                    </select>
                                                </div>
                                              </div>
                                              <!-- <input value="<?php echo $data->expected_salary;?>"  type="text" style="margin-top:5px; "> -->
                                            </li>
                                            <li class="careerfy-column-6">
                                                <label>Current Job Status</label>
                                               
                                                  <div class="careerfy-profile-select">
                                                    <select name="job_status" value="">
                                                        <option  <?php
                                                        if($data->job_status=='Working')
                                                            {
                                                                echo "selected";
                                                            }
                                                        ?>>Working</option>
                                                        <option
                                                        <?php
                                                        if($data->job_status=='Not Working')
                                                            {
                                                                echo "selected";
                                                            }
                                                        ?>
                                                        >Not Working</option>
                                                    </select>
                                                </div>
                                            
                                            </li>
                                            <li class="careerfy-column-6">
                                                <label>Current Working Company Name</label>
                                               <input value="<?php echo $data->current_company;?>" placeholder="Enter Current Working Company Name" name="current_company"  type="text">
                                                  
                                            
                                            </li>
                                             <!-- <li class="careerfy-column-6">
                                                <label>Job Type</label>
                                               
                                                    <input value="" placeholder="Enter job type" onblur="if(this.value == '') { this.value ='Ha Dong - Ha Noi - Viet Nam'; }" onfocus="if(this.value =='Ha Dong - Ha Noi - Viet Nam') { this.value = ''; }" type="text">
                                            
                                            </li> -->
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
                                </div>
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

      <script src="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.2.3/flatpickr.js"></script>

<script> 
$("#basicDate").flatpickr({
    dateFormat: "d-m-Y",
    maxDate: "30-12-2006"
});

</script>
<script type="text/javascript">
     $(".state_val").change(function(){
    var id=$(this).val();

         $.ajax({
        url:"<?php echo base_url(); ?>Users/get_city",
        method:"POST",
        data:{id:id},
        success:function(data)
        {
         $('.city_sel').html(data);
       
        }
       });
    });

</script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/chosen/1.1.0/chosen.jquery.min.js"></script>


<script> 

$(".chosen-select").chosen();


// $(".chosen-select").val("<?php echo $data->skill;?>").trigger("chosen:updated");

</script>
<script src="https://cdn.ckeditor.com/ckeditor5/12.2.0/classic/ckeditor.js"></script>
                     <script>
   ClassicEditor
       .create( document.querySelector( '#editor' ) )
       .catch( error => {
           console.error( error );
       } );
         </script>
</body>


</html>
