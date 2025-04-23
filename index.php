<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CPOC AIMS - Asset Integrity Management</title>
xxxxxxxxx
YYYYYYYY
    <link rel="stylesheet" href="css/bootstrap.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" >
    <link rel="stylesheet" type="text/css" href="https://cdn3.devexpress.com/jslib/20.1.7/css/dx.common.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn3.devexpress.com/jslib/20.1.7/css/dx.light.css" />
    <link rel="stylesheet" href="css/style.css">

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdn3.devexpress.com/jslib/20.1.7/js/dx.all.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/babel-polyfill/7.4.0/polyfill.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/exceljs/4.1.1/exceljs.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/2.0.2/FileSaver.min.js"></script>

    <script src="js/highcharts.js"></script>
    <script src="js/exporting.js"></script>
    <script src="js/export-data.js"></script>
    <script src="js/accessibility.js"></script>
    <script type="text/javascript" src="https://alcdn.msftauth.net/lib/1.2.1/js/msal.js" integrity="sha384-9TV1245fz+BaI+VvCjMYL0YDMElLBwNS84v3mY57pXNOt6xcUYch2QLImaTahcOP" 
    crossorigin="anonymous"></script>


    <script src="js/custom.js"></script>
</head>
<body class="bg-light">
    <nav class="navbar navbar-dark sticky-top bg-cpoc flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="#"><img src="img/logo_aims-01.png" style="height: 45px;"></a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search"> -->
        <ul class="navbar-nav px-3">
            <li class="nav-item text-nowrap" style="display: flex;">
                <a class="nav-link" href="#" id="username_show">{{fullname}}</a>
                <a class="nav-link ml-3" href="#" onclick="logout();">LOGOUT</a>
            </li>
        </ul>
    </nav>

    <div class="container-fluid">
        <div class="row">

            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block sidebar collapse">
                <div class="sidebar-sticky pt-3">

                    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-3 mb-1 text-muted">
                        <span>DASHBOARD</span>
                    </h6>

                    <ul class="nav flex-column">
                        <!-- <li class="nav-item">
                            <a class="nav-link" id="summary-nav" style="cursor: pointer;" onclick="renderPage('executive_summary');">
                                <i class="fas fa-chart-pie ml-2" style="font-size: 24px; margin-right: 12px; color: #220566;"></i> EXECUTIVE SUMMARY
                            </a>
                        </li> -->
                        <!-- <li class="nav-item">
                            <a class="nav-link" id="dashboard-nav" style="cursor: pointer;" onclick="renderPage('dashboard');">
                                INTEGRITY
                            </a>
                        </li> -->
                        <!-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="insp-plan-nav" style="cursor: pointer;" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-chart-bar ml-2" style="font-size: 24px; margin-right: 12px; color: #220566;"></i> INSPECTION PLAN
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" style="cursor: pointer;" onclick="renderPage('piping_insp_plan');">PIPING</a>
                                <a class="dropdown-item" style="cursor: pointer;" onclick="renderPage('vessel_insp_plan');">PRESSURE VESSEL</a>
                                <a class="dropdown-item" style="cursor: pointer;" onclick="renderPage('flowline_insp_plan');">FLOWLINE</a>
                                <a class="dropdown-item" style="cursor: pointer;" onclick="renderPage('pipeline_insp_plan');">PIPELINE</a>
                                <a class="dropdown-item" style="cursor: pointer;" onclick="renderPage('riser_insp_plan');">RISER</a>
                                <a class="dropdown-item" style="cursor: pointer;" onclick="renderPage('structure_insp_plan');">STRUCTURE</a>
                                <a class="dropdown-item" style="cursor: pointer;" onclick="renderPage('lifting_insp_plan');">LIFTING</a>
                            </div>
                        </li> -->
                        <!-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="anom-nav" style="cursor: pointer;" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-chart-bar ml-2" style="font-size: 24px; margin-right: 12px; color: #220566;"></i> ANOMALY
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink"> -->
                                <!-- <a class="dropdown-item" style="cursor: pointer;" onclick="renderPage('piping_anom_p');">PIPING</a> -->
                                <!-- <a class="dropdown-item" style="cursor: pointer;" onclick="renderPage('piping_anom');">PIPING</a> -->
                                <!-- <a class="dropdown-item" style="cursor: pointer;" onclick="renderPage('vessel_anom_p');">PRESSURE VESSEL</a> -->
                                <!-- <a class="dropdown-item" style="cursor: pointer;" onclick="renderPage('vessel_anom');">PRESSURE VESSEL</a> -->
                                <!-- <a class="dropdown-item" style="cursor: pointer;" onclick="renderPage('flowline_anom_p');">FLOWLINE</a> -->
                                <!-- <a class="dropdown-item" style="cursor: pointer;" onclick="renderPage('flowline_anom');">FLOWLINE</a> -->
                                <!-- <a class="dropdown-item" style="cursor: pointer;" onclick="renderPage('pipeline_anom_p');">PIPELINE</a> -->
                                <!-- <a class="dropdown-item" style="cursor: pointer;" onclick="renderPage('pipeline_anom');">PIPELINE</a> -->
                                <!-- <a class="dropdown-item" style="cursor: pointer;" onclick="renderPage('riser_anom_p');">RISER</a> -->
                                <!-- <a class="dropdown-item" style="cursor: pointer;" onclick="renderPage('riser_anom');">RISER</a> -->
                                <!-- <a class="dropdown-item" style="cursor: pointer;" onclick="renderPage('structure_anom_p');">STRUCTURE</a> -->
                                <!-- <a class="dropdown-item" style="cursor: pointer;" onclick="renderPage('structure_anom');">STRUCTURE</a> -->
                                <!-- <a class="dropdown-item" style="cursor: pointer;" onclick="renderPage('lifting_crane_anom');">LIFTING CRANE</a>
                                <a class="dropdown-item" style="cursor: pointer;" onclick="renderPage('lifting_equipment_anom');">LIFTING EQUIPMENT</a> -->
                            <!-- </div>
                        </li> -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="anom-p-nav" style="cursor: pointer;" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-chart-bar ml-2" style="font-size: 24px; margin-right: 12px; color: #220566;"></i> ANOMALY P
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" style="cursor: pointer;" onclick="renderPage('piping_anom_p');">PIPING</a>
                            </div>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link" id="highlight-activities-nav" style="cursor: pointer;" onclick="renderPage('highlight_activities');">
                                <i class="fas fa-exclamation-circle ml-2" style="font-size: 24px; margin-right: 12px; color: #220566;"></i> HIGHLIGHT ACTIVITIES
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="moc-nav" style="cursor: pointer;" onclick="renderPage('moc');">
                                <i class="fas fa-briefcase ml-2" style="font-size: 24px; margin-right: 12px; color: #220566;"></i> MOC
                            </a>
                        </li> -->
                        <!-- <li class="nav-item">
                            <a class="nav-link" id="temporary-repair-nav" style="cursor: pointer;" onclick="renderPage('temporary_repair');">
                                <i class="fas fa-tools ml-2" style="font-size: 24px; margin-right: 12px; color: #220566;"></i> TEMPORARY REPAIR
                            </a>
                        </li> -->
                        <li class="nav-item">
                            <a class="nav-link" id="sap-nav" style="cursor: pointer;" onclick="renderPage('sap');">
                                <i class="fas fa-tasks ml-2" style="font-size: 24px; margin-right: 12px; color: #220566;"></i> CM WO PERFORMANCE
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="sap-search-nav" style="cursor: pointer;" onclick="renderPage('sap_search');">
                                <i class="fas fa-search ml-2" style="font-size: 24px; margin-right: 12px; color: #220566;"></i> CM REPORT SEARCHING
                            </a>
                        </li>
                    </ul>
                    

                    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                        <span>Assets</span>
                    </h6>

                    <ul class="nav flex-column mb-2">
                        <li class="nav-item">
                            <a class="nav-link" id="piping-nav" style="cursor: pointer;" onclick="renderPage('piping');">
                               <img src="img/Piping-logo.png" class="icon-menu"> PIPING
                            </a>
                        </li>
                        <!-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="vessel-nav" style="cursor: pointer;" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="img/Vessel-logo.png" class="icon-menu"> PRESSURE VESSEL
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" style="cursor: pointer;" onclick="renderPage('vessel');">PRESSURE VESSEL</a>
                                <a class="dropdown-item" style="cursor: pointer;" onclick="renderPage('cylinder');">CYLINDER</a>
                            </div>
                        </li> -->
                        <li class="nav-item">
                            <a class="nav-link" id="vessel-nav" style="cursor: pointer;" onclick="renderPage('vessel');">
                               <img src="img/Vessel-logo.png" class="icon-menu"> PRESSURE VESSEL
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="cylinder-nav" style="cursor: pointer;" onclick="renderPage('cylinder');">
                               <img src="img/Vessel-logo.png" class="icon-menu"> CYLINDER
                            </a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link" id="flowline-nav" style="cursor: pointer;" onclick="renderPage('flowline');">
                                <img src="img/Flowline-logo.png" class="icon-menu"> FLOWLINE
                            </a>
                        </li> -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="flowline-nav" style="cursor: pointer;" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="img/Flowline-logo.png" class="icon-menu"> FLOWLINE
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" style="cursor: pointer;" onclick="renderPage('flowline');">FLOWLINE</a>
                                <a class="dropdown-item" style="cursor: pointer;" onclick="renderPage('choke_valve');">CHOKE VALVE</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pipeline-nav" style="cursor: pointer;" onclick="renderPage('pipeline');">
                                <img src="img/Pipieline-logo.png" class="icon-menu"> PIPELINE
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="structure_platform-nav" style="cursor: pointer;" onclick="renderPage('structure_platform');">
                                <img src="img/StructureRev1.png" class="icon-menu"> STRUCTURE
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="lifting-nav" style="cursor: pointer;" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="img/Lifting-logo.png" class="icon-menu"> LIFTING
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" style="cursor: pointer;" onclick="renderPage('lifting_crane');">LIFTING CRANE</a>
                                <a class="dropdown-item" style="cursor: pointer;" onclick="renderPage('sap_crane');">SAP LIFTING CRANE</a>
                                <a class="dropdown-item" style="cursor: pointer;" onclick="renderPage('lifting_equipment');">LIFTING EQUIPMENT</a>
                            </div>
                        </li>
                        
                        <!-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Master Data
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <h6 class="dropdown-header">Information</h6>
                                <a class="dropdown-item" href="@Url.Action("PlantSite", "MasterData")">Plant/Site</a>
                                <a class="dropdown-item" href="#">Integrity Status</a>
                                <a class="dropdown-item" href="#">Applicable Status</a>
                                <div class="dropdown-divider"></div>
                                <h6 class="dropdown-header">Equipment</h6>
                                <a class="dropdown-item" href="@Url.Action("Piping", "MasterData")">Piping</a>
                                <a class="dropdown-item" href="#">Pipeline</a>
                                <a class="dropdown-item" href="#">Vessel</a>
                                <a class="dropdown-item" href="#">Tank</a>
                                <a class="dropdown-item" href="#">Lifting</a>
                            </div>
                        </li> -->
                    </ul>   
                    
                    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                        <span>Static Data</span>
                    </h6>

                    <ul class="nav flex-column mb-2">
                        <li class="nav-item">
                            <a class="nav-link" id="platform-nav" style="cursor: pointer;" onclick="renderPage('platform');">
                                <img src="img/Structure-logo.png" class="icon-menu"> PLATFORM
                            </a>
                        </li>
                    </ui>

                    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                        <span>Document</span>
                    </h6>

                    <ul class="nav flex-column mb-2">
                        <li class="nav-item">
                            <a href="img/CPOC AIMS User Manual Rev1.1 2.pdf" rel="nofollow" download class="nav-link" id="manual-nav" style="cursor: pointer;">
                                <i class="fa fa-solid fa-book ml-2" style="font-size: 24px; margin-right: 12px; color: #220566;"></i> USER MANUAL
                            </a>
                        </li>
                    </ui>
                </div>
            </nav>

            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 ">
                <div class="content"><div class="loader"></div>
                    <!-- for render content -->
                    <div id="content">
                    </div>
                </div>
                <footer class="footer py-2 py-sm-3">
                    <p>&copy; 2021 All Right Reserved. Dacon Inspection Technologies Co., Ltd.</p>
                </footer>
            </main>
        </div>
        <input type="hidden" id="userg" value="visitor">
        <input type="hidden" id="passg" value="Aims2022">
    </div>

    <script>
        
        var _token_dashboard = $.cookie("_token_dashboard");
        console.log("toikro : " + _token_dashboard);
        var module = "";
        var fullname = "";
        var username = "";
        login_guest();
        checkModule();
        renderPage(module);

        function login_guest() {
            username = $('#userg').val();
            password = $('#passg').val();
            $.ajax({
                type: "POST",
                url: "https://" + url_api + "/fmi/data/v2/databases/CPOC_AIMS/sessions",
                dataType: 'json',
                headers: {
                    "Content-Type": "application/json",
                    "Authorization": make_base_auth(username, password)
                }, 
                async: false,
                success: function(data) {
                    // console.log("in get token");
                    // console.log(data.response.token);
                    var token = data.response.token;
                    $.cookie('_token_dashboard', token);
                    $.cookie('_username', username);
                    $.cookie('_password', password);
                    get_token_piping();
                    get_token_flowline();
                    get_token_vessel();
                    get_token_pipeline();
                    get_token_lifting();
                    get_token_structure();
                    // location.href = "index.php";
                },
                error: function(error) {
                    // $('#login-incorrect').show();
                    console.log(error);
                }
            });
        }

        function checkModule() {
            var searchParams = new URLSearchParams(window.location.search);
            searchParams.has('module') // true
            var param = searchParams.get('module')
            console.log(param);
            module = param;
            fullname = searchParams.get('fullname')
            username = searchParams.get('username')
            console.log('fullname', fullname)
            console.log('username', username)
        }

        function renderPage(param) {
            $('.loader').show();
            $("li a").removeClass( "active" );
            if(!username && !$.cookie('_ms_email', username)) {
                location.href = "https://aims-muda.cpoc.com.my:444/";
            } else {
                $.cookie('_ms_email', username);
                $.cookie('_name', fullname);
                let name = $.cookie("_name").toUpperCase();
                $('#username_show').html('<i class="fas fa-user mr-1"></i> ' + name);
                if(param == 'piping') {
                    $('#content').load("piping.php");
                    window.history.replaceState(null, null, "?module=piping");
                    $('#piping-nav').addClass("active");
                } else if (param == 'flowline') {
                    $('#content').load("flowline.php");
                    window.history.replaceState(null, null, "?module=flowline");
                    $('#flowline-nav').addClass("active");
                } else if (param == 'choke_valve') {
                    $('#content').load("choke_valve.php");
                    window.history.replaceState(null, null, "?module=choke_valve");
                    $('#flowline-nav').addClass("active");
                } else if (param == 'pipeline') {
                    $('#content').load("pipeline.php");
                    window.history.replaceState(null, null, "?module=pipeline");
                    $('#pipeline-nav').addClass("active");
                } else if (param == 'vessel') {
                    $('#content').load("vessel.php");
                    window.history.replaceState(null, null, "?module=vessel");
                    $('#vessel-nav').addClass("active");
                } else if (param == 'lifting_equipment') {
                    $('#content').load("lifting_equipment.php");
                    window.history.replaceState(null, null, "?module=lifting_equipment");
                    $('#lifting-nav').addClass("active");
                } else if (param == 'lifting_crane') {
                    $('#content').load("lifting_crane.php");
                    window.history.replaceState(null, null, "?module=lifting_crane");
                    $('#lifting-nav').addClass("active");
                } else if (param == 'structure_platform') {
                    $('#content').load("structure_platform.php");
                    window.history.replaceState(null, null, "?module=structure_platform");
                    $('#structure_platform-nav').addClass("active");
                } else if (param == 'structure') {
                    $('#content').load("structure.php");
                    window.history.replaceState(null, null, "?module=structure");
                    $('#structure-nav').addClass("active");
                } else if (param == 'structure_all') {
                    $('#content').load("structure_all.php");
                    window.history.replaceState(null, null, "?module=structure_all");
                } else if (param == 'cylinder') {
                    $('#content').load("cylinder.php");
                    window.history.replaceState(null, null, "?module=cylinder");
                    $('#cylinder-nav').addClass("active");
                } else if (param == 'piping_insp_plan') {
                    $('#content').load("piping_insp_plan.php");
                    window.history.replaceState(null, null, "?module=piping_insp_plan");
                    $('#insp-plan-nav').addClass("active");
                } else if (param == 'vessel_insp_plan') {
                    $('#content').load("vessel_insp_plan.php");
                    window.history.replaceState(null, null, "?module=vessel_insp_plan");
                    $('#insp-plan-nav').addClass("active");
                } else if (param == 'flowline_insp_plan') {
                    $('#content').load("flowline_insp_plan.php");
                    window.history.replaceState(null, null, "?module=flowline_insp_plan");
                    $('#insp-plan-nav').addClass("active");
                } else if (param == 'pipeline_insp_plan') {
                    $('#content').load("pipeline_insp_plan.php");
                    window.history.replaceState(null, null, "?module=pipeline_insp_plan");
                    $('#insp-plan-nav').addClass("active");
                } else if (param == 'riser_insp_plan') {
                    $('#content').load("riser_insp_plan.php");
                    window.history.replaceState(null, null, "?module=riser_insp_plan");
                    $('#insp-plan-nav').addClass("active");
                } else if (param == 'structure_insp_plan') {
                    $('#content').load("structure_insp_plan.php");
                    window.history.replaceState(null, null, "?module=structure_insp_plan");
                    $('#insp-plan-nav').addClass("active");
                } else if (param == 'lifting_insp_plan') {
                    $('#content').load("lifting_insp_plan.php");
                    window.history.replaceState(null, null, "?module=lifting_insp_plan");
                    $('#insp-plan-nav').addClass("active");
                } else if (param == 'lifting_crane_insp_plan') {
                    $('#content').load("lifting_crane_insp_plan.php");
                    window.history.replaceState(null, null, "?module=lifting_crane_insp_plan");
                    $('#insp-plan-nav').addClass("active");
                } else if (param == 'lifting_equipment_insp_plan') {
                    $('#content').load("lifting_equipment_insp_plan.php");
                    window.history.replaceState(null, null, "?module=lifting_equipment_insp_plan");
                    $('#insp-plan-nav').addClass("active");
                } else if (param == 'piping_anom') {
                    $('#content').load("piping_anomaly.php");
                    window.history.replaceState(null, null, "?module=piping_anom");
                    $('#anom-nav').addClass("active");
                } else if (param == 'flowline_anom') {
                    $('#content').load("flowline_anomaly.php");
                    window.history.replaceState(null, null, "?module=flowline_anom");
                    $('#anom-nav').addClass("active");
                } else if (param == 'vessel_anom') {
                    $('#content').load("vessel_anomaly.php");
                    window.history.replaceState(null, null, "?module=vessel_anom");
                    $('#anom-nav').addClass("active");
                } else if (param == 'pipeline_anom') {
                    $('#content').load("pipeline_anomaly.php");
                    window.history.replaceState(null, null, "?module=pipeline_anom");
                    $('#anom-nav').addClass("active");
                } else if (param == 'riser_anom') {
                    $('#content').load("riser_anomaly.php");
                    window.history.replaceState(null, null, "?module=riser_anom");
                    $('#anom-nav').addClass("active");
                } else if (param == 'structure_anom') {
                    $('#content').load("structure_anomaly.php");
                    window.history.replaceState(null, null, "?module=structure_anom");
                    $('#anom-nav').addClass("active");
                } else if (param == 'lifting_crane_anom') {
                    $('#content').load("lifting_crane_anom.php");
                    window.history.replaceState(null, null, "?module=lifting_crane_anom");
                    $('#insp-plan-nav').addClass("active");
                } else if (param == 'lifting_equipment_anom') {
                    $('#content').load("lifting_equipment_anom.php");
                    window.history.replaceState(null, null, "?module=lifting_equipment_anom");
                    $('#insp-plan-nav').addClass("active");
                } else if (param == 'executive_summary') {
                    $('#content').load("executive_summary.php");
                    window.history.replaceState(null, null, "?module=executive_summary");
                    $('#summary-nav').addClass("active");
                } else if (param == 'highlight_activities') {
                    $('#content').load("highlight_activities.php");
                    window.history.replaceState(null, null, "?module=highlight_activities");
                    $('#highlight-activities-nav').addClass("active");
                } else if (param == 'platform') {
                    $('#content').load("platform.php");
                    window.history.replaceState(null, null, "?module=platform");
                    $('#platform-nav').addClass("active");
                } else if (param == 'moc') {
                    $('#content').load("moc.php");
                    window.history.replaceState(null, null, "?module=moc");
                    $('#moc-nav').addClass("active");
                } else if (param == 'piping_anom_p') {
                    $('#content').load("piping_anom_p.php");
                    window.history.replaceState(null, null, "?module=piping_anom_p");
                    $('#anom-p-nav').addClass("active");
                } else if (param == 'flowline_anom_p') {
                    $('#content').load("flowline_anom_p.php");
                    window.history.replaceState(null, null, "?module=flowline_anom_p");
                    $('#anom-p-nav').addClass("active");
                } else if (param == 'vessel_anom_p') {
                    $('#content').load("vessel_anom_p.php");
                    window.history.replaceState(null, null, "?module=vessel_anom_p");
                    $('#anom-p-nav').addClass("active");
                } else if (param == 'structure_anom_p') {
                    $('#content').load("structure_anom_p.php");
                    window.history.replaceState(null, null, "?module=structure_anom_p");
                    $('#anom-p-nav').addClass("active");
                } else if (param == 'pipeline_anom_p') {
                    $('#content').load("pipeline_anom_p.php");
                    window.history.replaceState(null, null, "?module=pipeline_anom_p");
                    $('#anom-p-nav').addClass("active");
                } else if (param == 'riser_anom_p') {
                    $('#content').load("riser_anom_p.php");
                    window.history.replaceState(null, null, "?module=riser_anom_p");
                    $('#anom-p-nav').addClass("active");
                } else if (param == 'temporary_repair') {
                    $('#content').load("temporary_repair.php");
                    window.history.replaceState(null, null, "?module=temporary_repair");
                    $('#temporary-repair-nav').addClass("active");
                } else if (param == 'sap') {
                    $('#content').load("sap_header.php");
                    window.history.replaceState(null, null, "?module=sap");
                    $('#sap-nav').addClass("active");
                } else if (param == 'sap_search') {
                    $('#content').load("sap_searching.php");
                    window.history.replaceState(null, null, "?module=sap_search");
                    $('#sap-search-nav').addClass("active");
                } else if (param == 'cylinder_notfound') {
                    $('#content').load("cylinder_notfound.php");
                    window.history.replaceState(null, null, "?module=cylinder_notfound");
                    $('#sap-cylinder-notfound-nav').addClass("active");
                } else if (param == 'sap_crane') {
                    $('#content').load("sap_crane.php");
                    window.history.replaceState(null, null, "?module=sap_crane");
                    $('#lifting-nav').addClass("active");
                } else {
                    $('#content').load("executive_summary.php");
                    window.history.replaceState(null, null, "?module=executive_summary");
                    $('#summary-nav').addClass("active");
                }

                if($.cookie("_username") != "insp_engineer") {
                    $('#anom-p-nav').hide();
                }
            }
        }

        function logout() {
            $.ajax({
                type: "DELETE",
                url: "https://" + url_api + "/fmi/data/v2/databases/CPOC_AIMS/sessions/" + $.cookie("_token_dashboard"),
                success: function(data) {
                    console.log(data);
                    $.removeCookie('_token_dashboard', { path: '/' });
                },
                error: function(error) {
                    console.log(error);
                }
            });
            $.ajax({
                type: "DELETE",
                url: "https://" + url_api + "/fmi/data/v2/databases/Piping/sessions/" + $.cookie("_token_piping"),
                success: function(data) {
                    console.log(data);
                    $.removeCookie('_token_piping', { path: '/' });
                },
                error: function(error) {
                    console.log(error);
                }
            });
            $.ajax({
                type: "DELETE",
                url: "https://" + url_api + "/fmi/data/v2/databases/Vessel/sessions/" + $.cookie("_token_vessel"),
                success: function(data) {
                    console.log(data);
                    $.removeCookie('_token_vessel', { path: '/' });
                },
                error: function(error) {
                    console.log(error);
                }
            });
            $.ajax({
                type: "DELETE",
                url: "https://" + url_api + "/fmi/data/v2/databases/Flowline/sessions/" + $.cookie("_token_flowline"),
                success: function(data) {
                    console.log(data);
                    $.removeCookie('_token_flowline', { path: '/' });
                },
                error: function(error) {
                    console.log(error);
                }
            });
            $.ajax({
                type: "DELETE",
                url: "https://" + url_api + "/fmi/data/v2/databases/Pipeline/sessions/" + $.cookie("_token_pipeline"),
                success: function(data) {
                    console.log(data);
                    $.removeCookie('_token_pipeline', { path: '/' });
                },
                error: function(error) {
                    console.log(error);
                }
            });
            $.ajax({
                type: "DELETE",
                url: "https://" + url_api + "/fmi/data/v2/databases/Structure/sessions/" + $.cookie("_token_structure"),
                success: function(data) {
                    console.log(data);
                    $.removeCookie('_token_structure', { path: '/' });
                },
                error: function(error) {
                    console.log(error);
                }
            });

            if ($.cookie('_isMicrosoftLogin')) {
                signOut();
            }

            $.removeCookie('_username', { path: '/' });
            $.removeCookie('_password', { path: '/' });
            $.removeCookie('_ms_email');
            $.removeCookie('_name');
            $.removeCookie('_isMicrosoftLogin');
            location.href = "login.php";
        }

        function signOut() {
            myMSALObj.logout();
            location.href = "https://aims-muda.cpoc.com.my:444/";
        }

        function get_token_startup() {
            $.ajax({
                type: "POST",
                url: "https://" + url_api + "/fmi/data/v2/databases/CPOC_AIMS/sessions",
                dataType: 'json',
                headers: {
                    "Content-Type": "application/json",
                    "Authorization": make_base_auth($.cookie("_username"), $.cookie("_password"))
                }, 
                async: false,
                success: function (data) {
                    console.log(data.response.token);
                    var token = data.response.token;
                    $.cookie('_token_dashboard', token);
                },
                error: function (error) {
                    console.log(error);
                }
            });
        }

        function get_token_piping() {
            console.log("inininin");
            $.ajax({
                type: "POST",
                url: "https://" + url_api + "/fmi/data/v2/databases/Piping/sessions",
                dataType: 'json',
                headers: {
                    "Content-Type": "application/json",
                    "Authorization": make_base_auth($.cookie("_username"), $.cookie("_password"))
                }, 
                async: false,
                success: function (data) {
                    console.log(data.response.token);
                    var token = data.response.token;
                    $.cookie('_token_piping', token);
                },
                error: function (error) {
                    console.log(error);
                }
            });
        }

        function get_token_flowline() {
            $.ajax({
                type: "POST",
                url: "https://" + url_api + "/fmi/data/v2/databases/Flowline/sessions",
                dataType: 'json',
                headers: {
                    "Content-Type": "application/json",
                    "Authorization": make_base_auth($.cookie("_username"), $.cookie("_password"))
                },
                async: false,
                success: function (data) {
                    console.log(data.response.token);
                    var token = data.response.token;
                    $.cookie('_token_flowline', token);
                },
                error: function (error) {
                    console.log(error);
                }
            });
        }

        function get_token_vessel() {
            $.ajax({
                type: "POST",
                url: "https://" + url_api + "/fmi/data/v2/databases/Vessel/sessions",
                dataType: 'json',
                headers: {
                    "Content-Type": "application/json",
                    "Authorization": make_base_auth($.cookie("_username"), $.cookie("_password"))
                },
                async: false,
                success: function (data) {
                    console.log(data.response.token);
                    var token = data.response.token;
                    $.cookie('_token_vessel', token);
                },
                error: function (error) {
                    console.log(error);
                }
            });
        }

        function get_token_pipeline() {
            $.ajax({
                type: "POST",
                url: "https://" + url_api + "/fmi/data/v2/databases/Pipeline/sessions",
                dataType: 'json',
                headers: {
                    "Content-Type": "application/json",
                    "Authorization": make_base_auth($.cookie("_username"), $.cookie("_password"))
                },
                async: false,
                success: function (data) {
                    console.log(data.response.token);
                    var token = data.response.token;
                    $.cookie('_token_pipeline', token);
                },
                error: function (error) {
                    console.log(error);
                }
            });
        }

        function get_token_lifting() {
            $.ajax({
                type: "POST",
                url: "https://" + url_api + "/fmi/data/v2/databases/Lifting/sessions",
                headers: {
                    "Content-Type": "application/json",
                    "Authorization": make_base_auth($.cookie("_username"), $.cookie("_password"))
                },
                async: false,
                success: function (data) {
                    console.log(data.response.token);
                    var token = data.response.token;
                    $.cookie('_token_lifting', token);
                },
                error: function (error) {
                    console.log(error);
                }
            });
        }

        function get_token_structure() {
            $.ajax({
                type: "POST",
                url: "https://" + url_api + "/fmi/data/v2/databases/Structure/sessions",
                dataType: 'json',
                headers: {
                    "Content-Type": "application/json",
                    "Authorization": make_base_auth($.cookie("_username"), $.cookie("_password"))
                },
                async: false,
                success: function (data) {
                    console.log(data.response.token);
                    var token = data.response.token;
                    $.cookie('_token_structure', token);
                },
                error: function (error) {
                    console.log(error);
                }
            });
        }

        function downloadManual() {
            
        }

    </script>
</body>
</html>