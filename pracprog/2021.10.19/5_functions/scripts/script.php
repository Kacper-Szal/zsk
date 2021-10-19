<?php

  require_once '../functions/function.php';
  show();

  if (!empty($_POST['name'])) {
    echo show1($_POST['name']);
    echo '<hr>'.stringValidate("  Janusz ", 3).", Długość zmiennej: ".strlen(stringValidate("  Janusz ", 3)).'<br>';
  }
 ?>
