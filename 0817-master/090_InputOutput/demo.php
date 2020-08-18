<?php
    $scorelist = array(100, 98, 50, 60) ;

    function checkScore($score){
        return (($score >= 60) ? pass : fail);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        li.fail{
            color : red ;
        }
        li.pass{
            color : green ;
        }
    </style>
</head>
<body>
    <ul>
        <?php foreach($scorelist as $i){ ?>
            <li class=" <?php checkScore($i); ?> ">
                <?= $i ?>
            </li>
        <?php } ?> 
        
        <hr>
        <!-- 老師寫法 -->
        <?php foreach($scorelist as $i){ ?>
            <li class=" <?=(($i >= 60) ? pass : fail)?> ">
                <?= $i ?>
            </li>
        <?php } ?>
    </ul>

    <img src = "IO_9.php"/>
</body>
</html>