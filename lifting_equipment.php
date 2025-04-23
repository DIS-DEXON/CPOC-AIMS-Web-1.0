<div class="jumbotron jumbotron-header rounded-0 bg-secondary text-white">
    <div class="row">
        <div class="col-12">
            <h1 class="display-4">LIFTING EQUIPMENT</h1>
        </div>
        <!-- สถิติ -->
        <div id="stat" class="col-12 mt-3">
            <div id="accepted_box" class="box">
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
                <h5 class="modal-title" id="staticBackdropLabel">Lifting Equipment Information</h5>
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
                            <label class="header-detail">Serial Number Main Equipment</label>
                            <input type="text" class="form-control form-control-sm" id="serial_no_main_equip" readonly>
                        </div>
                        <div class="col-md-4">
                            <label class="header-detail">Area</label>
                            <input type="text" class="form-control form-control-sm" id="area" readonly>
                        </div>
                        <div class="col-md-4">
                            <label class="header-detail">Equipment Type</label>
                            <input type="text" class="form-control form-control-sm" id="equipment_type" readonly>
                        </div>
                        <div class="col-md-4">
                            <label class="header-detail">Equipment Category</label>
                            <input type="text" class="form-control form-control-sm" id="equipment_category" readonly>
                        </div>
                        <div class="col-md-4">
                            <label class="header-detail">WLL (t)</label>
                            <input type="text" class="form-control form-control-sm" id="wll_t" readonly>
                        </div>
                        <div class="col-md-4">
                            <label class="header-detail">WLL (lbs)</label>
                            <input type="text" class="form-control form-control-sm" id="wll_ibs" readonly>
                        </div>
                        <div class="col-md-4">
                            <label class="header-detail">SWL (t)</label>
                            <input type="text" class="form-control form-control-sm" id="swl_t" readonly>
                        </div>
                        <div class="col-md-4">
                            <label class="header-detail">SWL (lbs)</label>
                            <input type="text" class="form-control form-control-sm" id="swl_lbs" readonly>
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

