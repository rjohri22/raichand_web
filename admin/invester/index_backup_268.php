<?php include '../sidebar.php';
include("../../dbcon.php");?>
<?php
// include("config.php");

$sql = "SELECT * FROM invester_relation";
$result = mysqli_query($con, $sql);

?>
<div class="page-wrapper" style="min-height: 250px;">
    <div class="page-breadcrumb bg-white">
        <div class="row align-items-center">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Investor</h4>
            </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <div class="d-md-flex">
                    <ol class="breadcrumb ms-auto">
                        <li><a href="<?php echo SITE_URL;?>admin/" class="fw-normal">Dashboard &nbsp;/&nbsp;</a></li>
                        <li><a href="#" class="fw-normal">Investor</a></li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="white-box">
                    <div class="row">
                        <div class="col-md-6">
                            <h3 class="box-title">Investor</h3>
                        </div>
                        <div class="d-flex">
                            
                        <div class="col-md-6" align="left">
                            <a href="cindex.php"><button type="button" class="btn btn-primary btn-sm">CREATE</button></a>
                        </div>
                        <div class="col-md-6" align="right">
                            <a href="invester.php"><button type="button" class="btn btn-primary btn-sm">ADD</button></a>
                        </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-nowrap">
                            <thead>
								<tr>
									<th class="border-top-0">file_name</th>
									<th class="border-top-0">file_type</th>
									<th class="border-top-0">year</th>
									<th class="border-top-0">Bussiness name</th>
									<th class="border-top-0">invester_category</th>
									<th class="border-top-0">action</th>
								</tr>
                            </thead>
                            <tbody>
                            <?php if (mysqli_num_rows($result)>0)
			 {
				while ($row=mysqli_fetch_assoc($result))
				 {
					$folder = "image/".$row['file_type'];
			?>
			<tr>
				<td><?php echo $row['title'];?></td>
				<td><?php echo $row['file_type'];?></td>
				<td><?php echo $row['year'];?></td>
				<td><?php echo $row['bname'];?></td>
				<td><?php echo $row['invester_category'];?></td>
				 <td><a class="btn btn-danger" onclick="return confirm('are you sure?')" href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>
	</tr>
			</tr>
			<?php
		}
	}

			?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include '../footer.php';?>