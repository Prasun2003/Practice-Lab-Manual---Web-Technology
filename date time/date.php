<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
date_default_timezone_set ("Asia/Calcutta"); 
echo "Date: "; 
echo date("d/m/y"); 
echo "<br> Time: "; 
echo date(" H:i:s A", time()); 
echo "<br> Day: "; 
$day=date("l"); 
echo $day; 
?>

</body>
</html>