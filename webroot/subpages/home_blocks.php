<?php //echo die('here');
     if($this->request->session()->read('debug')) {
         echo "<span style ='color:red;'>" . __FILE__ . " #INC111</span>";
     }
?>
<div class="row home_blocks">

	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

	<div class="portlet">
		<div class="portlet-title">
			<div class="caption">
				<i class="fa fa-copy"></i><?= $strings["index_documents"]; ?>
			</div>

		</div>

	</div>
	</div>


                <?php 
                $doc_count = 0;
                $class = array('blue-madison','red','yellow','purple','green', 'red-intense','yellow-saffron','grey-cascade','blue-steel','blue');

                
                $doc = $doc_comp->getDocument();
                $fieldname = getFieldname("title", $language);
                //
                $i=0;
                $cids = $this->requestAction('/settings/getallclients/'.$this->request->session()->read('Profile.id'));
                if($doc){
                    //echo strtolower($document->document_type);
                    $form_type = "";
                    $titles = array();
                    foreach($doc as $d){
                     
                        if($d->id > $doc_count)
                        {
                            $doc_count = $d->id;
                        }
                        //echo strtolower($d->title);
                        if(isset($document) && strtolower($d->title) == strtolower($document->document_type)) {
                            $form_type = $d->form;
                        }
                        //$prosubdoc = $this->requestAction('/profiles/getProSubDoc/'.$this->Session->read('Profile.id').'/'.$d->id);
                        $prosubdoc = $this->requestAction('/settings/all_settings/0/0/profile/'.$this->Session->read('Profile.id').'/'.$d->id);
                         
                        if(isset($cid)) {
                            $csubdoc = $this->requestAction('/settings/all_settings/0/0/client/' . $cid . '/' . $d->id);
                        } elseif(isset($cids)) {
                            $csubdoc['display'] = $this->requestAction('/settings/getCSubDocArray/'.urlencode($cids)."/".$d->id);
                        }
                        
                        //echo $d->id.":".$csubdoc['display']."-".$prosubdoc['display']."-".$d->display.",";
                        if($i==11) { $i=0; }
                        ?>
                        <?php if($prosubdoc['display'] > 1 && $d->display == 1 && ( !isset($csubdoc)  || (isset($csubdoc) && $csubdoc['display'] == 1)))
                        {
                            
                             $getColor = $this->requestAction('documents/getColor/'.$d->color_id);
                            
                        ?>
                        <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6" <?php if(isset($_GET['doc'])){?>style="display:none;"<?php }?>>

    					<div class="dashboard-stat <?php if(isset($getColor->color)) echo $getColor->color; else echo $class[$i]; ?>">
                            <div class="whiteCorner"></div>
    
                            <div class="visual">
    							<i class="fa fa-copy"></i>
    						</div>
    						<div class="details">
    							<div class="number">
    							</div>
    							<div class="desc">
    								 <?php
									 	$title = ucfirst($d->$fieldname . $Trans);
                                        $titles[strtolower(trim($title))] = 1;//what purpose does this have?
                                        echo $title;
									  ?>
    							</div>
    						</div>
                            <?php if(strtolower($this->request->params['controller'])!="documents"){?>
    						<a class="more" href="<?php echo $this->request->webroot;?>documents/index?type=<?php echo urlencode($d->id) . '">' . $strings["index_viewmore"]; ?>
    						 <i class="m-icon-swapright m-icon-white"></i>
    						</a>
                            <?php
                            }
                            else{
                                ?>
                            <a class="more" id="sub_doc_click<?php echo $d->id;?>" href="javascript:;" onclick="showforms('<?php echo $d->form."?doc_id=".$d->id;?>')">
    						Load <?php echo ucfirst($settings->document); ?><i class="m-icon-swapright m-icon-white"></i>
    						</a>  
                            <?php
                            }?>
    					</div>
                        <div class="dusk"></div>
    
                    </div>
                        <?php
                    
                        }
                        
                        $i++;
                    }
                   
                    
                }
                 ?>
</div>
            