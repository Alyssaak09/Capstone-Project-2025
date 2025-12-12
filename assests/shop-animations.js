jQuery(function($){
    function animateShopLentorProducts() {
        $('.wl-product-grid .wl-col').each(function(i){
            var $this = $(this);
            $this.css({
                opacity: 0,
                transform: 'translateY(20px)',
            });
            setTimeout(function(){
                $this.css({
                    opacity: 1,
                    transform: 'translateY(0)',
                    transition: 'all 0.6s ease'
                });
            }, i * 100); // staggered animation
        });
    }

    // Animate products on page load
    animateShopLentorProducts();

    // Animate products after ShopLentor AJAX update
    $(document).on('wl-products-loaded', function(){
        animateShopLentorProducts();
    });
});
