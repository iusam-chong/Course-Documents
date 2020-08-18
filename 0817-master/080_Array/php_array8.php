<?php
	$testArray = array("A1", "A2", "A18");
	sort($testArray);
	var_dump($testArray);
	
	echo "<br />";
	
?>

<pre>
<?php 
	natsort($testArray);
	var_dump($testArray);
	?>
</pre>
