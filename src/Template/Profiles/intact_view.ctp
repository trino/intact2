                                <link type="text/css" rel="stylesheet" href="<?php echo $this ->request->webroot; ?>assets/admin/pages/css/profile.css"> <!--REQUIRED-->
<style>
    @media print {
        .page-header {
            display: none;
        }

        .page-footer, .nav-tabs, .page-title, .page-bar, .theme-panel, .page-sidebar-wrapper {
            display: none !important;
        }

        .portlet-body, .portlet-title {
            border-top: 1px solid #578EBE;
        }

        .tabbable-line {
            border: none !important;
        }

        #tab_1_4, #tab_1_7 {
            display: block !important;
        }

        #tab_1_4, #tab_1_7 {
            visibility: visible !important;
        }

        #tab_1_4 *, #tab_1_7 * {
            visibility: visible !important;
        }
    }
</style>

<script>var reasons = false; //Action is: view</script><!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->

<!-- BEGIN PAGE HEAD -->
	<div class="page-head">
		<div class="container">
			<!-- BEGIN PAGE TITLE -->
			<div class="page-title">
				<h1>Profiles Scorecard<small>Intact View</small></h1>
			</div>
			
		</div>
	</div>
	<!-- END PAGE HEAD -->
	<!-- BEGIN PAGE CONTENT -->
	<div class="page-content">
    
    
            <div class="container">
            <div class="row">  
<div class="clearfix"></div>


<!-- END PAGE HEADER-->
<!-- BEGIN PAGE CONTENT-->
<div class="row margin-top-5">
    <div class="col-md-12">

        <div class="profile-content profile-content-bg" >
            <div class="row">
                <div class="col-md-3">
                    <!-- PORTLET MAIN -->
                    <div class="portlet light profile-sidebar-portlet">
                        <!-- SIDEBAR USERPIC -->
                        <div style="max-width:250px;margin:0 auto;" class="profile-userpic">
                            <img src="<?php echo $this ->request->webroot; ?>img/profile/default.png" style="height: auto;" alt="" id="clientpic" class="img-responsive">
                            
                        </div>
                        <!-- END SIDEBAR USERPIC -->
                        <!-- SIDEBAR USER TITLE -->
                        <div class="profile-usertitle">
                            <div class="profile-usertitle-name">
                                Beverly Hills                            </div>

                            <label style="margin-bottom:10px;" class="uniform-inline">
                                                <div class="checker disabled" id="uniform-888">
                                                    <span class="checked"><input type="checkbox" checked="" disabled="disabled" class="checkhiredriver" id="888" value="1" name="stat"></span>
                                                </div> 
                                                Intact Policy or Quote# <span class="hired_msg"></span>
                                                </label>
                                                <br>
                                                <a style="margin-top:2px;width:80%;" class="btn floatleft grey-cascade addpro" href="javascript:void(0)">Order Products A La Carte <i class="m-icon-swapright m-icon-white"></i></a>
                                                <a style="margin-top:2px;width:80%;" class="btn floatleft grey-cascade addpro" href="javascript:void(0)">Driver's Record Abstract <i class="m-icon-swapright m-icon-white"></i></a>
                                                <a style="margin-top:2px;width:80%;" class="btn floatleft grey-cascade addpro" href="javascript:void(0)">LOE  <i class="m-icon-swapright m-icon-white"></i></a>
                                                <a style="margin-top:2px;width:80%;" class="btn floatleft grey-cascade addpro" href="javascript:void(0)">Auto Plus <i class="m-icon-swapright m-icon-white"></i></a>
                                                </div>


                    </div>


                </div>


                <div class="col-md-9">
                    <div class="portlet paddingless">
                        <div style="display:none;" class="portlet-title line">
                            <div class="caption caption-md">
                                <i class="icon-globe theme-font hide"></i>
                                <span class="caption-subject font-blue-madison bold">Profile                                    Manager</span>
                            </div>
                        </div>

                        <div class="portlet-body">
                                                        <!--BEGIN TABS-->
                            <div class="tabbable tabbable-custom">
                                <ul class="nav nav-tabs">

                                    <li>
                                        <a data-toggle="tab" href="#tab_1_1">Profile</a>
                                    </li>
                                                                                <li class="active">
                                                <a data-toggle="tab" href="#tab_1_11">View Scorecard</a>
                                            </li>
                                                                                        <li>
                                                    <a data-toggle="tab" href="#tab_1_7">Permissions</a>
                                                </li>

                                            
                                                                            </ul>


                                <div style="padding: 0;" class="tab-content">
                                    <!-- PERSONAL INFO TAB -->


                                    <div style="padding: 10px;" id="tab_1_1" class="tab-pane   ">

                                        <input type="hidden" value="" name="user_id">
                                        <style>div {
        border: 0px solid green;
    }
</style>
<script>
    function emailthecreds(){
        var doit = true;
        if (!document.getElementById("username_field").value){doit = false;}
        if (!document.getElementById("email").value){doit = false;}
        if (!document.getElementById("password").value){doit = false;}
        if (!document.getElementById("retype_password").value){doit = false;}

        $("#emailcreds").prop("disabled", !doit );
        var parent = $("#emailcreds").parent().parent();
        if(!doit){
            parent.addClass("disabled");
            $("#emailcreds").prop("checked", false);
            $("#emailcreds").parent().removeClass("checked");
        } else {
            parent.removeClass("disabled");
        }
    }
</script>

<span style="color:red;">subpages/profile/info.php #INC117</span><script>var reasons = false; //Action is: view</script>
<div class="portlet-body form">
    <input type="hidden" class="client_profile_id" value="" name="client_ids">

    <div class="form-body">
        <div class="tab-content">
            <div id="subtab_4_1" class="tab-pane active">


                <div style="margin-bottom:0px;" class="portlet box">


                    <form id="save_clientz" method="post" action="" role="form">
                        <input type="hidden" class="client_profile_id" value="" name="client_ids">
                        <input type="hidden" id="profile_drafts" value="0" name="drafts">

                        <div class="row">
                            <input type="hidden" value="4" name="created_by">
                                                        <div style="display:;" class="col-md-6 hired_date">
                                <div class="form-group">
                                    <label class="control-label">Hired Date:</label>
                                    <input type="text" class="form-control date_hired" disabled="disabled" value="2015-09-02" name="hired_date">
                                </div>
                            </div>
                            <div class="clearfix"></div>
                                                        <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Profile Type:</label>
                                    <!--old code:  <input type="hidden" id="nProfileType" name="profile_type" value="<!php if(!isset($p) && isset($getProfileType->profile_type) && $getProfileType->profile_type == 2)echo "5"; else echo $p->profile_type;!>" <!php echo $is_disabled !> />-->
                                                                            <input type="hidden" disabled="disabled" value="7" name="profile_type" id="nProfileType">
                                    
                                                                            <select onchange="$('#nProfileType').val($(this).val());" required="required" class="form-control member_type" name="" disabled="disabled">

                                            <option value="$p->profile_type" selected="">Owner Operator</option>

                                        </select>
                                                                    </div>
                            </div>

                            <div style="display:
                                                                  none                                     ;" id="isb_id" class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">ISB ID: </label>
                                    <input type="text" value="" class="form-control req_rec" placeholder="" name="isb_id" disabled="disabled">
                                </div>
                            </div>


                                                        
                            <div style="display:none;" id="driver_div" class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Driver Type: </label>
                                    <select class="form-control select_driver" name="driver" disabled="disabled">
                                        <option value="">Select Driver Type</option>
                                        <option value="1">BC - BC FTL AB/BC
                                        </option>
                                        <option value="2">
                                            BCI5 - BC FTL I5
                                        </option>
                                        <option value="3">
                                            BULK
                                        </option>
                                        <option value="4">
                                            CLIMATE
                                        </option>
                                        <option value="5">
                                            FTL - SINGLE DIVISION
                                        </option>
                                        <option value="6">
                                            FTL - TOYOTA SINGLE HRLY
                                        </option>
                                        <option value="7">
                                            FTL - TOYOTA SINGLE HWY
                                        </option>
                                        <option value="8">
                                            LCV - LCV UNITS
                                        </option>
                                        <option value="9">
                                            LOC - LOCAL
                                        </option>
                                        <option value="10">
                                            OWNER - OPERATOR
                                        </option>
                                        <option value="11">
                                            OWNER - DRIVER
                                        </option>
                                        <option value="12">
                                            SCD - SPECIAL COMMODITIES
                                        </option>
                                        <option value="13">
                                            SST-SANDRK- OPEN FUEL
                                        </option>
                                        <option value="14">
                                            SWD-SANDRK
                                        </option>
                                        <option value="15">
                                            TBL-TRANSBORDER
                                        </option>
                                        <option value="16">
                                            TEM - TEAM DIVISION
                                        </option>
                                        <option value="17">
                                            TEM - TOYOTA TEAM
                                        </option>
                                        <option value="18">
                                            WD - Wind
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                                                               <div style="display:none" class="col-md-6 hideusername admin_rec">
                                    <div class="form-group">
                                        <label class="control-label">Username: </label>
                                        <input type="text" value="Owner_Operator_888" class="form-control req_driver req_rec uname" onkeyup="emailthecreds();" name="username" id="username_field" disabled="disabled">
                            <span style="display: none;" class="error passerror flashUser">Username exists already</span>
                            <span style="display: none;" class="error passerror flashUser1">Username is required</span>
                                    </div>
                                </div>
                     

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Email Address: </label>
                                    <input type="email" value="bhills_1240@mailinator.com" class="form-control un email req_driver req_rec req_sales" role="email" id="email" onkeyup="emailthecreds();" name="email" disabled="disabled">
                            <span style="display: none;" class="error passerror flashEmail">This email address is already in use</span>
                                </div>
                            </div>
                            <div class="clearfix"></div>

                                                        <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">Title:</label><br><select class="form-control " name="title" disabled="disabled"><option value="Mr">Mr.</option><option value="Mrs">Mrs.</option><option value="Ms">Ms.</option></select>                                    <!--
                                                                        <input < php echo $is_disabled ?> name="title" type="text"
                                                                                                          placeholder="eg. Mr"
                                                                                                          class="form-control req_driver" < php if (isset($p->title)) { ?> value="< php echo $p->title; ?>" < php } ?> /> -->
                                </div>
                            </div>


                            <div class="col-md-4">
                                <div class="form-group">

                                    <label class="control-label">First Name: </label>
                                    <input type="text" value="Beverly" class="form-control req_driver" placeholder="" name="fname" disabled="disabled">
                                </div>
                            </div>


                            <div class="col-md-4">
                                <div class="form-group">

                                    <label class="control-label">Middle Name: </label>
                                    <input type="text" value="Beverly Hills" class="form-control" placeholder="" name="mname" disabled="disabled">
                                </div>
                            </div>
                            
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">Last Name: </label>
                                    <input type="text" value="Hills" class="form-control req_driver" placeholder="" name="lname" disabled="disabled">
                                </div>
                            </div>


                            <div class="col-md-4">
                                <div class="form-group">

                                    <label class="control-label">Phone Number: </label>
                                    <input type="text" value="(905) 531-5331" class="form-control req_driver" role="phone" placeholder="" name="phone" disabled="disabled">
                                </div>
                            </div>


                            <div class="col-md-4">
                                <div class="form-group">

                                    <label class="control-label">Gender: </label>
                                    <select class="form-control req_driver" name="gender" disabled="disabled"><option selected="">Select Gender</option><option selected="" value="Male">Male</option><option value="Female">Female</option></select>
                                </div>
                            </div>




                                                        <div class="col-md-3">
                                <div class="form-group">

                                    <label class="control-label">Country of Birth: </label>
                                    <input type="text" value="Kxoer" class="form-control req_driver placeofbirth" placeholder="" name="placeofbirth" disabled="disabled">
                                </div>
                            </div>

                            <div class="col-md-9">

                                <div class="form-group">
                                    <label class="control-label">Date of Birth (YYYY-MM-DD): </label><br>

                                    <div class="row">


                                        <div class="col-md-4 no-margin">
                                            <select disabled="disabled" name="doby" class="form-control req_driver "><option value="2015">2015</option><option value="2014">2014</option><option value="2013">2013</option><option value="2012">2012</option><option value="2011">2011</option><option value="2010">2010</option><option value="2009">2009</option><option value="2008">2008</option><option value="2007">2007</option><option value="2006">2006</option><option value="2005">2005</option><option value="2004">2004</option><option value="2003">2003</option><option value="2002">2002</option><option value="2001">2001</option><option value="2000">2000</option><option value="1999">1999</option><option value="1998">1998</option><option value="1997">1997</option><option value="1996">1996</option><option value="1995">1995</option><option value="1994">1994</option><option value="1993">1993</option><option value="1992">1992</option><option value="1991">1991</option><option value="1990">1990</option><option value="1989">1989</option><option value="1988">1988</option><option value="1987">1987</option><option value="1986">1986</option><option value="1985">1985</option><option value="1984">1984</option><option selected="" value="1983">1983</option><option value="1982">1982</option><option value="1981">1981</option><option value="1980">1980</option><option value="1979">1979</option><option value="1978">1978</option><option value="1977">1977</option><option value="1976">1976</option><option value="1975">1975</option><option value="1974">1974</option><option value="1973">1973</option><option value="1972">1972</option><option value="1971">1971</option><option value="1970">1970</option><option value="1969">1969</option><option value="1968">1968</option><option value="1967">1967</option><option value="1966">1966</option><option value="1965">1965</option><option value="1964">1964</option><option value="1963">1963</option><option value="1962">1962</option><option value="1961">1961</option><option value="1960">1960</option><option value="1959">1959</option><option value="1958">1958</option><option value="1957">1957</option><option value="1956">1956</option><option value="1955">1955</option><option value="1954">1954</option><option value="1953">1953</option><option value="1952">1952</option><option value="1951">1951</option><option value="1950">1950</option><option value="1949">1949</option><option value="1948">1948</option><option value="1947">1947</option><option value="1946">1946</option><option value="1945">1945</option><option value="1944">1944</option><option value="1943">1943</option><option value="1942">1942</option><option value="1941">1941</option><option value="1940">1940</option><option value="1939">1939</option><option value="1938">1938</option><option value="1937">1937</option><option value="1936">1936</option><option value="1935">1935</option><option value="1934">1934</option><option value="1933">1933</option><option value="1932">1932</option><option value="1931">1931</option><option value="1930">1930</option><option value="1929">1929</option><option value="1928">1928</option><option value="1927">1927</option><option value="1926">1926</option><option value="1925">1925</option><option value="1924">1924</option><option value="1923">1923</option><option value="1922">1922</option><option value="1921">1921</option><option value="1920">1920</option><option value="1919">1919</option><option value="1918">1918</option><option value="1917">1917</option><option value="1916">1916</option><option value="1915">1915</option><option value="1914">1914</option><option value="1913">1913</option><option value="1912">1912</option><option value="1911">1911</option><option value="1910">1910</option><option value="1909">1909</option><option value="1908">1908</option><option value="1907">1907</option><option value="1906">1906</option><option value="1905">1905</option><option value="1904">1904</option><option value="1903">1903</option><option value="1902">1902</option><option value="1901">1901</option><option value="1900">1900</option></select></div><div class="col-md-4"><select disabled="disabled" name="dobm" class="form-control req_driver "><option value="01">January</option><option value="02">February</option><option value="03">March</option><option value="04">April</option><option value="05">May</option><option value="06">June</option><option selected="" value="07">July</option><option value="08">August</option><option value="09">September</option><option value="10">October</option><option value="11">November</option><option value="12">December</option></select></div><div class="col-md-4"><select disabled="disabled" name="dobd" class="form-control req_driver "><option value="01">01</option><option value="02">02</option><option value="03">03</option><option value="04">04</option><option value="05">05</option><option value="06">06</option><option value="07">07</option><option value="08">08</option><option value="09">09</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option selected="" value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option></select></div>                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <h3 class="">Address: </h3>
                                    </div>
                                </div>


                                <div class="col-md-8">
                                    <div class="form-group">
                                        <input type="text" value="Lnckj" class="form-control req_driver" placeholder="Address" name="street" disabled="disabled">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input type="text" value="Beverly Hills" class="form-control req_driver" placeholder="City" name="city" disabled="disabled">
                                    </div>
                                </div>


                                <div class="col-md-4">
                                    <div class="form-group">
                                        <select class="form-control req_driver" name="province" disabled="disabled"><option value="">Select Province</option><option value="AB">Alberta</option><option value="BC">British Columbia</option><option value="MB">Manitoba</option><option value="NB">New Brunswick</option><option value="NL">Newfoundland and Labrador</option><option value="NT">Northwest Territories</option><option selected="" value="NS">Nova Scotia</option><option value="NU">Nunavut</option><option value="ON">Ontario</option><option value="PE">Prince Edward Island</option><option value="QC">Quebec</option><option value="SK">Saskatchewan</option><option value="YT">Yukon Territories</option></select>
                                        <!-- old
                                        <SELECT  < php echo $is_disabled ?> name="province" class="form-control ">< php
                                                $provinces = array("AB", "BC", "MB", "NB", "NL", "NT", "NS", "NU", "ON", "PE", "QC", "SK", "YT");
                                                $province = "";
                                                if (isset($p->province)) {
                                                    $province = $p->province;
                                                }
                                                for ($temp = 0; $temp < count($provinces); $temp += 1) {
                                                    printoption($provinces[$temp], $province, $provinces[$temp]);
                                                }
                                            ?></SELECT>
                                                <input < php echo $is_disabled ?> name="province" type="text"
                                                                                   placeholder="Province"
                                                                                   class="form-control req_driver" < php if (isset($p->province)) { ?> value="< php echo $p->province; ?>" < php } ?>/> -->
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input type="text" value="L8E 3Z2" role="postalcode" name="postal" class="form-control req_driver" placeholder="Postal Code (M5V2X2)" disabled="disabled">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input type="text" name="country" class="form-control req_driver" value="Canada" placeholder="Country" disabled="disabled">
                                    </div>
                                </div>

                                
                                <div style="display:block" class="driver_license">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <h3 class="block">Driver's License: </h3></div>
                                </div>


                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Driver's License #: </label>
                                        <input type="text" value="Dnzlc" class="form-control req_driver" name="driver_license_no" disabled="disabled">
                                    </div>
                                </div>


                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Province issued: </label>

                                        <select class="form-control req_driver" name="driver_province" disabled="disabled"><option value="">Select Province</option><option value="AB">Alberta</option><option value="BC">British Columbia</option><option value="MB">Manitoba</option><option value="NB">New Brunswick</option><option value="NL">Newfoundland and Labrador</option><option value="NT">Northwest Territories</option><option selected="" value="NS">Nova Scotia</option><option value="NU">Nunavut</option><option value="ON">Ontario</option><option value="PE">Prince Edward Island</option><option value="QC">Quebec</option><option value="SK">Saskatchewan</option><option value="YT">Yukon Territories</option></select>

                                    </div>
                                </div>


                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Expiry Date: </label>
                                        <input type="text" value="2015-10-10" class="form-control req_driver date-picker" name="expiry_date" disabled="disabled">


                                    </div>
                                </div>
                                </div>
                                                                <div class="form-group col-md-8 col-sm-8">
                                   
               
                                <!--label class="control-label col-md-6"> Where did you hear about us?</label-->
                                    <div class="">
                                        <select class="form-control" name="hear">
                                            <option value="Referral">Where did you hear about us?</option>
                                            <option value="Company Website">Company Website</option>
                                            <option value="Workopolis">Workopolis.com</option>
                                            <option value="Monster">Monster.ca</option>
                                            <option selected="" value="Nethire">Nethireinc.com</option>
                                            <option value="Indeed">Indeed.ca</option>
                                            <option value="Newspaper">Newspaper</option>
                                            <option value="Others">Other</option>
                                            
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">Other: </label>
                                        <textarea class="form-control" type="text" name="otherinfo" disabled="disabled"></textarea>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">SIN: </label>
                                        <input type="text" value="123-654-789" class="form-control" role="sin" name="sin" disabled="disabled">
                                    </div>
                                </div>
                                <!--div class="col-md-12">
                                    <div class="form-group">
                                        <h3 class="block">Automatic Survey Email: </h3></div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Don't Send: </label>
                                        <input disabled="disabled" name="automatic_email" type="radio"
                                                                          class="form-control"                                             checked="checked"  value="0" />
                                    </div>
                                </div>


                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Send after 30 days: </label>
                                        <input disabled="disabled" name="automatic_email" type="radio"
                                                                          class="form-control"  value="30" />
                                    </div>
                                </div>


                               <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Send after 60 days: </label>
                                        <input disabled="disabled" name="automatic_email" type="radio"
                                                                          class="form-control"  value="60" />
                                    </div>
                                </div-->

                                                                <!--<div class="form-group col-md-12">

                                   <div class="docMore col-md-12" data-count="1">
                                   <div class="">
                                       <div style="display:block;">
                                           <a href="javascript:void(0)" id="addMore1" class="btn btn-primary" >Browse</a>
                                            <input type="hidden" name="profile_doc[]" value="" class="addMore1_doc moredocs"/>
                                            <a href="javascript:void(0);" class ="btn btn-danger img_delete" id="delete_addMore1" title ="" style="display: none;">Delete</a>
                                            <span></span>

                                               </div>
                                           </div>
                                       </div>
                                   </div>


                                   <div class="form-group col-md-12">

                                       <a href="javascript:void(0)" class="btn btn-info" id="addMoredoc">
                                           Add More
                                       </a>
                                   </div>-->


                                <div align="right" class="col-md-12">

                                                                        <!--button class="btn btn-info"
                                            onclick="$('#profile_drafts').val('1'); $('#save_clientz').attr('novalidate','novalidate');$('#hiddensub').click();">
                                        Save As Draft
                                    </button-->
                                    <input type="submit" id="hiddensub" style="display: none;">
                                </div>

                                <div class="clearfix"></div>
                                

                    

                    <div class="clearfix"></div>

                </div></form>

            </div>

        </div>
    </div>
            <!--div class="tab-pane" id="subtab_4_3">
            <p>Please save info first.</p>
        </div-->

    

