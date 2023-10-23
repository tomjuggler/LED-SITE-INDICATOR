=== LED-SITE-INDICATOR ===
Contributors: tomjuggler
Tags: MQTT, IoT, internet-of-things
Requires at least: 4.4
Tested up to: 6.3.1
Stable tag: 2.0.2
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

LED-SITE-INDICATOR connects WordPress to the LED Website Indicator IOT device. 


== Description == 
 
Setting up LED-SITE-INDICATOR is easy. Just use the settings screen to input your account details and your IOT LED should start flashing. 

Requires a free account sign-up at https://ledindicator.devsoft.co.za


= Credits =
* Based on original WP-MQTT plugin by roytanck: https://github.com/roytanck/WP-MQTT
* Created by Tom Hastings: https://devsoft.co.za
* Hardware by EnterAction: https://enteraction.com.au

== Installation ==

1. Upload the plugin files to the `/wp-content/plugins/led-site-indicator` directory, or install the plugin through the WordPress plugins screen directly.
2. Activate the plugin through the 'Plugins' screen in WordPress
3. Use the Settings->LED-SITE-INDICATOR screen to input your password, username and the colour you want the LED to flash

Colours to choose from are LED, RED, GREEN, BLUE, CYAN, MAGENTA and YELLOW. LED is for free version only - see https://ledindicator.devsoft.co.za/learn for more details. 

== Frequently Asked Questions ==



== Changelog ==
= 2.0.2 =
2023-10-23
Updated Settings.
Updated Screenshot.
Removed more old unused MQTT code. 

= 2.0 =
2023-10-12
Removed phpMQTT dependency due to some WordPress servers blocking port 1883
Now using http requests instead of MQTT. MQTT is handled on the LED WebSite Indicator server instead.

= 1.3.2 = 
2023-01-05
Updated to PHP8

= 1.2 =
2022-01-06
Updated some images and some readme notes

= 1.1 =
2021-10-01
Forked and adapted to use the LED Site Indicator service, for use with connected ESP8266 hardware
Many thanks to roytanck for sharing the plugin as GPL

= 1.0 =
2018-01-08
Adds two filter hooks so developers can modify the subject and/or message.

= 0.9 =
Initial version.
