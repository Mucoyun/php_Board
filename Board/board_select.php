<?php
     $conn = new mysqli("localhost","root","123456","test");

     $sql = "select board_no,title,writer,DATE_FORMAT(indate, '%Y-%m-%d') from board_content order by board_no desc";
     $result = mysqli_query($conn, $sql);

     while($row = mysqli_fetch_array($result)){
        ?>
        <tr class="row">
            <th class="col-1 text-center"><?=$row['board_no'] ?></th>
            <td class="col-7"><a href="board_update.php?send_board_no=<?=$row['board_no']?>"><?=$row['title'] ?></a></td>
            <td class="col-2 text-center"><?=$row['writer'] ?></td>
            <td class="col-2 text-center"><?=$row["DATE_FORMAT(indate, '%Y-%m-%d')"] ?></td>
        </tr>
        <?php
     }
     mysqli_close($conn);
?>