<?php

/*
Plugin Name:  Mourning
Plugin URI:   https://chonable.com
Description:  Change your web to grayscale
Version:      01-oct-2017
Author:       Mai Chanchaemsri
Author URI:   https://chonable.com
License:      GPLv3
License URI:  https://www.gnu.org/licenses/quick-guide-gplv3.html
Text Domain:  mourning
Domain Path:  /languages
*/

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

function mourning_hook_css() {
    ?>
       <style>
            html {
                -moz-filter: grayscale(100%);
                -webkit-filter: grayscale(100%);
                filter: gray;
                filter: grayscale(100%);
            }
       </style>
    <?php
}
add_action('wp_head', 'mourning_hook_css');

?>