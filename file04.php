<?php
$link = mysqli_connect("localhost", "scott", "tiger", "institute");
if (!$link) {
printf("Connect failed: %s\n", mysqli_connect_error());
exit();
}
$result = mysqli_query($link,"SELECT * FROM workers");
if (!$result) {
printf("Query failed: %s\n", mysqli_error($link));
}
printf("<h1>Workers</h1>");
printf("<table border=\"1\">");
printf("<tr><th>Employee Id</th><th>Last Name</th><th>Time</th><th>Hired</th></tr>");
while ($obj = mysqli_fetch_object($result))
printf("<tr><td>%d</td><td>%s</td><td>%s</td><td>%s</td></tr>",
$obj->Id_employee, $obj->Last_name, $obj->Time, $obj->Employed);
printf("</table>");
printf("<i>query returned %d rows </i>", mysqli_num_rows($result));
mysqli_free_result($result);
mysqli_close($link);
?>
