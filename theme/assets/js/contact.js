$(function() {

	var isValidForm = function($form) {
		var name = $form.find('[name=name]');
		var email = $form.find('[name=email]');
		var title = $form.find('[name=title]');
		var content = $form.find('[name=content]');

		if($.trim(name) === '') {
			alert('이름을 입력하세요.');
			return false;
		} else if(!email) {
			alert('이메일을 입력하세요.');
			return false;
		} else if(!title) {
			alert('제목을 입력하세요.');
			return false;
		} else if(!content) {
			alert('내용을 입력하세요.');
			return false;
		}

		return true;
	};

	$('.__btnBoramContactSubmit').on('click', function(e) {
		var $form = $(this).parents('form');

		if(isValidForm($form)) {
			$form.submit();
		}
	});
});