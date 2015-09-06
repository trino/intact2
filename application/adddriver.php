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
    <script src="../webroot/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
   
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body>

<div style="width:70%;" class="content clearfix"> 

<div class="col-md-12">
<div class="header_approved row">
<div class="col-md-6">
<h2>Approved Driver History Form</h2>
</div>
<div class="col-md-6 logo">
<div class="main-logo">
<img src="../img/intact_logo.jpg">
</div>
<div class="clearfix"></div>
<span>Intact Insurance Company</span>
</div>
</div><!-- .header_approved  -->

<hr />

<form id="approvedForm" class="approved-form" method="post" action="">
<div class="row">

<div class="driver_info col-md-12">
<h4>DRIVER INFORMATION</h4>
<div class="row">
<div class="col-md-12 no-padding margin-bottom-10">
<div class="row">
<div class="col-md-6">
<label class="control-label col-md-5">Full Name:</label>
<div class="col-md-7">
<input class="form-control" value="" required="" placeholder="" name="fname">
</div>
</div>
<div class="col-md-6">
<label class="control-label col-md-4">Gender</label>
<div class="col-md-8">
<select class="form-control required" name="title" required>
     <option value="Male">Male</option>
     <option value="Female">Female</option>
 </select>
</div>
</div>
</div>
</div>

<div class="col-md-12 no-padding margin-bottom-10">
<div class="row">
<div class="col-md-6">
<label class="control-label col-md-5">License #:</label>
<div class="col-md-7">
<input class="form-control" value="" required="" placeholder="" name="license">
</div>
</div>
<div class="col-md-6">
<label class="control-label col-md-4">Date of Birth:</label>
<div class="col-md-8">
<input class="form-control" value="" required="" placeholder="" name="dob">
</div>
</div>
</div>

</div>

<div class="col-md-12 no-padding margin-bottom-10">
<div class="row">
<div class="col-md-6">
<label class="control-label col-md-5 required padding-right">Driver License class:</label>
<div class="col-md-7">
<input class="form-control" value="" required="" placeholder="" name="dlc">
</div>
</div>
<div class="col-md-6">
<label class="control-label col-md-4 required">Date of receipt for this class:</label>
<div class="col-md-8">
<input class="form-control" value="" required="" placeholder="" name="drc">
</div>
</div>
</div>
</div>
</div>
</div><!-- .driver_info -->

<div class="driving_exp col-md-12">
<h4>DRIVING EXPERIENCE</h4>
<div class="row">
<div class="col-md-12 no-padding margin-bottom-10">
<label class="control-label col-md-6 required">Years experience under current class of license</label>
<div class="col-md-6">
<input class="form-control" value="" required="" placeholder="" name="ycl">
</div>
</div>
<div class="col-md-12 no-padding margin-bottom-10">
<label class="control-label col-md-6 required">Years of US commercial driving experience</label>
<div class="col-md-6">
<input class="form-control" value="" required="" placeholder="" name="ycde">
</div>
</div>

<div class="col-md-12 no-padding margin-bottom-10">
<div class="row">
<div class="col-md-12">
<label class="control-label col-md-12 required">Check your current status below</label>
<div class="col-md-6 checkbox-list">
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


<div class="trucking_company col-md-12">
<h4>TRUCKING COMPANY EMPLOYMENT INFORMATION (Minimum 3 years history must be provided)</h4>
<div class="row">
<div class="col-md-12">
<h5>Current Employer</h5>
</div>

<div class="col-md-12 no-padding margin-bottom-10">
<div class="row">
<div class="col-md-6">
<label class="control-label col-md-5">Company Name:</label>
<div class="col-md-7">
<input class="form-control" value="" required="" placeholder="" name="compname">
</div>
</div>
<div class="col-md-6">
<label class="control-label col-md-4 required">Drugs:</label>
<div class="col-md-8">
<input class="form-control" value="" required="" placeholder="" name="drugs">
</div>
</div>
</div>

</div>

<div class="col-md-12 no-padding margin-bottom-10">
<div class="row">
<div class="col-md-6">
<label class="control-label col-md-5">Address:</label>
<div class="col-md-7">
<input class="form-control" value="" required="" placeholder="" name="address">
</div>
</div>
<div class="col-md-6">
<label class="control-label col-md-4 required">Email:</label>
<div class="col-md-8">
<input class="form-control" value="" required="" placeholder="" name="email">
</div>
</div>
</div>

</div>

