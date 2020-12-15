<?php
/*
Passare 3 parametri GET: name, mail e age e verificare (cercando nella documentazione i metodi che non conosciamo) che:
1. name sia più lungo di 3 caratteri,
2. mail contenga un punto e una chiocciola
3. age sia un numero.
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
*/

$name = $_GET['nome'];
$mail = $_GET['mail'];
$age = $_GET['eta'];

if (strlen($name) > 3 && strpos($mail, '@') !== false && strpos($mail, '.') !== false && is_numeric($age) && $age >= 18 && $age < 120) {
    var_dump('accesso riuscito');
}else {
    var_dump('accesso negato');
};
// per provare concatena : "nome=carmi&mail=carmi@gmail.com&eta=31"
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>php-badwords</title>
</head>
<body>
</body>
</html>
