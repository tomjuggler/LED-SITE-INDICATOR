jQuery(document).ready( function( $ ){

	$('#led-site-indicator-add-custom-event').click(function( e ){
		
		// don't actually go anywhere
		e.preventDefault();
		
		// find the highest current event number, so we can add ours after that
		var last_input_id = $('#led-site-indicator-custom-events-container').find('div.led-site-indicator-custom-event:last input:first').attr('id');
		if( last_input_id ){
			var id = parseInt( last_input_id.split('_')[2] ) + 1;
		} else {
			var id = 0;
		}

		// add the new row
		var html = '<div class="led-site-indicator-custom-event" id="led-site-indicator-custom_event-' + id + '">';
		html += '<input id="custom_event_' + id + '_checkbox" name="led_site_indicator_settings[custom_events][' + id + '][checkbox]" type="checkbox" value="true" />&nbsp;';
		html += '<input id="custom_event_' + id + '_hook" name="led_site_indicator_settings[custom_events][' + id + '][hook]" size="20" type="text" value="hook" />&nbsp;';
		html += '<input id="custom_event_' + id + '_subject" name="led_site_indicator_settings[custom_events][' + id + '][subject]" size="20" type="text" value="subject" />&nbsp;';
		html += '<input id="custom_event_' + id + '_message" name="led_site_indicator_settings[custom_events][' + id + '][message]" size="80" type="text" value="message" />&nbsp;';
		html += '<a href="#" class="led-site-indicator-delete-custom-event button"><span class="dashicons dashicons-no" style="line-height: inherit;" /></a>';
		html += '</div>';
		$('#led-site-indicator-custom-events-container').append( html );

	});


	$('#led-site-indicator-custom-events-container').on( 'click', '.led-site-indicator-delete-custom-event', function(e){
	
		// don't actually go anywhere
		event.preventDefault();
	
		// remove the parent element
		$(this).closest('.led-site-indicator-custom-event').remove();

	});

});