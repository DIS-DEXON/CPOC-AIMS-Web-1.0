<div class="jumbotron jumbotron-header rounded-0 bg-secondary text-white">
    <div class="row">
        <div class="col-12">
            <h1 class="display-4">PRESSURE VESSEL ANOMALY</h1>
        </div>
    </div>
</div>
<div id="dashboard" class="row" style="margin-top: -70px;">
    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 mb-4">
        <div class="card shadow border-0">
            <div class="card-body">
                <h5 class="card-title mb-3">External Visual Anomaly Due</h5>
                <div class="form-inline">
                    PLATFORM
                    <select id="platform-ddl-anom-ext-vt" class="form-control mx-2">
                    </select>
                    START YEAR
                    <select id="sy-ddl-anom-ext-vt" class="form-control mx-2">
                    </select>
                    END YEAR
                    <select id="ey-ddl-anom-ext-vt" class="form-control mx-2">
                    </select>
                    <button type="button" class="btn btn-success" onclick="get_data_anom_ext_vt()">SEARCH</button>
                </div>
                <div class="pie-chart-dashboard" id="vessel-anom-ext-vt-chart"></div>
            </div>
        </div>
    </div>
    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 mb-4">
        <div class="card shadow border-0">
            <div class="card-body">
                <h5 class="card-title mb-3">External Thickness Anomaly Due</h5>
                <div class="form-inline">
                    PLATFORM
                    <select id="platform-ddl-anom-ext-thk" class="form-control mx-2">
                    </select>
                    START YEAR
                    <select id="sy-ddl-anom-ext-thk" class="form-control mx-2">
                    </select>
                    END YEAR
                    <select id="ey-ddl-anom-ext-thk" class="form-control mx-2">
                    </select>
                    <button type="button" class="btn btn-success" onclick="get_data_anom_ext_thk()">SEARCH</button>
                </div>
                <div class="pie-chart-dashboard" id="vessel-anom-ext-thk-chart"></div>
            </div>
        </div>
    </div>
    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 mb-4">
        <div class="card shadow border-0">
            <div class="card-body">
                <h5 class="card-title mb-3">Internal Visual Anomaly Due</h5>
                <div class="form-inline">
                    PLATFORM
                    <select id="platform-ddl-anom-int" class="form-control mx-2">
                    </select>
                    START YEAR
                    <select id="sy-ddl-anom-int" class="form-control mx-2">
                    </select>
                    END YEAR
                    <select id="ey-ddl-anom-int" class="form-control mx-2">
                    </select>
                    <button type="button" class="btn btn-success" onclick="get_data_anom_int_vt()">SEARCH</button>
                </div>
                <div class="pie-chart-dashboard" id="vessel-anom-int-chart"></div>
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
    var ext_vt_year = "";
    var ext_vt_p6 = "";
    var ext_vt_p5 = "";
    var ext_vt_p4 = "";
    var ext_vt_p3 = "";
    var ext_vt_p2 = "";
    var ext_vt_p1 = "";

    var ext_thk_year = "";
    var ext_thk_p6 = "";
    var ext_thk_p5 = "";
    var ext_thk_p4 = "";
    var ext_thk_p3 = "";
    var ext_thk_p2 = "";
    var ext_thk_p1 = "";


    var int_year = "";
    var int_p6 = "";
    var int_p5 = "";
    var int_p4 = "";
    var int_p3 = "";
    var int_p2 = "";
    var int_p1 = "";

    var datenow = new Date();

    get_platform_ddl();
    get_year_ddl();
    get_data_anom_ext_vt();
    get_data_anom_ext_thk();
    get_data_anom_int_vt();
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
        
        $('#platform-ddl-anom-ext-vt').html(options);
        $('#platform-ddl-anom-ext-thk').html(options);
        $('#platform-ddl-anom-int').html(options);
    }

    function get_year_ddl() {
        $.ajax({
            type: "GET",
            url: "https://" + url_api + "/fmi/data/v2/databases/CPOC_AIMS/layouts/dashboard_vessel/records?_limit=1",
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

        var ext_vt_year = data[0].fieldData.vessel_ext_vt_anomaly_year_all.split(",").map(Number);
        var options_sy_ddl_ext_vt = "";
        var selected_sy_ddl_ext_vt = "";
        var options_ey_ddl_ext_vt = "";
        var selected_ey_ddl_ext_vt = "";

        var check_current_year = $.inArray(datenow.getFullYear(), ext_vt_year) > -1;
        console.log(check_current_year);
        var max_year = Math.max(...ext_vt_year);
        console.log(max_year);

        for(var i = 0; i < ext_vt_year.length; i++) {
            
            if(check_current_year == true) {
                if(ext_vt_year[i] == datenow.getFullYear()) {
                    selected_sy_ddl_ext_vt = "selected";
                }else{
                    selected_sy_ddl_ext_vt = "";
                }
                if(ext_vt_year[i] == max_year) {
                    selected_ey_ddl_ext_vt = "selected";
                }else {
                    selected_ey_ddl_ext_vt = "";
                }
            } else {
                if(i == 0) {
                    selected_sy_ddl_ext_vt = "selected";
                }else if(i == ext_vt_year.length - 1) {
                    selected_ey_ddl_ext_vt = "selected";
                    selected_sy_ddl_ext_vt = "";
                }else {
                    selected_sy_ddl_ext_vt = "";
                    selected_ey_ddl_ext_vt = "";
                }
            }
            var option_sy_ddl_ext_vt = '<option value="' + ext_vt_year[i] + '" ' + selected_sy_ddl_ext_vt + '>' + ext_vt_year[i] + '</option>';
            options_sy_ddl_ext_vt = options_sy_ddl_ext_vt + option_sy_ddl_ext_vt;

            var option_ey_ddl_ext_vt = '<option value="' + ext_vt_year[i] + '" ' + selected_ey_ddl_ext_vt + '>' + ext_vt_year[i] + '</option>';
            options_ey_ddl_ext_vt = options_ey_ddl_ext_vt + option_ey_ddl_ext_vt;
        }

        $('#sy-ddl-anom-ext-vt').html(options_sy_ddl_ext_vt);
        $('#ey-ddl-anom-ext-vt').html(options_ey_ddl_ext_vt);

        var ext_thk_year = data[0].fieldData.vessel_ext_thk_anomaly_year_all.split(",").map(Number);
        var options_sy_ddl_ext_thk = "";
        var selected_sy_ddl_ext_thk = "";
        var options_ey_ddl_ext_thk = "";
        var selected_ey_ddl_ext_thk = "";

        var check_current_year = $.inArray(datenow.getFullYear(), ext_thk_year) > -1;
        console.log(check_current_year);
        var max_year = Math.max(...ext_thk_year);
        console.log(max_year);

        for(var i = 0; i < ext_thk_year.length; i++) {
            
            if(check_current_year == true) {
                if(ext_thk_year[i] == datenow.getFullYear()) {
                    selected_sy_ddl_ext_thk = "selected";
                }else{
                    selected_sy_ddl_ext_thk = "";
                }
                if(ext_thk_year[i] == max_year) {
                    selected_ey_ddl_ext_thk = "selected";
                }else {
                    selected_ey_ddl_ext_thk = "";
                }
            } else {
                if(i == 0) {
                    selected_sy_ddl_ext_thk = "selected";
                }else if(i == ext_thk_year.length - 1) {
                    selected_ey_ddl_ext_thk = "selected";
                    selected_sy_ddl_ext_thk = "";
                }else {
                    selected_sy_ddl_ext_thk = "";
                    selected_ey_ddl_ext_thk = "";
                }
            }
            var option_sy_ddl_ext_thk = '<option value="' + ext_thk_year[i] + '" ' + selected_sy_ddl_ext_thk + '>' + ext_thk_year[i] + '</option>';
            options_sy_ddl_ext_thk = options_sy_ddl_ext_thk + option_sy_ddl_ext_thk;

            var option_ey_ddl_ext_thk = '<option value="' + ext_thk_year[i] + '" ' + selected_ey_ddl_ext_thk + '>' + ext_thk_year[i] + '</option>';
            options_ey_ddl_ext_thk = options_ey_ddl_ext_thk + option_ey_ddl_ext_thk;
        }

        $('#sy-ddl-anom-ext-thk').html(options_sy_ddl_ext_thk);
        $('#ey-ddl-anom-ext-thk').html(options_ey_ddl_ext_thk);

        var int_year = data[0].fieldData.vessel_int_anomaly_year_all.split(",").map(Number);
        var options_sy_ddl_int = "";
        var selected_sy_ddl_int = "";
        var options_ey_ddl_int = "";
        var selected_ey_ddl_int = "";

        var check_current_year = $.inArray(datenow.getFullYear(), int_year) > -1;
        console.log(check_current_year);
        var max_year = Math.max(...int_year);
        console.log(max_year);

        for(var i = 0; i < int_year.length; i++) {
            
            if(check_current_year == true) {
                if(int_year[i] == datenow.getFullYear()) {
                    selected_sy_ddl_int = "selected";
                }else{
                    selected_sy_ddl_int = "";
                }
                if(int_year[i] == max_year) {
                    selected_ey_ddl_int = "selected";
                }else {
                    selected_ey_ddl_int = "";
                }
            } else {
                if(i == 0) {
                    selected_sy_ddl_int = "selected";
                }else if(i == int_year.length - 1) {
                    selected_ey_ddl_int = "selected";
                    selected_sy_ddl_int = "";
                }else {
                    selected_sy_ddl_int = "";
                    selected_ey_ddl_int = "";
                }
            }
            var option_sy_ddl_int = '<option value="' + int_year[i] + '" ' + selected_sy_ddl_int + '>' + int_year[i] + '</option>';
            options_sy_ddl_int = options_sy_ddl_int + option_sy_ddl_int;

            var option_ey_ddl_int = '<option value="' + int_year[i] + '" ' + selected_ey_ddl_int + '>' + int_year[i] + '</option>';
            options_ey_ddl_int = options_ey_ddl_int + option_ey_ddl_int;
        }

        $('#sy-ddl-anom-int').html(options_sy_ddl_int);
        $('#ey-ddl-anom-int').html(options_ey_ddl_int);

    }

    function get_data_anom_ext_vt() {
        var platform = $('#platform-ddl-anom-ext-vt').val();
        var start_year = $('#sy-ddl-anom-ext-vt').val();
        var end_year = $('#ey-ddl-anom-ext-vt').val();
        var param = 'ext_vt,' + platform + ',' + start_year + ',' + end_year;
        console.log(param);
        $.ajax({
            type: "GET",
            url: "https://" + url_api + "/fmi/data/v2/databases/CPOC_AIMS/layouts/dashboard_vessel/script/get_vessel_anomaly?script.param=" + param,
            dataType: 'json',
            headers: {
                "Authorization": "Bearer " + $.cookie("_token_dashboard"),
                "Content-Type": "application/json"
            },
            async: false,
            success: function (data) {
                console.log(data.response.scriptResult);
                var val = data.response.scriptResult.split("|");
                ext_vt_year = val[0].split(",");
                ext_vt_p6 = val[1].split(",");
                ext_vt_p5 = val[2].split(",");
                ext_vt_p4 = val[3].split(",");
                ext_vt_p3 = val[4].split(",");
                ext_vt_p2 = val[5].split(",");
                ext_vt_p1 = val[6].split(",");
                console.log(ext_vt_year);
                console.log(ext_vt_p6);
                console.log(ext_vt_p5);
                console.log(ext_vt_p4);
                console.log(ext_vt_p3);
                console.log(ext_vt_p2);
                console.log(ext_vt_p1);
                gen_chart_anom_ext_vt();
            },
            error: function (error) {
                console.log(error);
                get_token_startup();
                get_data_anom_ext_vt();
            }
        });
    }

    function gen_chart_anom_ext_vt() {
        Highcharts.setOptions({
            lang: {
                decimalPoint: '.',
                thousandsSep: ','
            }
        });
        Highcharts.chart('vessel-anom-ext-vt-chart', {
            chart: {
                type: 'column'
            },
            title: {
                text: ''
            },
            xAxis: {
                categories: ext_vt_year.map(Number)
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
                            show_detail_ext_vt(event);
                        }
                    }
                }
            },
            series: [{
                name: 'P1',
                color: "#FF0000",
                data: ext_vt_p1.map(Number)
            }, {
                name: 'P2',
                color: "#F69546",
                data: ext_vt_p2.map(Number)
            }, {
                name: 'P3',
                color: "#FFCC00",
                data: ext_vt_p3.map(Number)
            }, {
                name: 'P4',
                color: "#FFFF00",
                data: ext_vt_p4.map(Number)
            }, {
                name: 'P5',
                color: "#66FF33",
                data: ext_vt_p5.map(Number)
            }],
            credits: {
                enabled: false
            },
            exporting: {
                enabled: false
            }
        });
    }

    function show_detail_ext_vt(e) {
        console.log(e);
        console.log($('#platform-ddl-anom-ext-vt').val());
        console.log(e.point.category);
        console.log(e.point.series.name);
        const platform = $('#platform-ddl-anom-ext-vt').val();
        const year = e.point.category;
        const risk = e.point.series.name;
        const param = "pressure vessel,ext_vt," + platform + "," + year + "," + risk;
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
                gen_datagrid_detail(dt_p, dt_t, 'EXTERNAL VISUAL ANOMALY DUE', 'ext_vt');
            },
            error: function (error) {
                console.log(error);
                get_token_startup();
                show_detail_ext_vt(e);
            }
        });
    }

    function get_data_anom_ext_thk() {
        var platform = $('#platform-ddl-anom-ext-thk').val();
        var start_year = $('#sy-ddl-anom-ext-thk').val();
        var end_year = $('#ey-ddl-anom-ext-thk').val();
        var param = 'ext_thk,' + platform + ',' + start_year + ',' + end_year;
        console.log(param);
        $.ajax({
            type: "GET",
            url: "https://" + url_api + "/fmi/data/v2/databases/CPOC_AIMS/layouts/dashboard_vessel/script/get_vessel_anomaly?script.param=" + param,
            dataType: 'json',
            headers: {
                "Authorization": "Bearer " + $.cookie("_token_dashboard"),
                "Content-Type": "application/json"
            },
            async: false,
            success: function (data) {
                console.log(data.response.scriptResult);
                var val = data.response.scriptResult.split("|");
                ext_thk_year = val[0].split(",");
                ext_thk_p6 = val[1].split(",");
                ext_thk_p5 = val[2].split(",");
                ext_thk_p4 = val[3].split(",");
                ext_thk_p3 = val[4].split(",");
                ext_thk_p2 = val[5].split(",");
                ext_thk_p1 = val[6].split(",");
                console.log(ext_thk_year);
                console.log(ext_thk_p6);
                console.log(ext_thk_p5);
                console.log(ext_thk_p4);
                console.log(ext_thk_p3);
                console.log(ext_thk_p2);
                console.log(ext_thk_p1);
                gen_chart_anom_ext_thk();
            },
            error: function (error) {
                console.log(error);
                get_token_startup();
                get_data_anom_ext_thk();
            }
        });
    }

    function gen_chart_anom_ext_thk() {
        Highcharts.setOptions({
            lang: {
                decimalPoint: '.',
                thousandsSep: ','
            }
        });
        Highcharts.chart('vessel-anom-ext-thk-chart', {
            chart: {
                type: 'column'
            },
            title: {
                text: ''
            },
            xAxis: {
                categories: ext_thk_year.map(Number)
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
                            show_detail_ext_thk(event);
                        }
                    }
                }
            },
            series: [{
                name: 'P1',
                color: "#FF0000",
                data: ext_thk_p1.map(Number)
            }, {
                name: 'P2',
                color: "#F69546",
                data: ext_thk_p2.map(Number)
            }, {
                name: 'P3',
                color: "#FFCC00",
                data: ext_thk_p3.map(Number)
            }, {
                name: 'P4',
                color: "#FFFF00",
                data: ext_thk_p4.map(Number)
            }, {
                name: 'P5',
                color: "#66FF33",
                data: ext_thk_p5.map(Number)
            }],
            credits: {
                enabled: false
            },
            exporting: {
                enabled: false
            }
        });
    }

    function show_detail_ext_thk(e) {
        console.log(e);
        console.log($('#platform-ddl-anom-ext-thk').val());
        console.log(e.point.category);
        console.log(e.point.series.name);
        const platform = $('#platform-ddl-anom-ext-thk').val();
        const year = e.point.category;
        const risk = e.point.series.name;
        const param = "pressure vessel,ext_thk," + platform + "," + year + "," + risk;
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
                gen_datagrid_detail(dt_p, dt_t, 'EXTERNAL THICKNESS ANOMALY DUE', 'ext_thk');
            },
            error: function (error) {
                console.log(error);
                get_token_startup();
                show_detail_ext_thk(e);
            }
        });
    }

    function get_data_anom_int_vt() {
        var platform = $('#platform-ddl-anom-int').val();
        var start_year = $('#sy-ddl-anom-int').val();
        var end_year = $('#ey-ddl-anom-int').val();
        var param = 'int,' + platform + ',' + start_year + ',' + end_year;
        console.log(param);
        $.ajax({
            type: "GET",
            url: "https://" + url_api + "/fmi/data/v2/databases/CPOC_AIMS/layouts/dashboard_vessel/script/get_vessel_anomaly?script.param=" + param,
            dataType: 'json',
            headers: {
                "Authorization": "Bearer " + $.cookie("_token_dashboard"),
                "Content-Type": "application/json"
            },
            async: false,
            success: function (data) {
                console.log(data.response.scriptResult);
                var val = data.response.scriptResult.split("|");
                int_year = val[0].split(",");
                int_p6 = val[1].split(",");
                int_p5 = val[2].split(",");
                int_p4 = val[3].split(",");
                int_p3 = val[4].split(",");
                int_p2 = val[5].split(",");
                int_p1 = val[6].split(",");
                console.log(int_year);
                console.log(int_p6);
                console.log(int_p5);
                console.log(int_p4);
                console.log(int_p3);
                console.log(int_p2);
                console.log(int_p1);
                gen_chart_anom_int_vt();
            },
            error: function (error) {
                console.log(error);
                get_token_startup();
                get_data_anom_int_vt();
            }
        });
    }

    function gen_chart_anom_int_vt() {
        Highcharts.setOptions({
            lang: {
                decimalPoint: '.',
                thousandsSep: ','
            }
        });
        Highcharts.chart('vessel-anom-int-chart', {
            chart: {
                type: 'column'
            },
            title: {
                text: ''
            },
            xAxis: {
                categories: int_year.map(Number)
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
                            show_detail_int(event);
                        }
                    }
                }
            },
            series: [{
                name: 'P1',
                color: "#FF0000",
                data: int_p1.map(Number)
            }, {
                name: 'P2',
                color: "#F69546",
                data: int_p2.map(Number)
            }, {
                name: 'P3',
                color: "#FFCC00",
                data: int_p3.map(Number)
            }, {
                name: 'P4',
                color: "#FFFF00",
                data: int_p4.map(Number)
            }, {
                name: 'P5',
                color: "#66FF33",
                data: int_p5.map(Number)
            }],
            credits: {
                enabled: false
            },
            exporting: {
                enabled: false
            }
        });
    }

    function show_detail_int(e) {
        console.log(e);
        console.log($('#platform-ddl-anom-int').val());
        console.log(e.point.category);
        console.log(e.point.series.name);
        const platform = $('#platform-ddl-anom-int').val();
        const year = e.point.category;
        const risk = e.point.series.name;
        const param = "pressure vessel,int," + platform + "," + year + "," + risk;
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
                gen_datagrid_detail(dt_p, dt_t, 'INTERNAL VISUAL ANOMALY DUE', 'int_vt');
            },
            error: function (error) {
                console.log(error);
                get_token_startup();
                show_detail_ext_thk(e);
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
                                let f_path = '';
                                let f_name = '';
                                $.ajax({
                                    type: "POST",
                                    url: "https://" + url_api + "/fmi/data/v2/databases/CPOC_AIMS/layouts/vessel_info_api/_find",
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
                                        console.log(data.response.data[0]);
                                        if(type == 'ext_vt') {
                                            f_path = data.response.data[0].fieldData["vessel_inspection_doc_p_vt_ext::file"];
                                            f_name = data.response.data[0].fieldData.Ext_anomaly_vt_permanent_file_related;
                                        } else if(type == 'ext_thk') {
                                            f_path = data.response.data[0].fieldData["vessel_inspection_doc_p_thk_ext::file"];
                                            f_name = data.response.data[0].fieldData.Ext_anomaly_thk_permanent_file_related;
                                        } else {
                                            f_path = data.response.data[0].fieldData["vessel_inspection_doc_p_vt_int::file"];
                                            f_name = data.response.data[0].fieldData.Int_anomaly_vt_permanent_file_related;
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
                            }
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
                                let f_path = '';
                                let f_name = '';
                                $.ajax({
                                    type: "POST",
                                    url: "https://" + url_api + "/fmi/data/v2/databases/CPOC_AIMS/layouts/vessel_info_api/_find",
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
                                        console.log(data.response.data[0]);
                                        if(type == 'ext_vt') {
                                            f_path = data.response.data[0].fieldData["vessel_inspection_doc_t_vt_ext::file"];
                                            f_name = data.response.data[0].fieldData.Ext_anomaly_vt_temporary_file_related;
                                        } else if(type == 'ext_thk') {
                                            f_path = data.response.data[0].fieldData["vessel_inspection_doc_t_thk_ext::file"];
                                            f_name = data.response.data[0].fieldData.Ext_anomaly_thk_temporary_file_related;
                                        } else {
                                            f_path = data.response.data[0].fieldData["vessel_inspection_doc_t_vt_int::file"];
                                            f_name = data.response.data[0].fieldData.Int_anomaly_vt_temporary_file_related;
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
                            }
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