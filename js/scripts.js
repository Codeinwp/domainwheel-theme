( function( $ ) {

    $(document).ready(function(){

        $('body').on( 'click', '.dw-submit', function(){

            $('.logo-icon').addClass('rotate-icon').on(
                "webkitAnimationEnd oanimationend msAnimationEnd animationend",
                function() {
                    $('.logo-icon').removeClass("rotate-icon");
                }
            );
        });

    })

} )( jQuery );
