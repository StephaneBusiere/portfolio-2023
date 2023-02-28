// init marquees
gsap.to('.marquee-inner', { xPercent: -50, ease: 'none', duration: 30, repeat: -1 });
$(window).resize(function(){
	gsap.to('.marquee-inner', { xPercent: -50, ease: 'none', duration: 25, repeat: -1 });
})