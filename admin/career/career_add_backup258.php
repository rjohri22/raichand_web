<?php include '../sidebar.php'; ?>

<!-- CDN for CKeditor -->
<!-- <script src="https://cdn.ckeditor.com/ckeditor5/10.0.1/classic/ckeditor.js"></script> -->

<div class="page-wrapper" style="min-height: 250px;">
    <div class="page-breadcrumb bg-white">
        <div class="row align-items-center">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Career</h4>
            </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <div class="d-md-flex">
                    <ol class="breadcrumb ms-auto">
                        <li><a href="http://local.raichandgroup.com/admin/" class="fw-normal">Dashboard &nbsp;/&nbsp;</a></li>
                        <li><a href="#" class="fw-normal">Career</a></li>
                    </ol>
                </div>
            </div>
        </div>
     </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="white-box">
                    <div class="row">
                        <div class="col-md-6">
                            <h3 class="box-title">Career</h3>
                        </div>
                        <div class="d-flex">

                            <!-- ================ ADD Form START =================================== -->

                            <form method="post" action="data_add_db.php" enctype="multipart/form-data" class="form-horizontal">

                            <div class="form-group mb-4">
                                <label class="col-md-12 p-0" for="title"> Role</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <input type="text" class="form-control p-0 border-0" name="role" id="title" >
                                </div>
                            </div> 

                            

                            
                            <div class="form-group mb-4">
                                <div class="col-sm-12">
                                <input type="submit" class="btn btn-success "name="submit" id="submit" value="Submit">
                                </div>
                            </div>
                        </form>
                            <!-- ============= ADD Form END ========================================== -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    CKEDITOR.replace('content');
   // var desc = CKEDITOR.instances['content'].getData();
</script>








