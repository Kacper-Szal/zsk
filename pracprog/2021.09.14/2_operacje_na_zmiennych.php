<?php
  echo PHP_VERSION; //8.0.10
  echo 2**10; //1024

  $x=1;
  $y=10;
  echo $x<=>$y;

  //równe
  $x=1;
  $y=1.0;

  echo gettype($x)."<br>"; //integer
  echo gettype($y); //double

  if ($x==$y) {
    echo "równe";
  }
  else {
    echo "różne";
  }

  //identyczne
  if ($x===$y) {
    echo "identyczne";
  }
  else {
    echo "różne";
  }

  /*
  preinkrementacja ++$x
  postinkrementacja $x++
  predekrementacja --$x
  postdekrementacja $x--
  */

  $x=5;
  $x=++$x;
  echo $x; //6
  $x=$x++;
  echo $x; //6
  $y=$x++;
  echo $y; //6
  echo $x; //7

  //zadanie
  $x=1;
  echo $x; //1
  $x=$x++;
  echo $x; //1
  $x=++$x;
  echo $x; //2
  $y=++$x;
  echo $x; //3
  echo $y; //3
  $y=$x++;
  echo $x; //4
  echo $y; //3
 ?>
