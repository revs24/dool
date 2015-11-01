var $ = require('../constants/jquery.min.js');

module.exports = function(url, obj) {

	$.post(url, obj, function(data) {
		// document.getElementById('main-content').innerHTML = data;
		return data;
	});
}