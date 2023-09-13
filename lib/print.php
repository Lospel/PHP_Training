<?php
if(isset($_GET["id"])){
    $id = $_GET["id"];
}

function print_title(){
        if(isset($id)){
            echo htmlspecialchars($id);
        }else{
            echo "Welcome";
        }
}

function print_description(){
        if(isset($id)){
            $basename = basename($id);
            echo htmlspecialchars(file_get_contents("C:\Users\rlaeh\OneDrive\바탕 화면\PHP_Training\data/".$basename));
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