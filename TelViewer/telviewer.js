function getXMLHttpRequestObject()
{
	if(window.XMLHttpRequest)
		return new XMLHttpRequest();
	else if (window.ActiveXObject)
		return new ActiveXObject('MICROSOFT.XMLHTTP');
	else 
		alert('Twoja przegladarka nie obsluguje ajaxa!');
}

function string_escape(str)
{
	var new_str = escape(str);
	var regexp = /\+/gm
	
	new_str = new_str.replace(regexp, '%2B');
	
	return new_str;
}

function startSearch()
{
	var q = string_escape(document.getElementById('field').value);
	searchRequest.open('POST', "telviewer.php?d=" + new Date().getTime());
	searchRequest.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
	var params = "q=" + q;
	searchRequest.onreadystatechange = getResults;
	searchRequest.send(params);
}

function getResults()
{
	if(searchRequest.readyState == 4)
		{
		document.getElementById('results').innerHTML = searchRequest.responseText;
		}
}
var searchRequest = getXMLHttpRequestObject();
