<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Średni wiek</title>
  </head>
  <body>
    <?php
      if (empty($_POST['person']) && !isset($_POST['buttonAvg'])) {
        echo <<< FORMULARZILEOSOB
        <h3>Ilość osób w rodzinie</h3>
        <form method="post">
          <input type="number" name="person" placeholder="Podaj ilość osób"><br><br>
          <input type="submit" value="Zatwierdź">
        </form>
FORMULARZILEOSOB;
      }

      if (!empty($_POST['person'])) {
      echo "<h3>Ilość osób w rodzinie: $_POST[person] </h3>";
      echo <<< FORMULARZWIEK
      <form method="post">
FORMULARZWIEK;
      for ($i=1; $i <= $_POST['person']; $i++) {
        echo "<input type='number' name='person$i' placeholder='Podaj wiek osoby $i'><br><br>";
      }
      echo <<< FORMULARZWIEK
        <input type="submit" name="buttonAvg" value="Zatwierdź">
      </form>
FORMULARZWIEK;
      }

      if (isset($_POST['buttonAvg'])) {
        // print_r($_POST)
        $avg=0;
        $count=0;
        foreach ($_POST as $key => $value) {
          //echo "$key: $value<br>";
          if ($key != 'buttonAvg') {
            $avg += $value;
            $count++;
          }
        }
        echo "Średni wiek: ".number_format($avg/$count, 2)."lat<hr>";
        echo '<a href="./form.php">Strona Główna</a>';
      }
     ?>
  </body>
</html>
