<div class="jumbotron jumbotron-header rounded-0 bg-secondary text-white">
    <div class="row">
        <div class="col-12">
            <h1 class="display-4">PIPING ANOMALY</h1>
        </div>
    </div>
</div>
<div id="dashboard" class="row" style="margin-top: -70px;">

    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 mb-4">
        <div class="card shadow border-0">
            <div class="card-body">
                <h5 class="card-title mb-3">Visual Anomaly Due</h5>
                <div class="form-inline">
                    PLATFORM
                    <select id="platform-ddl-anom-vt" class="form-control mx-2">
                    </select>
                    START YEAR
                    <select id="sy-ddl-anom-vt" class="form-control mx-2">
                    </select>
                    END YEAR
                    <select id="ey-ddl-anom-vt" class="form-control mx-2">
                    </select>
                    <button type="button" class="btn btn-success" onclick="get_data_anom_vt()">SEARCH</button>
                </div>
                <div class="pie-chart-dashboard" id="piping-anom-vt-chart"></div>
            </div>
        </div>
    </div>

    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 mb-4">
        <div class="card shadow border-0">
            <div class="card-body">
                <h5 class="card-title mb-3">Thickness Anomaly Due</h5>
                <div class="form-inline">
                    PLATFORM
                    <select id="platform-ddl-anom-thk" class="form-control mx-2">
                    </select>
                    START YEAR
                    <select id="sy-ddl-anom-thk" class="form-control mx-2">
                    </select>
                    END YEAR
                    <select id="ey-ddl-anom-thk" class="form-control mx-2">
                    </select>
                    <button type="button" class="btn btn-success" onclick="get_data_anom_thk()">SEARCH</button>
                </div>
                <div class="pie-chart-dashboard" id="piping-anom-thk-chart"></div>
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

    var vt_year = "";
    var vt_p6 = "";
    var vt_p5 = "";
    var vt_p4 = "";
    var vt_p3 = "";
    var vt_p2 = "";
    var vt_p1 = "";

    var thk_year = "";
    var thk_p6 = "";
    var thk_p5 = "";
    var thk_p4 = "";
    var thk_p3 = "";
    var thk_p2 = "";
    var thk_p1 = "";

    var datenow = new Date();
    get_platform_ddl();
    get_year_ddl();
    get_data_anom_vt();
    get_data_anom_thk();
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
        
        $('#platform-ddl-anom-vt').html(options);
        $('#platform-ddl-anom-thk').html(options);
    }

    function get_year_ddl() {
        $.ajax({
            type: "GET",
            url: "https://" + url_api + "/fmi/data/v2/databases/CPOC_AIMS/layouts/dashboard_piping/records?_limit=1",
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

        var vt_year = data[0].fieldData.piping_vt_anomaly_year_all.split(",").map(Number);
        var options_sy_ddl_vt = "";
        var selected_sy_ddl_vt = "";
        var options_ey_ddl_vt = "";
        var selected_ey_ddl_vt = "";

        var check_current_year = $.inArray(datenow.getFullYear(), vt_year) > -1;
        console.log(check_current_year);
        var max_year = Math.max(...vt_year);
        console.log(max_year);

        for(var i = 0; i < vt_year.length; i++) {
            
            if(check_current_year == true) {
                if(vt_year[i] == datenow.getFullYear()) {
                    selected_sy_ddl_vt = "selected";
                }else{
                    selected_sy_ddl_vt = "";
                }
                if(vt_year[i] == max_year) {
                    selected_ey_ddl_vt = "selected";
                }else {
                    selected_ey_ddl_vt = "";
                }
            } else {
                if(i == 0) {
                    selected_sy_ddl_vt = "selected";
                }else if(i == vt_year.length - 1) {
                    selected_ey_ddl_vt = "selected";
                    selected_sy_ddl_vt = "";
                }else {
                    selected_sy_ddl_vt = "";
                    selected_ey_ddl_vt = "";
                }
            }
            var option_sy_ddl_vt = '<option value="' + vt_year[i] + '" ' + selected_sy_ddl_vt + '>' + vt_year[i] + '</option>';
            options_sy_ddl_vt = options_sy_ddl_vt + option_sy_ddl_vt;

            var option_ey_ddl_vt = '<option value="' + vt_year[i] + '" ' + selected_ey_ddl_vt + '>' + vt_year[i] + '</option>';
            options_ey_ddl_vt = options_ey_ddl_vt + option_ey_ddl_vt;
        }

        $('#sy-ddl-anom-vt').html(options_sy_ddl_vt);
        $('#ey-ddl-anom-vt').html(options_ey_ddl_vt);

        var thk_year = data[0].fieldData.piping_thk_anomaly_year_all.split(",").map(Number);
        var options_sy_ddl_thk = "";
        var selected_sy_ddl_thk = "";
        var options_ey_ddl_thk = "";
        var selected_ey_ddl_thk = "";

        var check_current_year = $.inArray(datenow.getFullYear(), thk_year) > -1;
        console.log(check_current_year);
        var max_year = Math.max(...thk_year);
        console.log(max_year);

        for(var i = 0; i < thk_year.length; i++) {
            
            if(check_current_year == true) {
                if(vt_year[i] == datenow.getFullYear()) {
                    selected_sy_ddl_thk = "selected";
                }else{
                    selected_sy_ddl_thk = "";
                }
                if(vt_year[i] == max_year) {
                    selected_ey_ddl_thk = "selected";
                }else {
                    selected_ey_ddl_thk = "";
                }
            } else {
                if(i == 0) {
                    selected_sy_ddl_thk = "selected";
                }else if(i == vt_year.length - 1) {
                    selected_ey_ddl_thk = "selected";
                    selected_sy_ddl_thk = "";
                }else {
                    selected_sy_ddl_thk = "";
                    selected_ey_ddl_thk = "";
                }
            }
            var option_sy_ddl_thk = '<option value="' + thk_year[i] + '" ' + selected_sy_ddl_thk + '>' + thk_year[i] + '</option>';
            options_sy_ddl_thk = options_sy_ddl_thk + option_sy_ddl_thk;

            var option_ey_ddl_thk = '<option value="' + thk_year[i] + '" ' + selected_ey_ddl_thk + '>' + thk_year[i] + '</option>';
            options_ey_ddl_thk = options_ey_ddl_thk + option_ey_ddl_thk;
        }

        $('#sy-ddl-anom-thk').html(options_sy_ddl_thk);
        $('#ey-ddl-anom-thk').html(options_ey_ddl_thk);
    }

    function get_data_anom_vt() {
        var platform = $('#platform-ddl-anom-vt').val();
        var start_year = $('#sy-ddl-anom-vt').val();
        var end_year = $('#ey-ddl-anom-vt').val();
        var param = 'vt_p,' + platform + ',' + start_year + ',' + end_year;
        $.ajax({
            type: "GET",
            url: "https://" + url_api + "/fmi/data/v2/databases/CPOC_AIMS/layouts/dashboard_piping/script/get_piping_anomaly?script.param=" + param,
            dataType: 'json',
            headers: {
                "Authorization": "Bearer " + $.cookie("_token_dashboard"),
                "Content-Type": "application/json"
            },
            async: false,
            success: function (data) {
                console.log(data.response.scriptResult);
                var val = data.response.scriptResult.split("|");
                vt_year = val[0].split(",");
                vt_p6 = val[1].split(",");
                vt_p5 = val[2].split(",");
                vt_p4 = val[3].split(",");
                vt_p3 = val[4].split(",");
                vt_p2 = val[5].split(",");
                vt_p1 = val[6].split(",");
                console.log(vt_year);
                console.log(vt_p6);
                console.log(vt_p5);
                console.log(vt_p4);
                console.log(vt_p3);
                console.log(vt_p2);
                console.log(vt_p1);
                gen_chart_anom_vt();
            },
            error: function (error) {
                console.log(error);
                get_token_startup();
                get_data_anom_vt();
            }
        });
    }

    function gen_chart_anom_vt() {
        Highcharts.chart('piping-anom-vt-chart', {
            chart: {
                type: 'column'
            },
            title: {
                text: ''
            },
            xAxis: {
                categories: vt_year.map(Number)
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
                            show_detail_vt(event);
                        }
                    }
                }
            },
            series: [{
                name: 'P1',
                color: "#FF0000",
                data: vt_p1.map(Number)
            }, {
                name: 'P2',
                color: "#F69546",
                data: vt_p2.map(Number)
            }, {
                name: 'P3',
                color: "#FFCC00",
                data: vt_p3.map(Number)
            }, {
                name: 'P4',
                color: "#FFFF00",
                data: vt_p4.map(Number)
            }, {
                name: 'P5',
                color: "#66FF33",
                data: vt_p5.map(Number)
            }],
            credits: {
                enabled: false
            },
            exporting: {
                enabled: false
            }
        });
    }

    function show_detail_vt(e) {
        console.log(e);
        console.log($('#platform-ddl-anom-vt').val());
        console.log(e.point.category);
        console.log(e.point.series.name);
        const platform = $('#platform-ddl-anom-vt').val();
        const year = e.point.category;
        const risk = e.point.series.name;
        const param = "piping,vt_p," + platform + "," + year + "," + risk;
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
                gen_datagrid_detail(dt_p, dt_t, 'VISUAL ANOMALY DUE', 'vt');
            },
            error: function (error) {
                console.log(error);
                get_token_startup();
                show_detail_vt(e);
            }
        });
    }

    function get_data_anom_thk() {
        var platform = $('#platform-ddl-anom-thk').val();
        var start_year = $('#sy-ddl-anom-thk').val();
        var end_year = $('#ey-ddl-anom-thk').val();
        var param = 'thk_p,' + platform + ',' + start_year + ',' + end_year;
        $.ajax({
            type: "GET",
            url: "https://" + url_api + "/fmi/data/v2/databases/CPOC_AIMS/layouts/dashboard_piping/script/get_piping_anomaly?script.param=" + param,
            dataType: 'json',
            headers: {
                "Authorization": "Bearer " + $.cookie("_token_dashboard"),
                "Content-Type": "application/json"
            },
            async: false,
            success: function (data) {
                console.log(data.response.scriptResult);
                var val = data.response.scriptResult.split("|");
                thk_year = val[0].split(",");
                thk_p6 = val[1].split(",");
                thk_p5 = val[2].split(",");
                thk_p4 = val[3].split(",");
                thk_p3 = val[4].split(",");
                thk_p2 = val[5].split(",");
                thk_p1 = val[6].split(",");
                console.log(thk_year);
                console.log(thk_p6);
                console.log(thk_p5);
                console.log(thk_p4);
                console.log(thk_p3);
                console.log(thk_p2);
                console.log(thk_p1);
                gen_chart_anom_thk();
            },
            error: function (error) {
                console.log(error);
                get_token_startup();
                get_data_anom_thk();
            }
        });
    }

    function gen_chart_anom_thk() {
        Highcharts.chart('piping-anom-thk-chart', {
            chart: {
                type: 'column'
            },
            title: {
                text: ''
            },
            xAxis: {
                categories: thk_year.map(Number)
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
                            show_detail_thk(event);
                        }
                    }
                }
            },
            series: [{
                name: 'P1',
                color: "#FF0000",
                data: thk_p1.map(Number)
            }, {
                name: 'P2',
                color: "#F69546",
                data: thk_p2.map(Number)
            }, {
                name: 'P3',
                color: "#FFCC00",
                data: thk_p3.map(Number)
            }, {
                name: 'P4',
                color: "#FFFF00",
                data: thk_p4.map(Number)
            }, {
                name: 'P5',
                color: "#66FF33",
                data: thk_p5.map(Number)
            }],
            credits: {
                enabled: false
            },
            exporting: {
                enabled: false
            }
        });
    }

    function show_detail_thk(e) {
        console.log(e);
        console.log($('#platform-ddl-anom-thk').val());
        console.log(e.point.category);
        console.log(e.point.series.name);
        const platform = $('#platform-ddl-anom-thk').val();
        const year = e.point.category;
        const risk = e.point.series.name;
        const param = "piping,thk_p," + platform + "," + year + "," + risk;
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
                gen_datagrid_detail(dt_p, dt_t, 'THICKNESS ANOMALY DUE', 'thk');
            },
            error: function (error) {
                console.log(error);
                get_token_startup();
                show_detail_thk(e);
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
                                    url: "https://" + url_api + "/fmi/data/v2/databases/CPOC_AIMS/layouts/piping_info_api/_find",
                                    dataType: 'json',
                                    headers: {
                                        "Authorization": "Bearer " + $.cookie("_token_dashboard"),
                                        "Content-Type": "application/json"
                                    },
                                    data: JSON.stringify({
                                            "query": [
                                                {
                                                    "id_line": "==" + options.key
                                                }
                                            ],
                                            "limit" : 1,
                                        }),
                                    async: false,
                                    success: function (data) {
                                        //console.log(data);
                                        if(type == 'vt') {
                                            f_path = data.response.data[0].fieldData["piping_inspection_doc_p_vt::file"];
                                            f_name = data.response.data[0].fieldData.anomaly_vt_permanent_file_related;
                                        } else {
                                            f_path = data.response.data[0].fieldData["piping_inspection_doc_p_thk::file"];
                                            f_name = data.response.data[0].fieldData.anomaly_thk_permanent_file_related;
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
                                    url: "https://" + url_api + "/fmi/data/v2/databases/CPOC_AIMS/layouts/piping_info_api/_find",
                                    dataType: 'json',
                                    headers: {
                                        "Authorization": "Bearer " + $.cookie("_token_dashboard"),
                                        "Content-Type": "application/json"
                                    },
                                    data: JSON.stringify({
                                            "query": [
                                                {
                                                    "id_line": "==" + options.key
                                                }
                                            ],
                                            "limit" : 1,
                                        }),
                                    async: false,
                                    success: function (data) {
                                        //console.log(data);
                                        if(type == 'vt') {
                                            f_path = data.response.data[0].fieldData["piping_inspection_doc_t_vt::file"];
                                            f_name = data.response.data[0].fieldData.anomaly_vt_temporary_file_related;
                                        } else {
                                            f_path = data.response.data[0].fieldData["piping_inspection_doc_t_thk::file"];
                                            f_name = data.response.data[0].fieldData.anomaly_thk_temporary_file_related;
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