<?php
	$settings = $this->requestAction('settings/get_settings');
	$debug = $this->request->session()->read('debug');
	include_once('subpages/api.php');
	$language = $this->request->session()->read('Profile.language');
	$strings = CacheTranslations($language, array("langswitch", "orders_create"), $settings);//,$registry);
?>

<div class="top-menu">

	<!--<img src="<?php echo $this->request->webroot;?>img/logo.png" alt="logo" class="logo-default" style="width: 120px;padding-right:20px;" />-->
<img src="<?php echo $this->request->webroot;?>img/broker.png" alt="logo" class="logo-default" style="width: 170px;padding:6px 10px 0 0;" />


				<ul class="nav navbar-nav pull-right">
					
					
					<!-- END INBOX DROPDOWN -->
					<!-- BEGIN USER LOGIN DROPDOWN -->
					<li class="dropdown dropdown-user dropdown-dark">
						<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
						<img alt="" class="img-circle" src="<?php echo $this->request->webroot;?>assets/admin/layout3/img/avatar9.jpg">
						<span class="username username-hide-mobile">Nick</span>
						</a>
						<ul class="dropdown-menu dropdown-menu-default">
                        <?php if($this->request->session()->read('Profile.id')){?>
							<li>
								<a href="<?php echo $this->request->webroot;?>profiles/edit/4">
								<i class="icon-user"></i> My Profile </a>
							</li>
							<li>
								<a href="<?= $this->request->webroot; ?>profiles/langswitch/<?= $this->request->session()->read('Profile.id'); ?>">
									<i class="icon-user"></i> <?= $strings["langswitch"]; ?></a>
							</li>
							
							<li>
								<a href="<?php echo $this->request->webroot;?>profiles/logout">
								<i class="icon-key"></i> Log Out </a>
							</li>
                         <?php }?>
						</ul>
					</li>
					<!-- END USER LOGIN DROPDOWN -->
				</ul>
			</div>