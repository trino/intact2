<!-- BEGIN PAGE HEAD -->
	<div class="page-head">
		<div class="container">
			<!-- BEGIN PAGE TITLE -->
			<div class="page-title">
				<h1>Send <small>Application</small></h1>
			</div>
			 
		</div>
	</div>
	<!-- END PAGE HEAD -->
	<!-- BEGIN PAGE CONTENT -->
	<div class="page-content">
    
    
            <div class="container">
            <div class="row">


                <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="send-application portlet light">
                
                <form id="sendappForm" class="sendapplication-form" method="post" action="" role="form">
                <div class="">
                <div class="form-body clearfix">
                
                <div class="send-application-form col-md-6 col-sm-12 col-xs-12 portlet-body form"  style=" box-shadow: 0 0 3px #dfdfdf; padding: 20px 20px !important;">
                <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 no-padding margin-bottom-10">
                <div class="row">
                <div class="form-group form-md-line-input col-md-12 col-sm-12 col-xs-12">
                <label class="control-label col-md-2"><br>Insurer
                </label>
                <div class="col-md-8">
                    <img src="<?php echo $this->request->webroot;?>img/logo.png" class="img-responsive" style="width: 120px;padding-right:20px;" />
                </div>
                </div>
                </div>
                </div>


                    <div class="col-md-12 col-sm-12 col-xs-12 no-padding margin-bottom-10">
                        <div class="row">
                            <div class="form-group form-md-line-input col-md-12 col-sm-12 col-xs-12">
                                <label class="control-label col-md-12 col-sm-12 col-xs-12">Application Type
                                </label>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <select class="form-control required"  id="form_control_1" name="type" required>
                                        <option value="pre">Driver Application</option>
                                        <option value="post">Business Application</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="col-md-12 col-sm-12 col-xs-12 no-padding margin-bottom-10">
                <div class="row">
                <div class="form-group form-md-line-input col-md-12 col-sm-12 col-xs-12">
                <label class="control-label col-md-12 col-sm-12 col-xs-12">Select Company
                </label>
                <div class="col-md-12 col-sm-12 col-xs-12">
                <select class="form-control required"  id="form_control_1" name="company" required>
                     <option value="ABC Trucking">ABC Trucking</option>
                     <option value="XYZ Trucking">XYZ Trucking</option>
                 </select>
                </div>
                </div>
                </div>
                </div>
                
                <div class="col-md-12 col-sm-12 col-xs-12 no-padding margin-bottom-10">
                <div class="row">
                <div class="form-group form-md-line-input col-md-12 col-sm-12 col-xs-12">
                <label class="control-label col-md-12 col-sm-12 col-xs-12">Select Driver
                </label>
                <div class="col-md-12 col-sm-12 col-xs-12">
                <select class="form-control required" id="form_control_1" name="driver" required>
                     <option value="tom Smith">Tom Smith</option>
                     <option value="John Smith">John Smith</option>
                 </select>
                </div>
                </div>
                </div>
                </div>
                
                
                <div class="col-md-12 col-sm-12 col-xs-12 no-padding margin-bottom-10">
                <div class="row">
                <div class="form-group form-md-line-input col-md-12 col-sm-12 col-xs-12">
                <label class="control-label col-md-12 col-sm-12 col-xs-12">Policy Number</label>
                <div class="col-md-12 col-sm-12 col-xs-12">
                <input class="form-control" value="" id="form_control_1" required="" placeholder="" name="policy">
                </div>
                </div>
                </div>
                
                </div>
                
                
                <div class="col-md-12 col-sm-12 col-xs-12 no-padding margin-bottom-10">
                <div class="row">
                <div class="form-group form-md-line-input col-md-12 col-sm-12 col-xs-12">
               
                	<label for="form_control_1" class="col-md-12 col-sm-12 col-xs-12">To</label>
									 <div class="col-md-12 col-sm-12 col-xs-12">	
                                     <input class="form-control"  id="form_control_1" value="" required="" placeholder="Email" name="to">
									
									</div>
                                    </div>
                
                </div>
                
                </div>
                
                <!--div class="col-md-12 col-sm-12 col-xs-12 no-padding margin-bottom-10">
                <div class="row">
                
                
                <div class="form-group form-md-line-input col-md-12 col-sm-12 col-xs-12">
               
                	<label for="form_control_1" class="col-md-12 col-sm-12 col-xs-12">Email</label>
									 <div class="col-md-12 col-sm-12 col-xs-12">	
                                     <input class="form-control" type="text"  id="form_control_1">
									
									</div>
                                    </div>
                
                
                </div>
                
                </div-->
                
                
                <div class="col-md-12 col-sm-12 col-xs-12 no-padding margin-bottom-10">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class=" col-md-6 col-sm-6 col-xs-12"></div>
                            <div class="col-md-6 col-sm-6 col-xs-12 app_send_btn">
                            <input type="submit" class="btn btn-primary" value="Send Application" name="submit" />
                            <!--a href="<?php echo $this->request->webroot;?>profiles/sendApplicationEmail" class="btn btn-primary">Send Pre Application Email</a><br /><br />
                            <a href="<?php echo $this->request->webroot;?>profiles/postOrder" class="btn btn-primary">Send Post Application Email</a-->
                            </div>
                        </div>
                    </div>
                
                </div>
                </form>
                
                </div>
                
                </div>
                </div>
                
                </div>
                </div>
                </div>
                </div>
                </div>
                </div>
                
