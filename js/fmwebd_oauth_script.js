function getProviderInfo(callback) {
	var xhr = new XMLHttpRequest();
	xhr.onreadystatechange = function() {
		if (xhr.readyState == 4) {
			var providerInfo = null;
			if (xhr.status == 200 && xhr.responseText != null && xhr.responseText != '') {
				providerInfo = xhr.responseText;
			}
			if (callback) {
				callback(providerInfo);
			}
		}
	};
	xhr.open('GET', '/fmi/webd/oauthapi/oauthproviderinfo', true);
	xhr.send();
}

function getOAuthURL(trackingId, masterAddr, provider, callback) {
	var xhr, queryStr;

	xhr = new XMLHttpRequest();
	xhr.onreadystatechange = function() {
		if (xhr.readyState == 4 && xhr.status == 200) {
			if (callback) {
				callback(xhr.responseText, xhr.getResponseHeader('X-FMS-Request-ID'));
			}
		}
	};
	queryStr = 'trackingID=' + trackingId + '&provider=' + provider + '&address=' + masterAddr + '&X-FMS-OAuth-AuthType=2';
	xhr.open('GET', 'https://' + masterAddr + '/oauth/getoauthurl?' + queryStr, true);
    xhr.setRequestHeader('X-FMS-Application-Type', 9);
    xhr.setRequestHeader('X-FMS-Application-Version', 15);
	xhr.setRequestHeader('X-FMS-Return-URL', 'https://' + masterAddr + '/fmi/webd/oauth-landing.html');
	xhr.send();
}