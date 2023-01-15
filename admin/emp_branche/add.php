<?php if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $stmt = $connect->prepare("INSERT INTO emp_branche (name)
                VALUES (:zname)");
    $stmt->execute([
        'zname' => $name,
    ]);
    if ($stmt) { ?>
        <div class="alert-success ">
            تم الاضافة بنجاح

            <?php header('LOCATION:main.php?dir=emp_branche&page=report'); ?>

        </div>

<?php }
}
