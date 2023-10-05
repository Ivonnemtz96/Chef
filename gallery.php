<!DOCTYPE html>
<html lang="en">
<?php
    include('includes/head.php');
?>
<?
if (isset($_GET)) {
  include_once("php/msg.php");
}
?>
<body class="hidden-bar-wrapper">
    <div class="page-wrapper">
        <?php
            include('includes/preloader.php');
            include('includes/header.php');
            include('modules/gallery.php');
            include('includes/footer.php');
            
        ?>
    </div>
    <?
        include('includes/scripts.php');
        include('includes/redes.php');   
    ?>

</body>

</html>