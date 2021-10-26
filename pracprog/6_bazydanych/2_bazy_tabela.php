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
      $connect = new mysqli("localhost","root","","zsk_4bg2_baza1");
      $sql = "SELECT * FROM `users`;";

      $result = $connect->query($sql);
      //$row = $result->fetch_assoc();
      //print_r($row);
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
        </tr>
ROW;
      }
      echo "</table>";
     ?>
  </body>
</html>
