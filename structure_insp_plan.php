<div class="jumbotron jumbotron-header rounded-0 bg-secondary text-white">
    <div class="row">
        <div class="col-12">
            <h1 class="display-4">STRUCTURE INSPECTION PLAN</h1>
        </div>
    </div>
</div>
<div id="dashboard" class="row" style="margin-top: -70px;">
    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 mb-4">
        <div class="card shadow border-0">
            <div class="card-body">
                <h5 class="card-title mb-3">Visual Inspection Due</h5>
                <div class="form-inline">
                    PLATFORM
                    <select id="platform-ddl-vt" class="form-control mx-2">
                    </select>
                    START YEAR
                    <select id="sy-ddl-vt" class="form-control mx-2">
                    </select>
                    END YEAR
                    <select id="ey-ddl-vt" class="form-control mx-2">
                    </select>
                    <button type="button" class="btn btn-success" onclick="get_data_vt()">SEARCH</button>
                </div>
                <div class="pie-chart-dashboard" id="structure-vt-insp-plan-chart"></div>
            </div>
        </div>
    </div>
    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 mb-4">
        <div class="card shadow border-0">
            <div class="card-body">
                <h5 class="card-title mb-3">NDE Inspection Due</h5>
                <div class="form-inline">
                    PLATFORM
                    <select id="platform-ddl-nde" class="form-control mx-2">
                    </select>
                    START YEAR
                    <select id="sy-ddl-nde" class="form-control mx-2">
                    </select>
                    END YEAR
                    <select id="ey-ddl-nde" class="form-control mx-2">
                    </select>
                    <button type="button" class="btn btn-success" onclick="get_data_nde()">SEARCH</button>
                </div>
                <div class="pie-chart-dashboard" id="structure-nde-insp-plan-chart"></div>
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
    var vt_year = "";
    var vt_high = "";
    var vt_alarp = "";
    var vt_low = "";
    var nde_year = "";
    var nde_high = "";
    var nde_alarp = "";
    var nde_low = "";
    var datenow = new Date();
    get_platform_ddl();
    get_year_ddl();
    get_data_vt();
    get_data_nde();
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
        
        $('#platform-ddl-vt').html(options);
        $('#platform-ddl-nde').html(options);
    }

    function get_year_ddl() {
        $.ajax({
            type: "GET",
            url: "https://" + url_api + "/fmi/data/v2/databases/CPOC_AIMS/layouts/dashboard_structure/records?_limit=1",
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

        var vt_year = data[0].fieldData.structure_vt_insp_status_year_all.split(",").map(Number);
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

        $('#sy-ddl-vt').html(options_sy_ddl_vt);
        $('#ey-ddl-vt').html(options_ey_ddl_vt);

        var nde_year = data[0].fieldData.structure_nde_insp_status_year_all.split(",").map(Number);
        var options_sy_ddl_nde = "";
        var selected_sy_ddl_nde = "";
        var options_ey_ddl_nde = "";
        var selected_ey_ddl_nde = "";

        var check_current_year = $.inArray(datenow.getFullYear(), nde_year) > -1;
        console.log(check_current_year);
        var max_year = Math.max(...nde_year);
        console.log(max_year);

        for(var i = 0; i < nde_year.length; i++) {
            
            if(check_current_year == true) {
                if(nde_year[i] == datenow.getFullYear()) {
                    selected_sy_ddl_nde = "selected";
                }else{
                    selected_sy_ddl_nde = "";
                }
                if(nde_year[i] == max_year) {
                    selected_ey_ddl_nde = "selected";
                }else {
                    selected_ey_ddl_nde = "";
                }
            } else {
                if(i == 0) {
                    selected_sy_ddl_nde = "selected";
                }else if(i == nde_year.length - 1) {
                    selected_ey_ddl_nde = "selected";
                }else {
                    selected_sy_ddl_nde = "";
                    selected_ey_ddl_nde = "";
                }
            }
            var option_sy_ddl_nde = '<option value="' + nde_year[i] + '" ' + selected_sy_ddl_nde + '>' + nde_year[i] + '</option>';
            options_sy_ddl_nde = options_sy_ddl_nde + option_sy_ddl_nde;

            var option_ey_ddl_nde = '<option value="' + nde_year[i] + '" ' + selected_ey_ddl_nde + '>' + nde_year[i] + '</option>';
            options_ey_ddl_nde = options_ey_ddl_nde + option_ey_ddl_nde;
        }

        $('#sy-ddl-nde').html(options_sy_ddl_nde);
        $('#ey-ddl-nde').html(options_ey_ddl_nde);

    }

    function get_data_vt() {
        var platform = $('#platform-ddl-vt').val();
        var start_year = $('#sy-ddl-vt').val();
        var end_year = $('#ey-ddl-vt').val();
        var param = 'visual,' + platform + ',' + start_year + ',' + end_year;
        console.log(param);
        $.ajax({
            type: "GET",
            url: "https://" + url_api + "/fmi/data/v2/databases/CPOC_AIMS/layouts/dashboard_structure/script/get_structure_inspection_plan?script.param=" + param,
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
                vt_low = val[1].split(",");
                vt_medium = val[2].split(",");
                vt_medium_high = val[3].split(",");
                vt_high = val[4].split(",");
                vt_very_high = val[5].split(",");
                console.log(vt_year);
                console.log(vt_low);
                console.log(vt_medium);
                console.log(vt_medium_high);
                console.log(vt_high);
                console.log(vt_very_high);
                gen_chart_vt();
            },
            error: function (error) {
                console.log(error);
                get_token_startup();
                get_data_vt();
            }
        });    
    }

    function gen_chart_vt() {
        Highcharts.setOptions({
            lang: {
                decimalPoint: '.',
                thousandsSep: ','
            }
        });
        Highcharts.chart('structure-vt-insp-plan-chart', {
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
                        //format: '{point.y:,.2f}',
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
                name: 'Very High',
                color: "#FF0000",
                data: vt_very_high.map(Number)
            },{
                name: 'High',
                color: "#F69546",
                data: vt_high.map(Number)
            }, {
                name: 'Medium High',
                color: "#FFCC00",
                data: vt_medium_high.map(Number)
            }, {
                name: 'Medium',
                color: "#FFFF00",
                data: vt_medium.map(Number)
            }, {
                name: 'Low',
                color: "#00AF50",
                data: vt_low.map(Number)
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
        console.log($('#platform-ddl-vt').val());
        console.log(e.point.category);
        console.log(e.point.series.name);
        const platform = $('#platform-ddl-vt').val();
        const year = e.point.category;
        const risk = e.point.series.name;
        const param = "structure,vt," + platform + "," + year + "," + risk;
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
                gen_datagrid_detail(JSON.parse(data.response.scriptResult), 'VISUAL INSPECTION DUE')
            },
            error: function (error) {
                console.log(error);
                get_token_startup();
                show_detail_vt(e);
            }
        });
    }

    function get_data_nde() {
        var platform = $('#platform-ddl-nde').val();
        var start_year = $('#sy-ddl-nde').val();
        var end_year = $('#ey-ddl-nde').val();
        var param = 'nde,' + platform + ',' + start_year + ',' + end_year;
        $.ajax({
            type: "GET",
            url: "https://" + url_api + "/fmi/data/v2/databases/CPOC_AIMS/layouts/dashboard_structure/script/get_structure_inspection_plan?script.param=" + param,
            dataType: 'json',
            headers: {
                "Authorization": "Bearer " + $.cookie("_token_dashboard"),
                "Content-Type": "application/json"
            },
            async: false,
            success: function (data) {
                console.log(data.response.scriptResult);
                var val = data.response.scriptResult.split("|");
                nde_year = val[0].split(",");
                nde_low = val[1].split(",");
                nde_medium = val[2].split(",");
                nde_medium_high = val[3].split(",");
                nde_high = val[4].split(",");
                nde_very_high = val[5].split(",");
                console.log(nde_year);
                console.log(nde_low);
                console.log(nde_medium);
                console.log(nde_medium_high);
                console.log(nde_high);
                console.log(nde_very_high);
                gen_chart_nde();
            },
            error: function (error) {
                console.log(error);
                get_token_startup();
                get_data_nde();
            }
        });    
    }

    function gen_chart_nde() {
        Highcharts.setOptions({
            lang: {
                decimalPoint: '.',
                thousandsSep: ','
            }
        });
        Highcharts.chart('structure-nde-insp-plan-chart', {
            chart: {
                type: 'column'
            },
            title: {
                text: ''
            },
            xAxis: {
                categories: nde_year.map(Number)
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
                            show_detail_nde(event);
                        }
                    }
                }
            },
            series: [{
                name: 'Very High',
                color: "#FF0000",
                data: nde_very_high.map(Number)
            },{
                name: 'High',
                color: "#F69546",
                data: nde_high.map(Number)
            }, {
                name: 'Medium High',
                color: "#FFCC00",
                data: nde_medium_high.map(Number)
            }, {
                name: 'Medium',
                color: "#FFFF00",
                data: nde_medium.map(Number)
            }, {
                name: 'Low',
                color: "#00AF50",
                data: nde_low.map(Number)
            }],
            credits: {
                enabled: false
            },
            exporting: {
                enabled: false
            }
        });
    }

    function show_detail_nde(e) {
        console.log(e);
        console.log($('#platform-ddl-nde').val());
        console.log(e.point.category);
        console.log(e.point.series.name);
        const platform = $('#platform-ddl-nde').val();
        const year = e.point.category;
        const risk = e.point.series.name;
        const param = "structure,nde," + platform + "," + year + "," + risk;
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
                gen_datagrid_detail(JSON.parse(data.response.scriptResult), 'NDE INSPECTION DUE')
            },
            error: function (error) {
                console.log(error);
                get_token_startup();
                show_detail_vt(e);
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
                            caption: "Risk Level",
                            alignment: "center",
                            headerCellTemplate: function (container) {
                                container.append($("<div>Risk<br>Level</div>"));
                            },
                            dataField: "risk_level",
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