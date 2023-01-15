<?php
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];

    $stmt = $connect->prepare('SELECT * FROM bank WHERE id= ?');
    $stmt->execute([$id]);
    $count = $stmt->rowCount();
    if ($count > 0) {
        $stmt = $connect->prepare('DELETE FROM bank WHERE id=?');
        $stmt->execute([$id]);
        if ($stmt) { ?>
            <div class="alert-success">
                <?php echo $lang['delete_message']; ?>
                <?php header('LOCATION:main.php?dir=bank&page=report'); ?>
    <?php }
    }
}
