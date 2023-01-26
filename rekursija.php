<?php





function faktorialas($x){
    if ($x==1)
        return 1;
    return faktorialas($x-1)*$x;
}
//echo faktorialas(-1);


$mas[0]['caption']='Apie imone';
$mas[0]['sub'][0]['caption']='Darbuotojai';
$mas[0]['sub'][0]['sub'][0]['caption']='Programutojai';
$mas[0]['sub'][0]['sub'][0]['sub'][0]['caption']='JAVA';
$mas[0]['sub'][0]['sub'][0]['sub'][1]['caption']='PHP';
$mas[0]['sub'][0]['sub'][1]['caption']='Dizaineriai';
$mas[0]['sub'][1]['caption']='Adresas';
$mas[1]['caption']='Darbai';


//print_r($mas);

function printList($mas){
    echo "<ul>";
    foreach ($mas as $i){
        echo "<li>".$i['caption'];
        if (isset($i['sub'])){
            printList($i['sub']);
        }
        echo "</li>";
    }
    echo "</ul>";
}


printList($mas);
?>
