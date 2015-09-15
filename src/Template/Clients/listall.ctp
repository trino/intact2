<!-- BEGIN PAGE HEAD -->
<div class="page-head">
    <div class="container">
        <!-- BEGIN PAGE TITLE -->
        <div class="page-title">
            <h1>Clients
                <small>List All</small>
            </h1>
        </div>

    </div>
</div>
<!-- END PAGE HEAD -->
<!-- BEGIN PAGE CONTENT -->
<div class="page-content">


    <div class="container">
        <div class="row">
            <!--span style="color:red;">clients/listing.php #INC113</span-->
            <div class="col-md-12">
                <div class="portlet box">

                    <div class="portlet-body form">


                        <form align="right" class="form-actions" method="get"
                              action="<?php echo $this->request->webroot; ?>clients/search" style="border-top: 0;">


                            <input type="search" aria-controls="sample_1" value="" placeholder="Search Clients"
                                   name="search" class="form-control input-inline">
                            <button style="" class="btn btn-primary input-inline" type="submit">Search</button>

                        </form>


                        <div class="form-body">
                            <div class="table-scrollable ">
                                <table
                                    class="table table-hover  table-striped table-bordered table-hover dataTable no-footer">
                                    <thead>
                                    <tr class="sorting">
                                        <th width="220px">Logo</th>
                                        <th>
                                            <a href="<?php echo $this->request->webroot; ?>clients?sort=company_name&amp;direction=asc">Client</a>
                                        </th>

                                        <th class="actions">Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>


                                    <tr>
                                        <td align="center">

                                            <a href="<?php echo $this->request->webroot; ?>clients/edit/41?view">
                                                <img src="<?php echo $this->request->webroot; ?>img/logos/huron.jpg"
                                                     alt="" id="clientpic"
                                                     style="max-width:180px;max-height:50px;width: auto; height: auto;"
                                                     class="img-responsive"></a>
                                        </td>
                                        <td class="actions  util-btn-margin-bottom-5">
                                            <a href="<?php echo $this->request->webroot; ?>clients/edit/41?view">
                                                Huron Services Group</a></td>

                                        <td class="actions  util-btn-margin-bottom-5">

                                            <a href="<?php echo $this->request->webroot; ?>clients/edit/41?view"
                                               class="btn default btn-xs blue-soft-stripe">View</a>


                                            <a class="btn default btn-xs blue-soft-stripe"
                                               href="<?php echo $this->request->webroot; ?>clients/edit/41">Edit</a> <a
                                                class="btn default btn-xs red-stripe"
                                                onclick="return confirm('Are you sure you want to delete &quot;Huron Services Group&quot;?');"
                                                href="<?php echo $this->request->webroot; ?>clients/delete/41">Delete</a>

                                            <a class="btn default btn-xs blue-soft-stripe"
                                               href="<?php echo $this->request->webroot; ?>profiles/listall">View
                                                Driver(s)</a>
                                        </td>
                                    </tr>


                                    <tr>
                                        <td align="center">

                                            <a href="<?php echo $this->request->webroot; ?>clients/edit/38?view">
                                                <img src="<?php echo $this->request->webroot; ?>img/logos/revolution.jpg"
                                                     alt="" id="clientpic"
                                                     style="max-width:180px;max-height:50px;width: auto; height: auto;"
                                                     class="img-responsive"></a>
                                        </td>
                                        <td class="actions  util-btn-margin-bottom-5">
                                            <a href="<?php echo $this->request->webroot; ?>clients/edit/38?view">
                                                Revolution Staffing</a></td>

                                        <td class="actions  util-btn-margin-bottom-5">

                                            <a href="<?php echo $this->request->webroot; ?>clients/edit/38?view"
                                               class="btn default btn-xs blue-soft-stripe">View</a>


                                            <a class="btn default btn-xs blue-soft-stripe"
                                               href="<?php echo $this->request->webroot; ?>clients/edit/38">Edit</a> <a
                                                class="btn default btn-xs red-stripe"
                                                onclick="return confirm('Are you sure you want to delete &quot;Revolution Staffing&quot;?');"
                                                href="<?php echo $this->request->webroot; ?>clients/delete/38">Delete</a>

                                            <a class="btn default btn-xs blue-soft-stripe"
                                               href="<?php echo $this->request->webroot; ?>profiles/listall">View
                                                Driver(s)</a>
                                        </td>
                                    </tr>


                                    <tr>
                                        <td align="center">

                                            <a href="<?php echo $this->request->webroot; ?>clients/edit/37?view">
                                                <img src="<?php echo $this->request->webroot; ?>img/logos/patriot.jpg"
                                                     alt="" id="clientpic"
                                                     style="max-width:180px;max-height:50px;width: auto; height: auto;"
                                                     class="img-responsive"></a>
                                        </td>
                                        <td class="actions  util-btn-margin-bottom-5">
                                            <a href="<?php echo $this->request->webroot; ?>clients/edit/37?view">
                                                Patriot Source 1</a></td>

                                        <td class="actions  util-btn-margin-bottom-5">

                                            <a href="<?php echo $this->request->webroot; ?>clients/edit/37?view"
                                               class="btn default btn-xs blue-soft-stripe">View</a>


                                            <a class="btn default btn-xs blue-soft-stripe"
                                               href="<?php echo $this->request->webroot; ?>clients/edit/37">Edit</a> <a
                                                class="btn default btn-xs red-stripe"
                                                onclick="return confirm('Are you sure you want to delete &quot;Patriot Source 1&quot;?');"
                                                href="<?php echo $this->request->webroot; ?>clients/delete/37">Delete</a>

                                            <a class="btn default btn-xs blue-soft-stripe"
                                               href="<?php echo $this->request->webroot; ?>profiles/listall">View
                                                Driver(s)</a>
                                        </td>
                                    </tr>


                                    <tr>
                                        <td align="center">

                                            <a href="<?php echo $this->request->webroot; ?>clients/edit/30?view">
                                                <img src="<?php echo $this->request->webroot; ?>img/logos/erb.jpg"
                                                     alt="" id="clientpic"
                                                     style="max-width:180px;max-height:50px;width: auto; height: auto;"
                                                     class="img-responsive"></a>
                                        </td>
                                        <td class="actions  util-btn-margin-bottom-5">
                                            <a href="<?php echo $this->request->webroot; ?>clients/edit/30?view">
                                                Erb Transport </a></td>

                                        <td class="actions  util-btn-margin-bottom-5">

                                            <a href="<?php echo $this->request->webroot; ?>clients/edit/30?view"
                                               class="btn default btn-xs blue-soft-stripe">View</a>


                                            <a class="btn default btn-xs blue-soft-stripe"
                                               href="<?php echo $this->request->webroot; ?>clients/edit/30">Edit</a> <a
                                                class="btn default btn-xs red-stripe"
                                                onclick="return confirm('Are you sure you want to delete &quot;Erb Transport &quot;?');"
                                                href="<?php echo $this->request->webroot; ?>clients/delete/30">Delete</a>

                                            <a class="btn default btn-xs blue-soft-stripe"
                                               href="<?php echo $this->request->webroot; ?>profiles/listall">View
                                                Driver(s)</a>
                                        </td>
                                    </tr>


                                    <tr>
                                        <td align="center">

                                            <a href="<?php echo $this->request->webroot; ?>clients/edit/26?view">
                                                <img src="<?php echo $this->request->webroot; ?>img/logos/gordon.png"
                                                     alt="" id="clientpic"
                                                     style="max-width:180px;max-height:50px;width: auto; height: auto;"
                                                     class="img-responsive"></a>
                                        </td>
                                        <td class="actions  util-btn-margin-bottom-5">
                                            <a href="<?php echo $this->request->webroot; ?>clients/edit/26?view">
                                                Gordon Food Service</a></td>

                                        <td class="actions  util-btn-margin-bottom-5">

                                            <a href="<?php echo $this->request->webroot; ?>clients/edit/26?view"
                                               class="btn default btn-xs blue-soft-stripe">View</a>


                                            <a class="btn default btn-xs blue-soft-stripe"
                                               href="<?php echo $this->request->webroot; ?>clients/edit/26">Edit</a> <a
                                                class="btn default btn-xs red-stripe"
                                                onclick="return confirm('Are you sure you want to delete &quot;Gordon Food Service&quot;?');"
                                                href="<?php echo $this->request->webroot; ?>clients/delete/26">Delete</a>

                                            <a class="btn default btn-xs blue-soft-stripe"
                                               href="<?php echo $this->request->webroot; ?>profiles/listall">View
                                                Driver(s)</a>
                                        </td>
                                    </tr>



                                    <tr>
                                        <td align="center">

                                            <a href="<?php echo $this->request->webroot; ?>clients/edit/17?view">
                                                <img src="<?php echo $this->request->webroot; ?>img/logos/challenger.png"
                                                     alt="" id="clientpic"
                                                     style="max-width:180px;max-height:50px;width: auto; height: auto;"
                                                     class="img-responsive"></a>
                                        </td>
                                        <td class="actions  util-btn-margin-bottom-5">
                                            <a href="<?php echo $this->request->webroot; ?>clients/edit/17?view">
                                                Challenger Motor Freight </a></td>

                                        <td class="actions  util-btn-margin-bottom-5">

                                            <a href="<?php echo $this->request->webroot; ?>clients/edit/17?view"
                                               class="btn default btn-xs blue-soft-stripe">View</a>


                                            <a class="btn default btn-xs blue-soft-stripe"
                                               href="<?php echo $this->request->webroot; ?>clients/edit/17">Edit</a> <a
                                                class="btn default btn-xs red-stripe"
                                                onclick="return confirm('Are you sure you want to delete &quot;Challenger Motor Freight &quot;?');"
                                                href="<?php echo $this->request->webroot; ?>clients/delete/17">Delete</a>

                                            <a class="btn default btn-xs blue-soft-stripe"
                                               href="<?php echo $this->request->webroot; ?>profiles/listall">View
                                                Driver(s)</a>
                                        </td>
                                    </tr>

                                    </tbody>
                                </table>

                            </div>
                        </div>
                        <div class="clearfix"></div>

                        <div style="height:75px;" class="form-actions">
                            <div class="row">
                                <div align="right" class="col-md-12">

                                    <div style="margin-top:-10px;" class="dataTables_paginate paging_simple_numbers"
                                         id="sample_2_paginate">

                                        <ul class="pagination sorting">

                                            <li class="prev disabled"><a href="">&lt; Previous</a></li>
                                            <li class="next disabled"><a href="">Next &gt;</a></li>
                                        </ul>

                                    </div>
                                </div>
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

        });
    })
</script>   