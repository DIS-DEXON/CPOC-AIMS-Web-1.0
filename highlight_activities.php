<div class="jumbotron jumbotron-header rounded-0 bg-secondary text-white">
    <div class="row">
        <div class="col-12">
            <h1 class="display-4">HIGHLIGHT ACTIVITIES</h1>
        </div>
    </div>
</div>

<div class="wrapper-form shadow">
    <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <a class="nav-link active" id="nav-ic-tab" data-toggle="tab" href="#nav-ic" role="tab" aria-controls="nav-ic" aria-selected="false">INSPECTION CAMPAIGN</a>
            <a class="nav-link" id="nav-rc-tab" data-toggle="tab" href="#nav-rc" role="tab" aria-controls="nav-rc" aria-selected="false">RECTIFICATION CAMPAIGN</a>
            <!-- <a class="nav-link" id="nav-moc-tab" data-toggle="tab" href="#nav-moc" role="tab" aria-controls="nav-moc" aria-selected="true">MANAGEMENT OF CHANGE</a> -->
        </div>
    </nav>
    <div class="tab-content" id="nav-tabContent">    
        <div class="tab-pane fade show active" id="nav-ic" role="tabpanel" aria-labelledby="nav-ic">
            <div class="form-inline mt-2">YEAR: <div id="selectYearIc" class="ml-2" style="width: 85px;"></div></div>
            <div id="dataGrid-ic" class="mt-2"></div>
            <div class="mt-2">
                <button type="button" class="btn btn-sm btn-success rounded-circle mr-1" style="padding: 0.5rem;"></button> Completed
                <button type="button" class="btn btn-sm btn-warning rounded-circle mr-1 ml-2" style="padding: 0.5rem;"></button> On progress
                <button type="button" class="btn btn-sm btn-danger rounded-circle mr-1 ml-2" style="padding: 0.5rem;"></button> Not started yet
            </div>
        </div>
        <div class="tab-pane fade" id="nav-rc" role="tabpanel" aria-labelledby="nav-rc">
            <div class="form-inline mt-2">YEAR: <div id="selectYearRc" class="ml-2" style="width: 85px;"></div></div>
            <div id="dataGrid-rc"></div>
            <!-- <div class="mt-2">
                <button type="button" class="btn btn-sm btn-success rounded-circle mr-1" style="padding: 0.5rem;"></button> Ready/Completed
                <button type="button" class="btn btn-sm btn-warning rounded-circle mr-1 ml-2" style="padding: 0.5rem;"></button> Under preparation/On-going
                <button type="button" class="btn btn-sm btn-danger rounded-circle mr-1 ml-2" style="padding: 0.5rem;"></button> Not yet
            </div> -->
        </div>
        <div class="tab-pane fade" id="nav-moc" role="tabpanel" aria-labelledby="nav-moc">
            <div id="dataGrid-moc" class="mt-2"></div>
            <div class="mt-2">
                <button type="button" class="btn btn-sm btn-success rounded-circle mr-1" style="padding: 0.5rem;"></button> Completed
                <button type="button" class="btn btn-sm btn-warning rounded-circle mr-1 ml-2" style="padding: 0.5rem;"></button> On progress
                <button type="button" class="btn btn-sm btn-danger rounded-circle mr-1 ml-2" style="padding: 0.5rem;"></button> Not started yet
            </div>
        </div>
    </div>
</div>

