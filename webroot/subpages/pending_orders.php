<div class="form-body">
    <div class="table-scrollable ">
        <table class="table table-condensed table-striped table-bordered table-hover dataTable no-footer">
            <thead>
            <tr class="sorting">
                <th><a href="<?= $this->request->webroot; ?>/orders/orderslist?sort=id&amp;direction=asc" class="desc">Order</a>
                </th>
                <th>
                    <a href="<?= $this->request->webroot; ?>/orders/orderslist?sort=orders.order_type&amp;direction=asc">Company
                        Name</a></th>
                <th><a href="<?= $this->request->webroot; ?>/orders/orderslist?sort=user_id&amp;direction=asc">Driver
                        Name</a></th>
                <th>
                    <a href="<?= $this->request->webroot; ?>/orders/orderslist?sort=complete&amp;direction=asc">Broker</a>
                </th>
                <th>
                    <a href="<?= $this->request->webroot; ?>/orders/orderslist?sort=client_id&amp;direction=asc">Ordered</a>
                </th>
                <th>Completed</th>
                <th>
                    <a href="<?= $this->request->webroot; ?>/orders/orderslist?sort=created&amp;direction=asc">Created</a>
                </th>
                <th class="actions">Actions</th>
                <!--th><a href="<?php echo $this->request->webroot; ?>/orders/orderslist?sort=bright_planet_html_binary&amp;direction=asc">Status</a></th-->
                <th><a href="<?= $this->request->webroot; ?>/orders/orderslist?sort=uploaded_for&amp;direction=asc">Results </a>
                </th>
            </tr>
            </thead>
            <tbody>
            <?php
                include_once("subpages/api.php");
                JSinclude($this, "assets/admin/pages/scripts/api.js");
                $class = "even";
                $orders = $Manager->paginate($Manager->enum_orders());
                foreach ($orders as $order) {
                    $companyname = $Manager->get_client($order->client_id);
                    if ($companyname) {
                        $companyname = $companyname->company_name;
                    }
                    $uploaded_for = $Manager->get_profile($order->uploaded_for);

                    ?>
                    <tr role="row" class="<?= $class; ?>">
                        <td><?= $order->id; ?></td>
                        <td style="min-width: 145px;"><?= $companyname; ?></td>
                        <td><?= formatname($uploaded_for); ?></td>
                        <td><a target="_blank" href="<?php echo $this->request->webroot; ?>profiles/view/888">John Smith</a></td>
                        <td><?= $order->created; ?></td>
                        <td>09/09/2015</td>

                        <td><font color="green">09/09/2015</font></td>
                        <td class="actions  util-btn-margin-bottom-5">
                            <a class="btn default btn-xs blue-soft-stripe"
                               href="<?php echo $this->request->webroot; ?>profiles/view">Score Card</a>
                            <a class="btn default btn-xs yellow-stripe"
                               href="<?php echo $this->request->webroot; ?>documents/add">Add Products</a>
                            <a href="#" class="btn default btn-xs green-soft-stripe">Save Documents</a>
                            <?php
                                if (!$order->approved) {
                                    echo '<A class="btn default btn-xs green-soft-stripe" onclick="return approve(' . $order->id . ');" ID="approve' . $order->id . '">Approve</a>';
                                }
                            ?>
                        </td>


                        <td valign="middle">




                            <?
                                if(true){
                                $radnom = rand(0, 7);
                                if ($radnom > 2) {
                                    ?>

                                    <span style="float:right;padding:4px;" class="label label-sm label-success"
                                          ID="status<?= $order->id; ?>"><?php
                                            if (!$order->approved) {
                                                echo "Pass";
                                            } else {
                                                echo "Pass";
                                            }
                                        ?></span>
                                <?
                                } else {
                                ?>

                                <span style="float:right;padding:4px;" class="label label-sm label-danger"
                                      ID="status<?= $order->id; ?>"><?php
                                        if ($order->approved) {
                                            echo "Fail";
                                        } else {
                                            echo "Fail";
                                        }
                                    ?></span>
                                <?
                            } }?>
                        </td>

                    </tr>
                    <?php
                    if ($class == "even") {
                        $class = "odd";
                    } else {
                        $class = "even";
                    }
                }
            ?>
            </tbody>
        </table>
        <SCRIPT>
            function approve(ID) {
                $.ajax({
                    url: "<?php echo $this->request->webroot;?>orders/ajaxhandler/approveorder",
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
        </SCRIPT>

    </div>
</div>