<div class="jumbotron jumbotron-header rounded-0 bg-secondary text-white">
    <div class="row">
        <div class="col-12">
            <h1 class="display-4">CM Report Searching</h1>
        </div>

    </div>
</div>
<div class="wrapper-form shadow">
    <div id="dataGrid-sap"></div>
</div>
<script>
    var _token_dashboard = $.cookie("_token_dashboard");
    console.log("_token_dashboard: " + _token_dashboard);
    var dataGrid;
    var dataArr = [];

    get_sap_piping();
    get_sap_vessel();
    get_sap_flowline();
    get_sap_structure();
    get_sap_riser();
    get_sap_crane();
    console.log('dataArr');
    console.log(dataArr);
    create_table(dataArr);

    $('.loader').hide();

    
    function get_sap_piping() {
        $.ajax({
            type: "GET",
            url: "https://" + url_api + "/fmi/data/v2/databases/CPOC_AIMS/layouts/piping_SAP_api/records?_limit=10000",
            dataType: 'json',
            headers: {
                "Authorization": "Bearer " + $.cookie("_token_dashboard"),
                "Content-Type": "application/json"
            },
            async: false,
            success: function (data) {
                console.log('piping:')
                console.log(data);
                dataArr = [...dataArr, ...data.response.data];
                // dataArr_moc = data;
                // create_table_moc(dataArr_moc.response.data);
            },
            error: function (error) {
                console.log(error);
                get_token_startup();
                get_sap_piping();
            }
        });
    }

    function get_sap_vessel() {
        $.ajax({
            type: "GET",
            url: "https://" + url_api + "/fmi/data/v2/databases/CPOC_AIMS/layouts/vessel_SAP_api/records?_limit=1000",
            dataType: 'json',
            headers: {
                "Authorization": "Bearer " + $.cookie("_token_dashboard"),
                "Content-Type": "application/json"
            },
            async: false,
            success: function (data) {
                console.log('vessel:')
                console.log(data);
                dataArr = [...dataArr, ...data.response.data];
                // dataArr_moc = data;
                // create_table_moc(dataArr_moc.response.data);
            },
            error: function (error) {
                console.log(error);
                get_token_startup();
                get_sap_vessel();
            }
        });
    }

    function get_sap_flowline() {
        $.ajax({
            type: "GET",
            url: "https://" + url_api + "/fmi/data/v2/databases/CPOC_AIMS/layouts/flowline_SAP_api/records?_limit=1000",
            dataType: 'json',
            headers: {
                "Authorization": "Bearer " + $.cookie("_token_dashboard"),
                "Content-Type": "application/json"
            },
            async: false,
            success: function (data) {
                console.log('flowline:')
                console.log(data);
                dataArr = [...dataArr, ...data.response.data];
                // dataArr_moc = data;
                // create_table_moc(dataArr_moc.response.data);
            },
            error: function (error) {
                console.log(error);
                get_token_startup();
                get_sap_flowline();
            }
        });
    }

    function get_sap_structure() {
        $.ajax({
            type: "GET",
            url: "https://" + url_api + "/fmi/data/v2/databases/CPOC_AIMS/layouts/structure_SAP_api/records?_limit=1000",
            dataType: 'json',
            headers: {
                "Authorization": "Bearer " + $.cookie("_token_dashboard"),
                "Content-Type": "application/json"
            },
            async: false,
            success: function (data) {
                console.log('structure:')
                console.log(data);
                dataArr = [...dataArr, ...data.response.data];
                // dataArr_moc = data;
                // create_table_moc(dataArr_moc.response.data);
            },
            error: function (error) {
                console.log(error);
                get_token_startup();
                get_sap_structure();
            }
        });
    }

    function get_sap_riser() {
        $.ajax({
            type: "GET",
            url: "https://" + url_api + "/fmi/data/v2/databases/CPOC_AIMS/layouts/riser_SAP_api/records?_limit=1000",
            dataType: 'json',
            headers: {
                "Authorization": "Bearer " + $.cookie("_token_dashboard"),
                "Content-Type": "application/json"
            },
            async: false,
            success: function (data) {
                console.log('riser:')
                console.log(data);
                dataArr = [...dataArr, ...data.response.data];
                // dataArr_moc = data;
                // create_table_moc(dataArr_moc.response.data);
            },
            error: function (error) {
                console.log(error);
                get_token_startup();
                get_sap_riser();
            }
        });
    }

    function get_sap_crane() {
        $.ajax({
            type: "GET",
            url: "https://" + url_api + "/fmi/data/v2/databases/CPOC_AIMS/layouts/crane_SAP_api/records?_limit=1000",
            dataType: 'json',
            headers: {
                "Authorization": "Bearer " + $.cookie("_token_dashboard"),
                "Content-Type": "application/json"
            },
            async: false,
            success: function (data) {
                console.log('crane:')
                console.log(data);
                dataArr = [...dataArr, ...data.response.data];
                // dataArr_moc = data;
                // create_table_moc(dataArr_moc.response.data);
            },
            error: function (error) {
                console.log(error);
                get_token_startup();
                get_sap_crane();
            }
        });
    }

    function create_table(data) {
        dataGrid = $("#dataGrid-sap").dxDataGrid({
            dataSource: data,
            keyExpr: "fieldData.for_filter_import",

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
                mode: "select",
                search: {
                    enabled: true,
                    editorOptions: { placeholder: 'Search column' },
                },
                selection: {
                    recursive: true,
                    selectByClick: true,
                    allowSelectAll: true,
                },
            },
            focusedRowEnabled: true,
            showRowLines: true,
            wordWrapEnabled: true,
            
            columns: [
                {
                    caption: "Item",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Item</div>"));
                    },
                    cellTemplate: function(cellElement, cellInfo) {  
                        cellElement.text(cellInfo.row.rowIndex + 1);
                    },
                    //dataField: "fieldData.no",
                    width: "70px",
                    alignment: "center"
                },
                {
                    caption: "Platform",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Platform</div>"));
                    },
                    dataField: "fieldData.platform_codename",
                    width: "70px",
                    alignment: "center"
                },
                {
                    caption: "Tag No",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Tag No</div>"));
                    },
                    dataField: "fieldData.line_no",
                    width: "150",
                },
                {
                    caption: "PID No",
                    headerCellTemplate: function (container) {
                        container.append($("<div>P&ID No</div>"));
                    },
                    dataField: "fieldData.pid_no",
                    width: "150",
                    visible: false,
                },
                {
                    caption: "Notification",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Notification</div>"));
                    },
                    dataField: "fieldData.notification",
                    width: "125",
                },
                {
                    caption: "SAP WO No",
                    headerCellTemplate: function (container) {
                        container.append($("<div>SAP WO No</div>"));
                    },
                    dataField: "fieldData.SAP_order_no",
                    width: "125",
                },
                {
                    caption: "Creation Timestamp",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Creation Timestamp</div>"));
                    },
                    dataField: "fieldData.CreationTimestamp",
                    width: "100",
                    dataType: 'date',  
                    format: 'd MMM yyyy',
                },
                {
                    caption: "Required End Date",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Required End Date</div>"));
                    },
                    dataField: "fieldData.required_end_date",
                    width: "100",
                    dataType: 'date',  
                    format: 'd MMM yyyy',
                },
                {
                    caption: "Description",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Description</div>"));
                    },
                    dataField: "fieldData.description",
                    width: "auto",
                },
                // {
                //     caption: "Additional Data",
                //     headerCellTemplate: function (container) {
                //         container.append($("<div>Additional Data</div>"));
                //     },
                //     dataField: "fieldData.additional_data",
                //     width: "auto",
                //     visible: false,
                // },
                {
                    caption: "Main Work CTR",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Main Work CTR</div>"));
                    },
                    dataField: "fieldData.SAP_main_workctr",
                    width: "auto",
                },
                {
                    caption: "Integrity Status",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Integrity Status</div>"));
                    },
                    dataField: "fieldData.integrity_status",
                    width: "auto",
                },
                {
                    caption: "Risk Ranking",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Risk<br>Ranking</div>"));
                    },
                    dataField: "fieldData.risk_ranking",
                    width: "auto",
                    visible: false,
                },
                {
                    caption: "Anomaly Priority",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Anomaly<br>Priority</div>"));
                    },
                    dataField: "fieldData.anomaly_priority",
                    width: "auto",
                    visible: false,
                },
                {
                    caption: "CM Issued",
                    headerCellTemplate: function (container) {
                        container.append($("<div>CM Issued</div>"));
                    },
                    dataField: "fieldData.changed_on_issued",
                    width: "100",
                    dataType: 'date',  
                    format: 'd MMM yyyy',
                },
                {
                    caption: "CM Closed",
                    headerCellTemplate: function (container) {
                        container.append($("<div>CM Closed</div>"));
                    },
                    dataField: "fieldData.changed_on_closed",
                    width: "100",
                    dataType: 'date',  
                    format: 'd MMM yyyy',
                },
                {
                    caption: "Temporary Repair",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Temporary<br>Repair</div>"));
                    },
                    dataField: "fieldData.temporary_repair",
                    width: "100",
                    visible: false,
                },
                {
                    caption: "Temporary Repair Date",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Temporary<br>Repair Date</div>"));
                    },
                    dataField: "fieldData.temporary_repair_date",
                    calculateCellValue: function (value) {
                            return get_year(value.fieldData.temporary_repair_date)
                        },
                    width: "100",
                    alignment: "center",
                    visible: false,
                },
                {
                    caption: "Temporary Repair Status",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Temporary<br>Repair<br>Status</div>"));
                    },
                    dataField: "fieldData.temporary_repair_status",
                    width: "100",
                    visible: false,
                },
                {
                    caption: "Permanent Repair",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Permanent<br>Repair</div>"));
                    },
                    dataField: "fieldData.permanent_repair",
                    width: "100",
                    visible: false,
                },
                {
                    caption: "Permanent Repair Date",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Permanent<br>Repair Date</div>"));
                    },
                    dataField: "fieldData.permanent_repair_date",
                    calculateCellValue: function (value) {
                            return get_year(value.fieldData.permanent_repair_date)
                        },
                    width: "100",
                    alignment: "center",
                    visible: false,
                },
                {
                    caption: "Permanent Repair Status",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Permanent<br>Repair<br>Status</div>"));
                    },
                    dataField: "fieldData.permanent_repair_status",
                    width: "100",
                    visible: false,
                },
                {
                    caption: "Upcoming Repair Date",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Upcoming<br>Repair Date</div>"));
                    },
                    dataField: "fieldData.upcoming_repair_date",
                    calculateCellValue: function (value) {
                            return get_year(value.fieldData.upcoming_repair_date)
                        },
                    width: "100",
                    alignment: "center",
                    visible: false,
                },
                {
                    caption: "Accessibility",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Accessibility</div>"));
                    },
                    dataField: "fieldData.accessibility_value",
                    width: "100",
                },
                {
                    caption: "Scaffolding Requirement",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Scaffolding<br>Requirement</div>"));
                    },
                    dataField: "fieldData.scaffolding_requirement",
                    width: "100",
                },
                // {
                //     caption: "Recommendation",
                //     headerCellTemplate: function (container) {
                //         container.append($("<div>Recommendation</div>"));
                //     },
                //     dataField: "fieldData.additional_data",
                //     minWidth: "300px",
                // },
                {
                    caption: "Related File",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Related File</div>"));
                    },
                    dataField: "fieldData.related_file",
                    width: "auto",
                    visible: false,
                },
                {
                    caption: "File",
                    width: "110px",
                    headerCellTemplate: function (container) {
                        container.append($("<div>File</div>"));
                    },
                    dataField: "fieldData.for_filter_import",
                    alignment: "center",
                    cellTemplate: function (container, options) {
                        if(options.value.substring(0,2) == "PP" && options.data.fieldData['piping_inspection_document::file'] != "") {
                            $('<a class="btn btn-primary btn-sm" href="' + options.data.fieldData['piping_inspection_document::file'] + '" download="' + options.data.fieldData.related_file + '" target="_blank")>Download</a>').addClass('').appendTo(container);
                        } else if(options.value.substring(0,2) == "PV" && options.data.fieldData['vessel_inspection_document::file'] != "") {
                            $('<a class="btn btn-primary btn-sm" href="' + options.data.fieldData['vessel_inspection_document::file'] + '" download="' + options.data.fieldData.related_file + '" target="_blank")>Download</a>').addClass('').appendTo(container);
                        } else if(options.value.substring(0,2) == "FL" && options.data.fieldData['flowline_inspection_document::file'] != "") {
                            $('<a class="btn btn-primary btn-sm" href="' + options.data.fieldData['flowline_inspection_document::file'] + '" download="' + options.data.fieldData.related_file + '" target="_blank")>Download</a>').addClass('').appendTo(container);
                        } else if(options.value.substring(0,2) == "ST" && options.data.fieldData['structure_inspection_document::file'] != "") {
                            $('<a class="btn btn-primary btn-sm" href="' + options.data.fieldData['structure_inspection_document::file'] + '" download="' + options.data.fieldData.related_file + '" target="_blank")>Download</a>').addClass('').appendTo(container);
                        } else if(options.value.substring(0,2) == "RS" && options.data.fieldData['outgoing_riser_inspection_document::file'] != "") {
                            $('<a class="btn btn-primary btn-sm" href="' + options.data.fieldData['outgoing_riser_inspection_document::file'] + '" download="' + options.data.fieldData.related_file + '" target="_blank")>Download</a>').addClass('').appendTo(container);
                        } else if(options.value.substring(0,2) == "RS" && options.data.fieldData['incoming_riser_inspection_document::file'] != "") {
                            $('<a class="btn btn-primary btn-sm" href="' + options.data.fieldData['incoming_riser_inspection_document::file'] + '" download="' + options.data.fieldData.related_file + '" target="_blank")>Download</a>').addClass('').appendTo(container);
                        } else {
                            $('No file').addClass('').appendTo(container);
                        }
                    },
                },      
                // {
                //     caption: "Status",
                //     headerCellTemplate: function (container) {
                //         container.append($("<div>Status</div>"));
                //     },
                //     dataField: "fieldData.status_final",
                //     width: "100px",
                //     alignment: "center",
                //     cellTemplate: function (container, options) {
                //         if(options.value == 'Active') {
                //             $('<button type="button" style="padding: 0.5rem;"></button>').addClass('btn btn-sm btn-success-1 rounded-circle')
                //             .on('dxclick', function (e) {
                //             }).appendTo(container);
                //         } else if(options.value == 'Overdue') { 
                //             $('<button type="button" style="padding: 0.5rem;"></button>').addClass('btn btn-sm btn-danger rounded-circle')
                //             .on('dxclick', function (e) {
                //             }).appendTo(container);
                //         } else if(options.value == 'Pending Approval') { 
                //             $('<button type="button" style="padding: 0.5rem;"></button>').addClass('btn btn-sm btn-warning rounded-circle')
                //             .on('dxclick', function (e) {
                //             }).appendTo(container);
                //         } else if(options.value == 'Closed') { 
                //             $('<button type="button" style="padding: 0.5rem;"></button>').addClass('btn btn-sm btn-success rounded-circle')
                //             .on('dxclick', function (e) {
                //             }).appendTo(container);
                //         }
                //     }
                // },
                // {
                //     caption: "MOC",
                //     width: "110px",
                //     headerCellTemplate: function (container) {
                //         container.append($("<div>MOC</div>"));
                //     },
                //     dataField: "fieldData.attachment",
                //     alignment: "center",
                //     cellTemplate: function (container, options) {
                //         console.log(options);
                //         if(options.data.fieldData.attachment != "") {
                //             $('<a class="btn btn-primary btn-sm" href="' + options.data.fieldData.attachment + '" download="' + options.data.fieldData.attachment_name + '" target="_blank")>Download</a>').addClass('').appendTo(container);
                //         } else {
                //             $('No file').addClass('').appendTo(container);
                //         }
                //     },
                // },
            ],
            repaintChangesOnly: true,
            onCellPrepared: function (e) {

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