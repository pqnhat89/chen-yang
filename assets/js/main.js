$(document).ready(function () {
    $('.home-1').click(function () {
        console.log('xxx');
        window.location.href = "/about-us/firm-profile";
    });
    $('.home-2').click(function () {
        window.location.href = "/chuyen-muc/residential-space";
    });
    $('.home-3').click(function () {
        window.location.href = "/press";
    });
    $('.home-4').click(function () {
        window.location.href = "/contact";
    });

    $('.uk-panel-scrollable').scroller();

    $('.current-menu-item').closest('ul').show();

    $('#concept').click(function () {
        $('#concept-content').toggleClass('uk-hidden');
    });

    $('#offcanvas-btn').click(function () {
        $('#offcanvas-content').toggleClass('uk-hidden');
        $('.menu ul').show();
    });
});