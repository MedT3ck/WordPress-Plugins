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
           
         

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="http://127.0.0.1/wordpress/wp-content/plugins/my-First-Plugin/style.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>

</style>
<script>
$(document).ready(function(){
	$('[data-toggle="tooltip"]').tooltip();
});
</script>
</head>
<body>
<div class="container-fluid">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-5">
                        <h2>User <b>Management</b></h2>
                    </div>
                    <div class="col-sm-7">
                        <a href="#" class="btn btn-secondary"><i class="material-icons">&#xE147;</i> <span>Add New User</span></a>
                        <a href="#" class="btn btn-secondary"><i class="material-icons">&#xE24D;</i> <span>Export to Excel</span></a>						
                    </div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>	
                        <th>Lname</th>					
                        <th>Date Created</th>                       
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                         

                    <?php foreach ($retrieve_data as $retrieved_data){ ?>
                <tr>


                <td data-label="Name"><?=$retrieved_data->id;?></td>
                <td><a href="#"><img src="wp-content/uploads/2020/09/25497478040_140ce47f31_k.jpg" class="avatar" alt="Avatar"><?= $retrieved_data->name; ?></a></td>
                <td data-label="Age"><?= $retrieved_data->lname;?></td>
                <td data-label="Age"><?= $retrieved_data->date;?></td>
                <td><span class="status text-success">&bull;</span> Active</td>
                <td>
                          
                            <a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                            <a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                        </td>

            </tr> 
            <?php 
            }
            ?>
                </tbody>
            </table>
           
        </div>
    </div>
</div>     
</body>
</html>
            </div>





