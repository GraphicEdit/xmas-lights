<?php
/*
Plugin Name: Xmas Lights
Plugin URI: http://graphicedit.com/blog/plugin/xmas-lights/
Description: This plugin adds Xmas Lights.
Version: 1.0.1
Author: GraphicEdit
Author URI: http://www.graphicedit.com/

	Copyright 2011  GraphicEdit  (email : contact@graphicedit.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/


function xmas_lights() {
?>

<!-- xmas_lights [ start ] -->
<script type="text/javascript">
document.write("<div id='lights' style='position:absolute;width:956px;height:180px;top:-20px;background:url(<?php echo plugins_url() . '/xmas-lights/'; ?>light.png) no-repeat;left:50%;margin-left:-478px'></div>")

setInterval( "xmasLights();", 1000 );
var lights = "active";
function xmasLights(){
	var img = document.getElementById('lights');
	if(lights == "active"){
		img.style.backgroundPosition = "0 -180px";
		lights = "inactive";
	}else{
		img.style.backgroundPosition = "";
		lights = "active";
	}
} 
</script>
<!-- xmas_lights [ end ] -->
<?php   
}


//////////////////
/////////////////
add_action('wp_footer','xmas_lights'); 

?>