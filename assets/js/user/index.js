function generateUsersTable() {
	$.post(window.location.origin + "/user/search", { }, function() { }).done(function(response) {
		var result = jQuery.parseJSON(response);

		$("#users-table-container").html(result);
		
		$('.edit-user-button').bind('click', { }, initializeEditForm);
		$('.delete-user-button').bind('click', { }, initializeDeleteForm);
	});
}

$(document).ready(function() {
	generateUsersTable();
});