<div class="col-md-12 no-padding margin-bottom-10">
<div class="row">
<div class="col-md-6">
<label class="control-label col-md-5">Supervisior's Name:</label>
<div class="col-md-7">
<input class="form-control" value="" required="" placeholder="" name="supname">
</div>
</div>
<div class="col-md-6">
<label class="control-label col-md-4">Phone#:</label>
<div class="col-md-8">
<input class="form-control" value="" required="" placeholder="" name="phone">
</div>
</div>
</div>

</div>

<div class="col-md-12 no-padding margin-bottom-10">
<div class="row">
<div class="col-md-6">
<label class="control-label col-md-12">Employment Start Date:</label>
<div class="col-md-12">
<input class="form-control" value="" required="" placeholder="" name="esd">
</div>
</div>
<div class="col-md-6">
<label class="control-label col-md-12">Employment End Date:</label>
<div class="col-md-12">
<input class="form-control" value="" required="" placeholder="" name="eed">
</div>
</div>
</div>

</div>

<div class="previous_employer1">
<div class="col-md-12">
<h5>Previous Employer 1</h5>
</div>
<div class="col-md-12 no-padding margin-bottom-10">
<label class="control-label col-md-2">Company Name:</label>
<div class="col-md-10">
<input class="form-control" value="" required="" placeholder="" name="compname">
</div>
</div>
<div class="col-md-12 no-padding margin-bottom-10">
<label class="control-label col-md-2">Address:</label>
<div class="col-md-10">
<input class="form-control" value="" required="" placeholder="" name="address">
</div>
</div>
<div class="col-md-12 no-padding margin-bottom-10">
<div class="row">
<div class="col-md-6">
<label class="control-label col-md-5">Supervisior's Name:</label>
<div class="col-md-7">
<input class="form-control" value="" required="" placeholder="" name="supname">
</div>
</div>
<div class="col-md-6">
<label class="control-label col-md-4">Phone#:</label>
<div class="col-md-8">
<input class="form-control" value="" required="" placeholder="" name="phone">
</div>
</div>
</div>

</div>

<div class="col-md-12 no-padding margin-bottom-10">
<div class="row">
<div class="col-md-6">
<label class="control-label col-md-12">Employment Start Date:</label>
<div class="col-md-12">
<input class="form-control" value="" required="" placeholder="" name="esd">
</div>
</div>
<div class="col-md-6">
<label class="control-label col-md-12">Employment End Date:</label>
<div class="col-md-12">
<input class="form-control" value="" required="" placeholder="" name="eed">
</div>
</div>
</div>

</div>

</div>


<div class="previous_employer2">
<div class="col-md-12">
<h5>Previous Employer 2</h5>
</div>
<div class="col-md-12 no-padding margin-bottom-10">
<label class="control-label col-md-2">Company Name:</label>
<div class="col-md-10">
<input class="form-control" value="" required="" placeholder="" name="compname">
</div>
</div>
<div class="col-md-12 no-padding margin-bottom-10">
<label class="control-label col-md-2">Address:</label>
<div class="col-md-10">
<input class="form-control" value="" required="" placeholder="" name="address">
</div>
</div>
<div class="col-md-12 no-padding margin-bottom-10">
<div class="row">
<div class="col-md-6">
<label class="control-label col-md-5">Supervisior's Name:</label>
<div class="col-md-7">
<input class="form-control" value="" required="" placeholder="" name="supname">
</div>
</div>
<div class="col-md-6">
<label class="control-label col-md-4">Phone#:</label>
<div class="col-md-8">
<input class="form-control" value="" required="" placeholder="" name="phone">
</div>
</div>
</div>

</div>

<div class="col-md-12 no-padding margin-bottom-10">
<div class="row">
<div class="col-md-6">
<label class="control-label col-md-12">Employment Start Date:</label>
<div class="col-md-12">
<input class="form-control" value="" required="" placeholder="" name="esd">
</div>
</div>
<div class="col-md-6">
<label class="control-label col-md-12">Employment End Date:</label>
<div class="col-md-12">
<input class="form-control" value="" required="" placeholder="" name="eed">
</div>
</div>
</div>

</div>

<div class="row">
<div class="col-md-12">
<label class="control-label col-md-12 required">ANY DRIVER TRAINING OR SPECIAL COURSES(IE: HAZARDOUS GOODS TRAINING)</label>
<div class="col-md-12">
<textarea name="dtsc" class="form-control"></textarea>
</div>
</div>
</div>
</div>


</div>
</div><!-- .trucking_comapny -->

