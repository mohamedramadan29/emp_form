<?php
if (isset($_GET['emp_id']) && is_numeric($_GET['emp_id'])) {
    $emp_id = $_GET['emp_id'];

    $stmt = $connect->prepare('SELECT * FROM emp_form WHERE emp_id= ?');
    $stmt->execute([$emp_id]);
    $count = $stmt->rowCount();
    if ($count > 0) {
        $stmt = $connect->prepare('DELETE FROM emp_form WHERE emp_id=?');
        $stmt->execute([$emp_id]);
        if ($stmt) { ?>
            <div class="alert-success">
                <?php echo $lang['delete_message']; ?>
                <?php header('LOCATION:main.php?dir=emp_register&page=report'); ?>
    <?php }
    }
}
