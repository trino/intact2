<!-- BEGIN PAGE HEAD -->
	<div class="page-head">
		<div class="container">
			<!-- BEGIN PAGE TITLE -->
			<div class="page-title">
				<h1>Send Application</h1>
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
                <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                <h2>Send Application Process</h2>
                </div>
                </div>
                <form id="sendappForm" class="sendapplication-form" method="post" action="">
                <div class="row">
                
                <div class="send-application-form col-md-8 col-sm-12 col-xs-12">
                <h4 class=" margin-bottom-10">Please input the following information to send application</h4>
                <div class="row" style="">
                <div class="col-md-12 col-sm-12 col-xs-12 no-padding margin-bottom-10">
                <div class="row" style="margin-top: 10px;">
                <div class="col-md-12 col-sm-12 col-xs-12">
                <label class="control-label col-md-4">Insurer
                </label>
                <div class="col-md-8">
                    <img src="<?php echo $this->request->webroot;?>img/logo.png" class="img-responsive" style="width: 120px;padding-right:20px;" />
                </div>
                </div>
                </div>
                </div>
                
                <div class="col-md-12 col-sm-12 col-xs-12 no-padding margin-bottom-10">
                <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                <label class="control-label col-md-4">Select Company
                </label>
                <div class="col-md-8">
                <select class="form-control required" name="title" required>
                     <option value="abc">ABC Trucking</option>
                     <option value="xyz">XYZ Trucking</option>
                 </select>
                </div>
                </div>
                </div>
                </div>
                
                <div class="col-md-12 col-sm-12 col-xs-12 no-padding margin-bottom-10">
                <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                <label class="control-label col-md-4">Select Driver
                </label>
                <div class="col-md-8">
                <select class="form-control required" name="title" required>
                     <option value="abc">Enoc</option>
                     <option value="xyz">Rob</option>
                 </select>
                </div>
                </div>
                </div>
                </div>
                
                
                <div class="col-md-12 col-sm-12 col-xs-12 no-padding margin-bottom-10">
                <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                <label class="control-label col-md-4">Policy Number</label>
                <div class="col-md-8">
                <input class="form-control" value="" required="" placeholder="" name="policy">
                </div>
                </div>
                </div>
                
                </div>
                
                
                <div class="col-md-12 col-sm-12 col-xs-12 no-padding margin-bottom-10">
                <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                <label class="control-label col-md-4">To</label>
                <div class="col-md-8">
                <input class="form-control" value="" required="" placeholder="" name="to">
                </div>
                </div>
                </div>
                
                </div>
                
                <div class="col-md-12 col-sm-12 col-xs-12 no-padding margin-bottom-10">
                <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                <label class="control-label col-md-4">Email</label>
                <div class="col-md-8">
                <input class="form-control" value="" required="" placeholder="" name="email">
                </div>
                </div>
                </div>
                
                </div>
                
                
                <div class="col-md-12 col-sm-12 col-xs-12 no-padding margin-bottom-10">
                <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                <div class=" col-md-6"></div>
                <div class="col-md-6 app_send_btn">
                <!--a href="" class="btn btn-primary">Send Application</a><br /><br /-->
                <a href="<?php echo $this->request->webroot;?>profiles/sendApplicationEmail" class="btn btn-primary">Send Pre Application Email</a><br /><br />
                <a href="<?php echo $this->request->webroot;?>profiles/postOrder" class="btn btn-primary">Send Post Application Email</a>
                </div>
                </div>
                </div>
                
                </div>
                
                
                </div>
                
                </div>
                </div>
                
                
                </div>
                </div>
                </div>
                </div>
                </div>
                
