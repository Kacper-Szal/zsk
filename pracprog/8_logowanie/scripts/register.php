<?php
  // sesja z errorem
  session_start();
  //sprawdzanie formularza
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
  //szyfrowanie hasla
  $pass = password_hash($_POST['pass1'], PASSWORD_ARGON2ID);

  require_once './connect.php';
  //prepared statement
  $stmt = $connect->prepare("INSERT INTO `users` (`name`, `surname`, `email`, `password`, `birthday`) VALUES (?, ?, ?, ?, ?);");
  $stmt->bind_param("sssss", $_POST['name'], $_POST['surname'], $_POST['email1'], $pass, $_POST['birthday']);
  $stmt->execute();

  //sprawdzanie czy dodano do bazy
  if (mysqli_affected_rows($connect)==1) {
    $_SESSION['error'] = 'pomyślnie zarejestrowano użytkownika o adresie email: '.$_POST['email1'];
  }else {
    $_SESSION['error'] = 'nie zarejestrowano użytkownika';
  }

  //powrót do index.php
  header("location: ./../index.php");
 ?>
