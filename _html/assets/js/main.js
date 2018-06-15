$(document).ready(function(){ 

    var corousel_product_view = $('.corousel_product_view');

    corousel_product_view.owlCarousel({
        navigationText: [
                        '<img src="assets/images/img_arrow_similar_prev.png" class="img_arrow_prev">', 
                        '<img src="assets/images/img_arrow_similar_next.png" class="img_arrow_next">'
                    ],
        navigation: true,
        pagination: false,
        items : 1, 
        slideSpeed : 700,
        paginationSpeed : 1400,
        singleItem : true,
        autoPlay: false
    });


    var carousel_product_thumb = $('#carousel_product_thumb');

    carousel_product_thumb.lightSlider({
        gallery:false,
        item:4,
        vertical:true,
        verticalHeight:420,
        vThumbWidth:74,
        thumbMargin:0,
        slideMargin:0,
        auto:false,
        prevHtml:'<img src="assets/images/arrow_prev.png" class="img_arrow_prev">',
        nextHtml:'<img src="assets/images/arrow_next.png" class="img_arrow_next">',
        pager: false,
        controls: false,
        loop: true,
        onAfterSlide: function(el){

            //alert(el.find(".active").index())
        }
    });

    $('section.product_view .column_img .box_carousel #prev').on('click', function(){

        carousel_product_thumb.goToPrevSlide();

    }); 

    $('section.product_view .column_img .box_carousel #next').on('click', function(){

        carousel_product_thumb.goToNextSlide();

    }); 

    $('section.product_view .column_img .carousel_product_thumb li').on('click', function(){


        var item = $(this).attr('id');
        item--;

        corousel_product_view.trigger('owl.goTo', item);

    });



    var carousel_similar = $(".carousel_similar");

    carousel_similar.owlCarousel({
        navigationText: [
                        '<img src="assets/images/img_arrow_similar_prev.png" class="img_arrow_prev">', 
                        '<img src="assets/images/img_arrow_similar_next.png" class="img_arrow_next">'
                    ],
        navigation: false,
        pagination: false,
        slideSpeed : 500,
        paginationSpeed : 400,
        items : 4, 
        itemsDesktop : [1200, 4], 
        itemsDesktopSmall : [1100, 4], 
        itemsTablet: [1001, 3], 
        itemsTabletSmall: [750, 2], 
        itemsMobile : [580, 1],
        afterMove: function(item){

            var item = this.currentItem;
            item++;

            $('section.product_view .box_similar .box_control .box_number #current').html(item);
        }
    }); 

    $('.box_similar #prev').on('click', function(){

        carousel_similar.trigger('owl.prev');

    }); 

    $('.box_similar #next').on('click', function(){

        carousel_similar.trigger('owl.next');

    });  

    $('footer .box_newsletter .field').on('blur', function(){

        if( $(this).val() == '' ) {

            $(this).removeClass('active');

        }else{

            $(this).addClass('active');

        }
    });   

    $('section.product_view .column_data .box .box_attribute .box_colors .color').on('click', function(){

        var color = $(this).parents('label').children('input[type="radio"]').val();

        $(this).parents('label').parents('.box_colors').parents('.box_attribute').children('.attribute_name').children('span').html('(' + color + ')');

    });    

    $('section.product_view .column_data .box .box_attribute .box_size .size').on('click', function(){

        var size = $(this).parents('label').children('input[type="radio"]').val();

        $(this).parents('label').parents('.box_size').parents('.box_attribute').children('.attribute_name').children('span').html('(' + size + ')');

    });  

    $('section.product_view .column_data .box #btn_add').on('click', function(){

        if( $('.background_modal').is(':visible') ) {

            $('.background_modal').fadeOut(300);

            $('.modal_product').hide('clip', 300);

        }else{

            $("html, body").animate({scrollTop: $("body").offset().top}, 500);

            $('.background_modal').delay(400).fadeIn(300);

            $('.modal_product').delay(400).show('bounce', 1000);

        }

    });

    $('.background_modal, .modal_product .close').on('click', function(){

        if( $('.background_modal').is(':visible') ) {

            $('.background_modal').fadeOut(300);

            $('.modal_product').hide('clip', 300);

        }

    });

});

function menu(){

    $('.menu_mobile').height($(document).height());

    if( $('.menu_mobile').is(':visible') ){

        $('.menu_mobile').hide('slide', {'direction': 'left'}, 200);

    }else{

        $('.menu_mobile').show('slide', {'direction': 'left'}, 400);

    }

}



function open_gallery(item){

    var pswpElement = document.querySelectorAll('.pswp')[0];

    // build items array
    var items = [
        {
            src: 'assets/images/img_product_view1.png',
            w: 430,
            h: 556
        },
        {
            src: 'assets/images/img_product1.png',
            w: 291,
            h: 375
        },
        {
            src: 'assets/images/img_product3.png',
            w: 291,
            h: 375
        },
        {
            src: 'assets/images/img_product3.png',
            w: 291,
            h: 375
        },
        {
            src: 'assets/images/img_product4.png',
            w: 291,
            h: 375
        },
        {
            html: '<iframe class="video_view" width="560" height="315" src="https://www.youtube.com/embed/REf-mRFGp3s" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>',                
        }

    ];

    // define options (if needed)
    var options = {
        closeOnScroll: false,
        // optionName: 'option value'
        // for example:
        index: 0 // start at first slide
    };

    // Initializes and opens PhotoSwipe
    var gallery = new PhotoSwipe( pswpElement, PhotoSwipeUI_Default, items, options);
    gallery.init();

    setTimeout(function(){

        gallery.goTo(item);

    }, 500);    

}