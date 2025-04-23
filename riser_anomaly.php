<div class="jumbotron jumbotron-header rounded-0 bg-secondary text-white">
    <div class="row">
        <div class="col-12">
            <h1 class="display-4">RISER ANOMALY</h1>
        </div>
    </div>
</div>
<div id="dashboard" class="row" style="margin-top: -70px;">
    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 mb-4">
        <div class="card shadow border-0">
            <div class="card-body">
                <h5 class="card-title mb-3">Topside Riser Visual Anomaly Due (Permanent Repair)</h5>
                <div class="form-inline">
                    <!-- PLATFORM
                    <select id="platform-ddl-anom-vt-temp" class="form-control mx-2">
                    </select> -->
                    START YEAR
                    <select id="sy-ddl-asz-vt-perm" class="form-control mx-2">
                    </select>
                    END YEAR
                    <select id="ey-ddl-asz-vt-perm" class="form-control mx-2">
                    </select>
                    <button type="button" class="btn btn-success" onclick="get_data_anom_asz_vt_perm()">SEARCH</button>
                </div>
                <div class="pie-chart-dashboard" id="asz-vt-perm-chart"></div>
            </div>
        </div>
    </div>
    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 mb-4">
        <div class="card shadow border-0">
            <div class="card-body">
                <h5 class="card-title mb-3">Topside Riser UT Anomaly Due (Permanent Repair)</h5>
                <div class="form-inline">
                    <!-- PLATFORM
                    <select id="platform-ddl-anom-vt-temp" class="form-control mx-2">
                    </select> -->
                    START YEAR
                    <select id="sy-ddl-asz-ut-perm" class="form-control mx-2">
                    </select>
                    END YEAR
                    <select id="ey-ddl-asz-ut-perm" class="form-control mx-2">
                    </select>
                    <button type="button" class="btn btn-success" onclick="get_data_anom_asz_ut_perm()">SEARCH</button>
                </div>
                <div class="pie-chart-dashboard" id="asz-ut-perm-chart"></div>
            </div>
        </div>
    </div>
    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 mb-4">
        <div class="card shadow border-0">
            <div class="card-body">
                <h5 class="card-title mb-3">Subsea Riser Remote Operating Vehicle Anomaly Due (Permanent Repair)</h5>
                <div class="form-inline">
                    <!-- PLATFORM
                    <select id="platform-ddl-anom-vt-temp" class="form-control mx-2">
                    </select> -->
                    START YEAR
                    <select id="sy-ddl-bsz-rov-perm" class="form-control mx-2">
                    </select>
                    END YEAR
                    <select id="ey-ddl-bsz-rov-perm" class="form-control mx-2">
                    </select>
                    <button type="button" class="btn btn-success" onclick="get_data_anom_bsz_rov_perm()">SEARCH</button>
                </div>
                <div class="pie-chart-dashboard" id="bsz-rov-perm-chart"></div>
            </div>
        </div>
    </div>

    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 mb-4">
        <div class="card shadow border-0">
            <div class="card-body">
                <h5 class="card-title mb-3">Topside Riser Visual Anomaly Due (Temporary Repair)</h5>
                <div class="form-inline">
                    <!-- PLATFORM
                    <select id="platform-ddl-anom-vt-temp" class="form-control mx-2">
                    </select> -->
                    START YEAR
                    <select id="sy-ddl-asz-vt-temp" class="form-control mx-2">
                    </select>
                    END YEAR
                    <select id="ey-ddl-asz-vt-temp" class="form-control mx-2">
                    </select>
                    <button type="button" class="btn btn-success" onclick="get_data_anom_asz_vt_temp()">SEARCH</button>
                </div>
                <div class="pie-chart-dashboard" id="asz-vt-temp-chart"></div>
            </div>
        </div>
    </div>
    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 mb-4">
        <div class="card shadow border-0">
            <div class="card-body">
                <h5 class="card-title mb-3">Topside Riser UT Anomaly Due (Temporary Repair)</h5>
                <div class="form-inline">
                    <!-- PLATFORM
                    <select id="platform-ddl-anom-vt-temp" class="form-control mx-2">
                    </select> -->
                    START YEAR
                    <select id="sy-ddl-asz-ut-temp" class="form-control mx-2">
                    </select>
                    END YEAR
                    <select id="ey-ddl-asz-ut-temp" class="form-control mx-2">
                    </select>
                    <button type="button" class="btn btn-success" onclick="get_data_anom_asz_ut_temp()">SEARCH</button>
                </div>
                <div class="pie-chart-dashboard" id="asz-ut-temp-chart"></div>
            </div>
        </div>
    </div>
    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 mb-4">
        <div class="card shadow border-0">
            <div class="card-body">
                <h5 class="card-title mb-3">Subsea Riser Remote Operating Vehicle Anomaly Due (Temporary Repair)</h5>
                <div class="form-inline">
                    <!-- PLATFORM
                    <select id="platform-ddl-anom-vt-temp" class="form-control mx-2">
                    </select> -->
                    START YEAR
                    <select id="sy-ddl-bsz-rov-temp" class="form-control mx-2">
                    </select>
                    END YEAR
                    <select id="ey-ddl-bsz-rov-temp" class="form-control mx-2">
                    </select>
                    <button type="button" class="btn btn-success" onclick="get_data_anom_bsz_rov_temp()">SEARCH</button>
                </div>
                <div class="pie-chart-dashboard" id="bsz-rov-temp-chart"></div>
            </div>
        </div>
    </div>
