<aside class="careerfy-column-3  sticky">
                            <div class="careerfy-typo-wrap">
                                <div class="careerfy-employer-dashboard-nav">
                                    <figure>
                                         <a href="#" class=""><img src="<?php echo base_url('upload/'. $data->image)?>" alt="" style="width: 140px ; height: 140px;"></a>
                                        <figcaption>
                                            <div class="careerfy-fileUpload">
                                               <!--  <span><i class="careerfy-icon careerfy-add"></i> Upload Photo</span> -->
                                                <input type="file" class="careerfy-upload" />
                                            </div>
                                            <h2><?php echo $data->company_name;?></h2>
                                        </figcaption>
                                    </figure>
                                    <ul>
                                        
                                  <li><a href="<?= base_url('index.php/Employee/employer_profile');?>"><i class="careerfy-icon careerfy-user"></i> Company Profile</a></li>
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