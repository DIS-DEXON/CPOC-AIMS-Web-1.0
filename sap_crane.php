<div class="jumbotron jumbotron-header rounded-0 bg-secondary text-white">
    <div class="row">
        <div class="col-12">
            <h1 class="display-4">SAP LIFTING CRANE</h1>
        </div>
    </div>
</div>
<div class="wrapper-form shadow">
    <div id="dataGid"></div>
</div>

<!-- Modal -->
<div class="modal fade" id="info_modal" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Lifting Crane Information</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-4">
                            <label class="header-detail">Tag Number</label>
                            <input type="text" class="form-control form-control-sm" id="tag_no" readonly>
                        </div>
                        <div class="col-md-4">
                            <label class="header-detail">Platform</label>
                            <input type="text" class="form-control form-control-sm" id="platform" readonly>
                        </div>
                        <div class="col-md-4">
                            <label class="header-detail">Category</label>
                            <input type="text" class="form-control form-control-sm" id="category" readonly>
                        </div>
                        <div class="col-md-4">
                            <label class="header-detail">Serial Number</label>
                            <input type="text" class="form-control form-control-sm" id="serial_no" readonly>
                        </div>
                        <div class="col-md-4">
                            <label class="header-detail">Equipment Type</label>
                            <input type="text" class="form-control form-control-sm" id="equipment_type" readonly>
                        </div>
                        <div class="col-md-4">
                            <label class="header-detail">Model</label>
                            <input type="text" class="form-control form-control-sm" id="model" readonly>
                        </div>
                        <div class="col-md-4">
                            <label class="header-detail">Menufactured</label>
                            <input type="text" class="form-control form-control-sm" id="menufactured" readonly>
                        </div>
                        <div class="col-md-4">
                            <label class="header-detail">Standard Code</label>
                            <input type="text" class="form-control form-control-sm" id="standard_code" readonly>
                        </div>
                        <div class="col-md-4">
                            <label class="header-detail">SWL main (t)</label>
                            <input type="text" class="form-control form-control-sm" id="swl_main" readonly>
                        </div>
                        <div class="col-md-4">
                            <label class="header-detail">SWL aux (t)</label>
                            <input type="text" class="form-control form-control-sm" id="swl_aux" readonly>
                        </div>
                        <div class="col-md-4">
                            <label class="header-detail">Description</label>
                            <input type="text" class="form-control form-control-sm" id="description" readonly>
                        </div>
                    </div>
                </div>
                <!--// container-fluid-->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script>
    var _token_lifting = $.cookie("_token_lifting");
    var _token_dashboard = $.cookie("_token_dashboard");
    console.log("_token_lifting: " + _token_lifting);
    console.log("_token_dashboard: " + _token_dashboard);
    var dataGrid;
    var dataArr = "";
    var filterStatus = "";
    get_data();

    $('.loader').hide();

    function get_data() {
        console.log("in");
        $.ajax({
            type: "GET",
            url: "https://" + url_api + "/fmi/data/v2/databases/CPOC_AIMS/layouts/crane_SAP_api/records?_limit=1000",
            dataType: 'json',
            headers: {
                "Authorization": "Bearer " +  $.cookie("_token_dashboard"),
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
                get_token_startup();
                get_data();
            }
        });
    }

    function get_file(url,file_name) {
        // console.log(url);

        fetch("donwload_lib.php", {
        method: "POST",
        headers: {
          "Content-Type": "application/x-www-form-urlencoded; charset=UTF-8",
        },
        body: `url=${url}&token=${_token_lifting}&file_name=${file_name}`,
        })
        .then((response) => response.text())
        .then((res) => (alert(res)));
    }

    function create_table(data) {
        dataGrid = $("#dataGid").dxDataGrid({
            dataSource: data,
            keyExpr: "recordId",

            paging: {
                pageSize: 25
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
                // {
                //     dataField: "fieldData.id_tag",
                //     caption: "Info",
                //     width: "120",
                //     allowEditing: false,
                //     alignment: "center",
                //     cellTemplate: function (container, options) {
                //         $('<button type="button" title="Data"></button>').addClass('btn btn-sm fas fa-list-ul')
                //             .on('dxclick', function (e) {
                //                 // console.log(options.value)
                //                 get_info(options.data.fieldData);
                //             }).appendTo(container);
                //         $('<button type="button" title="Data"></button>').addClass('btn btn-sm fas fa-file-medical')
                //             .on('dxclick', function (e) {
                //                 get_anom_item(options.data.fieldData);
                //             }).appendTo(container);
                //         $('<button type="button" title="Library"></button>').addClass('btn btn-sm fas fa-book')
                //             .on('dxclick', function (e) {
                //                 console.log(options.value)
                //                 call_modal_library(options.value);
                //             }).appendTo(container);

                //     },
                //     fixed: true,
                //     fixedPosition: "left",
                //     allowFiltering: false,
                //     allowSorting: false,
                //     allowResizing: false,
                // },
                {
                    caption: "Platform",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Platform</div>"));
                    },
                    dataField: "fieldData.platform_codename",
                    fixed: true,
                    fixedPosition: "left",
                    // filterValues: ["MDPP"]
                },
                {
                    caption: "Tag Number",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Tag Number</div>"));
                    },
                    dataField: "fieldData.line_no",
                    fixed: true,
                    fixedPosition: "left"
                },
                {
                    caption: "Notification",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Notification</div>"));
                    },
                    dataField: "fieldData.notification"
                },
                {
                    caption: "SAP WO No",
                    headerCellTemplate: function (container) {
                        container.append($("<div>SAP WO No</div>"));
                    },
                    dataField: "fieldData.SAP_order_no"
                },
                {
                    caption: "Description",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Description</div>"));
                    },
                    dataField: "fieldData.description"
                },
                {
                    caption: "Main WorkCtr",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Main WorkCtr</div>"));
                    },
                    dataField: "fieldData.SAP_main_workctr"
                },
                {
                    caption: "CM Issued",
                    headerCellTemplate: function (container) {
                        container.append($("<div>CM Issued</div>"));
                    },
                    dataField: "fieldData.changed_on_issued",
                    dataType: "date",
                    format: "dd-MMM-yyyy"
                },
                {
                    caption: "CM Closed",
                    headerCellTemplate: function (container) {
                        container.append($("<div>CM Closed</div>"));
                    },
                    dataField: "fieldData.changed_on_closed",
                    dataType: "date",
                    format: "dd-MMM-yyyy"
                },
                {
                    caption: "Accessibility",
                    headerCellTemplate: function (container) {
                        container.append($("<div>Accessibility</div>"));
                    },
                    dataField: "fieldData.accessibility_value"
                },
            ],
            masterDetail: {
                enabled: true,
                template(container, options) {
                    const cData = options.data;
                    let pic1 = cData.fieldData["lifting_crane_anomaly::pic_1"];
                    let pic2 = cData.fieldData["lifting_crane_anomaly::pic_2"];
                    $('<div>')
                        .addClass('master-detail-caption')
                        .html(`SAP WO No: <b>${cData.fieldData.SAP_order_no}</b>`)
                        .appendTo(container);

                    $(`<div>Tag No: <b>${cData.fieldData.line_no}</b> | Component Group: <b>${cData.fieldData["lifting_crane_anomaly::comp_group_name"]}</b> | Component: <b>${cData.fieldData["lifting_crane_anomaly::component"]}</b> | Location: <b>${cData.fieldData["lifting_crane_anomaly::location"]}</b></div>`).appendTo(container);
                    $(`<div>Additional Data: <br><textarea class="form-control" rows="7" readonly style="font-size: 12px;">${cData.fieldData.additional_data}</textarea> </div>`).appendTo(container);
                    
                    let htmlPic = `<div>Picture: <br>`;
                    if (pic1) {
                        htmlPic += `<img src="${pic1}" width="200" height="200"> `;
                    }
                    if (pic2) {
                        htmlPic += `<img src="${pic2}" width="200" height="200"> `;
                    }
                    if (!pic1 && !pic2) {
                        htmlPic += `No Picture`;
                    }
                    htmlPic += `</div>`;
                    $(htmlPic).appendTo(container);

                }
            },
            repaintChangesOnly: true,
            onCellPrepared: function (e) {
                //Change background color
                if (e.rowType === "data" && e.column.dataField === "fieldData.color_code") {
                    e.cellElement.css("background-color", e.data.fieldData.color_code == "Red" ? "#FF0000" : e.data.fieldData.color_code == "Orange" ? "#FF481C" : e.data.fieldData.color_code == "Purple" ? "#9733FF" : e.data.fieldData.color_code == "Yellow" ? "#FFFF00" : e.data.fieldData.color_code == "Pink" ? "#FF97FF" : e.data.fieldData.color_code == "White" ? "#FFFFFF" : e.data.fieldData.color_code == "Blue" ? "#00AFEF" : "");
                }

                //Set alignment
                if (e.rowType == "header") {
                    e.cellElement.css("text-align", "center");
                    e.cellElement.css("vertical-align", "middle");
                }
                if (e.rowType === "data" && (e.column.dataField === "fieldData.platform_codename" || e.column.dataField === "fieldData.SAP_main_workctr" || e.column.dataField === "fieldData.changed_on_issued" || e.column.dataField === "fieldData.changed_on_closed" )) {
                    e.cellElement.css("text-align", "center");
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

        // $('.dx-toolbar-after').prepend('<button type="button" class="btn btn-outline-dark" onclick="call_modal_inspection_summary()" style="line-height: 1.3; border-color: #ddd;">SUMMARY</button>');

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