$(function(){
    $('.header-bottom').click(function(){
        $('.pull-down').slideToggle();
        $('#open').toggleClass('fas fa-angle-double-up');
        $('#open').toggleClass('fas fa-bars');
    });
});