<?php
//wypełnoine pola
// sesja z errorem
session_start();
  foreach ($_POST as $key => $value) {
    if (empty($value)) {
      $_SESSION['error'] = "Wypełnij wszystkie pola np. ".$key;
      echo "<script>history.back();</script>";
      exit();
    }
  }
  if ($_POST['email1']!=$_POST['email2']) {
    $_SESSION['error'] = 'błędny email';
    echo "<script>history.back();</script>";
    exit();
  }
  if ($_POST['pass1']!=$_POST['pass2']) {
    $_SESSION['error'] = 'błędne haslo';
    echo "<script>history.back();</script>";
    exit();
  }

  $date = date('Y-m-d H:i:s');
  $connect = new mysqli("localhost","root","","rejestracja");
  $stmt = $connect->prepare("INSERT INTO `users` (`name`, `surname`, `email`, `password`, `birthday`, `created_at`) VALUES (?, ?, ?, ?, ?, ?);");
  $stmt->bind_param("ssssss", $_POST['name'], $_POST['surname'], $_POST['email1'], $_POST['pass1'], $_POST['birthday'], $date);
  $stmt->execute();
  echo "ok";
 ?>
