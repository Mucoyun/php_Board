<?php

$board_no = $_GET['board_no'];    
$title = $_POST['title'];    
$content = $_POST['content'];

#echo $title.' '.$content.' '.$board_no;

$conn = new mysqli("localhost","root","123456","test");

$sql = "update board_content set title='$title',content='$content' where board_no='$board_no'";

mysqli_query($conn, $sql);

mysqli_close($conn);

echo "<meta http-equiv='refresh' content='0; url=index.php'>";

?>