<div class="jumbotron jumbotron-header rounded-0 bg-secondary text-white">
    <div class="row">
        <div class="col-12">
            <h1 class="display-4">PRESSURE VESSEL ANOMALY</h1>
        </div>
    </div>
</div>
<div id="dashboard" class="row" style="margin-top: -70px;">
    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 mb-4">
        <div class="card shadow border-0">
            <div class="card-body">
                <h5 class="card-title mb-3">External Visual Anomaly Due (Permanent Repair)</h5>
                <div class="form-inline">
                    PLATFORM
                    <select id="platform-ddl-anom-ext-vt-perm" class="form-control mx-2">
                    </select>
                    START YEAR
                    <select id="sy-ddl-anom-ext-vt-perm" class="form-control mx-2">
                    </select>
                    END YEAR
                    <select id="ey-ddl-anom-ext-vt-perm" class="form-control mx-2">
                    </select>
                    <button type="button" class="btn btn-success" onclick="get_data_anom_ext_vt_perm()">SEARCH</button>
                </div>
                <div class="pie-chart-dashboard" id="vessel-anom-ext-vt-perm-chart"></div>
            </div>
        </div>
    </div>
    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 mb-4">
        <div class="card shadow border-0">
            <div class="card-body">
                <h5 class="card-title mb-3">External Thickness Anomaly Due (Permanent Repair)</h5>
                <div class="form-inline">
                    PLATFORM
                    <select id="platform-ddl-anom-ext-thk-perm" class="form-control mx-2">
                    </select>
                    START YEAR
                    <select id="sy-ddl-anom-ext-thk-perm" class="form-control mx-2">
                    </select>
                    END YEAR
                    <select id="ey-ddl-anom-ext-thk-perm" class="form-control mx-2">
                    </select>
                    <button type="button" class="btn btn-success" onclick="get_data_anom_ext_thk_perm()">SEARCH</button>
                </div>
                <div class="pie-chart-dashboard" id="vessel-anom-ext-thk-perm-chart"></div>
            </div>
        </div>
    </div>
    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 mb-4">
        <div class="card shadow border-0">
            <div class="card-body">
                <h5 class="card-title mb-3">Internal Visal Anomaly Due (Permanent Repair)</h5>
                <div class="form-inline">
                    PLATFORM
                    <select id="platform-ddl-anom-int-perm" class="form-control mx-2">
                    </select>
                    START YEAR
                    <select id="sy-ddl-anom-int-perm" class="form-control mx-2">
                    </select>
                    END YEAR
                    <select id="ey-ddl-anom-int-perm" class="form-control mx-2">
                    </select>
                    <button type="button" class="btn btn-success" onclick="get_data_anom_int_vt_perm()">SEARCH</button>
                </div>
                <div class="pie-chart-dashboard" id="vessel-anom-int-perm-chart"></div>
            </div>
        </div>
    </div>
    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 mb-4">
        <div class="card shadow border-0">
            <div class="card-body">
                <h5 class="card-title mb-3">External Visual Anomaly Due (Temporary Repair)</h5>
                <div class="form-inline">
                    PLATFORM
                    <select id="platform-ddl-anom-ext-vt-temp" class="form-control mx-2">
                    </select>
                    START YEAR
                    <select id="sy-ddl-anom-ext-vt-temp" class="form-control mx-2">
                    </select>
                    END YEAR
                    <select id="ey-ddl-anom-ext-vt-temp" class="form-control mx-2">
                    </select>
                    <button type="button" class="btn btn-success" onclick="get_data_anom_ext_vt_temp()">SEARCH</button>
                </div>
                <div class="pie-chart-dashboard" id="vessel-anom-ext-vt-temp-chart"></div>
            </div>
        </div>
    </div>
    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 mb-4">
        <div class="card shadow border-0">
            <div class="card-body">
                <h5 class="card-title mb-3">External Thickness Anomaly Due (Temporary Repair)</h5>
                <div class="form-inline">
                    PLATFORM
                    <select id="platform-ddl-anom-ext-thk-temp" class="form-control mx-2">
                    </select>
                    START YEAR
                    <select id="sy-ddl-anom-ext-thk-temp" class="form-control mx-2">
                    </select>
                    END YEAR
                    <select id="ey-ddl-anom-ext-thk-temp" class="form-control mx-2">
                    </select>
                    <button type="button" class="btn btn-success" onclick="get_data_anom_ext_thk_temp()">SEARCH</button>
                </div>
                <div class="pie-chart-dashboard" id="vessel-anom-ext-thk-temp-chart"></div>
            </div>
        </div>
    </div>
    
    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 mb-4">
        <div class="card shadow border-0">
            <div class="card-body">
                <h5 class="card-title mb-3">Internal Visual Anomaly Due (Temporary Repair)</h5>
                <div class="form-inline">
                    PLATFORM
                    <select id="platform-ddl-anom-int-temp" class="form-control mx-2">
                    </select>
                    START YEAR
                    <select id="sy-ddl-anom-int-temp" class="form-control mx-2">
                    </select>
                    END YEAR
                    <select id="ey-ddl-anom-int-temp" class="form-control mx-2">
                    </select>
                    <button type="button" class="btn btn-success" onclick="get_data_anom_int_vt_temp()">SEARCH</button>
                </div>
                <div class="pie-chart-dashboard" id="vessel-anom-int-temp-chart"></div>
            </div>
        </div>
    </div>
