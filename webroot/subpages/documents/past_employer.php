<?php
    $include = realpath(getcwd() . "\..\api.php");

    include_once($include);
    $language = $_GET["language"];
    if(isset( $_GET["debug"])){ echo "<span style ='color:red;'>subpages/documents/past_employer.php #INC146</span>"; }//$this is not accessible!
    //$strings = CacheTranslations($language, array("forms_%"));
    //var_dump($strings);

    function string($name){
        echo '<SCRIPT>document.write(getstring("' . $name . '"));</SCRIPT>';
    }
 ?>
<body onload="translate();">

<div id="toremove">
<div class="clearfix"></div>
<hr />

    <?php if (isset($_GET["references"])){
        echo '<H2><translate>verifs_referencenum</translate>: ' . ($_GET["references"]+1) . '</H2><P>';
    } ?>

   <div class="form-group left15 col-md-12">
        <h4 class="control-label col-md-12"><translate>verifs_pastemploy</translate></h4>
   </div>
                
   <div class="form-group left15 col-md-12">
        <label class="control-label col-md-3 required"><translate>forms_companyname</translate>:</label>
        <div class="col-md-9">
            <input type="text" class="form-control required" required name="company_name[]"/>
        </div>
   </div>

   <div class="form-group left15 col-md-12">
        <label class="control-label col-md-3 required"><translate>forms_address</translate>:</label>
        <div class="col-md-3">
            <input type="text" class="form-control required" required name="address[]" />
        </div>

        <label class="control-label col-md-3 required"><translate>forms_city</translate>:</label>
        <div class="col-md-3">
            <input type="text" class="form-control required" required name="city[]" />
        </div>
   </div>

   <div class="form-group left15 col-md-12">
        <label class="control-label col-md-3 required"><translate>forms_provincestate</translate>:</label>
        <div class="col-md-3">
            <input type="text" class="form-control required" required name="state_province[]" />
        </div>

        <label class="control-label col-md-3 required"><translate>forms_country</translate>:</label>
        <div class="col-md-3">
            <input type="text" class="form-control required" required name="country[]" />
        </div>
   </div>

   <div class="form-group left15 col-md-12">
        <label class="control-label col-md-3 required"><translate>verifs_supername</translate>:</label>
        <div class="col-md-3">
           <input type="text" class="form-control required" required name="supervisor_name[]"/>
        </div>

       <label class="control-label col-md-3 required"><translate>forms_phone</translate>:</label>
       <div class="col-md-3">
            <input type="text" role="phone" class="form-control required" required name="supervisor_phone[]"/>
       </div>
   </div>

   <div class="form-group left15 col-md-12">
       <label class="control-label col-md-3 required"><translate>verifs_superemail</translate>:</label>
       <div class="col-md-3">
            <input type="text" role="email" class="form-control email1 required" required name="supervisor_email[]"/>
       </div>

       <label class="control-label col-md-3"><translate>verifs_secondarye</translate>:</label>
       <div class="col-md-3">
            <input type="text" role="email" class="form-control email1" name="supervisor_secondary_email[]"/>
       </div>
   </div>

   <div class="form-group left15 col-md-12">
        <label class="control-label col-md-3 required"><translate>verifs_employment</translate>:</label>
        <div class="col-md-3">
            <input type="text" class="form-control date-picker datepicker datepicker required" required name="employment_start_date[]"/>
        </div>

        <label class="control-label col-md-3 required"><translate>verifs_employment2</translate>:</label>
        <div class="col-md-3">
            <input type="text" class="form-control date-picker datepicker datepicker required" required name="employment_end_date[]"/>
        </div>
   </div>

   <div class="form-group left15 col-md-12">
        <label class="control-label col-md-3"><translate>verifs_claimswith</translate>:</label>
        <div class="col-md-3">
            &nbsp;&nbsp;<input type="radio" name="claims_with_employer_<?php $rand =  rand(0,100); echo $rand; ?>[]" value="1"/>&nbsp;&nbsp;<translate>dashboard_affirmative</translate>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" name="claims_with_employer_<?php echo $rand;?>[]"  value="0"/>&nbsp;&nbsp;&nbsp;&nbsp;<translate>dashboard_negative</translate>
        </div>
         <label class="control-label col-md-3"><translate>verifs_dateclaims</translate>:</label>
         <div class="col-md-3">
            <input type="text" class="form-control date-picker datepicker datepicker" name="claims_recovery_date[]"/>
         </div>
   </div>

   <div class="form-group left15 col-md-12">
        <label class="control-label col-md-6"><translate>verifs_educationh</translate>:</label>
        <div class="col-md-6">
            <input type="text" class="form-control" name="emploment_history_confirm_verify_use[]"/>
        </div>
   </div>

   <div class="form-group left15 col-md-12">
        <label class="control-label col-md-3">US DOT MC/MX#:</label>
        <div class="col-md-3">
            <input name="us_dot[]" type="text" class="form-control" name="us_dot[]" />
        </div>
        <label class="control-label col-md-3" style="display: none;"><translate>forms_signature</translate>:</label>
        <div class="col-md-3">
            <input type="text" class="form-control" style="display: none;" name="signature[]"/>
        </div>
   </div>

   <div class="form-group left15 col-md-12">
        <label class="control-label col-md-3"><translate>verifs_date</translate>:</label>
        <div class="col-md-9">
            <input type="text" class="form-control date-picker datepicker datepicker" disabled name="signature_datetime[]" value="<?= date("Y-m-d"); ?>"/>
        </div>
   </div>

   <div class="form-group left15 col-md-12">
        <label class="control-label col-md-3"><translate>verifs_equipmento</translate>: </label>
        <div class="col-md-9">
            <input type="checkbox" name="equipment_vans[]" value="1"/>&nbsp;<translate>verifs_vans</translate>&nbsp;
            <input type="checkbox" name="equipment_reefer[]" value="1"/>&nbsp;<translate>verifs_reefers</translate>&nbsp;
            <input type="checkbox" name="equipment_decks[]" value="1"/>&nbsp;<translate>verifs_decks</translate>&nbsp;
            <input type="checkbox" name="equipment_super[]" value="1"/>&nbsp;<translate>verifs_superbs</translate>&nbsp;
            <input type="checkbox" name="equipment_straight_truck[]" value="1"/>&nbsp;<translate>verifs_straighttr</translate>&nbsp;
            <input type="checkbox" name="equipment_others[]" value="1"/>&nbsp;<translate>verifs_others</translate>:
        </div>
   </div>

    <div class="form-group row">
        <label class="control-label col-md-3"><translate>verifs_cargohauled</translate>: </label>
        <div class="col-md-9">
            <LABEL><input type="checkbox" name="cargo_tanker[]" value="1"/>&nbsp;<translate>verifs_tanker</translate>&nbsp;</LABEL>
            <LABEL><input type="checkbox" name="cargo_dangerous[]" value="1"/>&nbsp;<translate>verifs_dangerous</translate>&nbsp;</LABEL>
            <LABEL><input type="checkbox" name="cargo_livestock[]" value="1"/>&nbsp;<translate>verifs_livestock</translate>&nbsp;</LABEL>
            <LABEL><input type="checkbox" name="cargo_liquid[]" value="1"/>&nbsp;<translate>verifs_liquid</translate>&nbsp;</LABEL>
        </div>
    </div>


    <div class="form-group left15 col-md-12">
        <label class="control-label col-md-3"><translate>verifs_drivingexp</translate>: </label>
        <div class="col-md-9">
            <input type="checkbox" name="driving_experince_local[]" value="1"/>&nbsp;<translate>verifs_local</translate>&nbsp;
            <input type="checkbox" name="driving_experince_canada[]" value="1"/>&nbsp;<translate>verifs_canada</translate>&nbsp;
            <input type="checkbox" name="driving_experince_canada_rocky_mountains[]" value="1"/>&nbsp;<translate>verifs_canadarock</translate>&nbsp;
            <input type="checkbox" name="driving_experince_usa[]" value="1"/>&nbsp;<translate>verifs_usa</translate>&nbsp;
        </div>
   </div>

    <?php
    $doit = !isset($_GET["references"]);
    if (!$doit){
        $doit = $_GET["references"] > 1;
    }
    if ($doit){
    ?>
        <div class="delete">
            <a href="javascript:void(0);" class="btn red no-print" id="delete"><translate>dashboard_delete</translate></a>
        </div>
    <?php } ?>
  </div>

<Script> translate();
<?php if (isset($_GET["references"])) { ?>
$(function () {
    $(".datepicker").datepicker({
        changeMonth: true,
        changeYear: true,
        yearRange: '1980:2020',
        dateFormat: 'mm/dd/yy'
    });
});
<?php } ?>
</Script>