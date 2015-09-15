<?php
    $profileID = $this->Session->read('Profile.id');
    if (strlen($profileID) == 0) {
        header("Location: " . $this->request->webroot);
    }
    $sidebar = $this->requestAction("settings/all_settings/" . $profileID . "/sidebar");
    $order_url = $this->requestAction("settings/getclienturl/" . $profileID . "/order");
    $document_url = $this->requestAction("settings/getclienturl/" . $profileID . "/document");
    if($debug && $language == "Debug"){ $Trans = " [Translated]"; } else {$Trans = "";}
    $ordertype = "MEE";
//comment
    if (isset($_GET["ordertype"])) {
        $ordertype = strtoupper($_GET["ordertype"]);
    }
?>

<div class="page-sidebar-wrapper">

    <div class="page-sidebar navbar-collapse collapse">
        <?php
            if ($this->request->session()->read('debug')) {
                echo "<span style ='color:red;'>" . __FILE__ . " #INC162</span>";
            }
        ?>
        <ul id="mainbar" class="<?php echo $settings->sidebar; ?>" data-keep-expanded="false" data-auto-scroll="true"
            data-slide-speed="200">

            <li class="sidebar-search-wrapper margin-top-20">

                <form class="sidebar-search " action="<?php echo $this->request->webroot . 'documents'; ?>"
                      method="get">
                    <a href="javascript:;" class="remove">
                        <i class="icon-close"></i>
                    </a>

                    <div class="input-group">
                        <input type="text" name="searchdoc" class="form-control"
                               placeholder="<?= $strings["dashboard_documentsearch"]; ?>">
							<span class="input-group-btn">
							<a href="javascript:;" class="btn submit"><i class="icon-magnifier"></i></a>
							</span>
                    </div>
                </form>
                <!-- END RESPONSIVE QUICK SEARCH FORM -->
            </li>
            <li class="start <?php echo ($this->request['controller'] == 'Dashboard') ? 'active open' : ''; ?>">
                <a href="<?php echo $this->request->webroot; ?>">
                    <i class="icon-home"></i>
                    <span class="title"><?= $strings["dashboard_dashboard"]; ?></span>
                    <span class="selected"></span>

                </a>

            </li>
            
            <li>
                <a href="<?php echo $this->request->webroot; ?>profiles/listall">
                    <i class="icon-user"></i>
                    <span class="title">My MEE profile</span>
                    <span class="selected"></span>

                </a>

            </li>
            
             <li>
                <a href="<?php echo $this->request->webroot; ?>">
                    <i class="fa fa-copy"></i>
                    <span class="title">My MEE orders</span>
                    <span class="selected"></span>

                </a>

            </li>
            
            <li class="">
                        <a href="<?php echo $this->request->webroot; ?>clients/listall">
                            <i class="icon-globe"></i>
                            <span class="title">My MEE Clients</span>
                            <?php echo ($this->request['controller'] == 'Clients') ? '<span class="selected"></span>' : ''; ?>
                            <span class="arrow "></span>
                        </a>
                        
                            <ul class="sub-menu">
                                
                                    <li <?php echo ($this->request['controller'] == 'Clients' && $this->request['action'] == 'index' && !isset($_GET["draft"])) ? 'class="active"' : ''; ?>>
                                        <a href="<?php echo $this->request->webroot; ?>clients">
                                            <i class="icon-list"></i>
                                            <?= $strings["index_listclients"]; ?></a>
                                    </li>
                               
                                
                                        <li <?php echo ($this->request['controller'] == 'Clients' && $this->request['action'] == 'add') ? 'class="active"' : ''; ?>>
                                            <a href="<?php echo $this->request->webroot; ?>clients/add">
                                                <i class="icon-plus"></i>
                                                <?= $strings["index_createclient"]; ?></a>
                                        </li>
                                        
                                        <li>
                                            <a href="<?php echo $this->request->webroot; ?>">
                                                <i class="icon-group"></i>
                                                My MEE drivers</a>
                                        </li>
                               
                            </ul>
                        
                    </li>
                    
            <li>
                <a href="<?php echo $this->request->webroot; ?>">
                    <i class="fa fa-edit"></i>
                    <span class="title">Tasks</span>
                    <span class="selected"></span>

                </a>

            </li>
            
            <li>
                <a href="<?php echo $this->request->webroot; ?>">
                    <i class="fa fa-bell"></i>
                    <span class="title">Help</span>
                    <span class="selected"></span>

                </a>

            </li>
            <li>
                <a href="<?php echo $this->request->webroot; ?>">
                    <i class="fa fa-envelope"></i>
                    <span class="title">Contact Us</span>
                    <span class="selected"></span>

                </a>

            </li>
            
            <li>
                <a href="<?php echo $this->request->webroot; ?>profiles/langswitch/<?php echo $this->request->session()->read('Profile.id'); ?>">
                    <i class="icon-user"></i> <?= $strings["langswitch"]; ?> </a>
            </li>
            
            

            <?php

            if ($sidebar->logo == '1') { ?>
                <li class="sidebar-toggler-wrapper">
                    <?php $logo1 = $this->requestAction('Logos/getlogo/1'); ?>
                    <div class="whitecenterdiv"><?= $strings["dashboard_servicedivision"]; ?></div>

                    <img src="<?php echo $this->request->webroot . 'img/logos/' . $logo1; ?>" class="secondary_logo"/>
                </li>
            <?php } ?>
        </ul>
        <!-- END SIDEBAR MENU -->
    </div>
</div>