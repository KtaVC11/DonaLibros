<?php
/*
Plugin Name: Donalibros
Description: Plugin para dotar una funcionalidad a la aplicacion de Donalibros
Version: 0.1.0
Author: Katalina Viquez
Text domain: donalibros-plugin
*/

defined('ABSPATH') or die;

//funcionalidad para a;adir rol customizado "donante"
function pda_add_donante_role(){
	add_role( 'donante', 'Donante', array(
'read'=> true,
'edit_post' => true,
'remove' => true,
'delete_published_post' => true,
'publish_posts'=>true,
'upload_files'=> true,
'edit_published_posts'=> true
	));
}

function pda_remove_donante_role(){
    remove_role('donante');
}

//para que se ejecute solo cuando inicia wordpress
//add_action('init','pda_add_donante_role');
//add_action('init','pda_remove_donante_role');

register_activation_hook(__FILE__,'pda_add_donante_role ');
register_deactivation_hook(__FILE__,'pda_remove_donante_role ');