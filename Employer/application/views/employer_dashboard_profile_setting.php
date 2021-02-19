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
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.2.3/flatpickr.css">
</head>
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
                    <li></li> -->
                    <li>Company Profile</li>
                </ul>
            </div>
      <!--   </div> -->
        <!-- SubHeader -->

        <!-- Main Content -->
        <div class="careerfy-main-content">
            
            <!-- Main Section -->
            <div class="careerfy-main-section careerfy-dashboard-fulltwo">
                <div class="container">
                    <div class="row">

                       <aside class="careerfy-column-3 sticky">
                            <div class="careerfy-typo-wrap">
                                <div class="careerfy-employer-dashboard-nav">
                                    <figure>
                                         <form action="<?=base_url('index.php/Employee/update1')?>" method="post" enctype="multipart/form-data">
                                        <a href="#" class=""><img src="<?php echo base_url('upload/'. $data->image)?>" alt="" style="width: 140px;height: 140px;"></a>
                                        <figcaption>
                                            <br><br>
                                            <div class="careerfy-fileUpload">
                                                <span><i class="careerfy-icon careerfy-add"></i> Upload Photo</span>
                                                <input type="file" class="careerfy-upload" value="<?php echo $data->image;?>" name="image"/>
                                            </div>
                                            <h2><?php echo $data->company_name;?></h2>
                                        </figcaption>
                                    </figure>
                                    <ul>
                                        <li class="active"><a href="<?= base_url('index.php/Employee/employer_profile');?>"><i class="careerfy-icon careerfy-user"></i> Company Profile</a></li>
                                         <li><a href="<?= base_url('index.php/Employee/manage_job');?>"><i class="careerfy-icon careerfy-briefcase-1"></i> Manage Jobs</a></li>
                                        <!-- <li><a href="#"><i class="careerfy-icon careerfy-salary"></i> Transactions</a></li> -->
                                        <li><a href="<?= base_url('index.php/Employee/applicants');?>"><i class="careerfy-icon careerfy-heart"></i>Manage Applicantions</a></li>
                                         <li><a href="<?= base_url('index.php/Employee/save_employee');?>"><i class="careerfy-icon careerfy-heart"></i>Save Employee</a></li>
                                        <li class=""><a href="<?= base_url('index.php/Employee/job_post');?>"><i class="careerfy-icon careerfy-plus"></i> Post a New Job</a></li>
                                        <li><a href="<?= base_url('index.php/Employee/change_password');?>"><i class="careerfy-icon careerfy-multimedia"></i> Change Password</a></li>
                                        <li><a href="<?= base_url('index.php/Employee/logout')?>"><i class="careerfy-icon careerfy-logout"></i> Logout</a></li>
                                    </ul>
                                </div>
                            </div>
                        </aside>

                        <div class="careerfy-column-9">
                            <div class="careerfy-typo-wrap">
                                <form class="careerfy-employer-dasboard">
                                    <div class="careerfy-employer-box-section">
                                         <div class="careerfy-profile-title" style="background-color: #8ebc00;padding:10px 0px 00px 20px">
                                                <h2 style="color: white;line-height: 0px">Welcome <?php echo $data->company_name;?></h2>
                                            </div>
                                        <ul class="careerfy-row careerfy-employer-profile-form">
                                           <!--  <li class="careerfy-column-6">
                                                <label>Employer Name</label>
                                                <input value="<?php echo $data->contact_person_info;?>" name="employer_name" onblur="if(this.value == '') { this.value ='raveholdings'; }" onfocus="if(this.value =='raveholdings') { this.value = ''; }" type="text">
                                            </li> -->
                                            <li class="careerfy-column-6">
                                                <label>Company Name</label>
                                                <input value="<?php echo $data->company_name;?>" name="company_name" onblur="if(this.value == '') { this.value ='raveholdings'; }" onfocus="if(this.value =='raveholdings') { this.value = ''; }" type="text">
                                            </li>
                                            <li class="careerfy-column-6">
                                                <label>Contact Person Information</label>
                                                <input value="<?php echo $data->contact_person_info;?>" name="contact_person" onblur="if(this.value == '') { this.value ='employer@localhost.com'; }" onfocus="if(this.value =='employer@localhost.com') { this.value = ''; }" type="text" >
                                            </li>
                                            <li class="careerfy-column-6">
                                                <label>Email</label>
                                                <input value="<?php echo $data->emp_email;?>" name="emp_email" onblur="if(this.value == '') { this.value ='employer@localhost.com'; }" onfocus="if(this.value =='employer@localhost.com') { this.value = ''; }" type="text" readonly>
                                            </li>
                                            <li class="careerfy-column-6">
                                                <label>Phone </label>
                                                <input pattern="[6-9]{1}[0-9]{9}" name="phone" value="<?php echo $data->phone;?>" id="txtPhoneNo" onkeypress="return isNumber(event)" required="" placeholder="Enter Your Phone Number" maxlength="10" onblur="if(this.value == '') { this.value ='Enter Your Phone Number'; }" onfocus="if(this.value =='Enter Your Phone Number') { this.value = ''; }"type="text">
                                            </li>
                                            <li class="careerfy-column-6">
                                                <label>Website</label>
                                                <input value="<?php echo $data->website;?>" name="website" onblur="if(this.value == '') { this.value =''; }" onfocus="if(this.value =='') { this.value = ''; }" type="text">
                                            </li>
                                            <li class="careerfy-column-6">
                                                <label>Industry</label>
                                                <div class="careerfy-profile-select">
                                                    <select  name="industry" value="">
                                                          <?php
                                        foreach ($job_cate as $key )
                                         {
                                            ?>
                                           
                                        <option 

                                        <?php
                                            if($data->industry==$key->industry)
                                            {
                                                echo "selected";
                                            }
                                        ?>

                                         ><?= $key->industry?></option>
                                        <?php
                                    }
                                    ?>
                                                    </select>
                                                </div>
                                            </li>
                                            <li class="careerfy-column-6">
                                                <label>Founded Date </label>
                                               
                                               <input type="text" name="founded_date"  value="<?php echo $data->founded_date;?> " style="width:100%;height:40px;" id="basicDate" data-input>

                                            </li>
                                            <li class="careerfy-column-6">
                                                <label>Registration No.</label>
                                                <input value="<?php echo $data->registration_no;?>" name="registration_no" onblur="if(this.value == '') { this.value =''; }" onfocus="if(this.value =='') { this.value = ''; }" type="text">
                                            </li>
                                            <!-- <li class="careerfy-column-12">
                                                <label>Description </label>
                                                <textarea name="description" value=""><?php echo $data->description;?></textarea>
                                            </li> -->
                                            <li>
                                                 <label>About Company </label>
                                                <textarea maxlength="<?= $char_limit ?>" id="word_count" class="form-control" name="description"   id="editor" placeholder="content"style="margin-top:20px;"><?php echo $data->description;?></textarea><p>Total Words : <span class="char_limit"><?= $char_limit ?></span></p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="careerfy-employer-box-section">
                                        <div class="careerfy-profile-title" style="background-color: #8ebc00;padding:10px 0px 00px 20px">
                                                <h2 style="color: white;line-height: 0px">Address / Location</h2>
                                            </div>
                                        <ul class="careerfy-row careerfy-employer-profile-form">
                                            <li class="careerfy-column-6">
                                                <label>Country</label>
                                                <div class="careerfy-profile-select">
                                                    <select name="country" class="country" value="<?php echo $data->country;?>">
                                                        <?php


                                                        foreach ($country as $country) {
                                                       ?>

<option <?php if($country->CountryName==$data->country) echo "selected"; ?>> <?= $country->CountryName ?></option>
                                                       <?php
                                                        }
                                                       

                                                        ?>
                                                        
                                                        
                                                    </select>
                                                </div>
                                            </li>
                                            <li class="careerfy-column-6 state_box">
                                                <label>State</label>
                                                <div class="careerfy-profile-select">

                                                <select class="state_val" name="state" value="">
                                                <?php
                                        foreach ($sta as $key )
                                         {
                                            ?>
                                           
                                        <option 

                                        <?php
                                            if($data->state==$key->state)
                                            {
                                                echo "selected";
                                            }
                                        ?>

                                         ><?= $key->state?></option>
                                        <?php
                                    }
                                    ?>
                                                    </select>
                                                </div>
                                            </li>
                                            <li class="careerfy-column-6 city_box">
                                                <label>City / Town </label>
                                                <div class="careerfy-profile-select">
                                                    <select name="city" value="" class="city_sel">
                                                                <?php
                                        foreach ($cit as $key )
                                         {
                                            ?>
                                           
                                        <option 

                                        <?php
                                            if($data->city==$key->city)
                                            {
                                                echo "selected";
                                            }
                                        ?>

                                         ><?= $key->city?></option>
                                        <?php
                                    }
                                    ?>
                                </select>
                                                </div>
                                            </li>
                                            <li class="careerfy-column-6">
                                                <label>Postcode </label>
                                                <input value="<?php echo $data->postcode;?>" name="postcode" onblur="if(this.value == '') { this.value ='746000'; }" onfocus="if(this.value =='746000') { this.value = ''; }" type="text">
                                            </li>
                                            <li class="careerfy-column-10">
                                                <label>Full Address </label>
                                                <input value="<?php echo $data->address;?>" name="address" onblur="if(this.value == '') { this.value ='Ha Dong - Ha Noi - Viet Nam'; }" onfocus="if(this.value =='Ha Dong - Ha Noi - Viet Nam') { this.value = ''; }" type="text">
                                            </li>
                                           <!--  <li class="careerfy-column-2">
                                                <button class="careerfy-findmap-btn">Find on Map</button>
                                            </li> -->
                                            <!-- <li class="careerfy-column-6">
                                                <label>Latitude</label>
                                                <input value="51.4935825" onblur="if(this.value == '') { this.value ='51.4935825'; }" onfocus="if(this.value =='51.4935825') { this.value = ''; }" type="text">
                                            </li>
                                            <li class="careerfy-column-6">
                                                <label>Longitude</label>
                                                <input value="-0.16803379999998924" onblur="if(this.value == '') { this.value ='-0.16803379999998924'; }" onfocus="if(this.value =='-0.16803379999998924') { this.value = ''; }" type="text">
                                            </li> -->
                                            <!-- <li class="careerfy-column-12">
                                                <div class="careerfy-profile-map"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d22589232.038285658!2d-103.9763543971716!3d46.28054447273778!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1507595834401"></iframe></div>
                                                <span class="careerfy-short-message">For the precise location, you can drag and drop the pin.</span>
                                            </li> -->
                                        </ul>
                                    </div>
                                    <div class="careerfy-employer-box-section">
                                        <div class="careerfy-profile-title" style="background-color: #8ebc00;padding:10px 0px 00px 20px">
                                                <h2 style="color: white;line-height: 0px">Company Social</h2>
                                            </div>
                                        <ul class="careerfy-row careerfy-employer-profile-form">
                                            <li class="careerfy-column-6">
                                                <label>Facebook</label>
                                                <input value="<?php echo $data->facebook;?>" name="facebook" onblur="if(this.value == '') { this.value ='https://facebook.com/'; }" onfocus="if(this.value =='https://facebook.com/') { this.value = ''; }" type="text">
                                            </li>
                                            <li class="careerfy-column-6">
                                                <label>Twitter</label>
                                                <input value="<?php echo $data->twitter;?>" name="twitter" onblur="if(this.value == '') { this.value ='https://twiiter.com/'; }" onfocus="if(this.value =='https://twiiter.com/') { this.value = ''; }" type="text">
                                            </li>
                                            <li class="careerfy-column-6">
                                                <label>Google Plus</label>
                                                <input value="<?php echo $data->google_plus;?>" name="google_plus" onblur="if(this.value == '') { this.value ='https://google-plus.com/'; }" onfocus="if(this.value =='https://google-plus.com/') { this.value = ''; }" type="text">
                                            </li>
                                            <li class="careerfy-column-6">
                                                <label>Youtube</label>
                                                <input value="<?php echo $data->youtube;?>" name="youtube" onblur="if(this.value == '') { this.value ='https://youtube.com/'; }" onfocus="if(this.value =='https://youtube.com/') { this.value = ''; }" type="text">
                                            </li>
                                            <!-- <li class="careerfy-column-6">
                                                <label>Vimeo</label>
                                                <input value="https://vimeo.com/" onblur="if(this.value == '') { this.value ='https://vimeo.com/'; }" onfocus="if(this.value =='https://vimeo.com/') { this.value = ''; }" type="text">
                                            </li> -->
                                            <li class="careerfy-column-6">
                                                <label>Linkedin</label>
                                                <input value="<?php echo $data->linkedin;?>" name="linkedin"  onblur="if(this.value == '') { this.value ='https://linkedin.com/'; }" onfocus="if(this.value =='https://linkedin.com/') { this.value = ''; }" type="text">
                                            </li>
                                        </ul>
                                    </div>
               <!--                      <div class="careerfy-employer-box-section">
                                        <div class="careerfy-profile-title"><h2>Comapany Photos</h2></div>
                                        <div class="careerfy-company-photo">
                                            <img src="images/employer-profile-nonphoto.png" alt="">
                                            <h2>Drag & Drop Photos here to upload</h2>
                                            <small>You can upload up to 5 images under your profile</small>
                                            <div class="careerfy-fileUpload">
                                                <span><i class="careerfy-icon careerfy-upload"></i> Upload Images</span>
                                                <input type="file" class="careerfy-upload" />
                                            </div>
                                        </div>
                                        <div class="careerfy-company-gallery none-element">
                                            <ul class="careerfy-row">
                                                <li class="careerfy-column-3">
                                                    <figure>
                                                        <a href="#"><img src="extra-images/employer-company-photo-1.jpg" alt=""></a>
                                                        <figcaption>
                                                            <span>Peca8 World</span>
                                                            <div class="careerfy-company-links">
                                                                <a href="#" class="careerfy-icon careerfy-edit"></a>
                                                                <a href="#" class="careerfy-icon careerfy-rubbish"></a>
                                                            </div>
                                                        </figcaption>
                                                    </figure>
                                                </li>
                                                <li class="careerfy-column-3">
                                                    <figure>
                                                        <a href="#"><img src="extra-images/employer-company-photo-1.jpg" alt=""></a>
                                                        <figcaption>
                                                            <span>Peca8 World</span>
                                                            <div class="careerfy-company-links">
                                                                <a href="#" class="careerfy-icon careerfy-edit"></a>
                                                                <a href="#" class="careerfy-icon careerfy-rubbish"></a>
                                                            </div>
                                                        </figcaption>
                                                    </figure>
                                                </li>
                                                <li class="careerfy-column-3">
                                                    <figure>
                                                        <a href="#"><img src="extra-images/employer-company-photo-1.jpg" alt=""></a>
                                                        <figcaption>
                                                            <span>Peca8 World</span>
                                                            <div class="careerfy-company-links">
                                                                <a href="#" class="careerfy-icon careerfy-edit"></a>
                                                                <a href="#" class="careerfy-icon careerfy-rubbish"></a>
                                                            </div>
                                                        </figcaption>
                                                    </figure>
                                                </li>
                                                <li class="careerfy-column-3">
                                                    <figure>
                                                        <a href="#"><img src="extra-images/employer-company-photo-1.jpg" alt=""></a>
                                                        <figcaption>
                                                            <span>Peca8 World</span>
                                                            <div class="careerfy-company-links">
                                                                <a href="#" class="careerfy-icon careerfy-edit"></a>
                                                                <a href="#" class="careerfy-icon careerfy-rubbish"></a>
                                                            </div>
                                                        </figcaption>
                                                    </figure>
                                                </li>
                                                <li class="careerfy-column-3">
                                                    <figure>
                                                        <a href="#"><img src="extra-images/employer-company-photo-1.jpg" alt=""></a>
                                                        <figcaption>
                                                            <span>Peca8 World</span>
                                                            <div class="careerfy-company-links">
                                                                <a href="#" class="careerfy-icon careerfy-edit"></a>
                                                                <a href="#" class="careerfy-icon careerfy-rubbish"></a>
                                                            </div>
                                                        </figcaption>
                                                    </figure>
                                                </li>
                                            </ul>
                                        </div>
                                    </div> -->
                                    <input type="submit" class="careerfy-employer-profile-submit" value="Save Setting">
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
    maxDate: "today"
});
$(document).ready(function() {

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




 var textlimit = <?= $char_limit ?>;

        $('#word_count').keyup(function() {
            var tlength = $(this).val().length;
            $(this).val($(this).val().substring(0, textlimit));
            var tlength = $(this).val().length;
            remain = textlimit - parseInt(tlength);
            $('#remain').text(remain);
$(".char_limit").text(remain);
         });    
}); 
</script>
<script src="https://cdn.ckeditor.com/ckeditor5/12.2.0/classic/ckeditor.js"></script>
                     <script>
   ClassicEditor
       .create( document.querySelector( '#editor' ) )
       .catch( error => {
           console.error( error );
       } );
         </script>

<script type="text/javascript">
     $(".state_val").change(function(){
    var id=$(this).val();

         $.ajax({
        url:"<?php echo base_url(); ?>index.php/Employee/get_city",
        method:"POST",
        data:{id:id},
        success:function(data)
        {
         $('.city_sel').html(data);
       
        }
       });
    });

</script>

</body>



</html>
