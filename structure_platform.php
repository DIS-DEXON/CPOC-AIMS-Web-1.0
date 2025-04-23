<div class="jumbotron jumbotron-header rounded-0 bg-secondary text-white">
    <div class="row">
        <div class="col-12">
            <h1 class="display-4">PLATFORM</h1>
        </div>
    </div>
</div>
<div class="wrapper-form shadow">
    <div id="dataGid"></div>
    <h2 class="mt-3">SUMMARY REPORT</h2>
    <div id="dataGid_library"></div>
</div>

<script>
    var _token_structure_pf = $.cookie("_token_dashboard");
    console.log("_token_structure_pf: " + _token_structure_pf);
    var dataArr = "";
    var dataFile = "";
    var structure_pf_no = "";

    get_data();
    get_data_library();
    $('.loader').hide();

    function get_data() {
        $.ajax({
            type: "GET",
            url: "https://" + url_api + "/fmi/data/v2/databases/CPOC_AIMS/layouts/platform_structure_api/records?_limit=50",
            dataType: 'json',
            headers: {
                "Authorization": "Bearer " + _token_structure_pf,
                "Content-Type": "application/json"
            },
            async: false,
            success: function (data) {
                console.log(data);
                dataArr = data;
                create_table(dataArr.response.data);
                // createRows(data);
            },
            error: function (error) {
                console.log(error);
                // get_token_dashboard();
                get_token_startup();
                _token_structure_pf = $.cookie("_token_dashboard");
                get_data();
                //logout();
            }
        });
    }

    function get_data_library() {
        $.ajax({
            type: "GET",
            url: "https://" + url_api + "/fmi/data/v2/databases/CPOC_AIMS/layouts/structure_summary_document/records?_limit=100",
            dataType: 'json',
            headers: {
                "Authorization": "Bearer " + _token_structure_pf,
                "Content-Type": "application/json"
            },
            async: false,
            success: function (data) {
                console.log(data);
                dataFile = data;
                create_table_library(dataFile.response.data);
                // createRows(data);
            },
            error: function (error) {
                console.log(error);
                // get_token_dashboard();
                get_token_startup();
                _token_structure_pf = $.cookie("_token_dashboard");
                get_data_library();
                //logout();
            }
        });
    }

    function create_table_library(data) {
        const dataGrid = $("#dataGid_library").dxDataGrid({
            dataSource: data,
            keyExpr: "fieldData.id_file",

            paging: {
                pageSize: 5
            },
            pager: {
                showPageSizeSelector: true,
                allowedPageSizes: [5, 10, 20],
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
            wordWrapEnabled: true,
            columns: [
                {
                    caption: "ID",
                    headerCellTemplate: function (container) {
                        container.append($("<div>ID</div>"));
                    },
                    dataField: "fieldData.id_file",
                    sortOrder: 'desc',
                    visible: false
                },
                {
                    caption: "File Name",
                    headerCellTemplate: function (container) {
                        container.append($("<div>File Name</div>"));
                    },
                    dataField: "fieldData.file_name_manual",
                },
                {
                    caption: "File Type",
                    width: "150px",
                    alignment: "center",
                    headerCellTemplate: function (container) {
                        container.append($("<div>File Type</div>"));
                    },
                    dataField: "fieldData.file_extension",
                },
                {
                    caption: "File Download",
                    width: "150px",
                    headerCellTemplate: function (container) {
                        container.append($("<div>File Download</div>"));
                    },
                    dataField: "fieldData.file",
                    alignment: "center",
                    cellTemplate: function (container, options) {
                        console.log(options);
                        $('<a class="btn btn-primary btn-sm" href="' + options.data.fieldData.file + '" download="' + options.data.fieldData.file_name_manual + '.' + options.data.fieldData.file_extension.replace(/(?:\\[rn]|[\r\n]+)+/g, "") + '" target="_blank")>Download</a>').addClass('').appendTo(container);
                        //$('<a class="btn btn-primary btn-sm" onclick=get_file("' + options.data.fieldData.file + '","' + options.data.fieldData.file_name + '")>Download</a>').addClass('').appendTo(container);
                    },
                },
            ],
            repaintChangesOnly: true,
            showBorders: true
        }).dxDataGrid('instance');
    }

    function create_table(data) {
        const dataGrid = $("#dataGid").dxDataGrid({
            dataSource: data,
            keyExpr: "fieldData.id_platform",
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
                    headerCellTemplate: function (container) {
                        container.append($("<div>Platform</div>"));
                    },
                    dataField: "fieldData.codename",
                    fixed: true,
                    fixedPosition: "left",
                },
                {
                    caption: "Phase",
                    sortOrder: 'asc',
                    headerCellTemplate: function (container) {
                        container.append($("<div>Phase</div>"));
                    },
                    dataField: "fieldData.phase",
                    alignment: "center"
                },
                {
                    caption: "Integrity Status",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Integrity<br>Status</div>"));
                    },
                    dataField: "fieldData.structure_integrity_status",
                    alignment: "center"
                },
                {
                    caption: "Topside",
                    columns: [{
                        caption: "Due Inspection Date",
                        columns: [
                            {
                                caption: "Last",
                                headerCellTemplate: function (container) {
                                    container.append($("<div>Last</div>"));
                                },
                                dataField: "fieldData.structure_topside_last_insp_date",
                                calculateCellValue: function (value) {
                                    return get_year(value.fieldData.structure_topside_last_insp_date)
                                },
                                alignment: "center"
                            },
                            {
                                caption: "Next",
                                headerCellTemplate: function (container) {
                                    container.append($("<div>Next</div>"));
                                },
                                dataField: "fieldData.structure_topside_next_insp_date",
                                alignment: "center"
                            },
                            {
                                caption: "Status",
                                headerCellTemplate: function (container) {
                                    container.append($("<div>Status</div>"));
                                },
                                dataField: "fieldData.structure_topside_status",
                                alignment: "center"
                            }
                        ]
                    }
                    ]
                },
                {
                    caption: "Splash Zone",
                    columns: [{
                        caption: "Due Inspection Date",
                        columns: [
                            {
                                caption: "Last",
                                headerCellTemplate: function (container) {
                                    container.append($("<div>Last</div>"));
                                },
                                dataField: "fieldData.structure_splashzone_last_insp_date",
                                calculateCellValue: function (value) {
                                    return get_year(value.fieldData.structure_splashzone_last_insp_date)
                                },
                                alignment: "center"
                            },
                            {
                                caption: "Next",
                                headerCellTemplate: function (container) {
                                    container.append($("<div>Next</div>"));
                                },
                                dataField: "fieldData.structure_splashzone_next_insp_date",
                                alignment: "center"
                            },
                            {
                                caption: "Status",
                                headerCellTemplate: function (container) {
                                    container.append($("<div>Status</div>"));
                                },
                                dataField: "fieldData.structure_splashzone_status",
                                alignment: "center"
                            }
                        ]
                    }
                    ]
                },
                {
                    caption: "Subsea",
                    columns: [{
                        caption: "Due Inspection Date",
                        columns: [
                            {
                                caption: "Last",
                                headerCellTemplate: function (container) {
                                    container.append($("<div>Last</div>"));
                                },
                                dataField: "fieldData.structure_subsea_last_insp_date",
                                calculateCellValue: function (value) {
                                    return get_year(value.fieldData.structure_subsea_last_insp_date)
                                },
                                alignment: "center"
                            },
                            {
                                caption: "Next",
                                headerCellTemplate: function (container) {
                                    container.append($("<div>Next</div>"));
                                },
                                dataField: "fieldData.structure_subsea_next_insp_date",
                                alignment: "center"
                            },
                            {
                                caption: "Status",
                                headerCellTemplate: function (container) {
                                    container.append($("<div>Status</div>"));
                                },
                                dataField: "fieldData.structure_subsea_status",
                                alignment: "center"
                            }
                        ]
                    }
                    ]
                },
                {
                    dataField: "fieldData.id_platform",
                    caption: "",
                    width: "80",
                    allowEditing: false,
                    alignment: "center",
                    cellTemplate: function (container, options) {
                        $('<button type="button" title=""></button>').addClass('btn btn-sm fas fa-search')
                            .on('dxclick', function (e) {
                                console.log(options.value);
                                structure_pf_no = options.value;
                                $.cookie('_platform_id_structure', options.value);
                                renderPage("structure");
                            }).appendTo(container);
                    },
                    fixed: true,
                    fixedPosition: "right",
                    allowFiltering: false,
                    allowSorting: false,
                    allowResizing: false,
                }
            ],
            onCellPrepared: function (e) {
                if (e.rowType === "data" && e.column.dataField === "fieldData.structure_topside_status") {
                    e.cellElement.css("background-color", e.data.fieldData.structure_topside_status == "Not due" ? "#66FF33" : e.data.fieldData.structure_topside_status == "On due" ? "#FFCC00" : e.data.fieldData.structure_topside_status == "Overdue" ? "#FF0000" : "");
                }
                if (e.rowType === "data" && e.column.dataField === "fieldData.structure_splashzone_status") {
                    e.cellElement.css("background-color", e.data.fieldData.structure_splashzone_status == "Not due" ? "#66FF33" : e.data.fieldData.structure_splashzone_status == "On due" ? "#FFCC00" : e.data.fieldData.structure_splashzone_status == "Overdue" ? "#FF0000" : "");
                }
                if (e.rowType === "data" && e.column.dataField === "fieldData.structure_subsea_status") {
                    e.cellElement.css("background-color", e.data.fieldData.structure_subsea_status == "Not due" ? "#66FF33" : e.data.fieldData.structure_subsea_status == "On due" ? "#FFCC00" : e.data.fieldData.structure_subsea_status == "Overdue" ? "#FF0000" : "");
                }
                if (e.rowType === "data" && e.column.dataField === "fieldData.structure_integrity_status") {
                    e.cellElement.css("background-color", e.data.fieldData.structure_integrity_status == "P1" ? "#FF0000" : e.data.fieldData.structure_integrity_status == "P2" ? "#F69546" : e.data.fieldData.structure_integrity_status == "P3" ? "#FFCC00" : e.data.fieldData.structure_integrity_status == "P4" ? "#FFFF00" : e.data.fieldData.structure_integrity_status == "P5" ? "#66FF33" : e.data.fieldData.structure_integrity_status == "P6" ? "#43a047" : "");
                }
                //Set alignment
                if (e.rowType == "header") {
                    e.cellElement.css("text-align", "center");
                    e.cellElement.css("vertical-align", "middle");
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
    };

    function get_year(value) {
        if (value === null || value === undefined || value === "") {
            return ""
        } else {
            var parts = value.split('/');
            return parts[2]
        }
    }
</script>