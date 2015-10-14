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
        					 <?= $strings["dashboard_dashboard"]; ?>
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
        							<?php //include('subpages/pending_orders.php')?>






























									<div class="portlet-body">
										<div class="form-body">
											<div class="table-scrollable ">
												<table class="table table-condensed table-striped table-bordered table-hover dataTable no-footer">
													<thead>
													<tr class="sorting">
														<th><a href="<?php echo $this->request->webroot; ?>orders/orderslist?sort=id&amp;direction=asc" class="desc">Order</a>
														</th>
														<th>
															<a href="<?php echo $this->request->webroot; ?>orders/orderslist?sort=orders.order_type&amp;direction=asc">Company
																Name</a></th>
														<th><a href="<?php echo $this->request->webroot; ?>orders/orderslist?sort=user_id&amp;direction=asc">Driver
																Name</a></th>
														<th>
															<a href="<?php echo $this->request->webroot; ?>orders/orderslist?sort=complete&amp;direction=asc">Broker</a>
														</th>
														<th>
															<a href="<?php echo $this->request->webroot; ?>orders/orderslist?sort=client_id&amp;direction=asc">Ordered</a>
														</th>
														<th>Completed</th>
														<th>
															<a href="<?php echo $this->request->webroot; ?>orders/orderslist?sort=created&amp;direction=asc">Created</a>
														</th>
														<th class="actions">Actions</th>
														<!--th><a href="<?php echo $this->request->webroot; ?>orders/orderslist?sort=bright_planet_html_binary&amp;direction=asc">Status</a></th-->
														<th><a href="<?php echo $this->request->webroot; ?>orders/orderslist?sort=uploaded_for&amp;direction=asc">Results </a>
														</th>
													</tr>
													</thead>
													<tbody>

													<?php
														include_once("subpages/api.php");
														JSinclude($this, "assets/admin/pages/scripts/api.js");

														$role = "odd";
														if(!isset($Orders )) {$Orders = $Manager->enum_table("orders");}
														foreach($Orders as $order){
															$companyname = $Manager->get_client($order->client_id);
															if ($companyname) {
																$companyname = $companyname->company_name;
															}
															$uploaded_for = $Manager->get_profile($order->uploaded_for);
															if($role == "odd"){
																$role == "even";
															} else {
																$role == "odd";
															}
															?>
															<tr role="row" class="<?= $role; ?>">
																<td><?= $order->id; ?></td>
																<td style="min-width: 145px;"><?= $companyname; ?></td>
																<td><?= formatname($uploaded_for); ?></td>
																<td><a target="_blank" href="<?php echo $this->request->webroot; ?>profiles/view/888">John Smith</a></td>
																<td><?= $order->created; ?></td>
																<td>09/09/2015</td>

																<td><font color="green">09/09/2015</font></td>
																<td class="actions  util-btn-margin-bottom-5">
																	<a class="btn default btn-xs blue-soft-stripe" href="<?php echo $this->request->webroot; ?>profiles/scorecard">Score Card</a>
																	<a class="btn default btn-xs yellow-stripe" href="<?php echo $this->request->webroot; ?>documents/add">Add Products</a>
																	<a href="#" class="btn default btn-xs green-soft-stripe">Save Documents</a>
																	<?php
																	if (!$order->approved) {
																		echo '<A class="btn default btn-xs green-soft-stripe" onclick="return approve(' . $order->id . ');" ID="approve' . $order->id . '">Approve</a>';
																	}
																	?>
																</td>
																<td valign="middle">
																	<span style="float:right;padding:4px;" class="label label-sm label-success" id="status51">Pending</span>
																</td>
															</tr>
													<?php } ?>














													</tbody>
												</table>
												<script>
													function approve(ID) {
														$.ajax({
															url: "<?php echo $this->request->webroot; ?>orders/ajaxhandler/approveorder",
															type: "post",
															dataType: "HTML",
															data: "id=" + ID,
															success: function (res) {
																removeelement("approve" + ID);
																setinnerhtml("status" + ID, "Approved");
															}
														});
														return false;
													}
												</script>

											</div>
										</div>
									</div>
        						</div>
        					</div>
        					<!-- END PORTLET-->
        				</div>
        			</div>
        			<!-- END PAGE CONTENT INNER -->
        		</div>
	</div>