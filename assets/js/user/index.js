function generateUsersTable() {
	$.post(window.location.origin + "/user/search", { }, function() { }).done(function(response) {
		var result = jQuery.parseJSON(response);

		$("#users-table-container").html(result);
		
		// $('.edit-user-button').bind('click', { }, initializeEditForm);
		$('.delete-user-button').bind('click', { }, initializeDeleteForm);
	});
}

function initializeDeleteForm() {
	$.post(window.location.origin + '/user/get', { id : $(this).attr('data-id') }, function() { }).done(function(response) {
		console.log(response);
	});
}

$(document).ready(function() {
	generateUsersTable();

	$("#add-user-form").submit(function() {
		event.preventDefault();

		$("#body-loader").addClass("loading");

		$.post($(this).attr('action'), $(this).serialize(), function() { }).done(function(response) {
			var result = jQuery.parseJSON(response);

			displayMessage($("#add-user-notification"), result['messageType'], result['message']);

			generateUsersTable();

			$("#body-loader").removeClass("loading");
		});
	});
});