// Foundation JavaScript
// Documentation can be found at: http://foundation.zurb.com/docs
$(document).foundation();
$(document).ready(function(){
    $('.header').slick({
        autoplay: true,
        autoplaySpeed: 3500,
        speed: 1000
    });
});
$(function(){
    $.datepicker.setDefaults(
        $.extend($.datepicker.regional["ru"])
    );
    $("#mainCalendar").datepicker();
});