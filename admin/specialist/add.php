<?php if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $stmt = $connect->prepare("INSERT INTO specialist (name)
                VALUES (:zname)");
    $stmt->execute([
        'zname' => $name,
    ]);
    if ($stmt) { ?>
        <div class="alert-success ">
            تم الاضافة بنجاح

            <?php header('LOCATION:main.php?dir=specialist&page=report'); ?>

        </div>

<?php }
}
