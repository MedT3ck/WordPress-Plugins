<?php

/**
 * Plugin Name:       T3ck
 * Plugin URI:        http://127.0.0.1/wordpress/wp-admin/plugins.php
 * Description:       WP-plugin.
 * Version:           1.0.0
 * Author:            T3ck
 * Author URI:        https://github.com/MedT3ck
 * License:           GPL v2 or later
 * */

function AddBootstrap (){

    wp_enqueue_style('demo-include','https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.13/semantic.min.css');
    wp_enqueue_style('demo-include1','https://cdn.datatables.net/1.10.16/css/dataTables.semanticui.min.css'); 
    wp_enqueue_style('demo-include2','https://cdn.datatables.net/buttons/1.5.1/css/buttons.semanticui.min.css');
    wp_enqueue_script('demo-include3','https://code.jquery.com/jquery-3.3.1.js'); 
    wp_enqueue_script('demo-include4','https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js'); 
    wp_enqueue_script('demo-include5','https://cdn.datatables.net/1.10.16/js/dataTables.semanticui.min.js'); 
    wp_enqueue_script('demo-include6','https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js');
    wp_enqueue_script('demo-include7','https://cdn.datatables.net/buttons/1.5.1/js/buttons.semanticui.min.js');
    wp_enqueue_script('demo-include8','https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js'); 
    wp_enqueue_script('demo-include9','https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js'); 
    wp_enqueue_script('demo-include10','https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js'); 
    wp_enqueue_script('demo-include11','https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js'); 
    wp_enqueue_script('demo-include12','https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js');
    wp_enqueue_script('demo-include13','https://cdn.datatables.net/buttons/1.5.1/js/buttons.colVis.min.js');
    wp_enqueue_script('demo-include14','https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/semantic.min.js');
    wp_enqueue_script('demo-include15','https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/components/dropdown.min.js'); 
               
}
add_action('wp_enqueue_scripts','AddBootstrap');


        function ReadFromTable() {
            include_once('read-data.php');
             
                  // return $well;
        }
        add_shortcode('insertMe','ReadFromTable');
        

        function InsertIntoTable() {
            include_once('insert-data.php');                             
        }
        add_shortcode('insertMeTwo','InsertIntoTable');
         
    



function MenuMeNow(){
add_menu_page('DIRTY','SideScript','manage_options','MyMenu','Script_page','',200);

}
add_action('admin_menu','MenuMeNow');

function Script_page (){

    include_once('insert-data.php');
}



 ?>