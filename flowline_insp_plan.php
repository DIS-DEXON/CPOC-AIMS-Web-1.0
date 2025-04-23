<div class="jumbotron jumbotron-header rounded-0 bg-secondary text-white">
    <div class="row">
        <div class="col-12">
            <h1 class="display-4">FLOWLINE INSPECTION PLAN</h1>
        </div>
    </div>
</div>
<div id="dashboard" class="row" style="margin-top: -70px;">
    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 mb-4">
        <div class="card shadow border-0">
            <div class="card-body">
                <h5 class="card-title mb-3">Routine Inspection Due</h5>
                <div class="form-inline">
                    PLATFORM
                    <select id="platform-ddl-rt" class="form-control mx-2">
                    </select>
                    START YEAR
                    <select id="sy-ddl-rt" class="form-control mx-2">
                    </select>
                    END YEAR
                    <select id="ey-ddl-rt" class="form-control mx-2">
                    </select>
                    <button type="button" class="btn btn-success" onclick="get_data_rt()">SEARCH</button>
                </div>
                <div class="pie-chart-dashboard" id="flowline-rt-insp-plan-chart"></div>
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
    var rt_year = "";
    var rt_very_high = "";
    var rt_high = "";
    var rt_alarp = "";
    var rt_low = "";
    var datenow = new Date();
    get_platform_ddl();
    get_year_ddl();
    get_data_rt();
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
        
        $('#platform-ddl-rt').html(options);
    }

    function get_year_ddl() {
        $.ajax({
            type: "GET",
            url: "https://" + url_api + "/fmi/data/v2/databases/CPOC_AIMS/layouts/dashboard_flowline/records?_limit=1",
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

        var rt_year = data[0].fieldData.flowline_routine_insp_status_year_all.split(",").map(Number);
        console.log(rt_year);
        var options_sy_ddl_rt = "";
        var selected_sy_ddl_rt = "";
        var options_ey_ddl_rt = "";
        var selected_ey_ddl_rt = "";

        var check_current_year = $.inArray(datenow.getFullYear(), rt_year) > -1;
        console.log(check_current_year);
        var max_year = Math.max(...rt_year);
        console.log(max_year);

        for(var i = 0; i < rt_year.length; i++) {
            
            if(check_current_year == true) {
                if(rt_year[i] == datenow.getFullYear()) {
                    selected_sy_ddl_rt = "selected";
                }else{
                    selected_sy_ddl_rt = "";
                }
                if(rt_year[i] == max_year) {
                    selected_ey_ddl_rt = "selected";
                }else {    
                    selected_ey_ddl_rt = "";
                }
            } else {
                if(i == 0) {
                    selected_sy_ddl_rt = "selected";
                }else if(i == rt_year.length - 1) {
                    selected_ey_ddl_rt = "selected";
                    selected_sy_ddl_rt = "";
                }else {
                    selected_sy_ddl_rt = "";
                    selected_ey_ddl_rt = "";
                }
                console.log("sy:" + selected_sy_ddl_rt);
                console.log("ey:" + selected_ey_ddl_rt);
            }
            var option_sy_ddl_rt = '<option value="' + rt_year[i] + '" ' + selected_sy_ddl_rt + '>' + rt_year[i] + '</option>';
            options_sy_ddl_rt = options_sy_ddl_rt + option_sy_ddl_rt;

            var option_ey_ddl_rt = '<option value="' + rt_year[i] + '" ' + selected_ey_ddl_rt + '>' + rt_year[i] + '</option>';
            options_ey_ddl_rt = options_ey_ddl_rt + option_ey_ddl_rt;
        }

        $('#sy-ddl-rt').html(options_sy_ddl_rt);
        $('#ey-ddl-rt').html(options_ey_ddl_rt);

    }

    function get_data_rt() {
        var platform = $('#platform-ddl-rt').val();
        var start_year = $('#sy-ddl-rt').val();
        var end_year = $('#ey-ddl-rt').val();
        var param = 'routine,' + platform + ',' + start_year + ',' + end_year;
        $.ajax({
            type: "GET",
            url: "https://" + url_api + "/fmi/data/v2/databases/CPOC_AIMS/layouts/dashboard_flowline/script/get_flowline_inspection_plan?script.param=" + param,
            dataType: 'json',
            headers: {
                "Authorization": "Bearer " + $.cookie("_token_dashboard"),
                "Content-Type": "application/json"
            },
            async: false,
            success: function (data) {
                console.log(data.response.scriptResult);
                var val = data.response.scriptResult.split("|");
                rt_year = val[0].split(",");
                rt_low = val[1].split(",");
                rt_alarp = val[2].split(",");
                rt_high = val[3].split(",");
                rt_very_high = val[4].split(",");
                console.log(rt_year);
                console.log(rt_low);
                console.log(rt_alarp);
                console.log(rt_high);
                gen_chart_rt();
            },
            error: function (error) {
                console.log(error);
                get_token_startup();
                get_data_rt();
            }
        });
    }

    function gen_chart_rt() {
        Highcharts.setOptions({
            lang: {
                decimalPoint: '.',
                thousandsSep: ','
            }
        });
        Highcharts.chart('flowline-rt-insp-plan-chart', {
            chart: {
                type: 'column'
            },
            title: {
                text: ''
            },
            xAxis: {
                categories: rt_year.map(Number)
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
                            show_detail_rt(event);
                        }
                    }
                }
            },
            series: [{
                name: 'Very High',
                color: "#FF0000",
                data: rt_very_high.map(Number)
            },{
                name: 'High',
                color: "#FD9A00",
                data: rt_high.map(Number)
            }, {
                name: 'Medium',
                color: "#FFFF00",
                data: rt_alarp.map(Number)
            }, {
                name: 'Low',
                color: "#00AF50",
                data: rt_low.map(Number)
            }],
            credits: {
                enabled: false
            },
            exporting: {
                enabled: false
            }
        });
    }

    function show_detail_rt(e) {
        console.log(e);
        console.log($('#platform-ddl-rt').val());
        console.log(e.point.category);
        console.log(e.point.series.name);
        const platform = $('#platform-ddl-rt').val();
        const year = e.point.category;
        const risk = e.point.series.name;
        const param = "flowline,routine," + platform + "," + year + "," + risk;
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
                gen_datagrid_detail(JSON.parse(data.response.scriptResult), 'ROUTINE INSPECTION DUE')
            },
            error: function (error) {
                console.log(error);
                get_token_startup();
                show_detail_rt(e);
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