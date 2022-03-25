<?php
    $title = 'Index';
 include 'includes/header.php'; ?>

    <?php 
        echo 'Hola mundo desde php';
        echo '<br>';
        echo 'Hola mundo desde php';
        $nombre = 'Juan';
        echo '<h3>My nombre es '.$nombre.'</h3>';
        echo  "<h4>Hola $nombre </h4>";
    $foo = "foobar";
    $bar = "barbaz";
    echo "<h4>foo is $foo</h4>"; 
    ?>
    <?php  require 'footer' ?>
</body>
</html>