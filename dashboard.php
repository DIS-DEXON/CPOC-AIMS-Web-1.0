<div class="jumbotron jumbotron-header rounded-0 bg-secondary text-white">
    <div class="row">
        <div class="col-12">
            <h1 class="display-4">INTEGRITY DASHBOARD</h1>
        </div>
    </div>
</div>
<div id="dashboard" class="row" style="margin-top: -70px;">
    <div class="col-sm-12 col-md-12 col-lg-6 col-xl-4 mb-4">
        <div class="card shadow border-0">
            <div class="card-body">
                <h5 class="card-title">Piping</h5>
                <div class="pie-chart-dashboard" id="piping-chart"></div>
                <!-- <a href="#" class="btn btn-primary">
                    GO TO PIPING <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                </a> -->
            </div>
        </div>
    </div>
    <div class="col-sm-12 col-md-12 col-lg-6 col-xl-4 mb-4">
        <div class="card shadow border-0">
            <div class="card-body">
                <h5 class="card-title">Flowline</h5>
                <div class="pie-chart-dashboard" id="flowline-chart"></div>
                <!-- <a href="#" class="btn btn-primary">
                    GO TO FLOWLINE <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                </a> -->
            </div>
        </div>
    </div>
    <div class="col-sm-12 col-md-12 col-lg-6 col-xl-4 mb-4">
        <div class="card shadow border-0">
            <div class="card-body">
                <h5 class="card-title">Pressure Vessel</h5>
                <div class="pie-chart-dashboard" id="vessel-chart"></div>
                <!-- <a href="#" class="btn btn-primary">
                    GO TO VESSEL <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                </a> -->
            </div>
        </div>
    </div>
    <div class="col-sm-12 col-md-12 col-lg-6 col-xl-4 mb-4">
        <div class="card shadow border-0">
            <div class="card-body">
                <h5 class="card-title">Pipeline</h5>
                <div class="pie-chart-dashboard" id="pipeline-chart"></div>
                <!-- <a href="#" class="btn btn-primary">
                    GO TO PIPELINE <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                </a> -->
            </div>
        </div>
    </div>
    <div class="col-sm-12 col-md-12 col-lg-6 col-xl-4 mb-4">
        <div class="card shadow border-0">
            <div class="card-body">
                <h5 class="card-title">Lifting Equipment</h5>
                <div class="pie-chart-dashboard" id="lifting-equipment-chart"></div>
                <!-- <a href="#" class="btn btn-primary">
                    GO TO LIFTING <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                </a> -->
            </div>
        </div>
    </div>
    <div class="col-sm-12 col-md-12 col-lg-6 col-xl-4 mb-4">
        <div class="card shadow border-0">
            <div class="card-body">
                <h5 class="card-title">Lifting Crane</h5>
                <div class="pie-chart-dashboard" id="lifting-crane-chart"></div>
                <!-- <a href="#" class="btn btn-primary">
                    GO TO LIFTING <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                </a> -->
            </div>
        </div>
    </div>
    <div class="col-sm-12 col-md-12 col-lg-6 col-xl-4 mb-4">
        <div class="card shadow border-0">
            <div class="card-body">
                <h5 class="card-title">Structure</h5>
                <div class="pie-chart-dashboard" id="structure-chart"></div>
                <!-- <a href="#" class="btn btn-primary">
                    GO TO STRUCTURE <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                </a> -->
            </div>
        </div>
    </div>
</div>

