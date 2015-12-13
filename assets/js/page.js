function displayMessage(container, type, message) {
	if(type == "info") {
		container.addClass("alert alert-info");
		$(".notification-icon", container).addClass("glyphicon-info-sign");
	}else if(type == "success") {
		container.addClass('alert alert-success');
		$(".notification-icon", container).addClass("glyphicon-ok-sign");
	}else if(type == "warning") {
		container.addClass("alert alert-warning");
		$(".notification-icon", container).addClass("glyphicon-warning-sign");
	}else if(type == "error") {
		container.addClass("alert alert-danger");
		$(".notification-icon", container).addClass("glyphicon-exclamation-sign");
	}

	$(".message", container).html(message);

	container.show().fadeOut(5000, function() {
		container.removeClass("alert");
		container.removeClass("alert-info");
		container.removeClass("alert-success");
		container.removeClass("alert-warning");
		container.removeClass("alert-danger");

		$(".notification-icon", container).removeClass("glyphicon-info-sign");
		$(".notification-icon", container).removeClass("glyphicon-ok-sign");
		$(".notification-icon", container).removeClass("glyphicon-warning-sign");
		$(".notification-icon", container).removeClass("glyphicon-exclamation-sign");
	});
}