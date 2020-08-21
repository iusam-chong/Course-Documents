<?php
    // $obj = (object) ["firstName" => "Jeremy" , "lastName" => "Lin"] ;
    // echo $obj->lastName ; 

    $scoreList = Array(100, 50, 95, 80) ;
    $viewModal = [] ;

    foreach ($scoreList as $score) {
        $student = (object) ["score" => $score, "style" => "pass"] ;
        if($score < 60)
            $student->style = "fail" ;
        $viewModal[] = $student ;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .fail {
            color : red ; 
        }
        .pass {
            color : green ;
        }
    </style>
</head>
<body>
    <ul>
        <?php foreach($viewModal as $student) { ?>
            <li class="<?= $student->style?>"><?= $student->score?></li>
        <?php } ?>
    </ul>
</body>
</html>