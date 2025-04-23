<div class="jumbotron jumbotron-header rounded-0 bg-secondary text-white">
    <div class="row">
        <div class="col-12">
            <h1 class="display-4">MANAGEMENT OF CHANGE</h1>
        </div>

    </div>
</div>
<div class="wrapper-form shadow">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 mb-4">
            <div class="card border-1">
                <div class="card-body" style="padding: 0;">
                    <div class="pie-chart-dashboard" id="moc-chart"></div>
                </div>
            </div>
        </div>
    </div>
    <div id="dataGrid-moc"></div>
    <div class="mt-2">
        <button type="button" class="btn btn-sm btn-danger rounded-circle mr-1" style="padding: 0.5rem;"></button> Overdue
        <button type="button" class="btn btn-sm btn-warning rounded-circle mr-1 ml-2" style="padding: 0.5rem;"></button> Pending Approval
        <button type="button" class="btn btn-sm btn-success-1 rounded-circle mr-1 ml-2" style="padding: 0.5rem;"></button> Active
        <button type="button" class="btn btn-sm btn-success rounded-circle mr-1 ml-2" style="padding: 0.5rem;"></button> Closed
    </div>
    <!-- <div id="dataGid_static"></div> -->
</div>

<script>
    var _token_dashboard = $.cookie("_token_dashboard");
    console.log("_token_dashboard: " + _token_dashboard);
    var dataArr_moc = "";
    var overdue = 0;
    var active = 0;
    var pending_approval = 0;
    var _closed = 0;
    
    get_data_moc();
    get_data_chart();
    $('.loader').hide();

    function get_data_moc() {
        $.ajax({
            type: "GET",
            url: "https://" + url_api + "/fmi/data/v2/databases/CPOC_AIMS/layouts/management_of_change_table/records?_limit=500",
            dataType: 'json',
            headers: {
                "Authorization": "Bearer " + $.cookie("_token_dashboard"),
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
                get_token_startup();
                get_data_moc();
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
                    width: "70px",
                    alignment: "center"
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
                    caption: "Title",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Title</div>"));
                    },
                    dataField: "fieldData.title",
                    width: "320px",
                },
                {
                    caption: "Nature of Change",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Nature of Change</div>"));
                    },
                    dataField: "fieldData.nature_of_change",
                    width: "100px",
                },
                {
                    caption: "Worksite",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Worksite</div>"));
                    },
                    dataField: "fieldData.worksite",
                    width: "100px",
                },
                {
                    caption: "Residual Risk Level",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Residual Risk Level</div>"));
                    },
                    dataField: "fieldData.residual_risk_level",
                    width: "100px",
                },
                {
                    caption: "Start Date",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Start Date</div>"));
                    },
                    dataField: "fieldData.start_date",
                    width: "130px",
                    dataType: 'date',  
                    format: 'd MMM yyyy',
                    sortOrder: 'desc',
                },        
                {
                    caption: "Expiry Date",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Expiry Date</div>"));
                    },
                    dataField: "fieldData.expiry_date",
                    width: "130px",
                    dataType: 'date',  
                    format: 'd MMM yyyy',
                    sortOrder: 'desc',
                },              
                {
                    caption: "Status",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Status</div>"));
                    },
                    dataField: "fieldData.status_final",
                    width: "100px",
                    alignment: "center",
                    cellTemplate: function (container, options) {
                        if(options.value == 'Active') {
                            $('<button type="button" style="padding: 0.5rem;"></button>').addClass('btn btn-sm btn-success-1 rounded-circle')
                            .on('dxclick', function (e) {
                            }).appendTo(container);
                        } else if(options.value == 'Overdue') { 
                            $('<button type="button" style="padding: 0.5rem;"></button>').addClass('btn btn-sm btn-danger rounded-circle')
                            .on('dxclick', function (e) {
                            }).appendTo(container);
                        } else if(options.value == 'Pending Approval') { 
                            $('<button type="button" style="padding: 0.5rem;"></button>').addClass('btn btn-sm btn-warning rounded-circle')
                            .on('dxclick', function (e) {
                            }).appendTo(container);
                        } else if(options.value == 'Closed') { 
                            $('<button type="button" style="padding: 0.5rem;"></button>').addClass('btn btn-sm btn-success rounded-circle')
                            .on('dxclick', function (e) {
                            }).appendTo(container);
                        }
                    }
                },
                // {
                //     caption: "Action",
                //     headerCellTemplate: function (container) {
                //         container.append($("<div>Action</div>"));
                //     },
                //     dataField: "fieldData.action",
                //     width: "320px",
                // },
                {
                    caption: "Remark",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Remark</div>"));
                    },
                    dataField: "fieldData.remark",
                    width: "320px",
                },
                {
                    caption: "Initiator",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Initiator</div>"));
                    },
                    dataField: "fieldData.initiator",
                    width: "100px",
                },
                {
                    caption: "MOC",
                    width: "110px",
                    headerCellTemplate: function (container) {
                        container.append($("<div>MOC</div>"));
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
                {
                    caption: "RA",
                    width: "110px",
                    headerCellTemplate: function (container) {
                        container.append($("<div>RA</div>"));
                    },
                    dataField: "fieldData.ra_attachment",
                    alignment: "center",
                    cellTemplate: function (container, options) {
                        console.log(options);
                        if(options.data.fieldData.ra_attachment != "") {
                            $('<a class="btn btn-primary btn-sm" href="' + options.data.fieldData.ra_attachment + '" download="' + options.data.fieldData.ra_attachment_name + '" target="_blank")>Download</a>').addClass('').appendTo(container);
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

    function get_data_chart() {
        $.ajax({
            type: "GET",
            url: "https://" + url_api + "/fmi/data/v2/databases/CPOC_AIMS/layouts/global_dashboard_moc/script/get_moc_chart",
            dataType: 'json',
            headers: {
                "Authorization": "Bearer " + $.cookie("_token_dashboard"),
                "Content-Type": "application/json"
            },
            async: false,
            success: function (data) {
                console.log(data.response.scriptResult);
                var val = data.response.scriptResult.split("|");
                console.log(val);
                overdue = parseInt(val[0]);
                active = parseInt(val[1]);
                pending_approval = parseInt(val[2]);
                _closed = parseInt(val[3]);
                console.log(overdue);
                console.log(active);
                console.log(pending_approval);
                console.log(_closed);
                gen_chart();
            },
            error: function (error) {
                console.log(error);
            }
        });
    }

    function gen_chart() {
        console.log("in");
        Highcharts.chart('moc-chart', {
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
                    name: 'Overdue',
                    color: "#c00000",
                    y: overdue,
                    y_number: overdue,
                }, {
                    name: 'Active',
                    color: "#66ff33",
                    y: active,
                    y_number: active,
                },{
                    name: 'Pending Approval',
                    color: "#ffff00",
                    y: pending_approval,
                    y_number: pending_approval,
                },{
                    name: 'Closed',
                    color: "#43a047",
                    y: _closed,
                    y_number: _closed,
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
</script>