<?php

$memeDatabase = array(
    array('author' => 'author1', 'content' => 'content1', 'timestamp' => 'timestamp1'),
    array('author' => 'author2', 'content' => 'content2', 'timestamp' => 'timestamp2'),
    array('author' => 'author3', 'content' => 'content3', 'timestamp' => 'timestamp3'),
    array('author' => 'author4', 'content' => 'content4', 'timestamp' => 'timestamp4'),
    array('author' => 'author5', 'content' => 'content5', 'timestamp' => 'timestamp5'),
    array('author' => 'author6', 'content' => 'content6', 'timestamp' => 'timestamp6'),
    array('author' => 'author7', 'content' => 'content7', 'timestamp' => 'timestamp7'),
    array('author' => 'author8', 'content' => 'content8', 'timestamp' => 'timestamp8'),
    array('author' => 'author9', 'content' => 'content9', 'timestamp' => 'timestamp9'),
    array('author' => 'author10', 'content' => 'content10', 'timestamp' => 'timestamp10'),
    array('author' => 'author11', 'content' => 'content11', 'timestamp' => 'timestamp11'),
    array('author' => 'author12', 'content' => 'content12', 'timestamp' => 'timestamp12'),
    array('author' => 'author13', 'content' => 'content13', 'timestamp' => 'timestamp13'),
    array('author' => 'author14', 'content' => 'content14', 'timestamp' => 'timestamp14'),
    array('author' => 'author15', 'content' => 'content15', 'timestamp' => 'timestamp15')
);

if (!empty($_POST) 
    && isset($_POST['memeFetchSize'])) {

    // Write your code from here
    $num=$_POST['memeFetchSize'];
    if($num==1){
        $a=array_rand($memeDatabase);
        echo(json_encode($memeDatabase[$a]));
    }else{
    $a=array_rand($memeDatabase,$num);
    $r=array();
    foreach ($a as $value) {
    array_push($r, $memeDatabase[$value]);
    }
    echo(json_encode($r));
}


    // end of your code
}

?>
