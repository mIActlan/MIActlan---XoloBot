$(document).ready(function(){
	$(document).on('click', '.box-chat-titulo', function(){
		if($('.box-chat-body').css('display') === 'none'){
			$('.box-chat-body').show();
			$('.box-chat-titulo h3').text('Cerrar XoloBot');
		} else {
			$('.box-chat-body').hide();
			$('.box-chat-titulo h3').text('Abrir XoloBot');
		}
	});
});