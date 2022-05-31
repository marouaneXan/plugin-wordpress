<?php
/*
 Plugin Name: Contact Form
 description: pluign to create a contact form
 Version: 1.0.0
 Author: Zineb Masioub */

defined('ABSPATH') or die('Hey, you can\t access this file, you silly human!');


function on_activation()
{

  global $wpdb;
  $charset_collate = $wpdb->get_charset_collate();

  $tablename = $wpdb->prefix . "plugin";

  $sql = "CREATE TABLE $tablename (
  id mediumint(11) NOT NULL AUTO_INCREMENT,
  email varchar(80) NOT NULL,
  subject varchar(180) NOT NULL,
  message varchar(280) NOT NULL,
  PRIMARY KEY  (id)
  ) $charset_collate;";

  require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
  dbDelta($sql);

}
register_activation_hook(__FILE__, 'on_activation');

function plugin_menu()
{

  add_menu_page("my plugin", "Contact Form", "MyPlugin", "manage_options", "./icons/Circle-icons-contacts.svg.png");


  add_submenu_page("manage_options", "All Mesages", "All messages", 4, "All messages", "MessagesList");
  add_submenu_page("manage_options", "Message", "Message", 4, "Message", "addMessage");
  add_submenu_page("manage_options", "settings", "settings", 4, "settings", "settings");
}
add_action("admin_menu", "plugin_menu");

function MessagesList()
{
  include "Messages.php";
}

function addMessage()
{
  include "addMessage.php";
}
function settings()
{
  include "settings.php";
}
add_shortcode('contact', 'addMessage');

function on_deactivation()
{

  global $wpdb;

  $tablename = $wpdb->prefix . "plugin";

  $sql = "Drop TABLE IF EXISTS $tablename;";

  $wpdb->query($sql);

}

register_deactivation_hook( __FILE__, 'on_deactivation' );