<div class="modal fade" id="library_summary" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Summary of Lifting Equipment</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div id="grid_lifting_equip"></div>
                        <table class="table table-bordered">
                            <thead>
                                <th class="bg-secondary text-white">Equipment/Tools</th>
                                <th id="accepted_th" class="text-center text-white">Accepted</th>
                                <th class="text-center text-white" style="background-color: #FF0000;">Rejected</th>
                                <th class="text-center text-white" style="background-color: #00AFEF;">Quarantine</th>
                                <th class="text-center">Maintenance</th>
                                <th class="text-center bg-secondary text-white">Total</th>
                            </thead>
                            <tbody id="tbody_lifting_equip">
                            </tbody>
                        </table>
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
    var dataArr = "";
    var dataSummary = "";
    var accepted_color_code = "";

    get_lifting_equipment_summary();
    get_data();
    get_lifting_equipment_summary_dashboard();
    
    $('.loader').hide();

    function get_data() {
        console.log("in");
        $.ajax({
            type: "GET",
            url: "https://" + url_api + "/fmi/data/v2/databases/Lifting/layouts/info_equipment_api/records?_limit=2000",
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

    function get_lifting_equipment_summary_dashboard() {
        console.log("in");
        $.ajax({
            type: "GET",
            url: "https://" + url_api + "/fmi/data/v2/databases/Lifting/layouts/equipment_summary/records?_limit=20",
            dataType: 'json',
            headers: {
                "Authorization": "Bearer " + _token_lifting,
                "Content-Type": "application/json"
            },
            async: false,
            success: function (data) {
                console.log(data.response.data);
                dataSummary = data.response.data;
                // create_table(dataSummary.response.data);
                // createRows(data);
            },
            error: function (error) {
                console.log(error);
                get_token_lifting();
                _token_lifting = $.cookie("_token_lifting");
                get_lifting_equipment_summary_dashboard();
                //logout();
            }
        });
    }
    
    function call_modal_equipment_summary_dashboard() {
        $('#library_summary').modal('show');
        $('#accepted_th').css("background-color", lifting_color_code_card(accepted_color_code));
        var trs = '';
        for(var i = 0; i < dataSummary.length; i++ ) {
            var tr = '<tr>';
            if(dataSummary[i].fieldData.equipment_tools == "Total") {
                tr    += '<td style="font-weight: 600;">' + dataSummary[i].fieldData.equipment_tools + '</td>';
                tr    += '<td class="text-center" style="font-weight: 600;">' + dataSummary[i].fieldData.accepted.toLocaleString() + '</td>';
                tr    += '<td class="text-center" style="font-weight: 600;">' + dataSummary[i].fieldData.rejected.toLocaleString() + '</td>';
                tr    += '<td class="text-center" style="font-weight: 600;">' + dataSummary[i].fieldData.quarantine.toLocaleString() + '</td>';
                tr    += '<td class="text-center" style="font-weight: 600;">' + dataSummary[i].fieldData.maintenance.toLocaleString() + '</td>';
                tr    += '<td class="text-center" style="font-weight: 600;">' + dataSummary[i].fieldData.total.toLocaleString() + '</td>';
                tr    += '</tr>';
            } else {
                tr    += '<td>' + dataSummary[i].fieldData.equipment_tools + '</td>';
                tr    += '<td class="text-center">' + dataSummary[i].fieldData.accepted.toLocaleString() + '</td>';
                tr    += '<td class="text-center">' + dataSummary[i].fieldData.rejected.toLocaleString() + '</td>';
                tr    += '<td class="text-center">' + dataSummary[i].fieldData.quarantine.toLocaleString() + '</td>';
                tr    += '<td class="text-center">' + dataSummary[i].fieldData.maintenance.toLocaleString() + '</td>';
                tr    += '<td class="text-center" style="font-weight: 600;">' + dataSummary[i].fieldData.total.toLocaleString() + '</td>';
                tr    += '</tr>';
            }

            trs = trs + tr;
        }
        $('#tbody_lifting_equip').html(trs);
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
        
        $('#serial_no_main_equip').val(data.serial_no_main_equip);
        $('#serial_no_main_equip').tooltip('dispose').tooltip({ title: data.serial_no_main_equip }).tooltip({ 'trigger': 'hover' });

        $('#area').val(data.area);
        $('#area').tooltip('dispose').tooltip({ title: data.area }).tooltip({ 'trigger': 'hover' });
        
        $('#equipment_type').val(data.equipment_type);
        $('#equipment_type').tooltip('dispose').tooltip({ title: data.equipment_type }).tooltip({ 'trigger': 'hover' });

        $('#equipment_category').val(data.equipment_categoty);
        $('#equipment_category').tooltip('dispose').tooltip({ title: data.equipment_categoty }).tooltip({ 'trigger': 'hover' });
        
        $('#wll_t').val(data.WLL_t);
        $('#wll_t').tooltip('dispose').tooltip({ title: data.WLL_t }).tooltip({ 'trigger': 'hover' });

        $('#wll_ibs').val(data.WLL_lbs);
        $('#wll_ibs').tooltip('dispose').tooltip({ title: data.WLL_lbs }).tooltip({ 'trigger': 'hover' });

        $('#swl_t').val(data.SWL_t);
        $('#swl_t').tooltip('dispose').tooltip({ title: data.SWL_t }).tooltip({ 'trigger': 'hover' });

        $('#swl_lbs').val(data.SWL_lbs);
        $('#swl_lbs').tooltip('dispose').tooltip({ title: data.SWL_lbs }).tooltip({ 'trigger': 'hover' });

        $('#description').val(data.description);
        $('#description').tooltip('dispose').tooltip({ title: data.description }).tooltip({ 'trigger': 'hover' });

        $("#info_modal").modal('show');

    }

    function get_lifting_equipment_summary() {
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
                $('#accepted_box').css("background-color", lifting_color_code_card(accepted_color_code));
            },
            error: function (error) {
                console.log(error);
                get_token_startup();
                get_lifting_equipment_summary();
                //logout();
            }
        });
    }

    function fetch_summary(data) {
        console.log(data);
        $('#accepted_val').html(data[0].fieldData.accepted_equipment.toLocaleString());
        $('#rejected_val').html(data[0].fieldData.rejected_equipment.toLocaleString());
        $('#quarantine_val').html(data[0].fieldData.quarantine_equipment.toLocaleString());
        $('#maintenance_val').html(data[0].fieldData.maintenance_equipment.toLocaleString());
        $('#overdue_val').html(data[0].fieldData.overdue_equipment.toLocaleString());
        $('#noinspect_val').html(data[0].fieldData.no_inspect_equipment.toLocaleString());
        $('#total_val').html(data[0].fieldData.total_status_equipment.toLocaleString());
    }

    function get_library(id_tag) {
        $.ajax({
            type: "POST",
            url: "https://" + url_api + "/fmi/data/v2/databases/Lifting/layouts/lifting_equipment_inspection_document/_find",
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
            url: "https://" + url_api + "/fmi/data/v2/databases/Lifting/layouts/lifting_equipment_design_spec_document/_find",
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
            url: "https://" + url_api + "/fmi/data/v2/databases/Lifting/layouts/lifting_equipment_inspection_document/_find",
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
            url: "https://" + url_api + "/fmi/data/v2/databases/Lifting/layouts/lifting_equipment_general_document/_find",
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
                    width: "100",
                    allowEditing: false,
                    alignment: "center",
                    cellTemplate: function (container, options) {
                        $('<button type="button" title="Data"></button>').addClass('btn btn-sm fas fa-list-ul')
                            .on('dxclick', function (e) {
                                //console.log(options.value)
                                get_info(options.data.fieldData);
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
                    caption: "Category",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Category</div>"));
                    },
                    dataField: "fieldData.lifting_category"
                },
                {
                    caption: "Equipment Type",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Equipment Type</div>"));
                    },
                    dataField: "fieldData.equipment_type"
                },
                {
                    caption: "Description",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Description</div>"));
                    },
                    dataField: "fieldData.description"
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
                    format: "dd-MMM-yyyy",
                },
                {
                    caption: "Color Code",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Color Code</div>"));
                    },
                    dataField: "fieldData.color_code"
                },
                {
                    caption: "Inspection Status",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Inspection Status</div>"));
                    },
                    dataField: "fieldData.lifting_status"
                },
            ],
            repaintChangesOnly: true,
            onCellPrepared: function (e) {
                //Change background color
                if (e.rowType === "data" && e.column.dataField === "fieldData.color_code") {
                    e.cellElement.css("background-color", e.data.fieldData.color_code == "Red" ? "#FF0000" : e.data.fieldData.color_code == "Orange" ? "#FF481C" : e.data.fieldData.color_code == "Purple" ? "#9733FF" : e.data.fieldData.color_code == "Yellow" ? "#FFFF00" : e.data.fieldData.color_code == "Pink" ? "#FF97FF" : e.data.fieldData.color_code == "White" ? "#FFFFFF" : e.data.fieldData.color_code == "Blue" ? "#00AFEF" : "");
                }

                if (e.rowType === "data" && e.column.dataField === "fieldData.lifting_status") {
                    e.cellElement.css("background-color", e.data.fieldData.lifting_status == "Accepted" ? lifting_color_code(accepted_color_code) : e.data.fieldData.lifting_status == "Maintenance" ? "#FFFFFF" : e.data.fieldData.lifting_status == "Overdue" ? "#B3B3B3" : e.data.fieldData.lifting_status == "Rejected" ? "#FF0000" : e.data.fieldData.lifting_status == "Quarantine" ? "#00AFEF" : "");
                }


                //Set alignment
                if (e.rowType == "header") {
                    e.cellElement.css("text-align", "center");
                    e.cellElement.css("vertical-align", "middle");
                }
                if (e.rowType === "data" && (e.column.dataField === "fieldData.lifting_status" || e.column.dataField === "fieldData.color_code" || e.column.dataField === "fieldData.expiry_date" || e.column.dataField === "fieldData.last_insp_date" )) {
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

        // $('.dx-toolbar-before').html('<button type="button" class="btn btn-primary" onclick="call_modal_equipment_summary_dashboard()">SUMMARY</button>');
        $('.dx-toolbar-after').prepend('<button type="button" class="btn btn-outline-dark" onclick="call_modal_equipment_summary_dashboard()" style="line-height: 1.3; border-color: #ddd;">SUMMARY</button>');

    }

    function get_year(value) {
        if (value === null || value === undefined || value === "") {
            return ""
        } else {
            var parts = value.split('/');
            return parts[2]
        }
    }

    function change_bg(){
        var color
        
        accepted_box.body.style.backgroundColor = color
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

    function lifting_color_code_card(color) {
        var value = 0.7;
        if(color == "Yellow") {
            //return "#FFFF00";
            return 'rgba(255,255,0,' + value + ')';
        } else if(color == "Pink") {
            //return "#FF97FF";
            return 'rgba(255,151,255,' + value + ')';
        } else if(color == "Orange") {
            //return "#FF481C";
            return 'rgba(255,72,28,' + value + ')';
        } else if(color == "Purple") {
            //return "#9733FF";
            return 'rgba(151,51,255,' + value + ')';
        }
    }

</script>