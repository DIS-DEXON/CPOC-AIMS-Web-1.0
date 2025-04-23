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
                <h5 class="card-title mb-3">Remote Operating Vehicle Due (Permanent Repair)</h5>
                <div class="form-inline">
                    <!-- PLATFORM
                    <select id="platform-ddl-anom-vt-perm" class="form-control mx-2">
                    </select> -->
                    START YEAR
                    <select id="sy-ddl-anom-vt-perm" class="form-control mx-2">
                    </select>
                    END YEAR
                    <select id="ey-ddl-anom-vt-perm" class="form-control mx-2">
                    </select>
                    <button type="button" class="btn btn-success" onclick="get_data_anom_vt_perm()">SEARCH</button>
                </div>
                <div class="pie-chart-dashboard" id="pipeline-anom-vt-perm-chart"></div>
            </div>
        </div>
    </div>
    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 mb-4">
        <div class="card shadow border-0">
            <div class="card-body">
                <h5 class="card-title mb-3">In-Line Inspection Anomaly Due (Permanent Repair)</h5>
                <div class="form-inline">
                    <!-- PLATFORM
                    <select id="platform-ddl-anom-thk-perm" class="form-control mx-2">
                    </select> -->
                    START YEAR
                    <select id="sy-ddl-anom-thk-perm" class="form-control mx-2">
                    </select>
                    END YEAR
                    <select id="ey-ddl-anom-thk-perm" class="form-control mx-2">
                    </select>
                    <button type="button" class="btn btn-success" onclick="get_data_anom_thk_perm()">SEARCH</button>
                </div>
                <div class="pie-chart-dashboard" id="pipeline-anom-thk-perm-chart"></div>
            </div>
        </div>
    </div>
    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 mb-4">
        <div class="card shadow border-0">
            <div class="card-body">
                <h5 class="card-title mb-3">Remote Operating Vehicle Anomaly Due (Temporary Repair)</h5>
                <div class="form-inline">
                    <!-- PLATFORM
                    <select id="platform-ddl-anom-vt-temp" class="form-control mx-2">
                    </select> -->
                    START YEAR
                    <select id="sy-ddl-anom-vt-temp" class="form-control mx-2">
                    </select>
                    END YEAR
                    <select id="ey-ddl-anom-vt-temp" class="form-control mx-2">
                    </select>
                    <button type="button" class="btn btn-success" onclick="get_data_anom_vt_temp()">SEARCH</button>
                </div>
                <div class="pie-chart-dashboard" id="pipeline-anom-vt-temp-chart"></div>
            </div>
        </div>
    </div>
    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 mb-4">
        <div class="card shadow border-0">
            <div class="card-body">
                <h5 class="card-title mb-3">In-Line Inspection Anomaly Due (Temporary Repair)</h5>
                <div class="form-inline">
                    <!-- PLATFORM
                    <select id="platform-ddl-anom-thk-temp" class="form-control mx-2">
                    </select> -->
                    START YEAR
                    <select id="sy-ddl-anom-thk-temp" class="form-control mx-2">
                    </select>
                    END YEAR
                    <select id="ey-ddl-anom-thk-temp" class="form-control mx-2">
                    </select>
                    <button type="button" class="btn btn-success" onclick="get_data_anom_thk_temp()">SEARCH</button>
                </div>
                <div class="pie-chart-dashboard" id="pipeline-anom-thk-temp-chart"></div>
            </div>
        </div>
    </div>
</div>

