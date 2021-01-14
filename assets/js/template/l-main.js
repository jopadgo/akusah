$(function () {
	AOS.init();
});
$(window).on("load", function () {
	AOS.refresh();
});
$(document).ready(function () {
	$.timeliner({});
});
// When the document is ready
$(document).ready(function () {
	// Initialize YouTube player
	$("#player-control").YTPlayer({
		// URL of the YouTube video
		videoURL: "https://youtu.be/hrlXgo4sxPU",
		// If you want it as background of your website
		// or of an element e.g #elementId
		containment: "#banner",
		autoplay: true,
		mute: true,
		startAt: 0,
		opacity: 1,
		loop: true,
		// Hide YouTube Controls
		showControls: false,
		onReady: function () {
			console.log("Player succesfully initialized");
		},
		onError: function (err) {
			console.log("An error ocurred", err);
		},
	});
});
