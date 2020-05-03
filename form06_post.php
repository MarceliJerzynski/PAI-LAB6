<?php 

if (isSet($_GET['Message'])) {
    echo $_GET['Message'];
    unset($_GET['Message']);
}
print<<<KONIEC
 <html>
 <head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
 </head>
 <body>
 <form action="form06_redirect.php" method="POST">
 id_prac <input type="text" name="id_prac">
 nazwisko <input type="text" name="nazwisko">
 <input type="submit" value="Wstaw">
 <input type="reset" value="Wyczysc">
 </form>

 <button onclick="location.href='/form06_get.php'">Tabela</button>
KONIEC;
?>