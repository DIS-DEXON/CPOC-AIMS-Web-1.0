<div class="jumbotron jumbotron-header rounded-0 bg-secondary text-white">
    <div class="row">
        <div class="col-12">
            <button class="btn btn-secondary mb-2" onclick="renderPage('structure_platform');"><i class="fas fa-angle-left"></i> BACK</button>
            <h1 class="display-4">STRUCTURE</h1>
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
                <h5 class="modal-title" id="staticBackdropLabel">Structure Information</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-4">
                            <label class="header-detail">Tag Number</label>
                            <input type="text" class="form-control form-control-sm" id="tag_no" readonly>
                        </div>
                        <div class="col-md-4">
                            <label class="header-detail">Platform</label>
                            <input type="text" class="form-control form-control-sm" id="platform_codename" readonly>
                        </div>
                        <div class="col-md-4">
                            <label class="header-detail">Drawing Number</label>
                            <input type="text" class="form-control form-control-sm" id="drawing_no" readonly>
                        </div>
                        <div class="col-md-4">
                            <label class="header-detail">Structure Zone</label>
                            <input type="text" class="form-control form-control-sm" id="structure_zone" readonly>
                        </div>
                        <div class="col-md-4">
                            <label class="header-detail">Sub Structure</label>
                            <input type="text" class="form-control form-control-sm" id="sub_structure" readonly>
                        </div>
                        <div class="col-md-4">
                            <label class="header-detail">Structure Type</label>
                            <input type="text" class="form-control form-control-sm" id="structure_type" readonly>
                        </div>
                        <div class="col-md-4">
                            <label class="header-detail">Component Type</label>
                            <input type="text" class="form-control form-control-sm" id="component_type" readonly>
                        </div>
                        <div class="col-md-4">
                            <label class="header-detail">Component Type Class</label>
                            <input type="text" class="form-control form-control-sm" id="component_type_class" readonly>
                        </div>
                        <div class="col-md-4">
                            <label class="header-detail">Sub Component</label>
                            <input type="text" class="form-control form-control-sm" id="sub_component" readonly>
                        </div>
                        <div class="col-12">
                            <hr>
                        </div>
                        <div class="col-md-4">
                            <label class="header-detail">Outer Diameter (mm)</label>
                            <input type="text" class="form-control form-control-sm" id="outer_diameter" readonly>
                        </div>
                        <div class="col-md-4">
                            <label class="header-detail">Wall Thickness (mm)</label>
                            <input type="text" class="form-control form-control-sm" id="wall_thickness" readonly>
                        </div>
                        <div class="col-md-4">
                            <label class="header-detail">In-service Date</label>
                            <input type="text" class="form-control form-control-sm" id="inservice_date" readonly>
                        </div>
                        <div class="col-md-4">
                            <label class="header-detail">Design Life (years)</label>
                            <input type="text" class="form-control form-control-sm" id="design_life" readonly>
                        </div>
                        <div class="col-md-4">
                            <label class="header-detail">Elevation From (mm)</label>
                            <input type="text" class="form-control form-control-sm" id="elevation_from" readonly>
                        </div>
                        <div class="col-md-4">
                            <label class="header-detail">Elevation To (mm)</label>
                            <input type="text" class="form-control form-control-sm" id="elevation_to" readonly>
                        </div>
                        <div class="col-md-4">
                            <label class="header-detail">Row "X"</label>
                            <input type="text" class="form-control form-control-sm" id="row_x" readonly>
                        </div>
                        <div class="col-md-4">
                            <label class="header-detail">Row "Y"</label>
                            <input type="text" class="form-control form-control-sm" id="row_y" readonly>
                        </div>
                        <div class="col-md-4">
                            <label class="header-detail">Criticality Ranking</label>
                            <input type="text" class="form-control form-control-sm" id="criticality_ranking" readonly>
                        </div>
                        <div class="col-md-4">
                            <label class="header-detail">Criteria</label>
                            <input type="text" class="form-control form-control-sm" id="criticality_ranking_criteria"
                                readonly>
                        </div>
                        <div class="col-md-4">
                            <label class="header-detail">Inspection Priority</label>
                            <input type="text" class="form-control form-control-sm" id="inspection_priority_criteria"
                                readonly>
                        </div>
                        <div class="col-md-4">
                            <label class="header-detail">Inspection Frequency</label>
                            <input type="text" class="form-control form-control-sm" id="inspection_freq_criteria"
                                readonly>
                        </div>
                        <div class="col-md-4">
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
                        <div id="grid_inspection_history"></div>
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

