<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>function</title>
</head>
<body>
    <h1>function</h1>
    <?php
        $str = "Lorem ipsum dolor sit amet consectetur, 
        adipisicing elit. Pariatur, adipisci earum id 


        expedita voluptatibus quos nam ut fugit perspiciatis 
        explicabo obcaecati, consectetur rerum exercitationem 
        impedit at numquam temporibus eveniet sequi?";
        echo $str;
    ?>
    <h2>strlen()</h2>
    <?php
        // echo 1+1;
        echo strlen($str);

    ?>
    <h2>nl2br</h2>
    <?php
        echo nl2br($str);
    ?>
</body>
</html>