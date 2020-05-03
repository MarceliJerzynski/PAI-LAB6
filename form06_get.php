<?php
if (isSet($_GET['Message'])) {
    echo $_GET['Message'];
    unset($_GET['Message']);
}

 $link = mysqli_connect("localhost", "scott", "tiger", "institute");
 if (!$link) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
 }

 $sql = "SELECT * FROM workers";
 $result = $link->query($sql);
 foreach ($result as $v) {
 echo $v["Id_employee"]." ".$v["Last_name"]."<br/>";
 }
 $result->free();
 $link->close();

 print<<<WROC

 <button onclick="location.href='/form06_post.php'">Tabela</button>
 WROC;
?>