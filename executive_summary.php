<div class="jumbotron jumbotron-header rounded-0 bg-secondary text-white">
    <div class="row">
        <div class="col-12">
            <h1 class="display-4">EXECUTIVE SUMMARY</h1>
        </div>
    </div>
</div>
<div class="wrapper-form shadow">
    <!-- <h5>The summary of Inspection plan for High Risk Equipment & High Risk Anomaly Management</h5> -->
    <h5>The summary status of Very High Risk Equipment</h5>
    <div id="dataGid"></div>
    <div class="mt-2">
        <button type="button" class="btn btn-sm btn-success rounded-circle mr-1" style="padding: 0.5rem;"></button> Completed
        <button type="button" class="btn btn-sm btn-warning rounded-circle mr-1 ml-2" style="padding: 0.5rem;"></button> Due
        <button type="button" class="btn btn-sm btn-danger rounded-circle mr-1 ml-2" style="padding: 0.5rem;"></button> Overdue
    </div>
</div>
<div id="dashboard-sum" class="row mt-4">
    <div class="col-12 mb-3">
        <h5 style="margin-left: 30px;">Management of Very High Risk Equipment</h5>
    </div>
    <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 mb-4">
        <div class="card shadow border-0">
            <div class="card-body">
                <h5 class="card-title mb-3">Piping Inspection Plan</h5>
                <div class="pie-chart-exe-sum" id="piping-insp-plan-chart"></div>
                <textarea class="form-control" id="piping-insp-plan-note" rows="3" readonly placeholder="Note:"></textarea>
            </div>
        </div>
    </div>
    <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 mb-4">
        <div class="card shadow border-0">
            <div class="card-body">
                <h5 class="card-title mb-3">Piping Anomaly Management</h5>
                <div class="pie-chart-exe-sum" id="piping-anom-chart"></div>
                <textarea class="form-control" id="piping-anom-note" rows="3" readonly placeholder="Note:"></textarea>
            </div>
        </div>
    </div>

    <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 mb-4">
        <div class="card shadow border-0">
            <div class="card-body">
                <h5 class="card-title mb-3">Pressure Vessel Inspection Plan</h5>
                <div class="pie-chart-exe-sum" id="vessel-insp-plan-chart"></div>
                <textarea class="form-control" id="vessel-insp-plan-note" rows="3" readonly placeholder="Note:"></textarea>
            </div>
        </div>
    </div>
    <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 mb-4">
        <div class="card shadow border-0">
            <div class="card-body">
                <h5 class="card-title mb-3">Pressure Vessel Anomaly Management</h5>
                <div class="pie-chart-exe-sum" id="vessel-anom-chart"></div>
                <textarea class="form-control" id="vessel-anom-note" rows="3" readonly placeholder="Note:"></textarea>
            </div>
        </div>
    </div>

    <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 mb-4">
        <div class="card shadow border-0">
            <div class="card-body">
                <h5 class="card-title mb-3">Flowline Inspection Plan</h5>
                <div class="pie-chart-exe-sum" id="flowline-insp-plan-chart"></div>
                <textarea class="form-control" id="flowline-insp-plan-note" rows="3" readonly placeholder="Note:"></textarea>
            </div>
        </div>
    </div>
    <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 mb-4">
        <div class="card shadow border-0">
            <div class="card-body">
                <h5 class="card-title mb-3">Flowline Anomaly Management</h5>
                <div class="pie-chart-exe-sum" id="flowline-anom-chart"></div>
                <textarea class="form-control" id="flowline-anom-note" rows="3" readonly placeholder="Note:"></textarea>
            </div>
        </div>
    </div>

    <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 mb-4">
        <div class="card shadow border-0">
            <div class="card-body">
                <h5 class="card-title mb-3">Pipeline Inspection Plan</h5>
                <div class="pie-chart-exe-sum" id="pipeline-insp-plan-chart"></div>
                <textarea class="form-control" id="pipeline-insp-plan-note" rows="3" readonly placeholder="Note:"></textarea>
            </div>
        </div>
    </div>
    <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 mb-4">
        <div class="card shadow border-0">
            <div class="card-body">
                <h5 class="card-title mb-3">Pipeline Anomaly Management</h5>
                <div class="pie-chart-exe-sum" id="pipeline-anom-chart"></div>
                <textarea class="form-control" id="pipeline-anom-note" rows="3" readonly placeholder="Note:"></textarea>
            </div>
        </div>
    </div>

    <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 mb-4">
        <div class="card shadow border-0">
            <div class="card-body">
                <h5 class="card-title mb-3">Topside Riser Inspection Plan</h5>
                <div class="pie-chart-exe-sum" id="asz-insp-plan-chart"></div>
                <textarea class="form-control" id="asz-insp-plan-note" rows="3" readonly placeholder="Note:"></textarea>
            </div>
        </div>
    </div>
    <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 mb-4">
        <div class="card shadow border-0">
            <div class="card-body">
                <h5 class="card-title mb-3">Topside Riser Anomaly Management</h5>
                <div class="pie-chart-exe-sum" id="asz-anom-chart"></div>
                <textarea class="form-control" id="asz-anom-note" rows="3" readonly placeholder="Note:"></textarea>
            </div>
        </div>
    </div>

    <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 mb-4">
        <div class="card shadow border-0">
            <div class="card-body">
                <h5 class="card-title mb-3">Subsea Riser Inspection Plan</h5>
                <div class="pie-chart-exe-sum" id="bsz-insp-plan-chart"></div>
                <textarea class="form-control" id="bsz-insp-plan-note" rows="3" readonly placeholder="Note:"></textarea>
            </div>
        </div>
    </div>
    <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 mb-4">
        <div class="card shadow border-0">
            <div class="card-body">
                <h5 class="card-title mb-3">Subsea Riser Anomaly Management</h5>
                <div class="pie-chart-exe-sum" id="bsz-anom-chart"></div>
                <textarea class="form-control" id="bsz-anom-note" rows="3" readonly placeholder="Note:"></textarea>
            </div>
        </div>
    </div>

    <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 mb-4">
        <div class="card shadow border-0">
            <div class="card-body">
                <h5 class="card-title mb-3">Structure Inspection Plan</h5>
                <div class="pie-chart-exe-sum" id="structure-insp-plan-chart"></div>
                <textarea class="form-control" id="structure-insp-plan-note" rows="3" readonly placeholder="Note:"></textarea>
            </div>
        </div>
    </div>
    <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 mb-4">
        <div class="card shadow border-0">
            <div class="card-body">
                <h5 class="card-title mb-3">Structure Anomaly Management</h5>
                <div class="pie-chart-exe-sum" id="structure-anom-chart"></div>
                <textarea class="form-control" id="structure-anom-note" rows="3" readonly placeholder="Note:"></textarea>
            </div>
        </div>
    </div>

