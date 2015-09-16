<SCRIPT>
    var references = 2;
</SCRIPT>
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
            <h1>Driver
                <small>Add</small>
            </h1>
        </div>

    </div>
</div>
<!-- END PAGE HEAD -->
<!-- BEGIN PAGE CONTENT -->
<div class="page-content profiles-adds">
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
                                <img src="<?= WEB_ROOT; ?>img/intact_logo.png"/>
                            </div>
                            <div class="clearfix"></div>
                            <span>Intact Insurance Company</span>
                        </div>
                    </div>
                    <!-- .header_approved  -->
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
                                    <input type="hidden" name="profile_type" value="5" />
                                    <div class="driver_info col-md-12 col-sm-12 col-xs-12">
                                        <h4>DRIVER INFORMATION</h4>

                                        <div class="col-md-12 col-sm-12 col-xs-12 no-padding margin-bottom-10">
                                            <div class="row">
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <label class="control-label col-md-5 col-sm-5 col-xs-12">Full
                                                        Name:</label>

                                                    <div class="col-md-7 col-sm-7 col-xs-12">
                                                        <input class="form-control" value="" required="" placeholder=""
                                                               name="fname">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <label
                                                        class="control-label col-md-4 col-sm-4 col-xs-12">Gender</label>

                                                    <div class="col-md-8 col-sm-8 col-xs-12">
                                                        <select class="form-control required" name="gender">
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
                                                    <label class="control-label col-md-5 col-sm-5 col-xs-12">License
                                                        #:</label>

                                                    <div class="col-md-7 col-sm-7 col-xs-12">
                                                        <input class="form-control" value="" required="" placeholder=""
                                                               name="driver_license_no">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <label class="control-label col-md-4 col-sm-4 col-xs-12">Date of
                                                        Birth:</label>

                                                    <div class="col-md-8 col-sm-8 col-xs-12">
                                                        <input class="form-control" value="" required="" placeholder=""
                                                               name="dob">
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12 no-padding margin-bottom-10">
                                            <label class="control-label col-md-5 col-sm-5 col-xs-12">Province
                                                issued: </label>

                                            <div class="col-md-7 col-sm-7 col-xs-12 province-select">
                                                <select class="form-control req_driver" name="driver_province"
                                                        required="">
                                                    <option value="">Select Province</option>
                                                    <option value="AB">Alberta</option>
                                                    <option value="BC">British Columbia</option>
                                                    <option value="MB">Manitoba</option>
                                                    <option value="NB">New Brunswick</option>
                                                    <option value="NL">Newfoundland and Labrador</option>
                                                    <option value="NT">Northwest Territories</option>
                                                    <option value="NS">Nova Scotia</option>
                                                    <option value="NU">Nunavut</option>
                                                    <option selected="" value="ON">Ontario</option>
                                                    <option value="PE">Prince Edward Island</option>
                                                    <option value="QC">Quebec</option>
                                                    <option value="SK">Saskatchewan</option>
                                                    <option value="YT">Yukon Territories</option>
                                                </select>
                                            </div>
                                        </div>


                                        <div class="col-md-12 col-sm-12 col-xs-12 no-padding margin-bottom-10">
                                            <div class="row">
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <label
                                                        class="control-label col-md-5 col-sm-5 col-xs-12 required padding-right">Current License Class:</label>

                                                    <div class="col-md-7 col-sm-7 col-xs-12">
                                                        <input class="form-control" value="" required="" placeholder="" name="license_class">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <label class="control-label col-md-4 col-sm-4 col-xs-12 required">Date of receipt for this class:</label>
                                                    <div class="col-md-8 col-sm-8 col-xs-12">
                                                        <input class="form-control datepicker" value="" required="" placeholder="" name="date_class">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>



                                        <div class="col-md-12 col-sm-12 col-xs-12 no-padding margin-bottom-10">
                                            <div class="row">
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <label class="control-label col-md-5 col-sm-5 col-xs-12 required padding-right">Date First License in Canada or USA (Class G or equivalent):</label>

                                                    <div class="col-md-7 col-sm-7 col-xs-12">
                                                        <input class="form-control" value="" required="" placeholder="" name="datefirstlicense">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <label class="control-label col-md-4 col-sm-4 col-xs-12 required">Years of experience with current class of license:</label>

                                                    <div class="col-md-8 col-sm-8 col-xs-12">
                                                        <input class="form-control datepicker" value="" required="" placeholder="" name="yearsofexp">
                                                    </div>
                                                </div>

                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <label class="control-label col-md-5 col-sm-5 col-xs-12 required padding-right">Years of experience driving in the USA:</label>

                                                    <div class="col-md-7 col-sm-7 col-xs-12">
                                                        <input class="form-control datepicker" value="" required="" placeholder="" name="yearsofusa">
                                                    </div>
                                                </div>

                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <label class="control-label col-md-4 col-sm-4 col-xs-12 required">Check your current status below:</label>

                                                    <div class="col-md-8 col-sm-8 col-xs-12">
                                                        <select class="form-control datepicker" name="status">
                                                            <?php
                                                                $types = array("Owner operator", "Company Driver", "Contractor Operation");
                                                                foreach($types as $Index => $Name){
                                                                    echo '<OPTION VALUE="' . $Name . '">' . $Name . "</OPTION>";
                                                                }
                                                            ?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>



                                    </div>
                            </div>
                            <!-- .driver_info -->

                            <div class="col-md-12 col-sm-12 col-xs-12 subz">
                                <a href="javascript:void(0);" class="btn btn-success btn-lg pull-right nextstep" id="add_driver">
                                    Next <i class="m-icon-swapright m-icon-white"></i>
                                </a>
                            </div>
                            </form>
                            <div class="clearfix"></div>
                        </div>

                        <div id="tab_1_2" class="tab-pane">
                            <DIV ID="excel_accidents" style="width: 100%; height: 400px;  overflow: auto; resize: both;">
                                <HEADER>
                                    <h3>Previous Accidents and Insurance Claims</h3>
                                    <h5>Regardless of Fault for past 6 years</h5>
                                </HEADER>
                                <?php
                                    /*
                                        $EmbeddedMode=true;
                                        include(APP."../src/Template/Excel/index.ctp");
                                        printtable($this, $Manager, "accidents", "ID", false, false, true, true, false, false, false, true);
                                    */
                                    include("subpages/profile/incidents.php");
                                ?>
                            </div>


                            <form action="" id="LOE_profile" >
                            <div>
                             
                             <input type="hidden" name="profile_id" value="" class="newid" />
                             <input  type="hidden" name="sub_doc_id" value="9"/>
                                <div class="form-group row">
                                    <h3 class="col-md-12">Current Employer / Previous Employer 1</h3>
                                    
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
                                            <input type="text" name="supervisor_phone[]" role="phone"
                                                   class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="control-label col-md-3">Supervisor's Email:</label>

                                        <div class="col-md-3">
                                            <input type="text" name="supervisor_email[]" role="email"
                                                   class="form-control email1">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="control-label col-md-3">Employment Start Date:</label>

                                        <div class="col-md-3">
                                            <input type="text" name="employment_start_date[]"
                                                   class="form-control date-picker datepicker">
                                        </div>
                                        <label class="control-label col-md-3">Employment End Date:</label>

                                        <div class="col-md-3">
                                            <input type="text" name="employment_end_date[]"
                                                   class="form-control date-picker datepicker">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="control-label col-md-3">Comments:</label>

                                        <div class="col-md-9">
                                            <TEXTAREA name="emploment_history_confirm_verify_use[]" class="form-control"></TEXTAREA>
                                        </div>


                                        <label style="display: none;" class="control-label col-md-3"></label>

                                        <div class="col-md-3">
                                            <input type="text" name="signature[]" style="display: none;"
                                                   class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="control-label col-md-3">Equipment Operated: </label>

                                        <div class="col-md-9">
                                            <label class="checkbox-inline">
                                                <div class="checkbox">
                                                    <div class="checked" style="margin-left:3px;"><span><input type="checkbox" value="1"
                                                                                      name="equipment_vans[]"></span>
                                                    </div><span>Vans</span>
                                                </div>
                                                </label>
                                            <label class="checkbox-inline">
                                                <div class="checkbox">
                                                    <div class="checked" style="margin-left:3px;"><span><input type="checkbox" value="1"
                                                                                      name="equipment_reefer[]"></span>
                                                    </div>   <span>Reefers</span>
                                                </div>
                                             </label>
                                            <label class="checkbox-inline">
                                                <div class="checkbox">
                                                    <div class="checked" style="margin-left:3px;"><span><input type="checkbox" value="1"
                                                                                      name="equipment_decks[]"></span>
                                                    </div><span>Decks</span>
                                                </div>
                                                </label>
                                            <label class="checkbox-inline">
                                                <div class="checkbox">
                                                    <div class="checked" style="margin-left:3px;"><span><input type="checkbox" value="1"
                                                                                      name="equipment_super[]"></span>
                                                    </div><span>Super B's</span>
                                                </div>
                                                </label>
                                            <label class="checkbox-inline">
                                                <div class="checkbox">
                                                    <div class="checked" style="margin-left:3px;"><span><input type="checkbox" value="1"
                                                                                      name="equipment_straight_truck[]"></span>
                                                    </div>  <span>Straight Truck</span>
                                                </div>
                                              </label>
                                            <label class="checkbox-inline">
                                                <div class="checkbox">
                                                    <div class="checked" style="margin-left:3px;"><span><input type="checkbox" value="1"
                                                                                      name="equipment_others[]"></span>
                                                    </div><span>Others:</span>
                                                </div>
                                                </label>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="control-label col-md-3">Special Training: </label>

                                        <div class="col-md-9">
                                            <label class="checkbox-inline">
                                                <div class="checkbox">
                                                    <div class="checked" style="margin-left:3px;"><span><input type="checkbox" value="1"
                                                                                                               name="cargo_tanker[]"></span>
                                                    </div><span>Tanker</span>
                                                </div>
                                            </label>
                                            <label class="checkbox-inline">
                                                <div class="checkbox">
                                                    <div class="checked" style="margin-left:3px;"><span><input type="checkbox" value="1"
                                                                                                               name="cargo_dangerous[]"></span>
                                                    </div>   <span>Dangerous</span>
                                                </div>
                                            </label>
                                            <label class="checkbox-inline">
                                                <div class="checkbox">
                                                    <div class="checked" style="margin-left:3px;"><span><input type="checkbox" value="1"
                                                                                                               name="cargo_livestock[]"></span>
                                                    </div><span>Livestock</span>
                                                </div>
                                            </label>
                                            <label class="checkbox-inline">
                                                <div class="checkbox">
                                                    <div class="checked" style="margin-left:3px;"><span><input type="checkbox" value="1"
                                                                                                               name="cargo_liquid[]"></span>
                                                    </div><span>Liquid</span>
                                                </div>
                                            </label>

                                        </div>
                                    </div>




                                    <div class="form-group row">
                                        <label class="control-label col-md-3">Driving Experience: </label>

                                        <div class="col-md-9">
                                            <label class="checkbox-inline">
                                                <div class="checkbox">
                                                    <div class="checked" style="margin-left:3px;"><span><input type="checkbox" value="1"
                                                                                      name="driving_experince_local[]"></span>
                                                    </div> <span>Local</span>
                                                </div>
                                               </label>
                                            <label class="checkbox-inline">
                                                <div class="checkbox">
                                                    <div class="checked" style="margin-left:3px;"><span><input type="checkbox" value="1"
                                                                                      name="driving_experince_canada[]"></span>
                                                    </div><span>Canada</span>
                                                </div>
                                                </label>
                                            <label class="checkbox-inline">
                                                <div class="checkbox">
                                                    <div class="checked" style="margin-left:3px;"><span><input type="checkbox" value="1"
                                                                                      name="driving_experince_canada_rocky_mountains[]"></span> <span>Canada: Rocky Mountains</span>
                                                    </div>
                                                </div>
                                              </label>
                                            <label class="checkbox-inline">
                                                <div class="checkbox">
                                                    <div class="checked" style="margin-left:3px;"><span><input type="checkbox" value="1"
                                                                                      name="driving_experince_usa[]"></span><span>USA</span>
                                                    </div>
                                                </div>
                                               </label>
                                        </div>

                                    </div>

                                    <div class="clearfix"></div>
                                </div>
                            </div>

                            <div id="more_div">
                                <hr/>
                                <div class="form-group row">
                                    <h3 class="col-md-12">Previous Employer 2</h3>
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
                                            <input type="text" name="supervisor_phone[]" role="phone"
                                                   class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="control-label col-md-3">Supervisor's Email:</label>

                                        <div class="col-md-3">
                                            <input type="text" name="supervisor_email[]" role="email"
                                                   class="form-control email1">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="control-label col-md-3">Employment Start Date:</label>

                                        <div class="col-md-3">
                                            <input type="text" name="employment_start_date[]"
                                                   class="form-control date-picker datepicker">
                                        </div>
                                        <label class="control-label col-md-3">Employment End Date:</label>

                                        <div class="col-md-3">
                                            <input type="text" name="employment_end_date[]"
                                                   class="form-control date-picker datepicker">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="control-label col-md-3">Comments:</label>

                                        <div class="col-md-9">
                                            <TEXTAREA name="emploment_history_confirm_verify_use[]" class="form-control"></TEXTAREA>
                                        </div>

                                        <label style="display: none;" class="control-label col-md-3"></label>

                                        <div class="col-md-3">
                                            <input type="text" name="signature[]" style="display: none;"
                                                   class="form-control">
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label class="control-label col-md-3">Equipment Operated: </label>

                                        <div class="col-md-9">
                                            <label class="checkbox-inline">
                                                <div class="checkbox">
                                                    <div class="checked" style="margin-left:3px;"><span><input type="checkbox" value="1"
                                                                                                               name="equipment_vans[]"></span>
                                                    </div><span>Vans</span>
                                                </div>
                                            </label>
                                            <label class="checkbox-inline">
                                                <div class="checkbox">
                                                    <div class="checked" style="margin-left:3px;"><span><input type="checkbox" value="1"
                                                                                                               name="equipment_reefer[]"></span>
                                                    </div>   <span>Reefers</span>
                                                </div>
                                            </label>
                                            <label class="checkbox-inline">
                                                <div class="checkbox">
                                                    <div class="checked" style="margin-left:3px;"><span><input type="checkbox" value="1"
                                                                                                               name="equipment_decks[]"></span>
                                                    </div><span>Decks</span>
                                                </div>
                                            </label>
                                            <label class="checkbox-inline">
                                                <div class="checkbox">
                                                    <div class="checked" style="margin-left:3px;"><span><input type="checkbox" value="1"
                                                                                                               name="equipment_super[]"></span>
                                                    </div><span>Super B's</span>
                                                </div>
                                            </label>
                                            <label class="checkbox-inline">
                                                <div class="checkbox">
                                                    <div class="checked" style="margin-left:3px;"><span><input type="checkbox" value="1"
                                                                                                               name="equipment_straight_truck[]"></span>
                                                    </div>  <span>Straight Truck</span>
                                                </div>
                                            </label>
                                            <label class="checkbox-inline">
                                                <div class="checkbox">
                                                    <div class="checked" style="margin-left:3px;"><span><input type="checkbox" value="1"
                                                                                                               name="equipment_others[]"></span>
                                                    </div><span>Others:</span>
                                                </div>
                                            </label>
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label class="control-label col-md-3">Special Training: </label>

                                        <div class="col-md-9">
                                            <label class="checkbox-inline">
                                                <div class="checkbox">
                                                    <div class="checked" style="margin-left:3px;"><span><input type="checkbox" value="1"
                                                                                                               name="cargo_tanker[]"></span>
                                                    </div><span>Tanker</span>
                                                </div>
                                            </label>
                                            <label class="checkbox-inline">
                                                <div class="checkbox">
                                                    <div class="checked" style="margin-left:3px;"><span><input type="checkbox" value="1"
                                                                                                               name="cargo_dangerous[]"></span>
                                                    </div>   <span>Dangerous</span>
                                                </div>
                                            </label>
                                            <label class="checkbox-inline">
                                                <div class="checkbox">
                                                    <div class="checked" style="margin-left:3px;"><span><input type="checkbox" value="1"
                                                                                                               name="cargo_livestock[]"></span>
                                                    </div><span>Livestock</span>
                                                </div>
                                            </label>
                                            <label class="checkbox-inline">
                                                <div class="checkbox">
                                                    <div class="checked" style="margin-left:3px;"><span><input type="checkbox" value="1"
                                                                                                               name="cargo_liquid[]"></span>
                                                    </div><span>Liquid</span>
                                                </div>
                                            </label>

                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label col-md-3">Driving Experience: </label>

                                        <div class="col-md-9">
                                            <label class="checkbox-inline">
                                                <div class="checkbox">
                                                    <div class="checked" style="margin-left:3px;"><span><input type="checkbox" value="1"
                                                                                                               name="driving_experince_local[]"></span>
                                                    </div> <span>Local</span>
                                                </div>
                                            </label>
                                            <label class="checkbox-inline">
                                                <div class="checkbox">
                                                    <div class="checked" style="margin-left:3px;"><span><input type="checkbox" value="1"
                                                                                                               name="driving_experince_canada[]"></span>
                                                    </div><span>Canada</span>
                                                </div>
                                            </label>
                                            <label class="checkbox-inline">
                                                <div class="checkbox">
                                                    <div class="checked" style="margin-left:3px;"><span><input type="checkbox" value="1"
                                                                                                               name="driving_experince_canada_rocky_mountains[]"></span> <span>Canada: Rocky Mountains</span>
                                                    </div>
                                                </div>
                                            </label>
                                            <label class="checkbox-inline">
                                                <div class="checkbox">
                                                    <div class="checked" style="margin-left:3px;"><span><input type="checkbox" value="1"
                                                                                                               name="driving_experince_usa[]"></span><span>USA</span>
                                                    </div>
                                                </div>
                                            </label>
                                        </div>

                                    </div>
                                </div>

                            </div>
                            
                            <div id="add_more_div">
                                <p>&nbsp;</p>
                                <input type="hidden" value="2" id="count_past_emp" name="count_past_emp"/>
                                <a onclick="add_more();" class="btn green no-print" href="javascript:void(0);">Add
                                    More</a>
                            </div>
                            </form>
                            <div class="col-md-12 col-sm-12 col-xs-12 subz">
                                <a href="javascript:void(0);" class="btn btn-success btn-lg pull-right" id="loe_driver" >
                                    Next <i class="m-icon-swapright m-icon-white"></i>
                                </a>
                            </div>

                            <div class="clearfix"></div>
                        </div>


                        <div id="tab_1_3" class="tab-pane">
                        <form action="">
                        <input type="hidden" name="profile_id" value="" class="newid" />
                        
                            <div class="certify_note margin-bottom-10 margin-top-10 clearfix">
                                <div class="">
                                    <h3>Consent</h3>
                                    I certify that I have completed this application and that all the information is
                                    true and accurate. I authorize Intact Insurance, ISB Canada and/or my Insurance
                                    Broker to do a background check(if deemed necessary) in accordance with Provincial
                                    and Federal Laws. I authorize my previous employers listed on this form to release
                                    any information requested by Intact Insurance, ISB Canada or my Insurance Broker and
                                    hold them harmless of all liability from the release of said information.
                                </div>
                            </div>

                            <div class="signature_date clearfix">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="row">
                                        <label class="control-label col-md-12 col-sm-12 col-xs-12">Driver's
                                            Signature</label>

                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <?php
                                                include(APP . "../application/signature.php");
                                                //include('/canvas/adddriver.php');
                                                includeCanvas("adddriver");

                                            ?>

                                        </div>


                                    </div>

                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="row">
                                        <label class="control-label col-md-12 col-sm-12 col-xs-12">Date</label>

                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <input class="form-control datepicker" value="" required="" placeholder=""
                                                   name="driversigndate"/>
                                        </div>


                                    </div>

                                </div>

                            </div>


                            <div class="col-md-12 col-sm-12 col-xs-12 subz">
                                <a href="javascript:void(0);" class="btn btn-success btn-lg pull-right">
                                    Submit
                                </a>
                            </div>
                            </form>
                            <div class="clearfix"></div>
                        </div>
                        <div class="overlay-wrapper">
                            <div class="overlay">
                                <img
                                    src="<?php echo $this->request->webroot; ?>/assets/admin/layout/img/ajax-loading.gif"/>
                            </div>
                        </div>
                    </div>
                    
                </div>
                
                  <div class="form-actions" style="height:75px;">
                    <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-6" align="left">
                       
                        </div>
                        <div class="col-md-6" align="right">
                        </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <?php //include('subpages/profile/adddriver.php');?>
