<div class="row">
    <div class="col-md-12 mb15">
        <div class="filter-products-title">MARKALAR</div>
        <div id="brands" class="owl-carousel owl-theme brands">
            <div class="item">
                <a href="http://www.mysticboarding.com" target="_blank"><img src="../boardsports/img/brands/mystic.jpg"></a>
            </div>
            <div class="item">
                <a href="http://www.cabrinhakites.com?" target="_blank"><img src="../boardsports/img/brands/cabrinha.jpg"></a>
            </div>
            <div class="item">
                <a href="http://www.nobilekiteboarding.com" target="_blank"><img src="../boardsports/img/brands/nobile.jpg"></a>
            </div>
            <div class="item">
                <a href="http://www.spyoptic.com" target="_blank"><img src="../boardsports/img/brands/spy.jpg"></a>
            </div>
            <div class="item">
                <a href="http://www.crazyflykites.com" target="_blank"><img src="../boardsports/img/brands/crazyfly.jpg"></a>
            </div>
            <div class="item">
                <a href="http://www.kiteacademy.com" target="_blank"><img src="../boardsports/img/brands/kiteacademy.jpg"></a>
            </div>
        </div>
    </div>
</div>
<script>
    $('#brands').owlCarousel({
        responsiveClass: true,
        nav: true,
        responsive: {
            0: {items: 2},
            481: {items: 3},
            768: {items: 4},
            993: {items: 6, nav: false}
        },
        slideSpeed: 300,
        paginationSpeed: 400,
        navText: ['<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>', '<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>']
    });
</script>