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
<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/chosen/1.1.0/chosen.min.css">

        <!-- Header -->
        <style>
            mark {
                 font-weight: bold;
                 background-color: inherit!important;
                
              }
               .chosen-container-multi .chosen-choices{
       
        border: 1px solid #f6f6f6;
    }
    .chosen-container-multi .chosen-choices li.search-field{
        margin: 10px;
    }
    .chosen-container-multi .chosen-choices li.search-field input[type=text]{
        color: #999;
    }

        </style>


        <div class="bold-text" style="display:none;">
            
       <!--   <input type="filter-text" 
         value="<?php echo $keyword; echo ' ' ; echo $keyword1; echo ' ' ; echo $keyword2; ?>" > -->
      </div>
        <!-- Header -->
        
        <!-- SubHeader -->
        <div class="careerfy-subheader">
            <span class="careerfy-banner-transparent"></span>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="careerfy-page-title">
                             <h1>Advance Search</h1>
                            <!-- <p>Yes! You make or may not find the right job for you, but that’s ok.</p> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- SubHeader -->

        <!-- Main Content -->
        <div class="careerfy-main-content content">
            
            <!-- Main Section -->
            <div class="careerfy-main-section careerfy-subheader-form-full" style="background:#e9e9e9">
                <div class="container-fluid">
                    <div class="row">

                        <div class="col-md-12 careerfy-typo-wrap" style="padding:0">
                            <!-- Sub Header Form -->

                            <div class="careerfy-subheader-form" >
                                <form class="careerfy-banner-search" action="<?=base_url('index.php/Employee/advance_search')?>" method="post" style="width: 100%;">

                                    <ul>
                            <style type="text/css">
                                .active-result,.chosen-container-multi .chosen-drop .result-selected
                                {
                                    width: 100% !important;
                                    text-align: left !important;
                                }
                                .chosen-container-multi .chosen-choices
								{
									height: 60px !important;
									/*overflow-y: scroll;*/
								}
                            </style>
                                        <li>

 <!-- <input  name="title" value="<?php echo $keyword;?>" placeholder="Keywords" class="id"  type="text"> -->

                                        <select name="title[]" data-placeholder="Choose Category ..."  multiple class="chosen-select cat_ch "  style="height: 41px; ">
                                                    <?php 

                                                           foreach($daba as $res)
                                                           {

                                                            ?>
                                                        <option><?php echo $res->category;?></option>
                                                        <?php
                                                    }
                                                    ?>
                                    
                                                   </select>
                                        </li>

                                     <li>
                                        <select name="skill[]" data-placeholder="Choose Skill ..."  multiple class="chosen-select skill_ch"  style="height: 41px; ">
                                                         <?php 

                                                           foreach($skill as $res)
                                                           {

                                                            ?>
                                                        <option><?php echo $res->skill;?></option>
                                                        <?php
                                                    }
                                                    ?>
                                                   </select>
                                        </li>

                                        <li>
                                            <!-- <input value="<?php echo $keyword1;?>" name="state" placeholder="Location" class="id"   type="text">
                                            <i class="careerfy-icon careerfy-location"></i> -->
<select data-placeholder="Choose State ..." name="state[]" multiple class="chosen-select state_ch"  style="height: 41px; ">
                                                    <?php 
                                                           foreach($state as $res)
                                                           {

                                                            ?>
                                                        <option><?php echo $res->state;?></option>
                                                        <?php
                                                    }
                                                    ?>
                                    
                                                   </select>


                                        </li>
                                        <br><br><br>
                                        <li>
                                            <!-- <div class="careerfy-select-style">
                                               <select name="experience" >
                                        <option value="">Choose</option>
                                         
                                            <?php

                                                for($i=0;$i<31;$i++)
                                                {
                                            ?>
                                                        <option 
                                                        
                                                         value="<?=$i?> Year" 
                                                         <?php if($keyword2 =="$i Year")
                                                         echo "selected";
                                                         ?>
                                                         ><?=$i ?> Year </option>
                                            <?php
                                                }
                                            ?>
                                                </select>
                                            </div> -->

                                            <select data-placeholder="Choose City ..." name="city[]" multiple class="chosen-select city_ch" style="; ">
                                                    <?php 
                                                           foreach($city as $res)
                                                           {

                                                            ?>
                                                        <option><?php echo $res->city;?></option>
                                                        <?php
                                                    }
                                                    ?>
                                    
                                                   </select>
                                        </li>


                                        <li>

    <select data-placeholder="Select Qualification" name="qualification[]" multiple class="chosen-select qualification_ch"  style="height: 41px; ">
                                                         <?php 
                                                           foreach($qualification as $res)
                                                           {

                                                            ?>
                                                        <option><?php echo $res->qualification;?></option>
                                                        <?php
                                                    }
                                                    ?>
                                                   </select>


                                        </li>


   <li>

    <select data-placeholder="Select Experience" name="experience[]" multiple class="chosen-select experience_ch"  style="height: 41px; ">
                                                         <?php 
                                                           for($i=0;$i<31;$i++)
                                                           {

                                                            ?>
                                                        <option><?php echo $i." Year"; ?></option>
                                                        <?php
                                                    }
                                                    ?>
                                                   </select>


                                        </li>

                                        <li class="careerfy-banner-submit"> <input name="btn" type="submit" value=""> <i class="careerfy-icon careerfy-search"></i> </li>
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
            <div class="careerfy-main-section" style="background:#e9e9e9">
                <div class="container">
                    <div class="row">
                        <!--SIDE NAV COMMENT WITH DISPLAY NONE  -->
