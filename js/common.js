$(function(){

    $(".fancybox").fancybox({
        openEffect	: 'none',
        closeEffect	: 'none',
        padding: 0,
        loop : false,
        helpers: {
            overlay: {
                locked: false
            }
        }
    });

    $('.scroll-pane').jScrollPane({
        mouseWheelSpeed : 18
    });

});