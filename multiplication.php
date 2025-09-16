<html>
<body>

<?php 
$size=$_GET["size"];
<br>
for($i=1;$i<$size;$i++){
    for($j=1;$j<$size;$j++){
        echo " " . $i*$j   
    }
    echo "\n"
}
?>


</body>
</html>