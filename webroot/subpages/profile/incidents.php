<?php
    include_once("subpages/api.php");
    JSinclude($this, "assets/admin/pages/scripts/api.js");

    function makerows($Name, $RowNames="", $Data = ""){
        if (is_array($Name)){
            foreach($Name as $RowName => $RowData){
                $Data = makerows($RowName, $RowData, $Data);
            }
        } else {
            if($Data){$Data.="\r\n";}
            $Data .= "[FULLROW]<B>" . $Name . "</B>";
            foreach($RowNames as $Row){
                $Data .= "\r\n" . $Row;
            }
        }
        return $Data;
    }

    function makechart($Name, $Columns, $Data = '', $Addable = true, $UpdateCode = ""){
        $Name = "_" . $Name;
        echo '<table class="table table-hover table-striped table-bordered table-hover dataTable"><THEAD><TR>';
        foreach($Columns as $ColumnName => $ColData){
            echo '<TH>' . $ColumnName . '</TH>';
        }
    ?>
            </TR>
    </THEAD>
    <TBODY ID="tablebody<?= $Name; ?>"></TBODY>
    <TFOOT>
        <TR>
            <TD COLSPAN="<?= count($Columns) ?>" ALIGN="CENTER">
                <?php if($Addable){ ?>
                    <A onclick="addrow<?= $Name; ?>('');">Add a row</A><BR>
                <?php } ?>
                <textarea NAME="<?= str_replace("_", "", $Name); ?>" ID="VALUE<?= $Name; ?>" style="width:100%;"></textarea>
            </TD>
        </TR>
    </TFOOT>
</TABLE>

<SCRIPT>
    var RowID<?= $Name; ?> = 0;
    var ColID<?= $Name; ?> = 0;

    function getcells<?= $Name; ?>(StartingRow, StartingCol, EndingRow, EndingCol){
        var ret = new Array();
        var Value;
        for(var Row=StartingRow; Row<=EndingRow; Row++){
            for (var Col=StartingCol; Col<=EndingCol; Col++){
                Value = getcell<?= $Name; ?>(Row, Col);
                //alert('<?= $Name; ?>: ' + Row + ", " + Col + " = " + Value);
                ret.push(Value);
            }
        }
        return ret;
    }

    function getcell<?= $Name; ?>(Row, Col){
         var value = getinputvalue("cell<?= $Name; ?>" + Row + "." + Col);
         value = replaceAll(",", "&#44;", value);
         value = replaceAll("\r\n", "<BR>", value);
         return value;
    }
    function setcell<?= $Name; ?>(Row, Col, Value){
        setvalue("cell<?= $Name; ?>" + Row + "." + Col, Value);
    }

    function addfullrow<?= $Name; ?>(Data){
        var HTML = '<TR><TD COLSPAN="<?= count($Columns) ?>">' + Data + '</TD></TR>';
        appendhtml("tablebody<?= $Name; ?>", HTML);
    }

    function addrow<?= $Name; ?>(Data){
        RowID<?= $Name; ?>++;
        ColID<?= $Name; ?> = 0;
        if(Data){
            Data = Data.split(",");
        }
        var HTML = '<TR>' + <?php
             foreach($Columns as $ColumnName => $ColData){
                $Type = $ColData["TYPE"];
                $Class = "";
                if (isset($ColData["CLASS"])){$Class = $ColData["CLASS"];}
                echo "newcol" . $Name . '("' . $Type . '", "' . $Class . '", Data) + ';
             }
        ?>'</TR>';
        appendhtml("tablebody<?= $Name; ?>", HTML);
    }

    function savechange<?= $Name; ?>(Row, Col){
        <?= $UpdateCode; ?>
        var value = save<?= $Name; ?>();
        setvalue("VALUE<?= $Name; ?>", value);
    }

    function save<?= $Name; ?>(){
        var ret = new Array();
        var value;
        for(var i=1; i<=RowID<?= $Name; ?>; i++){
            var ret2 = new Array();
            for(var i2 = 0; i2 < ColID<?= $Name; ?>; i2++){
                value = getcell<?= $Name; ?>(i,i2);
                ret2.push(value);
            }
            value = ret2.join(",");
            ret.push(value);
        }
        return ret.join("\r\n");
    }

    function newcol<?= $Name; ?>(Type, Class, Data){
        var ret = '<TD>';
        var Value = '';
        if(isarray(Data)){
            if (Data.length > ColID<?= $Name; ?>){
                Value = Data[ColID<?= $Name; ?>];
                Value = replaceAll("&#44;", ",", Value);
                Value = replaceAll("<BR>", "\r\n", Value);
            }
        }
        var ID = 'cell<?= $Name; ?>' + RowID<?= $Name; ?> + "." + ColID<?= $Name; ?>;
        switch(Type.toUpperCase()) {
            case "SELECT":
                ret = ret + '<SELECT ID="' + ID + '" style="width: 100%;height: 26px;" onchange="savechange<?= $Name; ?>(' + RowID<?= $Name; ?> + ', ' + ColID<?= $Name; ?> + ');">';
                Class = Class.split("|");
                for(i=0;i<Class.length;i++) {
                    ret = ret + '<OPTION';
                    if(Value == Class[i]){ret = ret + ' SELECTED';}
                    ret = ret + '>' + Class[i] + '</OPTION>';
                }
                ret = ret + '</SELECT>';
                break;
            case "READONLY":
                ret = ret + '<DIV ID="' + ID + '">' + Value + '</DIV>';
                break;
            default:
                ret = ret + '<INPUT TYPE="' + Type + '" ID="' + ID + '" style="width: 100%; height: 26px;" class="' + Class + '"  onchange="savechange<?= $Name; ?>(' + RowID<?= $Name; ?> + ', ' + ColID<?= $Name; ?> + ');", value="' + Value + '">';
        }
        ColID<?= $Name; ?>++;
        return ret + '</TD>';
    }
<?php
    if($Data){
        $Data = explode("\r\n", $Data);
        foreach($Data as $Line){
            if (strpos($Line, "[FULLROW]") === false){
                echo 'addrow' . $Name . '("' . $Line . '");';
            } else {
                echo 'addfullrow' . $Name . '("' . str_replace( "[FULLROW]", "", $Line) . '");';
            }
        }
    }
    echo '</SCRIPT>';
} ?>