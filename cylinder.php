<div class="loader_1"></div>
<div class="jumbotron jumbotron-header rounded-0 bg-secondary text-white">
    <div class="row">
        <div class="col-6">
            <h1 class="display-4">CYLINDER</h1>
        </div>
        <div class="col-6 text-right">
            <button class="btn btn-primary" id="form_btn" style="font-weight: 600; width: 180px;">ADD CYLINDER</button><br>
            <button class="btn btn-secondary mt-2" style="font-weight: 600; width: 180px;" onclick="not_found()">MISSING CYLINDER</button>
        </div>
        <!-- สถิติ -->
        <div id="stat" class="col-12 mt-3">
            <div class="box bg-accepted-cylinder">
                <div class="row text-center">
                    <div class="col-12">
                        <span class="text-p-number" id="accepted_val"></span>
                    </div>
                    <div class="col-12 text-p">
                        ACCEPTED
                    </div>
                </div>
            </div>
            <div class="box bg-p2">
                <div class="row text-center">
                    <div class="col-12">
                        <span class="text-p-number" id="accepted_expiring_val"></span>
                    </div>
                    <div class="col-12 text-p">
                        ACCEPTED
                    </div>
                </div>
            </div>
            <!-- <div class="box bg-htoverdue-cylinder">
                <div class="row text-center">
                    <div class="col-12">
                        <span class="text-p-number" id="htoverdue_val"></span>
                    </div>
                    <div class="col-12 text-p">
                        HT OVERDUE
                    </div>    
                </div>
            </div>
            <div class="box bg-htexpiring-cylinder">
                <div class="row text-center">
                    <div class="col-12">
                        <span class="text-p-number" id="htexpiring_val"></span>
                    </div>
                    <div class="col-12 text-p">
                        HT EXPIRING
                    </div>
                </div>
            </div> -->
            <div class="box bg-rejected">
                <div class="row text-center">
                    <div class="col-12">
                        <span class="text-p-number" id="rejected_val"></span>
                    </div>
                    <div class="col-12 text-p">
                        REJECTED
                    </div>
                </div>
            </div>
            <div class="box bg-noins">
                <div class="row text-center">
                    <div class="col-12">
                        <span class="text-p-number" id="notinsp_val"></span>
                    </div>
                    <div class="col-12 text-p">
                        NOT INSPECTED
                    </div>
                </div>
            </div>
            <!-- <div class="box bg-notfound">
                <div class="row text-center">
                    <div class="col-12">
                        <span class="text-p-number" id="notfound_val"></span>
                    </div>
                    <div class="col-12 text-p">
                        NOT FOUND
                    </div>
                </div>
            </div> -->
            <div class="box bg-total text-white">
                <div class="row text-center">
                    <div class="col-12">
                        <span class="text-p-number text-white" id="total_val"></span>
                    </div>
                    <div class="col-12 text-p">
                        TOTAL
                    </div>      
                </div>
            </div>
        </div>
    </div>
</div>
<div class="wrapper-form shadow">
    <div class="row">
        <div class="col-md-5">
            <div class="pie-chart-dashboard" id="status-chart"></div>
        </div>
        <div class="col-md-3">
            <table class="table table-bordered table-sm" style="font-size: 12px;">
                <thead>
                    <tr style="text-align: center; background-color: #45184E; color: #fff;">
                        <th>Gas Type</th>
                        <th>Muda</th>
                        <th>SKL</th>
                    </tr>
                </thead>
                <tbody class="tbody-gastype">
                </tbody>
            </table>
        </div>
        <div class="col-md-4">
            <div class="pie-chart-dashboard" id="disc-chart"></div>
        </div>
    </div>
    <div id="dataGridFound" class="mt-2"></div>
    <u class="mt-2">Cylinder status definition</u>
    <div class="txt-accepted-cylinder">1. <b>Accepted</b> = accepted by visual inspection and Hydrotest still valid more than 1 year from the date of inspection.</div>
    <div class="txt-htexpiring-cylinder">2. <b>Accepted (HT Expiring)</b> = means the Hydrotest validity still **valid from the date of inspection, but will overdue soon, before next 1 year interval of inspection campaign.</div>
    <div class="txt-rejected">3. <b>Rejected</b> = rejected either by visual inspection and/or Hydrotest date expired during the date of inspection.</div>
</div>

