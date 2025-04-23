<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CPOC AIMS - Asset Integrity Manangment</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" >
    <link rel="stylesheet" type="text/css" href="https://cdn3.devexpress.com/jslib/20.1.7/css/dx.common.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn3.devexpress.com/jslib/20.1.7/css/dx.light.css" />
    <link rel="stylesheet" href="css/style.css">

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdn3.devexpress.com/jslib/20.1.7/js/dx.all.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/babel-polyfill/7.4.0/polyfill.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/exceljs/4.1.1/exceljs.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/2.0.2/FileSaver.min.js"></script>

    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>
    <script type="text/javascript" src="https://alcdn.msftauth.net/lib/1.2.1/js/msal.js" integrity="sha384-9TV1245fz+BaI+VvCjMYL0YDMElLBwNS84v3mY57pXNOt6xcUYch2QLImaTahcOP" crossorigin="anonymous"></script>

    <script src="js/custom.js"></script>
</head>
<body class="bg-login">
    <div id="login">
        <div class="form-signin text-center">
            <img src="img/CPOC_Logo.png" height="100"><img src="img/logo_aims-01.png" height="80">
            <p class="mt-2">ASSET INTEGRITY MANAGEMENT SYSTEM<br>
            (LITE VERSION)</p>
            <hr>

            <!-- <input id="username" type="text" class="form-control" name="username" required autocomplete="email" placeholder="USERNAME" autofocus>

            <input id="password" type="password" class="form-control" name="password" required autocomplete="current-password" placeholder="PASSWORD">

            
                <span id="login-incorrect" class="text-danger">
                    <strong>Incorrect username or password.</strong>
                </span>
            
            <hr class="mb-3">

            <button type="submit" class="btn btn-block btn-success" onclick="login()">LOGIN</button>
            <hr class="mb-3"> -->
            <!-- <input type="image" src="img/ms-symbollockup_signin_dark.png" id="microsoft_login" onclick="signIn()" /> -->
            <button type="submit" class="btn btn-block btn-dark" onclick="signIn()"><img src="img/ms-logo.png">&nbsp;&nbsp; SIGN IN WITH MICROSOFT</button>
            <hr class="mb-3">
            <button type="submit" class="btn btn-block btn-primary mb-2" onclick="login_guest()">LOGIN AS GUEST</button>
            <div class="mt-2" style="font-size: 13px;">CPOC INSPECTION TEAM<br>(chanats@cpoc.com.my)</div>

            <input type="hidden" id="userg" value="visitor">
            <input type="hidden" id="passg" value="Aims2022">
        </div>
    </div>
<script>

    // Add scopes for the ID token to be used at Microsoft identity platform endpoints.
    const loginRequest = {
        scopes: ["openid", "profile", "User.Read"]
    };

    function signIn() {
        myMSALObj.loginPopup(loginRequest)
            .then(loginResponse => {
                if (myMSALObj.getAccount()) {
                    $.cookie('_ms_email', myMSALObj.getAccount().userName);
                    $.cookie('_name', myMSALObj.getAccount().name);
                    $.cookie('_isMicrosoftLogin', true);
                    login_guest();
                }
            }).catch(error => {
                console.log(error);
            });
    }

    $('#password').keypress(function(event) {
        if (event.key === "Enter") {
            login();
        }
    });

    var username = '';
    var password = '';
    $('#login-incorrect').hide();
    $('.loader').hide();
    
    function login() {
        username = $('#username').val();
        password = $('#password').val();
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
                location.href = "index.php";
            },
            error: function(error) {
                $('#login-incorrect').show();
                console.log(error);
            }
        });
    }

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
                location.href = "index.php";
            },
            error: function(error) {
                $('#login-incorrect').show();
                console.log(error);
            }
        });
    }

    function get_token_piping() {
        $.ajax({
            type: "POST",
            url: "https://" + url_api + "/fmi/data/v2/databases/Piping/sessions",
            dataType: 'json',
            headers: {
                "Content-Type": "application/json",
                "Authorization": make_base_auth(username, password)
            }, 
            async: false,
            success: function (data) {
                // console.log(data.response.token);
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
                "Authorization": make_base_auth(username, password)
            },
            async: false,
            success: function (data) {
                // console.log(data.response.token);
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
                "Authorization": make_base_auth(username, password)
            },
            async: false,
            success: function (data) {
                // console.log(data.response.token);
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
                "Authorization": make_base_auth(username, password)
            },
            async: false,
            success: function (data) {
                // console.log(data.response.token);
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
                "Authorization": make_base_auth(username, password)
            },
            async: false,
            success: function (data) {
                // console.log(data.response.token);
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
                "Authorization": make_base_auth(username, password)
            },
            async: false,
            success: function (data) {
                // console.log(data.response.token);
                var token = data.response.token;
                $.cookie('_token_structure', token);
            },
            error: function (error) {
                console.log(error);
            }
        });
    }

</script>
</body>
</html>