</div>
<script>
    function check_username() {
        //if(!checkalltags("subtab_4_1")){return false;}

        if($('.member_type').val()=='5' || $('.member_type').val()=='7' || $('.member_type').val()=='8')
         $('#password').val('');
        if ($('#retype_password').val() == $('#password').val()) {
            
            var client_id = $('.client_profile_id').val();
            if (client_id == "") {

            }
            if($('.member_type').val()=='1'||$('.member_type').val()=='2') {
                var un = $('.uname').val();
            } else if($('.member_type').val()!='5' && $('.member_type').val()=='7' && $('.member_type').val()=='8'){
                //var un = $('.uname').val('xxx123145aafgxxxfasfsdgdfhdfh');
                $('.req_driver').removeAttr('required');
            }
            var un = $('.uname').val();

            var element = document.getElementById("emailcreds");
            if(element != null) {
                if (!element.checked) {element.value = "";}
            }
      

            $.ajax({
                url: '<?php echo $this ->request->webroot; ?>profiles/check_user/888',
                data: 'username=' + $('.uname').val(),
                type: 'post',
                success: function (res) {
                    res = res.trim();
                    if (res == '1') {
                        //alert(res);
                        alert('Username exists already');

                        $('.uname').focus();
                        $('html,body').animate({
                                scrollTop: $('.page-title').offset().top
                            },
                            'slow');

                        return false;
                    } else {
                        $('.flashUser').hide();
                        if ($('.email').val() != '') {
                            var un = $('.email').val();
                            $.ajax({
                                url: '<?php echo $this ->request->webroot; ?>profiles/check_email/888',
                                data: 'email=' + $('.email').val(),
                                type: 'post',
                                success: function (res) {
                                    res = res.trim();
                                    if (res == '1') {
                                        $('.email').focus();
                                        alert('This email address is already in use');
                                        $('html,body').animate({
                                                scrollTop: $('.page-title').offset().top
                                            },
                                            'slow');

                                        return false;
                                    } else {
                                        
                                        $(this).attr('disabled', 'disabled');
                                        $('#hiddensub').click();
                                        
                                    }
                                }
                            });
                        } else {
                            $('#hiddensub').click();
                            
                        }
                    }
                }
            });


        } else {
            $('#retype_password').focus();
            $('html,body').animate({
                    scrollTop: $('.page-title').offset().top
                },
                'slow');
            $('.flashPass1').show();
            //$('.flashPass1').fadeOut(7000000);
            return false;
        }

    }

    function confirmdelete(Name){
        var text = "Are you sure you want to delete &amp;quot;%name%&amp;quot;?";
        return confirm(text.replace("%name%", Name));
    }
    //I break for bad code
