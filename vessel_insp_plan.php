<div class="jumbotron jumbotron-header rounded-0 bg-secondary text-white">
    <div class="row">
        <div class="col-12">
            <h1 class="display-4">PRESSURE VESSEL INSPECTION PLAN</h1>
        </div>
    </div>
</div>
<div id="dashboard" class="row" style="margin-top: -70px;">
    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 mb-4">
        <div class="card shadow border-0">
            <div class="card-body">
                <h5 class="card-title mb-3">External Inspection Due</h5>
                <div class="form-inline">
                    PLATFORM
                    <select id="platform-ddl-ext" class="form-control mx-2">
                    </select>
                    START YEAR
                    <select id="sy-ddl-ext" class="form-control mx-2">
                    </select>
                    END YEAR
                    <select id="ey-ddl-ext" class="form-control mx-2">
                    </select>
                    <button type="button" class="btn btn-success" onclick="get_data_ext()">SEARCH</button>
                </div>
                <div class="pie-chart-dashboard" id="vessel-ext-insp-plan-chart"></div>
            </div>
        </div>
    </div>
    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 mb-4">
        <div class="card shadow border-0">
            <div class="card-body">
                <h5 class="card-title mb-3">Internal Inspection Due</h5>
                <div class="form-inline">
                    PLATFORM
                    <select id="platform-ddl-int" class="form-control mx-2">
                    </select>
                    START YEAR
                    <select id="sy-ddl-int" class="form-control mx-2">
                    </select>
                    END YEAR
                    <select id="ey-ddl-int" class="form-control mx-2">
                    </select>
                    <button type="button" class="btn btn-success" onclick="get_data_int()">SEARCH</button>
                </div>
                <div class="pie-chart-dashboard" id="vessel-int-insp-plan-chart"></div>
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
    var ext_year = "";
    var ext_very_high = "";
    var ext_high = "";
    var ext_alarp = "";
    var ext_low = "";
    var int_year = "";
    var int_very_high = "";
    var int_high = "";
    var int_alarp = "";
    var int_low = "";
    var datenow = new Date();
    get_platform_ddl();
    get_year_ddl();
    get_data_ext();
    get_data_int();
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
        
        $('#platform-ddl-ext').html(options);
        $('#platform-ddl-int').html(options);
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

        var ext_year = data[0].fieldData.vessel_ext_insp_status_year_all.split(",").map(Number);
        var options_sy_ddl_ext = "";
        var selected_sy_ddl_ext = "";
        var options_ey_ddl_ext = "";
        var selected_ey_ddl_ext = "";

        var check_current_year = $.inArray(datenow.getFullYear(), ext_year) > -1;
        console.log(check_current_year);
        var max_year = Math.max(...ext_year);
        console.log(max_year);

        for(var i = 0; i < ext_year.length; i++) {
            
            if(check_current_year == true) {
                if(ext_year[i] == datenow.getFullYear()) {
                    selected_sy_ddl_ext = "selected";
                }else{
                    selected_sy_ddl_ext = "";
                }
                if(ext_year[i] == max_year) {
                    selected_ey_ddl_ext = "selected";
                }else {
                    selected_ey_ddl_ext = "";
                }
            } else {
                if(i == 0) {
                    selected_sy_ddl_ext = "selected";
                }else if(i == ext_year.length - 1) {
                    selected_ey_ddl_ext = "selected";
                }else {
                    selected_sy_ddl_ext = "";
                    selected_ey_ddl_ext = "";
                }
            }
            var option_sy_ddl_ext = '<option value="' + ext_year[i] + '" ' + selected_sy_ddl_ext + '>' + ext_year[i] + '</option>';
            options_sy_ddl_ext = options_sy_ddl_ext + option_sy_ddl_ext;

            var option_ey_ddl_ext = '<option value="' + ext_year[i] + '" ' + selected_ey_ddl_ext + '>' + ext_year[i] + '</option>';
            options_ey_ddl_ext = options_ey_ddl_ext + option_ey_ddl_ext;
        }

        $('#sy-ddl-ext').html(options_sy_ddl_ext);
        $('#ey-ddl-ext').html(options_ey_ddl_ext);

        var int_year = data[0].fieldData.vessel_int_insp_status_year_all.split(",").map(Number);
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

        $('#sy-ddl-int').html(options_sy_ddl_int);
        $('#ey-ddl-int').html(options_ey_ddl_int);

    }

    function get_data_ext() {
        var platform = $('#platform-ddl-ext').val();
        var start_year = $('#sy-ddl-ext').val();
        var end_year = $('#ey-ddl-ext').val();
        var param = 'ext,' + platform + ',' + start_year + ',' + end_year;
        $.ajax({
            type: "GET",
            url: "https://" + url_api + "/fmi/data/v2/databases/CPOC_AIMS/layouts/dashboard_vessel/script/get_vessel_inspection_plan?script.param=" + param,
            dataType: 'json',
            headers: {
                "Authorization": "Bearer " + $.cookie("_token_dashboard"),
                "Content-Type": "application/json"
            },
            async: false,
            success: function (data) {
                console.log(data.response.scriptResult);
                var val = data.response.scriptResult.split("|");
                ext_year = val[0].split(",");
                ext_low = val[1].split(",");
                ext_alarp = val[2].split(",");
                ext_high = val[3].split(",");
                ext_very_high = val[4].split(",");
                console.log(ext_year);
                console.log(ext_low);
                console.log(ext_alarp);
                console.log(ext_high);
                gen_chart_ext();
            },
            error: function (error) {
                console.log(error);
                get_token_startup();
                get_data_ext();
            }
        });
    }

    function gen_chart_ext() {
        Highcharts.setOptions({
            lang: {
                decimalPoint: '.',
                thousandsSep: ','
            }
        });
        Highcharts.chart('vessel-ext-insp-plan-chart', {
            chart: {
                type: 'column'
            },
            title: {
                text: ''
            },
            xAxis: {
                categories: ext_year.map(Number)
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
                            show_detail_ext(event);
                        }
                    }
                }
            },
            series: [{
                name: 'Very High',
                color: "#FF0000",
                data: ext_very_high.map(Number)
            }, {
                name: 'High',
                color: "#FD9A00",
                data: ext_high.map(Number)
            }, {
                name: 'Medium',
                color: "#FFFF00",
                data: ext_alarp.map(Number)
            }, {
                name: 'Low',
                color: "#00AF50",
                data: ext_low.map(Number)
            }],
            credits: {
                enabled: false
            },
            exporting: {
                enabled: false
            }
        });
    }

    function show_detail_ext(e) {
        console.log(e);
        console.log($('#platform-ddl-ext').val());
        console.log(e.point.category);
        console.log(e.point.series.name);
        const platform = $('#platform-ddl-ext').val();
        const year = e.point.category;
        const risk = e.point.series.name;
        const param = "pressure vessel,ext," + platform + "," + year + "," + risk;
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
                gen_datagrid_detail(JSON.parse(data.response.scriptResult), 'EXTERNAL INSPECTION DUE')
            },
            error: function (error) {
                console.log(error);
                get_token_startup();
                show_detail_ext(e);
            }
        });
    }

    function get_data_int() {
        var platform = $('#platform-ddl-int').val();
        var start_year = $('#sy-ddl-int').val();
        var end_year = $('#ey-ddl-int').val();
        var param = 'int,' + platform + ',' + start_year + ',' + end_year;
        $.ajax({
            type: "GET",
            url: "https://" + url_api + "/fmi/data/v2/databases/CPOC_AIMS/layouts/dashboard_piping/script/get_vessel_inspection_plan?script.param=" + param,
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
                int_low = val[1].split(",");
                int_alarp = val[2].split(",");
                int_high = val[3].split(",");
                int_very_high = val[4].split(",");
                console.log(int_year);
                console.log(int_low);
                console.log(int_alarp);
                console.log(int_high);
                gen_chart_int();
            },
            error: function (error) {
                console.log(error);
                get_token_startup();
                get_data_int();
            }
        });
    }

    function gen_chart_int() {
        Highcharts.setOptions({
            lang: {
                decimalPoint: '.',
                thousandsSep: ','
            }
        });
        Highcharts.chart('vessel-int-insp-plan-chart', {
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
                            show_detail_int(event);
                        }
                    }
                }
            },
            series: [{
                name: 'Very High',
                color: "#FF0000",
                data: int_very_high.map(Number)
            },{
                name: 'High',
                color: "#FD9A00",
                data: int_high.map(Number)
            }, {
                name: 'Medium',
                color: "#FFFF00",
                data: int_alarp.map(Number)
            }, {
                name: 'Low',
                color: "#00AF50",
                data: int_low.map(Number)
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
        console.log($('#platform-ddl-int').val());
        console.log(e.point.category);
        console.log(e.point.series.name);
        const platform = $('#platform-ddl-int').val();
        const year = e.point.category;
        const risk = e.point.series.name;
        const param = "pressure vessel,int," + platform + "," + year + "," + risk;
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
                gen_datagrid_detail(JSON.parse(data.response.scriptResult), 'INTERNAL INSPECTION DUE')
            },
            error: function (error) {
                console.log(error);
                get_token_startup();
                show_detail_int(e);
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
                    caption: "Corrosion Loop",
                    alignment: "center",
                    columns: [{
                        caption: "Number",
                        alignment: "center",
                        headerCellTemplate: function (container) {
                            container.append($("<div>Number</div>"));
                        },
                        dataField: "corrosion_loop_no",
                    }, 
                    {
                        caption: "Description",
                        alignment: "center",
                        headerCellTemplate: function (container) {
                            container.append($("<div>Description</div>"));
                        },
                        dataField: "corrosion_loop_desc",
                    }], 
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