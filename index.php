<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <h1><a href="index.php">WEB</a></h1>
    <!-- <ol>
        <li><a href="index.php?id=HTML">HTML</a></li>
        <li><a href="index.php?id=CSS">CSS</a></li>
        <li><a href="index.php?id=JavaScript">JavaScript</a></li>
        <li><a href="index.php?id=PHP">PHP</a></li>
    </ol> -->
    <ol>
        <?php
        $list = scandir('C:\Users\rlaeh\OneDrive\바탕 화면\PHP_Training\data');
        
        /* 
        var_dump($list);
        echo "<li>$list[0]</li>\n";
        echo "<li>$list[1]</li>\n";
        echo "<li>$list[2]</li>\n";
        echo "<li>$list[3]</li>\n";
        echo "<li>$list[4]</li>\n";
        echo "<li>$list[5]</li>\n";
        */

        $i = 2;
        while($i < count($list)){
            echo "<li><a href=\"index.php?id=$list[$i]\">$list[$i]</a></li>\n";
            $i += 1;
        }
        ?>
    </ol>
    <h2>
        <?php
        if(isset($_GET['id'])){
            echo $_GET['id'];
        }else{
            echo "Welcome";
        }
        ?>
    </h2>
    <?php
    if(isset($_GET['id'])){
        echo file_get_contents("data/".$_GET['id']);
    }else{
        echo "Hello, PHP";
    }
    ?>
</body>
</html>