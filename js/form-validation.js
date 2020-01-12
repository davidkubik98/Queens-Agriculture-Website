/*****************************************************************************/
/* Constants */
/*****************************************************************************/
const SEARCH_FORM = "search-form";
const SEARCH_FORM_TERM = "search-term";


/*****************************************************************************/
/* JavaScript-only Solution */
/*****************************************************************************/
/*
window.addEventListener("load", function() {
	let searchFormElement = document.getElementById(SEARCH_FORM);
	let searchTermElement = document.getElementById(SEARCH_FORM_TERM);
	
	if ((searchFormElement !== null) && (searchTermElement !== null)) {
		searchFormElement.addEventListener("submit", function(event) {
			let searchTerm = searchTermElement.value.trim();
			if (! searchTerm) {
				event.preventDefault();
			}			
		});
	}
});
*/


/*****************************************************************************/
/* jQuery Solution */
/*****************************************************************************/
$(document).ready(function() {
	$("#" + SEARCH_FORM).submit(function(event) {
		let searchTerm = $("#" + SEARCH_FORM_TERM).val().trim();
		if (! searchTerm) {
			event.preventDefault();
		}		
	});
});