<script>

    var vt_temp_year = "";
    var vt_temp_high = "";
    var vt_temp_alarp_1 = "";
    var vt_temp_alarp_2 = "";
    var vt_temp_alarp_3 = "";
    var vt_temp_low = "";

    var vt_perm_year = "";
    var vt_perm_high = "";
    var vt_perm_alarp_1 = "";
    var vt_perm_alarp_2 = "";
    var vt_perm_alarp_3 = "";
    var vt_perm_low = "";

    var thk_temp_year = "";
    var thk_temp_high = "";
    var thk_temp_alarp_1 = "";
    var thk_temp_alarp_2 = "";
    var thk_temp_alarp_3 = "";
    var thk_temp_low = "";

    var thk_perm_year = "";
    var thk_perm_high = "";
    var thk_perm_alarp_1 = "";
    var thk_perm_alarp_2 = "";
    var thk_perm_alarp_3 = "";
    var thk_perm_low = "";

    var datenow = new Date();

    get_year_ddl();
    get_data_anom_vt_temp();
    get_data_anom_vt_perm();
    get_data_anom_thk_temp();
    get_data_anom_thk_perm();
    $('.loader').hide();

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
                get_token_dashboard();
                get_year_ddl();
                //logout();
            }
        });
    }

    function create_year_ddl(data) {

        var vt_temp_year = data[0].fieldData.pipeline_rov_anomaly_temporary_year_all.split(",").map(Number);
        var options_sy_ddl_vt_temp = "";
        var selected_sy_ddl_vt_temp = "";
        var options_ey_ddl_vt_temp = "";
        var selected_ey_ddl_vt_temp = "";

        var check_current_year = $.inArray(datenow.getFullYear(), vt_temp_year) > -1;
        console.log(check_current_year);
        var max_year = Math.max(...vt_temp_year);
        console.log(max_year);

        for(var i = 0; i < vt_temp_year.length; i++) {
            
            if(check_current_year == true) {
                if(vt_temp_year[i] == datenow.getFullYear()) {
                    selected_sy_ddl_vt_temp = "selected";
                }else{
                    selected_sy_ddl_vt_temp = "";
                }
                if(vt_temp_year[i] == max_year) {
                    selected_ey_ddl_vt_temp = "selected";
                }else {
                    selected_ey_ddl_vt_temp = "";
                }
            } else {
                if(i == 0) {
                    selected_sy_ddl_vt_temp = "selected";
                }else if(i == vt_temp_year.length - 1) {
                    selected_ey_ddl_vt_temp = "selected";
                }else {
                    selected_sy_ddl_vt_temp = "";
                    selected_ey_ddl_vt_temp = "";
                }
            }
            var option_sy_ddl_vt_temp = '<option value="' + vt_temp_year[i] + '" ' + selected_sy_ddl_vt_temp + '>' + vt_temp_year[i] + '</option>';
            options_sy_ddl_vt_temp = options_sy_ddl_vt_temp + option_sy_ddl_vt_temp;

            var option_ey_ddl_vt_temp = '<option value="' + vt_temp_year[i] + '" ' + selected_ey_ddl_vt_temp + '>' + vt_temp_year[i] + '</option>';
            options_ey_ddl_vt_temp = options_ey_ddl_vt_temp + option_ey_ddl_vt_temp;
        }

        $('#sy-ddl-anom-vt-temp').html(options_sy_ddl_vt_temp);
        $('#ey-ddl-anom-vt-temp').html(options_ey_ddl_vt_temp);

        var vt_perm_year = data[0].fieldData.pipeline_rov_anomaly_permanent_year_all.split(",").map(Number);
        var options_sy_ddl_vt_perm = "";
        var selected_sy_ddl_vt_perm = "";
        var options_ey_ddl_vt_perm = "";
        var selected_ey_ddl_vt_perm = "";

        var check_current_year = $.inArray(datenow.getFullYear(), vt_perm_year) > -1;
        console.log(check_current_year);
        var max_year = Math.max(...vt_perm_year);
        console.log(max_year);


        for(var i = 0; i < vt_perm_year.length; i++) {
            
            if(check_current_year == true) {
                if(vt_perm_year[i] == datenow.getFullYear()) {
                    selected_sy_ddl_vt_perm = "selected";
                }else{
                    selected_sy_ddl_vt_perm = "";
                }
                if(vt_perm_year[i] == max_year) {
                    selected_ey_ddl_vt_prem = "selected";
                }else {
                    selected_ey_ddl_vt_prem = "";
                }
            } else {
                if(i == 0) {
                    selected_sy_ddl_vt_perm = "selected";
                }else if(i == vt_perm_year.length - 1) {
                    selected_ey_ddl_vt_perm = "selected";
                }else {
                    selected_sy_ddl_vt_perm = "";
                    selected_ey_ddl_vt_prem = "";
                }
            }
            var option_sy_ddl_vt_perm = '<option value="' + vt_perm_year[i] + '" ' + selected_sy_ddl_vt_perm + '>' + vt_perm_year[i] + '</option>';
            options_sy_ddl_vt_perm = options_sy_ddl_vt_perm + option_sy_ddl_vt_perm;

            var option_ey_ddl_vt_perm = '<option value="' + vt_perm_year[i] + '" ' + selected_ey_ddl_vt_perm + '>' + vt_perm_year[i] + '</option>';
            options_ey_ddl_vt_perm = options_ey_ddl_vt_perm + option_ey_ddl_vt_perm;
        }

        $('#sy-ddl-anom-vt-perm').html(options_sy_ddl_vt_perm);
        $('#ey-ddl-anom-vt-perm').html(options_ey_ddl_vt_perm);

        var thk_temp_year = data[0].fieldData.pipeline_ili_anomaly_temporary_year_all.split(",").map(Number);
        var options_sy_ddl_thk_temp = "";
        var selected_sy_ddl_thk_temp = "";
        var options_ey_ddl_thk_temp = "";
        var selected_ey_ddl_thk_temp = "";

        var check_current_year = $.inArray(datenow.getFullYear(), thk_temp_year) > -1;
        console.log(check_current_year);
        var max_year = Math.max(...thk_temp_year);
        console.log(max_year);

        for(var i = 0; i < thk_temp_year.length; i++) {
            
            if(check_current_year == true) {
                if(thk_temp_year[i] == datenow.getFullYear()) {
                    selected_sy_ddl_thk_temp = "selected";
                }else{
                    selected_sy_ddl_thk_temp = "";
                }
                if(thk_temp_year[i] == max_year) {
                    selected_ey_ddl_thk_temp = "selected";
                }else {
                    selected_ey_ddl_thk_temp = "";
                }
            } else {
                if(i == 0) {
                    selected_sy_ddl_thk_temp = "selected";
                }else if(i == thk_temp_year.length - 1) {
                    selected_ey_ddl_thk_temp = "selected";
                    selected_sy_ddl_thk_temp = "";
                }else {
                    selected_sy_ddl_thk_temp = "";
                    selected_ey_ddl_thk_temp = "";
                }
            }
            var option_sy_ddl_thk_temp = '<option value="' + thk_temp_year[i] + '" ' + selected_sy_ddl_thk_temp + '>' + thk_temp_year[i] + '</option>';
            options_sy_ddl_thk_temp = options_sy_ddl_thk_temp + option_sy_ddl_thk_temp;

            var option_ey_ddl_thk_temp = '<option value="' + thk_temp_year[i] + '" ' + selected_ey_ddl_thk_temp + '>' + thk_temp_year[i] + '</option>';
            options_ey_ddl_thk_temp = options_ey_ddl_thk_temp + option_ey_ddl_thk_temp;
        }

        $('#sy-ddl-anom-thk-temp').html(options_sy_ddl_thk_temp);
        $('#ey-ddl-anom-thk-temp').html(options_ey_ddl_thk_temp);

        var thk_perm_year = data[0].fieldData.pipeline_ili_anomaly_permanent_year_all.split(",").map(Number);
        var options_sy_ddl_thk_perm = "";
        var selected_sy_ddl_thk_perm = "";
        var options_ey_ddl_thk_perm = "";
        var selected_ey_ddl_thk_perm = "";

        var check_current_year = $.inArray(datenow.getFullYear(), thk_perm_year) > -1;
        console.log(check_current_year);
        var max_year = Math.max(...thk_perm_year);
        console.log(max_year);

        for(var i = 0; i < thk_perm_year.length; i++) {
            
            if(check_current_year == true) {
                if(thk_perm_year[i] == datenow.getFullYear()) {
                    selected_sy_ddl_thk_perm = "selected";
                }else{
                    selected_sy_ddl_thk_perm = "";
                }
                if(thk_perm_year[i] == max_year) {
                    selected_ey_ddl_thk_perm = "selected";
                }else {
                    selected_ey_ddl_thk_perm = "";
                }
            } else {
                if(i == 0) {
                    selected_sy_ddl_thk_perm = "selected";
                }else if(i == thk_perm_year.length - 1) {
                    selected_ey_ddl_thk_perm = "selected";
                    selected_sy_ddl_thk_perm = "";
                }else {
                    selected_sy_ddl_thk_perm = "";
                    selected_ey_ddl_thk_perm = "";
                }
            }
            var option_sy_ddl_thk_perm = '<option value="' + thk_perm_year[i] + '" ' + selected_sy_ddl_thk_perm + '>' + thk_perm_year[i] + '</option>';
            options_sy_ddl_thk_perm = options_sy_ddl_thk_perm + option_sy_ddl_thk_perm;

            var option_ey_ddl_thk_perm = '<option value="' + thk_perm_year[i] + '" ' + selected_ey_ddl_thk_perm + '>' + thk_perm_year[i] + '</option>';
            options_ey_ddl_thk_perm = options_ey_ddl_thk_perm + option_ey_ddl_thk_perm;
        }

        $('#sy-ddl-anom-thk-perm').html(options_sy_ddl_thk_perm);
        $('#ey-ddl-anom-thk-perm').html(options_ey_ddl_thk_perm);

    }

    function get_data_anom_vt_temp() {
        var platform = $('#platform-ddl-anom-vt-temp').val();
        var start_year = $('#sy-ddl-anom-vt-temp').val();
        var end_year = $('#ey-ddl-anom-vt-temp').val();
        var param = 'vt_temp,' + platform + ',' + start_year + ',' + end_year;
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
                vt_temp_year = val[0].split(",");
                vt_temp_low = val[1].split(",");
                vt_temp_alarp_1 = val[2].split(",");
                vt_temp_alarp_2 = val[3].split(",");
                vt_temp_alarp_3 = val[4].split(",");
                vt_temp_high = val[5].split(",");
                console.log(vt_temp_year);
                console.log(vt_temp_low);
                console.log(vt_temp_alarp_1);
                console.log(vt_temp_alarp_2);
                console.log(vt_temp_alarp_3);
                console.log(vt_temp_high);
                gen_chart_anom_vt_temp();
            },
            error: function (error) {
                console.log(error);
            }
        });
    }

    function gen_chart_anom_vt_temp() {
        Highcharts.setOptions({
            lang: {
                decimalPoint: '.',
                thousandsSep: ','
            }
        });
        Highcharts.chart('pipeline-anom-vt-temp-chart', {
            chart: {
                type: 'column'
            },
            title: {
                text: ''
            },
            xAxis: {
                categories: vt_temp_year.map(Number)
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
                }
            },
            series: [{
                name: 'High',
                color: "#FF0000",
                data: vt_temp_high.map(Number)
            }, {
                name: 'Alarp-1',
                color: "#FFFF00",
                data: vt_temp_alarp_1.map(Number)
            }, {
                name: 'Alarp-2',
                color: "#FFFF00",
                data: vt_temp_alarp_2.map(Number)
            }, {
                name: 'Alarp-3',
                color: "#FFFF00",
                data: vt_temp_alarp_3.map(Number)
            }, {
                name: 'Low',
                color: "#00AF50",
                data: vt_temp_low.map(Number)
            }],
            credits: {
                enabled: false
            },
            exporting: {
                enabled: false
            }
        });
    }

    function get_data_anom_vt_perm() {
        var platform = $('#platform-ddl-anom-vt-perm').val();
        var start_year = $('#sy-ddl-anom-vt-perm').val();
        var end_year = $('#ey-ddl-anom-vt-perm').val();
        var param = 'vt_perm,' + platform + ',' + start_year + ',' + end_year;
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
                vt_perm_year = val[0].split(",");
                vt_perm_low = val[1].split(",");
                vt_perm_alarp_1 = val[2].split(",");
                vt_perm_alarp_2 = val[3].split(",");
                vt_perm_alarp_3 = val[4].split(",");
                vt_perm_high = val[5].split(",");
                console.log(vt_perm_year);
                console.log(vt_perm_low);
                console.log(vt_perm_alarp_1);
                console.log(vt_perm_alarp_2);
                console.log(vt_perm_alarp_3);
                console.log(vt_perm_high);
                gen_chart_anom_vt_perm();
            },
            error: function (error) {
                console.log(error);
            }
        });
    }

    function gen_chart_anom_vt_perm() {
        Highcharts.setOptions({
            lang: {
                decimalPoint: '.',
                thousandsSep: ','
            }
        });
        Highcharts.chart('pipeline-anom-vt-perm-chart', {
            chart: {
                type: 'column'
            },
            title: {
                text: ''
            },
            xAxis: {
                categories: vt_perm_year.map(Number)
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
                }
            },
            series: [{
                name: 'High',
                color: "#FF0000",
                data: vt_perm_high.map(Number)
            }, {
                name: 'Alarp-1',
                color: "#FFFF00",
                data: vt_perm_alarp_1.map(Number)
            }, {
                name: 'Alarp-2',
                color: "#FFFF00",
                data: vt_perm_alarp_2.map(Number)
            }, {
                name: 'Alarp-3',
                color: "#FFFF00",
                data: vt_perm_alarp_3.map(Number)
            }, {
                name: 'Low',
                color: "#00AF50",
                data: vt_perm_low.map(Number)
            }],
            credits: {
                enabled: false
            },
            exporting: {
                enabled: false
            }
        });
    }

    function get_data_anom_thk_temp() {
        var platform = $('#platform-ddl-anom-thk-temp').val();
        var start_year = $('#sy-ddl-anom-thk-temp').val();
        var end_year = $('#ey-ddl-anom-thk-temp').val();
        var param = 'thk_temp,' + platform + ',' + start_year + ',' + end_year;
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
                thk_temp_year = val[0].split(",");
                thk_temp_low = val[1].split(",");
                thk_temp_alarp_1 = val[2].split(",");
                thk_temp_alarp_2 = val[3].split(",");
                thk_temp_alarp_3 = val[4].split(",");
                thk_temp_high = val[5].split(",");
                console.log(thk_temp_year);
                console.log(thk_temp_low);
                console.log(thk_temp_alarp_1);
                console.log(thk_temp_alarp_2);
                console.log(thk_temp_alarp_3);
                console.log(thk_temp_high);
                gen_chart_anom_thk_temp();
            },
            error: function (error) {
                console.log(error);
            }
        });
    }

    function gen_chart_anom_thk_temp() {
        Highcharts.setOptions({
            lang: {
                decimalPoint: '.',
                thousandsSep: ','
            }
        });
        Highcharts.chart('pipeline-anom-thk-temp-chart', {
            chart: {
                type: 'column'
            },
            title: {
                text: ''
            },
            xAxis: {
                categories: thk_temp_year.map(Number)
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
                }
            },
            series: [{
                name: 'High',
                color: "#FF0000",
                data: thk_temp_high.map(Number)
            }, {
                name: 'Alarp-1',
                color: "#FFFF00",
                data: thk_temp_alarp_1.map(Number)
            }, {
                name: 'Alarp-2',
                color: "#FFFF00",
                data: thk_temp_alarp_2.map(Number)
            }, {
                name: 'Alarp-3',
                color: "#FFFF00",
                data: thk_temp_alarp_3.map(Number)
            }, {
                name: 'Low',
                color: "#00AF50",
                data: thk_temp_low.map(Number)
            }],
            credits: {
                enabled: false
            },
            exporting: {
                enabled: false
            }
        });
    }

    function get_data_anom_thk_perm() {
        var platform = $('#platform-ddl-anom-thk-perm').val();
        var start_year = $('#sy-ddl-anom-thk-perm').val();
        var end_year = $('#ey-ddl-anom-thk-perm').val();
        var param = 'thk_perm,' + platform + ',' + start_year + ',' + end_year;
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
                thk_perm_year = val[0].split(",");
                thk_perm_low = val[1].split(",");
                thk_perm_alarp_1 = val[2].split(",");
                thk_perm_alarp_2 = val[3].split(",");
                thk_perm_alarp_3 = val[4].split(",");
                thk_perm_high = val[5].split(",");
                console.log(thk_perm_year);
                console.log(thk_perm_low);
                console.log(thk_perm_alarp_1);
                console.log(thk_perm_alarp_2);
                console.log(thk_perm_alarp_3);
                console.log(thk_perm_high);
                gen_chart_anom_thk_perm();
            },
            error: function (error) {
                console.log(error);
            }
        });
    }

    function gen_chart_anom_thk_perm() {
        Highcharts.setOptions({
            lang: {
                decimalPoint: '.',
                thousandsSep: ','
            }
        });
        Highcharts.chart('pipeline-anom-thk-perm-chart', {
            chart: {
                type: 'column'
            },
            title: {
                text: ''
            },
            xAxis: {
                categories: thk_perm_year.map(Number)
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
                }
            },
            series: [{
                name: 'High',
                color: "#FF0000",
                data: thk_perm_high.map(Number)
            }, {
                name: 'Alarp-1',
                color: "#FFFF00",
                data: thk_perm_alarp_1.map(Number)
            }, {
                name: 'Alarp-2',
                color: "#FFFF00",
                data: thk_perm_alarp_2.map(Number)
            }, {
                name: 'Alarp-3',
                color: "#FFFF00",
                data: thk_perm_alarp_3.map(Number)
            }, {
                name: 'Low',
                color: "#00AF50",
                data: thk_perm_low.map(Number)
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