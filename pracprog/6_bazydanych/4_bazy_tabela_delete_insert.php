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
      $sql = "SELECT users.id, users.name, users.surname, users.birthday, cities.city FROM `users` INNER JOIN `cities` ON users.cityid=cities.id";

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
          <th>Miasto</th>
          <th>Usuwanie</th>
        </tr>
TABLE;
      while ($row = $result->fetch_assoc()) {
        echo <<< ROW
        <tr>
          <td>$row[id]</td>
          <td>$row[name]</td>
          <td>$row[surname]</td>
          <td>$row[birthday]</td>
          <td>$row[city]</td>
          <td><a href="./scripts/delete.php?id=$row[id]">Usuń</a></td>
        </tr>
ROW;
      }
      echo "</table><br>";
      if (isset($_GET['error'])) {
        echo "<br>$_GET[error]<br>";
      }
      if (isset($_GET['addUser'])) {
        echo <<< FORMADDUSER
        <h3>Dodawanie Użytkownika</h3>
        <form action="./scripts/insert.php" method="post">
          <input type="text" name="name" placeholder="Podaj imię"><br><br>
          <input type="text" name="surname" placeholder="Podaj nazwisko"><br><br>
          <select name="cityid">
FORMADDUSER;
  $sql="SELECT * FROM `cities` ORDER BY `city`";
  $result=$connect->query($sql);
  while ($city=$result->fetch_assoc()){
    echo "<option value=\"$city[id]\">$city[city]</option>";
  }
        echo <<< FORMADDUSER
          </select><br><br>
          <input type="date" name="birthday">Data urodzenia<br><br>
          <input type="submit" value="Dodaj użytkownika"><br><br>
        </form>
FORMADDUSER;
      }else {
        echo '<a href="4_bazy_tabela_delete_insert.php?addUser=">Dodaj użytkownika</a>';
      }
     ?>

  </body>
</html>
