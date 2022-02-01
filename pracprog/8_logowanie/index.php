<?php
session_start();
 ?>
<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Rejestracja</title>
  </head>
  <body>
    <h3>Rejestracja użytkownika</h3>
    <?php
      if (isset($_SESSION['error'])) {
        echo $_SESSION['error'];
        unset($_SESSION['error']);
      }
     ?>
    <form action="./scripts/register.php" method="post">
      <input type="text" name="name" placeholder="Podaj imię"><br>
      <input type="text" name="surname" placeholder="Podaj nazwisko"><br>
      <input type="email" name="email1" placeholder="Podaj email"><br>
      <input type="email" name="email2" placeholder="Powtórz email"><br>
      <input type="password" name="pass1" placeholder="Podaj haslo"><br>
      <input type="password" name="pass2" placeholder="Powtórz haslo"><br>
      <input type="date" name="birthday"> Data urodzenia <br>
      <input type="submit" value="zarejestruj użutkownika">
    </form>
  </body>
</html>
