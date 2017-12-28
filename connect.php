<?php
$conn = mysqli_connect('localhost','root','','moc_chat');
mysqli_query($conn,"set names utf8");
if (mysqli_connect_errno())
{
    echo "连接失败: " . mysqli_connect_error();
}
?>