<div class="jumbotron jumbotron-header rounded-0 bg-secondary text-white">
    <div class="row">
        <div class="col-12">
            <h1 class="display-4">LIFTING CRANE</h1>
        </div>
        <!-- สถิติ -->
        <!-- <div id="stat" class="col-12 mt-3">
            <div id="accepted_box" class="box bg-accepted">
                <div class="row text-center">
                    <div class="col-12">
                        <span class="text-p-number" id="accepted_val"></span>
                    </div>
                    <div class="col-12 text-p">
                        ACCEPTED
                    </div>
                </div>
            </div>
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
            <div class="box bg-quarantine">
                <div class="row text-center">
                    <div class="col-12">
                        <span class="text-p-number" id="quarantine_val"></span>
                    </div>
                    <div class="col-12 text-p">
                        QUARANTINE
                    </div>
                </div>
            </div>
            <div class="box bg-maintenance">
                <div class="row text-center">
                    <div class="col-12">
                        <span class="text-p-number" id="maintenance_val"></span>
                    </div>
                    <div class="col-12 text-p">
                        MAINTENANCE
                    </div>
                </div>
            </div>
            <div class="box bg-overdue">
                <div class="row text-center">
                    <div class="col-12">
                        <span class="text-p-number" id="overdue_val"></span>
                    </div>
                    <div class="col-12 text-p">
                        OVERDUE
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
        </div> -->
    </div>
</div>
<div class="wrapper-form shadow">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 mb-4">
            <div class="card border-1">
                <div class="card-body" style="padding: 0;">
                    <div class="pie-chart-dashboard" id="crane-chart"></div>
                </div>
            </div>
        </div>
    </div>
    <div id="dataGid"></div>
</div>

<!-- Modal -->
<div class="modal fade" id="info_modal" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Lifting Crane Information</h5>
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
                            <input type="text" class="form-control form-control-sm" id="platform" readonly>
                        </div>
                        <div class="col-md-4">
                            <label class="header-detail">Category</label>
                            <input type="text" class="form-control form-control-sm" id="category" readonly>
                        </div>
                        <div class="col-md-4">
                            <label class="header-detail">Serial Number</label>
                            <input type="text" class="form-control form-control-sm" id="serial_no" readonly>
                        </div>
                        <div class="col-md-4">
                            <label class="header-detail">Equipment Type</label>
                            <input type="text" class="form-control form-control-sm" id="equipment_type" readonly>
                        </div>
                        <div class="col-md-4">
                            <label class="header-detail">Model</label>
                            <input type="text" class="form-control form-control-sm" id="model" readonly>
                        </div>
                        <div class="col-md-4">
                            <label class="header-detail">Menufactured</label>
                            <input type="text" class="form-control form-control-sm" id="menufactured" readonly>
                        </div>
                        <div class="col-md-4">
                            <label class="header-detail">Standard Code</label>
                            <input type="text" class="form-control form-control-sm" id="standard_code" readonly>
                        </div>
                        <div class="col-md-4">
                            <label class="header-detail">SWL main (t)</label>
                            <input type="text" class="form-control form-control-sm" id="swl_main" readonly>
                        </div>
                        <div class="col-md-4">
                            <label class="header-detail">SWL aux (t)</label>
                            <input type="text" class="form-control form-control-sm" id="swl_aux" readonly>
                        </div>
                        <div class="col-md-4">
                            <label class="header-detail">Description</label>
                            <input type="text" class="form-control form-control-sm" id="description" readonly>
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
                <h5 class="modal-title" id="staticBackdropLabel">Lifting Document</h5>
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

<div class="modal fade" id="anom_item_modal" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title anom-name" id="staticBackdropLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="datagrid-anom-item"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<style>
    .modal-xl {
        max-width: 90% !important;
    }
</style>