<script>

    var _token_dashboard = $.cookie("_token_dashboard");
    console.log("_token_dashboard: " + _token_dashboard);
    var dataArr_moc = "";
    var dataArr_ic = "";
    var dataArr_rc = "";
    var currentTime = new Date()
    var year_current = currentTime.getFullYear()
    var dataGridRc = "";
    var dataGridIc = "";
    var years = [2022, 2023, 2024, 2025, 2026, 2027, 2028, 2029, 2030];
    $('#selectYearRc').dxSelectBox({
        dataSource: years,
        value: year_current,
        onValueChanged(data) {
            dataGridRc.clearFilter();
            dataGridRc.filter(['fieldData.target_completion_year', '=', data.value]);
        },
    });
    $('#selectYearIc').dxSelectBox({
        dataSource: years,
        value: year_current,
        onValueChanged(data) {
            dataGridIc.clearFilter();
            dataGridIc.filter(['fieldData.start_date_year', '=', data.value]);
        },
    });

    //get_data_moc();
    get_data_ic();
    get_data_rc();

    $('.loader').hide();

    function get_data_moc() {
        $.ajax({
            type: "GET",
            url: "https://" + url_api + "/fmi/data/v2/databases/CPOC_AIMS/layouts/management_of_change_table/records?_limit=500",
            dataType: 'json',
            headers: {
                "Authorization": "Bearer " + _token_dashboard,
                "Content-Type": "application/json"
            },
            async: false,
            success: function (data) {
                console.log(data);
                dataArr_moc = data;
                create_table_moc(dataArr_moc.response.data);
            },
            error: function (error) {
                console.log(error);
                get_token_dashboard();
                get_data_moc();
                //logout();
            }
        });
    }

    function create_table_moc(data) {
        const dataGrid = $("#dataGrid-moc").dxDataGrid({
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
                    caption: "Item",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Item</div>"));
                    },
                    cellTemplate: function(cellElement, cellInfo) {  
                        cellElement.text(cellInfo.row.rowIndex + 1);
                    },
                    //dataField: "fieldData.no",
                    width: "80px",
                    alignment: "center"
                },
                {
                    caption: "Risk Level",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Risk Level</div>"));
                    },
                    dataField: "fieldData.risk_level",
                    width: "100px",
                },
                {
                    caption: "MOC Number",
                    headerCellTemplate: function (container) {
                        container.append($("<div>MOC Number</div>"));
                    },
                    dataField: "fieldData.moc_number",
                    width: "130px",
                },
                {
                    caption: "Topic",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Topic</div>"));
                    },
                    dataField: "fieldData.topic",
                    width: "320px",
                },
                {
                    caption: "Originator",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Originator</div>"));
                    },
                    dataField: "fieldData.originator",
                    width: "320px",
                },
                {
                    caption: "Issued Date",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Issued Date</div>"));
                    },
                    dataField: "fieldData.issued_date",
                    width: "130px",
                    dataType: 'date',  
                    format: 'd MMM yyyy',
                },              
                {
                    caption: "Actions & Comments",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Actions & Comments</div>"));
                    },
                    dataField: "fieldData.actions_comments",
                    width: "320px",
                },
                {
                    caption: "Expiratory Date",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Expiratory Date</div>"));
                    },
                    dataField: "fieldData.target_completion",
                    sortOrder: 'asc',
                    width: "130px",
                },
                {
                    caption: "Status",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Status</div>"));
                    },
                    dataField: "fieldData.status",
                    width: "150px",
                    alignment: "center",
                    cellTemplate: function (container, options) {
                        if(options.value == 'Completed') {
                            $('<button type="button" style="padding: 0.5rem;"></button>').addClass('btn btn-sm btn-success rounded-circle')
                            .on('dxclick', function (e) {
                            }).appendTo(container);
                        } else if(options.value == 'Overdue') { 
                            $('<button type="button" style="padding: 0.5rem;"></button>').addClass('btn btn-sm btn-danger rounded-circle')
                            .on('dxclick', function (e) {
                            }).appendTo(container);
                        } else if(options.value == 'On progress') { 
                            $('<button type="button" style="padding: 0.5rem;"></button>').addClass('btn btn-sm btn-warning rounded-circle')
                            .on('dxclick', function (e) {
                            }).appendTo(container);
                        }
                    }
                },
                {
                    caption: "Attachment",
                    width: "130px",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Attachment</div>"));
                    },
                    dataField: "fieldData.attachment",
                    alignment: "center",
                    cellTemplate: function (container, options) {
                        console.log(options);
                        if(options.data.fieldData.attachment != "") {
                            $('<a class="btn btn-primary btn-sm" href="' + options.data.fieldData.attachment + '" download="' + options.data.fieldData.attachment_name + '" target="_blank")>Download</a>').addClass('').appendTo(container);
                        } else {
                            $('No file').addClass('').appendTo(container);
                        }
                    },
                },
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

    function get_data_ic() {
        $.ajax({
            type: "GET",
            url: "https://" + url_api + "/fmi/data/v2/databases/CPOC_AIMS/layouts/inspection_campaign_table/records?_limit=500",
            dataType: 'json',
            headers: {
                "Authorization": "Bearer " + _token_dashboard,
                "Content-Type": "application/json"
            },
            async: false,
            success: function (data) {
                console.log(data);
                dataArr_ic = data;
                create_table_ic(dataArr_ic.response.data);
            },
            error: function (error) {
                console.log(error);
                get_token_dashboard();
                get_data_ic();
                //logout();
            }
        });
    }

    function create_table_ic(data) {
        dataGridIc = $("#dataGrid-ic").dxDataGrid({
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
                visible: true,
                applyFilter: "auto"
            },
            headerFilter: {
                visible: true
            },

            allowColumnReordering: true,
            allowColumnResizing: true,
            columnAutoWidth: true,
            wordWrapEnabled: true,
            columnChooser: {
                enabled: true,
                mode: "dragAndDrop"
            },
            focusedRowEnabled: true,
            showRowLines: true,
            columns: [
                {
                    caption: "Item",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Item</div>"));
                    },
                    //dataField: "fieldData.no",
                    cellTemplate: function(cellElement, cellInfo) {  
                        cellElement.text(cellInfo.row.rowIndex + 1);
                    },
                    width: "80px",
                    alignment: "center"
                },
                {
                    caption: "Inspection Program",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Inspection Program</div>"));
                    },
                    dataField: "fieldData.inspection_program",
                    width: "350px",
                },
                {
                    caption: "Start Date",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Start Date</div>"));
                    },
                    dataField: "fieldData.start_date",
                    dataType: 'date',  
                    format: 'd MMM yyyy',
                    width: "140px",
                    sortOrder: 'asc'
                },
                {
                    caption: "Start Date Year",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Start Date Year</div>"));
                    },
                    dataField: "fieldData.start_date_year",
                    width: "0px",
                    filterValues: [year_current]
                },
                {
                    caption: "End Date",
                    headerCellTemplate: function (container) {
                        container.append($("<div>End Date</div>"));
                    },
                    dataField: "fieldData.end_date",
                    dataType: 'date',  
                    format: 'd MMM yyyy',
                    width: "140px",
                },
                {
                    caption: "PIC",
                    headerCellTemplate: function (container) {
                        container.append($("<div>PIC</div>"));
                    },
                    dataField: "fieldData.PIC",
                    width: "140px",
                },
                {
                    caption: "Comments",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Comments</div>"));
                    },
                    dataField: "fieldData.comments",
                    width: "350px",
                },
                {
                    caption: "Status",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Status</div>"));
                    },
                    dataField: "fieldData.status",
                    width: "150px",
                    alignment: "center",
                    cellTemplate: function (container, options) {
                        if(options.value == 'Completed') {
                            $('<button type="button" style="padding: 0.5rem;"></button>').addClass('btn btn-sm btn-success rounded-circle')
                            .on('dxclick', function (e) {
                            }).appendTo(container);
                        } else if(options.value == 'Overdue') { 
                            $('<button type="button" style="padding: 0.5rem;"></button>').addClass('btn btn-sm btn-danger rounded-circle')
                            .on('dxclick', function (e) {
                            }).appendTo(container);
                        } else if(options.value == 'On progress') { 
                            $('<button type="button" style="padding: 0.5rem;"></button>').addClass('btn btn-sm btn-warning rounded-circle')
                            .on('dxclick', function (e) {
                            }).appendTo(container);
                        }
                    }
                },
                {
                    caption: "Attachment",
                    width: "130px",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Attachment</div>"));
                    },
                    dataField: "fieldData.attachment",
                    alignment: "center",
                    cellTemplate: function (container, options) {
                        //console.log(options);
                        if(options.data.fieldData.attachment != "") {
                            $('<a class="btn btn-primary btn-sm" href="' + options.data.fieldData.attachment + '" download="' + options.data.fieldData.attachment_name + '" target="_blank")>Download</a>').addClass('').appendTo(container);
                        } else {
                            $('No file').addClass('').appendTo(container);
                        }
                    },
                },
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

    function get_data_rc() {
        $.ajax({
            type: "GET",
            url: "https://" + url_api + "/fmi/data/v2/databases/CPOC_AIMS/layouts/rectification_campaign_table/records?_limit=500",
            dataType: 'json',
            headers: {
                "Authorization": "Bearer " + _token_dashboard,
                "Content-Type": "application/json"
            },
            async: false,
            success: function (data) {
                console.log(data);
                dataArr_rc = data;
                create_table_rc(dataArr_rc.response.data);
            },
            error: function (error) {
                console.log(error);
                get_token_dashboard();
                get_data_rc();
                //logout();
            }
        });
    }

    function create_table_rc(data) {
        dataGridRc = $("#dataGrid-rc").dxDataGrid({
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
                    caption: "Item",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Item</div>"));
                    },
                    cellTemplate: function(cellElement, cellInfo) {  
                        cellElement.text(cellInfo.row.rowIndex + 1);
                    },
                    //dataField: "fieldData.no",
                    width: "80px",
                    alignment: "center"
                },
                {
                    caption: "Rectification Issue",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Rectification Issue</div>"));
                    },
                    dataField: "fieldData.recification_issue",
                    width: "200px",
                },
                {
                    caption: "PIC",
                    headerCellTemplate: function (container) {
                        container.append($("<div>PIC</div>"));
                    },
                    dataField: "fieldData.PIC",
                    width: "130px",
                },
                {
                    caption: "Contractor",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Contractor</div>"));
                    },
                    dataField: "fieldData.contractor",
                    width: "110px",
                },
                {
                    caption: "Target Comletion",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Target Completion</div>"));
                    },
                    dataField: "fieldData.target_completion",
                    width: "130px",
                    dataType: 'date',  
                    format: 'd MMM yyyy',
                    sortOrder: 'asc',
                },
                {
                    caption: "Target Comletion Year",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Target Comletion Year</div>"));
                    },
                    dataField: "fieldData.target_completion_year",
                    width: "0px",
                    filterValues: [year_current]
                },
                {
                    caption: "Work Package",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Work Package</div>"));
                    },
                    dataField: "fieldData.work_package_status",
                    width: "110px",
                    alignment: "center",
                    cellTemplate: function (container, options) {
                        if(options.value == 'Ready/Completed') {
                            $('<button type="button" style="padding: 0.5rem;"></button>').addClass('btn btn-sm btn-success rounded-circle')
                            .on('dxclick', function (e) {
                            }).appendTo(container);
                        } else if(options.value == 'Not yet') { 
                            $('<button type="button" style="padding: 0.5rem;"></button>').addClass('btn btn-sm btn-danger rounded-circle')
                            .on('dxclick', function (e) {
                            }).appendTo(container);
                        } else if(options.value == 'Under preparation') { 
                            $('<button type="button" style="padding: 0.5rem;"></button>').addClass('btn btn-sm btn-warning rounded-circle')
                            .on('dxclick', function (e) {
                            }).appendTo(container);
                        }
                    }
                },
                {
                    caption: "Manpower",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Manpower</div>"));
                    },
                    dataField: "fieldData.manpower_status",
                    width: "120px",
                    alignment: "center",
                    cellTemplate: function (container, options) {
                        if(options.value == 'Ready/Completed') {
                            $('<button type="button" style="padding: 0.5rem;"></button>').addClass('btn btn-sm btn-success rounded-circle')
                            .on('dxclick', function (e) {
                            }).appendTo(container);
                        } else if(options.value == 'Not yet') { 
                            $('<button type="button" style="padding: 0.5rem;"></button>').addClass('btn btn-sm btn-danger rounded-circle')
                            .on('dxclick', function (e) {
                            }).appendTo(container);
                        } else if(options.value == 'Under preparation') { 
                            $('<button type="button" style="padding: 0.5rem;"></button>').addClass('btn btn-sm btn-warning rounded-circle')
                            .on('dxclick', function (e) {
                            }).appendTo(container);
                        }
                    }
                },
                {
                    caption: "Equipment",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Equipment</div>"));
                    },
                    dataField: "fieldData.equipment_status",
                    width: "120px",
                    alignment: "center",
                    cellTemplate: function (container, options) {
                        if(options.value == 'Ready/Completed') {
                            $('<button type="button" style="padding: 0.5rem;"></button>').addClass('btn btn-sm btn-success rounded-circle')
                            .on('dxclick', function (e) {
                            }).appendTo(container);
                        } else if(options.value == 'Not yet') { 
                            $('<button type="button" style="padding: 0.5rem;"></button>').addClass('btn btn-sm btn-danger rounded-circle')
                            .on('dxclick', function (e) {
                            }).appendTo(container);
                        } else if(options.value == 'Under preparation') { 
                            $('<button type="button" style="padding: 0.5rem;"></button>').addClass('btn btn-sm btn-warning rounded-circle')
                            .on('dxclick', function (e) {
                            }).appendTo(container);
                        }
                    }
                },
                {
                    caption: "POB",
                    headerCellTemplate: function (container) {
                        container.append($("<div>POB</div>"));
                    },
                    dataField: "fieldData.pob_status",
                    width: "120px",
                    alignment: "center",
                    cellTemplate: function (container, options) {
                        if(options.value == 'Ready/Completed') {
                            $('<button type="button" style="padding: 0.5rem;"></button>').addClass('btn btn-sm btn-success rounded-circle')
                            .on('dxclick', function (e) {
                            }).appendTo(container);
                        } else if(options.value == 'Not yet') { 
                            $('<button type="button" style="padding: 0.5rem;"></button>').addClass('btn btn-sm btn-danger rounded-circle')
                            .on('dxclick', function (e) {
                            }).appendTo(container);
                        } else if(options.value == 'Under preparation') { 
                            $('<button type="button" style="padding: 0.5rem;"></button>').addClass('btn btn-sm btn-warning rounded-circle')
                            .on('dxclick', function (e) {
                            }).appendTo(container);
                        }
                    }
                },
                {
                    caption: "Execution",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Execution</div>"));
                    },
                    dataField: "fieldData.execution_status",
                    width: "120px",
                    alignment: "center",
                    cellTemplate: function (container, options) {
                        if(options.value == 'Ready/Completed') {
                            $('<button type="button" style="padding: 0.5rem;"></button>').addClass('btn btn-sm btn-success rounded-circle')
                            .on('dxclick', function (e) {
                            }).appendTo(container);
                        } else if(options.value == 'Not yet') { 
                            $('<button type="button" style="padding: 0.5rem;"></button>').addClass('btn btn-sm btn-danger rounded-circle')
                            .on('dxclick', function (e) {
                            }).appendTo(container);
                        } else if(options.value == 'Under preparation') { 
                            $('<button type="button" style="padding: 0.5rem;"></button>').addClass('btn btn-sm btn-warning rounded-circle')
                            .on('dxclick', function (e) {
                            }).appendTo(container);
                        }
                    }
                },
                {
                    caption: "Comments",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Comments</div>"));
                    },
                    dataField: "fieldData.comments",
                    width: "200px",
                },
                {
                    caption: "Attachment",
                    width: "130px",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Attachment</div>"));
                    },
                    dataField: "fieldData.attachment",
                    alignment: "center",
                    cellTemplate: function (container, options) {
                        //console.log(options);
                        if(options.data.fieldData.attachment != "") {
                            $('<a class="btn btn-primary btn-sm" href="' + options.data.fieldData.attachment + '" download="' + options.data.fieldData.attachment_name + '" target="_blank")>Download</a>').addClass('').appendTo(container);
                        } else {
                            $('No file').addClass('').appendTo(container);
                        }
                    },
                },
            ],
            repaintChangesOnly: true,

            onCellPrepared: function (e) {

            },
            onContentReady: function (e) {
                $('#condition_desc').empty();
                $("#dataGrid-rc .dx-datagrid-pager").prepend('<div class="mt-2 mb-3" id="condition_desc"><button type="button" class="btn btn-sm btn-success rounded-circle mr-1" style="padding: 0.5rem;"></button> Ready/Completed<button type="button" class="btn btn-sm btn-warning rounded-circle mr-1 ml-2" style="padding: 0.5rem;"></button> Under preparation/On-going<button type="button" class="btn btn-sm btn-danger rounded-circle mr-1 ml-2" style="padding: 0.5rem;"></button> Not yet</div>');
            },
            onCellClick: function (e) {
                $('#condition_desc').empty();
                $("#dataGrid-rc .dx-datagrid-pager").prepend('<div class="mt-2 mb-3" id="condition_desc"><button type="button" class="btn btn-sm btn-success rounded-circle mr-1" style="padding: 0.5rem;"></button> Ready/Completed<button type="button" class="btn btn-sm btn-warning rounded-circle mr-1 ml-2" style="padding: 0.5rem;"></button> Under preparation/On-going<button type="button" class="btn btn-sm btn-danger rounded-circle mr-1 ml-2" style="padding: 0.5rem;"></button> Not yet</div>');
            },
            onInitialized: function (e) {
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


</script>