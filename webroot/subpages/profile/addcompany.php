<?php
    include(APP."../application/signature.php");

    //$EmbeddedMode=true;
    //include(APP."../src/Template/Excel/index.ctp");

    include("subpages/profile/incidents.php");

    if($this->request->session()->read('debug')){ echo "<span style ='color:red;'>" . __FILE__ . "</span>"; }
    $settings = $this->requestAction('settings/get_settings');
    include_once('subpages/api.php');
    $language = $this->request->session()->read('Profile.language');
    $strings = CacheTranslations($language, $this->request->params['controller'] . "_%",$settings);
?>
<form id="transportappform" class="transport-app-form" method="post" action="">
    <div class="row">

        <div class="col-md-12 col-sm-12 col-xs-12 main-title">
            NON-FLEET TRANSPORTATION APPLICATION (1-9 POWER UNITS)
        </div>

        <div class="col-md-12 col-sm-12 col-xs-12 no-padding margin-bottom-10">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">

                    <label class="control-label col-md-5 col-sm-5 col-xs-12">PRODUCER/BROKER:</label>
                    <div class="col-md-7 col-sm-7 col-xs-12">
                        <input class="form-control" value="" required="" placeholder="(Broker Name)" name="producebroker">
                    </div>

                </div>

                <div class="col-md-6 col-sm-6 col-xs-12">

                    <label class="control-label col-md-4 col-sm-4 col-xs-12 col-sm-4 col-xs-12">DATE: </label>
                    <div class="col-md-8 col-sm-8 col-xs-12">
                        <input class="form-control datepicker" value="" required="" placeholder="(Todays Date)" name="date">
                    </div>

                </div>
            </div>
        </div>


        <div class="col-md-12 col-sm-12 col-xs-12 no-padding margin-bottom-10">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <label class="control-label col-md-5 col-sm-5 col-xs-12">Name of Company:</label>
                    <div class="col-md-7 col-sm-7 col-xs-12">
                        <input class="form-control" value="" required="" placeholder="" name="nameocom">
                    </div>

                </div>
                <div class="clearfix"></div>



            </div>
        </div>
        <div class="texts col-md-12 col-sm-12 col-xs-12">
            <div class="row"><div class="col-md-12 col-sm-12 col-xs-12">(Show name exactly as registered or exactly as shown on the Articles of Incorporation) </div>
            </div>
        </div>
        <div class="col-md-12 col-sm-12 col-xs-12 no-padding margin-bottom-10">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <label class="control-label col-md-5 col-sm-5 col-xs-12">Phone#:</label>
                    <div class="col-md-7 col-sm-7 col-xs-12">
                        <input class="form-control" value="" required="" placeholder="" name="phone">
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <label class="control-label col-md-4 col-sm-4 col-xs-12 col-sm-4 col-xs-12">Email:</label>
                    <div class="col-md-8 col-sm-8 col-xs-12">
                        <input class="form-control" value="" required="" placeholder="" name="email">
                    </div>
                </div>
            </div>

        </div>


        <div class="col-md-12 col-sm-12 col-xs-12 no-padding margin-bottom-10">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <label class="control-label col-md-5 col-sm-5 col-xs-12">Principal's Name:</label>
                    <div class="col-md-7 col-sm-7 col-xs-12">
                        <input class="form-control" value="" required="" placeholder="" name="principalname">
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <label class="control-label col-md-4 col-sm-4 col-xs-12 col-sm-4 col-xs-12">Title:</label>
                    <div class="col-md-8 col-sm-8 col-xs-12">
                        <input class="form-control" value="" required="" placeholder="" name="principaltitle">
                    </div>
                </div>
            </div>

        </div>


        <div class="col-md-12 col-sm-12 col-xs-12 no-padding margin-bottom-10">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <label class="control-label col-md-5 col-sm-5 col-xs-12">Contact Name:</label>
                    <div class="col-md-7 col-sm-7 col-xs-12">
                        <input class="form-control" value="" required="" placeholder="" name="contactname">
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <label class="control-label col-md-4 col-sm-4 col-xs-12 col-sm-4 col-xs-12">Title:</label>
                    <div class="col-md-8 col-sm-8 col-xs-12">
                        <input class="form-control" value="" required="" placeholder="" name="contacttitle">
                    </div>
                </div>
            </div>

        </div>


        <div class="col-md-12 col-sm-12 col-xs-12 no-padding margin-bottom-10">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <label class="control-label col-md-12 col-sm-12 col-xs-12">Business Address (State mailing address if different)</label>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <input class="form-control" value="" required="" placeholder="" name="bamail">
                    </div>
                </div>
            </div>

        </div>


        <div class="col-md-12 col-sm-12 col-xs-12 margin-bottom-10">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="row">
                        <label class="control-label col-md-6 col-sm-6 col-xs-12">Number of years in above business:</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control" value="" required="" placeholder="" name="nameocom">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-12 col-sm-12 col-xs-12 margin-bottom-10">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="row">
                        <label class="control-label col-md-6 col-sm-6 col-xs-12">Number of years Applicant has owned/driven/similar radius  of similar type of vehicle:</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control" value="" required="" placeholder="" name="noyapp">
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-md-12 col-sm-12 col-xs-12 margin-bottom-10 current-policy">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <h4>Current Policy Information:</h4>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>Coverage</th>
                                    <th>Limits</th>
                                    <th>Deductibles</th>
                                    <th>Insurer</th>
                                    <th>Policy #</th>
                                    <th>Expiry Date</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Automobile</td>
                                    <td><input class="form-control" value="" required="" placeholder="" name="lim"></td>
                                    <td><input class="form-control" value="" required="" placeholder="" name="ded"></td>
                                    <td><input class="form-control" value="" required="" placeholder="" name="ins"></td>
                                    <td><input class="form-control" value="" required="" placeholder="" name="poli"></td>
                                    <td><input class="form-control" value="" required="" placeholder="" name="expdate"></td>
                                </tr>
                                <tr>
                                    <td>C.G.L.</td>
                                    <td><input class="form-control" value="" required="" placeholder="" name="lim"></td>
                                    <td><input class="form-control" value="" required="" placeholder="" name="ded"></td>
                                    <td><input class="form-control" value="" required="" placeholder="" name="ins"></td>
                                    <td><input class="form-control" value="" required="" placeholder="" name="poli"></td>
                                    <td><input class="form-control" value="" required="" placeholder="" name="expdate"></td>
                                </tr>
                                <tr>
                                    <td>Cargo</td>
                                    <td><input class="form-control" value="" required="" placeholder="" name="lim"></td>
                                    <td><input class="form-control" value="" required="" placeholder="" name="ded"></td>
                                    <td><input class="form-control" value="" required="" placeholder="" name="ins"></td>
                                    <td><input class="form-control" value="" required="" placeholder="" name="poli"></td>
                                    <td><input class="form-control" value="" required="" placeholder="" name="expdate"></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-12 col-sm-12 col-xs-12 margin-bottom-10 loss-experience">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="row margin-bottom-10">
                        <div class="col-md-9 col-sm-9 col-xs-12 col-sm-10 col-xs-12">
                            <h4>Loss Experience:  Please Upload Loss Experience </h4>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-3 upload_btns">
                           <a href="" class="btn btn-primary">Upload Loss Experience </a>
                        </div>
                    </div>
                    <div class="row margin-bottom-10">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="row">
                                <label class="control-label col-md-12 col-sm-12 col-xs-12">Has any Insurer cancelled, declined, refused to renew or issue auto, cargo or C.G.L. insurance to the Applicant or any of the drivers within the six (6) years preceding this application?</label>
                                <div class="col-md-12 col-sm-12 col-xs-12 radio-list">
                                    <label class="radio-inline">
                                        <div class="radio" id="cancel-declined"><input type="radio" value="1" id="declined" name="cancel1" class="form-control"/></div>                            Yes
                                    </label>
                                    <label class="radio-inline">
                                        <div class="radio" id="cancel-notdeclined"><input type="radio" value="2" id="notdeclined" name="cancel1" class="form-control"></div>                        No
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row margin-bottom-10">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="row">
                                <label class="control-label col-md-12 col-sm-12 col-xs-12">Does the Applicant own or lease any U.S. domiciled vehicles?  If yes, provide details.</label>
                                <div class="col-md-12 col-sm-12 col-xs-12 radio-list">
                                    <label class="radio-inline">
                                        <div class="radio" id="own-lease"><input type="radio" value="1" id="ableToWork" name="declinde1" class="form-control"></div>                            Yes
                                    </label>
                                    <label class="radio-inline">
                                        <div class="radio" id="own-notlease"><input type="radio" value="2" id="notAbleToWork" name="declined1" class="form-control"></div>                        No
                                    </label>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12 detail-textarea">
                                    <textarea name="detials" class="form-control required" placeholder=""></textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row margin-bottom-10">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="row">
                                <label class="control-label col-md-12 col-sm-12 col-xs-12">Does the Applicant own or use any vehicle other than those listed?  If yes, provide details.</label>
                                <div class="col-md-12 col-sm-12 col-xs-12 radio-list">
                                    <label class="radio-inline">
                                        <div class="radio" id="own-use"><input type="radio" value="1" id="ableToWork" name="use1" class="form-control"></div>                            Yes
                                    </label>
                                    <label class="radio-inline">
                                        <div class="radio" id="own-notuse"><input type="radio" value="2" id="notAbleToWork" name="use1" class="form-control"></div>                        No
                                    </label>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12 detail-textarea">
                                    <textarea name="detials" class="form-control required" placeholder=""></textarea>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row margin-bottom-10">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="row">
                                <label class="control-label col-md-12 col-sm-12 col-xs-12">Does the Applicant lease, own or rent any vehicles to others?  If yes, provide details.</label>
                                <div class="col-md-12 col-sm-12 col-xs-12 radio-list">
                                    <label class="radio-inline">
                                        <div class="radio" id="own-rent"><input type="radio" value="1" id="ableToWork" name="rent1" class="form-control"></div>                            Yes
                                    </label>
                                    <label class="radio-inline">
                                        <div class="radio" id="own-notrent"><input type="radio" value="2" id="notAbleToWork" name="rent1" class="form-control"></div>                        No
                                    </label>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12 detail-textarea">
                                    <textarea name="detials" class="form-control required" placeholder=""></textarea>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row margin-bottom-10">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="row">
                                <label class="control-label col-md-12 col-sm-12 col-xs-12">Any machinery or equipment (reefers, cranes, etc.) attached to vehicles?  If yes, provide details.</label>
                                <div class="col-md-12 col-sm-12 col-xs-12 radio-list">
                                    <label class="radio-inline">
                                        <div class="radio" id="attached"><input type="radio" value="1" id="ableToWork" name="attach1" class="form-control"></div>                            Yes
                                    </label>
                                    <label class="radio-inline">
                                        <div class="radio" id="unattached"><input type="radio" value="2" id="notAbleToWork" name="attach1" class="form-control"></div>                        No
                                    </label>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12 detail-textarea">
                                    <textarea name="detials" class="form-control required" placeholder=""></textarea>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row margin-bottom-10">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="row">
                                <label class="control-label col-md-12 col-sm-12 col-xs-12">Does the Applicant haul any hazardous goods as defined by the Hazardous Goods Act?  If yes, provide PIN and Class numbers.</label>
                                <div class="col-md-12 col-sm-12 col-xs-12 radio-list">
                                    <label class="radio-inline">
                                        <div class="radio" id="haz-good"><input type="radio" value="1" id="ableToWork" name="haz1" class="form-control"></div>                            Yes
                                    </label>
                                    <label class="radio-inline">
                                        <div class="radio" id="haz-notgood"><input type="radio" value="2" id="notAbleToWork" name="haz1" class="form-control"></div>                        No
                                    </label>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12 detail-textarea">
                                    <textarea name="detials" class="form-control required" placeholder=""></textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row margin-bottom-10">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="row">
                                <label class="control-label col-md-12 col-sm-12 col-xs-12">Does the Applicant use Non-Owned Trailers?  (trailer interchange, etc.)</label>
                                <div class="col-md-12 col-sm-12 col-xs-12 radio-list">
                                    <label class="radio-inline">
                                        <div class="radio" id="use-nonowned"><input type="radio" value="1" id="ableToWork" name="owened1" class="form-control"></div>                            Yes
                                    </label>
                                    <label class="radio-inline">
                                        <div class="radio" id="use-notnonowned"><input type="radio" value="2" id="notAbleToWork" name="owened1" class="form-control"></div>                        No
                                    </label>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <h4>If yes, complete the following: </h4>
                                    <table class="table table-bordered">
                                        <thead>
                                        <tr>
                                            <th></th>
                                            <th>Average</th>
                                            <th>Maximum</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>Number in care at any time</td>
                                            <td><input class="form-control" value="" required="" placeholder="" name="avg"></td>
                                            <td><input class="form-control" value="" required="" placeholder="" name="max"></td>
                                        </tr>
                                        <tr>
                                            <td>Actual Cash Value of the trailer(s)</td>
                                            <td><input class="form-control" value="" required="" placeholder="" name="avg"></td>
                                            <td><input class="form-control" value="" required="" placeholder="" name="max"></td>
                                        </tr>
                                        <tr>
                                            <td>Type of trailer(s)</td>
                                            <td colspan="2"><input class="form-control" value="" required="" placeholder="" name="avg"></td>

                                        </tr>
                                        <tr>
                                            <td>% OR number of times monthly the Applicant would have non-owned trailers in their care, custody and control.</td>
                                            <td colspan="2"><input class="form-control" value="" required="" placeholder="" name="avg"></td>

                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row margin-bottom-10">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="row">
                                <label class="control-label col-md-12 col-sm-12 col-xs-12">RADIUS OF OPERATION IN % FOR CANADIAN MILES "PER TRIP":</label>
                                <div class="col-md-6 col-sm-6 col-xs-12 margin-bottom-10">
                                    <div class="row">
                                        <label class="control-label col-md-3">50-100   -</label>
                                        <div class="col-md-9 col-sm-9 col-xs-12 col-sm-9 col-xs-12">
                                            <input name="fifty" placeholder="" required="" value="" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-md-6 col-sm-6 col-xs-12 margin-bottom-10">
                                    <div class="row">
                                        <label class="control-label col-md-3">101-300   -</label>
                                        <div class="col-md-9 col-sm-9 col-xs-12 col-sm-9 col-xs-12">
                                            <input name="hundred1" placeholder="" required="" value="" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-md-6 col-sm-6 col-xs-12 margin-bottom-10">
                                    <div class="row">
                                        <label class="control-label col-md-3">301-500	-</label>
                                        <div class="col-md-9 col-sm-9 col-xs-12 col-sm-9 col-xs-12">
                                            <input name="three001" placeholder="" required="" value="" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-md-6 col-sm-6 col-xs-12 margin-bottom-10">
                                    <div class="row">
                                        <label class="control-label col-md-3">501-900	-</label>
                                        <div class="col-md-9 col-sm-9 col-xs-12 col-sm-9 col-xs-12">
                                            <input name="five01" placeholder="" required="" value="" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-md-6 col-sm-6 col-xs-12 margin-bottom-10">
                                    <div class="row">
                                        <label class="control-label col-md-3">OVER 900-</label>
                                        <div class="col-md-9 col-sm-9 col-xs-12 col-sm-9 col-xs-12">
                                            <input name="over" placeholder="" required="" value="" class="form-control">
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>


                    <div class="row margin-bottom-10">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="row">
                                <label class="control-label col-md-12 col-sm-12 col-xs-12">RADIUS OF OPERATION IN % FOR U.S.A. MILES "PER TRIP":</label>
                                <div class="col-md-6 col-sm-6 col-xs-12 margin-bottom-10">
                                    <div class="row">
                                        <label class="control-label col-md-3">50-100   -</label>
                                        <div class="col-md-9 col-sm-9 col-xs-12 col-sm-9 col-xs-12">
                                            <input name="fifty" placeholder="" required="" value="" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-md-6 col-sm-6 col-xs-12 margin-bottom-10">
                                    <div class="row">
                                        <label class="control-label col-md-3">101-300   -</label>
                                        <div class="col-md-9 col-sm-9 col-xs-12 col-sm-9 col-xs-12">
                                            <input name="hundred1" placeholder="" required="" value="" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-md-6 col-sm-6 col-xs-12 margin-bottom-10">
                                    <div class="row">
                                        <label class="control-label col-md-3">301-500	-</label>
                                        <div class="col-md-9 col-sm-9 col-xs-12 col-sm-9 col-xs-12">
                                            <input name="three001" placeholder="" required="" value="" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-md-6 col-sm-6 col-xs-12 margin-bottom-10">
                                    <div class="row">
                                        <label class="control-label col-md-3">501-900	-</label>
                                        <div class="col-md-9 col-sm-9 col-xs-12 col-sm-9 col-xs-12">
                                            <input name="five01" placeholder="" required="" value="" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-md-6 col-sm-6 col-xs-12 margin-bottom-10">
                                    <div class="row">
                                        <label class="control-label col-md-3">OVER 900-</label>
                                        <div class="col-md-9 col-sm-9 col-xs-12 col-sm-9 col-xs-12">
                                            <input name="over" placeholder="" required="" value="" class="form-control">
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="row margin-bottom-10">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12 upload_btns">
                                    <DIV ID="excel_fuelchart" style="width: 100%; height: 400px; overflow: auto; resize: both;">
                                        <HEADER>
                                            FUEL TAX CALCULATOR
                                        </HEADER>
                                        <SCRIPT>
                                            function init_fuelchart(){
                                                for (temp = 1; temp <= 4; temp++) {
                                                    visible(cellement_fuelchart(15, temp), false);
                                                    visible(cellement_fuelchart(67, temp), false);
                                                    setattribute(cellement_fuelchart(69, temp), "readonly", true);
                                                }
                                            }

                                            function update_fuelchart(Row, Col){
                                                var val, cells, start, end, RowID;
                                                val = sum(getcells_fuelchart(Row,1, Row,4));
                                                setcell_fuelchart(Row, 5, val);

                                                if (Row < 17) {
                                                    start=2;
                                                    end=14
                                                } else {
                                                    start=17;
                                                    end=66;
                                                }

                                                cells = getcells_fuelchart(start, 5, end, 5);
                                                val = sum(cells);
                                                setcell_fuelchart(end+1, 5, val);
                                                for (RowID = start; RowID <= end; RowID++) {
                                                    setcell_fuelchart(RowID, 6, formatpercent(cells[RowID - start] / val));
                                                }

                                                for (temp = 1; temp <= 4; temp++) {
                                                    val = sum(getcells_fuelchart(2, Col, 14, Col)) + sum(getcells_fuelchart(17, Col, 66, Col));
                                                    setcell_fuelchart(69, Col, val);
                                                }
                                                if(Row != 69 && Col != 5){update_fuelchart(69,5);}
                                            }
                                        </SCRIPT>
                                        <?php
                                            //printtable($this, $Manager, "fuelchart", "id", false, false, true, true);
                                            $Columns = array();
                                            $Columns["Province/State"] = array("TYPE" => "READONLY");
                                            $Columns["1st QTR"] = array("TYPE" => "NUMBER");
                                            $Columns["2nd QTR"] = array("TYPE" => "NUMBER");
                                            $Columns["3rd QTR"] = array("TYPE" => "NUMBER");
                                            $Columns["4th QTR"] = array("TYPE" => "NUMBER");
                                            $Columns["Total"] = array("TYPE" => "READONLY");
                                            $Columns["Percent"] = array("TYPE" => "READONLY");

                                            $Provinces = getprovinces("English", false, true);
                                            $States =  getprovinces("English", true, false);
                                            unset($Provinces["0"]);
                                            $Provinces[] = "Total Canada";
                                            $States[] = "Total USA";
                                            $Data = makerows("Canada", $Provinces);
                                            $Data = makerows("USA", $States, $Data);
                                            $Data = makerows("Quarterly", array("Totals"), $Data);

                                            makechart("fuelchart", $Columns, $Data, false);
                                        ?>
                                        <FOOTER>
                                            Completion of this form does not bind coverage.<BR>
                                            Applicant's acceptance of the Insurer's quotation is required before insurance may be bound and policy issued.
                                        </FOOTER>
                                    </DIV>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row margin-bottom-10 driver-lists">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <h4>DRIVER LIST </h4>
                                </div>
                                <label class="control-label col-md-12 col-sm-12 col-xs-12">(Attach current MVR and confirmed loss experience for a minimum of 3 years from previous insurer or employer):</label>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <table class="table table-bordered">
                                        <thead>
                                        <tr>
                                            <th>Driver's full Name</th>
                                            <th>License Number</th>
                                            <th># of Years experience with similar vehicle</th>
                                            <th>Previous Employer(s)
                                                (Start with recent)
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td><input name="dfn" placeholder="" required="" value="" class="form-control"></td>
                                            <td><input name="licn" placeholder="" required="" value="" class="form-control"></td>
                                            <td><input name="yewsv" placeholder="" required="" value="" class="form-control"></td>
                                            <td><input name="prevemp" placeholder="" required="" value="" class="form-control"></td>
                                        </tr>
                                        <tr>
                                            <td><input name="dfn" placeholder="" required="" value="" class="form-control"></td>
                                            <td><input name="licn" placeholder="" required="" value="" class="form-control"></td>
                                            <td><input name="yewsv" placeholder="" required="" value="" class="form-control"></td>
                                            <td><input name="prevemp" placeholder="" required="" value="" class="form-control"></td>
                                        </tr>
                                        <tr>
                                            <td><input name="dfn" placeholder="" required="" value="" class="form-control"></td>
                                            <td><input name="licn" placeholder="" required="" value="" class="form-control"></td>
                                            <td><input name="yewsv" placeholder="" required="" value="" class="form-control"></td>
                                            <td><input name="prevemp" placeholder="" required="" value="" class="form-control"></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row margin-bottom-10 equipment-lists">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <h4>EQUIPMENT LIST </h4>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <table class="table table-bordered">
                                        <thead>
                                        <tr>
                                            <td rowspan="2">Year</td>
                                            <td rowspan="2">Make</td>
                                            <td rowspan="2">Model</td>
                                            <td rowspan="2">Serial Number</td>
                                            <td rowspan="2">Actual Cash Value (ACV)</td>

                                            <td colspan="2">Physical Damage</td>
                                        </tr>
                                        <tr >
                                            <td>Coverage</td>
                                            <td>Deductible</td>
                                        </tr>

                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td><input name="year" placeholder="" required="" value="" class="form-control"></td>
                                            <td><input name="make" placeholder="" required="" value="" class="form-control"></td>
                                            <td><input name="model" placeholder="" required="" value="" class="form-control"></td>
                                            <td><input name="serialno" placeholder="" required="" value="" class="form-control"></td>
                                            <td><input name="actcash" placeholder="" required="" value="" class="form-control"></td>
                                            <td><input name="coverage" placeholder="" required="" value="" class="form-control"></td>
                                            <td><input name="deductible" placeholder="" required="" value="" class="form-control"></td>
                                        </tr>
                                        <tr>
                                            <td><input name="year" placeholder="" required="" value="" class="form-control"></td>
                                            <td><input name="make" placeholder="" required="" value="" class="form-control"></td>
                                            <td><input name="model" placeholder="" required="" value="" class="form-control"></td>
                                            <td><input name="serialno" placeholder="" required="" value="" class="form-control"></td>
                                            <td><input name="actcash" placeholder="" required="" value="" class="form-control"></td>
                                            <td><input name="coverage" placeholder="" required="" value="" class="form-control"></td>
                                            <td><input name="deductible" placeholder="" required="" value="" class="form-control"></td>
                                        </tr>
                                        <tr>
                                            <td><input name="year" placeholder="" required="" value="" class="form-control"></td>
                                            <td><input name="make" placeholder="" required="" value="" class="form-control"></td>
                                            <td><input name="model" placeholder="" required="" value="" class="form-control"></td>
                                            <td><input name="serialno" placeholder="" required="" value="" class="form-control"></td>
                                            <td><input name="actcash" placeholder="" required="" value="" class="form-control"></td>
                                            <td><input name="coverage" placeholder="" required="" value="" class="form-control"></td>
                                            <td><input name="deductible" placeholder="" required="" value="" class="form-control"></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row margin-bottom-10">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="row">
                                <label class="control-label col-md-3">Third Party Liability Limit:</label>
                                <div class="col-md-9 col-sm-9 col-xs-12 col-sm-9 col-xs-12">
                                    <input class="form-control" value="" required="" placeholder="" name="thirdparty">
                                </div>
                            </div>
                        </div>
                    </div>



                </div>

            </div>

        </div>


        <div class="col-md-12 col-sm-12 col-xs-12 margin-bottom-10 cargo">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <h4>CARGO</h4>
                    <div class="texts margin-bottom-10">(This section must be completed even if coverage is not requested or required)</div>
                    <div class="row margin-bottom-10">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="row">
                                <label class="control-label col-md-3">Cargo Limit Requested:</label>
                                <div class="col-md-9 col-sm-9 col-xs-12 col-sm-9 col-xs-12">
                                    <input class="form-control" value="" required="" placeholder="" name="cargolimit">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row margin-bottom-10">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="row">
                                <label class="control-label col-md-3">Deductible:</label>
                                <div class="col-md-9 col-sm-9 col-xs-12 col-sm-9 col-xs-12">
                                    <input class="form-control" value="" required="" placeholder="" name="deductible">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row margin-bottom-10 ">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="row">
                                <label class="control-label col-md-12 col-sm-12 col-xs-12">Are hazardous, volatile, flammable, corrosive goods carried?  If yes, provide detail.</label>
                                <div class="col-md-12 col-sm-12 col-xs-12 radio-list">
                                    <label class="radio-inline">
                                        <div id="hazvol" class="radio"><input type="radio" class="form-control" name="vol1" id="ableToWork" value="1"></div>                            Yes
                                    </label>
                                    <label class="radio-inline">
                                        <div id="haznovol" class="radio"><input type="radio" class="form-control" name="vol1" id="notAbleToWork" value="2"></div>                        No
                                    </label>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12 detail-textarea">
                                    <textarea placeholder="" class="form-control required" name="detials"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row margin-bottom-10 ">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="row">
                                <label class="control-label col-md-12 col-sm-12 col-xs-12">Are there any products hauled that require heating or refrigeration?  If yes, provide detail.</label>
                                <div class="col-md-12 col-sm-12 col-xs-12 radio-list">
                                    <label class="radio-inline">
                                        <div id="haul" class="radio"><input type="radio" class="form-control" name="haul1" id="ableToWork" value="1"></div>                            Yes
                                    </label>
                                    <label class="radio-inline">
                                        <div id="haulno" class="radio"><input type="radio" class="form-control" name="haul1" id="notAbleToWork" value="2"></div>                        No
                                    </label>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12 detail-textarea">
                                    <textarea placeholder="" class="form-control required" name="detials"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row margin-bottom-10 ">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="row">
                                <label class="control-label col-md-12 col-sm-12 col-xs-12">Are loads brokered to others?  If yes, provide detail.</label>
                                <div class="col-md-12 col-sm-12 col-xs-12 radio-list">
                                    <label class="radio-inline">
                                        <div id="loadbroker" class="radio"><input type="radio" class="form-control" name="brok1" id="ableToWork" value="1"></div>                            Yes
                                    </label>
                                    <label class="radio-inline">
                                        <div id="loadnobroker" class="radio"><input type="radio" class="form-control" name="brok1" id="notAbleToWork" value="2"></div>                        No
                                    </label>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12 detail-textarea">
                                    <textarea placeholder="" class="form-control required" name="detials"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row margin-bottom-10">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="row">
                                <label class="control-label col-md-5 col-sm-5 col-xs-12">What percentage of goods hauled are owned?</label>
                                <div class="col-md-7 col-sm-7 col-xs-12">
                                    <input name="goodhauled" placeholder="" required="" value="" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row margin-bottom-10">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="row">
                                <div class="col-md-8 col-sm-8 col-xs-12">Cargo Detail Chart 	</div>
                                <div class="col-md-12 col-sm-12 col-xs-12 upload_btns">

                                    <DIV ID="excel_test" style="width: 100%; height: 400px; overflow: auto; resize: both;">
                                        <SCRIPT>
                                            function init_cargochart(){
                                                for (temp = 1; temp <= 4; temp++) {
                                                    setattribute(cellement_cargochart(10, temp), "readonly", true);
                                                    setattribute(cellement_cargochart(20, temp), "readonly", true);
                                                    setattribute(cellement_cargochart(28, temp), "readonly", true);
                                                    setattribute(cellement_cargochart(40, temp), "readonly", true);
                                                    setattribute(cellement_cargochart(50, temp), "readonly", true);
                                                }
                                                visible(cellement_cargochart(10, 5), false);
                                                visible(cellement_cargochart(20, 5), false);
                                                visible(cellement_cargochart(28, 5), false);
                                                visible(cellement_cargochart(40, 5), false);
                                                visible(cellement_cargochart(50, 5), false);
                                            }

                                            function update_cargochart(Row, Col){
                                                if(Col<5) {
                                                    if (Row < 11) {//cat 1
                                                        setcell_cargochart(10, Col, sum(getcells_cargochart(2, Col, 9, Col)));
                                                    } else if (Row < 22) {//cat 2
                                                        setcell_cargochart(20, Col, sum(getcells_cargochart(11, Col, 19, Col)));
                                                    } else if (Row < 29) {//cat 3
                                                        setcell_cargochart(28, Col, sum(getcells_cargochart(22, Col, 27, Col)));
                                                    } else if (Row < 42) { //cat 4
                                                        setcell_cargochart(40, Col, sum(getcells_cargochart(30, Col, 39, Col)));
                                                    } else if (Row < 51) { //other
                                                        setcell_cargochart(50, Col, sum(getcells_cargochart(42, Col, 49, Col)));
                                                    }
                                                }
                                            }
                                        </SCRIPT>
                                        <?php
                                            //printtable($this, $Manager, "test", "id", false, false, true, true);

                                            $Columns = array();
                                            $Columns["Commodity"] = array("TYPE" => "READONLY");
                                            $Columns["Percent of Revenue"] = array("TYPE" => "NUMBER", "MIN" => 0, "MAX" => 100, "DEFAULT" => 0);
                                            $Columns["Average Load Value"] = array("TYPE" => "NUMBER", "DEFAULT" => 0, "MIN" => 0);
                                            $Columns["Maximum Load Value"] = array("TYPE" => "NUMBER", "DEFAULT" => 0, "MIN" => 0);
                                            $Columns["Times per month value exceeds average"] = array("TYPE" => "NUMBER", "DEFAULT" => 0, "MIN" => 0);
                                            $Columns["Comment"] = array("TYPE" => "TEXT");

                                            $Data = array();
                                            $Data["[FULLROW]Category 1"] = array("Beer", "Liquor or wine", "Metals - high value", "Electronics", "Pharmaceuticals", "Tobacco", "Tools (hand or power)", "Explosives, munitions", "Total:");
                                            $Data["[FULLROW]Category 2"] = array("Clothing, textiles", "Food - Seafood or shellfish", "Food - Produce", "Food - Other temperature sensative", "Flowers, bulbs, nursery stock", "Liquids in Bulk - Hazardous/regulated", "Liquids in Bulk - Non-hazardous", "Tires", "Total:");
                                            $Data["[FULLROW]Category 3"] = array("Machinery & Equipment", "Auto parts � heavy", "Specialized equipment", "Live animals, poultry", "Over-dimensional Loads", "Furniture", "Total:");
                                            $Data["[FULLROW]Category 4"] = array("Sealed shipping containers", "Food � Dry, packaged, or canned", "Auto parts � light", "Logs, pulpwood, pulp, chips, shavings", "Sand, gravel, aggregate", "Dry bulk � Hazardous/regulated", "Dry bulk � Non-hazardous", "Lumber, building materials", "Steel, pipes, concrete", "Paper", "Total:");
                                            $Data["[FULLROW]Other"] = array("Other: (describe)", "Other: (describe)", "Other: (describe)", "Other: (describe)", "Other: (describe)", "Other: (describe)", "Other: (describe)", "Other: (describe)", "Total:");

                                            $Data = makerows($Data);


                                            makechart("cargochart", $Columns, $Data, false);
                                        ?>
                                        <FOOTER>
                                            Completion of this form does not bind coverage.<BR>
                                            Applicant's acceptance of the Insurer's quotation is required before insurance may be bound and policy issued.
                                        </FOOTER>
                                    </DIV>
                                </div>
                            </div>
                        </div>
                    </div>




                </div>
            </div>


        </div>



        <div class="col-md-12 col-sm-12 col-xs-12 margin-bottom-10 commercial-general">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <h4>COMMERCIAL GENERAL LIABILITY</h4>
                    <div class="texts margin-bottom-10">(This coverage is intended for Truckmen - Common/Contract Carriers only)</div>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12 margin-bottom-10">
                    <div class="row">
                        <label class="control-label col-md-5 col-sm-5 col-xs-12">Combined Single Limit:	</label>
                        <div class="col-md-7 col-sm-7 col-xs-12">
                            <input class="form-control" value="" required="" placeholder="" name="comsing">
                        </div>
                    </div>
                </div>

                <div class="col-md-12 col-sm-12 col-xs-12 margin-bottom-10">
                    <div class="row">
                        <label class="control-label col-md-12 col-sm-12 col-xs-12">Does the Applicant conduct any other operation other than the transportation of goods?  If yes, provide detail.</label>
                        <div class="col-md-12 col-sm-12 col-xs-12 radio-list">
                            <label class="radio-inline">
                                <div class="radio" id="othoperation"><input type="radio" value="1" id="ableToWork" name="oper1" class="form-control"></div>                            Yes
                            </label>
                            <label class="radio-inline">
                                <div class="radio" id="othnooperation"><input type="radio" value="2" id="notAbleToWork" name="oper1" class="form-control"></div>                        No
                            </label>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12 detail-textarea">
                            <textarea name="detials" class="form-control required" placeholder=""></textarea>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 col-sm-12 col-xs-12 margin-bottom-10">
                    <h4>COMMENTS / CLARIFICATION OF DETAILS</h4>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12 detail-textarea">
                            <div class="row"><label class="control-label col-md-12 col-sm-12 col-xs-12">Referred by <?= $strings["dashboard_sitename"]; ?> Website "find a broker"</label></div>
                            <textarea name="detials" class="form-control required" placeholder=""></textarea>
                        </div>
                    </div>
                </div>

            </div>
        </div>


        <div class="col-md-12 col-sm-12 col-xs-12 margin-bottom-10">
            <div class="row">
                <label class="control-label col-md-3">DATE :	</label>
                <div class="col-md-9 col-sm-9 col-xs-12 col-sm-9 col-xs-12">
                    <input class="form-control datepicker" value="" required="" placeholder="" name="date">
                </div>
            </div>
        </div>

        <div class="col-md-12 col-sm-12 col-xs-12 margin-bottom-10">
            <div class="row">
                <label class="control-label col-md-3">SIGNATURE OF APPLICANT :	</label>
                <div class="col-md-9 col-sm-9 col-xs-12 col-sm-9 col-xs-12">
                    <?php
                        includeCanvas("gfs_signature");
                    ?>
                </div>
            </div>
        </div>


        <div class="col-md-12 col-sm-12 col-xs-12 subz">
            <a href="javascript:void(0);" class="btn btn-success btn-lg pull-right" >
                Submit <i class="m-icon-swapright m-icon-white"></i>
            </a>
        </div>

    </div>

</form>