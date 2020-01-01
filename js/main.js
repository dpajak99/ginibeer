
var nav = document.getElementById('mainNav');
var logo = document.getElementById('logo');

	$(window).scroll(function(e) {
		currentposition = $(document).scrollTop();//aktualna pozycja względem początku          
		bannerheight = $("#mainNav").height();//wysokość elementu, po którym menu ma stać się białe
		if(currentposition > bannerheight - 40) {
			//alert("zmien");
			nav.className = "navbar navbar-expand-lg navbar-light fixed-top lower";
			setTimeout(function() {
				logo.innerHTML = "GINIBEER - Tworzymy z pasją";
			}, 30);
			// alert();
		} else if(currentposition < bannerheight) {
			//alert("wroc");
			nav.className = "navbar navbar-expand-lg navbar-light fixed-top";
			setTimeout(function() {
				logo.innerHTML = "<img src='img/logo.png' class='logo' />";
			}, 30);
			
		}
	});
	
(function(){

  var parallax = document.querySelectorAll("section"),
      speed = 0.7;

  window.onscroll = function(){
    [].slice.call(parallax).forEach(function(el,i){

      var windowYOffset = window.pageYOffset,
          elBackgrounPos = "50% " + (windowYOffset * speed) + "px";

      el.style.backgroundPosition = elBackgrounPos;

    });
  };

})();

function initMap() {
        var uluru = {lat: 50.011810, lng: 20.990632};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 15,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }