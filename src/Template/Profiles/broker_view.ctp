                                <link type="text/css" rel="stylesheet" href="/veritas3-0/assets/admin/pages/css/profile.css"> <!--REQUIRED-->
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
				<h1>Profiles Scorecard <small>Broker View</small></h1>
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
<div class="row margin-top-20">
    <div class="col-md-12">

        <div class="profile-content">
            <div class="row">
                <div class="col-md-3">
                    <!-- PORTLET MAIN -->
                    <div class="portlet light profile-sidebar-portlet">
                        <!-- SIDEBAR USERPIC -->
                        <div style="max-width:250px;margin:0 auto;" class="profile-userpic">
                            <img src="/veritas3-0/img/profile/default.png" style="height: auto;" alt="" id="clientpic" class="img-responsive">
                            
                        </div>
                        <!-- END SIDEBAR USERPIC -->
                        <!-- SIDEBAR USER TITLE -->
                        <div class="profile-usertitle">
                            <div class="profile-usertitle-name">
                                Beverly Hills                            </div>

                            <label style="margin-bottom:10px;" class="uniform-inline">
                                                <div class="checker disabled" id="uniform-888">
                                                    <span class="checked"><input type="checkbox" checked="" disabled="disabled" class="checkhiredriver" id="888" value="1" name="stat"></span></div> Intact Policy or Quote# <span class="hired_msg"></span>
                                                </label><br>
                                                <a style="margin-top:2px;width:75%;" class="blue-stripe btn floatleft grey-cascade" href="/veritas3-0/orders/productSelection?driver=888&amp;ordertype=CAR">Order Products A La Carte <i class="m-icon-swapright m-icon-white"></i></a>                        </div>


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

                                            <option value="$p-&gt;profile_type" selected="">Owner Operator</option>

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
            } else if($('.member_type').val()!='5' &amp;&amp; $('.member_type').val()=='7' &amp;&amp; $('.member_type').val()=='8'){
                //var un = $('.uname').val('xxx123145aafgxxxfasfsdgdfhdfh');
                $('.req_driver').removeAttr('required');
            }
            var un = $('.uname').val();

            var element = document.getElementById("emailcreds");
            if(element != null) {
                if (!element.checked) {element.value = "";}
            }
      

            $.ajax({
                url: '/veritas3-0/profiles/check_user/888',
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
                                url: '/veritas3-0/profiles/check_email/888',
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
            var input_field = '&lt;div  class="form-group" &gt;&lt;div class="" style="margin-top:10px;"&gt;&lt;a href="javascript:void(0);" id="addMore' + total_count + '" class="btn btn-primary"&gt;Browse&lt;/a&gt;&lt;input type="hidden" name="profile_doc[]" value="" class="addMore' + total_count + '_doc moredocs" /&gt;&lt;a href="javascript:void(0);" class = "btn btn-danger img_delete" id="delete_addMore' + total_count + '" title =""&gt;Delete&lt;/a&gt;&lt;span&gt;&lt;/span&gt;&lt;/div&gt;&lt;/div&gt;';
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
                    url: "/veritas3-0/profiles/removefiles/" + file,
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
                strs = strs + '&amp;' + $(this).attr('name') + '=' + $(this).val();
            });
            $(':disabled[name]').each(function () {
                strs = strs + '&amp;' + $(this).attr('name') + '=' + $(this).val();
            });
            var adds = "888";
            $.ajax({
                url: '/veritas3-0/profiles/saveprofile/' + adds,
                data: strs,
                type: 'post',
                success: function (res) {
                    res = res.replace(' ', '');
                    if (res != 0 &amp;&amp; !isNaN(res)) {
                        $('#savepro').text("Save Changes");
                        $('.flash').show();
                        $('.flash').fadeOut(3500);
                        window.location.href = '/veritas3-0/profiles/edit/' + res;
                    }
                }

            });

            return false;

        });
        $('#addmore_id').click(function () {
            $('#more_id_div').append('&lt;div id="append_id"&gt;&lt;div class="pad_bot"&gt;&lt;a href="" class="btn btn-primary"&gt;Browse&lt;/a&gt; &lt;a href="javascript:void(0);" id="delete_id_div" class="btn btn-danger"&gt;Delete&lt;/a&gt;&lt;/div&gt;&lt;/div&gt;')
        });

        $('#delete_id_div').live('click', function () {
            $(this).closest('#append_id').remove();
        })

        $('#addmore_trans').click(function () {
            $('#more_trans_div').append('&lt;div id="append_trans"&gt;&lt;div class="pad_bot"&gt;&lt;a href="" class="btn btn-primary"&gt;Browse&lt;/a&gt; &lt;a href="javascript:void(0);" id="delete_trans_div" class="btn btn-danger"&gt;Delete&lt;/a&gt;&lt;/div&gt;&lt;/div&gt;')
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
                                    if (!isNaN(parseFloat(mem_type)) &amp;&amp; isFinite(mem_type)) {
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
                var act = "/veritas3-0/profiles/upload_all/888";
            } else {
                var act = "/veritas3-0/profiles/upload_img/888";
            }
            new AjaxUpload(button, {
                action: act,
                name: 'myfile',
                onSubmit: function (file, ext) {
                    button.text('Uploading...');
                    this.disable();
                    interval = window.setInterval(function () {
                        var text = button.text();
                        if (text.length &lt; 13) {
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
                        button.html('&lt;i class="fa fa-image"&gt;&lt;/i&gt; Add/Edit Image');
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
                        $("#clientpic").attr("src", '/veritas3-0/img/jobs/' + response);
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
                url: '/veritas3-0/profiles/deleteNote/'+ID,
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
                    url: '/veritas3-0/profiles/saveNote/888/'+$('#rid').val() + '/English',
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

<span style="color:red;">subpages/documents/forview.php #INC144</span><br><span style="color:red;">filelist.php #INC158</span><!-- BEGIN PROFILE CONTENT --><div class="row"><div class="clearfix"></div><div class="col-md-12"><!-- BEGIN PORTLET --><div class="portlet"><div class="portlet box yellow"><div class="portlet-title"><div class="caption">Documents</div></div><div style="min-height: 100px !important;" class="portlet-body"><div style="margin-bottom: 8px;" class="col-md-12"><h4 style="margin-left: -7px;"><i class="icon-doc font-blue-hoki"></i><span class="caption-subject bold font-blue-hoki uppercase"> Documents Submitted</span></h4></div><table style="margin-bottom: 0px;" class="table"><tbody><tr role="row" class="even"><td><span class="icon-notebook"></span></td><td><a href="/veritas3-0/documents/view/41/2024/?type=18">Application for Employment</a></td><td class="actions"><span class="label label-sm label-success" style="">Submitted</span></td><td></td></tr></tbody></table><div class="clearfix"></div><!-- END PORTLET --></div></div></div></div></div>
                <!-- BEGIN PROFILE CONTENT -->
                <div class="">
                    <div class="row">

                        <div class="clearfix"></div>
                        <div class="col-md-12">
                            <!-- BEGIN PORTLET -->
                            <div class="portlet">

                                <div class="portlet box yellow">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <a name="2015-09-02 11:51:40"></a>
                                            <i class="fa fa-folder-open-o"></i>Order Score Sheet                                            - 2015-09-02 11:51:40                                        </div>

                                            <a class="btn  small" href="/veritas3-0/orders/vieworder/41/823?order_type=REQ?forms=1,14,72" style="float:right; display:none;">View Order</a>
                                    </div>
                                    <div class="portlet-body">
                                        <div oldclass="table-scrollable">

                                            <div class="col-sm-12"><table class="table-condensed table-striped table-bordered table-hover dataTable no-footer"><tbody><tr><th colspan="3">Order Information (ID: 823)</th></tr><tr><th width="25%">Created on</th><td colspan="2">2015-09-02 11:51:40</td></tr><tr><th>Completed Date</th><td colspan="2">2015-12-02 11:51:40</td></tr><tr><th>Submitted by</th><td colspan="2">Deleted or Missing Data</td></tr><tr><th>Submitted for</th><td width="1%" align="center">888</td><td><a href="/veritas3-0/profiles/view/888" class="nohide">Beverly Hills (Beverly)</a></td></tr><tr><th>Client</th><td align="center">41</td><td>Huron Services Group</td></tr></tbody></table>                <div style="float:right; margin-top: 10px;">
                    <a class="btn btn-lg default green-stripe" href="#">
                        Pass </a><a class="btn btn-lg green" href="#">
                        <i class="fa fa-bar-chart-o"></i>                     </a></div></div>

            
                    <div class="clearfix"></div>
                    <div style="margin-bottom: 8px;" class="col-md-12">
                    <h4 style=""><i class="icon-doc font-blue-hoki"></i>
                    <span class="caption-subject bold font-blue-hoki uppercase">
                    Products Ordered </span></h4>
                    </div>

                    <div class="clearfix"></div>
                    <div style="" class="col-md-12">
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
                

            
                <!-- BEGIN PROFILE CONTENT -->
                <div class="">
                    <div class="row">

                        <div class="clearfix"></div>
                        <div class="col-md-12">
                            <!-- BEGIN PORTLET -->
                            <div class="portlet">

                                <div class="portlet box yellow">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <a name="2015-08-31 11:32:16"></a>
                                            <i class="fa fa-folder-open-o"></i>Order Score Sheet                                            - 2015-08-31 11:32:16                                        </div>

                                            <a class="btn  small" href="/veritas3-0/orders/vieworder/41/783?order_type=CAR?forms=1603,1627" style="float:right; display:none;">View Order</a>
                                    </div>
                                    <div class="portlet-body">
                                        <div oldclass="table-scrollable">

                                            <div class="col-sm-12"><table class="table-condensed table-striped table-bordered table-hover dataTable no-footer"><tbody><tr><th colspan="3">Order Information (ID: 783)</th></tr><tr><th width="25%">Created on</th><td colspan="2">2015-08-31 11:32:16</td></tr><tr><th>Order Type</th><td colspan="2">CAR</td></tr><tr><th>Submitted by</th><td width="1%" align="center">835</td><td><a href="/veritas3-0/profiles/view/835" class="nohide">Cristina Bruno (Cristina)</a></td></tr><tr><th>Submitted for</th><td width="1%" align="center">888</td><td><a href="/veritas3-0/profiles/view/888" class="nohide">Beverly Hills (Beverly)</a></td></tr><tr><th>Client</th><td align="center">41</td><td>Huron Services Group</td></tr></tbody></table>                <div style="float:right; margin-top: 10px;">
                    <a class="btn btn-lg default red-stripe" href="#">
                       FAIL </a><a class="btn btn-lg red" href="#">
                        <i class="fa fa-bar-chart-o"></i>                     </a></div></div>

            
                    <div class="clearfix"></div>
                    <div style="margin-bottom: 8px;" class="col-md-12">
                    <h4 style=""><i class="icon-doc font-blue-hoki"></i>
                    <span class="caption-subject bold font-blue-hoki uppercase">
                    Products Ordered </span></h4>
                    </div>

                    <div class="clearfix"></div>
                    <div style="" class="col-md-12">
                    <table style="margin-bottom: 0px;" class="table">
                    <tbody>

                                <tr role="" class="">
                    <td>
                        <span class="icon-notebook"></span>
                    </td>
										
		
					
                    <td>
                        Autoplus       </td>
		

					
<td class="actions">
<span class="label label-info">pending </span>
</td>
<td><span class="label label-danger">Fail</span></td>


                  
                </tr>
                                <tr role="" class="">
                    <td>
                        <span class="icon-notebook"></span>
                    </td>
										
		
					
                    <td>
                        Letter Of Experience                    </td>
		

					
<td class="actions">
<span class="label label-info">pending </span>
</td>
<td><span class="label label-danger">Fail</span></td>


                  
                </tr>
                
                                                    <tr>
                                                        <td colspan="4">

                                                            <h4 style="margin-left: -7px;"><i class="icon-doc font-blue-hoki"></i>
								<span class="caption-subject bold font-blue-hoki uppercase">
								Documents Submitted </span></h4>

                                                            <div class="clearfix"></div>
                                                        </td>
                                                    </tr>



                                                    <tr role="row" class="even"><td><span class="icon-notebook"></span></td><td><a href="/veritas3-0/documents/view/41/2029/?type=4&amp;order_id=783">Consent Form</a></td><td class="actions"><span class="label label-sm label-success" style="">Submitted</span></td><td></td></tr><tr role="row" class="odd"><td><span class="icon-notebook"></span></td><td><a href="/veritas3-0/documents/view/41/2028/?type=9&amp;order_id=783">Letter of Experience</a></td><td class="actions"><span class="label label-sm label-success" style="">Submitted</span></td><td></td></tr><tr role="row" class="even"><td><span class="icon-notebook"></span></td><td><a href="/veritas3-0/documents/view/41/2030/?type=15&amp;order_id=783">Upload ID/Documents</a></td><td class="actions"><span class="label label-sm label-success" style="">Submitted</span></td><td></td></tr></tbody></table><table class="table-condensed table-striped table-bordered table-hover dataTable no-footer"></table>                                                    
                                                        
                                                    
                                                    
                                                


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

                    <!-- END PROFILE CONTENT -->                                            </div>
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
                                        </td><td width="50" style="border-top:none;"><img style="max-width: 50px;" src="/veritas3-0/img/logos/MEELogo.png"></td><td style="border-top:none;">
                                            <label for="c_0">Challenger Motor Freight </label><span class="msg_17"></span></td>
                                    </tr>

                                    
                                    <tr>
                                        <td width="1"><div class="checker disabled" id="uniform-c_1"><span><input type="checkbox" class="addclientz" value="25" id="c_1" disabled="disabled"></span></div>
                                        </td><td width="50"><img style="max-width: 50px;" src="/veritas3-0/img/logos/MEELogo.png"></td><td>
                                            <label for="c_1">Test Dummy</label><span class="msg_25"></span></td>
                                    </tr>

                                    
                                    <tr>
                                        <td width="1"><div class="checker disabled" id="uniform-c_2"><span><input type="checkbox" class="addclientz" value="26" id="c_2" disabled="disabled"></span></div>
                                        </td><td width="50"><img style="max-width: 50px;" src="/veritas3-0/img/logos/MEELogo.png"></td><td>
                                            <label for="c_2">Gordon Food Service</label><span class="msg_26"></span></td>
                                    </tr>

                                    
                                    <tr>
                                        <td width="1"><div class="checker disabled" id="uniform-c_3"><span><input type="checkbox" class="addclientz" value="30" id="c_3" disabled="disabled"></span></div>
                                        </td><td width="50"><img style="max-width: 50px;" src="/veritas3-0/img/logos/MEELogo.png"></td><td>
                                            <label for="c_3">Erb Transport </label><span class="msg_30"></span></td>
                                    </tr>

                                    
                                    <tr>
                                        <td width="1"><div class="checker disabled" id="uniform-c_4"><span><input type="checkbox" class="addclientz" value="37" id="c_4" disabled="disabled"></span></div>
                                        </td><td width="50"><img style="max-width: 50px;" src="/veritas3-0/img/logos/MEELogo.png"></td><td>
                                            <label for="c_4">Patriot Source 1</label><span class="msg_37"></span></td>
                                    </tr>

                                    
                                    <tr>
                                        <td width="1"><div class="checker disabled" id="uniform-c_5"><span><input type="checkbox" class="addclientz" value="38" id="c_5" disabled="disabled"></span></div>
                                        </td><td width="50"><img style="max-width: 50px;" src="/veritas3-0/img/logos/MEELogo.png"></td><td>
                                            <label for="c_5">Revolution Staffing</label><span class="msg_38"></span></td>
                                    </tr>

                                    
                                    <tr>
                                        <td width="1"><div class="checker disabled" id="uniform-c_6"><span class="checked"><input type="checkbox" class="addclientz" value="41" checked="" id="c_6" disabled="disabled"></span></div>
                                        </td><td width="50"><img style="max-width: 50px;" src="/veritas3-0/img/logos/MEELogo.png"></td><td>
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
            url:"/veritas3-0/profiles/ptypesenb/"+id,
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
                
                <pre class="cake-error"><a href="javascript:void(0);" onclick="document.getElementById('cakeErr55e9c20c9725e-trace').style.display = (document.getElementById('cakeErr55e9c20c9725e-trace').style.display == 'none' ? '' : 'none');"><b>Notice</b> (8)</a>: Undefined variable: client_types [<b>ROOT\webroot\subpages\profile\ctype.php</b>, line <b>30</b>]<div id="cakeErr55e9c20c9725e-trace" class="cake-stack-trace" style="display: none;"><a href="javascript:void(0);" onclick="document.getElementById('cakeErr55e9c20c9725e-code').style.display = (document.getElementById('cakeErr55e9c20c9725e-code').style.display == 'none' ? '' : 'none')">Code</a> <a href="javascript:void(0);" onclick="document.getElementById('cakeErr55e9c20c9725e-context').style.display = (document.getElementById('cakeErr55e9c20c9725e-context').style.display == 'none' ? '' : 'none')">Context</a><pre id="cakeErr55e9c20c9725e-code" class="cake-code-dump" style="display: none;"><code><span style="color: #000000">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #0000BB">&lt;?php
</span></span></code>
<span class="code-highlight"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$ct&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">explode</span><span style="color: #007700">(</span><span style="color: #DD0000">","</span><span style="color: #007700">,</span><span style="color: #0000BB">$profile</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">ctypes</span><span style="color: #007700">);
</span></span></code></span>
<code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">foreach(</span><span style="color: #0000BB">$client_types&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$product</span><span style="color: #007700">)
</span></span></code></pre><pre id="cakeErr55e9c20c9725e-context" class="cake-context" style="display: none;">$viewFile = &#039;F:\wamp\www\veritas3-0\src\Template\Profiles\edit.ctp&#039;
$dataForView = [
	&#039;subdocuments&#039; =&gt; object(Cake\ORM\Query) {

		&#039;sql&#039; =&gt; &#039;SELECT `subdocuments`.`id` AS `subdocuments__id`, `subdocuments`.`title` AS `subdocuments__title`, `subdocuments`.`display` AS `subdocuments__display`, `subdocuments`.`form` AS `subdocuments__form`, `subdocuments`.`table_name` AS `subdocuments__table_name`, `subdocuments`.`orders` AS `subdocuments__orders`, `subdocuments`.`color_id` AS `subdocuments__color_id`, `subdocuments`.`titleFrench` AS `subdocuments__titleFrench`, `subdocuments`.`ProductID` AS `subdocuments__ProductID`, `subdocuments`.`icon` AS `subdocuments__icon` FROM `subdocuments` `subdocuments`&#039;,
		&#039;params&#039; =&gt; [[maximum depth reached]],
		&#039;defaultTypes&#039; =&gt; [
			[maximum depth reached]
		],
		&#039;decorators&#039; =&gt; (int) 0,
		&#039;executed&#039; =&gt; true,
		&#039;hydrate&#039; =&gt; true,
		&#039;buffered&#039; =&gt; true,
		&#039;formatters&#039; =&gt; (int) 0,
		&#039;mapReducers&#039; =&gt; (int) 0,
		&#039;contain&#039; =&gt; [[maximum depth reached]],
		&#039;matching&#039; =&gt; [[maximum depth reached]],
		&#039;extraOptions&#039; =&gt; [[maximum depth reached]],
		&#039;repository&#039; =&gt; object(Cake\ORM\Table) {}
	
	},
	&#039;documents&#039; =&gt; object(Cake\ORM\Query) {

		&#039;sql&#039; =&gt; &#039;SELECT `documents`.`id` AS `documents__id`, `documents`.`order_id` AS `documents__order_id`, `documents`.`document_type` AS `documents__document_type`, `documents`.`sub_doc_id` AS `documents__sub_doc_id`, `documents`.`title` AS `documents__title`, `documents`.`description` AS `documents__description`, `documents`.`scale` AS `documents__scale`, `documents`.`reason` AS `documents__reason`, `documents`.`suggestion` AS `documents__suggestion`, `documents`.`user_id` AS `documents__user_id`, `documents`.`client_id` AS `documents__client_id`, `documents`.`uploaded_for` AS `documents__uploaded_for`, `documents`.`created` AS `documents__created`, `documents`.`draft` AS `documents__draft`, `documents`.`file` AS `documents__file` FROM `documents` `documents` WHERE (`order_id` = :c0 AND `uploaded_for` = :c1) ORDER BY id DESC&#039;,
		&#039;params&#039; =&gt; [
			[maximum depth reached]
		],
		&#039;defaultTypes&#039; =&gt; [
			[maximum depth reached]
		],
		&#039;decorators&#039; =&gt; (int) 0,
		&#039;executed&#039; =&gt; true,
		&#039;hydrate&#039; =&gt; true,
		&#039;buffered&#039; =&gt; true,
		&#039;formatters&#039; =&gt; (int) 0,
		&#039;mapReducers&#039; =&gt; (int) 0,
		&#039;contain&#039; =&gt; [[maximum depth reached]],
		&#039;matching&#039; =&gt; [[maximum depth reached]],
		&#039;extraOptions&#039; =&gt; [[maximum depth reached]],
		&#039;repository&#039; =&gt; object(Cake\ORM\Table) {}
	
	},
	&#039;client&#039; =&gt; object(Cake\ORM\Entity) {

		&#039;new&#039; =&gt; false,
		&#039;accessible&#039; =&gt; [
			[maximum depth reached]
		],
		&#039;properties&#039; =&gt; [
			[maximum depth reached]
		],
		&#039;dirty&#039; =&gt; [[maximum depth reached]],
		&#039;original&#039; =&gt; [[maximum depth reached]],
		&#039;virtual&#039; =&gt; [[maximum depth reached]],
		&#039;errors&#039; =&gt; [[maximum depth reached]],
		&#039;repository&#039; =&gt; &#039;clients&#039;
	
	},
	&#039;clients&#039; =&gt; &#039;41&#039;,
	&#039;id&#039; =&gt; &#039;888&#039;,
	&#039;disabled&#039; =&gt; (int) 1,
	&#039;profile&#039; =&gt; object(Cake\ORM\Entity) {

		&#039;new&#039; =&gt; false,
		&#039;accessible&#039; =&gt; [
			[maximum depth reached]
		],
		&#039;properties&#039; =&gt; [
			[maximum depth reached]
		],
		&#039;dirty&#039; =&gt; [
			[maximum depth reached]
		],
		&#039;original&#039; =&gt; [[maximum depth reached]],
		&#039;virtual&#039; =&gt; [[maximum depth reached]],
		&#039;errors&#039; =&gt; [[maximum depth reached]],
		&#039;repository&#039; =&gt; &#039;Profiles&#039;
	
	},
	&#039;orders&#039; =&gt; object(Cake\ORM\Query) {

		&#039;sql&#039; =&gt; &#039;SELECT `orders`.`id` AS `orders__id`, `orders`.`title` AS `orders__title`, `orders`.`description` AS `orders__description`, `orders`.`scale` AS `orders__scale`, `orders`.`reason` AS `orders__reason`, `orders`.`suggestion` AS `orders__suggestion`, `orders`.`user_id` AS `orders__user_id`, `orders`.`client_id` AS `orders__client_id`, `orders`.`uploaded_for` AS `orders__uploaded_for`, `orders`.`created` AS `orders__created`, `orders`.`division` AS `orders__division`, `orders`.`draft` AS `orders__draft`, `orders`.`conf_recruiter_name` AS `orders__conf_recruiter_name`, `orders`.`conf_driver_name` AS `orders__conf_driver_name`, `orders`.`conf_date` AS `orders__conf_date`, `orders`.`ins_id` AS `orders__ins_id`, `orders`.`ebs_id` AS `orders__ebs_id`, `orders`.`response` AS `orders__response`, `orders`.`ins_pdi` AS `orders__ins_pdi`, `orders`.`ebs_pdi` AS `orders__ebs_pdi`, `orders`.`recruiter_signature` AS `orders__recruiter_signature`, `orders`.`ins_79` AS `orders__ins_79`, `orders`.`ins_79_binary` AS `orders__ins_79_binary`, `orders`.`ins_1` AS `orders__ins_1`, `orders`.`ins_1_binary` AS `orders__ins_1_binary`, `orders`.`ins_14` AS `orders__ins_14`, `orders`.`ins_14_binary` AS `orders__ins_14_binary`, `orders`.`ins_77` AS `orders__ins_77`, `orders`.`ins_77_binary` AS `orders__ins_77_binary`, `orders`.`ins_78` AS `orders__ins_78`, `orders`.`ins_78_binary` AS `orders__ins_78_binary`, `orders`.`ebs_1603` AS `orders__ebs_1603`, `orders`.`ebs_1603_binary` AS `orders__ebs_1603_binary`, `orders`.`ebs_1627` AS `orders__ebs_1627`, `orders`.`ebs_1627_binary` AS `orders__ebs_1627_binary`, `orders`.`ebs_1650` AS `orders__ebs_1650`, `orders`.`ebs_1650_binary` AS `orders__ebs_1650_binary`, `orders`.`ins_72` AS `orders__ins_72`, `orders`.`ins_72_binary` AS `orders__ins_72_binary`, `orders`.`bright_planet` AS `orders__bright_planet`, `orders`.`final_show` AS `orders__final_show`, `orders`.`is_hired` AS `orders__is_hired`, `orders`.`bright_planet_binary` AS `orders__bright_planet_binary`, `orders`.`abc` AS `orders__abc`, `orders`.`bright_planet_html_binary` AS `orders__bright_planet_html_binary`, `orders`.`order_type` AS `orders__order_type`, `orders`.`forms` AS `orders__forms`, `orders`.`complete` AS `orders__complete`, `orders`.`ins_31` AS `orders__ins_31`, `orders`.`ins_31_binary` AS `orders__ins_31_binary`, `orders`.`ins_32` AS `orders__ins_32`, `orders`.`ins_32_binary` AS `orders__ins_32_binary`, `orders`.`complete_writing` AS `orders__complete_writing`, `Profiles`.`id` AS `Profiles__id`, `Profiles`.`title` AS `Profiles__title`, `Profiles`.`fname` AS `Profiles__fname`, `Profiles`.`lname` AS `Profiles__lname`, `Profiles`.`username` AS `Profiles__username`, `Profiles`.`email` AS `Profiles__email`, `Profiles`.`password` AS `Profiles__password`, `Profiles`.`driver` AS `Profiles__driver`, `Profiles`.`address` AS `Profiles__address`, `Profiles`.`street` AS `Profiles__street`, `Profiles`.`city` AS `Profiles__city`, `Profiles`.`province` AS `Profiles__province`, `Profiles`.`postal` AS `Profiles__postal`, `Profiles`.`country` AS `Profiles__country`, `Profiles`.`phone` AS `Profiles__phone`, `Profiles`.`image` AS `Profiles__image`, `Profiles`.`admin` AS `Profiles__admin`, `Profiles`.`super` AS `Profiles__super`, `Profiles`.`profile_type` AS `Profiles__profile_type`, `Profiles`.`driver_license_no` AS `Profiles__driver_license_no`, `Profiles`.`driver_province` AS `Profiles__driver_province`, `Profiles`.`us_dot` AS `Profiles__us_dot`, `Profiles`.`applicants_email` AS `Profiles__applicants_email`, `Profiles`.`transclick` AS `Profiles__transclick`, `Profiles`.`mname` AS `Profiles__mname`, `Profiles`.`dob` AS `Profiles__dob`, `Profiles`.`expiry_date` AS `Profiles__expiry_date`, `Profiles`.`gender` AS `Profiles__gender`, `Profiles`.`isb_id` AS `Profiles__isb_id`, `Profiles`.`placeofbirth` AS `Profiles__placeofbirth`, `Profiles`.`created_by` AS `Profiles__created_by`, `Profiles`.`created` AS `Profiles__created`, `Profiles`.`drafts` AS `Profiles__drafts`, `Profiles`.`is_hired` AS `Profiles__is_hired`, `Profiles`.`ptypes` AS `Profiles__ptypes`, `Profiles`.`ctypes` AS `Profiles__ctypes`, `Profiles`.`language` AS `Profiles__language`, `Profiles`.`automatic_email` AS `Profiles__automatic_email`, `Profiles`.`automatic_sent` AS `Profiles__automatic_sent`, `Profiles`.`hear` AS `Profiles__hear`, `Profiles`.`requalify` AS `Profiles__requalify`, `Profiles`.`hired_date` AS `Profiles__hired_date`, `Profiles`.`emailsent` AS `Profiles__emailsent`, `Profiles`.`send_to` AS `Profiles__send_to`, `Profiles`.`sin` AS `Profiles__sin`, `Profiles`.`otherinfo` AS `Profiles__otherinfo`, `Clients`.`id` AS `Clients__id`, `Clients`.`title` AS `Clients__title`, `Clients`.`description` AS `Clients__description`, `Clients`.`description_fre` AS `Clients__description_fre`, `Clients`.`company_name` AS `Clients__company_name`, `Clients`.`customer_type` AS `Clients__customer_type`, `Clients`.`sig_fname` AS `Clients__sig_fname`, `Clients`.`sig_lname` AS `Clients__sig_lname`, `Clients`.`company_phone` AS `Clients__company_phone`, `Clients`.`sig_email` AS `Clients__sig_email`, `Clients`.`company_address` AS `Clients__company_address`, `Clients`.`city` AS `Clients__city`, `Clients`.`postal` AS `Clients__postal`, `Clients`.`province` AS `Clients__province`, `Clients`.`country` AS `Clients__country`, `Clients`.`admin_fname` AS `Clients__admin_fname`, `Clients`.`admin_lname` AS `Clients__admin_lname`, `Clients`.`admin_email` AS `Clients__admin_email`, `Clients`.`admin_phone` AS `Clients__admin_phone`, `Clients`.`image` AS `Clients__image`, `Clients`.`site` AS `Clients__site`, `Clients`.`addedBy` AS `Clients__addedBy`, `Clients`.`isApproved` AS `Clients__isApproved`, `Clients`.`date_start` AS `Clients__date_start`, `Clients`.`date_end` AS `Clients__date_end`, `Clients`.`referred_by` AS `Clients__referred_by`, `Clients`.`agreement_number` AS `Clients__agreement_number`, `Clients`.`reverification` AS `Clients__reverification`, `Clients`.`sacc_number` AS `Clients__sacc_number`, `Clients`.`document` AS `Clients__document`, `Clients`.`billing_contact` AS `Clients__billing_contact`, `Clients`.`billing_address` AS `Clients__billing_address`, `Clients`.`billing_instructions` AS `Clients__billing_instructions`, `Clients`.`invoice_terms` AS `Clients__invoice_terms`, `Clients`.`recruiter_id` AS `Clients__recruiter_id`, `Clients`.`profile_id` AS `Clients__profile_id`, `Clients`.`contact_id` AS `Clients__contact_id`, `Clients`.`is_special` AS `Clients__is_special`, `Clients`.`status` AS `Clients__status`, `Clients`.`billing_city` AS `Clients__billing_city`, `Clients`.`billing_province` AS `Clients__billing_province`, `Clients`.`billing_postal_code` AS `Clients__billing_postal_code`, `Clients`.`division` AS `Clients__division`, `Clients`.`uploaded_for` AS `Clients__uploaded_for`, `Clients`.`created` AS `Clients__created`, `Clients`.`drafts` AS `Clients__drafts`, `Clients`.`client_date` AS `Clients__client_date`, `Clients`.`requalify_re` AS `Clients__requalify_re`, `Clients`.`requalify` AS `Clients__requalify`, `Clients`.`requalify_date` AS `Clients__requalify_date`, `Clients`.`requalify_frequency` AS `Clients__requalify_frequency`, `Clients`.`requalify_product` AS `Clients__requalify_product`, `Clients`.`forceemail` AS `Clients__forceemail` FROM `orders` `orders` LEFT JOIN `profiles` `Profiles` ON `Profiles`.`id` = (`orders`.`uploaded_for`) LEFT JOIN `clients` `Clients` ON `Clients`.`id` = (`orders`.`client_id`) WHERE (`orders`.`uploaded_for` = :c0 AND `orders`.`draft` = :c1) ORDER BY orders.id DESC&#039;,
		&#039;params&#039; =&gt; [
			[maximum depth reached]
		],
		&#039;defaultTypes&#039; =&gt; [
			[maximum depth reached]
		],
		&#039;decorators&#039; =&gt; (int) 0,
		&#039;executed&#039; =&gt; true,
		&#039;hydrate&#039; =&gt; true,
		&#039;buffered&#039; =&gt; true,
		&#039;formatters&#039; =&gt; (int) 0,
		&#039;mapReducers&#039; =&gt; (int) 0,
		&#039;contain&#039; =&gt; [
			[maximum depth reached]
		],
		&#039;matching&#039; =&gt; [[maximum depth reached]],
		&#039;extraOptions&#039; =&gt; [[maximum depth reached]],
		&#039;repository&#039; =&gt; object(App\Model\Table\OrdersTable) {}
	
	},
	&#039;doc_comp&#039; =&gt; object(App\Controller\Component\DocumentComponent) {
		request =&gt; object(Cake\Network\Request) {}
		components =&gt; [[maximum depth reached]]
		[protected] _registry =&gt; object(Cake\Controller\ComponentRegistry) {}
		[protected] _defaultConfig =&gt; [[maximum depth reached]]
		[protected] _componentMap =&gt; [[maximum depth reached]]
		[protected] _config =&gt; [[maximum depth reached]]
		[protected] _configInitialized =&gt; true
	},
	&#039;logos1&#039; =&gt; object(Cake\ORM\ResultSet) {

		&#039;query&#039; =&gt; object(Cake\ORM\Query) {},
		&#039;items&#039; =&gt; [
			[maximum depth reached]
		]
	
	},
	&#039;logos&#039; =&gt; object(Cake\ORM\ResultSet) {

		&#039;query&#039; =&gt; object(Cake\ORM\Query) {},
		&#039;items&#039; =&gt; [
			[maximum depth reached]
		]
	
	},
	&#039;client_docs&#039; =&gt; object(Cake\ORM\ResultSet) {

		&#039;query&#039; =&gt; object(Cake\ORM\Query) {},
		&#039;items&#039; =&gt; [[maximum depth reached]]
	
	},
	&#039;uid&#039; =&gt; &#039;888&#039;,
	&#039;ptypes&#039; =&gt; object(Cake\ORM\ResultSet) {

		&#039;query&#039; =&gt; object(Cake\ORM\Query) {},
		&#039;items&#039; =&gt; [
			[maximum depth reached]
		]
	
	},
	&#039;theproductlist&#039; =&gt; object(Cake\ORM\Query) {

		&#039;sql&#039; =&gt; &#039;SELECT `order_products`.`id` AS `order_products__id`, `order_products`.`title` AS `order_products__title`, `order_products`.`enable` AS `order_products__enable`, `order_products`.`number` AS `order_products__number`, `order_products`.`titleFrench` AS `order_products__titleFrench` FROM `order_products` `order_products`&#039;,
		&#039;params&#039; =&gt; [[maximum depth reached]],
		&#039;defaultTypes&#039; =&gt; [
			[maximum depth reached]
		],
		&#039;decorators&#039; =&gt; (int) 0,
		&#039;executed&#039; =&gt; true,
		&#039;hydrate&#039; =&gt; true,
		&#039;buffered&#039; =&gt; true,
		&#039;formatters&#039; =&gt; (int) 0,
		&#039;mapReducers&#039; =&gt; (int) 0,
		&#039;contain&#039; =&gt; [[maximum depth reached]],
		&#039;matching&#039; =&gt; [[maximum depth reached]],
		&#039;extraOptions&#039; =&gt; [[maximum depth reached]],
		&#039;repository&#039; =&gt; object(Cake\ORM\Table) {}
	
	},
	&#039;products&#039; =&gt; object(Cake\ORM\Query) {

		&#039;sql&#039; =&gt; &#039;SELECT `product_types`.`ID` AS `product_types__ID`, `product_types`.`Acronym` AS `product_types__Acronym`, `product_types`.`Name` AS `product_types__Name`, `product_types`.`Description` AS `product_types__Description`, `product_types`.`Alias` AS `product_types__Alias`, `product_types`.`Color` AS `product_types__Color`, `product_types`.`Checked` AS `product_types__Checked`, `product_types`.`Sidebar_Alias` AS `product_types__Sidebar_Alias`, `product_types`.`ButtonColor` AS `product_types__ButtonColor`, `product_types`.`Blocked` AS `product_types__Blocked`, `product_types`.`doc_ids` AS `product_types__doc_ids`, `product_types`.`Blocks_Alias` AS `product_types__Blocks_Alias`, `product_types`.`Block_Color` AS `product_types__Block_Color`, `product_types`.`NameFrench` AS `product_types__NameFrench`, `product_types`.`DescriptionFrench` AS `product_types__DescriptionFrench`, `product_types`.`Visible` AS `product_types__Visible`, `product_types`.`Bypass` AS `product_types__Bypass`, `product_types`.`Icon` AS `product_types__Icon`, `product_types`.`Price` AS `product_types__Price`, `product_types`.`profile_types` AS `product_types__profile_types` FROM `product_types` `product_types`&#039;,
		&#039;params&#039; =&gt; [[maximum depth reached]],
		&#039;defaultTypes&#039; =&gt; [
			[maximum depth reached]
		],
		&#039;decorators&#039; =&gt; (int) 0,
		&#039;executed&#039; =&gt; true,
		&#039;hydrate&#039; =&gt; true,
		&#039;buffered&#039; =&gt; true,
		&#039;formatters&#039; =&gt; (int) 0,
		&#039;mapReducers&#039; =&gt; (int) 0,
		&#039;contain&#039; =&gt; [[maximum depth reached]],
		&#039;matching&#039; =&gt; [[maximum depth reached]],
		&#039;extraOptions&#039; =&gt; [[maximum depth reached]],
		&#039;repository&#039; =&gt; object(Cake\ORM\Table) {}
	
	},
	&#039;Sidebar&#039; =&gt; object(Cake\ORM\Entity) {

		&#039;new&#039; =&gt; false,
		&#039;accessible&#039; =&gt; [
			[maximum depth reached]
		],
		&#039;properties&#039; =&gt; [
			[maximum depth reached]
		],
		&#039;dirty&#039; =&gt; [[maximum depth reached]],
		&#039;original&#039; =&gt; [[maximum depth reached]],
		&#039;virtual&#039; =&gt; [[maximum depth reached]],
		&#039;errors&#039; =&gt; [[maximum depth reached]],
		&#039;repository&#039; =&gt; &#039;Sidebar&#039;
	
	},
	&#039;Me&#039; =&gt; (int) 4,
	&#039;Manager&#039; =&gt; object(App\Controller\Component\ManagerComponent) {
		request =&gt; object(Cake\Network\Request) {}
		components =&gt; [[maximum depth reached]]
		Controller =&gt; object(App\Controller\ProfilesController) {}
		[protected] _registry =&gt; object(Cake\Controller\ComponentRegistry) {}
		[protected] _defaultConfig =&gt; [[maximum depth reached]]
		[protected] _componentMap =&gt; [[maximum depth reached]]
		[protected] _config =&gt; [[maximum depth reached]]
		[protected] _configInitialized =&gt; true
	}
]
$subdocuments = object(Cake\ORM\Query) {

	&#039;sql&#039; =&gt; &#039;SELECT `subdocuments`.`id` AS `subdocuments__id`, `subdocuments`.`title` AS `subdocuments__title`, `subdocuments`.`display` AS `subdocuments__display`, `subdocuments`.`form` AS `subdocuments__form`, `subdocuments`.`table_name` AS `subdocuments__table_name`, `subdocuments`.`orders` AS `subdocuments__orders`, `subdocuments`.`color_id` AS `subdocuments__color_id`, `subdocuments`.`titleFrench` AS `subdocuments__titleFrench`, `subdocuments`.`ProductID` AS `subdocuments__ProductID`, `subdocuments`.`icon` AS `subdocuments__icon` FROM `subdocuments` `subdocuments`&#039;,
	&#039;params&#039; =&gt; [],
	&#039;defaultTypes&#039; =&gt; [
		&#039;subdocuments.id&#039; =&gt; &#039;integer&#039;,
		&#039;id&#039; =&gt; &#039;integer&#039;,
		&#039;subdocuments.title&#039; =&gt; &#039;string&#039;,
		&#039;title&#039; =&gt; &#039;string&#039;,
		&#039;subdocuments.display&#039; =&gt; &#039;integer&#039;,
		&#039;display&#039; =&gt; &#039;integer&#039;,
		&#039;subdocuments.form&#039; =&gt; &#039;string&#039;,
		&#039;form&#039; =&gt; &#039;string&#039;,
		&#039;subdocuments.table_name&#039; =&gt; &#039;string&#039;,
		&#039;table_name&#039; =&gt; &#039;string&#039;,
		&#039;subdocuments.orders&#039; =&gt; &#039;integer&#039;,
		&#039;orders&#039; =&gt; &#039;integer&#039;,
		&#039;subdocuments.color_id&#039; =&gt; &#039;integer&#039;,
		&#039;color_id&#039; =&gt; &#039;integer&#039;,
		&#039;subdocuments.titleFrench&#039; =&gt; &#039;string&#039;,
		&#039;titleFrench&#039; =&gt; &#039;string&#039;,
		&#039;subdocuments.ProductID&#039; =&gt; &#039;integer&#039;,
		&#039;ProductID&#039; =&gt; &#039;integer&#039;,
		&#039;subdocuments.icon&#039; =&gt; &#039;string&#039;,
		&#039;icon&#039; =&gt; &#039;string&#039;
	],
	&#039;decorators&#039; =&gt; (int) 0,
	&#039;executed&#039; =&gt; true,
	&#039;hydrate&#039; =&gt; true,
	&#039;buffered&#039; =&gt; true,
	&#039;formatters&#039; =&gt; (int) 0,
	&#039;mapReducers&#039; =&gt; (int) 0,
	&#039;contain&#039; =&gt; [],
	&#039;matching&#039; =&gt; [],
	&#039;extraOptions&#039; =&gt; [],
	&#039;repository&#039; =&gt; object(Cake\ORM\Table) {}

}
$documents = object(Cake\ORM\Query) {

	&#039;sql&#039; =&gt; &#039;SELECT `documents`.`id` AS `documents__id`, `documents`.`order_id` AS `documents__order_id`, `documents`.`document_type` AS `documents__document_type`, `documents`.`sub_doc_id` AS `documents__sub_doc_id`, `documents`.`title` AS `documents__title`, `documents`.`description` AS `documents__description`, `documents`.`scale` AS `documents__scale`, `documents`.`reason` AS `documents__reason`, `documents`.`suggestion` AS `documents__suggestion`, `documents`.`user_id` AS `documents__user_id`, `documents`.`client_id` AS `documents__client_id`, `documents`.`uploaded_for` AS `documents__uploaded_for`, `documents`.`created` AS `documents__created`, `documents`.`draft` AS `documents__draft`, `documents`.`file` AS `documents__file` FROM `documents` `documents` WHERE (`order_id` = :c0 AND `uploaded_for` = :c1) ORDER BY id DESC&#039;,
	&#039;params&#039; =&gt; [
		&#039;:c0&#039; =&gt; [
			[maximum depth reached]
		],
		&#039;:c1&#039; =&gt; [
			[maximum depth reached]
		]
	],
	&#039;defaultTypes&#039; =&gt; [
		&#039;documents.id&#039; =&gt; &#039;integer&#039;,
		&#039;id&#039; =&gt; &#039;integer&#039;,
		&#039;documents.order_id&#039; =&gt; &#039;integer&#039;,
		&#039;order_id&#039; =&gt; &#039;integer&#039;,
		&#039;documents.document_type&#039; =&gt; &#039;string&#039;,
		&#039;document_type&#039; =&gt; &#039;string&#039;,
		&#039;documents.sub_doc_id&#039; =&gt; &#039;integer&#039;,
		&#039;sub_doc_id&#039; =&gt; &#039;integer&#039;,
		&#039;documents.title&#039; =&gt; &#039;string&#039;,
		&#039;title&#039; =&gt; &#039;string&#039;,
		&#039;documents.description&#039; =&gt; &#039;text&#039;,
		&#039;description&#039; =&gt; &#039;text&#039;,
		&#039;documents.scale&#039; =&gt; &#039;integer&#039;,
		&#039;scale&#039; =&gt; &#039;integer&#039;,
		&#039;documents.reason&#039; =&gt; &#039;text&#039;,
		&#039;reason&#039; =&gt; &#039;text&#039;,
		&#039;documents.suggestion&#039; =&gt; &#039;text&#039;,
		&#039;suggestion&#039; =&gt; &#039;text&#039;,
		&#039;documents.user_id&#039; =&gt; &#039;integer&#039;,
		&#039;user_id&#039; =&gt; &#039;integer&#039;,
		&#039;documents.client_id&#039; =&gt; &#039;integer&#039;,
		&#039;client_id&#039; =&gt; &#039;integer&#039;,
		&#039;documents.uploaded_for&#039; =&gt; &#039;integer&#039;,
		&#039;uploaded_for&#039; =&gt; &#039;integer&#039;,
		&#039;documents.created&#039; =&gt; &#039;string&#039;,
		&#039;created&#039; =&gt; &#039;string&#039;,
		&#039;documents.draft&#039; =&gt; &#039;integer&#039;,
		&#039;draft&#039; =&gt; &#039;integer&#039;,
		&#039;documents.file&#039; =&gt; &#039;string&#039;,
		&#039;file&#039; =&gt; &#039;string&#039;
	],
	&#039;decorators&#039; =&gt; (int) 0,
	&#039;executed&#039; =&gt; true,
	&#039;hydrate&#039; =&gt; true,
	&#039;buffered&#039; =&gt; true,
	&#039;formatters&#039; =&gt; (int) 0,
	&#039;mapReducers&#039; =&gt; (int) 0,
	&#039;contain&#039; =&gt; [],
	&#039;matching&#039; =&gt; [],
	&#039;extraOptions&#039; =&gt; [],
	&#039;repository&#039; =&gt; object(Cake\ORM\Table) {}

}
$client = object(Cake\ORM\Entity) {

	&#039;new&#039; =&gt; false,
	&#039;accessible&#039; =&gt; [
		&#039;*&#039; =&gt; true
	],
	&#039;properties&#039; =&gt; [
		&#039;id&#039; =&gt; (int) 41,
		&#039;title&#039; =&gt; &#039;&#039;,
		&#039;description&#039; =&gt; &#039;&#039;,
		&#039;description_fre&#039; =&gt; &#039;&#039;,
		&#039;company_name&#039; =&gt; &#039;Huron Services Group&#039;,
		&#039;customer_type&#039; =&gt; (int) 2,
		&#039;sig_fname&#039; =&gt; &#039;John&#039;,
		&#039;sig_lname&#039; =&gt; &#039;Harrison&#039;,
		&#039;company_phone&#039; =&gt; &#039;(905) 564-6040&#039;,
		&#039;sig_email&#039; =&gt; &#039;j.harrison@callcpccanada.com&#039;,
		&#039;company_address&#039; =&gt; &#039;1415 Bonhill Rd&#039;,
		&#039;city&#039; =&gt; &#039;Mississauga&#039;,
		&#039;postal&#039; =&gt; &#039;L5T 1R2&#039;,
		&#039;province&#039; =&gt; &#039;&#039;,
		&#039;country&#039; =&gt; &#039;&#039;,
		&#039;admin_fname&#039; =&gt; &#039;&#039;,
		&#039;admin_lname&#039; =&gt; &#039;&#039;,
		&#039;admin_email&#039; =&gt; &#039;&#039;,
		&#039;admin_phone&#039; =&gt; &#039;&#039;,
		&#039;image&#039; =&gt; &#039;119765_834537.jpg&#039;,
		&#039;site&#039; =&gt; &#039;&#039;,
		&#039;addedBy&#039; =&gt; null,
		&#039;isApproved&#039; =&gt; null,
		&#039;date_start&#039; =&gt; &#039;2015-08-24&#039;,
		&#039;date_end&#039; =&gt; &#039;2016-08-29&#039;,
		&#039;referred_by&#039; =&gt; &#039;ISB&#039;,
		&#039;agreement_number&#039; =&gt; null,
		&#039;reverification&#039; =&gt; &#039;&#039;,
		&#039;sacc_number&#039; =&gt; null,
		&#039;document&#039; =&gt; &#039;&#039;,
		&#039;billing_contact&#039; =&gt; &#039;Deby Melillo&#039;,
		&#039;billing_address&#039; =&gt; &#039;1415 Bonhill Rd&#039;,
		&#039;billing_instructions&#039; =&gt; &#039;centralized&#039;,
		&#039;invoice_terms&#039; =&gt; &#039;monthly&#039;,
		&#039;recruiter_id&#039; =&gt; &#039;&#039;,
		&#039;profile_id&#039; =&gt; &#039;4,834,835,862,871,872,884,885,886,887,888&#039;,
		&#039;contact_id&#039; =&gt; &#039;&#039;,
		&#039;is_special&#039; =&gt; null,
		&#039;status&#039; =&gt; null,
		&#039;billing_city&#039; =&gt; &#039;Mississauga&#039;,
		&#039;billing_province&#039; =&gt; null,
		&#039;billing_postal_code&#039; =&gt; &#039;L5T 1R2&#039;,
		&#039;division&#039; =&gt; &#039;1415 Bonhill rd - Mississauga
&#039;,
		&#039;uploaded_for&#039; =&gt; null,
		&#039;created&#039; =&gt; &#039;2015-09-02&#039;,
		&#039;drafts&#039; =&gt; (int) 0,
		&#039;client_date&#039; =&gt; null,
		&#039;requalify_re&#039; =&gt; (int) 0,
		&#039;requalify&#039; =&gt; (int) 1,
		&#039;requalify_date&#039; =&gt; &#039;2015-08-03&#039;,
		&#039;requalify_frequency&#039; =&gt; (int) 1,
		&#039;requalify_product&#039; =&gt; &#039;1,14,72&#039;,
		&#039;forceemail&#039; =&gt; &#039;&#039;
	],
	&#039;dirty&#039; =&gt; [],
	&#039;original&#039; =&gt; [],
	&#039;virtual&#039; =&gt; [],
	&#039;errors&#039; =&gt; [],
	&#039;repository&#039; =&gt; &#039;Clients&#039;

}
$clients = object(Cake\ORM\Query) {

	&#039;sql&#039; =&gt; &#039;SELECT `Clients`.`id` AS `Clients__id`, `Clients`.`title` AS `Clients__title`, `Clients`.`description` AS `Clients__description`, `Clients`.`description_fre` AS `Clients__description_fre`, `Clients`.`company_name` AS `Clients__company_name`, `Clients`.`customer_type` AS `Clients__customer_type`, `Clients`.`sig_fname` AS `Clients__sig_fname`, `Clients`.`sig_lname` AS `Clients__sig_lname`, `Clients`.`company_phone` AS `Clients__company_phone`, `Clients`.`sig_email` AS `Clients__sig_email`, `Clients`.`company_address` AS `Clients__company_address`, `Clients`.`city` AS `Clients__city`, `Clients`.`postal` AS `Clients__postal`, `Clients`.`province` AS `Clients__province`, `Clients`.`country` AS `Clients__country`, `Clients`.`admin_fname` AS `Clients__admin_fname`, `Clients`.`admin_lname` AS `Clients__admin_lname`, `Clients`.`admin_email` AS `Clients__admin_email`, `Clients`.`admin_phone` AS `Clients__admin_phone`, `Clients`.`image` AS `Clients__image`, `Clients`.`site` AS `Clients__site`, `Clients`.`addedBy` AS `Clients__addedBy`, `Clients`.`isApproved` AS `Clients__isApproved`, `Clients`.`date_start` AS `Clients__date_start`, `Clients`.`date_end` AS `Clients__date_end`, `Clients`.`referred_by` AS `Clients__referred_by`, `Clients`.`agreement_number` AS `Clients__agreement_number`, `Clients`.`reverification` AS `Clients__reverification`, `Clients`.`sacc_number` AS `Clients__sacc_number`, `Clients`.`document` AS `Clients__document`, `Clients`.`billing_contact` AS `Clients__billing_contact`, `Clients`.`billing_address` AS `Clients__billing_address`, `Clients`.`billing_instructions` AS `Clients__billing_instructions`, `Clients`.`invoice_terms` AS `Clients__invoice_terms`, `Clients`.`recruiter_id` AS `Clients__recruiter_id`, `Clients`.`profile_id` AS `Clients__profile_id`, `Clients`.`contact_id` AS `Clients__contact_id`, `Clients`.`is_special` AS `Clients__is_special`, `Clients`.`status` AS `Clients__status`, `Clients`.`billing_city` AS `Clients__billing_city`, `Clients`.`billing_province` AS `Clients__billing_province`, `Clients`.`billing_postal_code` AS `Clients__billing_postal_code`, `Clients`.`division` AS `Clients__division`, `Clients`.`uploaded_for` AS `Clients__uploaded_for`, `Clients`.`created` AS `Clients__created`, `Clients`.`drafts` AS `Clients__drafts`, `Clients`.`client_date` AS `Clients__client_date`, `Clients`.`requalify_re` AS `Clients__requalify_re`, `Clients`.`requalify` AS `Clients__requalify`, `Clients`.`requalify_date` AS `Clients__requalify_date`, `Clients`.`requalify_frequency` AS `Clients__requalify_frequency`, `Clients`.`requalify_product` AS `Clients__requalify_product`, `Clients`.`forceemail` AS `Clients__forceemail` FROM `clients` `Clients`&#039;,
	&#039;params&#039; =&gt; [],
	&#039;defaultTypes&#039; =&gt; [
		&#039;Clients.id&#039; =&gt; &#039;integer&#039;,
		&#039;id&#039; =&gt; &#039;integer&#039;,
		&#039;Clients.title&#039; =&gt; &#039;string&#039;,
		&#039;title&#039; =&gt; &#039;string&#039;,
		&#039;Clients.description&#039; =&gt; &#039;text&#039;,
		&#039;description&#039; =&gt; &#039;text&#039;,
		&#039;Clients.description_fre&#039; =&gt; &#039;text&#039;,
		&#039;description_fre&#039; =&gt; &#039;text&#039;,
		&#039;Clients.company_name&#039; =&gt; &#039;string&#039;,
		&#039;company_name&#039; =&gt; &#039;string&#039;,
		&#039;Clients.customer_type&#039; =&gt; &#039;integer&#039;,
		&#039;customer_type&#039; =&gt; &#039;integer&#039;,
		&#039;Clients.sig_fname&#039; =&gt; &#039;string&#039;,
		&#039;sig_fname&#039; =&gt; &#039;string&#039;,
		&#039;Clients.sig_lname&#039; =&gt; &#039;string&#039;,
		&#039;sig_lname&#039; =&gt; &#039;string&#039;,
		&#039;Clients.company_phone&#039; =&gt; &#039;string&#039;,
		&#039;company_phone&#039; =&gt; &#039;string&#039;,
		&#039;Clients.sig_email&#039; =&gt; &#039;string&#039;,
		&#039;sig_email&#039; =&gt; &#039;string&#039;,
		&#039;Clients.company_address&#039; =&gt; &#039;string&#039;,
		&#039;company_address&#039; =&gt; &#039;string&#039;,
		&#039;Clients.city&#039; =&gt; &#039;string&#039;,
		&#039;city&#039; =&gt; &#039;string&#039;,
		&#039;Clients.postal&#039; =&gt; &#039;string&#039;,
		&#039;postal&#039; =&gt; &#039;string&#039;,
		&#039;Clients.province&#039; =&gt; &#039;string&#039;,
		&#039;province&#039; =&gt; &#039;string&#039;,
		&#039;Clients.country&#039; =&gt; &#039;string&#039;,
		&#039;country&#039; =&gt; &#039;string&#039;,
		&#039;Clients.admin_fname&#039; =&gt; &#039;string&#039;,
		&#039;admin_fname&#039; =&gt; &#039;string&#039;,
		&#039;Clients.admin_lname&#039; =&gt; &#039;string&#039;,
		&#039;admin_lname&#039; =&gt; &#039;string&#039;,
		&#039;Clients.admin_email&#039; =&gt; &#039;string&#039;,
		&#039;admin_email&#039; =&gt; &#039;string&#039;,
		&#039;Clients.admin_phone&#039; =&gt; &#039;string&#039;,
		&#039;admin_phone&#039; =&gt; &#039;string&#039;,
		&#039;Clients.image&#039; =&gt; &#039;string&#039;,
		&#039;image&#039; =&gt; &#039;string&#039;,
		&#039;Clients.site&#039; =&gt; &#039;string&#039;,
		&#039;site&#039; =&gt; &#039;string&#039;,
		&#039;Clients.addedBy&#039; =&gt; &#039;integer&#039;,
		&#039;addedBy&#039; =&gt; &#039;integer&#039;,
		&#039;Clients.isApproved&#039; =&gt; &#039;integer&#039;,
		&#039;isApproved&#039; =&gt; &#039;integer&#039;,
		&#039;Clients.date_start&#039; =&gt; &#039;string&#039;,
		&#039;date_start&#039; =&gt; &#039;string&#039;,
		&#039;Clients.date_end&#039; =&gt; &#039;string&#039;,
		&#039;date_end&#039; =&gt; &#039;string&#039;,
		&#039;Clients.referred_by&#039; =&gt; &#039;string&#039;,
		&#039;referred_by&#039; =&gt; &#039;string&#039;,
		&#039;Clients.agreement_number&#039; =&gt; &#039;integer&#039;,
		&#039;agreement_number&#039; =&gt; &#039;integer&#039;,
		&#039;Clients.reverification&#039; =&gt; &#039;string&#039;,
		&#039;reverification&#039; =&gt; &#039;string&#039;,
		&#039;Clients.sacc_number&#039; =&gt; &#039;integer&#039;,
		&#039;sacc_number&#039; =&gt; &#039;integer&#039;,
		&#039;Clients.document&#039; =&gt; &#039;string&#039;,
		&#039;document&#039; =&gt; &#039;string&#039;,
		&#039;Clients.billing_contact&#039; =&gt; &#039;string&#039;,
		&#039;billing_contact&#039; =&gt; &#039;string&#039;,
		&#039;Clients.billing_address&#039; =&gt; &#039;string&#039;,
		&#039;billing_address&#039; =&gt; &#039;string&#039;,
		&#039;Clients.billing_instructions&#039; =&gt; &#039;string&#039;,
		&#039;billing_instructions&#039; =&gt; &#039;string&#039;,
		&#039;Clients.invoice_terms&#039; =&gt; &#039;string&#039;,
		&#039;invoice_terms&#039; =&gt; &#039;string&#039;,
		&#039;Clients.recruiter_id&#039; =&gt; &#039;string&#039;,
		&#039;recruiter_id&#039; =&gt; &#039;string&#039;,
		&#039;Clients.profile_id&#039; =&gt; &#039;text&#039;,
		&#039;profile_id&#039; =&gt; &#039;text&#039;,
		&#039;Clients.contact_id&#039; =&gt; &#039;text&#039;,
		&#039;contact_id&#039; =&gt; &#039;text&#039;,
		&#039;Clients.is_special&#039; =&gt; &#039;integer&#039;,
		&#039;is_special&#039; =&gt; &#039;integer&#039;,
		&#039;Clients.status&#039; =&gt; &#039;integer&#039;,
		&#039;status&#039; =&gt; &#039;integer&#039;,
		&#039;Clients.billing_city&#039; =&gt; &#039;string&#039;,
		&#039;billing_city&#039; =&gt; &#039;string&#039;,
		&#039;Clients.billing_province&#039; =&gt; &#039;string&#039;,
		&#039;billing_province&#039; =&gt; &#039;string&#039;,
		&#039;Clients.billing_postal_code&#039; =&gt; &#039;string&#039;,
		&#039;billing_postal_code&#039; =&gt; &#039;string&#039;,
		&#039;Clients.division&#039; =&gt; &#039;string&#039;,
		&#039;division&#039; =&gt; &#039;string&#039;,
		&#039;Clients.uploaded_for&#039; =&gt; &#039;integer&#039;,
		&#039;uploaded_for&#039; =&gt; &#039;integer&#039;,
		&#039;Clients.created&#039; =&gt; &#039;string&#039;,
		&#039;created&#039; =&gt; &#039;string&#039;,
		&#039;Clients.drafts&#039; =&gt; &#039;integer&#039;,
		&#039;drafts&#039; =&gt; &#039;integer&#039;,
		&#039;Clients.client_date&#039; =&gt; &#039;string&#039;,
		&#039;client_date&#039; =&gt; &#039;string&#039;,
		&#039;Clients.requalify_re&#039; =&gt; &#039;integer&#039;,
		&#039;requalify_re&#039; =&gt; &#039;integer&#039;,
		&#039;Clients.requalify&#039; =&gt; &#039;integer&#039;,
		&#039;requalify&#039; =&gt; &#039;integer&#039;,
		&#039;Clients.requalify_date&#039; =&gt; &#039;string&#039;,
		&#039;requalify_date&#039; =&gt; &#039;string&#039;,
		&#039;Clients.requalify_frequency&#039; =&gt; &#039;integer&#039;,
		&#039;requalify_frequency&#039; =&gt; &#039;integer&#039;,
		&#039;Clients.requalify_product&#039; =&gt; &#039;string&#039;,
		&#039;requalify_product&#039; =&gt; &#039;string&#039;,
		&#039;Clients.forceemail&#039; =&gt; &#039;string&#039;,
		&#039;forceemail&#039; =&gt; &#039;string&#039;
	],
	&#039;decorators&#039; =&gt; (int) 0,
	&#039;executed&#039; =&gt; true,
	&#039;hydrate&#039; =&gt; true,
	&#039;buffered&#039; =&gt; true,
	&#039;formatters&#039; =&gt; (int) 0,
	&#039;mapReducers&#039; =&gt; (int) 0,
	&#039;contain&#039; =&gt; [],
	&#039;matching&#039; =&gt; [],
	&#039;extraOptions&#039; =&gt; [],
	&#039;repository&#039; =&gt; object(App\Model\Table\ClientsTable) {}

}
$id = &#039;888&#039;
$disabled = (int) 1
$profile = object(Cake\ORM\Entity) {

	&#039;new&#039; =&gt; false,
	&#039;accessible&#039; =&gt; [
		&#039;*&#039; =&gt; true
	],
	&#039;properties&#039; =&gt; [
		&#039;id&#039; =&gt; (int) 888,
		&#039;title&#039; =&gt; &#039;Mr&#039;,
		&#039;fname&#039; =&gt; &#039;Beverly&#039;,
		&#039;lname&#039; =&gt; &#039;Hills&#039;,
		&#039;username&#039; =&gt; &#039;Owner_Operator_888&#039;,
		&#039;email&#039; =&gt; &#039;bhills_1240@mailinator.com&#039;,
		&#039;password&#039; =&gt; &#039;&#039;,
		&#039;driver&#039; =&gt; null,
		&#039;address&#039; =&gt; &#039;&#039;,
		&#039;street&#039; =&gt; &#039;Lnckj&#039;,
		&#039;city&#039; =&gt; &#039;Beverly Hills&#039;,
		&#039;province&#039; =&gt; &#039;NS&#039;,
		&#039;postal&#039; =&gt; &#039;L8E 3Z2&#039;,
		&#039;country&#039; =&gt; &#039;Canada&#039;,
		&#039;phone&#039; =&gt; &#039;(905) 531-5331&#039;,
		&#039;image&#039; =&gt; &#039;default.png&#039;,
		&#039;admin&#039; =&gt; (int) 0,
		&#039;super&#039; =&gt; (int) 0,
		&#039;profile_type&#039; =&gt; (int) 7,
		&#039;driver_license_no&#039; =&gt; &#039;Dnzlc&#039;,
		&#039;driver_province&#039; =&gt; &#039;NS&#039;,
		&#039;us_dot&#039; =&gt; null,
		&#039;applicants_email&#039; =&gt; null,
		&#039;transclick&#039; =&gt; null,
		&#039;mname&#039; =&gt; &#039;Beverly Hills&#039;,
		&#039;dob&#039; =&gt; &#039;1983-07-16&#039;,
		&#039;expiry_date&#039; =&gt; &#039;2015-10-10&#039;,
		&#039;gender&#039; =&gt; &#039;Male&#039;,
		&#039;isb_id&#039; =&gt; &#039;&#039;,
		&#039;placeofbirth&#039; =&gt; &#039;Kxoer&#039;,
		&#039;created_by&#039; =&gt; (int) 4,
		&#039;created&#039; =&gt; null,
		&#039;drafts&#039; =&gt; (int) 0,
		&#039;is_hired&#039; =&gt; true,
		&#039;ptypes&#039; =&gt; &#039;&#039;,
		&#039;ctypes&#039; =&gt; &#039;&#039;,
		&#039;language&#039; =&gt; &#039;English&#039;,
		&#039;automatic_email&#039; =&gt; (int) 0,
		&#039;automatic_sent&#039; =&gt; (int) 0,
		&#039;hear&#039; =&gt; &#039;Nethire&#039;,
		&#039;requalify&#039; =&gt; (int) 1,
		&#039;hired_date&#039; =&gt; &#039;2015-09-02&#039;,
		&#039;emailsent&#039; =&gt; &#039;&#039;,
		&#039;send_to&#039; =&gt; (int) 0,
		&#039;sin&#039; =&gt; &#039;123-654-789&#039;,
		&#039;otherinfo&#039; =&gt; &#039;&#039;,
		&#039;Ptype&#039; =&gt; object(Cake\ORM\Entity) {}
	],
	&#039;dirty&#039; =&gt; [
		&#039;Ptype&#039; =&gt; true
	],
	&#039;original&#039; =&gt; [],
	&#039;virtual&#039; =&gt; [],
	&#039;errors&#039; =&gt; [],
	&#039;repository&#039; =&gt; &#039;Profiles&#039;

}
$orders = object(Cake\ORM\Query) {

	&#039;sql&#039; =&gt; &#039;SELECT `orders`.`id` AS `orders__id`, `orders`.`title` AS `orders__title`, `orders`.`description` AS `orders__description`, `orders`.`scale` AS `orders__scale`, `orders`.`reason` AS `orders__reason`, `orders`.`suggestion` AS `orders__suggestion`, `orders`.`user_id` AS `orders__user_id`, `orders`.`client_id` AS `orders__client_id`, `orders`.`uploaded_for` AS `orders__uploaded_for`, `orders`.`created` AS `orders__created`, `orders`.`division` AS `orders__division`, `orders`.`draft` AS `orders__draft`, `orders`.`conf_recruiter_name` AS `orders__conf_recruiter_name`, `orders`.`conf_driver_name` AS `orders__conf_driver_name`, `orders`.`conf_date` AS `orders__conf_date`, `orders`.`ins_id` AS `orders__ins_id`, `orders`.`ebs_id` AS `orders__ebs_id`, `orders`.`response` AS `orders__response`, `orders`.`ins_pdi` AS `orders__ins_pdi`, `orders`.`ebs_pdi` AS `orders__ebs_pdi`, `orders`.`recruiter_signature` AS `orders__recruiter_signature`, `orders`.`ins_79` AS `orders__ins_79`, `orders`.`ins_79_binary` AS `orders__ins_79_binary`, `orders`.`ins_1` AS `orders__ins_1`, `orders`.`ins_1_binary` AS `orders__ins_1_binary`, `orders`.`ins_14` AS `orders__ins_14`, `orders`.`ins_14_binary` AS `orders__ins_14_binary`, `orders`.`ins_77` AS `orders__ins_77`, `orders`.`ins_77_binary` AS `orders__ins_77_binary`, `orders`.`ins_78` AS `orders__ins_78`, `orders`.`ins_78_binary` AS `orders__ins_78_binary`, `orders`.`ebs_1603` AS `orders__ebs_1603`, `orders`.`ebs_1603_binary` AS `orders__ebs_1603_binary`, `orders`.`ebs_1627` AS `orders__ebs_1627`, `orders`.`ebs_1627_binary` AS `orders__ebs_1627_binary`, `orders`.`ebs_1650` AS `orders__ebs_1650`, `orders`.`ebs_1650_binary` AS `orders__ebs_1650_binary`, `orders`.`ins_72` AS `orders__ins_72`, `orders`.`ins_72_binary` AS `orders__ins_72_binary`, `orders`.`bright_planet` AS `orders__bright_planet`, `orders`.`final_show` AS `orders__final_show`, `orders`.`is_hired` AS `orders__is_hired`, `orders`.`bright_planet_binary` AS `orders__bright_planet_binary`, `orders`.`abc` AS `orders__abc`, `orders`.`bright_planet_html_binary` AS `orders__bright_planet_html_binary`, `orders`.`order_type` AS `orders__order_type`, `orders`.`forms` AS `orders__forms`, `orders`.`complete` AS `orders__complete`, `orders`.`ins_31` AS `orders__ins_31`, `orders`.`ins_31_binary` AS `orders__ins_31_binary`, `orders`.`ins_32` AS `orders__ins_32`, `orders`.`ins_32_binary` AS `orders__ins_32_binary`, `orders`.`complete_writing` AS `orders__complete_writing`, `Profiles`.`id` AS `Profiles__id`, `Profiles`.`title` AS `Profiles__title`, `Profiles`.`fname` AS `Profiles__fname`, `Profiles`.`lname` AS `Profiles__lname`, `Profiles`.`username` AS `Profiles__username`, `Profiles`.`email` AS `Profiles__email`, `Profiles`.`password` AS `Profiles__password`, `Profiles`.`driver` AS `Profiles__driver`, `Profiles`.`address` AS `Profiles__address`, `Profiles`.`street` AS `Profiles__street`, `Profiles`.`city` AS `Profiles__city`, `Profiles`.`province` AS `Profiles__province`, `Profiles`.`postal` AS `Profiles__postal`, `Profiles`.`country` AS `Profiles__country`, `Profiles`.`phone` AS `Profiles__phone`, `Profiles`.`image` AS `Profiles__image`, `Profiles`.`admin` AS `Profiles__admin`, `Profiles`.`super` AS `Profiles__super`, `Profiles`.`profile_type` AS `Profiles__profile_type`, `Profiles`.`driver_license_no` AS `Profiles__driver_license_no`, `Profiles`.`driver_province` AS `Profiles__driver_province`, `Profiles`.`us_dot` AS `Profiles__us_dot`, `Profiles`.`applicants_email` AS `Profiles__applicants_email`, `Profiles`.`transclick` AS `Profiles__transclick`, `Profiles`.`mname` AS `Profiles__mname`, `Profiles`.`dob` AS `Profiles__dob`, `Profiles`.`expiry_date` AS `Profiles__expiry_date`, `Profiles`.`gender` AS `Profiles__gender`, `Profiles`.`isb_id` AS `Profiles__isb_id`, `Profiles`.`placeofbirth` AS `Profiles__placeofbirth`, `Profiles`.`created_by` AS `Profiles__created_by`, `Profiles`.`created` AS `Profiles__created`, `Profiles`.`drafts` AS `Profiles__drafts`, `Profiles`.`is_hired` AS `Profiles__is_hired`, `Profiles`.`ptypes` AS `Profiles__ptypes`, `Profiles`.`ctypes` AS `Profiles__ctypes`, `Profiles`.`language` AS `Profiles__language`, `Profiles`.`automatic_email` AS `Profiles__automatic_email`, `Profiles`.`automatic_sent` AS `Profiles__automatic_sent`, `Profiles`.`hear` AS `Profiles__hear`, `Profiles`.`requalify` AS `Profiles__requalify`, `Profiles`.`hired_date` AS `Profiles__hired_date`, `Profiles`.`emailsent` AS `Profiles__emailsent`, `Profiles`.`send_to` AS `Profiles__send_to`, `Profiles`.`sin` AS `Profiles__sin`, `Profiles`.`otherinfo` AS `Profiles__otherinfo`, `Clients`.`id` AS `Clients__id`, `Clients`.`title` AS `Clients__title`, `Clients`.`description` AS `Clients__description`, `Clients`.`description_fre` AS `Clients__description_fre`, `Clients`.`company_name` AS `Clients__company_name`, `Clients`.`customer_type` AS `Clients__customer_type`, `Clients`.`sig_fname` AS `Clients__sig_fname`, `Clients`.`sig_lname` AS `Clients__sig_lname`, `Clients`.`company_phone` AS `Clients__company_phone`, `Clients`.`sig_email` AS `Clients__sig_email`, `Clients`.`company_address` AS `Clients__company_address`, `Clients`.`city` AS `Clients__city`, `Clients`.`postal` AS `Clients__postal`, `Clients`.`province` AS `Clients__province`, `Clients`.`country` AS `Clients__country`, `Clients`.`admin_fname` AS `Clients__admin_fname`, `Clients`.`admin_lname` AS `Clients__admin_lname`, `Clients`.`admin_email` AS `Clients__admin_email`, `Clients`.`admin_phone` AS `Clients__admin_phone`, `Clients`.`image` AS `Clients__image`, `Clients`.`site` AS `Clients__site`, `Clients`.`addedBy` AS `Clients__addedBy`, `Clients`.`isApproved` AS `Clients__isApproved`, `Clients`.`date_start` AS `Clients__date_start`, `Clients`.`date_end` AS `Clients__date_end`, `Clients`.`referred_by` AS `Clients__referred_by`, `Clients`.`agreement_number` AS `Clients__agreement_number`, `Clients`.`reverification` AS `Clients__reverification`, `Clients`.`sacc_number` AS `Clients__sacc_number`, `Clients`.`document` AS `Clients__document`, `Clients`.`billing_contact` AS `Clients__billing_contact`, `Clients`.`billing_address` AS `Clients__billing_address`, `Clients`.`billing_instructions` AS `Clients__billing_instructions`, `Clients`.`invoice_terms` AS `Clients__invoice_terms`, `Clients`.`recruiter_id` AS `Clients__recruiter_id`, `Clients`.`profile_id` AS `Clients__profile_id`, `Clients`.`contact_id` AS `Clients__contact_id`, `Clients`.`is_special` AS `Clients__is_special`, `Clients`.`status` AS `Clients__status`, `Clients`.`billing_city` AS `Clients__billing_city`, `Clients`.`billing_province` AS `Clients__billing_province`, `Clients`.`billing_postal_code` AS `Clients__billing_postal_code`, `Clients`.`division` AS `Clients__division`, `Clients`.`uploaded_for` AS `Clients__uploaded_for`, `Clients`.`created` AS `Clients__created`, `Clients`.`drafts` AS `Clients__drafts`, `Clients`.`client_date` AS `Clients__client_date`, `Clients`.`requalify_re` AS `Clients__requalify_re`, `Clients`.`requalify` AS `Clients__requalify`, `Clients`.`requalify_date` AS `Clients__requalify_date`, `Clients`.`requalify_frequency` AS `Clients__requalify_frequency`, `Clients`.`requalify_product` AS `Clients__requalify_product`, `Clients`.`forceemail` AS `Clients__forceemail` FROM `orders` `orders` LEFT JOIN `profiles` `Profiles` ON `Profiles`.`id` = (`orders`.`uploaded_for`) LEFT JOIN `clients` `Clients` ON `Clients`.`id` = (`orders`.`client_id`) WHERE (`orders`.`uploaded_for` = :c0 AND `orders`.`draft` = :c1) ORDER BY orders.id DESC&#039;,
	&#039;params&#039; =&gt; [
		&#039;:c0&#039; =&gt; [
			[maximum depth reached]
		],
		&#039;:c1&#039; =&gt; [
			[maximum depth reached]
		]
	],
	&#039;defaultTypes&#039; =&gt; [
		&#039;orders.id&#039; =&gt; &#039;integer&#039;,
		&#039;id&#039; =&gt; &#039;integer&#039;,
		&#039;orders.title&#039; =&gt; &#039;string&#039;,
		&#039;title&#039; =&gt; &#039;string&#039;,
		&#039;orders.description&#039; =&gt; &#039;text&#039;,
		&#039;description&#039; =&gt; &#039;text&#039;,
		&#039;orders.scale&#039; =&gt; &#039;integer&#039;,
		&#039;scale&#039; =&gt; &#039;integer&#039;,
		&#039;orders.reason&#039; =&gt; &#039;text&#039;,
		&#039;reason&#039; =&gt; &#039;text&#039;,
		&#039;orders.suggestion&#039; =&gt; &#039;text&#039;,
		&#039;suggestion&#039; =&gt; &#039;text&#039;,
		&#039;orders.user_id&#039; =&gt; &#039;integer&#039;,
		&#039;user_id&#039; =&gt; &#039;integer&#039;,
		&#039;orders.client_id&#039; =&gt; &#039;integer&#039;,
		&#039;client_id&#039; =&gt; &#039;integer&#039;,
		&#039;orders.uploaded_for&#039; =&gt; &#039;integer&#039;,
		&#039;uploaded_for&#039; =&gt; &#039;integer&#039;,
		&#039;orders.created&#039; =&gt; &#039;string&#039;,
		&#039;created&#039; =&gt; &#039;string&#039;,
		&#039;orders.division&#039; =&gt; &#039;string&#039;,
		&#039;division&#039; =&gt; &#039;string&#039;,
		&#039;orders.draft&#039; =&gt; &#039;integer&#039;,
		&#039;draft&#039; =&gt; &#039;integer&#039;,
		&#039;orders.conf_recruiter_name&#039; =&gt; &#039;string&#039;,
		&#039;conf_recruiter_name&#039; =&gt; &#039;string&#039;,
		&#039;orders.conf_driver_name&#039; =&gt; &#039;string&#039;,
		&#039;conf_driver_name&#039; =&gt; &#039;string&#039;,
		&#039;orders.conf_date&#039; =&gt; &#039;string&#039;,
		&#039;conf_date&#039; =&gt; &#039;string&#039;,
		&#039;orders.ins_id&#039; =&gt; &#039;string&#039;,
		&#039;ins_id&#039; =&gt; &#039;string&#039;,
		&#039;orders.ebs_id&#039; =&gt; &#039;string&#039;,
		&#039;ebs_id&#039; =&gt; &#039;string&#039;,
		&#039;orders.response&#039; =&gt; &#039;string&#039;,
		&#039;response&#039; =&gt; &#039;string&#039;,
		&#039;orders.ins_pdi&#039; =&gt; &#039;string&#039;,
		&#039;ins_pdi&#039; =&gt; &#039;string&#039;,
		&#039;orders.ebs_pdi&#039; =&gt; &#039;string&#039;,
		&#039;ebs_pdi&#039; =&gt; &#039;string&#039;,
		&#039;orders.recruiter_signature&#039; =&gt; &#039;string&#039;,
		&#039;recruiter_signature&#039; =&gt; &#039;string&#039;,
		&#039;orders.ins_79&#039; =&gt; &#039;text&#039;,
		&#039;ins_79&#039; =&gt; &#039;text&#039;,
		&#039;orders.ins_79_binary&#039; =&gt; &#039;text&#039;,
		&#039;ins_79_binary&#039; =&gt; &#039;text&#039;,
		&#039;orders.ins_1&#039; =&gt; &#039;text&#039;,
		&#039;ins_1&#039; =&gt; &#039;text&#039;,
		&#039;orders.ins_1_binary&#039; =&gt; &#039;text&#039;,
		&#039;ins_1_binary&#039; =&gt; &#039;text&#039;,
		&#039;orders.ins_14&#039; =&gt; &#039;text&#039;,
		&#039;ins_14&#039; =&gt; &#039;text&#039;,
		&#039;orders.ins_14_binary&#039; =&gt; &#039;text&#039;,
		&#039;ins_14_binary&#039; =&gt; &#039;text&#039;,
		&#039;orders.ins_77&#039; =&gt; &#039;text&#039;,
		&#039;ins_77&#039; =&gt; &#039;text&#039;,
		&#039;orders.ins_77_binary&#039; =&gt; &#039;text&#039;,
		&#039;ins_77_binary&#039; =&gt; &#039;text&#039;,
		&#039;orders.ins_78&#039; =&gt; &#039;text&#039;,
		&#039;ins_78&#039; =&gt; &#039;text&#039;,
		&#039;orders.ins_78_binary&#039; =&gt; &#039;text&#039;,
		&#039;ins_78_binary&#039; =&gt; &#039;text&#039;,
		&#039;orders.ebs_1603&#039; =&gt; &#039;text&#039;,
		&#039;ebs_1603&#039; =&gt; &#039;text&#039;,
		&#039;orders.ebs_1603_binary&#039; =&gt; &#039;text&#039;,
		&#039;ebs_1603_binary&#039; =&gt; &#039;text&#039;,
		&#039;orders.ebs_1627&#039; =&gt; &#039;text&#039;,
		&#039;ebs_1627&#039; =&gt; &#039;text&#039;,
		&#039;orders.ebs_1627_binary&#039; =&gt; &#039;text&#039;,
		&#039;ebs_1627_binary&#039; =&gt; &#039;text&#039;,
		&#039;orders.ebs_1650&#039; =&gt; &#039;text&#039;,
		&#039;ebs_1650&#039; =&gt; &#039;text&#039;,
		&#039;orders.ebs_1650_binary&#039; =&gt; &#039;text&#039;,
		&#039;ebs_1650_binary&#039; =&gt; &#039;text&#039;,
		&#039;orders.ins_72&#039; =&gt; &#039;text&#039;,
		&#039;ins_72&#039; =&gt; &#039;text&#039;,
		&#039;orders.ins_72_binary&#039; =&gt; &#039;text&#039;,
		&#039;ins_72_binary&#039; =&gt; &#039;text&#039;,
		&#039;orders.bright_planet&#039; =&gt; &#039;text&#039;,
		&#039;bright_planet&#039; =&gt; &#039;text&#039;,
		&#039;orders.final_show&#039; =&gt; &#039;boolean&#039;,
		&#039;final_show&#039; =&gt; &#039;boolean&#039;,
		&#039;orders.is_hired&#039; =&gt; &#039;integer&#039;,
		&#039;is_hired&#039; =&gt; &#039;integer&#039;,
		&#039;orders.bright_planet_binary&#039; =&gt; &#039;text&#039;,
		&#039;bright_planet_binary&#039; =&gt; &#039;text&#039;,
		&#039;orders.abc&#039; =&gt; &#039;integer&#039;,
		&#039;abc&#039; =&gt; &#039;integer&#039;,
		&#039;orders.bright_planet_html_binary&#039; =&gt; &#039;text&#039;,
		&#039;bright_planet_html_binary&#039; =&gt; &#039;text&#039;,
		&#039;orders.order_type&#039; =&gt; &#039;string&#039;,
		&#039;order_type&#039; =&gt; &#039;string&#039;,
		&#039;orders.forms&#039; =&gt; &#039;string&#039;,
		&#039;forms&#039; =&gt; &#039;string&#039;,
		&#039;orders.complete&#039; =&gt; &#039;integer&#039;,
		&#039;complete&#039; =&gt; &#039;integer&#039;,
		&#039;orders.ins_31&#039; =&gt; &#039;text&#039;,
		&#039;ins_31&#039; =&gt; &#039;text&#039;,
		&#039;orders.ins_31_binary&#039; =&gt; &#039;text&#039;,
		&#039;ins_31_binary&#039; =&gt; &#039;text&#039;,
		&#039;orders.ins_32&#039; =&gt; &#039;text&#039;,
		&#039;ins_32&#039; =&gt; &#039;text&#039;,
		&#039;orders.ins_32_binary&#039; =&gt; &#039;text&#039;,
		&#039;ins_32_binary&#039; =&gt; &#039;text&#039;,
		&#039;orders.complete_writing&#039; =&gt; &#039;integer&#039;,
		&#039;complete_writing&#039; =&gt; &#039;integer&#039;
	],
	&#039;decorators&#039; =&gt; (int) 0,
	&#039;executed&#039; =&gt; true,
	&#039;hydrate&#039; =&gt; true,
	&#039;buffered&#039; =&gt; true,
	&#039;formatters&#039; =&gt; (int) 0,
	&#039;mapReducers&#039; =&gt; (int) 0,
	&#039;contain&#039; =&gt; [
		&#039;Profiles&#039; =&gt; [[maximum depth reached]],
		&#039;Clients&#039; =&gt; [[maximum depth reached]],
		&#039;RoadTest&#039; =&gt; [[maximum depth reached]]
	],
	&#039;matching&#039; =&gt; [],
	&#039;extraOptions&#039; =&gt; [],
	&#039;repository&#039; =&gt; object(App\Model\Table\OrdersTable) {}

}
$doc_comp = object(App\Controller\Component\DocumentComponent) {
	request =&gt; object(Cake\Network\Request) {}
	components =&gt; []
	[protected] _registry =&gt; object(Cake\Controller\ComponentRegistry) {}
	[protected] _defaultConfig =&gt; []
	[protected] _componentMap =&gt; []
	[protected] _config =&gt; []
	[protected] _configInitialized =&gt; true
}
$logos1 = object(Cake\ORM\ResultSet) {

	&#039;query&#039; =&gt; object(Cake\ORM\Query) {},
	&#039;items&#039; =&gt; [
		(int) 0 =&gt; object(App\Model\Entity\Logo) {},
		(int) 1 =&gt; object(App\Model\Entity\Logo) {}
	]

}
$logos = object(Cake\ORM\ResultSet) {

	&#039;query&#039; =&gt; object(Cake\ORM\Query) {},
	&#039;items&#039; =&gt; [
		(int) 0 =&gt; object(App\Model\Entity\Logo) {},
		(int) 1 =&gt; object(App\Model\Entity\Logo) {},
		(int) 2 =&gt; object(App\Model\Entity\Logo) {},
		(int) 3 =&gt; object(App\Model\Entity\Logo) {},
		(int) 4 =&gt; object(App\Model\Entity\Logo) {},
		(int) 5 =&gt; object(App\Model\Entity\Logo) {},
		(int) 6 =&gt; object(App\Model\Entity\Logo) {},
		(int) 7 =&gt; object(App\Model\Entity\Logo) {},
		(int) 8 =&gt; object(App\Model\Entity\Logo) {},
		(int) 9 =&gt; object(App\Model\Entity\Logo) {},
		(int) 10 =&gt; object(App\Model\Entity\Logo) {},
		(int) 11 =&gt; object(App\Model\Entity\Logo) {},
		(int) 12 =&gt; object(App\Model\Entity\Logo) {},
		(int) 13 =&gt; object(App\Model\Entity\Logo) {}
	]

}
$client_docs = object(Cake\ORM\ResultSet) {

	&#039;query&#039; =&gt; object(Cake\ORM\Query) {},
	&#039;items&#039; =&gt; []

}
$uid = &#039;888&#039;
$ptypes = object(Cake\ORM\ResultSet) {

	&#039;query&#039; =&gt; object(Cake\ORM\Query) {},
	&#039;items&#039; =&gt; [
		(int) 0 =&gt; object(Cake\ORM\Entity) {},
		(int) 1 =&gt; object(Cake\ORM\Entity) {},
		(int) 2 =&gt; object(Cake\ORM\Entity) {},
		(int) 3 =&gt; object(Cake\ORM\Entity) {},
		(int) 4 =&gt; object(Cake\ORM\Entity) {},
		(int) 5 =&gt; object(Cake\ORM\Entity) {},
		(int) 6 =&gt; object(Cake\ORM\Entity) {},
		(int) 7 =&gt; object(Cake\ORM\Entity) {},
		(int) 8 =&gt; object(Cake\ORM\Entity) {}
	]

}
$theproductlist = object(Cake\ORM\Query) {

	&#039;sql&#039; =&gt; &#039;SELECT `order_products`.`id` AS `order_products__id`, `order_products`.`title` AS `order_products__title`, `order_products`.`enable` AS `order_products__enable`, `order_products`.`number` AS `order_products__number`, `order_products`.`titleFrench` AS `order_products__titleFrench` FROM `order_products` `order_products`&#039;,
	&#039;params&#039; =&gt; [],
	&#039;defaultTypes&#039; =&gt; [
		&#039;order_products.id&#039; =&gt; &#039;integer&#039;,
		&#039;id&#039; =&gt; &#039;integer&#039;,
		&#039;order_products.title&#039; =&gt; &#039;string&#039;,
		&#039;title&#039; =&gt; &#039;string&#039;,
		&#039;order_products.enable&#039; =&gt; &#039;integer&#039;,
		&#039;enable&#039; =&gt; &#039;integer&#039;,
		&#039;order_products.number&#039; =&gt; &#039;integer&#039;,
		&#039;number&#039; =&gt; &#039;integer&#039;,
		&#039;order_products.titleFrench&#039; =&gt; &#039;string&#039;,
		&#039;titleFrench&#039; =&gt; &#039;string&#039;
	],
	&#039;decorators&#039; =&gt; (int) 0,
	&#039;executed&#039; =&gt; true,
	&#039;hydrate&#039; =&gt; true,
	&#039;buffered&#039; =&gt; true,
	&#039;formatters&#039; =&gt; (int) 0,
	&#039;mapReducers&#039; =&gt; (int) 0,
	&#039;contain&#039; =&gt; [],
	&#039;matching&#039; =&gt; [],
	&#039;extraOptions&#039; =&gt; [],
	&#039;repository&#039; =&gt; object(Cake\ORM\Table) {}

}
$products = object(Cake\ORM\Query) {

	&#039;sql&#039; =&gt; &#039;SELECT `product_types`.`ID` AS `product_types__ID`, `product_types`.`Acronym` AS `product_types__Acronym`, `product_types`.`Name` AS `product_types__Name`, `product_types`.`Description` AS `product_types__Description`, `product_types`.`Alias` AS `product_types__Alias`, `product_types`.`Color` AS `product_types__Color`, `product_types`.`Checked` AS `product_types__Checked`, `product_types`.`Sidebar_Alias` AS `product_types__Sidebar_Alias`, `product_types`.`ButtonColor` AS `product_types__ButtonColor`, `product_types`.`Blocked` AS `product_types__Blocked`, `product_types`.`doc_ids` AS `product_types__doc_ids`, `product_types`.`Blocks_Alias` AS `product_types__Blocks_Alias`, `product_types`.`Block_Color` AS `product_types__Block_Color`, `product_types`.`NameFrench` AS `product_types__NameFrench`, `product_types`.`DescriptionFrench` AS `product_types__DescriptionFrench`, `product_types`.`Visible` AS `product_types__Visible`, `product_types`.`Bypass` AS `product_types__Bypass`, `product_types`.`Icon` AS `product_types__Icon`, `product_types`.`Price` AS `product_types__Price`, `product_types`.`profile_types` AS `product_types__profile_types` FROM `product_types` `product_types`&#039;,
	&#039;params&#039; =&gt; [],
	&#039;defaultTypes&#039; =&gt; [
		&#039;product_types.ID&#039; =&gt; &#039;integer&#039;,
		&#039;ID&#039; =&gt; &#039;integer&#039;,
		&#039;product_types.Acronym&#039; =&gt; &#039;string&#039;,
		&#039;Acronym&#039; =&gt; &#039;string&#039;,
		&#039;product_types.Name&#039; =&gt; &#039;string&#039;,
		&#039;Name&#039; =&gt; &#039;string&#039;,
		&#039;product_types.Description&#039; =&gt; &#039;string&#039;,
		&#039;Description&#039; =&gt; &#039;string&#039;,
		&#039;product_types.Alias&#039; =&gt; &#039;string&#039;,
		&#039;Alias&#039; =&gt; &#039;string&#039;,
		&#039;product_types.Color&#039; =&gt; &#039;string&#039;,
		&#039;Color&#039; =&gt; &#039;string&#039;,
		&#039;product_types.Checked&#039; =&gt; &#039;integer&#039;,
		&#039;Checked&#039; =&gt; &#039;integer&#039;,
		&#039;product_types.Sidebar_Alias&#039; =&gt; &#039;string&#039;,
		&#039;Sidebar_Alias&#039; =&gt; &#039;string&#039;,
		&#039;product_types.ButtonColor&#039; =&gt; &#039;string&#039;,
		&#039;ButtonColor&#039; =&gt; &#039;string&#039;,
		&#039;product_types.Blocked&#039; =&gt; &#039;string&#039;,
		&#039;Blocked&#039; =&gt; &#039;string&#039;,
		&#039;product_types.doc_ids&#039; =&gt; &#039;text&#039;,
		&#039;doc_ids&#039; =&gt; &#039;text&#039;,
		&#039;product_types.Blocks_Alias&#039; =&gt; &#039;string&#039;,
		&#039;Blocks_Alias&#039; =&gt; &#039;string&#039;,
		&#039;product_types.Block_Color&#039; =&gt; &#039;string&#039;,
		&#039;Block_Color&#039; =&gt; &#039;string&#039;,
		&#039;product_types.NameFrench&#039; =&gt; &#039;string&#039;,
		&#039;NameFrench&#039; =&gt; &#039;string&#039;,
		&#039;product_types.DescriptionFrench&#039; =&gt; &#039;string&#039;,
		&#039;DescriptionFrench&#039; =&gt; &#039;string&#039;,
		&#039;product_types.Visible&#039; =&gt; &#039;boolean&#039;,
		&#039;Visible&#039; =&gt; &#039;boolean&#039;,
		&#039;product_types.Bypass&#039; =&gt; &#039;integer&#039;,
		&#039;Bypass&#039; =&gt; &#039;integer&#039;,
		&#039;product_types.Icon&#039; =&gt; &#039;string&#039;,
		&#039;Icon&#039; =&gt; &#039;string&#039;,
		&#039;product_types.Price&#039; =&gt; &#039;decimal&#039;,
		&#039;Price&#039; =&gt; &#039;decimal&#039;,
		&#039;product_types.profile_types&#039; =&gt; &#039;string&#039;,
		&#039;profile_types&#039; =&gt; &#039;string&#039;
	],
	&#039;decorators&#039; =&gt; (int) 0,
	&#039;executed&#039; =&gt; true,
	&#039;hydrate&#039; =&gt; true,
	&#039;buffered&#039; =&gt; true,
	&#039;formatters&#039; =&gt; (int) 0,
	&#039;mapReducers&#039; =&gt; (int) 0,
	&#039;contain&#039; =&gt; [],
	&#039;matching&#039; =&gt; [],
	&#039;extraOptions&#039; =&gt; [],
	&#039;repository&#039; =&gt; object(Cake\ORM\Table) {}

}
$Sidebar = object(Cake\ORM\Entity) {

	&#039;new&#039; =&gt; false,
	&#039;accessible&#039; =&gt; [
		&#039;*&#039; =&gt; true
	],
	&#039;properties&#039; =&gt; [
		&#039;id&#039; =&gt; (int) 1,
		&#039;orders&#039; =&gt; (int) 1,
		&#039;orders_list&#039; =&gt; (int) 1,
		&#039;orders_create&#039; =&gt; (int) 1,
		&#039;orders_edit&#039; =&gt; (int) 1,
		&#039;orders_delete&#039; =&gt; (int) 1,
		&#039;orders_others&#039; =&gt; (int) 1,
		&#039;orders_mee&#039; =&gt; (int) 1,
		&#039;orders_products&#039; =&gt; (int) 1,
		&#039;order_requalify&#039; =&gt; (int) 0,
		&#039;profile&#039; =&gt; (int) 1,
		&#039;client&#039; =&gt; (int) 1,
		&#039;document&#039; =&gt; (int) 1,
		&#039;profile_list&#039; =&gt; (int) 1,
		&#039;profile_create&#039; =&gt; (int) 1,
		&#039;client_list&#039; =&gt; (int) 1,
		&#039;client_create&#039; =&gt; (int) 1,
		&#039;document_list&#039; =&gt; (int) 1,
		&#039;document_create&#039; =&gt; (int) 1,
		&#039;messages&#039; =&gt; (int) 0,
		&#039;drafts&#039; =&gt; (int) 0,
		&#039;user_id&#039; =&gt; (int) 4,
		&#039;profile_edit&#039; =&gt; (int) 1,
		&#039;profile_delete&#039; =&gt; (int) 1,
		&#039;client_edit&#039; =&gt; (int) 1,
		&#039;client_delete&#039; =&gt; (int) 1,
		&#039;document_edit&#039; =&gt; (int) 1,
		&#039;document_delete&#039; =&gt; (int) 1,
		&#039;document_others&#039; =&gt; (int) 1,
		&#039;recent&#039; =&gt; (int) 0,
		&#039;feedback&#039; =&gt; (int) 0,
		&#039;document_requalify&#039; =&gt; (int) 0,
		&#039;orders_requalify&#039; =&gt; (int) 0,
		&#039;email&#039; =&gt; (int) 0,
		&#039;email_todo&#039; =&gt; (int) 0,
		&#039;email_document&#039; =&gt; (int) 1,
		&#039;email_orders&#039; =&gt; (int) 1,
		&#039;logo&#039; =&gt; (int) 1,
		&#039;client_option&#039; =&gt; (int) 0,
		&#039;schedule&#039; =&gt; (int) 1,
		&#039;schedule_add&#039; =&gt; (int) 1,
		&#039;analytics&#039; =&gt; (int) 1,
		&#039;training&#039; =&gt; (int) 1,
		&#039;order_intact&#039; =&gt; (int) 0,
		&#039;bulk&#039; =&gt; (int) 1,
		&#039;email_profile&#039; =&gt; (int) 1,
		&#039;orders_emp&#039; =&gt; (int) 1,
		&#039;orders_GEM&#039; =&gt; (int) 0,
		&#039;orders_GDR&#039; =&gt; (int) 0,
		&#039;aggregate&#039; =&gt; (int) 1,
		&#039;invoice&#039; =&gt; (int) 1,
		&#039;orders_cch&#039; =&gt; (int) 0,
		&#039;orders_sal&#039; =&gt; (int) 1,
		&#039;orders_gdo&#039; =&gt; (int) 1,
		&#039;viewprofiles&#039; =&gt; (int) 1
	],
	&#039;dirty&#039; =&gt; [],
	&#039;original&#039; =&gt; [],
	&#039;virtual&#039; =&gt; [],
	&#039;errors&#039; =&gt; [],
	&#039;repository&#039; =&gt; &#039;Sidebar&#039;

}
$Me = (int) 4
$Manager = object(App\Controller\Component\ManagerComponent) {
	request =&gt; object(Cake\Network\Request) {}
	components =&gt; []
	Controller =&gt; object(App\Controller\ProfilesController) {}
	[protected] _registry =&gt; object(Cake\Controller\ComponentRegistry) {}
	[protected] _defaultConfig =&gt; []
	[protected] _componentMap =&gt; []
	[protected] _config =&gt; []
	[protected] _configInitialized =&gt; true
}
$is_disabled = &#039;disabled=&quot;disabled&quot;&#039;
$hidepermissions = false
$userID = (int) 4
$p = [
	(int) 0 =&gt; &#039;1603&#039;,
	(int) 1 =&gt; &#039;1627&#039;
]
$settings = object(Cake\ORM\Entity) {

	&#039;new&#039; =&gt; false,
	&#039;accessible&#039; =&gt; [
		&#039;*&#039; =&gt; true
	],
	&#039;properties&#039; =&gt; [
		&#039;id&#039; =&gt; (int) 1,
		&#039;layout&#039; =&gt; &#039;blue&#039;,
		&#039;body&#039; =&gt; &#039;page-quick-sidebar-over-content page-style-square page-header-fixed page-footer-fixed&#039;,
		&#039;sidebar&#039; =&gt; &#039;page-sidebar-menu page-sidebar-menu-hover-submenu&#039;,
		&#039;display&#039; =&gt; (int) 2,
		&#039;client&#039; =&gt; &#039;Client&#039;,
		&#039;document&#039; =&gt; &#039;Document&#039;,
		&#039;profile&#039; =&gt; &#039;Profile&#039;,
		&#039;mee&#039; =&gt; &#039;MEE&#039;,
		&#039;box&#039; =&gt; (int) 0,
		&#039;client_option&#039; =&gt; (int) 0,
		&#039;client_img&#039; =&gt; &#039;446536_762202.png&#039;,
		&#039;clientFrench&#039; =&gt; &#039;Client&#039;,
		&#039;documentFrench&#039; =&gt; &#039;Document&#039;,
		&#039;profileFrench&#039; =&gt; &#039;Profil&#039;,
		&#039;forceemail&#039; =&gt; &#039;&#039;
	],
	&#039;dirty&#039; =&gt; [],
	&#039;original&#039; =&gt; [],
	&#039;virtual&#039; =&gt; [],
	&#039;errors&#039; =&gt; [],
	&#039;repository&#039; =&gt; &#039;Settings&#039;

}
$sidebar = null
$language = &#039;English&#039;
$strings = [
	&#039;Date&#039; =&gt; &#039;1441201411&#039;,
	&#039;dashboard_affirmative&#039; =&gt; &#039;Yes&#039;,
	&#039;dashboard_negative&#039; =&gt; &#039;No&#039;,
	&#039;dashboard_selectall&#039; =&gt; &#039;Select All&#039;,
	&#039;dashboard_print&#039; =&gt; &#039;Print&#039;,
	&#039;dashboard_search&#039; =&gt; &#039;Search&#039;,
	&#039;profiles_name&#039; =&gt; &#039;Name&#039;,
	&#039;profiles_username&#039; =&gt; &#039;Username&#039;,
	&#039;profiles_assignedto&#039; =&gt; &#039;Assigned to&#039;,
	&#039;dashboard_actions&#039; =&gt; &#039;Actions&#039;,
	&#039;dashboard_previous&#039; =&gt; &#039;Previous&#039;,
	&#039;dashboard_next&#039; =&gt; &#039;Next&#039;,
	&#039;profiles_searchfor&#039; =&gt; &#039;Search for Profile&#039;,
	&#039;settings_client&#039; =&gt; &#039;Client&#039;,
	&#039;profiles_profiletype&#039; =&gt; &#039;Profile Type&#039;,
	&#039;index_createprofile&#039; =&gt; &#039;Create Profile&#039;,
	&#039;index_listprofile&#039; =&gt; &#039;List Profiles&#039;,
	&#039;dashboard_dashboard&#039; =&gt; &#039;Dashboard&#039;,
	&#039;profiles_profile&#039; =&gt; &#039;Profile&#039;,
	&#039;dashboard_mysettings&#039; =&gt; &#039;My Settings&#039;,
	&#039;dashboard_view&#039; =&gt; &#039;View&#039;,
	&#039;dashboard_edit&#039; =&gt; &#039;Edit&#039;,
	&#039;dashboard_delete&#039; =&gt; &#039;Delete&#039;,
	&#039;dashboard_servicedivision&#039; =&gt; &#039;A service division of&#039;,
	&#039;dashboard_documentsearch&#039; =&gt; &#039;Document Search...&#039;,
	&#039;profiles_viewdocuments&#039; =&gt; &#039;View Documents&#039;,
	&#039;profiles_vieworders&#039; =&gt; &#039;View Orders&#039;,
	&#039;dashboard_settings&#039; =&gt; &#039;Settings&#039;,
	&#039;profiles_null&#039; =&gt; &#039;Applicant&#039;,
	&#039;dashboard_debug&#039; =&gt; &#039;Debug Mode&#039;,
	&#039;dashboard_on&#039; =&gt; &#039;On&#039;,
	&#039;dashboard_off&#039; =&gt; &#039;Off&#039;,
	&#039;dashboard_confirmdelete&#039; =&gt; &#039;Are you sure you want to delete &amp;quot;%name%&amp;quot;?&#039;,
	&#039;profiles_image&#039; =&gt; &#039;Image&#039;,
	&#039;index_createclient&#039; =&gt; &#039;Create Client&#039;,
	&#039;index_listclients&#039; =&gt; &#039;List Clients&#039;,
	&#039;dashboard_logout&#039; =&gt; &#039;Log Out&#039;,
	&#039;index_qualify&#039; =&gt; &#039;Driver Qualification System&#039;,
	&#039;index_viewmore&#039; =&gt; &#039;View More&#039;,
	&#039;index_createclients&#039; =&gt; &#039;Create Client&#039;,
	&#039;index_listprofiles&#039; =&gt; &#039;List Profiles&#039;,
	&#039;index_listorders&#039; =&gt; &#039;List Orders&#039;,
	&#039;index_listdocuments&#039; =&gt; &#039;List Documents&#039;,
	&#039;index_orderdrafts&#039; =&gt; &#039;Order Drafts&#039;,
	&#039;index_createdocument&#039; =&gt; &#039;Create Document&#039;,
	&#039;index_documentdrafts&#039; =&gt; &#039;Document Drafts&#039;,
	&#039;index_tasks&#039; =&gt; &#039;Tasks&#039;,
	&#039;index_addtasks&#039; =&gt; &#039;Add Tasks&#039;,
	&#039;index_feedback&#039; =&gt; &#039;Feedback&#039;,
	&#039;index_analytics&#039; =&gt; &#039;Analytics&#039;,
	&#039;index_calendar&#039; =&gt; &#039;Calendar&#039;,
	&#039;index_documents&#039; =&gt; &#039;Documents&#039;,
	&#039;index_profiles&#039; =&gt; &#039;Profiles&#039;,
	&#039;index_clients&#039; =&gt; &#039;Clients&#039;,
	&#039;index_training&#039; =&gt; &#039;Training&#039;,
	&#039;index_courses&#039; =&gt; &#039;Courses&#039;,
	&#039;index_quizresults&#039; =&gt; &#039;Quiz Results&#039;,
	&#039;index_orders&#039; =&gt; &#039;Orders&#039;,
	&#039;index_invoice&#039; =&gt; &#039;Invoice&#039;,
	&#039;dashboard_add&#039; =&gt; &#039;Add&#039;,
	&#039;month_long01&#039; =&gt; &#039;January&#039;,
	&#039;month_long02&#039; =&gt; &#039;February&#039;,
	&#039;month_long03&#039; =&gt; &#039;March&#039;,
	&#039;month_long04&#039; =&gt; &#039;April&#039;,
	&#039;month_long05&#039; =&gt; &#039;May&#039;,
	&#039;month_long06&#039; =&gt; &#039;June&#039;,
	&#039;month_long07&#039; =&gt; &#039;July&#039;,
	&#039;month_long08&#039; =&gt; &#039;August&#039;,
	&#039;month_long09&#039; =&gt; &#039;September&#039;,
	&#039;month_long10&#039; =&gt; &#039;October&#039;,
	&#039;month_long11&#039; =&gt; &#039;November&#039;,
	&#039;month_long12&#039; =&gt; &#039;December&#039;,
	&#039;forms_companyname&#039; =&gt; &#039;Company Name&#039;,
	&#039;forms_name&#039; =&gt; &#039;Name&#039;,
	&#039;forms_address&#039; =&gt; &#039;Address&#039;,
	&#039;forms_city&#039; =&gt; &#039;City&#039;,
	&#039;forms_postalcode&#039; =&gt; &#039;Postal Code&#039;,
	&#039;forms_phone&#039; =&gt; &#039;Phone Number&#039;,
	&#039;forms_email&#039; =&gt; &#039;Email Address&#039;,
	&#039;forms_taxes&#039; =&gt; &#039;Taxes&#039;,
	&#039;forms_savechanges&#039; =&gt; &#039;Save Changes&#039;,
	&#039;dashboard_drafts&#039; =&gt; &#039;Drafts&#039;,
	&#039;dashboard_emailexists&#039; =&gt; &#039;This email address is already in use&#039;,
	&#039;profiles_nonefound&#039; =&gt; &#039;No profiles found&#039;,
	&#039;clients_enablerequalify&#039; =&gt; &#039;Enable Re-qualify?&#039;,
	&#039;clients_addeditimage&#039; =&gt; &#039;Add/Edit Image&#039;,
	&#039;forms_browse&#039; =&gt; &#039;Browse&#039;,
	&#039;forms_customertype&#039; =&gt; &#039;Customer Type&#039;,
	&#039;forms_provincestate&#039; =&gt; &#039;Province/State&#039;,
	&#039;forms_postalzip&#039; =&gt; &#039;Postal/Zip Code&#039;,
	&#039;forms_companyphone&#039; =&gt; &#039;Company&#039;s Phone Number&#039;,
	&#039;forms_website&#039; =&gt; &#039;Website&#039;,
	&#039;forms_divisions&#039; =&gt; &#039;Divisions&#039;,
	&#039;forms_signatoryfirstname&#039; =&gt; &#039;Signatory&#039;s First Name&#039;,
	&#039;forms_signatorylastname&#039; =&gt; &#039;Signatory&#039;s Last Name&#039;,
	&#039;forms_signatoryemail&#039; =&gt; &#039;Signatory&#039;s Email Address&#039;,
	&#039;forms_startdate&#039; =&gt; &#039;Start Date&#039;,
	&#039;forms_enddate&#039; =&gt; &#039;End Date&#039;,
	&#039;forms_referredby&#039; =&gt; &#039;Referred By&#039;,
	&#039;forms_arisagreement&#039; =&gt; &#039;ARIS Agreement #&#039;,
	&#039;forms_arisreverification&#039; =&gt; &#039;ARIS Re-verification&#039;,
	&#039;forms_sacc&#039; =&gt; &#039;SACC Number &#039;,
	&#039;forms_billing&#039; =&gt; &#039;Billing&#039;,
	&#039;forms_billingcontact&#039; =&gt; &#039;Billing Contact&#039;,
	&#039;forms_billingaddress&#039; =&gt; &#039;Billing Address&#039;,
	&#039;forms_billingcity&#039; =&gt; &#039;Billing City&#039;,
	&#039;forms_billingprovince&#039; =&gt; &#039;Billing Province/State&#039;,
	&#039;forms_billingpostalcode&#039; =&gt; &#039;Billing Postal Code&#039;,
	&#039;forms_invoiceterms&#039; =&gt; &#039;Invoice Terms&#039;,
	&#039;forms_billinginstructions&#039; =&gt; &#039;Billing Instructions&#039;,
	&#039;forms_individual&#039; =&gt; &#039;Individual&#039;,
	&#039;forms_centralized&#039; =&gt; &#039;Centralized&#039;,
	&#039;forms_description&#039; =&gt; &#039;Description &#039;,
	&#039;forms_addmore&#039; =&gt; &#039;Add More&#039;,
	&#039;forms_oneperline&#039; =&gt; &#039;One division per line&#039;,
	&#039;forms_select&#039; =&gt; &#039;Select&#039;,
	&#039;forms_weekly&#039; =&gt; &#039;Weekly&#039;,
	&#039;forms_biweekly&#039; =&gt; &#039;Bi-weekly&#039;,
	&#039;forms_monthly&#039; =&gt; &#039;Monthly&#039;,
	&#039;forms_attachdocs&#039; =&gt; &#039;Attach Documents&#039;,
	&#039;forms_datasaved&#039; =&gt; &#039;Data saved successfully&#039;,
	&#039;forms_saving&#039; =&gt; &#039;Saving...&#039;,
	&#039;forms_save&#039; =&gt; &#039;Save&#039;,
	&#039;forms_removelast&#039; =&gt; &#039;Remove Last&#039;,
	&#039;forms_uploading&#039; =&gt; &#039;Uploading...&#039;,
	&#039;forms_eventname&#039; =&gt; &#039;Event Name&#039;,
	&#039;forms_attachedfiles&#039; =&gt; &#039;Attached Files&#039;,
	&#039;forms_billingcustomertype&#039; =&gt; &#039;Billing Customer Type&#039;,
	&#039;forms_requalifyfrequency&#039; =&gt; &#039;Re-qualify Frequency?&#039;,
	&#039;forms_1month&#039; =&gt; &#039;1 Month&#039;,
	&#039;forms_3month&#039; =&gt; &#039;3 Months&#039;,
	&#039;forms_6month&#039; =&gt; &#039;6 Months&#039;,
	&#039;forms_12month&#039; =&gt; &#039;12 Months&#039;,
	&#039;forms_includedproducts&#039; =&gt; &#039;Products Included&#039;,
	&#039;forms_driverusername&#039; =&gt; &#039;Driver (Username)&#039;,
	&#039;forms_hireddate&#039; =&gt; &#039;Hired Date&#039;,
	&#039;forms_cronorders&#039; =&gt; &#039;Cron Orders Placed&#039;,
	&#039;forms_added&#039; =&gt; &#039;Added&#039;,
	&#039;forms_removed&#039; =&gt; &#039;Removed&#039;,
	&#039;profiles_add&#039; =&gt; &#039;Create Profile&#039;,
	&#039;profiles_view&#039; =&gt; &#039;View Profile&#039;,
	&#039;profiles_edit&#039; =&gt; &#039;Edit Profile&#039;,
	&#039;profiles_viewscorecard&#039; =&gt; &#039;View Scorecard&#039;,
	&#039;profiles_notes&#039; =&gt; &#039;Notes&#039;,
	&#039;profiles_permissions&#039; =&gt; &#039;Permissions&#039;,
	&#039;profiles_feedback&#039; =&gt; &#039;Feedback&#039;,
	&#039;profiles_mydocuments&#039; =&gt; &#039;View My Documents&#039;,
	&#039;profiles_washired&#039; =&gt; &#039;Was this applicant hired?&#039;,
	&#039;theme_default&#039; =&gt; &#039;Default&#039;,
	&#039;theme_color&#039; =&gt; &#039;THEME COLOR&#039;,
	&#039;theme_darkblue&#039; =&gt; &#039;Dark Blue&#039;,
	&#039;theme_blue&#039; =&gt; &#039;Blue&#039;,
	&#039;theme_grey&#039; =&gt; &#039;Grey&#039;,
	&#039;theme_light&#039; =&gt; &#039;Light&#039;,
	&#039;theme_light2&#039; =&gt; &#039;Light 2&#039;,
	&#039;theme_style&#039; =&gt; &#039;Theme Style&#039;,
	&#039;theme_squarecorners&#039; =&gt; &#039;Square corners&#039;,
	&#039;theme_roundcorners&#039; =&gt; &#039;Rounded corners&#039;,
	&#039;theme_layout&#039; =&gt; &#039;Layout&#039;,
	&#039;theme_fluid&#039; =&gt; &#039;Fluid&#039;,
	&#039;theme_boxed&#039; =&gt; &#039;Boxed&#039;,
	&#039;theme_header&#039; =&gt; &#039;Header&#039;,
	&#039;theme_fixed&#039; =&gt; &#039;Fixed&#039;,
	&#039;theme_dropdown&#039; =&gt; &#039;Top Menu Dropdown&#039;,
	&#039;theme_dark&#039; =&gt; &#039;Dark&#039;,
	&#039;theme_sidebarmode&#039; =&gt; &#039;Sidebar Mode&#039;,
	&#039;theme_sidebarmenu&#039; =&gt; &#039;Sidebar Menu&#039;,
	&#039;theme_accordion&#039; =&gt; &#039;Accordion&#039;,
	&#039;theme_hover&#039; =&gt; &#039;Hover&#039;,
	&#039;theme_sidebarstyle&#039; =&gt; &#039;Sidebar Style&#039;,
	&#039;theme_sidebarposition&#039; =&gt; &#039;Sidebar Position&#039;,
	&#039;theme_left&#039; =&gt; &#039;Left&#039;,
	&#039;theme_right&#039; =&gt; &#039;Right&#039;,
	&#039;theme_footer&#039; =&gt; &#039;Footer&#039;,
	&#039;profiles_usernameexists&#039; =&gt; &#039;Username exists already&#039;,
	&#039;forms_drivertype&#039; =&gt; &#039;Driver Type&#039;,
	&#039;forms_selectdrivertype&#039; =&gt; &#039;Select Driver Type&#039;,
	&#039;forms_usernamerequired&#039; =&gt; &#039;Username is required&#039;,
	&#039;forms_firstname&#039; =&gt; &#039;First Name&#039;,
	&#039;forms_middlename&#039; =&gt; &#039;Middle Name&#039;,
	&#039;forms_lastname&#039; =&gt; &#039;Last Name&#039;,
	&#039;forms_title&#039; =&gt; &#039;Title&#039;,
	&#039;forms_mr&#039; =&gt; &#039;Mr.&#039;,
	&#039;forms_mrs&#039; =&gt; &#039;Mrs.&#039;,
	&#039;forms_ms&#039; =&gt; &#039;Ms.&#039;,
	&#039;forms_gender&#039; =&gt; &#039;Gender&#039;,
	&#039;forms_male&#039; =&gt; &#039;Male&#039;,
	&#039;forms_female&#039; =&gt; &#039;Female&#039;,
	&#039;forms_selectgender&#039; =&gt; &#039;Select Gender&#039;,
	&#039;forms_placeofbirth&#039; =&gt; &#039;Country of Birth&#039;,
	&#039;forms_dateofbirth&#039; =&gt; &#039;Date of Birth&#039;,
	&#039;forms_country&#039; =&gt; &#039;Country&#039;,
	&#039;forms_driverslicense&#039; =&gt; &#039;Driver&#039;s License&#039;,
	&#039;forms_provinceissued&#039; =&gt; &#039;Province issued&#039;,
	&#039;forms_expirydate&#039; =&gt; &#039;Expiry Date&#039;,
	&#039;forms_hearaboutus&#039; =&gt; &#039;Where did you hear about us?&#039;,
	&#039;forms_password&#039; =&gt; &#039;Password&#039;,
	&#039;forms_retypepassword&#039; =&gt; &#039;Re-type Password&#039;,
	&#039;forms_referral&#039; =&gt; &#039;Referral&#039;,
	&#039;forms_companywebsite&#039; =&gt; &#039;Company Website&#039;,
	&#039;forms_newspaper&#039; =&gt; &#039;Newspaper&#039;,
	&#039;forms_other&#039; =&gt; &#039;Other&#039;,
	&#039;forms_submit&#039; =&gt; &#039;Submit&#039;,
	&#039;forms_addnotes&#039; =&gt; &#039;Add driver notes here&#039;,
	&#039;forms_notesaved&#039; =&gt; &#039;Note updated successfully&#039;,
	&#039;forms_notenotsaved&#039; =&gt; &#039;You can\&#039;t submit a blank note&#039;,
	&#039;forms_notedeleted&#039; =&gt; &#039;Note deleted successfully!&#039;,
	&#039;index_editdocument&#039; =&gt; &#039;Edit Document&#039;,
	&#039;index_viewdocument&#039; =&gt; &#039;View Document&#039;,
	&#039;forms_savedraft&#039; =&gt; &#039;Save As Draft&#039;,
	&#039;forms_uploaded&#039; =&gt; &#039;uploaded successfully&#039;,
	&#039;forms_novideo&#039; =&gt; &#039;Your browser does not support the video tag.&#039;,
	&#039;forms_signature&#039; =&gt; &#039;Signature&#039;,
	&#039;forms_selectone&#039; =&gt; &#039;Please select at least one option&#039;,
	&#039;forms_signplease&#039; =&gt; &#039;Please provide your signature to confirm.&#039;,
	&#039;forms_missingid&#039; =&gt; &#039;Missing the required piece of ID&#039;,
	&#039;forms_missingabstract&#039; =&gt; &#039;Missing the abstract consent form&#039;,
	&#039;forms_pleaseconfirm&#039; =&gt; &#039;Please confirm that you have read the conditions.&#039;,
	&#039;forms_fillall&#039; =&gt; &#039;Please fill out all the required fields.&#039;,
	&#039;forms_savesig&#039; =&gt; &#039;Please save the signature before you proceed.&#039;,
	&#039;forms_datetime&#039; =&gt; &#039;Date/Time&#039;,
	&#039;forms_clear&#039; =&gt; &#039;Clear&#039;,
	&#039;forms_nosig&#039; =&gt; &#039;No signature supplied&#039;,
	&#039;forms_signhere&#039; =&gt; &#039;Please sign here then click save before proceeding&#039;,
	&#039;forms_language&#039; =&gt; &#039;Language&#039;,
	&#039;forms_emailcreds&#039; =&gt; &#039;Email Credentials&#039;,
	&#039;forms_email2new&#039; =&gt; &#039;Email to the newuser&#039;,
	&#039;forms_passnotequal&#039; =&gt; &#039;Please enter the same password in both boxes&#039;,
	&#039;profiles_sendforms&#039; =&gt; &#039;Send forms via email&#039;,
	&#039;profiles_expired&#039; =&gt; &#039;License Expired&#039;,
	&#039;forms_dateformat&#039; =&gt; &#039;YYYY-MM-DD&#039;,
	&#039;dashboard_dashboard2&#039; =&gt; &#039;MEE Dashboard&#039;,
	&#039;forms_selectdriver&#039; =&gt; &#039;Select Driver&#039;,
	&#039;forms_credssent&#039; =&gt; &#039;Credentials sent&#039;,
	&#039;profiles_gfs&#039; =&gt; &#039;&lt;b&gt;To place a MEE order on an applicant, please follow these steps:&lt;/b&gt;&lt;BR&gt;
Step 1 - click on edit beside candidate name below&lt;BR&gt;
Step 2 - select profile type, save&lt;BR&gt;
Step 3 - place order&#039;,
	&#039;forms_sin&#039; =&gt; &#039;SIN&#039;,
	&#039;forms_passplease&#039; =&gt; &#039;Please enter a password&#039;,
	&#039;forms_forceemail&#039; =&gt; &#039;Force email to&#039;,
	&#039;profiles_profiles&#039; =&gt; &#039;profiles&#039;,
	&#039;forms_failed&#039; =&gt; &#039;&#039;%name%&#039; (%value%) is not a valid %type%&#039;
]
$Trans = &#039;&#039;
$param = &#039;view&#039;
$param2 = &#039;View Profile&#039;
$checker = &#039;1&#039;
$tag = &#039;submitted_by_id&#039;
$title = &#039;Investigations Intake Form &ndash; Benefit Claims&#039;
$product = object(Cake\ORM\Entity) {

	&#039;new&#039; =&gt; false,
	&#039;accessible&#039; =&gt; [
		&#039;*&#039; =&gt; true
	],
	&#039;properties&#039; =&gt; [
		&#039;id&#039; =&gt; (int) 12,
		&#039;title&#039; =&gt; &#039;Sales&#039;,
		&#039;enable&#039; =&gt; (int) 1,
		&#039;ISB&#039; =&gt; (int) 1,
		&#039;titleFrench&#039; =&gt; &#039;Ventes&#039;,
		&#039;placesorders&#039; =&gt; (int) 1,
		&#039;caneditall&#039; =&gt; (int) 0
	],
	&#039;dirty&#039; =&gt; [],
	&#039;original&#039; =&gt; [],
	&#039;virtual&#039; =&gt; [],
	&#039;errors&#039; =&gt; [],
	&#039;repository&#039; =&gt; &#039;ProfileTypes&#039;

}
$alias = &#039;orders_gdo&#039;
$showit = false
$profile_types = [
	(int) 0 =&gt; &#039;5&#039;
]
$activetab = &#039;config&#039;
$gfs = &#039;0&#039;
$showcreds = true
$getProfileType = object(Cake\ORM\Entity) {

	&#039;new&#039; =&gt; false,
	&#039;accessible&#039; =&gt; [
		&#039;*&#039; =&gt; true
	],
	&#039;properties&#039; =&gt; [
		&#039;profile_type&#039; =&gt; (int) 1
	],
	&#039;dirty&#039; =&gt; [],
	&#039;original&#039; =&gt; [],
	&#039;virtual&#039; =&gt; [],
	&#039;errors&#039; =&gt; [],
	&#039;repository&#039; =&gt; &#039;Profiles&#039;

}
$client_id = &#039;1&#039;
$user_client = (int) 0
$gender = &#039;Male&#039;
$currentyear = &#039;1983&#039;
$currentmonth = &#039;07&#039;
$currentday = &#039;16&#039;
$now = &#039;2015&#039;
$temp = (int) 32
$delete = true
$desirednote = (int) -1
$pid = (int) 888
$notes = object(Cake\ORM\Query) {

	&#039;sql&#039; =&gt; &#039;SELECT `recruiter_notes`.`id` AS `recruiter_notes__id`, `recruiter_notes`.`driver_id` AS `recruiter_notes__driver_id`, `recruiter_notes`.`recruiter_id` AS `recruiter_notes__recruiter_id`, `recruiter_notes`.`description` AS `recruiter_notes__description`, `recruiter_notes`.`created` AS `recruiter_notes__created` FROM `recruiter_notes` `recruiter_notes` WHERE `driver_id` = :c0 ORDER BY `id` desc&#039;,
	&#039;params&#039; =&gt; [
		&#039;:c0&#039; =&gt; [
			[maximum depth reached]
		]
	],
	&#039;defaultTypes&#039; =&gt; [
		&#039;recruiter_notes.id&#039; =&gt; &#039;integer&#039;,
		&#039;id&#039; =&gt; &#039;integer&#039;,
		&#039;recruiter_notes.driver_id&#039; =&gt; &#039;integer&#039;,
		&#039;driver_id&#039; =&gt; &#039;integer&#039;,
		&#039;recruiter_notes.recruiter_id&#039; =&gt; &#039;integer&#039;,
		&#039;recruiter_id&#039; =&gt; &#039;integer&#039;,
		&#039;recruiter_notes.description&#039; =&gt; &#039;text&#039;,
		&#039;description&#039; =&gt; &#039;text&#039;,
		&#039;recruiter_notes.created&#039; =&gt; &#039;date&#039;,
		&#039;created&#039; =&gt; &#039;date&#039;
	],
	&#039;decorators&#039; =&gt; (int) 0,
	&#039;executed&#039; =&gt; true,
	&#039;hydrate&#039; =&gt; true,
	&#039;buffered&#039; =&gt; true,
	&#039;formatters&#039; =&gt; (int) 0,
	&#039;mapReducers&#039; =&gt; (int) 0,
	&#039;contain&#039; =&gt; [],
	&#039;matching&#039; =&gt; [],
	&#039;extraOptions&#039; =&gt; [],
	&#039;repository&#039; =&gt; object(Cake\ORM\Table) {}

}
$webroot = &#039;/veritas3-0/&#039;
$includeabove = true
$strings2 = [
	&#039;Date&#039; =&gt; &#039;1441201411&#039;,
	&#039;documents_pending&#039; =&gt; &#039;pending&#039;,
	&#039;orders_noresults&#039; =&gt; &#039;No orders found&#039;,
	&#039;file_download&#039; =&gt; &#039;Download&#039;,
	&#039;score_score&#039; =&gt; &#039;Order Score Sheet&#039;,
	&#039;score_view&#039; =&gt; &#039;View Order&#039;,
	&#039;score_road&#039; =&gt; &#039;Road Test Score&#039;,
	&#039;score_products&#039; =&gt; &#039;Products Ordered&#039;,
	&#039;score_docs&#039; =&gt; &#039;Documents Submitted&#039;,
	&#039;score_dupe&#039; =&gt; &#039;Duplicate Order&#039;,
	&#039;score_submitted&#039; =&gt; &#039;Submitted&#039;,
	&#039;score_skipped&#039; =&gt; &#039;Skipped&#039;,
	&#039;score_none&#039; =&gt; &#039;None&#039;,
	&#039;score_notattached&#039; =&gt; &#039;NOT ATTACHED&#039;,
	&#039;score_pass&#039; =&gt; &#039;PASS&#039;,
	&#039;score_discrepancies&#039; =&gt; &#039;DISCREPANCIES&#039;,
	&#039;score_coachingrequired&#039; =&gt; &#039;COACHING REQUIRED&#039;,
	&#039;score_verified&#039; =&gt; &#039;VERIFIED&#039;,
	&#039;score_potentialtosucceed&#039; =&gt; &#039;POTENTIAL TO SUCCEED&#039;,
	&#039;score_idealcandidate&#039; =&gt; &#039;IDEAL CANDIDATE&#039;,
	&#039;score_incomplete&#039; =&gt; &#039;INCOMPLETE&#039;,
	&#039;score_satisfactory&#039; =&gt; &#039;SATISFACTORY&#039;,
	&#039;score_requiresattention&#039; =&gt; &#039;REQUIRES ATTENTION&#039;,
	&#039;score_duplicateorder&#039; =&gt; &#039;DUPLICATE ORDER&#039;
]
$counting = (int) 0
$drcl_d = object(Cake\ORM\Query) {

	&#039;sql&#039; =&gt; &#039;SELECT `orders`.`id` AS `orders__id`, `orders`.`title` AS `orders__title`, `orders`.`description` AS `orders__description`, `orders`.`scale` AS `orders__scale`, `orders`.`reason` AS `orders__reason`, `orders`.`suggestion` AS `orders__suggestion`, `orders`.`user_id` AS `orders__user_id`, `orders`.`client_id` AS `orders__client_id`, `orders`.`uploaded_for` AS `orders__uploaded_for`, `orders`.`created` AS `orders__created`, `orders`.`division` AS `orders__division`, `orders`.`draft` AS `orders__draft`, `orders`.`conf_recruiter_name` AS `orders__conf_recruiter_name`, `orders`.`conf_driver_name` AS `orders__conf_driver_name`, `orders`.`conf_date` AS `orders__conf_date`, `orders`.`ins_id` AS `orders__ins_id`, `orders`.`ebs_id` AS `orders__ebs_id`, `orders`.`response` AS `orders__response`, `orders`.`ins_pdi` AS `orders__ins_pdi`, `orders`.`ebs_pdi` AS `orders__ebs_pdi`, `orders`.`recruiter_signature` AS `orders__recruiter_signature`, `orders`.`ins_79` AS `orders__ins_79`, `orders`.`ins_79_binary` AS `orders__ins_79_binary`, `orders`.`ins_1` AS `orders__ins_1`, `orders`.`ins_1_binary` AS `orders__ins_1_binary`, `orders`.`ins_14` AS `orders__ins_14`, `orders`.`ins_14_binary` AS `orders__ins_14_binary`, `orders`.`ins_77` AS `orders__ins_77`, `orders`.`ins_77_binary` AS `orders__ins_77_binary`, `orders`.`ins_78` AS `orders__ins_78`, `orders`.`ins_78_binary` AS `orders__ins_78_binary`, `orders`.`ebs_1603` AS `orders__ebs_1603`, `orders`.`ebs_1603_binary` AS `orders__ebs_1603_binary`, `orders`.`ebs_1627` AS `orders__ebs_1627`, `orders`.`ebs_1627_binary` AS `orders__ebs_1627_binary`, `orders`.`ebs_1650` AS `orders__ebs_1650`, `orders`.`ebs_1650_binary` AS `orders__ebs_1650_binary`, `orders`.`ins_72` AS `orders__ins_72`, `orders`.`ins_72_binary` AS `orders__ins_72_binary`, `orders`.`bright_planet` AS `orders__bright_planet`, `orders`.`final_show` AS `orders__final_show`, `orders`.`is_hired` AS `orders__is_hired`, `orders`.`bright_planet_binary` AS `orders__bright_planet_binary`, `orders`.`abc` AS `orders__abc`, `orders`.`bright_planet_html_binary` AS `orders__bright_planet_html_binary`, `orders`.`order_type` AS `orders__order_type`, `orders`.`forms` AS `orders__forms`, `orders`.`complete` AS `orders__complete`, `orders`.`ins_31` AS `orders__ins_31`, `orders`.`ins_31_binary` AS `orders__ins_31_binary`, `orders`.`ins_32` AS `orders__ins_32`, `orders`.`ins_32_binary` AS `orders__ins_32_binary`, `orders`.`complete_writing` AS `orders__complete_writing`, `Profiles`.`id` AS `Profiles__id`, `Profiles`.`title` AS `Profiles__title`, `Profiles`.`fname` AS `Profiles__fname`, `Profiles`.`lname` AS `Profiles__lname`, `Profiles`.`username` AS `Profiles__username`, `Profiles`.`email` AS `Profiles__email`, `Profiles`.`password` AS `Profiles__password`, `Profiles`.`driver` AS `Profiles__driver`, `Profiles`.`address` AS `Profiles__address`, `Profiles`.`street` AS `Profiles__street`, `Profiles`.`city` AS `Profiles__city`, `Profiles`.`province` AS `Profiles__province`, `Profiles`.`postal` AS `Profiles__postal`, `Profiles`.`country` AS `Profiles__country`, `Profiles`.`phone` AS `Profiles__phone`, `Profiles`.`image` AS `Profiles__image`, `Profiles`.`admin` AS `Profiles__admin`, `Profiles`.`super` AS `Profiles__super`, `Profiles`.`profile_type` AS `Profiles__profile_type`, `Profiles`.`driver_license_no` AS `Profiles__driver_license_no`, `Profiles`.`driver_province` AS `Profiles__driver_province`, `Profiles`.`us_dot` AS `Profiles__us_dot`, `Profiles`.`applicants_email` AS `Profiles__applicants_email`, `Profiles`.`transclick` AS `Profiles__transclick`, `Profiles`.`mname` AS `Profiles__mname`, `Profiles`.`dob` AS `Profiles__dob`, `Profiles`.`expiry_date` AS `Profiles__expiry_date`, `Profiles`.`gender` AS `Profiles__gender`, `Profiles`.`isb_id` AS `Profiles__isb_id`, `Profiles`.`placeofbirth` AS `Profiles__placeofbirth`, `Profiles`.`created_by` AS `Profiles__created_by`, `Profiles`.`created` AS `Profiles__created`, `Profiles`.`drafts` AS `Profiles__drafts`, `Profiles`.`is_hired` AS `Profiles__is_hired`, `Profiles`.`ptypes` AS `Profiles__ptypes`, `Profiles`.`ctypes` AS `Profiles__ctypes`, `Profiles`.`language` AS `Profiles__language`, `Profiles`.`automatic_email` AS `Profiles__automatic_email`, `Profiles`.`automatic_sent` AS `Profiles__automatic_sent`, `Profiles`.`hear` AS `Profiles__hear`, `Profiles`.`requalify` AS `Profiles__requalify`, `Profiles`.`hired_date` AS `Profiles__hired_date`, `Profiles`.`emailsent` AS `Profiles__emailsent`, `Profiles`.`send_to` AS `Profiles__send_to`, `Profiles`.`sin` AS `Profiles__sin`, `Profiles`.`otherinfo` AS `Profiles__otherinfo`, `Clients`.`id` AS `Clients__id`, `Clients`.`title` AS `Clients__title`, `Clients`.`description` AS `Clients__description`, `Clients`.`description_fre` AS `Clients__description_fre`, `Clients`.`company_name` AS `Clients__company_name`, `Clients`.`customer_type` AS `Clients__customer_type`, `Clients`.`sig_fname` AS `Clients__sig_fname`, `Clients`.`sig_lname` AS `Clients__sig_lname`, `Clients`.`company_phone` AS `Clients__company_phone`, `Clients`.`sig_email` AS `Clients__sig_email`, `Clients`.`company_address` AS `Clients__company_address`, `Clients`.`city` AS `Clients__city`, `Clients`.`postal` AS `Clients__postal`, `Clients`.`province` AS `Clients__province`, `Clients`.`country` AS `Clients__country`, `Clients`.`admin_fname` AS `Clients__admin_fname`, `Clients`.`admin_lname` AS `Clients__admin_lname`, `Clients`.`admin_email` AS `Clients__admin_email`, `Clients`.`admin_phone` AS `Clients__admin_phone`, `Clients`.`image` AS `Clients__image`, `Clients`.`site` AS `Clients__site`, `Clients`.`addedBy` AS `Clients__addedBy`, `Clients`.`isApproved` AS `Clients__isApproved`, `Clients`.`date_start` AS `Clients__date_start`, `Clients`.`date_end` AS `Clients__date_end`, `Clients`.`referred_by` AS `Clients__referred_by`, `Clients`.`agreement_number` AS `Clients__agreement_number`, `Clients`.`reverification` AS `Clients__reverification`, `Clients`.`sacc_number` AS `Clients__sacc_number`, `Clients`.`document` AS `Clients__document`, `Clients`.`billing_contact` AS `Clients__billing_contact`, `Clients`.`billing_address` AS `Clients__billing_address`, `Clients`.`billing_instructions` AS `Clients__billing_instructions`, `Clients`.`invoice_terms` AS `Clients__invoice_terms`, `Clients`.`recruiter_id` AS `Clients__recruiter_id`, `Clients`.`profile_id` AS `Clients__profile_id`, `Clients`.`contact_id` AS `Clients__contact_id`, `Clients`.`is_special` AS `Clients__is_special`, `Clients`.`status` AS `Clients__status`, `Clients`.`billing_city` AS `Clients__billing_city`, `Clients`.`billing_province` AS `Clients__billing_province`, `Clients`.`billing_postal_code` AS `Clients__billing_postal_code`, `Clients`.`division` AS `Clients__division`, `Clients`.`uploaded_for` AS `Clients__uploaded_for`, `Clients`.`created` AS `Clients__created`, `Clients`.`drafts` AS `Clients__drafts`, `Clients`.`client_date` AS `Clients__client_date`, `Clients`.`requalify_re` AS `Clients__requalify_re`, `Clients`.`requalify` AS `Clients__requalify`, `Clients`.`requalify_date` AS `Clients__requalify_date`, `Clients`.`requalify_frequency` AS `Clients__requalify_frequency`, `Clients`.`requalify_product` AS `Clients__requalify_product`, `Clients`.`forceemail` AS `Clients__forceemail` FROM `orders` `orders` LEFT JOIN `profiles` `Profiles` ON `Profiles`.`id` = (`orders`.`uploaded_for`) LEFT JOIN `clients` `Clients` ON `Clients`.`id` = (`orders`.`client_id`) WHERE (`orders`.`uploaded_for` = :c0 AND `orders`.`draft` = :c1) ORDER BY orders.id DESC&#039;,
	&#039;params&#039; =&gt; [
		&#039;:c0&#039; =&gt; [
			[maximum depth reached]
		],
		&#039;:c1&#039; =&gt; [
			[maximum depth reached]
		]
	],
	&#039;defaultTypes&#039; =&gt; [
		&#039;orders.id&#039; =&gt; &#039;integer&#039;,
		&#039;id&#039; =&gt; &#039;integer&#039;,
		&#039;orders.title&#039; =&gt; &#039;string&#039;,
		&#039;title&#039; =&gt; &#039;string&#039;,
		&#039;orders.description&#039; =&gt; &#039;text&#039;,
		&#039;description&#039; =&gt; &#039;text&#039;,
		&#039;orders.scale&#039; =&gt; &#039;integer&#039;,
		&#039;scale&#039; =&gt; &#039;integer&#039;,
		&#039;orders.reason&#039; =&gt; &#039;text&#039;,
		&#039;reason&#039; =&gt; &#039;text&#039;,
		&#039;orders.suggestion&#039; =&gt; &#039;text&#039;,
		&#039;suggestion&#039; =&gt; &#039;text&#039;,
		&#039;orders.user_id&#039; =&gt; &#039;integer&#039;,
		&#039;user_id&#039; =&gt; &#039;integer&#039;,
		&#039;orders.client_id&#039; =&gt; &#039;integer&#039;,
		&#039;client_id&#039; =&gt; &#039;integer&#039;,
		&#039;orders.uploaded_for&#039; =&gt; &#039;integer&#039;,
		&#039;uploaded_for&#039; =&gt; &#039;integer&#039;,
		&#039;orders.created&#039; =&gt; &#039;string&#039;,
		&#039;created&#039; =&gt; &#039;string&#039;,
		&#039;orders.division&#039; =&gt; &#039;string&#039;,
		&#039;division&#039; =&gt; &#039;string&#039;,
		&#039;orders.draft&#039; =&gt; &#039;integer&#039;,
		&#039;draft&#039; =&gt; &#039;integer&#039;,
		&#039;orders.conf_recruiter_name&#039; =&gt; &#039;string&#039;,
		&#039;conf_recruiter_name&#039; =&gt; &#039;string&#039;,
		&#039;orders.conf_driver_name&#039; =&gt; &#039;string&#039;,
		&#039;conf_driver_name&#039; =&gt; &#039;string&#039;,
		&#039;orders.conf_date&#039; =&gt; &#039;string&#039;,
		&#039;conf_date&#039; =&gt; &#039;string&#039;,
		&#039;orders.ins_id&#039; =&gt; &#039;string&#039;,
		&#039;ins_id&#039; =&gt; &#039;string&#039;,
		&#039;orders.ebs_id&#039; =&gt; &#039;string&#039;,
		&#039;ebs_id&#039; =&gt; &#039;string&#039;,
		&#039;orders.response&#039; =&gt; &#039;string&#039;,
		&#039;response&#039; =&gt; &#039;string&#039;,
		&#039;orders.ins_pdi&#039; =&gt; &#039;string&#039;,
		&#039;ins_pdi&#039; =&gt; &#039;string&#039;,
		&#039;orders.ebs_pdi&#039; =&gt; &#039;string&#039;,
		&#039;ebs_pdi&#039; =&gt; &#039;string&#039;,
		&#039;orders.recruiter_signature&#039; =&gt; &#039;string&#039;,
		&#039;recruiter_signature&#039; =&gt; &#039;string&#039;,
		&#039;orders.ins_79&#039; =&gt; &#039;text&#039;,
		&#039;ins_79&#039; =&gt; &#039;text&#039;,
		&#039;orders.ins_79_binary&#039; =&gt; &#039;text&#039;,
		&#039;ins_79_binary&#039; =&gt; &#039;text&#039;,
		&#039;orders.ins_1&#039; =&gt; &#039;text&#039;,
		&#039;ins_1&#039; =&gt; &#039;text&#039;,
		&#039;orders.ins_1_binary&#039; =&gt; &#039;text&#039;,
		&#039;ins_1_binary&#039; =&gt; &#039;text&#039;,
		&#039;orders.ins_14&#039; =&gt; &#039;text&#039;,
		&#039;ins_14&#039; =&gt; &#039;text&#039;,
		&#039;orders.ins_14_binary&#039; =&gt; &#039;text&#039;,
		&#039;ins_14_binary&#039; =&gt; &#039;text&#039;,
		&#039;orders.ins_77&#039; =&gt; &#039;text&#039;,
		&#039;ins_77&#039; =&gt; &#039;text&#039;,
		&#039;orders.ins_77_binary&#039; =&gt; &#039;text&#039;,
		&#039;ins_77_binary&#039; =&gt; &#039;text&#039;,
		&#039;orders.ins_78&#039; =&gt; &#039;text&#039;,
		&#039;ins_78&#039; =&gt; &#039;text&#039;,
		&#039;orders.ins_78_binary&#039; =&gt; &#039;text&#039;,
		&#039;ins_78_binary&#039; =&gt; &#039;text&#039;,
		&#039;orders.ebs_1603&#039; =&gt; &#039;text&#039;,
		&#039;ebs_1603&#039; =&gt; &#039;text&#039;,
		&#039;orders.ebs_1603_binary&#039; =&gt; &#039;text&#039;,
		&#039;ebs_1603_binary&#039; =&gt; &#039;text&#039;,
		&#039;orders.ebs_1627&#039; =&gt; &#039;text&#039;,
		&#039;ebs_1627&#039; =&gt; &#039;text&#039;,
		&#039;orders.ebs_1627_binary&#039; =&gt; &#039;text&#039;,
		&#039;ebs_1627_binary&#039; =&gt; &#039;text&#039;,
		&#039;orders.ebs_1650&#039; =&gt; &#039;text&#039;,
		&#039;ebs_1650&#039; =&gt; &#039;text&#039;,
		&#039;orders.ebs_1650_binary&#039; =&gt; &#039;text&#039;,
		&#039;ebs_1650_binary&#039; =&gt; &#039;text&#039;,
		&#039;orders.ins_72&#039; =&gt; &#039;text&#039;,
		&#039;ins_72&#039; =&gt; &#039;text&#039;,
		&#039;orders.ins_72_binary&#039; =&gt; &#039;text&#039;,
		&#039;ins_72_binary&#039; =&gt; &#039;text&#039;,
		&#039;orders.bright_planet&#039; =&gt; &#039;text&#039;,
		&#039;bright_planet&#039; =&gt; &#039;text&#039;,
		&#039;orders.final_show&#039; =&gt; &#039;boolean&#039;,
		&#039;final_show&#039; =&gt; &#039;boolean&#039;,
		&#039;orders.is_hired&#039; =&gt; &#039;integer&#039;,
		&#039;is_hired&#039; =&gt; &#039;integer&#039;,
		&#039;orders.bright_planet_binary&#039; =&gt; &#039;text&#039;,
		&#039;bright_planet_binary&#039; =&gt; &#039;text&#039;,
		&#039;orders.abc&#039; =&gt; &#039;integer&#039;,
		&#039;abc&#039; =&gt; &#039;integer&#039;,
		&#039;orders.bright_planet_html_binary&#039; =&gt; &#039;text&#039;,
		&#039;bright_planet_html_binary&#039; =&gt; &#039;text&#039;,
		&#039;orders.order_type&#039; =&gt; &#039;string&#039;,
		&#039;order_type&#039; =&gt; &#039;string&#039;,
		&#039;orders.forms&#039; =&gt; &#039;string&#039;,
		&#039;forms&#039; =&gt; &#039;string&#039;,
		&#039;orders.complete&#039; =&gt; &#039;integer&#039;,
		&#039;complete&#039; =&gt; &#039;integer&#039;,
		&#039;orders.ins_31&#039; =&gt; &#039;text&#039;,
		&#039;ins_31&#039; =&gt; &#039;text&#039;,
		&#039;orders.ins_31_binary&#039; =&gt; &#039;text&#039;,
		&#039;ins_31_binary&#039; =&gt; &#039;text&#039;,
		&#039;orders.ins_32&#039; =&gt; &#039;text&#039;,
		&#039;ins_32&#039; =&gt; &#039;text&#039;,
		&#039;orders.ins_32_binary&#039; =&gt; &#039;text&#039;,
		&#039;ins_32_binary&#039; =&gt; &#039;text&#039;,
		&#039;orders.complete_writing&#039; =&gt; &#039;integer&#039;,
		&#039;complete_writing&#039; =&gt; &#039;integer&#039;
	],
	&#039;decorators&#039; =&gt; (int) 0,
	&#039;executed&#039; =&gt; true,
	&#039;hydrate&#039; =&gt; true,
	&#039;buffered&#039; =&gt; true,
	&#039;formatters&#039; =&gt; (int) 0,
	&#039;mapReducers&#039; =&gt; (int) 0,
	&#039;contain&#039; =&gt; [
		&#039;Profiles&#039; =&gt; [[maximum depth reached]],
		&#039;Clients&#039; =&gt; [[maximum depth reached]],
		&#039;RoadTest&#039; =&gt; [[maximum depth reached]]
	],
	&#039;matching&#039; =&gt; [],
	&#039;extraOptions&#039; =&gt; [],
	&#039;repository&#039; =&gt; object(App\Model\Table\OrdersTable) {}

}
$drcld = object(Cake\ORM\Entity) {

	&#039;new&#039; =&gt; false,
	&#039;accessible&#039; =&gt; [
		&#039;*&#039; =&gt; true
	],
	&#039;properties&#039; =&gt; [
		&#039;id&#039; =&gt; (int) 783,
		&#039;title&#039; =&gt; &#039;order_888_2015-08-31 11:32:16&#039;,
		&#039;description&#039; =&gt; &#039;&#039;,
		&#039;scale&#039; =&gt; (int) 0,
		&#039;reason&#039; =&gt; &#039;&#039;,
		&#039;suggestion&#039; =&gt; &#039;&#039;,
		&#039;user_id&#039; =&gt; (int) 835,
		&#039;client_id&#039; =&gt; (int) 41,
		&#039;uploaded_for&#039; =&gt; (int) 888,
		&#039;created&#039; =&gt; &#039;2015-08-31 11:32:16&#039;,
		&#039;division&#039; =&gt; &#039;250&#039;,
		&#039;draft&#039; =&gt; (int) 0,
		&#039;conf_recruiter_name&#039; =&gt; &#039;Cristina Bruno&#039;,
		&#039;conf_driver_name&#039; =&gt; &#039;Beverly Hills&#039;,
		&#039;conf_date&#039; =&gt; &#039;2015-08-31  11:32:08&#039;,
		&#039;ins_id&#039; =&gt; &#039;832E76B5-C246-4F5E-B5AB-1342E348B097&#039;,
		&#039;ebs_id&#039; =&gt; &#039;40F357B0-6E52-4067-A8B3-B65FDBFC7CE5&#039;,
		&#039;response&#039; =&gt; null,
		&#039;ins_pdi&#039; =&gt; null,
		&#039;ebs_pdi&#039; =&gt; null,
		&#039;recruiter_signature&#039; =&gt; &#039;481088_647998.png&#039;,
		&#039;ins_79&#039; =&gt; null,
		&#039;ins_79_binary&#039; =&gt; null,
		&#039;ins_1&#039; =&gt; null,
		&#039;ins_1_binary&#039; =&gt; null,
		&#039;ins_14&#039; =&gt; null,
		&#039;ins_14_binary&#039; =&gt; null,
		&#039;ins_77&#039; =&gt; null,
		&#039;ins_77_binary&#039; =&gt; null,
		&#039;ins_78&#039; =&gt; null,
		&#039;ins_78_binary&#039; =&gt; null,
		&#039;ebs_1603&#039; =&gt; &#039;50743&#039;,
		&#039;ebs_1603_binary&#039; =&gt; null,
		&#039;ebs_1627&#039; =&gt; &#039;50742&#039;,
		&#039;ebs_1627_binary&#039; =&gt; null,
		&#039;ebs_1650&#039; =&gt; null,
		&#039;ebs_1650_binary&#039; =&gt; null,
		&#039;ins_72&#039; =&gt; &#039;&#039;,
		&#039;ins_72_binary&#039; =&gt; &#039;&#039;,
		&#039;bright_planet&#039; =&gt; null,
		&#039;final_show&#039; =&gt; false,
		&#039;is_hired&#039; =&gt; (int) 0,
		&#039;bright_planet_binary&#039; =&gt; &#039;&#039;,
		&#039;abc&#039; =&gt; null,
		&#039;bright_planet_html_binary&#039; =&gt; null,
		&#039;order_type&#039; =&gt; &#039;CAR&#039;,
		&#039;forms&#039; =&gt; &#039;1603,1627&#039;,
		&#039;complete&#039; =&gt; (int) 0,
		&#039;ins_31&#039; =&gt; null,
		&#039;ins_31_binary&#039; =&gt; null,
		&#039;ins_32&#039; =&gt; null,
		&#039;ins_32_binary&#039; =&gt; null,
		&#039;complete_writing&#039; =&gt; (int) 1,
		&#039;road_test&#039; =&gt; [[maximum depth reached]],
		&#039;client&#039; =&gt; object(Cake\ORM\Entity) {},
		&#039;profile&#039; =&gt; object(Cake\ORM\Entity) {}
	],
	&#039;dirty&#039; =&gt; [],
	&#039;original&#039; =&gt; [],
	&#039;virtual&#039; =&gt; [],
	&#039;errors&#039; =&gt; [],
	&#039;repository&#039; =&gt; &#039;orders&#039;

}
$DoIt = true
$document = object(Cake\ORM\Entity) {

	&#039;new&#039; =&gt; false,
	&#039;accessible&#039; =&gt; [
		&#039;*&#039; =&gt; true
	],
	&#039;properties&#039; =&gt; [
		&#039;id&#039; =&gt; (int) 2024,
		&#039;order_id&#039; =&gt; (int) 0,
		&#039;document_type&#039; =&gt; &#039;GFS Application for Employment&#039;,
		&#039;sub_doc_id&#039; =&gt; (int) 18,
		&#039;title&#039; =&gt; &#039;&#039;,
		&#039;description&#039; =&gt; &#039;&#039;,
		&#039;scale&#039; =&gt; (int) 0,
		&#039;reason&#039; =&gt; &#039;&#039;,
		&#039;suggestion&#039; =&gt; &#039;&#039;,
		&#039;user_id&#039; =&gt; (int) 888,
		&#039;client_id&#039; =&gt; (int) 41,
		&#039;uploaded_for&#039; =&gt; (int) 888,
		&#039;created&#039; =&gt; &#039;2015-08-31 11:27:01&#039;,
		&#039;draft&#039; =&gt; (int) 0,
		&#039;file&#039; =&gt; &#039;&#039;
	],
	&#039;dirty&#039; =&gt; [],
	&#039;original&#039; =&gt; [],
	&#039;virtual&#039; =&gt; [],
	&#039;errors&#039; =&gt; [],
	&#039;repository&#039; =&gt; &#039;documents&#039;

}
$line = &#039;odd&#039;
$fieldname = &#039;title&#039;
$subdocument = object(Cake\ORM\Entity) {

	&#039;new&#039; =&gt; false,
	&#039;accessible&#039; =&gt; [
		&#039;*&#039; =&gt; true
	],
	&#039;properties&#039; =&gt; [
		&#039;id&#039; =&gt; (int) 18,
		&#039;title&#039; =&gt; &#039;Application for Employment&#039;,
		&#039;display&#039; =&gt; (int) 1,
		&#039;form&#039; =&gt; &#039;application_for_employment_gfs.php&#039;,
		&#039;table_name&#039; =&gt; &#039;application_for_employment_gfs&#039;,
		&#039;orders&#039; =&gt; (int) 1,
		&#039;color_id&#039; =&gt; (int) 1,
		&#039;titleFrench&#039; =&gt; &#039;Demande d&#039;emploi&#039;,
		&#039;ProductID&#039; =&gt; (int) 1603,
		&#039;icon&#039; =&gt; &#039;&#039;
	],
	&#039;dirty&#039; =&gt; [],
	&#039;original&#039; =&gt; [],
	&#039;virtual&#039; =&gt; [],
	&#039;errors&#039; =&gt; [],
	&#039;repository&#039; =&gt; &#039;subdocuments&#039;

}
$k = (int) 10
$order = object(Cake\ORM\Entity) {

	&#039;new&#039; =&gt; false,
	&#039;accessible&#039; =&gt; [
		&#039;*&#039; =&gt; true
	],
	&#039;properties&#039; =&gt; [
		&#039;id&#039; =&gt; (int) 783,
		&#039;title&#039; =&gt; &#039;order_888_2015-08-31 11:32:16&#039;,
		&#039;description&#039; =&gt; &#039;&#039;,
		&#039;scale&#039; =&gt; (int) 0,
		&#039;reason&#039; =&gt; &#039;&#039;,
		&#039;suggestion&#039; =&gt; &#039;&#039;,
		&#039;user_id&#039; =&gt; (int) 835,
		&#039;client_id&#039; =&gt; (int) 41,
		&#039;uploaded_for&#039; =&gt; (int) 888,
		&#039;created&#039; =&gt; &#039;2015-08-31 11:32:16&#039;,
		&#039;division&#039; =&gt; &#039;250&#039;,
		&#039;draft&#039; =&gt; (int) 0,
		&#039;conf_recruiter_name&#039; =&gt; &#039;Cristina Bruno&#039;,
		&#039;conf_driver_name&#039; =&gt; &#039;Beverly Hills&#039;,
		&#039;conf_date&#039; =&gt; &#039;2015-08-31  11:32:08&#039;,
		&#039;ins_id&#039; =&gt; &#039;832E76B5-C246-4F5E-B5AB-1342E348B097&#039;,
		&#039;ebs_id&#039; =&gt; &#039;40F357B0-6E52-4067-A8B3-B65FDBFC7CE5&#039;,
		&#039;response&#039; =&gt; null,
		&#039;ins_pdi&#039; =&gt; null,
		&#039;ebs_pdi&#039; =&gt; null,
		&#039;recruiter_signature&#039; =&gt; &#039;481088_647998.png&#039;,
		&#039;ins_79&#039; =&gt; null,
		&#039;ins_79_binary&#039; =&gt; null,
		&#039;ins_1&#039; =&gt; null,
		&#039;ins_1_binary&#039; =&gt; null,
		&#039;ins_14&#039; =&gt; null,
		&#039;ins_14_binary&#039; =&gt; null,
		&#039;ins_77&#039; =&gt; null,
		&#039;ins_77_binary&#039; =&gt; null,
		&#039;ins_78&#039; =&gt; null,
		&#039;ins_78_binary&#039; =&gt; null,
		&#039;ebs_1603&#039; =&gt; &#039;50743&#039;,
		&#039;ebs_1603_binary&#039; =&gt; null,
		&#039;ebs_1627&#039; =&gt; &#039;50742&#039;,
		&#039;ebs_1627_binary&#039; =&gt; null,
		&#039;ebs_1650&#039; =&gt; null,
		&#039;ebs_1650_binary&#039; =&gt; null,
		&#039;ins_72&#039; =&gt; &#039;&#039;,
		&#039;ins_72_binary&#039; =&gt; &#039;&#039;,
		&#039;bright_planet&#039; =&gt; null,
		&#039;final_show&#039; =&gt; false,
		&#039;is_hired&#039; =&gt; (int) 0,
		&#039;bright_planet_binary&#039; =&gt; &#039;&#039;,
		&#039;abc&#039; =&gt; null,
		&#039;bright_planet_html_binary&#039; =&gt; null,
		&#039;order_type&#039; =&gt; &#039;CAR&#039;,
		&#039;forms&#039; =&gt; &#039;1603,1627&#039;,
		&#039;complete&#039; =&gt; (int) 0,
		&#039;ins_31&#039; =&gt; null,
		&#039;ins_31_binary&#039; =&gt; null,
		&#039;ins_32&#039; =&gt; null,
		&#039;ins_32_binary&#039; =&gt; null,
		&#039;complete_writing&#039; =&gt; (int) 1,
		&#039;road_test&#039; =&gt; [[maximum depth reached]],
		&#039;client&#039; =&gt; object(Cake\ORM\Entity) {},
		&#039;profile&#039; =&gt; object(Cake\ORM\Entity) {}
	],
	&#039;dirty&#039; =&gt; [],
	&#039;original&#039; =&gt; [],
	&#039;virtual&#039; =&gt; [],
	&#039;errors&#039; =&gt; [],
	&#039;repository&#039; =&gt; &#039;orders&#039;

}
$forms = &#039;1603,1627&#039;
$forms_arr = [
	(int) 0 =&gt; &#039;1603&#039;,
	(int) 1 =&gt; &#039;1627&#039;
]
$uploaded_by = object(Cake\ORM\Entity) {

	&#039;new&#039; =&gt; false,
	&#039;accessible&#039; =&gt; [
		&#039;*&#039; =&gt; true
	],
	&#039;properties&#039; =&gt; [
		&#039;id&#039; =&gt; (int) 835,
		&#039;title&#039; =&gt; &#039;Mr&#039;,
		&#039;fname&#039; =&gt; &#039;Cristina&#039;,
		&#039;lname&#039; =&gt; &#039;Bruno&#039;,
		&#039;username&#039; =&gt; &#039;c.bruno@callcpc.com&#039;,
		&#039;email&#039; =&gt; &#039;info@trinoweb.com&#039;,
		&#039;password&#039; =&gt; &#039;90a10c4f404b44387d29231477653b71&#039;,
		&#039;driver&#039; =&gt; null,
		&#039;address&#039; =&gt; &#039;&#039;,
		&#039;street&#039; =&gt; &#039;1415 Bonhill rd&#039;,
		&#039;city&#039; =&gt; &#039;Mississauga&#039;,
		&#039;province&#039; =&gt; &#039;ON&#039;,
		&#039;postal&#039; =&gt; &#039;L5T1R2&#039;,
		&#039;country&#039; =&gt; &#039;Canada&#039;,
		&#039;phone&#039; =&gt; &#039;905 564-6040&#039;,
		&#039;image&#039; =&gt; &#039;default.png&#039;,
		&#039;admin&#039; =&gt; (int) 0,
		&#039;super&#039; =&gt; (int) 0,
		&#039;profile_type&#039; =&gt; (int) 2,
		&#039;driver_license_no&#039; =&gt; &#039;&#039;,
		&#039;driver_province&#039; =&gt; &#039;&#039;,
		&#039;us_dot&#039; =&gt; null,
		&#039;applicants_email&#039; =&gt; null,
		&#039;transclick&#039; =&gt; null,
		&#039;mname&#039; =&gt; &#039;&#039;,
		&#039;dob&#039; =&gt; &#039;2015-12-01&#039;,
		&#039;expiry_date&#039; =&gt; &#039;&#039;,
		&#039;gender&#039; =&gt; &#039;Female&#039;,
		&#039;isb_id&#039; =&gt; &#039;22552&#039;,
		&#039;placeofbirth&#039; =&gt; &#039;&#039;,
		&#039;created_by&#039; =&gt; (int) 4,
		&#039;created&#039; =&gt; &#039;2015-08-18&#039;,
		&#039;drafts&#039; =&gt; (int) 0,
		&#039;is_hired&#039; =&gt; false,
		&#039;ptypes&#039; =&gt; &#039;5,7,8&#039;,
		&#039;ctypes&#039; =&gt; &#039;&#039;,
		&#039;language&#039; =&gt; &#039;English&#039;,
		&#039;automatic_email&#039; =&gt; (int) 0,
		&#039;automatic_sent&#039; =&gt; (int) 0,
		&#039;hear&#039; =&gt; &#039;Referral&#039;,
		&#039;requalify&#039; =&gt; (int) 0,
		&#039;hired_date&#039; =&gt; &#039;&#039;,
		&#039;emailsent&#039; =&gt; &#039;2015-08-18 09:55:02&#039;,
		&#039;send_to&#039; =&gt; (int) 0,
		&#039;sin&#039; =&gt; &#039;&#039;,
		&#039;otherinfo&#039; =&gt; &#039;&#039;
	],
	&#039;dirty&#039; =&gt; [],
	&#039;original&#039; =&gt; [],
	&#039;virtual&#039; =&gt; [],
	&#039;errors&#039; =&gt; [],
	&#039;repository&#039; =&gt; &#039;Profiles&#039;

}
$Fieldname = &#039;title&#039;
$pp = &#039;1627&#039;
$title_pr = object(Cake\ORM\Entity) {

	&#039;new&#039; =&gt; false,
	&#039;accessible&#039; =&gt; [
		&#039;*&#039; =&gt; true
	],
	&#039;properties&#039; =&gt; [
		&#039;id&#039; =&gt; (int) 7,
		&#039;title&#039; =&gt; &#039;Letter Of Experience&#039;,
		&#039;enable&#039; =&gt; (int) 1,
		&#039;number&#039; =&gt; (int) 1627,
		&#039;titleFrench&#039; =&gt; &#039;Lettre d’expérience&#039;
	],
	&#039;dirty&#039; =&gt; [],
	&#039;original&#039; =&gt; [],
	&#039;virtual&#039; =&gt; [],
	&#039;errors&#039; =&gt; [],
	&#039;repository&#039; =&gt; &#039;order_products&#039;

}
$duplicate_log = &#039;&#039;
$doc = object(Cake\ORM\ResultSet) {

	&#039;query&#039; =&gt; object(Cake\ORM\Query) {},
	&#039;items&#039; =&gt; [
		(int) 0 =&gt; object(Cake\ORM\Entity) {},
		(int) 1 =&gt; object(Cake\ORM\Entity) {},
		(int) 2 =&gt; object(Cake\ORM\Entity) {},
		(int) 3 =&gt; object(Cake\ORM\Entity) {},
		(int) 4 =&gt; object(Cake\ORM\Entity) {},
		(int) 5 =&gt; object(Cake\ORM\Entity) {},
		(int) 6 =&gt; object(Cake\ORM\Entity) {},
		(int) 7 =&gt; object(Cake\ORM\Entity) {},
		(int) 8 =&gt; object(Cake\ORM\Entity) {},
		(int) 9 =&gt; object(Cake\ORM\Entity) {},
		(int) 10 =&gt; object(Cake\ORM\Entity) {},
		(int) 11 =&gt; object(Cake\ORM\Entity) {},
		(int) 12 =&gt; object(Cake\ORM\Entity) {},
		(int) 13 =&gt; object(Cake\ORM\Entity) {},
		(int) 14 =&gt; object(Cake\ORM\Entity) {},
		(int) 15 =&gt; object(Cake\ORM\Entity) {},
		(int) 16 =&gt; object(Cake\ORM\Entity) {},
		(int) 17 =&gt; object(Cake\ORM\Entity) {},
		(int) 18 =&gt; object(Cake\ORM\Entity) {}
	]

}
$docfind = (int) 3
$d = object(Cake\ORM\Entity) {

	&#039;new&#039; =&gt; false,
	&#039;accessible&#039; =&gt; [
		&#039;*&#039; =&gt; true
	],
	&#039;properties&#039; =&gt; [
		&#039;id&#039; =&gt; (int) 23,
		&#039;title&#039; =&gt; &#039;Investigations Intake Form &ndash; Benefit Claims&#039;,
		&#039;display&#039; =&gt; (int) 1,
		&#039;form&#039; =&gt; &#039;investigations_intake_form_benefit_claims.php&#039;,
		&#039;table_name&#039; =&gt; &#039;investigations_intake_form_benefit_claims&#039;,
		&#039;orders&#039; =&gt; (int) 1,
		&#039;color_id&#039; =&gt; (int) 1,
		&#039;titleFrench&#039; =&gt; &#039;Enquêtes formulaire d&#039;admission - Revendications prestations&#039;,
		&#039;ProductID&#039; =&gt; (int) 1603,
		&#039;icon&#039; =&gt; &#039;&#039;
	],
	&#039;dirty&#039; =&gt; [],
	&#039;original&#039; =&gt; [],
	&#039;virtual&#039; =&gt; [],
	&#039;errors&#039; =&gt; [],
	&#039;repository&#039; =&gt; &#039;subdocuments&#039;

}
$sub_doc_id = (int) 23
$o_id = (int) 783
$c_id = (int) 41
$d_id = null
$files = object(Cake\ORM\Query) {

	&#039;sql&#039; =&gt; &#039;SELECT `doc_attachments`.`id` AS `doc_attachments__id`, `doc_attachments`.`order_id` AS `doc_attachments__order_id`, `doc_attachments`.`document_id` AS `doc_attachments__document_id`, `doc_attachments`.`attachment` AS `doc_attachments__attachment`, `doc_attachments`.`sub_id` AS `doc_attachments__sub_id`, `doc_attachments`.`attach_doc` AS `doc_attachments__attach_doc` FROM `doc_attachments` `doc_attachments` WHERE `order_id` = :c0&#039;,
	&#039;params&#039; =&gt; [
		&#039;:c0&#039; =&gt; [
			[maximum depth reached]
		]
	],
	&#039;defaultTypes&#039; =&gt; [
		&#039;doc_attachments.id&#039; =&gt; &#039;integer&#039;,
		&#039;id&#039; =&gt; &#039;integer&#039;,
		&#039;doc_attachments.order_id&#039; =&gt; &#039;integer&#039;,
		&#039;order_id&#039; =&gt; &#039;integer&#039;,
		&#039;doc_attachments.document_id&#039; =&gt; &#039;integer&#039;,
		&#039;document_id&#039; =&gt; &#039;integer&#039;,
		&#039;doc_attachments.attachment&#039; =&gt; &#039;string&#039;,
		&#039;attachment&#039; =&gt; &#039;string&#039;,
		&#039;doc_attachments.sub_id&#039; =&gt; &#039;integer&#039;,
		&#039;sub_id&#039; =&gt; &#039;integer&#039;,
		&#039;doc_attachments.attach_doc&#039; =&gt; &#039;string&#039;,
		&#039;attach_doc&#039; =&gt; &#039;string&#039;
	],
	&#039;decorators&#039; =&gt; (int) 0,
	&#039;executed&#039; =&gt; true,
	&#039;hydrate&#039; =&gt; true,
	&#039;buffered&#039; =&gt; true,
	&#039;formatters&#039; =&gt; (int) 0,
	&#039;mapReducers&#039; =&gt; (int) 0,
	&#039;contain&#039; =&gt; [],
	&#039;matching&#039; =&gt; [],
	&#039;extraOptions&#039; =&gt; [],
	&#039;repository&#039; =&gt; object(Cake\ORM\Table) {}

}
$docu_id = (int) 2030
$cnt = (int) 0
$BypassLogin = false
$block = null
$isadmin = false
$is_disabled1 = &#039;&#039;
$doit = true
$pt = [
	(int) 0 =&gt; &#039;&#039;
]
$name = &#039;side[orders_gdo]&#039;
$subdoc = [
	(int) 0 =&gt; object(Cake\ORM\Entity) {

		&#039;new&#039; =&gt; false,
		&#039;accessible&#039; =&gt; [
			[maximum depth reached]
		],
		&#039;properties&#039; =&gt; [
			[maximum depth reached]
		],
		&#039;dirty&#039; =&gt; [
			[maximum depth reached]
		],
		&#039;original&#039; =&gt; [[maximum depth reached]],
		&#039;virtual&#039; =&gt; [[maximum depth reached]],
		&#039;errors&#039; =&gt; [[maximum depth reached]],
		&#039;repository&#039; =&gt; &#039;Subdocuments&#039;
	
	},
	(int) 1 =&gt; object(Cake\ORM\Entity) {

		&#039;new&#039; =&gt; false,
		&#039;accessible&#039; =&gt; [
			[maximum depth reached]
		],
		&#039;properties&#039; =&gt; [
			[maximum depth reached]
		],
		&#039;dirty&#039; =&gt; [
			[maximum depth reached]
		],
		&#039;original&#039; =&gt; [[maximum depth reached]],
		&#039;virtual&#039; =&gt; [[maximum depth reached]],
		&#039;errors&#039; =&gt; [[maximum depth reached]],
		&#039;repository&#039; =&gt; &#039;Subdocuments&#039;
	
	},
	(int) 2 =&gt; object(Cake\ORM\Entity) {

		&#039;new&#039; =&gt; false,
		&#039;accessible&#039; =&gt; [
			[maximum depth reached]
		],
		&#039;properties&#039; =&gt; [
			[maximum depth reached]
		],
		&#039;dirty&#039; =&gt; [
			[maximum depth reached]
		],
		&#039;original&#039; =&gt; [[maximum depth reached]],
		&#039;virtual&#039; =&gt; [[maximum depth reached]],
		&#039;errors&#039; =&gt; [[maximum depth reached]],
		&#039;repository&#039; =&gt; &#039;Subdocuments&#039;
	
	},
	(int) 3 =&gt; object(Cake\ORM\Entity) {

		&#039;new&#039; =&gt; false,
		&#039;accessible&#039; =&gt; [
			[maximum depth reached]
		],
		&#039;properties&#039; =&gt; [
			[maximum depth reached]
		],
		&#039;dirty&#039; =&gt; [
			[maximum depth reached]
		],
		&#039;original&#039; =&gt; [[maximum depth reached]],
		&#039;virtual&#039; =&gt; [[maximum depth reached]],
		&#039;errors&#039; =&gt; [[maximum depth reached]],
		&#039;repository&#039; =&gt; &#039;Subdocuments&#039;
	
	},
	(int) 4 =&gt; object(Cake\ORM\Entity) {

		&#039;new&#039; =&gt; false,
		&#039;accessible&#039; =&gt; [
			[maximum depth reached]
		],
		&#039;properties&#039; =&gt; [
			[maximum depth reached]
		],
		&#039;dirty&#039; =&gt; [
			[maximum depth reached]
		],
		&#039;original&#039; =&gt; [[maximum depth reached]],
		&#039;virtual&#039; =&gt; [[maximum depth reached]],
		&#039;errors&#039; =&gt; [[maximum depth reached]],
		&#039;repository&#039; =&gt; &#039;Subdocuments&#039;
	
	},
	(int) 5 =&gt; object(Cake\ORM\Entity) {

		&#039;new&#039; =&gt; false,
		&#039;accessible&#039; =&gt; [
			[maximum depth reached]
		],
		&#039;properties&#039; =&gt; [
			[maximum depth reached]
		],
		&#039;dirty&#039; =&gt; [
			[maximum depth reached]
		],
		&#039;original&#039; =&gt; [[maximum depth reached]],
		&#039;virtual&#039; =&gt; [[maximum depth reached]],
		&#039;errors&#039; =&gt; [[maximum depth reached]],
		&#039;repository&#039; =&gt; &#039;Subdocuments&#039;
	
	},
	(int) 6 =&gt; object(Cake\ORM\Entity) {

		&#039;new&#039; =&gt; false,
		&#039;accessible&#039; =&gt; [
			[maximum depth reached]
		],
		&#039;properties&#039; =&gt; [
			[maximum depth reached]
		],
		&#039;dirty&#039; =&gt; [
			[maximum depth reached]
		],
		&#039;original&#039; =&gt; [[maximum depth reached]],
		&#039;virtual&#039; =&gt; [[maximum depth reached]],
		&#039;errors&#039; =&gt; [[maximum depth reached]],
		&#039;repository&#039; =&gt; &#039;Subdocuments&#039;
	
	},
	(int) 7 =&gt; object(Cake\ORM\Entity) {

		&#039;new&#039; =&gt; false,
		&#039;accessible&#039; =&gt; [
			[maximum depth reached]
		],
		&#039;properties&#039; =&gt; [
			[maximum depth reached]
		],
		&#039;dirty&#039; =&gt; [
			[maximum depth reached]
		],
		&#039;original&#039; =&gt; [[maximum depth reached]],
		&#039;virtual&#039; =&gt; [[maximum depth reached]],
		&#039;errors&#039; =&gt; [[maximum depth reached]],
		&#039;repository&#039; =&gt; &#039;Subdocuments&#039;
	
	},
	(int) 8 =&gt; object(Cake\ORM\Entity) {

		&#039;new&#039; =&gt; false,
		&#039;accessible&#039; =&gt; [
			[maximum depth reached]
		],
		&#039;properties&#039; =&gt; [
			[maximum depth reached]
		],
		&#039;dirty&#039; =&gt; [
			[maximum depth reached]
		],
		&#039;original&#039; =&gt; [[maximum depth reached]],
		&#039;virtual&#039; =&gt; [[maximum depth reached]],
		&#039;errors&#039; =&gt; [[maximum depth reached]],
		&#039;repository&#039; =&gt; &#039;Subdocuments&#039;
	
	},
	(int) 9 =&gt; object(Cake\ORM\Entity) {

		&#039;new&#039; =&gt; false,
		&#039;accessible&#039; =&gt; [
			[maximum depth reached]
		],
		&#039;properties&#039; =&gt; [
			[maximum depth reached]
		],
		&#039;dirty&#039; =&gt; [
			[maximum depth reached]
		],
		&#039;original&#039; =&gt; [[maximum depth reached]],
		&#039;virtual&#039; =&gt; [[maximum depth reached]],
		&#039;errors&#039; =&gt; [[maximum depth reached]],
		&#039;repository&#039; =&gt; &#039;Subdocuments&#039;
	
	},
	(int) 10 =&gt; object(Cake\ORM\Entity) {

		&#039;new&#039; =&gt; false,
		&#039;accessible&#039; =&gt; [
			[maximum depth reached]
		],
		&#039;properties&#039; =&gt; [
			[maximum depth reached]
		],
		&#039;dirty&#039; =&gt; [
			[maximum depth reached]
		],
		&#039;original&#039; =&gt; [[maximum depth reached]],
		&#039;virtual&#039; =&gt; [[maximum depth reached]],
		&#039;errors&#039; =&gt; [[maximum depth reached]],
		&#039;repository&#039; =&gt; &#039;Subdocuments&#039;
	
	},
	(int) 11 =&gt; object(Cake\ORM\Entity) {

		&#039;new&#039; =&gt; false,
		&#039;accessible&#039; =&gt; [
			[maximum depth reached]
		],
		&#039;properties&#039; =&gt; [
			[maximum depth reached]
		],
		&#039;dirty&#039; =&gt; [
			[maximum depth reached]
		],
		&#039;original&#039; =&gt; [[maximum depth reached]],
		&#039;virtual&#039; =&gt; [[maximum depth reached]],
		&#039;errors&#039; =&gt; [[maximum depth reached]],
		&#039;repository&#039; =&gt; &#039;Subdocuments&#039;
	
	},
	(int) 12 =&gt; object(Cake\ORM\Entity) {

		&#039;new&#039; =&gt; false,
		&#039;accessible&#039; =&gt; [
			[maximum depth reached]
		],
		&#039;properties&#039; =&gt; [
			[maximum depth reached]
		],
		&#039;dirty&#039; =&gt; [
			[maximum depth reached]
		],
		&#039;original&#039; =&gt; [[maximum depth reached]],
		&#039;virtual&#039; =&gt; [[maximum depth reached]],
		&#039;errors&#039; =&gt; [[maximum depth reached]],
		&#039;repository&#039; =&gt; &#039;Subdocuments&#039;
	
	},
	(int) 13 =&gt; object(Cake\ORM\Entity) {

		&#039;new&#039; =&gt; false,
		&#039;accessible&#039; =&gt; [
			[maximum depth reached]
		],
		&#039;properties&#039; =&gt; [
			[maximum depth reached]
		],
		&#039;dirty&#039; =&gt; [
			[maximum depth reached]
		],
		&#039;original&#039; =&gt; [[maximum depth reached]],
		&#039;virtual&#039; =&gt; [[maximum depth reached]],
		&#039;errors&#039; =&gt; [[maximum depth reached]],
		&#039;repository&#039; =&gt; &#039;Subdocuments&#039;
	
	},
	(int) 14 =&gt; object(Cake\ORM\Entity) {

		&#039;new&#039; =&gt; false,
		&#039;accessible&#039; =&gt; [
			[maximum depth reached]
		],
		&#039;properties&#039; =&gt; [
			[maximum depth reached]
		],
		&#039;dirty&#039; =&gt; [
			[maximum depth reached]
		],
		&#039;original&#039; =&gt; [[maximum depth reached]],
		&#039;virtual&#039; =&gt; [[maximum depth reached]],
		&#039;errors&#039; =&gt; [[maximum depth reached]],
		&#039;repository&#039; =&gt; &#039;Subdocuments&#039;
	
	},
	(int) 15 =&gt; object(Cake\ORM\Entity) {

		&#039;new&#039; =&gt; false,
		&#039;accessible&#039; =&gt; [
			[maximum depth reached]
		],
		&#039;properties&#039; =&gt; [
			[maximum depth reached]
		],
		&#039;dirty&#039; =&gt; [
			[maximum depth reached]
		],
		&#039;original&#039; =&gt; [[maximum depth reached]],
		&#039;virtual&#039; =&gt; [[maximum depth reached]],
		&#039;errors&#039; =&gt; [[maximum depth reached]],
		&#039;repository&#039; =&gt; &#039;Subdocuments&#039;
	
	},
	(int) 16 =&gt; object(Cake\ORM\Entity) {

		&#039;new&#039; =&gt; false,
		&#039;accessible&#039; =&gt; [
			[maximum depth reached]
		],
		&#039;properties&#039; =&gt; [
			[maximum depth reached]
		],
		&#039;dirty&#039; =&gt; [
			[maximum depth reached]
		],
		&#039;original&#039; =&gt; [[maximum depth reached]],
		&#039;virtual&#039; =&gt; [[maximum depth reached]],
		&#039;errors&#039; =&gt; [[maximum depth reached]],
		&#039;repository&#039; =&gt; &#039;Subdocuments&#039;
	
	},
	(int) 17 =&gt; object(Cake\ORM\Entity) {

		&#039;new&#039; =&gt; false,
		&#039;accessible&#039; =&gt; [
			[maximum depth reached]
		],
		&#039;properties&#039; =&gt; [
			[maximum depth reached]
		],
		&#039;dirty&#039; =&gt; [
			[maximum depth reached]
		],
		&#039;original&#039; =&gt; [[maximum depth reached]],
		&#039;virtual&#039; =&gt; [[maximum depth reached]],
		&#039;errors&#039; =&gt; [[maximum depth reached]],
		&#039;repository&#039; =&gt; &#039;Subdocuments&#039;
	
	},
	(int) 18 =&gt; object(Cake\ORM\Entity) {

		&#039;new&#039; =&gt; false,
		&#039;accessible&#039; =&gt; [
			[maximum depth reached]
		],
		&#039;properties&#039; =&gt; [
			[maximum depth reached]
		],
		&#039;dirty&#039; =&gt; [
			[maximum depth reached]
		],
		&#039;original&#039; =&gt; [[maximum depth reached]],
		&#039;virtual&#039; =&gt; [[maximum depth reached]],
		&#039;errors&#039; =&gt; [[maximum depth reached]],
		&#039;repository&#039; =&gt; &#039;Subdocuments&#039;
	
	}
]
$sub = object(Cake\ORM\Entity) {

	&#039;new&#039; =&gt; false,
	&#039;accessible&#039; =&gt; [
		&#039;*&#039; =&gt; true
	],
	&#039;properties&#039; =&gt; [
		&#039;id&#039; =&gt; (int) 15,
		&#039;title&#039; =&gt; &#039;Upload ID/Documents&#039;,
		&#039;display&#039; =&gt; (int) 1,
		&#039;form&#039; =&gt; &#039;mee_attach.php&#039;,
		&#039;table_name&#039; =&gt; &#039;mee_attachments&#039;,
		&#039;orders&#039; =&gt; (int) 1,
		&#039;color_id&#039; =&gt; (int) 1,
		&#039;titleFrench&#039; =&gt; &#039;Télécharger ID/Documents&#039;,
		&#039;ProductID&#039; =&gt; (int) 1603,
		&#039;icon&#039; =&gt; &#039;&#039;,
		&#039;forms&#039; =&gt; (int) 1603,
		&#039;subdoc&#039; =&gt; null
	],
	&#039;dirty&#039; =&gt; [
		&#039;forms&#039; =&gt; true,
		&#039;subdoc&#039; =&gt; true
	],
	&#039;original&#039; =&gt; [],
	&#039;virtual&#039; =&gt; [],
	&#039;errors&#039; =&gt; [],
	&#039;repository&#039; =&gt; &#039;Subdocuments&#039;

}
$prosubdoc = null
$count = (int) 7
$b = (int) 7
$pro_ids = [
	(int) 0 =&gt; &#039;4&#039;,
	(int) 1 =&gt; &#039;834&#039;,
	(int) 2 =&gt; &#039;835&#039;,
	(int) 3 =&gt; &#039;862&#039;,
	(int) 4 =&gt; &#039;871&#039;,
	(int) 5 =&gt; &#039;872&#039;,
	(int) 6 =&gt; &#039;884&#039;,
	(int) 7 =&gt; &#039;885&#039;,
	(int) 8 =&gt; &#039;886&#039;,
	(int) 9 =&gt; &#039;887&#039;,
	(int) 10 =&gt; &#039;888&#039;
]
$ct = [
	(int) 0 =&gt; &#039;&#039;
]</pre><pre class="stack-trace">include - ROOT\webroot\subpages\profile\ctype.php, line 30
include - ROOT\webroot\subpages\profile\block.php, line 1372
include - APP/Template\Profiles\edit.ctp, line 392
Cake\View\View::_evaluate() - CORE\src\View\View.php, line 815
Cake\View\View::_render() - CORE\src\View\View.php, line 775
Cake\View\View::render() - CORE\src\View\View.php, line 463
Cake\Controller\Controller::render() - CORE\src\Controller\Controller.php, line 576
App\Controller\ProfilesController::view() - APP/Controller\ProfilesController.php, line 1015
Cake\Controller\Controller::invokeAction() - CORE\src\Controller\Controller.php, line 405
Cake\Routing\Dispatcher::_invoke() - CORE\src\Routing\Dispatcher.php, line 114
Cake\Routing\Dispatcher::dispatch() - CORE\src\Routing\Dispatcher.php, line 87
[main] - ROOT\webroot\index.php, line 37</pre></div></pre><pre class="cake-error"><a href="javascript:void(0);" onclick="document.getElementById('cakeErr55e9c20d06dde-trace').style.display = (document.getElementById('cakeErr55e9c20d06dde-trace').style.display == 'none' ? '' : 'none');"><b>Warning</b> (2)</a>: Invalid argument supplied for foreach() [<b>ROOT\webroot\subpages\profile\ctype.php</b>, line <b>30</b>]<div id="cakeErr55e9c20d06dde-trace" class="cake-stack-trace" style="display: none;"><a href="javascript:void(0);" onclick="document.getElementById('cakeErr55e9c20d06dde-code').style.display = (document.getElementById('cakeErr55e9c20d06dde-code').style.display == 'none' ? '' : 'none')">Code</a> <a href="javascript:void(0);" onclick="document.getElementById('cakeErr55e9c20d06dde-context').style.display = (document.getElementById('cakeErr55e9c20d06dde-context').style.display == 'none' ? '' : 'none')">Context</a><pre id="cakeErr55e9c20d06dde-code" class="cake-code-dump" style="display: none;"><code><span style="color: #000000">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #0000BB">&lt;?php
</span></span></code>
<span class="code-highlight"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$ct&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">explode</span><span style="color: #007700">(</span><span style="color: #DD0000">","</span><span style="color: #007700">,</span><span style="color: #0000BB">$profile</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">ctypes</span><span style="color: #007700">);
</span></span></code></span>
<code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">foreach(</span><span style="color: #0000BB">$client_types&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$product</span><span style="color: #007700">)
</span></span></code></pre><pre id="cakeErr55e9c20d06dde-context" class="cake-context" style="display: none;">$viewFile = &#039;F:\wamp\www\veritas3-0\src\Template\Profiles\edit.ctp&#039;
$dataForView = [
	&#039;subdocuments&#039; =&gt; object(Cake\ORM\Query) {

		&#039;sql&#039; =&gt; &#039;SELECT `subdocuments`.`id` AS `subdocuments__id`, `subdocuments`.`title` AS `subdocuments__title`, `subdocuments`.`display` AS `subdocuments__display`, `subdocuments`.`form` AS `subdocuments__form`, `subdocuments`.`table_name` AS `subdocuments__table_name`, `subdocuments`.`orders` AS `subdocuments__orders`, `subdocuments`.`color_id` AS `subdocuments__color_id`, `subdocuments`.`titleFrench` AS `subdocuments__titleFrench`, `subdocuments`.`ProductID` AS `subdocuments__ProductID`, `subdocuments`.`icon` AS `subdocuments__icon` FROM `subdocuments` `subdocuments`&#039;,
		&#039;params&#039; =&gt; [[maximum depth reached]],
		&#039;defaultTypes&#039; =&gt; [
			[maximum depth reached]
		],
		&#039;decorators&#039; =&gt; (int) 0,
		&#039;executed&#039; =&gt; true,
		&#039;hydrate&#039; =&gt; true,
		&#039;buffered&#039; =&gt; true,
		&#039;formatters&#039; =&gt; (int) 0,
		&#039;mapReducers&#039; =&gt; (int) 0,
		&#039;contain&#039; =&gt; [[maximum depth reached]],
		&#039;matching&#039; =&gt; [[maximum depth reached]],
		&#039;extraOptions&#039; =&gt; [[maximum depth reached]],
		&#039;repository&#039; =&gt; object(Cake\ORM\Table) {}
	
	},
	&#039;documents&#039; =&gt; object(Cake\ORM\Query) {

		&#039;sql&#039; =&gt; &#039;SELECT `documents`.`id` AS `documents__id`, `documents`.`order_id` AS `documents__order_id`, `documents`.`document_type` AS `documents__document_type`, `documents`.`sub_doc_id` AS `documents__sub_doc_id`, `documents`.`title` AS `documents__title`, `documents`.`description` AS `documents__description`, `documents`.`scale` AS `documents__scale`, `documents`.`reason` AS `documents__reason`, `documents`.`suggestion` AS `documents__suggestion`, `documents`.`user_id` AS `documents__user_id`, `documents`.`client_id` AS `documents__client_id`, `documents`.`uploaded_for` AS `documents__uploaded_for`, `documents`.`created` AS `documents__created`, `documents`.`draft` AS `documents__draft`, `documents`.`file` AS `documents__file` FROM `documents` `documents` WHERE (`order_id` = :c0 AND `uploaded_for` = :c1) ORDER BY id DESC&#039;,
		&#039;params&#039; =&gt; [
			[maximum depth reached]
		],
		&#039;defaultTypes&#039; =&gt; [
			[maximum depth reached]
		],
		&#039;decorators&#039; =&gt; (int) 0,
		&#039;executed&#039; =&gt; true,
		&#039;hydrate&#039; =&gt; true,
		&#039;buffered&#039; =&gt; true,
		&#039;formatters&#039; =&gt; (int) 0,
		&#039;mapReducers&#039; =&gt; (int) 0,
		&#039;contain&#039; =&gt; [[maximum depth reached]],
		&#039;matching&#039; =&gt; [[maximum depth reached]],
		&#039;extraOptions&#039; =&gt; [[maximum depth reached]],
		&#039;repository&#039; =&gt; object(Cake\ORM\Table) {}
	
	},
	&#039;client&#039; =&gt; object(Cake\ORM\Entity) {

		&#039;new&#039; =&gt; false,
		&#039;accessible&#039; =&gt; [
			[maximum depth reached]
		],
		&#039;properties&#039; =&gt; [
			[maximum depth reached]
		],
		&#039;dirty&#039; =&gt; [[maximum depth reached]],
		&#039;original&#039; =&gt; [[maximum depth reached]],
		&#039;virtual&#039; =&gt; [[maximum depth reached]],
		&#039;errors&#039; =&gt; [[maximum depth reached]],
		&#039;repository&#039; =&gt; &#039;clients&#039;
	
	},
	&#039;clients&#039; =&gt; &#039;41&#039;,
	&#039;id&#039; =&gt; &#039;888&#039;,
	&#039;disabled&#039; =&gt; (int) 1,
	&#039;profile&#039; =&gt; object(Cake\ORM\Entity) {

		&#039;new&#039; =&gt; false,
		&#039;accessible&#039; =&gt; [
			[maximum depth reached]
		],
		&#039;properties&#039; =&gt; [
			[maximum depth reached]
		],
		&#039;dirty&#039; =&gt; [
			[maximum depth reached]
		],
		&#039;original&#039; =&gt; [[maximum depth reached]],
		&#039;virtual&#039; =&gt; [[maximum depth reached]],
		&#039;errors&#039; =&gt; [[maximum depth reached]],
		&#039;repository&#039; =&gt; &#039;Profiles&#039;
	
	},
	&#039;orders&#039; =&gt; object(Cake\ORM\Query) {

		&#039;sql&#039; =&gt; &#039;SELECT `orders`.`id` AS `orders__id`, `orders`.`title` AS `orders__title`, `orders`.`description` AS `orders__description`, `orders`.`scale` AS `orders__scale`, `orders`.`reason` AS `orders__reason`, `orders`.`suggestion` AS `orders__suggestion`, `orders`.`user_id` AS `orders__user_id`, `orders`.`client_id` AS `orders__client_id`, `orders`.`uploaded_for` AS `orders__uploaded_for`, `orders`.`created` AS `orders__created`, `orders`.`division` AS `orders__division`, `orders`.`draft` AS `orders__draft`, `orders`.`conf_recruiter_name` AS `orders__conf_recruiter_name`, `orders`.`conf_driver_name` AS `orders__conf_driver_name`, `orders`.`conf_date` AS `orders__conf_date`, `orders`.`ins_id` AS `orders__ins_id`, `orders`.`ebs_id` AS `orders__ebs_id`, `orders`.`response` AS `orders__response`, `orders`.`ins_pdi` AS `orders__ins_pdi`, `orders`.`ebs_pdi` AS `orders__ebs_pdi`, `orders`.`recruiter_signature` AS `orders__recruiter_signature`, `orders`.`ins_79` AS `orders__ins_79`, `orders`.`ins_79_binary` AS `orders__ins_79_binary`, `orders`.`ins_1` AS `orders__ins_1`, `orders`.`ins_1_binary` AS `orders__ins_1_binary`, `orders`.`ins_14` AS `orders__ins_14`, `orders`.`ins_14_binary` AS `orders__ins_14_binary`, `orders`.`ins_77` AS `orders__ins_77`, `orders`.`ins_77_binary` AS `orders__ins_77_binary`, `orders`.`ins_78` AS `orders__ins_78`, `orders`.`ins_78_binary` AS `orders__ins_78_binary`, `orders`.`ebs_1603` AS `orders__ebs_1603`, `orders`.`ebs_1603_binary` AS `orders__ebs_1603_binary`, `orders`.`ebs_1627` AS `orders__ebs_1627`, `orders`.`ebs_1627_binary` AS `orders__ebs_1627_binary`, `orders`.`ebs_1650` AS `orders__ebs_1650`, `orders`.`ebs_1650_binary` AS `orders__ebs_1650_binary`, `orders`.`ins_72` AS `orders__ins_72`, `orders`.`ins_72_binary` AS `orders__ins_72_binary`, `orders`.`bright_planet` AS `orders__bright_planet`, `orders`.`final_show` AS `orders__final_show`, `orders`.`is_hired` AS `orders__is_hired`, `orders`.`bright_planet_binary` AS `orders__bright_planet_binary`, `orders`.`abc` AS `orders__abc`, `orders`.`bright_planet_html_binary` AS `orders__bright_planet_html_binary`, `orders`.`order_type` AS `orders__order_type`, `orders`.`forms` AS `orders__forms`, `orders`.`complete` AS `orders__complete`, `orders`.`ins_31` AS `orders__ins_31`, `orders`.`ins_31_binary` AS `orders__ins_31_binary`, `orders`.`ins_32` AS `orders__ins_32`, `orders`.`ins_32_binary` AS `orders__ins_32_binary`, `orders`.`complete_writing` AS `orders__complete_writing`, `Profiles`.`id` AS `Profiles__id`, `Profiles`.`title` AS `Profiles__title`, `Profiles`.`fname` AS `Profiles__fname`, `Profiles`.`lname` AS `Profiles__lname`, `Profiles`.`username` AS `Profiles__username`, `Profiles`.`email` AS `Profiles__email`, `Profiles`.`password` AS `Profiles__password`, `Profiles`.`driver` AS `Profiles__driver`, `Profiles`.`address` AS `Profiles__address`, `Profiles`.`street` AS `Profiles__street`, `Profiles`.`city` AS `Profiles__city`, `Profiles`.`province` AS `Profiles__province`, `Profiles`.`postal` AS `Profiles__postal`, `Profiles`.`country` AS `Profiles__country`, `Profiles`.`phone` AS `Profiles__phone`, `Profiles`.`image` AS `Profiles__image`, `Profiles`.`admin` AS `Profiles__admin`, `Profiles`.`super` AS `Profiles__super`, `Profiles`.`profile_type` AS `Profiles__profile_type`, `Profiles`.`driver_license_no` AS `Profiles__driver_license_no`, `Profiles`.`driver_province` AS `Profiles__driver_province`, `Profiles`.`us_dot` AS `Profiles__us_dot`, `Profiles`.`applicants_email` AS `Profiles__applicants_email`, `Profiles`.`transclick` AS `Profiles__transclick`, `Profiles`.`mname` AS `Profiles__mname`, `Profiles`.`dob` AS `Profiles__dob`, `Profiles`.`expiry_date` AS `Profiles__expiry_date`, `Profiles`.`gender` AS `Profiles__gender`, `Profiles`.`isb_id` AS `Profiles__isb_id`, `Profiles`.`placeofbirth` AS `Profiles__placeofbirth`, `Profiles`.`created_by` AS `Profiles__created_by`, `Profiles`.`created` AS `Profiles__created`, `Profiles`.`drafts` AS `Profiles__drafts`, `Profiles`.`is_hired` AS `Profiles__is_hired`, `Profiles`.`ptypes` AS `Profiles__ptypes`, `Profiles`.`ctypes` AS `Profiles__ctypes`, `Profiles`.`language` AS `Profiles__language`, `Profiles`.`automatic_email` AS `Profiles__automatic_email`, `Profiles`.`automatic_sent` AS `Profiles__automatic_sent`, `Profiles`.`hear` AS `Profiles__hear`, `Profiles`.`requalify` AS `Profiles__requalify`, `Profiles`.`hired_date` AS `Profiles__hired_date`, `Profiles`.`emailsent` AS `Profiles__emailsent`, `Profiles`.`send_to` AS `Profiles__send_to`, `Profiles`.`sin` AS `Profiles__sin`, `Profiles`.`otherinfo` AS `Profiles__otherinfo`, `Clients`.`id` AS `Clients__id`, `Clients`.`title` AS `Clients__title`, `Clients`.`description` AS `Clients__description`, `Clients`.`description_fre` AS `Clients__description_fre`, `Clients`.`company_name` AS `Clients__company_name`, `Clients`.`customer_type` AS `Clients__customer_type`, `Clients`.`sig_fname` AS `Clients__sig_fname`, `Clients`.`sig_lname` AS `Clients__sig_lname`, `Clients`.`company_phone` AS `Clients__company_phone`, `Clients`.`sig_email` AS `Clients__sig_email`, `Clients`.`company_address` AS `Clients__company_address`, `Clients`.`city` AS `Clients__city`, `Clients`.`postal` AS `Clients__postal`, `Clients`.`province` AS `Clients__province`, `Clients`.`country` AS `Clients__country`, `Clients`.`admin_fname` AS `Clients__admin_fname`, `Clients`.`admin_lname` AS `Clients__admin_lname`, `Clients`.`admin_email` AS `Clients__admin_email`, `Clients`.`admin_phone` AS `Clients__admin_phone`, `Clients`.`image` AS `Clients__image`, `Clients`.`site` AS `Clients__site`, `Clients`.`addedBy` AS `Clients__addedBy`, `Clients`.`isApproved` AS `Clients__isApproved`, `Clients`.`date_start` AS `Clients__date_start`, `Clients`.`date_end` AS `Clients__date_end`, `Clients`.`referred_by` AS `Clients__referred_by`, `Clients`.`agreement_number` AS `Clients__agreement_number`, `Clients`.`reverification` AS `Clients__reverification`, `Clients`.`sacc_number` AS `Clients__sacc_number`, `Clients`.`document` AS `Clients__document`, `Clients`.`billing_contact` AS `Clients__billing_contact`, `Clients`.`billing_address` AS `Clients__billing_address`, `Clients`.`billing_instructions` AS `Clients__billing_instructions`, `Clients`.`invoice_terms` AS `Clients__invoice_terms`, `Clients`.`recruiter_id` AS `Clients__recruiter_id`, `Clients`.`profile_id` AS `Clients__profile_id`, `Clients`.`contact_id` AS `Clients__contact_id`, `Clients`.`is_special` AS `Clients__is_special`, `Clients`.`status` AS `Clients__status`, `Clients`.`billing_city` AS `Clients__billing_city`, `Clients`.`billing_province` AS `Clients__billing_province`, `Clients`.`billing_postal_code` AS `Clients__billing_postal_code`, `Clients`.`division` AS `Clients__division`, `Clients`.`uploaded_for` AS `Clients__uploaded_for`, `Clients`.`created` AS `Clients__created`, `Clients`.`drafts` AS `Clients__drafts`, `Clients`.`client_date` AS `Clients__client_date`, `Clients`.`requalify_re` AS `Clients__requalify_re`, `Clients`.`requalify` AS `Clients__requalify`, `Clients`.`requalify_date` AS `Clients__requalify_date`, `Clients`.`requalify_frequency` AS `Clients__requalify_frequency`, `Clients`.`requalify_product` AS `Clients__requalify_product`, `Clients`.`forceemail` AS `Clients__forceemail` FROM `orders` `orders` LEFT JOIN `profiles` `Profiles` ON `Profiles`.`id` = (`orders`.`uploaded_for`) LEFT JOIN `clients` `Clients` ON `Clients`.`id` = (`orders`.`client_id`) WHERE (`orders`.`uploaded_for` = :c0 AND `orders`.`draft` = :c1) ORDER BY orders.id DESC&#039;,
		&#039;params&#039; =&gt; [
			[maximum depth reached]
		],
		&#039;defaultTypes&#039; =&gt; [
			[maximum depth reached]
		],
		&#039;decorators&#039; =&gt; (int) 0,
		&#039;executed&#039; =&gt; true,
		&#039;hydrate&#039; =&gt; true,
		&#039;buffered&#039; =&gt; true,
		&#039;formatters&#039; =&gt; (int) 0,
		&#039;mapReducers&#039; =&gt; (int) 0,
		&#039;contain&#039; =&gt; [
			[maximum depth reached]
		],
		&#039;matching&#039; =&gt; [[maximum depth reached]],
		&#039;extraOptions&#039; =&gt; [[maximum depth reached]],
		&#039;repository&#039; =&gt; object(App\Model\Table\OrdersTable) {}
	
	},
	&#039;doc_comp&#039; =&gt; object(App\Controller\Component\DocumentComponent) {
		request =&gt; object(Cake\Network\Request) {}
		components =&gt; [[maximum depth reached]]
		[protected] _registry =&gt; object(Cake\Controller\ComponentRegistry) {}
		[protected] _defaultConfig =&gt; [[maximum depth reached]]
		[protected] _componentMap =&gt; [[maximum depth reached]]
		[protected] _config =&gt; [[maximum depth reached]]
		[protected] _configInitialized =&gt; true
	},
	&#039;logos1&#039; =&gt; object(Cake\ORM\ResultSet) {

		&#039;query&#039; =&gt; object(Cake\ORM\Query) {},
		&#039;items&#039; =&gt; [
			[maximum depth reached]
		]
	
	},
	&#039;logos&#039; =&gt; object(Cake\ORM\ResultSet) {

		&#039;query&#039; =&gt; object(Cake\ORM\Query) {},
		&#039;items&#039; =&gt; [
			[maximum depth reached]
		]
	
	},
	&#039;client_docs&#039; =&gt; object(Cake\ORM\ResultSet) {

		&#039;query&#039; =&gt; object(Cake\ORM\Query) {},
		&#039;items&#039; =&gt; [[maximum depth reached]]
	
	},
	&#039;uid&#039; =&gt; &#039;888&#039;,
	&#039;ptypes&#039; =&gt; object(Cake\ORM\ResultSet) {

		&#039;query&#039; =&gt; object(Cake\ORM\Query) {},
		&#039;items&#039; =&gt; [
			[maximum depth reached]
		]
	
	},
	&#039;theproductlist&#039; =&gt; object(Cake\ORM\Query) {

		&#039;sql&#039; =&gt; &#039;SELECT `order_products`.`id` AS `order_products__id`, `order_products`.`title` AS `order_products__title`, `order_products`.`enable` AS `order_products__enable`, `order_products`.`number` AS `order_products__number`, `order_products`.`titleFrench` AS `order_products__titleFrench` FROM `order_products` `order_products`&#039;,
		&#039;params&#039; =&gt; [[maximum depth reached]],
		&#039;defaultTypes&#039; =&gt; [
			[maximum depth reached]
		],
		&#039;decorators&#039; =&gt; (int) 0,
		&#039;executed&#039; =&gt; true,
		&#039;hydrate&#039; =&gt; true,
		&#039;buffered&#039; =&gt; true,
		&#039;formatters&#039; =&gt; (int) 0,
		&#039;mapReducers&#039; =&gt; (int) 0,
		&#039;contain&#039; =&gt; [[maximum depth reached]],
		&#039;matching&#039; =&gt; [[maximum depth reached]],
		&#039;extraOptions&#039; =&gt; [[maximum depth reached]],
		&#039;repository&#039; =&gt; object(Cake\ORM\Table) {}
	
	},
	&#039;products&#039; =&gt; object(Cake\ORM\Query) {

		&#039;sql&#039; =&gt; &#039;SELECT `product_types`.`ID` AS `product_types__ID`, `product_types`.`Acronym` AS `product_types__Acronym`, `product_types`.`Name` AS `product_types__Name`, `product_types`.`Description` AS `product_types__Description`, `product_types`.`Alias` AS `product_types__Alias`, `product_types`.`Color` AS `product_types__Color`, `product_types`.`Checked` AS `product_types__Checked`, `product_types`.`Sidebar_Alias` AS `product_types__Sidebar_Alias`, `product_types`.`ButtonColor` AS `product_types__ButtonColor`, `product_types`.`Blocked` AS `product_types__Blocked`, `product_types`.`doc_ids` AS `product_types__doc_ids`, `product_types`.`Blocks_Alias` AS `product_types__Blocks_Alias`, `product_types`.`Block_Color` AS `product_types__Block_Color`, `product_types`.`NameFrench` AS `product_types__NameFrench`, `product_types`.`DescriptionFrench` AS `product_types__DescriptionFrench`, `product_types`.`Visible` AS `product_types__Visible`, `product_types`.`Bypass` AS `product_types__Bypass`, `product_types`.`Icon` AS `product_types__Icon`, `product_types`.`Price` AS `product_types__Price`, `product_types`.`profile_types` AS `product_types__profile_types` FROM `product_types` `product_types`&#039;,
		&#039;params&#039; =&gt; [[maximum depth reached]],
		&#039;defaultTypes&#039; =&gt; [
			[maximum depth reached]
		],
		&#039;decorators&#039; =&gt; (int) 0,
		&#039;executed&#039; =&gt; true,
		&#039;hydrate&#039; =&gt; true,
		&#039;buffered&#039; =&gt; true,
		&#039;formatters&#039; =&gt; (int) 0,
		&#039;mapReducers&#039; =&gt; (int) 0,
		&#039;contain&#039; =&gt; [[maximum depth reached]],
		&#039;matching&#039; =&gt; [[maximum depth reached]],
		&#039;extraOptions&#039; =&gt; [[maximum depth reached]],
		&#039;repository&#039; =&gt; object(Cake\ORM\Table) {}
	
	},
	&#039;Sidebar&#039; =&gt; object(Cake\ORM\Entity) {

		&#039;new&#039; =&gt; false,
		&#039;accessible&#039; =&gt; [
			[maximum depth reached]
		],
		&#039;properties&#039; =&gt; [
			[maximum depth reached]
		],
		&#039;dirty&#039; =&gt; [[maximum depth reached]],
		&#039;original&#039; =&gt; [[maximum depth reached]],
		&#039;virtual&#039; =&gt; [[maximum depth reached]],
		&#039;errors&#039; =&gt; [[maximum depth reached]],
		&#039;repository&#039; =&gt; &#039;Sidebar&#039;
	
	},
	&#039;Me&#039; =&gt; (int) 4,
	&#039;Manager&#039; =&gt; object(App\Controller\Component\ManagerComponent) {
		request =&gt; object(Cake\Network\Request) {}
		components =&gt; [[maximum depth reached]]
		Controller =&gt; object(App\Controller\ProfilesController) {}
		[protected] _registry =&gt; object(Cake\Controller\ComponentRegistry) {}
		[protected] _defaultConfig =&gt; [[maximum depth reached]]
		[protected] _componentMap =&gt; [[maximum depth reached]]
		[protected] _config =&gt; [[maximum depth reached]]
		[protected] _configInitialized =&gt; true
	}
]
$subdocuments = object(Cake\ORM\Query) {

	&#039;sql&#039; =&gt; &#039;SELECT `subdocuments`.`id` AS `subdocuments__id`, `subdocuments`.`title` AS `subdocuments__title`, `subdocuments`.`display` AS `subdocuments__display`, `subdocuments`.`form` AS `subdocuments__form`, `subdocuments`.`table_name` AS `subdocuments__table_name`, `subdocuments`.`orders` AS `subdocuments__orders`, `subdocuments`.`color_id` AS `subdocuments__color_id`, `subdocuments`.`titleFrench` AS `subdocuments__titleFrench`, `subdocuments`.`ProductID` AS `subdocuments__ProductID`, `subdocuments`.`icon` AS `subdocuments__icon` FROM `subdocuments` `subdocuments`&#039;,
	&#039;params&#039; =&gt; [],
	&#039;defaultTypes&#039; =&gt; [
		&#039;subdocuments.id&#039; =&gt; &#039;integer&#039;,
		&#039;id&#039; =&gt; &#039;integer&#039;,
		&#039;subdocuments.title&#039; =&gt; &#039;string&#039;,
		&#039;title&#039; =&gt; &#039;string&#039;,
		&#039;subdocuments.display&#039; =&gt; &#039;integer&#039;,
		&#039;display&#039; =&gt; &#039;integer&#039;,
		&#039;subdocuments.form&#039; =&gt; &#039;string&#039;,
		&#039;form&#039; =&gt; &#039;string&#039;,
		&#039;subdocuments.table_name&#039; =&gt; &#039;string&#039;,
		&#039;table_name&#039; =&gt; &#039;string&#039;,
		&#039;subdocuments.orders&#039; =&gt; &#039;integer&#039;,
		&#039;orders&#039; =&gt; &#039;integer&#039;,
		&#039;subdocuments.color_id&#039; =&gt; &#039;integer&#039;,
		&#039;color_id&#039; =&gt; &#039;integer&#039;,
		&#039;subdocuments.titleFrench&#039; =&gt; &#039;string&#039;,
		&#039;titleFrench&#039; =&gt; &#039;string&#039;,
		&#039;subdocuments.ProductID&#039; =&gt; &#039;integer&#039;,
		&#039;ProductID&#039; =&gt; &#039;integer&#039;,
		&#039;subdocuments.icon&#039; =&gt; &#039;string&#039;,
		&#039;icon&#039; =&gt; &#039;string&#039;
	],
	&#039;decorators&#039; =&gt; (int) 0,
	&#039;executed&#039; =&gt; true,
	&#039;hydrate&#039; =&gt; true,
	&#039;buffered&#039; =&gt; true,
	&#039;formatters&#039; =&gt; (int) 0,
	&#039;mapReducers&#039; =&gt; (int) 0,
	&#039;contain&#039; =&gt; [],
	&#039;matching&#039; =&gt; [],
	&#039;extraOptions&#039; =&gt; [],
	&#039;repository&#039; =&gt; object(Cake\ORM\Table) {}

}
$documents = object(Cake\ORM\Query) {

	&#039;sql&#039; =&gt; &#039;SELECT `documents`.`id` AS `documents__id`, `documents`.`order_id` AS `documents__order_id`, `documents`.`document_type` AS `documents__document_type`, `documents`.`sub_doc_id` AS `documents__sub_doc_id`, `documents`.`title` AS `documents__title`, `documents`.`description` AS `documents__description`, `documents`.`scale` AS `documents__scale`, `documents`.`reason` AS `documents__reason`, `documents`.`suggestion` AS `documents__suggestion`, `documents`.`user_id` AS `documents__user_id`, `documents`.`client_id` AS `documents__client_id`, `documents`.`uploaded_for` AS `documents__uploaded_for`, `documents`.`created` AS `documents__created`, `documents`.`draft` AS `documents__draft`, `documents`.`file` AS `documents__file` FROM `documents` `documents` WHERE (`order_id` = :c0 AND `uploaded_for` = :c1) ORDER BY id DESC&#039;,
	&#039;params&#039; =&gt; [
		&#039;:c0&#039; =&gt; [
			[maximum depth reached]
		],
		&#039;:c1&#039; =&gt; [
			[maximum depth reached]
		]
	],
	&#039;defaultTypes&#039; =&gt; [
		&#039;documents.id&#039; =&gt; &#039;integer&#039;,
		&#039;id&#039; =&gt; &#039;integer&#039;,
		&#039;documents.order_id&#039; =&gt; &#039;integer&#039;,
		&#039;order_id&#039; =&gt; &#039;integer&#039;,
		&#039;documents.document_type&#039; =&gt; &#039;string&#039;,
		&#039;document_type&#039; =&gt; &#039;string&#039;,
		&#039;documents.sub_doc_id&#039; =&gt; &#039;integer&#039;,
		&#039;sub_doc_id&#039; =&gt; &#039;integer&#039;,
		&#039;documents.title&#039; =&gt; &#039;string&#039;,
		&#039;title&#039; =&gt; &#039;string&#039;,
		&#039;documents.description&#039; =&gt; &#039;text&#039;,
		&#039;description&#039; =&gt; &#039;text&#039;,
		&#039;documents.scale&#039; =&gt; &#039;integer&#039;,
		&#039;scale&#039; =&gt; &#039;integer&#039;,
		&#039;documents.reason&#039; =&gt; &#039;text&#039;,
		&#039;reason&#039; =&gt; &#039;text&#039;,
		&#039;documents.suggestion&#039; =&gt; &#039;text&#039;,
		&#039;suggestion&#039; =&gt; &#039;text&#039;,
		&#039;documents.user_id&#039; =&gt; &#039;integer&#039;,
		&#039;user_id&#039; =&gt; &#039;integer&#039;,
		&#039;documents.client_id&#039; =&gt; &#039;integer&#039;,
		&#039;client_id&#039; =&gt; &#039;integer&#039;,
		&#039;documents.uploaded_for&#039; =&gt; &#039;integer&#039;,
		&#039;uploaded_for&#039; =&gt; &#039;integer&#039;,
		&#039;documents.created&#039; =&gt; &#039;string&#039;,
		&#039;created&#039; =&gt; &#039;string&#039;,
		&#039;documents.draft&#039; =&gt; &#039;integer&#039;,
		&#039;draft&#039; =&gt; &#039;integer&#039;,
		&#039;documents.file&#039; =&gt; &#039;string&#039;,
		&#039;file&#039; =&gt; &#039;string&#039;
	],
	&#039;decorators&#039; =&gt; (int) 0,
	&#039;executed&#039; =&gt; true,
	&#039;hydrate&#039; =&gt; true,
	&#039;buffered&#039; =&gt; true,
	&#039;formatters&#039; =&gt; (int) 0,
	&#039;mapReducers&#039; =&gt; (int) 0,
	&#039;contain&#039; =&gt; [],
	&#039;matching&#039; =&gt; [],
	&#039;extraOptions&#039; =&gt; [],
	&#039;repository&#039; =&gt; object(Cake\ORM\Table) {}

}
$client = object(Cake\ORM\Entity) {

	&#039;new&#039; =&gt; false,
	&#039;accessible&#039; =&gt; [
		&#039;*&#039; =&gt; true
	],
	&#039;properties&#039; =&gt; [
		&#039;id&#039; =&gt; (int) 41,
		&#039;title&#039; =&gt; &#039;&#039;,
		&#039;description&#039; =&gt; &#039;&#039;,
		&#039;description_fre&#039; =&gt; &#039;&#039;,
		&#039;company_name&#039; =&gt; &#039;Huron Services Group&#039;,
		&#039;customer_type&#039; =&gt; (int) 2,
		&#039;sig_fname&#039; =&gt; &#039;John&#039;,
		&#039;sig_lname&#039; =&gt; &#039;Harrison&#039;,
		&#039;company_phone&#039; =&gt; &#039;(905) 564-6040&#039;,
		&#039;sig_email&#039; =&gt; &#039;j.harrison@callcpccanada.com&#039;,
		&#039;company_address&#039; =&gt; &#039;1415 Bonhill Rd&#039;,
		&#039;city&#039; =&gt; &#039;Mississauga&#039;,
		&#039;postal&#039; =&gt; &#039;L5T 1R2&#039;,
		&#039;province&#039; =&gt; &#039;&#039;,
		&#039;country&#039; =&gt; &#039;&#039;,
		&#039;admin_fname&#039; =&gt; &#039;&#039;,
		&#039;admin_lname&#039; =&gt; &#039;&#039;,
		&#039;admin_email&#039; =&gt; &#039;&#039;,
		&#039;admin_phone&#039; =&gt; &#039;&#039;,
		&#039;image&#039; =&gt; &#039;119765_834537.jpg&#039;,
		&#039;site&#039; =&gt; &#039;&#039;,
		&#039;addedBy&#039; =&gt; null,
		&#039;isApproved&#039; =&gt; null,
		&#039;date_start&#039; =&gt; &#039;2015-08-24&#039;,
		&#039;date_end&#039; =&gt; &#039;2016-08-29&#039;,
		&#039;referred_by&#039; =&gt; &#039;ISB&#039;,
		&#039;agreement_number&#039; =&gt; null,
		&#039;reverification&#039; =&gt; &#039;&#039;,
		&#039;sacc_number&#039; =&gt; null,
		&#039;document&#039; =&gt; &#039;&#039;,
		&#039;billing_contact&#039; =&gt; &#039;Deby Melillo&#039;,
		&#039;billing_address&#039; =&gt; &#039;1415 Bonhill Rd&#039;,
		&#039;billing_instructions&#039; =&gt; &#039;centralized&#039;,
		&#039;invoice_terms&#039; =&gt; &#039;monthly&#039;,
		&#039;recruiter_id&#039; =&gt; &#039;&#039;,
		&#039;profile_id&#039; =&gt; &#039;4,834,835,862,871,872,884,885,886,887,888&#039;,
		&#039;contact_id&#039; =&gt; &#039;&#039;,
		&#039;is_special&#039; =&gt; null,
		&#039;status&#039; =&gt; null,
		&#039;billing_city&#039; =&gt; &#039;Mississauga&#039;,
		&#039;billing_province&#039; =&gt; null,
		&#039;billing_postal_code&#039; =&gt; &#039;L5T 1R2&#039;,
		&#039;division&#039; =&gt; &#039;1415 Bonhill rd - Mississauga
&#039;,
		&#039;uploaded_for&#039; =&gt; null,
		&#039;created&#039; =&gt; &#039;2015-09-02&#039;,
		&#039;drafts&#039; =&gt; (int) 0,
		&#039;client_date&#039; =&gt; null,
		&#039;requalify_re&#039; =&gt; (int) 0,
		&#039;requalify&#039; =&gt; (int) 1,
		&#039;requalify_date&#039; =&gt; &#039;2015-08-03&#039;,
		&#039;requalify_frequency&#039; =&gt; (int) 1,
		&#039;requalify_product&#039; =&gt; &#039;1,14,72&#039;,
		&#039;forceemail&#039; =&gt; &#039;&#039;
	],
	&#039;dirty&#039; =&gt; [],
	&#039;original&#039; =&gt; [],
	&#039;virtual&#039; =&gt; [],
	&#039;errors&#039; =&gt; [],
	&#039;repository&#039; =&gt; &#039;Clients&#039;

}
$clients = object(Cake\ORM\Query) {

	&#039;sql&#039; =&gt; &#039;SELECT `Clients`.`id` AS `Clients__id`, `Clients`.`title` AS `Clients__title`, `Clients`.`description` AS `Clients__description`, `Clients`.`description_fre` AS `Clients__description_fre`, `Clients`.`company_name` AS `Clients__company_name`, `Clients`.`customer_type` AS `Clients__customer_type`, `Clients`.`sig_fname` AS `Clients__sig_fname`, `Clients`.`sig_lname` AS `Clients__sig_lname`, `Clients`.`company_phone` AS `Clients__company_phone`, `Clients`.`sig_email` AS `Clients__sig_email`, `Clients`.`company_address` AS `Clients__company_address`, `Clients`.`city` AS `Clients__city`, `Clients`.`postal` AS `Clients__postal`, `Clients`.`province` AS `Clients__province`, `Clients`.`country` AS `Clients__country`, `Clients`.`admin_fname` AS `Clients__admin_fname`, `Clients`.`admin_lname` AS `Clients__admin_lname`, `Clients`.`admin_email` AS `Clients__admin_email`, `Clients`.`admin_phone` AS `Clients__admin_phone`, `Clients`.`image` AS `Clients__image`, `Clients`.`site` AS `Clients__site`, `Clients`.`addedBy` AS `Clients__addedBy`, `Clients`.`isApproved` AS `Clients__isApproved`, `Clients`.`date_start` AS `Clients__date_start`, `Clients`.`date_end` AS `Clients__date_end`, `Clients`.`referred_by` AS `Clients__referred_by`, `Clients`.`agreement_number` AS `Clients__agreement_number`, `Clients`.`reverification` AS `Clients__reverification`, `Clients`.`sacc_number` AS `Clients__sacc_number`, `Clients`.`document` AS `Clients__document`, `Clients`.`billing_contact` AS `Clients__billing_contact`, `Clients`.`billing_address` AS `Clients__billing_address`, `Clients`.`billing_instructions` AS `Clients__billing_instructions`, `Clients`.`invoice_terms` AS `Clients__invoice_terms`, `Clients`.`recruiter_id` AS `Clients__recruiter_id`, `Clients`.`profile_id` AS `Clients__profile_id`, `Clients`.`contact_id` AS `Clients__contact_id`, `Clients`.`is_special` AS `Clients__is_special`, `Clients`.`status` AS `Clients__status`, `Clients`.`billing_city` AS `Clients__billing_city`, `Clients`.`billing_province` AS `Clients__billing_province`, `Clients`.`billing_postal_code` AS `Clients__billing_postal_code`, `Clients`.`division` AS `Clients__division`, `Clients`.`uploaded_for` AS `Clients__uploaded_for`, `Clients`.`created` AS `Clients__created`, `Clients`.`drafts` AS `Clients__drafts`, `Clients`.`client_date` AS `Clients__client_date`, `Clients`.`requalify_re` AS `Clients__requalify_re`, `Clients`.`requalify` AS `Clients__requalify`, `Clients`.`requalify_date` AS `Clients__requalify_date`, `Clients`.`requalify_frequency` AS `Clients__requalify_frequency`, `Clients`.`requalify_product` AS `Clients__requalify_product`, `Clients`.`forceemail` AS `Clients__forceemail` FROM `clients` `Clients`&#039;,
	&#039;params&#039; =&gt; [],
	&#039;defaultTypes&#039; =&gt; [
		&#039;Clients.id&#039; =&gt; &#039;integer&#039;,
		&#039;id&#039; =&gt; &#039;integer&#039;,
		&#039;Clients.title&#039; =&gt; &#039;string&#039;,
		&#039;title&#039; =&gt; &#039;string&#039;,
		&#039;Clients.description&#039; =&gt; &#039;text&#039;,
		&#039;description&#039; =&gt; &#039;text&#039;,
		&#039;Clients.description_fre&#039; =&gt; &#039;text&#039;,
		&#039;description_fre&#039; =&gt; &#039;text&#039;,
		&#039;Clients.company_name&#039; =&gt; &#039;string&#039;,
		&#039;company_name&#039; =&gt; &#039;string&#039;,
		&#039;Clients.customer_type&#039; =&gt; &#039;integer&#039;,
		&#039;customer_type&#039; =&gt; &#039;integer&#039;,
		&#039;Clients.sig_fname&#039; =&gt; &#039;string&#039;,
		&#039;sig_fname&#039; =&gt; &#039;string&#039;,
		&#039;Clients.sig_lname&#039; =&gt; &#039;string&#039;,
		&#039;sig_lname&#039; =&gt; &#039;string&#039;,
		&#039;Clients.company_phone&#039; =&gt; &#039;string&#039;,
		&#039;company_phone&#039; =&gt; &#039;string&#039;,
		&#039;Clients.sig_email&#039; =&gt; &#039;string&#039;,
		&#039;sig_email&#039; =&gt; &#039;string&#039;,
		&#039;Clients.company_address&#039; =&gt; &#039;string&#039;,
		&#039;company_address&#039; =&gt; &#039;string&#039;,
		&#039;Clients.city&#039; =&gt; &#039;string&#039;,
		&#039;city&#039; =&gt; &#039;string&#039;,
		&#039;Clients.postal&#039; =&gt; &#039;string&#039;,
		&#039;postal&#039; =&gt; &#039;string&#039;,
		&#039;Clients.province&#039; =&gt; &#039;string&#039;,
		&#039;province&#039; =&gt; &#039;string&#039;,
		&#039;Clients.country&#039; =&gt; &#039;string&#039;,
		&#039;country&#039; =&gt; &#039;string&#039;,
		&#039;Clients.admin_fname&#039; =&gt; &#039;string&#039;,
		&#039;admin_fname&#039; =&gt; &#039;string&#039;,
		&#039;Clients.admin_lname&#039; =&gt; &#039;string&#039;,
		&#039;admin_lname&#039; =&gt; &#039;string&#039;,
		&#039;Clients.admin_email&#039; =&gt; &#039;string&#039;,
		&#039;admin_email&#039; =&gt; &#039;string&#039;,
		&#039;Clients.admin_phone&#039; =&gt; &#039;string&#039;,
		&#039;admin_phone&#039; =&gt; &#039;string&#039;,
		&#039;Clients.image&#039; =&gt; &#039;string&#039;,
		&#039;image&#039; =&gt; &#039;string&#039;,
		&#039;Clients.site&#039; =&gt; &#039;string&#039;,
		&#039;site&#039; =&gt; &#039;string&#039;,
		&#039;Clients.addedBy&#039; =&gt; &#039;integer&#039;,
		&#039;addedBy&#039; =&gt; &#039;integer&#039;,
		&#039;Clients.isApproved&#039; =&gt; &#039;integer&#039;,
		&#039;isApproved&#039; =&gt; &#039;integer&#039;,
		&#039;Clients.date_start&#039; =&gt; &#039;string&#039;,
		&#039;date_start&#039; =&gt; &#039;string&#039;,
		&#039;Clients.date_end&#039; =&gt; &#039;string&#039;,
		&#039;date_end&#039; =&gt; &#039;string&#039;,
		&#039;Clients.referred_by&#039; =&gt; &#039;string&#039;,
		&#039;referred_by&#039; =&gt; &#039;string&#039;,
		&#039;Clients.agreement_number&#039; =&gt; &#039;integer&#039;,
		&#039;agreement_number&#039; =&gt; &#039;integer&#039;,
		&#039;Clients.reverification&#039; =&gt; &#039;string&#039;,
		&#039;reverification&#039; =&gt; &#039;string&#039;,
		&#039;Clients.sacc_number&#039; =&gt; &#039;integer&#039;,
		&#039;sacc_number&#039; =&gt; &#039;integer&#039;,
		&#039;Clients.document&#039; =&gt; &#039;string&#039;,
		&#039;document&#039; =&gt; &#039;string&#039;,
		&#039;Clients.billing_contact&#039; =&gt; &#039;string&#039;,
		&#039;billing_contact&#039; =&gt; &#039;string&#039;,
		&#039;Clients.billing_address&#039; =&gt; &#039;string&#039;,
		&#039;billing_address&#039; =&gt; &#039;string&#039;,
		&#039;Clients.billing_instructions&#039; =&gt; &#039;string&#039;,
		&#039;billing_instructions&#039; =&gt; &#039;string&#039;,
		&#039;Clients.invoice_terms&#039; =&gt; &#039;string&#039;,
		&#039;invoice_terms&#039; =&gt; &#039;string&#039;,
		&#039;Clients.recruiter_id&#039; =&gt; &#039;string&#039;,
		&#039;recruiter_id&#039; =&gt; &#039;string&#039;,
		&#039;Clients.profile_id&#039; =&gt; &#039;text&#039;,
		&#039;profile_id&#039; =&gt; &#039;text&#039;,
		&#039;Clients.contact_id&#039; =&gt; &#039;text&#039;,
		&#039;contact_id&#039; =&gt; &#039;text&#039;,
		&#039;Clients.is_special&#039; =&gt; &#039;integer&#039;,
		&#039;is_special&#039; =&gt; &#039;integer&#039;,
		&#039;Clients.status&#039; =&gt; &#039;integer&#039;,
		&#039;status&#039; =&gt; &#039;integer&#039;,
		&#039;Clients.billing_city&#039; =&gt; &#039;string&#039;,
		&#039;billing_city&#039; =&gt; &#039;string&#039;,
		&#039;Clients.billing_province&#039; =&gt; &#039;string&#039;,
		&#039;billing_province&#039; =&gt; &#039;string&#039;,
		&#039;Clients.billing_postal_code&#039; =&gt; &#039;string&#039;,
		&#039;billing_postal_code&#039; =&gt; &#039;string&#039;,
		&#039;Clients.division&#039; =&gt; &#039;string&#039;,
		&#039;division&#039; =&gt; &#039;string&#039;,
		&#039;Clients.uploaded_for&#039; =&gt; &#039;integer&#039;,
		&#039;uploaded_for&#039; =&gt; &#039;integer&#039;,
		&#039;Clients.created&#039; =&gt; &#039;string&#039;,
		&#039;created&#039; =&gt; &#039;string&#039;,
		&#039;Clients.drafts&#039; =&gt; &#039;integer&#039;,
		&#039;drafts&#039; =&gt; &#039;integer&#039;,
		&#039;Clients.client_date&#039; =&gt; &#039;string&#039;,
		&#039;client_date&#039; =&gt; &#039;string&#039;,
		&#039;Clients.requalify_re&#039; =&gt; &#039;integer&#039;,
		&#039;requalify_re&#039; =&gt; &#039;integer&#039;,
		&#039;Clients.requalify&#039; =&gt; &#039;integer&#039;,
		&#039;requalify&#039; =&gt; &#039;integer&#039;,
		&#039;Clients.requalify_date&#039; =&gt; &#039;string&#039;,
		&#039;requalify_date&#039; =&gt; &#039;string&#039;,
		&#039;Clients.requalify_frequency&#039; =&gt; &#039;integer&#039;,
		&#039;requalify_frequency&#039; =&gt; &#039;integer&#039;,
		&#039;Clients.requalify_product&#039; =&gt; &#039;string&#039;,
		&#039;requalify_product&#039; =&gt; &#039;string&#039;,
		&#039;Clients.forceemail&#039; =&gt; &#039;string&#039;,
		&#039;forceemail&#039; =&gt; &#039;string&#039;
	],
	&#039;decorators&#039; =&gt; (int) 0,
	&#039;executed&#039; =&gt; true,
	&#039;hydrate&#039; =&gt; true,
	&#039;buffered&#039; =&gt; true,
	&#039;formatters&#039; =&gt; (int) 0,
	&#039;mapReducers&#039; =&gt; (int) 0,
	&#039;contain&#039; =&gt; [],
	&#039;matching&#039; =&gt; [],
	&#039;extraOptions&#039; =&gt; [],
	&#039;repository&#039; =&gt; object(App\Model\Table\ClientsTable) {}

}
$id = &#039;888&#039;
$disabled = (int) 1
$profile = object(Cake\ORM\Entity) {

	&#039;new&#039; =&gt; false,
	&#039;accessible&#039; =&gt; [
		&#039;*&#039; =&gt; true
	],
	&#039;properties&#039; =&gt; [
		&#039;id&#039; =&gt; (int) 888,
		&#039;title&#039; =&gt; &#039;Mr&#039;,
		&#039;fname&#039; =&gt; &#039;Beverly&#039;,
		&#039;lname&#039; =&gt; &#039;Hills&#039;,
		&#039;username&#039; =&gt; &#039;Owner_Operator_888&#039;,
		&#039;email&#039; =&gt; &#039;bhills_1240@mailinator.com&#039;,
		&#039;password&#039; =&gt; &#039;&#039;,
		&#039;driver&#039; =&gt; null,
		&#039;address&#039; =&gt; &#039;&#039;,
		&#039;street&#039; =&gt; &#039;Lnckj&#039;,
		&#039;city&#039; =&gt; &#039;Beverly Hills&#039;,
		&#039;province&#039; =&gt; &#039;NS&#039;,
		&#039;postal&#039; =&gt; &#039;L8E 3Z2&#039;,
		&#039;country&#039; =&gt; &#039;Canada&#039;,
		&#039;phone&#039; =&gt; &#039;(905) 531-5331&#039;,
		&#039;image&#039; =&gt; &#039;default.png&#039;,
		&#039;admin&#039; =&gt; (int) 0,
		&#039;super&#039; =&gt; (int) 0,
		&#039;profile_type&#039; =&gt; (int) 7,
		&#039;driver_license_no&#039; =&gt; &#039;Dnzlc&#039;,
		&#039;driver_province&#039; =&gt; &#039;NS&#039;,
		&#039;us_dot&#039; =&gt; null,
		&#039;applicants_email&#039; =&gt; null,
		&#039;transclick&#039; =&gt; null,
		&#039;mname&#039; =&gt; &#039;Beverly Hills&#039;,
		&#039;dob&#039; =&gt; &#039;1983-07-16&#039;,
		&#039;expiry_date&#039; =&gt; &#039;2015-10-10&#039;,
		&#039;gender&#039; =&gt; &#039;Male&#039;,
		&#039;isb_id&#039; =&gt; &#039;&#039;,
		&#039;placeofbirth&#039; =&gt; &#039;Kxoer&#039;,
		&#039;created_by&#039; =&gt; (int) 4,
		&#039;created&#039; =&gt; null,
		&#039;drafts&#039; =&gt; (int) 0,
		&#039;is_hired&#039; =&gt; true,
		&#039;ptypes&#039; =&gt; &#039;&#039;,
		&#039;ctypes&#039; =&gt; &#039;&#039;,
		&#039;language&#039; =&gt; &#039;English&#039;,
		&#039;automatic_email&#039; =&gt; (int) 0,
		&#039;automatic_sent&#039; =&gt; (int) 0,
		&#039;hear&#039; =&gt; &#039;Nethire&#039;,
		&#039;requalify&#039; =&gt; (int) 1,
		&#039;hired_date&#039; =&gt; &#039;2015-09-02&#039;,
		&#039;emailsent&#039; =&gt; &#039;&#039;,
		&#039;send_to&#039; =&gt; (int) 0,
		&#039;sin&#039; =&gt; &#039;123-654-789&#039;,
		&#039;otherinfo&#039; =&gt; &#039;&#039;,
		&#039;Ptype&#039; =&gt; object(Cake\ORM\Entity) {}
	],
	&#039;dirty&#039; =&gt; [
		&#039;Ptype&#039; =&gt; true
	],
	&#039;original&#039; =&gt; [],
	&#039;virtual&#039; =&gt; [],
	&#039;errors&#039; =&gt; [],
	&#039;repository&#039; =&gt; &#039;Profiles&#039;

}
$orders = object(Cake\ORM\Query) {

	&#039;sql&#039; =&gt; &#039;SELECT `orders`.`id` AS `orders__id`, `orders`.`title` AS `orders__title`, `orders`.`description` AS `orders__description`, `orders`.`scale` AS `orders__scale`, `orders`.`reason` AS `orders__reason`, `orders`.`suggestion` AS `orders__suggestion`, `orders`.`user_id` AS `orders__user_id`, `orders`.`client_id` AS `orders__client_id`, `orders`.`uploaded_for` AS `orders__uploaded_for`, `orders`.`created` AS `orders__created`, `orders`.`division` AS `orders__division`, `orders`.`draft` AS `orders__draft`, `orders`.`conf_recruiter_name` AS `orders__conf_recruiter_name`, `orders`.`conf_driver_name` AS `orders__conf_driver_name`, `orders`.`conf_date` AS `orders__conf_date`, `orders`.`ins_id` AS `orders__ins_id`, `orders`.`ebs_id` AS `orders__ebs_id`, `orders`.`response` AS `orders__response`, `orders`.`ins_pdi` AS `orders__ins_pdi`, `orders`.`ebs_pdi` AS `orders__ebs_pdi`, `orders`.`recruiter_signature` AS `orders__recruiter_signature`, `orders`.`ins_79` AS `orders__ins_79`, `orders`.`ins_79_binary` AS `orders__ins_79_binary`, `orders`.`ins_1` AS `orders__ins_1`, `orders`.`ins_1_binary` AS `orders__ins_1_binary`, `orders`.`ins_14` AS `orders__ins_14`, `orders`.`ins_14_binary` AS `orders__ins_14_binary`, `orders`.`ins_77` AS `orders__ins_77`, `orders`.`ins_77_binary` AS `orders__ins_77_binary`, `orders`.`ins_78` AS `orders__ins_78`, `orders`.`ins_78_binary` AS `orders__ins_78_binary`, `orders`.`ebs_1603` AS `orders__ebs_1603`, `orders`.`ebs_1603_binary` AS `orders__ebs_1603_binary`, `orders`.`ebs_1627` AS `orders__ebs_1627`, `orders`.`ebs_1627_binary` AS `orders__ebs_1627_binary`, `orders`.`ebs_1650` AS `orders__ebs_1650`, `orders`.`ebs_1650_binary` AS `orders__ebs_1650_binary`, `orders`.`ins_72` AS `orders__ins_72`, `orders`.`ins_72_binary` AS `orders__ins_72_binary`, `orders`.`bright_planet` AS `orders__bright_planet`, `orders`.`final_show` AS `orders__final_show`, `orders`.`is_hired` AS `orders__is_hired`, `orders`.`bright_planet_binary` AS `orders__bright_planet_binary`, `orders`.`abc` AS `orders__abc`, `orders`.`bright_planet_html_binary` AS `orders__bright_planet_html_binary`, `orders`.`order_type` AS `orders__order_type`, `orders`.`forms` AS `orders__forms`, `orders`.`complete` AS `orders__complete`, `orders`.`ins_31` AS `orders__ins_31`, `orders`.`ins_31_binary` AS `orders__ins_31_binary`, `orders`.`ins_32` AS `orders__ins_32`, `orders`.`ins_32_binary` AS `orders__ins_32_binary`, `orders`.`complete_writing` AS `orders__complete_writing`, `Profiles`.`id` AS `Profiles__id`, `Profiles`.`title` AS `Profiles__title`, `Profiles`.`fname` AS `Profiles__fname`, `Profiles`.`lname` AS `Profiles__lname`, `Profiles`.`username` AS `Profiles__username`, `Profiles`.`email` AS `Profiles__email`, `Profiles`.`password` AS `Profiles__password`, `Profiles`.`driver` AS `Profiles__driver`, `Profiles`.`address` AS `Profiles__address`, `Profiles`.`street` AS `Profiles__street`, `Profiles`.`city` AS `Profiles__city`, `Profiles`.`province` AS `Profiles__province`, `Profiles`.`postal` AS `Profiles__postal`, `Profiles`.`country` AS `Profiles__country`, `Profiles`.`phone` AS `Profiles__phone`, `Profiles`.`image` AS `Profiles__image`, `Profiles`.`admin` AS `Profiles__admin`, `Profiles`.`super` AS `Profiles__super`, `Profiles`.`profile_type` AS `Profiles__profile_type`, `Profiles`.`driver_license_no` AS `Profiles__driver_license_no`, `Profiles`.`driver_province` AS `Profiles__driver_province`, `Profiles`.`us_dot` AS `Profiles__us_dot`, `Profiles`.`applicants_email` AS `Profiles__applicants_email`, `Profiles`.`transclick` AS `Profiles__transclick`, `Profiles`.`mname` AS `Profiles__mname`, `Profiles`.`dob` AS `Profiles__dob`, `Profiles`.`expiry_date` AS `Profiles__expiry_date`, `Profiles`.`gender` AS `Profiles__gender`, `Profiles`.`isb_id` AS `Profiles__isb_id`, `Profiles`.`placeofbirth` AS `Profiles__placeofbirth`, `Profiles`.`created_by` AS `Profiles__created_by`, `Profiles`.`created` AS `Profiles__created`, `Profiles`.`drafts` AS `Profiles__drafts`, `Profiles`.`is_hired` AS `Profiles__is_hired`, `Profiles`.`ptypes` AS `Profiles__ptypes`, `Profiles`.`ctypes` AS `Profiles__ctypes`, `Profiles`.`language` AS `Profiles__language`, `Profiles`.`automatic_email` AS `Profiles__automatic_email`, `Profiles`.`automatic_sent` AS `Profiles__automatic_sent`, `Profiles`.`hear` AS `Profiles__hear`, `Profiles`.`requalify` AS `Profiles__requalify`, `Profiles`.`hired_date` AS `Profiles__hired_date`, `Profiles`.`emailsent` AS `Profiles__emailsent`, `Profiles`.`send_to` AS `Profiles__send_to`, `Profiles`.`sin` AS `Profiles__sin`, `Profiles`.`otherinfo` AS `Profiles__otherinfo`, `Clients`.`id` AS `Clients__id`, `Clients`.`title` AS `Clients__title`, `Clients`.`description` AS `Clients__description`, `Clients`.`description_fre` AS `Clients__description_fre`, `Clients`.`company_name` AS `Clients__company_name`, `Clients`.`customer_type` AS `Clients__customer_type`, `Clients`.`sig_fname` AS `Clients__sig_fname`, `Clients`.`sig_lname` AS `Clients__sig_lname`, `Clients`.`company_phone` AS `Clients__company_phone`, `Clients`.`sig_email` AS `Clients__sig_email`, `Clients`.`company_address` AS `Clients__company_address`, `Clients`.`city` AS `Clients__city`, `Clients`.`postal` AS `Clients__postal`, `Clients`.`province` AS `Clients__province`, `Clients`.`country` AS `Clients__country`, `Clients`.`admin_fname` AS `Clients__admin_fname`, `Clients`.`admin_lname` AS `Clients__admin_lname`, `Clients`.`admin_email` AS `Clients__admin_email`, `Clients`.`admin_phone` AS `Clients__admin_phone`, `Clients`.`image` AS `Clients__image`, `Clients`.`site` AS `Clients__site`, `Clients`.`addedBy` AS `Clients__addedBy`, `Clients`.`isApproved` AS `Clients__isApproved`, `Clients`.`date_start` AS `Clients__date_start`, `Clients`.`date_end` AS `Clients__date_end`, `Clients`.`referred_by` AS `Clients__referred_by`, `Clients`.`agreement_number` AS `Clients__agreement_number`, `Clients`.`reverification` AS `Clients__reverification`, `Clients`.`sacc_number` AS `Clients__sacc_number`, `Clients`.`document` AS `Clients__document`, `Clients`.`billing_contact` AS `Clients__billing_contact`, `Clients`.`billing_address` AS `Clients__billing_address`, `Clients`.`billing_instructions` AS `Clients__billing_instructions`, `Clients`.`invoice_terms` AS `Clients__invoice_terms`, `Clients`.`recruiter_id` AS `Clients__recruiter_id`, `Clients`.`profile_id` AS `Clients__profile_id`, `Clients`.`contact_id` AS `Clients__contact_id`, `Clients`.`is_special` AS `Clients__is_special`, `Clients`.`status` AS `Clients__status`, `Clients`.`billing_city` AS `Clients__billing_city`, `Clients`.`billing_province` AS `Clients__billing_province`, `Clients`.`billing_postal_code` AS `Clients__billing_postal_code`, `Clients`.`division` AS `Clients__division`, `Clients`.`uploaded_for` AS `Clients__uploaded_for`, `Clients`.`created` AS `Clients__created`, `Clients`.`drafts` AS `Clients__drafts`, `Clients`.`client_date` AS `Clients__client_date`, `Clients`.`requalify_re` AS `Clients__requalify_re`, `Clients`.`requalify` AS `Clients__requalify`, `Clients`.`requalify_date` AS `Clients__requalify_date`, `Clients`.`requalify_frequency` AS `Clients__requalify_frequency`, `Clients`.`requalify_product` AS `Clients__requalify_product`, `Clients`.`forceemail` AS `Clients__forceemail` FROM `orders` `orders` LEFT JOIN `profiles` `Profiles` ON `Profiles`.`id` = (`orders`.`uploaded_for`) LEFT JOIN `clients` `Clients` ON `Clients`.`id` = (`orders`.`client_id`) WHERE (`orders`.`uploaded_for` = :c0 AND `orders`.`draft` = :c1) ORDER BY orders.id DESC&#039;,
	&#039;params&#039; =&gt; [
		&#039;:c0&#039; =&gt; [
			[maximum depth reached]
		],
		&#039;:c1&#039; =&gt; [
			[maximum depth reached]
		]
	],
	&#039;defaultTypes&#039; =&gt; [
		&#039;orders.id&#039; =&gt; &#039;integer&#039;,
		&#039;id&#039; =&gt; &#039;integer&#039;,
		&#039;orders.title&#039; =&gt; &#039;string&#039;,
		&#039;title&#039; =&gt; &#039;string&#039;,
		&#039;orders.description&#039; =&gt; &#039;text&#039;,
		&#039;description&#039; =&gt; &#039;text&#039;,
		&#039;orders.scale&#039; =&gt; &#039;integer&#039;,
		&#039;scale&#039; =&gt; &#039;integer&#039;,
		&#039;orders.reason&#039; =&gt; &#039;text&#039;,
		&#039;reason&#039; =&gt; &#039;text&#039;,
		&#039;orders.suggestion&#039; =&gt; &#039;text&#039;,
		&#039;suggestion&#039; =&gt; &#039;text&#039;,
		&#039;orders.user_id&#039; =&gt; &#039;integer&#039;,
		&#039;user_id&#039; =&gt; &#039;integer&#039;,
		&#039;orders.client_id&#039; =&gt; &#039;integer&#039;,
		&#039;client_id&#039; =&gt; &#039;integer&#039;,
		&#039;orders.uploaded_for&#039; =&gt; &#039;integer&#039;,
		&#039;uploaded_for&#039; =&gt; &#039;integer&#039;,
		&#039;orders.created&#039; =&gt; &#039;string&#039;,
		&#039;created&#039; =&gt; &#039;string&#039;,
		&#039;orders.division&#039; =&gt; &#039;string&#039;,
		&#039;division&#039; =&gt; &#039;string&#039;,
		&#039;orders.draft&#039; =&gt; &#039;integer&#039;,
		&#039;draft&#039; =&gt; &#039;integer&#039;,
		&#039;orders.conf_recruiter_name&#039; =&gt; &#039;string&#039;,
		&#039;conf_recruiter_name&#039; =&gt; &#039;string&#039;,
		&#039;orders.conf_driver_name&#039; =&gt; &#039;string&#039;,
		&#039;conf_driver_name&#039; =&gt; &#039;string&#039;,
		&#039;orders.conf_date&#039; =&gt; &#039;string&#039;,
		&#039;conf_date&#039; =&gt; &#039;string&#039;,
		&#039;orders.ins_id&#039; =&gt; &#039;string&#039;,
		&#039;ins_id&#039; =&gt; &#039;string&#039;,
		&#039;orders.ebs_id&#039; =&gt; &#039;string&#039;,
		&#039;ebs_id&#039; =&gt; &#039;string&#039;,
		&#039;orders.response&#039; =&gt; &#039;string&#039;,
		&#039;response&#039; =&gt; &#039;string&#039;,
		&#039;orders.ins_pdi&#039; =&gt; &#039;string&#039;,
		&#039;ins_pdi&#039; =&gt; &#039;string&#039;,
		&#039;orders.ebs_pdi&#039; =&gt; &#039;string&#039;,
		&#039;ebs_pdi&#039; =&gt; &#039;string&#039;,
		&#039;orders.recruiter_signature&#039; =&gt; &#039;string&#039;,
		&#039;recruiter_signature&#039; =&gt; &#039;string&#039;,
		&#039;orders.ins_79&#039; =&gt; &#039;text&#039;,
		&#039;ins_79&#039; =&gt; &#039;text&#039;,
		&#039;orders.ins_79_binary&#039; =&gt; &#039;text&#039;,
		&#039;ins_79_binary&#039; =&gt; &#039;text&#039;,
		&#039;orders.ins_1&#039; =&gt; &#039;text&#039;,
		&#039;ins_1&#039; =&gt; &#039;text&#039;,
		&#039;orders.ins_1_binary&#039; =&gt; &#039;text&#039;,
		&#039;ins_1_binary&#039; =&gt; &#039;text&#039;,
		&#039;orders.ins_14&#039; =&gt; &#039;text&#039;,
		&#039;ins_14&#039; =&gt; &#039;text&#039;,
		&#039;orders.ins_14_binary&#039; =&gt; &#039;text&#039;,
		&#039;ins_14_binary&#039; =&gt; &#039;text&#039;,
		&#039;orders.ins_77&#039; =&gt; &#039;text&#039;,
		&#039;ins_77&#039; =&gt; &#039;text&#039;,
		&#039;orders.ins_77_binary&#039; =&gt; &#039;text&#039;,
		&#039;ins_77_binary&#039; =&gt; &#039;text&#039;,
		&#039;orders.ins_78&#039; =&gt; &#039;text&#039;,
		&#039;ins_78&#039; =&gt; &#039;text&#039;,
		&#039;orders.ins_78_binary&#039; =&gt; &#039;text&#039;,
		&#039;ins_78_binary&#039; =&gt; &#039;text&#039;,
		&#039;orders.ebs_1603&#039; =&gt; &#039;text&#039;,
		&#039;ebs_1603&#039; =&gt; &#039;text&#039;,
		&#039;orders.ebs_1603_binary&#039; =&gt; &#039;text&#039;,
		&#039;ebs_1603_binary&#039; =&gt; &#039;text&#039;,
		&#039;orders.ebs_1627&#039; =&gt; &#039;text&#039;,
		&#039;ebs_1627&#039; =&gt; &#039;text&#039;,
		&#039;orders.ebs_1627_binary&#039; =&gt; &#039;text&#039;,
		&#039;ebs_1627_binary&#039; =&gt; &#039;text&#039;,
		&#039;orders.ebs_1650&#039; =&gt; &#039;text&#039;,
		&#039;ebs_1650&#039; =&gt; &#039;text&#039;,
		&#039;orders.ebs_1650_binary&#039; =&gt; &#039;text&#039;,
		&#039;ebs_1650_binary&#039; =&gt; &#039;text&#039;,
		&#039;orders.ins_72&#039; =&gt; &#039;text&#039;,
		&#039;ins_72&#039; =&gt; &#039;text&#039;,
		&#039;orders.ins_72_binary&#039; =&gt; &#039;text&#039;,
		&#039;ins_72_binary&#039; =&gt; &#039;text&#039;,
		&#039;orders.bright_planet&#039; =&gt; &#039;text&#039;,
		&#039;bright_planet&#039; =&gt; &#039;text&#039;,
		&#039;orders.final_show&#039; =&gt; &#039;boolean&#039;,
		&#039;final_show&#039; =&gt; &#039;boolean&#039;,
		&#039;orders.is_hired&#039; =&gt; &#039;integer&#039;,
		&#039;is_hired&#039; =&gt; &#039;integer&#039;,
		&#039;orders.bright_planet_binary&#039; =&gt; &#039;text&#039;,
		&#039;bright_planet_binary&#039; =&gt; &#039;text&#039;,
		&#039;orders.abc&#039; =&gt; &#039;integer&#039;,
		&#039;abc&#039; =&gt; &#039;integer&#039;,
		&#039;orders.bright_planet_html_binary&#039; =&gt; &#039;text&#039;,
		&#039;bright_planet_html_binary&#039; =&gt; &#039;text&#039;,
		&#039;orders.order_type&#039; =&gt; &#039;string&#039;,
		&#039;order_type&#039; =&gt; &#039;string&#039;,
		&#039;orders.forms&#039; =&gt; &#039;string&#039;,
		&#039;forms&#039; =&gt; &#039;string&#039;,
		&#039;orders.complete&#039; =&gt; &#039;integer&#039;,
		&#039;complete&#039; =&gt; &#039;integer&#039;,
		&#039;orders.ins_31&#039; =&gt; &#039;text&#039;,
		&#039;ins_31&#039; =&gt; &#039;text&#039;,
		&#039;orders.ins_31_binary&#039; =&gt; &#039;text&#039;,
		&#039;ins_31_binary&#039; =&gt; &#039;text&#039;,
		&#039;orders.ins_32&#039; =&gt; &#039;text&#039;,
		&#039;ins_32&#039; =&gt; &#039;text&#039;,
		&#039;orders.ins_32_binary&#039; =&gt; &#039;text&#039;,
		&#039;ins_32_binary&#039; =&gt; &#039;text&#039;,
		&#039;orders.complete_writing&#039; =&gt; &#039;integer&#039;,
		&#039;complete_writing&#039; =&gt; &#039;integer&#039;
	],
	&#039;decorators&#039; =&gt; (int) 0,
	&#039;executed&#039; =&gt; true,
	&#039;hydrate&#039; =&gt; true,
	&#039;buffered&#039; =&gt; true,
	&#039;formatters&#039; =&gt; (int) 0,
	&#039;mapReducers&#039; =&gt; (int) 0,
	&#039;contain&#039; =&gt; [
		&#039;Profiles&#039; =&gt; [[maximum depth reached]],
		&#039;Clients&#039; =&gt; [[maximum depth reached]],
		&#039;RoadTest&#039; =&gt; [[maximum depth reached]]
	],
	&#039;matching&#039; =&gt; [],
	&#039;extraOptions&#039; =&gt; [],
	&#039;repository&#039; =&gt; object(App\Model\Table\OrdersTable) {}

}
$doc_comp = object(App\Controller\Component\DocumentComponent) {
	request =&gt; object(Cake\Network\Request) {}
	components =&gt; []
	[protected] _registry =&gt; object(Cake\Controller\ComponentRegistry) {}
	[protected] _defaultConfig =&gt; []
	[protected] _componentMap =&gt; []
	[protected] _config =&gt; []
	[protected] _configInitialized =&gt; true
}
$logos1 = object(Cake\ORM\ResultSet) {

	&#039;query&#039; =&gt; object(Cake\ORM\Query) {},
	&#039;items&#039; =&gt; [
		(int) 0 =&gt; object(App\Model\Entity\Logo) {},
		(int) 1 =&gt; object(App\Model\Entity\Logo) {}
	]

}
$logos = object(Cake\ORM\ResultSet) {

	&#039;query&#039; =&gt; object(Cake\ORM\Query) {},
	&#039;items&#039; =&gt; [
		(int) 0 =&gt; object(App\Model\Entity\Logo) {},
		(int) 1 =&gt; object(App\Model\Entity\Logo) {},
		(int) 2 =&gt; object(App\Model\Entity\Logo) {},
		(int) 3 =&gt; object(App\Model\Entity\Logo) {},
		(int) 4 =&gt; object(App\Model\Entity\Logo) {},
		(int) 5 =&gt; object(App\Model\Entity\Logo) {},
		(int) 6 =&gt; object(App\Model\Entity\Logo) {},
		(int) 7 =&gt; object(App\Model\Entity\Logo) {},
		(int) 8 =&gt; object(App\Model\Entity\Logo) {},
		(int) 9 =&gt; object(App\Model\Entity\Logo) {},
		(int) 10 =&gt; object(App\Model\Entity\Logo) {},
		(int) 11 =&gt; object(App\Model\Entity\Logo) {},
		(int) 12 =&gt; object(App\Model\Entity\Logo) {},
		(int) 13 =&gt; object(App\Model\Entity\Logo) {}
	]

}
$client_docs = object(Cake\ORM\ResultSet) {

	&#039;query&#039; =&gt; object(Cake\ORM\Query) {},
	&#039;items&#039; =&gt; []

}
$uid = &#039;888&#039;
$ptypes = object(Cake\ORM\ResultSet) {

	&#039;query&#039; =&gt; object(Cake\ORM\Query) {},
	&#039;items&#039; =&gt; [
		(int) 0 =&gt; object(Cake\ORM\Entity) {},
		(int) 1 =&gt; object(Cake\ORM\Entity) {},
		(int) 2 =&gt; object(Cake\ORM\Entity) {},
		(int) 3 =&gt; object(Cake\ORM\Entity) {},
		(int) 4 =&gt; object(Cake\ORM\Entity) {},
		(int) 5 =&gt; object(Cake\ORM\Entity) {},
		(int) 6 =&gt; object(Cake\ORM\Entity) {},
		(int) 7 =&gt; object(Cake\ORM\Entity) {},
		(int) 8 =&gt; object(Cake\ORM\Entity) {}
	]

}
$theproductlist = object(Cake\ORM\Query) {

	&#039;sql&#039; =&gt; &#039;SELECT `order_products`.`id` AS `order_products__id`, `order_products`.`title` AS `order_products__title`, `order_products`.`enable` AS `order_products__enable`, `order_products`.`number` AS `order_products__number`, `order_products`.`titleFrench` AS `order_products__titleFrench` FROM `order_products` `order_products`&#039;,
	&#039;params&#039; =&gt; [],
	&#039;defaultTypes&#039; =&gt; [
		&#039;order_products.id&#039; =&gt; &#039;integer&#039;,
		&#039;id&#039; =&gt; &#039;integer&#039;,
		&#039;order_products.title&#039; =&gt; &#039;string&#039;,
		&#039;title&#039; =&gt; &#039;string&#039;,
		&#039;order_products.enable&#039; =&gt; &#039;integer&#039;,
		&#039;enable&#039; =&gt; &#039;integer&#039;,
		&#039;order_products.number&#039; =&gt; &#039;integer&#039;,
		&#039;number&#039; =&gt; &#039;integer&#039;,
		&#039;order_products.titleFrench&#039; =&gt; &#039;string&#039;,
		&#039;titleFrench&#039; =&gt; &#039;string&#039;
	],
	&#039;decorators&#039; =&gt; (int) 0,
	&#039;executed&#039; =&gt; true,
	&#039;hydrate&#039; =&gt; true,
	&#039;buffered&#039; =&gt; true,
	&#039;formatters&#039; =&gt; (int) 0,
	&#039;mapReducers&#039; =&gt; (int) 0,
	&#039;contain&#039; =&gt; [],
	&#039;matching&#039; =&gt; [],
	&#039;extraOptions&#039; =&gt; [],
	&#039;repository&#039; =&gt; object(Cake\ORM\Table) {}

}
$products = object(Cake\ORM\Query) {

	&#039;sql&#039; =&gt; &#039;SELECT `product_types`.`ID` AS `product_types__ID`, `product_types`.`Acronym` AS `product_types__Acronym`, `product_types`.`Name` AS `product_types__Name`, `product_types`.`Description` AS `product_types__Description`, `product_types`.`Alias` AS `product_types__Alias`, `product_types`.`Color` AS `product_types__Color`, `product_types`.`Checked` AS `product_types__Checked`, `product_types`.`Sidebar_Alias` AS `product_types__Sidebar_Alias`, `product_types`.`ButtonColor` AS `product_types__ButtonColor`, `product_types`.`Blocked` AS `product_types__Blocked`, `product_types`.`doc_ids` AS `product_types__doc_ids`, `product_types`.`Blocks_Alias` AS `product_types__Blocks_Alias`, `product_types`.`Block_Color` AS `product_types__Block_Color`, `product_types`.`NameFrench` AS `product_types__NameFrench`, `product_types`.`DescriptionFrench` AS `product_types__DescriptionFrench`, `product_types`.`Visible` AS `product_types__Visible`, `product_types`.`Bypass` AS `product_types__Bypass`, `product_types`.`Icon` AS `product_types__Icon`, `product_types`.`Price` AS `product_types__Price`, `product_types`.`profile_types` AS `product_types__profile_types` FROM `product_types` `product_types`&#039;,
	&#039;params&#039; =&gt; [],
	&#039;defaultTypes&#039; =&gt; [
		&#039;product_types.ID&#039; =&gt; &#039;integer&#039;,
		&#039;ID&#039; =&gt; &#039;integer&#039;,
		&#039;product_types.Acronym&#039; =&gt; &#039;string&#039;,
		&#039;Acronym&#039; =&gt; &#039;string&#039;,
		&#039;product_types.Name&#039; =&gt; &#039;string&#039;,
		&#039;Name&#039; =&gt; &#039;string&#039;,
		&#039;product_types.Description&#039; =&gt; &#039;string&#039;,
		&#039;Description&#039; =&gt; &#039;string&#039;,
		&#039;product_types.Alias&#039; =&gt; &#039;string&#039;,
		&#039;Alias&#039; =&gt; &#039;string&#039;,
		&#039;product_types.Color&#039; =&gt; &#039;string&#039;,
		&#039;Color&#039; =&gt; &#039;string&#039;,
		&#039;product_types.Checked&#039; =&gt; &#039;integer&#039;,
		&#039;Checked&#039; =&gt; &#039;integer&#039;,
		&#039;product_types.Sidebar_Alias&#039; =&gt; &#039;string&#039;,
		&#039;Sidebar_Alias&#039; =&gt; &#039;string&#039;,
		&#039;product_types.ButtonColor&#039; =&gt; &#039;string&#039;,
		&#039;ButtonColor&#039; =&gt; &#039;string&#039;,
		&#039;product_types.Blocked&#039; =&gt; &#039;string&#039;,
		&#039;Blocked&#039; =&gt; &#039;string&#039;,
		&#039;product_types.doc_ids&#039; =&gt; &#039;text&#039;,
		&#039;doc_ids&#039; =&gt; &#039;text&#039;,
		&#039;product_types.Blocks_Alias&#039; =&gt; &#039;string&#039;,
		&#039;Blocks_Alias&#039; =&gt; &#039;string&#039;,
		&#039;product_types.Block_Color&#039; =&gt; &#039;string&#039;,
		&#039;Block_Color&#039; =&gt; &#039;string&#039;,
		&#039;product_types.NameFrench&#039; =&gt; &#039;string&#039;,
		&#039;NameFrench&#039; =&gt; &#039;string&#039;,
		&#039;product_types.DescriptionFrench&#039; =&gt; &#039;string&#039;,
		&#039;DescriptionFrench&#039; =&gt; &#039;string&#039;,
		&#039;product_types.Visible&#039; =&gt; &#039;boolean&#039;,
		&#039;Visible&#039; =&gt; &#039;boolean&#039;,
		&#039;product_types.Bypass&#039; =&gt; &#039;integer&#039;,
		&#039;Bypass&#039; =&gt; &#039;integer&#039;,
		&#039;product_types.Icon&#039; =&gt; &#039;string&#039;,
		&#039;Icon&#039; =&gt; &#039;string&#039;,
		&#039;product_types.Price&#039; =&gt; &#039;decimal&#039;,
		&#039;Price&#039; =&gt; &#039;decimal&#039;,
		&#039;product_types.profile_types&#039; =&gt; &#039;string&#039;,
		&#039;profile_types&#039; =&gt; &#039;string&#039;
	],
	&#039;decorators&#039; =&gt; (int) 0,
	&#039;executed&#039; =&gt; true,
	&#039;hydrate&#039; =&gt; true,
	&#039;buffered&#039; =&gt; true,
	&#039;formatters&#039; =&gt; (int) 0,
	&#039;mapReducers&#039; =&gt; (int) 0,
	&#039;contain&#039; =&gt; [],
	&#039;matching&#039; =&gt; [],
	&#039;extraOptions&#039; =&gt; [],
	&#039;repository&#039; =&gt; object(Cake\ORM\Table) {}

}
$Sidebar = object(Cake\ORM\Entity) {

	&#039;new&#039; =&gt; false,
	&#039;accessible&#039; =&gt; [
		&#039;*&#039; =&gt; true
	],
	&#039;properties&#039; =&gt; [
		&#039;id&#039; =&gt; (int) 1,
		&#039;orders&#039; =&gt; (int) 1,
		&#039;orders_list&#039; =&gt; (int) 1,
		&#039;orders_create&#039; =&gt; (int) 1,
		&#039;orders_edit&#039; =&gt; (int) 1,
		&#039;orders_delete&#039; =&gt; (int) 1,
		&#039;orders_others&#039; =&gt; (int) 1,
		&#039;orders_mee&#039; =&gt; (int) 1,
		&#039;orders_products&#039; =&gt; (int) 1,
		&#039;order_requalify&#039; =&gt; (int) 0,
		&#039;profile&#039; =&gt; (int) 1,
		&#039;client&#039; =&gt; (int) 1,
		&#039;document&#039; =&gt; (int) 1,
		&#039;profile_list&#039; =&gt; (int) 1,
		&#039;profile_create&#039; =&gt; (int) 1,
		&#039;client_list&#039; =&gt; (int) 1,
		&#039;client_create&#039; =&gt; (int) 1,
		&#039;document_list&#039; =&gt; (int) 1,
		&#039;document_create&#039; =&gt; (int) 1,
		&#039;messages&#039; =&gt; (int) 0,
		&#039;drafts&#039; =&gt; (int) 0,
		&#039;user_id&#039; =&gt; (int) 4,
		&#039;profile_edit&#039; =&gt; (int) 1,
		&#039;profile_delete&#039; =&gt; (int) 1,
		&#039;client_edit&#039; =&gt; (int) 1,
		&#039;client_delete&#039; =&gt; (int) 1,
		&#039;document_edit&#039; =&gt; (int) 1,
		&#039;document_delete&#039; =&gt; (int) 1,
		&#039;document_others&#039; =&gt; (int) 1,
		&#039;recent&#039; =&gt; (int) 0,
		&#039;feedback&#039; =&gt; (int) 0,
		&#039;document_requalify&#039; =&gt; (int) 0,
		&#039;orders_requalify&#039; =&gt; (int) 0,
		&#039;email&#039; =&gt; (int) 0,
		&#039;email_todo&#039; =&gt; (int) 0,
		&#039;email_document&#039; =&gt; (int) 1,
		&#039;email_orders&#039; =&gt; (int) 1,
		&#039;logo&#039; =&gt; (int) 1,
		&#039;client_option&#039; =&gt; (int) 0,
		&#039;schedule&#039; =&gt; (int) 1,
		&#039;schedule_add&#039; =&gt; (int) 1,
		&#039;analytics&#039; =&gt; (int) 1,
		&#039;training&#039; =&gt; (int) 1,
		&#039;order_intact&#039; =&gt; (int) 0,
		&#039;bulk&#039; =&gt; (int) 1,
		&#039;email_profile&#039; =&gt; (int) 1,
		&#039;orders_emp&#039; =&gt; (int) 1,
		&#039;orders_GEM&#039; =&gt; (int) 0,
		&#039;orders_GDR&#039; =&gt; (int) 0,
		&#039;aggregate&#039; =&gt; (int) 1,
		&#039;invoice&#039; =&gt; (int) 1,
		&#039;orders_cch&#039; =&gt; (int) 0,
		&#039;orders_sal&#039; =&gt; (int) 1,
		&#039;orders_gdo&#039; =&gt; (int) 1,
		&#039;viewprofiles&#039; =&gt; (int) 1
	],
	&#039;dirty&#039; =&gt; [],
	&#039;original&#039; =&gt; [],
	&#039;virtual&#039; =&gt; [],
	&#039;errors&#039; =&gt; [],
	&#039;repository&#039; =&gt; &#039;Sidebar&#039;

}
$Me = (int) 4
$Manager = object(App\Controller\Component\ManagerComponent) {
	request =&gt; object(Cake\Network\Request) {}
	components =&gt; []
	Controller =&gt; object(App\Controller\ProfilesController) {}
	[protected] _registry =&gt; object(Cake\Controller\ComponentRegistry) {}
	[protected] _defaultConfig =&gt; []
	[protected] _componentMap =&gt; []
	[protected] _config =&gt; []
	[protected] _configInitialized =&gt; true
}
$is_disabled = &#039;disabled=&quot;disabled&quot;&#039;
$hidepermissions = false
$userID = (int) 4
$p = [
	(int) 0 =&gt; &#039;1603&#039;,
	(int) 1 =&gt; &#039;1627&#039;
]
$settings = object(Cake\ORM\Entity) {

	&#039;new&#039; =&gt; false,
	&#039;accessible&#039; =&gt; [
		&#039;*&#039; =&gt; true
	],
	&#039;properties&#039; =&gt; [
		&#039;id&#039; =&gt; (int) 1,
		&#039;layout&#039; =&gt; &#039;blue&#039;,
		&#039;body&#039; =&gt; &#039;page-quick-sidebar-over-content page-style-square page-header-fixed page-footer-fixed&#039;,
		&#039;sidebar&#039; =&gt; &#039;page-sidebar-menu page-sidebar-menu-hover-submenu&#039;,
		&#039;display&#039; =&gt; (int) 2,
		&#039;client&#039; =&gt; &#039;Client&#039;,
		&#039;document&#039; =&gt; &#039;Document&#039;,
		&#039;profile&#039; =&gt; &#039;Profile&#039;,
		&#039;mee&#039; =&gt; &#039;MEE&#039;,
		&#039;box&#039; =&gt; (int) 0,
		&#039;client_option&#039; =&gt; (int) 0,
		&#039;client_img&#039; =&gt; &#039;446536_762202.png&#039;,
		&#039;clientFrench&#039; =&gt; &#039;Client&#039;,
		&#039;documentFrench&#039; =&gt; &#039;Document&#039;,
		&#039;profileFrench&#039; =&gt; &#039;Profil&#039;,
		&#039;forceemail&#039; =&gt; &#039;&#039;
	],
	&#039;dirty&#039; =&gt; [],
	&#039;original&#039; =&gt; [],
	&#039;virtual&#039; =&gt; [],
	&#039;errors&#039; =&gt; [],
	&#039;repository&#039; =&gt; &#039;Settings&#039;

}
$sidebar = null
$language = &#039;English&#039;
$strings = [
	&#039;Date&#039; =&gt; &#039;1441201411&#039;,
	&#039;dashboard_affirmative&#039; =&gt; &#039;Yes&#039;,
	&#039;dashboard_negative&#039; =&gt; &#039;No&#039;,
	&#039;dashboard_selectall&#039; =&gt; &#039;Select All&#039;,
	&#039;dashboard_print&#039; =&gt; &#039;Print&#039;,
	&#039;dashboard_search&#039; =&gt; &#039;Search&#039;,
	&#039;profiles_name&#039; =&gt; &#039;Name&#039;,
	&#039;profiles_username&#039; =&gt; &#039;Username&#039;,
	&#039;profiles_assignedto&#039; =&gt; &#039;Assigned to&#039;,
	&#039;dashboard_actions&#039; =&gt; &#039;Actions&#039;,
	&#039;dashboard_previous&#039; =&gt; &#039;Previous&#039;,
	&#039;dashboard_next&#039; =&gt; &#039;Next&#039;,
	&#039;profiles_searchfor&#039; =&gt; &#039;Search for Profile&#039;,
	&#039;settings_client&#039; =&gt; &#039;Client&#039;,
	&#039;profiles_profiletype&#039; =&gt; &#039;Profile Type&#039;,
	&#039;index_createprofile&#039; =&gt; &#039;Create Profile&#039;,
	&#039;index_listprofile&#039; =&gt; &#039;List Profiles&#039;,
	&#039;dashboard_dashboard&#039; =&gt; &#039;Dashboard&#039;,
	&#039;profiles_profile&#039; =&gt; &#039;Profile&#039;,
	&#039;dashboard_mysettings&#039; =&gt; &#039;My Settings&#039;,
	&#039;dashboard_view&#039; =&gt; &#039;View&#039;,
	&#039;dashboard_edit&#039; =&gt; &#039;Edit&#039;,
	&#039;dashboard_delete&#039; =&gt; &#039;Delete&#039;,
	&#039;dashboard_servicedivision&#039; =&gt; &#039;A service division of&#039;,
	&#039;dashboard_documentsearch&#039; =&gt; &#039;Document Search...&#039;,
	&#039;profiles_viewdocuments&#039; =&gt; &#039;View Documents&#039;,
	&#039;profiles_vieworders&#039; =&gt; &#039;View Orders&#039;,
	&#039;dashboard_settings&#039; =&gt; &#039;Settings&#039;,
	&#039;profiles_null&#039; =&gt; &#039;Applicant&#039;,
	&#039;dashboard_debug&#039; =&gt; &#039;Debug Mode&#039;,
	&#039;dashboard_on&#039; =&gt; &#039;On&#039;,
	&#039;dashboard_off&#039; =&gt; &#039;Off&#039;,
	&#039;dashboard_confirmdelete&#039; =&gt; &#039;Are you sure you want to delete &amp;quot;%name%&amp;quot;?&#039;,
	&#039;profiles_image&#039; =&gt; &#039;Image&#039;,
	&#039;index_createclient&#039; =&gt; &#039;Create Client&#039;,
	&#039;index_listclients&#039; =&gt; &#039;List Clients&#039;,
	&#039;dashboard_logout&#039; =&gt; &#039;Log Out&#039;,
	&#039;index_qualify&#039; =&gt; &#039;Driver Qualification System&#039;,
	&#039;index_viewmore&#039; =&gt; &#039;View More&#039;,
	&#039;index_createclients&#039; =&gt; &#039;Create Client&#039;,
	&#039;index_listprofiles&#039; =&gt; &#039;List Profiles&#039;,
	&#039;index_listorders&#039; =&gt; &#039;List Orders&#039;,
	&#039;index_listdocuments&#039; =&gt; &#039;List Documents&#039;,
	&#039;index_orderdrafts&#039; =&gt; &#039;Order Drafts&#039;,
	&#039;index_createdocument&#039; =&gt; &#039;Create Document&#039;,
	&#039;index_documentdrafts&#039; =&gt; &#039;Document Drafts&#039;,
	&#039;index_tasks&#039; =&gt; &#039;Tasks&#039;,
	&#039;index_addtasks&#039; =&gt; &#039;Add Tasks&#039;,
	&#039;index_feedback&#039; =&gt; &#039;Feedback&#039;,
	&#039;index_analytics&#039; =&gt; &#039;Analytics&#039;,
	&#039;index_calendar&#039; =&gt; &#039;Calendar&#039;,
	&#039;index_documents&#039; =&gt; &#039;Documents&#039;,
	&#039;index_profiles&#039; =&gt; &#039;Profiles&#039;,
	&#039;index_clients&#039; =&gt; &#039;Clients&#039;,
	&#039;index_training&#039; =&gt; &#039;Training&#039;,
	&#039;index_courses&#039; =&gt; &#039;Courses&#039;,
	&#039;index_quizresults&#039; =&gt; &#039;Quiz Results&#039;,
	&#039;index_orders&#039; =&gt; &#039;Orders&#039;,
	&#039;index_invoice&#039; =&gt; &#039;Invoice&#039;,
	&#039;dashboard_add&#039; =&gt; &#039;Add&#039;,
	&#039;month_long01&#039; =&gt; &#039;January&#039;,
	&#039;month_long02&#039; =&gt; &#039;February&#039;,
	&#039;month_long03&#039; =&gt; &#039;March&#039;,
	&#039;month_long04&#039; =&gt; &#039;April&#039;,
	&#039;month_long05&#039; =&gt; &#039;May&#039;,
	&#039;month_long06&#039; =&gt; &#039;June&#039;,
	&#039;month_long07&#039; =&gt; &#039;July&#039;,
	&#039;month_long08&#039; =&gt; &#039;August&#039;,
	&#039;month_long09&#039; =&gt; &#039;September&#039;,
	&#039;month_long10&#039; =&gt; &#039;October&#039;,
	&#039;month_long11&#039; =&gt; &#039;November&#039;,
	&#039;month_long12&#039; =&gt; &#039;December&#039;,
	&#039;forms_companyname&#039; =&gt; &#039;Company Name&#039;,
	&#039;forms_name&#039; =&gt; &#039;Name&#039;,
	&#039;forms_address&#039; =&gt; &#039;Address&#039;,
	&#039;forms_city&#039; =&gt; &#039;City&#039;,
	&#039;forms_postalcode&#039; =&gt; &#039;Postal Code&#039;,
	&#039;forms_phone&#039; =&gt; &#039;Phone Number&#039;,
	&#039;forms_email&#039; =&gt; &#039;Email Address&#039;,
	&#039;forms_taxes&#039; =&gt; &#039;Taxes&#039;,
	&#039;forms_savechanges&#039; =&gt; &#039;Save Changes&#039;,
	&#039;dashboard_drafts&#039; =&gt; &#039;Drafts&#039;,
	&#039;dashboard_emailexists&#039; =&gt; &#039;This email address is already in use&#039;,
	&#039;profiles_nonefound&#039; =&gt; &#039;No profiles found&#039;,
	&#039;clients_enablerequalify&#039; =&gt; &#039;Enable Re-qualify?&#039;,
	&#039;clients_addeditimage&#039; =&gt; &#039;Add/Edit Image&#039;,
	&#039;forms_browse&#039; =&gt; &#039;Browse&#039;,
	&#039;forms_customertype&#039; =&gt; &#039;Customer Type&#039;,
	&#039;forms_provincestate&#039; =&gt; &#039;Province/State&#039;,
	&#039;forms_postalzip&#039; =&gt; &#039;Postal/Zip Code&#039;,
	&#039;forms_companyphone&#039; =&gt; &#039;Company&#039;s Phone Number&#039;,
	&#039;forms_website&#039; =&gt; &#039;Website&#039;,
	&#039;forms_divisions&#039; =&gt; &#039;Divisions&#039;,
	&#039;forms_signatoryfirstname&#039; =&gt; &#039;Signatory&#039;s First Name&#039;,
	&#039;forms_signatorylastname&#039; =&gt; &#039;Signatory&#039;s Last Name&#039;,
	&#039;forms_signatoryemail&#039; =&gt; &#039;Signatory&#039;s Email Address&#039;,
	&#039;forms_startdate&#039; =&gt; &#039;Start Date&#039;,
	&#039;forms_enddate&#039; =&gt; &#039;End Date&#039;,
	&#039;forms_referredby&#039; =&gt; &#039;Referred By&#039;,
	&#039;forms_arisagreement&#039; =&gt; &#039;ARIS Agreement #&#039;,
	&#039;forms_arisreverification&#039; =&gt; &#039;ARIS Re-verification&#039;,
	&#039;forms_sacc&#039; =&gt; &#039;SACC Number &#039;,
	&#039;forms_billing&#039; =&gt; &#039;Billing&#039;,
	&#039;forms_billingcontact&#039; =&gt; &#039;Billing Contact&#039;,
	&#039;forms_billingaddress&#039; =&gt; &#039;Billing Address&#039;,
	&#039;forms_billingcity&#039; =&gt; &#039;Billing City&#039;,
	&#039;forms_billingprovince&#039; =&gt; &#039;Billing Province/State&#039;,
	&#039;forms_billingpostalcode&#039; =&gt; &#039;Billing Postal Code&#039;,
	&#039;forms_invoiceterms&#039; =&gt; &#039;Invoice Terms&#039;,
	&#039;forms_billinginstructions&#039; =&gt; &#039;Billing Instructions&#039;,
	&#039;forms_individual&#039; =&gt; &#039;Individual&#039;,
	&#039;forms_centralized&#039; =&gt; &#039;Centralized&#039;,
	&#039;forms_description&#039; =&gt; &#039;Description &#039;,
	&#039;forms_addmore&#039; =&gt; &#039;Add More&#039;,
	&#039;forms_oneperline&#039; =&gt; &#039;One division per line&#039;,
	&#039;forms_select&#039; =&gt; &#039;Select&#039;,
	&#039;forms_weekly&#039; =&gt; &#039;Weekly&#039;,
	&#039;forms_biweekly&#039; =&gt; &#039;Bi-weekly&#039;,
	&#039;forms_monthly&#039; =&gt; &#039;Monthly&#039;,
	&#039;forms_attachdocs&#039; =&gt; &#039;Attach Documents&#039;,
	&#039;forms_datasaved&#039; =&gt; &#039;Data saved successfully&#039;,
	&#039;forms_saving&#039; =&gt; &#039;Saving...&#039;,
	&#039;forms_save&#039; =&gt; &#039;Save&#039;,
	&#039;forms_removelast&#039; =&gt; &#039;Remove Last&#039;,
	&#039;forms_uploading&#039; =&gt; &#039;Uploading...&#039;,
	&#039;forms_eventname&#039; =&gt; &#039;Event Name&#039;,
	&#039;forms_attachedfiles&#039; =&gt; &#039;Attached Files&#039;,
	&#039;forms_billingcustomertype&#039; =&gt; &#039;Billing Customer Type&#039;,
	&#039;forms_requalifyfrequency&#039; =&gt; &#039;Re-qualify Frequency?&#039;,
	&#039;forms_1month&#039; =&gt; &#039;1 Month&#039;,
	&#039;forms_3month&#039; =&gt; &#039;3 Months&#039;,
	&#039;forms_6month&#039; =&gt; &#039;6 Months&#039;,
	&#039;forms_12month&#039; =&gt; &#039;12 Months&#039;,
	&#039;forms_includedproducts&#039; =&gt; &#039;Products Included&#039;,
	&#039;forms_driverusername&#039; =&gt; &#039;Driver (Username)&#039;,
	&#039;forms_hireddate&#039; =&gt; &#039;Hired Date&#039;,
	&#039;forms_cronorders&#039; =&gt; &#039;Cron Orders Placed&#039;,
	&#039;forms_added&#039; =&gt; &#039;Added&#039;,
	&#039;forms_removed&#039; =&gt; &#039;Removed&#039;,
	&#039;profiles_add&#039; =&gt; &#039;Create Profile&#039;,
	&#039;profiles_view&#039; =&gt; &#039;View Profile&#039;,
	&#039;profiles_edit&#039; =&gt; &#039;Edit Profile&#039;,
	&#039;profiles_viewscorecard&#039; =&gt; &#039;View Scorecard&#039;,
	&#039;profiles_notes&#039; =&gt; &#039;Notes&#039;,
	&#039;profiles_permissions&#039; =&gt; &#039;Permissions&#039;,
	&#039;profiles_feedback&#039; =&gt; &#039;Feedback&#039;,
	&#039;profiles_mydocuments&#039; =&gt; &#039;View My Documents&#039;,
	&#039;profiles_washired&#039; =&gt; &#039;Was this applicant hired?&#039;,
	&#039;theme_default&#039; =&gt; &#039;Default&#039;,
	&#039;theme_color&#039; =&gt; &#039;THEME COLOR&#039;,
	&#039;theme_darkblue&#039; =&gt; &#039;Dark Blue&#039;,
	&#039;theme_blue&#039; =&gt; &#039;Blue&#039;,
	&#039;theme_grey&#039; =&gt; &#039;Grey&#039;,
	&#039;theme_light&#039; =&gt; &#039;Light&#039;,
	&#039;theme_light2&#039; =&gt; &#039;Light 2&#039;,
	&#039;theme_style&#039; =&gt; &#039;Theme Style&#039;,
	&#039;theme_squarecorners&#039; =&gt; &#039;Square corners&#039;,
	&#039;theme_roundcorners&#039; =&gt; &#039;Rounded corners&#039;,
	&#039;theme_layout&#039; =&gt; &#039;Layout&#039;,
	&#039;theme_fluid&#039; =&gt; &#039;Fluid&#039;,
	&#039;theme_boxed&#039; =&gt; &#039;Boxed&#039;,
	&#039;theme_header&#039; =&gt; &#039;Header&#039;,
	&#039;theme_fixed&#039; =&gt; &#039;Fixed&#039;,
	&#039;theme_dropdown&#039; =&gt; &#039;Top Menu Dropdown&#039;,
	&#039;theme_dark&#039; =&gt; &#039;Dark&#039;,
	&#039;theme_sidebarmode&#039; =&gt; &#039;Sidebar Mode&#039;,
	&#039;theme_sidebarmenu&#039; =&gt; &#039;Sidebar Menu&#039;,
	&#039;theme_accordion&#039; =&gt; &#039;Accordion&#039;,
	&#039;theme_hover&#039; =&gt; &#039;Hover&#039;,
	&#039;theme_sidebarstyle&#039; =&gt; &#039;Sidebar Style&#039;,
	&#039;theme_sidebarposition&#039; =&gt; &#039;Sidebar Position&#039;,
	&#039;theme_left&#039; =&gt; &#039;Left&#039;,
	&#039;theme_right&#039; =&gt; &#039;Right&#039;,
	&#039;theme_footer&#039; =&gt; &#039;Footer&#039;,
	&#039;profiles_usernameexists&#039; =&gt; &#039;Username exists already&#039;,
	&#039;forms_drivertype&#039; =&gt; &#039;Driver Type&#039;,
	&#039;forms_selectdrivertype&#039; =&gt; &#039;Select Driver Type&#039;,
	&#039;forms_usernamerequired&#039; =&gt; &#039;Username is required&#039;,
	&#039;forms_firstname&#039; =&gt; &#039;First Name&#039;,
	&#039;forms_middlename&#039; =&gt; &#039;Middle Name&#039;,
	&#039;forms_lastname&#039; =&gt; &#039;Last Name&#039;,
	&#039;forms_title&#039; =&gt; &#039;Title&#039;,
	&#039;forms_mr&#039; =&gt; &#039;Mr.&#039;,
	&#039;forms_mrs&#039; =&gt; &#039;Mrs.&#039;,
	&#039;forms_ms&#039; =&gt; &#039;Ms.&#039;,
	&#039;forms_gender&#039; =&gt; &#039;Gender&#039;,
	&#039;forms_male&#039; =&gt; &#039;Male&#039;,
	&#039;forms_female&#039; =&gt; &#039;Female&#039;,
	&#039;forms_selectgender&#039; =&gt; &#039;Select Gender&#039;,
	&#039;forms_placeofbirth&#039; =&gt; &#039;Country of Birth&#039;,
	&#039;forms_dateofbirth&#039; =&gt; &#039;Date of Birth&#039;,
	&#039;forms_country&#039; =&gt; &#039;Country&#039;,
	&#039;forms_driverslicense&#039; =&gt; &#039;Driver&#039;s License&#039;,
	&#039;forms_provinceissued&#039; =&gt; &#039;Province issued&#039;,
	&#039;forms_expirydate&#039; =&gt; &#039;Expiry Date&#039;,
	&#039;forms_hearaboutus&#039; =&gt; &#039;Where did you hear about us?&#039;,
	&#039;forms_password&#039; =&gt; &#039;Password&#039;,
	&#039;forms_retypepassword&#039; =&gt; &#039;Re-type Password&#039;,
	&#039;forms_referral&#039; =&gt; &#039;Referral&#039;,
	&#039;forms_companywebsite&#039; =&gt; &#039;Company Website&#039;,
	&#039;forms_newspaper&#039; =&gt; &#039;Newspaper&#039;,
	&#039;forms_other&#039; =&gt; &#039;Other&#039;,
	&#039;forms_submit&#039; =&gt; &#039;Submit&#039;,
	&#039;forms_addnotes&#039; =&gt; &#039;Add driver notes here&#039;,
	&#039;forms_notesaved&#039; =&gt; &#039;Note updated successfully&#039;,
	&#039;forms_notenotsaved&#039; =&gt; &#039;You can\&#039;t submit a blank note&#039;,
	&#039;forms_notedeleted&#039; =&gt; &#039;Note deleted successfully!&#039;,
	&#039;index_editdocument&#039; =&gt; &#039;Edit Document&#039;,
	&#039;index_viewdocument&#039; =&gt; &#039;View Document&#039;,
	&#039;forms_savedraft&#039; =&gt; &#039;Save As Draft&#039;,
	&#039;forms_uploaded&#039; =&gt; &#039;uploaded successfully&#039;,
	&#039;forms_novideo&#039; =&gt; &#039;Your browser does not support the video tag.&#039;,
	&#039;forms_signature&#039; =&gt; &#039;Signature&#039;,
	&#039;forms_selectone&#039; =&gt; &#039;Please select at least one option&#039;,
	&#039;forms_signplease&#039; =&gt; &#039;Please provide your signature to confirm.&#039;,
	&#039;forms_missingid&#039; =&gt; &#039;Missing the required piece of ID&#039;,
	&#039;forms_missingabstract&#039; =&gt; &#039;Missing the abstract consent form&#039;,
	&#039;forms_pleaseconfirm&#039; =&gt; &#039;Please confirm that you have read the conditions.&#039;,
	&#039;forms_fillall&#039; =&gt; &#039;Please fill out all the required fields.&#039;,
	&#039;forms_savesig&#039; =&gt; &#039;Please save the signature before you proceed.&#039;,
	&#039;forms_datetime&#039; =&gt; &#039;Date/Time&#039;,
	&#039;forms_clear&#039; =&gt; &#039;Clear&#039;,
	&#039;forms_nosig&#039; =&gt; &#039;No signature supplied&#039;,
	&#039;forms_signhere&#039; =&gt; &#039;Please sign here then click save before proceeding&#039;,
	&#039;forms_language&#039; =&gt; &#039;Language&#039;,
	&#039;forms_emailcreds&#039; =&gt; &#039;Email Credentials&#039;,
	&#039;forms_email2new&#039; =&gt; &#039;Email to the newuser&#039;,
	&#039;forms_passnotequal&#039; =&gt; &#039;Please enter the same password in both boxes&#039;,
	&#039;profiles_sendforms&#039; =&gt; &#039;Send forms via email&#039;,
	&#039;profiles_expired&#039; =&gt; &#039;License Expired&#039;,
	&#039;forms_dateformat&#039; =&gt; &#039;YYYY-MM-DD&#039;,
	&#039;dashboard_dashboard2&#039; =&gt; &#039;MEE Dashboard&#039;,
	&#039;forms_selectdriver&#039; =&gt; &#039;Select Driver&#039;,
	&#039;forms_credssent&#039; =&gt; &#039;Credentials sent&#039;,
	&#039;profiles_gfs&#039; =&gt; &#039;&lt;b&gt;To place a MEE order on an applicant, please follow these steps:&lt;/b&gt;&lt;BR&gt;
Step 1 - click on edit beside candidate name below&lt;BR&gt;
Step 2 - select profile type, save&lt;BR&gt;
Step 3 - place order&#039;,
	&#039;forms_sin&#039; =&gt; &#039;SIN&#039;,
	&#039;forms_passplease&#039; =&gt; &#039;Please enter a password&#039;,
	&#039;forms_forceemail&#039; =&gt; &#039;Force email to&#039;,
	&#039;profiles_profiles&#039; =&gt; &#039;profiles&#039;,
	&#039;forms_failed&#039; =&gt; &#039;&#039;%name%&#039; (%value%) is not a valid %type%&#039;
]
$Trans = &#039;&#039;
$param = &#039;view&#039;
$param2 = &#039;View Profile&#039;
$checker = &#039;1&#039;
$tag = &#039;submitted_by_id&#039;
$title = &#039;Investigations Intake Form &ndash; Benefit Claims&#039;
$product = object(Cake\ORM\Entity) {

	&#039;new&#039; =&gt; false,
	&#039;accessible&#039; =&gt; [
		&#039;*&#039; =&gt; true
	],
	&#039;properties&#039; =&gt; [
		&#039;id&#039; =&gt; (int) 12,
		&#039;title&#039; =&gt; &#039;Sales&#039;,
		&#039;enable&#039; =&gt; (int) 1,
		&#039;ISB&#039; =&gt; (int) 1,
		&#039;titleFrench&#039; =&gt; &#039;Ventes&#039;,
		&#039;placesorders&#039; =&gt; (int) 1,
		&#039;caneditall&#039; =&gt; (int) 0
	],
	&#039;dirty&#039; =&gt; [],
	&#039;original&#039; =&gt; [],
	&#039;virtual&#039; =&gt; [],
	&#039;errors&#039; =&gt; [],
	&#039;repository&#039; =&gt; &#039;ProfileTypes&#039;

}
$alias = &#039;orders_gdo&#039;
$showit = false
$profile_types = [
	(int) 0 =&gt; &#039;5&#039;
]
$activetab = &#039;config&#039;
$gfs = &#039;0&#039;
$showcreds = true
$getProfileType = object(Cake\ORM\Entity) {

	&#039;new&#039; =&gt; false,
	&#039;accessible&#039; =&gt; [
		&#039;*&#039; =&gt; true
	],
	&#039;properties&#039; =&gt; [
		&#039;profile_type&#039; =&gt; (int) 1
	],
	&#039;dirty&#039; =&gt; [],
	&#039;original&#039; =&gt; [],
	&#039;virtual&#039; =&gt; [],
	&#039;errors&#039; =&gt; [],
	&#039;repository&#039; =&gt; &#039;Profiles&#039;

}
$client_id = &#039;1&#039;
$user_client = (int) 0
$gender = &#039;Male&#039;
$currentyear = &#039;1983&#039;
$currentmonth = &#039;07&#039;
$currentday = &#039;16&#039;
$now = &#039;2015&#039;
$temp = (int) 32
$delete = true
$desirednote = (int) -1
$pid = (int) 888
$notes = object(Cake\ORM\Query) {

	&#039;sql&#039; =&gt; &#039;SELECT `recruiter_notes`.`id` AS `recruiter_notes__id`, `recruiter_notes`.`driver_id` AS `recruiter_notes__driver_id`, `recruiter_notes`.`recruiter_id` AS `recruiter_notes__recruiter_id`, `recruiter_notes`.`description` AS `recruiter_notes__description`, `recruiter_notes`.`created` AS `recruiter_notes__created` FROM `recruiter_notes` `recruiter_notes` WHERE `driver_id` = :c0 ORDER BY `id` desc&#039;,
	&#039;params&#039; =&gt; [
		&#039;:c0&#039; =&gt; [
			[maximum depth reached]
		]
	],
	&#039;defaultTypes&#039; =&gt; [
		&#039;recruiter_notes.id&#039; =&gt; &#039;integer&#039;,
		&#039;id&#039; =&gt; &#039;integer&#039;,
		&#039;recruiter_notes.driver_id&#039; =&gt; &#039;integer&#039;,
		&#039;driver_id&#039; =&gt; &#039;integer&#039;,
		&#039;recruiter_notes.recruiter_id&#039; =&gt; &#039;integer&#039;,
		&#039;recruiter_id&#039; =&gt; &#039;integer&#039;,
		&#039;recruiter_notes.description&#039; =&gt; &#039;text&#039;,
		&#039;description&#039; =&gt; &#039;text&#039;,
		&#039;recruiter_notes.created&#039; =&gt; &#039;date&#039;,
		&#039;created&#039; =&gt; &#039;date&#039;
	],
	&#039;decorators&#039; =&gt; (int) 0,
	&#039;executed&#039; =&gt; true,
	&#039;hydrate&#039; =&gt; true,
	&#039;buffered&#039; =&gt; true,
	&#039;formatters&#039; =&gt; (int) 0,
	&#039;mapReducers&#039; =&gt; (int) 0,
	&#039;contain&#039; =&gt; [],
	&#039;matching&#039; =&gt; [],
	&#039;extraOptions&#039; =&gt; [],
	&#039;repository&#039; =&gt; object(Cake\ORM\Table) {}

}
$webroot = &#039;/veritas3-0/&#039;
$includeabove = true
$strings2 = [
	&#039;Date&#039; =&gt; &#039;1441201411&#039;,
	&#039;documents_pending&#039; =&gt; &#039;pending&#039;,
	&#039;orders_noresults&#039; =&gt; &#039;No orders found&#039;,
	&#039;file_download&#039; =&gt; &#039;Download&#039;,
	&#039;score_score&#039; =&gt; &#039;Order Score Sheet&#039;,
	&#039;score_view&#039; =&gt; &#039;View Order&#039;,
	&#039;score_road&#039; =&gt; &#039;Road Test Score&#039;,
	&#039;score_products&#039; =&gt; &#039;Products Ordered&#039;,
	&#039;score_docs&#039; =&gt; &#039;Documents Submitted&#039;,
	&#039;score_dupe&#039; =&gt; &#039;Duplicate Order&#039;,
	&#039;score_submitted&#039; =&gt; &#039;Submitted&#039;,
	&#039;score_skipped&#039; =&gt; &#039;Skipped&#039;,
	&#039;score_none&#039; =&gt; &#039;None&#039;,
	&#039;score_notattached&#039; =&gt; &#039;NOT ATTACHED&#039;,
	&#039;score_pass&#039; =&gt; &#039;PASS&#039;,
	&#039;score_discrepancies&#039; =&gt; &#039;DISCREPANCIES&#039;,
	&#039;score_coachingrequired&#039; =&gt; &#039;COACHING REQUIRED&#039;,
	&#039;score_verified&#039; =&gt; &#039;VERIFIED&#039;,
	&#039;score_potentialtosucceed&#039; =&gt; &#039;POTENTIAL TO SUCCEED&#039;,
	&#039;score_idealcandidate&#039; =&gt; &#039;IDEAL CANDIDATE&#039;,
	&#039;score_incomplete&#039; =&gt; &#039;INCOMPLETE&#039;,
	&#039;score_satisfactory&#039; =&gt; &#039;SATISFACTORY&#039;,
	&#039;score_requiresattention&#039; =&gt; &#039;REQUIRES ATTENTION&#039;,
	&#039;score_duplicateorder&#039; =&gt; &#039;DUPLICATE ORDER&#039;
]
$counting = (int) 0
$drcl_d = object(Cake\ORM\Query) {

	&#039;sql&#039; =&gt; &#039;SELECT `orders`.`id` AS `orders__id`, `orders`.`title` AS `orders__title`, `orders`.`description` AS `orders__description`, `orders`.`scale` AS `orders__scale`, `orders`.`reason` AS `orders__reason`, `orders`.`suggestion` AS `orders__suggestion`, `orders`.`user_id` AS `orders__user_id`, `orders`.`client_id` AS `orders__client_id`, `orders`.`uploaded_for` AS `orders__uploaded_for`, `orders`.`created` AS `orders__created`, `orders`.`division` AS `orders__division`, `orders`.`draft` AS `orders__draft`, `orders`.`conf_recruiter_name` AS `orders__conf_recruiter_name`, `orders`.`conf_driver_name` AS `orders__conf_driver_name`, `orders`.`conf_date` AS `orders__conf_date`, `orders`.`ins_id` AS `orders__ins_id`, `orders`.`ebs_id` AS `orders__ebs_id`, `orders`.`response` AS `orders__response`, `orders`.`ins_pdi` AS `orders__ins_pdi`, `orders`.`ebs_pdi` AS `orders__ebs_pdi`, `orders`.`recruiter_signature` AS `orders__recruiter_signature`, `orders`.`ins_79` AS `orders__ins_79`, `orders`.`ins_79_binary` AS `orders__ins_79_binary`, `orders`.`ins_1` AS `orders__ins_1`, `orders`.`ins_1_binary` AS `orders__ins_1_binary`, `orders`.`ins_14` AS `orders__ins_14`, `orders`.`ins_14_binary` AS `orders__ins_14_binary`, `orders`.`ins_77` AS `orders__ins_77`, `orders`.`ins_77_binary` AS `orders__ins_77_binary`, `orders`.`ins_78` AS `orders__ins_78`, `orders`.`ins_78_binary` AS `orders__ins_78_binary`, `orders`.`ebs_1603` AS `orders__ebs_1603`, `orders`.`ebs_1603_binary` AS `orders__ebs_1603_binary`, `orders`.`ebs_1627` AS `orders__ebs_1627`, `orders`.`ebs_1627_binary` AS `orders__ebs_1627_binary`, `orders`.`ebs_1650` AS `orders__ebs_1650`, `orders`.`ebs_1650_binary` AS `orders__ebs_1650_binary`, `orders`.`ins_72` AS `orders__ins_72`, `orders`.`ins_72_binary` AS `orders__ins_72_binary`, `orders`.`bright_planet` AS `orders__bright_planet`, `orders`.`final_show` AS `orders__final_show`, `orders`.`is_hired` AS `orders__is_hired`, `orders`.`bright_planet_binary` AS `orders__bright_planet_binary`, `orders`.`abc` AS `orders__abc`, `orders`.`bright_planet_html_binary` AS `orders__bright_planet_html_binary`, `orders`.`order_type` AS `orders__order_type`, `orders`.`forms` AS `orders__forms`, `orders`.`complete` AS `orders__complete`, `orders`.`ins_31` AS `orders__ins_31`, `orders`.`ins_31_binary` AS `orders__ins_31_binary`, `orders`.`ins_32` AS `orders__ins_32`, `orders`.`ins_32_binary` AS `orders__ins_32_binary`, `orders`.`complete_writing` AS `orders__complete_writing`, `Profiles`.`id` AS `Profiles__id`, `Profiles`.`title` AS `Profiles__title`, `Profiles`.`fname` AS `Profiles__fname`, `Profiles`.`lname` AS `Profiles__lname`, `Profiles`.`username` AS `Profiles__username`, `Profiles`.`email` AS `Profiles__email`, `Profiles`.`password` AS `Profiles__password`, `Profiles`.`driver` AS `Profiles__driver`, `Profiles`.`address` AS `Profiles__address`, `Profiles`.`street` AS `Profiles__street`, `Profiles`.`city` AS `Profiles__city`, `Profiles`.`province` AS `Profiles__province`, `Profiles`.`postal` AS `Profiles__postal`, `Profiles`.`country` AS `Profiles__country`, `Profiles`.`phone` AS `Profiles__phone`, `Profiles`.`image` AS `Profiles__image`, `Profiles`.`admin` AS `Profiles__admin`, `Profiles`.`super` AS `Profiles__super`, `Profiles`.`profile_type` AS `Profiles__profile_type`, `Profiles`.`driver_license_no` AS `Profiles__driver_license_no`, `Profiles`.`driver_province` AS `Profiles__driver_province`, `Profiles`.`us_dot` AS `Profiles__us_dot`, `Profiles`.`applicants_email` AS `Profiles__applicants_email`, `Profiles`.`transclick` AS `Profiles__transclick`, `Profiles`.`mname` AS `Profiles__mname`, `Profiles`.`dob` AS `Profiles__dob`, `Profiles`.`expiry_date` AS `Profiles__expiry_date`, `Profiles`.`gender` AS `Profiles__gender`, `Profiles`.`isb_id` AS `Profiles__isb_id`, `Profiles`.`placeofbirth` AS `Profiles__placeofbirth`, `Profiles`.`created_by` AS `Profiles__created_by`, `Profiles`.`created` AS `Profiles__created`, `Profiles`.`drafts` AS `Profiles__drafts`, `Profiles`.`is_hired` AS `Profiles__is_hired`, `Profiles`.`ptypes` AS `Profiles__ptypes`, `Profiles`.`ctypes` AS `Profiles__ctypes`, `Profiles`.`language` AS `Profiles__language`, `Profiles`.`automatic_email` AS `Profiles__automatic_email`, `Profiles`.`automatic_sent` AS `Profiles__automatic_sent`, `Profiles`.`hear` AS `Profiles__hear`, `Profiles`.`requalify` AS `Profiles__requalify`, `Profiles`.`hired_date` AS `Profiles__hired_date`, `Profiles`.`emailsent` AS `Profiles__emailsent`, `Profiles`.`send_to` AS `Profiles__send_to`, `Profiles`.`sin` AS `Profiles__sin`, `Profiles`.`otherinfo` AS `Profiles__otherinfo`, `Clients`.`id` AS `Clients__id`, `Clients`.`title` AS `Clients__title`, `Clients`.`description` AS `Clients__description`, `Clients`.`description_fre` AS `Clients__description_fre`, `Clients`.`company_name` AS `Clients__company_name`, `Clients`.`customer_type` AS `Clients__customer_type`, `Clients`.`sig_fname` AS `Clients__sig_fname`, `Clients`.`sig_lname` AS `Clients__sig_lname`, `Clients`.`company_phone` AS `Clients__company_phone`, `Clients`.`sig_email` AS `Clients__sig_email`, `Clients`.`company_address` AS `Clients__company_address`, `Clients`.`city` AS `Clients__city`, `Clients`.`postal` AS `Clients__postal`, `Clients`.`province` AS `Clients__province`, `Clients`.`country` AS `Clients__country`, `Clients`.`admin_fname` AS `Clients__admin_fname`, `Clients`.`admin_lname` AS `Clients__admin_lname`, `Clients`.`admin_email` AS `Clients__admin_email`, `Clients`.`admin_phone` AS `Clients__admin_phone`, `Clients`.`image` AS `Clients__image`, `Clients`.`site` AS `Clients__site`, `Clients`.`addedBy` AS `Clients__addedBy`, `Clients`.`isApproved` AS `Clients__isApproved`, `Clients`.`date_start` AS `Clients__date_start`, `Clients`.`date_end` AS `Clients__date_end`, `Clients`.`referred_by` AS `Clients__referred_by`, `Clients`.`agreement_number` AS `Clients__agreement_number`, `Clients`.`reverification` AS `Clients__reverification`, `Clients`.`sacc_number` AS `Clients__sacc_number`, `Clients`.`document` AS `Clients__document`, `Clients`.`billing_contact` AS `Clients__billing_contact`, `Clients`.`billing_address` AS `Clients__billing_address`, `Clients`.`billing_instructions` AS `Clients__billing_instructions`, `Clients`.`invoice_terms` AS `Clients__invoice_terms`, `Clients`.`recruiter_id` AS `Clients__recruiter_id`, `Clients`.`profile_id` AS `Clients__profile_id`, `Clients`.`contact_id` AS `Clients__contact_id`, `Clients`.`is_special` AS `Clients__is_special`, `Clients`.`status` AS `Clients__status`, `Clients`.`billing_city` AS `Clients__billing_city`, `Clients`.`billing_province` AS `Clients__billing_province`, `Clients`.`billing_postal_code` AS `Clients__billing_postal_code`, `Clients`.`division` AS `Clients__division`, `Clients`.`uploaded_for` AS `Clients__uploaded_for`, `Clients`.`created` AS `Clients__created`, `Clients`.`drafts` AS `Clients__drafts`, `Clients`.`client_date` AS `Clients__client_date`, `Clients`.`requalify_re` AS `Clients__requalify_re`, `Clients`.`requalify` AS `Clients__requalify`, `Clients`.`requalify_date` AS `Clients__requalify_date`, `Clients`.`requalify_frequency` AS `Clients__requalify_frequency`, `Clients`.`requalify_product` AS `Clients__requalify_product`, `Clients`.`forceemail` AS `Clients__forceemail` FROM `orders` `orders` LEFT JOIN `profiles` `Profiles` ON `Profiles`.`id` = (`orders`.`uploaded_for`) LEFT JOIN `clients` `Clients` ON `Clients`.`id` = (`orders`.`client_id`) WHERE (`orders`.`uploaded_for` = :c0 AND `orders`.`draft` = :c1) ORDER BY orders.id DESC&#039;,
	&#039;params&#039; =&gt; [
		&#039;:c0&#039; =&gt; [
			[maximum depth reached]
		],
		&#039;:c1&#039; =&gt; [
			[maximum depth reached]
		]
	],
	&#039;defaultTypes&#039; =&gt; [
		&#039;orders.id&#039; =&gt; &#039;integer&#039;,
		&#039;id&#039; =&gt; &#039;integer&#039;,
		&#039;orders.title&#039; =&gt; &#039;string&#039;,
		&#039;title&#039; =&gt; &#039;string&#039;,
		&#039;orders.description&#039; =&gt; &#039;text&#039;,
		&#039;description&#039; =&gt; &#039;text&#039;,
		&#039;orders.scale&#039; =&gt; &#039;integer&#039;,
		&#039;scale&#039; =&gt; &#039;integer&#039;,
		&#039;orders.reason&#039; =&gt; &#039;text&#039;,
		&#039;reason&#039; =&gt; &#039;text&#039;,
		&#039;orders.suggestion&#039; =&gt; &#039;text&#039;,
		&#039;suggestion&#039; =&gt; &#039;text&#039;,
		&#039;orders.user_id&#039; =&gt; &#039;integer&#039;,
		&#039;user_id&#039; =&gt; &#039;integer&#039;,
		&#039;orders.client_id&#039; =&gt; &#039;integer&#039;,
		&#039;client_id&#039; =&gt; &#039;integer&#039;,
		&#039;orders.uploaded_for&#039; =&gt; &#039;integer&#039;,
		&#039;uploaded_for&#039; =&gt; &#039;integer&#039;,
		&#039;orders.created&#039; =&gt; &#039;string&#039;,
		&#039;created&#039; =&gt; &#039;string&#039;,
		&#039;orders.division&#039; =&gt; &#039;string&#039;,
		&#039;division&#039; =&gt; &#039;string&#039;,
		&#039;orders.draft&#039; =&gt; &#039;integer&#039;,
		&#039;draft&#039; =&gt; &#039;integer&#039;,
		&#039;orders.conf_recruiter_name&#039; =&gt; &#039;string&#039;,
		&#039;conf_recruiter_name&#039; =&gt; &#039;string&#039;,
		&#039;orders.conf_driver_name&#039; =&gt; &#039;string&#039;,
		&#039;conf_driver_name&#039; =&gt; &#039;string&#039;,
		&#039;orders.conf_date&#039; =&gt; &#039;string&#039;,
		&#039;conf_date&#039; =&gt; &#039;string&#039;,
		&#039;orders.ins_id&#039; =&gt; &#039;string&#039;,
		&#039;ins_id&#039; =&gt; &#039;string&#039;,
		&#039;orders.ebs_id&#039; =&gt; &#039;string&#039;,
		&#039;ebs_id&#039; =&gt; &#039;string&#039;,
		&#039;orders.response&#039; =&gt; &#039;string&#039;,
		&#039;response&#039; =&gt; &#039;string&#039;,
		&#039;orders.ins_pdi&#039; =&gt; &#039;string&#039;,
		&#039;ins_pdi&#039; =&gt; &#039;string&#039;,
		&#039;orders.ebs_pdi&#039; =&gt; &#039;string&#039;,
		&#039;ebs_pdi&#039; =&gt; &#039;string&#039;,
		&#039;orders.recruiter_signature&#039; =&gt; &#039;string&#039;,
		&#039;recruiter_signature&#039; =&gt; &#039;string&#039;,
		&#039;orders.ins_79&#039; =&gt; &#039;text&#039;,
		&#039;ins_79&#039; =&gt; &#039;text&#039;,
		&#039;orders.ins_79_binary&#039; =&gt; &#039;text&#039;,
		&#039;ins_79_binary&#039; =&gt; &#039;text&#039;,
		&#039;orders.ins_1&#039; =&gt; &#039;text&#039;,
		&#039;ins_1&#039; =&gt; &#039;text&#039;,
		&#039;orders.ins_1_binary&#039; =&gt; &#039;text&#039;,
		&#039;ins_1_binary&#039; =&gt; &#039;text&#039;,
		&#039;orders.ins_14&#039; =&gt; &#039;text&#039;,
		&#039;ins_14&#039; =&gt; &#039;text&#039;,
		&#039;orders.ins_14_binary&#039; =&gt; &#039;text&#039;,
		&#039;ins_14_binary&#039; =&gt; &#039;text&#039;,
		&#039;orders.ins_77&#039; =&gt; &#039;text&#039;,
		&#039;ins_77&#039; =&gt; &#039;text&#039;,
		&#039;orders.ins_77_binary&#039; =&gt; &#039;text&#039;,
		&#039;ins_77_binary&#039; =&gt; &#039;text&#039;,
		&#039;orders.ins_78&#039; =&gt; &#039;text&#039;,
		&#039;ins_78&#039; =&gt; &#039;text&#039;,
		&#039;orders.ins_78_binary&#039; =&gt; &#039;text&#039;,
		&#039;ins_78_binary&#039; =&gt; &#039;text&#039;,
		&#039;orders.ebs_1603&#039; =&gt; &#039;text&#039;,
		&#039;ebs_1603&#039; =&gt; &#039;text&#039;,
		&#039;orders.ebs_1603_binary&#039; =&gt; &#039;text&#039;,
		&#039;ebs_1603_binary&#039; =&gt; &#039;text&#039;,
		&#039;orders.ebs_1627&#039; =&gt; &#039;text&#039;,
		&#039;ebs_1627&#039; =&gt; &#039;text&#039;,
		&#039;orders.ebs_1627_binary&#039; =&gt; &#039;text&#039;,
		&#039;ebs_1627_binary&#039; =&gt; &#039;text&#039;,
		&#039;orders.ebs_1650&#039; =&gt; &#039;text&#039;,
		&#039;ebs_1650&#039; =&gt; &#039;text&#039;,
		&#039;orders.ebs_1650_binary&#039; =&gt; &#039;text&#039;,
		&#039;ebs_1650_binary&#039; =&gt; &#039;text&#039;,
		&#039;orders.ins_72&#039; =&gt; &#039;text&#039;,
		&#039;ins_72&#039; =&gt; &#039;text&#039;,
		&#039;orders.ins_72_binary&#039; =&gt; &#039;text&#039;,
		&#039;ins_72_binary&#039; =&gt; &#039;text&#039;,
		&#039;orders.bright_planet&#039; =&gt; &#039;text&#039;,
		&#039;bright_planet&#039; =&gt; &#039;text&#039;,
		&#039;orders.final_show&#039; =&gt; &#039;boolean&#039;,
		&#039;final_show&#039; =&gt; &#039;boolean&#039;,
		&#039;orders.is_hired&#039; =&gt; &#039;integer&#039;,
		&#039;is_hired&#039; =&gt; &#039;integer&#039;,
		&#039;orders.bright_planet_binary&#039; =&gt; &#039;text&#039;,
		&#039;bright_planet_binary&#039; =&gt; &#039;text&#039;,
		&#039;orders.abc&#039; =&gt; &#039;integer&#039;,
		&#039;abc&#039; =&gt; &#039;integer&#039;,
		&#039;orders.bright_planet_html_binary&#039; =&gt; &#039;text&#039;,
		&#039;bright_planet_html_binary&#039; =&gt; &#039;text&#039;,
		&#039;orders.order_type&#039; =&gt; &#039;string&#039;,
		&#039;order_type&#039; =&gt; &#039;string&#039;,
		&#039;orders.forms&#039; =&gt; &#039;string&#039;,
		&#039;forms&#039; =&gt; &#039;string&#039;,
		&#039;orders.complete&#039; =&gt; &#039;integer&#039;,
		&#039;complete&#039; =&gt; &#039;integer&#039;,
		&#039;orders.ins_31&#039; =&gt; &#039;text&#039;,
		&#039;ins_31&#039; =&gt; &#039;text&#039;,
		&#039;orders.ins_31_binary&#039; =&gt; &#039;text&#039;,
		&#039;ins_31_binary&#039; =&gt; &#039;text&#039;,
		&#039;orders.ins_32&#039; =&gt; &#039;text&#039;,
		&#039;ins_32&#039; =&gt; &#039;text&#039;,
		&#039;orders.ins_32_binary&#039; =&gt; &#039;text&#039;,
		&#039;ins_32_binary&#039; =&gt; &#039;text&#039;,
		&#039;orders.complete_writing&#039; =&gt; &#039;integer&#039;,
		&#039;complete_writing&#039; =&gt; &#039;integer&#039;
	],
	&#039;decorators&#039; =&gt; (int) 0,
	&#039;executed&#039; =&gt; true,
	&#039;hydrate&#039; =&gt; true,
	&#039;buffered&#039; =&gt; true,
	&#039;formatters&#039; =&gt; (int) 0,
	&#039;mapReducers&#039; =&gt; (int) 0,
	&#039;contain&#039; =&gt; [
		&#039;Profiles&#039; =&gt; [[maximum depth reached]],
		&#039;Clients&#039; =&gt; [[maximum depth reached]],
		&#039;RoadTest&#039; =&gt; [[maximum depth reached]]
	],
	&#039;matching&#039; =&gt; [],
	&#039;extraOptions&#039; =&gt; [],
	&#039;repository&#039; =&gt; object(App\Model\Table\OrdersTable) {}

}
$drcld = object(Cake\ORM\Entity) {

	&#039;new&#039; =&gt; false,
	&#039;accessible&#039; =&gt; [
		&#039;*&#039; =&gt; true
	],
	&#039;properties&#039; =&gt; [
		&#039;id&#039; =&gt; (int) 783,
		&#039;title&#039; =&gt; &#039;order_888_2015-08-31 11:32:16&#039;,
		&#039;description&#039; =&gt; &#039;&#039;,
		&#039;scale&#039; =&gt; (int) 0,
		&#039;reason&#039; =&gt; &#039;&#039;,
		&#039;suggestion&#039; =&gt; &#039;&#039;,
		&#039;user_id&#039; =&gt; (int) 835,
		&#039;client_id&#039; =&gt; (int) 41,
		&#039;uploaded_for&#039; =&gt; (int) 888,
		&#039;created&#039; =&gt; &#039;2015-08-31 11:32:16&#039;,
		&#039;division&#039; =&gt; &#039;250&#039;,
		&#039;draft&#039; =&gt; (int) 0,
		&#039;conf_recruiter_name&#039; =&gt; &#039;Cristina Bruno&#039;,
		&#039;conf_driver_name&#039; =&gt; &#039;Beverly Hills&#039;,
		&#039;conf_date&#039; =&gt; &#039;2015-08-31  11:32:08&#039;,
		&#039;ins_id&#039; =&gt; &#039;832E76B5-C246-4F5E-B5AB-1342E348B097&#039;,
		&#039;ebs_id&#039; =&gt; &#039;40F357B0-6E52-4067-A8B3-B65FDBFC7CE5&#039;,
		&#039;response&#039; =&gt; null,
		&#039;ins_pdi&#039; =&gt; null,
		&#039;ebs_pdi&#039; =&gt; null,
		&#039;recruiter_signature&#039; =&gt; &#039;481088_647998.png&#039;,
		&#039;ins_79&#039; =&gt; null,
		&#039;ins_79_binary&#039; =&gt; null,
		&#039;ins_1&#039; =&gt; null,
		&#039;ins_1_binary&#039; =&gt; null,
		&#039;ins_14&#039; =&gt; null,
		&#039;ins_14_binary&#039; =&gt; null,
		&#039;ins_77&#039; =&gt; null,
		&#039;ins_77_binary&#039; =&gt; null,
		&#039;ins_78&#039; =&gt; null,
		&#039;ins_78_binary&#039; =&gt; null,
		&#039;ebs_1603&#039; =&gt; &#039;50743&#039;,
		&#039;ebs_1603_binary&#039; =&gt; null,
		&#039;ebs_1627&#039; =&gt; &#039;50742&#039;,
		&#039;ebs_1627_binary&#039; =&gt; null,
		&#039;ebs_1650&#039; =&gt; null,
		&#039;ebs_1650_binary&#039; =&gt; null,
		&#039;ins_72&#039; =&gt; &#039;&#039;,
		&#039;ins_72_binary&#039; =&gt; &#039;&#039;,
		&#039;bright_planet&#039; =&gt; null,
		&#039;final_show&#039; =&gt; false,
		&#039;is_hired&#039; =&gt; (int) 0,
		&#039;bright_planet_binary&#039; =&gt; &#039;&#039;,
		&#039;abc&#039; =&gt; null,
		&#039;bright_planet_html_binary&#039; =&gt; null,
		&#039;order_type&#039; =&gt; &#039;CAR&#039;,
		&#039;forms&#039; =&gt; &#039;1603,1627&#039;,
		&#039;complete&#039; =&gt; (int) 0,
		&#039;ins_31&#039; =&gt; null,
		&#039;ins_31_binary&#039; =&gt; null,
		&#039;ins_32&#039; =&gt; null,
		&#039;ins_32_binary&#039; =&gt; null,
		&#039;complete_writing&#039; =&gt; (int) 1,
		&#039;road_test&#039; =&gt; [[maximum depth reached]],
		&#039;client&#039; =&gt; object(Cake\ORM\Entity) {},
		&#039;profile&#039; =&gt; object(Cake\ORM\Entity) {}
	],
	&#039;dirty&#039; =&gt; [],
	&#039;original&#039; =&gt; [],
	&#039;virtual&#039; =&gt; [],
	&#039;errors&#039; =&gt; [],
	&#039;repository&#039; =&gt; &#039;orders&#039;

}
$DoIt = true
$document = object(Cake\ORM\Entity) {

	&#039;new&#039; =&gt; false,
	&#039;accessible&#039; =&gt; [
		&#039;*&#039; =&gt; true
	],
	&#039;properties&#039; =&gt; [
		&#039;id&#039; =&gt; (int) 2024,
		&#039;order_id&#039; =&gt; (int) 0,
		&#039;document_type&#039; =&gt; &#039;GFS Application for Employment&#039;,
		&#039;sub_doc_id&#039; =&gt; (int) 18,
		&#039;title&#039; =&gt; &#039;&#039;,
		&#039;description&#039; =&gt; &#039;&#039;,
		&#039;scale&#039; =&gt; (int) 0,
		&#039;reason&#039; =&gt; &#039;&#039;,
		&#039;suggestion&#039; =&gt; &#039;&#039;,
		&#039;user_id&#039; =&gt; (int) 888,
		&#039;client_id&#039; =&gt; (int) 41,
		&#039;uploaded_for&#039; =&gt; (int) 888,
		&#039;created&#039; =&gt; &#039;2015-08-31 11:27:01&#039;,
		&#039;draft&#039; =&gt; (int) 0,
		&#039;file&#039; =&gt; &#039;&#039;
	],
	&#039;dirty&#039; =&gt; [],
	&#039;original&#039; =&gt; [],
	&#039;virtual&#039; =&gt; [],
	&#039;errors&#039; =&gt; [],
	&#039;repository&#039; =&gt; &#039;documents&#039;

}
$line = &#039;odd&#039;
$fieldname = &#039;title&#039;
$subdocument = object(Cake\ORM\Entity) {

	&#039;new&#039; =&gt; false,
	&#039;accessible&#039; =&gt; [
		&#039;*&#039; =&gt; true
	],
	&#039;properties&#039; =&gt; [
		&#039;id&#039; =&gt; (int) 18,
		&#039;title&#039; =&gt; &#039;Application for Employment&#039;,
		&#039;display&#039; =&gt; (int) 1,
		&#039;form&#039; =&gt; &#039;application_for_employment_gfs.php&#039;,
		&#039;table_name&#039; =&gt; &#039;application_for_employment_gfs&#039;,
		&#039;orders&#039; =&gt; (int) 1,
		&#039;color_id&#039; =&gt; (int) 1,
		&#039;titleFrench&#039; =&gt; &#039;Demande d&#039;emploi&#039;,
		&#039;ProductID&#039; =&gt; (int) 1603,
		&#039;icon&#039; =&gt; &#039;&#039;
	],
	&#039;dirty&#039; =&gt; [],
	&#039;original&#039; =&gt; [],
	&#039;virtual&#039; =&gt; [],
	&#039;errors&#039; =&gt; [],
	&#039;repository&#039; =&gt; &#039;subdocuments&#039;

}
$k = (int) 10
$order = object(Cake\ORM\Entity) {

	&#039;new&#039; =&gt; false,
	&#039;accessible&#039; =&gt; [
		&#039;*&#039; =&gt; true
	],
	&#039;properties&#039; =&gt; [
		&#039;id&#039; =&gt; (int) 783,
		&#039;title&#039; =&gt; &#039;order_888_2015-08-31 11:32:16&#039;,
		&#039;description&#039; =&gt; &#039;&#039;,
		&#039;scale&#039; =&gt; (int) 0,
		&#039;reason&#039; =&gt; &#039;&#039;,
		&#039;suggestion&#039; =&gt; &#039;&#039;,
		&#039;user_id&#039; =&gt; (int) 835,
		&#039;client_id&#039; =&gt; (int) 41,
		&#039;uploaded_for&#039; =&gt; (int) 888,
		&#039;created&#039; =&gt; &#039;2015-08-31 11:32:16&#039;,
		&#039;division&#039; =&gt; &#039;250&#039;,
		&#039;draft&#039; =&gt; (int) 0,
		&#039;conf_recruiter_name&#039; =&gt; &#039;Cristina Bruno&#039;,
		&#039;conf_driver_name&#039; =&gt; &#039;Beverly Hills&#039;,
		&#039;conf_date&#039; =&gt; &#039;2015-08-31  11:32:08&#039;,
		&#039;ins_id&#039; =&gt; &#039;832E76B5-C246-4F5E-B5AB-1342E348B097&#039;,
		&#039;ebs_id&#039; =&gt; &#039;40F357B0-6E52-4067-A8B3-B65FDBFC7CE5&#039;,
		&#039;response&#039; =&gt; null,
		&#039;ins_pdi&#039; =&gt; null,
		&#039;ebs_pdi&#039; =&gt; null,
		&#039;recruiter_signature&#039; =&gt; &#039;481088_647998.png&#039;,
		&#039;ins_79&#039; =&gt; null,
		&#039;ins_79_binary&#039; =&gt; null,
		&#039;ins_1&#039; =&gt; null,
		&#039;ins_1_binary&#039; =&gt; null,
		&#039;ins_14&#039; =&gt; null,
		&#039;ins_14_binary&#039; =&gt; null,
		&#039;ins_77&#039; =&gt; null,
		&#039;ins_77_binary&#039; =&gt; null,
		&#039;ins_78&#039; =&gt; null,
		&#039;ins_78_binary&#039; =&gt; null,
		&#039;ebs_1603&#039; =&gt; &#039;50743&#039;,
		&#039;ebs_1603_binary&#039; =&gt; null,
		&#039;ebs_1627&#039; =&gt; &#039;50742&#039;,
		&#039;ebs_1627_binary&#039; =&gt; null,
		&#039;ebs_1650&#039; =&gt; null,
		&#039;ebs_1650_binary&#039; =&gt; null,
		&#039;ins_72&#039; =&gt; &#039;&#039;,
		&#039;ins_72_binary&#039; =&gt; &#039;&#039;,
		&#039;bright_planet&#039; =&gt; null,
		&#039;final_show&#039; =&gt; false,
		&#039;is_hired&#039; =&gt; (int) 0,
		&#039;bright_planet_binary&#039; =&gt; &#039;&#039;,
		&#039;abc&#039; =&gt; null,
		&#039;bright_planet_html_binary&#039; =&gt; null,
		&#039;order_type&#039; =&gt; &#039;CAR&#039;,
		&#039;forms&#039; =&gt; &#039;1603,1627&#039;,
		&#039;complete&#039; =&gt; (int) 0,
		&#039;ins_31&#039; =&gt; null,
		&#039;ins_31_binary&#039; =&gt; null,
		&#039;ins_32&#039; =&gt; null,
		&#039;ins_32_binary&#039; =&gt; null,
		&#039;complete_writing&#039; =&gt; (int) 1,
		&#039;road_test&#039; =&gt; [[maximum depth reached]],
		&#039;client&#039; =&gt; object(Cake\ORM\Entity) {},
		&#039;profile&#039; =&gt; object(Cake\ORM\Entity) {}
	],
	&#039;dirty&#039; =&gt; [],
	&#039;original&#039; =&gt; [],
	&#039;virtual&#039; =&gt; [],
	&#039;errors&#039; =&gt; [],
	&#039;repository&#039; =&gt; &#039;orders&#039;

}
$forms = &#039;1603,1627&#039;
$forms_arr = [
	(int) 0 =&gt; &#039;1603&#039;,
	(int) 1 =&gt; &#039;1627&#039;
]
$uploaded_by = object(Cake\ORM\Entity) {

	&#039;new&#039; =&gt; false,
	&#039;accessible&#039; =&gt; [
		&#039;*&#039; =&gt; true
	],
	&#039;properties&#039; =&gt; [
		&#039;id&#039; =&gt; (int) 835,
		&#039;title&#039; =&gt; &#039;Mr&#039;,
		&#039;fname&#039; =&gt; &#039;Cristina&#039;,
		&#039;lname&#039; =&gt; &#039;Bruno&#039;,
		&#039;username&#039; =&gt; &#039;c.bruno@callcpc.com&#039;,
		&#039;email&#039; =&gt; &#039;info@trinoweb.com&#039;,
		&#039;password&#039; =&gt; &#039;90a10c4f404b44387d29231477653b71&#039;,
		&#039;driver&#039; =&gt; null,
		&#039;address&#039; =&gt; &#039;&#039;,
		&#039;street&#039; =&gt; &#039;1415 Bonhill rd&#039;,
		&#039;city&#039; =&gt; &#039;Mississauga&#039;,
		&#039;province&#039; =&gt; &#039;ON&#039;,
		&#039;postal&#039; =&gt; &#039;L5T1R2&#039;,
		&#039;country&#039; =&gt; &#039;Canada&#039;,
		&#039;phone&#039; =&gt; &#039;905 564-6040&#039;,
		&#039;image&#039; =&gt; &#039;default.png&#039;,
		&#039;admin&#039; =&gt; (int) 0,
		&#039;super&#039; =&gt; (int) 0,
		&#039;profile_type&#039; =&gt; (int) 2,
		&#039;driver_license_no&#039; =&gt; &#039;&#039;,
		&#039;driver_province&#039; =&gt; &#039;&#039;,
		&#039;us_dot&#039; =&gt; null,
		&#039;applicants_email&#039; =&gt; null,
		&#039;transclick&#039; =&gt; null,
		&#039;mname&#039; =&gt; &#039;&#039;,
		&#039;dob&#039; =&gt; &#039;2015-12-01&#039;,
		&#039;expiry_date&#039; =&gt; &#039;&#039;,
		&#039;gender&#039; =&gt; &#039;Female&#039;,
		&#039;isb_id&#039; =&gt; &#039;22552&#039;,
		&#039;placeofbirth&#039; =&gt; &#039;&#039;,
		&#039;created_by&#039; =&gt; (int) 4,
		&#039;created&#039; =&gt; &#039;2015-08-18&#039;,
		&#039;drafts&#039; =&gt; (int) 0,
		&#039;is_hired&#039; =&gt; false,
		&#039;ptypes&#039; =&gt; &#039;5,7,8&#039;,
		&#039;ctypes&#039; =&gt; &#039;&#039;,
		&#039;language&#039; =&gt; &#039;English&#039;,
		&#039;automatic_email&#039; =&gt; (int) 0,
		&#039;automatic_sent&#039; =&gt; (int) 0,
		&#039;hear&#039; =&gt; &#039;Referral&#039;,
		&#039;requalify&#039; =&gt; (int) 0,
		&#039;hired_date&#039; =&gt; &#039;&#039;,
		&#039;emailsent&#039; =&gt; &#039;2015-08-18 09:55:02&#039;,
		&#039;send_to&#039; =&gt; (int) 0,
		&#039;sin&#039; =&gt; &#039;&#039;,
		&#039;otherinfo&#039; =&gt; &#039;&#039;
	],
	&#039;dirty&#039; =&gt; [],
	&#039;original&#039; =&gt; [],
	&#039;virtual&#039; =&gt; [],
	&#039;errors&#039; =&gt; [],
	&#039;repository&#039; =&gt; &#039;Profiles&#039;

}
$Fieldname = &#039;title&#039;
$pp = &#039;1627&#039;
$title_pr = object(Cake\ORM\Entity) {

	&#039;new&#039; =&gt; false,
	&#039;accessible&#039; =&gt; [
		&#039;*&#039; =&gt; true
	],
	&#039;properties&#039; =&gt; [
		&#039;id&#039; =&gt; (int) 7,
		&#039;title&#039; =&gt; &#039;Letter Of Experience&#039;,
		&#039;enable&#039; =&gt; (int) 1,
		&#039;number&#039; =&gt; (int) 1627,
		&#039;titleFrench&#039; =&gt; &#039;Lettre d’expérience&#039;
	],
	&#039;dirty&#039; =&gt; [],
	&#039;original&#039; =&gt; [],
	&#039;virtual&#039; =&gt; [],
	&#039;errors&#039; =&gt; [],
	&#039;repository&#039; =&gt; &#039;order_products&#039;

}
$duplicate_log = &#039;&#039;
$doc = object(Cake\ORM\ResultSet) {

	&#039;query&#039; =&gt; object(Cake\ORM\Query) {},
	&#039;items&#039; =&gt; [
		(int) 0 =&gt; object(Cake\ORM\Entity) {},
		(int) 1 =&gt; object(Cake\ORM\Entity) {},
		(int) 2 =&gt; object(Cake\ORM\Entity) {},
		(int) 3 =&gt; object(Cake\ORM\Entity) {},
		(int) 4 =&gt; object(Cake\ORM\Entity) {},
		(int) 5 =&gt; object(Cake\ORM\Entity) {},
		(int) 6 =&gt; object(Cake\ORM\Entity) {},
		(int) 7 =&gt; object(Cake\ORM\Entity) {},
		(int) 8 =&gt; object(Cake\ORM\Entity) {},
		(int) 9 =&gt; object(Cake\ORM\Entity) {},
		(int) 10 =&gt; object(Cake\ORM\Entity) {},
		(int) 11 =&gt; object(Cake\ORM\Entity) {},
		(int) 12 =&gt; object(Cake\ORM\Entity) {},
		(int) 13 =&gt; object(Cake\ORM\Entity) {},
		(int) 14 =&gt; object(Cake\ORM\Entity) {},
		(int) 15 =&gt; object(Cake\ORM\Entity) {},
		(int) 16 =&gt; object(Cake\ORM\Entity) {},
		(int) 17 =&gt; object(Cake\ORM\Entity) {},
		(int) 18 =&gt; object(Cake\ORM\Entity) {}
	]

}
$docfind = (int) 3
$d = object(Cake\ORM\Entity) {

	&#039;new&#039; =&gt; false,
	&#039;accessible&#039; =&gt; [
		&#039;*&#039; =&gt; true
	],
	&#039;properties&#039; =&gt; [
		&#039;id&#039; =&gt; (int) 23,
		&#039;title&#039; =&gt; &#039;Investigations Intake Form &ndash; Benefit Claims&#039;,
		&#039;display&#039; =&gt; (int) 1,
		&#039;form&#039; =&gt; &#039;investigations_intake_form_benefit_claims.php&#039;,
		&#039;table_name&#039; =&gt; &#039;investigations_intake_form_benefit_claims&#039;,
		&#039;orders&#039; =&gt; (int) 1,
		&#039;color_id&#039; =&gt; (int) 1,
		&#039;titleFrench&#039; =&gt; &#039;Enquêtes formulaire d&#039;admission - Revendications prestations&#039;,
		&#039;ProductID&#039; =&gt; (int) 1603,
		&#039;icon&#039; =&gt; &#039;&#039;
	],
	&#039;dirty&#039; =&gt; [],
	&#039;original&#039; =&gt; [],
	&#039;virtual&#039; =&gt; [],
	&#039;errors&#039; =&gt; [],
	&#039;repository&#039; =&gt; &#039;subdocuments&#039;

}
$sub_doc_id = (int) 23
$o_id = (int) 783
$c_id = (int) 41
$d_id = null
$files = object(Cake\ORM\Query) {

	&#039;sql&#039; =&gt; &#039;SELECT `doc_attachments`.`id` AS `doc_attachments__id`, `doc_attachments`.`order_id` AS `doc_attachments__order_id`, `doc_attachments`.`document_id` AS `doc_attachments__document_id`, `doc_attachments`.`attachment` AS `doc_attachments__attachment`, `doc_attachments`.`sub_id` AS `doc_attachments__sub_id`, `doc_attachments`.`attach_doc` AS `doc_attachments__attach_doc` FROM `doc_attachments` `doc_attachments` WHERE `order_id` = :c0&#039;,
	&#039;params&#039; =&gt; [
		&#039;:c0&#039; =&gt; [
			[maximum depth reached]
		]
	],
	&#039;defaultTypes&#039; =&gt; [
		&#039;doc_attachments.id&#039; =&gt; &#039;integer&#039;,
		&#039;id&#039; =&gt; &#039;integer&#039;,
		&#039;doc_attachments.order_id&#039; =&gt; &#039;integer&#039;,
		&#039;order_id&#039; =&gt; &#039;integer&#039;,
		&#039;doc_attachments.document_id&#039; =&gt; &#039;integer&#039;,
		&#039;document_id&#039; =&gt; &#039;integer&#039;,
		&#039;doc_attachments.attachment&#039; =&gt; &#039;string&#039;,
		&#039;attachment&#039; =&gt; &#039;string&#039;,
		&#039;doc_attachments.sub_id&#039; =&gt; &#039;integer&#039;,
		&#039;sub_id&#039; =&gt; &#039;integer&#039;,
		&#039;doc_attachments.attach_doc&#039; =&gt; &#039;string&#039;,
		&#039;attach_doc&#039; =&gt; &#039;string&#039;
	],
	&#039;decorators&#039; =&gt; (int) 0,
	&#039;executed&#039; =&gt; true,
	&#039;hydrate&#039; =&gt; true,
	&#039;buffered&#039; =&gt; true,
	&#039;formatters&#039; =&gt; (int) 0,
	&#039;mapReducers&#039; =&gt; (int) 0,
	&#039;contain&#039; =&gt; [],
	&#039;matching&#039; =&gt; [],
	&#039;extraOptions&#039; =&gt; [],
	&#039;repository&#039; =&gt; object(Cake\ORM\Table) {}

}
$docu_id = (int) 2030
$cnt = (int) 0
$BypassLogin = false
$block = null
$isadmin = false
$is_disabled1 = &#039;&#039;
$doit = true
$pt = [
	(int) 0 =&gt; &#039;&#039;
]
$name = &#039;side[orders_gdo]&#039;
$subdoc = [
	(int) 0 =&gt; object(Cake\ORM\Entity) {

		&#039;new&#039; =&gt; false,
		&#039;accessible&#039; =&gt; [
			[maximum depth reached]
		],
		&#039;properties&#039; =&gt; [
			[maximum depth reached]
		],
		&#039;dirty&#039; =&gt; [
			[maximum depth reached]
		],
		&#039;original&#039; =&gt; [[maximum depth reached]],
		&#039;virtual&#039; =&gt; [[maximum depth reached]],
		&#039;errors&#039; =&gt; [[maximum depth reached]],
		&#039;repository&#039; =&gt; &#039;Subdocuments&#039;
	
	},
	(int) 1 =&gt; object(Cake\ORM\Entity) {

		&#039;new&#039; =&gt; false,
		&#039;accessible&#039; =&gt; [
			[maximum depth reached]
		],
		&#039;properties&#039; =&gt; [
			[maximum depth reached]
		],
		&#039;dirty&#039; =&gt; [
			[maximum depth reached]
		],
		&#039;original&#039; =&gt; [[maximum depth reached]],
		&#039;virtual&#039; =&gt; [[maximum depth reached]],
		&#039;errors&#039; =&gt; [[maximum depth reached]],
		&#039;repository&#039; =&gt; &#039;Subdocuments&#039;
	
	},
	(int) 2 =&gt; object(Cake\ORM\Entity) {

		&#039;new&#039; =&gt; false,
		&#039;accessible&#039; =&gt; [
			[maximum depth reached]
		],
		&#039;properties&#039; =&gt; [
			[maximum depth reached]
		],
		&#039;dirty&#039; =&gt; [
			[maximum depth reached]
		],
		&#039;original&#039; =&gt; [[maximum depth reached]],
		&#039;virtual&#039; =&gt; [[maximum depth reached]],
		&#039;errors&#039; =&gt; [[maximum depth reached]],
		&#039;repository&#039; =&gt; &#039;Subdocuments&#039;
	
	},
	(int) 3 =&gt; object(Cake\ORM\Entity) {

		&#039;new&#039; =&gt; false,
		&#039;accessible&#039; =&gt; [
			[maximum depth reached]
		],
		&#039;properties&#039; =&gt; [
			[maximum depth reached]
		],
		&#039;dirty&#039; =&gt; [
			[maximum depth reached]
		],
		&#039;original&#039; =&gt; [[maximum depth reached]],
		&#039;virtual&#039; =&gt; [[maximum depth reached]],
		&#039;errors&#039; =&gt; [[maximum depth reached]],
		&#039;repository&#039; =&gt; &#039;Subdocuments&#039;
	
	},
	(int) 4 =&gt; object(Cake\ORM\Entity) {

		&#039;new&#039; =&gt; false,
		&#039;accessible&#039; =&gt; [
			[maximum depth reached]
		],
		&#039;properties&#039; =&gt; [
			[maximum depth reached]
		],
		&#039;dirty&#039; =&gt; [
			[maximum depth reached]
		],
		&#039;original&#039; =&gt; [[maximum depth reached]],
		&#039;virtual&#039; =&gt; [[maximum depth reached]],
		&#039;errors&#039; =&gt; [[maximum depth reached]],
		&#039;repository&#039; =&gt; &#039;Subdocuments&#039;
	
	},
	(int) 5 =&gt; object(Cake\ORM\Entity) {

		&#039;new&#039; =&gt; false,
		&#039;accessible&#039; =&gt; [
			[maximum depth reached]
		],
		&#039;properties&#039; =&gt; [
			[maximum depth reached]
		],
		&#039;dirty&#039; =&gt; [
			[maximum depth reached]
		],
		&#039;original&#039; =&gt; [[maximum depth reached]],
		&#039;virtual&#039; =&gt; [[maximum depth reached]],
		&#039;errors&#039; =&gt; [[maximum depth reached]],
		&#039;repository&#039; =&gt; &#039;Subdocuments&#039;
	
	},
	(int) 6 =&gt; object(Cake\ORM\Entity) {

		&#039;new&#039; =&gt; false,
		&#039;accessible&#039; =&gt; [
			[maximum depth reached]
		],
		&#039;properties&#039; =&gt; [
			[maximum depth reached]
		],
		&#039;dirty&#039; =&gt; [
			[maximum depth reached]
		],
		&#039;original&#039; =&gt; [[maximum depth reached]],
		&#039;virtual&#039; =&gt; [[maximum depth reached]],
		&#039;errors&#039; =&gt; [[maximum depth reached]],
		&#039;repository&#039; =&gt; &#039;Subdocuments&#039;
	
	},
	(int) 7 =&gt; object(Cake\ORM\Entity) {

		&#039;new&#039; =&gt; false,
		&#039;accessible&#039; =&gt; [
			[maximum depth reached]
		],
		&#039;properties&#039; =&gt; [
			[maximum depth reached]
		],
		&#039;dirty&#039; =&gt; [
			[maximum depth reached]
		],
		&#039;original&#039; =&gt; [[maximum depth reached]],
		&#039;virtual&#039; =&gt; [[maximum depth reached]],
		&#039;errors&#039; =&gt; [[maximum depth reached]],
		&#039;repository&#039; =&gt; &#039;Subdocuments&#039;
	
	},
	(int) 8 =&gt; object(Cake\ORM\Entity) {

		&#039;new&#039; =&gt; false,
		&#039;accessible&#039; =&gt; [
			[maximum depth reached]
		],
		&#039;properties&#039; =&gt; [
			[maximum depth reached]
		],
		&#039;dirty&#039; =&gt; [
			[maximum depth reached]
		],
		&#039;original&#039; =&gt; [[maximum depth reached]],
		&#039;virtual&#039; =&gt; [[maximum depth reached]],
		&#039;errors&#039; =&gt; [[maximum depth reached]],
		&#039;repository&#039; =&gt; &#039;Subdocuments&#039;
	
	},
	(int) 9 =&gt; object(Cake\ORM\Entity) {

		&#039;new&#039; =&gt; false,
		&#039;accessible&#039; =&gt; [
			[maximum depth reached]
		],
		&#039;properties&#039; =&gt; [
			[maximum depth reached]
		],
		&#039;dirty&#039; =&gt; [
			[maximum depth reached]
		],
		&#039;original&#039; =&gt; [[maximum depth reached]],
		&#039;virtual&#039; =&gt; [[maximum depth reached]],
		&#039;errors&#039; =&gt; [[maximum depth reached]],
		&#039;repository&#039; =&gt; &#039;Subdocuments&#039;
	
	},
	(int) 10 =&gt; object(Cake\ORM\Entity) {

		&#039;new&#039; =&gt; false,
		&#039;accessible&#039; =&gt; [
			[maximum depth reached]
		],
		&#039;properties&#039; =&gt; [
			[maximum depth reached]
		],
		&#039;dirty&#039; =&gt; [
			[maximum depth reached]
		],
		&#039;original&#039; =&gt; [[maximum depth reached]],
		&#039;virtual&#039; =&gt; [[maximum depth reached]],
		&#039;errors&#039; =&gt; [[maximum depth reached]],
		&#039;repository&#039; =&gt; &#039;Subdocuments&#039;
	
	},
	(int) 11 =&gt; object(Cake\ORM\Entity) {

		&#039;new&#039; =&gt; false,
		&#039;accessible&#039; =&gt; [
			[maximum depth reached]
		],
		&#039;properties&#039; =&gt; [
			[maximum depth reached]
		],
		&#039;dirty&#039; =&gt; [
			[maximum depth reached]
		],
		&#039;original&#039; =&gt; [[maximum depth reached]],
		&#039;virtual&#039; =&gt; [[maximum depth reached]],
		&#039;errors&#039; =&gt; [[maximum depth reached]],
		&#039;repository&#039; =&gt; &#039;Subdocuments&#039;
	
	},
	(int) 12 =&gt; object(Cake\ORM\Entity) {

		&#039;new&#039; =&gt; false,
		&#039;accessible&#039; =&gt; [
			[maximum depth reached]
		],
		&#039;properties&#039; =&gt; [
			[maximum depth reached]
		],
		&#039;dirty&#039; =&gt; [
			[maximum depth reached]
		],
		&#039;original&#039; =&gt; [[maximum depth reached]],
		&#039;virtual&#039; =&gt; [[maximum depth reached]],
		&#039;errors&#039; =&gt; [[maximum depth reached]],
		&#039;repository&#039; =&gt; &#039;Subdocuments&#039;
	
	},
	(int) 13 =&gt; object(Cake\ORM\Entity) {

		&#039;new&#039; =&gt; false,
		&#039;accessible&#039; =&gt; [
			[maximum depth reached]
		],
		&#039;properties&#039; =&gt; [
			[maximum depth reached]
		],
		&#039;dirty&#039; =&gt; [
			[maximum depth reached]
		],
		&#039;original&#039; =&gt; [[maximum depth reached]],
		&#039;virtual&#039; =&gt; [[maximum depth reached]],
		&#039;errors&#039; =&gt; [[maximum depth reached]],
		&#039;repository&#039; =&gt; &#039;Subdocuments&#039;
	
	},
	(int) 14 =&gt; object(Cake\ORM\Entity) {

		&#039;new&#039; =&gt; false,
		&#039;accessible&#039; =&gt; [
			[maximum depth reached]
		],
		&#039;properties&#039; =&gt; [
			[maximum depth reached]
		],
		&#039;dirty&#039; =&gt; [
			[maximum depth reached]
		],
		&#039;original&#039; =&gt; [[maximum depth reached]],
		&#039;virtual&#039; =&gt; [[maximum depth reached]],
		&#039;errors&#039; =&gt; [[maximum depth reached]],
		&#039;repository&#039; =&gt; &#039;Subdocuments&#039;
	
	},
	(int) 15 =&gt; object(Cake\ORM\Entity) {

		&#039;new&#039; =&gt; false,
		&#039;accessible&#039; =&gt; [
			[maximum depth reached]
		],
		&#039;properties&#039; =&gt; [
			[maximum depth reached]
		],
		&#039;dirty&#039; =&gt; [
			[maximum depth reached]
		],
		&#039;original&#039; =&gt; [[maximum depth reached]],
		&#039;virtual&#039; =&gt; [[maximum depth reached]],
		&#039;errors&#039; =&gt; [[maximum depth reached]],
		&#039;repository&#039; =&gt; &#039;Subdocuments&#039;
	
	},
	(int) 16 =&gt; object(Cake\ORM\Entity) {

		&#039;new&#039; =&gt; false,
		&#039;accessible&#039; =&gt; [
			[maximum depth reached]
		],
		&#039;properties&#039; =&gt; [
			[maximum depth reached]
		],
		&#039;dirty&#039; =&gt; [
			[maximum depth reached]
		],
		&#039;original&#039; =&gt; [[maximum depth reached]],
		&#039;virtual&#039; =&gt; [[maximum depth reached]],
		&#039;errors&#039; =&gt; [[maximum depth reached]],
		&#039;repository&#039; =&gt; &#039;Subdocuments&#039;
	
	},
	(int) 17 =&gt; object(Cake\ORM\Entity) {

		&#039;new&#039; =&gt; false,
		&#039;accessible&#039; =&gt; [
			[maximum depth reached]
		],
		&#039;properties&#039; =&gt; [
			[maximum depth reached]
		],
		&#039;dirty&#039; =&gt; [
			[maximum depth reached]
		],
		&#039;original&#039; =&gt; [[maximum depth reached]],
		&#039;virtual&#039; =&gt; [[maximum depth reached]],
		&#039;errors&#039; =&gt; [[maximum depth reached]],
		&#039;repository&#039; =&gt; &#039;Subdocuments&#039;
	
	},
	(int) 18 =&gt; object(Cake\ORM\Entity) {

		&#039;new&#039; =&gt; false,
		&#039;accessible&#039; =&gt; [
			[maximum depth reached]
		],
		&#039;properties&#039; =&gt; [
			[maximum depth reached]
		],
		&#039;dirty&#039; =&gt; [
			[maximum depth reached]
		],
		&#039;original&#039; =&gt; [[maximum depth reached]],
		&#039;virtual&#039; =&gt; [[maximum depth reached]],
		&#039;errors&#039; =&gt; [[maximum depth reached]],
		&#039;repository&#039; =&gt; &#039;Subdocuments&#039;
	
	}
]
$sub = object(Cake\ORM\Entity) {

	&#039;new&#039; =&gt; false,
	&#039;accessible&#039; =&gt; [
		&#039;*&#039; =&gt; true
	],
	&#039;properties&#039; =&gt; [
		&#039;id&#039; =&gt; (int) 15,
		&#039;title&#039; =&gt; &#039;Upload ID/Documents&#039;,
		&#039;display&#039; =&gt; (int) 1,
		&#039;form&#039; =&gt; &#039;mee_attach.php&#039;,
		&#039;table_name&#039; =&gt; &#039;mee_attachments&#039;,
		&#039;orders&#039; =&gt; (int) 1,
		&#039;color_id&#039; =&gt; (int) 1,
		&#039;titleFrench&#039; =&gt; &#039;Télécharger ID/Documents&#039;,
		&#039;ProductID&#039; =&gt; (int) 1603,
		&#039;icon&#039; =&gt; &#039;&#039;,
		&#039;forms&#039; =&gt; (int) 1603,
		&#039;subdoc&#039; =&gt; null
	],
	&#039;dirty&#039; =&gt; [
		&#039;forms&#039; =&gt; true,
		&#039;subdoc&#039; =&gt; true
	],
	&#039;original&#039; =&gt; [],
	&#039;virtual&#039; =&gt; [],
	&#039;errors&#039; =&gt; [],
	&#039;repository&#039; =&gt; &#039;Subdocuments&#039;

}
$prosubdoc = null
$count = (int) 7
$b = (int) 7
$pro_ids = [
	(int) 0 =&gt; &#039;4&#039;,
	(int) 1 =&gt; &#039;834&#039;,
	(int) 2 =&gt; &#039;835&#039;,
	(int) 3 =&gt; &#039;862&#039;,
	(int) 4 =&gt; &#039;871&#039;,
	(int) 5 =&gt; &#039;872&#039;,
	(int) 6 =&gt; &#039;884&#039;,
	(int) 7 =&gt; &#039;885&#039;,
	(int) 8 =&gt; &#039;886&#039;,
	(int) 9 =&gt; &#039;887&#039;,
	(int) 10 =&gt; &#039;888&#039;
]
$ct = [
	(int) 0 =&gt; &#039;&#039;
]</pre><pre class="stack-trace">include - ROOT\webroot\subpages\profile\ctype.php, line 30
include - ROOT\webroot\subpages\profile\block.php, line 1372
include - APP/Template\Profiles\edit.ctp, line 392
Cake\View\View::_evaluate() - CORE\src\View\View.php, line 815
Cake\View\View::_render() - CORE\src\View\View.php, line 775
Cake\View\View::render() - CORE\src\View\View.php, line 463
Cake\Controller\Controller::render() - CORE\src\Controller\Controller.php, line 576
App\Controller\ProfilesController::view() - APP/Controller\ProfilesController.php, line 1015
Cake\Controller\Controller::invokeAction() - CORE\src\Controller\Controller.php, line 405
Cake\Routing\Dispatcher::_invoke() - CORE\src\Routing\Dispatcher.php, line 114
Cake\Routing\Dispatcher::dispatch() - CORE\src\Routing\Dispatcher.php, line 87
[main] - ROOT\webroot\index.php, line 37</pre></div></pre>                <tr>
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
            url:"/veritas3-0/profiles/ctypesenb/"+id,
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
        if (Q&gt;-1){
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
                url: "/veritas3-0/profiles/ptypesenb/" + id,
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
                url: "/veritas3-0/profiles/ctypesenb/" + id,
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
                url: '/veritas3-0/profiles/blocks',
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
                url: '/veritas3-0/profiles/homeblocks',
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
                url: '/veritas3-0/profiles/displaySubdocs/888',
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
            action: "/veritas3-0/profiles/upload_img/888",
            name: 'myfile',
            onSubmit: function (file, ext) {
                button.text('Uploading...');
                this.disable();
                interval = window.setInterval(function () {
                    var text = button.text();
                    if (text.length &lt; 13) {
                        button.text(text + '.');
                    } else {
                        button.text('Uploading...');
                    }
                }, 200);
            },
            onComplete: function (file, response) {
                button.html('&lt;i class="fa fa-image"&gt;&lt;/i&gt; Add/Edit Image');
                window.clearInterval(interval);
                this.enable();
                $("#clientpic").attr("src", '/veritas3-0/img/profile/' + response);
                $('#client_img').val(response);
                alert('Data saved successfully');
            }
        });
    }
    $(function () {

                $('.addclientz').click(function () {
            var client_id = $(this).val();
            var addclient = "";
            var msg = '';
            var nameId = 'msg_' + $(this).val();
            if ($(this).is(':checked')) {
                addclient = '1';
                msg = '&lt;span class="msg" style="color:#45B6AF"&gt; Added&lt;/span&gt;';
            }
            else {
                addclient = '0';
                msg = '&lt;span class="msg" style="color:red"&gt; Removed&lt;/span&gt;';
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
                data: "client_id=" + client_id + "&amp;add=" + addclient + "&amp;user_id=" +888,
                url: "/veritas3-0/clients/addprofile",
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
            
            if(dd&lt;10) {
                dd='0'+dd
            } 
            
            if(mm&lt;10) {
                mm='0'+mm
            } 
            var tday = Y+'-'+mm+'-'+dd;
            if ($(this).is(":checked")) {
                var hired = 1;
                var hired_date = tday;
                msg = '&lt;span class="msg" style="color:#45B6AF"&gt; Added&lt;/span&gt;';
                $('.date_hired').val(tday);
                $('.hired_date').show();
            }
            else {
                var hired = 0;
                var hired_date = '0000-00-00';
                msg = '&lt;span class="msg" style="color:red"&gt; Removed&lt;/span&gt;';
                $('.date_hired').val('0000-00-00');
                $('.hired_date').hide();
            }

            $.ajax({
                url: "/veritas3-0/orders/savedriver/" + oid,
                type: 'post',
                data: 'is_hired=' + hired+'&amp;hired_date='+hired_date,
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
                msg = '&lt;span class="msg" style="color:#45B6AF"&gt; Added&lt;/span&gt;';
            }
            else {
                var hired = 0;
                msg = '&lt;span class="msg" style="color:red"&gt; Removed&lt;/span&gt;';
            }

            $.ajax({
                url: "/veritas3-0/orders/requalify/" + oid,
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
         msg = '&lt;span class="msg" style="color:#45B6AF"&gt; Added&lt;/span&gt;';

         var url = '
        /veritas3-0/clients/assignProfile/' + $(this).val() + '/
        888/yes';
         }
         else {
         msg = '&lt;span class="msg" style="color:red"&gt;Removed&lt;/span&gt;';
         var url = '
        /veritas3-0/clients/assignProfile/' + $(this).val() + '/
        888/no';
         }

         $.ajax({url: url,success:function(){$('.'+nameId).html(msg);}});
         }); */
    });
</script>
<script>
        function searchClient() {
        var key = $('#searchClient').val();
        $('#clientTable').html('&lt;tbody&gt;&lt;tr&gt;&lt;td&gt;&lt;img src="/veritas3-0/assets/admin/layout/img/ajax-loading.gif"/&gt;&lt;/td&gt;&lt;/tr&gt;&lt;/tbody&gt;');
        $.ajax({
            url: '/veritas3-0/clients/getAjaxClient',
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
    // $this-&gt;request-&gt;webroot . 'clients/quickcontact?Type=emailout&amp;user_id=' . $profile-&gt;id
    function sendemails() {
        $.ajax({
            url: '/veritas3-0/clients/quickcontact',
            data: 'Type=emailout&amp;user_id=' + '888',
            type: 'get',
            success: function (res) {
                //alert(res);
                setinnerHTML("removethis", res + ' &lt;i class="fa fa-check"&gt;&lt;/i&gt;');
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