</div>

<div class="modal fade" id="anom_detail_modal" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title anom-name" id="staticBackdropLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="datagrid-anom-detail"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="insp_detail_modal" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title insp-name" id="staticBackdropLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="datagrid-insp-detail"></div>
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
    get_chart();
    $('.loader').hide();

    function get_data() {
        console.log("in");
        $.ajax({
            type: "GET",
            url: "https://" + url_api + "/fmi/data/v2/databases/CPOC_AIMS/layouts/executive_summary_table/records?_limit=10",
            dataType: 'json',
            headers: {
                "Authorization": "Bearer " + $.cookie("_token_dashboard"),
                "Content-Type": "application/json"
            },
            async: false,
            success: function (data) {
                dataArr = data;
                create_table(dataArr.response.data);
                //createRows(data);
                
            },
            error: function (error) {
                console.log(error);
                get_token_startup();
                get_data();
            }
        });
    }

    function get_chart() {
        console.log("in");
        $.ajax({
            type: "GET",
            url: "https://" + url_api + "/fmi/data/v2/databases/CPOC_AIMS/layouts/executive_summary_chart/records?_limit=1",
            dataType: 'json',
            headers: {
                "Authorization": "Bearer " + $.cookie("_token_dashboard"),
                "Content-Type": "application/json"
            },
            async: false,
            success: function (data) {
                console.log(data.response.data[0].fieldData);
                gen_chart_piping(data.response.data[0].fieldData);
                gen_chart_vessel(data.response.data[0].fieldData);
                gen_chart_flowline(data.response.data[0].fieldData);
                gen_chart_pipeline(data.response.data[0].fieldData);
                gen_chart_topside_riser(data.response.data[0].fieldData);
                gen_chart_subsea_riser(data.response.data[0].fieldData);
                gen_chart_structure(data.response.data[0].fieldData);
            },
            error: function (error) {
                console.log(error);
                get_token_startup();
                get_chart();
            }
        });
    }

    function create_table(data) {
        console.log(data)
        const dataGrid = $("#dataGid").dxDataGrid({
            dataSource: data,
            keyExpr: "fieldData.id",

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
                visible: false,
                applyFilter: "auto"
            },
            headerFilter: {
                visible: false
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
                    caption: "Module",
                    width: "170",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Module</div>"));
                    },
                    dataField: "fieldData.module_name",
                    fixed: true,
                    fixedPosition: "left",
                    allowFiltering: false,
                    allowSorting: false,
                    allowResizing: false,
                    cellTemplate: function(element, info) {
                        element.append("<div>" + info.text + "</div>")
                                .css({"font-size" : "16px"  ,"text-transform" : "capitalize"});
                    }
                },
                {
                    caption: "Inspection Status",
                    width: "170",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Inspection Status</div>"));
                    },
                    dataField: "fieldData.inspection_plan_status",
                    allowEditing: false,
                    alignment: "center",
                    cellTemplate: function (container, options) {
                        if(options.data.fieldData.module_name == "pipeline" || options.data.fieldData.module_name == "subsea riser") {
                            $('<button type="button" style="padding: 0.5rem;"></button>').addClass('btn btn-sm btn-success rounded-circle')
                                .on('dxclick', function (e) {
                                    //renderPage('piping_insp_plan');
                                }).appendTo(container);
                        } else {
                            if(options.value == "overdue") {
                                $('<button type="button" style="padding: 0.5rem;"></button>').addClass('btn btn-sm btn-danger rounded-circle')
                                .on('dxclick', function (e) {
                                    console.log(options);
                                    call_insp_detail(options.data.fieldData.module_name);
                                }).appendTo(container);
                            } else if(options.value == "on due") {
                                $('<button type="button" style="padding: 0.5rem;"></button>').addClass('btn btn-sm btn-warning rounded-circle')
                                .on('dxclick', function (e) {
                                    console.log(options);
                                    call_insp_detail(options.data.fieldData.module_name);
                                }).appendTo(container);
                            } else { 
                                $('<button type="button" style="padding: 0.5rem;"></button>').addClass('btn btn-sm btn-success rounded-circle')
                                .on('dxclick', function (e) {
                                    //renderPage('piping_insp_plan');
                                }).appendTo(container);
                            }
                        }

                    },
                    allowFiltering: false,
                    allowSorting: false,
                    allowResizing: false,
                },
                {
                    caption: "Anomaly Repair Status",
                    width: "170",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Anomaly Repair Status</div>"));
                    },
                    dataField: "fieldData.anomaly_management_status",
                    allowEditing: false,
                    alignment: "center",
                    cellTemplate: function (container, options) {
                        if(options.value == "overdue") {
                            $('<button type="button" style="padding: 0.5rem;"></button>').addClass('btn btn-sm btn-danger rounded-circle')
                            .on('dxclick', function (e) {
                                console.log(options);
                                call_anom_detail(options.data.fieldData.module_name);
                            }).appendTo(container);
                        } else if(options.value == "on due") {
                            $('<button type="button" style="padding: 0.5rem;"></button>').addClass('btn btn-sm btn-warning rounded-circle')
                            .on('dxclick', function (e) {
                                console.log(options);
                                call_anom_detail(options.data.fieldData.module_name);
                            }).appendTo(container);
                        } else { 
                            $('<button type="button" style="padding: 0.5rem;"></button>').addClass('btn btn-sm btn-success rounded-circle')
                            .on('dxclick', function (e) {
                                //renderPage('piping_insp_plan');
                            }).appendTo(container);
                        }

                    },
                    allowFiltering: false,
                    allowSorting: false,
                    allowResizing: false,
                },
                {
                    caption: "Note",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Note</div>"));
                    },
                    dataField: "fieldData.remark",
                    allowFiltering: false,
                    allowSorting: false,
                    allowResizing: false,
                }
            ],
            repaintChangesOnly: true,
            onCellPrepared: function (e) {
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
    };

    function call_anom_detail(t) {
        console.log(t);
        $.ajax({
            type: "GET",
            url: "https://" + url_api + "/fmi/data/v2/databases/CPOC_AIMS/layouts/executive_summary/script/get_anomaly_line_list?script.param=" + t,
            dataType: 'json',
            headers: {
                "Authorization": "Bearer " + $.cookie("_token_dashboard"),
                "Content-Type": "application/json"
            },
            async: false,
            success: function (data) {
                console.log(data);
                console.log(JSON.parse(data.response.scriptResult));
                const dt = JSON.parse(data.response.scriptResult);
                $('#anom_detail_modal').modal('show');
                $('.anom-name').html(t.toUpperCase() + ' ANOMALY REPAIR STATUS');
                const dataGrid = $("#datagrid-anom-detail").dxDataGrid({
                    dataSource: dt,
                    keyExpr: "id",
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
                            caption: "Platform",
                            alignment: "center",
                            headerCellTemplate: function (container) {
                                container.append($("<div>Platform</div>"));
                            },
                            dataField: "platform_codename",
                        },    
                        {
                            caption: "Tag Number",
                            alignment: "left",
                            headerCellTemplate: function (container) {
                                container.append($("<div>Tag Number</div>"));
                            },
                            dataField: "tag_no",
                        }, 
                        {
                            caption: "Due Anomaly",
                            alignment: "center",
                            columns: [{
                                caption: "Year",
                                alignment: "center",
                                headerCellTemplate: function (container) {
                                    container.append($("<div>Year</div>"));
                                },
                                calculateCellValue: function (value) {
                                    return get_year(value.anomaly_upcoming_date)
                                },
                                dataField: "anomaly_upcoming_date",
                            }, 
                            {
                                caption: "Status",
                                alignment: "center",
                                headerCellTemplate: function (container) {
                                    container.append($("<div>Status</div>"));
                                },
                                dataField: "anomaly_upcoming_date_due",
                                sortOrder: 'desc',
                            }], 
                        },
                        {
                            caption: "Temporary Repair",
                            alignment: "left",
                            headerCellTemplate: function (container) {
                                container.append($("<div>Temporary Repair</div>"));
                            },
                            dataField: "anomaly_temporary_repair",
                        }, 
                        {
                            caption: "Permanent Repair",
                            alignment: "left",
                            headerCellTemplate: function (container) {
                                container.append($("<div>Permanent Repair</div>"));
                            },
                            dataField: "anomaly_permanent_repair",
                        },
                        {
                            caption: "WO Number",
                            alignment: "left",
                            headerCellTemplate: function (container) {
                                container.append($("<div>WO Number</div>"));
                            },
                            dataField: "sap_header_wo_no",
                        },
                        {
                            caption: "Main WorkCtr",
                            alignment: "left",
                            headerCellTemplate: function (container) {
                                container.append($("<div>Main<br>WorkCtr</div>"));
                            },
                            dataField: "sap_header_main_workctr",
                        },
                        {
                            caption: "Description",
                            alignment: "left",
                            headerCellTemplate: function (container) {
                                container.append($("<div>Description</div>"));
                            },
                            dataField: "sap_header_desc",
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
                            caption: "Scaffolding Requirement",
                            alignment: "center",
                            headerCellTemplate: function (container) {
                                container.append($("<div>Scaffolding<br>Requirement</div>"));
                            },
                            dataField: "sap_header_scaffolding",
                        }, 
                    ],
                    repaintChangesOnly: true,
                    onCellPrepared: function (e) {
                        //Change background color
                        if (e.rowType === "data" && e.column.dataField === "anomaly_upcoming_date_due") {
                            e.cellElement.css("background-color", e.data.anomaly_upcoming_date_due == "Not due" ? "#66FF33" : e.data.anomaly_upcoming_date_due == "On due" ? "#FFCC00" : e.data.anomaly_upcoming_date_due == "Overdue" ? "#FF0000" : "");
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
                get_token_startup();
                call_anom_detail(t);
            }
        });
    }

    function call_insp_detail(t) {
        console.log(t);
        $.ajax({
            type: "GET",
            url: "https://" + url_api + "/fmi/data/v2/databases/CPOC_AIMS/layouts/executive_summary/script/get_inspection_line_list?script.param=" + t,
            dataType: 'json',
            headers: {
                "Authorization": "Bearer " + $.cookie("_token_dashboard"),
                "Content-Type": "application/json"
            },
            async: false,
            success: function (data) {
                console.log(data);
                console.log(JSON.parse(data.response.scriptResult));
                const dt = JSON.parse(data.response.scriptResult);
                $('#insp_detail_modal').modal('show');
                $('.insp-name').html(t.toUpperCase() + ' INSPECTION STATUS');
                const dataGrid = $("#datagrid-insp-detail").dxDataGrid({
                    dataSource: dt,
                    keyExpr: "id",
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
                            caption: "Platform",
                            alignment: "center",
                            headerCellTemplate: function (container) {
                                container.append($("<div>Platform</div>"));
                            },
                            dataField: "platform_codename",
                        },    
                        {
                            caption: "Tag Number",
                            alignment: "left",
                            headerCellTemplate: function (container) {
                                container.append($("<div>Tag Number</div>"));
                            },
                            dataField: "tag_no",
                        }, 
                        {
                            caption: "Due Inspection",
                            alignment: "center",
                            columns: [{
                                caption: "Year",
                                alignment: "center",
                                headerCellTemplate: function (container) {
                                    container.append($("<div>Year</div>"));
                                },
                                dataField: "insp_date",
                            }, 
                            {
                                caption: "Status",
                                alignment: "center",
                                headerCellTemplate: function (container) {
                                    container.append($("<div>Status</div>"));
                                },
                                dataField: "insp_due_status",
                                sortOrder: 'desc',
                            }], 
                        },
                        {
                            caption: "Integrity Status",
                            alignment: "center",
                            headerCellTemplate: function (container) {
                                container.append($("<div>Integrity<br>Status</div>"));
                            },
                            dataField: "integrity_status",
                        }, 
                        {
                            caption: "Corrosion Loop",
                            alignment: "center",
                            columns: [{
                                caption: "Number",
                                alignment: "center",
                                headerCellTemplate: function (container) {
                                    container.append($("<div>Number</div>"));
                                },
                                dataField: "corrosion_loop_no",
                            }, 
                            {
                                caption: "Description",
                                alignment: "center",
                                headerCellTemplate: function (container) {
                                    container.append($("<div>Description</div>"));
                                },
                                dataField: "corrosion_loop_desc",
                            }], 
                        },
                    ],
                    repaintChangesOnly: true,
                    onCellPrepared: function (e) {
                        //Change background color
                        if (e.rowType === "data" && e.column.dataField === "insp_due_status") {
                            e.cellElement.css("background-color", e.data.insp_due_status == "Not due" ? "#66FF33" : e.data.insp_due_status == "On due" ? "#FFCC00" : e.data.insp_due_status == "Overdue" ? "#FF0000" : "");
                        }

                        if (e.rowType === "data" && e.column.dataField === "integrity_status") {
                            e.cellElement.css("background-color", e.data.integrity_status == "P1" ? "#FF0000" : e.data.integrity_status == "P2" ? "#F69546" : e.data.integrity_status == "P3" ? "#FFCC00" : e.data.integrity_status == "P4" ? "#FFFF00" : e.data.integrity_status == "P5" ? "#66FF33" : e.data.integrity_status == "P6" ? "#43a047" : "");
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
                get_token_startup();
                call_insp_detail(t);
            }
        });
    }

    function gen_chart_piping(data) {
        Highcharts.chart('piping-insp-plan-chart', {
            chart: {
                /*backgroundColor: ' #f8f9fa',*/
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
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: false,
                        format: '<b>{point.name}</b><br>{point.percentage:.2f} %<br>{point.y_number}'
                    },
                    showInLegend: true,
            borderWidth: 1,
            borderColor: '#eeeeee'
                }
            },
            series: [{
                name: 'Percent',
                colorByPoint: true,
                data: [
                {
                    name: 'Not due',
                    color: "#43a047",
                    y: data.piping_insp_not_due,
                    y_number: data.piping_insp_not_due,
                }, {
                    name: 'On due',
                    color: "#FFFF00",
                    y: data.piping_insp_on_due,
                    y_number: data.piping_insp_on_due,
                },{
                    name: 'Overdue',
                    color: "#C00000",
                    y: data.piping_insp_overdue,
                    y_number: data.piping_insp_overdue,
                    /*sliced: false,
                    selected: true*/
                }]
            }],
            credits: {
                enabled: false
            },
            exporting: {
                enabled: false
            }
        });

        Highcharts.chart('piping-anom-chart', {
            chart: {
                /*backgroundColor: ' #f8f9fa',*/
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
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: false,
                        format: '<b>{point.name}</b><br>{point.percentage:.2f} %<br>{point.y_number}'
                    },
                    showInLegend: true,
            borderWidth: 1,
            borderColor: '#eeeeee'
                }
            },
            series: [{
                name: 'Percent',
                colorByPoint: true,
                data: [
                {
                    name: 'Not due',
                    color: "#43a047",
                    y: data.piping_anom_not_due,
                    y_number: data.piping_anom_not_due,
                }, {
                    name: 'On due',
                    color: "#FFFF00",
                    y: data.piping_anom_on_due,
                    y_number: data.piping_anom_on_due,
                },{
                    name: 'Overdue',
                    color: "#C00000",
                    y: data.piping_anom_overdue,
                    y_number: data.piping_anom_overdue,
                    /*sliced: false,
                    selected: true*/
                }]
            }],
            credits: {
                enabled: false
            },
            exporting: {
                enabled: false
            }
        });

        $('#piping-insp-plan-note').val(data.piping_inspection_plan_note);
        $('#piping-anom-note').val(data.piping_anom_note);

    }

    function gen_chart_vessel(data) {
        Highcharts.chart('vessel-insp-plan-chart', {
            chart: {
                /*backgroundColor: ' #f8f9fa',*/
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
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: false,
                        format: '<b>{point.name}</b><br>{point.percentage:.2f} %<br>{point.y_number}'
                    },
                    showInLegend: true,
            borderWidth: 1,
            borderColor: '#eeeeee'
                }
            },
            series: [{
                name: 'Percent',
                colorByPoint: true,
                data: [
                {
                    name: 'Not due',
                    color: "#43a047",
                    y: data.vessel_insp_not_due,
                    y_number: data.vessel_insp_not_due,
                }, {
                    name: 'On due',
                    color: "#FFFF00",
                    y: data.vessel_insp_on_due,
                    y_number: data.vessel_insp_on_due,
                },{
                    name: 'Overdue',
                    color: "#C00000",
                    y: data.vessel_insp_overdue,
                    y_number: data.vessel_insp_overdue,
                    /*sliced: false,
                    selected: true*/
                }]
            }],
            credits: {
                enabled: false
            },
            exporting: {
                enabled: false
            }
        });

        Highcharts.chart('vessel-anom-chart', {
            chart: {
                /*backgroundColor: ' #f8f9fa',*/
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
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: false,
                        format: '<b>{point.name}</b><br>{point.percentage:.2f} %<br>{point.y_number}'
                    },
                    showInLegend: true,
            borderWidth: 1,
            borderColor: '#eeeeee'
                }
            },
            series: [{
                name: 'Percent',
                colorByPoint: true,
                data: [
                {
                    name: 'Not due',
                    color: "#43a047",
                    y: data.vessel_anom_not_due,
                    y_number: data.vessel_anom_not_due,
                }, {
                    name: 'On due',
                    color: "#FFFF00",
                    y: data.vessel_anom_on_due,
                    y_number: data.vessel_anom_on_due,
                },{
                    name: 'Overdue',
                    color: "#C00000",
                    y: data.vessel_anom_overdue,
                    y_number: data.vessel_anom_overdue,
                    /*sliced: false,
                    selected: true*/
                }]
            }],
            credits: {
                enabled: false
            },
            exporting: {
                enabled: false
            }
        });

        $('#vessel-insp-plan-note').val(data.vessel_inspection_plan_note);
        $('#vessel-anom-note').val(data.vessel_anom_note);
    }

    function gen_chart_flowline(data) {
        Highcharts.chart('flowline-insp-plan-chart', {
            chart: {
                /*backgroundColor: ' #f8f9fa',*/
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
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: false,
                        format: '<b>{point.name}</b><br>{point.percentage:.2f} %<br>{point.y_number}'
                    },
                    showInLegend: true,
            borderWidth: 1,
            borderColor: '#eeeeee'
                }
            },
            series: [{
                name: 'Percent',
                colorByPoint: true,
                data: [
                {
                    name: 'Not due',
                    color: "#43a047",
                    y: data.flowline_insp_not_due,
                    y_number: data.flowline_insp_not_due,
                }, {
                    name: 'On due',
                    color: "#FFFF00",
                    y: data.flowline_insp_on_due,
                    y_number: data.flowline_insp_on_due,
                },{
                    name: 'Overdue',
                    color: "#C00000",
                    y: data.flowline_insp_overdue,
                    y_number: data.flowline_insp_overdue,
                    /*sliced: false,
                    selected: true*/
                }]
            }],
            credits: {
                enabled: false
            },
            exporting: {
                enabled: false
            }
        });

        Highcharts.chart('flowline-anom-chart', {
            chart: {
                /*backgroundColor: ' #f8f9fa',*/
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
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: false,
                        format: '<b>{point.name}</b><br>{point.percentage:.2f} %<br>{point.y_number}'
                    },
                    showInLegend: true,
            borderWidth: 1,
            borderColor: '#eeeeee'
                }
            },
            series: [{
                name: 'Percent',
                colorByPoint: true,
                data: [
                {
                    name: 'Not due',
                    color: "#43a047",
                    y: data.flowline_anom_not_due,
                    y_number: data.flowline_anom_not_due,
                }, {
                    name: 'On due',
                    color: "#FFFF00",
                    y: data.flowline_anom_on_due,
                    y_number: data.flowline_anom_on_due,
                },{
                    name: 'Overdue',
                    color: "#C00000",
                    y: data.flowline_anom_overdue,
                    y_number: data.flowline_anom_overdue,
                    /*sliced: false,
                    selected: true*/
                }]
            }],
            credits: {
                enabled: false
            },
            exporting: {
                enabled: false
            }
        });

        $('#flowline-insp-plan-note').val(data.flowline_inspection_plan_note);
        $('#flowline-anom-note').val(data.flowline_anom_note);

    }

    function gen_chart_pipeline(data) {
        Highcharts.chart('pipeline-insp-plan-chart', {
            chart: {
                /*backgroundColor: ' #f8f9fa',*/
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
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: false,
                        format: '<b>{point.name}</b><br>{point.percentage:.2f} %<br>{point.y_number}'
                    },
                    showInLegend: true,
            borderWidth: 1,
            borderColor: '#eeeeee'
                }
            },
            series: [{
                name: 'Percent',
                colorByPoint: true,
                data: [
                {
                    name: 'Not due',
                    color: "#43a047",
                    y: data.pipeline_insp_not_due,
                    y_number: data.pipeline_insp_not_due,
                }, {
                    name: 'On due',
                    color: "#FFFF00",
                    y: data.pipeline_insp_on_due,
                    y_number: data.pipeline_insp_on_due,
                },{
                    name: 'Overdue',
                    color: "#C00000",
                    y: data.pipeline_insp_overdue,
                    y_number: data.pipeline_insp_overdue,
                    /*sliced: false,
                    selected: true*/
                }]
            }],
            credits: {
                enabled: false
            },
            exporting: {
                enabled: false
            }
        });

        Highcharts.chart('pipeline-anom-chart', {
            chart: {
                /*backgroundColor: ' #f8f9fa',*/
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
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: false,
                        format: '<b>{point.name}</b><br>{point.percentage:.2f} %<br>{point.y_number}'
                    },
                    showInLegend: true,
            borderWidth: 1,
            borderColor: '#eeeeee'
                }
            },
            series: [{
                name: 'Percent',
                colorByPoint: true,
                data: [
                {
                    name: 'Not due',
                    color: "#43a047",
                    y: data.pipeline_anom_not_due,
                    y_number: data.pipeline_anom_not_due,
                }, {
                    name: 'On due',
                    color: "#FFFF00",
                    y: data.pipeline_anom_on_due,
                    y_number: data.pipeline_anom_on_due,
                },{
                    name: 'Overdue',
                    color: "#C00000",
                    y: data.pipeline_anom_overdue,
                    y_number: data.pipeline_anom_overdue,
                    /*sliced: false,
                    selected: true*/
                }]
            }],
            credits: {
                enabled: false
            },
            exporting: {
                enabled: false
            }
        });

        $('#pipeline-insp-plan-note').val(data.pipeline_inspection_plan_note);
        $('#pipeline-anom-note').val(data.pipeline_anom_note);

    }

    function gen_chart_topside_riser(data) {
        Highcharts.chart('asz-insp-plan-chart', {
            chart: {
                /*backgroundColor: ' #f8f9fa',*/
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
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: false,
                        format: '<b>{point.name}</b><br>{point.percentage:.2f} %<br>{point.y_number}'
                    },
                    showInLegend: true,
            borderWidth: 1,
            borderColor: '#eeeeee'
                }
            },
            series: [{
                name: 'Percent',
                colorByPoint: true,
                data: [
                {
                    name: 'Not due',
                    color: "#43a047",
                    y: data.topside_riser_insp_not_due,
                    y_number: data.topside_riser_insp_not_due,
                }, {
                    name: 'On due',
                    color: "#FFFF00",
                    y: data.topside_riser_insp_on_due,
                    y_number: data.topside_riser_insp_on_due,
                },{
                    name: 'Overdue',
                    color: "#C00000",
                    y: data.topside_riser_insp_overdue,
                    y_number: data.topside_riser_insp_overdue,
                    /*sliced: false,
                    selected: true*/
                }]
            }],
            credits: {
                enabled: false
            },
            exporting: {
                enabled: false
            }
        });

        Highcharts.chart('asz-anom-chart', {
            chart: {
                /*backgroundColor: ' #f8f9fa',*/
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
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: false,
                        format: '<b>{point.name}</b><br>{point.percentage:.2f} %<br>{point.y_number}'
                    },
                    showInLegend: true,
            borderWidth: 1,
            borderColor: '#eeeeee'
                }
            },
            series: [{
                name: 'Percent',
                colorByPoint: true,
                data: [
                {
                    name: 'Not due',
                    color: "#43a047",
                    y: data.topside_riser_anom_not_due,
                    y_number: data.topside_riser_anom_not_due,
                }, {
                    name: 'On due',
                    color: "#FFFF00",
                    y: data.topside_riser_anom_on_due,
                    y_number: data.topside_riser_anom_on_due,
                },{
                    name: 'Overdue',
                    color: "#C00000",
                    y: data.topside_riser_anom_overdue,
                    y_number: data.topside_riser_anom_overdue,
                    /*sliced: false,
                    selected: true*/
                }]
            }],
            credits: {
                enabled: false
            },
            exporting: {
                enabled: false
            }
        });

        $('#asz-insp-plan-note').val(data.topside_riser_inspection_plan_note);
        $('#asz-anom-note').val(data.topside_riser_anom_note);

    }

    function gen_chart_subsea_riser(data) {
        Highcharts.chart('bsz-insp-plan-chart', {
            chart: {
                /*backgroundColor: ' #f8f9fa',*/
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
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: false,
                        format: '<b>{point.name}</b><br>{point.percentage:.2f} %<br>{point.y_number}'
                    },
                    showInLegend: true,
            borderWidth: 1,
            borderColor: '#eeeeee'
                }
            },
            series: [{
                name: 'Percent',
                colorByPoint: true,
                data: [
                {
                    name: 'Not due',
                    color: "#43a047",
                    y: data.subsea_riser_insp_not_due,
                    y_number: data.subsea_riser_insp_not_due,
                }, {
                    name: 'On due',
                    color: "#FFFF00",
                    y: data.subsea_riser_insp_on_due,
                    y_number: data.subsea_riser_insp_on_due,
                },{
                    name: 'Overdue',
                    color: "#C00000",
                    y: data.subsea_riser_insp_overdue,
                    y_number: data.subsea_riser_insp_overdue,
                    /*sliced: false,
                    selected: true*/
                }]
            }],
            credits: {
                enabled: false
            },
            exporting: {
                enabled: false
            }
        });

        Highcharts.chart('bsz-anom-chart', {
            chart: {
                /*backgroundColor: ' #f8f9fa',*/
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
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: false,
                        format: '<b>{point.name}</b><br>{point.percentage:.2f} %<br>{point.y_number}'
                    },
                    showInLegend: true,
            borderWidth: 1,
            borderColor: '#eeeeee'
                }
            },
            series: [{
                name: 'Percent',
                colorByPoint: true,
                data: [
                {
                    name: 'Not due',
                    color: "#43a047",
                    y: data.subsea_riser_anom_not_due,
                    y_number: data.subsea_riser_anom_not_due,
                }, {
                    name: 'On due',
                    color: "#FFFF00",
                    y: data.subsea_riser_anom_on_due,
                    y_number: data.subsea_riser_anom_on_due,
                },{
                    name: 'Overdue',
                    color: "#C00000",
                    y: data.subsea_riser_anom_overdue,
                    y_number: data.subsea_riser_anom_overdue,
                    /*sliced: false,
                    selected: true*/
                }]
            }],
            credits: {
                enabled: false
            },
            exporting: {
                enabled: false
            }
        });

        $('#bsz-insp-plan-note').val(data.subsea_riser_inspection_plan_note);
        $('#bsz-anom-note').val(data.subsea_riser_anom_note);

    }

    function gen_chart_structure(data) {
        Highcharts.chart('structure-insp-plan-chart', {
            chart: {
                /*backgroundColor: ' #f8f9fa',*/
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
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: false,
                        format: '<b>{point.name}</b><br>{point.percentage:.2f} %<br>{point.y_number}'
                    },
                    showInLegend: true,
            borderWidth: 1,
            borderColor: '#eeeeee'
                }
            },
            series: [{
                name: 'Percent',
                colorByPoint: true,
                data: [
                {
                    name: 'Not due',
                    color: "#43a047",
                    y: data.structure_insp_not_due,
                    y_number: data.structure_insp_not_due,
                }, {
                    name: 'On due',
                    color: "#FFFF00",
                    y: data.structure_insp_on_due,
                    y_number: data.structure_insp_on_due,
                },{
                    name: 'Overdue',
                    color: "#C00000",
                    y: data.structure_insp_overdue,
                    y_number: data.structure_insp_overdue,
                    /*sliced: false,
                    selected: true*/
                }]
            }],
            credits: {
                enabled: false
            },
            exporting: {
                enabled: false
            }
        });

        Highcharts.chart('structure-anom-chart', {
            chart: {
                /*backgroundColor: ' #f8f9fa',*/
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
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: false,
                        format: '<b>{point.name}</b><br>{point.percentage:.2f} %<br>{point.y_number}'
                    },
                    showInLegend: true,
            borderWidth: 1,
            borderColor: '#eeeeee'
                }
            },
            series: [{
                name: 'Percent',
                colorByPoint: true,
                data: [
                {
                    name: 'Not due',
                    color: "#43a047",
                    y: data.structure_anom_not_due,
                    y_number: data.structure_anom_not_due,
                }, {
                    name: 'On due',
                    color: "#FFFF00",
                    y: data.structure_anom_on_due,
                    y_number: data.structure_anom_on_due,
                },{
                    name: 'Overdue',
                    color: "#C00000",
                    y: data.structure_anom_overdue,
                    y_number: data.structure_anom_overdue,
                    /*sliced: false,
                    selected: true*/
                }]
            }],
            credits: {
                enabled: false
            },
            exporting: {
                enabled: false
            }
        });

        $('#structure-insp-plan-note').val(data.structure_inspection_plan_note);
        $('#structure-anom-note').val(data.structure_anom_note);

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
<style>
    .dx-datagrid-headers .dx-datagrid-table .dx-row > td {
        vertical-align: middle;
        text-align: center !important;
    }
</style>