</script>
<script>

    $(function(){
        $('#password').val('');
        //initiate_ajax_upload1('addMore1', 'doc');

        $('#addMoredoc').click(function () {
            var total_count = $('.docMore').data('count');
            $('.docMore').data('count', parseInt(total_count) + 1);
            total_count = $('.docMore').data('count');
            var input_field = '<div  class="form-group" ><div class="" style="margin-top:10px;"><a href="javascript:void(0);" id="addMore' + total_count + '" class="btn btn-primary">Browse</a><input type="hidden" name="profile_doc[]" value="" class="addMore' + total_count + '_doc moredocs" /><a href="javascript:void(0);" class = "btn btn-danger img_delete" id="delete_addMore' + total_count + '" title ="">Delete</a><span></span></div></div>';
            $('.docMore').append(input_field);
            initiate_ajax_upload1('addMore' + total_count, 'doc');

        });
        $('.img_delete').live('click', function () {
            var file = $(this).attr('title');
            if (file == file.replace("&amp;", " ")) {
                var id = 0;
            } else {
                var f = file.split("&amp;");
                file = f[0];
                var id = f[1];
            }

            var con = confirmdelete(file);// confirm('Are you sure you want to delete "' + file + '"?');
            if (con == true) {
                $.ajax({
                    type: "post",
                    data: 'id=' + id,
                    url: "<?php echo $this ->request->webroot; ?>profiles/removefiles/" + file,
                    success: function (msg) {

                    }
                });
                $(this).parent().parent().remove();

            } else {
                return false;
            }
        });
        $('#save_clientz').submit(function (event) {
            event.preventDefault();
            if(!checkalltags("subtab_4_1")){return false;}

             $('.overlay-wrapper').show();
            $('#savepro').text("Saving...");
            var strs = $(this).serialize();
            $('#save_clientz').each(function () {
                strs = strs + '&' + $(this).attr('name') + '=' + $(this).val();
            });
            $(':disabled[name]').each(function () {
                strs = strs + '&' + $(this).attr('name') + '=' + $(this).val();
            });
            var adds = "888";
            $.ajax({
                url: '<?php echo $this ->request->webroot; ?>profiles/saveprofile/' + adds,
                data: strs,
                type: 'post',
                success: function (res) {
                    res = res.replace(' ', '');
                    if (res != 0 && !isNaN(res)) {
                        $('#savepro').text("Save Changes");
                        $('.flash').show();
                        $('.flash').fadeOut(3500);
                        window.location.href = '<?php echo $this ->request->webroot; ?>profiles/edit/' + res;
                    }
                }

            });

            return false;

        });
        $('#addmore_id').click(function () {
            $('#more_id_div').append('<div id="append_id"><div class="pad_bot"><a href="" class="btn btn-primary">Browse</a> <a href="javascript:void(0);" id="delete_id_div" class="btn btn-danger">Delete</a></div></div>')
        });

        $('#delete_id_div').live('click', function () {
            $(this).closest('#append_id').remove();
        })

        $('#addmore_trans').click(function () {
            $('#more_trans_div').append('<div id="append_trans"><div class="pad_bot"><a href="" class="btn btn-primary">Browse</a> <a href="javascript:void(0);" id="delete_trans_div" class="btn btn-danger">Delete</a></div></div>')
        });

        $('#delete_trans_div').live('click', function () {
            $(this).closest('#append_trans').remove();
        })

        $('.member_type').change(function () {

                   
                        
                                    if ($(this).val() == '5' || $(this).val() == '7' || $(this).val() == '8'|| $(this).val() == '9'|| $(this).val() == '12') {
                                                if($(this).val() == '5' || $(this).val() == '7' || $(this).val() == '9' || $(this).val() == '12')
                                                {
                                                    $('.hideusername').hide();
                                                }
                                                $('.req_driver').each(function () {
                                                    $(this).prop('required', "required");
                                                    //alert($(this).attr('name'));
                                                });
                                        
                                                if($(this).val() == '5' || $(this).val() == '7' || $(this).val() == '8' || $(this).val() == '9' || $(this).val() == '12'){
                                                    $('.driver_license').show();
                                                    if($(this).val() == '5' || $(this).val() == '7' || $(this).val() == '8'){
                                                    $('.driver_license input').each(function(){
                                                        $(this).attr('required','required');
                                                    });
                                                    $('#driver_div').show();
                                                    }
                                                    else
                                                    {
                                                        $('#driver_div').hide();
                                                       $('#driver_div select').removeAttr('required');
                                                        $('.driver_license input').each(function(){
                                                        $(this).removeAttr('required');
                                                    }); 
                                                    if($('.member_type').val()=='12')
                                                    {
                                                       $('.driver_license input').each(function(){
                                                        
                                                         $(this).attr('required','required');
                                                         
                                                         
                                                        }); 
                                                        $('.driver_license select').each(function(){
                                                        if($(this).attr('name')=='driver_province')
                                                         $(this).attr('required','required');
                                                         
                                                         
                                                        });
                                                    }
                                                    }
                                                    $('.placeofbirth').attr('required','required');
                                                    //$('#driver_div select').removeAttr('required');
                                                } else{
                                                    $('.driver_license').hide();
                                                    $('#driver_div').hide();
                                                    $('#driver_div select').removeAttr('required');
                                                    $('.placeofbirth').removeAttr('required');
                                                    $('.req_sales').attr('required','required');
                                                    $('.member_type').removeAttr('required');
                                                    $('.driver_license input').each(function(){
                                                        $(this).removeAttr('required');
                                                    })
                                                    $('.driver_license select').removeAttr('required');
                                                }
                                                $('#isb_id').hide();
                                        
                                                $('#password').removeProp('required');
                                                $('#retype_password').removeProp('required');
                                                $('.req_rec').removeProp('required');
                                        
                                        if($(this).val() == '5' || $(this).val() == '7' || $(this).val() == '8'){
                                            $('.email').attr('required','required');
                        
                                        } else {
                                            $('.req_sales').attr('required','required');
                                            $('.email').attr('required','required');
                                            $('.member_type').removeAttr('required');
                                            $('.driver_license input').each(function(){
                                                $(this).removeAttr('required');
                                            })
                                            $('.driver_license select').removeAttr('required');
                                            if($('.member_type').val()=='12')
                                                    {
                                                       $('.driver_license input').each(function(){
                                                        
                                                         $(this).attr('required','required');
                                                         
                                                         
                                                        }); 
                                                        $('.driver_license select').each(function(){
                                                        if($(this).attr('name')=='driver_province')
                                                         $(this).attr('required','required');
                                                         
                                                         
                                                        }); 
                                                        // $('#driver_div select').attr('required','required'); 
                                                    }
                                        } 
                                        }
                                        else {

                                            $('.nav-tabs li:not(.active)').each(function () {
                                                $(this).show();
                                            });
                                            $('#driver_div').hide();
                                            $('#isb_id').hide();
                                            //$('.username_div').show();
                                            $('.req_driver').removeProp('required');
                                            $('.req_rec').removeProp('required');
                                            //$('#username_field').removeAttr('disabled');
                                            //$('.un').prop('required', "required");
                                                                                                if (profile_type == '1' || profile_type == '2'){
                                                        $('#password').prop('required', "required");
                                                        $('.admin_rec').show();
                                                        //$('.hideusername').show();
                                                        //$('#retype_password').prop('required', "required");
                                                    }
                                                                                            }
                        
                                        var profile_type = $(this).val();
                                        if (profile_type == '1' || profile_type == '2') {
                                            $('#isb_id').show();
                                            $('.req_driver').removeProp('required');
                                            //$('.un').removeProp('required');
                                            $('.req_rec').prop('required', "required");
                                            $('.admin_rec').show();
                                            $('.driver_license').hide();
                                        }
                                        else
                                        {
                                             $('.admin_rec').hide();
                                        }
                                        if($('.passwords').attr('style') == 'display: none;'|| $('.passwords').attr('style') == 'display:none;')
                                        {
                                            $('#retype_password').removeAttr('required');
                                            $('#password').removeAttr('required');
                                        } 
                                        if($('.hideusername').attr('style') == 'display:none;' || $('.hideusername').attr('style') == 'display: none;')
                                        {
                                            $('.hideusername input').each(function(){
                                                $(this).removeAttr('required');
                                            });
                                        } 
                                        
                        $('#retype_password').removeAttr('required');
                                    });
                        
                                    var mem_type = $('.member_type').val();
                                    if (!isNaN(parseFloat(mem_type)) && isFinite(mem_type)) {
                                        if (mem_type == '5' || mem_type == '7' || mem_type == '8' || mem_type == '9' || mem_type == '12') {
                                            $('.req_driver').each(function () {
                                                $(this).prop('required', "required");
                                                //alert($(this).attr('name'));
                                                //});
                                                //$('.nav-tabs li:not(.active)').each(function () {
                                                //  $(this).hide();
                                            });
                                            if(mem_type == '5' || mem_type == '7' || mem_type == '8' || mem_type=='9' || mem_type=='12'){
                                               
                                                
                                                if($(this).val() == '5' || $(this).val() == '7' || $(this).val() == '8'){
                                                    $('#driver_div').show();
                                                    //$('#driver_div select').attr('required','required');
                                                    $('.driver_license input').each(function(){
                                                        $(this).attr('required','required');
                                                    });
                                                    }
                                                    else
                                                    {
                                                        $('#driver_div').hide();
                                                       $('#driver_div select').removeAttr('required');
                                                    $('.driver_license input').each(function(){
                                                        $(this).removeAttr('required');
                                                    });
                                                    if($('.member_type').val()=='12')
                                                    {
                                                       $('.driver_license input').each(function(){
                                                        if($(this).attr('name')=='driver_license_no')
                                                         $(this).attr('required','required');
                                                        }); 
                                                         
                                                    } 
                                                    }
                                            } else {
                                                $('#driver_div select').removeAttr('required');
                                                $('.member_type').removeAttr('required');
                                                $('.driver_license input').each(function(){
                                                        $(this).removeAttr('required');
                                                    })
                                                    $('.driver_license select').removeAttr('required');
                                            }
                                            $('#isb_id').hide();
                                            //$('.username_div').hide();
                                            //$('.un').removeProp('required');
                                            $('#password').removeProp('required');
                                            $('#retype_password').removeProp('required');
                                            //$('#username_field').attr('disabled','disabled');
                                            $('.req_rec').removeProp('required');
                                            if(mem_type == '5' || mem_type == '7' || mem_type == '8'){
                                                $('.email').attr('required','required');
                                            } else {
                                                //$('#driver_div select').removeAttr('required');
                                                $('.req_sales').attr('required','required');
                                                $('.email').attr('required','required');
                                                $('.member_type').removeAttr('required');
                                                $('.driver_license input').each(function(){
                                                        $(this).removeAttr('required');
                                                    })
                                                    $('.driver_license select').removeAttr('required');
                                                    if($('.member_type').val()=='12')
                                                    {
                                                       $('.driver_license input').each(function(){
                                                        if($(this).attr('name')=='driver_license_no')
                                                         $(this).attr('required','required');
                                                        });  
                                                        $('.driver_license select').each(function(){
                                                        if($(this).attr('name')=='driver_province')
                                                         $(this).attr('required','required');
                                                         
                                                         
                                                        });
                                                    } 
                                            }
                        
                                        } 
                                        
                                        else {
                                            $('.nav-tabs li:not(.active)').each(function () {
                                                $(this).show();
                                            });
                                            $('#driver_div').hide();
                                            //$('.username_div').show();
                                            $('#isb_id').hide();
                                            $('.req_driver').removeProp('required');
                                            $('.req_rec').removeProp('required');
                                            //$('#username_field').removeAttr('disabled');
                                            //$('.un').prop('required', "required");
                                                                                            if (mem_type == '1' || mem_type == '2'){
                                                    $('#password').prop('required', "required");
                                                    //$('#retype_password').prop('required', "required");
                                                    }
                                                                                        
                        
                                        if (mem_type == '1' || mem_type == '2') {
                                            $('#isb_id').show();
                                            $('.req_driver').removeProp('required');
                                            //$('.un').removeProp('required');
                                            $('.req_rec').prop('required', "required");
                                        }
                                    }
                                    if($('.passwords').attr('style') == 'display: none;'|| $('.passwords').attr('style') == 'display:none;')
                                    {
                                        $('#retype_password').removeAttr('required');
                                        $('#password').removeAttr('required');
                                    }
                                    if($('.hideusername').attr('style') == 'display:none;' || $('.hideusername').attr('style') == 'display: none;')
                                    {
                                        $('.hideusername input').each(function(){
                                            $(this).removeAttr('required');
                                        });
                                    }
                                    }
                                    $('#retype_password').removeAttr('required');
        });
        







        function initiate_ajax_upload1(button_id, doc) {
            var button = $('#' + button_id), interval;
            if (doc == 'doc') {
                var act = "<?php echo $this ->request->webroot; ?>profiles/upload_all/888";
            } else {
                var act = "<?php echo $this ->request->webroot; ?>profiles/upload_img/888";
            }
            new AjaxUpload(button, {
                action: act,
                name: 'myfile',
                onSubmit: function (file, ext) {
                    button.text('Uploading...');
                    this.disable();
                    interval = window.setInterval(function () {
                        var text = button.text();
                        if (text.length < 13) {
                            button.text(text + '.');
                        } else {
                            button.text('Uploading...');
                        }
                    }, 200);
                },
                onComplete: function (file, response) {
                    if (doc == "doc") {
                        button.html('Browse');
                    } else {
                        button.html('<i class="fa fa-image"></i> Add/Edit Image');
                    }
                    window.clearInterval(interval);
                    this.enable();
                    if (doc == "doc") {
                        $('#' + button_id).parent().find('span').text(" " + response);
                        $('.' + button_id + "_doc").val(response);
                        $('#delete_' + button_id).attr('title', response);
                        if (button_id == 'addMore1') {
                            $('#delete_' + button_id).show();
                        }
                    } else {
                        $("#clientpic").attr("src", '<?php echo $this ->request->webroot; ?>img/jobs/' + response);
                        $('#client_img').val(response);
                    }
//$('.flashimg').show();
                }
            });
        }
</script>

</div>
<!-- </div> END PORTLET-->                                    </div>
                                    <!-- END PERSONAL INFO TAB -->
                                    <!-- CHANGE AVATAR TAB -->

                                    
                                            <div style="padding: 10px;" id="tab_1_9" class="tab-pane ">
                                                <div class="cleafix">&nbsp;</div>

                                                <div class="portlet-body">
                                                    <span style="color:red;">subpages/documents/recruiter_notes.php #INC129</span><div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 200px;"><div class=" light recruiter_notes" style="overflow: hidden; width: auto; height: 200px;">
    
    <div class="">
        <input type="hidden" value="0" id="rid">
        <textarea class="form-control" rows="2" placeholder="Add driver notes here..." id="recruiter_notes"></textarea>
        <a style="float:right;margin:5px 0;" id="add_recruiter" class="btn btn-success" href="javascript:void(0);">Submit</a>

    </div>
    <div class="">
        <div style="" class="notes">
            

        </div>
    </div>
</div><div class="slimScrollBar" style="background: rgb(0, 0, 0) none repeat scroll 0% 0%; width: 7px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px;"></div><div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51) none repeat scroll 0% 0%; opacity: 0.2; z-index: 90; right: 1px;"></div></div>

<script>
    function deletenote(ID, Message){
        if (confirm(Message)){
            $.ajax({
                url: '<?php echo $this ->request->webroot; ?>profiles/deleteNote/'+ID,
                success: function (response) {
                    $('#dnote_'+ID).parent().parent().remove();
                    alert('Note deleted successfully!');
                }
            });
        }
    }

    $(function () {
        $('.editnote').live('click',function(){
            var id_note = $(this).attr('id');
            id_note = id_note.replace('note_','');
            $('#rid').val(id_note);
            $('#recruiter_notes').val($('#desc'+id_note).html());
            
        });

        $('.recruiter_notes').slimScroll({
            height: '200px'
        });
        $('#add_recruiter').click(function () {
            if ($('#recruiter_notes').val() == '') {
                alert('You can\\\'t submit a blank note');
                $('#recruiter_notes').focus();
            }
            else {
                $.ajax({
                    url: '<?php echo $this ->request->webroot; ?>profiles/saveNote/888/'+$('#rid').val() + '/English',
                    data: 'description=' + $('#recruiter_notes').val(),
                    type: 'post',
                    success: function (response) {
                        if (response != 'error') {

                            if($('#rid').val()=='0'){
                                $('.notes').prepend(response);
                                //alert('Note added successfully');
                            } else {
                                $('#desc'+$('#rid').val()).html($('#recruiter_notes').val());
                                alert('Note updated successfully');
                            }
                            $('#rid').val('0');
                            $('#recruiter_notes').val('');
                            //alert('Note added successfully');
                            //window.location = "";
                        }
                    }
                });
            }
        })
    });
</script>                                                </div>
                                            </div>

                                                                                    <div style="padding: 10px;" id="tab_1_11" class="tab-pane  active">
                                                <style>
    @media print {
        .page-header {
            display: none;
        }

        .page-footer, .nav-tabs, .page-title, .page-bar, .theme-panel, .page-sidebar-wrapper {
            display: none !important;
        }

        .portlet-body, .portlet-title {
        }

    }
</style>

