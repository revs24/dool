var $ = require('../constants/jquery.min.js');

module.exports = function(url, obj) {

	$.post(url, obj, function(data) {
		return data;
	});
}