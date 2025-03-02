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

    
<!-- BEGIN PAGE HEAD -->
	<div class="page-head">
		<div class="container">
			<!-- BEGIN PAGE TITLE -->
			<div class="page-title">
				<h1>Profiles <small>List All</small></h1>
			</div>
			
		</div>
	</div>
	<!-- END PAGE HEAD -->
	<!-- BEGIN PAGE CONTENT -->
	<div class="page-content">
    
    
            <div class="container">
            <div class="row">  



    <div class="col-md-12">


        <div class="portlet box">
            


            <div class="portlet-body form">


                <div style="margin-top:0;margin-bottom:0;" class="form-actions top chat-form" >
                    
                    <div class="btn-set" style="float:right !important;">
                        <form method="get" action="<?php echo $this->request->webroot;?>profiles/index" >
                            

                          

                                                                <select name="filter_by_client" style="" class="form-control showprodivision input-inline">
                                        <option value="">Client</option>
                                                                                            <option value="17">Challenger Motor Freight </option>
                                                                                                    <option value="30">Erb Transport </option>
                                                                                                    <option value="26">Gordon Food Service</option>
                                                                                                    <option value="41">Huron Services Group</option>
                                                                                                    <option value="37">Patriot Source 1</option>
                                                                                                    <option value="38">Revolution Staffing</option>
                                                                                                    <option value="25">Test Dummy</option>
                                                                                    </select>

                                
                            <input type="search" aria-controls="sample_1" value="" placeholder="Search for Profile" name="searchprofile" class="form-control input-inline">
                            <button class="btn btn-primary input-inline" type="submit">Search</button>
                        </form>
                    </div>
                </div>

                <div class="form-body">
                    <div class="table-scrollable">

                        <table class="table table-condensed  table-striped table-bordered table-hover dataTable no-footer">
                            <thead>
                            <tr class="sorting">
                                <th><a href="<?php echo $this->request->webroot;?>profiles?sort=id&amp;direction=asc" class="desc">ID</a></th>
                                <th style="width:7px;"><a href="<?php echo $this->request->webroot;?>profiles?sort=image&amp;direction=asc">Image</a></th>
                                
                                <!--th><a href="<?php echo $this->request->webroot;?>profiles?sort=email&amp;direction=asc">Email</a></th-->
                                <th><a href="<?php echo $this->request->webroot;?>profiles?sort=fname&amp;direction=asc">Name</a></th>
                                

                                <!--th><a href="<?php echo $this->request->webroot;?>profiles?sort=lname&amp;direction=asc">Last Name</a></th-->
                                <th>Assigned to </th>
                                <th>Actions</th>

                            </tr>
                            </thead>
                            <tbody>
                            
                                    <tr role="row" class="even">
                                        <td>888</td>
                                        <td><a href="<?php echo $this->request->webroot;?>profiles/view/888">
                                                        <img alt="" class="img-responsive" src="<?php echo $this->request->webroot;?>img/profile/default.png" style="width:40px;">
                                                    </a>
                                                
                                        </td>
                         

                                        <td>Beverly Hills</td>


                                        <td><a target="_blank" href="<?php echo $this->request->webroot;?>clients/edit/41?view">Huron Services Group</a></td>
                                           <td class="actions  util-btn-margin-bottom-5">
                                            <a class="btn default btn-xs blue-stripe" href="<?php echo $this->request->webroot;?>profiles/edit/887">Edit</a>
                                            <a class="btn default btn-xs blue-soft-stripe" href="<?php echo $this->request->webroot;?>profiles/broker_view">View Scorecard</a>
                                            <a class="btn default btn-xs red-stripe" onclick="return confirm('Are you sure you want to delete &quot;Owner_Operator_887&quot;?');" href="<?php echo $this->request->webroot;?>profiles/delete/887">Delete</a>
                                            
                                        </td>
                                    </tr>

                                
                                    <tr role="row" class="odd">
                                        <td>887</td>
                                        <td>                                                    <a href="<?php echo $this->request->webroot;?>profiles/view/887">
                                                        <img alt="" class="img-responsive" src="<?php echo $this->request->webroot;?>img/profile/default.png" style="width:40px;">
                                                    </a>
                                                
                                        </td>
                         

                                        <td>Beverly Hills</td>


                                        <td><a target="_blank" href="<?php echo $this->request->webroot;?>clients/edit/41?view">Huron Services Group</a></td>
                                        <td class="actions  util-btn-margin-bottom-5">
                                            <a class="btn default btn-xs blue-stripe" href="<?php echo $this->request->webroot;?>profiles/edit/887">Edit</a>
                                            <a class="btn default btn-xs blue-soft-stripe" href="<?php echo $this->request->webroot;?>profiles/broker_view">View Scorecard</a>
                                            <a class="btn default btn-xs red-stripe" onclick="return confirm('Are you sure you want to delete &quot;Owner_Operator_887&quot;?');" href="<?php echo $this->request->webroot;?>profiles/delete/887">Delete</a>
                                            
                                        </td>
                                    </tr>

                                
                                    <tr role="row" class="even">
                                        <td>886</td>
                                        <td>                                                    <a href="<?php echo $this->request->webroot;?>profiles/view/886">
                                                        <img alt="" class="img-responsive" src="<?php echo $this->request->webroot;?>img/profile/default.png" style="width:40px;">
                                                    </a>
                                                
                                        </td>
                         

                                        <td>Beverly Hills</td>


                                        <td><a target="_blank" href="<?php echo $this->request->webroot;?>clients/edit/41?view">Huron Services Group</a></td>
                                           <td class="actions  util-btn-margin-bottom-5">
                                            <a class="btn default btn-xs blue-stripe" href="<?php echo $this->request->webroot;?>profiles/edit/887">Edit</a>
                                            <a class="btn default btn-xs blue-soft-stripe" href="<?php echo $this->request->webroot;?>profiles/broker_view">View Scorecard</a>
                                            <a class="btn default btn-xs red-stripe" onclick="return confirm('Are you sure you want to delete &quot;Owner_Operator_887&quot;?');" href="<?php echo $this->request->webroot;?>profiles/delete/887">Delete</a>
                                            
                                        </td>
                                    </tr>

                                
                                    <tr role="row" class="odd">
                                        <td>885</td>
                                        <td>                                                    <a href="<?php echo $this->request->webroot;?>profiles/view/885">
                                                        <img alt="" class="img-responsive" src="<?php echo $this->request->webroot;?>img/profile/default.png" style="width:40px;">
                                                    </a>
                                                
                                        </td>
                         

                                        <td>Beverly Hills</td>


                                        <td><a target="_blank" href="<?php echo $this->request->webroot;?>clients/edit/41?view">Huron Services Group</a></td>
                                           <td class="actions  util-btn-margin-bottom-5">
                                            <a class="btn default btn-xs blue-stripe" href="<?php echo $this->request->webroot;?>profiles/edit/887">Edit</a>
                                            <a class="btn default btn-xs blue-soft-stripe" href="<?php echo $this->request->webroot;?>profiles/broker_view">View Scorecard</a>
                                            <a class="btn default btn-xs red-stripe" onclick="return confirm('Are you sure you want to delete &quot;Owner_Operator_887&quot;?');" href="<?php echo $this->request->webroot;?>profiles/delete/887">Delete</a>
                                            
                                        </td>
                                    </tr>

                                
                                    <tr role="row" class="even">
                                        <td>884</td>
                                        <td>                                                    <a href="<?php echo $this->request->webroot;?>profiles/view/884">
                                                        <img alt="" class="img-responsive" src="<?php echo $this->request->webroot;?>img/profile/default.png" style="width:40px;">
                                                    </a>
                                                
                                        </td>
                         

                                        <td>Beverly Hills</td>


                                        <td><a target="_blank" href="<?php echo $this->request->webroot;?>clients/edit/41?view">Huron Services Group</a></td>
                                           <td class="actions  util-btn-margin-bottom-5">
                                            <a class="btn default btn-xs blue-stripe" href="<?php echo $this->request->webroot;?>profiles/edit/887">Edit</a>
                                            <a class="btn default btn-xs blue-soft-stripe" href="<?php echo $this->request->webroot;?>profiles/broker_view">View Scorecard</a>
                                            <a class="btn default btn-xs red-stripe" onclick="return confirm('Are you sure you want to delete &quot;Owner_Operator_887&quot;?');" href="<?php echo $this->request->webroot;?>profiles/delete/887">Delete</a>
                                            
                                        </td>
                                    </tr>

                                
                                    <tr role="row" class="odd">
                                        <td>883</td>
                                        <td>                                                    <a href="<?php echo $this->request->webroot;?>profiles/view/883">
                                                        <img alt="" class="img-responsive" src="<?php echo $this->request->webroot;?>img/profile/default.png" style="width:40px;">
                                                    </a>
                                                
                                        </td>
                         

                                        <td>3 3</td>


                                        <td><a target="_blank" href="<?php echo $this->request->webroot;?>clients/edit/26?view">Gordon Food Service</a></td>
                                           <td class="actions  util-btn-margin-bottom-5">
                                            <a class="btn default btn-xs blue-stripe" href="<?php echo $this->request->webroot;?>profiles/edit/887">Edit</a>
                                            <a class="btn default btn-xs blue-soft-stripe" href="<?php echo $this->request->webroot;?>profiles/broker_view">View Scorecard</a>
                                            <a class="btn default btn-xs red-stripe" onclick="return confirm('Are you sure you want to delete &quot;Owner_Operator_887&quot;?');" href="<?php echo $this->request->webroot;?>profiles/delete/887">Delete</a>
                                            
                                        </td>
                                    </tr>

                                
                                    <tr role="row" class="even">
                                        <td>882</td>
                                        <td>                                                    <a href="<?php echo $this->request->webroot;?>profiles/view/882">
                                                        <img alt="" class="img-responsive" src="<?php echo $this->request->webroot;?>img/profile/default.png" style="width:40px;">
                                                    </a>
                                                
                                        </td>
                         

                                        <td>Beverly Hills</td>


                                        <td><a target="_blank" href="<?php echo $this->request->webroot;?>clients/edit/26?view">Gordon Food Service</a></td>
                                           <td class="actions  util-btn-margin-bottom-5">
                                            <a class="btn default btn-xs blue-stripe" href="<?php echo $this->request->webroot;?>profiles/edit/887">Edit</a>
                                            <a class="btn default btn-xs blue-soft-stripe" href="<?php echo $this->request->webroot;?>profiles/broker_view">View Scorecard</a>
                                            <a class="btn default btn-xs red-stripe" onclick="return confirm('Are you sure you want to delete &quot;Owner_Operator_887&quot;?');" href="<?php echo $this->request->webroot;?>profiles/delete/887">Delete</a>
                                            
                                        </td>
                                    </tr>

                                
                                    <tr role="row" class="odd">
                                        <td>881</td>
                                        <td>                                                    <a href="<?php echo $this->request->webroot;?>profiles/view/881">
                                                        <img alt="" class="img-responsive" src="<?php echo $this->request->webroot;?>img/profile/default.png" style="width:40px;">
                                                    </a>
                                                
                                        </td>
                         

                                        <td>Beverly Hills</td>


                                        <td><a target="_blank" href="<?php echo $this->request->webroot;?>clients/edit/26?view">Gordon Food Service</a></td>
                                           <td class="actions  util-btn-margin-bottom-5">
                                            <a class="btn default btn-xs blue-stripe" href="<?php echo $this->request->webroot;?>profiles/edit/887">Edit</a>
                                            <a class="btn default btn-xs blue-soft-stripe" href="<?php echo $this->request->webroot;?>profiles/broker_view">View Scorecard</a>
                                            <a class="btn default btn-xs red-stripe" onclick="return confirm('Are you sure you want to delete &quot;Owner_Operator_887&quot;?');" href="<?php echo $this->request->webroot;?>profiles/delete/887">Delete</a>
                                            
                                        </td>
                                    </tr>

                                
                                    <tr role="row" class="even">
                                        <td>880</td>
                                        <td>                                                    <a href="<?php echo $this->request->webroot;?>profiles/view/880">
                                                        <img alt="" class="img-responsive" src="<?php echo $this->request->webroot;?>img/profile/default.png" style="width:40px;">
                                                    </a>
                                                
                                        </td>
                         

                                        <td>Beverly Hills</td>


                                        <td><a target="_blank" href="<?php echo $this->request->webroot;?>clients/edit/26?view">Gordon Food Service</a></td>
                                           <td class="actions  util-btn-margin-bottom-5">
                                            <a class="btn default btn-xs blue-stripe" href="<?php echo $this->request->webroot;?>profiles/edit/887">Edit</a>
                                            <a class="btn default btn-xs blue-soft-stripe" href="<?php echo $this->request->webroot;?>profiles/broker_view">View Scorecard</a>
                                            <a class="btn default btn-xs red-stripe" onclick="return confirm('Are you sure you want to delete &quot;Owner_Operator_887&quot;?');" href="<?php echo $this->request->webroot;?>profiles/delete/887">Delete</a>
                                            
                                        </td>
                                    </tr>

                                
                                    <tr role="row" class="odd">
                                        <td>879</td>
                                        <td>                                                    <a href="<?php echo $this->request->webroot;?>profiles/view/879">
                                                        <img alt="" class="img-responsive" src="<?php echo $this->request->webroot;?>img/profile/default.png" style="width:40px;">
                                                    </a>
                                                
                                        </td>
                         

                                        <td>enums_porofile_types@!sdf.com enums_porofile_types@!sdf.com</td>


                                        <td><a target="_blank" href="<?php echo $this->request->webroot;?>clients/edit/17?view">Challenger Motor Freight </a></td>
                                           <td class="actions  util-btn-margin-bottom-5">
                                            <a class="btn default btn-xs blue-stripe" href="<?php echo $this->request->webroot;?>profiles/edit/887">Edit</a>
                                            <a class="btn default btn-xs blue-soft-stripe" href="<?php echo $this->request->webroot;?>profiles/broker_view">View Scorecard</a>
                                            <a class="btn default btn-xs red-stripe" onclick="return confirm('Are you sure you want to delete &quot;Owner_Operator_887&quot;?');" href="<?php echo $this->request->webroot;?>profiles/delete/887">Delete</a>
                                            
                                        </td>
                                    </tr>

                                
                                    <tr role="row" class="even">
                                        <td>878</td>
                                        <td>                                                    <a href="<?php echo $this->request->webroot;?>profiles/view/878">
                                                        <img alt="" class="img-responsive" src="<?php echo $this->request->webroot;?>img/profile/default.png" style="width:40px;">
                                                    </a>
                                                
                                        </td>
                         

                                        <td>enum_porofile_types enum_porofile_types</td>


                                        <td><a target="_blank" href="<?php echo $this->request->webroot;?>clients/edit/17?view">Challenger Motor Freight </a></td>
                                           <td class="actions  util-btn-margin-bottom-5">
                                            <a class="btn default btn-xs blue-stripe" href="<?php echo $this->request->webroot;?>profiles/edit/887">Edit</a>
                                            <a class="btn default btn-xs blue-soft-stripe" href="<?php echo $this->request->webroot;?>profiles/broker_view">View Scorecard</a>
                                            <a class="btn default btn-xs red-stripe" onclick="return confirm('Are you sure you want to delete &quot;Owner_Operator_887&quot;?');" href="<?php echo $this->request->webroot;?>profiles/delete/887">Delete</a>
                                            
                                        </td>
                                    </tr>

                                
                                    <tr role="row" class="odd">
                                        <td>877</td>
                                        <td>                                                    <a href="<?php echo $this->request->webroot;?>profiles/view/877">
                                                        <img alt="" class="img-responsive" src="<?php echo $this->request->webroot;?>img/profile/default.png" style="width:40px;">
                                                    </a>
                                                
                                        </td>
                         

                                        <td>enum_porofile_types enum_porofile_types</td>


                                        <td><a target="_blank" href="<?php echo $this->request->webroot;?>clients/edit/17?view">Challenger Motor Freight </a></td>
                                           <td class="actions  util-btn-margin-bottom-5">
                                            <a class="btn default btn-xs blue-stripe" href="<?php echo $this->request->webroot;?>profiles/edit/887">Edit</a>
                                            <a class="btn default btn-xs blue-soft-stripe" href="<?php echo $this->request->webroot;?>profiles/broker_view">View Scorecard</a>
                                            <a class="btn default btn-xs red-stripe" onclick="return confirm('Are you sure you want to delete &quot;Owner_Operator_887&quot;?');" href="<?php echo $this->request->webroot;?>profiles/delete/887">Delete</a>
                                            
                                        </td>
                                    </tr>

                                
                                    <tr role="row" class="even">
                                        <td>876</td>
                                        <td>                                                    <a href="<?php echo $this->request->webroot;?>profiles/view/876">
                                                        <img alt="" class="img-responsive" src="<?php echo $this->request->webroot;?>img/profile/default.png" style="width:40px;">
                                                    </a>
                                                
                                        </td>
                         

                                        <td>adminasd@asd.com adminasd@asd.com</td>


                                        <td></td>
                                           <td class="actions  util-btn-margin-bottom-5">
                                            <a class="btn default btn-xs blue-stripe" href="<?php echo $this->request->webroot;?>profiles/edit/887">Edit</a>
                                            <a class="btn default btn-xs blue-soft-stripe" href="<?php echo $this->request->webroot;?>profiles/broker_view">View Scorecard</a>
                                            <a class="btn default btn-xs red-stripe" onclick="return confirm('Are you sure you want to delete &quot;Owner_Operator_887&quot;?');" href="<?php echo $this->request->webroot;?>profiles/delete/887">Delete</a>
                                            
                                        </td>
                                    </tr>

                                
                                    <tr role="row" class="odd">
                                        <td>875</td>
                                        <td>                                                    <a href="<?php echo $this->request->webroot;?>profiles/view/875">
                                                        <img alt="" class="img-responsive" src="<?php echo $this->request->webroot;?>img/profile/default.png" style="width:40px;">
                                                    </a>
                                                
                                        </td>
                         

                                        <td>adminasd@asd.com adminasd@asd.com</td>


                                        <td></td>
                                           <td class="actions  util-btn-margin-bottom-5">
                                            <a class="btn default btn-xs blue-stripe" href="<?php echo $this->request->webroot;?>profiles/edit/887">Edit</a>
                                            <a class="btn default btn-xs blue-soft-stripe" href="<?php echo $this->request->webroot;?>profiles/broker_view">View Scorecard</a>
                                            <a class="btn default btn-xs red-stripe" onclick="return confirm('Are you sure you want to delete &quot;Owner_Operator_887&quot;?');" href="<?php echo $this->request->webroot;?>profiles/delete/887">Delete</a>
                                            
                                        </td>
                                    </tr>

                                
                                    <tr role="row" class="even">
                                        <td>874</td>
                                        <td>                                                    <a href="<?php echo $this->request->webroot;?>profiles/view/874">
                                                        <img alt="" class="img-responsive" src="<?php echo $this->request->webroot;?>img/profile/default.png" style="width:40px;">
                                                    </a>
                                                
                                        </td>
                         

                                        <td>Xavier Clifford</td>


                                        <td><a target="_blank" href="<?php echo $this->request->webroot;?>clients/edit/17?view">Challenger Motor Freight </a></td>
                                           <td class="actions  util-btn-margin-bottom-5">
                                            <a class="btn default btn-xs blue-stripe" href="<?php echo $this->request->webroot;?>profiles/edit/887">Edit</a>
                                            <a class="btn default btn-xs blue-soft-stripe" href="<?php echo $this->request->webroot;?>profiles/broker_view">View Scorecard</a>
                                            <a class="btn default btn-xs red-stripe" onclick="return confirm('Are you sure you want to delete &quot;Owner_Operator_887&quot;?');" href="<?php echo $this->request->webroot;?>profiles/delete/887">Delete</a>
                                            
                                        </td>
                                    </tr>

                                
                                    <tr role="row" class="odd">
                                        <td>873</td>
                                        <td>                                                    <a href="<?php echo $this->request->webroot;?>profiles/view/873">
                                                        <img alt="" class="img-responsive" src="<?php echo $this->request->webroot;?>img/profile/default.png" style="width:40px;">
                                                    </a>
                                                
                                        </td>
                         

                                        <td>Dale Evans</td>


                                        <td><a target="_blank" href="<?php echo $this->request->webroot;?>clients/edit/17?view">Challenger Motor Freight </a></td>
                                           <td class="actions  util-btn-margin-bottom-5">
                                            <a class="btn default btn-xs blue-stripe" href="<?php echo $this->request->webroot;?>profiles/edit/887">Edit</a>
                                            <a class="btn default btn-xs blue-soft-stripe" href="<?php echo $this->request->webroot;?>profiles/broker_view">View Scorecard</a>
                                            <a class="btn default btn-xs red-stripe" onclick="return confirm('Are you sure you want to delete &quot;Owner_Operator_887&quot;?');" href="<?php echo $this->request->webroot;?>profiles/delete/887">Delete</a>
                                            
                                        </td>
                                    </tr>

                                
                                    <tr role="row" class="even">
                                        <td>870</td>
                                        <td>                                                    <a href="<?php echo $this->request->webroot;?>profiles/view/870">
                                                        <img alt="" class="img-responsive" src="<?php echo $this->request->webroot;?>img/profile/default.png" style="width:40px;">
                                                    </a>
                                                
                                        </td>
                         

                                        <td>Shawn  Whilby</td>


                                        <td><a target="_blank" href="<?php echo $this->request->webroot;?>clients/edit/17?view">Challenger Motor Freight </a></td>
                                           <td class="actions  util-btn-margin-bottom-5">
                                            <a class="btn default btn-xs blue-stripe" href="<?php echo $this->request->webroot;?>profiles/edit/887">Edit</a>
                                            <a class="btn default btn-xs blue-soft-stripe" href="<?php echo $this->request->webroot;?>profiles/broker_view">View Scorecard</a>
                                            <a class="btn default btn-xs red-stripe" onclick="return confirm('Are you sure you want to delete &quot;Owner_Operator_887&quot;?');" href="<?php echo $this->request->webroot;?>profiles/delete/887">Delete</a>
                                            
                                        </td>
                                    </tr>

                                
                                    <tr role="row" class="odd">
                                        <td>869</td>
                                        <td>                                                    <a href="<?php echo $this->request->webroot;?>profiles/view/869">
                                                        <img alt="" class="img-responsive" src="<?php echo $this->request->webroot;?>img/profile/default.png" style="width:40px;">
                                                    </a>
                                                
                                        </td>
                         

                                        <td>Parminder Sidhu</td>


                                        <td><a target="_blank" href="<?php echo $this->request->webroot;?>clients/edit/17?view">Challenger Motor Freight </a></td>
                                           <td class="actions  util-btn-margin-bottom-5">
                                            <a class="btn default btn-xs blue-stripe" href="<?php echo $this->request->webroot;?>profiles/edit/887">Edit</a>
                                            <a class="btn default btn-xs blue-soft-stripe" href="<?php echo $this->request->webroot;?>profiles/broker_view">View Scorecard</a>
                                            <a class="btn default btn-xs red-stripe" onclick="return confirm('Are you sure you want to delete &quot;Owner_Operator_887&quot;?');" href="<?php echo $this->request->webroot;?>profiles/delete/887">Delete</a>
                                            
                                        </td>
                                    </tr>

                                
                                    <tr role="row" class="even">
                                        <td>868</td>
                                        <td>                                                    <a href="<?php echo $this->request->webroot;?>profiles/view/868">
                                                        <img alt="" class="img-responsive" src="<?php echo $this->request->webroot;?>img/profile/default.png" style="width:40px;">
                                                    </a>
                                                
                                        </td>
                         

                                        <td>David Uzbalis</td>


                                        <td><a target="_blank" href="<?php echo $this->request->webroot;?>clients/edit/17?view">Challenger Motor Freight </a></td>
                                           <td class="actions  util-btn-margin-bottom-5">
                                            <a class="btn default btn-xs blue-stripe" href="<?php echo $this->request->webroot;?>profiles/edit/887">Edit</a>
                                            <a class="btn default btn-xs blue-soft-stripe" href="<?php echo $this->request->webroot;?>profiles/broker_view">View Scorecard</a>
                                            <a class="btn default btn-xs red-stripe" onclick="return confirm('Are you sure you want to delete &quot;Owner_Operator_887&quot;?');" href="<?php echo $this->request->webroot;?>profiles/delete/887">Delete</a>
                                            
                                        </td>
                                    </tr>

                                
                                    <tr role="row" class="odd">
                                        <td>867</td>
                                        <td>                                                    <a href="<?php echo $this->request->webroot;?>profiles/view/867">
                                                        <img alt="" class="img-responsive" src="<?php echo $this->request->webroot;?>img/profile/default.png" style="width:40px;">
                                                    </a>
                                                
                                        </td>
                         

                                        <td>Mitchell Benoit</td>


                                        <td><a target="_blank" href="<?php echo $this->request->webroot;?>clients/edit/26?view">Gordon Food Service</a></td>
                                           <td class="actions  util-btn-margin-bottom-5">
                                            <a class="btn default btn-xs blue-stripe" href="<?php echo $this->request->webroot;?>profiles/edit/887">Edit</a>
                                            <a class="btn default btn-xs blue-soft-stripe" href="<?php echo $this->request->webroot;?>profiles/broker_view">View Scorecard</a>
                                            <a class="btn default btn-xs red-stripe" onclick="return confirm('Are you sure you want to delete &quot;Owner_Operator_887&quot;?');" href="<?php echo $this->request->webroot;?>profiles/delete/887">Delete</a>
                                            
                                        </td>
                                    </tr>

                                                            </tbody>
                        </table>
                    </div>
                </div>

                <div style="height:75px;" class="form-actions">
                    <div class="row">
                    <div class="col-md-12">
                        <div align="left" class="col-md-6">
                                                </div>
                        <div align="right" class="col-md-6">
                                                        <div align="right" style="margin-top:-10px;" class="dataTables_paginate paging_simple_numbers" id="sample_2_paginate">
                                <ul class="pagination sorting">
                                    <li class="prev disabled"><a href="">&lt; Previous</a></li>                                    <li class="active"><a href="">1</a></li><li><a href="<?php echo $this->request->webroot;?>profiles?page=2&amp;sort=Profiles.id&amp;direction=DESC">2</a></li><li><a href="<?php echo $this->request->webroot;?>profiles?page=3&amp;sort=Profiles.id&amp;direction=DESC">3</a></li><li><a href="<?php echo $this->request->webroot;?>profiles?page=4&amp;sort=Profiles.id&amp;direction=DESC">4</a></li><li><a href="<?php echo $this->request->webroot;?>profiles?page=5&amp;sort=Profiles.id&amp;direction=DESC">5</a></li><li><a href="<?php echo $this->request->webroot;?>profiles?page=6&amp;sort=Profiles.id&amp;direction=DESC">6</a></li><li><a href="<?php echo $this->request->webroot;?>profiles?page=7&amp;sort=Profiles.id&amp;direction=DESC">7</a></li><li><a href="<?php echo $this->request->webroot;?>profiles?page=8&amp;sort=Profiles.id&amp;direction=DESC">8</a></li><li><a href="<?php echo $this->request->webroot;?>profiles?page=9&amp;sort=Profiles.id&amp;direction=DESC">9</a></li>                                    <li class="next"><a href="<?php echo $this->request->webroot;?>profiles?page=2&amp;sort=Profiles.id&amp;direction=DESC" rel="next">Next &gt;</a></li>                                </ul>
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
</div>

<script>
    $(function () {
        $('.sorting').find('a').each(function () {

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
           window.location = '<?php echo $this->request->webroot;?>orders/productSelection?driver=0&amp;ordertype=BUL&amp;profiles='+tempstr;
        });
        
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