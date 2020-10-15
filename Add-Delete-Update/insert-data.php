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
           
         

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Bootstrap CRUD Data Table for Database with Modal Form</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="http://127.0.0.1/wordpress/wp-content/plugins/my-First-Plugin/styletwo.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>

</style>
<script>
$(document).ready(function(){
	// Activate tooltip
	$('[data-toggle="tooltip"]').tooltip();
	
	// Select/Deselect checkboxes
	var checkbox = $('table tbody input[type="checkbox"]');
	$("#selectAll").click(function(){
		if(this.checked){
			checkbox.each(function(){
				this.checked = true;                        
			});
		} else{
			checkbox.each(function(){
				this.checked = false;                        
			});
		} 
	});
	checkbox.click(function(){
		if(!this.checked){
			$("#selectAll").prop("checked", false);
		}
	});
});
</script>
</head>
<body>
<div class="container-xl">
	<div class="table-responsive">
		<div class="table-wrapper">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h2>Manage <b>Employees</b></h2>
					</div>
					<div class="col-sm-6">
						<a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add New Employee</span></a>
						<a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Delete</span></a>						
					</div>
				</div>
            </div>
            <form method="post">
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>
							<span class="custom-checkbox">
								<input type="checkbox" id="selectAll">
								<label for="selectAll"></label>
							</span>
                        </th>
                        <th>ID</th>
						<th>Name</th>
						<th>Last Name</th>
						<th>date</th>
					
						<th>Actions</th>
					</tr>
                </thead>
                

           
				<tbody>
                <?php foreach ($retrieve_data as $retrieved_data){ ?>
					<tr>
						<td>
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox1" name="options[]" value="1">
								<label for="checkbox1"></label>
							</span>
						</td>
						<td><?=$retrieved_data->id;?></td>
						<td><?=$retrieved_data->name;?></td>
						<td><?=$retrieved_data->lname;?></td>
						<td><?= $retrieved_data->date;?></td>
						<td>
							<a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                            <!--<a href="#deleteEmployeeModal" class="delete" data-toggle="modal" value=""><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                            <a href="#" id="del" class="delete"   ><i class="material-icons"  title="Delete">&#xE872;</i></a>-->
                      
                        <button   typbe ="submit" name="DELL" value="<?= $retrieved_data->id;?>" class="btn btn-danger btn-sm rounded-0"  data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
						</td>
					</tr>
					
                <?php }?>
            		
				</tbody>
            </table>
            </form>
		<!--	<div class="clearfix">
				<div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
				<ul class="pagination">
					<li class="page-item disabled"><a href="#">Previous</a></li>
					<li class="page-item active"><a href="#" class="page-link">1</a></li>
					<li class="page-item"><a href="#" class="page-link">2</a></li>
					<li class="page-item "><a href="#" class="page-link">3</a></li>
					<li class="page-item"><a href="#" class="page-link">4</a></li>
					<li class="page-item"><a href="#" class="page-link">5</a></li>
					<li class="page-item"><a href="#" class="page-link">Next</a></li>
				</ul>
			</div>
		</div>-->
	</div>        
</div>
<!-- Add Modal HTML -->

<div id="addEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form method="post">
				<div class="modal-header">						
					<h4 class="modal-title">Add Employee</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">	
                <div class="form-group">
						<label>ID</label>
						<input type="text" class="form-control" name="ID" >
					</div>				
					<div class="form-group">
						<label>Name</label>
						<input type="text" class="form-control"  name="Name" required>
					</div>
					<div class="form-group">
						<label>Last Name</label>
						<input  class="form-control"  name="Last" required>
					</div>
					<div class="form-group">
						<label>Date</label>
						<textarea class="form-control"   name="date" required></textarea>
					</div>
								
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="submit" name="salam" class="btn btn-success" value="Add">
				</div>
			</form>
		</div>
	</div>
</div>

<?php 
global $wpdb;
$table = $wpdb->prefix.'dirt';
    $ID=$_POST['ID'];
     
  if( isset($_POST['salam']) ){
    $name=$_POST['Name'];
    $Last=$_POST['Last'];
    $date=$_POST['date'];

      

      $wpdb->insert ( $table,
      array(
          'id'=>$ID,
          'name'=>$name,
          'lname'=> $Last,
          'date'=> $date
      ),
      array(
            '%d',
            '%s',
            '%s',
            '%s'

         )
      );
      $wpdb->query( "DELETE FROM $table WHERE id = 7 " );

      ?>  <script  >  window.location = window.location.href;
	  </script><?php
  }


  ?>
<!-- Edit Modal HTML -->
<div id="editEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form>
				<div class="modal-header">						
					<h4 class="modal-title">Edit Employee</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">
                <div class="form-group">
						<label>ID</label>
						<input type="text" class="form-control">
					</div>					
					<div class="form-group">
						<label>Name</label>
						<input type="text" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Last name</label>
						<input type="email" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Date</label>
						<textarea class="form-control" required></textarea>
					</div>
										
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="submit" class="btn btn-info" value="Save">
				</div>
			</form>
		</div>
	</div>
</div>
<!-- Delete Modal HTML
<div id="deleteEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form method="POST">
				<div class="modal-header">						
					<h4 class="modal-title">Delete Employee</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<p>Are you sure you want to delete these Records?</p>
					<p class="text-warning"><small>This action cannot be undone.</small></p>
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="submit" class="btn btn-danger" name="confDel" value="Delete">
				</div>
			</form>
		</div>
	</div>
</div> -->

<?php 

if (isset($_POST['DELL'])) {
    $id=$_POST['DELL']; 
   
	$wpdb->query( "DELETE FROM $table_name WHERE id = $id " );
	

?>  <script>
 window.location = window.location.href;
</script><?php

}

?>
<script>

$('.delete').click(function(){

if(confirm('Are you sure you want to delete this ?')){ 
   
}else {
    $(".delete").attr("href", "http://127.0.0.1/wordpress/wp-content/plugins/my-First-Plugin/delete.php?id=z");

}


});

</script>
</div>
</body>
</html>