<span style="color:red;">subpages/documents/forview.php #INC144</span><br><span style="color:red;">filelist.php #INC158</span><!-- BEGIN PROFILE CONTENT --><div class="row"><div class="clearfix"></div><div class="col-md-12"><!-- BEGIN PORTLET --><div class="portlet"><div class="portlet box blue"><div class="portlet-title"><div class="caption">Documents</div></div><div style="min-height: 100px !important;" class="portlet-body"><div style="margin-bottom: 8px;" class="col-md-12"><h4 style="margin-left: -7px;"><i class="icon-doc font-blue-hoki"></i><span class="caption-subject bold font-blue-hoki uppercase"> Documents Submitted</span></h4></div><table style="margin-bottom: 0px;" class="table"><tbody><tr role="row" class="even"><td><span class="icon-notebook"></span></td><td><a href="<?php echo $this ->request->webroot; ?>documents/view/41/2024/?type=18">Application for Insurance</a></td><td class="actions"><span class="label label-sm label-success" style="">Submitted</span></td><td></td></tr></tbody></table><div class="clearfix"></div><!-- END PORTLET --></div></div></div></div></div>
                <!-- BEGIN PROFILE CONTENT -->
                <div class="">
                    <div class="row">

                        <div class="clearfix"></div>
                        <div class="col-md-12">
                            <!-- BEGIN PORTLET -->
                            <div class="portlet">

                                <div class="portlet box blue">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <a name="2015-09-02 11:51:40"></a>
                                            <i class="fa fa-folder-open-o"></i>Order Score Sheet                                            - 2015-09-02 11:51:40                                        </div>

                                            <a class="btn  small" href="<?php echo $this ->request->webroot; ?>orders/vieworder/41/823?order_type=REQ?forms=1,14,72" style="float:right; display:none;">View Order</a>
                                    </div>
                                    <div class="portlet-body">
                                        <div oldclass="table-scrollable">

                                            <div class="col-sm-12 no-padding" style="padding-left: 0;padding-right: 0;">
                                            <table class="table-condensed table-striped table-bordered table-hover dataTable no-footer">
                                                <tbody><tr><th colspan="3">Order Information (ID: 823)</th>
                                                </tr><tr><th width="25%">Created on</th><td colspan="2">2015-09-02 11:51:40</td></tr>
                                                <tr><th>Completed Date</th><td colspan="2">2015-11-02 11:51:40</td></tr><tr><th>Submitted by</th><td colspan="2">Deleted or Missing Data</td></tr><tr><th>Submitted for</th><td width="1%" align="center">888</td><td><a href="<?php echo $this ->request->webroot; ?>profiles/view/888" class="nohide">Beverly Hills (Beverly)</a></td></tr><tr><th>Client</th><td align="center">41</td><td>Huron Services Group</td></tr></tbody></table>                
                                       </div>
                        <div class="clearfix"></div>
                        <div class="col-md-12 margin-top-10 row" style="padding-left: 0;padding-right: 0;">
                            <div class="col-md-5 row">
                            <label class="control-label col-md-4 required" style="margin-top: 5px;"><strong>Rating</strong></label>
                            <div class="col-md-8">
                            <select required="" name="title" class="form-control required">
                                 <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                             </select>
                            </div>
                            </div>                  
                                         
                            <div class="col-md-5">
                                 <label class="control-label col-md-6" style="margin-top: 5px;"><strong>Annual Premium</strong></label>
                            <div class="col-md-6">
                              <input type="text" class="form-control" placeholder="$" />
                            </div>
                            </div>
                            <div class="col-md-2">
                            <button class="btn btn-success"> Pass</button>
                            <button class="btn btn-danger"> Fail</button>
                            </div>
                            <div class="clearfix"></div>
                        </div>

            
                    <div class="clearfix"></div>
                    <div class="col-md-12" style="padding-left: 0;padding-right: 0;margin-bottom: 8px;">
                    <h4 style=""><i class="icon-doc font-blue-hoki"></i> 
                    <span class="caption-subject bold font-blue-hoki uppercase">
                    Products Ordered </span></h4>
                    </div>

                    <div class="clearfix"></div>
                    <div style="padding-left: 0;padding-right: 0;" class="col-md-12 width-equal">
                    <table style="margin-bottom: 0px;" class="table">
                    <tbody>

                                <tr role="" class="">
                    <td>
                        <span class="icon-notebook"></span>
                    </td>
										
		
					
                    <td>
                        Driver's Record Abstract                    </td>
		

					
<td class="actions">
<span class="label label-info">pending </span>
</td>
<td><span class="label label-success">Pass</span></td>

                  
                </tr>
                                <tr role="" class="">
                    <td>
                        <span class="icon-notebook"></span>
                    </td>
										
		
					
                    <td>
                        CVOR                    </td>
		

					
<td class="actions">
<span class="label label-info">pending </span>
</td>
<td><span class="label label-success">Pass</span></td>


                  
                </tr>
                                <tr role="" class="">
                    <td>
                        <span class="icon-notebook"></span>
                    </td>
										
		
					
                    <td>
                        Check DL                    </td>
		

					
<td class="actions">
<span class="label label-info">pending </span>
</td>
<td><span class="label label-danger">Fail</span></td>

                  
                </tr>
                <tbody class="productsordered"></tbody>
                
                                                    <tr>
                                                        <td colspan="4">

                                                            <h4 style="margin-left: -7px;"><i class="icon-doc font-blue-hoki"></i>
								<span class="caption-subject bold font-blue-hoki uppercase">
								Documents Submitted </span></h4>

                                                            <div class="clearfix"></div>
                                                        </td>
                                                    </tr>



                                                                    <tr>
                    <td colspan="4">None</td>
                </tr>
            </tbody></table><table class="table-condensed table-striped table-bordered table-hover dataTable no-footer"></table>                                                    
                                                        
                                                    
                                                    
                                                


                                            </div>

                                            <div class="clearfix"></div>

                                        </div>

                                    </div>


                                    <!-- END PORTLET -->


                                </div>
                            </div>
                            <!-- END PORTLET -->
                        </div>
                    </div>
                </div>
                
                                    </div>
                                                                            <div id="tab_1_7" class="tab-pane ">
                                        <span style="color:red;display:block;padding:10px;">subpages/profile/block.php #INC116</span>
<ul class="nav nav-tabs nav-justified">
                <li class="active">
                <a data-toggle="tab" href="#subtab_2_1">Configuration</a>
            </li>
            <!--<li class="">
                <a href="#subtab_2_2" data-toggle="tab">Document</a>
            </li>-->
            <li class="">
                <a data-toggle="tab" href="#subtab_2_3">Top blocks</a>
            </li>
            <!--<li >
        <a href="#tab_1_12" data-toggle="tab">Profile Types</a>
    </li>
     <li >
        <a href="#tab_1_13" data-toggle="tab">Client Types</a>
    </li>-->
    <li>
        <a data-toggle="tab" href="#subtab_2_4">Assign to Client</a>
    </li>