<div class="modal fade" id="library_modal" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Structure Document</h5>
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
                <ul class="nav nav-tabs" id="myTab" role="tablist"></ul>
                <div class="rbi-grid-structure" id="rbi-container-POF"></div>
                <div class="rbi-grid-structure" id="rbi-container-COF"></div>
                <div class="rbi-grid-structure" id="rbi-container-MORE"></div>
                <div class="rbi-grid-structure" id="rbi-container-RCM"></div>

            </div>
        </div>
    </div>
</div>

<script>
    var _token_structure = $.cookie("_token_structure");
    var _token_dashboard = $.cookie("_token_dashboard");
    console.log("_token_structure: " + _token_structure);
    console.log("_token_dashboard: " + _token_dashboard);
    var dataArr = "";

    get_data($.cookie("_platform_id_structure"));
    get_structure_summary($.cookie("_platform_id_structure"));
    $('.loader').hide();

    // function get_data() {
    //     console.log("in");
    //     $.ajax({
    //         type: "GET",
    //         url: "https://" + url_api + "/fmi/data/v2/databases/Structure/layouts/info_api/records?_limit=12000",
    //         dataType: 'json',
    //         headers: {
    //             "Authorization": "Bearer " + _token_structure,
    //             "Content-Type": "application/json"
    //         },
    //         async: false,
    //         success: function (data) {
    //             // console.log(data);
    //             dataArr = data;
    //             create_table(dataArr.response.data);
    //             // create_table_2(dataArr.response.data);
    //             // createRows(data);
    //             $('.loader').hide();
    //         },
    //         error: function (error) {
    //             console.log(error);
    //             get_token_structure();
    //             $('.loader').hide();
    //         }
    //     });
    // }

    function get_data(id_platform) {
        console.log("in");
        console.log(id_platform);
        $.ajax({
            type: "POST",
            url: "https://" + url_api + "/fmi/data/v2/databases/Structure/layouts/info_api/_find",
            dataType: 'json',
            headers: {
                "Authorization": "Bearer " + _token_structure,
                "Content-Type": "application/json"
            },
            data: JSON.stringify({
                    "query": [
                        {
                            "id_platform": "==" + id_platform
                        }
                    ],
                    "limit" : 2000,
                }),
            // data: "{\n    \"query\": [\n        {\n            \"id_platform\": \"==" + id_platform + "\"\n        }\n    ]\n}",
            async: false,
            success: function (data) {
                // console.log(data);
                dataArr = data;
                create_table(dataArr.response.data);
            },
            error: function (error) {
                console.log(error);
                get_token_structure();
                _token_structure = $.cookie("_token_structure");
                get_data(id_platform);
                //logout();
            }
        });
    }

    function get_structure_summary(id_platform) {
        $.ajax({
            type: "GET",
            url: "https://" + url_api + "/fmi/data/v2/databases/CPOC_AIMS/layouts/platform_structure/script/get_structure_summary?script.param=" + id_platform,
            dataType: 'json',
            headers: {
                "Authorization": "Bearer " + $.cookie("_token_dashboard"),
                "Content-Type": "application/json"
            },
            async: false,
            success: function (data) {
                console.log(data.response.scriptResult);
                fetch_summary(data.response.scriptResult)
            },
            error: function (error) {
                console.log(error);
                get_token_startup();
                get_structure_summary(id_platform);
            }
        });

        // $.ajax({
        //     type: "GET",
        //     url: "https://" + url_api + "/fmi/data/v2/databases/CPOC_AIMS/layouts/structure_equipment/records?_limit=1",
        //     dataType: 'json',
        //     headers: {
        //         "Authorization": "Bearer " + $.cookie("_token_dashboard"),
        //         "Content-Type": "application/json"
        //     },
        //     async: false,
        //     success: function (data) {
        //         // console.log(data);
        //         fetch_summary(data.response.data)
        //     },
        //     error: function (error) {
        //         console.log(error);
        //         // get_token_dashboard();
        //         // get_structure_summary();
        //         logout();
        //     }
        // });

    }

    function fetch_summary(data) {
        //console.log(data);
        var dataArr = data.split("|");
        $('#p0_val').html(dataArr[6].toLocaleString());
        $('#p1_val').html(dataArr[5].toLocaleString());
        $('#p2_val').html(dataArr[4].toLocaleString());
        $('#p3_val').html(dataArr[3].toLocaleString());
        $('#p4_val').html(dataArr[2].toLocaleString());
        $('#p5_val').html(dataArr[1].toLocaleString());
        $('#p6_val').html(dataArr[0].toLocaleString());
        $('#noinspect_val').html(dataArr[6].toLocaleString());
        //var total = data[0].fieldData.P1_total + data[0].fieldData.P2_total + data[0].fieldData.P3_total + data[0].fieldData.P4_total + data[0].fieldData.P5_total + data[0].fieldData.P6_total + data[0].fieldData.no_inspect_total;
        $('#total_val').html(dataArr[7].toLocaleString());
    }

    function get_info(id_line) {
        $.ajax({
            type: "GET",
            url: "https://" + url_api + "/fmi/data/v2/databases/Structure/layouts/info_api/script/structure_api_info?script.param=" + id_line,
            dataType: 'json',
            headers: {
                "Authorization": "Bearer " + _token_structure,
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
                get_token_structure()
                _token_structure = $.cookie("_token_structure");
                get_info(id_line);
                //logout();
            }
        });
    }

    function get_library(id_tag) {
        $.ajax({
            type: "POST",
            url: "https://" + url_api + "/fmi/data/v2/databases/Structure/layouts/inspection_document/_find",
            dataType: 'json',
            headers: {
                "Authorization": "Bearer " + _token_structure,
                "Content-Type": "application/json"
            },
            data: "{\n    \"query\": [\n        {\n            \"id_tag\": \"==" + id_tag + "\"\n        }\n    ]\n}",
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
                    get_token_structure();
                    _token_structure = $.cookie("_token_structure");
                    get_library(id_line);
                }
            }
        });

    }

    function get_const(id_tag) {
        var dataFile = "";
        $.ajax({
            type: "POST",
            url: "https://" + url_api + "/fmi/data/v2/databases/Structure/layouts/design_spec_document/_find",
            dataType: 'json',
            headers: {
                "Authorization": "Bearer " + _token_structure,
                "Content-Type": "application/json"
            },
            data: JSON.stringify({
                    "query": [
                        {
                            "id_tag": "==" + id_tag
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
                    get_token_structure();
                    _token_structure = $.cookie("_token_structure");
                    call_modal_library(id_tag);
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

    function get_insp_report(id_tag) {
        var dataFile = "";
        $.ajax({
            type: "POST",
            url: "https://" + url_api + "/fmi/data/v2/databases/Structure/layouts/inspection_document/_find",
            dataType: 'json',
            headers: {
                "Authorization": "Bearer " + _token_structure,
                "Content-Type": "application/json"
            },
            data: JSON.stringify({
                    "query": [
                        {
                            "id_tag": "==" + id_tag
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
                    get_token_structure();
                    _token_structure = $.cookie("_token_structure");
                    call_modal_library(id_tag);
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

    function get_gen_doc(id_tag) {
        var dataFile = "";
        $.ajax({
            type: "POST",
            url: "https://" + url_api + "/fmi/data/v2/databases/Structure/layouts/general_document/_find",
            dataType: 'json',
            headers: {
                "Authorization": "Bearer " + _token_structure,
                "Content-Type": "application/json"
            },
            data: JSON.stringify({
                    "query": [
                        {
                            "id_tag": "==" + id_tag
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
                    get_token_structure();
                    _token_structure = $.cookie("_token_structure");
                    call_modal_library(id_tag);
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

    function call_modal_library(id_tag) {
        console.log(id_tag);
        get_const(id_tag);
        get_insp_report(id_tag);
        get_gen_doc(id_tag);
        $('#library_modal').modal('show');
    }

    function get_file(url,file_name) {
        // console.log(url);

        fetch("donwload_lib.php", {
        method: "POST",
        headers: {
          "Content-Type": "application/x-www-form-urlencoded; charset=UTF-8",
        },
        body: `url=${url}&token=${_token_structure}&file_name=${file_name}`,
        })
        .then((response) => response.text())
        .then((res) => (alert(res)));
    }

    function call_modal_info(data) {
        console.log(data)
        $('#tag_no').val(data[0].tag_no);
        $('#tag_no').tooltip('dispose').tooltip({ title: data[0].tag_no }).tooltip({ 'trigger': 'hover' })
        $('#platform_codename').val(data[0].platform_codename);
        $('#platform_codename').tooltip('dispose').tooltip({ title: data[0].platform_codename }).tooltip({ 'trigger': 'hover' })
        $('#drawing_no').val(data[0].drawing_no);
        $('#drawing_no').tooltip('dispose').tooltip({ title: data[0].drawing_no }).tooltip({ 'trigger': 'hover' })
        $('#structure_zone').val(data[0].structure_zone);
        $('#structure_zone').tooltip('dispose').tooltip({ title: data[0].structure_zone }).tooltip({ 'trigger': 'hover' })
        $('#sub_structure').val(data[0].sub_structure);
        $('#sub_structure').tooltip('dispose').tooltip({ title: data[0].sub_structure }).tooltip({ 'trigger': 'hover' })
        $('#structure_type').val(data[0].structure_type);
        $('#structure_type').tooltip('dispose').tooltip({ title: data[0].structure_type }).tooltip({ 'trigger': 'hover' })
        $('#component_type').val(data[0].component_type);
        $('#component_type').tooltip('dispose').tooltip({ title: data[0].component_type }).tooltip({ 'trigger': 'hover' })
        $('#component_type_class').val(data[0].component_type_class);
        $('#component_type_class').tooltip('dispose').tooltip({ title: data[0].component_type_class }).tooltip({ 'trigger': 'hover' })
        $('#sub_component').val(data[0].sub_component);
        $('#sub_component').tooltip('dispose').tooltip({ title: data[0].sub_component }).tooltip({ 'trigger': 'hover' })
        $('#outer_diameter').val(data[0].outer_diameter);
        $('#outer_diameter').tooltip('dispose').tooltip({ title: data[0].outer_diameter }).tooltip({ 'trigger': 'hover' })
        $('#wall_thickness').val(data[0].wall_thickness);
        $('#wall_thickness').tooltip('dispose').tooltip({ title: data[0].wall_thickness }).tooltip({ 'trigger': 'hover' })
        $('#inservice_date').val(convert_date_format(data[0].inservice_date));
        $('#inservice_date').tooltip('dispose').tooltip({ title: convert_date_format(data[0].inservice_date) }).tooltip({ 'trigger': 'hover' })
        $('#design_life').val(data[0].design_life.toFixed(2));
        $('#design_life').tooltip('dispose').tooltip({ title: data[0].design_life.toFixed(2) }).tooltip({ 'trigger': 'hover' })
        $('#elevation_from').val(data[0].elevation_from);
        $('#elevation_from').tooltip('dispose').tooltip({ title: data[0].elevation_from }).tooltip({ 'trigger': 'hover' })
        $('#elevation_to').val(data[0].elevation_to);
        $('#elevation_to').tooltip('dispose').tooltip({ title: data[0].elevation_to }).tooltip({ 'trigger': 'hover' })
        $('#row_x').val(data[0].row_x);
        $('#row_x').tooltip('dispose').tooltip({ title: data[0].row_x }).tooltip({ 'trigger': 'hover' })
        $('#row_y').val(data[0].row_y);
        $('#row_y').tooltip('dispose').tooltip({ title: data[0].row_y }).tooltip({ 'trigger': 'hover' })
        $('#criticality_ranking').val(data[0].criticality_ranking);
        $('#criticality_ranking').tooltip('dispose').tooltip({ title: data[0].criticality_ranking }).tooltip({ 'trigger': 'hover' })
        $('#criticality_ranking_criteria').val(data[0].criticality_ranking_criteria);
        $('#criticality_ranking_criteria').tooltip('dispose').tooltip({ title: data[0].criticality_ranking_criteria }).tooltip({ 'trigger': 'hover' })
        $('#inspection_priority_criteria').val(data[0].inspection_priority_criteria);
        $('#inspection_priority_criteria').tooltip('dispose').tooltip({ title: data[0].inspection_priority_criteria }).tooltip({ 'trigger': 'hover' })
        $('#inspection_freq_criteria').val(data[0].inspection_freq_criteria);
        $('#inspection_freq_criteria').tooltip('dispose').tooltip({ title: data[0].inspection_freq_criteria }).tooltip({ 'trigger': 'hover' })
        $('#risk_level').val(data[0].risk_level);
        $('#risk_level').tooltip('dispose').tooltip({ title: data[0].risk_level }).tooltip({ 'trigger': 'hover' })

        $("#info_modal").modal('show');
    }

    function create_modal_rbi_table_POF(parsedData) {
        const containerPOF = document.getElementById("rbi-container-POF");
        const rbiData = parsedData[0] || {}; 
        // const rbiDate = Object.keys(rbiData).length === 0 ? '' : moment(rbiData.rbi_date).format('DD MMM YYYY');
        // $('#rbi_date').html(rbiDate);
        // $('#rbi_date').html(rbiDate);
        containerPOF.innerHTML = "";

        const header1 = document.createElement("div");
        header1.className = "rbi-item-info-header rbi-span-40 rbi-purple border-inline-white";
        header1.textContent = "POF | PROBABILITY OF FAILURE";
        containerPOF.appendChild(header1);

        const header2 = document.createElement("div");
        header2.className = "rbi-item-info-header rbi-span-7 rbi-purple border-inline-white ";
        header2.textContent = "RISK";
        containerPOF.appendChild(header2);

        const header3 = document.createElement("div");
        header3.className = "rbi-item-info-header rbi-span-15 rbi-purple border-inline-white";
        header3.textContent = "Probability of Failure Level";
        containerPOF.appendChild(header3);

        const header4 = document.createElement("div");
        header4.className = "rbi-item-info-header rbi-span-18 rbi-purple border-inline-white";
        header4.textContent = "Comment";
        containerPOF.appendChild(header4);
        const totalPoF = rbiData[`PoF_total`] ?? "";

        const riskList = ["A","B","C","D","E","F"]
        const riskContextList = ["Fatique Analysis","Accidental Damage","Anomalies","Probability of corrosion","Confidence in Assessment","Utillzation Factor"]
        for (let i = 1; i <=riskList.length ; i++) {
            
            const prop = rbiData[`PoF_risk_value_${riskList[i-1].toLowerCase()}`] ?? "";
            const value = rbiData[`PoF_value_${riskList[i-1].toLowerCase()}`] ?? "";
            const comment = rbiData[`PoF_note_${riskList[i-1].toLowerCase()}`] ?? "";

            const riskLevelDiv = document.createElement("div");
            riskLevelDiv.className = "rbi-item-info-context rbi-span-1 text-to-center rbi-extra-lightgray";
            riskLevelDiv.textContent = riskList[i-1];

            const riskContextDiv = document.createElement("div");
            riskContextDiv.className = "rbi-item-info-context rbi-span-6 rbi-extra-lightgray";
            riskContextDiv.textContent = riskContextList[i-1];

            const propDiv = document.createElement("div");
            propDiv.className = "rbi-item-info-context rbi-span-13";
            propDiv.textContent = prop;

            const valueDiv = document.createElement("div");
            valueDiv.className = "rbi-item-info-context rbi-span-2 text-to-center";
            valueDiv.textContent = value;

            const commentDiv = document.createElement("div");
            commentDiv.className = "rbi-item-info-context rbi-span-18";
            commentDiv.textContent = comment;

            containerPOF.appendChild(riskLevelDiv);
            containerPOF.appendChild(riskContextDiv);
            containerPOF.appendChild(propDiv);
            containerPOF.appendChild(valueDiv);
            containerPOF.appendChild(commentDiv);
        }
        const totalTextDiv = document.createElement("div");
        totalTextDiv.className = "rbi-item-info-context rbi-span-20 text-to-center rbi-extra-lightgray";
        totalTextDiv.textContent = "Total";

        const totalValueDiv = document.createElement("div");
        totalValueDiv.className = "rbi-item-info-context rbi-span-2 text-to-center";
        totalValueDiv.textContent = totalPoF;


        const calDiv = document.createElement("div");
        calDiv.className = "rbi-item-info-context rbi-span-18 text-to-center rbi-extra-lightgray";
        calDiv.textContent = "X = A + B + C + D + E + F";

        containerPOF.appendChild(totalTextDiv);
        containerPOF.appendChild(totalValueDiv);
        containerPOF.appendChild(calDiv);

    }
    function create_modal_rbi_table_RCM(parsedData) {

        const containerRCM = document.getElementById("rbi-container-RCM");
        const rbiData = parsedData[0] || {}; 
        const comment = rbiData["recommendation"] ?? "";

        containerRCM.innerHTML = "";

        const header1 = document.createElement("div");
        header1.className = "rbi-item-info-header rbi-span-10 rbi-purple border-inline-white";
        header1.textContent = "RECOMMENDATION";
        containerRCM.appendChild(header1);

        const contextDiv = document.createElement("div");
        contextDiv.className = "rbi-item-info-context rbi-span-10 border-inline-white";
        contextDiv.textContent = comment;
        containerRCM.appendChild(contextDiv);

    }

    function create_modal_rbi_table_COF(parsedData) {
        const containerCOF = document.getElementById("rbi-container-COF");
        const cof_risk_label = ["G", "H", "I", "J", "K"];
        const cof_risk_detail = ["Consequential", "Risk of Life", "Risk of Environment", "Risk of Production", "Cost of Repair"];

        const rbiData = parsedData[0] || {};
        const total = rbiData[`CoF_total`];
        containerCOF.innerHTML = "";

        const header1 = document.createElement("div");
        header1.className = "rbi-item-info-header rbi-span-40 rbi-purple border-inline-white";
        header1.textContent = "COF | CONSEQUENCE OF FAILURE";
        containerCOF.appendChild(header1);

        const header2 = document.createElement("div");
        header2.className = "rbi-item-info-header rbi-span-7 rbi-purple border-inline-white";
        header2.textContent = "Risk";
        containerCOF.appendChild(header2);

        const header3 = document.createElement("div");
        header3.className = "rbi-item-info-header rbi-span-15 rbi-purple border-inline-white";
        header3.textContent = "Consequence of Failure Level";
        containerCOF.appendChild(header3);

        const header4 = document.createElement("div");
        header4.className = "rbi-item-info-header rbi-span-18 rbi-purple border-inline-white";
        header4.textContent = "Comment";
        containerCOF.appendChild(header4);

        for (let i = 0; i <= 4; i++) {
            const risk_label = cof_risk_label[i];
            const risk_detail = cof_risk_detail[i];
            const risk_value = rbiData[`CoF_risk_value_${risk_label.toLowerCase()}`];
            const consequential_value = rbiData[`CoF_value_${risk_label.toLowerCase()}`];
            const comment = rbiData[`CoF_note_${risk_label.toLowerCase()}`];

            const risk_label_div = document.createElement("div");
            risk_label_div.className = "rbi-item-info-context rbi-span-1 rbi-extra-lightgray text-to-center";
            risk_label_div.textContent = risk_label;

            const risk_detail_div = document.createElement("div");
            risk_detail_div.className = "rbi-item-info-context rbi-span-6 rbi-extra-lightgray";
            risk_detail_div.textContent = risk_detail;

            const risk_value_div = document.createElement("div");
            risk_value_div.className = "rbi-item-info-context rbi-span-13";
            risk_value_div.textContent = risk_value;

            const consequential_value_div = document.createElement("div");
            consequential_value_div.className = "rbi-item-info-context rbi-span-2 text-to-center";
            consequential_value_div.textContent = consequential_value;

            const comment_div = document.createElement("div");
            comment_div.className = "rbi-item-info-context rbi-span-18";
            comment_div.textContent = comment;

            containerCOF.appendChild(risk_label_div);
            containerCOF.appendChild(risk_detail_div);
            containerCOF.appendChild(risk_value_div);
            containerCOF.appendChild(consequential_value_div);
            containerCOF.appendChild(comment_div);
        }

        const totalText = document.createElement("div");
        totalText.className = "rbi-item-info-context rbi-span-20 rbi-extra-lightgray text-to-center";
        totalText.textContent = "Total";
        containerCOF.appendChild(totalText);

        const total_div = document.createElement("div");
        total_div.className = "rbi-item-info-context rbi-span-2 text-to-center";
        total_div.textContent = total;
        containerCOF.appendChild(total_div);

        const formulaText = document.createElement("div");
        formulaText.className = "rbi-item-info-context rbi-span-18 rbi-extra-lightgray text-to-center";
        formulaText.textContent = "Y = G + H + I + J + K";
        containerCOF.appendChild(formulaText);
    }

    function create_modal_rbi_table_more(parsedData) {
        const containerMore = document.getElementById("rbi-container-MORE");
        const title = ["System Factor S", "Criticality Ranking", "Criticality Ranking Criteria", "Inspection Priority", "Inspection Frequency", "Risk Level"];
        const value = ["system_factor_S","criticality_ranking","criticality_ranking_criteria","inspection_priority_criteria","inspection_freq_criteria","risk_level"]
        const rbiData = parsedData[0] || {};
        containerMore.innerHTML = "";

        for (let i = 0; i < title.length; i++) {
            const title_div = document.createElement("div");
            title_div.className = "rbi-item-info-header rbi-span-5 rbi-purple border-inline-white text-to-center";
            title_div.textContent = title[i];
            containerMore.appendChild(title_div);
        }

        for (let i = 0; i < title.length; i++) {
            const detail_div = document.createElement("div");
            detail_div.className = "rbi-item-info-context rbi-span-5 text-to-center";
            detail_div.textContent = rbiData[value[i]];
            containerMore.appendChild(detail_div);
        }
    }

    function call_modal_rbi(o) {
        $.ajax({
            type: "GET",
            url: "https://" + url_api + "/fmi/data/v2/databases/Structure/layouts/rbi_data/script/rbi_latest_by_id_tag?script.param=" + o.data.fieldData.id_tag,
            dataType: 'json',
            headers: {
                "Authorization": "Bearer " + _token_structure,
                "Content-Type": "application/json"
            },
            async: false,
            success: function (data) {
                create_modal_rbi_table_COF(JSON.parse(data.response.scriptResult));
                create_modal_rbi_table_POF(JSON.parse(data.response.scriptResult));
                create_modal_rbi_table_RCM(JSON.parse(data.response.scriptResult));
                create_modal_rbi_table_more(JSON.parse(data.response.scriptResult));
            },
            error: function (error) {
                console.log(error);
                console.log(error.responseJSON.messages[0].code);
                if(error.responseJSON.messages[0].code == 401) {
                    // no record match
                } else {
                    get_token_structure();
                    _token_structure = $.cookie("_token_structure");
                    call_modal_rbi(o);
                }
            }
        });
        
        $('#rbi_modal').modal('show');
    }
    function get_inspection_history(id_tag,tag_no) {
        let history_list = '';
        $.ajax({
            type: "POST",
            url: "https://" + url_api + "/fmi/data/v2/databases/Structure/layouts/report_table/_find",
            dataType: 'json',
            headers: {
                "Authorization": "Bearer " + _token_structure,
                "Content-Type": "application/json"
            },
            data: JSON.stringify({
                    "query": [
                        {
                            "id_tag": "==" + id_tag
                        }
                    ]
                }),
            async: false,
            success: function (data) {
                console.log('report_data:', data.response.data);
                history_list = data.response.data;
            },
            error: function (error) {
                console.log(error);
                console.log(error.responseJSON.messages[0].code);
                if(error.responseJSON.messages[0].code == 401) {
                    // no record match
                } else {
                    get_token_structure();
                    _token_structure = $.cookie("_token_structure");
                    get_inspection_history(id_tag,tag_no);
                }
            }
        });

        $('#history_modal').modal('show');
        $('#history_tag_no').html(tag_no);

        const dataGrid = $("#grid_inspection_history").dxDataGrid({
            dataSource: history_list,
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
                    dataField: "fieldData.inspection_date",
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
                    caption: "NDE Status",
                    headerCellTemplate: function (container) {
                        container.append($("<div>NDE<br>Status</div>"));
                    },
                    dataField: "fieldData.status_nde",
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
                    caption: "File Download",
                    width: "150px",
                    headerCellTemplate: function (container) {
                        container.append($("<div>File Download</div>"));
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
                        url: "https://" + url_api + "/fmi/data/v2/databases/Structure/layouts/SAP_notify_header_export/_find",
                        dataType: 'json',
                        headers: {
                            "Authorization": "Bearer " + _token_structure,
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
                                get_token_structure();
                                _token_structure = $.cookie("_token_structure");
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
                                caption: "File",
                                width: "150px",
                                headerCellTemplate: function (container) {
                                    container.append($("<div>File</div>"));
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
            url: "https://" + url_api + "/fmi/data/v2/databases/Structure/layouts/inspection_document/_find",
            dataType: 'json',
            headers: {
                "Authorization": "Bearer " + _token_structure,
                "Content-Type": "application/json"
            },
            data: JSON.stringify({
                    "query": [
                        {
                            "id_tag": "==" + id_tag
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
                    get_token_structure();
                    _token_structure = $.cookie("_token_structure");
                    call_modal_library(id_tag);
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

    function create_table(data) {
        console.log(data)
        const dataGrid = $("#dataGid").dxDataGrid({
            dataSource: data,
            keyExpr: "fieldData.id_tag",
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

            columns: [
                {
                    dataField: "fieldData.id_tag",
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
                                get_inspection_history(options.value, options.data.fieldData.tag_no);
                            }).appendTo(container);
                    },
                    fixed: true,
                    fixedPosition: "left",
                    allowFiltering: false,
                    allowSorting: false,
                    allowResizing: false
                },
                {
                    caption: "Platform",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Platform</div>"));
                    },
                    dataField: "fieldData.platform_codename",
                    fixed: true,
                    fixedPosition: "left"
                },
                {
                    caption: "Tag Number",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Tag Number</div>"));
                    },
                    dataField: "fieldData.tag_no",
                    fixed: true,
                    fixedPosition: "left"
                },
                {
                    caption: "Description",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Description</div>"));
                    },
                    dataField: "fieldData.description"
                },
                {
                    caption: "Structure Type",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Structure Type</div>"));
                    },
                    dataField: "fieldData.structure_type"
                },
                {
                    caption: "Risk Ranking",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Risk Ranking</div>"));
                    },
                    dataField: "fieldData.risk_level"
                },
                {
                    caption: "Integrity Status",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Integrity Status</div>"));
                    },
                    dataField: "fieldData.integrity_status"
                },
                {
                    caption: "Visual Inspection",
                    columns: [{
                        caption: "Last",
                        headerCellTemplate: function (container) {
                            container.append($("<div>Last</div>"));
                        },
                        dataField: "fieldData.VT_last_insp_date",
                        calculateCellValue: function (value) {
                            return get_year(value.fieldData.VT_last_insp_date)
                        }
                    },
                    {
                        caption: "Interval (yrs)",
                        alignment: "center",
                        headerCellTemplate: function (container) {
                            container.append($("<div>Interval<br>(yrs)</div>"));
                        },
                        dataField: "fieldData.VT_insp_interval",
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
                        dataField: "fieldData.VT_next_insp_date"
                    },
                    {
                        caption: "Status",
                        headerCellTemplate: function (container) {
                            container.append($("<div>Status</div>"));
                        },
                        dataField: "fieldData.VT_status"
                    }
                    ]
                },
                {
                    caption: "NDE Inspection",
                    columns: [{
                        caption: "Last",
                        headerCellTemplate: function (container) {
                            container.append($("<div>Last</div>"));
                        },
                        dataField: "fieldData.NDE_last_insp_date",
                        calculateCellValue: function (value) {
                            return get_year(value.fieldData.NDE_last_insp_date)
                        }
                    },
                    {
                        caption: "Interval (yrs)",
                        alignment: "center",
                        headerCellTemplate: function (container) {
                            container.append($("<div>Interval<br>(yrs)</div>"));
                        },
                        dataField: "fieldData.NDE_insp_interval",
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
                        dataField: "fieldData.NDE_next_insp_date"
                    },
                    {
                        caption: "Status",
                        headerCellTemplate: function (container) {
                            container.append($("<div>Status</div>"));
                        },
                        dataField: "fieldData.NDE_status"
                    }
                    ]
                },
                {
                    caption: "Due Visual Anomaly",
                    columns: [
                        {
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
                    columns: [
                        {
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
                        saveAs(new Blob([buffer], { type: 'application/octet-stream' }), 'Structure_Infomation.xlsx');
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
                if (e.rowType === "data" && e.column.dataField === "fieldData.risk_level") {
                    e.cellElement.css("background-color", e.data.fieldData.risk_level == "LOW" ? "#66FF33" : e.data.fieldData.risk_level == "ALARP" ? "#FFCC00" : e.data.fieldData.risk_level == "HIGH" ? "#FF0000" : "");
                }
                if (e.rowType === "data" && e.column.dataField === "fieldData.anomaly_priority") {
                    e.cellElement.css("background-color", e.data.fieldData.anomaly_priority == "LOW" ? "#66FF33" : e.data.fieldData.anomaly_priority == "ALARP-1" ? "#FFCC00" : e.data.fieldData.anomaly_priority == "ALARP-2" ? "#FFCC00" : e.data.fieldData.anomaly_priority == "ALARP-3" ? "#FFCC00" : e.data.fieldData.anomaly_priority == "HIGH" ? "#FF0000" : "");
                }
                if (e.rowType === "data" && e.column.dataField === "fieldData.integrity_status") {
                    e.cellElement.css("background-color", e.data.fieldData.integrity_status == "P1" ? "#FF0000" : e.data.fieldData.integrity_status == "P2" ? "#F69546" : e.data.fieldData.integrity_status == "P3" ? "#FFCC00" : e.data.fieldData.integrity_status == "P4" ? "#FFFF00" : e.data.fieldData.integrity_status == "P5" ? "#66FF33" : e.data.fieldData.integrity_status == "P6" ? "#43a047" : "");
                }
                if (e.rowType === "data" && e.column.dataField === "fieldData.VT_status") {
                    e.cellElement.css("background-color", e.data.fieldData.VT_status == "Not due" ? "#66FF33" : e.data.fieldData.VT_status == "On due" ? "#FFCC00" : e.data.fieldData.VT_status == "Overdue" ? "#FF0000" : "");
                }
                if (e.rowType === "data" && e.column.dataField === "fieldData.NDE_status") {
                    e.cellElement.css("background-color", e.data.fieldData.NDE_status == "Not due" ? "#66FF33" : e.data.fieldData.NDE_status == "On due" ? "#FFCC00" : e.data.fieldData.NDE_status == "Overdue" ? "#FF0000" : "");
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
                if (e.rowType === "data" && (e.column.dataField === "fieldData.risk_level" || e.column.dataField === "fieldData.integrity_status" || e.column.dataField === "fieldData.VT_last_insp_date" || e.column.dataField === "fieldData.VT_next_insp_date" || e.column.dataField === "fieldData.OSI_VT_status" || e.column.dataField === "fieldData.NDE_last_insp_date" || e.column.dataField === "fieldData.NDE_next_insp_date" || e.column.dataField === "fieldData.OSI_NDE_status" || e.column.dataField === "fieldData.anomaly_vt_temporary_due" || e.column.dataField === "fieldData.anomaly_vt_permanent_due" || e.column.dataField === "fieldData.anomaly_Thk_temporary_due" || e.column.dataField === "fieldData.anomaly_Thk_permanent_due" || e.column.dataField === "fieldData.anomaly_vt_temporary" || e.column.dataField === "fieldData.anomaly_vt_permanent" || e.column.dataField === "fieldData.anomaly_Thk_temporary" || e.column.dataField === "fieldData.anomaly_Thk_permanent")) {
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
    }

    function get_year(value) {
        if (value === null || value === undefined || value === "") {
            return ""
        } else {
            var parts = value.split('/');
            return parts[2]
        }
    }

</script>