</div>

<script>
    var ext_vt_temp_year = "";
    var ext_vt_temp_high = "";
    var ext_vt_temp_alarp_1 = "";
    var ext_vt_temp_alarp_2 = "";
    var ext_vt_temp_alarp_3 = "";
    var ext_vt_temp_low = "";

    var ext_vt_perm_year = "";
    var ext_vt_perm_high = "";
    var ext_vt_perm_alarp_1 = "";
    var ext_vt_perm_alarp_2 = "";
    var ext_vt_perm_alarp_3 = "";
    var ext_vt_perm_low = "";

    var ext_thk_temp_year = "";
    var ext_thk_temp_high = "";
    var ext_thk_temp_alarp_1 = "";
    var ext_thk_temp_alarp_2 = "";
    var ext_thk_temp_alarp_3 = "";
    var ext_thk_temp_low = "";

    var ext_thk_perm_year = "";
    var ext_thk_perm_high = "";
    var ext_thk_perm_alarp_1 = "";
    var ext_thk_perm_alarp_2 = "";
    var ext_thk_perm_alarp_3 = "";
    var ext_thk_perm_low = "";

    var int_temp_year = "";
    var int_temp_high = "";
    var int_temp_alarp_1 = "";
    var int_temp_alarp_2 = "";
    var int_temp_alarp_3 = "";
    var int_temp_low = "";

    var int_perm_year = "";
    var int_perm_high = "";
    var int_perm_alarp_1 = "";
    var int_perm_alarp_2 = "";
    var int_perm_alarp_3 = "";
    var int_perm_low = "";

    var datenow = new Date();

    get_platform_ddl();
    get_year_ddl();
    get_data_anom_ext_vt_temp();
    get_data_anom_ext_vt_perm();
    get_data_anom_ext_thk_temp();
    get_data_anom_ext_thk_perm();
    get_data_anom_int_vt_temp();
    get_data_anom_int_vt_perm();
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
                get_token_dashboard();
                get_platform_ddl();
                //logout();
            }
        });
    }

    function create_platform_ddl(data) {
        var options = "";
        for(var i = 0; i < data.length; i++) {
            var option = '<option value="' + data[i].fieldData.codename + '">' + data[i].fieldData.codename + '</option>';
            options = options + option;
        }
        
        $('#platform-ddl-anom-ext-vt-temp').html(options);
        $('#platform-ddl-anom-ext-vt-perm').html(options);
        $('#platform-ddl-anom-ext-thk-temp').html(options);
        $('#platform-ddl-anom-ext-thk-perm').html(options);
        $('#platform-ddl-anom-int-temp').html(options);
        $('#platform-ddl-anom-int-perm').html(options);
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
                get_token_dashboard();
                get_year_ddl();
                //logout();
            }
        });
    }

    function create_year_ddl(data) {

        var ext_vt_temp_year = data[0].fieldData.vessel_ext_vt_anomaly_temporary_year_all.split(",").map(Number);
        var options_sy_ddl_ext_vt_temp = "";
        var selected_sy_ddl_ext_vt_temp = "";
        var options_ey_ddl_ext_vt_temp = "";
        var selected_ey_ddl_ext_vt_temp = "";

        var check_current_year = $.inArray(datenow.getFullYear(), ext_vt_temp_year) > -1;
        console.log(check_current_year);
        var max_year = Math.max(...ext_vt_temp_year);
        console.log(max_year);

        for(var i = 0; i < ext_vt_temp_year.length; i++) {
            
            if(check_current_year == true) {
                if(ext_vt_temp_year[i] == datenow.getFullYear()) {
                    selected_sy_ddl_ext_vt_temp = "selected";
                }else{
                    selected_sy_ddl_ext_vt_temp = "";
                }
                if(ext_vt_temp_year[i] == max_year) {
                    selected_ey_ddl_ext_vt_temp = "selected";
                }else {
                    selected_ey_ddl_ext_vt_temp = "";
                }
            } else {
                if(i == 0) {
                    selected_sy_ddl_ext_vt_temp = "selected";
                }else if(i == ext_vt_temp_year.length - 1) {
                    selected_ey_ddl_ext_vt_temp = "selected";
                    selected_sy_ddl_ext_vt_temp = "";
                }else {
                    selected_sy_ddl_ext_vt_temp = "";
                    selected_ey_ddl_ext_vt_temp = "";
                }
            }
            var option_sy_ddl_ext_vt_temp = '<option value="' + ext_vt_temp_year[i] + '" ' + selected_sy_ddl_ext_vt_temp + '>' + ext_vt_temp_year[i] + '</option>';
            options_sy_ddl_ext_vt_temp = options_sy_ddl_ext_vt_temp + option_sy_ddl_ext_vt_temp;

            var option_ey_ddl_ext_vt_temp = '<option value="' + ext_vt_temp_year[i] + '" ' + selected_ey_ddl_ext_vt_temp + '>' + ext_vt_temp_year[i] + '</option>';
            options_ey_ddl_ext_vt_temp = options_ey_ddl_ext_vt_temp + option_ey_ddl_ext_vt_temp;
        }

        $('#sy-ddl-anom-ext-vt-temp').html(options_sy_ddl_ext_vt_temp);
        $('#ey-ddl-anom-ext-vt-temp').html(options_ey_ddl_ext_vt_temp);

        var ext_vt_perm_year = data[0].fieldData.vessel_ext_vt_anomaly_permanent_year_all.split(",").map(Number);
        var options_sy_ddl_ext_vt_perm = "";
        var selected_sy_ddl_ext_vt_perm = "";
        var options_ey_ddl_ext_vt_perm = "";
        var selected_ey_ddl_ext_vt_perm = "";

        var check_current_year = $.inArray(datenow.getFullYear(), ext_vt_perm_year) > -1;
        console.log(check_current_year);
        var max_year = Math.max(...ext_vt_perm_year);
        console.log(max_year);

        for(var i = 0; i < ext_vt_perm_year.length; i++) {
            
            if(check_current_year == true) {
                if(ext_vt_perm_year[i] == datenow.getFullYear()) {
                    selected_sy_ddl_ext_vt_perm = "selected";
                }else{
                    selected_sy_ddl_ext_vt_perm = "";
                }
                if(ext_vt_perm_year[i] == max_year) {
                    selected_ey_ddl_ext_vt_perm = "selected";
                }else {
                    selected_ey_ddl_ext_vt_perm = "";
                }
            } else {
                if(i == 0) {
                    selected_sy_ddl_ext_vt_perm = "selected";
                }else if(i == ext_vt_perm_year.length - 1) {
                    selected_ey_ddl_ext_vt_perm = "selected";
                    selected_sy_ddl_ext_vt_perm = "";
                }else {
                    selected_sy_ddl_ext_vt_perm = "";
                    selected_ey_ddl_ext_vt_perm = "";
                }
            }
            var option_sy_ddl_ext_vt_perm = '<option value="' + ext_vt_perm_year[i] + '" ' + selected_sy_ddl_ext_vt_perm + '>' + ext_vt_perm_year[i] + '</option>';
            options_sy_ddl_ext_vt_perm = options_sy_ddl_ext_vt_perm + option_sy_ddl_ext_vt_perm;

            var option_ey_ddl_ext_vt_perm = '<option value="' + ext_vt_perm_year[i] + '" ' + selected_ey_ddl_ext_vt_perm + '>' + ext_vt_perm_year[i] + '</option>';
            options_ey_ddl_ext_vt_perm = options_ey_ddl_ext_vt_perm + option_ey_ddl_ext_vt_perm;
        }

        $('#sy-ddl-anom-ext-vt-perm').html(options_sy_ddl_ext_vt_perm);
        $('#ey-ddl-anom-ext-vt-perm').html(options_ey_ddl_ext_vt_perm);

        var ext_thk_temp_year = data[0].fieldData.vessel_ext_thk_anomaly_temporary_year_all.split(",").map(Number);
        var options_sy_ddl_ext_thk_temp = "";
        var selected_sy_ddl_ext_thk_temp = "";
        var options_ey_ddl_ext_thk_temp = "";
        var selected_ey_ddl_ext_thk_temp = "";

        var check_current_year = $.inArray(datenow.getFullYear(), ext_thk_temp_year) > -1;
        console.log(check_current_year);
        var max_year = Math.max(...ext_thk_temp_year);
        console.log(max_year);

        for(var i = 0; i < ext_thk_temp_year.length; i++) {
            
            if(check_current_year == true) {
                if(ext_thk_temp_year[i] == datenow.getFullYear()) {
                    selected_sy_ddl_ext_thk_temp = "selected";
                }else{
                    selected_sy_ddl_ext_thk_temp = "";
                }
                if(ext_thk_temp_year[i] == max_year) {
                    selected_ey_ddl_ext_thk_temp = "selected";
                }else {
                    selected_ey_ddl_ext_thk_temp = "";
                }
            } else {
                if(i == 0) {
                    selected_sy_ddl_ext_thk_temp = "selected";
                }else if(i == ext_thk_temp_year.length - 1) {
                    selected_ey_ddl_ext_thk_temp = "selected";
                    selected_sy_ddl_ext_thk_temp = "";
                }else {
                    selected_sy_ddl_ext_thk_temp = "";
                    selected_ey_ddl_ext_thk_temp = "";
                }
            }
            var option_sy_ddl_ext_thk_temp = '<option value="' + ext_thk_temp_year[i] + '" ' + selected_sy_ddl_ext_thk_temp + '>' + ext_thk_temp_year[i] + '</option>';
            options_sy_ddl_ext_thk_temp = options_sy_ddl_ext_thk_temp + option_sy_ddl_ext_thk_temp;

            var option_ey_ddl_ext_thk_temp = '<option value="' + ext_thk_temp_year[i] + '" ' + selected_ey_ddl_ext_thk_temp + '>' + ext_thk_temp_year[i] + '</option>';
            options_ey_ddl_ext_thk_temp = options_ey_ddl_ext_thk_temp + option_ey_ddl_ext_thk_temp;
        }

        $('#sy-ddl-anom-ext-thk-temp').html(options_sy_ddl_ext_thk_temp);
        $('#ey-ddl-anom-ext-thk-temp').html(options_ey_ddl_ext_thk_temp);

        var ext_thk_perm_year = data[0].fieldData.vessel_ext_thk_anomaly_permanent_year_all.split(",").map(Number);
        var options_sy_ddl_ext_thk_perm = "";
        var selected_sy_ddl_ext_thk_perm = "";
        var options_ey_ddl_ext_thk_perm = "";
        var selected_ey_ddl_ext_thk_perm = "";

        var check_current_year = $.inArray(datenow.getFullYear(), ext_thk_perm_year) > -1;
        console.log(check_current_year);
        var max_year = Math.max(...ext_thk_perm_year);
        console.log(max_year);

        for(var i = 0; i < ext_thk_perm_year.length; i++) {
            
            if(check_current_year == true) {
                if(ext_thk_perm_year[i] == datenow.getFullYear()) {
                    selected_sy_ddl_ext_thk_perm = "selected";
                }else{
                    selected_sy_ddl_ext_thk_perm = "";
                }
                if(ext_thk_perm_year[i] == max_year) {
                    selected_ey_ddl_ext_thk_perm = "selected";
                }else {
                    selected_ey_ddl_ext_thk_perm = "";
                }
            } else {
                if(i == 0) {
                    selected_sy_ddl_ext_thk_perm = "selected";
                }else if(i == ext_thk_perm_year.length - 1) {
                    selected_ey_ddl_ext_thk_perm = "selected";
                    selected_sy_ddl_ext_thk_perm = "";
                }else {
                    selected_sy_ddl_ext_thk_perm = "";
                    selected_ey_ddl_ext_thk_perm = "";
                }
            }

            var option_sy_ddl_ext_thk_perm = '<option value="' + ext_thk_perm_year[i] + '" ' + selected_sy_ddl_ext_thk_perm + '>' + ext_thk_perm_year[i] + '</option>';
            options_sy_ddl_ext_thk_perm = options_sy_ddl_ext_thk_perm + option_sy_ddl_ext_thk_perm;

            var option_ey_ddl_ext_thk_perm = '<option value="' + ext_thk_perm_year[i] + '" ' + selected_ey_ddl_ext_thk_perm + '>' + ext_thk_perm_year[i] + '</option>';
            options_ey_ddl_ext_thk_perm = options_ey_ddl_ext_thk_perm + option_ey_ddl_ext_thk_perm;
        }

        $('#sy-ddl-anom-ext-thk-perm').html(options_sy_ddl_ext_thk_perm);
        $('#ey-ddl-anom-ext-thk-perm').html(options_ey_ddl_ext_thk_perm);

        var int_temp_year = data[0].fieldData.vessel_int_anomaly_temporary_year_all.split(",").map(Number);
        var options_sy_ddl_int_temp = "";
        var selected_sy_ddl_int_temp = "";
        var options_ey_ddl_int_temp = "";
        var selected_ey_ddl_int_temp = "";

        var check_current_year = $.inArray(datenow.getFullYear(), int_temp_year) > -1;
        console.log(check_current_year);
        var max_year = Math.max(...int_temp_year);
        console.log(max_year);

        for(var i = 0; i < int_temp_year.length; i++) {
            
            if(check_current_year == true) {
                if(int_temp_year[i] == datenow.getFullYear()) {
                    selected_sy_ddl_int_temp = "selected";
                }else{
                    selected_sy_ddl_int_temp = "";
                }
                if(int_temp_year[i] == max_year) {
                    selected_ey_ddl_int_temp = "selected";
                }else {
                    selected_ey_ddl_int_temp = "";
                }
            } else {
                if(i == 0) {
                    selected_sy_ddl_int_temp = "selected";
                }else if(i == int_temp_year.length - 1) {
                    selected_ey_ddl_int_temp = "selected";
                    selected_sy_ddl_int_temp = "";
                }else {
                    selected_sy_ddl_int_temp = "";
                    selected_ey_ddl_int_temp = "";
                }
            }
            var option_sy_ddl_int_temp = '<option value="' + int_temp_year[i] + '" ' + selected_sy_ddl_int_temp + '>' + int_temp_year[i] + '</option>';
            options_sy_ddl_int_temp = options_sy_ddl_int_temp + option_sy_ddl_int_temp;

            var option_ey_ddl_int_temp = '<option value="' + int_temp_year[i] + '" ' + selected_ey_ddl_int_temp + '>' + int_temp_year[i] + '</option>';
            options_ey_ddl_int_temp = options_ey_ddl_int_temp + option_ey_ddl_int_temp;
        }

        $('#sy-ddl-anom-int-temp').html(options_sy_ddl_int_temp);
        $('#ey-ddl-anom-int-temp').html(options_ey_ddl_int_temp);

        var int_perm_year = data[0].fieldData.vessel_int_anomaly_permanent_year_all.split(",").map(Number);
        var options_sy_ddl_int_perm = "";
        var selected_sy_ddl_int_perm = "";
        var options_ey_ddl_int_perm = "";
        var selected_ey_ddl_int_perm = "";

        var check_current_year = $.inArray(datenow.getFullYear(), int_perm_year) > -1;
        console.log(check_current_year);
        var max_year = Math.max(...int_perm_year);
        console.log(max_year);

        for(var i = 0; i < int_perm_year.length; i++) {
            
            if(check_current_year == true) {
                if(int_perm_year[i] == datenow.getFullYear()) {
                    selected_sy_ddl_int_perm = "selected";
                }else{
                    selected_sy_ddl_int_perm = "";
                }
                if(int_perm_year[i] == max_year) {
                    selected_ey_ddl_int_perm = "selected";
                }else {
                    selected_ey_ddl_int_perm = "";
                }
            } else {
                if(i == 0) {
                    selected_sy_ddl_int_perm = "selected";
                }else if(i == int_perm_year.length - 1) {
                    selected_ey_ddl_int_perm = "selected";
                    selected_sy_ddl_int_perm = "";
                }else {
                    selected_sy_ddl_int_perm = "";
                    selected_ey_ddl_int_perm = "";
                }
            }
            var option_sy_ddl_int_perm = '<option value="' + int_perm_year[i] + '" ' + selected_sy_ddl_int_perm + '>' + int_perm_year[i] + '</option>';
            options_sy_ddl_int_perm = options_sy_ddl_int_perm + option_sy_ddl_int_perm;

            var option_ey_ddl_int_perm = '<option value="' + int_perm_year[i] + '" ' + selected_ey_ddl_int_perm + '>' + int_perm_year[i] + '</option>';
            options_ey_ddl_int_perm = options_ey_ddl_int_perm + option_ey_ddl_int_perm;
        }

        $('#sy-ddl-anom-int-perm').html(options_sy_ddl_int_perm);
        $('#ey-ddl-anom-int-perm').html(options_ey_ddl_int_perm);

    }

    function get_data_anom_ext_vt_temp() {
        var platform = $('#platform-ddl-anom-ext-vt-temp').val();
        var start_year = $('#sy-ddl-anom-ext-vt-temp').val();
        var end_year = $('#ey-ddl-anom-ext-vt-temp').val();
        var param = 'ext_vt_temp,' + platform + ',' + start_year + ',' + end_year;
        console.log(param);
        $.ajax({
            type: "GET",
            url: "https://" + url_api + "/fmi/data/v2/databases/CPOC_AIMS/layouts/dashboard_vessel/script/get_vessel_anomaly?script.param=" + param,
            dataType: 'json',
            headers: {
                "Authorization": "Bearer " + $.cookie("_token_dashboard"),
                "Content-Type": "application/json"
            },
            async: false,
            success: function (data) {
                console.log(data.response.scriptResult);
                var val = data.response.scriptResult.split("|");
                ext_vt_temp_year = val[0].split(",");
                ext_vt_temp_low = val[1].split(",");
                ext_vt_temp_alarp_1 = val[2].split(",");
                ext_vt_temp_alarp_2 = val[3].split(",");
                ext_vt_temp_alarp_3 = val[4].split(",");
                ext_vt_temp_high = val[5].split(",");
                console.log(ext_vt_temp_year);
                console.log(ext_vt_temp_low);
                console.log(ext_vt_temp_alarp_1);
                console.log(ext_vt_temp_alarp_2);
                console.log(ext_vt_temp_alarp_3);
                console.log(ext_vt_temp_high);
                gen_chart_anom_ext_vt_temp();
            },
            error: function (error) {
                console.log(error);
            }
        });
    }

    function gen_chart_anom_ext_vt_temp() {
        Highcharts.setOptions({
            lang: {
                decimalPoint: '.',
                thousandsSep: ','
            }
        });
        Highcharts.chart('vessel-anom-ext-vt-temp-chart', {
            chart: {
                type: 'column'
            },
            title: {
                text: ''
            },
            xAxis: {
                categories: ext_vt_temp_year.map(Number)
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Number of pending anomalies',
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
                }
            },
            series: [{
                name: 'High',
                color: "#FF0000",
                data: ext_vt_temp_high.map(Number)
            }, {
                name: 'Alarp-1',
                color: "#FFFF00",
                data: ext_vt_temp_alarp_1.map(Number)
            }, {
                name: 'Alarp-2',
                color: "#FFFF00",
                data: ext_vt_temp_alarp_2.map(Number)
            }, {
                name: 'Alarp-3',
                color: "#FFFF00",
                data: ext_vt_temp_alarp_3.map(Number)
            }, {
                name: 'Low',
                color: "#00AF50",
                data: ext_vt_temp_low.map(Number)
            }],
            credits: {
                enabled: false
            },
            exporting: {
                enabled: false
            }
        });
    }

    function get_data_anom_ext_vt_perm() {
        var platform = $('#platform-ddl-anom-ext-vt-perm').val();
        var start_year = $('#sy-ddl-anom-ext-vt-perm').val();
        var end_year = $('#ey-ddl-anom-ext-vt-perm').val();
        var param = 'ext_vt_perm,' + platform + ',' + start_year + ',' + end_year;
        console.log(param);
        $.ajax({
            type: "GET",
            url: "https://" + url_api + "/fmi/data/v2/databases/CPOC_AIMS/layouts/dashboard_vessel/script/get_vessel_anomaly?script.param=" + param,
            dataType: 'json',
            headers: {
                "Authorization": "Bearer " + $.cookie("_token_dashboard"),
                "Content-Type": "application/json"
            },
            async: false,
            success: function (data) {
                console.log(data.response.scriptResult);
                var val = data.response.scriptResult.split("|");
                ext_vt_perm_year = val[0].split(",");
                ext_vt_perm_low = val[1].split(",");
                ext_vt_perm_alarp_1 = val[2].split(",");
                ext_vt_perm_alarp_2 = val[3].split(",");
                ext_vt_perm_alarp_3 = val[4].split(",");
                ext_vt_perm_high = val[5].split(",");
                console.log(ext_vt_perm_year);
                console.log(ext_vt_perm_low);
                console.log(ext_vt_perm_alarp_1);
                console.log(ext_vt_perm_alarp_2);
                console.log(ext_vt_perm_alarp_3);
                console.log(ext_vt_perm_high);
                gen_chart_anom_ext_vt_perm();
            },
            error: function (error) {
                console.log(error);
            }
        });
    }

    function gen_chart_anom_ext_vt_perm() {
        Highcharts.setOptions({
            lang: {
                decimalPoint: '.',
                thousandsSep: ','
            }
        });
        Highcharts.chart('vessel-anom-ext-vt-perm-chart', {
            chart: {
                type: 'column'
            },
            title: {
                text: ''
            },
            xAxis: {
                categories: ext_vt_perm_year.map(Number)
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Number of pending anomalies',
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
                }
            },
            series: [{
                name: 'High',
                color: "#FF0000",
                data: ext_vt_perm_high.map(Number)
            }, {
                name: 'Alarp-1',
                color: "#FFFF00",
                data: ext_vt_perm_alarp_1.map(Number)
            }, {
                name: 'Alarp-2',
                color: "#FFFF00",
                data: ext_vt_perm_alarp_2.map(Number)
            }, {
                name: 'Alarp-3',
                color: "#FFFF00",
                data: ext_vt_perm_alarp_3.map(Number)
            }, {
                name: 'Low',
                color: "#00AF50",
                data: ext_vt_perm_low.map(Number)
            }],
            credits: {
                enabled: false
            },
            exporting: {
                enabled: false
            }
        });
    }

    function get_data_anom_ext_thk_temp() {
        var platform = $('#platform-ddl-anom-ext-thk-temp').val();
        var start_year = $('#sy-ddl-anom-ext-thk-temp').val();
        var end_year = $('#ey-ddl-anom-ext-thk-temp').val();
        var param = 'ext_thk_temp,' + platform + ',' + start_year + ',' + end_year;
        console.log(param);
        $.ajax({
            type: "GET",
            url: "https://" + url_api + "/fmi/data/v2/databases/CPOC_AIMS/layouts/dashboard_vessel/script/get_vessel_anomaly?script.param=" + param,
            dataType: 'json',
            headers: {
                "Authorization": "Bearer " + $.cookie("_token_dashboard"),
                "Content-Type": "application/json"
            },
            async: false,
            success: function (data) {
                console.log(data.response.scriptResult);
                var val = data.response.scriptResult.split("|");
                ext_thk_temp_year = val[0].split(",");
                ext_thk_temp_low = val[1].split(",");
                ext_thk_temp_alarp_1 = val[2].split(",");
                ext_thk_temp_alarp_2 = val[3].split(",");
                ext_thk_temp_alarp_3 = val[4].split(",");
                ext_thk_temp_high = val[5].split(",");
                console.log(ext_thk_temp_year);
                console.log(ext_thk_temp_low);
                console.log(ext_thk_temp_alarp_1);
                console.log(ext_thk_temp_alarp_2);
                console.log(ext_thk_temp_alarp_3);
                console.log(ext_thk_temp_high);
                gen_chart_anom_ext_thk_temp();
            },
            error: function (error) {
                console.log(error);
            }
        });
    }

    function gen_chart_anom_ext_thk_temp() {
        Highcharts.setOptions({
            lang: {
                decimalPoint: '.',
                thousandsSep: ','
            }
        });
        Highcharts.chart('vessel-anom-ext-thk-temp-chart', {
            chart: {
                type: 'column'
            },
            title: {
                text: ''
            },
            xAxis: {
                categories: ext_thk_temp_year.map(Number)
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Number of pending anomalies',
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
                }
            },
            series: [{
                name: 'High',
                color: "#FF0000",
                data: ext_thk_temp_high.map(Number)
            }, {
                name: 'Alarp-1',
                color: "#FFFF00",
                data: ext_thk_temp_alarp_1.map(Number)
            }, {
                name: 'Alarp-2',
                color: "#FFFF00",
                data: ext_thk_temp_alarp_2.map(Number)
            }, {
                name: 'Alarp-3',
                color: "#FFFF00",
                data: ext_thk_temp_alarp_3.map(Number)
            }, {
                name: 'Low',
                color: "#00AF50",
                data: ext_thk_temp_low.map(Number)
            }],
            credits: {
                enabled: false
            },
            exporting: {
                enabled: false
            }
        });
    }

    function get_data_anom_ext_thk_perm() {
        var platform = $('#platform-ddl-anom-ext-thk-perm').val();
        var start_year = $('#sy-ddl-anom-ext-thk-perm').val();
        var end_year = $('#ey-ddl-anom-ext-thk-perm').val();
        var param = 'ext_thk_perm,' + platform + ',' + start_year + ',' + end_year;
        console.log(param);
        $.ajax({
            type: "GET",
            url: "https://" + url_api + "/fmi/data/v2/databases/CPOC_AIMS/layouts/dashboard_vessel/script/get_vessel_anomaly?script.param=" + param,
            dataType: 'json',
            headers: {
                "Authorization": "Bearer " + $.cookie("_token_dashboard"),
                "Content-Type": "application/json"
            },
            async: false,
            success: function (data) {
                console.log(data.response.scriptResult);
                var val = data.response.scriptResult.split("|");
                ext_thk_perm_year = val[0].split(",");
                ext_thk_perm_low = val[1].split(",");
                ext_thk_perm_alarp_1 = val[2].split(",");
                ext_thk_perm_alarp_2 = val[3].split(",");
                ext_thk_perm_alarp_3 = val[4].split(",");
                ext_thk_perm_high = val[5].split(",");
                console.log(ext_thk_perm_year);
                console.log(ext_thk_perm_low);
                console.log(ext_thk_perm_alarp_1);
                console.log(ext_thk_perm_alarp_2);
                console.log(ext_thk_perm_alarp_3);
                console.log(ext_thk_perm_high);
                gen_chart_anom_ext_thk_perm();
            },
            error: function (error) {
                console.log(error);
            }
        });
    }

    function gen_chart_anom_ext_thk_perm() {
        Highcharts.setOptions({
            lang: {
                decimalPoint: '.',
                thousandsSep: ','
            }
        });
        Highcharts.chart('vessel-anom-ext-thk-perm-chart', {
            chart: {
                type: 'column'
            },
            title: {
                text: ''
            },
            xAxis: {
                categories: ext_thk_perm_year.map(Number)
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Number of pending anomalies',
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
                }
            },
            series: [{
                name: 'High',
                color: "#FF0000",
                data: ext_thk_perm_high.map(Number)
            }, {
                name: 'Alarp-1',
                color: "#FFFF00",
                data: ext_thk_perm_alarp_1.map(Number)
            }, {
                name: 'Alarp-2',
                color: "#FFFF00",
                data: ext_thk_perm_alarp_2.map(Number)
            }, {
                name: 'Alarp-3',
                color: "#FFFF00",
                data: ext_thk_perm_alarp_3.map(Number)
            }, {
                name: 'Low',
                color: "#00AF50",
                data: ext_thk_perm_low.map(Number)
            }],
            credits: {
                enabled: false
            },
            exporting: {
                enabled: false
            }
        });
    }

    function get_data_anom_int_vt_temp() {
        var platform = $('#platform-ddl-anom-int-temp').val();
        var start_year = $('#sy-ddl-anom-int-temp').val();
        var end_year = $('#ey-ddl-anom-int-temp').val();
        var param = 'int_temp,' + platform + ',' + start_year + ',' + end_year;
        console.log(param);
        $.ajax({
            type: "GET",
            url: "https://" + url_api + "/fmi/data/v2/databases/CPOC_AIMS/layouts/dashboard_vessel/script/get_vessel_anomaly?script.param=" + param,
            dataType: 'json',
            headers: {
                "Authorization": "Bearer " + $.cookie("_token_dashboard"),
                "Content-Type": "application/json"
            },
            async: false,
            success: function (data) {
                console.log(data.response.scriptResult);
                var val = data.response.scriptResult.split("|");
                int_temp_year = val[0].split(",");
                int_temp_low = val[1].split(",");
                int_temp_alarp_1 = val[2].split(",");
                int_temp_alarp_2 = val[3].split(",");
                int_temp_alarp_3 = val[4].split(",");
                int_temp_high = val[5].split(",");
                console.log(int_temp_year);
                console.log(int_temp_low);
                console.log(int_temp_alarp_1);
                console.log(int_temp_alarp_2);
                console.log(int_temp_alarp_3);
                console.log(int_temp_high);
                gen_chart_anom_int_vt_temp();
            },
            error: function (error) {
                console.log(error);
            }
        });
    }

    function gen_chart_anom_int_vt_temp() {
        Highcharts.setOptions({
            lang: {
                decimalPoint: '.',
                thousandsSep: ','
            }
        });
        Highcharts.chart('vessel-anom-int-temp-chart', {
            chart: {
                type: 'column'
            },
            title: {
                text: ''
            },
            xAxis: {
                categories: int_temp_year.map(Number)
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Number of pending anomalies',
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
                }
            },
            series: [{
                name: 'High',
                color: "#FF0000",
                data: int_temp_high.map(Number)
            }, {
                name: 'Alarp-1',
                color: "#FFFF00",
                data: int_temp_alarp_1.map(Number)
            }, {
                name: 'Alarp-2',
                color: "#FFFF00",
                data: int_temp_alarp_2.map(Number)
            }, {
                name: 'Alarp-3',
                color: "#FFFF00",
                data: int_temp_alarp_3.map(Number)
            }, {
                name: 'Low',
                color: "#00AF50",
                data: int_temp_low.map(Number)
            }],
            credits: {
                enabled: false
            },
            exporting: {
                enabled: false
            }
        });
    }

    function get_data_anom_int_vt_perm() {
        var platform = $('#platform-ddl-anom-int-perm').val();
        var start_year = $('#sy-ddl-anom-int-perm').val();
        var end_year = $('#ey-ddl-anom-int-perm').val();
        var param = 'int_perm,' + platform + ',' + start_year + ',' + end_year;
        console.log(param);
        $.ajax({
            type: "GET",
            url: "https://" + url_api + "/fmi/data/v2/databases/CPOC_AIMS/layouts/dashboard_vessel/script/get_vessel_anomaly?script.param=" + param,
            dataType: 'json',
            headers: {
                "Authorization": "Bearer " + $.cookie("_token_dashboard"),
                "Content-Type": "application/json"
            },
            async: false,
            success: function (data) {
                console.log(data.response.scriptResult);
                var val = data.response.scriptResult.split("|");
                int_perm_year = val[0].split(",");
                int_perm_low = val[1].split(",");
                int_perm_alarp_1 = val[2].split(",");
                int_perm_alarp_2 = val[3].split(",");
                int_perm_alarp_3 = val[4].split(",");
                int_perm_high = val[5].split(",");
                console.log(int_perm_year);
                console.log(int_perm_low);
                console.log(int_perm_alarp_1);
                console.log(int_perm_alarp_2);
                console.log(int_perm_alarp_3);
                console.log(int_perm_high);
                gen_chart_anom_int_vt_perm();
            },
            error: function (error) {
                console.log(error);
            }
        });
    }

    function gen_chart_anom_int_vt_perm() {
        Highcharts.setOptions({
            lang: {
                decimalPoint: '.',
                thousandsSep: ','
            }
        });
        Highcharts.chart('vessel-anom-int-perm-chart', {
            chart: {
                type: 'column'
            },
            title: {
                text: ''
            },
            xAxis: {
                categories: int_perm_year.map(Number)
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Number of pending anomalies',
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
                }
            },
            series: [{
                name: 'High',
                color: "#FF0000",
                data: int_perm_high.map(Number)
            }, {
                name: 'Alarp-1',
                color: "#FFFF00",
                data: int_perm_alarp_1.map(Number)
            }, {
                name: 'Alarp-2',
                color: "#FFFF00",
                data: int_perm_alarp_2.map(Number)
            }, {
                name: 'Alarp-3',
                color: "#FFFF00",
                data: int_perm_alarp_3.map(Number)
            }, {
                name: 'Low',
                color: "#00AF50",
                data: int_perm_low.map(Number)
            }],
            credits: {
                enabled: false
            },
            exporting: {
                enabled: false
            }
        });
    }

 

</script>