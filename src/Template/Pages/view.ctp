0<?php
include_once('subpages/api.php');
$settings = $this->requestAction('settings/get_settings');
$language = $this->request->session()->read('Profile.language');
$strings = CacheTranslations($language, "pages_%",$settings);//,$registry);//$registry = $this->requestAction('/settings/getRegistry');

$title=getFieldname("title", $language);
$desc=getFieldname("desc", $language);
?>
<!-- BEGIN PAGE HEAD -->
	<div class="page-head">
		<div class="container">
			<!-- BEGIN PAGE TITLE -->
			<div class="page-title">
			<h1><?php echo ucfirst($content->$title);?></h1>
			</div>
			<div class="page-bar">
			
			
			</div>
            			
		</div>
	</div>
	<!-- END PAGE HEAD -->
	<!-- BEGIN PAGE CONTENT -->
            
	<!-- BEGIN PAGE CONTENT -->
	<div class="page-content">
    <div class="container">
            
<div class="row">
				<div class="col-md-12">
					<!-- BEGIN EXTRAS PORTLET-->
					<div class="portlet light">
						
                        
						<div class="portlet-body form">
							<!-- BEGIN FORM-->
							
                                
								<div class="form-body">
									<div class="form-group last">
									   <?php echo $content->$desc;?>
									</div>
								</div>
								
							
							<!-- END FORM-->
						</div>
					</div>
					<!-- END EXTRAS PORTLET-->
				</div>
			</div>
            		</div>
			</div>