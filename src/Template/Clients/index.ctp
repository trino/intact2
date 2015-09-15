<?php
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
			<h1><?php echo ucfirst($strings["settings_client"]);?> <small>List</small></h1>
			</div>
    <div class="page-bar">

			<a href="javascript:window.print();" class="floatright btn btn-info"><?= $strings["dashboard_print"]; ?></a>

        <?php  if ($sidebar->client_create == 1) {  ?>
             <a href="<?php echo $this->request->webroot; ?>clients/add" class="floatright btn btn-primary btnspc">
                <?php echo $strings["index_createclient"];?></a>
        <?php } ?>

			</div>
            
            </div>
            </div>
            
            
<div class="page-content">
         

    <div class="container">            
<?php include('subpages/clients/listing.php');?>

</div>
</div>