<div class="jumbotron jumbotron-header rounded-0 bg-secondary text-white">
    <div class="row">
        <div class="col-12">
            <h1 class="display-4">TEMPORARY REPAIR</h1>
        </div>

    </div>
</div>
<div class="wrapper-form shadow">
    <div id="dataGrid-tempo"></div>
    <!-- <div id="dataGid_static"></div> -->
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 mb-4">
            <div class="card shadow border-0">
                <div class="card-body">
                    <div class="pie-chart-dashboard" id="tempo-chart"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    var _token_dashboard = $.cookie("_token_dashboard");
    console.log("_token_dashboard: " + _token_dashboard);
    var dataArr_tempo = "";
    var platform_all = "";
    var already = "";
    var active = "";
    var pending_appr = "";
    var pending_moc = "";
    var overdue = "";

    get_data_tempo();
    get_data_chart();
    $('.loader').hide();

    function get_data_tempo() {
        $.ajax({
            type: "GET",
            url: "https://" + url_api + "/fmi/data/v2/databases/CPOC_AIMS/layouts/temporary_repair_summary_table/records?_limit=500",
            dataType: 'json',
            headers: {
                "Authorization": "Bearer " + $.cookie("_token_dashboard"),
                "Content-Type": "application/json"
            },
            async: false,
            success: function (data) {
                console.log(data);
                dataArr_tempo = data;
                create_table_tempo(dataArr_tempo.response.data);
            },
            error: function (error) {
                console.log(error);
                get_token_startup();
                get_data_tempo();
            }
        })
    }

    function create_table_tempo(data) {
        const dataGrid = $("#dataGrid-tempo").dxDataGrid({
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
                    caption: "Title",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Title</div>"));
                    },
                    dataField: "fieldData.title",
                    width: "180px",
                },
                {
                    caption: "Tag Number",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Tag Number</div>"));
                    },
                    dataField: "fieldData.tag_no",
                    width: "150px",
                },
                {
                    caption: "Asset Type",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Asset Type</div>"));
                    },
                    dataField: "fieldData.asset_type",
                    width: "100px",
                },
                {
                    caption: "Risk Ranking",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Risk Ranking</div>"));
                    },
                    dataField: "fieldData.risk_ranking",
                    width: "100px",
                    alignment: "center"
                },
                {
                    caption: "Description",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Description</div>"));
                    },
                    dataField: "fieldData.description",
                    width: "320px",
                },
                {
                    caption: "Platform",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Platform</div>"));
                    },
                    dataField: "fieldData.platform",
                    width: "100px",
                    alignment: "center"
                },
                {
                    caption: "MOC Number",
                    headerCellTemplate: function (container) {
                        container.append($("<div>MOC Number</div>"));
                    },
                    dataField: "fieldData.moc_no",
                    width: "130px",
                },
                {
                    caption: "Tempo Repair Installation Date",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Tempo Repair Installation Date</div>"));
                    },
                    dataField: "fieldData.moc_start_date",
                    width: "130px",
                    dataType: 'date',  
                    format: 'd MMM yyyy',
                },  
                {
                    caption: "Tempo Repair Expiry Date",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Tempo Repair Expiry Date</div>"));
                    },
                    dataField: "fieldData.moc_expiry_date",
                    width: "130px",
                    dataType: 'date',  
                    format: 'd MMM yyyy',
                },              
                {
                    caption: "Status",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Status</div>"));
                    },
                    dataField: "fieldData.status",
                    width: "100px",
                    alignment: "center"
                },
                {
                    caption: "MOC",
                    width: "110px",
                    headerCellTemplate: function (container) {
                        container.append($("<div>MOC</div>"));
                    },
                    dataField: "fieldData.management_of_change_for_tempo_table::attachment",
                    alignment: "center",
                    cellTemplate: function (container, options) {
                        console.log(options);
                        if(options.value != "") {
                            $('<a class="btn btn-primary btn-sm" href="' + options.data.fieldData['management_of_change_for_tempo_table::attachment'] + '" download="' + options.data.fieldData['management_of_change_for_tempo_table::attachment_name'] + '" target="_blank")>Download</a>').addClass('').appendTo(container);
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
                    dataField: "fieldData.management_of_change_for_tempo_table::ra_attachment",
                    alignment: "center",
                    cellTemplate: function (container, options) {
                        console.log(options);
                        if(options.value != "") {
                            $('<a class="btn btn-primary btn-sm" href="' + options.data.fieldData['management_of_change_for_tempo_table::ra_attachment'] + '" download="' + options.data.fieldData['management_of_change_for_tempo_table::ra_attachment_name'] + '" target="_blank")>Download</a>').addClass('').appendTo(container);
                        } else {
                            $('No file').addClass('').appendTo(container);
                        }
                    },
                },
            ],
            repaintChangesOnly: true,
            onCellPrepared: function (e) {
                if (e.rowType === "data" && e.column.dataField === "fieldData.risk_ranking") {
                    e.cellElement.css("background-color", e.data.fieldData.risk_ranking == "LOW" ? "#66FF33" : e.data.fieldData.risk_ranking == "ALARP" ? "#FFCC00" : e.data.fieldData.risk_ranking == "HIGH" ? "#FF0000" : "");
                }

                if (e.rowType === "data" && e.column.dataField === "fieldData.status") {
                    e.cellElement.css("background-color", e.data.fieldData.status == "Active" ? "#66FF33" : e.data.fieldData.status == "Pending Approval" ? "#FFFF00" : e.data.fieldData.status == "Pending MOC" ? "#CCCCCC" : e.data.fieldData.status == "Overdue" ? "#C00000" : e.data.fieldData.status == "Closed" ? "#43A047" : "");
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

    function get_data_chart() {
        $.ajax({
            type: "GET",
            url: "https://" + url_api + "/fmi/data/v2/databases/CPOC_AIMS/layouts/global_dashboard_tempo/script/get_tempo_chart",
            dataType: 'json',
            headers: {
                "Authorization": "Bearer " + $.cookie("_token_dashboard"),
                "Content-Type": "application/json"
            },
            async: false,
            success: function (data) {
                console.log(data.response.scriptResult);
                var val = data.response.scriptResult.split("|");
                platform_all = val[0].split(",");
                already = val[1].split(",");
                active = val[2].split(",");
                pending_appr = val[3].split(",");
                pending_moc = val[4].split(",");
                overdue = val[5].split(",");
                console.log(platform_all);
                console.log(already);
                console.log(active);
                console.log(pending_appr);
                console.log(pending_moc);
                console.log(overdue);
                gen_chart();
            },
            error: function (error) {
                console.log(error);
            }
        });
    }

    function gen_chart() {
        Highcharts.chart('tempo-chart', {
            chart: {
                type: 'column'
            },
            title: {
                text: 'Temporary Repair Chart'
            },
            subtitle: {
                text: ''
            },
            xAxis: {
                categories: platform_all,
                crosshair: true
            },
            yAxis: {
                min: 0,
                title: {
                text: 'Total'
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
                name: 'Already permanently repaired',
                data: already.map(Number),
                color: "#43A047"

            }, {
                name: 'Active',
                data: active.map(Number),
                color: "#66FF33"

            }, {
                name: 'Pending Approval',
                data: pending_appr.map(Number),
                color: "#FFFF00"

            }, {
                name: 'Pending MOC',
                data: pending_moc.map(Number),
                color: "#CCC"

            }, {
                name: 'Overdue',
                data: overdue.map(Number),
                color: "#C00000"

            }]
        });
    }
</script>