<div class="jumbotron jumbotron-header rounded-0 bg-secondary text-white">
    <div class="row">
        <div class="col-12">
            <h1 class="display-4">CHOKE VALVE</h1>
        </div>
    </div>
</div>
<div class="wrapper-form shadow">
    <div id="dataGid"></div>
</div>

<div class="modal fade" id="log_modal" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Inspection Log: <span id="tag_no"></span></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <div id="grid_insp"></div>
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

    var _token_dashboard = $.cookie("_token_dashboard");
    console.log("_token_dashboard: " + _token_dashboard);
    var dataArr = "";

    get_data();
    $('.loader').hide();

    function get_data() {
        $.ajax({
            type: "GET",
            url: "https://" + url_api + "/fmi/data/v2/databases/CPOC_AIMS/layouts/choke_valve_table/records?_limit=500",
            dataType: 'json',
            headers: {
                "Authorization": "Bearer " + _token_dashboard,
                "Content-Type": "application/json"
            },
            async: false,
            success: function (data) {
                console.log(data);
                dataArr = data;
                create_table(dataArr.response.data);
            },
            error: function (error) {
                console.log(error);
                get_token_startup();
                _token_dashboard = $.cookie("_token_dashboard");
                get_data();
                //logout();
            }
        });
    }

    function create_table(data) {
        const dataGrid = $("#dataGid").dxDataGrid({
            dataSource: data,
            keyExpr: "fieldData.id_chokevalve",

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
                    dataField: "fieldData.id_chokevalve",
                    caption: "Log",
                    width: "100",
                    allowEditing: false,
                    alignment: "center",
                    cellTemplate: function (container, options) {
                        $('<button type="button" title="Data"></button>').addClass('btn btn-sm fas fa-list-ul')
                            .on('dxclick', function (e) {
                                console.log(options.values[2]);
                                get_insp_log(options.value,options.values[2]);
                            }).appendTo(container);
                    },
                    fixed: true,
                    fixedPosition: "left",
                    allowFiltering: false,
                    allowSorting: false,
                    allowResizing: false,
                },
                {
                    caption: "Wellhead",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Wellhead</div>"));
                    },
                    dataField: "fieldData.wellhead",
                    fixed: true,
                    fixedPosition: "left",
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
                    caption: "Brand",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Brand</div>"));
                    },
                    dataField: "fieldData.brand",
                },
                {
                    caption: "Model",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Model</div>"));
                    },
                    dataField: "fieldData.model",
                },
                {
                    caption: "Last Inspection Date",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Last Inspection Date</div>"));
                    },
                    dataField: "fieldData.last_insp_date",
                    dataType: 'date',  
                    format: 'd MMM yyyy',
                },
                {
                    caption: "Deviation (%)",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Deviation (%)</div>"));
                    },
                    dataField: "fieldData.last_deviation",
                    alignment: "left"
                },
                {
                    caption: "Status",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Status</div>"));
                    },
                    dataField: "fieldData.last_status",
                    alignment: "center"
                },
                {
                    caption: "Status Criteria",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Status Criteria</div>"));
                    },
                    dataField: "fieldData.last_status_criteria",
                    alignment: "center"
                },
                {
                    caption: "Recommendation",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Recommendation</div>"));
                    },
                    dataField: "fieldData.recommendation",
                }
            ],
            repaintChangesOnly: true,
            onCellPrepared: function (e) {
                //Change background color
                if (e.rowType === "data" && e.column.dataField === "fieldData.last_status") {
                    e.cellElement.css("background-color", e.data.fieldData.last_status == "LOW DEVIATION" ? "#66FF33" : e.data.fieldData.last_status == "MEDIUM DEVIATION" ? "#FFFF01" : e.data.fieldData.last_status == "HIGH DEVIATION" ? "#FF0000" : "");
                }
                // if (e.rowType === "data" && e.column.dataField === "fieldData.integrity_status") {
                //     e.cellElement.css("background-color", e.data.fieldData.integrity_status == "P1" ? "#FF0000" : e.data.fieldData.integrity_status == "P2" ? "#F69546" : e.data.fieldData.integrity_status == "P3" ? "#FFCC00" : e.data.fieldData.integrity_status == "P4" ? "#FFFF00" : e.data.fieldData.integrity_status == "P5" ? "#66FF33" : e.data.fieldData.integrity_status == "P6" ? "#43a047" : "");
                // }
                // if (e.rowType === "data" && e.column.dataField === "fieldData.routine_status") {
                //     e.cellElement.css("background-color", e.data.fieldData.routine_status == "Not due" ? "#66FF33" : e.data.fieldData.routine_status == "On due" ? "#FFCC00" : e.data.fieldData.routine_status == "Overdue" ? "#FF0000" : "");
                // }
                // if (e.rowType === "data" && e.column.dataField === "fieldData.anomaly_vt_temporary_due") {
                //     e.cellElement.css("background-color", e.data.fieldData.anomaly_vt_temporary_due == "Not due" ? "#66FF33" : e.data.fieldData.anomaly_vt_temporary_due == "On due" ? "#FFCC00" : e.data.fieldData.anomaly_vt_temporary_due == "Overdue" ? "#FF0000" : "");
                // }
                // if (e.rowType === "data" && e.column.dataField === "fieldData.anomaly_vt_permanent_due") {
                //     e.cellElement.css("background-color", e.data.fieldData.anomaly_vt_permanent_due == "Not due" ? "#66FF33" : e.data.fieldData.anomaly_vt_permanent_due == "On due" ? "#FFCC00" : e.data.fieldData.anomaly_vt_permanent_due == "Overdue" ? "#FF0000" : "");
                // }
                // if (e.rowType === "data" && e.column.dataField === "fieldData.anomaly_Thk_temporary_due") {
                //     e.cellElement.css("background-color", e.data.fieldData.anomaly_Thk_temporary_due == "Not due" ? "#66FF33" : e.data.fieldData.anomaly_Thk_temporary_due == "On due" ? "#FFCC00" : e.data.fieldData.anomaly_Thk_temporary_due == "Overdue" ? "#FF0000" : "");
                // }
                // if (e.rowType === "data" && e.column.dataField === "fieldData.anomaly_Thk_permanent_due") {
                //     e.cellElement.css("background-color", e.data.fieldData.anomaly_Thk_permanent_due == "Not due" ? "#66FF33" : e.data.fieldData.anomaly_Thk_permanent_due == "On due" ? "#FFCC00" : e.data.fieldData.anomaly_Thk_permanent_due == "Overdue" ? "#FF0000" : "");
                // }
                // if (e.rowType === "data" && e.column.dataField === "fieldData.anomaly_upcoming_date_due") {
                //     e.cellElement.css("background-color", e.data.fieldData.anomaly_upcoming_date_due == "Not due" ? "#66FF33" : e.data.fieldData.anomaly_upcoming_date_due == "On due" ? "#FFCC00" : e.data.fieldData.anomaly_upcoming_date_due == "Overdue" ? "#FF0000" : "");
                // }

                //Set alignment
                // if (e.rowType == "header") {
                //     e.cellElement.css("text-align", "center");
                //     e.cellElement.css("vertical-align", "middle");
                // }
                // if (e.rowType === "data" && (e.column.dataField === "fieldData.integrity_status" || e.column.dataField === "fieldData.routine_last_insp_date" || e.column.dataField === "fieldData.routine_next_insp_date" || e.column.dataField === "fieldData.routine_status" || e.column.dataField === "fieldData.anomaly_vt_temporary_due" || e.column.dataField === "fieldData.anomaly_vt_permanent_due" || e.column.dataField === "fieldData.anomaly_Thk_temporary_due" || e.column.dataField === "fieldData.anomaly_Thk_permanent_due" || e.column.dataField === "fieldData.anomaly_vt_temporary" || e.column.dataField === "fieldData.anomaly_vt_permanent" || e.column.dataField === "fieldData.anomaly_Thk_temporary" || e.column.dataField === "fieldData.anomaly_Thk_permanent")) {
                //     e.cellElement.css("text-align", "center");
                // }
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

    function get_insp_log(id_tag,tag_no) {
        dataInsp = "";
        $.ajax({
            type: "POST",
            url: "https://" + url_api + "/fmi/data/v2/databases/CPOC_AIMS/layouts/choke_valve_insp_table/_find",
            dataType: 'json',
            headers: {
                "Authorization": "Bearer " + _token_dashboard,
                "Content-Type": "application/json"
            },
            data: JSON.stringify({
                    "query": [
                        {
                            "id_chokevalve": "==" + id_tag
                        }
                    ]
                }),
            async: false,
            success: function (data) {
                console.log(data);
                dataInsp = data.response.data;
            },
            error: function (error) {
                console.log(error);
                console.log(error.responseJSON.messages[0].code);
                if(error.responseJSON.messages[0].code == 401) {
                    // alert("no library file");
                }else {
                    console.log(error);
                    get_token_startup();
                    _token_dashboard = $.cookie("_token_dashboard");
                    get_insp_log(id_tag);
                }
            }
        });

        const dataGrid = $("#grid_insp").dxDataGrid({
            dataSource: dataInsp,
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
                    dataField: "fieldData.id_data",
                    sortOrder: 'desc',
                    visible: false
                },
                {
                    caption: "Inspection Date",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Inspection Date</div>"));
                    },
                    dataField: "fieldData.insp_date",
                    dataType: 'date',  
                    format: 'd MMM yyyy',
                },
                {
                    caption: "Deviation",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Deviation %</div>"));
                    },
                    dataField: "fieldData.deviation",
                },
                {
                    caption: "Status",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Status</div>"));
                    },
                    dataField: "fieldData.status",
                },
                {
                    caption: "Status Criteria",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Status Criteria</div>"));
                    },
                    dataField: "fieldData.status_criteria",
                },
                {
                    caption: "Recommendation",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Recommendation</div>"));
                    },
                    dataField: "fieldData.recommendation",
                },
                {
                    caption: "Findings",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Findings</div>"));
                    },
                    dataField: "fieldData.finding",
                }, 
            ],
            repaintChangesOnly: true,
            onCellPrepared: function (e) {
                //Change background color
                if (e.rowType === "data" && e.column.dataField === "fieldData.status") {
                    e.cellElement.css("background-color", e.data.fieldData.status == "LOW DEVIATION" ? "#66FF33" : e.data.fieldData.status == "MEDIUM DEVIATION" ? "#FFFF01" : e.data.fieldData.status == "HIGH DEVIATION" ? "#FF0000" : "");
                }
            },
            showBorders: true
        }).dxDataGrid('instance');

        $('#log_modal').modal('show');
        $('#tag_no').html(tag_no);
    }
</script>