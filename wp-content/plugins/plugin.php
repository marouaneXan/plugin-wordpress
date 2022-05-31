<?php

/*
Plugin Name: Simple Contact Form
Description: A simple contact form
Author: Zineb Masioub
Version: 1.0
*/

function contact_table()
{
    global $wpdb;
    $table_name = $wpdb->prefix . 'plugin';
    $wpdb_collate = $wpdb->get_charset_collate();
    $sql =
        "CREATE TABLE $table_name (
             id mediumint(11) unsigned NOT NULL auto_increment ,
             full_name varchar(255) NULL,
             email varchar(255) NULL,
             subject varchar(255) NULL,
             message varchar(255) NULL,
             PRIMARY KEY  (id)
             )
             COLLATE {$wpdb_collate}";

    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);
}

register_activation_hook(__FILE__, 'contact_table');

function plugin_menu()
{
    add_menu_page('Plugin', 'Contact Form', 'MyPlugin', 'manage_options', './icons/email.png');

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
