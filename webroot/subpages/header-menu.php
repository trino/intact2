<div class="page-header-menu">
		<div class="container">
			<!-- BEGIN HEADER SEARCH BOX -->
			<form class="search-form" action="extra_search.html" method="GET">
				<div class="input-group">
					<input type="text" class="form-control" placeholder="Search" name="query">
					<span class="input-group-btn">
					<a href="javascript:;" class="btn submit"><i class="icon-magnifier"></i></a>
					</span>
				</div>
			</form>
			<!-- END HEADER SEARCH BOX -->
			<!-- BEGIN MEGA MENU -->
			<!-- DOC: Apply "hor-menu-light" class after the "hor-menu" class below to have a horizontal menu with white background -->
			<!-- DOC: Remove data-hover="dropdown" and data-close-others="true" attributes below to disable the dropdown opening on mouse hover -->
			<div class="hor-menu ">
				<ul class="nav navbar-nav">
                <?php if($this->request->session()->read('Profile.id')){?>
					<li class="active">
						<a href="<?php echo $this->request->webroot;?>">Dashboard</a>
					</li>
                    <li class="">
						<a href="<?php echo $this->request->webroot;?>profiles/listall">My Drivers</a>
					</li>
                    <li class="">
						<a href="<?php echo $this->request->webroot;?>profiles/allorders">My Orders</a>
					</li>
					
					
					<li class="menu-dropdown classic-menu-dropdown ">
						<a data-hover="megamenu-dropdown" data-close-others="true" data-toggle="dropdown" href="javascript:;">
						My Clients <i class="fa fa-angle-down"></i>
						</a>
						<ul class="dropdown-menu pull-left">
							<li class="">
                            
								<a href="<?php echo $this->request->webroot;?>clients/listall"><i class="icon-list"></i> List Clients</a>
								
							</li>
                            <li class="">
								<a href="<?php echo $this->request->webroot;?>clients/add"><i class="icon-plus"></i> Add Client</a>
								
							</li>

							
							
						</ul>
					</li>
                    
                    <li class="menu-dropdown classic-menu-dropdown ">
						<a data-hover="megamenu-dropdown" data-close-others="true" data-toggle="dropdown" href="javascript:;">
						My Documents <i class="fa fa-angle-down"></i>
						</a>
						<ul class="dropdown-menu pull-left">
							<li class="">
                            
								<a href="<?php echo $this->request->webroot;?>documents/index"><i class="icon-list"></i> Document List</a>
								
							</li>
                            <li class="">
								<a href="<?php echo $this->request->webroot;?>documents/add"><i class="icon-plus"></i> Add Document</a>
								
							</li>
    						
							
						</ul>
					</li>
                    
					<li class="menu-dropdown classic-menu-dropdown ">
						<a data-hover="megamenu-dropdown" data-close-others="true" data-toggle="dropdown" href="javascript:;">
						More <i class="fa fa-angle-down"></i>
						</a>
						<ul class="dropdown-menu pull-left">
							<li class="">
                            
								<a href=javascript:;><i class="fa fa-edit"></i> Tasks</a>
								
							</li>
                            <li class="">
								<a href=javascript:;><i class="fa fa-bell"></i> Help (Email to ISB)</a>
								
							</li>
                            <li class="">
								<a href=javascript:;><i class="fa fa-envelope"></i> Contact Us</a>								
							</li>
                            
                            <li class="">
								<a href=javascript:;><i class="fa fa-comment"></i> Language</a>								
							</li>
							
							
							
							
						</ul>
					</li>
				<?php }?>	
				</ul>
                
			</div>
			<!-- END MEGA MENU -->
		</div>
	</div>