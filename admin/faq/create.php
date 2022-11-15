<?php
include("../../dbcon.php");

$sql = "SELECT * FROM faq";

$result = $con->query($sql);

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>view page</title>
	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
           <style type="text/css">
                table, td, th {
              border: 1px solid black;
               }
               table{
                 width: 100%;
                border-collapse: collapse;
               }

            </style>
</head>
<body>
	<div class="container">
		 <div class=" col-md-12 mt-5 mb-3 text-right clearfix">
		 	<a href="index.php" class="btn btn-info pull-right"><i class="fa fa-plus">
		 	Add</a>
		 </div>
		<table class="table">
			<thead>
				<tr>
				<th>question</th>
				<th>answer</th>
				<th>tag</th>
				<th>action</th>
				</tr>
			</thead>
			<tbody>
						<?php if (mysqli_num_rows($result)>0)
							
						 {
						 	while ($row=mysqli_fetch_assoc($result)) 

						 	{						 		
						 		?>
						 		<tr>
						 			<td><?php echo $row['question']; ?></td>
						 			<td><?php echo $row['answer']; ?></td>
						 			<td><?php echo $row['tag']; ?></td>
						 			 <td><a class="btn btn-danger" onclick="return confirm('are you sure?')" href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>
						 		</tr>
						 		<?php 
						 	}
						 }
						 ?>
						</tbody>
					</table>
				</div>
			</body>
</html>