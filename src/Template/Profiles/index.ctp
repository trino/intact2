<?php
include_once('subpages/api.php');
$settings = $this->requestAction('settings/get_settings');
$language = $this->request->session()->read('Profile.language');
$strings = CacheTranslations($language, "profiles_%",$settings);//,$registry);//$registry = $this->requestAction('/settings/getRegistry');
if($language == "Debug"){ $Trans = " [Translated]"; } else {$Trans = "";}

$super = $this->request->session()->read('Profile.super');
?>

<style>
    @media print {
        .page-header {
            display: none;
        }

        .page-footer, .chat-form, .nav-tabs, .page-title, .page-bar, .theme-panel, .page-sidebar-wrapper, .more {
            display: none !important;
        }

        .portlet-body, .portlet-title {
            border-top: 1px solid #578EBE;
        }

        .tabbable-line {
            border: none !important;
        }

        a:link:after,
        a:visited:after {
            content: "" !important;
        }

        .actions {
            display: none
        }

        .paging_simple_numbers {
            display: none;
        }
    }

</style>


<?php
    //include_once ('subpages/api.php');
    $dr_cl = $doc_comp->getDriverClient(0, 0);
    $getProfileType = $this->requestAction('profiles/getProfileType/' . $this->Session->read('Profile.id'));
    $sidebar = $this->requestAction("settings/all_settings/" . $this->request->session()->read('Profile.id') . "/sidebar");

    function hasget($name){
        if (isset($_GET[$name])) {return strlen($_GET[$name]) > 0;}
        return false;
    }
?>
<!-- BEGIN PAGE HEAD -->
	<div class="page-head">
		<div class="container">
			<!-- BEGIN PAGE TITLE -->
			<div class="page-title">
				<h1>Profiles <small>List</small></h1>
			</div>
            
            <div class="page-bar">

    <a href="javascript:window.print();" class="floatright btn btn-info"><?= $strings["dashboard_print"] ?></a>

    <?php if ($sidebar->profile_create == 1) { ?>
        <a href="<?php echo $this->request->webroot; ?>profiles/add" class="floatright btn btn-primary btnspc">
           <?= $strings["index_createprofile"]; ?></a>
    <?php } ?>

</div>
			
		</div>
	</div>
	<!-- END PAGE HEAD -->
	<!-- BEGIN PAGE CONTENT -->
	<div class="page-content">
    <div class="container">



<?php
    if(isset($assignedtoGFS)){
        $assignedtoGFS = explode(",", $assignedtoGFS);
        if(in_array($this->Session->read('Profile.id'), $assignedtoGFS)) {
            echo $strings["profiles_gfs"] . "<P>";
        }
    }
?>


