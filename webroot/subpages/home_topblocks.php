<?php
    $debug=$this->request->session()->read('debug');
    if($debug) {
        echo "<span style ='color:red;'>" . __FILE__ . " #INC112</span>";
    }

    $userid=$this->Session->read('Profile.id');
    $block = $this->requestAction("settings/all_settings/".$userid."/blocks");
    $sidebar = $this->requestAction("settings/all_settings/".$userid."/sidebar");
    //$order_url = $this->requestAction("settings/getclienturl/".$this->Session->read('Profile.id')."/order");
    $order_url = 'orders/productSelection?driver=0';
    $document_url = $this->requestAction("settings/getclienturl/".$userid."/document");
    $lastcolor = "";
    $DoAll = $language == "Debug";

    function randomcolor(){
        global $lastcolor;
        $colors = array("bg-green-meadow", "bg-red-sunglo", "bg-yellow-saffron", "bg-purple-studio", "bg-green", "bg-grey-cascade");
        $newcolor = $colors[rand(0, count($colors)-1)];
        while($newcolor == $lastcolor){
            $newcolor = $colors[rand(0, count($colors)-1)];
        }
        $lastcolor = $newcolor;
        echo $newcolor;
        srand();
    }
?>

<div class="tiles">
    
    
            <a class="tile bg-grey-cascade" href="<?php echo $this->request->webroot; ?>profiles/add" style="display: block; width: 22% ! important;">
            <div class="tile-body">
                <i class="icon-user"></i>
            </div>
            <div class="tile-object">
                <div class="name"><?= $strings["index_createprofile"];?></div>
                <div class="number"></div>
            </div>
        </a>
        
        <a class="tile bg-grey-cascade" href="<?php echo $this->request->webroot; ?>profiles/send_application" style="display: block; width: 22% ! important;">
            <div class="tile-body">
                <i class="fa fa-copy"></i>
            </div>
            <div class="tile-object">
                <div class="name"><?= $strings["index_sendapplication"];?></div>
                <div class="number"></div>
            </div>
        </a>
        
        
        <a class="tile bg-grey-cascade" href="<?php echo $this->request->webroot; ?>profiles/add_company" style="display: block; width: 22% ! important;">
            <div class="tile-body">
                <i class="icon-briefcase"></i>
            </div>
            <div class="tile-object">
                <div class="name"><?= $strings["index_addcompany"];?></div>
                <div class="number"></div>
            </div>
        </a>
    
    
    
        <a class="tile bg-grey-cascade" href="<?php echo $this->request->webroot; ?>profiles/add" style="display: block; width: 22% ! important;">
            <div class="tile-body">
                <i class="icon-credit-card"></i>
            </div>
            <div class="tile-object">
                <div class="name"><?= $strings["index_buyproduct"];?></div>
                <div class="number"></div>
            </div>
        </a>
    <?php 

    

    function GetAssignedClients($UserID, $clients, $First = false){
        $clientlist = array();
        if ($clients) {
            foreach ($clients as $client) {
                $pro_ids = explode(",", $client->profile_id);
                if (in_array($UserID, $pro_ids)) {
                    if ($First){return $client;}
                    $clientlist[] = $client;
                }
            }
        }
        if(count($clientlist)>0){return $clientlist;}
    }

   
   ?>
    </div>
<script>
    $(function(){

        $('.date-picker datepicker1').datepicker({

        })
        //Listen for the change even on the input
        .change(dateChanged)
        .on('changeDate', dateChanged);
    });
    function dateChanged(ev) {
        datez = (ev.date.valueOf())/1000;
        //alert(ev.date.valueOf());
        $(this).datepicker('hide');
        window.location.href="<?php echo $this->request->webroot;?>todo/date/"+datez;
    }
</script>
