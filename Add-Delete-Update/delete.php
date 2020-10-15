<?php
$id=$_GET['id'];
//echo $id ;

global $wpdb;
// this adds the prefix which is set by the user upon instillation of wordpress
$table_name = $wpdb->prefix . "dirt"; 
// this will get the data from your table
//$retrieve_data = $wpdb->get_results( "SELECT * FROM $table_name " );

           
      $wpdb->query( "DELETE FROM $table_name WHERE id = 7 " );

  ?>