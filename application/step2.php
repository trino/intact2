<!--[if (gt IE 9)|!(IE)]><!--> <html class=""> <!--<![endif]-->
<!--[if IE 8]>
<html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]>
<html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    <meta charset="utf-8"/>
    <title></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta content="" name="description"/>
    <meta content="" name="author"/>

    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet"
          type="text/css"/>
          <link href="../webroot/assets/global/css/plugins.css" rel="stylesheet" type="text/css"/>
    <link href="../webroot/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet"
          type="text/css"/>
    <link href="../webroot/css/new-custom.css" rel="stylesheet"type="text/css"/>
    <script src="../webroot/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
    <script src="../webroot/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body>

<?php
    include('../config/paths.php');
    include('api.php');
    ?>

<div style="width:70%;" class="content clearfix">


<form id="form_employment">

      <div class="tab-content">
<div id="subtab_2_2" class="tab-pane active">
    <form id="step2-form">


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
                                <label class="radio-inline"><div class="radio"><span><input type="radio" value="1" name="claims_with_employer_35881[]"></span></div><span>Yes</span></label>
                                <label class="radio-inline"><div class="radio"><span><input type="radio" value="0" name="claims_with_employer_35881[]"></span></div><span>No</span>  </div></label>
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
              <a href="javascript:void(0);" class="btn btn-success btn-lg pull-right" >
                    Next <i class="m-icon-swapright m-icon-white"></i>
              </a>
        </div>


</div></form></div></div>
</form>



</div>


</body>
</html>
