<?php
// session_start();
include('../header.php');
session_destroy();
// header('location:'.SITE_URL.'login.php');
?>
        <?php
        echo "<script>window.location.href='" . SITE_URL . "login.php';</script>";
        exit;
        ?>
<?php
