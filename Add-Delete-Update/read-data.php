<?php
global $wpdb;
// this adds the prefix which is set by the user upon instillation of wordpress
$table_name = $wpdb->prefix . "dirt"; 
// this will get the data from your table
$retrieve_data = $wpdb->get_results( "SELECT * FROM $table_name " );
?>
            <h3 class="ui top attached center aligned center aligned header"  style="margin-top:10px" >
            Report
            </h3>
            <div class="ui attached segment">
            <table class="ui celled table" style="width:1000px;margin-left:5%">
            <thead>
            <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Familly Name</th>
            <th>Date</th>
            </tr></thead>
            <tbody>

            <?php foreach ($retrieve_data as $retrieved_data){ ?>
                <tr>
                <td data-label="Name"><?= $retrieved_data->id;?></td>
                <td data-label="Age"><?= $retrieved_data->name;?></td>
                <td data-label="Age"><?= $retrieved_data->lname;?></td>
                <td data-label="Age"><?= $retrieved_data->date;?></td>
               

            </tr> 
            <?php 
            }

            ?>
            </tbody>
            </table>

            </div>





