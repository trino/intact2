<?php
    if($this->request->session()->read('debug')){ echo "<span style ='color:red;'>" . __FILE__ . "</span>"; }
    $settings = $this->requestAction('settings/get_settings');
    include_once('subpages/api.php');
    $language = $this->request->session()->read('Profile.language');
    $strings = CacheTranslations($language, $this->request->params['controller'] . "_%",$settings);
    include(APP."../application/signature.php");
?>

    <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="portlet light ">
                <div class="header_approved row">
                <div class="col-md-8 col-sm-8 col-xs-12">
                <h2>Approved Driver History Form</h2>
                </div>
                <hr />
                
                <form id="approvedForm" class="approved-form" method="post" action="">
                <div class="row">
                
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
                <select class="form-control required" name="title" required>
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
                <input class="form-control datepicker" value="" required="" placeholder="" name="drc">
                </div>
                </div>
                </div>
                </div>
                </div>
                </div><!-- .driver_info -->
                
                <div class="driving_exp col-md-12 col-sm-12 col-xs-12">
                <h4>DRIVING EXPERIENCE</h4>
                <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 no-padding margin-bottom-10">
                <label class="control-label col-md-6 col-sm-6 col-xs-12 required">Years experience under current class of license</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                <input class="form-control" value="" required="" placeholder="" name="ycl">
                </div>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12 no-padding margin-bottom-10">
                <label class="control-label col-md-6 col-sm-6 col-xs-12 required">Years of US commercial driving experience</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                <input class="form-control" value="" required="" placeholder="" name="ycde">
                </div>
                </div>
                
                <div class="col-md-12 col-sm-12 col-xs-12 no-padding margin-bottom-10">
                <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                <label class="control-label col-md-12 col-sm-12 col-xs-12 required">Check your current status below</label>
                <div class="col-md-6 col-sm-6 col-xs-12 checkbox-list">
                      <label class="checkbox-inline padding-left">
                       <div class="checkbox" id="owner-operator"><span class="checked"><input type="checkbox" value="1" id="ownerOperator" name="oo1" class="form-control"></span></div>
                       <span>Owner Operator</span>
                      </label>
                      <label class="checkbox-inline padding-left">
                      <div class="checkbox" id="company-driver"><span><input type="checkbox" value="2" id="companyDriver" name="oo1" class="form-control"></span></div>
                      <span>Company Driver</span>
                       </label>
                </div>
                </div>
                
                </div>
                
                </div>
                
                </div>
                </div><!-- .driving_exp -->
                
                
                <div class="trucking_company col-md-12 col-sm-12 col-xs-12">
                <h4>TRUCKING COMPANY EMPLOYMENT INFORMATION (Minimum 3 years history must be provided)</h4>
                <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                <h5>Current Employer</h5>
                </div>
                
                <div class="col-md-12 col-sm-12 col-xs-12 no-padding margin-bottom-10">
                <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                <label class="control-label col-md-5 col-sm-5 col-xs-12">Company Name:</label>
                <div class="col-md-7 col-sm-7 col-xs-12">
                <input class="form-control" value="" required="" placeholder="" name="compname">
                </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                <label class="control-label col-md-4 col-sm-4 col-xs-12 required">Drugs:</label>
                <div class="col-md-8 col-sm-8 col-xs-12">
                <input class="form-control" value="" required="" placeholder="" name="drugs">
                </div>
                </div>
                </div>
                
                </div>
                
                <div class="col-md-12 col-sm-12 col-xs-12 no-padding margin-bottom-10">
                <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                <label class="control-label col-md-5 col-sm-5 col-xs-12">Address:</label>
                <div class="col-md-7 col-sm-7 col-xs-12">
                <input class="form-control" value="" required="" placeholder="" name="address">
                </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                <label class="control-label col-md-4 col-sm-4 col-xs-12 required">Email:</label>
                <div class="col-md-8 col-sm-8 col-xs-12">
                <input class="form-control" value="" required="" placeholder="" name="email">
                </div>
                </div>
                </div>
                
                </div>
                
                <div class="col-md-12 col-sm-12 col-xs-12 no-padding margin-bottom-10">
                <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                <label class="control-label col-md-5 col-sm-5 col-xs-12">Supervisior's Name:</label>
                <div class="col-md-7 col-sm-7 col-xs-12">
                <input class="form-control" value="" required="" placeholder="" name="supname">
                </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                <label class="control-label col-md-4 col-sm-4 col-xs-12">Phone#:</label>
                <div class="col-md-8 col-sm-8 col-xs-12">
                <input class="form-control" value="" required="" placeholder="" name="phone">
                </div>
                </div>
                </div>
                
                </div>
                
                <div class="col-md-12 col-sm-12 col-xs-12 no-padding margin-bottom-10">
                <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                <label class="control-label col-md-12 col-sm-12 col-xs-12">Employment Start Date:</label>
                <div class="col-md-12 col-sm-12 col-xs-12">
                <input class="form-control" value="" required="" placeholder="" name="esd">
                </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                <label class="control-label col-md-12 col-sm-12 col-xs-12">Employment End Date:</label>
                <div class="col-md-12 col-sm-12 col-xs-12">
                <input class="form-control" value="" required="" placeholder="" name="eed">
                </div>
                </div>
                </div>
                
                </div>
                
                <div class="previous_employer1">
                <div class="col-md-12 col-sm-12 col-xs-12">
                <h5>Previous Employer 1</h5>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12 no-padding margin-bottom-10">
                <label class="control-label col-md-2 col-sm-2 col-xs-12">Company Name:</label>
                <div class="col-md-10 col-sm-10 col-xs-12">
                <input class="form-control" value="" required="" placeholder="" name="compname">
                </div>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12 no-padding margin-bottom-10">
                <label class="control-label col-md-2 col-sm-2 col-xs-12">Address:</label>
                <div class="col-md-10 col-sm-10 col-xs-12">
                <input class="form-control" value="" required="" placeholder="" name="address">
                </div>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12 no-padding margin-bottom-10">
                <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                <label class="control-label col-md-5 col-sm-5 col-xs-12">Supervisior's Name:</label>
                <div class="col-md-7 col-sm-7 col-xs-12">
                <input class="form-control" value="" required="" placeholder="" name="supname">
                </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                <label class="control-label col-md-4 col-sm-4 col-xs-12">Phone#:</label>
                <div class="col-md-8 col-sm-8 col-xs-12">
                <input class="form-control" value="" required="" placeholder="" name="phone">
                </div>
                </div>
                </div>
                
                </div>
                
                <div class="col-md-12 col-sm-12 col-xs-12 no-padding margin-bottom-10">
                <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                <label class="control-label col-md-12 col-sm-12 col-xs-12">Employment Start Date:</label>
                <div class="col-md-12 col-sm-12 col-xs-12">
                <input class="form-control" value="" required="" placeholder="" name="esd">
                </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                <label class="control-label col-md-12 col-sm-12 col-xs-12">Employment End Date:</label>
                <div class="col-md-12 col-sm-12 col-xs-12">
                <input class="form-control" value="" required="" placeholder="" name="eed">
                </div>
                </div>
                </div>
                
                </div>
                
                </div>
                
                
                <div class="previous_employer2">
                <div class="col-md-12 col-sm-12 col-xs-12">
                <h5>Previous Employer 2</h5>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12 no-padding margin-bottom-10">
                <label class="control-label col-md-2 col-sm-2 col-xs-12">Company Name:</label>
                <div class="col-md-10 col-sm-10 col-xs-12">
                <input class="form-control" value="" required="" placeholder="" name="compname">
                </div>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12 no-padding margin-bottom-10">
                <label class="control-label col-md-2 col-sm-2 col-xs-12">Address:</label>
                <div class="col-md-10 col-sm-10 col-xs-12">
                <input class="form-control" value="" required="" placeholder="" name="address">
                </div>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12 no-padding margin-bottom-10">
                <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                <label class="control-label col-md-5 col-sm-5 col-xs-12">Supervisior's Name:</label>
                <div class="col-md-7 col-sm-7 col-xs-12">
                <input class="form-control" value="" required="" placeholder="" name="supname">
                </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                <label class="control-label col-md-4 col-sm-4 col-xs-12">Phone#:</label>
                <div class="col-md-8 col-sm-8 col-xs-12">
                <input class="form-control" value="" required="" placeholder="" name="phone">
                </div>
                </div>
                </div>
                
                </div>
                
                <div class="col-md-12 col-sm-12 col-xs-12 no-padding margin-bottom-10">
                <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                <label class="control-label col-md-12 col-sm-12 col-xs-12">Employment Start Date:</label>
                <div class="col-md-12 col-sm-12 col-xs-12">
                <input class="form-control" value="" required="" placeholder="" name="esd">
                </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                <label class="control-label col-md-12 col-sm-12 col-xs-12">Employment End Date:</label>
                <div class="col-md-12 col-sm-12 col-xs-12">
                <input class="form-control" value="" required="" placeholder="" name="eed">
                </div>
                </div>
                </div>
                
                </div>
                
                <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                <label class="control-label col-md-12 col-sm-12 col-xs-12 required">ANY DRIVER TRAINING OR SPECIAL COURSES(IE: HAZARDOUS GOODS TRAINING)</label>
                <div class="col-md-12 col-sm-12 col-xs-12">
                <textarea name="dtsc" class="form-control"></textarea>
                </div>
                </div>
                </div>
                </div>
                
                
                </div>
                </div><!-- .trucking_comapny -->
                
                <div class="claims_history col-md-12 col-sm-12 col-xs-12 margin-bottom-10">
                <h4>CLAIMS HISTORY -List all accidents you were involved in for last four years regardless of fault  </h4>
                <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                         <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th>Date of Loss</th>
                                <th>Description and locaton of accident </th>
                                <th>% of fault</th>
                                <th>Total amount paid
                        </th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td><input class="form-control" value="" required="" placeholder="" name="dol"></td>
                                <td><input class="form-control" value="" required="" placeholder="" name="dloa"></td>
                                <td><input class="form-control" value="" required="" placeholder="" name="pof"></td>
                                <td><input class="form-control" value="" required="" placeholder="" name="tap"></td>
                              </tr>
                              <tr>
                                <td><input class="form-control" value="" required="" placeholder="" name="dol"></td>
                                <td><input class="form-control" value="" required="" placeholder="" name="dloa"></td>
                                <td><input class="form-control" value="" required="" placeholder="" name="pof"></td>
                                <td><input class="form-control" value="" required="" placeholder="" name="tap"></td>
                              </tr>
                              <tr>
                                <td><input class="form-control" value="" required="" placeholder="" name="dol"></td>
                                <td><input class="form-control" value="" required="" placeholder="" name="dloa"></td>
                                <td><input class="form-control" value="" required="" placeholder="" name="pof"></td>
                                <td><input class="form-control" value="" required="" placeholder="" name="tap"></td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                </div>
                </div><!-- .claims_history -->
                
                
                <div class="comments margin-bottom-10 clearfix">
                <div class="col-md-12 col-sm-12 col-xs-12">
                <textarea name="comments" class="form-control required" placeholder="COMMENTS"></textarea>
                </div>
                </div>
                
                <div class="certify_note margin-bottom-10 clearfix">
                <div class="col-md-12 col-sm-12 col-xs-12">
                I certify that I have completed this application and that all the information is true and accurate.  I authorize <?= $strings["dashboard_sitename"]; ?> and/or my Insurance Broker to do a background check(if deemed necessary) in accordance with Provincial and Federal Laws.  I authorize my previous employers listed on this form to release any information requested by <?= $strings["dashboard_sitename"]; ?> or my Insurance Broker and hold them harmless of all liability from the release of said information.
                </div>
                </div>
                
                <div class="signature_date clearfix">
                <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="row">
                <label class="control-label col-md-12 col-sm-12 col-xs-12">Driver's Signature</label>
                <div class="col-md-12 col-sm-12 col-xs-12">
                <?php 
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
                    Submit <i class="m-icon-swapright m-icon-white"></i>
              </a>
        </div>
                
                </div>
                
                
                </div>
                <div class="clearfix"></div>
        </div>  
        </div>
    </div>