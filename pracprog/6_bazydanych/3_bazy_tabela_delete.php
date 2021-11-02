<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Użytkownicy</title>
    <link rel="stylesheet" href="./css/style.css">
  </head>
  <body>
    <h4>Użytkownicy</h4>
    <?php
      require_once './scripts/connect.php';
      $sql = "SELECT * FROM `users`;";

      $result = $connect->query($sql);
      //$row = $result->fetch_assoc();
      //print_r($row);

      if (isset($_GET['deleteUser'])) {
        echo "prawidłowe usunięcie użytkownika o id: ".$_GET['deleteUser']."<hr>";
      }
      echo '<br>';
      echo <<< TABLE
      <table>
        <tr>
          <th>Id</th>
          <th>Imię</th>
          <th>Nazwisko</th>
          <th>Data urodzenia</th>
        </tr>
TABLE;
      while ($row = $result->fetch_assoc()) {
        echo <<< ROW
        <tr>
          <td>$row[id]</td>
          <td>$row[name]</td>
          <td>$row[surname]</td>
          <td>$row[birthday]</td>
          <td><a href="./scripts/delete.php?id=$row[id]">Usuń</a></td>
        </tr>
ROW;
      }
      echo "</table>";
     ?>
  </body>
</html>
