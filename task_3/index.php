<?
// задание 1
// echo "1-2-3-4-5-6-7-8-9-10"
echo "Задание 1<br><br>";
for($i=1; $i<=10; $i++)
{
    if($i < 10)
    {
        echo "$i-";
    }
    else{
        echo "$i" . "\n";
    }
}

// задание 2
echo "<br><br>Задание 2 <br><br>";
for($i = 0; $i <= 30; $i++) {
    echo "" . $i . " ";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TT</title>
</head>
<body>
    <div style="max-width: 250px;" class="header" > 
    <? 
    echo "<br><br>Задание 3<br><br>";
        for($i = 0; $i < 10; $i++) {
            for($a=0; $a < 10; $a++){
            echo "" . $i.$a .", ";
        }
    }
    ?>
    </div>
</body>
</html>