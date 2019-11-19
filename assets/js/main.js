$(document).ready(function() {

            
            /*-----------Desktop-----------*/
            // Btn up
            $(window).scroll(function(){
                if ($(this).scrollTop() > 100) {
                    $('.scrollup').fadeIn();
                } else {
                    $('.scrollup').fadeOut();
                }
            });
  
            $('.scrollup').click(function(){
                $("html, body").animate({ scrollTop: 0 }, 1000);
                return false;
            });
            //scroll down
            $(window).scroll(function(){
                if ($(this).scrollTop() < 100) {
                    $('.scrolldown').fadeIn();
                } else {
                    $('.scrolldown').fadeIn();
                }
            });
            $('.scrolldown').click(function(){
                $("html, body").animate({ scrollTop: 600}, 1000);
                return false;
            });
            //scroll down work
            $(window).scroll(function(){
                if ($(this).scrollTop() < 60) {
                    $('.scrolldown2').fadeIn();
                } else {
                    $('.scrolldown2').fadeIn();
                }
            });
            $('.scrolldown2').click(function(){
                $("html, body").animate({ scrollTop: 600}, 1000);
                return false;
            });

            /*Form*/
            var theForm = document.getElementById( 'theForm' );

            new stepsForm( theForm, {
                onSubmit : function( form ) {
                    // hide form
                    classie.addClass( theForm.querySelector( '.simform-inner' ), 'hide' );

                    /*
                    form.submit()
                    or
                    AJAX request (maybe show loading indicator while we don't have an answer..)
                    */

                    // let's just simulate something...
                    var messageEl = theForm.querySelector( '.final-message' );
                    messageEl.innerHTML = 'Gracias por escribir. <br/> <span class="contact-span-inner">Espera muy pronto mi respuesta. <a href="index" class="contact-back">Regresar al inicio.</a></span>';
                    classie.addClass( messageEl, 'show' );
                }
            } );

          
});

$(window).load(function() {
    setTimeout(function(){
        $('#preloader').fadeOut('slow');
        $('body').css({'overflow':'visible'});
    },1500);
})