<div class="claims_history col-md-12 margin-bottom-10">
<h4>CLAIMS HISTORY -List all accidents you were involved in for last four years regardless of fault  </h4>
<div class="row">
<div class="col-md-12">
<div class="row">
<div class="col-md-2">
<div class="row">
<label class="control-label col-md-12 required">Date of Loss</label>
</div>
</div>

<div class="col-md-5">
<div class="row">
<label class="control-label col-md-12 required">Description and locaton of accident </label>
</div>
</div>

<div class="col-md-2">
<div class="row">
<label class="control-label col-md-12 required">% of fault</label>
</div>
</div>

<div class="col-md-3">
<div class="row">
<label class="control-label col-md-12 required">Total amount paid</label>
</div>
</div>


<div class="col-md-2">
<div class="row">
<div class="col-md-12">
<input class="form-control" value="" required="" placeholder="" name="dol">
</div>
</div>
</div>

<div class="col-md-5">
<div class="row">
<div class="col-md-12">
<input class="form-control" value="" required="" placeholder="" name="dla">
</div>
</div>
</div>

<div class="col-md-2">
<div class="row">
<div class="col-md-12">
<input class="form-control" value="" required="" placeholder="" name="pof">
</div>
</div>
</div>

<div class="col-md-3">
<div class="row">
<div class="col-md-12">
<input class="form-control" value="" required="" placeholder="" name="tap">
</div>
</div>
</div>

<div class="col-md-2">
<div class="row">
<div class="col-md-12">
<input class="form-control" value="" required="" placeholder="" name="dol">
</div>
</div>
</div>

<div class="col-md-5">
<div class="row">
<div class="col-md-12">
<input class="form-control" value="" required="" placeholder="" name="dla">
</div>
</div>
</div>

<div class="col-md-2">
<div class="row">
<div class="col-md-12">
<input class="form-control" value="" required="" placeholder="" name="pof">
</div>
</div>
</div>

<div class="col-md-3">
<div class="row">
<div class="col-md-12">
<input class="form-control" value="" required="" placeholder="" name="tap">
</div>
</div>
</div>

<div class="col-md-2">
<div class="row">
<div class="col-md-12">
<input class="form-control" value="" required="" placeholder="" name="dol">
</div>
</div>
</div>

<div class="col-md-5">
<div class="row">
<div class="col-md-12">
<input class="form-control" value="" required="" placeholder="" name="dla">
</div>
</div>
</div>

<div class="col-md-2">
<div class="row">
<div class="col-md-12">
<input class="form-control" value="" required="" placeholder="" name="pof">
</div>
</div>
</div>

<div class="col-md-3">
<div class="row">
<div class="col-md-12">
<input class="form-control" value="" required="" placeholder="" name="tap">
</div>
</div>
</div>

<div class="col-md-2">
<div class="row">
<div class="col-md-12">
<input class="form-control" value="" required="" placeholder="" name="dol">
</div>
</div>
</div>

<div class="col-md-5">
<div class="row">
<div class="col-md-12">
<input class="form-control" value="" required="" placeholder="" name="dla">
</div>
</div>
</div>

<div class="col-md-2">
<div class="row">
<div class="col-md-12">
<input class="form-control" value="" required="" placeholder="" name="pof">
</div>
</div>
</div>

<div class="col-md-3">
<div class="row">
<div class="col-md-12">
<input class="form-control" value="" required="" placeholder="" name="tap">
</div>
</div>
</div>

</div>
</div>
</div>
</div><!-- .claims_history -->


<div class="comments margin-bottom-10 clearfix">
<div class="col-md-12">
<textarea name="comments" class="form-control required" placeholder="COMMENTS"></textarea>
</div>
</div>

<div class="certify_note margin-bottom-10 clearfix">
<div class="col-md-12">
I certify that I have completed this application and that all the information is true and accurate.  I authorize Intact Insurance, ISB Canada and/or my Insurance Broker to do a background check(if deemed necessary) in accordance with Provincial and Federal Laws.  I authorize my previous employers listed on this form to release any information requested by Intact Insurance, ISB Canada or my Insurance Broker and hold them harmless of all liability from the release of said information.  
</div>
</div>

<div class="signature_date clearfix">
<div class="col-md-6">
<div class="row">
<div class="col-md-12">
<input class="form-control" value="" required="" placeholder="" name="driversign">
</div>
<label class="control-label col-md-12">Driver's Signature</label>

</div>

</div>
<div class="col-md-6">
<div class="row">
<div class="col-md-12">
<input class="form-control" value="" required="" placeholder="" name="driversigndate">
</div>
<label class="control-label col-md-12">Date</label>

</div>

</div>

</div>



</div>


</div>


</form>




</div>




</body>
</html>