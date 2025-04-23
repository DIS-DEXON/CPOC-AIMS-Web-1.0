<div class="jumbotron jumbotron-header rounded-0 bg-secondary text-white">
    <div class="row">
        <div class="col-12">
            <h1 class="display-4">RISER ANOMALY</h1>
        </div>
    </div>
</div>
<div id="dashboard" class="row" style="margin-top: -70px;">

    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 mb-4">
        <div class="card shadow border-0">
            <div class="card-body">
                <h5 class="card-title mb-3">Topside Riser Visual Anomaly Due</h5>
                <div class="form-inline">
                    PLATFORM
                    <select id="platform-ddl-anom-asz-vt" class="form-control mx-2">
                    </select>
                    START YEAR
                    <select id="sy-ddl-anom-asz-vt" class="form-control mx-2">
                    </select>
                    END YEAR
                    <select id="ey-ddl-anom-asz-vt" class="form-control mx-2">
                    </select>
                    <button type="button" class="btn btn-success" onclick="get_data_anom_asz_vt()">SEARCH</button>
                </div>
                <div class="pie-chart-dashboard" id="riser-anom-asz-vt-chart"></div>
            </div>
        </div>
    </div>

    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 mb-4">
        <div class="card shadow border-0">
            <div class="card-body">
                <h5 class="card-title mb-3">Topside Riser UT Anomaly Due</h5>
                <div class="form-inline">
                    PLATFORM
                    <select id="platform-ddl-anom-asz-thk" class="form-control mx-2">
                    </select>
                    START YEAR
                    <select id="sy-ddl-anom-asz-thk" class="form-control mx-2">
                    </select>
                    END YEAR
                    <select id="ey-ddl-anom-asz-thk" class="form-control mx-2">
                    </select>
                    <button type="button" class="btn btn-success" onclick="get_data_anom_asz_thk()">SEARCH</button>
                </div>
                <div class="pie-chart-dashboard" id="riser-anom-asz-thk-chart"></div>
            </div>
        </div>
    </div>

    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 mb-4">
        <div class="card shadow border-0">
            <div class="card-body">
                <h5 class="card-title mb-3">Subsea Riser Visual Anomaly Due</h5>
                <div class="form-inline">
                    PLATFORM
                    <select id="platform-ddl-anom-bsz-vt" class="form-control mx-2">
                    </select>
                    START YEAR
                    <select id="sy-ddl-anom-bsz-vt" class="form-control mx-2">
                    </select>
                    END YEAR
                    <select id="ey-ddl-anom-bsz-vt" class="form-control mx-2">
                    </select>
                    <button type="button" class="btn btn-success" onclick="get_data_anom_bsz_vt()">SEARCH</button>
                </div>
                <div class="pie-chart-dashboard" id="riser-anom-bsz-vt-chart"></div>
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
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <a class="nav-link active" id="nav-outgoing-riser-tab" data-toggle="tab" href="#nav-outgoing-riser" role="tab" aria-controls="nav-outgoing-riser" aria-selected="true">OUTGOING RISER</a>
                        <a class="nav-link" id="nav-incoming-riser-tab" data-toggle="tab" href="#nav-incoming-riser" role="tab" aria-controls="nav-incoming-riser" aria-selected="false">INCOMING RISER</a>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-outgoing-riser" role="tabpanel" aria-labelledby="nav-outgoing-riser">
                        <h5 class="mt-3">PERMANENT RERAIR</h5>
                        <div id="datagrid-anom-o-p-detail"></div>
                        <hr>
                        <h5>TEMPORARY RERAIR</h5>
                        <div id="datagrid-anom-o-t-detail"></div>
                    </div>
                    <div class="tab-pane fade" id="nav-incoming-riser" role="tabpanel" aria-labelledby="nav-incoming-riser">
                        <h5 class="mt-3">PERMANENT RERAIR</h5>
                        <div id="datagrid-anom-i-p-detail"></div>
                        <hr>
                        <h5>TEMPORARY RERAIR</h5>
                        <div id="datagrid-anom-i-t-detail"></div>
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

    var asz_vt_year = "";
    var asz_vt_p6 = "";
    var asz_vt_p5 = "";
    var asz_vt_p4 = "";
    var asz_vt_p3 = "";
    var asz_vt_p2 = "";
    var asz_vt_p1 = "";

    var asz_thk_year = "";
    var asz_thk_p6 = "";
    var asz_thk_p5 = "";
    var asz_thk_p4 = "";
    var asz_thk_p3 = "";
    var asz_thk_p2 = "";
    var asz_thk_p1 = "";

    var bsz_vt_year = "";
    var bsz_vt_p6 = "";
    var bsz_vt_p5 = "";
    var bsz_vt_p4 = "";
    var bsz_vt_p3 = "";
    var bsz_vt_p2 = "";
    var bsz_vt_p1 = "";

    var datenow = new Date();
    get_platform_ddl();
    get_year_ddl();
    get_data_anom_asz_vt();
    get_data_anom_asz_thk();
    get_data_anom_bsz_vt();
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
        
        $('#platform-ddl-anom-asz-vt').html(options);
        $('#platform-ddl-anom-asz-thk').html(options);
        $('#platform-ddl-anom-bsz-vt').html(options);
    }

    function get_year_ddl() {
        $.ajax({
            type: "GET",
            url: "https://" + url_api + "/fmi/data/v2/databases/CPOC_AIMS/layouts/dashboard_riser/records?_limit=1",
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

        var asz_vt_year = data[0].fieldData.riser_asz_vt_anomaly_year.split(",").map(Number);
        var options_sy_ddl_asz_vt = "";
        var selected_sy_ddl_asz_vt = "";
        var options_ey_ddl_asz_vt = "";
        var selected_ey_ddl_asz_vt = "";

        var check_current_year = $.inArray(datenow.getFullYear(), asz_vt_year) > -1;
        console.log(check_current_year);
        var max_year = Math.max(...asz_vt_year);
        console.log(max_year);

        for(var i = 0; i < asz_vt_year.length; i++) {
            
            if(check_current_year == true) {
                if(asz_vt_year[i] == datenow.getFullYear()) {
                    selected_sy_ddl_asz_vt = "selected";
                }else{
                    selected_sy_ddl_asz_vt = "";
                }
                if(asz_vt_year[i] == max_year) {
                    selected_ey_ddl_asz_vt = "selected";
                }else {
                    selected_ey_ddl_asz_vt = "";
                }
            } else {
                if(i == 0) {
                    selected_sy_ddl_asz_vt = "selected";
                }else if(i == asz_vt_year.length - 1) {
                    selected_ey_ddl_asz_vt = "selected";
                    selected_sy_ddl_asz_vt = "";
                }else {
                    selected_sy_ddl_asz_vt = "";
                    selected_ey_ddl_asz_vt = "";
                }
            }
            var option_sy_ddl_asz_vt = '<option value="' + asz_vt_year[i] + '" ' + selected_sy_ddl_asz_vt + '>' + asz_vt_year[i] + '</option>';
            options_sy_ddl_asz_vt = options_sy_ddl_asz_vt + option_sy_ddl_asz_vt;

            var option_ey_ddl_asz_vt = '<option value="' + asz_vt_year[i] + '" ' + selected_ey_ddl_asz_vt + '>' + asz_vt_year[i] + '</option>';
            options_ey_ddl_asz_vt = options_ey_ddl_asz_vt + option_ey_ddl_asz_vt;
        }

        $('#sy-ddl-anom-asz-vt').html(options_sy_ddl_asz_vt);
        $('#ey-ddl-anom-asz-vt').html(options_ey_ddl_asz_vt);

        var asz_thk_year = data[0].fieldData.riser_asz_thk_anomaly_year.split(",").map(Number);
        var options_sy_ddl_asz_thk = "";
        var selected_sy_ddl_asz_thk = "";
        var options_ey_ddl_asz_thk = "";
        var selected_ey_ddl_asz_thk = "";

        var check_current_year = $.inArray(datenow.getFullYear(), asz_thk_year) > -1;
        console.log(check_current_year);
        var max_year = Math.max(...asz_thk_year);
        console.log(max_year);

        for(var i = 0; i < asz_thk_year.length; i++) {
            
            if(check_current_year == true) {
                if(asz_thk_year[i] == datenow.getFullYear()) {
                    selected_sy_ddl_asz_thk = "selected";
                }else{
                    selected_sy_ddl_asz_thk = "";
                }
                if(asz_thk_year[i] == max_year) {
                    selected_ey_ddl_asz_thk = "selected";
                }else {
                    selected_ey_ddl_asz_thk = "";
                }
            } else {
                if(i == 0) {
                    selected_sy_ddl_asz_thk = "selected";
                }else if(i == asz_thk_year.length - 1) {
                    selected_ey_ddl_asz_thk = "selected";
                    selected_sy_ddl_asz_thk = "";
                }else {
                    selected_sy_ddl_asz_thk = "";
                    selected_ey_ddl_asz_thk = "";
                }
            }
            var option_sy_ddl_asz_thk = '<option value="' + asz_thk_year[i] + '" ' + selected_sy_ddl_asz_thk + '>' + asz_thk_year[i] + '</option>';
            options_sy_ddl_asz_thk = options_sy_ddl_asz_thk + option_sy_ddl_asz_thk;

            var option_ey_ddl_asz_thk = '<option value="' + asz_thk_year[i] + '" ' + selected_ey_ddl_asz_thk + '>' + asz_thk_year[i] + '</option>';
            options_ey_ddl_asz_thk = options_ey_ddl_asz_thk + option_ey_ddl_asz_thk;
        }

        $('#sy-ddl-anom-asz-thk').html(options_sy_ddl_asz_thk);
        $('#ey-ddl-anom-asz-thk').html(options_ey_ddl_asz_thk);

        var bsz_vt_year = data[0].fieldData.riser_bsz_vt_anomaly_year.split(",").map(Number);
        var options_sy_ddl_bsz_vt = "";
        var selected_sy_ddl_bsz_vt = "";
        var options_ey_ddl_bsz_vt = "";
        var selected_ey_ddl_bsz_vt = "";

        var check_current_year = $.inArray(datenow.getFullYear(), bsz_vt_year) > -1;
        console.log(check_current_year);
        var max_year = Math.max(...bsz_vt_year);
        console.log(max_year);

        for(var i = 0; i < bsz_vt_year.length; i++) {
            
            if(check_current_year == true) {
                if(bsz_vt_year[i] == datenow.getFullYear()) {
                    selected_sy_ddl_bsz_vt = "selected";
                }else{
                    selected_sy_ddl_bsz_vt = "";
                }
                if(bsz_vt_year[i] == max_year) {
                    selected_ey_ddl_bsz_vt = "selected";
                }else {
                    selected_ey_ddl_bsz_vt = "";
                }
            } else {
                if(i == 0) {
                    selected_sy_ddl_bsz_vt = "selected";
                }else if(i == bsz_vt_year.length - 1) {
                    selected_ey_ddl_bsz_vt = "selected";
                    selected_sy_ddl_bsz_vt = "";
                }else {
                    selected_sy_ddl_bsz_vt = "";
                    selected_ey_ddl_bsz_vt = "";
                }
            }
            var option_sy_ddl_bsz_vt = '<option value="' + bsz_vt_year[i] + '" ' + selected_sy_ddl_bsz_vt + '>' + bsz_vt_year[i] + '</option>';
            options_sy_ddl_bsz_vt = options_sy_ddl_bsz_vt + option_sy_ddl_bsz_vt;

            var option_ey_ddl_bsz_vt = '<option value="' + bsz_vt_year[i] + '" ' + selected_ey_ddl_bsz_vt + '>' + bsz_vt_year[i] + '</option>';
            options_ey_ddl_bsz_vt = options_ey_ddl_bsz_vt + option_ey_ddl_bsz_vt;
        }

        $('#sy-ddl-anom-bsz-vt').html(options_sy_ddl_bsz_vt);
        $('#ey-ddl-anom-bsz-vt').html(options_ey_ddl_bsz_vt);
    }

    function get_data_anom_asz_vt() {
        var platform = $('#platform-ddl-anom-asz-vt').val();
        var start_year = $('#sy-ddl-anom-asz-vt').val();
        var end_year = $('#ey-ddl-anom-asz-vt').val();
        console.log('asz_vt_p,' + platform + ',' + start_year + ',' + end_year);
        var param = 'asz_vt_p,' + platform + ',' + start_year + ',' + end_year;
        $.ajax({
            type: "GET",
            url: "https://" + url_api + "/fmi/data/v2/databases/CPOC_AIMS/layouts/dashboard_riser/script/get_riser_anomaly?script.param=" + param,
            dataType: 'json',
            headers: {
                "Authorization": "Bearer " + $.cookie("_token_dashboard"),
                "Content-Type": "application/json"
            },
            async: false,
            success: function (data) {
                console.log(data.response.scriptResult);
                var val = data.response.scriptResult.split("|");
                asz_vt_year = val[0].split(",");
                asz_vt_p6 = val[1].split(",");
                asz_vt_p5 = val[2].split(",");
                asz_vt_p4 = val[3].split(",");
                asz_vt_p3 = val[4].split(",");
                asz_vt_p2 = val[5].split(",");
                asz_vt_p1 = val[6].split(",");
                console.log(asz_vt_year);
                console.log(asz_vt_p6);
                console.log(asz_vt_p5);
                console.log(asz_vt_p4);
                console.log(asz_vt_p3);
                console.log(asz_vt_p2);
                console.log(asz_vt_p1);
                gen_chart_anom_asz_vt();
            },
            error: function (error) {
                console.log(error);
                get_token_startup();
                get_data_anom_asz_vt();
            }
        });
    }

    function gen_chart_anom_asz_vt() {
        Highcharts.chart('riser-anom-asz-vt-chart', {
            chart: {
                type: 'column'
            },
            title: {
                text: ''
            },
            xAxis: {
                categories: asz_vt_year.map(Number)
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
                            show_detail_asz_vt(event);
                        }
                    }
                }
            },
            series: [{
                name: 'P1',
                color: "#FF0000",
                data: asz_vt_p1.map(Number)
            }, {
                name: 'P2',
                color: "#F69546",
                data: asz_vt_p2.map(Number)
            }, {
                name: 'P3',
                color: "#FFCC00",
                data: asz_vt_p3.map(Number)
            }, {
                name: 'P4',
                color: "#FFFF00",
                data: asz_vt_p4.map(Number)
            }, {
                name: 'P5',
                color: "#66FF33",
                data: asz_vt_p5.map(Number)
            }],
            credits: {
                enabled: false
            },
            exporting: {
                enabled: false
            }
        });
    }

    function show_detail_asz_vt(e) {
        console.log(e);
        console.log(e.point.category);
        console.log(e.point.series.name);
        const platform = '';
        const year = e.point.category;
        const risk = e.point.series.name;
        const param = "riser,asz_vt_p," + platform + "," + year + "," + risk;
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
                const dt_o_p = JSON.parse(dt[0]);
                const dt_o_t = JSON.parse(dt[1]);
                const dt_i_p = JSON.parse(dt[2]);
                const dt_i_t = JSON.parse(dt[3]);
                console.log(dt_o_p);
                console.log(dt_o_t);
                console.log(dt_i_p);
                console.log(dt_i_t);
                gen_datagrid_detail(dt_o_p, dt_o_t, dt_i_p, dt_i_t, 'TOPSIDE RISER VISUAL ANOMALY DUE', 'asz_vt');
            },
            error: function (error) {
                console.log(error);
                get_token_startup();
                show_detail_asz_vt(e);
            }
        });
    }

    function get_data_anom_asz_thk() {
        var platform = $('#platform-ddl-anom-asz-thk').val();
        var start_year = $('#sy-ddl-anom-asz-thk').val();
        var end_year = $('#ey-ddl-anom-asz-thk').val();
        var param = 'asz_thk_p,' + platform + ',' + start_year + ',' + end_year;
        $.ajax({
            type: "GET",
            url: "https://" + url_api + "/fmi/data/v2/databases/CPOC_AIMS/layouts/dashboard_riser/script/get_riser_anomaly?script.param=" + param,
            dataType: 'json',
            headers: {
                "Authorization": "Bearer " + $.cookie("_token_dashboard"),
                "Content-Type": "application/json"
            },
            async: false,
            success: function (data) {
                console.log(data.response.scriptResult);
                var val = data.response.scriptResult.split("|");
                asz_thk_year = val[0].split(",");
                asz_thk_p6 = val[1].split(",");
                asz_thk_p5 = val[2].split(",");
                asz_thk_p4 = val[3].split(",");
                asz_thk_p3 = val[4].split(",");
                asz_thk_p2 = val[5].split(",");
                asz_thk_p1 = val[6].split(",");
                console.log(asz_thk_year);
                console.log(asz_thk_p6);
                console.log(asz_thk_p5);
                console.log(asz_thk_p4);
                console.log(asz_thk_p3);
                console.log(asz_thk_p2);
                console.log(asz_thk_p1);
                gen_chart_anom_asz_thk();
            },
            error: function (error) {
                console.log(error);
                get_token_startup();
                get_data_anom_asz_thk();
            }
        });
    }

    function gen_chart_anom_asz_thk() {
        Highcharts.chart('riser-anom-asz-thk-chart', {
            chart: {
                type: 'column'
            },
            title: {
                text: ''
            },
            xAxis: {
                categories: asz_thk_year.map(Number)
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
                            show_detail_asz_thk(event);
                        }
                    }
                }
            },
            series: [{
                name: 'P1',
                color: "#FF0000",
                data: asz_thk_p1.map(Number)
            }, {
                name: 'P2',
                color: "#F69546",
                data: asz_thk_p2.map(Number)
            }, {
                name: 'P3',
                color: "#FFCC00",
                data: asz_thk_p3.map(Number)
            }, {
                name: 'P4',
                color: "#FFFF00",
                data: asz_thk_p4.map(Number)
            }, {
                name: 'P5',
                color: "#66FF33",
                data: asz_thk_p5.map(Number)
            }],
            credits: {
                enabled: false
            },
            exporting: {
                enabled: false
            }
        });
    }

    function show_detail_asz_thk(e) {
        console.log(e);
        console.log(e.point.category);
        console.log(e.point.series.name);
        const platform = '';
        const year = e.point.category;
        const risk = e.point.series.name;
        const param = "riser,asz_thk_p," + platform + "," + year + "," + risk;
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
                const dt_o_p = JSON.parse(dt[0]);
                const dt_o_t = JSON.parse(dt[1]);
                const dt_i_p = JSON.parse(dt[2]);
                const dt_i_t = JSON.parse(dt[3]);
                console.log(dt_o_p);
                console.log(dt_o_t);
                console.log(dt_i_p);
                console.log(dt_i_t);
                gen_datagrid_detail(dt_o_p, dt_o_t, dt_i_p, dt_i_t, 'TOPSIDE RISER UT ANOMALY DUE', 'asz_ut');
            },
            error: function (error) {
                console.log(error);
                get_token_startup();
                show_detail_asz_thk(e);
            }
        });
    }

    function get_data_anom_bsz_vt() {
        var platform = $('#platform-ddl-anom-bsz-vt').val();
        var start_year = $('#sy-ddl-anom-bsz-vt').val();
        var end_year = $('#ey-ddl-anom-bsz-vt').val();
        console.log('bsz_vt_p,' + platform + ',' + start_year + ',' + end_year);
        var param = 'bsz_vt_p,' + platform + ',' + start_year + ',' + end_year;
        $.ajax({
            type: "GET",
            url: "https://" + url_api + "/fmi/data/v2/databases/CPOC_AIMS/layouts/dashboard_riser/script/get_riser_anomaly?script.param=" + param,
            dataType: 'json',
            headers: {
                "Authorization": "Bearer " + $.cookie("_token_dashboard"),
                "Content-Type": "application/json"
            },
            async: false,
            success: function (data) {
                console.log(data.response.scriptResult);
                var val = data.response.scriptResult.split("|");
                bsz_vt_year = val[0].split(",");
                bsz_vt_p6 = val[1].split(",");
                bsz_vt_p5 = val[2].split(",");
                bsz_vt_p4 = val[3].split(",");
                bsz_vt_p3 = val[4].split(",");
                bsz_vt_p2 = val[5].split(",");
                bsz_vt_p1 = val[6].split(",");
                console.log(bsz_vt_year);
                console.log(bsz_vt_p6);
                console.log(bsz_vt_p5);
                console.log(bsz_vt_p4);
                console.log(bsz_vt_p3);
                console.log(bsz_vt_p2);
                console.log(bsz_vt_p1);
                gen_chart_anom_bsz_vt();
            },
            error: function (error) {
                console.log(error);
                get_token_startup();
                get_data_anom_bsz_vt();
            }
        });
    }

    function gen_chart_anom_bsz_vt() {
        Highcharts.chart('riser-anom-bsz-vt-chart', {
            chart: {
                type: 'column'
            },
            title: {
                text: ''
            },
            xAxis: {
                categories: bsz_vt_year.map(Number)
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
                            show_detail_bsz_vt(event);
                        }
                    }
                }
            },
            series: [{
                name: 'P1',
                color: "#FF0000",
                data: bsz_vt_p1.map(Number)
            }, {
                name: 'P2',
                color: "#F69546",
                data: bsz_vt_p2.map(Number)
            }, {
                name: 'P3',
                color: "#FFCC00",
                data: bsz_vt_p3.map(Number)
            }, {
                name: 'P4',
                color: "#FFFF00",
                data: bsz_vt_p4.map(Number)
            }, {
                name: 'P5',
                color: "#66FF33",
                data: bsz_vt_p5.map(Number)
            }],
            credits: {
                enabled: false
            },
            exporting: {
                enabled: false
            }
        });
    }

    function show_detail_bsz_vt(e) {
        console.log(e);
        console.log(e.point.category);
        console.log(e.point.series.name);
        const platform = '';
        const year = e.point.category;
        const risk = e.point.series.name;
        const param = "riser,bsz_vt_p," + platform + "," + year + "," + risk;
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
                const dt_o_p = JSON.parse(dt[0]);
                const dt_o_t = JSON.parse(dt[1]);
                const dt_i_p = JSON.parse(dt[2]);
                const dt_i_t = JSON.parse(dt[3]);
                console.log(dt_o_p);
                console.log(dt_o_t);
                console.log(dt_i_p);
                console.log(dt_i_t);
                gen_datagrid_detail(dt_o_p, dt_o_t, dt_i_p, dt_i_t, 'SUBSEA RISER VISUAL ANOMALY DUE', 'bsz_vt');
            },
            error: function (error) {
                console.log(error);
                get_token_startup();
                show_detail_bsz_vt(e);
            }
        });
    }

    function gen_datagrid_detail(dt_o_p, dt_o_t, dt_i_p, dt_i_t, header, type) {
        $('#anom_detail_modal').modal('show');
        $('.anom-name').html(header);
        const dataGrid_o_p = $("#datagrid-anom-o-p-detail").dxDataGrid({
                    dataSource: dt_o_p,
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
                            caption: "Outgoing Riser",
                            alignment: "left",
                            headerCellTemplate: function (container) {
                                container.append($("<div>Outgoing Riser Number</div>"));
                            },
                            dataField: "outgoing_riser_no",
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
                                        if(type == 'asz_vt') {
                                            f_path = data.response.data[0].fieldData["outgoing_riser_asz_inspection_doc_p_vt::file"];
                                            f_name = data.response.data[0].fieldData.outgoing_riser_asz_anomaly_vt_permanent_file_related;
                                        } else if (type == 'asz_ut') {
                                            f_path = data.response.data[0].fieldData["outgoing_riser_asz_inspection_doc_p_thk::file"];
                                            f_name = data.response.data[0].fieldData.outgoing_riser_asz_anomaly_thk_permanent_file_related;
                                        } else if (type == 'bsz_vt') {
                                            f_path = data.response.data[0].fieldData["outgoing_riser_bsz_inspection_doc_p_vt::file"];
                                            f_name = data.response.data[0].fieldData.outgoing_riser_bsz_anomaly_vt_permanent_file_related;
                                        }
                                    },
                                    error: function (error) {
                                        console.log(error);
                                        get_token_startup();
                                        gen_datagrid_detail(dt_o_p, dt_o_t, dt_i_p, dt_i_t, header, type)
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

            const dataGrid_o_t = $("#datagrid-anom-o-t-detail").dxDataGrid({
                    dataSource: dt_o_t,
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
                            caption: "Outgoing Riser",
                            alignment: "left",
                            headerCellTemplate: function (container) {
                                container.append($("<div>Outgoing Riser Number</div>"));
                            },
                            dataField: "outgoing_riser_no",
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
                                        if(type == 'asz_vt') {
                                            f_path = data.response.data[0].fieldData["outgoing_riser_asz_inspection_doc_t_vt::file"];
                                            f_name = data.response.data[0].fieldData.outgoing_riser_asz_anomaly_vt_temporary_file_related;
                                        } else if (type == 'asz_ut') {
                                            f_path = data.response.data[0].fieldData["outgoing_riser_asz_inspection_doc_t_thk::file"];
                                            f_name = data.response.data[0].fieldData.outgoing_riser_asz_anomaly_thk_temporary_file_related;
                                        } else if (type == 'bsz_vt') {
                                            f_path = data.response.data[0].fieldData["outgoing_riser_bsz_inspection_doc_t_vt::file"];
                                            f_name = data.response.data[0].fieldData.outgoing_riser_bsz_anomaly_vt_temporary_file_related;
                                        }
                                    },
                                    error: function (error) {
                                        console.log(error);
                                        get_token_startup();
                                        gen_datagrid_detail(dt_o_p, dt_o_t, dt_i_p, dt_i_t, header, type)
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
            const dataGrid_i_p = $("#datagrid-anom-i-p-detail").dxDataGrid({
                    dataSource: dt_i_p,
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
                            caption: "Incoming Riser",
                            alignment: "left",
                            headerCellTemplate: function (container) {
                                container.append($("<div>Incoming Riser Number</div>"));
                            },
                            dataField: "incoming_riser_no",
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
                                        if(type == 'asz_vt') {
                                            f_path = data.response.data[0].fieldData["incoming_riser_asz_inspection_doc_p_vt::file"];
                                            f_name = data.response.data[0].fieldData.incoming_riser_asz_anomaly_vt_permanent_file_related;
                                        } else if (type == 'asz_ut') {
                                            f_path = data.response.data[0].fieldData["incoming_riser_asz_inspection_doc_p_thk::file"];
                                            f_name = data.response.data[0].fieldData.incoming_riser_asz_anomaly_thk_permanent_file_related;
                                        } else if (type == 'bsz_vt') {
                                            f_path = data.response.data[0].fieldData["incoming_riser_bsz_inspection_doc_p_vt::file"];
                                            f_name = data.response.data[0].fieldData.incoming_riser_bsz_anomaly_vt_permanent_file_related;
                                        }
                                    },
                                    error: function (error) {
                                        console.log(error);
                                        get_token_startup();
                                        gen_datagrid_detail(dt_o_p, dt_o_t, dt_i_p, dt_i_t, header, type)
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

            const dataGrid_i_t = $("#datagrid-anom-i-t-detail").dxDataGrid({
                    dataSource: dt_i_t,
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
                            caption: "Incoming Riser",
                            alignment: "left",
                            headerCellTemplate: function (container) {
                                container.append($("<div>Incoming Riser Number</div>"));
                            },
                            dataField: "incoming_riser_no",
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
                                        if(type == 'asz_vt') {
                                            f_path = data.response.data[0].fieldData["incoming_riser_asz_inspection_doc_t_vt::file"];
                                            f_name = data.response.data[0].fieldData.incoming_riser_asz_anomaly_vt_temporary_file_related;
                                        } else if (type == 'asz_ut') {
                                            f_path = data.response.data[0].fieldData["incoming_riser_asz_inspection_doc_t_thk::file"];
                                            f_name = data.response.data[0].fieldData.incoming_riser_asz_anomaly_thk_temporary_file_related;
                                        } else if (type == 'bsz_vt') {
                                            f_path = data.response.data[0].fieldData["incoming_riser_bsz_inspection_doc_t_vt::file"];
                                            f_name = data.response.data[0].fieldData.incoming_riser_bsz_anomaly_vt_temporary_file_related;
                                        }
                                    },
                                    error: function (error) {
                                        console.log(error);
                                        get_token_startup();
                                        gen_datagrid_detail(dt_o_p, dt_o_t, dt_i_p, dt_i_t, header, type)
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