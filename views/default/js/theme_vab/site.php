<?php ?>
//<script>

elgg.provide('elgg.theme_vab');

elgg.theme_vab.init = function() {
	$('span.groups-widget-viewall a[rel="toggle"]').live('click', function() {
		if ($(this).hasClass("elgg-state-active")) {
			elgg.theme_vab.set_cookie($(this).attr("href").replace("#", ""), "closed", 30);
		} else {
			elgg.theme_vab.set_cookie($(this).attr("href").replace("#", ""), "", 30);
		}
	});
}

elgg.theme_vab.set_cookie = function(name, value, exdays) {
	var expires = "";
	
	if (exdays) {
		var exdate = new Date();
		exdate.setDate(exdate.getDate() + exdays);

		expires = "; expires=" + exdate.toUTCString();
	}
	
	var c_value = escape(value) + expires + "; path=/;";

	document.cookie = name + "=" + c_value;
}

elgg.register_hook_handler('init', 'system', elgg.theme_vab.init);