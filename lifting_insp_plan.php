<div class="jumbotron jumbotron-header rounded-0 bg-secondary text-white">
    <div class="row">
        <div class="col-12">
            <h1 class="display-4">LIFTING INSPECTION PLAN</h1>
        </div>
    </div>
</div>
<div id="dashboard" class="row" style="margin-top: -70px;">
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
</div>
<script>
    get_lifting_equipment_summary();
    $('.loader').hide();
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
                get_token_dashboard();
                get_lifting_equipment_summary();
                //logout();
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
                color: '#66FF33',
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