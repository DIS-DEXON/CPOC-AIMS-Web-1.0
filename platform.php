<div class="jumbotron jumbotron-header rounded-0 bg-secondary text-white">
    <div class="row">
        <div class="col-12">
            <h1 class="display-4">PLATFORM</h1>
        </div>

    </div>
</div>
<div class="wrapper-form shadow">
    <div id="dataGid"></div>
    <!-- <div id="dataGid_static"></div> -->
</div>

<div class="modal fade" id="library_modal" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Platform Document</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <h2>P&ID/PFD</h2>
                        <div id="grid_pidpfd"></div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <h2>Equipment Drawing</h2>
                        <div id="grid_equip_dwg"></div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <h2>ISOMetric Drawing</h2>
                        <div id="grid_iso_dwg"></div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <h2>RBI Document</h2>
                        <div id="grid_rbi_doc"></div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <h2>Procedure</h2>
                        <div id="grid_procedure"></div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <h2>Inspection Report</h2>
                        <div id="grid_insp_report"></div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <h2>Other</h2>
                        <div id="grid_other"></div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script>
    var _token_dashboard = $.cookie("_token_dashboard");
    var dataArr = "";

    get_data();
    $('.loader').hide();

    function get_data() {
        //console.log("in");
        $.ajax({
            type: "GET",
            url: "https://" + url_api + "/fmi/data/v2/databases/CPOC_AIMS/layouts/platform_table/records?_limit=50",
            dataType: 'json',
            headers: {
                "Authorization": "Bearer " + $.cookie("_token_dashboard"),
                "Content-Type": "application/json"
            },
            async: false,
            success: function (data) {
                console.log(data);
                dataArr = data;
                create_table(dataArr.response.data);
                //createRows(data);
                
            },
            error: function (error) {
                console.log(error);
                get_token_startup();
                get_data();
                //logout();
            }
        });
    }

    function create_table(data) {
        console.log(data)
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
                    dataField: "fieldData.id_platform",
                    caption: "Info",
                    width: "100",
                    allowEditing: false,
                    alignment: "center",
                    cellTemplate: function (container, options) {
                        $('<button type="button" title="Library"></button>').addClass('btn btn-sm fas fa-book')
                            .on('dxclick', function (e) {
                                console.log(options.value)
                                call_modal_library(options.value);
                            }).appendTo(container);
                    },
                    fixed: true,
                    fixedPosition: "left",
                    allowFiltering: false,
                    allowSorting: false,
                    allowResizing: false,
                },
                {
                    caption: "Platform",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Platform</div>"));
                    },
                    dataField: "fieldData.codename",
                    width: "150",
                    alignment: "center"
                },
                {
                    caption: "Fullname",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Fullname</div>"));
                    },
                    dataField: "fieldData.fullname",
                },
                {
                    caption: "Phase",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Phase</div>"));
                    },
                    dataField: "fieldData.phase",
                    sortOrder: "asc",
                    width: "150",
                    alignment: "center"
                },
                

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

    function call_modal_library(id_platform) {
        get_pid_pfd(id_platform);
        get_equip_dwg(id_platform);
        get_iso_dwg(id_platform);
        get_rbi_doc(id_platform);
        get_procedure(id_platform);
        get_insp_report(id_platform);
        get_other(id_platform);
        $('#library_modal').modal('show');
        
    }

    function get_pid_pfd(id_platform) {
        var dataFile = "";
        $.ajax({
            type: "POST",
            url: "https://" + url_api + "/fmi/data/v2/databases/CPOC_AIMS/layouts/platform_attachment_tb/_find",
            dataType: 'json',
            headers: {
                "Authorization": "Bearer " + $.cookie("_token_dashboard"),
                "Content-Type": "application/json"
            },
            data: JSON.stringify({
                    "query": [
                        {
                            "id_platform": "==" + id_platform,
                            "type": "==PID_PFD"
                        }
                    ]
                }),
            async: false,
            success: function (data) {
                console.log(data);
                dataFile = data.response.data;
                //call_modal_library(data.response.data);
            },
            error: function (error) {
                console.log(error);
                console.log(error.responseJSON.messages[0].code);
                if(error.responseJSON.messages[0].code == 401) {
                    // alert("no library file");
                }else {
                    get_token_startup();
                    call_modal_library(id_platform);
                }
            }
        });

        const dataGrid = $("#grid_pidpfd").dxDataGrid({
            dataSource: dataFile,
            keyExpr: "fieldData.id_att",

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
                    dataField: "fieldData.manual_file_name",
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
                        $('<a class="btn btn-primary btn-sm" href="' + options.data.fieldData.file + '" download="' + options.data.fieldData.manual_file_name + '.' + options.data.fieldData.file_extension.replace(/(?:\\[rn]|[\r\n]+)+/g, "") + '" target="_blank")>Download</a>').addClass('').appendTo(container);
                        //$('<a class="btn btn-primary btn-sm" onclick=get_file("' + options.data.fieldData.file + '","' + options.data.fieldData.file_name + '")>Download</a>').addClass('').appendTo(container);
                    },
                },
            ],
            repaintChangesOnly: true,
            showBorders: true
        }).dxDataGrid('instance');

    }

    function get_equip_dwg(id_platform) {
        var dataFile = "";
        $.ajax({
            type: "POST",
            url: "https://" + url_api + "/fmi/data/v2/databases/CPOC_AIMS/layouts/platform_attachment_tb/_find",
            dataType: 'json',
            headers: {
                "Authorization": "Bearer " + $.cookie("_token_dashboard"),
                "Content-Type": "application/json"
            },
            data: JSON.stringify({
                    "query": [
                        {
                            "id_platform": "==" + id_platform,
                            "type": "==Equipment_DWG"
                        }
                    ]
                }),
            async: false,
            success: function (data) {
                console.log(data);
                dataFile = data.response.data;
                //call_modal_library(data.response.data);
            },
            error: function (error) {
                console.log(error);
                console.log(error.responseJSON.messages[0].code);
                if(error.responseJSON.messages[0].code == 401) {
                    // alert("no library file");
                }else {
                    get_token_startup();
                    call_modal_library(id_platform);
                }
            }
        });

        const dataGrid = $("#grid_equip_dwg").dxDataGrid({
            dataSource: dataFile,
            keyExpr: "fieldData.id_att",

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
                    dataField: "fieldData.manual_file_name",
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
                        $('<a class="btn btn-primary btn-sm" href="' + options.data.fieldData.file + '" download="' + options.data.fieldData.manual_file_name + '.' + options.data.fieldData.file_extension.replace(/(?:\\[rn]|[\r\n]+)+/g, "") + '" target="_blank")>Download</a>').addClass('').appendTo(container);
                        //$('<a class="btn btn-primary btn-sm" onclick=get_file("' + options.data.fieldData.file + '","' + options.data.fieldData.file_name + '")>Download</a>').addClass('').appendTo(container);
                    },
                },
            ],
            repaintChangesOnly: true,
            showBorders: true
        }).dxDataGrid('instance');

    }

    function get_iso_dwg(id_platform) {
        var dataFile = "";
        $.ajax({
            type: "POST",
            url: "https://" + url_api + "/fmi/data/v2/databases/CPOC_AIMS/layouts/platform_attachment_tb/_find",
            dataType: 'json',
            headers: {
                "Authorization": "Bearer " + $.cookie("_token_dashboard"),
                "Content-Type": "application/json"
            },
            data: JSON.stringify({
                    "query": [
                        {
                            "id_platform": "==" + id_platform,
                            "type": "==ISO_DWG"
                        }
                    ]
                }),
            async: false,
            success: function (data) {
                console.log(data);
                dataFile = data.response.data;
                //call_modal_library(data.response.data);
            },
            error: function (error) {
                console.log(error);
                console.log(error.responseJSON.messages[0].code);
                if(error.responseJSON.messages[0].code == 401) {
                    // alert("no library file");
                }else {
                    get_token_startup();
                    call_modal_library(id_platform);
                }
            }
        });

        const dataGrid = $("#grid_iso_dwg").dxDataGrid({
            dataSource: dataFile,
            keyExpr: "fieldData.id_att",

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
                    dataField: "fieldData.manual_file_name",
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
                        $('<a class="btn btn-primary btn-sm" href="' + options.data.fieldData.file + '" download="' + options.data.fieldData.manual_file_name + '.' + options.data.fieldData.file_extension.replace(/(?:\\[rn]|[\r\n]+)+/g, "") + '" target="_blank")>Download</a>').addClass('').appendTo(container);
                        //$('<a class="btn btn-primary btn-sm" onclick=get_file("' + options.data.fieldData.file + '","' + options.data.fieldData.file_name + '")>Download</a>').addClass('').appendTo(container);
                    },
                },
            ],
            repaintChangesOnly: true,
            showBorders: true
        }).dxDataGrid('instance');

    }

    function get_rbi_doc(id_platform) {
        var dataFile = "";
        $.ajax({
            type: "POST",
            url: "https://" + url_api + "/fmi/data/v2/databases/CPOC_AIMS/layouts/platform_attachment_tb/_find",
            dataType: 'json',
            headers: {
                "Authorization": "Bearer " + $.cookie("_token_dashboard"),
                "Content-Type": "application/json"
            },
            data: JSON.stringify({
                    "query": [
                        {
                            "id_platform": "==" + id_platform,
                            "type": "==RBI_Document"
                        }
                    ]
                }),
            async: false,
            success: function (data) {
                console.log(data);
                dataFile = data.response.data;
                //call_modal_library(data.response.data);
            },
            error: function (error) {
                console.log(error);
                console.log(error.responseJSON.messages[0].code);
                if(error.responseJSON.messages[0].code == 401) {
                    // alert("no library file");
                }else {
                    get_token_startup();
                    call_modal_library(id_platform);
                }
            }
        });

        const dataGrid = $("#grid_rbi_doc").dxDataGrid({
            dataSource: dataFile,
            keyExpr: "fieldData.id_att",

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
                    dataField: "fieldData.manual_file_name",
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
                        $('<a class="btn btn-primary btn-sm" href="' + options.data.fieldData.file + '" download="' + options.data.fieldData.manual_file_name + '.' + options.data.fieldData.file_extension.replace(/(?:\\[rn]|[\r\n]+)+/g, "") + '" target="_blank")>Download</a>').addClass('').appendTo(container);
                        //$('<a class="btn btn-primary btn-sm" onclick=get_file("' + options.data.fieldData.file + '","' + options.data.fieldData.file_name + '")>Download</a>').addClass('').appendTo(container);
                    },
                },
            ],
            repaintChangesOnly: true,
            showBorders: true
        }).dxDataGrid('instance');

    }

    function get_procedure(id_platform) {
        var dataFile = "";
        $.ajax({
            type: "POST",
            url: "https://" + url_api + "/fmi/data/v2/databases/CPOC_AIMS/layouts/platform_attachment_tb/_find",
            dataType: 'json',
            headers: {
                "Authorization": "Bearer " + $.cookie("_token_dashboard"),
                "Content-Type": "application/json"
            },
            data: JSON.stringify({
                    "query": [
                        {
                            "id_platform": "==" + id_platform,
                            "type": "==Procedure"
                        }
                    ]
                }),
            async: false,
            success: function (data) {
                console.log(data);
                dataFile = data.response.data;
                //call_modal_library(data.response.data);
            },
            error: function (error) {
                console.log(error);
                console.log(error.responseJSON.messages[0].code);
                if(error.responseJSON.messages[0].code == 401) {
                    // alert("no library file");
                }else {
                    get_token_startup();
                    call_modal_library(id_platform);
                }
            }
        });

        const dataGrid = $("#grid_procedure").dxDataGrid({
            dataSource: dataFile,
            keyExpr: "fieldData.id_att",

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
                    dataField: "fieldData.manual_file_name",
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
                        $('<a class="btn btn-primary btn-sm" href="' + options.data.fieldData.file + '" download="' + options.data.fieldData.manual_file_name + '.' + options.data.fieldData.file_extension.replace(/(?:\\[rn]|[\r\n]+)+/g, "") + '" target="_blank")>Download</a>').addClass('').appendTo(container);
                        //$('<a class="btn btn-primary btn-sm" onclick=get_file("' + options.data.fieldData.file + '","' + options.data.fieldData.file_name + '")>Download</a>').addClass('').appendTo(container);
                    },
                },
            ],
            repaintChangesOnly: true,
            showBorders: true
        }).dxDataGrid('instance');

    }

    function get_insp_report(id_platform) {
        var dataFile = "";
        $.ajax({
            type: "POST",
            url: "https://" + url_api + "/fmi/data/v2/databases/CPOC_AIMS/layouts/platform_attachment_tb/_find",
            dataType: 'json',
            headers: {
                "Authorization": "Bearer " + $.cookie("_token_dashboard"),
                "Content-Type": "application/json"
            },
            data: JSON.stringify({
                    "query": [
                        {
                            "id_platform": "==" + id_platform,
                            "type": "==Insp_report"
                        }
                    ]
                }),
            async: false,
            success: function (data) {
                console.log(data);
                dataFile = data.response.data;
                //call_modal_library(data.response.data);
            },
            error: function (error) {
                console.log(error);
                console.log(error.responseJSON.messages[0].code);
                if(error.responseJSON.messages[0].code == 401) {
                    // alert("no library file");
                }else {
                    get_token_startup();
                    call_modal_library(id_platform);
                }
            }
        });

        const dataGrid = $("#grid_insp_report").dxDataGrid({
            dataSource: dataFile,
            keyExpr: "fieldData.id_att",

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
                    dataField: "fieldData.manual_file_name",
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
                        $('<a class="btn btn-primary btn-sm" href="' + options.data.fieldData.file + '" download="' + options.data.fieldData.manual_file_name + '.' + options.data.fieldData.file_extension.replace(/(?:\\[rn]|[\r\n]+)+/g, "") + '" target="_blank")>Download</a>').addClass('').appendTo(container);
                        //$('<a class="btn btn-primary btn-sm" onclick=get_file("' + options.data.fieldData.file + '","' + options.data.fieldData.file_name + '")>Download</a>').addClass('').appendTo(container);
                    },
                },
            ],
            repaintChangesOnly: true,
            showBorders: true
        }).dxDataGrid('instance');

    }

    function get_other(id_platform) {
        var dataFile = "";
        $.ajax({
            type: "POST",
            url: "https://" + url_api + "/fmi/data/v2/databases/CPOC_AIMS/layouts/platform_attachment_tb/_find",
            dataType: 'json',
            headers: {
                "Authorization": "Bearer " + $.cookie("_token_dashboard"),
                "Content-Type": "application/json"
            },
            data: JSON.stringify({
                    "query": [
                        {
                            "id_platform": "==" + id_platform,
                            "type": "==Other"
                        }
                    ]
                }),
            async: false,
            success: function (data) {
                console.log(data);
                dataFile = data.response.data;
                //call_modal_library(data.response.data);
            },
            error: function (error) {
                console.log(error);
                console.log(error.responseJSON.messages[0].code);
                if(error.responseJSON.messages[0].code == 401) {
                    // alert("no library file");
                }else {
                    get_token_startup();
                    call_modal_library(id_platform);
                }
            }
        });

        const dataGrid = $("#grid_other").dxDataGrid({
            dataSource: dataFile,
            keyExpr: "fieldData.id_att",

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
                    dataField: "fieldData.manual_file_name",
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
                        $('<a class="btn btn-primary btn-sm" href="' + options.data.fieldData.file + '" download="' + options.data.fieldData.manual_file_name + '.' + options.data.fieldData.file_extension.replace(/(?:\\[rn]|[\r\n]+)+/g, "") + '" target="_blank")>Download</a>').addClass('').appendTo(container);
                        //$('<a class="btn btn-primary btn-sm" onclick=get_file("' + options.data.fieldData.file + '","' + options.data.fieldData.file_name + '")>Download</a>').addClass('').appendTo(container);
                    },
                },
            ],
            repaintChangesOnly: true,
            showBorders: true
        }).dxDataGrid('instance');

    }
</script>