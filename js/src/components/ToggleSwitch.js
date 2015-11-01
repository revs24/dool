/**
 * Created by SagarKhatri on 18-Aug-15.
 */
var $ = require('../constants/jquery.min.js');
module.exports = (function ($) {

    $.fn.toggleSwitch = function () {
        var id = this.attr("id"),
            switchDivId = id + "-switch";
        $("<div/>", {class: "onoffswitch", id: switchDivId}).insertAfter(this);
        $("div#" + switchDivId).append(this.clone().addClass('onoffswitch-checkbox'));
        $("<label/>", {
            class: "onoffswitch-label",
            for: id
        }).appendTo("div#" + switchDivId);
        this.remove();
    };
}($));
