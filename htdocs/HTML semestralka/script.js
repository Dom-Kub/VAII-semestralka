(function($){
    var cover = $("#cover");
    var   covers = $('.covers');
    covers.children(':not(:last)').hide();

    var sliderInterval = setInterval(function (){

        covers.children(':last')
            .fadeOut(2000, function (){$(this).prependTo(covers);})
            .prev().fadeIn(2000)
    },3500);

    console.log( sliderInterval );
    covers.on('click', function (){
        clearInterval( sliderInterval);
    })

})(jQuery);