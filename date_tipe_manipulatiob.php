<?php
    $title = 'Date';
    include 'includes/header.php' ?>
    <?php 
    $fecha_ahora = getdate();
     
      echo  'la fecha de hoy es ; ' .$fecha_ahora['mday']. ' / ' .$fecha_ahora['mon']. ' / ' .$fecha_ahora['year']. '<br/>' ;
    //   echo  time();

      ?>
      <?php
      print date("d/m/y G.i:s<br>", time()). '<br>';
      echo "<br>";
      print "Today's Date is ";
      print date("j of F Y, a\t g.i a", time());
      ?>

<?php  require 'includes/footer.php' ?>
</body>
</html>