"use strict";

let verticalBorder = require('../components/verticalBorder.js');
let $ = require('../constants/jquery.min.js');
let fetchDataAndReturnHTMLList = require('../components/fetchDataAndReturnHTMLList.js');
let updateEntry = require('../components/updateEntry.js');
// let bootstrap = require('../constants/bootstrap.min.js');

$(document).ready(function(){
	let that;
    $('.categoryList').click(function() {
        $('#main-content').val('');
        if(!$(this).hasClass('new-category')) {
            $('#input-category').val(this.innerText);
            $('#input-category').attr('disabled','');
            $('#input-category').css('border-right','1px solid');
        } else {
            $('#input-category').val('');
            $('#input-category').removeAttr('disabled');
            $('#input-category').css('border-right','');
        }
    	if(typeof that !== 'undefined') {
    		$(that).removeClass('activeCategory');
    	}
    	$(this).addClass('activeCategory');
    	that = this;
    });

    $('#upload').mousedown(function() {
        $(this).addClass('upload-btn-clk');
    });
    $('#upload').mouseup(function() {
            $(this).removeClass('upload-btn-clk');
    });

    let url = '../../../components/updateRawInputFile.php';
    $('#upload').click(function() {
        let obj = {
            category: $('#input-category').val(),
            content: $('#main-content').val()
        };
        if($('#input-category').val() && $('#main-content').val().trim()) {
            updateEntry(url, obj);

            $('#is-uploaded')[0].innerText = 'Uploaded Successfully...';
            setTimeout(function() {
                $('#is-uploaded')[0].innerText = '';
            }, 2000);
        }
        $('#input-category').val('');
        $('#main-content').val('');
    });
});