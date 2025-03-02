<style>
    @media print {
        .page-header {
            display: none;
        }

        .page-footer, .nav-tabs, .page-title, .page-bar, .theme-panel, .page-sidebar-wrapper {
            display: none !important;
        }

        .portlet-body, .portlet-title {
        }

    }
</style>

<?php
if ($this->request->session()->read('debug')) {
    echo "<span style ='color:red;'>subpages/documents/forview.php #INC144</span>";
}
include_once 'subpages/filelist.php';
$includeabove = true;

function dotest($Number, $pp, $order, $duplicate_log, $ins2 = "ins"){
    $ins = $ins2 . "_" . $Number ;
    if ($pp == $Number) {
        if ($order->$ins == "Duplicate Order") {
            $duplicate_log = $GLOBALS["score_dupe"];
        } else {
          //  get_color($order->$ins);
        }
    }
    return $duplicate_log;
}

$strings2 = CacheTranslations($language, array("score_%", "orders_noresults", "file_download", "documents_pending"), $settings, False);
copy2globals($strings2, array("score_dupe", "score_submitted", "score_submitted", "score_notattached", "score_pass", "score_discrepancies", "score_coachingrequired", "score_verified", "score_potentialtosucceed", "score_idealcandidate", "score_incomplete", "score_satisfactory", "score_requiresattention", "score_duplicateorder"));

    //include('subpages/documents/forprofileview.php');
    function PrintLine($lineclass, $name, $cnt, $doc_id, $c_id, $o_id, $webroot, $bypass = false,$sub=0) {
        if ($cnt > 0 || $bypass) {
            echo '<tr class="' . $lineclass . '" role="row"><td><span class="icon-notebook"></span></td>';
            if ($doc_id) {
                echo '<td><a href="' . $webroot . 'documents/view/' . $c_id . '/' . $doc_id . '/?type='.$sub;
                if($o_id){
                    echo '&order_id=' . $o_id;
                }
                echo '">' . $name . '</a></td>';
            } else
                echo '<td>' . $name . '</td>';
            echo '<td class="actions">';
            if ($cnt > 0) {
                echo '<span style="" class="label label-sm label-success">' . $GLOBALS["score_submitted"] . '</span>';
            } else { //should not occur
                echo '<span style="" class="label label-sm label-danger">' . $GLOBALS["score_skipped"] . '</span>';
            }
            echo "</TD><TD></TD></TR>";
            if ($lineclass == "even") {
                $lineclass = "odd";
            } else {
                $lineclass = "even";
            }
        }
        return $lineclass;
    }

    function get_colorOLD($result_string) {
        $return_color = '<span  class="label label-sm label-warning" style="float:right;padding:4px;">' . $result_string . '</span>';

        switch (strtoupper(trim($result_string))) {
            case 'NOT ATTACHED':
                echo $return_color = '<span  class="label label-sm label-danger" style="float:right;padding:4px;">' . $result_string . '</span>';;
                break;
            case 'PASS':
                echo $return_color = '<span  class="label label-sm label-success" style="float:right;padding:4px;">' . $result_string . '</span>';
                break;
            case 'DISCREPANCIES':
                echo $return_color = '<span  class="label label-sm label-warning" style="float:right;padding:4px;">' . $result_string . '</span>';
                break;
            case 'COACHING REQUIRED':
                echo $return_color = '<span  class="label label-sm label-warning" style="float:right;padding:4px;">' . $result_string . '</span>';
                break;
            case 'VERIFIED':
                echo $return_color = '<span  class="label label-sm label-success" style="float:right;padding:4px;">' . $result_string . '</span>';
                break;
            case 'POTENTIAL TO SUCCEED':
                echo $return_color = '<span  class="label label-sm label-warning" style="float:right;padding:4px;">' . $result_string . '</span>';
                break;
            case 'IDEAL CANDIDATE':
                echo $return_color = '<span  class="label label-sm label-success" style="float:right;padding:4px;">' . $result_string . '</span>';
                break;
            case 'INCOMPLETE':
                echo $return_color = '<span  class="label label-sm label-danger" style="float:right;padding:4px;">' . $result_string . '</span>';
                break;
            case 'SATISFACTORY':
                echo $return_color = '<span  class="label label-sm label-warning" style="float:right;padding:4px;">' . $result_string . '</span>';
                break;
            case 'REQUIRES ATTENTION':
                echo $return_color = '<span  class="label label-sm label-warning" style="float:right;padding:4px;">' . $result_string . '</span>';
                break;
            case 'DUPLICATE ORDER':
                echo $return_color = '<span  class="label label-sm label-warning" style="float:right;padding:4px;">' . $result_string . '</span>';
                break;
        }
    }

    function get_color($result_string) {
        //get_colorOLD($result_string);return;
        $result_string = "score_" . str_replace(" ", "",strtolower($result_string));
        if (isset($GLOBALS[$result_string])) {
            $result_string=$GLOBALS[$result_string];
            $color = "warning";
            switch (strtoupper(trim($result_string))) {
                case 'NOT ATTACHED':
                    $color = 'danger';;
                    break;
                case 'PASS':
                    $color = 'success';
                    break;
                case 'VERIFIED':
                    $color = 'success';
                    break;
                case 'IDEAL CANDIDATE':
                    $color = 'success';
                    break;
                case 'INCOMPLETE':
                    $color = 'danger';
                    break;
            }
            if ($GLOBALS["language"] == "Debug") {$result_string .= " [Trans]";}
            $return_color = '<span class="label label-sm label-' . $color . '" style="float:right;padding:4px;">' . $result_string . '</span>';
            echo $return_color;
            return $return_color;
        }
    }

    
            function get_string_between($string, $start, $end)
            {
                $string = " " . $string;
                $ini = strpos($string, $start);
                if ($ini == 0) return "";
                $ini += strlen($start);
                $len = strpos($string, $end, $ini) - $ini;
                return substr($string, $ini, $len);
            }

            function get_mee_results_binary($bright_planet_html_binary, $document_type)
            {
			//	echo $document_type;die();
               if (get_string_between(base64_decode($bright_planet_html_binary), $document_type, '</tr>')){
				                   return 
								   
								   str_replace('border-left: 3px solid #4593BC;','',get_string_between(base64_decode($bright_planet_html_binary), $document_type, '</tr>'));
								 

			   }else{
				   
				   return"<td style='border-bottom: 1px solid #ddd;'> </td>";
			   }
            }
   

    function return_link($pdi, $order_id) {
        if (file_exists("orders/order_" . $order_id . '/' . $pdi . '.pdf')) {
            $link = "orders/order_" . $order_id . '/' . $pdi . '.pdf';
            return $link;

        } else if (file_exists("orders/order_" . $order_id . '/' . $pdi . '.html')) {
            $link = "orders/order_" . $order_id . '/' . $pdi . '.html';
            return $link;

        } else if (file_exists("orders/order_" . $order_id . '/' . $pdi . '.txt')) {
            $link = "orders/order_" . $order_id . '/' . $pdi . '.txt';
            return $link;

        }
        return false;
    }

    function portlet($color = "", $caption = "", $secondcaption = "") {
        if($color){
            echo '<!-- BEGIN PROFILE CONTENT --><div class="row"><div class="clearfix"></div><div class="col-md-12">';
            echo '<!-- BEGIN PORTLET --><div class="portlet"><div class="portlet box ' . $color . '"><div class="portlet-title"><div class="caption">';
            echo $caption. '</div>' . $secondcaption . '</div><div class="portlet-body" style="min-height: 100px !important;">';
        } else {
            echo '<!-- END PORTLET --></DIV></DIV></DIV></DIV></DIV>';
        }
    }

    $counting = 0;
    $drcl_d = $orders;
    foreach ($drcl_d as $drcld) {
        if (isset($order)) {
            if (is_object($order)) {
                if ($order->draft == 0) {
                    $counting++;
                }
            }
        }
    }

    if (iterator_count($documents)) {
        $DoIt=false;
        foreach ($documents as $document) {
            if ($document->sub_doc_id == 18) {
                $DoIt = true;
                break;
            }
        }
        if($DoIt) {
            portlet("yellow", $strings["index_documents"]);
            $line = "even";
            $fieldname = getFieldname("title", $language);
            echo '<div class="col-md-12" style="margin-bottom: 8px;"><H4 style="margin-left: -7px;"><i class="icon-doc font-blue-hoki"></i><span class="caption-subject bold font-blue-hoki uppercase"> ' . $strings2["score_docs"] . '</span></H4></div><table class="table" style="margin-bottom: 0px;">';
            foreach ($documents as $document) {
                if ($document->sub_doc_id == 18) {//whitelist only FS application for exmployment
                    $subdocument = getIterator($subdocuments, "id", $document->sub_doc_id);
                    $line = PrintLine($line, $subdocument->$fieldname, 1, $document->id, $document->client_id, 0, $this->request->webroot, true, $document->sub_doc_id);
                }
            }
            echo '</TABLE><div class="clearfix"></div>';
            portlet();
        }
    }

    $k = 0;
    foreach ($orders as $order) {
        $forms = $order->forms;

        //  var_dump($forms);
        if (!$forms) {
            $forms_arr[0] = 1;
            $forms_arr[1] = 2;
            $forms_arr[2] = 3;
            $forms_arr[3] = 4;
            $forms_arr[4] = 5;
            $forms_arr[5] = 6;
            $forms_arr[6] = 7;
            //$forms_arr[7] = 8;
        } else {
            $forms_arr = explode(',', $forms);

        }
        $p = $forms_arr;
        // var_dump($p);
        if ($order->draft == 0) {
            $k++;

            $settings = $this->requestAction('settings/get_settings');
            $uploaded_by = $doc_comp->getUser($order->user_id);
            ?>

                <!-- BEGIN PROFILE CONTENT -->
                <div class="">
                    <div class="row">

                        <div class="clearfix"></div>
                        <div class="col-md-12">
                            <!-- BEGIN PORTLET -->
                            <div class="portlet">

                                <div class="portlet box yellow">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <A name="<?php echo $order->created; ?>"/></A>
                                            <i class="fa fa-folder-open-o"></i><?= $strings2["score_score"]; ?>
                                            - <?php echo $order->created; ?>
                                        </div>

                                            <a style="float:right; display:none;"
                                       href="<?php echo $this->request->webroot; ?>orders/vieworder/<?php echo $order->client_id; ?>/<?php echo $order->id; ?>?order_type=<?php echo $order->order_type;
            if ($order->forms) {
                echo '?forms=' . $order->forms;
            } ?>"
                                       class="btn  small"><?= $strings2["score_view"]; ?></a>
                                    </div>
                                    <div class="portlet-body">
                                        <div oldclass="table-scrollable">

                                            <?php
            if ($includeabove) {
                echo '<div class="col-sm-12">';
                printdocumentinfo($order->id, true, true);
                ?>
                <div style="float:right; margin-top: 10px;">
                    <a href="#" class="btn btn-lg default yellow-stripe">
                        <?= $strings2["score_road"]; ?> </a><a href="#" class="btn btn-lg yellow">
                        <i class="fa fa-bar-chart-o"></i> <?php if (isset($order->road_test[0]->total_score)) echo $order->road_test[0]->total_score; ?>
                    </a></div></div>

            <?php } else { //skipped, translation not required?>
                <div class="col-sm-6" style="padding-top:10px;"
                     oldstyle="border: 1px solid #E5E5E5;">
                        <span class="profile-desc-text">   <p>Driver:
                                <strong>
                                    <?php echo $order->profile->fname . ' ' . $order->profile->lname; ?>
                                </strong></p>
            			    <p>Recruiter: <strong><?php echo $uploaded_by->username; ?></strong></p>
            			    <p>Recruiter ID # <strong><?php echo $uploaded_by->isb_id; ?></strong></p>
            			    <p>Client:
                                <strong><?php if (isset($order->client->company_name)) {
                                        echo $order->client->company_name;
                                    } else {
                                        echo "Unknown";
                                    } ?>
                                </strong>
                            </p>

            			<p>Uploaded on: <strong><?php echo $order->created; ?></strong></p>

            			</span>

                </div>
                <div class="col-sm-6" style="paddng-left: 0; padding-right: 0;">
                    <TABLE align="right" style="float;right;">
                        <TR>
                            <TD>
                               <SPAN style="white-space:nowrap"><a style="float;right;" href="#"
                                                                   class=" btn btn-lg default yellow-stripe">
                                       Road Test Score </a><a href="#" class="btn btn-lg yellow">
                                       <i class="fa fa-bar-chart-o"></i> <?php if (isset($order->road_test[0]->total_score)) echo $order->road_test[0]->total_score; ?>
                                   </a></SPAN></TD>
                        </TR>
                        <TR>
                            <TD>

                            </TD>
                        </TR>
                    </TABLE>
                </div>
            <?php } ?>

                    <div class="clearfix"></div>
                    <div class="col-md-12" style="margin-bottom: 8px;">
                    <H4 style=""><i class="icon-doc font-blue-hoki"></i>
                    <span class="caption-subject bold font-blue-hoki uppercase">
                    <?= $strings2["score_products"]; ?> </span></H4>
                    </div>

                    <div class="clearfix"></div>
                    <div class="col-md-12" style="">
                    <table class="table" style="margin-bottom: 0px;">
                    <tbody>

                <?php
            $Fieldname = getFieldname("title", $language);
            foreach ($p as $pp) {
                $title_pr = $this->requestAction('/orders/getProductTitle/' . $pp);
                ?>
                <tr class="" role="">
                    <td>
                        <span class="icon-notebook"></span>
                    </td>
										
		
					
                    <td>
                        <?php
						//debug($order->bright_planet_html_binary);
                        echo $title_pr->$Fieldname . $Trans;
                        $duplicate_log = "";
                        $duplicate_log = dotest(1,  $pp, $order, $duplicate_log);
                        $duplicate_log = dotest(77,  $pp, $order, $duplicate_log);
                        $duplicate_log = dotest(14,  $pp, $order, $duplicate_log);
                        $duplicate_log = dotest(1603,  $pp, $order, $duplicate_log);//, "ebs");
                        $duplicate_log = dotest(1650,  $pp, $order, $duplicate_log);//, "ebs");
                        $duplicate_log = dotest(78,  $pp, $order, $duplicate_log);
                        $duplicate_log = dotest(1627,  $pp, $order, $duplicate_log);//, "ebs");
                        $duplicate_log = dotest(72,  $pp, $order, $duplicate_log);
                        ?>
                    </td>
		

					
<td class="actions">
<?php
if ($duplicate_log == "Duplicate Order") 
{
?>
<span class="label label-danger"><?= $strings2["score_dupe"]; ?>  </span>
<?
} 
elseif (return_link($pp, $order->id) == false) 
{
?>
<span class="label label-info"><?= $strings2["documents_pending"]; ?> </span>
<? 
} 
else{

?>
<a target="_blank" href="<? echo $this->request->webroot . return_link($pp, $order->id); ?>" class="btn btn-primary dl"><?= $strings2["file_download"]; ?></a>

<?
}

if($order->complete == 1){
echo "" . get_mee_results_binary($order->bright_planet_html_binary,$title_pr->$Fieldname);
}
?>
<? 


?>
</td>


                  
                </tr>
                <?php
                $duplicate_log = "";
            }
            ?>

                                                    <TR>
                                                        <TD colspan="3">

                                                            <H4 style="margin-left: -7px;"><i
                                                                    class="icon-doc font-blue-hoki"></i>
								<span class="caption-subject bold font-blue-hoki uppercase">
								<?= $strings2["score_docs"]; ?> </span></H4>

                                                            <div class="clearfix"></div>
                                                        </TD>
                                                    </TR>



                                                    <?php
            $line = "even";
            $doc = $this->requestAction('/orders/getSubDocs');
            $docfind = 0;
            //var_dump($doc); die();
            if ($doc) {
                foreach ($doc as $d) {
                    $title = ucfirst($d->$Fieldname) . $Trans;
                    $sub_doc_id = $d->id;//Document ID
                    $o_id = $order->id;//Order ID
                    $c_id = $order->client_id;

                    $d_id = $this->requestAction("/orders/getdocid/" . $sub_doc_id . "/" . $o_id);
                    if ($d_id) {
                        //echo "<BR>Checking: sub_doc_id " . $sub_doc_id . " for order " . $o_id . " got " . $d_id;
                        $docfind++;
                        $docu_id = $d_id->id;
                        $cnt = $this->requestAction("/orders/getprocessed/" . $d->table_name . "/" . $order->id);
                        $line = PrintLine($line, $title, $cnt, $docu_id, $c_id, $o_id, $this->request->webroot, true,$sub_doc_id);
						
                    }
					
                }
                //die();

            }
            if (!$docfind) {
                ?>
                <tr>
                    <td colspan="3"><?= $strings2["score_none"]; ?></td>
                </tr>
            <?php
            }

            $files = getattachments($order->id);
            if (!$includeabove) {
                printdocumentinfo($order->id, true);
            }
            listfiles($files, "attachments/", "", false, 3);


            ?>
                                                    <TR>
                                                        <TD colspan="3"></TD>
                                                    </TR>
                                                    </tbody>
                                                </table>


                                            </div>

                                            <div class="clearfix"></div>

                                        </div>

                                    </div>


                                    <!-- END PORTLET -->


                                </div>
                            </div>
                            <!-- END PORTLET -->
                        </div>
                    </div>
                </div>

            <?php }
    }

    if ($k == 0) {
        ?>
        <table class="table table-condensed table-striped table-bordered table-hover dataTable no-footer">
            <thead>
            </thead>
            <tbody>
            <tr class="even" role="row">
                <td colspan="3" align="center">
                    <?= $strings2["orders_noresults"]; ?>
                </td>
            </tr>
            </tbody>
        </table>

    <?
    }
    ?>
        <!-- END PROFILE CONTENT -->