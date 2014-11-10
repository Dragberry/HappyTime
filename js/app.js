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
    var dialog = $("#orderSantaClaus").dialog({
        title: "Дед Мороз и Снегурочка в Минске",
        autoOpen: false,
        width: 420,
        modal: true,
        buttons: [{
            text: "Хорошо!",
            click: function() {
                $( this ).dialog( "close" );
            }
        }],

        close: function() {
            $( ".callToSanta").blur() ;
        }
    });

    form = dialog.find( "form" ).on( "submit", function( event ) {
        event.preventDefault();
    });

    $( ".callToSanta" ).button().on( "click", function() {
        dialog.dialog( "open" );
    });
});

$(function() {
    var actionDialog = $("#actionDialog").dialog({
        title: "Тамада, звукорежиссер и детский аниматор",
        autoOpen: false,
        width: 420,
        modal: true,
        buttons: [{
            text: "Хорошо!",
            click: function() {
                $( this ).dialog( "close" );
            }
        }],

        close: function() {
            $( ".getAction").blur() ;
        }
    });

    form = actionDialog.find( "form" ).on( "submit", function( event ) {
        event.preventDefault();
    });

    $( ".getAction" ).button().on( "click", function() {
        actionDialog.dialog( "open" );
    });
});