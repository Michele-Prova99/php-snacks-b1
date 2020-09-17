<?php

$name = $_GET['name'];

$mail = $_GET['mail'];

$age = $_GET['age'];


if (strlen($name) <= 3 || strpos($mail,'.') == false || strpos($mail,'@') == false || !is_numeric($age)) {

  $accesso = 'ACCESSO NEGATO :(';

} else if (empty($name) || empty($mail) || empty($age)) {

    $accesso = 'ACCESSO NEGATO :(';

} else {

    $accesso = 'ACCESSO RIUSCITO :)';
}

echo $accesso;

 ?>



 <!-- ACCESSO RIUSCITO -->

<!-- http://localhost:8888/Snack2/index.php?name=Michele&mail=michele.prova99@gmail.com&age=21 -->



<!-- ACCESSO NEGATO -->

<!-- http://localhost:8888/Snack2/index.php?name=Mi&mail=micheleprova99gmailcom&age=aa -->

<!-- http://localhost:8888/Snack2/index.php?name=&mail=&age= -->
