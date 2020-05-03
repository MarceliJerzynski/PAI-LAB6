<?php

$link = mysqli_connect("localhost", "scott", "tiger", "institute");
 if (!$link) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
 }

 if (isset($_POST['id_prac']) &&
 is_numeric($_POST['id_prac']) &&
 is_string($_POST['nazwisko']))
 {
    $sql = "INSERT INTO workers(id_employee,Last_name) VALUES(?,?)";
    $stmt = $link->prepare($sql);
    $stmt->bind_param("is", $_POST['id_prac'], $_POST['nazwisko']);
    $result = $stmt->execute();
    if (!$result) {
        printf("Query failed\n");
        $msg = 'Upss, cos poszlo nie tak';
        header("Location: form06_post.php?Message=$msg");
    } else {
        $msg = 'Pomyslnie dodano rekord';
        header("Location:  form06_get.php?Message=$msg");
    }
    $stmt->close();
 }
?>
