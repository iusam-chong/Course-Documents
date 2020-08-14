<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
<script type="text/javascript" src="jquery.min.js"></script>
<script type="text/javascript">

    // $(document).ready(start);

    // function start(){
    //     $("#letter").change(letterChange);
    // }

    // function letterChange() {
    //     var x = $("#letter option:selected").text() ;
    //     $.get("getLetterNumber.php?letter=" + x, selectDataChange) ;
        
    //     console.log(x);
    // }

    // function selectDataChange(data) {
    //     $("#letterNumber").html(data) ;
        
    //     console.log(data);
    // }

    

    $(document).ready(start);
    
    function start(){
        $("#letter").change(letterChange) ;
        $("#letter").trigger("change");
    }

    function letterChange() {
        var selectedLetter = $("#letter option:selected").text();
        var serverUrl = `./getLetterNumber.php?letter=${selectedLetter}` ;
    
        $.ajax({
            type: "get",
            url: serverUrl
        }).then(function (e){
            $("#letterNumber").html(e) ;
        })
    }
    

   
   

</script>
</head>
<body>

    <p>Lab_AJAX_test.php</p>
    <br>

	<form method="post" action="http://exec.hostzi.com/echo.php">
		<select name="letter" id="letter">
			<option value="0">A</option>
			<option value="1">B</option>
			<option value="2">C</option>
		</select>&nbsp;|&nbsp; 
		<select name="letterNumber" id="letterNumber">
			<option value="0">A01</option>
			<option value="1">B02</option>
			<option value="2">C03</option>
		</select> 
		<input type="submit" value="OK" /> 
    </form>

</body>
</html>