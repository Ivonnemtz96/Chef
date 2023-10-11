<?php 
  include('backend/indexcontroller.php');
?>
<!DOCTYPE html>
<html lang="en">
<?php
    include('includes/head.php');
    include('includes/metricas.php');
?>
<?
if (isset($_GET)) {
  include_once("php/msg.php");
}
?>

<body class="hidden-bar-wrapper">
    <?
    include('includes/metricasBody.php');
    ?>
    <div class="page-wrapper">
        <?php
            include('includes/preloader.php');
            include('modules/'.$lenguaje.'/header.php');
            include('modules/'.$lenguaje.'/index.php');
            include('modules/'.$lenguaje.'/footer.php');
            
        ?>
    </div>
    <?
        include('includes/scripts.php');
        include('includes/redes.php');   
    ?>

</body>

</html>