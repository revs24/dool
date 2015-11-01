"use strict";

let verticalBorder = require('../components/verticalBorder.js');
let toggleSwitch = require('../components/ToggleSwitch.js');
let fetchDataAndReturnHTMLList = require('../components/fetchDataAndReturnHTMLList.js');
let $ = require('../constants/jquery.min.js');
let updateEntry = require('../components/updateEntry.js');
// let bootstrap = require('../constants/bootstrap.min.js');

$(document).ready(function(){
	verticalBorder('category-section', 'details-section');
	$("#switch").toggleSwitch();
	// initial selection cf or self
	if($('#switch').is(":checked")) {
		$('.right-btn').addClass('activeCategory');
		$('.left-btn').removeClass('activeCategory');
	} else {
		$('.left-btn').addClass('activeCategory');
		$('.right-btn').removeClass('activeCategory');
	}

	$("#switch").click(function() {
		if($(this).is(":checked")) {
			$('.right-btn').addClass('activeCategory');
			$('.left-btn').removeClass('activeCategory');
		} else {
			$('.left-btn').addClass('activeCategory');
			$('.right-btn').removeClass('activeCategory');
		}
	});
	$('#new-entry').mousedown(function() {
		if(!$(this).hasClass('activeCategory')) {
			$(this).addClass('new-entry-md');
		}
	});
	$('#new-entry').mouseup(function() {
		if(!$(this).hasClass('activeCategory')) {
			$(this).removeClass('new-entry-md');
		}
	});
	let that;
    $('.categoryList').click(function() {
    	$('.input-form').css('display', 'block');
    	verticalBorder('category-section', 'details-section');
    	if(typeof that !== 'undefined') {
    		$(that).removeClass('activeCategory');
    	}
    	$(this).addClass('activeCategory');
    	that = this;
    });
    let url = '../../../components/updateDiaryEntry.php';
    $('#upload').click(function() {
        let obj = {
            entryType: $("#switch").is(":checked") ? "SELF" : "CF",
            content: $("#diary-content").val()
        };
        if($('#diary-content').val().trim()) {
            updateEntry(url, obj);

            $('#is-uploaded')[0].innerText = 'Uploaded Successfully...';
            setTimeout(function() {
                $('#is-uploaded')[0].innerText = '';
            }, 2000);
        }
        $('#diary-content').val('');
    });
});