<!--                         <aside class="careerfy-column-3 careerfy-typo-wrap" style="display: none">
                            <div class="careerfy-typo-wrap" style="">
                               <form action="<?= base_url('index.php/Employee/filter')?>" method="post" >


<input  name="keyword" value="<?php echo $keyword;?>" placeholder="Keywords" class="id"  type="hidden">
<input  name="keyword1" value="<?php echo $keyword1;?>" placeholder="Keywords" class="id"  type="hidden">
<input  name="keyword2" value="<?php echo $keyword2;?>" placeholder="Keywords" class="id"  type="hidden">
                                    <div class="careerfy-search-filter-wrap careerfy-without-toggle" >
                                        <h2><a href="#">Locations</a></h2>

                                        <ul class="careerfy-checkbox" style="height: 150px;overflow-y: scroll">
                                            <?php
                                            $i=0;
                                    foreach ($city as $res) 
                                    {
                                        if(strtoupper($res->city)==strtoupper($keyword1))
                                            $checked="checked";
                                            else
                                                $checked="";
                                 
                                ?> 
                                            <li>
                                                <input class="side_fil_city" type="checkbox" id="r1<?= $i?>" name="city[]" <?= $checked ?>  value="<?= $res->city?>"/>
                                                <label for="r1<?= $i?>"><span></span><?= $res->city?></label>
                                            </li>
                                            <?php
                                            $i++;
                                        }
                                        ?>
                                        </ul>
                                        <input type="submit" name="btn" class="side_btn"  style="display:none " > 
                                    </div>
         
                                    
                                     <div class="careerfy-search-filter-wrap careerfy-search-filter-toggle">
                                        <h2><a href="#" class="careerfy-click-btn">Industry</a></h2>
                                        <div class="careerfy-checkbox-toggle">
                                            <ul class="careerfy-checkbox" style="height: 150px;overflow-y: scroll">
                                                 <?php
                                            $i=0;
                                    foreach ($industry as $re) 
                                    {
                                 
                                ?> 
                                            <li>
                                                <input type="checkbox"  class="side_fil_ind"  id="r11<?= $i?>" name="industry[]"  value="<?= $re->industry?>"/>

                                                 


                                                <label for="r11<?= $i?>"><span></span><?= $re->industry?></label>
                                            </li>
                                            <?php
                                            $i++;
                                        }
                                        ?>

                                            </ul>
                                        </div>
                                    </div>
                                    
                                    <div class="careerfy-search-filter-wrap careerfy-search-filter-toggle">
                                        <h2><a href="#" class="careerfy-click-btn">Categories</a></h2>
                                        <div class="careerfy-checkbox-toggle">
                                            <ul class="careerfy-checkbox" style="height: 150px;overflow-y: scroll">
                                                 <?php
                                            $i=0;
                                    foreach ($category as $re) 
                                    {
                                 
                                ?> 
                                            <li>
                                                <input type="checkbox"  class="side_fil_cat"  id="r17<?= $i?>" name="category[]"  value="<?= $re->category?>"/>
                                                <label for="r17<?= $i?>"><span></span><?= $re->category?></label>
                                            </li>
                                            <?php
                                            $i++;
                                        }
                                        ?>
                                            </ul>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </aside> -->

  <!--SIDE NAV COMMENT WITH DISPLAY NONE  -->

                    <div class="careerfy-column-8 careerfy-typo-wrap">
                            <div class="careerfy-typo-wrap">
                                <div class="careerfy-filterable">
                                     <h2><?= $total_jobs ?> Results Found</h2> 
                                </div>
                              <?php
                                
                                    foreach ($data as $res) 
                                    {
                                ?>    
                                <a href="<?= base_url("index.php/Employee/candidate_detail/$res->id")?>"> 
                                     <div class="careerfy-job careerfy-joblisting-classic">
                                    <ul class="careerfy-row">
                                        <li class="careerfy-column-12">
                                            <div class="careerfy-joblisting-classic-wrap row" style="box-shadow: 0px 0px 3px silver;">
                                                <div class="col-md-8">
                                            <!--     <?php
                                                    $row=$this->db->query("select * from company_registration WHERE company_name='$res->company_name'");
                                                    $userdata=$row->row();

                                                    ?> -->
                                               <div class="careerfy-joblisting-text">
                                                    <div class=""style="margin-left:30px; ">
                                                       <h2 style="font-size: 15px;font-weight:600;color: #333333;"> <i style="color: #ff5722" class="fa fa-fire" aria-hidden="true"></i> <?= $res->category?> </h2>
                                                   
                                                          <div class="company">

                                                            <span style="font-size: 13px;font-weight: 400;color: #666666;"><?= $res->name?></span>
                                                         </div>
                                                           
                                                           <div class="exp_city" style="font-size: 12px">
<div class="row">
        <div class="col-md-6">
                <p> 
                <i style="color:silver" class="fa fa-briefcase" aria-hidden="true"></i>
                &nbsp;
                <span style="color: #666666"><?php $experience="$res->experience1"." "."$res->experience2"; ?><?php echo  $experience?></span>
            </p>
        </div>
        <div class="col-md-6">
              <p style="line-height:28px;">
            <i style="color:silver" class="fa fa-location-arrow"></i>
            &nbsp;
            <span style="color: #666666"><?= $res->city?></span>
         </p>
        </div>
                                                            
                       

                                                             
</div>


                                                             <p>
                                                                <i style="color:silver" class="fa fa-star" aria-hidden="true"></i>
                                                                &nbsp;
                                                              <span style="color: #666666"><?= $res->skill?></span></p>
                                                             </div>

                                                            
                                                            <div class="salary" style="font-size: 12px">

<div class="row">
        <div class="col-md-6">
                <span><span><?php
                                                               $salary="$res->current_salary1"." "."$res->current_salary2";
                          
                                                                    ?>
                                                               
                                                                    <span>
                                                                    <i style="color:silver"  class="fa fa-inr" aria-hidden="true"></i> </span>
                                                                    &nbsp;&nbsp;&nbsp;
                                                               <span style="color: #666666"> <?php echo $salary?></span>
        </div>
        <div class="col-md-6">
              <p style="line-height:28px;">
            <i style="color:silver" class="fa fa-bars"></i>
            &nbsp;
            <span style="color: #666666"><?= $res->category?></span>
         </p>
        </div>
                                                            
                       

                                                             
</div>



                                                               
                                                               
                                                            </div>
                                                           <!-- <a href='<?= base_url("index.php/Employee/job_detail/$res->id")?>'> <button class="btn btn-primary" style="padding: 5px 20px;">Know More</button></a> -->
                                                            </div>
                                                   
                                                       

                                                    </div>
                                                
                                                 


                                                  
                                                
                                                </div>
                                              
                                                <div class="col-md-4">
                                      
                                                     <?php
                                      
                                                    $image=$res->photo;
                                                    if($image)
                                                    {
                                                    ?>
                                                    <div class="cmp-logo" style="border: 1px solid silver;padding:5px;border-radius:0px;display: inline-block;">  
                                                    
                                                <img src="<?php echo base_url('../upload/'. $image)?>" style="height:100px;width:100px;float: right;">
                                                </div>
                                                 <?php
                                            }
                                            ?>
                                                

                                                
                                                 


                                                <div class="skills" style="text-align: right;margin-top:20%;">
                                                        <span style="font-size:11px;line-height: 30px;font-weight: 300;color:#999999;">Posted Date: <?= $res->date?></span>
                                                           <div class="careerfy-job-userlist">
                                                        <form action="<?= base_url("index.php/Employee/save_employee1")?>" method="post">
                                            
                                      <input type="hidden" name="email" value="<?php echo $this->session->userdata('emp_email');?>" >
                                    <input type="hidden"  name="job_id" value="<?= $res->id?>">
                                    <input type="hidden"  name="name" value="<?= $res->name?>">
                                     <input type="hidden"  name="category" value="<?= $res->category?>">
                                     <input type="hidden"  name="skill" value="<?= $res->skill?>">             
                                        <input type="hidden"  name="state" value="<?= $res->state?>">
                                     <input type="hidden"  name="city" value="<?= $res->city?>">
                                             
                                                    <!-- <a href= class="careerfy-job-like"><i class="fa fa-heart"></i></a> -->
                                             <?php
                                        $email=$this->session->userdata('emp_email');

                                        $sql=$this->db->query("select * from save_employee where email='$email' and employee_id='$res->id'");

                                        if($sql->row())
                                        {
                                          

                                            ?>
                                            <br>
                                             <p class="" style="background: transparent;"> <i class="fa fa-check" aria-hidden="true"></i> Saved Employee</p>
                                         <!--  <input type="button" value="" name=""  disabled="" class="careerfy-job-like" > -->

                                         <?php
                                     }

    else if ($this->session->userdata('emp_email'))
    {
       ?> 
       <br>
        <button data-toggle="tooltip" data-placement="right" title="Save This Employee" type="submit" style="background:none!important; "><a href="" class=""><i class="fa fa-heart"style="padding-top:2px!important;color:#ff5722; "></i></a></button>
       
   <?php
    }
    else

    {
      ?>  
       
<!--     <a href="#" value="" class="" id="save-job" style="margin-top: -8px;margin-left: 5px;"><i class="fa fa-heart" style="padding-top:2px!important;color:#ff5722; "></i></a> -->
  <?php
    }
?>       


                                                       
                                                    </form>
                                                    </div>
                                                </div>


                                            </div>









                                            </div>
                                             <a href="<?= base_url("index.php/Employee/candidate_detail/$res->id")?>" class="btn form-control" style="padding:5px;background:#689f38;border-radius:0px;color: white">View Employee</a>
                                        
                                        </li>
                                    </ul>
                                </div>
                                 </a>
                              <?php
                                }
                              ?>     
                                   
                                    

                                </div>
                                <!-- Pagination -->
                                <div class="careerfy-pagination-blog">

