<?php
  echo "<br><h3> task 2</h3> <br>";
  $perem = " и продолжение текста";
  $numWithPoint = 1E-4;
  $c = 5**3;
  define(TEST_CONSTANT, "<p>Содержание константы</p>");

  echo "Hello world $perem <br>";
  echo 'Hello world $perem';
  echo TEST_CONSTANT;
  echo $numWithPoint;
  echo "<br>";
  echo $a++;
  echo "<br>";
  echo $a;
  var_dump($a == $numWithPoint);
  var_dump($a > $numWithPoint);

  echo "<br><h3> task 3 </h3><br>";
  $a = 5;
  $b = '05';
  
  var_dump($a == $b); // Почему true?
  echo " True потому что строка будет преобразована к числовому значению и значения будут одинаковы <br>";
  var_dump((int)'012345'); // Почему 12345?
  echo " Потому что при преобразовании строки в int первые нули в строке отбрасываются (не совсем уверен в ответе)<br>";
  var_dump((float)123.0 === (int)123.0); // Почему false?
  echo " False потому что при === сравниваются и стили, которые тут разные <br>";
  var_dump((int)0 === (int)'hello, world'); // Почему true?
  echo " True потому что при === сравниваются и стили, которые тут равны и данная строка при переводе в int даст 0 <br>";

  echo "<br><h3> task 4 не понял :( </h3><br>";

  echo "<h3> task 5 </h3><br>";
  $z=33;
  $c=44;
  echo "z = $z, c = $c <br>";
  [$z,$c]=[$c,$z];
  echo "z = $z, c = $c";
?>


