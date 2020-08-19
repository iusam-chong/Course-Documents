<?php
    if(! isset($_GET["id"])){
        die("id not found !") ;
    }

    $id = $_GET["id"] ;
    if(! is_numeric($id)){
        die("id not a number!") ;
    }

    require_once("config.php") ;
    if(isset($_POST["okButton"])){
        $firstName = $_POST["firstName"] ;
        $lastName = $_POST["lastName"] ;
        $cityId = $_POST["cityId"] ;
        
        $sql=<<<multi
            update employees set 
                firstName = '$firstName', 
                lastName = '$lastName',
                cityId = $cityId
            where employeeId = $id 
        multi;
        mysqli_query($link, $sql) ;

        header("location: index.php");
        // $sql=<<<multi
        //     SELECT * FROM employees where employeeId = $id 
        // multi;
        // $result = mysqli_query($link, $sql) ;
    }
    else{
        $sql=<<<multi
            SELECT * FROM employees where employeeId = $id 
        multi;
        $result = mysqli_query($link, $sql) ;
        $row = mysqli_fetch_assoc($result) ;
        //print_r($row) ;
    }

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
        <div class = "row">
            <div class = "col-md-3">
            </div>
            <div class = "col-md-6">
                <form method="POST">
                <div class="form-group">
                    <label for="TfirstName">First Name</label>
                    <input type="text" class="form-control" id="TfirstName" aria-describedby="emailHelp" placeholder="Enter First Name" name="firstName" value="<?=$row['firstName']?>">
                    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                </div>
                <div class="form-group">
                    <label for="TlastName">Last Name</label>
                    <input type="text" class="form-control" id="TlastName" placeholder="Enter Last Name" name="lastName" value="<?=$row['lastName']?>">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">City</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="cityId">
                    <option value="2" <?= ($row["cityId"] == 2) ? "selected" : "" ?>>TaiPei</option>
                    <option value="4" <?= ($row["cityId"] == 4) ? "selected" : "" ?>>TaiChung</option>
                    <option value="6" <?= ($row["cityId"] == 6) ? "selected" : "" ?>>TaiNan</option>
                    </select>
                    
                    
                </div>
                <button type="submit" class="btn aqua-gradient" name="okButton" value="TRUE">Submit</button>
                </form>
            </div>
            <div class = "col-md-3">
            </div>
        </div>
    </div>
</body>
</html>