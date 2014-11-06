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

$(function() {
    var addUser;
    var dialog = $("#orderSantаClaus").dialog({
        autoOpen: false,
        height: 300,
        width: 350,
        modal: true,
        buttons: {
            "Create an account": addUser,
            Cancel: function() {
                dialog.dialog( "close" );
            }
        },
        close: function() {
            ;
        }
    });

    form = dialog.find( "form" ).on( "submit", function( event ) {
        event.preventDefault();
    });

    $( "#create-user" ).button().on( "click", function() {
        dialog.dialog( "open" );
    });
});