<div class="row">
    <?php
        if ($this->request->session()->read('debug')) {
            echo "<span style ='color:red;'>clients/listing.php #INC113</span>";
        }
        include_once('subpages/api.php');
        if(!$GLOBALS["translated"]){die("Translation required");}
    ?>

    <div class="col-md-12">
        <div class="portlet box grey-salsa">
            <div class="portlet-body form">


                <form action="<?php echo $this->request->webroot; ?>clients/search" method="get" class="form-actions"
                      align="right">

<div align="right">
                    <?php if (isset($_GET['draft'])) { ?><input type="hidden" name="draft"/><?php } ?>

                    <input class="form-control input-inline" name="search" type="search"
                           placeholder="<?= $strings["clients_search"] ?>"
                           value="<?php if (isset($search_text)) echo $search_text; ?>"
                           aria-controls="sample_1"/>
                    <button type="submit" class="btn btn-primary input-inline" style=""><?= $strings["dashboard_search"] ?></button>
</div>
                </form>


                <div class="form-body">
                    <div class="table-scrollable ">
                        <table class="table table-hover  table-striped table-bordered table-hover dataTable no-footer">
                            <thead>
                            <tr class="sorting">
                                <th width="50px"><?= $this->Paginator->sort('id', 'ID', ['escape' => false]) ?></th>
                                <th width="220px"><?= $strings["clients_logo"]; ?></th>
                                <th><?= $this->Paginator->sort('company_name', ucfirst($strings["settings_client"]), ['escape' => false]) ?></th>

                                <th class="actions"><?= __($strings["dashboard_actions"]) ?></th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                                $profile_id = $this->request->session()->read('Profile.id');

                                if (isset($client)) {
                                    if (count($client) == 0) {
                                        echo '<TR><TD COLSPAN="6" ALIGN="CENTER">' . $strings["clients_nonefound"] . '</TD></TR>';
                                    }

                                    foreach ($client as $clients):
                                        $profiles = explode(",", $clients->profile_id);
                                        if (in_array($profile_id, $profiles) || $this->request->session()->read('Profile.super') == '1') {
                                            echo '<tr><td>';
                                            echo $this->Number->format($clients->id);
                                            if ($clients->hasattachments) {
                                                echo '<BR><i  title="Has Attachment" class="fa fa-paperclip"></i>';
                                            }
                                            echo '</td><td align="center">';
                                            if ($sidebar->client_list == '1' && !isset($_GET["draft"])) {
                                                ?>
                                                <a href="<?php echo $this->request->webroot; ?>clients/edit/<?php echo $clients->id; ?>?view">
                                                    <img class="img-responsive" style="max-width:180px;max-height:50px;width: auto; height: auto;" id="clientpic"
                                                         src="<?php
                                                         echo clientimage($this->request->webroot, $settings, $clients) . '"/></a>';
                                                } else {
                                                ?>
                                                <img class="img-responsive" style="max-width:180px;" id="clientpic"
                                                     src="<?php if (isset($clients->image) && $clients->image) {
                                                             echo $this->request->webroot; ?>img/jobs/<?php echo $clients->image . '"';
                                                         } else {
                                                            echo $this->request->webroot;?>img/jobs/<?php echo $settings->client_img;?>"
                                                    <?php
                                            }
                                            echo '/>';
                                        }
                                        echo '</td><td class="actions  util-btn-margin-bottom-5">';
                                        if ($sidebar->client_list == '1' && !isset($_GET["draft"])) {
                                              echo '<a href="' . $this->request->webroot . 'clients/edit/' . $clients->id . '?view">' . ucfirst(h($clients->company_name)) . '</a>';
                                        } else {
                                              echo ucfirst(h($clients->company_name));
                                        }
                                        if ($clients->drafts == 1) {echo ' ( Draft ) ';}
                                        echo '</td><td class="actions  util-btn-margin-bottom-5">';

                                        if ($sidebar->client_list == '1' && !isset($_GET["draft"])) {
                                             echo '<a class="' . btnclass("btn-info", "blue-soft") . '"';
                                             echo 'href="' . $this->request->webroot . 'clients/edit/' .  $clients->id . '?view">' . $strings["dashboard_view"] . '</a>';
                                        }

                                        if ($sidebar->client_edit == '1') {
                                            echo $this->Html->link(__($strings["dashboard_edit"]), ['controller' => 'clients', 'action' => 'edit', $clients->id], ['class' => btnclass("btn-info", "blue-soft")]);
                                        }

                                        if ($sidebar->document_create == '1' && !isset($_GET["draft"]) && false) {//FALSE DISABLES THIS
                                            echo $this->Html->link(__('Create ' . ucfirst($settings->document)), ['controller' => 'documents', 'action' => 'add', $clients->id], ['class' => btnclass("btn-info", "blue-soft")]);
                                        }

                                        if ($sidebar->client_delete == '1') {
                                            echo '<a href="' . $this->request->webroot . 'clients/delete/' . $clients->id;
                                            echo (isset($_GET['draft'])) ? "?draft" : "";
                                            echo ' onclick="return confirm(' . "'" . ProcessVariables($language, $strings["dashboard_confirmdelete"], array("name" =>  h($clients->company_name)), true); echo "');" . '"';
                                            echo ' class="' . btnclass("DELETE") . '">' . $strings["dashboard_delete"] . '</a>';
                                        }

                                        if ($sidebar->orders_create == '1' && !isset($_GET["draft"]) && false) {//FALSE DISABLES THIS
                                            if ($sidebar->orders_mee == '1') {
                                                echo '<a href="' . $this->request->webroot . 'orders/productSelection?client=' . $clients->id . '&ordertype=MEE"';
                                                echo '  class="' . btnclass("btn-info", "blue-soft") . '">Order MEE</a>';
                                            }

                                            if ($sidebar->orders_products == '1') {
                                                ?>
                                                <a href="<?php
                                                    echo $this->request->webroot; ?>orders/productSelection?client=<?php echo $clients->id; ?>&ordertype=CART"
                                                   class="<?= btnclass("btn-info", "blue-soft") ?>">Order
                                                    Products</a>
                                            <?php }
                                            if ($sidebar->order_requalify == '1') {
                                                ?>
                                                <a href="<?php
                                                    echo $this->request->webroot; ?>orders/productSelection?client=<?php echo $clients->id; ?>&ordertype=QUA"
                                                   class="<?= btnclass("btn-info", "blue-soft") ?>">Re-Qualify</a>
                                            <?php }
                                        }

                                        if ($sidebar->orders_list == '1' && !isset($_GET["draft"]) && false) {//FALSE DISABLES THIS
                                            ?>
                                            <a href="<?php echo $this->request->webroot; ?>orders/orderslist/?client_id=<?php echo $clients->id; ?>"
                                               class="<?= btnclass("btn-info", "blue-soft") ?>">
                                                View Orders</a>
                                        <?php

                                        }
                                    ?>
                                                    <a href="<?php echo $this->request->webroot;?>profiles/index?filter_by_client=<?php echo $clients->id;?>" class="btn default btn-xs blue-soft-stripe">View
                                                Driver(s)</a>
                                                </td>
                                            </tr>

                                        <?php
                                        } // endif
                                    endforeach;

                                } else {
                                    echo '<TR><TD COLSPAN="6" ALIGN="CENTER">No ' . strtolower($settings->client) . 's exist</TD></TR>';
                                }
                            ?>
                            </tbody>
                        </table>

                    </div>
                </div>
                <div class="clearfix"></div>

                <div class="form-actions" style="height:75px;">
                    <div class="row">
                        <div class="col-md-12" align="right">
                            <div id="sample_2_paginate" class="dataTables_paginate paging_simple_numbers" style="margin-top:-10px;">
                                <ul class="pagination sorting">
                                    <?= $this->Paginator->prev('< ' . __($strings["dashboard_previous"])); ?>
                                    <?= $this->Paginator->numbers(); ?>
                                    <?= $this->Paginator->next(__($strings["dashboard_next"]) . ' >'); ?>
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>


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