<div class="row">


    <div class="col-md-12">


        <div class="portlet box">


            <div class="portlet-body form">


                <div class="form-actions top chat-form" style="margin-top:0;margin-bottom:0;">
                    <div class="btn-set pull-left">

                    </div>
                    <div class="btn-set pull-right">
                        <form action="<?php echo $this->request->webroot; ?>profiles/index" method="get">
                            <?php if (isset($_GET['draft'])) { ?><input type="hidden" name="draft"/><?php } ?>



                            <?php
                                if ($super) {
                                    $getClient = $this->requestAction('profiles/getClient');
                                    ?>
                                    <select class="form-control showprodivision input-inline" style=""
                                            name="filter_by_client">
                                        <option value=""><?php echo ucfirst($strings["settings_client"]); ?></option>
                                        <?php
                                            if ($getClient) {
                                                foreach ($getClient as $g) {
                                                    ?>
                                                    <option
                                                        value="<?php echo $g->id; ?>" <?php if (isset($return_client) && $return_client == $g->id) { ?> selected="selected"<?php } ?> ><?php echo $g->company_name; ?></option>
                                                <?php
                                                }
                                            }
                                        ?>
                                    </select>

                                <?php } ?>

                            <input class="form-control input-inline" type="search" name="searchprofile"
                                   placeholder="<?=  $strings["profiles_searchfor"];  //; ?>"
                                   value="<?php if (isset($search_text)) echo $search_text; ?>"
                                   aria-controls="sample_1"/>
                            <button type="submit" class="btn btn-primary input-inline"><?= $strings["dashboard_search"] ?></button>
                        </form>
                    </div>
                </div>

                <div class="form-body">
                    <div class="table-scrollable">

                        <table
                            class="table table-condensed  table-striped table-bordered table-hover dataTable no-footer">
                            <thead>
                            <tr class="sorting">
                                <th><?= $this->Paginator->sort('id', "ID") ?></th>
                                <th style="width:7px;"><?= $this->Paginator->sort('image', $strings["profiles_image"] ) ?></th>
                                
                                <!--th><?= $this->Paginator->sort('email') ?></th-->
                                <th><?= $this->Paginator->sort('fname', $strings["profiles_name"]) ?></th>
                                

                                <!--th><?= $this->Paginator->sort('lname', 'Last Name') ?></th-->
                                <th><?= $strings["profiles_assignedto"] . " " . $settings->clients; ?></th>
                                <th><?= $strings["dashboard_actions"] ?></th>

                            </tr>
                            </thead>
                            <tbody>
                            <?php
                                $row_color_class = "odd";

                                $isISB = (isset($sidebar) && $sidebar->client_option == 0);
                               // $profiletype = ['', 'Admin', 'Recruiter', 'External', 'Safety', 'Driver', 'Contact', 'Owner Operator', 'Owner Driver', 'Employee', 'Guest', 'Partner'];
                                if (count($profiles) == 0) {
                                    echo '<TR><TD COLSPAN="8" ALIGN="CENTER">' . $strings["profiles_nonefound"] . '</TD></TR>';
                                }

                                foreach ($profiles as $profile):
                                    if ($row_color_class == "even") {
                                        $row_color_class = "odd";
                                    } else {
                                        $row_color_class = "even";
                                    }
                                    ?>

                                    <tr class="<?= $row_color_class; ?>" role="row">
                                        <td><?php echo $this->Number->format($profile->id);
                                         if($profile->hasattachments) { echo '<BR><i title="Has Attachment" class="fa fa-paperclip"></i>';}
                                         ?></td>
                                        <td><?php
                                                if ($sidebar->profile_list == '1' && !isset($_GET["draft"])) {
                                                    ?>
                                                    <a href="<?php echo $this->request->webroot; ?>profiles/view/<?php echo $profile->id; ?>">
                                                        <img style="width:40px;" src="<?= profileimage($this->request->webroot, $profile); ?>" class="img-responsive" alt=""/>
                                                    </a>
                                                <?php
                                                }
                                            ?>

                                        </td>
                         

                                        <td><?= h($profile->fname) ?> <?= h($profile->lname) ?></td>


                                        <td><?php $clinet_name =strtolower($ProClients->getClientName($profile->id));
                                        echo $ProClients->getAllClientsname($profile->id);?></td>
                                        <td class="actions  util-btn-margin-bottom-5">
                                            <?php

                                              
                                                $checker = $this->requestAction('/settings/check_edit_permission/' . $this->request->session()->read('Profile.id') . '/' . $profile->id."/".$profile->created_by);
                                                if ($sidebar->profile_edit == '1' && $checker == 1) {
                                                        echo $this->Html->link(__($strings["dashboard_edit"]), ['action' => 'edit', $profile->id], ['class' => btnclass("EDIT")]);
                                                }

                                                ?>
                                                <!--
                                                if ($sidebar->document_list == 1/* && $doc != 0 && $cn != 0*/) {
                                                    echo '<a href="';
                                                    if($profile->profile_type == '5' || $profile->profile_type == '7' || $profile->profile_type == '8' || $profile->profile_type == '11') {
                                                        echo $this->request->webroot . 'documents/index?type=&submitted_for_id=' . $profile->id;
                                                    } else {
                                                        echo $this->request->webroot . 'documents/index?type=&submitted_by_id=' . $profile->id;
                                                    }
                                                    echo '" class="' . btnclass("btn-info", "blue-soft") . '">' . $strings["profiles_viewdocuments"] . '</a>';
                                                }

                                                if ($sidebar->orders_list == '1' && $profile->profile_type > 0) {
                                                    echo '<a href="' . $this->request->webroot  . 'orders/orderslist/?uploaded_for=' . $profile->id . '"';
                                                    echo ' class="' . btnclass("btn-info", "blue-soft") . '">' . $strings["profiles_vieworders"] . '</a>';
                                                }-->
                                                
                                                <a href="<?php echo $this->request->webroot;?>profiles/broker_view" class="btn default btn-xs yellow-stripe">View Scorecard</a>
                                                <?php

                                            if ($sidebar->profile_delete == '1') {
                                                $CanDelete=false;
                                                if ($super == '1') {
                                                   $CanDelete = true;//supers can delete anyone
                                                } else if ($this->request->session()->read('Profile.profile_type') == '2' && ($profile->profile_type == '5')) {
                                                    $CanDelete = true;//recruiters can delete drivers
                                                } else if($sidebar->profile_create =='1'){
                                                    $CanDelete = in_array($profile->profile_type, $cancreate);//can delete profile types you can create
                                                }
                                                if ($this->request->session()->read('Profile.id') == $profile->id) {
                                                    $CanDelete = false;//can't delete yourself
                                                }

                                                if($CanDelete){
                                                    echo '<a href="' . $this->request->webroot . 'profiles/delete/' . $profile->id;
                                                    if (isset($_GET['draft'])){ echo "?draft";}
                                                    echo '" onclick="return confirm(' . "'" . ProcessVariables($language, $strings["dashboard_confirmdelete"], array("name" => ucfirst(h($profile->username))));
                                                    echo "'" . ');" class="' . btnclass("DELETE") . '">' . $strings["dashboard_delete"] . '</a>';
                                                }

                                                /*if($super){
                                                    echo '<a href="' . $this->request->webroot . 'profiles/possess/' . $profile->id;
                                                    echo '" onclick="return confirm(' . "'Are you sure you want to possess " . ucfirst(h($profile->username)) . "?'";
                                                    echo ');" class="' . btnclass("DELETE") . '">Possess</a>';
                                                }

                                                if(strtolower($clinet_name) == 'gordon food service'){
                                                    echo "<button onclick=\"$('.consent_linkz_".$profile->id."').toggle();\" class='btn default btn-xs blue-soft-stripe'>Consent Link</button>";
                                                    echo "<div class='consent_linkz_".$profile->id."' style='display:none;'><strong>Please send the following link to the applicant to re-submit the consent form:</strong><br>http://".getenv('HTTP_HOST').$this->request->webroot."application/index.php?form=4&user_id=".$profile->id."&customlink</div><div class='clearfix'></div>";
                                                }*/

                                            }
                                            ?>

                                        </td>
                                    </tr>

                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="form-actions" style="height:75px;">
                    <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-6" align="left">
                        <?php if($sidebar->bulk=='1' && isset($_GET["all"]) ){?>
                            <a href="javascript:void(0);" class="bulk_order btn btn-primary">Order Bulk</a>
                        <?php }?>
                        </div>
                        <div class="col-md-6" align="right">
                            <?php if (!isset($_GET["all"])) { ?>
                            <div id="sample_2_paginate" class="dataTables_paginate paging_simple_numbers" align="right"
                                 style="margin-top:-10px;">
                                <ul class="pagination sorting">
                                    <?= $this->Paginator->prev('< ' . __($strings["dashboard_previous"])); ?>
                                    <?= $this->Paginator->numbers(); ?>
                                    <?= $this->Paginator->next(__($strings["dashboard_next"]) . ' >'); ?>
                                </ul>
                            </div>
                            <?php } ?>
                        </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<script>
    $(function () {
        $('.sorting').find('a').each(function () {

            <?php if(isset($_GET['draft'])){?>
            var hrf = $(this).attr('href');
            if (hrf != "")
                $(this).attr('href', hrf + '&draft');
            <?php } ?>
        });
    })