</ul>
<!--</div>-->
<div class="portlet-body form">
    <div class="tab-content">
                <div style="padding: 10px;" id="subtab_2_1" class="tab-pane  active">
            <div class="">
                <!--h1>Modules</h1-->

                <form id="blockform" method="post" action="#">
                    <input type="hidden" value="888" name="form">
                    <input type="hidden" value="888" name="side[user_id]">


                    <table class="table table-bordered table-hover">
                        <tbody><tr>
                            <td style="width:200px;"></td>
                            <td><div class="checker disabled" id="uniform-sellall1"><span><input type="checkbox" id="sellall1" disabled="disabled" class="slelectall"></span></div><label for="sellall1"> Select All</label></td>
                        </tr>
                        <tr>
                            <td class="vtop">
                                Enable Profile                            </td>
                            <td width="90%">
                                <label class="uniform-inline">
                                    <div class="radio disabled"><span><input type="radio" onclick="$('.ptypes').show();$(this).closest('td').find('.yesno span').each(function(){$(this).addClass('checked')});$(this).closest('td').find('.yesno input').each(function(){ this.checked = true;})" value="1" name="side[profile]" class="profile_enb" disabled="disabled"></span></div>
                                    Yes </label>
                                <label class="uniform-inline">
                                    <div class="radio disabled"><span><input type="radio" onclick="$('.ptypes').hide(); $(this).closest('td').find('.yesno span').each(function(){$(this).removeClass('checked')});$(this).closest('td').find('.yesno input').each(function(){ this.checked = false;})" value="0" name="side[profile]" disabled="disabled"></span></div>
                                    No </label>

                                <div class="clearfix"></div>
                                <div class="col-md-12 nopad martop yesno">
                                    <label class="uniform-inline">
                                        <div class="checker disabled"><span><input type="checkbox" value="1" name="side[profile_list]" disabled="disabled"></span></div>
                                        List
                                    </label>
                                    <label class="uniform-inline">
                                        <div class="checker disabled"><span><input type="checkbox" value="1" class="create1" onclick="selectall('ptypes[]', 'create1');" name="side[profile_create]" disabled="disabled"></span></div>
                                        Create
                                    </label>
                                    <label class="uniform-inline">
                                        <div class="checker disabled"><span><input type="checkbox" value="1" name="side[profile_edit]" disabled="disabled"></span></div>
                                        Edit
                                    </label>
                                    <label class="uniform-inline">
                                        <div class="checker disabled"><span><input type="checkbox" value="1" name="side[profile_delete]" disabled="disabled"></span></div>
                                        Delete
                                    </label>
                                    <label class="uniform-inline">
                                        <div class="checker disabled"><span><input type="checkbox" value="1" name="side[email_profile]" disabled="disabled"></span></div>
                                        Receive Email (on create profile)
                                    </label>
                                    <label class="uniform-inline">
                                        <div class="checker disabled"><span><input type="checkbox" value="1" name="side[viewprofiles]" disabled="disabled"></span></div>
                                        View Other's
                                    </label>

                                </div>
                                <div class="clearfix"></div>
                            </td>
                        </tr>
                        <tr class="ptypes">
                            <td><p>Can Create:</p></td>
                            <td style="padding: 1px;">
                                <table class=" ptypeform table table-condensed  table-striped table-bordered table-hover dataTable no-footer" style="margin-bottom: 0px; margin-top: 0px;">
                                    <tbody><tr>

                                                                                            <td class="titleptype_1" style="width:25%;">
                                                        <div class="checker disabled" id="uniform-cchk_1"><span><input type="checkbox" value="1" id="cchk_1" class="cenable" disabled="disabled" name="ptypes[]"></span></div><label for="cchk_1">Admin</label>
                                                    </td>
                                                                                                        <td class="titleptype_2" style="width:25%;">
                                                        <div class="checker disabled" id="uniform-cchk_2"><span><input type="checkbox" value="2" id="cchk_2" class="cenable" disabled="disabled" name="ptypes[]"></span></div><label for="cchk_2">Recruiter</label>
                                                    </td>
                                                                                                        <td class="titleptype_3" style="width:25%;">
                                                        <div class="checker disabled" id="uniform-cchk_3"><span><input type="checkbox" value="3" id="cchk_3" class="cenable" disabled="disabled" name="ptypes[]"></span></div><label for="cchk_3">External</label>
                                                    </td>
                                                                                                        <td class="titleptype_5" style="width:25%;">
                                                        <div class="checker disabled" id="uniform-cchk_5"><span><input type="checkbox" value="5" id="cchk_5" class="cenable" disabled="disabled" name="ptypes[]"></span></div><label for="cchk_5">Driver</label>
                                                    </td>
                                                    </tr><tr>                                                    <td class="titleptype_7" style="width:25%;">
                                                        <div class="checker disabled" id="uniform-cchk_7"><span><input type="checkbox" value="7" id="cchk_7" class="cenable" disabled="disabled" name="ptypes[]"></span></div><label for="cchk_7">Owner Operator</label>
                                                    </td>
                                                                                                        <td class="titleptype_8" style="width:25%;">
                                                        <div class="checker disabled" id="uniform-cchk_8"><span><input type="checkbox" value="8" id="cchk_8" class="cenable" disabled="disabled" name="ptypes[]"></span></div><label for="cchk_8">Owner Driver</label>
                                                    </td>
                                                                                                        <td class="titleptype_9" style="width:25%;">
                                                        <div class="checker disabled" id="uniform-cchk_9"><span><input type="checkbox" value="9" id="cchk_9" class="cenable" disabled="disabled" name="ptypes[]"></span></div><label for="cchk_9">Employee</label>
                                                    </td>
                                                                                                        <td class="titleptype_12" style="width:25%;">
                                                        <div class="checker disabled" id="uniform-cchk_12"><span><input type="checkbox" value="12" id="cchk_12" class="cenable" disabled="disabled" name="ptypes[]"></span></div><label for="cchk_12">Sales</label>
                                                    </td>
                                                    </tr><tr>                                    </tr>
                                    <tr style="display: none;">
                                        <td></td>
                                        <td></td>
                                        <td><a id="saveptype" class="btn btn-primary" href="javascript:;">Submit</a>
                                        </td>
                                    </tr>

                                </tbody></table>

                            </td>
                        </tr>
                        <tr>
                            <td style="background: #f7f7f7;" colspan="2">&nbsp;</td>
                        </tr>
                        <tr>
                            <td class="vtop">
                                Enable   Client                            </td>
                            <td>

                                <label class="uniform-inline">
                                    <div class="radio disabled"><span><input type="radio" value="1" onclick="$('.ctypes').show();$(this).closest('td').find('.yesno span').each(function(){$(this).addClass('checked')});$(this).closest('td').find('.yesno input').each(function(){ this.checked = true;})" name="side[client]" class="client_enb" disabled="disabled"></span></div>
                                    Yes </label>
                                <label class="uniform-inline">
                                    <div class="radio disabled"><span><input type="radio" value="0" onclick="$('.ctypes').hide();$(this).closest('td').find('.yesno span').each(function(){$(this).removeClass('checked')});$(this).closest('td').find('.yesno input').each(function(){ this.checked = false;})" name="side[client]" disabled="disabled"></span></div>
                                    No </label>

                                <div class="clearfix"></div>
                                <div class="col-md-12 nopad martop yesno">
                                    <label class="uniform-inline">
                                        <div class="checker disabled"><span><input type="checkbox" value="1" name="side[client_list]" disabled="disabled"></span></div>
                                        List
                                    </label>
                                    <label class="uniform-inline">
                                        <div class="checker disabled"><span><input type="checkbox" value="1" class="create2" onclick="selectall('ctypes[]', 'create2');" name="side[client_create]" disabled="disabled"></span></div>
                                        Create
                                    </label>
                                    <label class="uniform-inline">
                                        <div class="checker disabled"><span><input type="checkbox" value="1" name="side[client_edit]" disabled="disabled"></span></div>
                                        Edit
                                    </label>
                                    <label class="uniform-inline">
                                        <div class="checker disabled"><span><input type="checkbox" value="1" name="side[client_delete]" disabled="disabled"></span></div>
                                        Delete
                                    </label>

                                </div>
                                <div class="clearfix"></div>
                            </td>
                        </tr>
                        <tr class="ctypes">
                            <td>Can Create:</td>
                            <td style="padding: 1px;">
                                <table class="ctypeform table table-condensed  table-striped table-bordered table-hover dataTable no-footer" style="margin-bottom: 0px; margin-top: 0px;">
                                    <tbody><tr>
                                                                            </tr>
                                    <tr style="display: none;">
                                        <td></td>
                                        <td></td>
                                        <td><a id="savectype" class="btn btn-primary" href="javascript:;">Submit</a>
                                        </td>
                                    </tr>

                                </tbody></table>

                            </td>
                        </tr>


                                                    <tr>
                                <td style="background: #f7f7f7;" colspan="2">&nbsp;</td>
                            </tr>


                            <tr>
                                <td class="vtop">
                                    Enable Orders
                                </td>
                                <td>
                                    <label class="uniform-inline">
                                        <div class="radio disabled"><span><input type="radio" value="1" onclick="$(this).closest('td').find('.yesno span').each(function(){$(this).addClass('checked')});$(this).closest('td').find('.yesno input').each(function(){ this.checked = true;})" name="side[orders]" disabled="disabled"></span></div>
                                        Yes </label>
                                    <label class="uniform-inline">
                                        <div class="radio disabled"><span><input type="radio" value="0" onclick="$(this).closest('td').find('.yesno span').each(function(){$(this).removeClass('checked')});$(this).closest('td').find('.yesno input').each(function(){$(this).removeAttr('checked');});" name="side[orders]" disabled="disabled"></span></div>
                                        No </label>

                                    <div class="clearfix"></div>
                                    <div class="col-md-12 nopad martop yesno">
                                        <label class="uniform-inline">
                                            <div class="checker disabled"><span><input type="checkbox" value="1" name="side[orders_list]" disabled="disabled"></span></div>
                                            List
                                        </label>
                                        <label class="uniform-inline">
                                            <div class="checker disabled"><span><input type="checkbox" value="1" class="create3" onclick="selectall('side[orders_mee]', 'create3'); selectall('side[orders_products]', 'create3'); selectall('side[bulk]', 'create3'); selectall('side[]', 'create3'); selectall('side[orders_emp]', 'create3'); selectall('side[orders_sal]', 'create3'); selectall('side[orders_gdo]', 'create3'); " name="side[orders_create]" disabled="disabled"></span></div>
                                            Create
                                        </label>
                                        <label class="uniform-inline">
                                            <div class="checker disabled"><span><input type="checkbox" value="1" name="side[orders_edit]" disabled="disabled"></span></div>
                                            Edit
                                        </label>
                                        <label class="uniform-inline">
                                            <div class="checker disabled"><span><input type="checkbox" value="1" name="side[orders_delete]" disabled="disabled"></span></div>
                                            Delete
                                        </label>
                                        <label class="uniform-inline">
                                            <div class="checker disabled"><span><input type="checkbox" value="1" name="side[orders_others]" disabled="disabled"></span></div>
                                            View Other's
                                        </label>


                                        <label class="uniform-inline">
                                            <div class="checker disabled"><span><input type="checkbox" value="1" name="side[email_orders]" disabled="disabled"></span></div>
                                            Receive Email (on create order)
                                        </label>


                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="col-md-12 nopad martop yesno">
                                        <label class="uniform-inline"><div class="checker disabled"><span><input type="checkbox" value="1" name="side[orders_mee]" disabled="disabled"></span></div>Driver Order</label> <label class="uniform-inline"><div class="checker disabled"><span><input type="checkbox" value="1" name="side[orders_products]" disabled="disabled"></span></div>Order Products A La Carte</label> <label class="uniform-inline"><div class="checker disabled"><span><input type="checkbox" value="1" name="side[bulk]" disabled="disabled"></span></div>Bulk Order</label> <label class="uniform-inline"><div class="checker disabled"><span><input type="checkbox" value="1" name="side[orders_emp]" disabled="disabled"></span></div>GFS Employee Order</label> <label class="uniform-inline"><div class="checker disabled"><span><input type="checkbox" value="1" name="side[orders_sal]" disabled="disabled"></span></div>GFS Sales Order</label> <label class="uniform-inline"><div class="checker disabled"><span><input type="checkbox" value="1" name="side[orders_gdo]" disabled="disabled"></span></div>GFS Driver Order</label>                                     </div>
                                </td>
                            </tr>




                                                <tr>
                            <td style="background: #f7f7f7;" colspan="2">&nbsp;</td>
                        </tr>
                        <tr>
                            <td class="vtop"> Invoice</td>
                            <td>
                                <label class="uniform-inline">
                                    <div class="radio disabled"><span><input type="radio" value="1" name="side[invoice]" disabled="disabled"></span></div>
                                    Yes </label>
                                <label class="uniform-inline">
                                    <div class="radio disabled"><span><input type="radio" value="0" name="side[invoice]" disabled="disabled"></span></div>
                                    No </label>
                            </td>
                        </tr>

                        <tr>
                            <td class="vtop">
                                Enable   Document                            </td>
                            <td>
                                <label class="uniform-inline">
                                    <div class="radio disabled"><span><input type="radio" value="1" onclick="$('.doc_more').show();$(this).closest('td').find('.yesno span').each(function(){$(this).addClass('checked')});$(this).closest('td').find('.yesno input').each(function(){ this.checked = true;});" name="side[document]" disabled="disabled"></span></div>
                                    Yes </label>
                                <label class="uniform-inline">
                                    <div class="radio disabled"><span><input type="radio" value="0" onclick="$('.doc_more').hide();$(this).closest('td').find('.yesno span').each(function(){$(this).removeClass('checked')});$(this).closest('td').find('.yesno input').each(function(){ this.checked = false;})" name="side[document]" disabled="disabled"></span></div>
                                    No </label>

                                <div class="clearfix"></div>
                                <div class="col-md-12 nopad martop yesno">
                                    <label class="uniform-inline">
                                        <div class="checker disabled"><span><input type="checkbox" value="1" name="side[document_list]" disabled="disabled"></span></div>
                                        List
                                    </label>
                                    <label class="uniform-inline">
                                        <div class="checker disabled"><span><input type="checkbox" value="1" name="side[document_create]" disabled="disabled"></span></div>
                                        Create
                                    </label>
                                    <label class="uniform-inline">
                                        <div class="checker disabled"><span><input type="checkbox" value="1" name="side[document_edit]" disabled="disabled"></span></div>
                                        Edit
                                    </label>
                                    <label class="uniform-inline">
                                        <div class="checker disabled"><span><input type="checkbox" value="1" name="side[document_delete]" disabled="disabled"></span></div>
                                        Delete
                                    </label>
                                    <label class="uniform-inline">
                                        <div class="checker disabled"><span><input type="checkbox" value="1" name="side[document_others]" disabled="disabled"></span></div>
                                        View Other's
                                    </label>
                                    <label class="uniform-inline">
                                        <div class="checker disabled"><span><input type="checkbox" value="1" name="side[email_document]" disabled="disabled"></span></div>
                                        Receive Email (on create document)
                                    </label>
                                    <label class="uniform-inline">
                                        <div class="checker disabled"><span><input type="checkbox" value="1" name="side[aggregate]" disabled="disabled"></span></div>
                                        Aggregate Audit
                                    </label>
                                    <!--label class="uniform-inline">
                                                                <input disabled="disabled" type="checkbox"
                                                                                          name="side[document_requalify]"
                                                                                          value="1"  /> Re-qualify
                                                            </label-->


                                </div>
                                <div class="clearfix"></div>
                            </td>
                        </tr>

                        <tr class="doc_more">
                            <td></td>
                            <td>
                                <!--h1> Enable Document?</h1-->
                                
                                    <table class="">

                                        <tbody><tr><td>Application for Employment</td><td class=""><label class="uniform-inline"><input type="Radio" checked="checked" value="0" name="profile[18]" disabled="disabled"> None </label> <label class="uniform-inline"><input type="Radio" value="1" name="profile[18]" disabled="disabled"> View Only </label> <label class="uniform-inline"><input type="Radio" value="2" name="profile[18]" disabled="disabled"> Create Only </label> <label class="uniform-inline"><input type="Radio" class="documents" value="3" name="profile[18]" disabled="disabled"> Both </label> </td></tr><tr><td>Attachment</td><td class=""><label class="uniform-inline"><input type="Radio" checked="checked" value="0" name="profile[7]" disabled="disabled"> None </label> <label class="uniform-inline"><input type="Radio" value="1" name="profile[7]" disabled="disabled"> View Only </label> <label class="uniform-inline"><input type="Radio" value="2" name="profile[7]" disabled="disabled"> Create Only </label> <label class="uniform-inline"><input type="Radio" class="documents" value="3" name="profile[7]" disabled="disabled"> Both </label> </td></tr><tr><td>Audit</td><td class=""><label class="uniform-inline"><input type="Radio" checked="checked" value="0" name="profile[8]" disabled="disabled"> None </label> <label class="uniform-inline"><input type="Radio" value="1" name="profile[8]" disabled="disabled"> View Only </label> <label class="uniform-inline"><input type="Radio" value="2" name="profile[8]" disabled="disabled"> Create Only </label> <label class="uniform-inline"><input type="Radio" class="documents" value="3" name="profile[8]" disabled="disabled"> Both </label> </td></tr><tr><td>Challenger Driver application</td><td class=""><label class="uniform-inline"><input type="Radio" checked="checked" value="0" name="profile[2]" disabled="disabled"> None </label> <label class="uniform-inline"><input type="Radio" value="1" name="profile[2]" disabled="disabled"> View Only </label> <label class="uniform-inline"><input type="Radio" value="2" name="profile[2]" disabled="disabled"> Create Only </label> <label class="uniform-inline"><input type="Radio" class="documents" value="3" name="profile[2]" disabled="disabled"> Both </label> </td></tr><tr><td>Challenger Pre-screening</td><td class=""><label class="uniform-inline"><input type="Radio" checked="checked" value="0" name="profile[1]" disabled="disabled"> None </label> <label class="uniform-inline"><input type="Radio" value="1" name="profile[1]" disabled="disabled"> View Only </label> <label class="uniform-inline"><input type="Radio" value="2" name="profile[1]" disabled="disabled"> Create Only </label> <label class="uniform-inline"><input type="Radio" class="documents" value="3" name="profile[1]" disabled="disabled"> Both </label> </td></tr><tr><td>Challenger Road Test</td><td class=""><label class="uniform-inline"><input type="Radio" checked="checked" value="0" name="profile[3]" disabled="disabled"> None </label> <label class="uniform-inline"><input type="Radio" value="1" name="profile[3]" disabled="disabled"> View Only </label> <label class="uniform-inline"><input type="Radio" value="2" name="profile[3]" disabled="disabled"> Create Only </label> <label class="uniform-inline"><input type="Radio" class="documents" value="3" name="profile[3]" disabled="disabled"> Both </label> </td></tr><tr><td>Consent Form</td><td class=""><label class="uniform-inline"><input type="Radio" checked="checked" value="0" name="profile[4]" disabled="disabled"> None </label> <label class="uniform-inline"><input type="Radio" value="1" name="profile[4]" disabled="disabled"> View Only </label> <label class="uniform-inline"><input type="Radio" value="2" name="profile[4]" disabled="disabled"> Create Only </label> <label class="uniform-inline"><input type="Radio" class="documents" value="3" name="profile[4]" disabled="disabled"> Both </label> </td></tr><tr><td>Education Verification</td><td class=""><label class="uniform-inline"><input type="Radio" checked="checked" value="0" name="profile[10]" disabled="disabled"> None </label> <label class="uniform-inline"><input type="Radio" value="1" name="profile[10]" disabled="disabled"> View Only </label> <label class="uniform-inline"><input type="Radio" value="2" name="profile[10]" disabled="disabled"> Create Only </label> <label class="uniform-inline"><input type="Radio" class="documents" value="3" name="profile[10]" disabled="disabled"> Both </label> </td></tr><tr><td>Feedback</td><td class=""><label class="uniform-inline"><input type="Radio" checked="checked" value="0" name="profile[6]" disabled="disabled"> None </label> <label class="uniform-inline"><input type="Radio" value="1" name="profile[6]" disabled="disabled"> View Only </label> <label class="uniform-inline"><input type="Radio" value="2" name="profile[6]" disabled="disabled"> Create Only </label> <label class="uniform-inline"><input type="Radio" class="documents" value="3" name="profile[6]" disabled="disabled"> Both </label> </td></tr><tr><td>GFS PI Survey</td><td class=""><label class="uniform-inline"><input type="Radio" checked="checked" value="0" name="profile[21]" disabled="disabled"> None </label> <label class="uniform-inline"><input type="Radio" value="1" name="profile[21]" disabled="disabled"> View Only </label> <label class="uniform-inline"><input type="Radio" value="2" name="profile[21]" disabled="disabled"> Create Only </label> <label class="uniform-inline"><input type="Radio" class="documents" value="3" name="profile[21]" disabled="disabled"> Both </label> </td></tr><tr><td>GFS Past Employer Survey</td><td class=""><label class="uniform-inline"><input type="Radio" checked="checked" value="0" name="profile[16]" disabled="disabled"> None </label> <label class="uniform-inline"><input type="Radio" value="1" name="profile[16]" disabled="disabled"> View Only </label> <label class="uniform-inline"><input type="Radio" value="2" name="profile[16]" disabled="disabled"> Create Only </label> <label class="uniform-inline"><input type="Radio" class="documents" value="3" name="profile[16]" disabled="disabled"> Both </label> </td></tr><tr><td>GFS Pre Employment Road Test</td><td class=""><label class="uniform-inline"><input type="Radio" checked="checked" value="0" name="profile[17]" disabled="disabled"> None </label> <label class="uniform-inline"><input type="Radio" value="1" name="profile[17]" disabled="disabled"> View Only </label> <label class="uniform-inline"><input type="Radio" value="2" name="profile[17]" disabled="disabled"> Create Only </label> <label class="uniform-inline"><input type="Radio" class="documents" value="3" name="profile[17]" disabled="disabled"> Both </label> </td></tr><tr><td>ISB Driver Application</td><td class=""><label class="uniform-inline"><input type="Radio" checked="checked" value="0" name="profile[19]" disabled="disabled"> None </label> <label class="uniform-inline"><input type="Radio" value="1" name="profile[19]" disabled="disabled"> View Only </label> <label class="uniform-inline"><input type="Radio" value="2" name="profile[19]" disabled="disabled"> Create Only </label> <label class="uniform-inline"><input type="Radio" class="documents" value="3" name="profile[19]" disabled="disabled"> Both </label> </td></tr><tr><td>ISB Pre-Screening</td><td class=""><label class="uniform-inline"><input type="Radio" checked="checked" value="0" name="profile[11]" disabled="disabled"> None </label> <label class="uniform-inline"><input type="Radio" value="1" name="profile[11]" disabled="disabled"> View Only </label> <label class="uniform-inline"><input type="Radio" value="2" name="profile[11]" disabled="disabled"> Create Only </label> <label class="uniform-inline"><input type="Radio" class="documents" value="3" name="profile[11]" disabled="disabled"> Both </label> </td></tr><tr><td>Investigations Intake Form &ndash; Benefit Claims</td><td class=""><label class="uniform-inline"><input type="Radio" checked="checked" value="0" name="profile[23]" disabled="disabled"> None </label> <label class="uniform-inline"><input type="Radio" value="1" name="profile[23]" disabled="disabled"> View Only </label> <label class="uniform-inline"><input type="Radio" value="2" name="profile[23]" disabled="disabled"> Create Only </label> <label class="uniform-inline"><input type="Radio" class="documents" value="3" name="profile[23]" disabled="disabled"> Both </label> </td></tr><tr><td>Letter of Experience</td><td class=""><label class="uniform-inline"><input type="Radio" checked="checked" value="0" name="profile[9]" disabled="disabled"> None </label> <label class="uniform-inline"><input type="Radio" value="1" name="profile[9]" disabled="disabled"> View Only </label> <label class="uniform-inline"><input type="Radio" value="2" name="profile[9]" disabled="disabled"> Create Only </label> <label class="uniform-inline"><input type="Radio" class="documents" value="3" name="profile[9]" disabled="disabled"> Both </label> </td></tr><tr><td>Social Media Footprint</td><td class=""><label class="uniform-inline"><input type="Radio" checked="checked" value="0" name="profile[22]" disabled="disabled"> None </label> <label class="uniform-inline"><input type="Radio" value="1" name="profile[22]" disabled="disabled"> View Only </label> <label class="uniform-inline"><input type="Radio" value="2" name="profile[22]" disabled="disabled"> Create Only </label> <label class="uniform-inline"><input type="Radio" class="documents" value="3" name="profile[22]" disabled="disabled"> Both </label> </td></tr><tr><td>Survey</td><td class=""><label class="uniform-inline"><input type="Radio" checked="checked" value="0" name="profile[5]" disabled="disabled"> None </label> <label class="uniform-inline"><input type="Radio" value="1" name="profile[5]" disabled="disabled"> View Only </label> <label class="uniform-inline"><input type="Radio" value="2" name="profile[5]" disabled="disabled"> Create Only </label> <label class="uniform-inline"><input type="Radio" class="documents" value="3" name="profile[5]" disabled="disabled"> Both </label> </td></tr><tr><td>Upload ID/Documents</td><td class=""><label class="uniform-inline"><input type="Radio" checked="checked" value="0" name="profile[15]" disabled="disabled"> None </label> <label class="uniform-inline"><input type="Radio" value="1" name="profile[15]" disabled="disabled"> View Only </label> <label class="uniform-inline"><input type="Radio" value="2" name="profile[15]" disabled="disabled"> Create Only </label> <label class="uniform-inline"><input type="Radio" class="documents" value="3" name="profile[15]" disabled="disabled"> Both </label> </td></tr>                                    </tbody></table>

                                                                    
                            </td>
                        </tr>


                        <tr>
                            <td style="background: #f7f7f7;" colspan="2">&nbsp;</td>
                        </tr>


                       



                        
                            <tr>
                                <td class="vtop"> Enable Tasks</td>
                                <td>
                                    <label class="uniform-inline">
                                        <div class="radio disabled"><span><input type="radio" value="1" name="side[schedule]" disabled="disabled"></span></div>
                                        Yes </label>
                                    <label class="uniform-inline">
                                        <div class="radio disabled"><span><input type="radio" value="0" name="side[schedule]" disabled="disabled"></span></div>
                                        No </label>
                                </td>
                            </tr>
                            <tr>
                                <td class="vtop"> Enable Add Tasks</td>
                                <td>
                                    <label class="uniform-inline">
                                        <div class="radio disabled"><span><input type="radio" value="1" name="side[schedule_add]" disabled="disabled"></span></div>
                                        Yes </label>
                                    <label class="uniform-inline">
                                        <div class="radio disabled"><span><input type="radio" value="0" name="side[schedule_add]" disabled="disabled"></span></div>
                                        No </label>
                                </td>
                            </tr>
                            <tr>
                                <td class="vtop"> Enable Analytics</td>
                                <td>
                                    <label class="uniform-inline">
                                        <div class="radio disabled"><span><input type="radio" value="1" name="side[analytics]" disabled="disabled"></span></div>
                                        Yes </label>
                                    <label class="uniform-inline">
                                        <div class="radio disabled"><span><input type="radio" value="0" name="side[analytics]" disabled="disabled"></span></div>
                                        No </label>
                                </td>
                            </tr>

                            <tr>
                                <td class="vtop"> Enable Training</td>
                                <td>
                                    <label class="uniform-inline">
                                        <div class="radio disabled"><span><input type="radio" value="1" name="side[training]" disabled="disabled"></span></div>
                                        Yes </label>
                                    <label class="uniform-inline">
                                        <div class="radio disabled"><span><input type="radio" value="0" name="side[training]" disabled="disabled"></span></div>
                                        No </label>
                                </td>
                            </tr>


                            <!--<tr>
                                                                           <td class="vtop">Drafts</td>
                                                                           <td>
                                                                                   <label class="uniform-inline">
                                                                                   <input disabled="disabled" type="radio"
                                                                                                                     name="side[drafts]"
                                                                                                                     value="1" />
                                                                                   Yes </label>
                                                                                   <label class="uniform-inline">
                                                                                   <input disabled="disabled" type="radio"
                                                                                                                     name="side[drafts]"
                                                                                                                     value="0" />
                                                                                   No </label>
                                                                           </td>
                                                                       </tr>-->
                            <!--tr>
                            <td class="vtop"> Enable Recent Activity</td>
                            <td>
                                <label class="uniform-inline">
                                    <input disabled="disabled" type="radio"
                                                                      name="side[recent]"
                                                                      value="1" />
                                    Yes </label>
                                <label class="uniform-inline">
                                    <input disabled="disabled" type="radio"
                                                                      name="side[recent]"
                                                                      value="0" />
                                    No </label>
                            </td>
                        </tr-->
                            <tr>
                                <td class="vtop"> Enable Show Logo</td>
                                <td>
                                    <label class="uniform-inline">
                                        <div class="radio disabled"><span><input type="radio" value="1" name="side[logo]" disabled="disabled"></span></div>
                                        Yes </label>
                                    <label class="uniform-inline">
                                        <div class="radio disabled"><span><input type="radio" value="0" name="side[logo]" disabled="disabled"></span></div>
                                        No </label>
                                </td>
                            </tr>


                            <!--<tr>
                                <td class="vtop"> Auto Email Survey?</td>
                                <td>
                                    <label class="uniform-inline">
                                        <input disabled="disabled" type="radio"
                                                                          name="side[logo]"
                                                                          value="1" />
                                        Yes </label>
                                    <label class="uniform-inline">
                                        <input disabled="disabled" type="radio"
                                                                          name="side[logo]"
                                                                          value="0" />
                                        No </label>
                                    &emsp; (60 day survey goes to Drivers, 30 day goes to employee and sales) from hired date?
                                </td>
                            </tr>-->


                            <!--<tr>
                            <td class="vtop"> Enable Bulk Order</td>
                                                        I just noticed that it appears that the 30 day survey goes to general Employees and the 60 day survey goes to Drivers. Could we account for this?

                            <td>
                                <label class="uniform-inline">
                                    <input disabled="disabled" type="radio"
                                                                      name="side[bulk]"
                                                                      value="1" />
                                    Yes </label>
                                <label class="uniform-inline">
                                    <input disabled="disabled" type="radio"
                                                                      name="side[bulk]"
                                                                      value="0" />
                                    No </label>
                            </td>
                        </tr>-->
                        
                    </tbody></table>
                    <!--end profile-settings-->









                    

                

            </form></div>
        </div>

        <div style="padding: 10px;" id="subtab_2_3" class="tab-pane">


            <form id="homeform">
                <input type="hidden" value="888" name="form">
                <input type="hidden" value="888" name="block[user_id]">
                <table class="table table-bordered table-hover">
                    <tbody><tr>
                        <td></td>
                        <td><div class="checker disabled" id="uniform-sellall2"><span><input type="checkbox" id="sellall2" disabled="disabled" class="slelectall1"></span></div><label for="sellall2"> Select All</label></td>
                    </tr>
                    <tr>
                        <td>
                            Add Profile                        </td>
                        <td>
                            <label class="uniform-inline">
                                <div class="radio disabled"><span><input type="radio" value="1" name="block[addadriver]" disabled="disabled"></span></div>
                                Yes </label>
                            <label class="uniform-inline">
                                <div class="radio disabled"><span><input type="radio" value="0" name="block[addadriver]" disabled="disabled"></span></div>
                                No </label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            List Profiles
                        </td>
                        <td>
                            <label class="uniform-inline">
                                <div class="radio disabled"><span><input type="radio" value="1" name="block[list_profile]" disabled="disabled"></span></div>
                                Yes </label>
                            <label class="uniform-inline">
                                <div class="radio disabled"><span><input type="radio" value="0" name="block[list_profile]" disabled="disabled"></span></div>
                                No </label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Add a Client                        </td>
                        <td>
                            <label class="uniform-inline">
                                <div class="radio disabled"><span><input type="radio" value="1" name="block[add_client]" disabled="disabled"></span></div>
                                Yes </label>
                            <label class="uniform-inline">
                                <div class="radio disabled"><span><input type="radio" value="0" name="block[add_client]" disabled="disabled"></span></div>
                                No </label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            List Clients
                        </td>
                        <td>
                            <label class="uniform-inline">
                                <div class="radio disabled"><span><input type="radio" value="1" name="block[list_client]" disabled="disabled"></span></div>
                                Yes </label>
                            <label class="uniform-inline">
                                <div class="radio disabled"><span><input type="radio" value="0" name="block[list_client]" disabled="disabled"></span></div>
                                No </label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Submit Document                        </td>
                        <td>
                            <label class="uniform-inline">
                                <div class="radio disabled"><span><input type="radio" value="1" name="block[submit_document]" disabled="disabled"></span></div>
                                Yes </label>
                            <label class="uniform-inline">
                                <div class="radio disabled"><span><input type="radio" value="0" name="block[submit_document]" disabled="disabled"></span></div>
                                No </label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            List Document                        </td>
                        <td>
                            <label class="uniform-inline">
                                <div class="radio disabled"><span><input type="radio" value="1" name="block[list_document]" disabled="disabled"></span></div>
                                Yes </label>
                            <label class="uniform-inline">
                                <div class="radio disabled"><span><input type="radio" value="0" name="block[list_document]" disabled="disabled"></span></div>
                                No </label>
                        </td>
                    </tr>

                    <!--<tr>
                                                <td>
                                                    Search Profile                                                </td>
                                                <td>
                                                    <label class="uniform-inline">
                                                        <input disabled="disabled" type="radio" name="block[searchdriver]"
                                                                                          value="1" />
                                                        Yes </label>
                                                    <label class="uniform-inline">
                                                        <input disabled="disabled" type="radio" name="block[searchdriver]"
                                                                                          value="0" />
                                                        No </label>
                                                </td>
                                            </tr>-->


                    
                        <tr><td style="background: #f7f7f7;" colspan="2">&nbsp;</td></tr>
                        <tr>
                            <td>
                                List Order
                            </td>
                            <td>
                                <label class="uniform-inline">
                                    <div class="radio disabled"><span><input type="radio" value="1" name="block[list_order]" disabled="disabled"></span></div>
                                    Yes </label>
                                <label class="uniform-inline">
                                    <div class="radio disabled"><span><input type="radio" value="0" name="block[list_order]" disabled="disabled"></span></div>
                                    No </label>
                            </td>
                        </tr>
                                        <!--<tr>
                                                <td>
                                                    Order History
                                                </td>
                                                <td>
                                                    <label class="uniform-inline">
                                                        <input disabled="disabled" type="radio"
                                                                                          name="block[orderhistory]"
                                                                                          value="1" />
                                                        Yes </label>
                                                    <label class="uniform-inline">
                                                        <input disabled="disabled" type="radio"
                                                                                          name="block[orderhistory]"
                                                                                          value="0" />
                                                        No </label>
                                                </td>
                                            </tr>-->

                    <tr>
                        <td>
                            Tasks
                        </td>
                        <td>
                            <label class="uniform-inline">
                                <div class="radio disabled"><span><input type="radio" value="1" name="block[schedule]" disabled="disabled"></span></div>
                                Yes </label>
                            <label class="uniform-inline">
                                <div class="radio disabled"><span><input type="radio" value="0" name="block[schedule]" disabled="disabled"></span></div>
                                No </label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Add Tasks
                        </td>
                        <td>
                            <label class="uniform-inline">
                                <div class="radio disabled"><span><input type="radio" value="1" name="block[schedule_add]" disabled="disabled"></span></div>
                                Yes </label>
                            <label class="uniform-inline">
                                <div class="radio disabled"><span><input type="radio" value="0" name="block[schedule_add]" disabled="disabled"></span></div>
                                No </label>
                        </td>
                    </tr>
                    <!-- <tr>
                                                <td>
                                                    Messages
                                                </td>
                                                <td>
                                                    <label class="uniform-inline">
                                                        <input disabled="disabled" type="radio"
                                                                                          name="block[message]"
                                                                                          value="1" />
                                                        Yes </label>
                                                    <label class="uniform-inline">
                                                        <input disabled="disabled" type="radio"
                                                                                          name="block[message]"
                                                                                          value="0" />
                                                        No </label>
                                                </td>
                                            </tr-->
                    <!--<tr>
                        <td>
                            Clients Drafts
                        </td>
                        <td>
                            <label class="uniform-inline">
                                <input disabled="disabled" type="radio"
                                                                  name="block[draft_client]"
                                                                  value="1" />
                                Yes </label>
                            <label class="uniform-inline">
                                <input disabled="disabled" type="radio"
                                                                  name="block[draft_client]"
                                                                  value="0" />
                                No </label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Profiles Drafts
                        </td>
                        <td>
                            <label class="uniform-inline">
                                <input disabled="disabled" type="radio"
                                                                  name="block[draft_profile]"
                                                                  value="1" />
                                Yes </label>
                            <label class="uniform-inline">
                                <input disabled="disabled" type="radio"
                                                                  name="block[draft_profile]"
                                                                  value="0" />
                                No </label>
                        </td>
                    </tr-->
                    <tr>
                        <td>
                            Documents Drafts
                        </td>
                        <td>
                            <label class="uniform-inline">
                                <div class="radio disabled"><span><input type="radio" value="1" name="block[document_draft]" disabled="disabled"></span></div>
                                Yes </label>
                            <label class="uniform-inline">
                                <div class="radio disabled"><span><input type="radio" value="0" name="block[document_draft]" disabled="disabled"></span></div>
                                No </label>
                        </td>
                    </tr>


                    
                        <tr>
                            <td>
                                Orders Drafts
                            </td>
                            <td>
                                <label class="uniform-inline">
                                    <div class="radio disabled"><span><input type="radio" value="1" name="block[orders_draft]" disabled="disabled"></span></div>
                                    Yes </label>
                                <label class="uniform-inline">
                                    <div class="radio disabled"><span><input type="radio" value="0" name="block[orders_draft]" disabled="disabled"></span></div>
                                    No </label>
                            </td>
                        </tr>
                                        <!-- <tr>
                                                <td>
                                                    Tasks
                                                </td>
                                                <td>
                                                    <label class="uniform-inline">
                                                        <input disabled="disabled" type="radio"
                                                                                          name="block[tasks]"
                                                                                          value="1" />
                                                        Yes </label>
                                                    <label class="uniform-inline">
                                                        <input disabled="disabled" type="radio"
                                                                                          name="block[tasks]"
                                                                                          value="0" />
                                                        No </label>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Feedback
                                                </td>
                                                <td>
                                                    <label class="uniform-inline">
                                                        <input disabled="disabled" type="radio" name="block[feedback]"
                                                                                          value="1" />
                                                        Yes </label>
                                                    <label class="uniform-inline">
                                                        <input disabled="disabled" type="radio" name="block[feedback]"
                                                                                          value="0" />
                                                        No </label>
                                                </td>
                                            </tr>-->
                    <tr>
                        <td>
                            Analytics
                        </td>
                        <td>
                            <label class="uniform-inline">
                                <div class="radio disabled"><span><input type="radio" value="1" name="block[analytics]" disabled="disabled"></span></div>
                                Yes </label>
                            <label class="uniform-inline">
                                <div class="radio disabled"><span><input type="radio" value="0" name="block[analytics]" disabled="disabled"></span></div>
                                No </label>
                        </td>
                    </tr>


                    
                        <tr>
                            <td>
                                Bulk Order
                            </td>
                            <td>
                                <label class="uniform-inline">
                                    <div class="radio disabled"><span><input type="radio" value="1" name="block[bulk]" disabled="disabled"></span></div>
                                    Yes </label>
                                <label class="uniform-inline">
                                    <div class="radio disabled"><span><input type="radio" value="0" name="block[bulk]" disabled="disabled"></span></div>
                                    No </label>
                            </td>
                        </tr>
                                        <!--tr>
                                                <td>
                                                    Master Client                                                </td>
                                                <td>
                                                    <label class="uniform-inline">
                                                        <input disabled="disabled" type="radio"
                                                                                          name="block[masterjob]"
                                                                                          value="1" />
                                                        Yes </label>
                                                    <label class="uniform-inline">
                                                        <input disabled="disabled" type="radio"
                                                                                          name="block[masterjob]"
                                                                                          value="0" />
                                                        No </label>
                                                </td>
                                            </tr-->

                </tbody></table>
                            </form>
        </div>
        
        <div style="padding: 10px;" id="subtab_2_4" class="tab-pane ">

            <!--
                                            <div class="portlet box">
                                                <div class="portlet-title">
                                                    <div class="caption">Assign to client</div>
                                                </div>
                                                <div class="portlet-body">-->
                <input type="text" disabled="disabled" class="form-control" onkeyup="searchClient()" id="searchClient">
                <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 250px;"><div class="scrolldiv" style="overflow: hidden; width: auto; height: 250px;">
                    <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 250px;"><table style="border-width: medium 1px 1px; border-style: none solid solid; border-color: -moz-use-text-color rgb(229, 229, 229) rgb(229, 229, 229); -moz-border-top-colors: none; -moz-border-right-colors: none; -moz-border-bottom-colors: none; -moz-border-left-colors: none; border-image: none; overflow: hidden; width: auto; height: 250px;" id="clientTable" class="table scrolldiv">
                        
                                    <tbody><tr>
                                        <td width="1" style="border-top:none;"><div class="checker disabled" id="uniform-c_0"><span><input type="checkbox" class="addclientz" value="17" id="c_0" disabled="disabled"></span></div>
                                        </td><td width="50" style="border-top:none;"><img style="max-width: 50px;" src="<?php echo $this ->request->webroot; ?>img/logos/MEELogo.png"></td><td style="border-top:none;">
                                            <label for="c_0">Challenger Motor Freight </label><span class="msg_17"></span></td>
                                    </tr>

                                    
                                    <tr>
                                        <td width="1"><div class="checker disabled" id="uniform-c_1"><span><input type="checkbox" class="addclientz" value="25" id="c_1" disabled="disabled"></span></div>
                                        </td><td width="50"><img style="max-width: 50px;" src="<?php echo $this ->request->webroot; ?>img/logos/MEELogo.png"></td><td>
                                            <label for="c_1">Test Dummy</label><span class="msg_25"></span></td>
                                    </tr>

                                    
                                    <tr>
                                        <td width="1"><div class="checker disabled" id="uniform-c_2"><span><input type="checkbox" class="addclientz" value="26" id="c_2" disabled="disabled"></span></div>
                                        </td><td width="50"><img style="max-width: 50px;" src="<?php echo $this ->request->webroot; ?>img/logos/MEELogo.png"></td><td>
                                            <label for="c_2">Gordon Food Service</label><span class="msg_26"></span></td>
                                    </tr>

                                    
                                    <tr>
                                        <td width="1"><div class="checker disabled" id="uniform-c_3"><span><input type="checkbox" class="addclientz" value="30" id="c_3" disabled="disabled"></span></div>
                                        </td><td width="50"><img style="max-width: 50px;" src="<?php echo $this ->request->webroot; ?>img/logos/MEELogo.png"></td><td>
                                            <label for="c_3">Erb Transport </label><span class="msg_30"></span></td>
                                    </tr>

                                    
                                    <tr>
                                        <td width="1"><div class="checker disabled" id="uniform-c_4"><span><input type="checkbox" class="addclientz" value="37" id="c_4" disabled="disabled"></span></div>
                                        </td><td width="50"><img style="max-width: 50px;" src="<?php echo $this ->request->webroot; ?>img/logos/MEELogo.png"></td><td>
                                            <label for="c_4">Patriot Source 1</label><span class="msg_37"></span></td>
                                    </tr>

                                    
                                    <tr>
                                        <td width="1"><div class="checker disabled" id="uniform-c_5"><span><input type="checkbox" class="addclientz" value="38" id="c_5" disabled="disabled"></span></div>
                                        </td><td width="50"><img style="max-width: 50px;" src="<?php echo $this ->request->webroot; ?>img/logos/MEELogo.png"></td><td>
                                            <label for="c_5">Revolution Staffing</label><span class="msg_38"></span></td>
                                    </tr>

                                    
                                    <tr>
                                        <td width="1"><div class="checker disabled" id="uniform-c_6"><span class="checked"><input type="checkbox" class="addclientz" value="41" checked="" id="c_6" disabled="disabled"></span></div>
                                        </td><td width="50"><img style="max-width: 50px;" src="<?php echo $this ->request->webroot; ?>img/logos/MEELogo.png"></td><td>
                                            <label for="c_6">Huron Services Group</label><span class="msg_41"></span></td>
                                    </tr>

                                    
                    </tbody></table><div class="slimScrollBar" style="background: rgb(0, 0, 0) none repeat scroll 0% 0%; width: 7px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px;"></div><div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51) none repeat scroll 0% 0%; opacity: 0.2; z-index: 90; right: 1px;"></div></div>
                </div><div class="slimScrollBar" style="background: rgb(0, 0, 0) none repeat scroll 0% 0%; width: 7px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px;"></div><div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51) none repeat scroll 0% 0%; opacity: 0.2; z-index: 90; right: 1px;"></div></div>
                <div class="clearfix"></div>

                <!--  </div>
              </div>-->
                        <div style="display: none;" class="margin-top-10 alert alert-success display-hide clientadd_flash">
                <button data-close="alert" class="close"></button>

            </div>

        </div>
        <!--<div class="tab-pane "
                                         id="tab_1_12">
                                        <span style ='color:red;'>ptype.php #INC126</span><div class="portlet box green-haze">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-briefcase"></i>Profile Types
        </div>
    </div>
    <div class="portlet-body">
   
        <div class="table-scrollable">
            <form action="" class="ptypeform">
            <table
                class="table table-condensed  table-striped table-bordered table-hover dataTable no-footer">
                <thead>
                <tr >
                    <th>Id</th>
                    <th>Title</th>
                    <th>Enable</th>
                    

                </tr>
                </thead>
                <tbody class="allpt">
                                    <tr>
                        <td>0</td>
                        <td class="titleptype_0">Applicant</td>
                        <td><input name="ptypes[]" type="checkbox" checked='checked' class="cenable" id="cchk_0" value="0" /></td>
                        
                    </tr>        
                                    <tr>
                        <td>1</td>
                        <td class="titleptype_1">Admin</td>
                        <td><input name="ptypes[]" type="checkbox"  class="cenable" id="cchk_1" value="1" /></td>
                        
                    </tr>        
                                    <tr>
                        <td>2</td>
                        <td class="titleptype_2">Recruiter</td>
                        <td><input name="ptypes[]" type="checkbox"  class="cenable" id="cchk_2" value="2" /></td>
                        
                    </tr>        
                                    <tr>
                        <td>3</td>
                        <td class="titleptype_3">External</td>
                        <td><input name="ptypes[]" type="checkbox"  class="cenable" id="cchk_3" value="3" /></td>
                        
                    </tr>        
                                    <tr>
                        <td>5</td>
                        <td class="titleptype_5">Driver</td>
                        <td><input name="ptypes[]" type="checkbox"  class="cenable" id="cchk_5" value="5" /></td>
                        
                    </tr>        
                                    <tr>
                        <td>7</td>
                        <td class="titleptype_7">Owner Operator</td>
                        <td><input name="ptypes[]" type="checkbox"  class="cenable" id="cchk_7" value="7" /></td>
                        
                    </tr>        
                                    <tr>
                        <td>8</td>
                        <td class="titleptype_8">Owner Driver</td>
                        <td><input name="ptypes[]" type="checkbox"  class="cenable" id="cchk_8" value="8" /></td>
                        
                    </tr>        
                                    <tr>
                        <td>9</td>
                        <td class="titleptype_9">Employee</td>
                        <td><input name="ptypes[]" type="checkbox"  class="cenable" id="cchk_9" value="9" /></td>
                        
                    </tr>        
                                    <tr>
                        <td>12</td>
                        <td class="titleptype_12">Sales</td>
                        <td><input name="ptypes[]" type="checkbox"  class="cenable" id="cchk_12" value="12" /></td>
                        
                    </tr>        
                                 <tr>
                    <td></td>
                    <td></td>
                    <td><a href="javascript:;" class="btn btn-primary" id="saveptype" >Submit</a></td>
                </tr>
        </tbody>
        </table>
        </form>
        <div class="margin-top-10 alert alert-success display-hide ptype"
                                                     style="display: none;">Data Saved
                                                    <button class="close" data-close="alert"></button>
                                                   
                                                </div>
    </div>
    </div>
