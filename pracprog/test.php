<?php
  echo "ZSK<br>";
  echo "ZSK<br>";

  //duplikowanie linii ctrl+shift+d

  $name="Janusz";
  echo 'Imię: $name<br>'; //imię: $name
  echo "Imię: $name<br>"; //imię: $name

  //typy danych
  //całkowity

  $całkowita=10; //polskie znaki w nazwach zmiennych
  $bin=0b1011; //11
  $oct=011; //9
  $hex=0xA;

  echo $bin;
  echo $oct;

  //konkatenacja
  echo "text1"."text2"."<br>";

  //interpolacja
  echo "text1","text2","<br>";

  //typ zmiennoprzecinkowy
  $x=10.5;

  //logiczny
  $prawda=true; //1
  $falsz=false; //nic nie wyświetli

  echo $falsz;

  //składnia heredoc
  echo <<<ETYKIETA
  <hr>
  imię: $name<br>
  <h3>Poznań</h3>
  <hr>
  ETYKIETA;

  echo <<<ETYKIETA
  <hr>
  imię: $name<br>
  <h3>Poznań</h3>
  <hr>
  ETYKIETA;

  //nowdoc
  echo <<<'ETYKIETA'
  <hr>
  imię: $name<br>
  <h3>Poznań</h3>
  <hr>
  ETYKIETA;

  echo "Wartość zmiennej name: $name, nazwa zmiennej name: \$name";
  
 ?>
