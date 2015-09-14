 <style>
    .overlay-wrapper {
    background: rgba(255, 255, 255, 0.7) none repeat scroll 0 0;
    display: none;
    height: 100%;
    left: 0;
    position: fixed;
    top: 0;
    width: 100%;
    z-index: 99999;
}
.overlay {
    left: 50%;
    position: absolute;
    top: 50%;
}
    </style>
<!-- BEGIN PAGE HEAD -->
	<div class="page-head">
		<div class="container">
			<!-- BEGIN PAGE TITLE -->
			<div class="page-title">
				<h1>Driver <small>Add</small></h1>
			</div>
			
		</div>
	</div>
	<!-- END PAGE HEAD -->
	<!-- BEGIN PAGE CONTENT -->
	<div class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="portlet light ">
                <div class="header_approved row">
                <div class="col-md-8 col-sm-8 col-xs-12">
                <h2>Approved Driver History Form</h2>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12 logo">
                <div class="main-logo">
                <img src="<?php echo WEB_ROOT;?>img/intact_logo.png" />
                </div>
                <div class="clearfix"></div>
                <span>Intact Insurance Company</span>
                </div>
                </div><!-- .header_approved  -->
                
                <hr />
                <ul class="nav nav-tabs">
                        <li class="active">
                            <a data-toggle="tab" href="#tab_1_1" id="1">Step 1</a>
                        </li>
                        <li id="second">
                            <a data-toggle="tab" href="#tab_1_2" id="2">Step 2</a>
                        </li>
                        <li id="third">
                            <a data-toggle="tab" href="#tab_1_3" id="3">Step 3</a>
                        </li>
                        

                </ul>
                <div class="tab-content">
                    <div id="tab_1_1" class="tab-pane active">
                        <div class="row">
                            <form id="approvedForm" class="step1-form" method="post" action="">
                            <div class="driver_info col-md-12 col-sm-12 col-xs-12">
                            <h4>DRIVER INFORMATION</h4>
                            <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12 no-padding margin-bottom-10">
                            <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <label class="control-label col-md-5 col-sm-5 col-xs-12">Full Name:</label>
                            <div class="col-md-7 col-sm-7 col-xs-12">
                            <input class="form-control" value="" required="" placeholder="" name="fname">
                            </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <label class="control-label col-md-4 col-sm-4 col-xs-12">Gender</label>
                            <div class="col-md-8 col-sm-8 col-xs-12">
                            <select class="form-control required" name="title" >
                                 <option value="Male">Male</option>
                                 <option value="Female">Female</option>
                             </select>
                            </div>
                            </div>
                            </div>
                            </div>
                            
                            <div class="col-md-12 col-sm-12 col-xs-12 no-padding margin-bottom-10">
                            <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <label class="control-label col-md-5 col-sm-5 col-xs-12">License #:</label>
                            <div class="col-md-7 col-sm-7 col-xs-12">
                            <input class="form-control" value="" required="" placeholder="" name="license">
                            </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <label class="control-label col-md-4 col-sm-4 col-xs-12">Date of Birth:</label>
                            <div class="col-md-8 col-sm-8 col-xs-12">
                            <input class="form-control" value="" required="" placeholder="" name="dob">
                            </div>
                            </div>
                            </div>
                            
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12 no-padding margin-bottom-10">
                                                    <label class="control-label col-md-5 col-sm-5 col-xs-12">Province issued: </label>
                                                    <div class="col-md-7 col-sm-7 col-xs-12 province-select">
                                                    <select class="form-control req_driver" name="driver_province" required=""><option value="">Select Province</option><option value="AB">Alberta</option><option value="BC">British Columbia</option><option value="MB">Manitoba</option><option value="NB">New Brunswick</option><option value="NL">Newfoundland and Labrador</option><option value="NT">Northwest Territories</option><option value="NS">Nova Scotia</option><option value="NU">Nunavut</option><option selected="" value="ON">Ontario</option><option value="PE">Prince Edward Island</option><option value="QC">Quebec</option><option value="SK">Saskatchewan</option><option value="YT">Yukon Territories</option></select>
                                                    </div>
                                                </div>
                            
                            
                            <div class="col-md-12 col-sm-12 col-xs-12 no-padding margin-bottom-10">
                            <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <label class="control-label col-md-5 col-sm-5 col-xs-12 required padding-right">Driver License class:</label>
                            <div class="col-md-7 col-sm-7 col-xs-12">
                            <input class="form-control" value="" required="" placeholder="" name="dlc">
                            </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <label class="control-label col-md-4 col-sm-4 col-xs-12 required">Date of receipt for this class:</label>
                            <div class="col-md-8 col-sm-8 col-xs-12">
                            <input class="form-control" value="" required="" placeholder="" name="drc">
                            </div>
                            </div>
                            </div>
                            </div>
                            </div>
                            </div><!-- .driver_info -->
                            
                         <div class="col-md-12 col-sm-12 col-xs-12 subz">
                          <a href="javascript:void(0);" class="btn btn-success btn-lg pull-right nextstep" onclick="$('.overlay-wrapper').show();
        window.setTimeout(function(){  $('#second a').click();$('.overlay-wrapper').hide();}, 1500);" >
                                Next <i class="m-icon-swapright m-icon-white"></i>
                          </a>
                    </div>
                           </form> 
                        </div>
                    </div>
                    <div id="tab_1_2" class="tab-pane">
                        <div class="form-group row">
                            <h3 class="col-md-12">Past Employer</h3>
                        </div>
                        <div class="gndn">
                            <div class="form-group row">
                                <label class="control-label col-md-3">Company Name:</label>
                                <div class=" col-md-9">
                                    <input type="text" name="company_name[]" class="form-control">
                                </div>
                            </div> 

                                <div class="form-group row">
                                    <label class="control-label col-md-3">Address:</label>
                                    <div class="col-md-3">
                                        <input type="text" name="address[]" class="form-control">
                                    </div>
                                    <label class="control-label col-md-3">City:</label>
                                    <div class="col-md-3">
                                        <input type="text" name="city[]" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                <label class="control-label col-md-3">Province/State:</label>
                                <div class="col-md-3">
                                    <input type="text" name="state_province[]" class="form-control">
                                </div>
                                <label class="control-label col-md-3">Country:</label>
                                <div class="col-md-3">
                                <input type="text" name="country[]" class="form-control">
                                </div>
                                </div>
                                <div class="form-group row">
                                <label class="control-label col-md-3">Supervisor's Name:</label>
                                <div class="col-md-3">
                                <input type="text" name="supervisor_name[]" class="form-control">
                                </div>
                               <label class="control-label col-md-3">Phone Number:</label>
                               <div class="col-md-3">
                               <input type="text" name="supervisor_phone[]" role="phone" class="form-control">
                               </div>
                               </div>
                               
                               <div class="form-group row">
                               <label class="control-label col-md-3">Supervisor's Email:</label>
                               <div class="col-md-3">
                               <input type="text" name="supervisor_email[]" role="email" class="form-control email1">
                               </div>
                               <label class="control-label col-md-3">Secondary Email:</label>
                               <div class="col-md-3">
                               <input type="text" name="supervisor_secondary_email[]" role="email" class="form-control email1">
                               </div>
                               </div>
                               
                               <div class="form-group row">
                                <label class="control-label col-md-3">Employment Start Date:</label>
                                <div class="col-md-3">
                                <input type="text" name="employment_start_date[]" class="form-control date-picker">
                                </div>
                                <label class="control-label col-md-3">Employment End Date:</label>
                                <div class="col-md-3">
                                <input type="text" name="employment_end_date[]" class="form-control date-picker">
                                </div>
                                </div>
                                <div class="form-group row">
                                <label class="control-label col-md-3">Claims with this Employer:</label>
                               <div class="col-md-3">
                                <label class="radio-inline"><div class="radio"><input type="radio" value="1" name="claims_with_employer_35881[]"></div><span>Yes</span></label>
                                <label class="radio-inline"><div class="radio"><input type="radio" value="0" name="claims_with_employer_35881[]"></div><span>No</span>  </div></label>
                                 <label class="control-label col-md-3">Date Claims Occurred:</label>
                                 <div class="col-md-3">
                                 <input type="text" name="claims_recovery_date[]" class="form-control date-picker">
                                 </div>
                                 </div>
                                 
                                 <div class="form-group row">
                                    <label class="control-label col-md-3">Employment history confirmed by (Verifier Use Only):</label>
                                    <div class="col-md-3">
                                        <input type="text" name="emploment_history_confirm_verify_use[]" class="form-control">
                                    </div>

                                <label class="control-label col-md-3">US DOT MC/MX#:</label>
                                <div class="col-md-3">
                                <input type="text" class="form-control" name="us_dot[]">
                                </div>

                                <label style="display: none;" class="control-label col-md-3"></label>
                                <div class="col-md-3">
                                <input type="text" name="signature[]" style="display: none;" class="form-control">
                                </div>
                                </div>

                                <div class="form-group row">
                                <label class="control-label col-md-3">Date:</label>
                                <div class="col-md-3">
                                <input type="text" name="signature_datetime[]" class="form-control date-picker">
                                </div>
                                </div>
                                <div class="form-group row">
                                            <label class="control-label col-md-3">Equipment Operated: </label>
                                            <div class="col-md-9">
                                               <label class="checkbox-inline"> <div class="checkbox"><div class="checked"><span><input type="checkbox" value="1" name="equipment_vans[]"></span></div></div><span>Vans</span></label>
                                                <label class="checkbox-inline"><div class="checkbox"><div class="checked"><span><input type="checkbox" value="1" name="equipment_reefer[]"></span></div></div><span>Reefers</span></label>
                                                <label class="checkbox-inline"><div class="checkbox"><div class="checked"><span><input type="checkbox" value="1" name="equipment_decks[]"></span></div></div><span>Decks</span></label>
                                                <label class="checkbox-inline"><div class="checkbox"><div class="checked"><span><input type="checkbox" value="1" name="equipment_super[]"></span></div></div><span>Super B's</span></label>
                                                <label class="checkbox-inline"><div class="checkbox"><div class="checked"><span><input type="checkbox" value="1" name="equipment_straight_truck[]"></span></div></div><span>Straight Truck</span></label>
                                                <label class="checkbox-inline"><div class="checkbox"><div class="checked"><span><input type="checkbox" value="1" name="equipment_others[]"></span></div></div><span>Others:</span></label>
                                </div>
                                </div>
                                <div class="form-group row">
                                <label class="control-label col-md-3">Driving Experience: </label>
                                <div class="col-md-9">
                                    <label class="checkbox-inline"><div class="checkbox"><div class="checked"><span><input type="checkbox" value="1" name="driving_experince_local[]"></span></div></div><span>Local</span></label>
                                    <label class="checkbox-inline"><div class="checkbox"><div class="checked"><span><input type="checkbox" value="1" name="driving_experince_canada[]"></span></div></div><span>Canada</span></label>
                                    <label class="checkbox-inline"><div class="checkbox"><div class="checked"><span><input type="checkbox" value="1" name="driving_experince_canada_rocky_mountains[]"></span></div></div><span>Canada: Rocky Mountains</span></label>
                                    <label class="checkbox-inline"><div class="checkbox"><div class="checked"><span><input type="checkbox" value="1" name="driving_experince_usa[]"></span></div></div><span>USA</span></label>
                                </div>
                
                                </div>
                                <div id="more_div"></div>
                           
                          <div class="col-md-12 col-sm-12 col-xs-12 subz">
                              <a href="javascript:void(0);" class="btn btn-success btn-lg pull-right" onclick="$('.overlay-wrapper').show();
        window.setTimeout(function(){  $('#third a').click();$('.overlay-wrapper').hide();}, 1500);" >
                                    Next <i class="m-icon-swapright m-icon-white"></i>
                              </a>
                            </div>
        
                        <div class="clearfix"></div>
                     </div>
                    
                    </div>
                                    
                    <div id="tab_1_3" class="tab-pane">
                        <div class="certify_note margin-bottom-10 margin-top-10 clearfix">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                            I certify that I have completed this application and that all the information is true and accurate.  I authorize Intact Insurance, ISB Canada and/or my Insurance Broker to do a background check(if deemed necessary) in accordance with Provincial and Federal Laws.  I authorize my previous employers listed on this form to release any information requested by Intact Insurance, ISB Canada or my Insurance Broker and hold them harmless of all liability from the release of said information.  
                            </div>
                            </div>
                            
                            <div class="signature_date clearfix">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="row">
                            <label class="control-label col-md-12 col-sm-12 col-xs-12">Driver's Signature</label>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                            <?php 
                            include(APP."../application/signature.php");
                                //include('/canvas/adddriver.php');
                                includeCanvas("gfs_signature");
                            ?>
                            </div>
                            
                            
                            </div>
                            
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="row">
                            <label class="control-label col-md-12 col-sm-12 col-xs-12">Date</label>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                            <input class="form-control" value="" required="" placeholder="" name="driversigndate">
                            </div>
                            
                            
                            </div>
                            
                            </div>
                            
                            </div>
                                
                                
                         <div class="col-md-12 col-sm-12 col-xs-12 subz">
                              <a href="javascript:void(0);" class="btn btn-success btn-lg pull-right" >
                                    Submit
                              </a>
                            </div>
                            <div class="clearfix"></div>
                    </div>
                  <div class="overlay-wrapper">
                    <div class="overlay">
                    <img src="<?php echo $this->request->webroot;?>/assets/admin/layout/img/ajax-loading.gif" />
                    </div>
                    </div>  
                </div>
                
                
                </div>
                </div>
            </div>
        </div>
         <?php //include('subpages/profile/adddriver.php');?>   
    </div>


