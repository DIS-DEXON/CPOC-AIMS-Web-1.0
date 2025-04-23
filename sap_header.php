<div class="jumbotron jumbotron-header rounded-0 bg-secondary text-white">
    <div class="row">
        <div class="col-12">
            <h1 class="display-4">CM WO PERFORMANCE</h1>
        </div>

    </div>
</div>
<div class="wrapper-form shadow">
    <div id="summary" style="font-size: 14px; font-weight: 600;">
        <div class="form-inline mt-2">YEAR: <div id="selectYear" class="ml-2" style="width: 85px;"></div></div>
        <div>
            <div id="month-data" style="display: grid; width: 100%; grid-template-columns: repeat(14,7.142%); background-color: #fff;"></div>
        </div>
        <div>
            <div id="opened-data" style="display: grid; width: 100%; grid-template-columns: repeat(14,7.142%); background-color: #fff;"></div>
        </div>
        <div>
            <div id="closed-data" style="display: grid; width: 100%; grid-template-columns: repeat(14,7.142%); background-color: #fff;"></div>
        </div>
    </div>
    <div class="row mt-2">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 mb-4">
            <div class="card border-1">
                <div class="card-body" style="padding: 0;">
                    <div class="row">
                        <!-- <div class="col-12">
                            <div class="pie-chart-dashboard" id="main-work-ctr-chart"></div>
                        </div> -->
                        <div class="col-12">
                            <div class="pie-chart-dashboard" id="cm-wo-chart"></div>
                        </div>
                        <div class="col-12">
                            <hr>
                            <div class="pie-chart-dashboard" id="cm-due-chart"></div>
                        </div>
                        <div class="col-md-3">
                            <div class="pie-chart-dashboard" id="priority-chart"></div>
                        </div>
                        <div class="col-md-3">
                            <div class="pie-chart-dashboard" id="main-work-ctr-chart"></div>
                        </div>
                        <div class="col-md-3">
                            <div class="pie-chart-dashboard" id="acc-chart"></div>   
                        </div>
                        <div class="col-md-3">
                            <div class="pie-chart-dashboard" id="scaff-chart"></div> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="dataGrid-sap"></div>
    <!-- <div class="mt-2">
        <button type="button" class="btn btn-sm btn-danger rounded-circle mr-1" style="padding: 0.5rem;"></button> Overdue
        <button type="button" class="btn btn-sm btn-warning rounded-circle mr-1 ml-2" style="padding: 0.5rem;"></button> Pending Approval
        <button type="button" class="btn btn-sm btn-success-1 rounded-circle mr-1 ml-2" style="padding: 0.5rem;"></button> Active
        <button type="button" class="btn btn-sm btn-success rounded-circle mr-1 ml-2" style="padding: 0.5rem;"></button> Closed
    </div> -->
    <!-- <div id="dataGid_static"></div> -->
</div>

