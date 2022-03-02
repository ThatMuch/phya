$(document).ready(function ($) {
	// AOS JS
	AOS.init();
	console.log("coucou");
	var vid = document.getElementById('featurevideo');

	// FullPage JS
	new fullpage('#fullpage',{
		navigation: false,
		responsiveWidth: 764,
		anchors: ['home','learn','train','play','promotion','about'],
		scrollBar: true,
		afterLoad: function () {

			// Learn Section
			if ($('#phone1').hasClass('active')) {
				vid.currentTime = '00.000'; // Start time
				vid.play();
			}

			// Train Section
			if ($('#phone2').hasClass('active')) {
				vid.currentTime = '04.000'; // Start time
				vid.play();
			}

			// Play Section
			if ($('#phone3').hasClass('active')) {
				vid.currentTime = '06.000'; // Start time
				vid.play();
			}
		}
	});
});
