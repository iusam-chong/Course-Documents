<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>
Test: <input type="text" id="txtTest" />
<hr>
<div id="debug"></div>
<script>
    var xhr = new XMLHttpRequest();
    xhr.open("GET", "LongRequest_Server.php", true);
    xhr.onprogress = function (e) {
        document.getElementById("debug").innerHTML = xhr.responseText;
    }
    xhr.send(null);
</script>
</body>
</html>