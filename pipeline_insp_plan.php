<div class="jumbotron jumbotron-header rounded-0 bg-secondary text-white">
    <div class="row">
        <div class="col-12">
            <h1 class="display-4">PIPELINE INSPECTION PLAN</h1>
        </div>
    </div>
</div>
<div id="dashboard" class="row" style="margin-top: -70px;">
    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 mb-4">
        <div class="card shadow border-0">
            <div class="card-body">
                <h5 class="card-title mb-3">In-Line Inspection Due</h5>
                <div class="form-inline">
                    <!-- PLATFORM
                    <select id="platform-ddl-ili" class="form-control mx-2">
                    </select> -->
                    START YEAR
                    <select id="sy-ddl-ili" class="form-control mx-2">
                    </select>
                    END YEAR
                    <select id="ey-ddl-ili" class="form-control mx-2">
                    </select>
                    <button type="button" class="btn btn-success" onclick="get_data_ili()">SEARCH</button>
                </div>
                <div class="pie-chart-dashboard" id="pipeline-ili-insp-plan-chart"></div>
            </div>
        </div>
    </div>
    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 mb-4">
        <div class="card shadow border-0">
            <div class="card-body">
                <h5 class="card-title mb-3">Remote Operating Vehicle Inspection Due</h5>
                <div class="form-inline">
                    <!-- PLATFORM
                    <select id="platform-ddl-rov" class="form-control mx-2">
                    </select> -->
                    START YEAR
                    <select id="sy-ddl-rov" class="form-control mx-2">
                    </select>
                    END YEAR
                    <select id="ey-ddl-rov" class="form-control mx-2">
                    </select>
                    <button type="button" class="btn btn-success" onclick="get_data_rov()">SEARCH</button>
                </div>
                <div class="pie-chart-dashboard" id="pipeline-rov-insp-plan-chart"></div>
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
    var ili_year = "";
    var ili_very_high = "";
    var ili_high = "";
    var ili_alarp = "";
    var ili_low = "";
    var rov_year = "";
    var rov_very_higth = "";
    var rov_high = "";
    var rov_alarp = "";
    var rov_low = "";
    // get_platform_ddl();
    get_year_ddl();
    get_data_ili();
    get_data_rov();
    $('.loader').hide();

    function get_platform_ddl() {
        $.ajax({
            type: "GET",
            url: "https://" + url_api + "/fmi/data/v2/databases/CPOC_AIMS/layouts/platform_ddl/records?_limit=50",
            dataType: 'json',
            headers: {
                "Authorization": "Bearer " + $.cookie("_token_dashboard"),
                "Content-Type": "application/json"
            },
            async: false,
            success: function (data) {
                console.log(data.response.data);
                create_platform_ddl(data.response.data);
            },
            error: function (error) {
                console.log(error);
                get_token_startup();
                get_platform_ddl();
            }
        });
    }

    function create_platform_ddl(data) {
        var options = "";
        for(var i = 0; i < data.length; i++) {
            var option = '<option value="' + data[i].fieldData.codename + '">' + data[i].fieldData.codename + '</option>';
            options = options + option;
        }
        
        $('#platform-ddl-ili').html(options);
        $('#platform-ddl-rov').html(options);
    }

    function get_year_ddl() {
        $.ajax({
            type: "GET",
            url: "https://" + url_api + "/fmi/data/v2/databases/CPOC_AIMS/layouts/dashboard_pipeline/records?_limit=1",
            dataType: 'json',
            headers: {
                "Authorization": "Bearer " + $.cookie("_token_dashboard"),
                "Content-Type": "application/json"
            },
            async: false,
            success: function (data) {
                console.log(data.response.data);
                create_year_ddl(data.response.data);
            },
            error: function (error) {
                console.log(error);
                get_token_startup();
                get_year_ddl();
            }
        });
    }

    function create_year_ddl(data) {

        var ili_year = data[0].fieldData.pipeline_ili_insp_status_year_all.split(",");
        var options_sy_ddl_ili = "";
        var selected_sy_ddl_ili = "";
        var options_ey_ddl_ili = "";
        var selected_ey_ddl_ili = "";

        for(var i = 0; i < ili_year.length; i++) {
            // console.log(ili_year[i]);
            if(i == 0) {
                selected_sy_ddl_ili = "selected";
            }else if(i == ili_year.length - 1) {
                selected_ey_ddl_ili = "selected";
                selected_sy_ddl_ili = "";
            }else {
                selected_sy_ddl_ili = "";
                selected_ey_ddl_ili = "";
            }

            var option_sy_ddl_ili = '<option value="' + ili_year[i] + '" ' + selected_sy_ddl_ili + '>' + ili_year[i] + '</option>';
            options_sy_ddl_ili = options_sy_ddl_ili + option_sy_ddl_ili;

            var option_ey_ddl_ili = '<option value="' + ili_year[i] + '" ' + selected_ey_ddl_ili + '>' + ili_year[i] + '</option>';
            options_ey_ddl_ili = options_ey_ddl_ili + option_ey_ddl_ili;
        }

        $('#sy-ddl-ili').html(options_sy_ddl_ili);
        $('#ey-ddl-ili').html(options_ey_ddl_ili);

        var rov_year = data[0].fieldData.pipeline_rov_insp_status_year_all.split(",");
        var options_sy_ddl_rov = "";
        var selected_sy_ddl_rov = "";
        var options_ey_ddl_rov = "";
        var selected_ey_ddl_rov = "";

        for(var i = 0; i < rov_year.length; i++) {
            // console.log(nde_year[i]);
            if(i == 0) {
                selected_sy_ddl_rov = "selected";
            }else if(i == rov_year.length - 1) {
                selected_ey_ddl_rov = "selected";
                selected_sy_ddl_rov = "";
            }else {
                selected_sy_ddl_rov = "";
                selected_ey_ddl_rov = "";
            }
            var option_sy_ddl_rov = '<option value="' + rov_year[i] + '" ' + selected_sy_ddl_rov + '>' + rov_year[i] + '</option>';
            options_sy_ddl_rov = options_sy_ddl_rov + option_sy_ddl_rov;

            var option_ey_ddl_rov = '<option value="' + rov_year[i] + '" ' + selected_ey_ddl_rov + '>' + rov_year[i] + '</option>';
            options_ey_ddl_rov = options_ey_ddl_rov + option_ey_ddl_rov;
        }

        $('#sy-ddl-rov').html(options_sy_ddl_rov);
        $('#ey-ddl-rov').html(options_ey_ddl_rov);

    }

    function get_data_ili() {
        var platform = $('#platform-ddl-ili').val();
        var start_year = $('#sy-ddl-ili').val();
        var end_year = $('#ey-ddl-ili').val();
        var param = 'ili,' + platform + ',' + start_year + ',' + end_year;
        $.ajax({
            type: "GET",
            url: "https://" + url_api + "/fmi/data/v2/databases/CPOC_AIMS/layouts/dashboard_pipeline/script/get_pipeline_inspection_plan?script.param=" + param,
            dataType: 'json',
            headers: {
                "Authorization": "Bearer " + $.cookie("_token_dashboard"),
                "Content-Type": "application/json"
            },
            async: false,
            success: function (data) {
                console.log(data.response.scriptResult);
                var val = data.response.scriptResult.split("|");
                ili_year = val[0].split(",");
                ili_low = val[1].split(",");
                ili_alarp = val[2].split(",");
                ili_high = val[3].split(",");
                ili_very_high = val[4].split(",");
                console.log(ili_year);
                console.log(ili_low);
                console.log(ili_alarp);
                console.log(ili_high);
                gen_chart_ili();
            },
            error: function (error) {
                console.log(error);
                get_token_startup();
                get_data_ili();
            }
        });
    }

    function gen_chart_ili() {
        Highcharts.setOptions({
            lang: {
                decimalPoint: '.',
                thousandsSep: ','
            }
        });
        Highcharts.chart('pipeline-ili-insp-plan-chart', {
            chart: {
                type: 'column'
            },
            title: {
                text: ''
            },
            xAxis: {
                categories: ili_year.map(Number)
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Number of pending inspection task',
                    style: {
                        fontSize: '14px',
                        color: '#000'
                    }
                },
                stackLabels: {
                    enabled: true,
                    style: {
                        fontWeight: 'bold',
                        color: ( // theme
                        Highcharts.defaultOptions.title.style &&
                        Highcharts.defaultOptions.title.style.color
                        ) || 'gray'
                    }
                }
            },
            legend: {
                align: 'center',
                // x: -30,
                verticalAlign: 'bottom',
                // y: 25,
                // floating: true,
                backgroundColor: Highcharts.defaultOptions.legend.backgroundColor || 'white',
                borderColor: '#CCC',
                borderWidth: 1,
                shadow: false
            },
            tooltip: {
                headerFormat: '<b>{point.x}</b><br/>',
                pointFormat: '{series.name}: {point.y}<br/>Total: {point.stackTotal}'
            },
            plotOptions: {
                column: {
                    stacking: 'normal',
                    dataLabels: {
                        enabled: true
                    }
                },
                series: {
                    events: {
                        click: function (event) {
                            show_detail_ili(event);
                        }
                    }
                }
            },
            series: [{
                name: 'Very High',
                color: "#FF0000",
                data: ili_very_high.map(Number)
            },{
                name: 'High',
                color: "#FD9A00",
                data: ili_high.map(Number)
            }, {
                name: 'Medium',
                color: "#FFFF00",
                data: ili_alarp.map(Number)
            }, {
                name: 'Low',
                color: "#00AF50",
                data: ili_low.map(Number)
            }],
            credits: {
                enabled: false
            },
            exporting: {
                enabled: false
            }
        });
    }

    function show_detail_ili(e) {
        console.log(e);
        console.log($('#platform-ddl-ili').val());
        console.log(e.point.category);
        console.log(e.point.series.name);
        const platform = $('#platform-ddl-ili').val();
        const year = e.point.category;
        const risk = e.point.series.name;
        const param = "pipeline,ili," + platform + "," + year + "," + risk;
        console.log(param);
        $.ajax({
            type: "GET",
            url: "https://" + url_api + "/fmi/data/v2/databases/CPOC_AIMS/layouts/executive_summary/script/get_inspection_line_list_i?script.param=" + param,
            dataType: 'json',
            headers: {
                "Authorization": "Bearer " + $.cookie("_token_dashboard"),
                "Content-Type": "application/json"
            },
            async: false,
            success: function (data) {
                console.log(JSON.parse(data.response.scriptResult));
                gen_datagrid_detail(JSON.parse(data.response.scriptResult), 'IN-LINE INSPECTION DUE')
            },
            error: function (error) {
                console.log(error);
                get_token_startup();
                show_detail_ili(e);
            }
        });
    }


    function get_data_rov() {
        var platform = $('#platform-ddl-rov').val();
        var start_year = $('#sy-ddl-rov').val();
        var end_year = $('#ey-ddl-rov').val();
        var param = 'rov,' + platform + ',' + start_year + ',' + end_year;
        $.ajax({
            type: "GET",
            url: "https://" + url_api + "/fmi/data/v2/databases/CPOC_AIMS/layouts/dashboard_pipeline/script/get_pipeline_inspection_plan?script.param=" + param,
            dataType: 'json',
            headers: {
                "Authorization": "Bearer " + $.cookie("_token_dashboard"),
                "Content-Type": "application/json"
            },
            async: false,
            success: function (data) {
                console.log(data.response.scriptResult);
                var val = data.response.scriptResult.split("|");
                rov_year = val[0].split(",");
                rov_low = val[1].split(",");
                rov_alarp = val[2].split(",");
                rov_high = val[3].split(",");
                rov_very_high = val[4].split(",");
                console.log(rov_year);
                console.log(rov_low);
                console.log(rov_alarp);
                console.log(rov_high);
                gen_chart_rov();
            },
            error: function (error) {
                console.log(error);
                get_token_startup();
                get_data_rov();
            }
        });
    }

    function gen_chart_rov() {
        Highcharts.setOptions({
            lang: {
                decimalPoint: '.',
                thousandsSep: ','
            }
        });
        Highcharts.chart('pipeline-rov-insp-plan-chart', {
            chart: {
                type: 'column'
            },
            title: {
                text: ''
            },
            xAxis: {
                categories: rov_year.map(Number)
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Number of pending inspection task',
                    style: {
                        fontSize: '14px',
                        color: '#000'
                    }
                },
                stackLabels: {
                    enabled: true,
                    style: {
                        fontWeight: 'bold',
                        color: ( // theme
                        Highcharts.defaultOptions.title.style &&
                        Highcharts.defaultOptions.title.style.color
                        ) || 'gray'
                    }
                }
            },
            legend: {
                align: 'center',
                //x: -30,
                verticalAlign: 'bottom',
                // y: 25,
                // floating: true,
                backgroundColor:
                Highcharts.defaultOptions.legend.backgroundColor || 'white',
                borderColor: '#CCC',
                borderWidth: 1,
                shadow: false
            },
            tooltip: {
                headerFormat: '<b>{point.x}</b><br/>',
                pointFormat: '{series.name}: {point.y}<br/>Total: {point.stackTotal}'
            },
            plotOptions: {
                column: {
                    stacking: 'normal',
                    dataLabels: {
                        enabled: true
                    }
                },
                series: {
                    events: {
                        click: function (event) {
                            show_detail_rov(event);
                        }
                    }
                }
            },
            series: [{
                name: 'Very High',
                color: "#FF0000",
                data: rov_high.map(Number)
            },{
                name: 'High',
                color: "#FD9A00",
                data: rov_high.map(Number)
            }, {
                name: 'Medium',
                color: "#FFFF00",
                data: rov_alarp.map(Number)
            }, {
                name: 'Low',
                color: "#00AF50",
                data: rov_low.map(Number)
            }],
            credits: {
                enabled: false
            },
            exporting: {
                enabled: false
            }
        });
    }

    function show_detail_rov(e) {
        console.log(e);
        console.log($('#platform-ddl-rov').val());
        console.log(e.point.category);
        console.log(e.point.series.name);
        const platform = $('#platform-ddl-rov').val();
        const year = e.point.category;
        const risk = e.point.series.name;
        const param = "pipeline,rov," + platform + "," + year + "," + risk;
        console.log(param);
        $.ajax({
            type: "GET",
            url: "https://" + url_api + "/fmi/data/v2/databases/CPOC_AIMS/layouts/executive_summary/script/get_inspection_line_list_i?script.param=" + param,
            dataType: 'json',
            headers: {
                "Authorization": "Bearer " + $.cookie("_token_dashboard"),
                "Content-Type": "application/json"
            },
            async: false,
            success: function (data) {
                console.log(JSON.parse(data.response.scriptResult));
                gen_datagrid_detail(JSON.parse(data.response.scriptResult), 'REMOTE OPERATING VEHICLE INSPECTION DUE')
            },
            error: function (error) {
                console.log(error);
                get_token_startup();
                show_detail_rov(e);
            }
        });
    }

    
    function gen_datagrid_detail(dt, header) {
        $('#insp_detail_modal').modal('show');
        $('.insp-name').html(header);
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
                    wordWrapEnabled: true,
                    columns: [ 
                        {
                            caption: "Pipeline Number",
                            alignment: "left",
                            headerCellTemplate: function (container) {
                                container.append($("<div>Pipeline Number</div>"));
                            },
                            dataField: "tag_no",
                        }, 
                        {
                            caption: "Risk Ranking",
                            alignment: "center",
                            headerCellTemplate: function (container) {
                                container.append($("<div>Risk<br>Ranking</div>"));
                            },
                            dataField: "risk_ranking",
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
                            caption: "Remark",
                            alignment: "left",
                            headerCellTemplate: function (container) {
                                container.append($("<div>Remark</div>"));
                            },
                            dataField: "remark",
                        }, 
                    ],
                    repaintChangesOnly: true,
                    onCellPrepared: function (e) {
                        //Change background color

                        if (e.rowType === "data" && e.column.dataField === "integrity_status") {
                            e.cellElement.css("background-color", e.data.integrity_status == "P1" ? "#FF0000" : e.data.integrity_status == "P2" ? "#F69546" : e.data.integrity_status == "P3" ? "#FFCC00" : e.data.integrity_status == "P4" ? "#FFFF00" : e.data.integrity_status == "P5" ? "#66FF33" : e.data.integrity_status == "P6" ? "#43a047" : "");
                        }

                        if (e.rowType === "data" && e.column.dataField === "risk_ranking") {
                            e.cellElement.css("background-color", e.data.risk_ranking == "LOW" ? "#66FF33" : e.data.risk_ranking == "MEDIUM" ? "#FFFF00" : e.data.risk_ranking == "HIGH" ? "#FD9A00" : e.data.risk_ranking == "VERY HIGH" ? "#FF0000" : "");
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
</script>