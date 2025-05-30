<div class="jumbotron jumbotron-header rounded-0 bg-secondary text-white">
    <div class="row">
        <div class="col-12">
            <h1 class="display-4">PRESSURE VESSEL</h1>
        </div>
        <!-- สถิติ -->
        <div id="stat" class="col-12 mt-3">
            <div class="box bg-p0">
                <div class="row text-center">
                    <div class="col-12 ">
                        <!-- <span class="badge badge-light" id="p1_val"></span> -->
                        <span class="text-p-number text-white" id="p0_val"></span>
                    </div>
                    <div class="col-12 text-p text-white">
                        P0: OOS
                    </div>
                </div>
            </div>
            <div class="box bg-p1">
                <div class="row text-center">
                    <div class="col-12 ">
                        <!-- <span class="badge badge-light" id="p1_val"></span> -->
                        <span class="text-p-number" id="p1_val"></span>
                    </div>
                    <div class="col-12 text-p">
                        P1: SEVERE
                    </div>
                </div>
            </div>
            <div class="box bg-p2">
                <div class="row text-center">
                    <div class="col-12">
                        <!-- <span class="badge badge-light" id="p2_val"></span> -->
                        <span class="text-p-number" id="p2_val"></span>
                    </div>
                    <div class="col-12 text-p">
                        P2: MAJOR
                    </div>
                </div>
            </div>
            <div class="box bg-p3">
                <div class="row text-center">
                    <div class="col-12">
                        <span class="text-p-number" id="p3_val"></span>
                    </div>
                    <div class="col-12 text-p">
                        P3: MODERATE
                    </div>
                    
                </div>
            </div>
            <div class="box bg-p4">
                <div class="row text-center">
                    <div class="col-12">
                        <span class="text-p-number" id="p4_val"></span>
                    </div>
                    <div class="col-12 text-p">
                        P4: MINOR
                    </div> 
                </div>
            </div>
            <div class="box bg-p5">
                <div class="row text-center">
                    <div class="col-12">
                        <span class="text-p-number" id="p5_val"></span>
                    </div>
                    <div class="col-12 text-p">
                        P5: INSIGNIFICANT
                    </div>
                </div>
            </div>
            <div class="box bg-p6">
                <div class="row text-center">
                    <div class="col-12">
                        <span class="text-p-number" id="p6_val"></span>
                    </div>
                    <div class="col-12 text-p">
                        P6: GOOD CONDITION
                    </div>
                </div>
            </div>
            <div class="box bg-noins">
                <div class="row text-center">
                    <div class="col-12">
                        <span class="text-p-number" id="noinspect_val"></span>
                    </div>
                    <div class="col-12 text-p">
                        NEVER INSPECTED
                    </div>
                </div>
            </div>
            <div class="box bg-total">
                <div class="row text-center">
                    <div class="col-12">
                        <span class="text-p-number text-white" id="total_val"></span>
                    </div>
                    <div class="col-12 text-p text-white">
                        TOTAL
                    </div>   
                </div>
            </div>
        </div>
    </div>
</div>
<div class="wrapper-form shadow">
    <!-- <div class="mb-2" align="right">
        <button type="button" class="btn btn-primary" onclick="create_table_static()">STATIC DATA</button>
    </div> -->
    <div id="dataGid"></div>
    <!-- <div id="dataGid_static"></div> -->
</div>

