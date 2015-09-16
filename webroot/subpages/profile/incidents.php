<?php
    include_once("subpages/api.php");
    JSinclude($this, "assets/admin/pages/scripts/api.js");
?>
<table class="table table-hover table-striped table-bordered table-hover dataTable">
    <THEAD>
        <TR>
            <TH>Reference</TH>
            <TH>Date</TH>
            <TH>Type of Loss</TH>
            <TH>Amount Paid ($)</TH>
            <TH>Location</TH>
            <TH>Details</TH>
        </TR>
    </THEAD>
    <TBODY ID="tablebody">

    </TBODY>
    <TFOOT>
        <TR>
            <TD COLSPAN="6" ALIGN="CENTER">
                <A onclick="addrow();">Add a row</A>
                <INPUT TYPE="TEXT" NAME="incidentsreport" ID="VALUE">
            </TD>
        </TR>
    </TFOOT>
</TABLE>
<SCRIPT>
    var RowID = 0;
    var ColID = 0;
    function addrow(){
        RowID++;
        ColID = 0;
        var element = selectelement("tablebody");
        var HTML = '<TR>' + newcol("NUMBER", '') + newcol("DATE", '') + newcol("SELECT", 'BI|PD|AB|DC-PD|UA|COL/AP|COMP/SP') + newcol("NUMBER", '') + newcol("TEXT", '') + newcol("TEXT", '') + '</TR>';
        appendhtml("tablebody", HTML);
    }

    function savechange(){
        setvalue("VALUE", save());
    }

    function save(){
        var ret = new Array();
        var value;
        for(i=1; i<=RowID; i++){
            value = saverow(i);
            ret.push(value);
        }
        return ret.join("\r\n");
    }

    function saverow(RowID){
        var ret = new Array();
        var value;
        for(i=0; i<ColID; i++){
            value = replaceAll(",", "&#44;", getinputvalue("cell" + RowID + "." + i));
            ret.push(value);
        }
        return ret.join(",");
    }

    function newcol(Type, Class){
        var ret = '<TD>';
        switch(Type.toUpperCase()) {
            case "SELECT":
                ret = ret + '<SELECT ID="cell' + RowID + "." + ColID + '" style="width: 100%;height: 26px;" onchange="savechange();">';
                Class = Class.split("|");
                for(i=0;i<Class.length;i++) {
                    ret = ret + '<OPTION>' + Class[i] + '</OPTION>';
                }
                ret = ret + '</SELECT>';
                break;
            default:
                ret = ret + '<INPUT TYPE="' + Type + '" ID="cell' + RowID + "." + ColID + '" style="width: 100%; height: 26px;" class="' + Class + '"  onchange="savechange();">';
        }
        ColID++;
        return ret + '</TD>';
    }
</SCRIPT>
