// Foundation JavaScript
// Documentation can be found at: http://foundation.zurb.com/docs
$(document).foundation();
$(document).ready(function(){
    $('.header').slick({
        autoplay: true,
        autoplaySpeed: 2000
    });
});
$(function(){
    $.datepicker.setDefaults(
        $.extend($.datepicker.regional["ru"])
    );
    $("#mainCalendar").datepicker();
});