<script>
    var _token_dashboard = $.cookie("_token_dashboard");
    console.log("_token_dashboard: " + _token_dashboard);
    var dataGrid;
    var dataArr = [];
    var overdue = 0;
    var active = 0;
    var pending_approval = 0;
    var _closed = 0;
    var cm_avg_closed = [];
    var cm_opend = [];
    var cm_closed = [];
    var yearSelected = new Date().getFullYear();
    var years = [2022, 2023, 2024, 2025, 2026, 2027, 2028, 2029, 2030];
    var dataYearP = {};
    var dataYearAcc = {};
    var dataYearScaf = {};
    var filterPriority = "";
    var filterAcc = "";
    var filterScaf = "";
    var sap_summary_by_year = [
        {
            month: 1,
            month_name: "Jan",
            opened: 0,
            closed: 0,
        },
        {
            month: 2,
            month_name: "Feb",
            opened: 0,
            closed: 0,
        },
        {
            month: 3,
            month_name: "Mar",
            opened: 0,
            closed: 0,
        },
        {
            month: 4,
            month_name: "Apr",
            opened: 0,
            closed: 0,
        },
        {
            month: 5,
            month_name: "May",
            opened: 0,
            closed: 0,
        },
        {
            month: 6,
            month_name: "Jun",
            opened: 0,
            closed: 0,
        },
        {
            month: 7,
            month_name: "Jul",
            opened: 0,
            closed: 0,
        },
        {
            month: 8,
            month_name: "Aug",
            opened: 0,
            closed: 0,
        },
        {
            month: 9,
            month_name: "Sep",
            opened: 0,
            closed: 0,
        },
        {
            month: 10,
            month_name: "Oct",
            opened: 0,
            closed: 0,
        },
        {
            month: 11,
            month_name: "Nov",
            opened: 0,
            closed: 0,
        },
        {
            month: 12,
            month_name: "Dec",
            opened: 0,
            closed: 0,
        },
    ]
    var p_color = ["#FF0000","#F69546","#FFCC00","#FFFF00","#66FF33"];
    
    get_sap_piping();
    get_sap_vessel();
    get_sap_flowline();
    get_sap_structure();
    get_sap_riser();
    // get_sap_crane();
    console.log('dataArr');
    console.log(dataArr);
    for(var d = 0; d < dataArr.length; d++) {
        if(dataArr[d].fieldData.required_end_date == "") {
            dataArr[d].fieldData.required_end_date = null;
        }
        if(dataArr[d].fieldData.changed_on_closed == '') {
            dataArr[d].fieldData.changed_on_closed = null;
        }
    }
    create_table(dataArr);

    var dataArrFilterYearOpened = [];
    var dataArrFilterYearClosed = [];
    setup_data();
    filter_year_data_arr(yearSelected);
    get_chart_cm_wo();

    $('.loader').hide();

    $('#selectYear').dxSelectBox({
        dataSource: years,
        value: yearSelected,
        onValueChanged(data) {
            console.log(data);
            filter_year_data_arr(data.value);
            // dataGridIc.clearFilter();
            // dataGridIc.filter(['fieldData.start_date_year', '=', data.value]);
        },
    });

    
    function setup_data() {
        // Year and P
        dataArr.forEach(item => {   
            if(!item.fieldData.upcoming_repair_date) return
            const year = parseInt(item.fieldData.upcoming_repair_date.split("/")[2]);
            if (!dataYearP[year]) {
                dataYearP[year] = {
                    "P0": 0,
                    "P1": 0,
                    "P2": 0,
                    "P3": 0,
                    "P4": 0,
                    "P5": 0,
                    "P6": 0,
                    "Total": 0,
                    "Full SD": 0,
                    "Partial SD": 0,
                    "Train SD/Unit SD": 0,
                    "On-stream": 0,
                    "Yes": 0,
                    "No": 0,
                }
            }
            dataYearP[year][item.fieldData.integrity_status] += 1
            dataYearP[year][item.fieldData.accessibility_value] += 1
            dataYearP[year][item.fieldData.scaffolding_requirement] += 1
            dataYearP[year]["Total"] += 1
        })
        console.warn(dataYearP);
        var y = Object.keys(dataYearP);
        var data = [];
        y.forEach(item => {
            data.push(dataYearP[item].Total);
        })
        get_chart_cm_due(y, data);
    }

    function filter_year_data_arr(y) {
        console.log(y);
        dataArrFilterYearOpened = dataArr.filter(function(d){
            return d.fieldData.required_end_date && d.fieldData.required_end_date.indexOf(y) !== -1 && d.fieldData.status != 'Not Count';
        });

        dataArrFilterYearClosed = dataArr.filter(function(d){
            return d.fieldData.changed_on_closed && d.fieldData.changed_on_closed.indexOf(y) !== -1 && d.fieldData.status != 'Not Count';
        });
        yearSelected = y;
        get_summary();
        get_chart_cm_wo();
    }

    function get_summary() {
        console.log(yearSelected);
        var month_html = '<div class="summary-item" style="background-color: #fff;">YEAR<br>' + yearSelected + '</div>';
        var opened_html = '<div class="summary-item" style="background-color: #ffff00;">OPENED</div>';
        var closed_html = '<div class="summary-item" style="background-color: #66FF33;">CLOSED</div>';
        var total_opened = 0;
        var total_closed = 0;
        cm_opend = [];
        cm_closed = [];
        for(var i = 0; i < sap_summary_by_year.length; i++) {
            var _opened = dataArrFilterYearOpened.filter(function(d) {
                return Number(d.fieldData.required_end_date.split("/")[0]) == sap_summary_by_year[i].month;
            });
            var _closed = dataArrFilterYearClosed.filter(function(d) {
                return Number(d.fieldData.changed_on_closed.split("/")[0]) == sap_summary_by_year[i].month;
            })

            //console.warn(_opened);

            sap_summary_by_year[i].opened = _opened.length;
            cm_opend.push(sap_summary_by_year[i].opened);
            total_opened += _opened.length;
            sap_summary_by_year[i].closed = _closed.length;
            cm_closed.push(sap_summary_by_year[i].closed);
            total_closed += _closed.length;

            o_h = '<div class="summary-item">' + sap_summary_by_year[i].opened + '</div>';
            opened_html = opened_html + o_h;
            c_h = '<div class="summary-item">' + sap_summary_by_year[i].closed + '</div>';
            closed_html = closed_html + c_h;

            m_h = '<div class="summary-item" style="background-color: #fff;"">' + sap_summary_by_year[i].month_name + '</div>';
            month_html = month_html + m_h;
        }
        $('#opened-data').html(opened_html + '<div class="summary-item" style="background-color: #ddd;">' + total_opened + '</div>');
        $('#closed-data').html(closed_html + '<div class="summary-item" style="background-color: #ddd;">' + total_closed +'</div>');
        $('#month-data').html(month_html + '<div class="summary-item" style="background-color: #fff;">TOTAL</div>')
        var avg_closed = parseFloat((total_closed / 12).toFixed(2));
        cm_avg_closed = [];
        for(var i = 0; i < 12; i++) {
            cm_avg_closed.push(avg_closed);
        }
        //console.warn(cm_avg_closed);
    }

    function get_chart_cm_wo() {
        Highcharts.chart('cm-wo-chart', {
            title: {
                text: 'CM WO PERFORMANCE',
                align: 'center'
            },
            xAxis: {
                categories: [
                    "Jan",
                    "Feb",
                    "Mar",
                    "Apr",
                    "May",
                    "Jun",
                    "Jul",
                    "Aug",
                    "Sep",
                    "Oct",
                    "Nov",
                    "Dec",]
            },
            yAxis: {
                title: {
                    text: 'Work Order'
                }
            },
            tooltip: {
                valueSuffix: ' works'
            },
            plotOptions: {
                series: {
                    borderRadius: '0%'
                }
            },
            series: [{
                type: 'column',
                name: 'CM WO Opened',
                data: cm_opend
            }, {
                type: 'line',
                name: 'CM WO Closed',
                data: cm_closed,
                color: 'green',
                lineWidth: 2,
                marker: {
                    enabled: false
                },
            }, {
                type: 'line',
                name: 'Linear (CM WO Closed)',
                data: cm_avg_closed,
                color: 'green',
                lineWidth: 2,
                marker: {
                    enabled: false
                },
                dashStyle: 'shortdot',
            }],
            credits: {
                enabled: false
            },
            exporting: {
                enabled: false
            }
        });
    }

    function get_chart_cm_due(_y, _data) {
        Highcharts.chart('cm-due-chart', {
            title: {
                text: 'CM DUE DATE',
                align: 'center'
            },
            xAxis: {
                categories: _y
            },
            yAxis: {
                title: {
                    text: 'Work Order'
                }
            },
            tooltip: {
                valueSuffix: ' works'
            },
            plotOptions: {
                series: {
                    borderRadius: '0%',
                    cursor: 'pointer',
                    events: {
                        click: function (event) {
                            console.log(event);
                            filter_detail_chart(event);
                        }
                    },
                },
            },
            series: [{
                type: 'column',
                name: 'Due',
                data: _data,
                states: {
                    select: {
                        color: '#d500f9'
                    }
                },
                allowPointSelect: true
            }],
            credits: {
                enabled: false
            },
            exporting: {
                enabled: false
            }
        });
        var empty_data = {
            "P0": 0,
            "P1": 0,
            "P2": 0,
            "P3": 0,
            "P4": 0,
            "P5": 0,
            "P6": 0,
            "Total": 0,
            "Full SD": 0,
            "Partial SD": 0,
            "Train SD/Unit SD": 0,
            "On-stream": 0,
            "Yes": 0,
            "No": 0,
        }
        get_chart_priority(empty_data);
        get_chart_acc(empty_data);
        get_chart_scaff(empty_data);
        get_chart_work_main_ctr(0);
    }

    function filter_detail_chart(e) {
        clear_filter();
        console.log(e.point.category);
        const year_filter = [];
        year_filter[0] = e.point.category;
        dataGrid.columnOption('fieldData.upcoming_repair_date','filterValues', year_filter);
        get_chart_priority(dataYearP[e.point.category]);
        get_chart_acc(dataYearP[e.point.category]);
        get_chart_scaff(dataYearP[e.point.category]);
        get_chart_work_main_ctr(e.point.category);
    }

    function get_chart_priority(data) {
        console.log(data);
        Highcharts.chart('priority-chart', {
            chart: {
                /*backgroundColor: ' #f8f9fa',*/
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {
                text: 'Priority'
            },
            legend: {
            enabled: true,
                    itemDistance: 5,
            margin: 0
            },
            tooltip: {
                headerFormat: '<b>{point.key}</b><br>',
                pointFormat: '{series.name}: <b>{point.percentage:.2f}%</b><br>Number: <b>{point.y_number}</b>'
            },
            plotOptions: {
                pie: {
                    // allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: false,
                        format: '<b>{point.name}</b><br>{point.percentage:.2f} %<br>{point.y_number}'
                    },
                    showInLegend: true,
                    borderWidth: 1,
                    borderColor: '#eeeeee',
                    events: {
                        // click: function (event) {
                        //     console.log(event.point.name);
                        //     const val = [];
                        //     if(filterPriority != event.point.name) {  
                        //         filterPriority = event.point.name;
                        //         val[0] = event.point.name;
                        //     } else {
                        //         filterPriority = '';
                        //     }
                        //     dataGrid.columnOption('fieldData.integrity_status','filterValues', val);
                        // }
                    }
                },
                series: {
                    point: {
                        events: {
                            click: function(event){
                                this.select(null, true)  
                                const selected_point = this.series.chart.getSelectedPoints()
                                //console.log(selected_point);
                                const selected = selected_point.map(item => ({index: item.index, color: item.color})) // to get name (for filter) use item.name 
                                const val = selected_point.map(item => ( item.name ))
                                const all_point = this.series.chart.series[0].data
                                // console.log(all_point);
                                all_point.forEach(item => {
                                    if (selected.length == 0) {
                                    item.update({color: item.color.substring(0, 7)})
                                    return
                                }
                                    if (selected.find(x => x.index == item.index)) {
                                    item.update({color: item.color.substring(0, 7)})
                                } else {
                                    item.update({color: item.color + (item.color.length < 9 ? "44" : "")}) // 44 opacity level 44 (range from 00 - FF)
                                }
                                })
                                dataGrid.columnOption('fieldData.integrity_status','filterValues', val);
                            }
                        }
                    }
                }
            },
            series: [{
                name: 'Percent',
                colorByPoint: true,
                data: [
                {
                    name: 'P1',
                    color: "#FF0000",
                    y: data.P1,
                    y_number: data.P1,
                }, {
                    name: 'P2',
                    color: "#F69546",
                    y: data.P2,
                    y_number: data.P2,
                },{
                    name: 'P3',
                    color: "#FFCC00",
                    y: data.P3,
                    y_number: data.P3,
                },{
                    name: 'P4',
                    color: "#FFFF00",
                    y: data.P4,
                    y_number: data.P4,
                },{
                    name: 'P5',
                    color: "#66FF33",
                    y: data.P5,
                    y_number: data.P5,
                }]
            }],
            credits: {
                enabled: false
            },
            exporting: {
                enabled: false
            }
        });
    }

    function get_chart_acc(data) {
        console.log(data);
        Highcharts.chart('acc-chart', {
            chart: {
                /*backgroundColor: ' #f8f9fa',*/
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {
                text: 'Accessibility'
            },
            legend: {
            enabled: true,
                    itemDistance: 5,
            margin: 0
            },
            tooltip: {
                headerFormat: '<b>{point.key}</b><br>',
                pointFormat: '{series.name}: <b>{point.percentage:.2f}%</b><br>Number: <b>{point.y_number}</b>'
            },
            plotOptions: {
                pie: {
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: false,
                        format: '<b>{point.name}</b><br>{point.percentage:.2f} %<br>{point.y_number}'
                    },
                    showInLegend: true,
                    borderWidth: 1,
                    borderColor: '#eeeeee',
                    // events: {
                    //     click: function (event) {
                    //         console.log(event.point.name);
                    //         const val = [];
                    //         if(filterAcc != event.point.name) {  
                    //             filterAcc = event.point.name;
                    //             val[0] = event.point.name;
                    //         } else {
                    //             filterAcc = '';
                    //         }
                    //         dataGrid.columnOption('fieldData.accessibility_value','filterValues', val);
                    //     }
                    // }
                },
                series: {
                    point: {
                        events: {
                            click: function(event){
                                this.select(null, true)  
                                const selected_point = this.series.chart.getSelectedPoints()
                                const selected = selected_point.map(item => ({index: item.index, color: item.color}))
                                const val = selected_point.map(item => ( item.name ))
                                const all_point = this.series.chart.series[0].data
                                all_point.forEach(item => {
                                    if (selected.length == 0) {
                                    item.update({color: item.color.substring(0, 7)})
                                    return
                                }
                                    if (selected.find(x => x.index == item.index)) {
                                    item.update({color: item.color.substring(0, 7)})
                                } else {
                                    item.update({color: item.color + (item.color.length < 9 ? "44" : "")}) // 44 opacity level 44 (range from 00 - FF)
                                }
                                })
                                dataGrid.columnOption('fieldData.accessibility_value','filterValues', val);
                            }
                        }
                    }
                }
            },
            series: [{
                name: 'Percent',
                colorByPoint: true,
                data: [
                {
                    name: 'Full SD',
                    y: data['Full SD'],
                    y_number: data["Full SD"],
                }, {
                    name: 'Partial SD',
                    y: data["Partial SD"],
                    y_number: data["Partial SD"],
                },{
                    name: 'Train SD/Unit SD',
                    y: data["Train SD/Unit SD"],
                    y_number: data["Train SD/Unit SD"],
                },{
                    name: 'On-stream',
                    y: data["On-stream"],
                    y_number: data["On-stream"],
                }]
            }],
            credits: {
                enabled: false
            },
            exporting: {
                enabled: false
            }
        });
    }

    function get_chart_scaff(data) {
        console.log(data);
        Highcharts.chart('scaff-chart', {
            chart: {
                /*backgroundColor: ' #f8f9fa',*/
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {
                text: 'Scaffolding Requirement'
            },
            legend: {
            enabled: true,
                    itemDistance: 5,
            margin: 0
            },
            tooltip: {
                headerFormat: '<b>{point.key}</b><br>',
                pointFormat: '{series.name}: <b>{point.percentage:.2f}%</b><br>Number: <b>{point.y_number}</b>'
            },
            plotOptions: {
                pie: {
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: false,
                        format: '<b>{point.name}</b><br>{point.percentage:.2f} %<br>{point.y_number}'
                    },
                    showInLegend: true,
                    borderWidth: 1,
                    borderColor: '#eeeeee',
                    // events: {
                    //     click: function (event) {
                    //         console.log(event.point.name);
                    //         const val = [];
                    //         if(filterScaf != event.point.name) {  
                    //             filterScaf = event.point.name;
                    //             val[0] = event.point.name;
                    //         } else {
                    //             filterScaf = '';
                    //         }
                    //         dataGrid.columnOption('fieldData.scaffolding_requirement','filterValues', val);
                    //     }
                    // }
                },
                series: {
                    point: {
                        events: {
                            click: function(event){
                                this.select(null, true)  
                                const selected_point = this.series.chart.getSelectedPoints()
                                const selected = selected_point.map(item => ({index: item.index, color: item.color}))
                                const val = selected_point.map(item => ( item.name ))
                                const all_point = this.series.chart.series[0].data
                                all_point.forEach(item => {
                                    if (selected.length == 0) {
                                    item.update({color: item.color.substring(0, 7)})
                                    return
                                }
                                    if (selected.find(x => x.index == item.index)) {
                                    item.update({color: item.color.substring(0, 7)})
                                } else {
                                    item.update({color: item.color + (item.color.length < 9 ? "44" : "")}) // 44 opacity level 44 (range from 00 - FF)
                                }
                                })
                                dataGrid.columnOption('fieldData.scaffolding_requirement','filterValues', val);
                            }
                        }
                    }
                }
            },
            series: [{
                name: 'Percent',
                colorByPoint: true,
                data: [
                {
                    name: 'Yes',
                    y: data.Yes,
                    y_number: data.Yes,
                }, {
                    name: 'No',
                    y: data.No,
                    y_number: data.No,
                }]
            }],
            credits: {
                enabled: false
            },
            exporting: {
                enabled: false
            }
        });
    }

    function get_chart_work_main_ctr(year) {
        const main_work_ctr = [
            {
                name: "Mech",
                y: 0,
                y_number: 0,
            },
            {
                name: "Elec",
                y: 0,
                y_number: 0,
            },
            {
                name: "Insp",
                y: 0,
                y_number: 0,
            },
            {
                name: "Cons",
                y: 0,
                y_number: 0,
            },
            {
                name: "Inst",
                y: 0,
                y_number: 0,
            },
            {
                name: "Oper",
                y: 0,
                y_number: 0,
            },
            {
                name: "KL-Mech",
                y: 0,
                y_number: 0,
            },
            {
                name: "KL-Insp",
                y: 0,
                y_number: 0,
            },
            {
                name: "KL-Elec",
                y: 0,
                y_number: 0,
            },
            {
                name: "KL-Inst",
                y: 0,
                y_number: 0,
            },
        ];
        for(var i = 0; i < main_work_ctr.length; i++) {
            var data = dataArr.filter(function(d) {
                return d.fieldData.SAP_main_workctr == main_work_ctr[i].name && d.fieldData.upcoming_repair_date.split("/")[2] == year;
            })
            main_work_ctr[i].y = data.length;
            main_work_ctr[i].y_number = data.length;
        }
        console.log(main_work_ctr);

        Highcharts.chart('main-work-ctr-chart', {
            chart: {
                /*backgroundColor: ' #f8f9fa',*/
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {
                text: 'Main WorkCTR',
            },
            legend: {
            enabled: true,
                    itemDistance: 5,
            margin: 0
            },
            tooltip: {
	        headerFormat: '<b>{point.key}</b><br>',
                pointFormat: 'Percent: <b>{point.percentage:.2f}%</b><br>Total: <b>{point.y_number}</b> Work'
            },
            plotOptions: {
                pie: {
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: false,
                        format: '<b>{point.name}</b><br>{point.percentage:.2f} %<br>{point.y_number}'
                    },
                    showInLegend: true,
                    borderWidth: 1,
                    borderColor: '#eeeeee'
                },
                series: {
                    point: {
                        events: {
                            click: function(event){
                                this.select(null, true)  
                                const selected_point = this.series.chart.getSelectedPoints()
                                const selected = selected_point.map(item => ({index: item.index, color: item.color}))
                                const val = selected_point.map(item => ( item.name ))
                                const all_point = this.series.chart.series[0].data
                                all_point.forEach(item => {
                                    if (selected.length == 0) {
                                    item.update({color: item.color.substring(0, 7)})
                                    return
                                }
                                    if (selected.find(x => x.index == item.index)) {
                                    item.update({color: item.color.substring(0, 7)})
                                } else {
                                    item.update({color: item.color + (item.color.length < 9 ? "44" : "")}) // 44 opacity level 44 (range from 00 - FF)
                                }
                                })
                                dataGrid.columnOption('fieldData.SAP_main_workctr','filterValues', val);
                            }
                        }
                    }
                }
            },
            series: [{
                name: 'Main Work CTR',
                colorByPoint: true,
                data: main_work_ctr,
            }],
            credits: {
                enabled: false
            },
            exporting: {
                enabled: false
            }
        });
    }

    function get_sap_piping() {
        $.ajax({
            type: "GET",
            url: "https://" + url_api + "/fmi/data/v2/databases/CPOC_AIMS/layouts/piping_SAP_api/records?_limit=10000",
            dataType: 'json',
            headers: {
                "Authorization": "Bearer " + $.cookie("_token_dashboard"),
                "Content-Type": "application/json"
            },
            async: false,
            success: function (data) {
                console.log('piping:')
                console.log(data);
                dataArr = [...dataArr, ...data.response.data];
                // dataArr_moc = data;
                // create_table_moc(dataArr_moc.response.data);
            },
            error: function (error) {
                console.log(error);
                get_token_startup();
                get_sap_piping();
            }
        });
    }

    function get_sap_vessel() {
        $.ajax({
            type: "GET",
            url: "https://" + url_api + "/fmi/data/v2/databases/CPOC_AIMS/layouts/vessel_SAP_api/records?_limit=1000",
            dataType: 'json',
            headers: {
                "Authorization": "Bearer " + $.cookie("_token_dashboard"),
                "Content-Type": "application/json"
            },
            async: false,
            success: function (data) {
                console.log('vessel:')
                console.log(data);
                dataArr = [...dataArr, ...data.response.data];
                // dataArr_moc = data;
                // create_table_moc(dataArr_moc.response.data);
            },
            error: function (error) {
                console.log(error);
                get_token_startup();
                get_sap_vessel();
            }
        });
    }

    function get_sap_flowline() {
        $.ajax({
            type: "GET",
            url: "https://" + url_api + "/fmi/data/v2/databases/CPOC_AIMS/layouts/flowline_SAP_api/records?_limit=1000",
            dataType: 'json',
            headers: {
                "Authorization": "Bearer " + $.cookie("_token_dashboard"),
                "Content-Type": "application/json"
            },
            async: false,
            success: function (data) {
                console.log('flowline:')
                console.log(data);
                dataArr = [...dataArr, ...data.response.data];
                // dataArr_moc = data;
                // create_table_moc(dataArr_moc.response.data);
            },
            error: function (error) {
                console.log(error);
                get_token_startup();
                get_sap_flowline();
            }
        });
    }

    function get_sap_structure() {
        $.ajax({
            type: "GET",
            url: "https://" + url_api + "/fmi/data/v2/databases/CPOC_AIMS/layouts/structure_SAP_api/records?_limit=1000",
            dataType: 'json',
            headers: {
                "Authorization": "Bearer " + $.cookie("_token_dashboard"),
                "Content-Type": "application/json"
            },
            async: false,
            success: function (data) {
                console.log('structure:')
                console.log(data);
                dataArr = [...dataArr, ...data.response.data];
                // dataArr_moc = data;
                // create_table_moc(dataArr_moc.response.data);
            },
            error: function (error) {
                console.log(error);
                get_token_startup();
                get_sap_structure();
            }
        });
    }

    function get_sap_riser() {
        $.ajax({
            type: "GET",
            url: "https://" + url_api + "/fmi/data/v2/databases/CPOC_AIMS/layouts/riser_SAP_api/records?_limit=1000",
            dataType: 'json',
            headers: {
                "Authorization": "Bearer " + $.cookie("_token_dashboard"),
                "Content-Type": "application/json"
            },
            async: false,
            success: function (data) {
                console.log('riser:')
                console.log(data);
                dataArr = [...dataArr, ...data.response.data];
                // dataArr_moc = data;
                // create_table_moc(dataArr_moc.response.data);
            },
            error: function (error) {
                console.log(error);
                get_token_startup();
                get_sap_riser();
            }
        });
    }

    function get_sap_crane() {
        $.ajax({
            type: "GET",
            url: "https://" + url_api + "/fmi/data/v2/databases/CPOC_AIMS/layouts/crane_SAP_api/records?_limit=1000",
            dataType: 'json',
            headers: {
                "Authorization": "Bearer " + $.cookie("_token_dashboard"),
                "Content-Type": "application/json"
            },
            async: false,
            success: function (data) {
                console.log('crane:')
                console.log(data);
                dataArr = [...dataArr, ...data.response.data];
                // dataArr_moc = data;
                // create_table_moc(dataArr_moc.response.data);
            },
            error: function (error) {
                console.log(error);
                get_token_startup();
                get_sap_crane();
            }
        });
    }

    function create_table(data) {
        data = data.filter(d => d.fieldData.status != 'Not Count');
        dataGrid = $("#dataGrid-sap").dxDataGrid({
            dataSource: data,
            keyExpr: "fieldData.for_filter_import",

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
                mode: "select",
                search: {
                    enabled: true,
                    editorOptions: { placeholder: 'Search column' },
                },
                selection: {
                    recursive: true,
                    selectByClick: true,
                    allowSelectAll: true,
                },
            },
            focusedRowEnabled: true,
            showRowLines: true,
            wordWrapEnabled: true,
            
            columns: [
                {
                    caption: "Item",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Item</div>"));
                    },
                    cellTemplate: function(cellElement, cellInfo) {  
                        cellElement.text(cellInfo.row.rowIndex + 1);
                    },
                    //dataField: "fieldData.no",
                    width: "70px",
                    alignment: "center"
                },
                {
                    caption: "ID Ref.",
                    headerCellTemplate: function (container) {
                        container.append($("<div>ID Ref.</div>"));
                    },
                    dataField: "fieldData.for_filter_import",
                    width: "100",
                    visible: false,
                },
                {
                    caption: "Platform",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Platform</div>"));
                    },
                    dataField: "fieldData.platform_codename",
                    width: "70px",
                    alignment: "center"
                },
                {
                    caption: "Tag No",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Tag No</div>"));
                    },
                    dataField: "fieldData.line_no",
                    width: "150",
                },
                {
                    caption: "PID No",
                    headerCellTemplate: function (container) {
                        container.append($("<div>P&ID No</div>"));
                    },
                    dataField: "fieldData.pid_no",
                    width: "150",
                    visible: false,
                },
                {
                    caption: "Notification",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Notification</div>"));
                    },
                    dataField: "fieldData.notification",
                    width: "125",
                },
                {
                    caption: "SAP WO No",
                    headerCellTemplate: function (container) {
                        container.append($("<div>SAP WO No</div>"));
                    },
                    dataField: "fieldData.SAP_order_no",
                    width: "125",
                },
                {
                    caption: "Creation Timestamp",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Creation Timestamp</div>"));
                    },
                    dataField: "fieldData.CreationTimestamp",
                    width: "100",
                    dataType: 'date',  
                    format: 'd MMM yyyy',
                    visible: false,
                },
                {
                    caption: "Description",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Description</div>"));
                    },
                    dataField: "fieldData.description",
                    width: "auto",
                },
                {
                    caption: "Main Work CTR",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Main Work CTR</div>"));
                    },
                    dataField: "fieldData.SAP_main_workctr",
                    width: "auto",
                },
                {
                    caption: "Integrity Status",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Integrity Status</div>"));
                    },
                    dataField: "fieldData.integrity_status",
                    width: "auto",
                },
                {
                    caption: "Risk Ranking",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Risk<br>Ranking</div>"));
                    },
                    dataField: "fieldData.risk_ranking",
                    width: "auto",
                    visible: false,
                },
                {
                    caption: "Anomaly Priority",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Anomaly<br>Priority</div>"));
                    },
                    dataField: "fieldData.anomaly_priority",
                    width: "auto",
                    visible: false,
                },
                {
                    caption: "CM Issued",
                    headerCellTemplate: function (container) {
                        container.append($("<div>CM Issued</div>"));
                    },
                    dataField: "fieldData.changed_on_issued",
                    width: "100",
                    dataType: 'date',  
                    format: 'd MMM yyyy',
                    visible: false,
                },
                {
                    caption: "Repair Type",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Repair<br>Type</div>"));
                    },
                    dataField: "fieldData.repair_type",
                    width: "100",
                },
                {
                    caption: "Repair Method",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Repair<br>Method</div>"));
                    },
                    dataField: "fieldData.repair_method",
                    width: "100",
                },
                {
                    caption: "Required End Date",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Required End Date</div>"));
                    },
                    dataField: "fieldData.required_end_date",
                    width: "100",
                    dataType: 'date',  
                    format: 'd MMM yyyy',
                },
                {
                    caption: "CM Status",
                    headerCellTemplate: function (container) {
                        container.append($("<div>CM<br>Status</div>"));
                    },
                    dataField: "fieldData.status",
                    width: "100",
                },
                {
                    caption: "CM Closed",
                    headerCellTemplate: function (container) {
                        container.append($("<div>CM Closed</div>"));
                    },
                    dataField: "fieldData.changed_on_closed",
                    width: "100",
                    dataType: 'date',  
                    format: 'd MMM yyyy',
                },
                {
                    caption: "Temporary Repair",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Temporary<br>Repair</div>"));
                    },
                    dataField: "fieldData.temporary_repair",
                    width: "100",
                    visible: false,
                },
                {
                    caption: "Temporary Repair Date",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Temporary<br>Repair Date</div>"));
                    },
                    dataField: "fieldData.temporary_repair_date",
                    calculateCellValue: function (value) {
                            return get_year(value.fieldData.temporary_repair_date)
                        },
                    width: "100",
                    alignment: "center",
                    visible: false,
                },
                {
                    caption: "Temporary Repair Status",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Temporary<br>Repair<br>Status</div>"));
                    },
                    dataField: "fieldData.temporary_repair_status",
                    width: "100",
                    visible: false,
                },
                {
                    caption: "Permanent Repair",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Permanent<br>Repair</div>"));
                    },
                    dataField: "fieldData.permanent_repair",
                    width: "100",
                    visible: false,
                },
                {
                    caption: "Permanent Repair Date",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Permanent<br>Repair Date</div>"));
                    },
                    dataField: "fieldData.permanent_repair_date",
                    calculateCellValue: function (value) {
                            return get_year(value.fieldData.permanent_repair_date)
                        },
                    width: "100",
                    alignment: "center",
                    visible: false,
                },
                {
                    caption: "Permanent Repair Status",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Permanent<br>Repair<br>Status</div>"));
                    },
                    dataField: "fieldData.permanent_repair_status",
                    width: "100",
                    visible: false,
                },
                // {
                //     caption: "Upcoming Repair Date",
                //     headerCellTemplate: function (container) {
                //         container.append($("<div>Upcoming<br>Repair Date</div>"));
                //     },
                //     dataField: "fieldData.upcoming_repair_date",
                //     calculateCellValue: function (value) {
                //             return get_year(value.fieldData.upcoming_repair_date)
                //         },
                //     width: "100",
                //     alignment: "center",
                // },
                {
                    caption: "Accessibility",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Accessibility</div>"));
                    },
                    dataField: "fieldData.accessibility_value",
                    width: "100",
                },
                {
                    caption: "Scaffolding Requirement",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Scaffolding<br>Requirement</div>"));
                    },
                    dataField: "fieldData.scaffolding_requirement",
                    width: "100",
                    visible: false,
                },
                // {
                //     caption: "Recommendation",
                //     headerCellTemplate: function (container) {
                //         container.append($("<div>Recommendation</div>"));
                //     },
                //     dataField: "fieldData.additional_data",
                //     minWidth: "300px",
                // },
                {
                    caption: "Related File",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Related File</div>"));
                    },
                    dataField: "fieldData.related_file",
                    width: "auto",
                    visible: false,
                },
                {
                    caption: "File",
                    width: "110px",
                    headerCellTemplate: function (container) {
                        container.append($("<div>File</div>"));
                    },
                    dataField: "fieldData.for_filter_import",
                    alignment: "center",
                    cellTemplate: function (container, options) {
                        if(options.value.substring(0,2) == "PP" && options.data.fieldData['piping_inspection_document::file'] != "") {
                            $('<a class="btn btn-primary btn-sm" href="' + options.data.fieldData['piping_inspection_document::file'] + '" download="' + options.data.fieldData.related_file + '" target="_blank")>Download</a>').addClass('').appendTo(container);
                        } else if(options.value.substring(0,2) == "PV" && options.data.fieldData['vessel_inspection_document::file'] != "") {
                            $('<a class="btn btn-primary btn-sm" href="' + options.data.fieldData['vessel_inspection_document::file'] + '" download="' + options.data.fieldData.related_file + '" target="_blank")>Download</a>').addClass('').appendTo(container);
                        } else if(options.value.substring(0,2) == "FL" && options.data.fieldData['flowline_inspection_document::file'] != "") {
                            $('<a class="btn btn-primary btn-sm" href="' + options.data.fieldData['flowline_inspection_document::file'] + '" download="' + options.data.fieldData.related_file + '" target="_blank")>Download</a>').addClass('').appendTo(container);
                        } else if(options.value.substring(0,2) == "ST" && options.data.fieldData['structure_inspection_document::file'] != "") {
                            $('<a class="btn btn-primary btn-sm" href="' + options.data.fieldData['structure_inspection_document::file'] + '" download="' + options.data.fieldData.related_file + '" target="_blank")>Download</a>').addClass('').appendTo(container);
                        } else if(options.value.substring(0,2) == "RS" && options.data.fieldData['outgoing_riser_inspection_document::file'] != "") {
                            $('<a class="btn btn-primary btn-sm" href="' + options.data.fieldData['outgoing_riser_inspection_document::file'] + '" download="' + options.data.fieldData.related_file + '" target="_blank")>Download</a>').addClass('').appendTo(container);
                        } else if(options.value.substring(0,2) == "RS" && options.data.fieldData['incoming_riser_inspection_document::file'] != "") {
                            $('<a class="btn btn-primary btn-sm" href="' + options.data.fieldData['incoming_riser_inspection_document::file'] + '" download="' + options.data.fieldData.related_file + '" target="_blank")>Download</a>').addClass('').appendTo(container);
                        } else {
                            $('No file').addClass('').appendTo(container);
                        }
                    },
                },      
                // {
                //     caption: "Status",
                //     headerCellTemplate: function (container) {
                //         container.append($("<div>Status</div>"));
                //     },
                //     dataField: "fieldData.status_final",
                //     width: "100px",
                //     alignment: "center",
                //     cellTemplate: function (container, options) {
                //         if(options.value == 'Active') {
                //             $('<button type="button" style="padding: 0.5rem;"></button>').addClass('btn btn-sm btn-success-1 rounded-circle')
                //             .on('dxclick', function (e) {
                //             }).appendTo(container);
                //         } else if(options.value == 'Overdue') { 
                //             $('<button type="button" style="padding: 0.5rem;"></button>').addClass('btn btn-sm btn-danger rounded-circle')
                //             .on('dxclick', function (e) {
                //             }).appendTo(container);
                //         } else if(options.value == 'Pending Approval') { 
                //             $('<button type="button" style="padding: 0.5rem;"></button>').addClass('btn btn-sm btn-warning rounded-circle')
                //             .on('dxclick', function (e) {
                //             }).appendTo(container);
                //         } else if(options.value == 'Closed') { 
                //             $('<button type="button" style="padding: 0.5rem;"></button>').addClass('btn btn-sm btn-success rounded-circle')
                //             .on('dxclick', function (e) {
                //             }).appendTo(container);
                //         }
                //     }
                // },
                // {
                //     caption: "MOC",
                //     width: "110px",
                //     headerCellTemplate: function (container) {
                //         container.append($("<div>MOC</div>"));
                //     },
                //     dataField: "fieldData.attachment",
                //     alignment: "center",
                //     cellTemplate: function (container, options) {
                //         console.log(options);
                //         if(options.data.fieldData.attachment != "") {
                //             $('<a class="btn btn-primary btn-sm" href="' + options.data.fieldData.attachment + '" download="' + options.data.fieldData.attachment_name + '" target="_blank")>Download</a>').addClass('').appendTo(container);
                //         } else {
                //             $('No file').addClass('').appendTo(container);
                //         }
                //     },
                // },
            ],
            repaintChangesOnly: true,
            onCellPrepared: function (e) {

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
    };

    function get_year(value) {
        if (value === null || value === undefined || value === "") {
            return ""
        } else {
            var parts = value.split('/');
            return parts[2]
        }
    }

    function clear_filter() {
        const val = [];
        dataGrid.columnOption('fieldData.integrity_status','filterValues', val);
        dataGrid.columnOption('fieldData.SAP_main_workctr','filterValues', val);
        dataGrid.columnOption('fieldData.accessibility_value','filterValues', val);
        dataGrid.columnOption('fieldData.scaffolding_requirement','filterValues', val);
    }

</script>

<style>
    .summary-item {
        display: flex;
        width: 100%;
        border: 1px solid #fff;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        padding: 4px 0;
        background-color: #eee;
    }
</style>