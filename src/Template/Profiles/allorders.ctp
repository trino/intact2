	<div class="page-head">
		<div class="container">
			<!-- BEGIN PAGE TITLE -->
			<div class="page-title">
				<h1>Orders <small>all</small></h1>
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
            <form align="right" class="form-actions" method="get"
                              action="<?php echo $this->request->webroot; ?>order/search" style="border-top: 0;">
<div align="right">

                            <input type="search" aria-controls="sample_1" value="" placeholder="Search Order"
                                   name="search" class="form-control input-inline">
                            <button style="" class="btn btn-primary input-inline" type="submit">Search</button>
</div>
                        </form>
                <?php include("subpages/pending_orders.php");?>
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
    
            