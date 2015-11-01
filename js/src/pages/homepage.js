"use strict";

let verticalBorder = require('../components/verticalBorder.js');
let $ = require('../constants/jquery.min.js');
let fetchDataAndRenderHTMLList = require('../components/fetchDataAndReturnHTMLList.js');
let _ = require('lodash');
// let bootstrap = require('../constants/bootstrap.min.js');

$(document).ready(function(){
	let that;
    $('.categoryList').click(function() {
    	// callApi(this.innerText);
    	let url = '../../../components/fetchData.php';
    	let id = this.innerText;
    	let response = fetchDataAndRenderHTMLList(url, {id: id}, 'apiResponse');
    	if(typeof that !== 'undefined') {
    		$(that).removeClass('activeCategory');
    	}
    	$(this).addClass('activeCategory');
    	that = this;
    })
});