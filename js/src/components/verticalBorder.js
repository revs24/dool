var $ = require('../constants/jquery.min.js');

module.exports = function(leftClass, rightClass) {
	var leftClassHeight,rightClassHeight;
	leftClass = '.' + leftClass;
	rightClass = '.' + rightClass;
	leftClassHeight = $(leftClass).height();
	rightClassHeight = $(rightClass).height();
	if(leftClassHeight > rightClassHeight) {
		$(rightClass).css('border-left','1px');
		$(leftClass).css('border-right','1px solid #CBD2D0');
	} else {
		$(leftClass).css('border-right','1px');
		$(rightClass).css('border-left','1px solid #CBD2D0');
	}
}