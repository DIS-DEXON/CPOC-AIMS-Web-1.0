var url_api = "ai1.dexon-technology.com";
// var url_api = "aims-muda.cpoc.com.my";
//var url_api = "cpocaims.dacon-inspection.com"; //New url

function make_base_auth(user, password) {
    var tok = user + ':' + password;
    var hash = btoa(tok);
    return "Basic " + hash;
}

function get_token_dashboard() {
    $.ajax({
        type: "POST",
        url: "https://" + url_api + "/fmi/data/v2/databases/CPOC_AIMS/sessions",
        dataType: 'json',
        headers: {
            "Content-Type": "application/json",
            "Authorization": make_base_auth('api_auth', 'Aims2021')
        }, 
        async: false,
        success: function(data) {
            console.log("in get token");
            console.log(data.response.token);
            var token = data.response.token;
            $.cookie('_token_dashboard', token);
        },
        error: function(error) {
            console.log(error);
        }
    });
}

var month = ["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"];

function convert_date_format(date) {
    var arr = date.split("/");
    // console.log(arr);
    var m = arr[0] - 1;
    return arr[1] + " " + month[m] + " " + arr[2];
}
 
 $(document).ready(function(){
     $('.counter-value').each(function(){
         $(this).prop('Counter',0).animate({
             Counter: $(this).text()
         },{
             duration: 3500,
             easing: 'swing',
             step: function (now){
                 $(this).text(Math.ceil(now));
             }
         });
     });
 });


var pp_p1_value = 0;
var pp_p2_value = 0;
var pp_p3_value = 0;
var pp_p4_value = 0;
var pp_p5_value = 0;
var pp_p6_value = 0;
var pp_no_value = 0;
var pp_p1_percent = 0;
var pp_p2_percent = 0;
var pp_p3_percent = 0;
var pp_p4_percent = 0;
var pp_p5_percent = 0;
var pp_p6_percent = 0;
var pp_no_percent = 0;

const msalConfig = {
    auth: {
        clientId: "f96ad4e5-0180-44b3-88b0-e799cddabfa3",
        authority: "https://login.microsoftonline.com/a1a72289-9e38-42b8-af4f-4604df99036b",
        redirectUri: "https://aims-muda.cpoc.com.my/CPOC_AIMS/login.php",
        postLogoutRedirectUri: "https://aims-muda.cpoc.com.my/CPOC_AIMS/login.php",
    },
    cache: {
        cacheLocation: "sessionStorage", // This configures where your cache will be stored
        storeAuthStateInCookie: false, // Set this to "true" if you're having issues on Internet Explorer 11 or Edge
    }
};

const myMSALObj = new Msal.UserAgentApplication(msalConfig);