var navbar, navbaroffset, initMobile = false;
function initMobileMenu() {
    initMobile = true;
    if (typeof $.fn.mmenu != "undefined") {
        $("#main-menu").mmenu({"navbar": {"title": "Menü"}}, {clone: true});
        $("#user-menu").mmenu({"navbar": {"title": "Kullanıcı"}}, {clone: true});
        $("#filtreler").mmenu({"navbar": {"title": "Filtreler"}}, {clone: true});
    }
}
$(function () {
    /* fixed Navbar */
    navbar = $("#boardnav");
    if (navbar.length > 0) {
        navbaroffset = navbar.offset().top;
    }
    $(window).on('scroll resize', function () {
        if ($(window).scrollTop() > navbaroffset) {
            navbar.addClass('navbar-fixed-top');
            if ($(window).innerWidth() > 767) {
                navbar.find('.acc-btn').addClass('active');
            }
        } else {
            navbar.removeClass('navbar-fixed-top');
            if ($(window).innerWidth() > 767) {
                navbar.find('.acc-btn').removeClass('active');
            }
        }
        if (initMobile == false && $(window).innerWidth() < 1000) {
            initMobileMenu();
        }
    });
    if ($(window).innerWidth() < 1000) {
        initMobileMenu();
    }
    $(".opener").click(function () {
        $(this).toggleClass("active").closest("li").find(".drop-down").toggleClass("active");
    });

    $('.panel-heading a').click(function () {
        $('.panel-heading').removeClass('active');
        $(this).parents('.panel-heading').addClass('active');
    });

});