<?php echo $pagination; ?>

                                    <!-- <ul class="page-numbers">
                                        <li><a class="prev page-numbers" href="#"><span><i class="careerfy-icon careerfy-arrows4"></i></span></a></li>
                                        <li><span class="page-numbers current">01</span></li>
                                        <li><a class="page-numbers" href="#">02</a></li>
                                        <li><a class="page-numbers" href="#">03</a></li>
                                        <li><a class="page-numbers" href="#">04</a></li>
                                        <li><a class="next page-numbers" href="#"><span><i class="careerfy-icon careerfy-arrows4"></i></span></a></li>
                                    </ul> -->
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
        <div class="careerfy-modal fade careerfy-typo-wrap" id="see-more-location">
        <div class="modal-inner-area">&nbsp;</div>
        <div class="modal-content-area">
            <div class="modal-box-area">

                <div class="careerfy-modal-title-box">
                    <h2 style="margin-left: 30%;">Find by Location</h2>
                    <span class="modal-close"><i class="fa fa-times"></i></span>
                </div>
                <form>
                    <div class="row">

   <?php
      $i=1;

     foreach ($city as $res) 
     {
           

    ?> 
    <div class="col-md-3" style="text-align: left;">
       
                <div class="pretty p-default">
                 <input type="checkbox" value="<?= $res->city; ?>" />
                    <div class="state p-success">
                     <label><?= $res->city; ?></label>
                     </div>
                </div> 
        
            </div>
        <?php

            }
        ?>




       </div>
                <button type="button" class="btn btn-primary" style="padding:5px 20px;margin-top: 20px;">Submit</button>

                    <div class="clearfix"></div>
                    
                </form>
                
            </div>
        </div>
    </div>
