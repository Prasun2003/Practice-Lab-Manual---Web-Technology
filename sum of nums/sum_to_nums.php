<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$n=323;
$sum=0;
while($n>0)
{
$r=$n%10;
$sum+=$r;
$n=$n/10;
}
echo "sum of individual digits are: $sum";
?>
</body>
</html>