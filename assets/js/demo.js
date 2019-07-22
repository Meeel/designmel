document.documentElement.className = 'js';

(function() {
			var navEl = document.querySelector('nav.menu'),
				revealer = new RevealFx(navEl),
				closeCtrl = navEl.querySelector('.btn--close');

			document.querySelector('.btn--menu').addEventListener('click', function() {
				revealer.reveal({
					bgcolor: '#7f40f1',
					duration: 400, 
					easing: 'easeInOutCubic',
					onCover: function(contentEl, revealerEl) {
						navEl.classList.add('menu--open');
						contentEl.style.opacity = 1;
					},
					onComplete: function() {
						closeCtrl.addEventListener('click', closeMenu);
					}
				});
			});

			function closeMenu() {
				closeCtrl.removeEventListener('click', closeMenu);
				navEl.classList.remove('menu--open');
				revealer.reveal({
					bgcolor: '#7f40f1',
					duration: 400, 
					easing: 'easeInOutCubic',
					onCover: function(contentEl, revealerEl) {
						navEl.classList.remove('menu--open');
						contentEl.style.opacity = 0;
					}
				});
			}
		})();
		(function() {
			var formEl = document.querySelector('section.form'),
				revealer = new RevealFx(formEl),
				closeCtrl = formEl.querySelector('.form__close');

			document.querySelector('.btn--form-open').addEventListener('click', function() {
				revealer.reveal({
					bgcolor: '#8f40f1',
					direction: 'bt',
					duration: 600,
					onCover: function(contentEl, revealerEl) {
						formEl.classList.add('form--open');
						contentEl.style.opacity = 1;
					},
					onComplete: function() {
						closeCtrl.addEventListener('click', closeForm);
					}
				});
			});

			function closeForm() {
				closeCtrl.removeEventListener('click', closeForm);
				formEl.classList.remove('form--open');
				revealer.reveal({
					bgcolor: '#8f40f1',
					direction: 'tb',
					duration: 600, 
					onCover: function(contentEl, revealerEl) {
						formEl.classList.remove('form--open');
						contentEl.style.opacity = 0;
					}
				});
			}

		})();

		/*Scroll*/
		$(function(){

     $('a[href*=#]').click(function() {

     if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'')
         && location.hostname == this.hostname) {

             var $target = $(this.hash);

             $target = $target.length && $target || $('[name=' + this.hash.slice(1) +']');

             if ($target.length) {

                 var targetOffset = $target.offset().top;

                 $('html,body').animate({scrollTop: targetOffset}, 1000);

                 return false;

            }

       }

   });

});