$(document).ready(function () {
    $('.cont2').hide();
    $('.cont3').hide();

    $('.susc').click(function () {
        $('.cont1').hide();
        $('.cont2').show();
        $('.cont3').hide();

    });

    $('.owne').click(function () {
        $('.cont1').show();
        $('.cont2').hide();
        $('.cont3').hide();

    });


    $('.memb').click(function () {
        $('.cont3').show();
        $('.cont2').hide();
        $('.cont1').hide();

    });


});


