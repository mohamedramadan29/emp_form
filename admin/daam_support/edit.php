<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $stmt = $connect->prepare("UPDATE daam_support SET  name=? WHERE id=?");
    $stmt->execute([$name, $id]);
    if ($stmt) { ?>
        <div class="container">
            <div class="alert-success">
                تم التعديل بنجاح
                <?php header('LOCATION:main.php?dir=daam_support&page=report'); ?>
            </div>
        </div>
<?php }
}
