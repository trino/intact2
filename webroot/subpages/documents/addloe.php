<div id="toremove">
    <div class="clearfix"></div>
    <hr />

                         <div class="form-group row">
                            <h3 class="col-md-12">Previous Employer <?php echo $_GET['references'];?></h3>
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
                                    <label class="control-label col-md-3">Comments:</label>

                                    <div class="col-md-9">
                                        <TEXTAREA name="emploment_history_confirm_verify_use[]" class="form-control"></TEXTAREA>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="control-label col-md-3">Equipment Operated: </label>
                                    <div class="col-md-9">
                                        <label><input type="checkbox" value="1" name="equipment_vans[]"> Vans</label>
                                        <label><input type="checkbox" value="1" name="equipment_reefer[]"> Reefers</label>
                                        <label><input type="checkbox" value="1" name="equipment_decks[]"> Decks</label>
                                        <label><input type="checkbox" value="1" name="equipment_super[]"> Super B's</label>
                                        <label><input type="checkbox" value="1" name="equipment_straight_truck[]"> Straight Truck</label>                                                                                                  <label><input type="checkbox" value="1" name="equipment_others[]"> Others:</label>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="control-label col-md-3">Special Training: </label>
                                    <div class="col-md-9">
                                        <label><input type="checkbox" value="1" name="cargo_tanker[]"> Tanker</label>
                                        <label><input type="checkbox" value="1" name="cargo_dangerous[]"> Dangerous</label>
                                        <label><input type="checkbox" value="1" name="cargo_livestock[]"> Livestock</label>
                                        <label><input type="checkbox" value="1" name="cargo_liquid[]"> Liquid</label>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="control-label col-md-3">Driving Experience: </label>
                                    <div class="col-md-9">
                                        <label><input type="checkbox" value="1" name="driving_experince_local[]"> Local</label>
                                        <label><input type="checkbox" value="1" name="driving_experince_canada[]"> Canada</label>
                                        <label><input type="checkbox" value="1" name="driving_experince_canada_rocky_mountains[]"> Canada: Rocky Mountains</label>
                                        <label><input type="checkbox" value="1" name="driving_experince_usa[]"> USA</label>
                                    </div>
                                </div>
                </div>



        <div class="delete">
            <a href="javascript:void(0);" class="btn red no-print deleteloe" >Delete</a>
        </div>

  </div>

