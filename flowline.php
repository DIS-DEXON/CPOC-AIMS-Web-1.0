<div class="jumbotron jumbotron-header rounded-0 bg-secondary text-white">
    <div class="row">
        <div class="col-12">
            <h1 class="display-4">FLOWLINE</h1>
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
    <div id="dataGid"></div>
</div>

<!-- Modal -->
<div class="modal fade" id="info_modal" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Flowline Information</h5>
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
                            <label class="header-detail">Line Number</label>
                            <input type="text" class="form-control form-control-sm" id="line_no" readonly>
                        </div>
                        <div class="col-md-4">
                            <label class="header-detail">Platform</label>
                            <input type="text" class="form-control form-control-sm" id="platform" readonly>
                        </div>
                        <div class="col-md-4">
                            <label class="header-detail">From</label>
                            <input type="text" class="form-control form-control-sm" id="from" readonly>
                        </div>
                        <div class="col-md-4">
                            <label class="header-detail">To</label>
                            <input type="text" class="form-control form-control-sm" id="to" readonly>
                        </div>
                        <div class="col-md-4">
                            <label class="header-detail">Well Number</label>
                            <input type="text" class="form-control form-control-sm" id="wellhead_name" readonly>
                        </div>
                        <div class="col-md-4">
                            <label class="header-detail">P&ID Number</label>
                            <input type="text" class="form-control form-control-sm" id="pid_no" readonly>
                        </div>
                        <div class="col-md-4">
                            <label class="header-detail">Drawing Number</label>
                            <input type="text" class="form-control form-control-sm" id="drawing_no" readonly>
                        </div>
                        <div class="col-md-4">
                            <label class="header-detail">Material</label>
                            <input type="text" class="form-control form-control-sm" id="material" readonly>
                        </div>
                        <div class="col-md-4">
                            <label class="header-detail">Material Type</label>
                            <input type="text" class="form-control form-control-sm" id="material_type" readonly>
                        </div>

                        <div class="col-12">
                            <hr>
                        </div>

                        <div class="col-md-2">
                            <label class="header-detail"> In-service Date</label>
                            <input type="text" class="form-control form-control-sm" id="inservice_date" readonly>
                        </div>
                        <div class="col-md-2">
                            <label class="header-detail">Service</label>
                            <input type="text" class="form-control form-control-sm" id="service_abbr" readonly>
                        </div>
                        <div class="col-md-2">
                            <label class="header-detail">Service Description</label>
                            <input type="text" class="form-control form-control-sm" id="service_desc" readonly>
                        </div>
                        <div class="col-md-2">
                            <label class="header-detail">Component Type</label>
                            <input type="text" class="form-control form-control-sm" id="component_type" readonly>
                        </div>
                        <div class="col-md-2">
                            <label class="header-detail">Component Description</label>
                            <input type="text" class="form-control form-control-sm" id="component_desc" readonly>
                        </div>
                        <div class="col-md-2">
                            <label class="header-detail">Flowline Code</label>
                            <input type="text" class="form-control form-control-sm" id="piping_code" readonly>
                        </div>
                        <div class="col-md-2">
                            <label class="header-detail">Deadleg</label>
                            <input type="text" class="form-control form-control-sm" id="deadleg" readonly>
                        </div>
                        <div class="col-md-2">
                            <label class="header-detail">Deck</label>
                            <input type="text" class="form-control form-control-sm" id="deck" readonly>
                        </div>
                        <div class="col-md-2">
                            <label class="header-detail">Pipe Spec</label>
                            <input type="text" class="form-control form-control-sm" id="pipe_spec" readonly>
                        </div>
                        <div class="col-md-2">
                            <label class="header-detail">Pipe Size</label>
                            <input type="text" class="form-control form-control-sm" id="nps" readonly>
                        </div>
                        <div class="col-md-2">
                            <label class="header-detail">Stress (psi)</label>
                            <input type="text" class="form-control form-control-sm" id="stress" readonly>
                        </div>
                        <div class="col-md-2">
                            <label class="header-detail">Joint Efficiency (E)</label>
                            <input type="text" class="form-control form-control-sm" id="joint_efficiency" readonly>
                        </div>
                        <div class="col-md-2">
                            <label class="header-detail">CA</label>
                            <input type="text" class="form-control form-control-sm" id="CA" readonly>
                        </div>
                        <div class="col-md-2">
                            <label class="header-detail">Design Life (yrs)</label>
                            <input type="text" class="form-control form-control-sm" id="design_life" readonly>
                        </div>
                        <div class="col-md-2">
                            <label class="header-detail">Service Life (yrs)</label>
                            <input type="text" class="form-control form-control-sm" id="service_life" readonly>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-12">
                            <hr>
                        </div>

                        <div class="col-md-2">
                            <label class="header-detail">Design Pressure(barg)</label>
                            <input type="text" class="form-control form-control-sm" id="design_pressure_barg" readonly>
                        </div>
                        <div class="col-md-2">
                            <label class="header-detail">Design Pressure(psi)</label>
                            <input type="text" class="form-control form-control-sm" id="design_pressure_psi" readonly>
                        </div>
                        <div class="col-md-2">
                            <label class="header-detail">Operating Pressure(barg)</label>
                            <input type="text" class="form-control form-control-sm" id="operating_pressure_barg"
                                readonly>
                        </div>
                        <div class="col-md-2">
                            <label class="header-detail">Operating Pressure(psi)</label>
                            <input type="text" class="form-control form-control-sm" id="operating_pressure_psi"
                                readonly>
                        </div>
                        <div class="col-md-2">
                            <label class="header-detail">Operating Temperature(°C)</label>
                            <input type="text" class="form-control form-control-sm" id="operating_temp_c" readonly>
                        </div>
                        <div class="col-md-2">
                            <label class="header-detail">Operating Temperature(°F)</label>
                            <input type="text" class="form-control form-control-sm" id="operating_temp_f" readonly>
                        </div>

                        <div class="col-12">
                            <hr>
                        </div>

                        <div class="col-md-3">
                            <label class="header-detail">Corrosion Loop Number</label>
                            <input type="text" class="form-control form-control-sm" id="corrosion_loop_no" readonly>
                        </div>
                        <div class="col-md-3">
                            <label class="header-detail">Corrosion Drawing Number</label>
                            <input type="text" class="form-control form-control-sm" id="corrosion_loop_desc" readonly>
                        </div>

                        <div class="col-md-2">
                            <label class="header-detail">RBI PoF</label>
                            <input type="text" class="form-control form-control-sm" id="rbi_pof" readonly>
                        </div>
                        <div class="col-md-2">
                            <label class="header-detail">RBI CoF</label>
                            <input type="text" class="form-control form-control-sm" id="rbi_cof" readonly>
                        </div>
                        <div class="col-md-2">
                            <label class="header-detail">Risk Level</label>
                            <input type="text" class="form-control form-control-sm" id="risk_level" readonly>
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
                <h5 class="modal-title" id="staticBackdropLabel">Flowline Document</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <h2>Construction Report</h2>
                        <div id="grid_const_report"></div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <h2>General Document</h2>
                        <div id="grid_doc_report"></div>
                    </div>
                    <div class="col-md-12 mb-3">
                        <h2>Inspection Report</h2>
                        <div id="grid_insp_report"></div>
                    </div>
                </div>
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

    var _token_flowline = $.cookie("_token_flowline");
    var _token_dashboard = $.cookie("_token_dashboard");
    console.log("_token_flowline: " + _token_flowline);
    console.log("_token_dashboard: " + _token_dashboard);
    var dataArr = "";
    var riskLvId = "";

    get_data();
    get_flowline_summary();
    $('.loader').hide();
    // get_token_flowline();

    function get_data() {
        $.ajax({
            type: "GET",
            url: "https://" + url_api + "/fmi/data/v2/databases/Flowline/layouts/info_table/records?_limit=2000",
            dataType: 'json',
            headers: {
                "Authorization": "Bearer " + _token_flowline,
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
                get_token_flowline();
                _token_flowline = $.cookie("_token_flowline");
                get_data();
                //logout();
            }
        });
    }

    function get_flowline_summary() {
        $.ajax({
            type: "GET",
            url: "https://" + url_api + "/fmi/data/v2/databases/CPOC_AIMS/layouts/flowline_equipment/records?_limit=1",
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
                get_flowline_summary();
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
            url: "https://" + url_api + "/fmi/data/v2/databases/Flowline/layouts/info_api/script/flowline_api_info?script.param=" + id_line,
            dataType: 'json',
            headers: {
                "Authorization": "Bearer " + _token_flowline,
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
                get_token_flowline();
                _token_flowline = $.cookie("_token_flowline");
                get_info(id_line);
                //logout();
            }
        });
    }

    function get_library(id_line) {
        $.ajax({
            type: "POST",
            url: "https://" + url_api + "/fmi/data/v2/databases/Flowline/layouts/inspection_document/_find",
            dataType: 'json',
            headers: {
                "Authorization": "Bearer " + _token_flowline,
                "Content-Type": "application/json"
            },
            data: "{\n    \"query\": [\n        {\n            \"id_line\": \"==" + id_line + "\"\n        }\n    ]\n}",
            async: false,
            success: function (data) {
                call_modal_library(data.response.data);
            },
            error: function (error) {
                console.log(error);
                console.log(error.responseJSON.messages[0].code);
                if(error.responseJSON.messages[0].code == 401) {
                    alert("no library file");
                }else {
                    get_token_flowline();
                    _token_flowline = $.cookie("_token_flowline");
                    get_library(id_line);
                }
            }
        });
    }

    function get_const(id_line) {
        var dataFile = "";
        $.ajax({
            type: "POST",
            url: "https://" + url_api + "/fmi/data/v2/databases/Flowline/layouts/design_spec_document/_find",
            dataType: 'json',
            headers: {
                "Authorization": "Bearer " + _token_flowline,
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
                    get_token_flowline();
                    _token_flowline = $.cookie("_token_flowline");
                    call_modal_library(id_line);
                }
            }
        });

        const dataGrid = $("#grid_const_report").dxDataGrid({
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
            url: "https://" + url_api + "/fmi/data/v2/databases/Flowline/layouts/inspection_document/_find",
            dataType: 'json',
            headers: {
                "Authorization": "Bearer " + _token_flowline,
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
                    get_token_flowline();
                    _token_flowline = $.cookie("_token_flowline");
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
            url: "https://" + url_api + "/fmi/data/v2/databases/Flowline/layouts/general_document/_find",
            dataType: 'json',
            headers: {
                "Authorization": "Bearer " + _token_flowline,
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
                    get_token_flowline();
                    _token_flowline = $.cookie("_token_flowline");
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
        $('#line_no').val(data[0].line_no);
        $('#line_no').tooltip('dispose').tooltip({ title: data[0].line_no }).tooltip({ 'trigger': 'hover' })
        $('#from').val(data[0].line_from);
        $('#from').tooltip('dispose').tooltip({ title: data[0].line_from }).tooltip({ 'trigger': 'hover' })
        $('#to').val(data[0].line_to);
        $('#to').tooltip('dispose').tooltip({ title: data[0].line_to }).tooltip({ 'trigger': 'hover' })
        $('#wellhead_name').val(data[0].wellhead_name);
        $('#wellhead_name').tooltip('dispose').tooltip({ title: data[0].wellhead_name }).tooltip({ 'trigger': 'hover' })
        $('#platform').val(data[0].platform_codename);
        $('#platform').tooltip('dispose').tooltip({ title: data[0].platform_codename }).tooltip({ 'trigger': 'hover' })
        $('#pid_no').val(data[0].pid_no);
        $('#pid_no').tooltip('dispose').tooltip({ title: data[0].pid_no }).tooltip({ 'trigger': 'hover' })
        $('#drawing_no').val(data[0].drawing_no);
        $('#drawing_no').tooltip('dispose').tooltip({ title: data[0].drawing_no }).tooltip({ 'trigger': 'hover' })
        $('#inservice_date').val(convert_date_format(data[0].inservice_date));
        $('#inservice_date').tooltip('dispose').tooltip({ title: convert_date_format(data[0].inservice_date) }).tooltip({ 'trigger': 'hover' })
        $('#service_abbr').val(data[0].service_abbr);
        $('#service_abbr').tooltip('dispose').tooltip({ title: data[0].service_abbr }).tooltip({ 'trigger': 'hover' })
        $('#service_desc').val(data[0].service_desc);
        $('#service_desc').tooltip('dispose').tooltip({ title: data[0].service_desc }).tooltip({ 'trigger': 'hover' })
        $('#service_life').val(data[0].service_life.toFixed(2));
        $('#service_life').tooltip('dispose').tooltip({ title: data[0].service_life.toFixed(2) }).tooltip({ 'trigger': 'hover' })
        $('#nps').val(data[0].nps);
        $('#nps').tooltip('dispose').tooltip({ title: data[0].nps }).tooltip({ 'trigger': 'hover' })
        $('#piping_code').val(data[0].piping_code);
        $('#piping_code').tooltip('dispose').tooltip({ title: data[0].piping_code }).tooltip({ 'trigger': 'hover' })
        $('#material_type').val(data[0].material_type);
        $('#material_type').tooltip('dispose').tooltip({ title: data[0].material_type }).tooltip({ 'trigger': 'hover' })
        $('#pipe_spec').val(data[0].pipe_spec);
        $('#pipe_spec').tooltip('dispose').tooltip({ title: data[0].pipe_spec }).tooltip({ 'trigger': 'hover' })
        $('#material').val(data[0].material);
        $('#material').tooltip('dispose').tooltip({ title: data[0].material }).tooltip({ 'trigger': 'hover' })
        $('#stress').val(data[0].stress.toFixed(2));
        $('#stress').tooltip('dispose').tooltip({ title: data[0].stress.toFixed(2) }).tooltip({ 'trigger': 'hover' })
        $('#joint_efficiency').val(data[0].joint_efficiency);
        $('#joint_efficiency').tooltip('dispose').tooltip({ title: data[0].joint_efficiency }).tooltip({ 'trigger': 'hover' })
        $('#deadleg').val(data[0].deadleg);
        $('#deadleg').tooltip('dispose').tooltip({ title: data[0].deadleg }).tooltip({ 'trigger': 'hover' })
        $('#deck').val(data[0].deck);
        $('#deck').tooltip('dispose').tooltip({ title: data[0].deck }).tooltip({ 'trigger': 'hover' })
        $('#CA').val(data[0].CA);
        $('#CA').tooltip('dispose').tooltip({ title: data[0].CA }).tooltip({ 'trigger': 'hover' })
        $('#design_life').val(data[0].design_life.toFixed(2));
        $('#design_life').tooltip('dispose').tooltip({ title: data[0].design_life.toFixed(2) }).tooltip({ 'trigger': 'hover' })
        $('#design_pressure_barg').val(data[0].design_pressure_barg.toFixed(2));
        $('#design_pressure_barg').tooltip('dispose').tooltip({ title: data[0].design_pressure_barg.toFixed(2) }).tooltip({ 'trigger': 'hover' })
        $('#design_pressure_psi').val(data[0].design_pressure_psi.toFixed(2));
        $('#design_pressure_psi').tooltip('dispose').tooltip({ title: data[0].design_pressure_psi.toFixed(2) }).tooltip({ 'trigger': 'hover' })
        $('#operating_pressure_barg').val(data[0].operating_pressure_barg.toFixed(2));
        $('#operating_pressure_barg').tooltip('dispose').tooltip({ title: data[0].operating_pressure_barg.toFixed(2) }).tooltip({ 'trigger': 'hover' })
        $('#operating_pressure_psi').val(data[0].operating_pressure_psi.toFixed(2));
        $('#operating_pressure_psi').tooltip('dispose').tooltip({ title: data[0].operating_pressure_psi.toFixed(2) }).tooltip({ 'trigger': 'hover' })
        $('#operating_temp_c').val(data[0].operating_temp_c.toFixed(2));
        $('#operating_temp_c').tooltip('dispose').tooltip({ title: data[0].operating_temp_c.toFixed(2) }).tooltip({ 'trigger': 'hover' })
        $('#operating_temp_f').val(data[0].operating_temp_f.toFixed(2));
        $('#operating_temp_f').tooltip('dispose').tooltip({ title: data[0].operating_temp_f.toFixed(2) }).tooltip({ 'trigger': 'hover' })
        $('#component_type').val(data[0].component_type);
        $('#component_type').tooltip('dispose').tooltip({ title: data[0].component_type }).tooltip({ 'trigger': 'hover' })
        $('#component_desc').val(data[0].component_desc);
        $('#component_desc').tooltip('dispose').tooltip({ title: data[0].component_desc }).tooltip({ 'trigger': 'hover' })
        $('#corrosion_loop_no').val(data[0].corrosion_loop_no);
        $('#corrosion_loop_no').tooltip('dispose').tooltip({ title: data[0].corrosion_loop_no }).tooltip({ 'trigger': 'hover' })
        $('#corrosion_loop_desc').val(data[0].corrosion_loop_desc);
        $('#corrosion_loop_desc').tooltip('dispose').tooltip({ title: data[0].corrosion_loop_desc }).tooltip({ 'trigger': 'hover' })
        $('#rbi_pof').val(data[0].rbi_pof);
        $('#rbi_pof').tooltip('dispose').tooltip({ title: data[0].rbi_pof }).tooltip({ 'trigger': 'hover' })
        $('#rbi_cof').val(data[0].rbi_cof);
        $('#rbi_cof').tooltip('dispose').tooltip({ title: data[0].rbi_cof }).tooltip({ 'trigger': 'hover' })
        $('#risk_level').val(data[0].risk_level);
        $('#risk_level').tooltip('dispose').tooltip({ title: data[0].risk_level }).tooltip({ 'trigger': 'hover' })

        $("#info_modal").modal('show');
    }

    function call_modal_library(id_line) {
        console.log(id_line);
        get_const(id_line);
        get_insp_report(id_line);
        get_gen_doc(id_line);
        $('#library_modal').modal('show');
    }

    function call_modal_rbi(o) {
        console.log(o.data.fieldData.risk_level);
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
            url: "https://" + url_api + "/fmi/data/v2/databases/Flowline/layouts/report_table/_find",
            dataType: 'json',
            headers: {
                "Authorization": "Bearer " + _token_flowline,
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
                history_list_routine = data.response.data.filter(r => r.fieldData.inspection_type == 'Routine');
                history_list_other = data.response.data.filter(r => r.fieldData.inspection_type == 'Monitoring' || r.fieldData.inspection_type == 'Anomaly Monitoring' || r.fieldData.inspection_type == 'Adhoc');
            },
            error: function (error) {
                console.log(error);
                console.log(error.responseJSON.messages[0].code);
                if(error.responseJSON.messages[0].code == 401) {
                    // no record match
                } else {
                    get_token_flowline();
                    _token_flowline = $.cookie("_token_flowline");
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
                        url: "https://" + url_api + "/fmi/data/v2/databases/Flowline/layouts/SAP_notify_header_data_export/_find",
                        dataType: 'json',
                        headers: {
                            "Authorization": "Bearer " + _token_flowline,
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
                                get_token_flowline();
                                _token_flowline = $.cookie("_token_flowline");
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
                        url: "https://" + url_api + "/fmi/data/v2/databases/Flowline/layouts/SAP_notify_header_data_export/_find",
                        dataType: 'json',
                        headers: {
                            "Authorization": "Bearer " + _token_flowline,
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
                                get_token_flowline();
                                _token_flowline = $.cookie("_token_flowline");
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
            url: "https://" + url_api + "/fmi/data/v2/databases/Flowline/layouts/inspection_document/_find",
            dataType: 'json',
            headers: {
                "Authorization": "Bearer " + _token_flowline,
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
                    get_token_flowline();
                    _token_flowline = $.cookie("_token_flowline");
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

    function get_file(url,file_name) {
        // console.log(url);

        fetch("donwload_lib.php", {
        method: "POST",
        headers: {
          "Content-Type": "application/x-www-form-urlencoded; charset=UTF-8",
        },
        body: `url=${url}&token=${_token_flowline}&file_name=${file_name}`,
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
                                get_inspection_history(options.value, options.data.fieldData.wellhead_name);
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
                    // filterValues: ["MTA"]
                },
                {
                    caption: "Well Number",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Well Number</div>"));
                    },
                    dataField: "fieldData.wellhead_name",
                    fixed: true,
                    fixedPosition: "left"
                },
                {
                    caption: "Line Number",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Line Number</div>"));
                    },
                    dataField: "fieldData.line_no",
                    fixed: true,
                    fixedPosition: "left"
                },
                // {
                //     caption: "Corrosion Loop",
                //     columns: [{
                //         caption: "Number",
                //         headerCellTemplate: function (container) {
                //             container.append($("<div>Number</div>"));
                //         },
                //         dataField: "fieldData.corrosion_loop_no"
                //     },
                //     {
                //         caption: "Description",
                //         headerCellTemplate: function (container) {
                //             container.append($("<div>Description</div>"));
                //         },
                //         dataField: "fieldData.corrosion_loop_desc"
                //     }
                //     ]
                // },
                {
                    caption: "Remark",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Remark</div>"));
                    },
                    dataField: "fieldData.remark"
                },
                {
                    caption: "Integrity Status",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Integrity Status</div>"));
                    },
                    dataField: "fieldData.integrity_status"
                },
                {
                    caption: "Routine Inspection",
                    columns: [{
                        caption: "Last",
                        headerCellTemplate: function (container) {
                            container.append($("<div>Last</div>"));
                        },
                        dataField: "fieldData.routine_last_insp_date",
                        calculateCellValue: function (value) {
                            return get_year(value.fieldData.routine_last_insp_date)
                        }
                    },
                    {
                        caption: "Interval (yrs)",
                        alignment: "center",
                        headerCellTemplate: function (container) {
                            container.append($("<div>Interval<br>(yrs)</div>"));
                        },
                        dataField: "fieldData.routine_insp_interval",
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
                        dataField: "fieldData.routine_next_insp_date",
                        calculateCellValue: function (value) {
                            return get_year(value.fieldData.routine_next_insp_date)
                        }
                    },
                    {
                        caption: "Status",
                        headerCellTemplate: function (container) {
                            container.append($("<div>Status</div>"));
                        },
                        dataField: "fieldData.routine_status"
                    }
                    ]
                },
                {
                    caption: "Due Visual Anomaly",
                    columns: [{
                        caption: "Temporary",
                        headerCellTemplate: function (container) {
                            container.append($("<div>Temporary</div>"));
                        },
                        dataField: "fieldData.anomaly_vt_temporary",
                        calculateCellValue: function (value) {
                            return get_year(value.fieldData.anomaly_vt_temporary)
                        }
                    },
                    {
                        caption: "Status",
                        headerCellTemplate: function (container) {
                            container.append($("<div>Status</div>"));
                        },
                        dataField: "fieldData.anomaly_vt_temporary_due"
                    },
                    {
                        caption: "Permanent",
                        headerCellTemplate: function (container) {
                            container.append($("<div>Permanent</div>"));
                        },
                        dataField: "fieldData.anomaly_vt_permanent",
                        calculateCellValue: function (value) {
                            return get_year(value.fieldData.anomaly_vt_permanent)
                        }
                    },
                    {
                        caption: "Status",
                        headerCellTemplate: function (container) {
                            container.append($("<div>Status</div>"));
                        },
                        dataField: "fieldData.anomaly_vt_permanent_due"
                    }
                    ],
                    visible: false
                },
                {
                    caption: "Due Thickness Anomaly",
                    columns: [{
                        caption: "Temporary",
                        headerCellTemplate: function (container) {
                            container.append($("<div>Temporary</div>"));
                        },
                        dataField: "fieldData.anomaly_Thk_temporary",
                        calculateCellValue: function (value) {
                            return get_year(value.fieldData.anomaly_Thk_temporary)
                        }
                    },
                    {
                        caption: "Status",
                        headerCellTemplate: function (container) {
                            container.append($("<div>Status</div>"));
                        },
                        dataField: "fieldData.anomaly_Thk_temporary_due"
                    },
                    {
                        caption: "Permanent",
                        headerCellTemplate: function (container) {
                            container.append($("<div>Permanent</div>"));
                        },
                        dataField: "fieldData.anomaly_Thk_permanent",
                        calculateCellValue: function (value) {
                            return get_year(value.fieldData.anomaly_Thk_permanent)
                        }
                    },
                    {
                        caption: "Status",
                        headerCellTemplate: function (container) {
                            container.append($("<div>Status</div>"));
                        },
                        dataField: "fieldData.anomaly_Thk_permanent_due"
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
                        saveAs(new Blob([buffer], { type: 'application/octet-stream' }), 'Flowline_Infomation.xlsx');
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
                if (e.rowType === "data" && e.column.dataField === "fieldData.integrity_status") {
                    e.cellElement.css("background-color", e.data.fieldData.integrity_status == "P1" ? "#FF0000" : e.data.fieldData.integrity_status == "P2" ? "#F69546" : e.data.fieldData.integrity_status == "P3" ? "#FFCC00" : e.data.fieldData.integrity_status == "P4" ? "#FFFF00" : e.data.fieldData.integrity_status == "P5" ? "#66FF33" : e.data.fieldData.integrity_status == "P6" ? "#43a047" : "");
                }
                if (e.rowType === "data" && e.column.dataField === "fieldData.anomaly_priority") {
                    e.cellElement.css("background-color", e.data.fieldData.anomaly_priority == "LOW" ? "#66FF33" : e.data.fieldData.anomaly_priority == "ALARP-1" ? "#FFCC00" : e.data.fieldData.anomaly_priority == "ALARP-2" ? "#FFCC00" : e.data.fieldData.anomaly_priority == "ALARP-3" ? "#FFCC00" : e.data.fieldData.anomaly_priority == "HIGH" ? "#FF0000" : "");
                }
                if (e.rowType === "data" && e.column.dataField === "fieldData.routine_status") {
                    e.cellElement.css("background-color", e.data.fieldData.routine_status == "Not due" ? "#66FF33" : e.data.fieldData.routine_status == "On due" ? "#FFCC00" : e.data.fieldData.routine_status == "Overdue" ? "#FF0000" : "");
                }
                if (e.rowType === "data" && e.column.dataField === "fieldData.anomaly_vt_temporary_due") {
                    e.cellElement.css("background-color", e.data.fieldData.anomaly_vt_temporary_due == "Not due" ? "#66FF33" : e.data.fieldData.anomaly_vt_temporary_due == "On due" ? "#FFCC00" : e.data.fieldData.anomaly_vt_temporary_due == "Overdue" ? "#FF0000" : "");
                }
                if (e.rowType === "data" && e.column.dataField === "fieldData.anomaly_vt_permanent_due") {
                    e.cellElement.css("background-color", e.data.fieldData.anomaly_vt_permanent_due == "Not due" ? "#66FF33" : e.data.fieldData.anomaly_vt_permanent_due == "On due" ? "#FFCC00" : e.data.fieldData.anomaly_vt_permanent_due == "Overdue" ? "#FF0000" : "");
                }
                if (e.rowType === "data" && e.column.dataField === "fieldData.anomaly_Thk_temporary_due") {
                    e.cellElement.css("background-color", e.data.fieldData.anomaly_Thk_temporary_due == "Not due" ? "#66FF33" : e.data.fieldData.anomaly_Thk_temporary_due == "On due" ? "#FFCC00" : e.data.fieldData.anomaly_Thk_temporary_due == "Overdue" ? "#FF0000" : "");
                }
                if (e.rowType === "data" && e.column.dataField === "fieldData.anomaly_Thk_permanent_due") {
                    e.cellElement.css("background-color", e.data.fieldData.anomaly_Thk_permanent_due == "Not due" ? "#66FF33" : e.data.fieldData.anomaly_Thk_permanent_due == "On due" ? "#FFCC00" : e.data.fieldData.anomaly_Thk_permanent_due == "Overdue" ? "#FF0000" : "");
                }
                if (e.rowType === "data" && e.column.dataField === "fieldData.anomaly_upcoming_date_due") {
                    e.cellElement.css("background-color", e.data.fieldData.anomaly_upcoming_date_due == "Not due" ? "#66FF33" : e.data.fieldData.anomaly_upcoming_date_due == "On due" ? "#FFCC00" : e.data.fieldData.anomaly_upcoming_date_due == "Overdue" ? "#FF0000" : "");
                }

                //Set alignment
                if (e.rowType == "header") {
                    e.cellElement.css("text-align", "center");
                    e.cellElement.css("vertical-align", "middle");
                }
                if (e.rowType === "data" && (e.column.dataField === "fieldData.integrity_status" || e.column.dataField === "fieldData.routine_last_insp_date" || e.column.dataField === "fieldData.routine_next_insp_date" || e.column.dataField === "fieldData.routine_status" || e.column.dataField === "fieldData.anomaly_vt_temporary_due" || e.column.dataField === "fieldData.anomaly_vt_permanent_due" || e.column.dataField === "fieldData.anomaly_Thk_temporary_due" || e.column.dataField === "fieldData.anomaly_Thk_permanent_due" || e.column.dataField === "fieldData.anomaly_vt_temporary" || e.column.dataField === "fieldData.anomaly_vt_permanent" || e.column.dataField === "fieldData.anomaly_Thk_temporary" || e.column.dataField === "fieldData.anomaly_Thk_permanent")) {
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