<?php
if (isset($_GET['error'])){
    ?>
    <!-- Message OK -->
    <div class="msg msg-error">
        <p><strong><?=$_GET['error']?></strong></p>
        <a href="<?=$_SERVER['PHP_SELF']?>" class="close">close</a>
    </div>
    <!-- End Message OK -->
    <?php
}

if (isset($_GET['success'])){
    ?>
    <!-- Message Error -->
    <div class="msg msg-ok">
        <p><strong><?=$_GET['success']?></strong></p>
        <a href="<?=$_SERVER['PHP_SELF']?>" class="close">close</a>
    </div>
    <!-- End Message Error -->
    <?php
}
?>
