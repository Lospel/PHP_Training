<?php
require_once('lib/print.php');
require_once('view/top.php');
?>
    <a href="create.php">create</a>
    <?php if(isset($id)){ ?>
        <a href="update.php?id=<?=$id?>">update</a>
        <form action="delete_process.php" method="post">
            <input type="hidden" name="id" value="<?=$id?>">
            <input type="submit" value="delete">
        </form>
    <?php } ?>
    <h2>
        <?php
            print_title();
        ?>
    </h2>
    <?php
        print_description();
    ?>
<?php
require('view/bottom.php');
?>