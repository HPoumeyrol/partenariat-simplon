<?php
/*
Plugin Name: Simplon Partenaria
Plugin URI: http://zero-plugin.com
Description: Un plugin pour afficher un partenaria avec Simplon Co
Version: 0.1
Author: HPO
Author URI: http://votre-site.com
License: GPL2
*/

function SimplonParteneriaShortcode() {
	return '<p style="font-style:italic; color:#4A4A4A;">La publication de cet article est possible grâce à mon super partenaire <a href="https://simplon.co/">simplon.co</a> - une entreprise de
l’économie sociale et solidaire et un réseau de « fabriques » (écoles) qui propose
des formations GRATUITES pour devenir développeur web.</p>';
}
add_shortcode('SimplonParteneriat', 'SimplonParteneriaShortcode');

