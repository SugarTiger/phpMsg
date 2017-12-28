<?php
    require("./connect.php");
    ob_start();
    echo str_repeat('', 4096);
    ob_end_flush();
    ob_flush();
    $i=1;
    while (true) {
        $sql = "SELECT * FROM chat_log WHERE rec='user' AND is_new=1 ORDER BY log_id DESC LIMIT 1";
        $res = mysqli_query($conn, $sql);
        if ($row = mysqli_fetch_all($res, MYSQLI_ASSOC)) {
            var_dump($row[0]['log_id']);
            $sql = "UPDATE chat_log SET is_new = 0 WHERE log_id=".$row[0]['log_id'];
            echo "<script>parent.showMsg(".json_encode($row[0]).")</script>";
            mysqli_query($conn, $sql);
            ob_flush();
            flush();
            sleep(3);
        }
        
        mysqli_free_result($res);
    }
