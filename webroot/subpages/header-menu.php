<?php
    $settings = $this->requestAction('settings/get_settings');
    $debug = $this->request->session()->read('debug');
    include_once('subpages/api.php');
    $language = $this->request->session()->read('Profile.language');
    $strings = CacheTranslations($language, array("langswitch", "orders_create"), $settings);//,$registry);
?>

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
                <?php if ($this->request->session()->read('Profile.id')) { ?>
                    <li class="active">
                        <a href="<?php echo $this->request->webroot; ?>"><?= $strings["dashboard_dashboard"]; ?></a>
                    </li>


                    <li class="menu-dropdown classic-menu-dropdown ">
                        <a data-hover="megamenu-dropdown" data-close-others="true" data-toggle="dropdown"
                           href="javascript:;">
                            My Companies <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu pull-left">
                            <li class="">
                                <a href="<?php echo $this->request->webroot; ?>clients"><i class="icon-list"></i>
                                    <?= $strings["index_listclients"]; ?></a>
                            </li>
                            <li class="">
                                <a href="<?php echo $this->request->webroot; ?>clients/add"><i class="icon-plus"></i>
                                    <?= $strings["index_createclients"]; ?></a>
                            </li>

                            <li class="">
                                <a href="<?php echo $this->request->webroot; ?>profiles/send_application"><i class="icon-envelope"></i>
                                    <?= $strings["index_sendapplication"]; ?></a>
                            </li>

                        </ul>
                    </li>



                    <li class="menu-dropdown classic-menu-dropdown ">
                        <a data-hover="megamenu-dropdown" data-close-others="true" data-toggle="dropdown"
                           href="javascript:;">
                            My Drivers <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu pull-left">
                            <li class="">

                                <a href="<?php echo $this->request->webroot; ?>profiles"><i
                                        class="icon-list"></i> <?= $strings["index_listprofiles"]; ?></a>

                            </li>
                            <li class="">
                                <a href="<?php echo $this->request->webroot; ?>profiles/add"><i class="icon-plus"></i>
                                    <?= $strings["index_createprofile"]; ?></a>

                            </li>


                            <li class="">
                                <a href="<?php echo $this->request->webroot; ?>profiles/send_application"><i class="icon-envelope"></i>
                                    <?= $strings["index_sendapplication"]; ?></a>
                            </li>
                        </ul>
                    </li>



                    <li class="menu-dropdown classic-menu-dropdown ">
                        <a data-hover="megamenu-dropdown" data-close-others="true" data-toggle="dropdown"
                           href="javascript:;">
                            My Orders <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu pull-left">
                            <li class="">
                                <a href="<?php echo $this->request->webroot; ?>profiles/allorders"><i
                                        class="icon-list"></i> <?= $strings["index_listorders"]; ?></a>
                            </li>
                            <li class="">
                                <a href="<?php echo $this->request->webroot; ?>orders/buy_products"><i class="icon-plus"></i>
                                    <?= $strings["orders_create"]; ?></a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu-dropdown classic-menu-dropdown ">
                        <a data-hover="megamenu-dropdown" data-close-others="true" data-toggle="dropdown"
                           href="javascript:;">
                            My Documents <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu pull-left">
                            <li class="">
                                <a href="<?php echo $this->request->webroot; ?>documents/index"><i
                                        class="icon-list"></i> <?= $strings["index_listdocuments"]; ?></a>
                            </li>
                            <li class="">
                                <a href="<?php echo $this->request->webroot; ?>documents/add"><i class="icon-plus"></i>
                                    <?= $strings["index_createdocument"]; ?></a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu-dropdown classic-menu-dropdown ">
                        <a data-hover="megamenu-dropdown" data-close-others="true" data-toggle="dropdown"
                           href="javascript:;">
                            More <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu pull-left">
                            <li class="">

                                <a href="<?php echo $this->request->webroot; ?>tasks/calender"><i class="fa fa-edit"></i> <?= $strings["index_tasks"]; ?></a>

                            </li>
                            <li class="">
                                <a href="<?php echo $this->request->webroot;?>pages/view/help"><i class="fa fa-bell"></i> Help</a>

                            </li>
                            <li class="">
                                <a href="<?php echo $this->request->webroot; ?>pages/contact"><i class="fa fa-envelope"></i> Contact Us</a>
                            </li>

                            <li class="">
                                <a href="<?php echo $this->request->webroot; ?>profiles/langswitch/<?php echo $this->request->session()->read('Profile.id'); ?>">
                                    <i class="icon-user"></i> <?= $strings["langswitch"]; ?></a>
                            </li>


                        </ul>
                    </li>
                <?php } ?>
            </ul>

        </div>
        <!-- END MEGA MENU -->
    </div>
</div>