<?php
      include('footer.php');

      ?>
       

     
        <!-- Footer -->




                
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/chosen/1.1.0/chosen.jquery.min.js"></script>
<script> 
// alert('a');
$(".chosen-select").chosen();
    $(".chosen-select").on("change",function(){
        // alert($(".chosen-select").val());

    });
</script>

<script type="text/javascript">
    $('.cat_ch').val([<?= $chosen_cat ?>]).trigger('chosen:updated');
</script>

<script type="text/javascript">
    $('.state_ch').val([<?= $chosen_state ?>]).trigger('chosen:updated');
</script>

<script type="text/javascript">
    $('.city_ch').val([<?= $chosen_city ?>]).trigger('chosen:updated');
</script>

<script type="text/javascript">
    $('.qualification_ch').val([<?= $chosen_qualification ?>]).trigger('chosen:updated');
</script>
<script type="text/javascript">
    $('.experience_ch').val([<?= $chosen_experience ?>]).trigger('chosen:updated');
</script>
<script type="text/javascript">
    $('.skill_ch').val([<?= $chosen_skill ?>]).trigger('chosen:updated');
</script>

      <script>
$(document).ready(function(){
  
$(".side_fil_city,.side_fil_ind,.side_fil_cat").click(function(){
    $(".side_btn").trigger("click");
     
});

});
</script>


      <script>