</div>
<script>

$(function(){
    $('#saveptype').live('click',function(){
        $(this).text("Saving");
        var cids =$('.ptypeform input[type="checkbox"]').serialize();
        var id = 888;
        $.ajax({
            url:"<?php echo $this ->request->webroot; ?>profiles/ptypesenb/"+id,
            type:"post",
            dataType:"HTML",
            data: cids,
            success:function(msg)
            {
                $('.ptype').show();
                $('.ptype').fadeOut(7000);
                $('#saveptype').text('Submit');
            }
        })
    });
    
});
</script>                                    </div>
                                    <div class="tab-pane "
                                         id="tab_1_13">
                                        <span style ='color:red;'>ctypes.php #INC119</span><div class="portlet box green-haze">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-briefcase"></i>Client Types
        </div>
    </div>
    <div class="portlet-body">
    
        <div class="table-scrollable">
            <form action="" class="ctypeform">
            <table
                class="table table-condensed  table-striped table-bordered table-hover dataTable no-footer">
                <thead>
                <tr >
                    <th>Id</th>
                    <th>Title</th>
                    <th>Enable</th>
                   

                </tr>
                </thead>
                <tbody class="allct">
                
                <tr>
                    <td></td>
                    <td></td>
                    <td><a href="javascript:;" class="btn btn-primary" id="savectype" >Submit</a></td>
                </tr>
               
        </tbody>
        </table>
         </form>
         <div class="margin-top-10 alert alert-success display-hide ctype"
                                                     style="display: none;">
                                                     Data Saved
                                                    <button class="close" data-close="alert"></button>
                                                   
                                                </div>
    </div>
    </div>
