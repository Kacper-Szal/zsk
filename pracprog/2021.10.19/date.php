<?php
//date()
echo "dzień miesiąc rok: ", date('d-m-y'),'r.<br>';
echo date('m-d-y'),'r.<br>';
echo date('d-M-Y'),'r.<br>';
echo date('d-F-Y'),'r.<br>';

setlocale(LC_ALL, 'polish');
echo strftime('%d %B %Y'),'<br>';

echo date('G:i:s'),'<br>';
 ?>
<script>
  setTimeout(function(){
    //window.location.reload();
  }, 1000);
</script>

<?php
  echo date('H:i:s'),'<br>';
  echo date('g:i:sa'),'<br>';

  //getdate()
  $date = getDate();
  //echo $date;
  echo '<pre>';
    print_r($date);
  echo '</pre>';
  echo $date['wday'];
  echo $date['yday'];

  //rok przestępny
  echo date("L"),'<br>'; // 0- rok nie jest przestępny

  //mktime
  $today = mktime(0,0,0,date("m"),date("d"),date("Y"));
  echo $today,'<br>';
  echo $date[0],'<br>';

  //ile lat minęło od 1 stycznia 1970roku
  $year =  $today/(60*60*24*365);
  echo (int)$year;

  //ile lat minęło w zeszłym roku
  $lastyear=mktime(0,0,0,date("m"),date("d"),date("Y")-1);
  $year=$lastyear/(60*60*24*365);
  echo (int)$year;
  ?>
