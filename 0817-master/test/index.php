<?php
    session_start();
    //var_dump($_POST);
    if(isset($_POST["txtUserName"])){
        $_SESSION["who"] = $_POST["txtUserName"]; // $_SESSION["who"] = $_POST["username"] ;
        header("location: hello.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- action="" 不設動作值就傳回自己 -->
    <form method="post" action=""> 
        Your name : 
        <input type="text" name="txtUserName" /><br>
        <!-- Your email :
        <input type="text" name="txtEmail" /> -->
		<input type="submit" name="btnOK" value="SEND" />
	</form>
</body>
</html>