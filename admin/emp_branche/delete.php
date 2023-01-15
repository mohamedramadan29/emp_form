<?php
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];

    $stmt = $connect->prepare('SELECT * FROM emp_branche WHERE id= ?');
    $stmt->execute([$id]);
    $count = $stmt->rowCount();
    if ($count > 0) {
        $stmt = $connect->prepare('DELETE FROM emp_branche WHERE id=?');
        $stmt->execute([$id]);
        if ($stmt) { ?>
            <div class="alert-success">
                <?php echo $lang['delete_message']; ?>
                <?php header('LOCATION:main.php?dir=emp_branche&page=report'); ?>
    <?php }
    }
}
