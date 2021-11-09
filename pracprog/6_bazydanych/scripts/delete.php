<?php
  // połączenie
  //wysłać zapytanie do db (wykorzystać tablice get $_GET['id'])
  //sprawdzić czy usunęło record (offected_rows)

  require_once './connect.php';
  if ($_GET['id']) {
    $id=$_GET['id'];
    $del= "DELETE FROM `users` WHERE `users`.`id` = $_GET[id]";
    $connect->query($del);
    if ($connect->affected_rows) {
      // header("location: ../3_bazy_tabela_delete.php?deleteUser=$id");
      header("location: ../4_bazy_tabela_delete_insert.php?deleteUser=$id");
    } else {
      echo "nie usunięto rekordu";
    }
  } else{
    header('location: ../3_bazy_tabela_delete.php');
  }

 ?>
