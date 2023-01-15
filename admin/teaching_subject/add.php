<?php if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $stmt = $connect->prepare("INSERT INTO teaching_subject (name)
                VALUES (:zname)");
    $stmt->execute([
        'zname' => $name,
    ]);
    if ($stmt) { ?>
        <div class="alert-success ">
            تم الاضافة بنجاح

            <?php header('LOCATION:main.php?dir=teaching_subject&page=report'); ?>

        </div>

<?php }
}
