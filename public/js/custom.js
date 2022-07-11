

$(document).ready(function() {
	 $('.owl-carousel').owlCarousel({
  	 loop: true,
  	 margin: 30,
  	 nav: true,
  	 pagination: true,
  	 responsiveClass: true,
	  autoplay:true,
    autoplayTimeout:10000,
    autoplayHoverPause:false,
  	responsive: {
    	0: {
      	items: 1,
  		pagination: true
    	},
      992:{
        items: 3
      }
  	}
	})
});



