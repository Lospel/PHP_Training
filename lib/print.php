<?php

function print_title(){
        if(isset($_GET['id'])){
            echo htmlspecialchars($_GET['id']);
        }else{
            echo "Welcome";
        }
}

function print_description(){
        if(isset($_GET["id"])){
            $basename = basename($_GET["id"]);
            echo htmlspecialchars(file_get_contents("data/".$basename));
        }else{
            echo "Hello, PHP";
        }
}

function print_list(){
        $list = scandir('C:\Users\rlaeh\OneDrive\바탕 화면\PHP_Training\data');
        $i = 0;
        while($i < count($list)){
            $title = htmlspecialchars($list[$i]);
            if($list[$i] != '.' and $list[$i] !='..'){
                echo "<li><a href=\"index.php?id=$title\">$list[$i]</a></li>\n";
            }
            $i += 1;
        }
}

?>