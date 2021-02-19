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
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
 <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">


<style>

  body{
    overflow-x: hidden;
  }
    
    .careerfy-parallex-full{
        background: #fff!important;
        border: none;
    }
    .item p{
      color: #626262;
    }


@media only screen and (min-width: 1000px) {

.careerfy-typo-wrap-main{
        height: 450px;
        padding: 50px;
    

    }
}
@media only screen and (max-width: 1055px) {

.right-sec {
         display: none;
}
.left-sec{
    width: 100%;
    padding: 20px;
}
}
.form-group{
    margin: 10px;
}
.form-control {
    background: none!important;
    border-bottom: 1px solid #999!important;
    margin-top:20px;
    border-radius: 0px!important;
}

</style>
        
        
        <!-- Banner -->
        <div class="careerfy-banner careerfy-typo-wrap careerfy-typo-wrap-main" style="padding-left: 0;height: 350px;">
            <span class="careerfy-banner-transparent"></span>
           
         <div class="careerfy-banner-caption">
                 <div class="row">
                    <div class="col-md-12 left-sec " style="margin-top: 20px;">
                    <h1  style="font-size:45px;text-align: center;line-height: 55px;font-weight: 600;display: block">Hire the Smarter Talent,</h1>
                    <h1 style="font-size:45px;text-align: center;line-height: 55px;font-weight: 600;"> with MyCountry MyJob</h1>
                
                    <!-- <h3 style="color:#fff;font-size:20px;text-align: left;margin-left: 40px;line-height: 18px;font-weight: 400;">Over 3 crore qualified candidates</h3> -->

                   <!--  <h5 style="text-align: left;margin-left:40px;"><button type="submit" id="postjob" class="btn btn" style="padding: 10px 60px;background:#9EBD23;color: #fff;">POST A JOB</button></h5> -->
                        
                        
                </div>
                <div class="col-md-3"></div>
                <div class="col-md-3 right-sec" style="background:#fff;border-radius: 8px;text-align: left;box-shadow: 5px 10px 18px #888888;display: none">
                   <form class="form-group"  action="<?=base_url('index.php/Employee/lead1')?>" method="post"    >
                    <div class="formtext">
                        <center><h3 style="color: #000;">GET IN TOUCH</h3></center>
                         </div>
                        <div class="form-group1"  >
                            <input type="text" name="name" required="" class="form-control"  placeholder="Name">
                         </div>
                       <div class="form-group1">
                            <input type="text"name="email" required="" class="form-control"  placeholder="Email">
                         </div>
                        <div class="form-group1">
                            <input pattern="[6-9]{1}[0-9]{9}" required="" type="text" name="phone" class="form-control"  placeholder="Phone" id="txtPhoneNo" onkeypress="return isNumber(event)" required="" placeholder="Enter Your Phone Number" maxlength="10">
                         </div>
                          <div class="form-group1">
                            <label>Location</label>
                            <select name="location" required="" style="border:none;background:none;border-bottom: 1px solid #888;">
                             <option value="" >Select City</option>
                                        <?php
                                        foreach ($ciyt as $key )
                                         {
                                            ?>
                                           
                                        <option ><?= $key->city?></option>
                                        <?php
                                    }
                                    ?>
                             
                              
                            </select>
                          </div>
                          <div class="form-group1">
                          <center> <button type="submit" class="btn btn-primary" style="padding: 5px;width: 100%;margin-top:20px;" >Get a Call Back</button></center>
                        </div>


                    
                     
                 
           
        </form>
        </div>
    </div>
