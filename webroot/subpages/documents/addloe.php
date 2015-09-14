<div id="toremove">
    <div class="clearfix"></div>
    <hr />

                         <div class="form-group row">
                            <h3 class="col-md-12">Reference <?php echo $_GET['references'];?></h3>
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
                                <input type="text" name="employment_start_date[]" class="form-control date-picker datepicker">
                                </div>
                                <label class="control-label col-md-3">Employment End Date:</label>
                                <div class="col-md-3">
                                <input type="text" name="employment_end_date[]" class="form-control date-picker datepicker">
                                </div>
                                </div>
                                <div class="form-group row">
                                <label class="control-label col-md-3">Claims with this Employer:</label>
                               <div class="col-md-3">
                               <input type="radio" value="1" name="claims_with_employer_35881[]">Yes
                                <input type="radio" value="0" name="claims_with_employer_35881[]">No </div>
                                 <label class="control-label col-md-3">Date Claims Occurred:</label>
                                 <div class="col-md-3">
                                 <input type="text" name="claims_recovery_date[]" class="form-control date-picker datepicker">
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
                                <input type="text" name="signature_datetime[]" class="form-control date-picker datepicker">
                                </div>
                                </div>
                                <div class="form-group row">
                                            <label class="control-label col-md-3">Equipment Operated: </label>
                                            <div class="col-md-9">
                                               <input type="checkbox" value="1" name="equipment_vans[]"> Vans
                                               <input type="checkbox" value="1" name="equipment_reefer[]"> Reefers
                                               <input type="checkbox" value="1" name="equipment_decks[]"> Decks
                                               <input type="checkbox" value="1" name="equipment_super[]"> Super B's
                                               <input type="checkbox" value="1" name="equipment_straight_truck[]"> Straight Truck
                                               <input type="checkbox" value="1" name="equipment_others[]"> Others:
                                </div>
                                </div>
                                <div class="form-group row">
                                <label class="control-label col-md-3">Driving Experience: </label>
                                <div class="col-md-9">
                                   <input type="checkbox" value="1" name="driving_experince_local[]"> Local
                                   <input type="checkbox" value="1" name="driving_experince_canada[]"> Canada
                                   <input type="checkbox" value="1" name="driving_experince_canada_rocky_mountains[]"> Canada: Rocky Mountains
                                   <input type="checkbox" value="1" name="driving_experince_usa[]"> USA
                                </div>
                
                                </div>
                </div>
                
                

        <div class="delete">
            <a href="javascript:void(0);" class="btn red no-print deleteloe" >Delete</a>
        </div>

  </div>

