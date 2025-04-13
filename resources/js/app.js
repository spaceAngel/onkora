import '../../node_modules/bootstrap/dist/js/bootstrap.bundle'

document.addEventListener('DOMContentLoaded', function() {
	var rows = document.querySelectorAll('.js-link');
	for (var i = 0; i < rows.length; i++) {
		rows[i].addEventListener('click', function(e){
			window.location.href = e.currentTarget.getAttribute('data-url');
		});
	}

	var tabs = document.querySelectorAll('.js-tab a');
	for (var i = 0; i < rows.length; i++) {
		rows[i].addEventListener('click', function(e){
			window.location.href = e.currentTarget.getAttribute('data-url');
		});
	}
});
