<?php
    if($this->request->session()->read('debug')){ echo "<span style ='color:red;'>" . __FILE__ . " #INC501</span>"; }
    $settings = $this->requestAction('settings/get_settings');
    $sidebar =$this->requestAction("settings/all_settings/".$this->Session->read('Profile.id')."/sidebar");
    include_once('subpages/api.php');
    $language = $this->request->session()->read('Profile.language');
    $strings = CacheTranslations($language, $this->request->params['controller'] . "_%",$settings);
?>
<!-- BEGIN PAGE HEAD -->
	<div class="page-head">
		<div class="container">
			<!-- BEGIN PAGE TITLE -->
			<div class="page-title">
			    <h1><?= ucfirst($strings["settings_client"]);?> <small>List</small></h1>
			</div>
            <div class="page-bar">
			    <a href="javascript:window.print();" class="floatright btn btn-info"><?= $strings["dashboard_print"]; ?></a>
                <?php  if ($sidebar->client_create == 1) {
                    echo '<a href="' . $this->request->webroot . 'clients/add" class="floatright btn btn-primary btnspc">' . $strings["index_createclient"] . '</a>';
                } ?>
			</div>
        </div>
    </div>
    <div class="page-content">
        <div class="container">
            <?php include('subpages/clients/listing.php');?>
        </div>
    </div>
<!-- END PAGE HEAD -->