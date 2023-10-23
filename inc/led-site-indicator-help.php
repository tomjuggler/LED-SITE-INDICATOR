<?php

// if called without WordPress, exit
if( !defined('ABSPATH') ){ exit; }


if( !class_exists('LED_SITE_INDICATOR_Help') ){

	class LED_SITE_INDICATOR_Help {

		/**
		 * Start up
		 */
		public function __construct(){
			add_action( 'load-settings_page_led-site-indicator-settings', array( $this, 'my_plugin_add_help' ) );
		}


		function my_plugin_add_help() {

			$screen = get_current_screen();
						
			$broker = '<h3>' . __( 'Setting up connection', 'led-site-indicator' ) . '</h3>';
			$broker .= '<p>';
			// $broker .= '<p>' . __( 'An MQTT broker is a server that distrubutes MQTT messages to subscribed devices.', 'led-site-indicator' ) . ' ';
			$broker .= __( "In order for LED-SITE-INDICATOR to connect to the online service, it needs the following information.", 'led-site-indicator' ) . '</p>';
			$broker .= '<ul>';
			// $broker .= '<li>' . __( 'URL ("ledmqtt.devsoft.co.za")', 'led-site-indicator' ) . '</li>';
			// $broker .= '<li>' . __( 'Port number (defaults to 1883)', 'led-site-indicator' ) . '</li>';
			// $broker .= '<li>' . __( 'QoS ("Quality of Service", defaults to 1)', 'led-site-indicator' ) . '</li>';
			// $broker .= '<li>' . __( 'Client ID (automatically generated - must be unique for each device that connects to a broker)', 'led-site-indicator' ) . '</li>';
			$broker .= '<li>' . __( 'Username (get this by signing up to the service)', 'led-site-indicator' ) . '</li>';
			$broker .= '<li>' . __( 'Password (generated when signing up to the service)', 'led-site-indicator' ) . '</li>';
			$broker .= '<li>' . __( 'Colour (the colour you want the LED to flash)', 'led-site-indicator' ) . '</li>';
			$broker .= '</ul>';
			$broker .= '<a href="https://ledindicator.devsoft.co.za/signup" target="_blank">' . __( 'Sign up for LED Site Indicator', 'led-site-indicator' ) . '</a><br />' ;
			$broker .= '<br> Already signed up? <a href="https://ledindicator.devsoft.co.za/profile" target="_blank">' . __( 'View your details here', 'led-site-indicator' ) . '</a><br />' ;

			$screen->add_help_tab( array( 'id' => 'mqtt-broker-help', 'title' => __( 'How to set up LED-SITE-INDICATOR', 'led-site-indicator' ), 'content' => $broker ));
			
			$events = '<h3>' . __( 'Common events', 'led-site-indicator' ) . '</h3>';
			$events .= '<p>' . __( 'This section allows you to set up messages for common WordPress events. Simply activate them using the checkbox and supply a subject and message.', 'led-site-indicator' ) . '</p>';
			$events .= '<ul>';
			$events .= '<li>' . __( 'Pageview (fires on each page view on the front end of your site)', 'led-site-indicator' ) . '</li>';
			$events .= '</ul>';

			// $screen->add_help_tab( array( 'id' => 'mqtt-events-help', 'title' => __( 'Common events', 'led-site-indicator' ), 'content' => $events ));

			// $placeholders = '<h3>' . __( 'Content placeholders', 'led-site-indicator' ) . '</h3>';
			// $placeholders .= '<p>' . __( 'Some common events support placeholders, that will be replace with actual content in the sent messages.', 'led-site-indicator' ) . '</p>';
			// $placeholders .= '<h4>' . __( 'Content placeholders for "Post published" and "Page published"', 'led-site-indicator' ) . '</h4>';
			// $placeholders .= '<ul>';
			// $placeholders .= '<li>' . __( "%POST_AUTHOR% (the post author's display name)", 'led-site-indicator' ) . '</li>';
			// $placeholders .= '<li>' . __( "%POST_TITLE% (the post's title)", 'led-site-indicator' ) . '</li>';
			// $placeholders .= '<li>' . __( "%POST_EXCERPT% (the post excerpt, if available)", 'led-site-indicator' ) . '</li>';
			// $placeholders .= '<li>' . __( "%POST_CONTENT% (full post content, could be rather long and usually contains HTML markup)", 'led-site-indicator' ) . '</li>';
			// $placeholders .= '<li>' . __( "%POST_TYPE% (the post's type)", 'led-site-indicator' ) . '</li>';
			// $placeholders .= '</ul>';
			// $placeholders .= '<h4>' . __( 'Content placeholders for "New Comment"', 'led-site-indicator' ) . '</h4>';
			// $placeholders .= '<ul>';
			// $placeholders .= '<li>' . __( "%COMMENT_AUTHOR% (the comment author's display name)", 'led-site-indicator' ) . '</li>';
			// $placeholders .= '<li>' . __( "%COMMENT_CONTENT% (the comment's content)", 'led-site-indicator' ) . '</li>';
			// $placeholders .= '</ul>';
			// $placeholders .= '<p>' . __( 'Need other placeholder? Please feel free to contact me.', 'led-site-indicator' ) . '</p>';

			// $screen->add_help_tab( array( 'id' => 'mqtt-placeholders-help', 'title' => __( 'Content placeholders', 'led-site-indicator' ), 'content' => $placeholders ));

			$about = '<h3>' . __( 'About LED-SITE-INDICATOR</h3>', 'led-site-indicator' ) . '</h3>';
			$about .= '<p>' . __( 'Connect WordPress to the Internet of Things. LED-SITE-INDICATOR allows you to automatically send MQTT messages to a connected LED when something happens on your WordPress website.', 'led-site-indicator' ) . '</p>';
			$about .= '<p>' . __( 'LED-SITE-INDICATOR is by Tom Hastings, adapted from WP-MQTT which was created by Roy Tanck and released under the GPL license.', 'led-site-indicator' ) . '</p>';

			$screen->add_help_tab( array( 'id' => 'mqtt-about', 'title' => __( 'About LED-SITE-INDICATOR', 'led-site-indicator' ), 'content'  => $about ));

			// Help sidebars are optional
			$screen->set_help_sidebar(
				'<p><strong>' . __( 'For more information:' ) . '</strong></p>' .
				'<a href="https://ledindicator.devsoft.co.za/learn" target="_blank">' . __( 'LED Site Indicator learning', 'led-site-indicator' ) . '</a><br />' .
				'<p><a href="http://wordpress.org/support/" target="_blank">' . __( 'WordPress Support Forums', 'led-site-indicator' ) . '</a><br />' 
				// '<a href="http://mqtt.org" target="_blank">' . __( 'MQTT.org', 'led-site-indicator' ) . '</a><br />' .
				// '<a href="http://mqtt.org/faq" target="_blank">' . __( 'MQTT.org FAQ', 'led-site-indicator' ) . '</a></p>'
			);
		}

	}
}

// create an instance
if( is_admin() ){
	$led_site_indicator_help_instance = new LED_SITE_INDICATOR_Help();
}

?>