<?php 
$title = 'condicion if';
include 'includes/header.php'; ?>

    <?php 
      $grade = 50;
      $clase;
      $permiso;
      if($grade < 100) {
        //   echo "$grade < 100";
        $clase = 'green';
        $permiso = '';
    }else{
        $clase = 'red';
        $permiso = 'No';
    }
    echo '<h3 class='.$clase.'>'.$permiso.' puede pasar</h3>';
    ?>
    <?php  require 'includes/footer.php' ?>
</body>
</html>