</div>

<script>
    function add_more() {//$("#add_more").click(function () {
        //var references = Number($('#count_past_emp').val()) + Number(1);
        $.ajax({
            url: "<?= $this->request->webroot;?>subpages/documents/addloe.php?references=" + (references+1),
            success: function (res) {
                $("#more_div").append(res);
                references++;
                $('#count_past_emp').attr('value', references);
            },
            error: function (res) {
                //alert(res);
            }
        });
    }
    $('#add_driver').click(function(){
        $('.overlay-wrapper').show();
        var datas = $('#approvedForm input, #approvedForm select').serialize();
        
        $.ajax({
            url:"<?php echo $this->request->webroot;?>profiles/ajax_add",
            data: datas,
            type: 'post',
            success: function(msg)
            {
                $('.overlay-wrapper').hide();
                if(msg != '1')
                {
                    $('.newid').val(msg);
                    alert('Saved Successfully');
                    $('#second a').click();
                }
                else if(msg=='0')
                    alert('Couldnot Save. Please, Try Again!');
                
            }
        });
        //window.setTimeout(function(){  $('#second a').click();}, 1500);
    });
    $('#loe_driver').click(function(){
        $('.overlay-wrapper').show();
           var datas = $('#LOE_profile input, #LOE_profile textarea').serialize();
            var userid = $('.newid').val();
        $.ajax({
            url:"<?php echo $this->request->webroot;?>documents/savedoc/0/0/"+userid+'?document=Letter%20of%20Experience&draft=0',
            type: 'post',
            data:datas,
            success: function(did)
            {
                $.ajax({
                    url:"<?php echo $this->request->webroot;?>documents/saveEmployment/"+did+"/0/"+userid+'?document=Letter%20of%20Experience&draft=0',
                    data:datas,
                    type:'post',
                    success: function(){
                        $('.overlay-wrapper').hide();
                        $('#third a').click();
                    }
                });
                
            }
        });
        //window.setTimeout(function(){  $('#third a').click();$('.overlay-wrapper').hide();}, 1500);"
    } )
    
    $(".deleteloe").live("click", function () {
        $(this).parent().parent().remove();
        var c = $('#count_past_emp').val();
        var counter = parseInt(c) - 1;
        $('#count_past_emp').attr('value', counter);
        references = references - 1;
    });


</script>