<script>
    var _token_dashboard = $.cookie("_token_dashboard");
    console.log($.cookie("_token_dashboard"));
    
    get_piping_summary();
    get_flowline_summary();
    get_vessel_summary();
    get_pipeline_summary();
    get_structure_summary();
    get_lifting_equipment_summary();

    $('.loader').hide();

    function get_piping_summary() {
        console.log('in')
        $.ajax({
            type: "GET",
            url: "https://" + url_api + "/fmi/data/v2/databases/CPOC_AIMS/layouts/piping_equipment/records?_limit=1",
            dataType: 'json',
            headers: {
                "Authorization": "Bearer " + $.cookie("_token_dashboard"),
                "Content-Type": "application/json"
            },
            async: false,
            success: function(data) {
                console.log(data.response.data);
                pp_p1_value = data.response.data[0].fieldData.P1;
                pp_p2_value = data.response.data[0].fieldData.P2;
                pp_p3_value = data.response.data[0].fieldData.P3;
                pp_p4_value = data.response.data[0].fieldData.P4;
                pp_p5_value = data.response.data[0].fieldData.P5;
                pp_p6_value = data.response.data[0].fieldData.P6;
                pp_no_value = data.response.data[0].fieldData.no_inspect;
                total = pp_p1_value + pp_p2_value + pp_p3_value + pp_p4_value + pp_p5_value + pp_p6_value + pp_no_value;
                pp_p1_percent = ( pp_p1_value / total ) * 100;
                pp_p2_percent = ( pp_p2_value / total ) * 100;
                pp_p3_percent = ( pp_p3_value / total ) * 100;
                pp_p4_percent = ( pp_p4_value / total ) * 100;
                pp_p5_percent = ( pp_p5_value / total ) * 100;
                pp_p6_percent = ( pp_p6_value / total ) * 100;
                pp_no_percent = ( pp_no_value / total ) * 100;
            },
            error: function(error) {
                console.log(error);
                logout();
                // get_token_dashboard();
                // get_piping_summary();
            }
        });
    }

    Highcharts.chart('piping-chart', {
        chart: {
            /*backgroundColor: ' #f8f9fa',*/
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: ''
        },
        legend: {
	        enabled: true,
            align: 'right',
            verticalAlign: 'middle',
            itemMarginTop: 1,
            itemMarginBottom: 1,
            layout: 'vertical',
            labelFormat: '{y_number}<br>{name}',
            itemStyle: {
                fontSize: "14px"
            }
   	    },
        tooltip: {
	        headerFormat: '<b>{point.key}</b><br>',
            pointFormat: '{series.name}: <b>{point.percentage:.2f}%</b><br>Number: <b>{point.y_number}</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: false,
                    format: '<b>{point.name}</b><br>{point.percentage:.2f} %<br>{point.y_number}'
                },
                showInLegend: true,
                borderWidth: 1,
	            borderColor: '#eee'
            }
        },
        series: [{
            name: 'Percent',
            colorByPoint: true,
            data: [{
                name: 'P1',
                color: "#FF0000",
                y: pp_p1_percent,
                y_number: pp_p1_value,
            }, {
                name: 'P2',
                color: "#F69546",
                y: pp_p2_percent,
                y_number: pp_p2_value,
            }, {
                name: 'P3',
                color: "#FFCC00",
                y: pp_p3_percent,
                y_number: pp_p3_value,
            }, {
                name: 'P4',
                color: "#FFFF00",
                y: pp_p4_percent,
                y_number: pp_p4_value,
            },{
                name: 'P5',
                color: "#66FF33",
                y: pp_p5_percent,
                y_number: pp_p5_value,
            },{
                name: 'P6',
                color: "#43a047",
                y: pp_p6_percent,
                y_number: pp_p6_value,
            },{
                name: 'No Inspect',
                color: "#EEEEEE",
                y: pp_no_percent,
                y_number: pp_no_value,
            }]
        }],
        credits: {
            enabled: false
        },
        exporting: {
            enabled: false
        }
    });

    function get_flowline_summary() {
        $.ajax({
            type: "GET",
            url: "https://" + url_api + "/fmi/data/v2/databases/CPOC_AIMS/layouts/flowline_equipment/records?_limit=1",
            dataType: 'json',
            headers: {
                "Authorization": "Bearer " + $.cookie("_token_dashboard"),
                "Content-Type": "application/json"
            },
            async: false,
            success: function(data) {
                console.log(data.response.data);
                fl_p1_value = data.response.data[0].fieldData.P1;
                fl_p2_value = data.response.data[0].fieldData.P2;
                fl_p3_value = data.response.data[0].fieldData.P3;
                fl_p4_value = data.response.data[0].fieldData.P4;
                fl_p5_value = data.response.data[0].fieldData.P5;
                fl_p6_value = data.response.data[0].fieldData.P6;
                fl_no_value = data.response.data[0].fieldData.no_inspect;
                total = fl_p1_value + fl_p2_value + fl_p3_value + fl_p4_value + fl_p5_value + fl_p6_value + fl_no_value;
                fl_p1_percent = ( fl_p1_value / total ) * 100;
                fl_p2_percent = ( fl_p2_value / total ) * 100;
                fl_p3_percent = ( fl_p3_value / total ) * 100;
                fl_p4_percent = ( fl_p4_value / total ) * 100;
                fl_p5_percent = ( fl_p5_value / total ) * 100;
                fl_p6_percent = ( fl_p6_value / total ) * 100;
                fl_no_percent = ( fl_no_value / total ) * 100;
            },
            error: function(error) {
                console.log(error);
                logout();
            }
        });
    }

    Highcharts.chart('flowline-chart', {
        chart: {
            /*backgroundColor: ' #f8f9fa',*/
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: ''
        },
        legend: {
	        enabled: true,
            align: 'right',
            verticalAlign: 'middle',
            itemMarginTop: 1,
            itemMarginBottom: 1,
            layout: 'vertical',
            labelFormat: '{y_number}<br>{name}',
            itemStyle: {
                fontSize: "14px"
            }
   	    },
        tooltip: {
	        headerFormat: '<b>{point.key}</b><br>',
            pointFormat: '{series.name}: <b>{point.percentage:.2f}%</b><br>Number: <b>{point.y_number}</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: false,
                    format: '<b>{point.name}</b><br>{point.percentage:.2f} %<br>{point.y_number}'
                },
                showInLegend: true,
                borderWidth: 1,
	            borderColor: '#eee'
            }
        },
        series: [{
            name: 'Percent',
            colorByPoint: true,
            data: [{
                name: 'P1',
                color: "#FF0000",
                y: fl_p1_percent,
                y_number: fl_p1_value,
            }, {
                name: 'P2',
                color: "#F69546",
                y: fl_p2_percent,
                y_number: fl_p2_value,
            }, {
                name: 'P3',
                color: "#FFCC00",
                y: fl_p3_percent,
                y_number: fl_p3_value,
            }, {
                name: 'P4',
                color: "#FFFF00",
                y: fl_p4_percent,
                y_number: fl_p4_value,
            },{
                name: 'P5',
                color: "#66FF33",
                y: fl_p5_percent,
                y_number: fl_p5_value,
            },{
                name: 'P6',
                color: "#43a047",
                y: fl_p6_percent,
                y_number: fl_p6_value,
            },{
                name: 'No Inspect',
                color: "#EEEEEE",
                y: fl_no_percent,
                y_number: fl_no_value,
            }]
        }],
        credits: {
            enabled: false
        },
        exporting: {
            enabled: false
        }
    });

    function get_vessel_summary() {
        $.ajax({
            type: "GET",
            url: "https://" + url_api + "/fmi/data/v2/databases/CPOC_AIMS/layouts/vessel_equipment/records?_limit=1",
            dataType: 'json',
            headers: {
                "Authorization": "Bearer " + $.cookie("_token_dashboard"),
                "Content-Type": "application/json"
            },
            async: false,
            success: function (data) {
                console.log(data.response.data);
                pv_p1_value = data.response.data[0].fieldData.P1;
                pv_p2_value = data.response.data[0].fieldData.P2;
                pv_p3_value = data.response.data[0].fieldData.P3;
                pv_p4_value = data.response.data[0].fieldData.P4;
                pv_p5_value = data.response.data[0].fieldData.P5;
                pv_p6_value = data.response.data[0].fieldData.P6;
                pv_no_value = data.response.data[0].fieldData.no_inspect;
                total = pv_p1_value + pv_p2_value + pv_p3_value + pv_p4_value + pv_p5_value + pv_p6_value + pv_no_value;
                pv_p1_percent = ( pv_p1_value / total ) * 100;
                pv_p2_percent = ( pv_p2_value / total ) * 100;
                pv_p3_percent = ( pv_p3_value / total ) * 100;
                pv_p4_percent = ( pv_p4_value / total ) * 100;
                pv_p5_percent = ( pv_p5_value / total ) * 100;
                pv_p6_percent = ( pv_p6_value / total ) * 100;
                pv_no_percent = ( pv_no_value / total ) * 100;
            },
            error: function (error) {
                console.log(error);
                logout();
            }
        });
    }

    Highcharts.chart('vessel-chart', {
        chart: {
            /*backgroundColor: ' #f8f9fa',*/
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: ''
        },
        legend: {
	        enabled: true,
            align: 'right',
            verticalAlign: 'middle',
            itemMarginTop: 1,
            itemMarginBottom: 1,
            layout: 'vertical',
            labelFormat: '{y_number}<br>{name}',
            itemStyle: {
                fontSize: "14px"
            }
   	    },
        tooltip: {
	        headerFormat: '<b>{point.key}</b><br>',
            pointFormat: '{series.name}: <b>{point.percentage:.2f}%</b><br>Number: <b>{point.y_number}</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: false,
                    format: '<b>{point.name}</b><br>{point.percentage:.2f} %<br>{point.y_number}'
                },
                showInLegend: true,
                borderWidth: 1,
	            borderColor: '#eee'
            }
        },
        series: [{
            name: 'Percent',
            colorByPoint: true,
            data: [{
                name: 'P1',
                color: "#FF0000",
                y: pv_p1_percent,
                y_number: pv_p1_value,
            }, {
                name: 'P2',
                color: "#F69546",
                y: pv_p2_percent,
                y_number: pv_p2_value,
            }, {
                name: 'P3',
                color: "#FFCC00",
                y: pv_p3_percent,
                y_number: pv_p3_value,
            }, {
                name: 'P4',
                color: "#FFFF00",
                y: pv_p4_percent,
                y_number: pv_p4_value,
            },{
                name: 'P5',
                color: "#66FF33",
                y: pv_p5_percent,
                y_number: pv_p5_value,
            },{
                name: 'P6',
                color: "#43a047",
                y: pv_p6_percent,
                y_number: pv_p6_value,
            },{
                name: 'No Inspect',
                color: "#EEEEEE",
                y: pv_no_percent,
                y_number: pv_no_value,
            }]
        }],
        credits: {
            enabled: false
        },
        exporting: {
            enabled: false
        }
    });

    function get_pipeline_summary() {
        $.ajax({
            type: "GET",
            url: "https://" + url_api + "/fmi/data/v2/databases/CPOC_AIMS/layouts/pipeline_equipment/records?_limit=1",
            dataType: 'json',
            headers: {
                "Authorization": "Bearer " + $.cookie("_token_dashboard"),
                "Content-Type": "application/json"
            },
            async: false,
            success: function (data) {
                console.log(data.response.data);
                pl_p1_value = data.response.data[0].fieldData.P1;
                pl_p2_value = data.response.data[0].fieldData.P2;
                pl_p3_value = data.response.data[0].fieldData.P3;
                pl_p4_value = data.response.data[0].fieldData.P4;
                pl_p5_value = data.response.data[0].fieldData.P5;
                pl_p6_value = data.response.data[0].fieldData.P6;
                pl_no_value = data.response.data[0].fieldData.no_inspect;
                total = pl_p1_value + pl_p2_value + pl_p3_value + pl_p4_value + pl_p5_value + pl_p6_value + pl_no_value;
                pl_p1_percent = ( pl_p1_value / total ) * 100;
                pl_p2_percent = ( pl_p2_value / total ) * 100;
                pl_p3_percent = ( pl_p3_value / total ) * 100;
                pl_p4_percent = ( pl_p4_value / total ) * 100;
                pl_p5_percent = ( pl_p5_value / total ) * 100;
                pl_p6_percent = ( pl_p6_value / total ) * 100;
                pl_no_percent = ( pl_no_value / total ) * 100;
            },
            error: function (error) {
                console.log(error);
                logout();
            }
        });
    }

    Highcharts.chart('pipeline-chart', {
        chart: {
            /*backgroundColor: ' #f8f9fa',*/
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: ''
        },
        legend: {
	        enabled: true,
            align: 'right',
            verticalAlign: 'middle',
            itemMarginTop: 1,
            itemMarginBottom: 1,
            layout: 'vertical',
            labelFormat: '{y_number}<br>{name}',
            itemStyle: {
                fontSize: "14px"
            }
   	    },
        tooltip: {
	        headerFormat: '<b>{point.key}</b><br>',
            pointFormat: '{series.name}: <b>{point.percentage:.2f}%</b><br>Number: <b>{point.y_number}</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: false,
                    format: '<b>{point.name}</b><br>{point.percentage:.2f} %<br>{point.y_number}'
                },
                showInLegend: true,
                borderWidth: 1,
	            borderColor: '#eee'
            }
        },
        series: [{
            name: 'Percent',
            colorByPoint: true,
            data: [{
                name: 'P1',
                color: "#FF0000",
                y: pl_p1_percent,
                y_number: pl_p1_value,
            }, {
                name: 'P2',
                color: "#F69546",
                y: pl_p2_percent,
                y_number: pl_p2_value,
            }, {
                name: 'P3',
                color: "#FFCC00",
                y: pl_p3_percent,
                y_number: pl_p3_value,
            }, {
                name: 'P4',
                color: "#FFFF00",
                y: pl_p4_percent,
                y_number: pl_p4_value,
            },{
                name: 'P5',
                color: "#66FF33",
                y: pl_p5_percent,
                y_number: pl_p5_value,
            },{
                name: 'P6',
                color: "#43a047",
                y: pl_p6_percent,
                y_number: pl_p6_value,
            },{
                name: 'No Inspect',
                color: "#EEEEEE",
                y: pl_no_percent,
                y_number: pl_no_value,
            }]
        }],
        credits: {
            enabled: false
        },
        exporting: {
            enabled: false
        }
    });

    function get_structure_summary() {
        $.ajax({
            type: "GET",
            url: "https://" + url_api + "/fmi/data/v2/databases/CPOC_AIMS/layouts/structure_equipment/records?_limit=1",
            dataType: 'json',
            headers: {
                "Authorization": "Bearer " + $.cookie("_token_dashboard"),
                "Content-Type": "application/json"
            },
            async: false,
            success: function (data) {
                console.log(data.response.data);
                st_p1_value = data.response.data[0].fieldData.P1_total;
                st_p2_value = data.response.data[0].fieldData.P2_total;
                st_p3_value = data.response.data[0].fieldData.P3_total;
                st_p4_value = data.response.data[0].fieldData.P4_total;
                st_p5_value = data.response.data[0].fieldData.P5_total;
                st_p6_value = data.response.data[0].fieldData.P6_total;
                st_no_value = data.response.data[0].fieldData.no_inspect_total;
                total = st_p1_value + st_p2_value + st_p3_value + st_p4_value + st_p5_value + st_p6_value + st_no_value;
                st_p1_percent = ( st_p1_value / total ) * 100;
                st_p2_percent = ( st_p2_value / total ) * 100;
                st_p3_percent = ( st_p3_value / total ) * 100;
                st_p4_percent = ( st_p4_value / total ) * 100;
                st_p5_percent = ( st_p5_value / total ) * 100;
                st_p6_percent = ( st_p6_value / total ) * 100;
                st_no_percent = ( st_no_value / total ) * 100;
            },
            error: function (error) {
                console.log(error);
                logout();
            }
        });
    }

    Highcharts.chart('structure-chart', {
        chart: {
            /*backgroundColor: ' #f8f9fa',*/
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: ''
        },
        legend: {
	        enabled: true,
            align: 'right',
            verticalAlign: 'middle',
            itemMarginTop: 1,
            itemMarginBottom: 1,
            layout: 'vertical',
            labelFormat: '{y_number}<br>{name}',
            itemStyle: {
                fontSize: "14px"
            }
   	    },
        tooltip: {
	        headerFormat: '<b>{point.key}</b><br>',
            pointFormat: '{series.name}: <b>{point.percentage:.2f}%</b><br>Number: <b>{point.y_number}</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: false,
                    format: '<b>{point.name}</b><br>{point.percentage:.2f} %<br>{point.y_number}'
                },
                showInLegend: true,
                borderWidth: 1,
	            borderColor: '#eee'
            }
        },
        series: [{
            name: 'Percent',
            colorByPoint: true,
            data: [{
                name: 'P1',
                color: "#FF0000",
                y: st_p1_percent,
                y_number: st_p1_value,
            }, {
                name: 'P2',
                color: "#F69546",
                y: st_p2_percent,
                y_number: st_p2_value,
            }, {
                name: 'P3',
                color: "#FFCC00",
                y: st_p3_percent,
                y_number: st_p3_value,
            }, {
                name: 'P4',
                color: "#FFFF00",
                y: st_p4_percent,
                y_number: st_p4_value,
            },{
                name: 'P5',
                color: "#66FF33",
                y: st_p5_percent,
                y_number: st_p5_value,
            },{
                name: 'P6',
                color: "#43a047",
                y: st_p6_percent,
                y_number: st_p6_value,
            },{
                name: 'No Inspect',
                color: "#EEEEEE",
                y: st_no_percent,
                y_number: st_no_value,
            }]
        }],
        credits: {
            enabled: false
        },
        exporting: {
            enabled: false
        }
    });

    function get_lifting_equipment_summary() {
        $.ajax({
            type: "GET",
            url: "https://" + url_api + "/fmi/data/v2/databases/CPOC_AIMS/layouts/lifting_equipment/records?_limit=1",
            dataType: 'json',
            headers: {
                "Authorization": "Bearer " + $.cookie("_token_dashboard"),
                "Content-Type": "application/json"
            },
            async: false,
            success: function (data) {
                console.log(data.response.data);
                lte_accepted_value = data.response.data[0].fieldData.accepted_equipment;
                lte_maintenance_value = data.response.data[0].fieldData.maintenance_equipment;
                lte_overdue_value = data.response.data[0].fieldData.overdue_equipment;
                lte_quarantine_value = data.response.data[0].fieldData.quarantine_equipment;
                lte_rejected_value = data.response.data[0].fieldData.rejected_equipment;
                lte_no_value = data.response.data[0].fieldData.no_inspect_equipment;
                total = lte_accepted_value + lte_maintenance_value + lte_overdue_value + lte_quarantine_value + lte_rejected_value + lte_no_value;
                lte_accepted_percent = ( lte_accepted_value / total ) * 100;
                lte_maintenance_percent = ( lte_maintenance_value / total ) * 100;
                lte_overdue_percent = ( lte_overdue_value / total ) * 100;
                lte_quarantine_percent = ( lte_quarantine_value / total ) * 100;
                lte_rejected_percent = ( lte_rejected_value / total ) * 100;
                lte_no_percent = ( lte_no_value / total ) * 100;

                accepted_color = data.response.data[0].fieldData.accepted_color;

                ltc_accepted_value = data.response.data[0].fieldData.accepted_crane;
                ltc_maintenance_value = data.response.data[0].fieldData.maintenance_crane;
                ltc_overdue_value = data.response.data[0].fieldData.overdue_crane;
                ltc_quarantine_value = data.response.data[0].fieldData.quarantine_crane;
                ltc_rejected_value = data.response.data[0].fieldData.rejected_crane;
                ltc_no_value = data.response.data[0].fieldData.no_inspect_crane;
                total = ltc_accepted_value + ltc_maintenance_value + ltc_overdue_value + ltc_quarantine_value + ltc_rejected_value + ltc_no_value;
                ltc_accepted_percent = ( ltc_accepted_value / total ) * 100;
                ltc_maintenance_percent = ( ltc_maintenance_value / total ) * 100;
                ltc_overdue_percent = ( ltc_overdue_value / total ) * 100;
                ltc_quarantine_percent = ( ltc_quarantine_value / total ) * 100;
                ltc_rejected_percent = ( ltc_rejected_value / total ) * 100;
                ltc_no_percent = ( ltc_no_value / total ) * 100;
            },
            error: function (error) {
                console.log(error);
                logout();
            }
        });
    }

    function lifting_color_code(color) {
        if(color == "Yellow") {
            return "#FFFF00";
        } else if(color == "Pink") {
            return "#FF97FF";
        } else if(color == "Orange") {
            return "#FF481C";
        } else if(color == "Purple") {
            return "#9733FF";
        }
    }

    Highcharts.chart('lifting-equipment-chart', {
        chart: {
            /*backgroundColor: ' #f8f9fa',*/
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: ''
        },
        legend: {
	        enabled: true,
            align: 'right',
            verticalAlign: 'middle',
            itemMarginTop: 1,
            itemMarginBottom: 1,
            layout: 'vertical',
            labelFormat: '{y_number}<br>{name}',
            itemStyle: {
                fontSize: "14px"
            }
   	    },
        tooltip: {
	        headerFormat: '<b>{point.key}</b><br>',
            pointFormat: '{series.name}: <b>{point.percentage:.2f}%</b><br>Number: <b>{point.y_number}</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: false,
                    format: '<b>{point.name}</b><br>{point.percentage:.2f} %<br>{point.y_number}'
                },
                showInLegend: true,
                borderWidth: 1,
	            borderColor: '#eee'
            }
        },
        series: [{
            name: 'Percent',
            colorByPoint: true,
            data: [{
                name: 'Accepted',
                color: lifting_color_code(accepted_color),
                y: lte_accepted_percent,
                y_number: lte_accepted_value,
            }, {
                name: 'Maintenance',
                color: "#FFFFFF",
                y: lte_maintenance_percent,
                y_number: lte_maintenance_value,
            }, {
                name: 'Overdue',
                color: "#B3B3B3",
                y: lte_overdue_percent,
                y_number: lte_overdue_value,
            }, {
                name: 'Quarantine',
                color: "#00AFEF",
                y: lte_quarantine_percent,
                y_number: lte_quarantine_value,
            },{
                name: 'Rejected',
                color: "#FF0000",
                y: lte_rejected_percent,
                y_number: lte_rejected_value,
            },{
                name: 'No Inspect',
                color: "#EEEEEE",
                y: lte_no_percent,
                y_number: lte_no_value,
            }]
        }],
        credits: {
            enabled: false
        },
        exporting: {
            enabled: false
        }
    });

    Highcharts.chart('lifting-crane-chart', {
        chart: {
            /*backgroundColor: ' #f8f9fa',*/
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: ''
        },
        legend: {
	        enabled: true,
            align: 'right',
            verticalAlign: 'middle',
            itemMarginTop: 1,
            itemMarginBottom: 1,
            layout: 'vertical',
            labelFormat: '{y_number}<br>{name}',
            itemStyle: {
                fontSize: "14px"
            }
   	    },
        tooltip: {
	        headerFormat: '<b>{point.key}</b><br>',
            pointFormat: '{series.name}: <b>{point.percentage:.2f}%</b><br>Number: <b>{point.y_number}</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: false,
                    format: '<b>{point.name}</b><br>{point.percentage:.2f} %<br>{point.y_number}'
                },
                showInLegend: true,
                borderWidth: 1,
	            borderColor: '#eee'
            }
        },
        series: [{
            name: 'Percent',
            colorByPoint: true,
            data: [{
                name: 'Accepted',
                color: lifting_color_code(accepted_color),
                y: ltc_accepted_percent,
                y_number: ltc_accepted_value,
            }, {
                name: 'Maintenance',
                color: "#FFFFFF",
                y: ltc_maintenance_percent,
                y_number: ltc_maintenance_value,
            }, {
                name: 'Overdue',
                color: "#B3B3B3",
                y: ltc_overdue_percent,
                y_number: ltc_overdue_value,
            }, {
                name: 'Quarantine',
                color: "#00AFEF",
                y: ltc_quarantine_percent,
                y_number: ltc_quarantine_value,
            },{
                name: 'Rejected',
                color: "#FF0000",
                y: ltc_rejected_percent,
                y_number: ltc_rejected_value,
            },{
                name: 'No Inspect',
                color: "#EEEEEE",
                y: ltc_no_percent,
                y_number: ltc_no_value,
            }]
        }],
        credits: {
            enabled: false
        },
        exporting: {
            enabled: false
        }
    });
</script>