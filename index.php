<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index.php</title>
</head>
<body>
    <?php
        $conn = new mysqli("localhost","root","123456","test");

        $sql = "select * from db_test";
        $result = mysqli_query($conn, $sql);

        while($row = mysqli_fetch_array($result)){
            echo $row['aa']." ".$row['bb']."<br>";
        }
    
    ?>
</body>
</html>