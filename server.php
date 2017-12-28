<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>客服</title>
    <style>
    #views{
        border:1px solid #000;
        width: 491px;
        height: 460px;
        background-color: #ddd;
        padding: 10px;
        margin-bottom: 10px;
    }
    .userMsg span{
        color:yellow;
    }
    .serverMsg span{
        color:blue;
    }
    </style>
</head>
<body>
    <iframe src="./fromClient.php" width="0" height="0" frameborder="0"></iframe>
    <h1>客服端口</h1>
        <div  id="views"></div>
        <textarea rows="10" cols="70" id="input"></textarea>
    <script src="./jquery-3.2.1.min.js"></script>
    <script>
    $('#input').keydown(function(e){
        if(e.keyCode!==13)return;
        $.post('toClient.php',{
            msg:$(this).val()
        },function(res){
            $('#views').append("<p class='serverMsg'><span>你说：</span>"+res+"</p>");
        })
        $(this).val('');
    });
    function showMsg(str){
        console.log(str);
        $('#views').append("<p class='userMsg'><span>用户说：</span>"+str.content+"</p>");
    }
    </script>
</body>
</html>