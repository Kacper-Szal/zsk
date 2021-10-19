<?php
  function show(){
    echo "SHOW<br>";
  }

  function show1($name){
    return $name;
  }

/*
  zdefiniuj funkcje o nazwie stringValidate, która wykona następujące działania:
  1) usunie białe znaki (trim)
  2) zamieni pierwszą litere na dużą (ucfirst)
  3) od drugiej litery małe znaki (strtolower)
  4) drugi parametr będzie określał długość stringa (substr)
  długość stringa: strlen()
*/
  function stringValidate($name, $len){
    return substr(ucfirst(strtolower(trim($name))), 0, $len);
  }
 ?>