</div>
<script>
    var asz_vt_temp_year = "";
    var asz_vt_temp_high = "";
    var asz_vt_temp_alarp_3 = "";
    var asz_vt_temp_alarp_2 = "";
    var asz_vt_temp_alarp_1 = "";
    var asz_vt_temp_low = "";

    var asz_vt_perm_year = "";
    var asz_vt_perm_high = "";
    var asz_vt_perm_alarp_3 = "";
    var asz_vt_perm_alarp_2 = "";
    var asz_vt_perm_alarp_1 = "";
    var asz_vt_perm_low = "";

    var asz_ut_temp_year = "";
    var asz_ut_temp_high = "";
    var asz_ut_temp_alarp_3 = "";
    var asz_ut_temp_alarp_2 = "";
    var asz_ut_temp_alarp_1 = "";
    var asz_ut_temp_low = "";

    var asz_ut_perm_year = "";
    var asz_ut_perm_high = "";
    var asz_ut_perm_alarp_3 = "";
    var asz_ut_perm_alarp_2 = "";
    var asz_ut_perm_alarp_1 = "";
    var asz_ut_perm_low = "";

    var bsz_rov_temp_year = "";
    var bsz_rov_temp_high = "";
    var bsz_rov_temp_alarp_3 = "";
    var bsz_rov_temp_alarp_2 = "";
    var bsz_rov_temp_alarp_1 = "";
    var bsz_rov_temp_low = "";

    var bsz_rov_perm_year = "";
    var bsz_rov_perm_high = "";
    var bsz_rov_perm_alarp_3 = "";
    var bsz_rov_perm_alarp_2 = "";
    var bsz_rov_perm_alarp_1 = "";
    var bsz_rov_perm_low = "";

    var remove_year = 0;

    var datenow = new Date();

    get_year_ddl();
    get_data_anom_asz_vt_temp();
    get_data_anom_asz_vt_perm();
    get_data_anom_asz_ut_temp();
    get_data_anom_asz_ut_perm();
    get_data_anom_bsz_rov_temp();
    get_data_anom_bsz_rov_perm();
    $('.loader').hide();

    function get_year_ddl() {
        $.ajax({
            type: "GET",
            url: "https://" + url_api + "/fmi/data/v2/databases/CPOC_AIMS/layouts/dashboard_riser/records?_limit=1",
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

        var asz_vt_temp_year = data[0].fieldData.riser_asz_vt_anomaly_temporary_year.split(",").map(Number);
        asz_vt_temp_year.splice( $.inArray(remove_year,asz_vt_temp_year) ,1 );
        var options_sy_ddl_asz_vt_temp = "";
        var selected_sy_ddl_asz_vt_temp = "";
        var options_ey_ddl_asz_vt_temp = "";
        var selected_ey_ddl_asz_vt_temp = "";

        var check_current_year = $.inArray(datenow.getFullYear(), asz_vt_temp_year) > -1;
        console.log(check_current_year);
        var max_year = Math.max(...asz_vt_temp_year);
        console.log(max_year);

        for(var i = 0; i < asz_vt_temp_year.length; i++) {

            if(check_current_year == true) {
                if(asz_vt_temp_year[i] == datenow.getFullYear()) {
                    selected_sy_ddl_asz_vt_temp = "selected";
                }else{
                    selected_sy_ddl_asz_vt_temp = "";
                }
                if(asz_vt_temp_year[i] == max_year) {
                    selected_ey_ddl_asz_vt_temp = "selected";
                }else {
                    selected_ey_ddl_asz_vt_temp = "";
                }
            } else {
                if(i == 0) {
                    selected_sy_ddl_asz_vt_temp = "selected";
                }else if(i == asz_vt_temp_year.length - 1) {
                    selected_ey_ddl_asz_vt_temp = "selected";
                    selected_sy_ddl_asz_vt_temp = "";
                }else {
                    selected_sy_ddl_asz_vt_temp = "";
                    selected_ey_ddl_asz_vt_temp = "";
                }
            }
            var option_sy_ddl_asz_vt_temp = '<option value="' + asz_vt_temp_year[i] + '" ' + selected_sy_ddl_asz_vt_temp + '>' + asz_vt_temp_year[i] + '</option>';
            options_sy_ddl_asz_vt_temp = options_sy_ddl_asz_vt_temp + option_sy_ddl_asz_vt_temp;

            var option_ey_ddl_asz_vt_temp = '<option value="' + asz_vt_temp_year[i] + '" ' + selected_ey_ddl_asz_vt_temp + '>' + asz_vt_temp_year[i] + '</option>';
            options_ey_ddl_asz_vt_temp = options_ey_ddl_asz_vt_temp + option_ey_ddl_asz_vt_temp;
        }

        $('#sy-ddl-asz-vt-temp').html(options_sy_ddl_asz_vt_temp);
        $('#ey-ddl-asz-vt-temp').html(options_ey_ddl_asz_vt_temp);

        var asz_vt_perm_year = data[0].fieldData.riser_asz_vt_anomaly_permanent_year.split(",").map(Number);
        asz_vt_perm_year.splice( $.inArray(remove_year,asz_vt_perm_year) ,1 );
        var options_sy_ddl_asz_vt_perm = "";
        var selected_sy_ddl_asz_vt_perm = "";
        var options_ey_ddl_asz_vt_perm = "";
        var selected_ey_ddl_asz_vt_perm = "";

        var check_current_year = $.inArray(datenow.getFullYear(), asz_vt_perm_year) > -1;
        console.log(check_current_year);
        var max_year = Math.max(...asz_vt_perm_year);
        console.log(max_year);

        for(var i = 0; i < asz_vt_perm_year.length; i++) {
            
            if(check_current_year == true) {
                if(asz_vt_perm_year[i] == datenow.getFullYear()) {
                    selected_sy_ddl_asz_vt_perm = "selected";
                }else{
                    selected_sy_ddl_asz_vt_perm = "";
                }
                if(asz_vt_perm_year[i] == max_year) {
                    selected_ey_ddl_asz_vt_perm = "selected";
                }else {
                    selected_ey_ddl_asz_vt_perm = "";
                }
            } else {
                if(i == 0) {
                    selected_sy_ddl_asz_vt_perm = "selected";
                }else if(i == asz_vt_perm_year.length - 1) {
                    selected_ey_ddl_asz_vt_perm = "selected";
                    selected_sy_ddl_asz_vt_perm = "";
                }else {
                    selected_sy_ddl_asz_vt_perm = "";
                    selected_ey_ddl_asz_vt_perm = "";
                }
            }
            var option_sy_ddl_asz_vt_perm = '<option value="' + asz_vt_perm_year[i] + '" ' + selected_sy_ddl_asz_vt_perm + '>' + asz_vt_perm_year[i] + '</option>';
            options_sy_ddl_asz_vt_perm = options_sy_ddl_asz_vt_perm + option_sy_ddl_asz_vt_perm;

            var option_ey_ddl_asz_vt_perm = '<option value="' + asz_vt_perm_year[i] + '" ' + selected_ey_ddl_asz_vt_perm + '>' + asz_vt_perm_year[i] + '</option>';
            options_ey_ddl_asz_vt_perm = options_ey_ddl_asz_vt_perm + option_ey_ddl_asz_vt_perm;
        }

        $('#sy-ddl-asz-vt-perm').html(options_sy_ddl_asz_vt_perm);
        $('#ey-ddl-asz-vt-perm').html(options_ey_ddl_asz_vt_perm);



        var asz_ut_temp_year = data[0].fieldData.riser_asz_thk_anomaly_temporary_year.split(",").map(Number);
        asz_ut_temp_year.splice( $.inArray(remove_year,asz_ut_temp_year) ,1 );
        var options_sy_ddl_asz_ut_temp = "";
        var selected_sy_ddl_asz_ut_temp = "";
        var options_ey_ddl_asz_ut_temp = "";
        var selected_ey_ddl_asz_ut_temp = "";

        var check_current_year = $.inArray(datenow.getFullYear(), asz_ut_temp_year) > -1;
        console.log(check_current_year);
        var max_year = Math.max(...asz_ut_temp_year);
        console.log(max_year);

        for(var i = 0; i < asz_ut_temp_year.length; i++) {
            
            if(check_current_year == true) {
                if(asz_ut_temp_year[i] == datenow.getFullYear()) {
                    selected_sy_ddl_asz_ut_temp = "selected";
                }else{
                    selected_sy_ddl_asz_ut_temp = "";
                }
                if(asz_ut_temp_year[i] == max_year) {
                    selected_ey_ddl_asz_ut_temp = "selected";
                }else {
                    selected_ey_ddl_asz_ut_temp = "";
                }
            } else {
                if(i == 0) {
                    selected_sy_ddl_asz_ut_temp = "selected";
                }else if(i == asz_ut_temp_year.length - 1) {
                    selected_ey_ddl_asz_ut_temp = "selected";
                    selected_sy_ddl_asz_ut_temp = "";
                }else {
                    selected_sy_ddl_asz_ut_temp = "";
                    selected_ey_ddl_asz_ut_temp = "";
                }
            }
            var option_sy_ddl_asz_ut_temp = '<option value="' + asz_ut_temp_year[i] + '" ' + selected_sy_ddl_asz_ut_temp + '>' + asz_ut_temp_year[i] + '</option>';
            options_sy_ddl_asz_ut_temp = options_sy_ddl_asz_ut_temp + option_sy_ddl_asz_ut_temp;

            var option_ey_ddl_asz_ut_temp = '<option value="' + asz_ut_temp_year[i] + '" ' + selected_ey_ddl_asz_ut_temp + '>' + asz_ut_temp_year[i] + '</option>';
            options_ey_ddl_asz_ut_temp = options_ey_ddl_asz_ut_temp + option_ey_ddl_asz_ut_temp;
        }

        $('#sy-ddl-asz-ut-temp').html(options_sy_ddl_asz_ut_temp);
        $('#ey-ddl-asz-ut-temp').html(options_ey_ddl_asz_ut_temp);

        var asz_ut_perm_year = data[0].fieldData.riser_asz_thk_anomaly_permanent_year.split(",").map(Number);
        asz_ut_perm_year.splice( $.inArray(remove_year,asz_ut_perm_year) ,1 );
        var options_sy_ddl_asz_ut_perm = "";
        var selected_sy_ddl_asz_ut_perm = "";
        var options_ey_ddl_asz_ut_perm = "";
        var selected_ey_ddl_asz_ut_perm = "";

        var check_current_year = $.inArray(datenow.getFullYear(), asz_ut_perm_year) > -1;
        console.log(check_current_year);
        var max_year = Math.max(...asz_ut_perm_year);
        console.log(max_year);

        for(var i = 0; i < asz_ut_perm_year.length; i++) {
            
            if(check_current_year == true) {
                if(asz_ut_perm_year[i] == datenow.getFullYear()) {
                    selected_sy_ddl_asz_ut_perm = "selected";
                }else{
                    selected_sy_ddl_asz_ut_perm = "";
                }
                if(asz_ut_perm_year[i] == max_year) {
                    selected_ey_ddl_asz_ut_perm = "selected";
                }else {
                    selected_ey_ddl_asz_ut_perm = "";
                }
            } else {
                if(i == 0) {
                    selected_sy_ddl_asz_ut_perm = "selected";
                }else if(i == asz_ut_perm_year.length - 1) {
                    selected_ey_ddl_asz_ut_perm = "selected";
                    selected_sy_ddl_asz_ut_perm = "";
                }else {
                    selected_sy_ddl_asz_ut_perm = "";
                    selected_ey_ddl_asz_ut_perm = "";
                }
            }
            var option_sy_ddl_asz_ut_perm = '<option value="' + asz_ut_perm_year[i] + '" ' + selected_sy_ddl_asz_ut_perm + '>' + asz_ut_perm_year[i] + '</option>';
            options_sy_ddl_asz_ut_perm = options_sy_ddl_asz_ut_perm + option_sy_ddl_asz_ut_perm;

            var option_ey_ddl_asz_ut_perm = '<option value="' + asz_ut_perm_year[i] + '" ' + selected_ey_ddl_asz_ut_perm + '>' + asz_ut_perm_year[i] + '</option>';
            options_ey_ddl_asz_ut_perm = options_ey_ddl_asz_ut_perm + option_ey_ddl_asz_ut_perm;
        }

        $('#sy-ddl-asz-ut-perm').html(options_sy_ddl_asz_ut_perm);
        $('#ey-ddl-asz-ut-perm').html(options_ey_ddl_asz_ut_perm);



        var bsz_rov_temp_year = data[0].fieldData.riser_bsz_vt_anomaly_temporary_year.split(",").map(Number);
        bsz_rov_temp_year.splice( $.inArray(remove_year,bsz_rov_temp_year) ,1 );
        var options_sy_ddl_bsz_rov_temp = "";
        var selected_sy_ddl_bsz_rov_temp = "";
        var options_ey_ddl_bsz_rov_temp = "";
        var selected_ey_ddl_bsz_rov_temp = "";

        var check_current_year = $.inArray(datenow.getFullYear(), bsz_rov_temp_year) > -1;
        console.log(check_current_year);
        var max_year = Math.max(...bsz_rov_temp_year);
        console.log(max_year);

        for(var i = 0; i < bsz_rov_temp_year.length; i++) {
            
            if(check_current_year == true) {
                if(bsz_rov_temp_year[i] == datenow.getFullYear()) {
                    selected_sy_ddl_bsz_rov_temp = "selected";
                }else{
                    selected_sy_ddl_bsz_rov_temp = "";
                }
                if(bsz_rov_temp_year[i] == max_year) {
                    selected_ey_ddl_bsz_rov_temp = "selected";
                }else {
                    selected_ey_ddl_bsz_rov_temp = "";
                }
            } else {
                if(i == 0) {
                    selected_sy_ddl_bsz_rov_temp = "selected";
                }else if(i == bsz_rov_temp_year.length - 1) {
                    selected_ey_ddl_bsz_rov_temp = "selected";
                    selected_sy_ddl_bsz_rov_temp = "";
                }else {
                    selected_sy_ddl_bsz_rov_temp = "";
                    selected_ey_ddl_bsz_rov_temp = "";
                }
            }
            var option_sy_ddl_bsz_rov_temp = '<option value="' + bsz_rov_temp_year[i] + '" ' + selected_sy_ddl_bsz_rov_temp + '>' + bsz_rov_temp_year[i] + '</option>';
            options_sy_ddl_bsz_rov_temp = options_sy_ddl_bsz_rov_temp + option_sy_ddl_bsz_rov_temp;

            var option_ey_ddl_bsz_rov_temp = '<option value="' + bsz_rov_temp_year[i] + '" ' + selected_ey_ddl_bsz_rov_temp + '>' + bsz_rov_temp_year[i] + '</option>';
            options_ey_ddl_bsz_rov_temp = options_ey_ddl_bsz_rov_temp + option_ey_ddl_bsz_rov_temp;
        }

        $('#sy-ddl-bsz-rov-temp').html(options_sy_ddl_bsz_rov_temp);
        $('#ey-ddl-bsz-rov-temp').html(options_ey_ddl_bsz_rov_temp);

        var bsz_rov_perm_year = data[0].fieldData.riser_bsz_vt_anomaly_permanent_year.split(",").map(Number);
        bsz_rov_perm_year.splice( $.inArray(remove_year,bsz_rov_perm_year) ,1 );
        var options_sy_ddl_bsz_rov_perm = "";
        var selected_sy_ddl_bsz_rov_perm = "";
        var options_ey_ddl_bsz_rov_perm = "";
        var selected_ey_ddl_bsz_rov_perm = "";

        var check_current_year = $.inArray(datenow.getFullYear(), bsz_rov_perm_year) > -1;
        console.log(check_current_year);
        var max_year = Math.max(...bsz_rov_perm_year);
        console.log(max_year);

        for(var i = 0; i < bsz_rov_perm_year.length; i++) {
            
            if(check_current_year == true) {
                if(bsz_rov_perm_year[i] == datenow.getFullYear()) {
                    selected_sy_ddl_bsz_rov_perm = "selected";
                }else{
                    selected_sy_ddl_bsz_rov_perm = "";
                }
                if(bsz_rov_perm_year[i] == max_year) {
                    selected_ey_ddl_bsz_rov_perm = "selected";
                }else {
                    selected_ey_ddl_bsz_rov_perm = "";
                }
            } else {
                if(i == 0) {
                    selected_sy_ddl_bsz_rov_perm = "selected";
                }else if(i == bsz_rov_perm_year.length - 1) {
                    selected_ey_ddl_bsz_rov_perm = "selected";
                    selected_sy_ddl_bsz_rov_perm = "";
                }else {
                    selected_sy_ddl_bsz_rov_perm = "";
                    selected_ey_ddl_bsz_rov_perm = "";
                }
            }
            var option_sy_ddl_bsz_rov_perm = '<option value="' + bsz_rov_perm_year[i] + '" ' + selected_sy_ddl_bsz_rov_perm + '>' + bsz_rov_perm_year[i] + '</option>';
            options_sy_ddl_bsz_rov_perm = options_sy_ddl_bsz_rov_perm + option_sy_ddl_bsz_rov_perm;

            var option_ey_ddl_bsz_rov_perm = '<option value="' + bsz_rov_perm_year[i] + '" ' + selected_ey_ddl_bsz_rov_perm + '>' + bsz_rov_perm_year[i] + '</option>';
            options_ey_ddl_bsz_rov_perm = options_ey_ddl_bsz_rov_perm + option_ey_ddl_bsz_rov_perm;
        }

        $('#sy-ddl-bsz-rov-perm').html(options_sy_ddl_bsz_rov_perm);
        $('#ey-ddl-bsz-rov-perm').html(options_ey_ddl_bsz_rov_perm);

    }

    function get_data_anom_asz_vt_temp() {
        var start_year = $('#sy-ddl-asz-vt-temp').val();
        var end_year = $('#ey-ddl-asz-vt-temp').val();
        var param = 'asz_vt_temp,' + start_year + ',' + end_year;
        console.log(param);
        $.ajax({
            type: "GET",
            url: "https://" + url_api + "/fmi/data/v2/databases/CPOC_AIMS/layouts/dashboard_riser/script/get_riser_anomaly?script.param=" + param,
            dataType: 'json',
            headers: {
                "Authorization": "Bearer " + $.cookie("_token_dashboard"),
                "Content-Type": "application/json"
            },
            async: false,
            success: function (data) {
                console.log(data.response.scriptResult);
                var val = data.response.scriptResult.split("|");
                asz_vt_temp_year = val[0].split(",");
                asz_vt_temp_low = val[1].split(",");
                asz_vt_temp_alarp_1 = val[2].split(",");
                asz_vt_temp_alarp_2 = val[3].split(",");
                asz_vt_temp_alarp_3 = val[4].split(",");
                asz_vt_temp_high = val[5].split(",");
                console.log(asz_vt_temp_year);
                console.log(asz_vt_temp_low);
                console.log(asz_vt_temp_alarp_1);
                console.log(asz_vt_temp_alarp_2);
                console.log(asz_vt_temp_alarp_3);
                console.log(asz_vt_temp_high);
                gen_chart_anom_asz_vt_temp();
            },
            error: function (error) {
                console.log(error);
            }
        });
    }

    function gen_chart_anom_asz_vt_temp() {
        Highcharts.setOptions({
            lang: {
                decimalPoint: '.',
                thousandsSep: ','
            }
        });
        Highcharts.chart('asz-vt-temp-chart', {
            chart: {
                type: 'column'
            },
            title: {
                text: ''
            },
            xAxis: {
                categories: asz_vt_temp_year.map(Number)
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
                data: asz_vt_temp_high.map(Number)
            }, {
                name: 'Alarp-1',
                color: "#FFFF00",
                data: asz_vt_temp_alarp_1.map(Number)
            }, {
                name: 'Alarp-2',
                color: "#FFFF00",
                data: asz_vt_temp_alarp_2.map(Number)
            }, {
                name: 'Alarp-3',
                color: "#FFFF00",
                data: asz_vt_temp_alarp_3.map(Number)
            }, {
                name: 'Low',
                color: "#00AF50",
                data: asz_vt_temp_low.map(Number)
            }],
            credits: {
                enabled: false
            },
            exporting: {
                enabled: false
            }
        });
    }

    function get_data_anom_asz_vt_perm() {
        var start_year = $('#sy-ddl-asz-vt-perm').val();
        var end_year = $('#ey-ddl-asz-vt-perm').val();
        var param = 'asz_vt_perm,' + start_year + ',' + end_year;
        console.log(param);
        $.ajax({
            type: "GET",
            url: "https://" + url_api + "/fmi/data/v2/databases/CPOC_AIMS/layouts/dashboard_riser/script/get_riser_anomaly?script.param=" + param,
            dataType: 'json',
            headers: {
                "Authorization": "Bearer " + $.cookie("_token_dashboard"),
                "Content-Type": "application/json"
            },
            async: false,
            success: function (data) {
                console.log(data.response.scriptResult);
                var val = data.response.scriptResult.split("|");
                asz_vt_perm_year = val[0].split(",");
                asz_vt_perm_low = val[1].split(",");
                asz_vt_perm_alarp_1 = val[2].split(",");
                asz_vt_perm_alarp_2 = val[3].split(",");
                asz_vt_perm_alarp_3 = val[4].split(",");
                asz_vt_perm_high = val[5].split(",");
                console.log(asz_vt_perm_year);
                console.log(asz_vt_perm_low);
                console.log(asz_vt_perm_alarp_1);
                console.log(asz_vt_perm_alarp_2);
                console.log(asz_vt_perm_alarp_3);
                console.log(asz_vt_perm_high);
                gen_chart_anom_asz_vt_perm();
            },
            error: function (error) {
                console.log(error);
            }
        });
    }

    function gen_chart_anom_asz_vt_perm() {
        Highcharts.setOptions({
            lang: {
                decimalPoint: '.',
                thousandsSep: ','
            }
        });
        Highcharts.chart('asz-vt-perm-chart', {
            chart: {
                type: 'column'
            },
            title: {
                text: ''
            },
            xAxis: {
                categories: asz_vt_perm_year.map(Number)
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
                data: asz_vt_perm_high.map(Number)
            }, {
                name: 'Alarp-1',
                color: "#FFFF00",
                data: asz_vt_perm_alarp_1.map(Number)
            }, {
                name: 'Alarp-2',
                color: "#FFFF00",
                data: asz_vt_perm_alarp_2.map(Number)
            }, {
                name: 'Alarp-3',
                color: "#FFFF00",
                data: asz_vt_perm_alarp_3.map(Number)
            }, {
                name: 'Low',
                color: "#00AF50",
                data: asz_vt_perm_low.map(Number)
            }],
            credits: {
                enabled: false
            },
            exporting: {
                enabled: false
            }
        });
    }

    function get_data_anom_asz_ut_temp() {
        var start_year = $('#sy-ddl-asz-ut-temp').val();
        var end_year = $('#ey-ddl-asz-ut-temp').val();
        var param = 'asz_ut_temp,' + start_year + ',' + end_year;
        console.log(param);
        $.ajax({
            type: "GET",
            url: "https://" + url_api + "/fmi/data/v2/databases/CPOC_AIMS/layouts/dashboard_riser/script/get_riser_anomaly?script.param=" + param,
            dataType: 'json',
            headers: {
                "Authorization": "Bearer " + $.cookie("_token_dashboard"),
                "Content-Type": "application/json"
            },
            async: false,
            success: function (data) {
                console.log(data.response.scriptResult);
                var val = data.response.scriptResult.split("|");
                asz_ut_temp_year = val[0].split(",");
                asz_ut_temp_low = val[1].split(",");
                asz_ut_temp_alarp_1 = val[2].split(",");
                asz_ut_temp_alarp_2 = val[3].split(",");
                asz_ut_temp_alarp_3 = val[4].split(",");
                asz_ut_temp_high = val[5].split(",");
                console.log(asz_ut_temp_year);
                console.log(asz_ut_temp_low);
                console.log(asz_ut_temp_alarp_1);
                console.log(asz_ut_temp_alarp_2);
                console.log(asz_ut_temp_alarp_3);
                console.log(asz_ut_temp_high);
                gen_chart_anom_asz_ut_temp();
            },
            error: function (error) {
                console.log(error);
            }
        });
    }

    function gen_chart_anom_asz_ut_temp() {
        Highcharts.setOptions({
            lang: {
                decimalPoint: '.',
                thousandsSep: ','
            }
        });
        Highcharts.chart('asz-ut-temp-chart', {
            chart: {
                type: 'column'
            },
            title: {
                text: ''
            },
            xAxis: {
                categories: asz_ut_temp_year.map(Number)
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
                data: asz_ut_temp_high.map(Number)
            }, {
                name: 'Alarp-1',
                color: "#FFFF00",
                data: asz_ut_temp_alarp_1.map(Number)
            }, {
                name: 'Alarp-2',
                color: "#FFFF00",
                data: asz_ut_temp_alarp_2.map(Number)
            }, {
                name: 'Alarp-3',
                color: "#FFFF00",
                data: asz_ut_temp_alarp_3.map(Number)
            }, {
                name: 'Low',
                color: "#00AF50",
                data: asz_ut_temp_low.map(Number)
            }],
            credits: {
                enabled: false
            },
            exporting: {
                enabled: false
            }
        });
    }

    function get_data_anom_asz_ut_perm() {
        var start_year = $('#sy-ddl-asz-ut-perm').val();
        var end_year = $('#ey-ddl-asz-ut-perm').val();
        var param = 'asz_ut_perm,' + start_year + ',' + end_year;
        console.log(param);
        $.ajax({
            type: "GET",
            url: "https://" + url_api + "/fmi/data/v2/databases/CPOC_AIMS/layouts/dashboard_riser/script/get_riser_anomaly?script.param=" + param,
            dataType: 'json',
            headers: {
                "Authorization": "Bearer " + $.cookie("_token_dashboard"),
                "Content-Type": "application/json"
            },
            async: false,
            success: function (data) {
                console.log(data.response.scriptResult);
                var val = data.response.scriptResult.split("|");
                asz_ut_perm_year = val[0].split(",");
                asz_ut_perm_low = val[1].split(",");
                asz_ut_perm_alarp_1 = val[2].split(",");
                asz_ut_perm_alarp_2 = val[3].split(",");
                asz_ut_perm_alarp_3 = val[4].split(",");
                asz_ut_perm_high = val[5].split(",");
                console.log(asz_ut_perm_year);
                console.log(asz_ut_perm_low);
                console.log(asz_ut_perm_alarp_1);
                console.log(asz_ut_perm_alarp_2);
                console.log(asz_ut_perm_alarp_3);
                console.log(asz_ut_perm_high);
                gen_chart_anom_asz_ut_perm();
            },
            error: function (error) {
                console.log(error);
            }
        });
    }

    function gen_chart_anom_asz_ut_perm() {
        Highcharts.setOptions({
            lang: {
                decimalPoint: '.',
                thousandsSep: ','
            }
        });
        Highcharts.chart('asz-ut-perm-chart', {
            chart: {
                type: 'column'
            },
            title: {
                text: ''
            },
            xAxis: {
                categories: asz_ut_perm_year.map(Number)
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
                data: asz_ut_perm_high.map(Number)
            }, {
                name: 'Alarp-1',
                color: "#FFFF00",
                data: asz_ut_perm_alarp_1.map(Number)
            }, {
                name: 'Alarp-2',
                color: "#FFFF00",
                data: asz_ut_perm_alarp_2.map(Number)
            }, {
                name: 'Alarp-3',
                color: "#FFFF00",
                data: asz_ut_perm_alarp_3.map(Number)
            }, {
                name: 'Low',
                color: "#00AF50",
                data: asz_ut_perm_low.map(Number)
            }],
            credits: {
                enabled: false
            },
            exporting: {
                enabled: false
            }
        });
    }

    function get_data_anom_bsz_rov_temp() {
        var start_year = $('#sy-ddl-bsz-rov-temp').val();
        var end_year = $('#ey-ddl-bsz-rov-temp').val();
        var param = 'bsz_rov_temp,' + start_year + ',' + end_year;
        console.log(param);
        $.ajax({
            type: "GET",
            url: "https://" + url_api + "/fmi/data/v2/databases/CPOC_AIMS/layouts/dashboard_riser/script/get_riser_anomaly?script.param=" + param,
            dataType: 'json',
            headers: {
                "Authorization": "Bearer " + $.cookie("_token_dashboard"),
                "Content-Type": "application/json"
            },
            async: false,
            success: function (data) {
                console.log(data.response.scriptResult);
                var val = data.response.scriptResult.split("|");
                bsz_rov_temp_year = val[0].split(",");
                bsz_rov_temp_low = val[1].split(",");
                bsz_rov_temp_alarp_1 = val[2].split(",");
                bsz_rov_temp_alarp_2 = val[3].split(",");
                bsz_rov_temp_alarp_3 = val[4].split(",");
                bsz_rov_temp_high = val[5].split(",");
                console.log(bsz_rov_temp_year);
                console.log(bsz_rov_temp_low);
                console.log(bsz_rov_temp_alarp_1);
                console.log(bsz_rov_temp_alarp_2);
                console.log(bsz_rov_temp_alarp_3);
                console.log(bsz_rov_temp_high);
                gen_chart_anom_bsz_rov_temp();
            },
            error: function (error) {
                console.log(error);
            }
        });
    }

    function gen_chart_anom_bsz_rov_temp() {
        Highcharts.setOptions({
            lang: {
                decimalPoint: '.',
                thousandsSep: ','
            }
        });
        Highcharts.chart('bsz-rov-temp-chart', {
            chart: {
                type: 'column'
            },
            title: {
                text: ''
            },
            xAxis: {
                categories: bsz_rov_temp_year.map(Number)
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
                data: bsz_rov_temp_high.map(Number)
            }, {
                name: 'Alarp-1',
                color: "#FFFF00",
                data: bsz_rov_temp_alarp_1.map(Number)
            }, {
                name: 'Alarp-2',
                color: "#FFFF00",
                data: bsz_rov_temp_alarp_2.map(Number)
            }, {
                name: 'Alarp-3',
                color: "#FFFF00",
                data: bsz_rov_temp_alarp_3.map(Number)
            }, {
                name: 'Low',
                color: "#00AF50",
                data: bsz_rov_temp_low.map(Number)
            }],
            credits: {
                enabled: false
            },
            exporting: {
                enabled: false
            }
        });
    }

    function get_data_anom_bsz_rov_perm() {
        var start_year = $('#sy-ddl-bsz-rov-perm').val();
        var end_year = $('#ey-ddl-bsz-rov-perm').val();
        var param = 'bsz_rov_perm,' + start_year + ',' + end_year;
        console.log(param);
        $.ajax({
            type: "GET",
            url: "https://" + url_api + "/fmi/data/v2/databases/CPOC_AIMS/layouts/dashboard_riser/script/get_riser_anomaly?script.param=" + param,
            dataType: 'json',
            headers: {
                "Authorization": "Bearer " + $.cookie("_token_dashboard"),
                "Content-Type": "application/json"
            },
            async: false,
            success: function (data) {
                console.log(data.response.scriptResult);
                var val = data.response.scriptResult.split("|");
                bsz_rov_perm_year = val[0].split(",");
                bsz_rov_perm_low = val[1].split(",");
                bsz_rov_perm_alarp_1 = val[2].split(",");
                bsz_rov_perm_alarp_2 = val[3].split(",");
                bsz_rov_perm_alarp_3 = val[4].split(",");
                bsz_rov_perm_high = val[5].split(",");
                console.log(bsz_rov_perm_year);
                console.log(bsz_rov_perm_low);
                console.log(bsz_rov_perm_alarp_1);
                console.log(bsz_rov_perm_alarp_2);
                console.log(bsz_rov_perm_alarp_3);
                console.log(bsz_rov_perm_high);
                gen_chart_anom_bsz_rov_perm();
            },
            error: function (error) {
                console.log(error);
            }
        });
    }

    function gen_chart_anom_bsz_rov_perm() {
        Highcharts.setOptions({
            lang: {
                decimalPoint: '.',
                thousandsSep: ','
            }
        });
        Highcharts.chart('bsz-rov-perm-chart', {
            chart: {
                type: 'column'
            },
            title: {
                text: ''
            },
            xAxis: {
                categories: bsz_rov_perm_year.map(Number)
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
                data: bsz_rov_perm_high.map(Number)
            }, {
                name: 'Alarp-1',
                color: "#FFFF00",
                data: bsz_rov_perm_alarp_1.map(Number)
            }, {
                name: 'Alarp-2',
                color: "#FFFF00",
                data: bsz_rov_perm_alarp_2.map(Number)
            }, {
                name: 'Alarp-3',
                color: "#FFFF00",
                data: bsz_rov_perm_alarp_3.map(Number)
            }, {
                name: 'Low',
                color: "#00AF50",
                data: bsz_rov_perm_low.map(Number)
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