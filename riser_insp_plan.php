<div class="jumbotron jumbotron-header rounded-0 bg-secondary text-white">
    <div class="row">
        <div class="col-12">
            <h1 class="display-4">RISER INSPECTION PLAN</h1>
        </div>
    </div>
</div>
<div id="dashboard" class="row" style="margin-top: -70px;">
    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 mb-4">
        <div class="card shadow border-0">
            <div class="card-body">
                <h5 class="card-title mb-3">Topside Riser Visual Inspection Due</h5>
                <div class="form-inline">
                    <!-- PLATFORM
                    <select id="platform-ddl-rov" class="form-control mx-2">
                    </select> -->
                    START YEAR
                    <select id="sy-ddl-asz-vt" class="form-control mx-2">
                    </select>
                    END YEAR
                    <select id="ey-ddl-asz-vt" class="form-control mx-2">
                    </select>
                    <button type="button" class="btn btn-success" onclick="get_data_asz_vt()">SEARCH</button>
                </div>
                <div class="pie-chart-dashboard" id="asz-vt-insp-plan-chart"></div>
            </div>
        </div>
    </div>
    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 mb-4">
        <div class="card shadow border-0">
            <div class="card-body">
                <h5 class="card-title mb-3">Topside Riser UT Inspection Due</h5>
                <div class="form-inline">
                    <!-- PLATFORM
                    <select id="platform-ddl-ili" class="form-control mx-2">
                    </select> -->
                    START YEAR
                    <select id="sy-ddl-asz-ut" class="form-control mx-2">
                    </select>
                    END YEAR
                    <select id="ey-ddl-asz-ut" class="form-control mx-2">
                    </select>
                    <button type="button" class="btn btn-success" onclick="get_data_asz_ut()">SEARCH</button>
                </div>
                <div class="pie-chart-dashboard" id="asz-ut-insp-plan-chart"></div>
            </div>
        </div>
    </div>
    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 mb-4">
        <div class="card shadow border-0">
            <div class="card-body">
                <h5 class="card-title mb-3">Subsea Riser Remote Operating Vehicle Inspection Due</h5>
                <div class="form-inline">
                    <!-- PLATFORM
                    <select id="platform-ddl-rov" class="form-control mx-2">
                    </select> -->
                    START YEAR
                    <select id="sy-ddl-bsz-rov" class="form-control mx-2">
                    </select>
                    END YEAR
                    <select id="ey-ddl-bsz-rov" class="form-control mx-2">
                    </select>
                    <button type="button" class="btn btn-success" onclick="get_data_bsz_rov()">SEARCH</button>
                </div>
                <div class="pie-chart-dashboard" id="bsz-rov-insp-plan-chart"></div>
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
    var asz_ut_year = "";
    var asz_ut_very_high = "";
    var asz_ut_high = "";
    var asz_ut_alarp = "";
    var asz_ut_low = "";
    var asz_vt_year = "";
    var asz_vt_very_high = "";
    var asz_vt_high = "";
    var asz_vt_alarp = "";
    var asz_vt_low = "";
    var bsz_rov_year = "";
    var bsz_rov_very_high = "";
    var bsz_rov_high = "";
    var bsz_rov_alarp = "";
    var bsz_rov_low = "";
    var remove_year = 0;
    var datenow = new Date();
    get_year_ddl();
    get_data_asz_ut();
    get_data_asz_vt();
    get_data_bsz_rov();
    $('.loader').hide();

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

        var asz_ut_year = data[0].fieldData.riser_asz_ut_insp_status_year_all.split(",").map(Number);
        asz_ut_year.splice( $.inArray(remove_year,asz_ut_year) ,1 );
        var options_sy_ddl_asz_ut = "";
        var selected_sy_ddl_asz_ut = "";
        var options_ey_ddl_asz_ut = "";
        var selected_ey_ddl_asz_ut = "";

        var check_current_year = $.inArray(datenow.getFullYear(), asz_ut_year) > -1;
        console.log(check_current_year);
        var max_year = Math.max(...asz_ut_year);
        console.log(max_year);

        for(var i = 0; i < asz_ut_year.length; i++) {
            if(asz_ut_year[i] !== '') {
                
                if(check_current_year == true) {
                    if(asz_ut_year[i] == datenow.getFullYear()) {
                        selected_sy_ddl_asz_ut = "selected";
                    }else{
                        selected_sy_ddl_asz_ut = "";
                    }
                    if(asz_ut_year[i] == max_year) {
                        selected_ey_ddl_asz_ut = "selected";
                    }else {
                        selected_ey_ddl_asz_ut = "";
                    }
                } else {
                    if(i == 0) {
                        selected_sy_ddl_asz_ut = "selected";
                    }else if(i == asz_ut_year.length - 2) {
                        selected_ey_ddl_asz_ut = "selected";
                        selected_sy_ddl_asz_ut = "";
                    }else {
                        selected_sy_ddl_asz_ut = "";
                        selected_ey_ddl_asz_ut = "";
                    }
                }

                var option_sy_ddl_asz_ut = '<option value="' + asz_ut_year[i] + '" ' + selected_sy_ddl_asz_ut + '>' + asz_ut_year[i] + '</option>';
                options_sy_ddl_asz_ut = options_sy_ddl_asz_ut + option_sy_ddl_asz_ut;

                var option_ey_ddl_asz_ut = '<option value="' + asz_ut_year[i] + '" ' + selected_ey_ddl_asz_ut + '>' + asz_ut_year[i] + '</option>';
                options_ey_ddl_asz_ut = options_ey_ddl_asz_ut + option_ey_ddl_asz_ut;
            }
        }

        $('#sy-ddl-asz-ut').html(options_sy_ddl_asz_ut);
        $('#ey-ddl-asz-ut').html(options_ey_ddl_asz_ut);

        var asz_vt_year = data[0].fieldData.riser_asz_vt_insp_status_year_all.split(",").map(Number);
        asz_vt_year.splice( $.inArray(remove_year,asz_vt_year) ,1 );
        var options_sy_ddl_asz_vt = "";
        var selected_sy_ddl_asz_vt = "";
        var options_ey_ddl_asz_vt = "";
        var selected_ey_ddl_asz_vt = "";

        var check_current_year = $.inArray(datenow.getFullYear(), asz_vt_year) > -1;
        console.log(check_current_year);
        var max_year = Math.max(...asz_vt_year);
        console.log(max_year);

        for(var i = 0; i < asz_vt_year.length; i++) {
            if(asz_vt_year[i] !== '') {
                
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
                    }else if(i == asz_vt_year.length - 2) {
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
        }

        $('#sy-ddl-asz-vt').html(options_sy_ddl_asz_vt);
        $('#ey-ddl-asz-vt').html(options_ey_ddl_asz_vt);

        var bsz_rov_year = data[0].fieldData.riser_bsz_rov_insp_status_year_all.split(",").map(Number);
        bsz_rov_year.splice( $.inArray(remove_year,bsz_rov_year) ,1 );
        var options_sy_ddl_bsz_rov = "";
        var selected_sy_ddl_bsz_rov = "";
        var options_ey_ddl_bsz_rov = "";
        var selected_ey_ddl_bsz_rov = "";

        var check_current_year = $.inArray(datenow.getFullYear(), bsz_rov_year) > -1;
        console.log(check_current_year);
        var max_year = Math.max(...bsz_rov_year);
        console.log(max_year);

        for(var i = 0; i < bsz_rov_year.length; i++) {
            if(bsz_rov_year[i] !== '') {
                
                if(check_current_year == true) {
                    if(bsz_rov_year[i] == datenow.getFullYear()) {
                        selected_sy_ddl_bsz_rov = "selected";
                    }else{
                        selected_sy_ddl_bsz_rov = "";
                    }
                    if(bsz_rov_year[i] == max_year) {
                        selected_ey_ddl_bsz_rov = "selected";
                    }else {
                        selected_ey_ddl_bsz_rov = "";
                    }
                } else {
                    if(i == 0) {
                        selected_sy_ddl_bsz_rov = "selected";
                    }else if(i == bsz_rov_year.length - 2) {
                        selected_ey_ddl_bsz_rov = "selected";
                        selected_sy_ddl_bsz_rov = "";
                    }else {
                        selected_sy_ddl_bsz_rov = "";
                        selected_ey_ddl_bsz_rov = "";
                    }
                }

                var option_sy_ddl_bsz_rov = '<option value="' + bsz_rov_year[i] + '" ' + selected_sy_ddl_bsz_rov + '>' + bsz_rov_year[i] + '</option>';
                options_sy_ddl_bsz_rov = options_sy_ddl_bsz_rov + option_sy_ddl_bsz_rov;

                var option_ey_ddl_bsz_rov = '<option value="' + bsz_rov_year[i] + '" ' + selected_ey_ddl_bsz_rov + '>' + bsz_rov_year[i] + '</option>';
                options_ey_ddl_bsz_rov = options_ey_ddl_bsz_rov + option_ey_ddl_bsz_rov;
            }
        }

        $('#sy-ddl-bsz-rov').html(options_sy_ddl_bsz_rov);
        $('#ey-ddl-bsz-rov').html(options_ey_ddl_bsz_rov);

    }

    function get_data_asz_ut() {
        var start_year = $('#sy-ddl-asz-ut').val();
        var end_year = $('#ey-ddl-asz-ut').val();
        var param = 'asz_ut,' + start_year + ',' + end_year;
        console.log(param);
        $.ajax({
            type: "GET",
            url: "https://" + url_api + "/fmi/data/v2/databases/CPOC_AIMS/layouts/dashboard_riser/script/get_riser_inspection_plan?script.param=" + param,
            dataType: 'json',
            headers: {
                "Authorization": "Bearer " + $.cookie("_token_dashboard"),
                "Content-Type": "application/json"
            },
            async: false,
            success: function (data) {
                console.log(data.response.scriptResult);
                var val = data.response.scriptResult.split("|");
                asz_ut_year = val[0].split(",");
                asz_ut_low = val[1].split(",");
                asz_ut_alarp = val[2].split(",");
                asz_ut_high = val[3].split(",");
                asz_ut_very_high = val[4].split(",");
                console.log(asz_ut_year);
                console.log(asz_ut_low);
                console.log(asz_ut_alarp);
                console.log(asz_ut_high);
                gen_chart_asz_ut();
            },
            error: function (error) {
                console.log(error);
                get_token_startup();
                get_data_asz_ut();
            }
        });
    }

    function gen_chart_asz_ut() {
        Highcharts.setOptions({
            lang: {
                decimalPoint: '.',
                thousandsSep: ','
            }
        });
        Highcharts.chart('asz-ut-insp-plan-chart', {
            chart: {
                type: 'column'
            },
            title: {
                text: ''
            },
            xAxis: {
                categories: asz_ut_year.map(Number)
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
                            show_detail_asz_ut(event);
                        }
                    }
                }
            },
            series: [{
                name: 'Very High',
                color: "#FF0000",
                data: asz_ut_very_high.map(Number)
            },{
                name: 'High',
                color: "#FD9A00",
                data: asz_ut_high.map(Number)
            }, {
                name: 'Medium',
                color: "#FFFF00",
                data: asz_ut_alarp.map(Number)
            }, {
                name: 'Low',
                color: "#00AF50",
                data: asz_ut_low.map(Number)
            }],
            credits: {
                enabled: false
            },
            exporting: {
                enabled: false
            }
        });
    }

    function show_detail_asz_ut(e) {
        console.log(e);
        console.log(e.point.category);
        console.log(e.point.series.name);
        const platform = '';
        const year = e.point.category;
        const risk = e.point.series.name;
        const param = "riser,asz_ut," + platform + "," + year + "," + risk;
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
                gen_datagrid_detail(JSON.parse(data.response.scriptResult), 'TOPSIDE RISER UT INSPECTION DUE')
            },
            error: function (error) {
                console.log(error);
                get_token_startup();
                show_detail_asz_ut(e);
            }
        });
    }

    function get_data_asz_vt() {
        var start_year = $('#sy-ddl-asz-vt').val();
        var end_year = $('#ey-ddl-asz-vt').val();
        var param = 'asz_vt,' + start_year + ',' + end_year;
        console.log(param);
        $.ajax({
            type: "GET",
            url: "https://" + url_api + "/fmi/data/v2/databases/CPOC_AIMS/layouts/dashboard_riser/script/get_riser_inspection_plan?script.param=" + param,
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
                asz_vt_low = val[1].split(",");
                asz_vt_alarp = val[2].split(",");
                asz_vt_high = val[3].split(",");
                asz_vt_very_high = val[4].split(",");
                console.log(asz_vt_year);
                console.log(asz_vt_low);
                console.log(asz_vt_alarp);
                console.log(asz_vt_high);
                gen_chart_asz_vt();
            },
            error: function (error) {
                console.log(error);
                get_token_startup();
                get_data_asz_vt();
            }
        });
    }

    function gen_chart_asz_vt() {
        Highcharts.setOptions({
            lang: {
                decimalPoint: '.',
                thousandsSep: ','
            }
        });
        Highcharts.chart('asz-vt-insp-plan-chart', {
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
                name: 'Very High',
                color: "#FF0000",
                data: asz_vt_very_high.map(Number)
            }, {
                name: 'High',
                color: "#FD9A00",
                data: asz_vt_high.map(Number)
            }, {
                name: 'Medium',
                color: "#FFFF00",
                data: asz_vt_alarp.map(Number)
            }, {
                name: 'Low',
                color: "#00AF50",
                data: asz_vt_low.map(Number)
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
        const param = "riser,asz_vt," + platform + "," + year + "," + risk;
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
                gen_datagrid_detail(JSON.parse(data.response.scriptResult), 'TOPSIDE RISER VISUAL INSPECTION DUE')
            },
            error: function (error) {
                console.log(error);
                get_token_startup();
                show_detail_asz_vt(e);
            }
        });
    }

    function get_data_bsz_rov() {
        var start_year = $('#sy-ddl-bsz-rov').val();
        var end_year = $('#ey-ddl-bsz-rov').val();
        var param = 'bsz_rov,' + start_year + ',' + end_year;
        console.log(param);
        $.ajax({
            type: "GET",
            url: "https://" + url_api + "/fmi/data/v2/databases/CPOC_AIMS/layouts/dashboard_riser/script/get_riser_inspection_plan?script.param=" + param,
            dataType: 'json',
            headers: {
                "Authorization": "Bearer " + $.cookie("_token_dashboard"),
                "Content-Type": "application/json"
            },
            async: false,
            success: function (data) {
                console.log(data.response.scriptResult);
                var val = data.response.scriptResult.split("|");
                bsz_rov_year = val[0].split(",");
                bsz_rov_low = val[1].split(",");
                bsz_rov_alarp = val[2].split(",");
                bsz_rov_high = val[3].split(",");
                bsz_rov_very_high = val[4].split(",");
                console.log(bsz_rov_year);
                console.log(bsz_rov_low);
                console.log(bsz_rov_alarp);
                console.log(bsz_rov_high);
                gen_chart_bsz_rov();
            },
            error: function (error) {
                console.log(error);
                get_token_startup();
                get_data_bsz_rov();
            }
        });
    }

    function gen_chart_bsz_rov() {
        Highcharts.setOptions({
            lang: {
                decimalPoint: '.',
                thousandsSep: ','
            }
        });
        Highcharts.chart('bsz-rov-insp-plan-chart', {
            chart: {
                type: 'column'
            },
            title: {
                text: ''
            },
            xAxis: {
                categories: bsz_rov_year.map(Number)
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
                            show_detail_bsz_rov(event);
                        }
                    }
                }
            },
            series: [{
                name: 'Very High',
                color: "#FF0000",
                data: bsz_rov_very_high.map(Number)
            }, {
                name: 'High',
                color: "#FD9A00",
                data: bsz_rov_high.map(Number)
            }, {
                name: 'Mediun',
                color: "#FFFF00",
                data: bsz_rov_alarp.map(Number)
            }, {
                name: 'Low',
                color: "#00AF50",
                data: bsz_rov_low.map(Number)
            }],
            credits: {
                enabled: false
            },
            exporting: {
                enabled: false
            }
        });
    }

    function show_detail_bsz_rov(e) {
        console.log(e);
        console.log(e.point.category);
        console.log(e.point.series.name);
        const platform = '';
        const year = e.point.category;
        const risk = e.point.series.name;
        const param = "riser,bsz_rov," + platform + "," + year + "," + risk;
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
                gen_datagrid_detail(JSON.parse(data.response.scriptResult), 'SUBSEA RISER REMOTE OPERATING VAHICLE INSPECTION DUE')
            },
            error: function (error) {
                console.log(error);
                get_token_startup();
                show_detail_bsz_rov(e);
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