</div>
</div>
    
        <!-- Banner -->
             <div class="careerfy-main-section" style="padding: 50px 0px;">
                <div class="container-fluid">
                    <div class="row" style="margin:0 50px;">
                       <center> <h2 style="font-weight: 500;margin: 20px;font-size:25px;line-height: 35px;">Hire the Right Candidate with mycountrymyjob.com</h2> </center>

                   

                        <div class="col-md-4 col-md-4-responsive">
                            <div class="innder-col-md-4" style="text-align: center;box-shadow: 5px 10px 18px #888888;padding: 10px;min-height: 300px;">
                            <img src="https://img.icons8.com/nolan/64/000000/resume.png" style="margin: 20px;">
                            <h3 style="color: #000;">Post a Job for Almost Free</h3>
                            <p style="color: #999;">If a job posting is all you need, go for our Starter Plan</p>
                    <button type="submit" class="btn" style="padding: 10px 40px;background:#9EBD23;color:#fff;">Know More</button>
                        </div>
                        </div>
                        
                        <div class="col-md-4 col-md-4-responsive">
                            <div class="innder-col-md-4" style="text-align: center;box-shadow: 5px 10px 18px #888888;padding: 10px;min-height: 300px;">
                            <img src="https://img.icons8.com/nolan/64/000000/search.png" style="margin: 20px;">
                            <h3 style="color: #000;">Smart Search</h3>
                            <p style="color: #999;">Access database and find relevant candidates with India’s most advanced keyword-search engine</p>
                    <button type="submit" class="btn" style="padding: 10px 40px;background:#9EBD23;color:#fff;">Know More</button>

                        </div>
                    </div>
                    <div class="col-md-4 right-sec" style="background:#fff;border-radius: 0px;text-align: left;box-shadow: 5px 10px 18px #888888;">
                   <form class="form-group"  action="<?=base_url('index.php/Employee/lead1')?>" method="post"    >
                    <div class="formtext">
                        <center><h3 style="color: #000;">GET IN TOUCH</h3></center>
                         </div>
                        <div class="form-group1"  >
                            <input type="text" name="name" required="" class="form-control"  placeholder="Name">
                         </div>
                       <div class="form-group1">
                            <input type="text"name="email" required="" class="form-control"  placeholder="Email">
                         </div>
                        <div class="form-group1">
                            <input pattern="[6-9]{1}[0-9]{9}" required="" type="text" name="phone" class="form-control"  placeholder="Phone" id="txtPhoneNo" onkeypress="return isNumber(event)" required="" placeholder="Enter Your Phone Number" maxlength="10">
                         </div>
                          <div class="form-group1">
                         
                            <select name="location" required="" style="border:none;background:none;border-bottom: 1px solid #888;">
                             <option value="" >Select City</option>
                                        <?php
                                        foreach ($ciyt as $key )
                                         {
                                            ?>
                                           
                                        <option ><?= $key->city?></option>
                                        <?php
                                    }
                                    ?>
                             
                              
                            </select>
                          </div>
                          <div class="form-group1">
                          <center> <button type="submit" class="btn btn-primary" style="padding: 5px;width: 100%;margin-top:20px;" >Get a Call Back</button></center>
                        </div>


                    
                     
                 
           
        </form>
        </div>

                     
                </div>
            </div>
        </div>




         <div class="careerfy-main-section">

                <div class="container-fluid" style="padding: 0;background:#EDEDED;margin-bottom: 20px;">

                    <div class="row">
                       
                  <div class="col-md-7" style="text-align: center;">
                    <div class="brand" style="margin: 20px;border-right: 1px solid #999;">
                     <h2 style="font-weight: 500;margin: 20px;font-size:18px;line-height:20px;">Top companies are hiring on My Country My Job</h2> 
                    <img src="<?= base_url()?>/assets/images/brand.png">
                  </div>
                </div>

                <div class="col-md-5" style="text-align: center;">
                  <div class="client" style="margin: 20px;">
                    <h2 style="font-weight: 500;margin: 20px;font-size:18px;line-height:20px;">Client Speak</h2>
                  <div class="owl-carousel owl-theme">
                      <div class="item">
                       <center> <img src="https://img.icons8.com/ios-glyphs/60/000000/quote.png" style="width:60px;"> </center>
                        <p>We collaborated with mycountrymyjob.com for our Graduate Engineer Trainee hiring and it was a wonderful experience.</p>
                        <p>HR Manager</p>
                        <p>RAPLIOT Technologies</p> </div>
                      
                      <div class="item">
                       <center> <img src="https://img.icons8.com/ios-glyphs/60/000000/quote.png" style="width:60px;"> </center>
                        <p>We collaborated with mycountrymyjob.com for our Graduate Engineer Trainee hiring and it was a wonderful experience.</p>
                        <p>HR Manager</p>
                        <p>RAPLIOT Technologies</p> </div>

                        <div class="item">
                       <center> <img src="https://img.icons8.com/ios-glyphs/60/000000/quote.png" style="width:60px;"> </center>
                        <p>We collaborated with mycountrymyjob.com for our Graduate Engineer Trainee hiring and it was a wonderful experience.</p>
                        <p>HR Manager</p>
                        <p>RAPLIOT Technologies</p> </div>

                        <div class="item">
                       <center> <img src="https://img.icons8.com/ios-glyphs/60/000000/quote.png" style="width:60px;"> </center>
                        <p>We collaborated with mycountrymyjob.com for our Graduate Engineer Trainee hiring and it was a wonderful experience.</p>
                        <p>HR Manager</p>
                        <p>RAPLIOT Technologies</p> </div>

                        <div class="item">
                       <center> <img src="https://img.icons8.com/ios-glyphs/60/000000/quote.png" style="width:60px;"> </center>
                        <p>We collaborated with mycountrymyjob.com for our Graduate Engineer Trainee hiring and it was a wonderful experience.</p>
                        <p>HR Manager</p>
                        <p>RAPLIOT Technologies</p> </div>
                      
                     </div>
                </div>
                </div> 

                

                     
                </div>
            </div>
        </div>



     

                    
             <?php
      include('footer.php');
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
      <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<script>
  
  $('.owl-carousel').owlCarousel({
    autoplay: true,
  autoplayTimeout: 2000,
  autoplayHoverPause: true,
    loop:true,
    margin:10,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
})

</script>
 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script type="text/javascript">
  <?php
  if($this->session->flashdata("pass_not"))
  echo "swal('','Password Not Match.','error')";
  ?>
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
