<?php
    $bgColor =  "tomato";
    $color = "white";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intro PHP</title>
    <style>
        #header1{
            background-color:<?php echo $bgColor ?>;
            color:<?php echo $color ?>;
        }
    </style>
</head>
<body>
    <?php
        echo "<h1 id='header1'>This is my first php page</h1>";
    ?>
    <h2 id="h2">header 2</h2>
    <h3>header 3</h3>
    <?php
        echo "<h4>header 4</h4>"
    ?>
    <h5 style="background-color:<?php echo $bgColor;?>">header 5</h5>
    <h6>header 6</h6> 
    
    <script>
        let bgColor = "<?php echo $bgColor ?>";
        let color = "<?php echo $color ?>";
        document.getElementById('h2').style.backgroundColor = bgColor;
        document.getElementById('h2').style.color = color;
    </script>
</body>
</html>