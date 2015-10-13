<!--[if (gt IE 9)|!(IE)]><!--> <html class=""> <!--<![endif]-->
<!--[if IE 8]>
<html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]>
<html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<?php 
    include('../config/paths.php');?>
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
    <script>
    $(function(){
    $('.nextstep').click(function(){
        
        $('.overlay-wrapper').show();
        window.setTimeout(function(){ window.location='<?php echo WEB_ROOT;?>application/step2.php' }, 1500);
    });
    });
    </script>
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
   
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body>



<div style="width:70%;" class="content clearfix"> 



    <div class="">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="portlet light ">
                <div class="header_approved row">
                <div class="col-md-8 col-sm-8 col-xs-12">
                <h2>Approved Driver History Form</h2>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12 logo">
                <div class="main-logo">
                <img src="<?php echo WEB_ROOT;?>img/logo.png" />
                </div>
                <div class="clearfix"></div>
                <span><?= "sitename goes here"; ?></span>
                </div>
                </div><!-- .header_approved  -->
                
                <hr />
                
                <form id="approvedForm" class="step1-form" method="post" action="">
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
                
                
                              
                    <div class="col-md-12 col-sm-12 col-xs-12 subz">
              <a href="javascript:void(0);" class="btn btn-success btn-lg pull-right nextstep" >
                    Next <i class="m-icon-swapright m-icon-white"></i>
              </a>
        </div>
                
                </div>
                
                
                </div>
                <div class="clearfix"></div>
        </div>  
        </div>
    </div>
    

</div>

<div class="overlay-wrapper">
<div class="overlay">
<img src="/veritas3-0/assets/admin/layout/img/ajax-loading.gif" />
</div>
</div>


</body>
</html>  
  
    