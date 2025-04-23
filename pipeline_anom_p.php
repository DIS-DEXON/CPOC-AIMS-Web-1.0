<div class="jumbotron jumbotron-header rounded-0 bg-secondary text-white">
    <div class="row">
        <div class="col-12">
            <h1 class="display-4">PIPELINE ANOMALY</h1>
        </div>
    </div>
</div>
<div id="dashboard" class="row" style="margin-top: -70px;">

    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 mb-4">
        <div class="card shadow border-0">
            <div class="card-body">
                <h5 class="card-title mb-3">Remote Operating Vehicle Anomaly Due</h5>
                <div class="form-inline">
                    PLATFORM
                    <select id="platform-ddl-anom-rov" class="form-control mx-2">
                    </select>
                    START YEAR
                    <select id="sy-ddl-anom-rov" class="form-control mx-2">
                    </select>
                    END YEAR
                    <select id="ey-ddl-anom-rov" class="form-control mx-2">
                    </select>
                    <button type="button" class="btn btn-success" onclick="get_data_anom_rov()">SEARCH</button>
                </div>
                <div class="pie-chart-dashboard" id="pipeline-anom-rov-chart"></div>
            </div>
        </div>
    </div>

    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 mb-4">
        <div class="card shadow border-0">
            <div class="card-body">
                <h5 class="card-title mb-3">In-Line Inspection Anomaly Due</h5>
                <div class="form-inline">
                    PLATFORM
                    <select id="platform-ddl-anom-ili" class="form-control mx-2">
                    </select>
                    START YEAR
                    <select id="sy-ddl-anom-ili" class="form-control mx-2">
                    </select>
                    END YEAR
                    <select id="ey-ddl-anom-ili" class="form-control mx-2">
                    </select>
                    <button type="button" class="btn btn-success" onclick="get_data_anom_ili()">SEARCH</button>
                </div>
                <div class="pie-chart-dashboard" id="pipeline-anom-ili-chart"></div>
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
                <h5>PERMANENT RERAIR</h5>
                <div id="datagrid-anom-p-detail"></div>
                <hr>
                <h5>TEMPORARY RERAIR</h5>
                <div id="datagrid-anom-t-detail"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<script>

    var rov_year = "";
    var rov_p6 = "";
    var rov_p5 = "";
    var rov_p4 = "";
    var rov_p3 = "";
    var rov_p2 = "";
    var rov_p1 = "";

    var ili_year = "";
    var ili_p6 = "";
    var ili_p5 = "";
    var ili_p4 = "";
    var ili_p3 = "";
    var ili_p2 = "";
    var ili_p1 = "";

    var datenow = new Date();
    get_platform_ddl();
    get_year_ddl();
    get_data_anom_rov();
    get_data_anom_ili();
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
        
        $('#platform-ddl-anom-rov').html(options);
        $('#platform-ddl-anom-ili').html(options);
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

        var rov_year = data[0].fieldData.pipeline_rov_anomaly_year_all.split(",").map(Number);
        var options_sy_ddl_rov = "";
        var selected_sy_ddl_rov = "";
        var options_ey_ddl_rov = "";
        var selected_ey_ddl_rov = "";

        var check_current_year = $.inArray(datenow.getFullYear(), rov_year) > -1;
        console.log(check_current_year);
        var max_year = Math.max(...rov_year);
        console.log(max_year);

        for(var i = 0; i < rov_year.length; i++) {
            
            if(check_current_year == true) {
                if(rov_year[i] == datenow.getFullYear()) {
                    selected_sy_ddl_rov = "selected";
                }else{
                    selected_sy_ddl_rov = "";
                }
                if(rov_year[i] == max_year) {
                    selected_ey_ddl_rov = "selected";
                }else {
                    selected_ey_ddl_rov = "";
                }
            } else {
                if(i == 0) {
                    selected_sy_ddl_rov = "selected";
                }else if(i == rov_year.length - 1) {
                    selected_ey_ddl_rov = "selected";
                    selected_sy_ddl_rov = "";
                }else {
                    selected_sy_ddl_rov = "";
                    selected_ey_ddl_rov = "";
                }
            }
            var option_sy_ddl_rov = '<option value="' + rov_year[i] + '" ' + selected_sy_ddl_rov + '>' + rov_year[i] + '</option>';
            options_sy_ddl_rov = options_sy_ddl_rov + option_sy_ddl_rov;

            var option_ey_ddl_rov = '<option value="' + rov_year[i] + '" ' + selected_ey_ddl_rov + '>' + rov_year[i] + '</option>';
            options_ey_ddl_rov = options_ey_ddl_rov + option_ey_ddl_rov;
        }

        $('#sy-ddl-anom-rov').html(options_sy_ddl_rov);
        $('#ey-ddl-anom-rov').html(options_ey_ddl_rov);

        var ili_year = data[0].fieldData.pipeline_ili_anomaly_year_all.split(",").map(Number);
        var options_sy_ddl_ili = "";
        var selected_sy_ddl_ili = "";
        var options_ey_ddl_ili = "";
        var selected_ey_ddl_ili = "";

        var check_current_year = $.inArray(datenow.getFullYear(), ili_year) > -1;
        console.log(check_current_year);
        var max_year = Math.max(...ili_year);
        console.log(max_year);

        for(var i = 0; i < ili_year.length; i++) {
            
            if(check_current_year == true) {
                if(ili_year[i] == datenow.getFullYear()) {
                    selected_sy_ddl_ili = "selected";
                }else{
                    selected_sy_ddl_ili = "";
                }
                if(ili_year[i] == max_year) {
                    selected_ey_ddl_ili = "selected";
                }else {
                    selected_ey_ddl_ili = "";
                }
            } else {
                if(i == 0) {
                    selected_sy_ddl_ili = "selected";
                }else if(i == ili_year.length - 1) {
                    selected_ey_ddl_ili = "selected";
                    selected_sy_ddl_ili = "";
                }else {
                    selected_sy_ddl_ili = "";
                    selected_ey_ddl_ili = "";
                }
            }
            var option_sy_ddl_ili = '<option value="' + ili_year[i] + '" ' + selected_sy_ddl_ili + '>' + ili_year[i] + '</option>';
            options_sy_ddl_ili = options_sy_ddl_ili + option_sy_ddl_ili;

            var option_ey_ddl_ili = '<option value="' + ili_year[i] + '" ' + selected_ey_ddl_ili + '>' + ili_year[i] + '</option>';
            options_ey_ddl_ili = options_ey_ddl_ili + option_ey_ddl_ili;
        }

        $('#sy-ddl-anom-ili').html(options_sy_ddl_ili);
        $('#ey-ddl-anom-ili').html(options_ey_ddl_ili);
    }

    function get_data_anom_rov() {
        var platform = $('#platform-ddl-anom-rov').val();
        var start_year = $('#sy-ddl-anom-rov').val();
        var end_year = $('#ey-ddl-anom-rov').val();
        var param = 'rov_p,' + platform + ',' + start_year + ',' + end_year;
        $.ajax({
            type: "GET",
            url: "https://" + url_api + "/fmi/data/v2/databases/CPOC_AIMS/layouts/dashboard_pipeline/script/get_pipeline_anomaly?script.param=" + param,
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
                rov_p6 = val[1].split(",");
                rov_p5 = val[2].split(",");
                rov_p4 = val[3].split(",");
                rov_p3 = val[4].split(",");
                rov_p2 = val[5].split(",");
                rov_p1 = val[6].split(",");
                console.log(rov_year);
                console.log(rov_p6);
                console.log(rov_p5);
                console.log(rov_p4);
                console.log(rov_p3);
                console.log(rov_p2);
                console.log(rov_p1);
                gen_chart_anom_rov();
            },
            error: function (error) {
                console.log(error);
                get_token_startup();
                get_data_anom_rov();
            }
        });
    }

    function gen_chart_anom_rov() {
        Highcharts.chart('pipeline-anom-rov-chart', {
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
                    text: 'Number of pending anomalies',
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
                name: 'P1',
                color: "#FF0000",
                data: rov_p1.map(Number)
            }, {
                name: 'P2',
                color: "#F69546",
                data: rov_p2.map(Number)
            }, {
                name: 'P3',
                color: "#FFCC00",
                data: rov_p3.map(Number)
            }, {
                name: 'P4',
                color: "#FFFF00",
                data: rov_p4.map(Number)
            }, {
                name: 'P5',
                color: "#66FF33",
                data: rov_p5.map(Number)
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
        console.log(e.point.category);
        console.log(e.point.series.name);
        const platform = '';
        const year = e.point.category;
        const risk = e.point.series.name;
        const param = "pipeline,rov_p," + platform + "," + year + "," + risk;
        console.log(param);
        $.ajax({
            type: "GET",
            url: "https://" + url_api + "/fmi/data/v2/databases/CPOC_AIMS/layouts/executive_summary/script/get_anomaly_line_list_i?script.param=" + param,
            dataType: 'json',
            headers: {
                "Authorization": "Bearer " + $.cookie("_token_dashboard"),
                "Content-Type": "application/json"
            },
            async: false,
            success: function (data) {
                console.log(data);
                const dt = data.response.scriptResult.split("||||");
                console.log(dt[0]);
                console.log(dt[1]);
                const dt_t = JSON.parse(dt[0]);
                const dt_p = JSON.parse(dt[1]);
                console.log(dt_t);
                console.log(dt_p);
                gen_datagrid_detail(dt_p, dt_t, 'REMOTE OPERATING VEHICLE ANOMALY DUE', 'vt');
            },
            error: function (error) {
                console.log(error);
                get_token_startup();
                show_detail_rov(e);
            }
        });
    }

    function get_data_anom_ili() {
        var platform = $('#platform-ddl-anom-ili').val();
        var start_year = $('#sy-ddl-anom-ili').val();
        var end_year = $('#ey-ddl-anom-ili').val();
        var param = 'ili_p,' + platform + ',' + start_year + ',' + end_year;
        $.ajax({
            type: "GET",
            url: "https://" + url_api + "/fmi/data/v2/databases/CPOC_AIMS/layouts/dashboard_pipeline/script/get_pipeline_anomaly?script.param=" + param,
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
                ili_p6 = val[1].split(",");
                ili_p5 = val[2].split(",");
                ili_p4 = val[3].split(",");
                ili_p3 = val[4].split(",");
                ili_p2 = val[5].split(",");
                ili_p1 = val[6].split(",");
                console.log(ili_year);
                console.log(ili_p6);
                console.log(ili_p5);
                console.log(ili_p4);
                console.log(ili_p3);
                console.log(ili_p2);
                console.log(ili_p1);
                gen_chart_anom_ili();
            },
            error: function (error) {
                console.log(error);
                get_token_startup();
                get_data_anom_ili();
            }
        });
    }

    function gen_chart_anom_ili() {
        Highcharts.chart('pipeline-anom-ili-chart', {
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
                    text: 'Number of pending anomalies',
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
                            show_detail_ili(event);
                        }
                    }
                }
            },
            series: [{
                name: 'P1',
                color: "#FF0000",
                data: ili_p1.map(Number)
            }, {
                name: 'P2',
                color: "#F69546",
                data: ili_p2.map(Number)
            }, {
                name: 'P3',
                color: "#FFCC00",
                data: ili_p3.map(Number)
            }, {
                name: 'P4',
                color: "#FFFF00",
                data: ili_p4.map(Number)
            }, {
                name: 'P5',
                color: "#66FF33",
                data: ili_p5.map(Number)
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
        console.log(e.point.category);
        console.log(e.point.series.name);
        const platform = '';
        const year = e.point.category;
        const risk = e.point.series.name;
        const param = "pipeline,ili_p," + platform + "," + year + "," + risk;
        console.log(param);
        $.ajax({
            type: "GET",
            url: "https://" + url_api + "/fmi/data/v2/databases/CPOC_AIMS/layouts/executive_summary/script/get_anomaly_line_list_i?script.param=" + param,
            dataType: 'json',
            headers: {
                "Authorization": "Bearer " + $.cookie("_token_dashboard"),
                "Content-Type": "application/json"
            },
            async: false,
            success: function (data) {
                console.log(data);
                const dt = data.response.scriptResult.split("||||");
                console.log(dt[0]);
                console.log(dt[1]);
                const dt_t = JSON.parse(dt[0]);
                const dt_p = JSON.parse(dt[1]);
                console.log(dt_t);
                console.log(dt_p);
                gen_datagrid_detail(dt_p, dt_t, 'IN-LINE INSPECTION ANOMALY DUE', 'thk');
            },
            error: function (error) {
                console.log(error);
                get_token_startup();
                show_detail_ili(e);
            }
        });
    }

    function gen_datagrid_detail(dt_p, dt_t, header, type) {
        $('#anom_detail_modal').modal('show');
        $('.anom-name').html(header);
        const dataGrid_p = $("#datagrid-anom-p-detail").dxDataGrid({
                    dataSource: dt_p,
                    keyExpr: "id",
                    paging: {
                        pageSize: 5
                    },
                    pager: {
                        showPageSizeSelector: true,
                        allowedPageSizes: [5, 10, 25],
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
                            caption: "Tag Number",
                            alignment: "left",
                            headerCellTemplate: function (container) {
                                container.append($("<div>Tag Number</div>"));
                            },
                            dataField: "tag_no",
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
                            caption: "File",
                            width: "110px",
                            headerCellTemplate: function (container) {
                                container.append($("<div>File</div>"));
                            },
                            dataField: "id",
                            alignment: "center",
                            cellTemplate: function (container, options) {
                                //console.log(options.key);
                                let f_path = '';
                                let f_name = '';
                                $.ajax({
                                    type: "POST",
                                    url: "https://" + url_api + "/fmi/data/v2/databases/CPOC_AIMS/layouts/pipeline_riser_info_api/_find",
                                    dataType: 'json',
                                    headers: {
                                        "Authorization": "Bearer " + $.cookie("_token_dashboard"),
                                        "Content-Type": "application/json"
                                    },
                                    data: JSON.stringify({
                                            "query": [
                                                {
                                                    "id_tag": "==" + options.key
                                                }
                                            ],
                                            "limit" : 1,
                                        }),
                                    async: false,
                                    success: function (data) {
                                        console.log(data);
                                        if(type == 'vt') {
                                            f_path = data.response.data[0].fieldData["pipeline_inspection_doc_p_vt::file"];
                                            f_name = data.response.data[0].fieldData.pipeline_anomaly_vt_permanent_file_related;
                                        } else {
                                            f_path = data.response.data[0].fieldData["pipeline_inspection_doc_p_thk::file"];
                                            f_name = data.response.data[0].fieldData.pipeline_anomaly_thk_permanent_file_related;
                                        }
                                    },
                                    error: function (error) {
                                        console.log(error);
                                        get_token_startup();
                                        gen_datagrid_detail(dt_p, dt_t, header, type)
                                    }
                                });
                                if(f_path != "") {
                                    $('<a class="btn btn-primary btn-sm" href="' + f_path + '" download="' + f_name + '" target="_blank")>Download</a>').addClass('').appendTo(container);
                                } else {
                                    $('No file').addClass('').appendTo(container);
                                }
                            },
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

            const dataGrid_t = $("#datagrid-anom-t-detail").dxDataGrid({
                    dataSource: dt_t,
                    keyExpr: "id",
                    paging: {
                        pageSize: 5
                    },
                    pager: {
                        showPageSizeSelector: true,
                        allowedPageSizes: [5, 10, 25],
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
                            caption: "Tag Number",
                            alignment: "left",
                            headerCellTemplate: function (container) {
                                container.append($("<div>Tag Number</div>"));
                            },
                            dataField: "tag_no",
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
                            caption: "File",
                            width: "110px",
                            headerCellTemplate: function (container) {
                                container.append($("<div>File</div>"));
                            },
                            dataField: "id",
                            alignment: "center",
                            cellTemplate: function (container, options) {
                                //console.log(options.key);
                                let f_path = '';
                                let f_name = '';
                                $.ajax({
                                    type: "POST",
                                    url: "https://" + url_api + "/fmi/data/v2/databases/CPOC_AIMS/layouts/pipeline_riser_info_api/_find",
                                    dataType: 'json',
                                    headers: {
                                        "Authorization": "Bearer " + $.cookie("_token_dashboard"),
                                        "Content-Type": "application/json"
                                    },
                                    data: JSON.stringify({
                                            "query": [
                                                {
                                                    "id_tag": "==" + options.key
                                                }
                                            ],
                                            "limit" : 1,
                                        }),
                                    async: false,
                                    success: function (data) {
                                        console.log(data);
                                        if(type == 'vt') {
                                            f_path = data.response.data[0].fieldData["pipeline_inspection_doc_t_vt::file"];
                                            f_name = data.response.data[0].fieldData.pipeline_anomaly_vt_temporary_file_related;
                                        } else {
                                            f_path = data.response.data[0].fieldData["pipeline_inspection_doc_t_thk::file"];
                                            f_name = data.response.data[0].fieldData.pipeline_anomaly_thk_temporary_file_related;
                                        }
                                    },
                                    error: function (error) {
                                        console.log(error);
                                        get_token_startup();
                                        gen_datagrid_detail(dt_p, dt_t, header, type)
                                    }
                                });
                                if(f_path != "") {
                                    $('<a class="btn btn-primary btn-sm" href="' + f_path + '" download="' + f_name + '" target="_blank")>Download</a>').addClass('').appendTo(container);
                                } else {
                                    $('No file').addClass('').appendTo(container);
                                }
                            },
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