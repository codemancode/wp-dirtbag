<?php
/*
Plugin Name: Dirtbag
Plugin URI: http://URI_Of_Page_Describing_Plugin_and_Updates
Description: A Wordpress plugin to add, edit, remove and update real estate listings
Version:0.1
Author: Matthew McFarling
Author URI: http://codemancode.com
License: A "Slug" license name e.g. GPL2

Copyright 2012 Matthew McFarling (email : matt@codemancode.com)

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License, version 2, as 
published by the Free Software Foundation.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA 
*/

add_action('admin_menu', 'dirtbag_menu');

function dirtbag_menu() {
  add_menu_page('Dirtbag Options', 'Dirtbag', 'administrator', 'manage_options', 'plugin_options');
}

function plugin_options() {
  if (!current_user_can('manage_options')) {
    wp_die(__("You do not have sufficient permissions to access this page."));
  }
  echo "<h2>Plugin stuff goes here.</h2>";
}
?>