$(document).ready(function(){
  

   $(".side_fil_city").each(function(){

<?php
for($i=0;$i<count($side_fil_city);$i++)
{
?>
    $(".side_fil_city[value='<?= $side_fil_city[$i] ?>']").attr("checked",true);

<?php
}
?>


   });

});
</script>

      <script>
$(document).ready(function(){
  

   $(".side_fil_ind").each(function(){

<?php
for($i=0;$i<count($side_fil_ind);$i++)
{
?>
    $(".side_fil_ind[value='<?= $side_fil_ind[$i] ?>']").attr("checked",true);

<?php
}
?>


   });


});
</script>
<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();   



});
</script>
<script>
$(document).ready(function(){
      $(".side_fil_cat").each(function(){
<?php
for($i=0;$i<count($side_fil_cat);$i++)
{
?>
    $(".side_fil_cat[value='<?= $side_fil_cat[$i] ?>']").attr("checked",true);
<?php
}
?>


   });






</script>




      <script>
$(document).ready(function(){
$(".title_h:contains(highh)").css('background','green !important');

  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $(".id").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });

});
</script>




<script>
    
    $(function() {
  var $input = $("input[type='filter-text']"),
    
   
    $content = $(".content"),
    $results,
    currentClass = "current",
    offsetTop = 50,
    currentIndex = 0;
  function jumpTo() {
    if ($results.length) {
      var position,
        $current = $results.eq(currentIndex);
      $results.removeClass(currentClass);
      if ($current.length) {
        $current.addClass(currentClass);
        position = $current.offset().top - offsetTop;
        window.scrollTo(0, position);
      }
    }
  }

 
  $input.on("click", function() {
    var searchVal = this.value;
    $content.unmark({
      done: function() {
        $content.mark(searchVal, {
          separateWordSearch: true,
          done: function() {
            $results = $content.find("mark");
            currentIndex = 0;
        
          }
        });
      }
    });
  });

  /**
   * Clears the search
   */
  $clearBtn.on("click", function() {
    $content.unmark();
    $input.val("").focus();
  });

  /**
   * Next and previous search jump to
   */
  $nextBtn.add($prevBtn).on("click", function() {
    if ($results.length) {
      currentIndex += $(this).is($prevBtn) ? -1 : 1;
      if (currentIndex < 0) {
        currentIndex = $results.length - 1;
      }
      if (currentIndex > $results.length - 1) {
        currentIndex = 0;
      }
      jumpTo();
    }
  });
});
</script>
<script>
    
     
    
</script>
<script>
    $("#see-more-btn-location").click(function(event){
        event.preventDefault();
    $('#see-more-location').removeClass('fade').addClass('fade-in'); 
    $('body').addClass('careerfy-modal-active');
    })

    $("#see-more-btn-industry").click(function(event){
        event.preventDefault();
    $('#see-more-industry').removeClass('fade').addClass('fade-in'); 
    $('body').addClass('careerfy-modal-active');
    })
    $("#see-more-btn-categories").click(function(event){
        event.preventDefault();
    $('#see-more-categories').removeClass('fade').addClass('fade-in'); 
    $('body').addClass('careerfy-modal-active');
    })
</script>
<script>
    $(document).ready(function() {
    $(".bold-text input").click();
    })
</script>
</body>



</html>