</div>
<script>

$(function(){
    $('#savectype').live('click',function(){
        $(this).text("Saving");
        var cids =$('.ctypeform input[type="checkbox"]').serialize();
        var id = 888;
        $.ajax({
            url:"<?php echo $this ->request->webroot; ?>profiles/ctypesenb/"+id,
            type:"post",
            dataType:"HTML",
            data: cids,
            success:function(msg)
            {
                $('.ctype').show();
                $('.ctype').fadeOut(7000);
                $('#savectype').text('Submit');
            }
        })
    });
    
});
</script>                                    </div>-->
    </div>
</div>


<!-- put this back when the form is gone   </div>     </div>   -->

<script>
    function getURL(){
        var URL = window.location.href;
        var Q = URL.indexOf("?");
        if (Q>-1){
            URL = URL.substr(0, Q);
        }
        return URL;
    }

    function reload(URL){
        setTimeout(function(){
            if(URL) {
                location.href = getURL() + "?activetab=" + URL;
            } else {
                window.location.reload();
            }
        },1000);
    }

    function selectall(startswith, classname){
        var checked = $('.' + classname).is(':checked');
        $('#blockform input[type="checkbox"]').each(function () {
            var name = $(this).attr("name");
            if (typeof name  !== "undefined") {
                if (name.substring(0, startswith.length) == startswith) {
                    if (checked) {
                        $(this).parent().addClass('checked')
                        $(this).attr('checked', 'checked');
                    } else {
                        $(this).parent().removeClass('checked')
                        $(this).removeAttr('checked');
                    }
                }
            }
        });

    }


    function simulateClick(name) {
        var evt = document.createEvent("MouseEvents");
        evt.initMouseEvent("click", true, true, window, 0, 0, 0, 0, 0, false, false, false, false, 0, null);
        var cb = document.getElementById(name);
        var canceled = !cb.dispatchEvent(evt);
    }

    $(function (){
        $('.slelectall1').click(function () {
            if ($(this).is(':checked')) {
                $('#homeform input[type="radio"]').each(function () {
                    $(this).parent().removeClass('checked');
                    if ($(this).val() == '1') {

                        $(this).parent().addClass('checked');
                        $(this).attr('checked', 'checked');
                        $(this).click();
                    }

                });


            } else {
                $('#homeform input[type="radio"]').each(function () {
                    $(this).parent().removeClass('checked');
                    if ($(this).val() == '0') {
                        $(this).parent().addClass('checked');
                        $(this).attr('checked', 'checked');
                        $(this).click();
                    }

                });

            }
        });
        $('.slelectall').click(function () {
            if ($(this).is(':checked')) {
                $('#blockform input[type="radio"]').each(function () {
                    $(this).parent().removeClass('checked');
                    if($(this).hasClass('documents')) {
                        var intg = 3;
                    } else {
                        var intg = 1;
                    }

                    if($(this).val()== intg) {
                        $(this).parent().addClass('checked');
                        $(this).attr('checked', 'checked');
                        $(this).click();
                    }

                });
                $('#blockform input[type="checkbox"]').each(function () {
                    $(this).parent().addClass('checked')
                    $(this).attr('checked', 'checked');
                });

            }
            else {

                $('#blockform input[type="checkbox"]').each(function () {
                    $(this).parent().removeClass('checked')
                    $(this).removeAttr('checked');
                });
                $('#blockform input[type="radio"]').each(function () {
                    $(this).parent().removeClass('checked');
                    if ($(this).val() == '0') {
                        $(this).parent().addClass('checked');
                        $(this).attr('checked', 'checked');
                        $(this).click();
                    }

                });
            }
        })

        $('#saveptype').live('click', function () {
            $(this).text("Saving");
            $('.overlay-wrapper').show();
            var cids = $('.ptypeform input[type="checkbox"]').serialize();
            var id = 888;
            $.ajax({
                url: "<?php echo $this ->request->webroot; ?>profiles/ptypesenb/" + id,
                type: "post",
                dataType: "HTML",
                data: cids,
                success: function (msg) {
                    $('.ptype').show();
                    $('.ptype').fadeOut(7000);
                    $('#saveptype').text('Submit');
                    $('.overlay-wrapper').hide();
                }
            })
        });

        $('#savectype').live('click', function () {
            $('.overlay-wrapper').show();
            $(this).text("Saving");
            var cids = $('.ctypeform input[type="checkbox"]').serialize();
            var id = 888;
            $.ajax({
                url: "<?php echo $this ->request->webroot; ?>profiles/ctypesenb/" + id,
                type: "post",
                dataType: "HTML",
                data: cids,
                success: function (msg) {
                    $('.ctype').show();
                    $('.ctype').fadeOut(7000);
                    $('#savectype').text('Submit');
                    $('.overlay-wrapper').hide();
                }
            })
        });
        $('#save_blocks').click(function () {
            $('.overlay-wrapper').show();
            var str = $('#blockform input').serialize();

            $.ajax({
                url: '<?php echo $this ->request->webroot; ?>profiles/blocks',
                data: str,
                type: 'post',
                success: function (res) {
                    if ($('.profile_enb').is(":checked")) {
                        $('#saveptype').click();
                    }
                    if ($('.client_enb').is(":checked")) {
                        $('#savectype').click();
                    }
                    $('#save_display').click();
                    //alert(res); return false;
                    $('.res').text(res);
                    $('.flash').show();
                    $('.flash').fadeOut(7000);
                    $('#save_blocks').text(' Save Changes ');
                    reload("permissions");//window.location.reload();
                    $('.overlay-wrapper').hide();
                }
            })
        });


        $('#save_home').click(function () {
            $('.overlay-wrapper').show();
            $('#save_home').text('Saving..');
            var str = $('#homeform input').serialize();
            $.ajax({
                url: '<?php echo $this ->request->webroot; ?>profiles/homeblocks',
                data: str,
                type: 'post',
                success: function (res) {
                    //alert(res);
                    $('.res').text(res);
                    $('.flash').show();
                    $('.flash').fadeOut(7000);
                    $('#save_home').text(' Save Changes ');
                    $('.overlay-wrapper').hide();
                }
            })
        });
        $('#save_display').click(function () {
            $('.overlay-wrapper').show();
            $('#save_display').text('Saving..');
            var str = $('.doc_more input').serialize();
            $.ajax({
                url: '<?php echo $this ->request->webroot; ?>profiles/displaySubdocs/888',
                data: str,
                type: 'post',
                success: function (res) {
                    $('.flash').show();
                    $('.flash').fadeOut(7000);
                    $('#save_display').text(' Save Changes ');
                    $('.overlay-wrapper').hide();
                }
            })
        });

    });
