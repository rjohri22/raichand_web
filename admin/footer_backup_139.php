 <!-- footer -->
 <!-- ============================================================== -->
 <footer class="footer text-center">
     <div class="copyright">© 2022 All rights reserved. RAICHAND and its logo are
         trademarks of The Raichand Group.
     </div>
 </footer>
 <!-- ============================================================== -->
 <!-- End footer -->
 <!-- ============================================================== -->
 </div>
 <!-- ============================================================== -->
 <!-- End Page wrapper  -->
 <!-- ============================================================== -->
 </div>
 <!-- ============================================================== -->
 <!-- End Wrapper -->
 <!-- ============================================================== -->
 <!-- ============================================================== -->
 <!-- All Jquery -->
 <!-- ============================================================== -->
 <script src="/admin/plugins/bower_components/jquery/dist/jquery.min.js"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
 <!-- Bootstrap tether Core JavaScript -->
 <script src="/admin/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
 <script src="/admin/js/app-style-switcher.js"></script>
 <!--Wave Effects -->
 <script src="/admin/js/waves.js"></script>
 <!--Menu sidebar -->
 <script src="/admin/js/sidebarmenu.js"></script>
 <!--Custom JavaScript -->
 <script src="/admin/js/custom.js"></script>
 <!-- <script src="../js/tinymce/js/tinymce/tinymce.min.js"></script> -->
 <!-- <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script> -->
 <!-- <script src="//cdnjs.cloudflare.com/ajax/libs/tinymce/4.5.1/tinymce.min.js"></script> -->
 <!-- <script>tinymce.init({ selector:'textarea' });</script> -->
 <!-- Modify 24/8/2022 start -->
 <script>
     $('input[type="text"],textarea, select').attr('required', true);
 </script>
 <script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>
 <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
 <!-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> -->
 <!-- <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script> -->
 <!-- <script src="sweetalert2.min.js"></script> -->
 </body>
 <script src="/admin/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


 <script>
     // code for showing success alert after inserting data successfully in admin panel and login successfully
     // START------------------------------
     function setSuccessAlert($redirectURL = "false", $short_msg, $message, $type = 'success') {
         Swal.fire(
             $short_msg,
             $message,
             $type
         ).then(function() {
             if ($redirectURL !== "false") {
                 window.location = $redirectURL;
             }
         });
     };
     //END--------------------------------------

     // code for showing conformation alert for deleting data successfully in admin panel 
     //START---------------------------------------
     function setdltAlert($url) {
         Swal.fire({
             title: 'Are you sure?',
             text: "You won't be able to revert this!",
             icon: 'warning',
             showCancelButton: true,
             confirmButtonColor: '#3085d6',
             cancelButtonColor: '#d33',
             confirmButtonText: 'Yes, delete it!'
         }).then((result) => {
             if (result.isConfirmed) {
                 // Swal.fire(
                 // $short_msg,
                 // $message,
                 // 'success'
                 // ).then(function() {
                 window.location = $url;
                 //  });
             }
         })
     }
    // END--------------------------------------



     //     Swal.fire({
     //   icon: 'error',
     //   title: 'Oops...',
     //   text: 'Something went wrong!',
     //   footer: '<a href="">Why do I have this issue?</a>'
     // })
     //     function setdltAlert($redirectURL,$short_msg,$message) {

     // Swal.fire({
     // title: 'Are you sure?',
     // text: "You won't be able to revert this!",
     // icon: 'warning',
     // showCancelButton: true,
     // confirmButtonColor: '#3085d6',
     // cancelButtonColor: '#d33',
     // confirmButtonText: 'Yes, delete it!'
     // }).then((result) => {
     // if (result.isConfirmed) {
     //     Swal.fire(
     //     $short_msg,
     //     $message,
     //     'success'
     //     ).then(function() {
     //      window.location = $redirectURL;
     //  });
     // }
     // })
     // }
 </script>

 </html>