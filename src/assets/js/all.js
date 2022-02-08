$(document).ready(function () {
	// ACCORDION TOGGLE
	$(".c-accordion__head--title").on("click", function () {
		if ($(this).hasClass("isActive")) {
			$(this).parent().next(".c-accordion__content").slideUp();
			$(this).removeClass("isActive");
		} else {
			$(this).parent().next(".c-accordion__content").slideDown();
			$(this).addClass("isActive");
		}
	});
});
// ADD OPTGROUP ON SELECT
$(function () {
	$("select").append('<optgroup label=""></optgroup>');
});
