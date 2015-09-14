<!-- BEGIN PAGE HEAD -->
	<div class="page-head">
		<div class="container">
			<!-- BEGIN PAGE TITLE -->
			<div class="page-title">
				<h1>Dashboard <small>statistics & reports</small></h1>
			</div>
			
		</div>
	</div>
	<!-- END PAGE HEAD -->
	<!-- BEGIN PAGE CONTENT -->
	<div class="page-content">
    
    
            <div class="container">
        			<!-- BEGIN PAGE BREADCRUMB -->
        			<ul class="page-breadcrumb breadcrumb hide">
        				<li>
        					<a href="#">Home</a><i class="fa fa-circle"></i>
        				</li>
        				<li class="active">
        					 Dashboard
        				</li>
        			</ul>
                    
                    <div class="row">
        				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 margin-bottom-10">
        					<a class="dashboard-stat dashboard-stat-light blue-madison" href="<?php echo $this->request->webroot;?>profiles/add">
        					<div class="visual-bg">
        						<i class="fa fa-user fa-icon-medium"></i>
        					</div>
                            <div class="visual">
        						<i class="fa fa-user fa-icon-medium"></i>
        					</div>
                            <div class="visual-hover">
                            <i class="fa fa-user-plus fa-icon-medium"></i>
                            </div>

        					<div class="details">
        						<div class="number">
        							 Add A Driver
        						</div>
        						<!--<div class="desc">
        							 Add
        						</div>-->
        					</div>
        					</a>
        				</div>
        				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 margin-bottom-10">
        					<a class="dashboard-stat dashboard-stat-light red-intense" href="<?php echo $this->request->webroot;?>profiles/send_application">
        					<div class="visual-bg">
        						<i class="fa fa-envelope-o"></i>
        					</div>
                            <div class="visual">
        						<i class="fa fa-envelope-o"></i>
        					</div>
                            <div class="visual-hover">
                            <i class="fa fa-inbox"></i>
                            </div>
        					<div class="details">
        						<div class="number">
        							 Send Application
        						</div>
        						<!--<div class="desc">
        							 Send
        						</div>-->
        					</div>
        					</a>
        				</div>
        				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 margin-bottom-10">
        					<a class="dashboard-stat dashboard-stat-light green-haze" href="<?php echo $this->request->webroot;?>profiles/add_company">
        					<div class="visual-bg">
        						<i class="fa fa-suitcase"></i>
        					</div>
                            <div class="visual">
        						<i class="fa fa-suitcase"></i>
        					</div>
                            <div class="visual-hover">
                            <i class="fa fa-briefcase"></i>
                            </div>
        					<div class="details">
        						<div class="number">
									New Business Application
        						</div>
        						<!--<div class="desc">
        							 Add
        						</div>-->
        					</div>
        					</a>
        				</div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 margin-bottom-10">
        					<a class="dashboard-stat dashboard-stat-light yellow" href="<?php echo $this->request->webroot;?>orders/buy_products">
        					<div class="visual-bg">
        						<i class="fa fa-tags"></i>
        					</div>
                            <div class="visual">
        						<i class="fa fa-tags"></i>
        					</div>
                            <div class="visual-hover">
                            <i class="fa fa-tag"></i>
                            </div>
        					<div class="details">
        						<div class="number">
        							 Buy Product
        						</div>
        						<!--<div class="desc">
        							 Buy
        						</div>-->
        					</div>
        					</a>
        				</div>
        			</div>
        			<!-- END PAGE BREADCRUMB -->
        			<!-- BEGIN PAGE CONTENT INNER -->
        			<div class="row margin-top-10">
        				<div class="col-md-12 col-sm-12">
        					<!-- BEGIN PORTLET-->
        					<div class="portlet light ">
        						<div class="portlet-title">
        							<div class="caption caption-md">
        								<i class="icon-bar-chart theme-font hide"></i>
        								<span class="caption-subject theme-font bold uppercase">My pending orders</span>
        								
        							</div>
        							<!--<div class="actions">
        								<div class="btn-group btn-group-devided" data-toggle="buttons">
        									<label class="btn btn-transparent grey-salsa btn-circle btn-sm active">
        									<input type="radio" name="options" class="toggle" id="option1">Date</label>
        									<label class="btn btn-transparent grey-salsa btn-circle btn-sm">
        									<input type="radio" name="options" class="toggle" id="option2">Week</label>
        									<label class="btn btn-transparent grey-salsa btn-circle btn-sm">
        									<input type="radio" name="options" class="toggle" id="option2">Month</label>
        								</div>
        							</div>-->
        						</div>
        						<div class="portlet-body">
        							<?php include('subpages/pending_orders.php')?>
        						</div>
        					</div>
        					<!-- END PORTLET-->
        				</div>
        				
        			</div>
        			
        			
        			<!-- END PAGE CONTENT INNER -->
        		</div>
    
    
		
	</div>

