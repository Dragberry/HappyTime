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
    var orderSantaDialog;

    function doOrderSanta() {
        var name = $("#name").val();
        var phone = $("#phone").val();
        var time = $("#time").val();
        var type = $("#type").val();
        var info = $("#info").val();

        orderSantaDialog.dialog( "close" );
        var message = "Спасибо за заказ, мы обязательно свяжемся с Вами в ближайшее время!\n";
        message = message + "Введенная информация: \n\n"
        message = message + "Имя: " + name + "\n";
        message = message + "Телефон: " + phone + "\n";
        message = message + "Время: " + time + "\n";
        message = message + "Тип заказа: " + type + "\n";
        message = message + "Информация: " + info + "\n";

        var data   = $('#orderSantaForm').serialize();

        $.ajax({
            type: "POST",
            url: "/pages/orderSanta.php",
            data: data,
            cache: false,
            success: function(data){
                $('.results').html(data);
            }
        });
        alert(message);
    }

    orderSantaDialog = $("#orderSantaClaus").dialog({
        title: "Дед Мороз и Снегурочка в Минске",
        autoOpen: false,
        width: 420,
        modal: true,
        buttons: [{
            text: "Заказать",
            click: doOrderSanta
        },{
            text: "Нет, спасибо!",
            click: function() {
                $( this ).dialog( "close" );
            }
        }],

        close: function() {
            $( ".callToSanta").blur() ;
        }
    });

    form = orderSantaDialog.find( "form" ).on( "submit", function( event ) {
        event.preventDefault();
    });

    $( ".callToSanta" ).button().on( "click", function() {
        orderSantaDialog.dialog( "open" );
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