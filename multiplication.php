<html>
<body>
<pre>
<?php 
	$size=$_POST["size"];
	echo " ";
	for($i=1;$i<=$size;$i++){
		echo str_pad("    " . $i, 5, " ");
	}
	for($i=1;$i<=$size;$i++){
		echo "\n";
		for($j=0;$j<=$size;$j++){
			if($j==0){
				echo str_pad($i . " ",5," ");
			}
			else{
				echo str_pad($j*$i . " ",5," ");
			}
		}
	}
?>
</pre>

</body>
</html>