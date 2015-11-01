"use strict";

let $ = require('../constants/jquery.min.js');
// let jqueryMigrate = require('../constants/jquery-migrate-1.2.1.min.js');
let slick = require('../constants/slick.min.js');

$(document).ready(function(){
	$('.your-class').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: true,
		fade: false
	});
});