<?php

$title = $_POST['title'];    
$content = $_POST['content'];

#echo $title.' '.$content;

$conn = new mysqli("localhost","root","123456","test");

$sql = "insert into board_content (title,content,writer) values ($title,$content,'kim123')";

mysqli_query($conn, $sql);

mysqli_close($conn);

echo "<meta http-equiv='refresh' content='0; url=index.php'>";

?>