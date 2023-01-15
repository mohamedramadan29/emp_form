<?php if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $stmt = $connect->prepare("INSERT INTO professional_licing (name)
                VALUES (:zname)");
    $stmt->execute([
        'zname' => $name,
    ]);
    if ($stmt) { ?>
        <div class="alert-success ">
            تم الاضافة بنجاح

            <?php header('LOCATION:main.php?dir=professional_licing&page=report'); ?>

        </div>

<?php }
}
