<?php
$link = mysqli_connect("localhost", "scott", "tiger", "institute");
if (!$link) {
printf("Connect failed: %s\n", mysqli_connect_error());
exit();
}
printf("<h1>Workers</h1>");
$psql = "SELECT Last_name, Time FROM Workers WHERE Id_employee = ?";
$pstmt = mysqli_stmt_init($link);
mysqli_stmt_prepare($pstmt, $psql);
for ($i=100;$i<230;$i+=10)
{
mysqli_stmt_bind_param($pstmt,"i",$i);
mysqli_stmt_execute($pstmt);
mysqli_stmt_bind_result($pstmt,$Last_name,$Time);
mysqli_stmt_fetch($pstmt);
printf("$Last_name pracuje jako $time <br/>");
}
mysqli_stmt_close($pstmt);
mysqli_close($link);
?>
