<?php
ob_start();
$pagetitle = 'Main';
session_start();
include 'init.php';
include $tem . 'top_navbar.php';
include $tem . 'left_sidebar.php';
?>
<div class="content-wrapper">
    <div class="category">
        <div class="container customer_report">
            <div class="data">
                <div class="bread">
                    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"> <i class="fa fa-heart"></i> <a href="main.php?dir=dashboard&page=dashboard"> عمل </a> <i class="fa fa-chevron-left"></i>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page"> مشاهدة المشاريع </li>
                        </ol>
                    </nav>
                </div>
                <!-------------------------- START NEW WHATSAPP MEMEBER------------------------->
                <div class="myform">
                    <form class="form-group insert ajax_form" action="main_ajax.php?dir=projects&page=add" method="POST" autocomplete="on" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="box2">
                                    <label id="name"> اسم المشروع
                                        <span> * </span> </label>
                                    <input required class="form-control" type="text" name="pro_name">
                                </div>
                                <div class="box2">
                                    <label id="name_en"> مهارات المشروع <span> * </span></label>
                                    <input min="1" class="form-control" type="text" name="pro_skills">
                                </div>
                                <div class="box">
                                    <label id="name_en">وصف المشروع<span class="star"> * </span></label>
                                    <textarea name="pro_desc" id="" class="form-control"></textarea>

                                </div>
                                <div class="box2">
                                    <label id="name_en"> السعر المتوقع (دولار)<span> * </span></label>
                                    <input class="form-control" type="number" name="pro_price">
                                </div>
                                <div class="box2">
                                    <label id="name_en"> فترة الوظيفة او المشروع (يوم)<span> * </span></label>
                                    <input class="form-control" type="number" name="pro_date_long">
                                </div>
                                <div class="box2">
                                    <label id="name_en"> اختر الموظف الذى سيقوم بالمشروع <span> * </span></label>
                                    <select name="pro_emp" id="" class="form-control">
                                        <option value=""> -- اختر الموظف -- </option>
                                        <?php
                                        $stmt = $connect->prepare("SELECT * FROM employee_register 
                                                INNER JOIN subscribe ON employee_register.emp_id = subscribe.emp_id
                                                WHERE sub_status =1
                                                ");
                                        $stmt->execute();
                                        $allemp = $stmt->fetchAll();
                                        foreach ($allemp as $emp) {
                                        ?>
                                            <option value="<?php echo $emp['emp_id']; ?>"><?php echo $emp['emp_username']; ?></option>
                                        <?php
                                        }

                                        ?>

                                    </select>
                                </div>
                                <div class="box2">
                                    <label id="pro_status"> اختر حالة المشروع <span> * </span></label>
                                    <select name="pro_status" class="form-control">
                                        <option value=""> -- اختر -- </option>
                                        <option value="1"> نشر المشروع </option>
                                        <option value="0"> عدم نشر المشروع </option>
                                    </select>
                                </div>

                                <div class="box submit_box">
                                    <input class="btn btn-outline-primary btn-sm" name="" type="submit" value=" اضافه مشروع جديد ">
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- START RESPONSE SPACE  -->
                    <!-- area to display a message after completion of upload -->
                    <div class='status'></div>
                    <br>
                    <!-- END RESPONSE SPACE  -->
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<?php
include $tem . 'footer.php';

ob_end_flush();


?>