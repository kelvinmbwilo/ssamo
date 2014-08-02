var message_delay = 3000;

$(function($){
    // Ajax form processing
    $(init);
	
	$('#mail').click(function() {
  		$('#mail').val('');
	});
	
    function init() {   	
        $('#target').submit( submitForm ); 
    }

    function submitForm() {
        var contact_form = $( this );
        var mail = $('#mail');
		var filter = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
		if ( !$(mail).val() ) { 
            $('#success-message').fadeOut();
            $('#invalid-email').fadeOut();
            $('#incomplete-message').fadeIn('slow').delay(message_delay).fadeOut('slow');
            $('#incomplete-message').html("<p style='font-family: 'proxima_novaregular'; font-size: 12px; letter-spacing: 1px; color: #868789; text-align:left; margin:5px auto;'>Inserisci un'email</p>");
        } else if ( !filter.test(mail.val()) ) { 
        	$('#success-message').fadeOut();
        	$('#incomplete-message').fadeOut();
            $('#invalid-email').fadeIn('slow').delay(message_delay).fadeOut('slow');
            $('#invalid-email').html("<p style='font-family: 'proxima_novaregular'; font-size: 12px; letter-spacing: 1px; color: #868789; text-align:left; margin:5px auto;'>Indirizzo email non valido.</p>");
        } else {
        	$('#success-message').fadeOut();
        	$('#incomplete-message').fadeOut();
            $.ajax( {
                url:      contact_form.attr( 'action' ) + "?ajax=true",
                type:     contact_form.attr( 'method' ),
                data:     contact_form.serialize(),
                success:  submit_finished
            });
        }
        return false;
    }

	
	function submit_finished( response ) {
    	
        response = $.trim( response );
        	$('#success-message').html("<p style='font-family: 'proxima_novaregular'; font-size: 12px; letter-spacing: 1px; color: #868789; text-align:left; margin:5px auto;'>Grazie per esserti iscritto</p>");
            $('#success-message').fadeIn('slow').delay(message_delay).fadeOut('slow');
            $('#mail').val("");
    }

});