<!-- Modal -->
<div class="modal fade" id="info_modal" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Cylinder Information</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-4">
                            <label class="header-detail">Serial Number</label>
                            <input type="text" class="form-control form-control-sm" data-toggle="tooltip" id="serial_no"
                                readonly>
                        </div>
                        <div class="col-md-4">
                            <label class="header-detail">Platform</label>
                            <input type="text" class="form-control form-control-sm" data-toggle="tooltip" id="platform"
                                readonly>
                        </div>
                        <div class="col-md-4">
                            <label class="header-detail">Deck</label>
                            <input type="text" class="form-control form-control-sm" data-toggle="tooltip" id="deck"
                                readonly>
                        </div>
                        <div class="col-md-4">
                            <label class="header-detail">Discipline</label>
                            <input type="text" class="form-control form-control-sm" data-toggle="tooltip" id="discipline"
                                readonly>
                        </div>
                        <div class="col-md-4">
                            <label class="header-detail">Location (Equipment/Package)</label>
                            <input type="text" class="form-control form-control-sm" data-toggle="tooltip" id="location"
                                readonly>
                        </div>
                        <div class="col-md-4">
                            <label class="header-detail">Gas Type</label>
                            <input type="text" class="form-control form-control-sm" data-toggle="tooltip" id="gas_type"
                                readonly>
                        </div>
                        <div class="col-md-4">
                            <label class="header-detail">Manufacturer</label>
                            <input type="text" class="form-control form-control-sm" data-toggle="tooltip" id="manufacturer"
                                readonly>
                        </div>
                        <div class="col-md-4">
                            <label class="header-detail">Material</label>
                            <input type="text" class="form-control form-control-sm" data-toggle="tooltip" id="material"
                                readonly>
                        </div>
                        <div class="col-md-4">
                            <label class="header-detail">Valve/Fitting</label>
                            <input type="text" class="form-control form-control-sm" data-toggle="tooltip" id="valve"
                                readonly>
                        </div>
                        <div class="col-md-4">
                            <label class="header-detail">COMP. (%)</label>
                            <input type="text" class="form-control form-control-sm" data-toggle="tooltip" id="comp"
                                readonly>
                        </div>
                        <div class="col-md-4">
                            <label class="header-detail">Net Weight (kg)</label>
                            <input type="text" class="form-control form-control-sm" data-toggle="tooltip" id="net_weight"
                                readonly>
                        </div>
                        <div class="col-md-4">
                            <label class="header-detail">Volumn (L)</label>
                            <input type="text" class="form-control form-control-sm" data-toggle="tooltip" id="volumn"
                                readonly>
                        </div>
                        <div class="col-md-4">
                            <label class="header-detail">Work Pressure (bar)</label>
                            <input type="text" class="form-control form-control-sm" data-toggle="tooltip" id="work_pressure"
                                readonly>
                        </div>
                        <div class="col-md-4">
                            <label class="header-detail">Test Pressure (bar)</label>
                            <input type="text" class="form-control form-control-sm" data-toggle="tooltip" id="test_pressure"
                                readonly>
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
                <h5 class="modal-title" id="staticBackdropLabel">Cylinder Document</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="dataGid_library"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="form_modal" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Cylinder Form</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div style="font-size: 18px; fontt-weight: 600;">Static Information</div>
                        </div>
                        <div class="col-md-4">
                            <label class="header-detail">Serial Number <span class="text-danger">*</span></label>
                            <input type="text" class="form-control form-control-sm" id="serial_no_form" placeholder="Serial Number">
                        </div>
                        <div class="col-md-4">
                            <label class="header-detail">Platform</label>
                            <input type="text" class="form-control form-control-sm" id="platform_form" placeholder="Platform">
                        </div>
                        <div class="col-md-4">
                            <label class="header-detail">Deck</label>
                            <select class="form-control form-control-sm" id="deck_form">
                                <option value="" selected disabled>Select Deck</option>
                                <option value="CELLAR">CELLAR</option>
                                <option value="LEVEL 1">LEVEL 1</option>
                                <option value="LEVEL 2">LEVEL 2</option>
                                <option value="LOWER">LOWER</option>
                                <option value="MAIN">MAIN</option>
                                <option value="MEZZANINE">MEZZANINE</option>
                                <option value="SUMP">SUMP</option>
                                <option value="UPPER">UPPER</option>
                                <option value="LEVEL 4">LEVEL 4</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label class="header-detail">Discipline</label>
                            <select class="form-control form-control-sm" id="discipline_form">
                                <option value="" selected disabled>Select Discipline</option>
                                <option value="SKL">SKL</option>
                                <option value="Construction">Construction</option>
                                <option value="Electrical">Electrical</option>
                                <option value="Instrument">Instrument</option>
                                <option value="Mechanical">Mechanical</option>
                                <option value="Medic">Medic</option>
                                <option value="Operation">Operation</option>
                                <option value="Operation (Lab)">Operation (Lab)</option>
                                <option value="Operation/Mechanical">Operation/Mechanical</option>
                                <option value="Other-Adhoc">Other-Adhoc</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label class="header-detail">Location (Equipment/Package)</label>
                            <input type="text" class="form-control form-control-sm" id="location_form" placeholder="Location">
                        </div>
                        <div class="col-md-4">
                            <label class="header-detail">Gas Type</label>
                            <select class="form-control form-control-sm" id="gas_type_form">
                                <option value="" selected disabled>Select Gas Type</option>
                                <option value="Acetylene">Acetylene</option>
                                <option value="Air Zero Grade">Air Zero Grade</option>
                                <option value="Argon">Argon</option>
                                <option value="Carbon Dioxide">Carbon Dioxide</option>
                                <option value="Compressed Gas">Compressed Gas</option>
                                <option value="Helium">Helium</option>
                                <option value="Methane+CO2">Methane+CO2</option>
                                <option value="Methane+Water">Methane+Water</option>
                                <option value="Mix Gas">Mix Gas</option>
                                <option value="Nitrogen">Nitrogen</option>
                                <option value="Oxygen">Oxygen</option>
                                <option value="Oxygen+CO2">Oxygen+CO2</option>
                                <option value="Propane">Propane</option>
                                <option value="R134A">R134A</option>
                                <option value="Water">Water</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label class="header-detail">Manufacturer</label>
                            <select class="form-control form-control-sm" id="manufacturer_form">
                                <option value="" selected disabled>Select Manufacturer</option>
                                <option value="UTAI SEYA">UTAI SEYA</option>
                                <option value="AIR Product">AIR Product</option>
                                <option value="Air Liquide">Air Liquide</option>
                                <option value="Airgas">Airgas</option>
                                <option value="BC Petrochemical">BC Petrochemical</option>
                                <option value="BIG">BIG</option>
                                <option value="BOC">BOC</option>
                                <option value="CGS">CGS</option>
                                <option value="CHN">CHN</option>
                                <option value="CNSEFIC">CNSEFIC</option>
                                <option value="ENK">ENK</option>
                                <option value="GB LUXFER">GB LUXFER</option>
                                <option value="Gasco">Gasco</option>
                                <option value="HI-FOG">HI-FOG</option>
                                <option value="KIDDE">KIDDE</option>
                                <option value="LINDE">LINDE</option>
                                <option value="LUXFER">LUXFER</option>
                                <option value="MMSB">MMSB</option>
                                <option value="MOX">MOX</option>
                                <option value="N/A">N/A</option>
                                <option value="NIG">NIG</option>
                                <option value="NOX">NOX</option>
                                <option value="POLY GAS">POLY GAS</option>
                                <option value="PTTEP">PTTEP</option>
                                <option value="SB">SB</option>
                                <option value="SHP">SHP</option>
                                <option value="SITT TATT">SITT TATT</option>
                                <option value="SOXAL">SOXAL</option>
                                <option value="SPUN">SPUN</option>
                                <option value="TIG">TIG</option>
                                <option value="TSC">TSC</option>
                                <option value="UHP">UHP</option>
                                <option value="UMEGA">UMEGA</option>
                                <option value="WELL">WELL</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label class="header-detail">Material</label>
                            <select class="form-control form-control-sm" id="material_form">
                                <option value="" selected disabled>Select Material</option>
                                <option value="Aluminium">Aluminium</option>
                                <option value="Carbon Steel">Carbon Steel</option>
                                <option value="Cr-Mo Steel">Cr-Mo Steel</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label class="header-detail">Valve/Fitting</label>
                            <select class="form-control form-control-sm" id="valve_form">
                                <option value="" selected disabled>Select Valve/Fitting</option>
                                <option value="4706">4706</option>
                                <option value="92150">92150</option>
                                <option value="CARDOX Type1 Class C">CARDOX Type1 Class C</option>
                                <option value="CGA 330">CGA 330</option>
                                <option value="CGA 351">CGA 351</option>
                                <option value="CGA 510">CGA 510</option>
                                <option value="CGA 540">CGA 540</option>
                                <option value="CGA 580">CGA 580</option>
                                <option value="CGA 590 Brass">CGA 590 Brass</option>
                                <option value="CGA 870">CGA 870</option>
                                <option value="EX-4510 (CV-98)">EX-4510 (CV-98)</option>
                                <option value="IDX">IDX</option>
                                <option value="KIDDE">KIDDE</option>
                                <option value="Model 4706">Model 4706</option>
                                <option value="QF-15A">QF-15A</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label class="header-detail">COMP. (%)</label>
                            <input type="number" class="form-control form-control-sm" id="comp_form" placeholder="COMP. (%)">
                        </div>
                        <div class="col-md-4">
                            <label class="header-detail">Net Weight (kg)</label>
                            <input type="number" class="form-control form-control-sm" id="net_weight_form" placeholder="Net Weight (kg)">
                        </div>
                        <div class="col-md-4">
                            <label class="header-detail">Volumn (L)</label>
                            <input type="number" class="form-control form-control-sm" id="volumn_form" placeholder="Volumn (L)">
                        </div>
                        <div class="col-md-4">
                            <label class="header-detail">Work Pressure (bar)</label>
                            <input type="number" class="form-control form-control-sm"  id="work_pressure_form" placeholder="Work Pressure (bar)">
                        </div>
                        <div class="col-md-4">
                            <label class="header-detail">Test Pressure (bar)</label>
                            <input type="number" class="form-control form-control-sm" id="test_pressure_form" placeholder="Test Pressure (bar)">
                        </div>
                        <div class="col-12 mt-3">
                            <div style="font-size: 18px; fontt-weight: 600;">Testing Information</div>
                        </div>
                        <div class="col-md-4">
                            <label class="header-detail">Integrity Status <span class="text-danger">*</span></label>
                            <select class="form-control form-control-sm" id="cylinder_status_form">
                                <option value="" selected disabled>Select Status</option>
                                <option value="ACCEPTED">ACCEPTED</option>
                                <option value="REJECTED">REJECTED</option>
                                <option value="NOT INSPECTED">NOT INSPECTED</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label class="header-detail">Last VT Test</label>
                            <input type="date" class="form-control form-control-sm" id="last_vt_form" placeholder="Select Date">
                        </div>
                        <div class="col-md-4">
                            <label class="header-detail">Last HT Test</label>
                            <input type="date" class="form-control form-control-sm" id="last_ht_form" placeholder="Select Date">
                        </div>
                        <div class="col-12 mt-3">
                            <div style="font-size: 18px; fontt-weight: 600;">Mitigation Action</div>
                        </div>
                        <div class="col-md-4">
                            <label class="header-detail">Mitigation Status</label>
                            <select class="form-control form-control-sm" id="mitigation_status_form">
                                <option value="" selected disabled>Select Status</option>
                                <option value="PENDING">PENDING</option>
                                <option value="ONGOING">ONGOING</option>
                                <option value="COMPLETED">COMPLETED</option>
                                <option value="">EMPTY</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label class="header-detail">Note</label>
                            <input type="text" class="form-control form-control-sm" data-toggle="tooltip" id="note_from" placeholder="Note">
                            <div class="text-danger" style="font-size: 12px;">If 'Dispose' must enter the 'DAN-NUMBER'</div>
                        </div>
                        <div class="col-md-4">
                            <input type="checkbox" id="not_found_form" value="Not Found" name="not_found_form" class="mt-4">
                            <label for="not_found_found"> Not Found</label>
                        </div>
                    </div>
                </div>
                <!--// container-fluid-->
            </div>
            <div class="modal-footer">
                <button type="button" id="btn-create" class="btn btn-success" onclick="create_cylinder()">Create</button>
                <button type="button" id="btn-edit" class="btn btn-success" onclick="edit_cylinder()">Submit</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script>
    var _token_cylinder = $.cookie("_token_dashboard");
    console.log("_token_cylinder: " + _token_cylinder);
    var dataGridF;
    var isManage = false;
    var dataArr = [];
    var dataArrFound = [];
    var dataArrNotFound = [];
    var datenow = new Date();
    var id_cylinder = 0;
    var dataChartDisc = [
        {
            disc: "Construction",
            total: 0
        },
        {
            disc: "Electrical",
            total: 0
        },
        {
            disc: "Instrument",
            total: 0
        },
        {
            disc: "Mechanical",
            total: 0
        },
        {
            disc: "Medic",
            total: 0
        },
        {
            disc: "Operation",
            total: 0
        },
        {
            disc: "Operation (Lab)",
            total: 0
        },
        {
            disc: "Operation/Mechanical",
            total: 0
        },
        {
            disc: "Other-Adhoc",
            total: 0
        },
        {
            disc: "SKL",
            total: 0
        },
    ];
    var dataGasType = [
        {
        "name": "Acetylene",
        "muda_total": 0,
        "skl_total": 0
        },
        {
        "name": "Air Zero Grade",
        "muda_total": 0,
        "skl_total": 0
        },
        {
        "name": "Argon",
        "muda_total": 0,
        "skl_total": 0
        },
        {
        "name": "Carbon Dioxide",
        "muda_total": 0,
        "skl_total": 0
        },
        {
        "name": "Compressed Gas",
        "muda_total": 0,
        "skl_total": 0
        },
        {
        "name": "Helium",
        "muda_total": 0,
        "skl_total": 0
        },
        {
        "name": "Methane+CO2",
        "muda_total": 0,
        "skl_total": 0
        },
        {
        "name": "Methane+Water",
        "muda_total": 0,
        "skl_total": 0
        },
        {
        "name": "Mix Gas",
        "muda_total": 0,
        "skl_total": 0
        },
        {
        "name": "Nitrogen",
        "muda_total": 0,
        "skl_total": 0
        },
        {
        "name": "Oxygen",
        "muda_total": 0,
        "skl_total": 0
        },
        {
        "name": "Oxygen+CO2",
        "muda_total": 0,
        "skl_total": 0
        },
        {
        "name": "Propane",
        "muda_total": 0,
        "skl_total": 0
        },
        {
        "name": "R134A",
        "muda_total": 0,
        "skl_total": 0
        },
        {
        "name": "Water",
        "muda_total": 0,
        "skl_total": 0
        }
    ];

    get_data();
    get_cylinder_summary();
    set_permission();
    $('.loader').hide();

    function set_permission() {
        console.log($.cookie("_ms_email"));
        $.ajax({
            type: "GET",
            url: "https://" + url_api + "/fmi/data/v2/databases/CPOC_AIMS/layouts/cylinder_disc_email/records?_limit=100",
            dataType: 'json',
            headers: {
                "Authorization": "Bearer " + _token_cylinder,
                "Content-Type": "application/json"
            },
            async: false,
            success: function (data) {
                console.log(data);
                const dt = data.response.data;
                const l = dt.filter(function(d){
                    return d.fieldData.email == $.cookie("_ms_email");
                }).length;
                // if(l > 0) {
                //     isManage = true;
                //     $('#form_btn').show();
                // } else {
                //     $('#form_btn').hide();
                // }
            },
            error: function (error) {
                console.log(error);
                get_token_startup();
                _token_cylinder = $.cookie("_token_dashboard");
                set_permission();
            }
        });
    }

    function get_data() {
        $.ajax({
            type: "GET",
            url: "https://" + url_api + "/fmi/data/v2/databases/CPOC_AIMS/layouts/cylinder_info_api/records?_limit=2000",
            dataType: 'json',
            headers: {
                "Authorization": "Bearer " + _token_cylinder,
                "Content-Type": "application/json"
            },
            async: false,
            success: function (data) {
                console.log(data);
                dataArr = [];
                dataArrFound = [];
                dataArrNotFound = [];
                dataArr = data.response.data;
                //console.log(dataArr);
                dataArrFound = dataArr.filter(function(d){
                    return d.fieldData.not_found == "";
                });
                create_table(dataArrFound);
                gen_chart(dataArrFound);
                gen_chart_disc(dataArrFound);
                create_table_gastype(dataArrFound);
                
            },
            error: function (error) {
                console.log(error);
                get_token_startup();
                _token_cylinder = $.cookie("_token_dashboard");
                get_data();
                //logout();
            }
        });
    }

    function get_cylinder_summary() {
        $.ajax({
            type: "GET",
            url: "https://" + url_api + "/fmi/data/v2/databases/CPOC_AIMS/layouts/cylinder_equipment/records?_limit=1",
            dataType: 'json',
            headers: {
                "Authorization": "Bearer " + $.cookie("_token_dashboard"),
                "Content-Type": "application/json"
            },
            async: false,
            success: function (data) {
                //console.log(data);
                fetch_summary(data.response.data)
            },
            error: function (error) {
                console.log(error);
                get_token_startup();
                get_cylinder_summary();
                //logout();
            }
        });
    }

    function fetch_summary(data) {
        console.log(data);
        $('#accepted_val').html(data[0].fieldData.accepted.toLocaleString());
        $('#accepted_expiring_val').html(data[0].fieldData.accepted_expiring.toLocaleString());
        $('#rejected_val').html(data[0].fieldData.rejected.toLocaleString());
        $('#notinsp_val').html(data[0].fieldData.not_inspected.toLocaleString());
        $('#total_val').html(data[0].fieldData.accepted+data[0].fieldData.accepted_expiring+data[0].fieldData.rejected+data[0].fieldData.not_inspected);
        
    }

    function get_info(data) {
        console.log('in');
        $('#serial_no').val(data.serial_no);
        $('#serial_no').tooltip('dispose').tooltip({ title: data.serial_no }).tooltip({ 'trigger': 'hover' });

        $('#platform').val(data.platform);
        $('#platform').tooltip('dispose').tooltip({ title: data.platform }).tooltip({ 'trigger': 'hover' });

        $('#deck').val(data.deck);
        $('#deck').tooltip('dispose').tooltip({ title: data.deck }).tooltip({ 'trigger': 'hover' });

        $('#discipline').val(data.discipline);
        $('#discipline').tooltip('dispose').tooltip({ title: data.discipline }).tooltip({ 'trigger': 'hover' })

        $('#location').val(data.location);
        $('#location').tooltip('dispose').tooltip({ title: data.location }).tooltip({ 'trigger': 'hover' });

        $('#gas_type').val(data.gas_type);
        $('#gas_type').tooltip('dispose').tooltip({ title: data.gas_type }).tooltip({ 'trigger': 'hover' });

        $('#manufacturer').val(data.manufacturer);
        $('#manufacturer').tooltip('dispose').tooltip({ title: data.manufacturer }).tooltip({ 'trigger': 'hover' });

        $('#valve').val(data.valve_fitting);
        $('#valve').tooltip('dispose').tooltip({ title: data.valve_fitting }).tooltip({ 'trigger': 'hover' });

        $('#material').val(data.material);
        $('#material').tooltip('dispose').tooltip({ title: data.material }).tooltip({ 'trigger': 'hover' });

        $('#comp').val(data.compound);
        $('#comp').tooltip('dispose').tooltip({ title: data.compound }).tooltip({ 'trigger': 'hover' });

        $('#net_weight').val(data.net_weight_kg);
        $('#net_weight').tooltip('dispose').tooltip({ title: data.net_weight_kg }).tooltip({ 'trigger': 'hover' });

        $('#volumn').val(data.volume_L);
        $('#volumn').tooltip('dispose').tooltip({ title: data.volume_L }).tooltip({ 'trigger': 'hover' });

        $('#work_pressure').val(data.work_pressure_bar);
        $('#work_pressure').tooltip('dispose').tooltip({ title: data.work_pressure_bar }).tooltip({ 'trigger': 'hover' });

        $('#test_pressure').val(data.test_pressure_bar);
        $('#test_pressure').tooltip('dispose').tooltip({ title: data.test_pressure_bar }).tooltip({ 'trigger': 'hover' });

        $("#info_modal").modal('show');
    }

    function get_library(id_cylinder) {
        $.ajax({
            type: "POST",
            url: "https://" + url_api + "/fmi/data/v2/databases/CPOC_AIMS/layouts/cylinder_inspection_document/_find",
            dataType: 'json',
            headers: {
                "Authorization": "Bearer " + _token_cylinder,
                "Content-Type": "application/json"
            },
            data: "{\n    \"query\": [\n        {\n            \"id_cylinder\": \"==" + id_cylinder + "\"\n        }\n    ]\n}",
            async: false,
            success: function (data) {
                //var scriptResult = JSON.parse(data.response.scriptResult)
                //console.log(data);
                call_modal_library(data.response.data);
            },
            error: function (error) {
                console.log(error);
                console.log(error.responseJSON.messages[0].code);
                if(error.responseJSON.messages[0].code == 401) {
                    alert("no library file");
                }else {
                    get_token_startup();
                    _token_cylinder = $.cookie("_token_dashboard");
                    get_library(id_cylinder);
                }
            }
        });

    }

    function call_modal_library(data) {
        console.log(data);
        $('#library_modal').modal('show');
        const dataGrid = $("#dataGid_library").dxDataGrid({
            dataSource: data,
            keyExpr: "fieldData.id_file",

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
                        console.log(options)
                        // $('<a class="btn btn-primary btn-sm" onclick=get_file("' + options.data.fieldData.file + '","' + options.data.fieldData.file_name + '")>Download</a>').addClass('').appendTo(container);
                        $('<a class="btn btn-primary btn-sm" href="' + options.data.fieldData.file + '" download="' + options.data.fieldData.file_name_manual + '.' + options.data.fieldData.file_extension.replace(/(?:\\[rn]|[\r\n]+)+/g, "") + '" target="_blank")>Download</a>').addClass('').appendTo(container);
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
        body: `url=${url}&token=${_token_cylinder}&file_name=${file_name}`,
        })
        .then((response) => response.text())
        .then((res) => (alert(res)));
    }

    function create_table(data) {
        dataGridF = $("#dataGridFound").dxDataGrid({
            dataSource: data,
            keyExpr: "fieldData.id_cylinder",
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
                    dataField: "fieldData.id_cylinder",
                    caption: "Info",
                    width: "150",
                    allowEditing: false,
                    alignment: "center",
                    cellTemplate: function (container, options) {
                        $('<button type="button" title="Data"></button>').addClass('btn btn-sm fas fa-list-ul')
                            .on('dxclick', function (e) {
                                console.log(options.data.fieldData);
                                get_info(options.data.fieldData);
                            }).appendTo(container);
                        $('<button type="button" title="Library"></button>').addClass('btn btn-sm fas fa-book')
                            .on('dxclick', function (e) {
                                console.log(options.value)
                                get_library(options.value);
                            }).appendTo(container);
                        // if(isManage) {
                            $('<button type="button" title="Edit"></button>').addClass('btn btn-sm fas fa-edit')
                                .on('dxclick', function (e) {
                                    console.log(options.data.fieldData);
                                    $('#form_modal').modal('show');
                                    set_data_for_edit(options.data.fieldData);
                                }).appendTo(container);
                            $('<button type="button" title="Edit"></button>').addClass('btn btn-sm fas fa-trash')
                                .on('dxclick', function (e) {
                                    delete_cylinder(options.data.fieldData);
                                }).appendTo(container);
                        // }
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
                    dataField: "fieldData.platform",
                    fixed: true,
                    fixedPosition: "left",
                    alignment: "center",
                    // filterValues: ["MDPP"]
                },
                {
                    caption: "Location(Equipment/Package)",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Location<br>(Equipment/Package)</div>"));
                    },
                    dataField: "fieldData.location",
                    width: "150"
                },
                {
                    caption: "Serial Number",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Serial<br>Number</div>"));
                    },
                    dataField: "fieldData.serial_no",
                    width: "150"
                },
                {
                    caption: "Discipline",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Discipline</div>"));
                    },
                    dataField: "fieldData.discipline",
                    sortOrder: 'asc',
                },
                {
                    caption: "Gas Type",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Gas Type</div>"));
                    },
                    dataField: "fieldData.gas_type",
                },
                {
                    caption: "Last Visual",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Last<br>Visual</div>"));
                    },
                    dataField: "fieldData.last_VT",
                    // calculateCellValue: function (value) {
                    //     return get_year(value.fieldData.last_VT)
                    // },
                    alignment: "center",
                    dataType: "date",
                    format: "MMM-yyyy"
                },
                {
                    caption: "Next Visual",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Next<br>Visual</div>"));
                    },
                    dataField: "fieldData.next_VT",
                    // calculateCellValue: function (value) {
                    //     return get_year(value.fieldData.next_VT)
                    // },
                    alignment: "center",
                    dataType: "date",
                    format: "MMM-yyyy"
                },
                {
                    caption: "Last HT",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Last<br>HT</div>"));
                    },
                    dataField: "fieldData.last_HT",
                    // calculateCellValue: function (value) {
                    //     return get_year(value.fieldData.last_HT)
                    // },
                    alignment: "center",
                    dataType: "date",
                    format: "MMM-yyyy"
                },
                {
                    caption: "Next HT",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Next<br>HT</div>"));
                    },
                    dataField: "fieldData.next_HT_5Y",
                    // calculateCellValue: function (value) {
                    //     return get_year(value.fieldData.next_HT_5Y)
                    // },
                    alignment: "center",
                    dataType: "date",
                    format: "MMM-yyyy"
                },
                {
                    caption: "Integrity Status",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Integrit<br>Status</div>"));
                    },
                    dataField: "fieldData.integrity_status",
                    alignment: "center",
                    visible: false
                },
                {
                    caption: "HT Due Status",
                    headerCellTemplate: function (container) {
                        container.append($("<div>HT Due<br>Status</div>"));
                    },
                    dataField: "fieldData.ht_due_status",
                    alignment: "center",
                    visible: false
                },
                {
                    caption: "Final Status",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Final<br>Status</div>"));
                    },
                    dataField: "fieldData.final_status",
                    alignment: "center"
                },
                {
                    caption: "Mitigation Status",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Mitigation<br>Status</div>"));
                    },
                    dataField: "fieldData.mitigation",
                    alignment: "center"
                },
                {
                    caption: "Way Forward",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Way Forward</div>"));
                    },
                    dataField: "fieldData.way_forward",
                    alignment: "center"
                },
                {
                    caption: "Note",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Note</div>"));
                    },
                    dataField: "fieldData.note",
                    alignment: "center"
                },
            ],
            repaintChangesOnly: true,
            onCellPrepared: function (e) {
                if (e.rowType === "data" && e.column.dataField === "fieldData.integrity_status") {
                    e.cellElement.css("background-color", e.data.fieldData.integrity_status == "ACCEPTED" ? "#00AF50" : e.data.fieldData.integrity_status == "HT OVERDUE" ? "#FFBF00" : e.data.fieldData.integrity_status == "HT EXPIRING" ? "#FCE8D8" : e.data.fieldData.integrity_status == "REJECTED" ? "#FF0000" : "");
                }

                if (e.rowType === "data" && e.column.dataField === "fieldData.final_status") {
                    e.cellElement.css("background-color", e.data.fieldData.color_code == "Green" ? "#00AF50" : e.data.fieldData.color_code == "Orange" ? "#F69546" : e.data.fieldData.color_code == "Red" ? "#FF0000" : "");
                }

                if (e.rowType === "data" && e.column.dataField === "fieldData.ht_due_status") {
                    e.cellElement.css("background-color", e.data.fieldData.ht_due_status == "NOT DUE" ? "#00AF50" : e.data.fieldData.ht_due_status == "HT OVERDUE" ? "#FFBF00" : e.data.fieldData.ht_due_status == "HT EXPIRING" ? "#FCE8D8" : "");
                }

                if (e.rowType === "data" && e.column.dataField === "fieldData.next_HT_5Y") {
                    //e.cellElement.css("background-color", get_year(e.data.fieldData.next_HT_5Y) < datenow.getFullYear() ? "#FF0000" : "#66ff33");
                    e.cellElement.css("background-color", compare_month_year(e.data.fieldData.next_HT_5Y) == 'overdue' ? "#FF0000" : "#66ff33");
                }

                if (e.rowType === "data" && e.column.dataField === "fieldData.next_VT") {
                    //e.cellElement.css("background-color", get_year(e.data.fieldData.next_VT) < datenow.getFullYear() ? "#FF0000" : "#66ff33");
                    e.cellElement.css("background-color", compare_month_year(e.data.fieldData.next_VT) == 'overdue' ? "#FF0000" : "#66ff33");
                }

                if (e.rowType == "header" && (e.column.caption === "Last Visual" || e.column.caption === "Next Visual")) {
                    e.cellElement.css("background-color", "#7b1fa2");
                }

                if (e.rowType == "header" && (e.column.caption === "Last HT" || e.column.caption === "Next HT")) {
                    e.cellElement.css("background-color", "#512da8");
                }

                if (e.rowType == "header" && e.column.caption === "Final Status") {
                    e.cellElement.css("background-color", "#303f9f");
                }

                //Set alignment
                if (e.rowType == "header") {
                    e.cellElement.css("text-align", "center");
                    e.cellElement.css("vertical-align", "middle");
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
        // $('.dx-toolbar-after').prepend('<button type="button" class="btn btn-outline-dark" onclick="not_found()" style="line-height: 1.3; border-color: #ddd;">MISSING CYLINDER</button>');
    };

    function compare_month_year(d) {
        let due = "";
        const currentDate = new Date();
        const currentMonthYear = currentDate.getFullYear() + "-" + ("0" + (currentDate.getMonth() + 1)).slice(-2);
        if (d === null || d === undefined || d === "") {
            due = "overdue";
        } else {
            var parts = d.split('/');
            d = parts[2] + "-" + parts[0];
            due = currentMonthYear > d ? "overdue" : "ondue";
        }
        return due;
    }

    function get_year(value) {
        if (value === null || value === undefined || value === "") {
            return ""
        } else {
            var parts = value.split('/');
            return parts[2]
        }
    }

    function not_found() {
        window.location.href = 'https://aims-muda.cpoc.com.my/CPOC_AIMS/index.php?module=cylinder_notfound';
    }

    function create_cylinder() {
        console.log('create');
        if($('#serial_no_form').val() && $('#cylinder_status_form').val()) {
            $('.loader_1').show();
            $('#btn-create').prop('disabled', true);
            const serial_no = $('#serial_no_form').val();
            const platfrom = $('#platform_form').val();
            const deck = $('#deck_form').val() ?? "";
            const discipline = $('#discipline_form').val() ?? "";
            const location = $('#location_form').val();
            const gas_type = $('#gas_type_form').val() ?? "";
            const manufacturer = $('#manufacturer_form').val() ?? "";
            const material = $('#material_form').val() ?? "";
            const valve = $('#valve_form').val() ?? "";
            const comp = $('#comp_form').val();
            const net_weight = $('#net_weight_form').val();
            const volumn = $('#volumn_form').val();
            const work_pressure = $('#work_pressure_form').val();
            const test_pressure = $('#test_pressure_form').val();
            const cylinder_status = $('#cylinder_status_form').val() ?? "";
            const last_ht = $('#last_ht_form').val();
            const last_vt = $('#last_vt_form').val();
            const mitigation_status = $('#mitigation_status_form').val() ?? "";
            const note = $('#note_from').val();
            const not_found = $('input[name="not_found_form"]:checked').val() === undefined ? "" : $('input[name="not_found_form"]:checked').val();
            const param = serial_no + '||' + platfrom + '||' + deck + '||' + discipline + '||' + location + '||' + gas_type + '||' + manufacturer+ '||' + material + '||' + valve + '||' + comp + '||' + net_weight + '||' + volumn + '||' + work_pressure + '||' + test_pressure + '||' + cylinder_status + '||' + last_ht + '||' + mitigation_status + '||' + note + '||' + not_found + '||' + last_vt;
            console.log(param);
            $.ajax({
                type: "GET",
                url: "https://" + url_api + "/fmi/data/v2/databases/CPOC_AIMS/layouts/cylinder/script/add_cylinder_api?script.param=" + param,
                dataType: 'json',
                headers: {
                    "Authorization": "Bearer " + $.cookie("_token_dashboard"),
                    "Content-Type": "application/json"
                },
                async: true,
                success: function (data) {
                    console.log(data);
                    $('#form_modal').modal('hide');
                    get_data();
                    $('#btn-create').prop('disabled', false);
                },
                error: function (error) {
                    console.log(error);
                    $('#btn-create').prop('disabled', false);
                },
                complete: function() {
                    $('.loader_1').hide();
                }
            });
        }
    }

    function edit_cylinder() {
        if($('#serial_no_form').val() && $('#cylinder_status_form').val()) {
            $('.loader_1').show();
            $('#btn-edit').prop('disabled', true);
            console.log('edit');
            const serial_no = $('#serial_no_form').val();
            const platfrom = $('#platform_form').val();
            const deck = $('#deck_form').val() ?? "";
            const discipline = $('#discipline_form').val() ?? "";
            const location = $('#location_form').val();
            const gas_type = $('#gas_type_form').val() ?? "";
            const manufacturer = $('#manufacturer_form').val() ?? "";
            const material = $('#material_form').val() ?? "";
            const valve = $('#valve_form').val() ?? "";
            const comp = $('#comp_form').val();
            const net_weight = $('#net_weight_form').val();
            const volumn = $('#volumn_form').val();
            const work_pressure = $('#work_pressure_form').val();
            const test_pressure = $('#test_pressure_form').val();
            const cylinder_status = $('#cylinder_status_form').val() ?? "";
            const last_ht = $('#last_ht_form').val();
            const last_vt = $('#last_vt_form').val();
            const mitigation_status = $('#mitigation_status_form').val() ?? "";
            const note = $('#note_from').val();
            const not_found = $('input[name="not_found_form"]:checked').val() === undefined ? "" : $('input[name="not_found_form"]:checked').val();

            const param = serial_no + '||' + platfrom + '||' + deck + '||' + discipline + '||' + location + '||' + gas_type + '||' + manufacturer+ '||' + material + '||' + valve + '||' + comp + '||' + net_weight + '||' + volumn + '||' + work_pressure + '||' + test_pressure + '||' + cylinder_status + '||' + last_ht + '||' + mitigation_status + '||' + note + '||' + not_found + '||' + id_cylinder + '||' + last_vt;
            console.log(param);
            $.ajax({
                type: "GET",
                url: "https://" + url_api + "/fmi/data/v2/databases/CPOC_AIMS/layouts/cylinder/script/edit_cylinder_api?script.param=" + param,
                dataType: 'json',
                headers: {
                    "Authorization": "Bearer " + $.cookie("_token_dashboard"),
                    "Content-Type": "application/json"
                },
                async: true,
                success: function (data) {
                    console.log(data);
                    $('#form_modal').modal('hide');
                    get_data();
                    $('#btn-edit').prop('disabled', false);
                },
                error: function (error) {
                    console.log(error);
                    $('#btn-edit').prop('disabled', false);
                },
                complete: function() {
                    $('.loader_1').hide();
                }
            });
        }
    }

    function delete_cylinder(data) {
        const id_cylinder = data.id_cylinder;
        if(id_cylinder) {
            const cf = window.confirm("Are you sure you want to delete this cylinder?");
            if(cf) {
                $('.loader_1').show();
                $.ajax({
                    type: "GET",
                    url: "https://" + url_api + "/fmi/data/v2/databases/CPOC_AIMS/layouts/cylinder/script/delete_cylinder_api?script.param=" + id_cylinder,
                    dataType: 'json',
                    headers: {
                        "Authorization": "Bearer " + $.cookie("_token_dashboard"),
                        "Content-Type": "application/json"
                    },
                    async: true,
                    success: function (data) {
                        console.log(data);
                        get_data();
                    },
                    error: function (error) {
                        console.log(error);
                    },
                    complete: function() {
                        $('.loader_1').hide();
                    }
                });
            }
        }
    }

    $('#form_btn').on( "click", function(){
        $('#form_modal').modal('show');
        set_data_for_add();
    });

    function set_data_for_add() {
        $('#serial_no_form').val('');
        $('#platform_form').val('');
        $('#deck_form').val('');
        $('#discipline_form').val('');
        $('#location_form').val('');
        $('#gas_type_form').val('');
        $('#manufacturer_form').val('');
        $('#material_form').val('');
        $('#valve_form').val('');
        $('#comp_form').val('');
        $('#net_weight_form').val('');
        $('#volumn_form').val('');
        $('#work_pressure_form').val('');
        $('#test_pressure_form').val('');
        $('#cylinder_status_form').val('');
        $('#mitigation_status_form').val('');
        $('#note_from').val('');
        $('#last_ht_form').val('');
        $('#last_vt_form').val('');
        $('input[name="not_found_form"]').prop('checked', false);
        $('#btn-create').show();
        $('#btn-edit').hide();
    }

    function set_data_for_edit(data) {
        id_cylinder = data.id_cylinder;
        $('#serial_no_form').val(data.serial_no);
        $('#platform_form').val(data.platform);
        $('#deck_form').val(data.deck);
        $('#discipline_form').val(data.discipline);
        $('#location_form').val(data.location);
        $('#gas_type_form').val(data.gas_type);
        $('#manufacturer_form').val(data.manufacturer);
        $('#material_form').val(data.material);
        $('#valve_form').val(data.valve_fitting);
        $('#comp_form').val(data.compound);
        $('#net_weight_form').val(data.net_weight_kg);
        $('#volumn_form').val(data.volume_L);
        $('#work_pressure_form').val(data.work_pressure_bar);
        $('#test_pressure_form').val(data.test_pressure_bar);
        $('#cylinder_status_form').val(data.cylinder_status);
        $('#mitigation_status_form').val(data.mitigation_manual);
        $('#note_from').val(data.note);
        const htDate = new Date(data.last_HT_manual);
        const d = ("0" + htDate.getDate()).slice(-2);
        const m = ("0" + (htDate.getMonth() + 1)).slice(-2);
        const y = htDate.getFullYear();
        $('#last_ht_form').val(y + "-" + m + "-" + d);
        const vtDate = new Date(data.last_VT_manual);
        const d_ = ("0" + vtDate.getDate()).slice(-2);
        const m_ = ("0" + (vtDate.getMonth() + 1)).slice(-2);
        const y_ = vtDate.getFullYear();
        $('#last_vt_form').val(y_ + "-" + m_ + "-" + d_);
        if(data.not_found == 'Not Found') {
            $('input[name="not_found_form"]').prop('checked', true);
        } else {
            $('input[name="not_found_form"]').prop('checked', false);
        }
        $('#btn-create').hide();
        $('#btn-edit').show();

    }

    function gen_chart(data) {
        const dataChartStatus = [];
        const accepted = data.filter(function(d){
            return d.fieldData.color_code == "Green";
        });
        const accepted_expiring = data.filter(function(d){
            return d.fieldData.color_code == "Orange";
        });
        const rejected_overdue = data.filter(function(d){
            return d.fieldData.color_code == "Red" && d.fieldData.integrity_status == "ACCEPTED";
        });
        const rejected = data.filter(function(d){
            return d.fieldData.color_code == "Red" && d.fieldData.integrity_status == "REJECTED";
        });
        dataChartStatus.push(accepted.length, accepted_expiring.length, rejected_overdue.length, rejected.length);
        Highcharts.chart('status-chart', {
            chart: {
                type: 'column'
            },
            title: {
                text: ''
            },
            subtitle: {
                text: ''
            },
            xAxis: {
                categories: ['Accepted','Accepted (Require Hydrotest this year)','Overdue Hydrotest','To Dispose'],
                crosshair: true
            },
            yAxis: {
                min: 0,
                title: {
                text: ''
                }
            },
            tooltip: {
                headerFormat: '<span style="font-size:12px; color:#fff;">{point.key}</span><table>',
                pointFormat: '<tr><td style="color:{series.color};padding:0"><b>{series.name}:</b> </td>' +
                '<td style="color:{series.color};padding:0"><b>{point.y}</b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true,
                backgroundColor: '#333'
            },
            plotOptions: {
                column: {
                pointPadding: 0.2,
                borderWidth: 0
                }
            },
            credits: {
                enabled: false
            },
            series: [{
                name: 'Total',
                data: dataChartStatus,
                colors: ['#00AF50', '#F69546', '#ff0000', '#ff0000'],
                colorByPoint: true,
                dataLabels: {
                    enabled: true,
                }
            }]
        });
    }

    function gen_chart_disc(data) {
        for(let i = 0; i < dataChartDisc.length; i++) {
            dataChartDisc[i].total = data.filter(function(d){
                return d.fieldData.discipline == dataChartDisc[i].disc;
            }).length;
        }
        console.log(dataChartDisc);

        Highcharts.chart('disc-chart', {
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {
                text: ''
            },
            legend: {
            enabled: true,
                    itemDistance: 5,
            margin: 0
            },
            tooltip: {
	        headerFormat: '<b>{point.key}</b><br>',
                pointFormat: '{series.name}: <b>{point.percentage:.2f}%</b><br>Number: <b>{point.y_number}</b>'
            },
            plotOptions: {
                pie: {
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: true,
                        format: '{point.name}<br><b>{point.y_number}</b>'
                    },
                    showInLegend: true,
                    borderWidth: 1,
                    borderColor: '#eeeeee'
                },
                series: {
                    point: {
                        events: {
                            click: function(event){
                                this.select(null, true)  
                                const selected_point = this.series.chart.getSelectedPoints()
                                const selected = selected_point.map(item => ({index: item.index, color: item.color}))
                                const val = selected_point.map(item => ( item.name ))
                                const all_point = this.series.chart.series[0].data
                                all_point.forEach(item => {
                                    if (selected.length == 0) {
                                    item.update({color: item.color.substring(0, 7)})
                                    return
                                }
                                    if (selected.find(x => x.index == item.index)) {
                                    item.update({color: item.color.substring(0, 7)})
                                } else {
                                    item.update({color: item.color + (item.color.length < 9 ? "44" : "")}) // 44 opacity level 44 (range from 00 - FF)
                                }
                                })
                                dataGridF.columnOption('fieldData.discipline','filterValues', val);
                            }
                        }
                    }
                }
            },
            series: [{
                name: 'Percent',
                colorByPoint: true,
                data: [
                {
                    name: 'Construction',
                    y: dataChartDisc[0].total,
                    y_number: dataChartDisc[0].total,
                }, {
                    name: 'Electrical',
                    y: dataChartDisc[1].total,
                    y_number: dataChartDisc[1].total,
                },{
                    name: 'Instrument',
                    y: dataChartDisc[2].total,
                    y_number: dataChartDisc[2].total,
                },{
                    name: 'Mechanical',
                    y: dataChartDisc[3].total,
                    y_number: dataChartDisc[3].total,
                },{
                    name: 'Medic',
                    y: dataChartDisc[4].total,
                    y_number: dataChartDisc[4].total,
                },{
                    name: 'Operation',
                    y: dataChartDisc[5].total,
                    y_number: dataChartDisc[5].total,
                },{
                    name: 'Operation (Lab)',
                    y: dataChartDisc[6].total,
                    y_number: dataChartDisc[6].total,
                },{
                    name: 'Other-Adhoc',
                    y: dataChartDisc[8].total,
                    y_number: dataChartDisc[8].total,
                },{
                    name: 'SKL',
                    y: dataChartDisc[9].total,
                    y_number: dataChartDisc[9].total,
                }]
            }],
            credits: {
                enabled: false
            },
            exporting: {
                enabled: false
            }
        });
    }

    function create_table_gastype(data) {
        let rows = "";
        let muda_total = 0;
        for(let i = 0; i < dataGasType.length; i++) {
            dataGasType[i].muda_total = data.filter(function(d){
                return d.fieldData.discipline != "SKL" && d.fieldData.gas_type.trim().toLowerCase() == dataGasType[i].name.toLowerCase() && d.fieldData.final_status == 'ACCEPTED';
            }).length;
            dataGasType[i].skl_total = data.filter(function(d){
                return d.fieldData.discipline == "SKL" && d.fieldData.gas_type.trim().toLowerCase() == dataGasType[i].name.toLowerCase() && d.fieldData.final_status == 'ACCEPTED';
            }).length;
            muda_total += dataGasType[i].muda_total;
            rows = rows + `<tr><td>${dataGasType[i].name}</td><td style="text-align: center;">${dataGasType[i].muda_total}</td><td style="text-align: center;">${dataGasType[i].skl_total}</td></tr>`;
        }
        $('.tbody-gastype').html(rows);
        console.log(muda_total);
    }
</script>