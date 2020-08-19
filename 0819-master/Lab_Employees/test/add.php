<?php

    if(isset($_POST["addButton"])) {
        // echo $_POST["addButton"] ;
        $firstName = $_POST["firstName"] ;
        $lastName = $_POST["lastName"] ;
        $cityId = $_POST["cityId"] ;

        $sql= <<<multi
            INSERT INTO employees (firstName ,lastName ,cityId)
            VALUES ('$firstName','$lastName',$cityId)
        multi;

        //echo ($sql);
        require_once("config.php") ;
        mysqli_query($link, $sql) ;
        header("location: index.php");
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
        <div class="row">
            <div class = "col-md-3"></div>
            <div class="col-md-6">
                <h2 style="text-align: center;">Add Employee</h2>
            </div>
        </div>
        <div class = "row">
            <div class = "col-md-3">
            </div>
            <div class = "col-md-6">
                <form method="POST">
                <div class="form-group">
                    <label for="TfirstName">First Name</label>
                    <input type="text" class="form-control" id="TfirstName" aria-describedby="emailHelp" placeholder="Enter First Name" name="firstName">
                    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                </div>
                <div class="form-group">
                    <label for="TlastName">Last Name</label>
                    <input type="text" class="form-control" id="TlastName" placeholder="Enter Last Name" name="lastName">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">City</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="cityId">
                    <option value="2">TaiPei</option>
                    <option value="4">TaiChung</option>
                    <option value="6">TaiNan</option>
                    </select>
                </div>
                <button type="submit" class="btn aqua-gradient" name="addButton" value="TRUE">Submit</button>
                </form>
            </div>
            <div class = "col-md-3">
            </div>
        </div>
    </div>
</body>
</html>