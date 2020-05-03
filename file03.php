<?php
$link = mysqli_connect("localhost", "scott", "tiger", "institute");
if (!$link) {
printf("Connect failed: %s\n", mysqli_connect_error());
exit();
}
$result = mysqli_query($link,"SELECT * FROM posts ORDER BY Salary_from");
if (!$result) {
printf("Query failed: %s\n", mysqli_error($link));
}
printf("<h1>POSTS</h1>");
printf("<table border=\"1\">");
printf("<tr><th>Name</th><th>Salary from</th><th>Salary to</th></tr>");
while ($row = mysqli_fetch_assoc($result))
printf("<tr><td>%s</td><td>%6.2f</td><td>%6.2f</td></tr>",
$row["Name"],$row["Salary_from"],$row["Salary_to"]);
printf("</table>");
printf("<i>query returned %d rows </i>", mysqli_num_rows($result));
mysqli_free_result($result);
mysqli_close($link);
?>