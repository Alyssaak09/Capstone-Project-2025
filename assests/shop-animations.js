jQuery(function($){

    function animateProducts() {
        $('.ht-product').each(function(i){
            var $item = $(this);

            // Prevent re-animating products
            if (!$item.hasClass('animated')) {
                $item.css({
                    opacity: 0,
                    transform: 'translateY(20px)'
                });

                setTimeout(function(){
                    $item.css({
                        opacity: 1,
                        transform: 'translateY(0)',
                        transition: 'all 0.6s ease'
                    });
                    $item.addClass('animated');
                }, i * 100); // stagger
            }
        });
    }

    // Animate on page load
    animateProducts();

    // Animate after ShopLentor AJAX updates
    $(document).on('woolentor-products-loaded', function(){
        animateProducts();
    });
});

