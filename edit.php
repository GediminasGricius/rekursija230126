<?php
$path=$_GET['path'];

//echo "Redaguojame:".$path;

if (isset($_POST['content'])){
    echo "Saugom nauja faila:";
    echo $_POST['content'];
}

$f=fopen($path,"r");
$content=fread($f, filesize($path));
fclose($f);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="edit.php?path=<?=$path?>" method="post">

    <textarea name="content" style="width: 100%; height: 400px;"><?=$content?></textarea>
    <button>Saugoti</button>
</form>
</body>
</html>
