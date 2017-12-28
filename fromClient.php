<?php
    require("./connect.php");
    ob_start();
    echo str_repeat('', 4096);
    ob_end_flush();
    ob_flush();
    $i=1;
    while (true) {
        $sql = "SELECT * FROM chat_log WHERE rec='admin' AND is_new=1 ORDER BY log_id DESC LIMIT 1";
        $res = mysqli_query($conn,$sql);

        ob_flush();
        flush();
        sleep(1);
    }
?>
