<?php

 $d=$_GET['dir'];




 function printDir($dirName){
     $dir=opendir($dirName);
     echo "<ul>";
     while ($item=readdir($dir)){
         if ($item=='.' || $item=='..') continue;
         echo "<li>";



         if (is_dir($dirName."/".$item)){
       //     echo "[Katalogas]";
       //     printDir($dirName."/".$item);
            echo "<a href='?dir=$dirName/$item'>$item</a>";
         }else{
             echo $item;
         }
         if (is_file($dirName."/".$item)){
             $ext= pathinfo($dirName."/".$item,PATHINFO_EXTENSION);
             if ($ext=='php'){
                 echo "[PHP failas]";
                 echo "<a href='edit.php?path=".$dirName."/".$item."'>";
                 echo "Redaguoti";
                 echo "</a>";
             }
         }

         echo "</li>";
     }
     echo "</ul>";
     closedir($dir);
 }

function countFiles($dirName){
    $dir=opendir($dirName);
    $count=0;
    while ($item=readdir($dir)){
        if ($item=='.' || $item=='..') continue;
        if (is_dir($dirName."/".$item)){
            $count+=countFiles($dirName."/".$item);
        }
        if (is_file($dirName."/".$item)){
            $count++;
        }
    }
    closedir($dir);
    return $count;
}


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Failai</title>
</head>
<body>
    <?php printDir($d) ?>
    Viso failų: <?= countFiles($d); ?>
</body>
</html>