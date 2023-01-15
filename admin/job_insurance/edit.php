<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $stmt = $connect->prepare("UPDATE  job_insurance SET  name=? WHERE id=?");
    $stmt->execute([$name, $id]);
    if ($stmt) { ?>
        <div class="container">
            <div class="alert-success">
                تم التعديل بنجاح
                <?php header('LOCATION:main.php?dir=job_insurance&page=report'); ?>
            </div>
        </div>
<?php }
}
