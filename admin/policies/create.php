<?php
// include ("config.php");
include("../../dbcon.php");


$bname= $title= $description= "";

if(isset($_POST['submit']))
{
    $bname = $_POST["bname"];
    $title = $_POST["title"];
    $description = $_POST["description"];
    $order_num = $_POST["order_num"];
        

        // Get all the submitted data from the form
        $sql = "INSERT INTO policies (bname,title,description,order_num) VALUES ('$bname','$title','$description',$order_num)";

        // Execute query
        $row = $con->query($sql);
        if ($row) {
            echo "data posted".$sql;
        }else
        {

            echo "data not posted".$sql;
        }
    }
    
?>

<!DOCTYPE html>
<html>

<head>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<title>policies</title>
<link rel="stylesheet" type= "text/css" href ="style.css"/>
</head>
<body>
<form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" enctype="multipart/form-data">
    <div class="container" style="margin-bottom:20px;">
<div id="content">
    <div class="row">
        <div class="col-md-8">
    <label for="bname"> Business name:</label><br>
     <input type="text"  class= "form-control" name="bname" > <br>
    <label for="title"> Title:</label><br>
     <input type="text" class="form-control" name="title" > <br>
      <label for="description"> Description:</label><br>
      <textarea class="form-control" id="description" rows="3"></textarea><br>
      <label for="title"> Order Number:</label><br>
     <input type="number" class="form-control" name="order_num" > <br>
     <button type="button" class="btn btn-success">Submit</button>
      </div>
  </div>
</div>
</div>
</form>
</body>
</html>
