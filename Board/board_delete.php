<?php

$board_no = $_GET['board_no'];    

$conn = new mysqli("localhost","root","123456","test");

$sql = "delete from board_content where board_no=$board_no";

mysqli_query($conn, $sql);

mysqli_close($conn);

echo "<meta http-equiv='refresh' content='0; url=index.php'>";

?>