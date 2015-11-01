var $ = require('../constants/jquery.min.js');

module.exports = function(url, obj, id) {
	var result = '<ul>';
	var response = $.post(url, obj, function(data) {
		var tupleSeparator = '#&';
		var tempData = data.split(tupleSeparator);
		for(var i=0; i<tempData.length; i++) {
			if(tempData[i].length > 0)  {
				console.log(result);
				result += '<li>' + tempData[i] + '</li>';
			}
		}
		result += '</ul>';
		$('#' + id).slideUp(400, function() {
			document.getElementById(id).innerHTML = result;
			$('#' + id).slideDown(600);
		});
	});
}