<!-- Modal -->
<div class="modal fade" id="info_modal" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Pressure Vessel Information</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-4">
                            <label class="header-detail">Tag Number</label>
                            <input type="text" class="form-control form-control-sm" data-toggle="tooltip" id="tag_no"
                                readonly>
                        </div>
                        <div class="col-md-4">
                            <label class="header-detail">Pressure vessel Number</label>
                            <input type="text" class="form-control form-control-sm" data-toggle="tooltip" id="vessel_no"
                                readonly>
                        </div>
                        <div class="col-md-4">
                            <label class="header-detail">Platform</label>
                            <input type="text" class="form-control form-control-sm" data-toggle="tooltip" id="platform"
                                readonly>
                        </div>
                        <div class="col-md-4">
                            <label class="header-detail">Equipment Type</label>
                            <input type="text" class="form-control form-control-sm" data-toggle="tooltip"
                                id="equipment_type" readonly>
                        </div>
                        <div class="col-md-4">
                            <label class="header-detail">Equipment Description</label>
                            <input type="text" class="form-control form-control-sm" data-toggle="tooltip"
                                id="equipment_desc" readonly>
                        </div>
                        <div class="col-md-4">
                            <label class="header-detail">Orientation</label>
                            <input type="text" class="form-control form-control-sm" data-toggle="tooltip"
                                id="orientation" readonly>
                        </div>
                        <div class="col-md-4">
                            <label class="header-detail">P&ID Number</label>
                            <input type="text" class="form-control form-control-sm" data-toggle="tooltip" id="pid_no"
                                readonly>
                        </div>
                        <div class="col-md-4">
                            <label class="header-detail">Drawing Number</label>
                            <input type="text" class="form-control form-control-sm" data-toggle="tooltip"
                                id="drawing_no" readonly>
                        </div>
                        <div class="col-md-4">
                            <label class="header-detail">Material of Construction</label>
                            <input type="text" class="form-control form-control-sm" data-toggle="tooltip"
                                id="m_o_c" readonly>
                        </div>

                        <div class="col-12">
                            <hr>
                        </div>

                        <div class="col-md-2">
                            <label class="header-detail">Height (mm)</label>
                            <input type="text" class="form-control form-control-sm" data-toggle="tooltip" id="height_mm"
                                readonly>
                        </div>
                        <div class="col-md-2">
                            <label class="header-detail">Design Code</label>
                            <input type="text" class="form-control form-control-sm" data-toggle="tooltip"
                                id="design_code" readonly>
                        </div>
                        <div class="col-md-2">
                            <label class="header-detail">In-service Date</label>
                            <input type="text" class="form-control form-control-sm" data-toggle="tooltip"
                                id="inservice_date" readonly>
                        </div>
                        <div class="col-md-2">
                            <label class="header-detail">CA</label>
                            <input type="text" class="form-control form-control-sm" data-toggle="tooltip" id="CA"
                                readonly>
                        </div>
                        <div class="col-md-2">
                            <label class="header-detail">Design Life (yrs)</label>
                            <input type="text" class="form-control form-control-sm" id="design_life" readonly>
                        </div>
                        <div class="col-md-2">
                            <label class="header-detail">Cladding</label>
                            <input type="text" class="form-control form-control-sm" id="cladding_material" readonly>
                        </div>
                        <div class="col-md-2">
                            <label class="header-detail">Lining</label>
                            <input type="text" class="form-control form-control-sm" id="internal_lining" readonly>
                        </div>
                        <div class="col-md-2">
                            <label class="header-detail">Internal Coating</label>
                            <input type="text" class="form-control form-control-sm" id="internal_coating" readonly>
                        </div>
                        <div class="col-md-2">
                            <label class="header-detail">Insulation</label>
                            <input type="text" class="form-control form-control-sm" id="insulation" readonly>
                        </div>
                        <div class="col-md-2">
                            <label class="header-detail">Insulation Type</label>
                            <input type="text" class="form-control form-control-sm" id="insulation_type" readonly>
                        </div>
                        <div class="col-md-2">
                            <label class="header-detail">Insulation Size</label>
                            <input type="text" class="form-control form-control-sm" id="insulation_size" readonly>
                        </div>
                        <div class="col-12">
                            <hr>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <label class="header-detail">Component Group 1</label>
                            <input type="text" class="form-control form-control-sm" id="component_group_1" readonly>
                        </div>
                        <div class="col-md-3">
                            <label class="header-detail">Design Pressure (psi)</label>
                            <input type="text" class="form-control form-control-sm" id="design_pressure_psi_1" readonly>
                        </div>
                        <div class="col-md-3">
                            <label class="header-detail">Design Temperature (°C)</label>
                            <input type="text" class="form-control form-control-sm" id="design_temp_c_1" readonly>
                        </div>
                        <div class="col-md-3">
                            <label class="header-detail">Operating Pressure (barg)</label>
                            <input type="text" class="form-control form-control-sm" id="operating_pressure_psi_1" readonly>
                        </div>
                        <div class="col-md-3">
                            <label class="header-detail">Operating Temperature (°C)</label>
                            <input type="text" class="form-control form-control-sm" id="operating_temp_c_1" readonly>
                        </div>
                        <div class="col-md-3">
                            <label class="header-detail">Corrosion Loop Number</label>
                            <input type="text" class="form-control form-control-sm" id="corrosion_loop_1" readonly>
                        </div>
                        <div class="col-12">
                            <hr>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <label class="header-detail">Component Group 2</label>
                            <input type="text" class="form-control form-control-sm" id="component_group_2" readonly>
                        </div>
                        <div class="col-md-3">
                            <label class="header-detail">Design Pressure (psi)</label>
                            <input type="text" class="form-control form-control-sm" id="design_pressure_psi_2" readonly>
                        </div>
                        <div class="col-md-3">
                            <label class="header-detail">Design Temperature (°C)</label>
                            <input type="text" class="form-control form-control-sm" id="design_temp_c_2" readonly>
                        </div>
                        <div class="col-md-3">
                            <label class="header-detail">Operating Pressure (barg)</label>
                            <input type="text" class="form-control form-control-sm" id="operating_pressure_psi_2" readonly>
                        </div>
                        <div class="col-md-3">
                            <label class="header-detail">Operating Temperature (°C)</label>
                            <input type="text" class="form-control form-control-sm" id="operating_temp_c_2" readonly>
                        </div>
                        <div class="col-md-3">
                            <label class="header-detail">Corrosion Loop Number</label>
                            <input type="text" class="form-control form-control-sm" id="corrosion_loop_2" readonly>
                        </div>
                    </div>
                </div>
                <!--// container-fluid-->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="library_modal" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Pressure Vessel Document</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <h2>General Document</h2>
                        <div id="grid_doc_report"></div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <h2>Inspection Report</h2>
                        <div id="grid_insp_report"></div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <h2>Adhoc Inspection</h2>
                        <div id="grid_adhoc_report"></div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <h2>CUI Inspection</h2>
                        <div id="grid_cui_report"></div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="static_modal" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Pressure Vessel Static Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="dataGid_static"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="history_modal" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered" style="max-width: 1400px;">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Inspection History : <span id="history_tag_no"></span></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12 mb-3">
                        <h4>Routine Inspection</h4>
                        <div id="grid_inspection_history_routine"></div>
                    </div>
                    <div class="col-12 mb-3">
                        <h4>Adhoc and Monitoring Inspection</h4>
                        <div id="grid_inspection_history_other"></div>
                    </div>
                    <div class="col-md-12 mb-3">
                        <h4>Inspection Report</h4>
                        <div id="grid_insp_report_history"></div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="rbi_modal" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="min-width: 1600px;">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Risk Matrix</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="rbi-grid">
                    <div class="rbi-item rbi-span-5 rbi-row-span-2 rbi-lightgray">CoF</div>
                    <div class="rbi-item rbi-span-5 rbi-lightgray">PoF</div>
                    <div class="rbi-item rbi-extra-lightgray">A<br>Rare</div>
                    <div class="rbi-item rbi-extra-lightgray">B<br>Unlikely</div>
                    <div class="rbi-item rbi-extra-lightgray">C<br>Possible</div>
                    <div class="rbi-item rbi-extra-lightgray">D<br>Likely</div>
                    <div class="rbi-item rbi-extra-lightgray">E<br>Almost Certain</div>

                    <div class="rbi-item rbi-black"></div>
                    <div class="rbi-item rbi-extra-lightgray">People</div>
                    <div class="rbi-item rbi-extra-lightgray">Environment</div>
                    <div class="rbi-item rbi-extra-lightgray">Asset / Production</div>
                    <div class="rbi-item rbi-extra-lightgray">Reputation</div>

                    <div class="rbi-item">Never heard in E&P industry but could occur</div>
                    <div class="rbi-item">Event has occurred in the E&P industry or is unlikely to occur in CPOC</div>
                    <div class="rbi-item">Event occurred more than once in the E&P industry or has occurred in CPOC</div>
                    <div class="rbi-item">Event occurred several time per year in the E&P industry or once per year in CPOC</div>
                    <div class="rbi-item">Event occurred frequently in the E&P industry or occurred several times per year in CPOC</div>

                    <!-- 5 -->
                    <div class="rbi-item rbi-lightgray">5<br>Critical</div>
                    <div class="rbi-item">Multiple Fatalities</div>
                    <div class="rbi-item">
                        <ul class="rbi-ul">
                            <li>Spill > 5,000 bbl</li>
                            <li>Tier 3</li>
                            <li>Regional Assistance</li>
                        </ul>
                    </div>
                    <div class="rbi-item">Loss > USD50M</div>
                    <div class="rbi-item">
                        <ul class="rbi-ul">
                            <li>International Media Coverage</li>
                            <li>Formal Complaint from International NGOs</li>
                        </ul>
                    </div>
                    <div class="rbi-item rbi-yellow" id="A5"></div>
                    <div class="rbi-item rbi-orange" id="B5"></div>
                    <div class="rbi-item rbi-red" id="C5"></div>
                    <div class="rbi-item rbi-red" id="D5"></div>
                    <div class="rbi-item rbi-red" id="E5"></div>

                    <!-- 4 -->
                    <div class="rbi-item rbi-lightgray">4<br>Serious</div>
                    <div class="rbi-item">
                        <ul class="rbi-ul">
                            <li>1 Fatality</li>
                            <li>1 Permanent Disable Injury</li>
                            <li>Multiple Lost Workdays Case</li>
                        </ul>
                    </div>
                    <div class="rbi-item">
                        <ul class="rbi-ul">
                            <li>100 < Spill < 5,000 bbl</li>
                            <li>Tier 2</li>
                            <li>Industry association involvement</li>
                        </ul>
                    </div>
                    <div class="rbi-item">Loss between USD5M - USD50M</div>
                    <div class="rbi-item">
                        <ul class="rbi-ul">
                            <li>National Media Coverage</li>
                            <li>Local Community Protest</li>
                        </ul>
                    </div>
                    <div class="rbi-item rbi-yellow" id="A4"></div>
                    <div class="rbi-item rbi-yellow" id="B4"></div>
                    <div class="rbi-item rbi-orange" id="C4"></div>
                    <div class="rbi-item rbi-red" id="D4"></div>
                    <div class="rbi-item rbi-red" id="E4"></div>

                    <!-- 3 -->
                    <div class="rbi-item rbi-lightgray">3<br>Significant</div>
                    <div class="rbi-item">
                        <ul class="rbi-ul">
                            <li>1 Lost Workdays Case</li>
                            <li>Multiple Restricted Workdays Case</li>
                        </ul>
                    </div>
                    <div class="rbi-item">
                        <ul class="rbi-ul">
                            <li>10 < Spill < 100 bbl</li>
                            <li>Tier 1</li>
                            <li>Localized Effect</li>
                        </ul>
                    </div>
                    <div class="rbi-item">Loss between USD100K - USD5M</div>
                    <div class="rbi-item">
                        <ul class="rbi-ul">
                            <li>Regional Media Coverage</li>
                            <li>Online Media Spread</li>
                            <li>Local Community Protest</li>
                        </ul>
                    </div>
                    <div class="rbi-item rbi-green" id="A3"></div>
                    <div class="rbi-item rbi-yellow" id="B3"></div>
                    <div class="rbi-item rbi-yellow" id="C3"></div>
                    <div class="rbi-item rbi-orange" id="D3"></div>
                    <div class="rbi-item rbi-red" id="E3"></div>

                    <!-- 2 -->
                    <div class="rbi-item rbi-lightgray">2<br>Moderate</div>
                    <div class="rbi-item">
                        <ul class="rbi-ul">
                            <li>Medical Treatment Case</li>
                            <li>1 Restricted Workdays Case</li>
                        </ul>
                    </div>
                    <div class="rbi-item">
                        <ul class="rbi-ul">
                            <li>1 < Spill < 10 bbl</li>
                            <li>Moderate Effect</li>
                        </ul>
                    </div>
                    <div class="rbi-item">Loss between USD10K - USD100K</div>
                    <div class="rbi-item">
                        <ul class="rbi-ul">
                            <li>Local Media Interest</li>
                            <li>Influenced Online Media Post</li>
                            <li>Local Community Aggregation</li>
                        </ul>
                    </div>
                    <div class="rbi-item rbi-green" id="A2"></div>
                    <div class="rbi-item rbi-green" id="B2"></div>
                    <div class="rbi-item rbi-yellow" id="C2"></div>
                    <div class="rbi-item rbi-yellow" id="D2"></div>
                    <div class="rbi-item rbi-orange" id="E2"></div>

                    <!-- 1 -->
                    <div class="rbi-item rbi-lightgray">1<br>Minor</div>
                    <div class="rbi-item">
                        Minor Health Effect/Injury With First Aid
                    </div>
                    <div class="rbi-item">
                        <ul class="rbi-ul">
                            <li>Spill < 1 bbl</li>
                            <li>Slight Effect</li>
                        </ul>
                    </div>
                    <div class="rbi-item">Loss < USD10K</div>
                    <div class="rbi-item">
                        <ul class="rbi-ul">
                            <li>No News Coverage</li>
                            <li>Non-Influenced Online Media Post</li>
                        </ul>
                    </div>
                    <div class="rbi-item rbi-green" id="A1"></div>
                    <div class="rbi-item rbi-green" id="B1"></div>
                    <div class="rbi-item rbi-green" id="C1"></div>
                    <div class="rbi-item rbi-yellow" id="D1"></div>
                    <div class="rbi-item rbi-yellow" id="E1"></div>
                    <div class="rbi-item rbi-span-10 rbi-lightgray" style="align-items: start; justify-content: start;">Recommendation</div>
                    <div class="rbi-item rbi-span-10" style="height: auto; align-items: start; justify-content: start;"><textarea id="rec" style="width: 100%;" rows="10" readonly></textarea></div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>

    var _token_vessel = $.cookie("_token_vessel");
    console.log("_token_vessel: " + _token_vessel);
    var dataArr = "";
    var dataArrStatic = "";
    var riskLvId = "";

    get_data();
    get_static_data();
    get_vessel_summary()
    $('.loader').hide();
    // get_token_vessel();

    function get_data() {
        $.ajax({
            type: "GET",
            url: "https://" + url_api + "/fmi/data/v2/databases/Vessel/layouts/info_table/records?_limit=1000",
            dataType: 'json',
            headers: {
                "Authorization": "Bearer " + _token_vessel,
                "Content-Type": "application/json"
            },
            async: false,
            success: function (data) {
                console.log(data);
                dataArr = data;
                create_table(dataArr.response.data);
                // createRows(data);
            },
            error: function (error) {
                console.log(error);
                get_token_vessel();
                _token_vessel = $.cookie("_token_vessel");
                get_data();
                //logout();
            }
        });
    }

    function get_static_data() {
        $.ajax({
            type: "GET",
            url: "https://" + url_api + "/fmi/data/v2/databases/Vessel/layouts/info_static/records?_limit=1000",
            dataType: 'json',
            headers: {
                "Authorization": "Bearer " + _token_vessel,
                "Content-Type": "application/json"
            },
            async: false,
            success: function (data) {
                console.log(data);
                dataArrStatic = data;
                //create_table(dataArr.response.data);
                // createRows(data);
            },
            error: function (error) {
                console.log(error);
                get_token_vessel();
                _token_vessel = $.cookie("_token_vessel");
                get_data();
                //logout();
            }
        });
    }

    function get_vessel_summary() {
        $.ajax({
            type: "GET",
            url: "https://" + url_api + "/fmi/data/v2/databases/CPOC_AIMS/layouts/vessel_equipment/records?_limit=1",
            dataType: 'json',
            headers: {
                "Authorization": "Bearer " + $.cookie("_token_dashboard"),
                "Content-Type": "application/json"
            },
            async: false,
            success: function (data) {
                // console.log(data);
                fetch_summary(data.response.data)
            },
            error: function (error) {
                console.log(error);
                get_token_startup();
                get_vessel_summary();
                //logout();
            }
        });
    }

    function fetch_summary(data) {
        console.log(data);
        $('#p0_val').html(data[0].fieldData.P0.toLocaleString());
        $('#p1_val').html(data[0].fieldData.P1.toLocaleString());
        $('#p2_val').html(data[0].fieldData.P2.toLocaleString());
        $('#p3_val').html(data[0].fieldData.P3.toLocaleString());
        $('#p4_val').html(data[0].fieldData.P4.toLocaleString());
        $('#p5_val').html(data[0].fieldData.P5.toLocaleString());
        $('#p6_val').html(data[0].fieldData.P6.toLocaleString());
        $('#noinspect_val').html(data[0].fieldData.no_inspect.toLocaleString());
        $('#total_val').html(data[0].fieldData.total_status.toLocaleString());
    }

    function get_info(id_line) {
        $.ajax({
            type: "GET",
            url: "https://" + url_api + "/fmi/data/v2/databases/Vessel/layouts/info_api/script/Vessel_api_info?script.param=" + id_line,
            dataType: 'json',
            headers: {
                "Authorization": "Bearer " + _token_vessel,
                "Content-Type": "application/json"
            },
            async: false,
            success: function (data) {
                var scriptResult = JSON.parse(data.response.scriptResult)
                console.log(scriptResult);
                call_modal_info(scriptResult);
            },
            error: function (error) {
                console.log(error);
                get_token_vessel();
                _token_vessel = $.cookie("_token_vessel");
                get_info(id_line)
                //logout();
            }
        });
    }

    function get_adhoc(id_line) {
        var dataFile = "";
        $.ajax({
            type: "POST",
            url: "https://" + url_api + "/fmi/data/v2/databases/Vessel/layouts/adhoc_document/_find",
            dataType: 'json',
            headers: {
                "Authorization": "Bearer " + _token_vessel,
                "Content-Type": "application/json"
            },
            data: JSON.stringify({
                    "query": [
                        {
                            "id_line": "==" + id_line
                        }
                    ]
                }),
            async: false,
            success: function (data) {
                console.log(data);
                dataFile = data.response.data;
            },
            error: function (error) {
                console.log(error);
                console.log(error.responseJSON.messages[0].code);
                if(error.responseJSON.messages[0].code == 401) {
                    // alert("no library file");
                }else {
                    get_token_vessel();
                    _token_vessel = $.cookie("_token_vessel");
                    call_modal_library(id_line);
                }
            }
        });

        const dataGrid = $("#grid_adhoc_report").dxDataGrid({
            dataSource: dataFile,
            keyExpr: "fieldData.id_file",

            paging: {
                pageSize: 5
            },
            pager: {
                showPageSizeSelector: true,
                allowedPageSizes: [5, 10, 20],
                showInfo: true
            },
            export: {
                enabled: true
            },
            searchPanel: {
                visible: true
            },
            filterRow: {
                visible: true,
                applyFilter: "auto"
            },
            headerFilter: {
                visible: true
            },

            allowColumnReordering: true,
            allowColumnResizing: true,
            columnAutoWidth: true,

            columnChooser: {
                enabled: true,
                mode: "dragAndDrop"
            },
            focusedRowEnabled: true,
            showRowLines: true,
            wordWrapEnabled: true,
            columns: [
                {
                    caption: "ID",
                    headerCellTemplate: function (container) {
                        container.append($("<div>ID</div>"));
                    },
                    dataField: "fieldData.id_file",
                    sortOrder: 'desc',
                    visible: false
                },
                {
                    caption: "File Name",
                    headerCellTemplate: function (container) {
                        container.append($("<div>File Name</div>"));
                    },
                    dataField: "fieldData.file_name_manual",
                },
                {
                    caption: "File Type",
                    width: "150px",
                    alignment: "center",
                    headerCellTemplate: function (container) {
                        container.append($("<div>File Type</div>"));
                    },
                    dataField: "fieldData.file_extension",
                },
                {
                    caption: "File Download",
                    width: "150px",
                    headerCellTemplate: function (container) {
                        container.append($("<div>File Download</div>"));
                    },
                    dataField: "fieldData.file",
                    alignment: "center",
                    cellTemplate: function (container, options) {
                        console.log(options);
                        $('<a class="btn btn-primary btn-sm" href="' + options.data.fieldData.file + '" download="' + options.data.fieldData.file_name_manual + '.' + options.data.fieldData.file_extension.replace(/(?:\\[rn]|[\r\n]+)+/g, "") + '" target="_blank")>Download</a>').addClass('').appendTo(container);
                        //$('<a class="btn btn-primary btn-sm" onclick=get_file("' + options.data.fieldData.file + '","' + options.data.fieldData.file_name + '")>Download</a>').addClass('').appendTo(container);
                    },
                },
            ],
            repaintChangesOnly: true,
            showBorders: true
        }).dxDataGrid('instance');
    }

    function get_cui(id_line) {
        var dataFile = "";
        $.ajax({
            type: "POST",
            url: "https://" + url_api + "/fmi/data/v2/databases/Vessel/layouts/cui_document/_find",
            dataType: 'json',
            headers: {
                "Authorization": "Bearer " + _token_vessel,
                "Content-Type": "application/json"
            },
            data: JSON.stringify({
                    "query": [
                        {
                            "id_line": "==" + id_line
                        }
                    ]
                }),
            async: false,
            success: function (data) {
                console.log(data);
                dataFile = data.response.data;
            },
            error: function (error) {
                console.log(error);
                console.log(error.responseJSON.messages[0].code);
                if(error.responseJSON.messages[0].code == 401) {
                    // alert("no library file");
                }else {
                    get_token_vessel();
                    _token_vessel = $.cookie("_token_vessel");
                    call_modal_library(id_line);
                }
            }
        });

        const dataGrid = $("#grid_cui_report").dxDataGrid({
            dataSource: dataFile,
            keyExpr: "fieldData.id_file",

            paging: {
                pageSize: 5
            },
            pager: {
                showPageSizeSelector: true,
                allowedPageSizes: [5, 10, 20],
                showInfo: true
            },
            export: {
                enabled: true
            },
            searchPanel: {
                visible: true
            },
            filterRow: {
                visible: true,
                applyFilter: "auto"
            },
            headerFilter: {
                visible: true
            },

            allowColumnReordering: true,
            allowColumnResizing: true,
            columnAutoWidth: true,

            columnChooser: {
                enabled: true,
                mode: "dragAndDrop"
            },
            focusedRowEnabled: true,
            showRowLines: true,
            wordWrapEnabled: true,
            columns: [
                {
                    caption: "ID",
                    headerCellTemplate: function (container) {
                        container.append($("<div>ID</div>"));
                    },
                    dataField: "fieldData.id_file",
                    sortOrder: 'desc',
                    visible: false
                },
                {
                    caption: "File Name",
                    headerCellTemplate: function (container) {
                        container.append($("<div>File Name</div>"));
                    },
                    dataField: "fieldData.file_name_manual",
                },
                {
                    caption: "File Type",
                    width: "150px",
                    alignment: "center",
                    headerCellTemplate: function (container) {
                        container.append($("<div>File Type</div>"));
                    },
                    dataField: "fieldData.file_extension",
                },
                {
                    caption: "File Download",
                    width: "150px",
                    headerCellTemplate: function (container) {
                        container.append($("<div>File Download</div>"));
                    },
                    dataField: "fieldData.file",
                    alignment: "center",
                    cellTemplate: function (container, options) {
                        console.log(options);
                        $('<a class="btn btn-primary btn-sm" href="' + options.data.fieldData.file + '" download="' + options.data.fieldData.file_name_manual + '.' + options.data.fieldData.file_extension.replace(/(?:\\[rn]|[\r\n]+)+/g, "") + '" target="_blank")>Download</a>').addClass('').appendTo(container);
                        //$('<a class="btn btn-primary btn-sm" onclick=get_file("' + options.data.fieldData.file + '","' + options.data.fieldData.file_name + '")>Download</a>').addClass('').appendTo(container);
                    },
                },
            ],
            repaintChangesOnly: true,
            showBorders: true
        }).dxDataGrid('instance');
    }

    function get_insp_report(id_line) {
        var dataFile = "";
        $.ajax({
            type: "POST",
            url: "https://" + url_api + "/fmi/data/v2/databases/Vessel/layouts/inspection_document/_find",
            dataType: 'json',
            headers: {
                "Authorization": "Bearer " + _token_vessel,
                "Content-Type": "application/json"
            },
            data: JSON.stringify({
                    "query": [
                        {
                            "id_line": "==" + id_line
                        }
                    ]
                }),
            async: false,
            success: function (data) {
                console.log(data);
                dataFile = data.response.data;
            },
            error: function (error) {
                console.log(error);
                console.log(error.responseJSON.messages[0].code);
                if(error.responseJSON.messages[0].code == 401) {
                    // alert("no library file");
                }else {
                    get_token_vessel();
                    _token_vessel = $.cookie("_token_vessel");
                    call_modal_library(id_line);
                }
            }
        });

        const dataGrid = $("#grid_insp_report").dxDataGrid({
            dataSource: dataFile,
            keyExpr: "fieldData.id_file",

            paging: {
                pageSize: 5
            },
            pager: {
                showPageSizeSelector: true,
                allowedPageSizes: [5, 10, 20],
                showInfo: true
            },
            export: {
                enabled: true
            },
            searchPanel: {
                visible: true
            },
            filterRow: {
                visible: true,
                applyFilter: "auto"
            },
            headerFilter: {
                visible: true
            },

            allowColumnReordering: true,
            allowColumnResizing: true,
            columnAutoWidth: true,

            columnChooser: {
                enabled: true,
                mode: "dragAndDrop"
            },
            focusedRowEnabled: true,
            showRowLines: true,
            wordWrapEnabled: true,
            columns: [
                {
                    caption: "ID",
                    headerCellTemplate: function (container) {
                        container.append($("<div>ID</div>"));
                    },
                    dataField: "fieldData.id_file",
                    sortOrder: 'desc',
                    visible: false
                },
                {
                    caption: "File Name",
                    headerCellTemplate: function (container) {
                        container.append($("<div>File Name</div>"));
                    },
                    dataField: "fieldData.file_name_manual",
                },
                {
                    caption: "File Type",
                    width: "150px",
                    alignment: "center",
                    headerCellTemplate: function (container) {
                        container.append($("<div>File Type</div>"));
                    },
                    dataField: "fieldData.file_extension",
                },
                {
                    caption: "File Download",
                    width: "150px",
                    headerCellTemplate: function (container) {
                        container.append($("<div>File Download</div>"));
                    },
                    dataField: "fieldData.file",
                    alignment: "center",
                    cellTemplate: function (container, options) {
                        console.log(options);
                        $('<a class="btn btn-primary btn-sm" href="' + options.data.fieldData.file + '" download="' + options.data.fieldData.file_name_manual + '.' + options.data.fieldData.file_extension.replace(/(?:\\[rn]|[\r\n]+)+/g, "") + '" target="_blank")>Download</a>').addClass('').appendTo(container);
                        //$('<a class="btn btn-primary btn-sm" onclick=get_file("' + options.data.fieldData.file + '","' + options.data.fieldData.file_name + '")>Download</a>').addClass('').appendTo(container);
                    },
                },
            ],
            repaintChangesOnly: true,
            showBorders: true
        }).dxDataGrid('instance');
    }

    function get_gen_doc(id_line) {
        var dataFile = "";
        $.ajax({
            type: "POST",
            url: "https://" + url_api + "/fmi/data/v2/databases/Vessel/layouts/general_document/_find",
            dataType: 'json',
            headers: {
                "Authorization": "Bearer " + _token_vessel,
                "Content-Type": "application/json"
            },
            data: JSON.stringify({
                    "query": [
                        {
                            "id_line": "==" + id_line
                        }
                    ]
                }),
            async: false,
            success: function (data) {
                console.log(data);
                dataFile = data.response.data;
            },
            error: function (error) {
                console.log(error);
                console.log(error.responseJSON.messages[0].code);
                if(error.responseJSON.messages[0].code == 401) {
                    // alert("no library file");
                }else {
                    get_token_vessel();
                    _token_vessel = $.cookie("_token_vessel");
                    call_modal_library(id_line);
                }
            }
        });

        const dataGrid = $("#grid_doc_report").dxDataGrid({
            dataSource: dataFile,
            keyExpr: "fieldData.id_file",

            paging: {
                pageSize: 5
            },
            pager: {
                showPageSizeSelector: true,
                allowedPageSizes: [5, 10, 20],
                showInfo: true
            },
            export: {
                enabled: true
            },
            searchPanel: {
                visible: true
            },
            filterRow: {
                visible: true,
                applyFilter: "auto"
            },
            headerFilter: {
                visible: true
            },

            allowColumnReordering: true,
            allowColumnResizing: true,
            columnAutoWidth: true,

            columnChooser: {
                enabled: true,
                mode: "dragAndDrop"
            },
            focusedRowEnabled: true,
            showRowLines: true,
            wordWrapEnabled: true,
            columns: [
                {
                    caption: "ID",
                    headerCellTemplate: function (container) {
                        container.append($("<div>ID</div>"));
                    },
                    dataField: "fieldData.id_file",
                    sortOrder: 'desc',
                    visible: false
                },
                {
                    caption: "File Name",
                    headerCellTemplate: function (container) {
                        container.append($("<div>File Name</div>"));
                    },
                    dataField: "fieldData.file_name_manual",
                },
                {
                    caption: "File Type",
                    width: "150px",
                    alignment: "center",
                    headerCellTemplate: function (container) {
                        container.append($("<div>File Type</div>"));
                    },
                    dataField: "fieldData.file_extension",
                },
                {
                    caption: "File Download",
                    width: "150px",
                    headerCellTemplate: function (container) {
                        container.append($("<div>File Download</div>"));
                    },
                    dataField: "fieldData.file",
                    alignment: "center",
                    cellTemplate: function (container, options) {
                        console.log(options);
                        $('<a class="btn btn-primary btn-sm" href="' + options.data.fieldData.file + '" download="' + options.data.fieldData.file_name_manual + '.' + options.data.fieldData.file_extension.replace(/(?:\\[rn]|[\r\n]+)+/g, "") + '" target="_blank")>Download</a>').addClass('').appendTo(container);
                        //$('<a class="btn btn-primary btn-sm" onclick=get_file("' + options.data.fieldData.file + '","' + options.data.fieldData.file_name + '")>Download</a>').addClass('').appendTo(container);
                    },
                },
            ],
            repaintChangesOnly: true,
            showBorders: true
        }).dxDataGrid('instance');
    }

    function call_modal_info(data) {
        $('#tag_no').val(data[0].tag_no);
        $('#tag_no').tooltip('dispose').tooltip({ title: data[0].tag_no }).tooltip({ 'trigger': 'hover' })
        $('#vessel_no').val(data[0].vessel_no);
        $('#vessel_no').tooltip('dispose').tooltip({ title: data[0].vessel_no }).tooltip({ 'trigger': 'hover' })
        $('#platform').val(data[0].platform_codename);
        $('#platform').tooltip('dispose').tooltip({ title: data[0].platform_codename }).tooltip({ 'trigger': 'hover' })
        $('#equipment_type').val(data[0].equipment_type);
        $('#equipment_type').tooltip('dispose').tooltip({ title: data[0].equipment_type }).tooltip({ 'trigger': 'hover' })
        $('#equipment_desc').val(data[0].equipment_desc);
        $('#equipment_desc').tooltip('dispose').tooltip({ title: data[0].equipment_desc }).tooltip({ 'trigger': 'hover' })
        $('#orientation').val(data[0].orientation);
        $('#orientation').tooltip('dispose').tooltip({ title: data[0].orientation }).tooltip({ 'trigger': 'hover' })
        $('#pid_no').val(data[0].pid_no);
        $('#pid_no').tooltip('dispose').tooltip({ title: data[0].pid_no }).tooltip({ 'trigger': 'hover' })
        $('#drawing_no').val(data[0].drawing_no);
        $('#drawing_no').tooltip('dispose').tooltip({ title: data[0].drawing_no }).tooltip({ 'trigger': 'hover' })
        $('#height_mm').val(data[0].height_mm.toFixed(2));
        $('#height_mm').tooltip('dispose').tooltip({ title: data[0].height_mm.toFixed(2) }).tooltip({ 'trigger': 'hover' })
        $('#design_code').val(data[0].design_code);
        $('#design_code').tooltip('dispose').tooltip({ title: data[0].design_code }).tooltip({ 'trigger': 'hover' })
        $('#inservice_date').val(convert_date_format(data[0].inservice_date));
        $('#inservice_date').tooltip('dispose').tooltip({ title: convert_date_format(data[0].inservice_date) }).tooltip({ 'trigger': 'hover' })
        $('#CA').val(data[0].CA.toFixed(2));
        $('#CA').tooltip('dispose').tooltip({ title: data[0].CA.toFixed(2) }).tooltip({ 'trigger': 'hover' })
        $('#design_life').val(data[0].design_life.toFixed(2));
        $('#design_life').tooltip('dispose').tooltip({ title: data[0].design_life.toFixed(2) }).tooltip({ 'trigger': 'hover' })
        $('#cladding_material').val(data[0].cladding_material);
        $('#cladding_material').tooltip('dispose').tooltip({ title: data[0].cladding_material }).tooltip({ 'trigger': 'hover' })
        $('#internal_lining').val(data[0].internal_lining);
        $('#internal_lining').tooltip('dispose').tooltip({ title: data[0].internal_lining }).tooltip({ 'trigger': 'hover' })
        $('#internal_coating').val(data[0].internal_coating);
        $('#internal_coating').tooltip('dispose').tooltip({ title: data[0].internal_coating }).tooltip({ 'trigger': 'hover' })
        $('#insulation').val(data[0].insulation);
        $('#insulation').tooltip('dispose').tooltip({ title: data[0].insulation }).tooltip({ 'trigger': 'hover' })
        $('#insulation_type').val(data[0].insulation_type);
        $('#insulation_type').tooltip('dispose').tooltip({ title: data[0].insulation_type }).tooltip({ 'trigger': 'hover' })
        $('#insulation_size').val(data[0].insulation_size.toFixed(2));
        $('#insulation_size').tooltip('dispose').tooltip({ title: data[0].insulation_size.toFixed(2) }).tooltip({ 'trigger': 'hover' })
        $('#component_group_1').val(data[0].component_group_1);
        $('#component_group_1').tooltip('dispose').tooltip({ title: data[0].component_group_1 }).tooltip({ 'trigger': 'hover' })
        $('#design_pressure_psi_1').val(data[0].design_pressure_psi_1.toFixed(2));
        $('#design_pressure_psi_1').tooltip('dispose').tooltip({ title: data[0].design_pressure_psi_1.toFixed(2) }).tooltip({ 'trigger': 'hover' })
        $('#design_temp_c_1').val(data[0].design_temp_c_1);
        $('#design_temp_c_1').tooltip('dispose').tooltip({ title: data[0].design_temp_c_1 }).tooltip({ 'trigger': 'hover' })
        $('#operating_pressure_psi_1').val(data[0].operating_pressure_psi_1.toFixed(2));
        $('#operating_pressure_psi_1').tooltip('dispose').tooltip({ title: data[0].operating_pressure_psi_1.toFixed(2) }).tooltip({ 'trigger': 'hover' })
        $('#operating_temp_c_1').val(data[0].operating_temp_c_1.toFixed(2));
        $('#operating_temp_c_1').tooltip('dispose').tooltip({ title: data[0].operating_temp_c_1.toFixed(2) }).tooltip({ 'trigger': 'hover' })
        $('#corrosion_loop_1').val(data[0].corrosion_loop_1);
        $('#corrosion_loop_1').tooltip('dispose').tooltip({ title: data[0].corrosion_loop_1 }).tooltip({ 'trigger': 'hover' })
        $('#component_group_2').val(data[0].component_group_2);
        $('#component_group_2').tooltip('dispose').tooltip({ title: data[0].component_group_2 }).tooltip({ 'trigger': 'hover' })
        $('#design_pressure_psi_2').val(data[0].design_pressure_psi_2.toFixed(2));
        $('#design_pressure_psi_2').tooltip('dispose').tooltip({ title: data[0].design_pressure_psi_2.toFixed(2) }).tooltip({ 'trigger': 'hover' })
        $('#design_temp_c_2').val(data[0].design_temp_c_2);
        $('#design_temp_c_2').tooltip('dispose').tooltip({ title: data[0].design_temp_c_2 }).tooltip({ 'trigger': 'hover' })
        $('#operating_pressure_psi_2').val(data[0].operating_pressure_psi_2.toFixed(2));
        $('#operating_pressure_psi_2').tooltip('dispose').tooltip({ title: data[0].operating_pressure_psi_2.toFixed(2) }).tooltip({ 'trigger': 'hover' })
        $('#operating_temp_c_2').val(data[0].operating_temp_c_2.toFixed(2));
        $('#operating_temp_c_2').tooltip('dispose').tooltip({ title: data[0].operating_temp_c_2.toFixed(2) }).tooltip({ 'trigger': 'hover' })
        $('#corrosion_loop_2').val(data[0].corrosion_loop_2);
        $('#corrosion_loop_2').tooltip('dispose').tooltip({ title: data[0].corrosion_loop_2 }).tooltip({ 'trigger': 'hover' });
        $('#m_o_c').val(data[0].m_o_c);
        $('#m_o_c').tooltip('dispose').tooltip({ title: data[0].m_o_c }).tooltip({ 'trigger': 'hover' });

        $("#info_modal").modal('show');
    }

    function call_modal_library(id_line) {
        console.log(id_line);
        get_adhoc(id_line);
        get_cui(id_line);
        get_insp_report(id_line);
        get_gen_doc(id_line);
        $('#library_modal').modal('show');
    }

    function call_modal_rbi(o) {
        console.log(o.data.fieldData.risk_level);
        console.log(o.data.fieldData.rbi_recommendation);
        $('#rbi_modal').modal('show');
        if(riskLvId) {
            $('#' + riskLvId).html("");
        }
        $('.rbi-item').removeAttr('selected');
        $('#' + o.data.fieldData.risk_level).attr('selected', true).html(o.data.fieldData.risk_level);
        riskLvId = o.data.fieldData.risk_level;
        $('#rec').val(o.data.fieldData.rbi_recommendation);
    }

    function get_inspection_history(id_line,tag_no) {
        console.log(id_line);
        let history_list_routine = '';
        let history_list_other = '';
        $.ajax({
            type: "POST",
            url: "https://" + url_api + "/fmi/data/v2/databases/Vessel/layouts/report_table/_find",
            dataType: 'json',
            headers: {
                "Authorization": "Bearer " + _token_vessel,
                "Content-Type": "application/json"
            },
            data: JSON.stringify({
                    "query": [
                        {
                            "id_line": "==" + id_line
                        }
                    ]
                }),
            async: false,
            success: function (data) {
                console.log('report_data:', data.response.data);
                history_list_routine = data.response.data.filter(r => r.fieldData.inspection_type == 'External' || r.fieldData.inspection_type == 'Internal/OSI');
                history_list_other = data.response.data.filter(r => r.fieldData.inspection_type == 'Monitoring' || r.fieldData.inspection_type == 'Anomaly Monitoring' || r.fieldData.inspection_type == 'Adhoc');
            },
            error: function (error) {
                console.log(error);
                console.log(error.responseJSON.messages[0].code);
                if(error.responseJSON.messages[0].code == 401) {
                    // no record match
                } else {
                    get_token_vessel();
                    _token_piping = $.cookie("_token_vessel");
                    get_inspection_history(id_line,tag_no);
                }
            }
        });

        $('#history_modal').modal('show');
        $('#history_tag_no').html(tag_no);

        const dataGridRoutine = $("#grid_inspection_history_routine").dxDataGrid({
            dataSource: history_list_routine,
            keyExpr: "fieldData.id_report",
            paging: {
                pageSize: 5
            },
            pager: {
                showPageSizeSelector: true,
                allowedPageSizes: [5, 10, 20],
                showInfo: true
            },
            export: {
                enabled: false
            },
            searchPanel: {
                visible: false
            },
            filterRow: {
                visible: false,
            },
            headerFilter: {
                visible: false
            },
            allowColumnReordering: true,
            allowColumnResizing: true,
            columnAutoWidth: true,
            columnChooser: {
                enabled: false,
                mode: "dragAndDrop"
            },
            focusedRowEnabled: true,
            showRowLines: true,
            wordWrapEnabled: true,
            columns: [
                {
                    caption: "IT Number",
                    headerCellTemplate: function (container) {
                        container.append($("<div>IT Number</div>"));
                    },
                    dataField: "fieldData.wo_number",
                    alignment: "center",
                    width: '140'
                },
                {
                    caption: "Inspection Date",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Inspection Date</div>"));
                    },
                    dataField: "fieldData.actual_inspection_date_display",
                    dataType: 'date',  
                    format: 'dd MMM yyyy',
                    alignment: "center",
                    sortOrder: 'desc',
                    width: '140'
                },
                {
                    caption: "Inspection Type",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Inspection Type</div>"));
                    },
                    dataField: "fieldData.inspection_type",
                    alignment: "center",
                    width: '140'
                },
                {
                    caption: "Report Name",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Report Name</div>"));
                    },
                    dataField: "fieldData.report_no",
                },
                {
                    caption: "Thickness Status",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Thickness<br>Status</div>"));
                    },
                    dataField: "fieldData.status_thickness",
                    alignment: "center",
                    width: '140'
                },
                {
                    caption: "Visual Status",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Visual<br>Status</div>"));
                    },
                    dataField: "fieldData.status_visual",
                    alignment: "center",
                    width: '140'
                },
                {
                    caption: "Inspection Report",
                    width: "150px",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Inspection Report</div>"));
                    },
                    dataField: "fieldData.file",
                    alignment: "center",
                    cellTemplate: function (container, options) {
                        console.log(options);
                        if(options.data.fieldData.file_name) {
                            $('<a class="btn btn-primary btn-sm" href="' + options.data.fieldData.file + '" download="' + options.data.fieldData.file_name + '" target="_blank")>Download</a>').addClass('').appendTo(container);
                        }
                    },
                },
            ],
            masterDetail: {
                enabled: true,
                template(container, options) {
                    const inspData = options.data;
                    let repair_list = '';
                    $.ajax({
                        type: "POST",
                        url: "https://" + url_api + "/fmi/data/v2/databases/Vessel/layouts/SAP_notify_header_data_export/_find",
                        dataType: 'json',
                        headers: {
                            "Authorization": "Bearer " + _token_vessel,
                            "Content-Type": "application/json"
                        },
                        data: JSON.stringify({
                                "query": [
                                    {
                                        "id_report": "==" + inspData.fieldData.id_report
                                    }
                                ]
                            }),
                        async: false,
                        success: function (data) {
                            console.log('repair_list:', data.response.data);
                            repair_list = data.response.data;
                        },
                        error: function (error) {
                            console.log(error);
                            console.log(error.responseJSON.messages[0].code);
                            if(error.responseJSON.messages[0].code == 401) {
                                // no record match
                            } else {
                                get_token_vessel();
                                _token_piping = $.cookie("_token_vessel");
                            }
                        }
                    });
                    $('<div>')
                        .addClass('master-detail-caption')
                        .html(``)
                        .appendTo(container);

                    $('<div>').dxDataGrid({
                        dataSource: repair_list,
                        keyExpr: "fieldData.id_data",
                        paging: {
                            pageSize: 5
                        },
                        pager: {
                            showPageSizeSelector: true,
                            allowedPageSizes: [5, 10, 20],
                            showInfo: true
                        },
                        export: {
                            enabled: false
                        },
                        searchPanel: {
                            visible: false
                        },
                        filterRow: {
                            visible: false,
                        },
                        headerFilter: {
                            visible: false
                        },
                        allowColumnReordering: true,
                        allowColumnResizing: true,
                        columnAutoWidth: true,
                        columnChooser: {
                            enabled: false,
                            mode: "dragAndDrop"
                        },
                        focusedRowEnabled: true,
                        showRowLines: true,
                        wordWrapEnabled: true,
                        columns: [
                            {
                                caption: "Notification",
                                headerCellTemplate: function (container) {
                                    container.append($("<div>Notification</div>"));
                                },
                                dataField: "fieldData.notification",
                                alignment: "center",
                                width: '140'
                            },
                            {
                                caption: "WO Number",
                                headerCellTemplate: function (container) {
                                    container.append($("<div>WO Number</div>"));
                                },
                                dataField: "fieldData.SAP_order_no",
                                alignment: "center",
                                width: '140'
                            },
                            {
                                caption: "Integrity Status",
                                headerCellTemplate: function (container) {
                                    container.append($("<div>Integrity<br>Status</div>"));
                                },
                                dataField: "fieldData.integrity_status",
                                alignment: "center",
                                width: '100'
                            },
                            {
                                caption: "Main WorkCtr",
                                headerCellTemplate: function (container) {
                                    container.append($("<div>Main<br>WorkCtr</div>"));
                                },
                                dataField: "fieldData.SAP_main_workctr",
                                alignment: "center",
                                width: '100'
                            },
                            {
                                caption: "Repair Type",
                                headerCellTemplate: function (container) {
                                    container.append($("<div>Repair Type</div>"));
                                },
                                dataField: "fieldData.repair_type",
                                alignment: "center",
                                width: '100'
                            },
                            {
                                caption: "Repair Method",
                                headerCellTemplate: function (container) {
                                    container.append($("<div>Repair Method</div>"));
                                },
                                dataField: "fieldData.repair_method",
                                alignment: "left",
                                width: '140'
                            },
                            {
                                caption: "Required End Date",
                                headerCellTemplate: function (container) {
                                    container.append($("<div>Required End Date</div>"));
                                },
                                dataField: "fieldData.required_end_date",
                                dataType: 'date',  
                                format: 'dd MMM yyyy',
                                alignment: "center",
                                width: '140'
                            },
                            {
                                caption: "Status",
                                headerCellTemplate: function (container) {
                                    container.append($("<div>Status</div>"));
                                },
                                dataField: "fieldData.status",
                                alignment: "center",
                                width: '140'
                            },
                            {
                                caption: "Inspection Report",
                                width: "150px",
                                headerCellTemplate: function (container) {
                                    container.append($("<div>Inspection Report</div>"));
                                },
                                dataField: "fieldData.file",
                                alignment: "center",
                                cellTemplate: function (container, options) {
                                    console.log(options);
                                    if(options.data.fieldData['inspection_document_for_SAP::file_name']) {
                                        $('<a class="btn btn-primary btn-sm" href="' + options.data.fieldData['inspection_document_for_SAP::file'] + '" download="' + options.data.fieldData['inspection_document_for_SAP::file_name'] + '" target="_blank")>Download</a>').addClass('').appendTo(container);
                                    }
                                },
                            },
                            {
                                caption: "Repair Report",
                                headerCellTemplate: function (container) {
                                    container.append($("<div>Repair Report</div>"));
                                },
                                dataField: "fieldData.id_repair_report",
                                alignment: "center",
                                cellTemplate: function (container, options) {
                                    console.log(options);
                                    if(options.data.fieldData.id_repair_report) {
                                        $('<a target="_blank" href="https://aims-muda.cpoc.com.my:444/repair-report/edit/' + options.data.fieldData.id_repair_report + '">Link</a>').addClass('').appendTo(container);
                                    }
                                },
                            },
                        ],
                        onCellPrepared: function (e) {
                            if (e.rowType === "data" && e.column.dataField === "fieldData.integrity_status") {
                                e.cellElement.css("background-color", e.data.fieldData.integrity_status == "P1" ? "#FF0000" : e.data.fieldData.integrity_status == "P2" ? "#F69546" : e.data.fieldData.integrity_status == "P3" ? "#FFCC00" : e.data.fieldData.integrity_status == "P4" ? "#FFFF00" : e.data.fieldData.integrity_status == "P5" ? "#66FF33" : e.data.fieldData.integrity_status == "P6" ? "#43a047" : "");
                            }
                        },
                        repaintChangesOnly: true,
                        showBorders: true,
                    }).appendTo(container);

                }
            },
            repaintChangesOnly: true,
            showBorders: true,
            onCellPrepared: function (e) {
                if (e.rowType === "data" && e.column.dataField === "fieldData.status_thickness") {
                    e.cellElement.css("background-color", e.data.fieldData.status_thickness == "P1" ? "#FF0000" : e.data.fieldData.status_thickness == "P2" ? "#F69546" : e.data.fieldData.status_thickness == "P3" ? "#FFCC00" : e.data.fieldData.status_thickness == "P4" ? "#FFFF00" : e.data.fieldData.status_thickness == "P5" ? "#66FF33" : e.data.fieldData.status_thickness == "P6" ? "#43a047" : "");
                }
                if (e.rowType === "data" && e.column.dataField === "fieldData.status_visual") {
                    e.cellElement.css("background-color", e.data.fieldData.status_visual == "P1" ? "#FF0000" : e.data.fieldData.status_visual == "P2" ? "#F69546" : e.data.fieldData.status_visual == "P3" ? "#FFCC00" : e.data.fieldData.status_visual == "P4" ? "#FFFF00" : e.data.fieldData.status_visual == "P5" ? "#66FF33" : e.data.fieldData.status_visual == "P6" ? "#43a047" : "");
                }
            }
        }).dxDataGrid('instance');

        const dataGridOther = $("#grid_inspection_history_other").dxDataGrid({
            dataSource: history_list_other,
            keyExpr: "fieldData.id_report",
            paging: {
                pageSize: 5
            },
            pager: {
                showPageSizeSelector: true,
                allowedPageSizes: [5, 10, 20],
                showInfo: true
            },
            export: {
                enabled: false
            },
            searchPanel: {
                visible: false
            },
            filterRow: {
                visible: false,
            },
            headerFilter: {
                visible: false
            },
            allowColumnReordering: true,
            allowColumnResizing: true,
            columnAutoWidth: true,
            columnChooser: {
                enabled: false,
                mode: "dragAndDrop"
            },
            focusedRowEnabled: true,
            showRowLines: true,
            wordWrapEnabled: true,
            columns: [
                {
                    caption: "IT Number",
                    headerCellTemplate: function (container) {
                        container.append($("<div>IT Number</div>"));
                    },
                    dataField: "fieldData.wo_number",
                    alignment: "center",
                    width: '140'
                },
                {
                    caption: "Inspection Date",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Inspection Date</div>"));
                    },
                    dataField: "fieldData.actual_inspection_date_display",
                    dataType: 'date',  
                    format: 'dd MMM yyyy',
                    alignment: "center",
                    sortOrder: 'desc',
                    width: '140'
                },
                {
                    caption: "Inspection Type",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Inspection Type</div>"));
                    },
                    dataField: "fieldData.inspection_type",
                    alignment: "center",
                    width: '140'
                },
                {
                    caption: "Report Name",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Report Name</div>"));
                    },
                    dataField: "fieldData.report_no",
                },
                {
                    caption: "Thickness Status",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Thickness<br>Status</div>"));
                    },
                    dataField: "fieldData.status_thickness",
                    alignment: "center",
                    width: '140'
                },
                {
                    caption: "Visual Status",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Visual<br>Status</div>"));
                    },
                    dataField: "fieldData.status_visual",
                    alignment: "center",
                    width: '140'
                },
                {
                    caption: "Inspection Report",
                    width: "150px",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Inspection Report</div>"));
                    },
                    dataField: "fieldData.file",
                    alignment: "center",
                    cellTemplate: function (container, options) {
                        console.log(options);
                        if(options.data.fieldData.file_name) {
                            $('<a class="btn btn-primary btn-sm" href="' + options.data.fieldData.file + '" download="' + options.data.fieldData.file_name + '" target="_blank")>Download</a>').addClass('').appendTo(container);
                        }
                    },
                },
            ],
            masterDetail: {
                enabled: true,
                template(container, options) {
                    const inspData = options.data;
                    let repair_list = '';
                    $.ajax({
                        type: "POST",
                        url: "https://" + url_api + "/fmi/data/v2/databases/Vessel/layouts/SAP_notify_header_data_export/_find",
                        dataType: 'json',
                        headers: {
                            "Authorization": "Bearer " + _token_vessel,
                            "Content-Type": "application/json"
                        },
                        data: JSON.stringify({
                                "query": [
                                    {
                                        "id_report": "==" + inspData.fieldData.id_report
                                    }
                                ]
                            }),
                        async: false,
                        success: function (data) {
                            console.log('repair_list:', data.response.data);
                            repair_list = data.response.data;
                        },
                        error: function (error) {
                            console.log(error);
                            console.log(error.responseJSON.messages[0].code);
                            if(error.responseJSON.messages[0].code == 401) {
                                // no record match
                            } else {
                                get_token_vessel();
                                _token_piping = $.cookie("_token_vessel");
                            }
                        }
                    });
                    $('<div>')
                        .addClass('master-detail-caption')
                        .html(``)
                        .appendTo(container);

                    $('<div>').dxDataGrid({
                        dataSource: repair_list,
                        keyExpr: "fieldData.id_data",
                        paging: {
                            pageSize: 5
                        },
                        pager: {
                            showPageSizeSelector: true,
                            allowedPageSizes: [5, 10, 20],
                            showInfo: true
                        },
                        export: {
                            enabled: false
                        },
                        searchPanel: {
                            visible: false
                        },
                        filterRow: {
                            visible: false,
                        },
                        headerFilter: {
                            visible: false
                        },
                        allowColumnReordering: true,
                        allowColumnResizing: true,
                        columnAutoWidth: true,
                        columnChooser: {
                            enabled: false,
                            mode: "dragAndDrop"
                        },
                        focusedRowEnabled: true,
                        showRowLines: true,
                        wordWrapEnabled: true,
                        columns: [
                            {
                                caption: "Notification",
                                headerCellTemplate: function (container) {
                                    container.append($("<div>Notification</div>"));
                                },
                                dataField: "fieldData.notification",
                                alignment: "center",
                                width: '140'
                            },
                            {
                                caption: "WO Number",
                                headerCellTemplate: function (container) {
                                    container.append($("<div>WO Number</div>"));
                                },
                                dataField: "fieldData.SAP_order_no",
                                alignment: "center",
                                width: '140'
                            },
                            {
                                caption: "Integrity Status",
                                headerCellTemplate: function (container) {
                                    container.append($("<div>Integrity<br>Status</div>"));
                                },
                                dataField: "fieldData.integrity_status",
                                alignment: "center",
                                width: '100'
                            },
                            {
                                caption: "Main WorkCtr",
                                headerCellTemplate: function (container) {
                                    container.append($("<div>Main<br>WorkCtr</div>"));
                                },
                                dataField: "fieldData.SAP_main_workctr",
                                alignment: "center",
                                width: '100'
                            },
                            {
                                caption: "Repair Type",
                                headerCellTemplate: function (container) {
                                    container.append($("<div>Repair Type</div>"));
                                },
                                dataField: "fieldData.repair_type",
                                alignment: "center",
                                width: '100'
                            },
                            {
                                caption: "Repair Method",
                                headerCellTemplate: function (container) {
                                    container.append($("<div>Repair Method</div>"));
                                },
                                dataField: "fieldData.repair_method",
                                alignment: "left",
                                width: '140'
                            },
                            {
                                caption: "Required End Date",
                                headerCellTemplate: function (container) {
                                    container.append($("<div>Required End Date</div>"));
                                },
                                dataField: "fieldData.required_end_date",
                                dataType: 'date',  
                                format: 'dd MMM yyyy',
                                alignment: "center",
                                width: '140'
                            },
                            {
                                caption: "Status",
                                headerCellTemplate: function (container) {
                                    container.append($("<div>Status</div>"));
                                },
                                dataField: "fieldData.status",
                                alignment: "center",
                                width: '140'
                            },
                            {
                                caption: "Inspection Report",
                                width: "150px",
                                headerCellTemplate: function (container) {
                                    container.append($("<div>Inspection Report</div>"));
                                },
                                dataField: "fieldData.file",
                                alignment: "center",
                                cellTemplate: function (container, options) {
                                    console.log(options);
                                    if(options.data.fieldData['inspection_document_for_SAP::file_name']) {
                                        $('<a class="btn btn-primary btn-sm" href="' + options.data.fieldData['inspection_document_for_SAP::file'] + '" download="' + options.data.fieldData['inspection_document_for_SAP::file_name'] + '" target="_blank")>Download</a>').addClass('').appendTo(container);
                                    }
                                },
                            },
                            {
                                caption: "Repair Report",
                                headerCellTemplate: function (container) {
                                    container.append($("<div>Repair Report</div>"));
                                },
                                dataField: "fieldData.id_repair_report",
                                alignment: "center",
                                cellTemplate: function (container, options) {
                                    console.log(options);
                                    if(options.data.fieldData.id_repair_report) {
                                        $('<a target="_blank" href="https://aims-muda.cpoc.com.my:444/repair-report/edit/' + options.data.fieldData.id_repair_report + '">Link</a>').addClass('').appendTo(container);
                                    }
                                },
                            },
                        ],
                        onCellPrepared: function (e) {
                            if (e.rowType === "data" && e.column.dataField === "fieldData.integrity_status") {
                                e.cellElement.css("background-color", e.data.fieldData.integrity_status == "P1" ? "#FF0000" : e.data.fieldData.integrity_status == "P2" ? "#F69546" : e.data.fieldData.integrity_status == "P3" ? "#FFCC00" : e.data.fieldData.integrity_status == "P4" ? "#FFFF00" : e.data.fieldData.integrity_status == "P5" ? "#66FF33" : e.data.fieldData.integrity_status == "P6" ? "#43a047" : "");
                            }
                        },
                        repaintChangesOnly: true,
                        showBorders: true,
                    }).appendTo(container);

                }
            },
            repaintChangesOnly: true,
            showBorders: true,
            onCellPrepared: function (e) {
                if (e.rowType === "data" && e.column.dataField === "fieldData.status_thickness") {
                    e.cellElement.css("background-color", e.data.fieldData.status_thickness == "P1" ? "#FF0000" : e.data.fieldData.status_thickness == "P2" ? "#F69546" : e.data.fieldData.status_thickness == "P3" ? "#FFCC00" : e.data.fieldData.status_thickness == "P4" ? "#FFFF00" : e.data.fieldData.status_thickness == "P5" ? "#66FF33" : e.data.fieldData.status_thickness == "P6" ? "#43a047" : "");
                }
                if (e.rowType === "data" && e.column.dataField === "fieldData.status_visual") {
                    e.cellElement.css("background-color", e.data.fieldData.status_visual == "P1" ? "#FF0000" : e.data.fieldData.status_visual == "P2" ? "#F69546" : e.data.fieldData.status_visual == "P3" ? "#FFCC00" : e.data.fieldData.status_visual == "P4" ? "#FFFF00" : e.data.fieldData.status_visual == "P5" ? "#66FF33" : e.data.fieldData.status_visual == "P6" ? "#43a047" : "");
                }
            }
        }).dxDataGrid('instance');

        let dataFile = "";
        $.ajax({
            type: "POST",
            url: "https://" + url_api + "/fmi/data/v2/databases/Vessel/layouts/inspection_document/_find",
            dataType: 'json',
            headers: {
                "Authorization": "Bearer " + _token_vessel,
                "Content-Type": "application/json"
            },
            data: JSON.stringify({
                    "query": [
                        {
                            "id_line": "==" + id_line
                        }
                    ]
                }),
            async: false,
            success: function (data) {
                console.log(data);
                dataFile = data.response.data;
            },
            error: function (error) {
                console.log(error);
                console.log(error.responseJSON.messages[0].code);
                if(error.responseJSON.messages[0].code == 401) {
                    // alert("no library file");
                }else {
                    get_token_vessel();
                    _token_vessel = $.cookie("_token_vessel");
                    call_modal_library(id_line);
                }
            }
        });

        const dataGridReport = $("#grid_insp_report_history").dxDataGrid({
            dataSource: dataFile,
            keyExpr: "fieldData.id_file",

            paging: {
                pageSize: 5
            },
            pager: {
                showPageSizeSelector: true,
                allowedPageSizes: [5, 10, 20],
                showInfo: true
            },
            export: {
                enabled: false
            },
            searchPanel: {
                visible: false
            },
            filterRow: {
                visible: true,
                applyFilter: "auto"
            },
            headerFilter: {
                visible: false
            },

            allowColumnReordering: true,
            allowColumnResizing: true,
            columnAutoWidth: true,

            columnChooser: {
                enabled: false,
                mode: "dragAndDrop"
            },
            focusedRowEnabled: true,
            showRowLines: true,
            wordWrapEnabled: true,
            columns: [
                {
                    caption: "ID",
                    headerCellTemplate: function (container) {
                        container.append($("<div>ID</div>"));
                    },
                    dataField: "fieldData.id_file",
                    sortOrder: 'desc',
                    visible: false
                },
                {
                    caption: "File Name",
                    headerCellTemplate: function (container) {
                        container.append($("<div>File Name</div>"));
                    },
                    dataField: "fieldData.file_name_manual",
                },
                {
                    caption: "File Type",
                    width: "150px",
                    alignment: "center",
                    headerCellTemplate: function (container) {
                        container.append($("<div>File Type</div>"));
                    },
                    dataField: "fieldData.file_extension",
                },
                {
                    caption: "File Download",
                    width: "150px",
                    headerCellTemplate: function (container) {
                        container.append($("<div>File Download</div>"));
                    },
                    dataField: "fieldData.file",
                    alignment: "center",
                    cellTemplate: function (container, options) {
                        console.log(options);
                        $('<a class="btn btn-primary btn-sm" href="' + options.data.fieldData.file + '" download="' + options.data.fieldData.file_name_manual + '.' + options.data.fieldData.file_extension.replace(/(?:\\[rn]|[\r\n]+)+/g, "") + '" target="_blank")>Download</a>').addClass('').appendTo(container);
                        //$('<a class="btn btn-primary btn-sm" onclick=get_file("' + options.data.fieldData.file + '","' + options.data.fieldData.file_name + '")>Download</a>').addClass('').appendTo(container);
                    },
                },
            ],
            repaintChangesOnly: true,
            showBorders: true
        }).dxDataGrid('instance');
    }

    function get_file(url,file_name) {
        // console.log(url);

        fetch("donwload_lib.php", {
        method: "POST",
        headers: {
          "Content-Type": "application/x-www-form-urlencoded; charset=UTF-8",
        },
        body: `url=${url}&token=${_token_vessel}&file_name=${file_name}`,
        })
        .then((response) => response.text())
        .then((res) => (alert(res)));
    }

    function create_table(data) {
        const dataGrid = $("#dataGid").dxDataGrid({
            dataSource: data,
            keyExpr: "fieldData.id_line",
            paging: {
                pageSize: 25
            },
            pager: {
                showPageSizeSelector: true,
                allowedPageSizes: [10, 25, 50],
                showInfo: true
            },
            export: {
                enabled: true
            },
            searchPanel: {
                visible: true
            },
            filterRow: {
                visible: true,
                applyFilter: "auto"
            },
            headerFilter: {
                visible: true
            },

            allowColumnReordering: true,
            allowColumnResizing: true,
            columnAutoWidth: true,

            columnChooser: {
                enabled: true,
                mode: "dragAndDrop"
            },
            focusedRowEnabled: true,
            showRowLines: true,

            // columns: ['CompanyName', 'City', 'State', 'Phone', 'Fax'],
            columns: [
                {
                    dataField: "fieldData.id_line",
                    caption: "Info",
                    width: "150",
                    allowEditing: false,
                    alignment: "center",
                    cellTemplate: function (container, options) {
                        $('<button type="button" title="Data"></button>').addClass('btn btn-sm fas fa-list-ul')
                            .on('dxclick', function (e) {
                                console.log(options.value)
                                get_info(options.value);
                            }).appendTo(container);
                        $('<button type="button" title="Library"></button>').addClass('btn btn-sm fas fa-book')
                            .on('dxclick', function (e) {
                                console.log(options.value)
                                call_modal_library(options.value);
                            }).appendTo(container);
                        $('<button type="button" title="RBI"></button>').addClass('btn btn-sm fas fa-border-all')
                            .on('dxclick', function (e) {
                                console.log(options.value)
                                call_modal_rbi(options);
                            }).appendTo(container);
                        $('<button type="button" title="Inspection History"></button>').addClass('btn btn-sm fas fa-history')
                            .on('dxclick', function (e) {
                                get_inspection_history(options.value, options.data.fieldData.vessel_no);
                            }).appendTo(container);

                    },
                    fixed: true,
                    fixedPosition: "left",
                    allowFiltering: false,
                    allowSorting: false,
                    allowResizing: false,
                },
                {
                    caption: "Platform",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Platform</div>"));
                    },
                    dataField: "fieldData.platform_codename",
                    fixed: true,
                    fixedPosition: "left",
                    // filterValues: ["MDPP"]
                },
                {
                    caption: "PV Number",
                    headerCellTemplate: function (container) {
                        container.append($("<div>PV Number</div>"));
                    },
                    dataField: "fieldData.vessel_no",
                    fixed: true,
                    fixedPosition: "left"
                },
                {
                    caption: "Description",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Description</div>"));
                    },
                    dataField: "fieldData.equipment_desc",
                    // fixed: true,
                    // fixedPosition: "left"
                },
                {
                    caption: "Corrosion Loop",
                    columns: [{
                        caption: "Number",
                        headerCellTemplate: function (container) {
                            container.append($("<div>Number</div>"));
                        },
                        dataField: "fieldData.i_corrosion_loop_no"
                    },
                    {
                        caption: "Description",
                        headerCellTemplate: function (container) {
                            container.append($("<div>Description</div>"));
                        },
                        dataField: "fieldData.i_corrosion_loop_desc"
                    }
                    ]
                },
                {
                    caption: "Risk Ranking",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Risk Ranking</div>"));
                    },
                    dataField: "fieldData.risk_ranking"
                },
                {
                    caption: "Integrity Status",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Integrity Status</div>"));
                    },
                    dataField: "fieldData.integrity_status"
                },
                {
                    caption: "External Inspection",
                    columns: [{
                        caption: "Last",
                        headerCellTemplate: function (container) {
                            container.append($("<div>Last</div>"));
                        },
                        dataField: "fieldData.Ext_last_insp_date",
                        calculateCellValue: function (value) {
                            return get_year(value.fieldData.Ext_last_insp_date)
                        }
                    },
                    {
                        caption: "Interval (yrs)",
                        alignment: "center",
                        headerCellTemplate: function (container) {
                            container.append($("<div>Interval<br>(yrs)</div>"));
                        },
                        dataField: "fieldData.Ext_insp_interval",
                        format: {
                            type: "fixedPoint",
                            precision: 2
                        }
                    },
                    {
                        caption: "Next",
                        headerCellTemplate: function (container) {
                            container.append($("<div>Next</div>"));
                        },
                        dataField: "fieldData.Ext_next_insp_date",
                        calculateCellValue: function (value) {
                            return get_year(value.fieldData.Ext_next_insp_date)
                        }
                    },
                    {
                        caption: "Status",
                        headerCellTemplate: function (container) {
                            container.append($("<div>Status</div>"));
                        },
                        dataField: "fieldData.Ext_insp_status"
                    }
                    ]
                },
                {
                    caption: "Due Ext Visual Anomaly",
                    columns: [{
                        caption: "Temporary",
                        headerCellTemplate: function (container) {
                            container.append($("<div>Temporary</div>"));
                        },
                        dataField: "fieldData.Ext_anomaly_vt_temporary",
                        calculateCellValue: function (value) {
                            return get_year(value.fieldData.Ext_anomaly_vt_temporary)
                        }
                    },
                    {
                        caption: "Status",
                        headerCellTemplate: function (container) {
                            container.append($("<div>Status</div>"));
                        },
                        dataField: "fieldData.Ext_anomaly_vt_temporary_due"
                    },
                    {
                        caption: "Permanent",
                        headerCellTemplate: function (container) {
                            container.append($("<div>Permanent</div>"));
                        },
                        dataField: "fieldData.Ext_anomaly_vt_permanent",
                        calculateCellValue: function (value) {
                            return get_year(value.fieldData.Ext_anomaly_vt_permanent)
                        }
                    },
                    {
                        caption: "Status",
                        headerCellTemplate: function (container) {
                            container.append($("<div>Status</div>"));
                        },
                        dataField: "fieldData.Ext_anomaly_vt_permanent_due"
                    }
                    ],
                    visible: false
                },
                {
                    caption: "Due Ext Thickness Anomaly",
                    columns: [{
                        caption: "Temporary",
                        headerCellTemplate: function (container) {
                            container.append($("<div>Temporary</div>"));
                        },
                        dataField: "fieldData.Ext_anomaly_Thk_temporary",
                        calculateCellValue: function (value) {
                            return get_year(value.fieldData.Ext_anomaly_Thk_temporary)
                        }
                    },
                    {
                        caption: "Status",
                        headerCellTemplate: function (container) {
                            container.append($("<div>Status</div>"));
                        },
                        dataField: "fieldData.Ext_anomaly_Thk_temporary_due"
                    },
                    {
                        caption: "Permanent",
                        headerCellTemplate: function (container) {
                            container.append($("<div>Permanent</div>"));
                        },
                        dataField: "fieldData.Ext_anomaly_Thk_permanent",
                        calculateCellValue: function (value) {
                            return get_year(value.fieldData.Ext_anomaly_Thk_permanent)
                        }
                    },
                    {
                        caption: "Status",
                        headerCellTemplate: function (container) {
                            container.append($("<div>Status</div>"));
                        },
                        dataField: "fieldData.Ext_anomaly_Thk_permanent_due"
                    }
                    ],
                    visible: false
                }, {
                    caption: "Internal Inspection",
                    columns: [
                    {
                        caption: "Shutdown Required",
                        headerCellTemplate: function (container) {
                            container.append($("<div>Shutdown<br>Required</div>"));
                        },
                        dataField: "fieldData.shutdown_req"
                    },
                    {
                        caption: "Last",
                        headerCellTemplate: function (container) {
                            container.append($("<div>Last</div>"));
                        },
                        dataField: "fieldData.Int_last_insp_date",
                        calculateCellValue: function (value) {
                            return get_year(value.fieldData.Int_last_insp_date)
                        }
                    },
                    {
                        caption: "Interval (yrs)",
                        alignment: "center",
                        headerCellTemplate: function (container) {
                            container.append($("<div>Interval<br>(yrs)</div>"));
                        },
                        dataField: "fieldData.Int_insp_interval",
                        format: {
                            type: "fixedPoint",
                            precision: 2
                        }
                    },
                    {
                        caption: "Next",
                        headerCellTemplate: function (container) {
                            container.append($("<div>Next</div>"));
                        },
                        dataField: "fieldData.Int_next_insp_date",
                        calculateCellValue: function (value) {
                            return get_year(value.fieldData.Int_next_insp_date)
                        }
                    },
                    {
                        caption: "Status",
                        headerCellTemplate: function (container) {
                            container.append($("<div>Status</div>"));
                        },
                        dataField: "fieldData.Int_insp_status"
                    }
                    ]
                },
                {
                    caption: "Due Internal Anomaly",
                    columns: [{
                        caption: "Temporary",
                        headerCellTemplate: function (container) {
                            container.append($("<div>Temporary</div>"));
                        },
                        dataField: "fieldData.Int_anomaly_vt_temporary",
                        calculateCellValue: function (value) {
                            return get_year(value.fieldData.Int_anomaly_vt_temporary)
                        }
                    },
                    {
                        caption: "Status",
                        headerCellTemplate: function (container) {
                            container.append($("<div>Status</div>"));
                        },
                        dataField: "fieldData.Int_anomaly_vt_temporary_due"
                    },
                    {
                        caption: "Permanent",
                        headerCellTemplate: function (container) {
                            container.append($("<div>Permanent</div>"));
                        },
                        dataField: "fieldData.Int_anomaly_vt_permanent",
                        calculateCellValue: function (value) {
                            return get_year(value.fieldData.Int_anomaly_vt_permanent)
                        }
                    },
                    {
                        caption: "Status",
                        headerCellTemplate: function (container) {
                            container.append($("<div>Status</div>"));
                        },
                        dataField: "fieldData.Int_anomaly_vt_permanent_due"
                    }
                    ],
                    visible: false
                },
                {
                    caption: "Due Anomaly",
                    columns: [{
                        caption: "Year",
                        headerCellTemplate: function (container) {
                            container.append($("<div>Year</div>"));
                        },
                        dataField: "fieldData.anomaly_upcoming_date",
                        calculateCellValue: function (value) {
                            return get_year(value.fieldData.anomaly_upcoming_date)
                        },
                        alignment: "center"
                    },
                    {
                        caption: "Status",
                        headerCellTemplate: function (container) {
                            container.append($("<div>Status</div>"));
                        },
                        dataField: "fieldData.anomaly_upcoming_date_due",
                        alignment: "center"
                    },
                    ]
                },
                {
                    caption: "Anomaly Ranking",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Anomaly<br>Ranking</div>"));
                    },
                    dataField: "fieldData.anomaly_priority",
                    width: "130",
                    alignment: "center",
                    visible: false
                },
                {
                    caption: "Permanent Repair",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Permanent<br>Repair</div>"));
                    },
                    dataField: "fieldData.anomaly_permanent_repair",
                    width: "130",
                    alignment: "center",
                    visible: false
                },   
                {
                    caption: "Temporary Repair",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Temporary<br>Repair</div>"));
                    },
                    dataField: "fieldData.anomaly_temporary_repair",
                    width: "130",
                    alignment: "center",
                    visible: false
                },
            ],
            onExporting: function(e) { 
                e.component.beginUpdate();
                e.component.columnOption('fieldData.anomaly_permanent_repair', 'visible', true);
                e.component.columnOption('fieldData.anomaly_temporary_repair', 'visible', true);
                e.component.columnOption('fieldData.anomaly_priority', 'visible', true);
                var workbook = new ExcelJS.Workbook(); 
                var worksheet = workbook.addWorksheet('Main sheet');

                DevExpress.excelExporter.exportDataGrid({
                    component: e.component,
                    worksheet: worksheet
                }).then(function() {
                    workbook.xlsx.writeBuffer().then(function(buffer) {
                        saveAs(new Blob([buffer], { type: 'application/octet-stream' }), 'Pressure_Infomation.xlsx');
                    });
                }).then(function() {
                    e.component.columnOption('fieldData.anomaly_permanent_repair', 'visible', false);
                    e.component.columnOption('fieldData.anomaly_temporary_repair', 'visible', false);
                    e.component.columnOption('fieldData.anomaly_priority', 'visible', false);
                    e.component.endUpdate();
                });

                e.cancel = true;
            },
            repaintChangesOnly: true,
            onCellPrepared: function (e) {
                //Change background color
                if (e.rowType === "data" && e.column.dataField === "fieldData.risk_ranking") {
                    e.cellElement.css("background-color", e.data.fieldData.risk_ranking == "LOW" ? "#66FF33" : e.data.fieldData.risk_ranking == "MEDIUM" ? "#FFFF00" : e.data.fieldData.risk_ranking == "HIGH" ? "#FD9A00" : e.data.fieldData.risk_ranking == "VERY HIGH" ? "#FF0000" : "");
                }
                if (e.rowType === "data" && e.column.dataField === "fieldData.anomaly_priority") {
                    e.cellElement.css("background-color", e.data.fieldData.anomaly_priority == "LOW" ? "#66FF33" : e.data.fieldData.anomaly_priority == "ALARP-1" ? "#FFCC00" : e.data.fieldData.anomaly_priority == "ALARP-2" ? "#FFCC00" : e.data.fieldData.anomaly_priority == "ALARP-3" ? "#FFCC00" : e.data.fieldData.anomaly_priority == "HIGH" ? "#FF0000" : "");
                }
                if (e.rowType === "data" && e.column.dataField === "fieldData.integrity_status") {
                    e.cellElement.css("background-color", e.data.fieldData.integrity_status == "P1" ? "#FF0000" : e.data.fieldData.integrity_status == "P2" ? "#F69546" : e.data.fieldData.integrity_status == "P3" ? "#FFCC00" : e.data.fieldData.integrity_status == "P4" ? "#FFFF00" : e.data.fieldData.integrity_status == "P5" ? "#66FF33" : e.data.fieldData.integrity_status == "P6" ? "#43a047" : "");
                }
                if (e.rowType === "data" && e.column.dataField === "fieldData.Ext_insp_status") {
                    e.cellElement.css("background-color", e.data.fieldData.Ext_insp_status == "Not due" ? "#66FF33" : e.data.fieldData.Ext_insp_status == "On due" ? "#FFCC00" : e.data.fieldData.Ext_insp_status == "Overdue" ? "#FF0000" : "");
                }
                if (e.rowType === "data" && e.column.dataField === "fieldData.Ext_anomaly_vt_temporary_due") {
                    e.cellElement.css("background-color", e.data.fieldData.Ext_anomaly_vt_temporary_due == "Not due" ? "#66FF33" : e.data.fieldData.Ext_anomaly_vt_temporary_due == "On due" ? "#FFCC00" : e.data.fieldData.Ext_anomaly_vt_temporary_due == "Overdue" ? "#FF0000" : "");
                }
                if (e.rowType === "data" && e.column.dataField === "fieldData.Ext_anomaly_vt_permanent_due") {
                    e.cellElement.css("background-color", e.data.fieldData.Ext_anomaly_vt_permanent_due == "Not due" ? "#66FF33" : e.data.fieldData.Ext_anomaly_vt_permanent_due == "On due" ? "#FFCC00" : e.data.fieldData.Ext_anomaly_vt_permanent_due == "Overdue" ? "#FF0000" : "");
                }
                if (e.rowType === "data" && e.column.dataField === "fieldData.Ext_anomaly_Thk_temporary_due") {
                    e.cellElement.css("background-color", e.data.fieldData.Ext_anomaly_Thk_temporary_due == "Not due" ? "#66FF33" : e.data.fieldData.Ext_anomaly_Thk_temporary_due == "On due" ? "#FFCC00" : e.data.fieldData.Ext_anomaly_Thk_temporary_due == "Overdue" ? "#FF0000" : "");
                }
                if (e.rowType === "data" && e.column.dataField === "fieldData.Ext_anomaly_Thk_permanent_due") {
                    e.cellElement.css("background-color", e.data.fieldData.Ext_anomaly_Thk_permanent_due == "Not due" ? "#66FF33" : e.data.fieldData.Ext_anomaly_Thk_permanent_due == "On due" ? "#FFCC00" : e.data.fieldData.Ext_anomaly_Thk_permanent_due == "Overdue" ? "#FF0000" : "");
                }
                if (e.rowType === "data" && e.column.dataField === "fieldData.Int_insp_status") {
                    e.cellElement.css("background-color", e.data.fieldData.Int_insp_status == "Not due" ? "#66FF33" : e.data.fieldData.Int_insp_status == "On due" ? "#FFCC00" : e.data.fieldData.Int_insp_status == "Overdue" ? "#FF0000" : "");
                }
                if (e.rowType === "data" && e.column.dataField === "fieldData.Int_anomaly_vt_temporary_due") {
                    e.cellElement.css("background-color", e.data.fieldData.Int_anomaly_vt_temporary_due == "Not due" ? "#66FF33" : e.data.fieldData.Int_anomaly_vt_temporary_due == "On due" ? "#FFCC00" : e.data.fieldData.Int_anomaly_vt_temporary_due == "Overdue" ? "#FF0000" : "");
                }
                if (e.rowType === "data" && e.column.dataField === "fieldData.Int_anomaly_vt_permanent_due") {
                    e.cellElement.css("background-color", e.data.fieldData.Int_anomaly_vt_permanent_due == "Not due" ? "#66FF33" : e.data.fieldData.Int_anomaly_vt_permanent_due == "On due" ? "#FFCC00" : e.data.fieldData.Int_anomaly_vt_permanent_due == "Overdue" ? "#FF0000" : "");
                }
                if (e.rowType === "data" && e.column.dataField === "fieldData.anomaly_upcoming_date_due") {
                    e.cellElement.css("background-color", e.data.fieldData.anomaly_upcoming_date_due == "Not due" ? "#66FF33" : e.data.fieldData.anomaly_upcoming_date_due == "On due" ? "#FFCC00" : e.data.fieldData.anomaly_upcoming_date_due == "Overdue" ? "#FF0000" : "");
                }

                //Set alignment
                if (e.rowType == "header") {
                    e.cellElement.css("text-align", "center");
                    e.cellElement.css("vertical-align", "middle");
                }
                if (e.rowType === "data" && (e.column.dataField === "fieldData.risk_ranking" || e.column.dataField === "fieldData.integrity_status" || e.column.dataField === "fieldData.Ext_last_insp_date" || e.column.dataField === "fieldData.Ext_next_insp_date" || e.column.dataField === "fieldData.Ext_insp_status" || e.column.dataField === "fieldData.Ext_anomaly_vt_temporary_due" || e.column.dataField === "fieldData.Ext_anomaly_vt_permanent_due" || e.column.dataField === "fieldData.Ext_anomaly_Thk_temporary_due" || e.column.dataField === "fieldData.Ext_anomaly_Thk_permanent_due" || e.column.dataField === "fieldData.Ext_anomaly_vt_temporary" || e.column.dataField === "fieldData.Ext_anomaly_vt_permanent" || e.column.dataField === "fieldData.Ext_anomaly_Thk_temporary" || e.column.dataField === "fieldData.Ext_anomaly_Thk_permanent" || e.column.dataField === "fieldData.Int_last_insp_date" || e.column.dataField === "fieldData.Int_next_insp_date" || e.column.dataField === "fieldData.Int_insp_status" || e.column.dataField === "fieldData.Int_anomaly_vt_temporary_due" || e.column.dataField === "fieldData.Int_anomaly_vt_permanent_due" || e.column.dataField === "fieldData.Int_anomaly_vt_temporary" || e.column.dataField === "fieldData.Int_anomaly_vt_permanent")) {
                    e.cellElement.css("text-align", "center");
                }
            },

            onToolbarPreparing: function (e) {
                var toolbarItems = e.toolbarOptions.items;
                toolbarItems.unshift({
                    location: 'after',
                    widget: 'dxButton',
                    hint: 'Refresh',
                    options: {
                        icon: 'refresh',
                        onClick() {
                            dataGrid.clearFilter();
                        },
                    },
                })
            },
            showBorders: true
        }).dxDataGrid('instance');

        //$('.dx-toolbar-before').html('<button type="button" class="btn btn-primary" onclick="create_table_static()">STATIC DATA</button>');
        $('.dx-toolbar-after').prepend('<button type="button" class="btn btn-outline-dark" onclick="create_table_static()" style="line-height: 1.3; border-color: #ddd;">STATIC DATA</button>');
    };

    function create_table_static() {
        $('#static_modal').modal('show');
        const dataGrid = $("#dataGid_static").dxDataGrid({
            dataSource: dataArrStatic.response.data,
            keyExpr: "fieldData.id_line",
            paging: {
                pageSize: 10
            },
            pager: {
                showPageSizeSelector: true,
                allowedPageSizes: [10, 25, 50],
                showInfo: true
            },
            export: {
                enabled: true
            },
            searchPanel: {
                visible: true
            },
            filterRow: {
                visible: true,
                applyFilter: "auto"
            },
            headerFilter: {
                visible: true
            },

            allowColumnReordering: true,
            allowColumnResizing: true,
            columnAutoWidth: true,

            columnChooser: {
                enabled: true,
                mode: "dragAndDrop"
            },
            focusedRowEnabled: true,
            showRowLines: true,
            columns: [

                {
                    caption: "Tag Number",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Tag Number</div>"));
                    },
                    dataField: "fieldData.tag_no",
                },
                {
                    caption: "PV Number",
                    alignment: "center",
                    headerCellTemplate: function (container) {
                        container.append($("<div>PV Number</div>"));
                    },
                    dataField: "fieldData.vessel_no",
                },
                {
                    caption: "Platform",
                    alignment: "center",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Platform</div>"));
                    },
                    dataField: "fieldData.platform_codename",
                },
                {
                    caption: "Equipment Type",
                    width: "150px",
                    alignment: "center",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Equipment Type</div>"));
                    },
                    dataField: "fieldData.equipment_type",
                },
                {
                    caption: "Equipment Desc",
                    width: "150px",
                    alignment: "center",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Equipment Desc</div>"));
                    },
                    dataField: "fieldData.equipment_desc",
                },
                {
                    caption: "Orientation",
                    alignment: "center",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Orientation</div>"));
                    },
                    dataField: "fieldData.orientation",
                },
                {
                    caption: "P&ID Number",
                    alignment: "center",
                    headerCellTemplate: function (container) {
                        container.append($("<div>P&ID Number</div>"));
                    },
                    dataField: "fieldData.pid_no",
                },
                {
                    caption: "Drawing Number",
                    alignment: "center",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Drawing Number</div>"));
                    },
                    dataField: "fieldData.drawing_no",
                },
                {
                    caption: "Material of Construction",
                    alignment: "center",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Material of Construction</div>"));
                    },
                    dataField: "fieldData.material_of_const",
                },
                {
                    caption: "Height (mm)",
                    alignment: "center",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Height (mm)</div>"));
                    },
                    dataField: "fieldData.height_mm",
                },
                {
                    caption: "Design Code",
                    alignment: "center",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Design Code</div>"));
                    },
                    dataField: "fieldData.design_code",
                },
                {
                    caption: "In-service Date",
                    alignment: "center",
                    headerCellTemplate: function (container) {
                        container.append($("<div>In-service Date</div>"));
                    },
                    dataField: "fieldData.inservice_date",
                },
                {
                    caption: "CA",
                    alignment: "center",
                    headerCellTemplate: function (container) {
                        container.append($("<div>CA</div>"));
                    },
                    dataField: "fieldData.CAd",
                },
                {
                    caption: "Design Life (yrs)",
                    alignment: "center",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Design Life (yrs)</div>"));
                    },
                    dataField: "fieldData.Ld",
                },
                {
                    caption: "Cladding",
                    alignment: "center",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Cladding</div>"));
                    },
                    dataField: "fieldData.cladding_material",
                },
                {
                    caption: "Lining",
                    alignment: "center",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Lining</div>"));
                    },
                    dataField: "fieldData.internal_lining",
                },
                {
                    caption: "Internal Coating",
                    alignment: "center",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Internal Coating</div>"));
                    },
                    dataField: "fieldData.internal_coating",
                },
                {
                    caption: "Insulation",
                    alignment: "center",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Insulation</div>"));
                    },
                    dataField: "fieldData.insulation",
                },
                {
                    caption: "Insulation Type",
                    alignment: "center",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Insulation Type</div>"));
                    },
                    dataField: "fieldData.insulation_size",
                },
                {
                    caption: "Insulation Size",
                    alignment: "center",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Insulation Size</div>"));
                    },
                    dataField: "fieldData.insulation_type",
                },
                {
                    caption: "Component Group 1",
                    alignment: "center",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Component Group 1</div>"));
                    },
                    dataField: "fieldData.i_component_group",
                },
                {
                    caption: "Design Pressure (psi)",
                    alignment: "center",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Design Pressure (psi)</div>"));
                    },
                    dataField: "fieldData.i_design_pressure_psi",
                },
                {
                    caption: "Design Temp (C)",
                    alignment: "center",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Design Temp (C)</div>"));
                    },
                    dataField: "fieldData.i_design_temp_c",
                },
                {
                    caption: "Operating Pressure (psi)",
                    alignment: "center",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Operating Pressure (psi)</div>"));
                    },
                    dataField: "fieldData.i_operating_pressure_psi",
                },
                {
                    caption: "Operating Temp (C)",
                    alignment: "center",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Operating Temp (C)</div>"));
                    },
                    dataField: "fieldData.i_operating_temp_c",
                },
                {
                    caption: "Corrosion Loop Number",
                    alignment: "center",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Corrosion Loop Number</div>"));
                    },
                    dataField: "fieldData.i_corrosion_loop_no",
                },
                {
                    caption: "Corrosion Loop Desc",
                    alignment: "center",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Corrosion Loop Desc</div>"));
                    },
                    dataField: "fieldData.i_corrosion_loop_desc",
                },
                {
                    caption: "Component Group 2",
                    alignment: "center",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Component Group 2</div>"));
                    },
                    dataField: "fieldData.ii_component_group",
                },
                {
                    caption: "Design Pressure (psi)",
                    alignment: "center",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Design Pressure (psi)</div>"));
                    },
                    dataField: "fieldData.ii_design_pressure_psi",
                },
                {
                    caption: "Design Temp (C)",
                    alignment: "center",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Design Temp (C)</div>"));
                    },
                    dataField: "fieldData.ii_design_temp_c",
                },
                {
                    caption: "Operating Pressure (psi)",
                    alignment: "center",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Operating Pressure (psi)</div>"));
                    },
                    dataField: "fieldData.ii_operating_pressure_psi",
                },
                {
                    caption: "Operating Temp (C)",
                    alignment: "center",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Operating Temp (C)</div>"));
                    },
                    dataField: "fieldData.ii_operating_temp_c",
                },
                {
                    caption: "Corrosion Loop Number",
                    alignment: "center",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Corrosion Loop Number</div>"));
                    },
                    dataField: "fieldData.ii_corrosion_loop_no",
                },
                {
                    caption: "Corrosion Loop Desc",
                    alignment: "center",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Corrosion Loop Desc</div>"));
                    },
                    dataField: "fieldData.ii_corrosion_loop_desc",
                },
                {
                    caption: "Accessibility",
                    alignment: "center",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Accessibility</div>"));
                    },
                    dataField: "fieldData.accessibility",
                },
                {
                    caption: "OSI/Internal",
                    alignment: "center",
                    headerCellTemplate: function (container) {
                        container.append($("<div>OSI/Internal</div>"));
                    },
                    dataField: "fieldData.osi_or_internal",
                },
                {
                    caption: "External Interval",
                    alignment: "center",
                    headerCellTemplate: function (container) {
                        container.append($("<div>External<br>Interval</div>"));
                    },
                    dataField: "fieldData.Ext_insp_interval",
                },
                {
                    caption: "Internal Interval",
                    alignment: "center",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Internal<br>Interval</div>"));
                    },
                    dataField: "fieldData.Int_insp_interval",
                },
                            
            ],
            repaintChangesOnly: true,
            onCellPrepared: function (e) {
                //Change background color
            },

            onToolbarPreparing: function (e) {
                var toolbarItems = e.toolbarOptions.items;
                toolbarItems.unshift({
                    location: 'after',
                    widget: 'dxButton',
                    hint: 'Refresh',
                    options: {
                        icon: 'refresh',
                        onClick() {
                            dataGrid.clearFilter();
                        },
                    },
                })
            },
            showBorders: true
        }).dxDataGrid('instance');
    };

    function get_year(value) {
        if (value === null || value === undefined || value === "") {
            return ""
        } else {
            var parts = value.split('/');
            return parts[2]
        }
    }

</script>