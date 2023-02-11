<?php

/**
 * Plugin Name:       Dynamic Backdrop
 * Plugin URI:        https://wordpress.org/plugins/dynamic-backdrop/
 * Description:       This plugin changes website Background Color with time.
 * Version:           1.0.0
 * Tested Up to:      6.1.1
 * Author:            Mehraz Morshed
 * Author URI:        https://profiles.wordpress.org/mehrazmorshed/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       dynamicbg
 */

/**
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.

 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <https://www.gnu.org/licenses/>.
 */

// dynamic background
function dynamicbg() {
	?>
	<!DOCTYPE html>
	<html>
	<script>
		var now = new Date();
		var hours = now.getHours();
		document.bgColor="#000000";
		if (hours > 5 && hours < 9){
			document.write ('<body style="background-color:#e7d8f7">');
		}
		else if (hours > 7 && hours < 11){
			document.write ('<body style="background-color:#ffea00">');
		}
		else if (hours > 9 && hours < 13){
			document.write ('<body style="background-color:#ffdd00">');
		}
		else if (hours > 11 && hours < 15){
			document.write ('<body style="background-color:#ffd000">');
		}
		else if (hours > 13 && hours < 17){
			document.write ('<body style="background-color:#ffc300">');
		}
		else if (hours > 15 && hours < 19){
			document.write ('<body style="background-color:#ffb700;">');
		}
		else if (hours > 17 && hours < 21){
			document.write ('<body style="background-color:#ffaa00;">');
		}
		else if (hours > 19 && hours < 23){
			document.write ('<body style="background-color:#ffa200;">');
		}
		else if (hours > 21 && hours < 1){
			document.write ('<body style="background-color:#ff9500;">');
		}
		else if (hours > 23 && hours < 3){
			document.write ('<body style="background-color:#ff8800;">');
		}
		else if (hours > 1 && hours < 5){
			document.write ('<body style="background-color:#ff7b00;">');
		}
		else if (hours > 3 && hours < 7){
			document.write ('<body style="background-color:#e85d04;">');
		}
		else {
			document.write ('<body style="background-color:#000000">');
		}
	</script>
	</html>
	<?php
}
add_action('wp_head', 'dynamicbg');
?>