<div class="modal fade" id="inspection_summary" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Inspection Summary of Lifting Crane</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div id="grid_inspection_summary"></div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script>
    var _token_lifting = $.cookie("_token_lifting");
    var _token_dashboard = $.cookie("_token_dashboard");
    console.log("_token_lifting: " + _token_lifting);
    console.log("_token_dashboard: " + _token_dashboard);
    var dataGrid;
    var dataArr = "";
    var filterStatus = "";
    get_lifting_crane_summary();
    get_data();
    get_inspection_summary();
    get_lifting_crane_chart();

    $('.loader').hide();

    function get_data() {
        console.log("in");
        $.ajax({
            type: "GET",
            url: "https://" + url_api + "/fmi/data/v2/databases/Lifting/layouts/info_cane_api/records?_limit=50",
            dataType: 'json',
            headers: {
                "Authorization": "Bearer " + _token_lifting,
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
                get_token_lifting();
                _token_lifting = $.cookie("_token_lifting");
                get_data();
                //logout();
            }
        });
    }

    function get_inspection_summary() {
        console.log("in");
        $.ajax({
            type: "GET",
            url: "https://" + url_api + "/fmi/data/v2/databases/Lifting/layouts/lifting_crane_inspection_summary/records?_limit=200",
            dataType: 'json',
            headers: {
                "Authorization": "Bearer " + _token_lifting,
                "Content-Type": "application/json"
            },
            async: false,
            success: function (data) {
                console.log(data);
                dataSummary = data.response.data;
                
                // create_table(dataArr.response.data);
                // createRows(data);
            },
            error: function (error) {
                console.log(error);
                get_token_lifting();
                _token_lifting = $.cookie("_token_lifting");
                get_inspection_summary();
                //logout();
            }
        });
    }

    function call_modal_inspection_summary(){ 
        $('#inspection_summary').modal('show');
        const dataGrid = $("#grid_inspection_summary").dxDataGrid({
                    dataSource: dataSummary,
                    keyExpr: "fieldData.id_data",
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
                    wordWrapEnabled: true,

                    columns: [
                        {
                            caption: "Tag Number",
                            headerCellTemplate: function (container) {
                                container.append($("<div>Tag Number</div>"));
                            },
                            dataField: "fieldData.tag_no",
                            fixed: true,
                            fixedPosition: "left",
                            width: 100,
                            alignment: "center"
                        },
                        {
                            caption: "Platform",
                            headerCellTemplate: function (container) {
                                container.append($("<div>Platform</div>"));
                            },
                            dataField: "fieldData.platform_codename",
                            width: 110,
                            alignment: "center"
                        },
                        {
                            caption: "Inspection Date",
                            headerCellTemplate: function (container) {
                                container.append($("<div>Inspection Date</div>"));
                            },
                            dataField: "fieldData.inspection_date",
                            dataType: "date",
                            format: "dd-MMM-yyyy",
                            width: 120,
                            alignment: "center"
                        },
                        {
                            caption: "Inspection Finding",
                            headerCellTemplate: function (container) {
                                container.append($("<div>Inspection Finding</div>"));
                            },
                            dataField: "fieldData.inspection_finding",
                            width: 330
                        },
                        {
                            caption: "Recommendation",
                            headerCellTemplate: function (container) {
                                container.append($("<div>Recommendation</div>"));
                            },
                            dataField: "fieldData.recommendation",
                            width: 330
                        },
                        {
                            caption: "Report Number",
                            headerCellTemplate: function (container) {
                                container.append($("<div>Report Number</div>"));
                            },
                            dataField: "fieldData.report_number",
                            width: 130,
                            alignment: "center"
                        },
                        {
                            caption: "Rectification By",
                            headerCellTemplate: function (container) {
                                container.append($("<div>Rectification By</div>"));
                            },
                            dataField: "fieldData.rectification_by",
                            width: 130,
                            alignment: "center"
                        },                   
                        {
                            caption: "Rectification Status",
                            headerCellTemplate: function (container) {
                                container.append($("<div>Rectification Status</div>"));
                            },
                            dataField: "fieldData.rectification_status",
                            width: 130,
                            alignment: "center"
                        },
                        {
                            caption: "Remark",
                            headerCellTemplate: function (container) {
                                container.append($("<div>Remark</div>"));
                            },
                            dataField: "fieldData.remark"
                        },
                    ],
                    repaintChangesOnly: true,
                    onCellPrepared: function (e) {
                        //Change background color
                        // if (e.rowType === "data" && e.column.dataField === "fieldData.color_code") {
                        //     e.cellElement.css("background-color", e.data.fieldData.color_code == "Red" ? "#FF0000" : e.data.fieldData.color_code == "Orange" ? "#FF481C" : e.data.fieldData.color_code == "Purple" ? "#9733FF" : e.data.fieldData.color_code == "Yellow" ? "#FFFF00" : e.data.fieldData.color_code == "Pink" ? "#FF97FF" : e.data.fieldData.color_code == "White" ? "#FFFFFF" : e.data.fieldData.color_code == "Blue" ? "#00AFEF" : "");
                        // }
                        if (e.rowType === "data" && e.column.dataField === "fieldData.rectification_status") {
                            e.cellElement.css("background-color", e.data.fieldData.rectification_status == "Completed" ? "#66FF33" : e.data.fieldData.rectification_status == "Pending" ? "#FF0000" : "");
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

    function get_lifting_crane_summary() {
        $.ajax({
            type: "GET",
            url: "https://" + url_api + "/fmi/data/v2/databases/CPOC_AIMS/layouts/lifting_equipment/records?_limit=1",
            dataType: 'json',
            headers: {
                "Authorization": "Bearer " + $.cookie("_token_dashboard"),
                "Content-Type": "application/json"
            },
            async: false,
            success: function (data) {
                console.log(data);
                accepted_color_code = data.response.data[0].fieldData.accepted_color;
                fetch_summary(data.response.data);
                // $('#accepted_box').css("background-color", "#66FF33");
            },
            error: function (error) {
                console.log(error);
                get_token_startup();
                get_lifting_crane_summary();
                //logout();
            }
        });
    }

    function fetch_summary(data) {
        console.log(data);
        $('#accepted_val').html(data[0].fieldData.accepted_crane.toLocaleString());
        $('#rejected_val').html(data[0].fieldData.rejected_crane.toLocaleString());
        $('#quarantine_val').html(data[0].fieldData.quarantine_crane.toLocaleString());
        $('#maintenance_val').html(data[0].fieldData.maintenance_crane.toLocaleString());
        $('#overdue_val').html(data[0].fieldData.overdue_crane.toLocaleString());
        $('#noinspect_val').html(data[0].fieldData.no_inspect_crane.toLocaleString());
        $('#total_val').html(data[0].fieldData.total_status_crane.toLocaleString());
    }

    function get_info(data) {
        console.log(data);

        $('#tag_no').val(data.tag_no);
        $('#tag_no').tooltip('dispose').tooltip({ title: data.tag_no }).tooltip({ 'trigger': 'hover' });

        $('#platform').val(data.platform_codename);
        $('#platform').tooltip('dispose').tooltip({ title: data.platform_codename }).tooltip({ 'trigger': 'hover' });

        $('#category').val(data.lifting_category);
        $('#category').tooltip('dispose').tooltip({ title: data.lifting_category }).tooltip({ 'trigger': 'hover' });

        $('#serial_no').val(data.serial_no);
        $('#serial_no').tooltip('dispose').tooltip({ title: data.serial_no }).tooltip({ 'trigger': 'hover' });
        
        $('#equipment_type').val(data.equipment_type);
        $('#equipment_type').tooltip('dispose').tooltip({ title: data.equipment_type }).tooltip({ 'trigger': 'hover' });

        $('#model').val(data.model);
        $('#model').tooltip('dispose').tooltip({ title: data.model }).tooltip({ 'trigger': 'hover' });

        $('#menufactured').val(data.manufactured);
        $('#menufactured').tooltip('dispose').tooltip({ title: data.manufactured }).tooltip({ 'trigger': 'hover' });

        $('#standard_code').val(data.standard_code);
        $('#standard_code').tooltip('dispose').tooltip({ title: data.standard_code }).tooltip({ 'trigger': 'hover' });

        $('#swl_aux').val(data.SWL_aux_t);
        $('#swl_aux').tooltip('dispose').tooltip({ title: data.SWL_aux_t }).tooltip({ 'trigger': 'hover' });

        $('#swl_main').val(data.SWL_main_t);
        $('#swl_main').tooltip('dispose').tooltip({ title: data.SWL_main_t }).tooltip({ 'trigger': 'hover' });

        $('#description').val(data.description);
        $('#description').tooltip('dispose').tooltip({ title: data.description }).tooltip({ 'trigger': 'hover' });

        $("#info_modal").modal('show');

    }

    function get_library(id_tag) {
        $.ajax({
            type: "POST",
            url: "https://" + url_api + "/fmi/data/v2/databases/Lifting/layouts/lifting_crane_inspection_document/_find",
            dataType: 'json',
            headers: {
                "Authorization": "Bearer " + _token_lifting,
                "Content-Type": "application/json"
            },
            data: "{\n    \"query\": [\n        {\n            \"id_tag\": \"==" + id_tag + "\"\n        }\n    ]\n}",
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
                    get_token_lifting();
                    _token_lifting = $.cookie("_token_lifting");
                    get_library(id_tag);
                }
            }
        });

    }

    function call_modal_library(id_tag) {
        console.log(id_tag);
        get_const(id_tag);
        get_insp_report(id_tag);
        get_gen_doc(id_tag);
        $('#library_modal').modal('show');
    }

    function get_const(id_tag) {
        var dataFile = "";
        $.ajax({
            type: "POST",
            url: "https://" + url_api + "/fmi/data/v2/databases/Lifting/layouts/lifting_crane_design_spec_document/_find",
            dataType: 'json',
            headers: {
                "Authorization": "Bearer " + _token_lifting,
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
                    get_token_lifting();
                    _token_lifting = $.cookie("_token_lifting");
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
            url: "https://" + url_api + "/fmi/data/v2/databases/Lifting/layouts/lifting_crane_inspection_document/_find",
            dataType: 'json',
            headers: {
                "Authorization": "Bearer " + _token_lifting,
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
                    get_token_lifting();
                    _token_lifting = $.cookie("_token_lifting");
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
            url: "https://" + url_api + "/fmi/data/v2/databases/Lifting/layouts/lifting_crane_general_document/_find",
            dataType: 'json',
            headers: {
                "Authorization": "Bearer " + _token_lifting,
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
                    get_token_lifting();
                    _token_lifting = $.cookie("_token_lifting");
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

    function get_file(url,file_name) {
        // console.log(url);

        fetch("donwload_lib.php", {
        method: "POST",
        headers: {
          "Content-Type": "application/x-www-form-urlencoded; charset=UTF-8",
        },
        body: `url=${url}&token=${_token_lifting}&file_name=${file_name}`,
        })
        .then((response) => response.text())
        .then((res) => (alert(res)));
    }

    function create_table(data) {
        dataGrid = $("#dataGid").dxDataGrid({
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
                    width: "120",
                    allowEditing: false,
                    alignment: "center",
                    cellTemplate: function (container, options) {
                        $('<button type="button" title="Data"></button>').addClass('btn btn-sm fas fa-list-ul')
                            .on('dxclick', function (e) {
                                // console.log(options.value)
                                get_info(options.data.fieldData);
                            }).appendTo(container);
                        $('<button type="button" title="Data"></button>').addClass('btn btn-sm fas fa-file-medical')
                            .on('dxclick', function (e) {
                                get_anom_item(options.data.fieldData);
                            }).appendTo(container);
                        $('<button type="button" title="Library"></button>').addClass('btn btn-sm fas fa-book')
                            .on('dxclick', function (e) {
                                console.log(options.value)
                                call_modal_library(options.value);
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
                    caption: "Tag Number",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Tag Number</div>"));
                    },
                    dataField: "fieldData.tag_no",
                    fixed: true,
                    fixedPosition: "left"
                },
                {
                    caption: "Equipment Type",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Equipment Type</div>"));
                    },
                    dataField: "fieldData.equipment_type"
                },
                {
                    caption: "Model",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Model</div>"));
                    },
                    dataField: "fieldData.model"
                },
                {
                    caption: "Manufacturer",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Manufacturer</div>"));
                    },
                    dataField: "fieldData.manufactured"
                },
                {
                    caption: "Inspection Date",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Inspection Date</div>"));
                    },
                    dataField: "fieldData.last_insp_date",
                    dataType: "date",
                    format: "dd-MMM-yyyy"
                },
                {
                    caption: "Expiration Date",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Expiration Date</div>"));
                    },
                    dataField: "fieldData.expiry_date",
                    dataType: "date",
                    format: "dd-MMM-yyyy"
                },
                {
                    caption: "Integrity Status",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Integrity Status</div>"));
                    },
                    dataField: "fieldData.integrity_status"
                },
            ],
            repaintChangesOnly: true,
            onCellPrepared: function (e) {
                //Change background color
                if (e.rowType === "data" && e.column.dataField === "fieldData.color_code") {
                    e.cellElement.css("background-color", e.data.fieldData.color_code == "Red" ? "#FF0000" : e.data.fieldData.color_code == "Orange" ? "#FF481C" : e.data.fieldData.color_code == "Purple" ? "#9733FF" : e.data.fieldData.color_code == "Yellow" ? "#FFFF00" : e.data.fieldData.color_code == "Pink" ? "#FF97FF" : e.data.fieldData.color_code == "White" ? "#FFFFFF" : e.data.fieldData.color_code == "Blue" ? "#00AFEF" : "");
                }
                // if (e.rowType === "data" && e.column.dataField === "fieldData.lifting_status") {
                //     e.cellElement.css("background-color", e.data.fieldData.lifting_status == "Accepted" ? "#66FF33" : e.data.fieldData.lifting_status == "Maintenance" ? "#FFFFFF" : e.data.fieldData.lifting_status == "Overdue" ? "#B3B3B3" : e.data.fieldData.lifting_status == "Rejected" ? "#FF0000" : e.data.fieldData.lifting_status == "Quarantine" ? "#00AFEF" : "");
                // }
                if (e.rowType === "data" && e.column.dataField === "fieldData.integrity_status") {
                    e.cellElement.css("background-color", e.data.fieldData.integrity_status == "Green" ? "#66FF33" : e.data.fieldData.integrity_status == "Yellow" ? "#FFFF00" : e.data.fieldData.integrity_status == "Red" ? "#FF0000" : "");
                }

                //Set alignment
                if (e.rowType == "header") {
                    e.cellElement.css("text-align", "center");
                    e.cellElement.css("vertical-align", "middle");
                }
                if (e.rowType === "data" && (e.column.dataField === "fieldData.integrity_status" || e.column.dataField === "fieldData.color_code" || e.column.dataField === "fieldData.expiry_date" || e.column.dataField === "fieldData.last_insp_date" )) {
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

        // $('.dx-toolbar-after').prepend('<button type="button" class="btn btn-outline-dark" onclick="call_modal_inspection_summary()" style="line-height: 1.3; border-color: #ddd;">SUMMARY</button>');

    };

    function get_anom_item(e) {
        console.log(e);
        const id_tag = e.id_tag;
        $.ajax({
            type: "GET",
            url: "https://" + url_api + "/fmi/data/v2/databases/Lifting/layouts/info_crane/script/api_crane_anomaly?script.param=" + id_tag,
            dataType: 'json',
            headers: {
                "Authorization": "Bearer " + _token_lifting,
                "Content-Type": "application/json"
            },
            async: false,
            success: function (data) {
                console.log(data);
                const dt = JSON.parse(data.response.scriptResult);
                console.log(dt);
                $('#anom_item_modal').modal('show');
                $('.anom-name').html(e.platform_codename + " | " + e.tag_no +" ANOMALY DETAIL");
                const dataGrid_o_p = $("#datagrid-anom-item").dxDataGrid({
                    dataSource: dt,
                    keyExpr: "no",
                    paging: {
                        pageSize: 14
                    },
                    pager: {
                        showPageSizeSelector: true,
                        allowedPageSizes: [7, 14],
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
                            caption: "No",
                            alignment: "center",
                            headerCellTemplate: function (container) {
                                container.append($("<div>No</div>"));
                            },
                            dataField: "no",
                            width: "80"
                        }, 
                        {
                            caption: "Component Group",
                            alignment: "left",
                            headerCellTemplate: function (container) {
                                container.append($("<div>Component Group</div>"));
                            },
                            dataField: "name",
                        },
                        {
                            caption: "Item(s)",
                            alignment: "center",
                            headerCellTemplate: function (container) {
                                container.append($("<div>Item(s)</div>"));
                            },
                            dataField: "total",
                            width: "100"
                        }
                    ],
                    masterDetail: {
                        enabled: true,
                        template(container, options) {
                            console.log(options);
                            const id_comp_group = options.key;
                            $('<div>')
                                .addClass('master-detail-caption')
                                .text(`SAP Header Information:`)
                                .appendTo(container);
                            
                            $('<div>')
                                .addClass('datagrid-sap-item')
                                .appendTo(container);

                            $.ajax({
                                type: "GET",
                                url: "https://" + url_api + "/fmi/data/v2/databases/Lifting/layouts/info_crane/script/get_anomaly_list_lifting_crane?script.param=" + id_tag + "," + id_comp_group,
                                dataType: 'json',
                                headers: {
                                    "Authorization": "Bearer " + _token_lifting,
                                    "Content-Type": "application/json"
                                },
                                async: false,
                                success: function (data) {
                                    const mddt = JSON.parse(data.response.scriptResult);
                                    console.log(mddt);
                                    const dataGrid_md_dt = $(".datagrid-sap-item").dxDataGrid({
                                        dataSource: mddt,
                                        keyExpr: "id",
                                        paging: {
                                            pageSize: 14
                                        },
                                        pager: {
                                            showPageSizeSelector: true,
                                            allowedPageSizes: [7, 14],
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
                                                caption: "Work Order No",
                                                alignment: "center",
                                                headerCellTemplate: function (container) {
                                                    container.append($("<div>Work Order No</div>"));
                                                },
                                                dataField: "sap_header_wo_no",
                                            }, 
                                            {
                                                caption: "Due Date",
                                                alignment: "center",
                                                headerCellTemplate: function (container) {
                                                    container.append($("<div>Due Date</div>"));
                                                },
                                                dataField: "anomaly_end_date",
                                                dataType: "date",
                                                format: "dd-MMM-yyyy"
                                            }, 
                                            {
                                                caption: "Description",
                                                alignment: "center",
                                                headerCellTemplate: function (container) {
                                                    container.append($("<div>Description</div>"));
                                                },
                                                dataField: "sap_header_desc",
                                            },
                                            {
                                                caption: "Main WorkCtr",
                                                alignment: "center",
                                                headerCellTemplate: function (container) {
                                                    container.append($("<div>Main WorkCtr</div>"));
                                                },
                                                dataField: "sap_header_main_workctr",
                                            },
                                            {
                                                caption: "Accessibility",
                                                alignment: "center",
                                                headerCellTemplate: function (container) {
                                                    container.append($("<div>Accessibility</div>"));
                                                },
                                                dataField: "sap_header_accessibility",
                                            },
                                            {
                                                caption: "Scaffolding",
                                                alignment: "center",
                                                headerCellTemplate: function (container) {
                                                    container.append($("<div>Scaffolding</div>"));
                                                },
                                                dataField: "sap_header_scaffolding",
                                            },
                                        ],
                                        showBorders: true
                                    }).dxDataGrid('instance');
                                },
                                error: function (error) {
                                    console.log(error);
                                }
                            });
                        }
                    },
                    repaintChangesOnly: true,
                    onCellPrepared: function (e) {
                        //console.log(e);
                        //Change background color
                        if (e.rowType === "data" && e.column.dataField === "name") {
                            e.cellElement.css("background-color", e.data.color == "Green" ? "#66FF33" : e.data.color == "Yellow" ? "#FFFF00" : e.data.color == "Red" ? "#FF0000" : "");
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
            },
            error: function (error) {
                console.log(error);
                get_token_lifting();
                _token_lifting = $.cookie("_token_lifting");
                get_anom_item(e);
            }
        });
    }

    function get_lifting_crane_chart() {
        $.ajax({
            type: "GET",
            url: "https://" + url_api + "/fmi/data/v2/databases/CPOC_AIMS/layouts/lifting_crane_chart/records?_limit=1",
            dataType: 'json',
            headers: {
                "Authorization": "Bearer " + $.cookie("_token_dashboard"),
                "Content-Type": "application/json"
            },
            async: false,
            success: function (data) {
                console.log(data);
                create_chart(data.response.data[0].fieldData.status_green, data.response.data[0].fieldData.status_yellow, data.response.data[0].fieldData.status_red);
            },
            error: function (error) {
                console.log(error);
                get_token_startup();
                get_lifting_crane_chart();
            }
        });
    }

    function create_chart(g, y, r) {
        Highcharts.chart('crane-chart', {
            chart: {
                /*backgroundColor: ' #f8f9fa',*/
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {
                text: 'INTEGRITY SUMMARY'
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
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: false,
                        format: '<b>{point.name}</b><br>{point.percentage:.2f} %<br>{point.y_number}'
                    },
                    showInLegend: true,
                    events: {
                        click: function (event) {
                            console.log(event.point.name);
                            const val = [];
                            if(filterStatus != event.point.name) {  
                                filterStatus = event.point.name;
                                val[0] = event.point.name;
                            } else {
                                filterStatus = '';
                            }
                            dataGrid.columnOption('fieldData.integrity_status','filterValues', val);
                        }
                    },
                    borderWidth: 1,
                    borderColor: '#eeeeee'
                }
            },
            series: [{
                name: 'Percent',
                colorByPoint: true,
                data: [
                {
                    name: 'Green',
                    color: "#66ff33",
                    y: g,
                    y_number: g,
                },
                {
                    name: 'Yellow',
                    color: "#ffff00",
                    y: y,
                    y_number: y,
                },{
                    name: 'Red',
                    color: "#ff0000",
                    y: r,
                    y_number: r,
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

    function get_year(value) {
        if (value === null || value === undefined || value === "") {
            return ""
        } else {
            var parts = value.split('/');
            return parts[2]
        }
    }

    function lifting_color_code(color) {
        if(color == "Yellow") {
            return "#FFFF00";
        } else if(color == "Pink") {
            return "#FF97FF";
        } else if(color == "Orange") {
            return "#FF481C";
        } else if(color == "Purple") {
            return "#9733FF";
        }
    }

</script>