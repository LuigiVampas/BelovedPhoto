function loginNow(){
	$.ajax({
        type: "POST",
        data: $('#loginForm').serializeArray(),
        success: function(msg){
            if (msg == 'error') {
				$('#error').text('Ошибка авторизации. Попробуйте снова.');
            }
            else {
				document.setText(msg);
                //window.location.reload();
            }
        }
  });
  
  return false;
}


