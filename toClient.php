<?php
    require("./connect.php");
    $sql = "INSERT INTO chat_log (rec, sender, content) VALUES ('user', 'admin', '".$_POST['msg']."')";
    if (mysqli_query($conn, $sql)) {
        echo($_POST['msg']);
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
?>