<div class="top-menu">

	<!--<img src="<?php echo $this->request->webroot;?>img/intactinsurance.jpg" alt="logo" class="logo-default" style="width: 120px;padding-right:20px;" />-->
<img src="<?php echo $this->request->webroot;?>img/intactinsurance.jpg" alt="logo" class="logo-default" style="width: 120px;padding-right:20px;" />


				<ul class="nav navbar-nav pull-right">
					
					
					<!-- END INBOX DROPDOWN -->
					<!-- BEGIN USER LOGIN DROPDOWN -->
					<li class="dropdown dropdown-user dropdown-dark">
						<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
						<img alt="" class="img-circle" src="<?php echo $this->request->webroot;?>assets/admin/layout3/img/avatar9.jpg">
						<span class="username username-hide-mobile">Nick</span>
						</a>
						<ul class="dropdown-menu dropdown-menu-default">
							<li>
								<a href="<?php echo $this->request->webroot;?>profiles/edit/4">
								<i class="icon-user"></i> My Profile </a>
							</li>
							<li>
								<a href="#">
								<i class="fa fa-comment"></i>   Passer au francais </a>
							</li>
							
							<li>
								<a href="<?php echo $this->request->webroot;?>profiles/logout">
								<i class="icon-key"></i> Log Out </a>
							</li>
						</ul>
					</li>
					<!-- END USER LOGIN DROPDOWN -->
				</ul>
			</div>