</script>
                                    </div>
                                                                        <div id="tab_1_8" class="tab-pane ">
                                        <span style="color:red;">subpages/profile/feedback.php #INC124445</span>
<div class="portlet box green-haze">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-briefcase"></i>Surveys Submitted
        </div>
    </div>
    <div class="portlet-body">
        <strong>No feedback submitted yet!</strong>    </div>
</div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END PROFILE CONTENT -->
        </div>
    </div>
</div>
        </div>
    </div>
</div>


<script>


    function initiate_ajax_upload(button_id) {
        var button = $('#' + button_id), interval;
        new AjaxUpload(button, {
            action: "<?php echo $this ->request->webroot; ?>profiles/upload_img/888",
            name: 'myfile',
            onSubmit: function (file, ext) {
                button.text('Uploading...');
                this.disable();
                interval = window.setInterval(function () {
                    var text = button.text();
                    if (text.length < 13) {
                        button.text(text + '.');
                    } else {
                        button.text('Uploading...');
                    }
                }, 200);
            },
            onComplete: function (file, response) {
                button.html('<i class="fa fa-image"></i> Add/Edit Image');
                window.clearInterval(interval);
                this.enable();
                $("#clientpic").attr("src", '<?php echo $this ->request->webroot; ?>img/profile/' + response);
                $('#client_img').val(response);
                alert('Data saved successfully');
            }
        });
    }
    $(function () {
        
        $('.addpro').click(function(){
            $('.productsordered').append('<tr class="" role="">'+
'<td>'+
'<span class="icon-notebook"></span>'+
'</td>'+
'<td> '+$(this).html().replace('<i class="m-icon-swapright m-icon-white"></i>','')+' </td>'+
'<td class="actions">'+
'<span class="label label-info">pending </span>'+
'</td>'+
'<td>'+
'<span class="label label-success">Pass</span>'+
'</td>'+
'</tr>');
        });

                $('.addclientz').click(function () {
            var client_id = $(this).val();
            var addclient = "";
            var msg = '';
            var nameId = 'msg_' + $(this).val();
            if ($(this).is(':checked')) {
                addclient = '1';
                msg = '<span class="msg" style="color:#45B6AF"> Added</span>';
            }
            else {
                addclient = '0';
                msg = '<span class="msg" style="color:red"> Removed</span>';
            }

                        $('.addclientz').each(function () {
                if($(this).val() != client_id){
                    $(this).prop( "disabled", addclient ==1 );
                    var parent = $(this).parent().parent();
                    if(addclient ==1){
                        parent.addClass("disabled");
                    } else {
                        parent.removeClass("disabled");
                    }
                }
            });
            
            $.ajax({
                type: "post",
                data: "client_id=" + client_id + "&add=" + addclient + "&user_id=" +888,
                url: "<?php echo $this ->request->webroot; ?>clients/addprofile",
                success: function () {
                    $('.' + nameId).html(msg);
                }
            })
        });
                $('#save_client_p1').click(function () {

            $('#save_client_p1').text('Saving...');

            $("#pass_form").validate({
                rules: {
                    password: {
                        required: true
                    },
                    retype_password: {
                        required: true,
                        equalTo: "#password"
                    }
                },
                messages: {
                    password: "Please enter a password",
                    retype_password: "Please enter the same password in both boxes"
                },
                submitHandler: function () {
                    $('#pass_form').submit();
                }
            });
        });

    });
</script>
<script>
    $(function () {

        $('.checkhiredriver').click(function () {

            var oid = $(this).attr('id');
            var msgs = '';
            var today = new Date();
            var dd = today.getDate();
            var mm = today.getMonth()+1; //January is 0!
            var Y = today.getFullYear();
            
            if(dd<10) {
                dd='0'+dd
            } 
            
            if(mm<10) {
                mm='0'+mm
            } 
            var tday = Y+'-'+mm+'-'+dd;
            if ($(this).is(":checked")) {
                var hired = 1;
                var hired_date = tday;
                msg = '<span class="msg" style="color:#45B6AF"> Added</span>';
                $('.date_hired').val(tday);
                $('.hired_date').show();
            }
            else {
                var hired = 0;
                var hired_date = '0000-00-00';
                msg = '<span class="msg" style="color:red"> Removed</span>';
                $('.date_hired').val('0000-00-00');
                $('.hired_date').hide();
            }

            $.ajax({
                url: "<?php echo $this ->request->webroot; ?>orders/savedriver/" + oid,
                type: 'post',
                data: 'is_hired=' + hired+'&hired_date='+hired_date,
                success: function () {
                    $('.hired_msg').html(msg);
                }
            })
        });
        
        $('.checkrequalify').click(function(){
             var oid = $(this).attr('id');
            var msgs = '';
            if ($(this).is(":checked")) {
                var hired = 1;
                msg = '<span class="msg" style="color:#45B6AF"> Added</span>';
            }
            else {
                var hired = 0;
                msg = '<span class="msg" style="color:red"> Removed</span>';
            }

            $.ajax({
                url: "<?php echo $this ->request->webroot; ?>orders/requalify/" + oid,
                type: 'post',
                data: 'requalify=' + hired,
                success: function () {
                    $('.req_msg').html(msg);
                }
            })
        })
        /*$('.checkhiredriver').change(function () {
         var msg = '';
         var nameId = 'msg_'+$(this).val();
         if ($(this).is(':checked')) {
         msg = '<span class="msg" style="color:#45B6AF"> Added</span>';

         var url = '
        <?php echo $this ->request->webroot; ?>clients/assignProfile/' + $(this).val() + '/
        888/yes';
         }
         else {
         msg = '<span class="msg" style="color:red">Removed</span>';
         var url = '
        <?php echo $this ->request->webroot; ?>clients/assignProfile/' + $(this).val() + '/
        888/no';
         }

         $.ajax({url: url,success:function(){$('.'+nameId).html(msg);}});
         }); */
    });
</script>
<script>
        function searchClient() {
        var key = $('#searchClient').val();
        $('#clientTable').html('<tbody><tr><td><img src="<?php echo $this ->request->webroot; ?>assets/admin/layout/img/ajax-loading.gif"/></td></tr></tbody>');
        $.ajax({
            url: '<?php echo $this ->request->webroot; ?>clients/getAjaxClient',
            data: 'key=' + key,
            type: 'get',
            success: function (res) {
                $('#clientTable').html(res);
            }
        });
    }
        $(function () {
        $('.scrolldiv').slimScroll({
            height: '250px'
        });

    });
</script>
<script>
    function removeelement(id) {
        return (elem=document.getElementById(id)).parentNode.removeChild(elem);
    }
    function setinnerHTML(id, HTML){
        document.getElementById(id).innerHTML = HTML;
    }
    // $this->request->webroot . 'clients/quickcontact?Type=emailout&amp;user_id=' . $profile->id
    function sendemails() {
        $.ajax({
            url: '<?php echo $this ->request->webroot; ?>clients/quickcontact',
            data: 'Type=emailout&user_id=' + '888',
            type: 'get',
            success: function (res) {
                //alert(res);
                setinnerHTML("removethis", res + ' <i class="fa fa-check"></i>');
                //removeelement("removethis");//remove the button so it only can be clicked once
            },
            failure: function (res){
                alert("Error: " + res);
            }
        });
        return false;
    }
</script>

<style>
    .portlet-body {
        min-height: 250px !important;
    }
</style>