</script>
<script>

    $(function () {
        $('.bulk_order').click(function(){
            var tempstr = '';
           $('.table-scrollable input[type="checkbox"]').each(function(){

            if($(this).is(':checked'))
            {
                if(tempstr == '')
                tempstr = $(this).val();
                else
                tempstr = tempstr+','+$(this).val();
            }


           });
           window.location = '<?php echo $this->request->webroot;?>orders/productSelection?driver=0&ordertype=BUL&profiles='+tempstr;
        });
        <?php if(isset($_GET['division'])&& $_GET['division']!=""){
                 //var_dump($_GET);
                 ?>
        var client_id = <?php if(isset($_GET['filter_by_client'])&& $_GET['filter_by_client']!="") echo $_GET['filter_by_client'];?>;
        var division_id = <?php echo $_GET['division'];?>;
        //alert(client_id+'__'+division_id);
        if (client_id != "") {
            $.ajax({
                type: "post",
                data: "client_id=" + client_id,
                url: "<?php echo $this->request->webroot;?>clients/getdivisions/" + division_id,
                success: function (msg) {
                    //alert(msg);
                    $('.prodivisions').html(msg);
                }
            });
        }
        <?php
        }
        //if(isset($_GET['division'])&& $_GET['division']!="")
        ?>

        $('.showprodivision').change(function () {
            var client_id = $(this).val();
            if (client_id != "") {
                $.ajax({
                    type: "post",
                    data: "client_id=" + client_id,
                    url: "<?php echo $this->request->webroot;?>clients/getdivisions",
                    success: function (msg) {
                        $('.prodivisions').html(msg);
                    }
                });
            }
        });
        var client_id = $('.showprodivision').val();
        if (client_id != "") {
            $.ajax({
                type: "post",
                data: "client_id=" + client_id,
                url: "<?php echo $this->request->webroot;?>clients/getdivisions",
                success: function (msg) {
                    $('.prodivisions').html(msg);
                }
            });
        }
    });
</script>
</div>
</div>
</div>