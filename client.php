<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>客户端</title>
    <style>
    #views{
        border:1px solid #000;
        width: 491px;
        height: 460px;
        background-color: #ddd;
        padding: 10px;
        margin-bottom: 10px;
    }
    </style>
</head>
<body>
    <h1>用户端口</h1>
        <textarea  id="views"></textarea>
        <textarea rows="10" cols="70" id="input"></textarea>
    <script src="./jquery-3.2.1.min.js"></script>
    <script>
    $('#input').keydown(function(e){
        if(e.keyCode!==13)return;
        $.post('toServer.php',{
            msg:$(this).val()
        },function(res){
            $('#views').append("你说："+res);
        })
    })
    </script>
</body>
</html>