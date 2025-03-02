<?php

    if (isset($_POST["image"])){
        echo saveimage($_POST["image"]);
        die();
    }

    function getnewfilename($dir = "", $ext){
        $filename = randomfilename($dir, $ext);
        while(file_exists($filename)){
            $filename = randomfilename($dir, $ext);
        }
        return $filename;
    }

    function generateRandomString($length = 10, $characters = "[ALL]") {
        $numbers = "0123456789";
        $lowercase = "abcdefghijklmnopqrstuvwxyz";
        $uppercase = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        switch($characters){
            case "[ALL]":
                $characters = $numbers . $lowercase . $uppercase;
                break;
            case "[NUM]":
                $characters = $numbers;
                break;
            case "[LCASE]":
                $characters = $lowercase;
                break;
            case "[UCASE]":
                $characters = $uppercase;
                break;
        }
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    function randomfilename($dir, $ext){
        $file = generateRandomString(10, "[NUM]") . "_" . generateRandomString(10, "[NUM]") . "." . $ext;
        return chkdir($dir, $file);
    }
    function chkdir($dir, $file){
        return $dir . DIRECTORY_SEPARATOR . $file;
    }

    function saveimage($text, $filename = ""){
        $dir = "../webroot/canvas";
        if(!$filename){$filename = getnewfilename($dir, "png");}
        file_put_contents($filename, base64_decode($text));
        return right($filename, strlen($filename) - strlen($dir) - 1);
    }

    function right($text, $length){
        return substr($text, -$length);
    }

    function includeCanvas($name, $savebutton = true, $Width = 493, $Height = 200){
        if (!isset($GLOBALS["canvasCSS"])) {
            //echo '<script src="assets/jquery-2.0.3.min.js"></script>';
            echo '<link rel="stylesheet" href="'.LOGIN.'application/assets/bootstrap.min.css">';
            echo '<link rel="stylesheet" href="'.LOGIN.'application/assets/bootstrap-theme.min.css">';
            //echo '<script src="'.LOGIN.'application/assets/bootstrap.min.js"></script>';
            echo '<script src="'.LOGIN.'application/assets/signature_pad.js"></script>';
            $GLOBALS["canvasCSS"] = true;
        }

?>

<script>
    var signaturePad<?= $name; ?>;

    function clear<?= $name; ?>(){
        signaturePad<?= $name; ?>.clear();
        saved<?= $name; ?>="";
        $('#error').html("Sign above");
    }
    function save<?= $name; ?>(){
        if (signaturePad<?= $name; ?>.isEmpty()) {
            alert("Please provide a signature first.");
        } else {
            SaveImage<?= $name; ?>(signaturePad<?= $name; ?>.toDataURL());
        }
    }
    
   
 
    $(function () {
        // Handler for .ready() called.
       
        var wrapper = document.getElementById("signature-pad<?= $name; ?>"),
            canvas = wrapper.querySelector("canvas");
             canvas.height = <?= $Height; ?>;
            canvas.width= <?= $Width; ?>;
       
        // Adjust canvas coordinate space taking into account pixel ratio,
        // to make it look crisp on mobile devices.
        // This also causes canvas to be cleared.
         /*function resizeCanvas<?= $name; ?>() {
            var ratio = 1;//window.devicePixelRatio || 1;
            canvas.width = <?= $Width; ?>; //canvas.offsetWidth * ratio;
            canvas.height = <?= $Height; ?>; //canvas.offsetHeight * ratio;
            canvas.getContext("2d").scale(ratio, ratio);
        }*/
         function resizeCanvas()
            {
              canh = $('.canvasdiv').height();
              canw = $('.canvasdiv').width();
              canvas.width =canw;
              canvas.height = canh
            //canvas.getContext("2d").scale(ratio, ratio);
            }
            $(window).resize(function(){
                resizeCanvas();
            })
       //window.onresize = resizeCanvas;
        signaturePad<?= $name; ?> = new SignaturePad(canvas);
    });

    //var uri = 'signature.php';
    var uri = "<?php echo WEB_ROOT;?>profiles/ajax_savesign";
    var saved<?= $name; ?> = "";

    function QuickSave<?= $name; ?>(){
        $('#savebtn<?= $name; ?>').click();
    }

    function SaveImage<?= $name; ?>(dataURL) {
        //$('#test').html('<IMG SRC="' + dataURL + '">');
        dataURL = dataURL.replace('data:image/png;base64,', '');
        var data = encodeURIComponent(dataURL);//JSON.stringify({value: dataURL});

        //alert("Let's pretend this got saved: " + data);

        $.ajax({
            type: "POST",
            url: uri,
            dataType: "HTML",
            data: "image=" + data,
            success: function (msg) {
                //alert(msg);
                saved<?= $name; ?>=msg;
                $('#error<?= $name; ?>').html("Success!");
                $('#<?= $name; ?>').val(msg);
            },
            error: function (result, status, error) {
                var resultText = result.responseText;
                $('#error<?= $name; ?>').html(resultText);
                saved<?= $name; ?>="";
            }
        });
    }

</script>
<div class="panel panel-default">
    <div class="panel-body" id="signature-pad<?= $name; ?>">
    <div class="canvasdiv" >
        <div style="width: <?= $Width; ?>px; height: <?=$Height;?>px;" >
            <canvas ></canvas>
        </div>
    </div>
        
        <div>
            <INPUT TYPE="HIDDEN" ID="<?= $name; ?>" NAME="<?= $name; ?>">
            <div class="alert alert-info" id="error<?= $name; ?>">Sign above</div>
            <input type="button" onclick="clear<?= $name; ?>();" class="btn btn-info" value="Clear">
            <input type="button" onclick="save<?= $name; ?>();" id="savebtn<?= $name; ?>" class="btn btn-success" <?php if(!$savebutton) { echo 'style="display: none"'; } ?> value="Save">
            <!--button class="btn btn-success" onclick="QuickSave<?= $name; ?>();">Save</button-->
        </div>
    </div>
</div>

<?php } ?>