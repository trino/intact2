<?php
    if($this->request->session()->read('debug')){ echo "<span style ='color:red;'>" . __FILE__ . " #INC501</span>"; }
    echo $msg;
?>
<script>
    $(function(){
        <?php foreach($arrs as $arr){?>
            var forms = '<?php echo $arr['forms'];?>';
            var driver = '<?php echo $arr['driver'];?>';
            var orders = '<?php echo $arr['order_id'];?>';
            var driv = driver.split(',');
            var ord = orders.split(',');
            for(var k=0;k<driv.length;k++) {
                $.ajax({
                    url:'<?php echo $this->request->webroot;?>orders/webservice/BUL/'+forms+'/'+driv[k]+'/'+ord[k],

                });
            }
       <?php }?>
    })
</script>