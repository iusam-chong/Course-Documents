<?php
    require_once("config.php") ;

    $commandText = <<<SqlQuery
        SELECT employeeId, firstName, lastName, e.cityId, cityName 
            FROM city AS c JOIN employees AS e ON e.cityId = c.cityId
    SqlQuery;

    $result = mysqli_query ($link, $commandText) ;

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Document</title>

    <style>
        .dusty-grass-gradient {
            border: none;
            background-image: linear-gradient(120deg, #d4fc79 0%, #96e6a1 100%)
        }

        .dusty-grass-gradient:hover {
            border: none;
            background-image: linear-gradient(120deg, #96e6a1 0%, #d4fc79 100%)
        }


        .young-passion-gradient {
            border: none;
            background-image: linear-gradient(to right, #ff8177 0%, #ff867a 0%, #ff8c7f 21%, #f99185 52%, #cf556c 78%, #b12a5b 100%)
        }

        .young-passion-gradient:hover {
            border: none;
            background-image: linear-gradient(to left, #ff8177 0%, #ff867a 0%, #ff8c7f 21%, #f99185 52%, #cf556c 78%, #b12a5b 100%)
        }

        .aqua-gradient {
            border-style: none;
            background: linear-gradient(40deg, #2096ff, #05ffa3) !important
        }

        .aqua-gradient:hover {
            border-style: none;
            background: linear-gradient(40deg, #05ffa3, #2096ff) !important
        }
    </style>
</head>
<body>
    <div class="container" style="margin-top:5%;">
        <div class="row">
            <div class="col-11">
                <h2>Employee List</h2>
            </div>
            <div class="col-1">
                <span class = "pull-right">
                    <a href="add.php" class="btn aqua-gradient ">New</a>
                </span>
            </div>
        </div>
        <!-- <p>Combine .table-dark and .table-striped to create a dark, striped table:</p> -->  
        <table class="table table-striped">
            <thead>
            <tr style="border:none;">
                <th>Firstname</th>
                <th>Lastname</th>
                <th>City</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            <?php while($row = mysqli_fetch_assoc($result)) : ?>
                <tr>
                    <td><?php echo $row["firstName"] ?></td>
                        <td><?php echo $row["lastName"] ?></td>
                        <td><?php echo $row["cityName"] ?></td>
                        <!-- <td><?php echo $row["employeeId"] ?></td> -->
                        <td>
                            <span class = "float-right">
                                <a href="<?='edit.php?id='.$row["employeeId"] ?>" class="btn dusty-grass-gradient ">Edit</a>
                                <a href="<?='delete.php?id='.$row["employeeId"] ?>" class="btn young-passion-gradient">Delete</a>
                            </span>
                        </td>
                </tr>
            <?php endwhile ?>    
            </tbody>
        </table>
    </div>
</body>
</html>