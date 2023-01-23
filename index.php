<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="colorlib.com">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> استمارة بيانات موظف </title>
    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="vendor/nouislider/nouislider.min.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <!-- Google   font  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Kufi+Arabic&display=swap" rel="stylesheet">
    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="main">
        <div class="container">
            <div class="header_form">
                <div class="">
                    <h4> استمارة بيانات موظف </h4>
                </div>

                <div>
                    <?php
                    include "connect.php";
                    $stmt = $connect->prepare("SELECT * FROM select_year");
                    $stmt->execute();
                    $data = $stmt->fetch();


                    ?>
                    <?php echo $data['text']; ?>
                </div>

                <div class="">
                    <p> الإدارة العامة لمدارس
                        الفرقان والفضل بن العباس والبتول
                        ( إدارة الموارد البشرية ) </p>
                </div>
            </div>

            <?php
            include "connect.php";
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $emp_brach = $_POST["emp_brach"];
                $emp_gender = $_POST["emp_gender"];
                $emp_name = $_POST["emp_name"];
                $emp_nationality = $_POST["emp_nationality"];
                $emp_id_number = $_POST["emp_id_number"];
                $emp_id_expire_date_h = $_POST["emp_id_expire_date_h"];
                $emp_id_expire_date_m = $_POST["emp_id_expire_date_m"];
                $emp_place_issue_m = $_POST["emp_place_issue_m"];
                $emp_date_birth_h = $_POST["emp_date_birth_h"];
                $emp_date_birth_m = $_POST["emp_date_birth_m"];
                $emp_material_status = $_POST["emp_material_status"];
                $emp_qualification = $_POST["emp_qualification"];
                $emp_grade = $_POST["emp_grade"];
                $emp_specialist = $_POST["emp_specialist"];
                $emp_professional_licing = $_POST["emp_professional_licing"];
                if (isset($_POST['emp_expire_date_pro_licing_h']) && isset($_POST['emp_expire_date_pro_licing_m'])) {
                    $emp_expire_date_pro_licing_h = $_POST["emp_expire_date_pro_licing_h"];
                    $emp_expire_date_pro_licing_m = $_POST["emp_expire_date_pro_licing_m"];
                } else {
                    $emp_expire_date_pro_licing_h = '';
                    $emp_expire_date_pro_licing_m = '';
                }

                $emp_school = $_POST["emp_school"];
                $emp_job = $_POST["emp_job"];
                $emp_stage = $_POST["emp_stage"];
                $emp_teaching_subject = $_POST["emp_teaching_subject"];
                $emp_date_start_y_h = $_POST["emp_date_start_y_h"];
                $emp_date_start_y_m = $_POST["emp_date_start_y_m"];
                $emp_building_num = $_POST["emp_building_num"];
                $emp_secondary_num = $_POST["emp_secondary_num"];
                $emp_postal_code = $_POST["emp_postal_code"];
                $emp_town = $_POST["emp_town"];
                $emp_city = $_POST["emp_city"];
                $emp_flate_number = $_POST["emp_flate_number"];
                $emp_street = $_POST["emp_street"];
                $emp_email_address = $_POST["emp_email_address"];
                $emp_mobile = $_POST["emp_mobile"];
                $iban_number = $_POST["iban_number"];
                $emp_bank = $_POST["emp_bank"];
                $other_copy1_nameee = $_POST["other_copy1_name"];
                $other_copy2_nameee = $_POST["other_copy2_name"];
                $other_copy3_nameee = $_POST["other_copy3_name"];

                if (!empty($_FILES['emp_id_copy']['name'])) {
                    $emp_id_copy_name = $_FILES['emp_id_copy']['name'];
                    $emp_id_copy_temp = $_FILES['emp_id_copy']['tmp_name'];
                    $emp_id_copy_type = $_FILES['emp_id_copy']['type'];
                    $emp_id_copy_size = $_FILES['emp_id_copy']['size'];
                    $emp_id_copy_uploaded = time() . '_' . $emp_id_copy_name;
                    move_uploaded_file(
                        $emp_id_copy_temp,
                        'uploaded_files/' . $emp_id_copy_uploaded
                    );
                }
                if (!empty($_FILES['emp_qualification_copy']['name'])) {
                    $emp_qualification_copy_name = $_FILES['emp_qualification_copy']['name'];
                    $emp_qualification_copy_temp = $_FILES['emp_qualification_copy']['tmp_name'];
                    $emp_qualification_copy_uploaded = time() . '_' . $emp_qualification_copy_name;
                    move_uploaded_file(
                        $emp_qualification_copy_temp,
                        'uploaded_files/' . $emp_qualification_copy_uploaded
                    );
                } else {
                    $emp_qualification_copy_uploaded = '';
                }

                if (!empty($_FILES['emp_national_address_copy']['name'])) {
                    $emp_national_address_copy_name = $_FILES['emp_national_address_copy']['name'];
                    $emp_national_address_copy_temp = $_FILES['emp_national_address_copy']['tmp_name'];
                    $emp_national_address_copy_uploaded = time() . '_' . $emp_national_address_copy_name;
                    move_uploaded_file(
                        $emp_national_address_copy_temp,
                        'uploaded_files/' . $emp_national_address_copy_uploaded
                    );
                } else {
                    $emp_national_address_copy_uploaded = '';
                }

                if (isset($_POST['emp_prof_licing_copy'])) {
                    if (!empty($_FILES['emp_prof_licing_copy']['name'])) {
                        $emp_prof_licing_copy_name = $_FILES['emp_prof_licing_copy']['name'];
                        $emp_prof_licing_copy_temp = $_FILES['emp_prof_licing_copy']['tmp_name'];
                        $emp_prof_licing_copy_uploaded = time() . '_' . $emp_prof_licing_copy_name;
                        move_uploaded_file(
                            $emp_prof_licing_copy_temp,
                            'uploaded_files/' . $emp_prof_licing_copy_uploaded
                        );
                    } else {
                        $emp_prof_licing_copy_uploaded = '';
                    }
                } else {
                    $emp_prof_licing_copy_uploaded = '';
                }



                if (!empty($_FILES['emp_bank_account_copy']['name'])) {
                    $emp_bank_account_copy_name = $_FILES['emp_bank_account_copy']['name'];
                    $emp_bank_account_copy_temp = $_FILES['emp_bank_account_copy']['tmp_name'];
                    $emp_bank_account_copy_uploaded = time() . '_' . $emp_bank_account_copy_name;
                    move_uploaded_file(
                        $emp_bank_account_copy_temp,
                        'uploaded_files/' . $emp_bank_account_copy_uploaded
                    );
                } else {
                    $emp_bank_account_copy_uploaded = '';
                }
                if (!empty($_FILES['other_copy1']['name'])) {
                    $other_copy1_name = $_FILES['other_copy1']['name'];
                    $other_copy1_temp = $_FILES['other_copy1']['tmp_name'];
                    $other_copy1_uploaded = time() . '_' . $other_copy1_name;
                    move_uploaded_file(
                        $other_copy1_temp,
                        'uploaded_files/' . $other_copy1_uploaded
                    );
                } else {
                    $other_copy1_uploaded = '';
                }

                if (!empty($_FILES['other_copy2']['name'])) {
                    $other_copy2_name = $_FILES['other_copy2']['name'];
                    $other_copy2_temp = $_FILES['other_copy2']['tmp_name'];
                    $other_copy2_uploaded = time() . '_' . $other_copy2_name;
                    move_uploaded_file(
                        $other_copy2_temp,
                        'uploaded_files/' . $other_copy2_uploaded
                    );
                } else {
                    $other_copy2_uploaded = '';
                }
                if (!empty($_FILES['other_copy3']['name'])) {
                    $other_copy3_name = $_FILES['other_copy3']['name'];
                    $other_copy3_temp = $_FILES['other_copy3']['tmp_name'];
                    $other_copy3_uploaded = time() . '_' . $other_copy3_name;
                    move_uploaded_file(
                        $other_copy3_temp,
                        'uploaded_files/' . $other_copy3_uploaded
                    );
                } else {
                    $other_copy3_uploaded = '';
                }

                $forerror = [];
                if (strlen($emp_building_num > 4 || $emp_building_num < 4)) {
                    $forerror[] = 'رقم المبني يجب ان يكون 4 ارقام';
                }
                if (strlen($emp_secondary_num > 4 || $emp_secondary_num < 4)) {
                    $forerror[] = 'الرقم  الاضافي  يجب ان يكون 4 ارقام';
                }
                if (strlen($emp_postal_code > 5 || $emp_postal_code < 5)) {
                    $forerror[] = ' الرمز   البريدي  يجب ان يكون 5 ارقام';
                }

                $stmt = $connect->prepare("SELECT * FROM emp_form WHERE emp_id_number=?");
                $stmt->execute(array($emp_id_number));
                $count = $stmt->rowCount();
                if ($count > 0) {
                    $forerror[] = ' رقم الهوية مسجل  بالفعل  ';
                }

                $stmt = $connect->prepare('INSERT INTO emp_form (emp_brach,emp_gender,emp_name,emp_nationality,emp_id_number,
                emp_id_expire_date_h,  emp_id_expire_date_m,
                emp_place_issue_m,  emp_date_birth_h,  emp_date_birth_m, emp_material_status,
                emp_qualification, emp_grade,  emp_specialist,
                emp_professional_licing,  emp_expire_date_pro_licing_h,  emp_expire_date_pro_licing_m,
                emp_school,  emp_job,  emp_stage, emp_teaching_subject,  emp_date_start_y_h,
                emp_date_start_y_m,  emp_building_num, emp_secondary_num,  emp_postal_code,  emp_town,
                emp_city,  emp_flate_number,  emp_street,  emp_email_address, emp_mobile,iban_number,
                emp_bank,  emp_id_copy,  emp_qualification_copy,  emp_national_address_copy,
                emp_prof_licing_copy,  emp_bank_account_copy,
                other_copy1_name,other_copy1,other_copy2_name,other_copy2,other_copy3_name, other_copy3) VALUES(:zemp_brach,:zgender,:zemp_name,:zemp_nationality,:zemp_id_number,
                :zemp_id_expire_date_h,  :zemp_id_expire_date_m,
                :zemp_place_issue_m,  :zemp_date_birth_h,  :zemp_date_birth_m, :zemp_material_status,
                :zemp_qualification, :zemp_grade,  :zemp_specialist,
                :zemp_professional_licing,  :zemp_expire_date_pro_licing_h,  :zemp_expire_date_pro_licing_m,
                :zemp_school,  :zemp_job,  :zemp_stage, :zemp_teaching_subject,  :zemp_date_start_y_h,
                :zemp_date_start_y_m,  :zemp_building_num, :zemp_secondary_num,  :zemp_postal_code,  :zemp_town,
                :zemp_city,  :zemp_flate_number,  :zemp_street,  :zemp_email_address, :zemp_mobile,:ziban_number,
                :zemp_bank,  :zemp_id_copy,  :zemp_qualification_copy,  :zemp_national_address_copy,
                :zemp_prof_licing_copy,  :zemp_bank_account_copy,
                :zother_copy1_name,:zother_copy1,:zother_copy2_name,:zother_copy2,:zother_copy3_name ,:zother_copy3)');
                $stmt->execute(array(
                    'zemp_brach' => $emp_brach,
                    'zgender' => $emp_gender,
                    'zemp_name' => $emp_name,
                    'zemp_nationality' => $emp_nationality,
                    'zemp_id_number' => $emp_id_number,
                    'zemp_id_expire_date_h' => $emp_id_expire_date_h,
                    'zemp_id_expire_date_m' => $emp_id_expire_date_m,
                    'zemp_place_issue_m' => $emp_place_issue_m,
                    'zemp_date_birth_h' => $emp_date_birth_h,
                    'zemp_date_birth_m' => $emp_date_birth_m,
                    'zemp_material_status' => $emp_material_status,
                    'zemp_qualification' => $emp_qualification,
                    'zemp_grade' => $emp_grade,
                    'zemp_specialist' => $emp_specialist,
                    'zemp_professional_licing' => $emp_professional_licing,
                    'zemp_expire_date_pro_licing_h' => $emp_expire_date_pro_licing_h,
                    'zemp_expire_date_pro_licing_m' => $emp_expire_date_pro_licing_m,
                    'zemp_school' => $emp_school,
                    'zemp_job' => $emp_job,
                    'zemp_stage' => $emp_stage,
                    'zemp_teaching_subject' => $emp_teaching_subject,
                    'zemp_date_start_y_h' => $emp_date_start_y_h,
                    'zemp_date_start_y_m' => $emp_date_start_y_m,
                    'zemp_building_num' => $emp_building_num,
                    'zemp_secondary_num' => $emp_secondary_num,
                    'zemp_postal_code' => $emp_postal_code,
                    'zemp_town' => $emp_town,
                    'zemp_city' => $emp_city,
                    'zemp_flate_number' => $emp_flate_number,
                    'zemp_street' => $emp_street,
                    'zemp_email_address' => $emp_email_address,
                    'zemp_mobile' => $emp_mobile,
                    'ziban_number' => $iban_number,
                    'zemp_bank' => $emp_bank,
                    'zemp_id_copy' => $emp_id_copy_uploaded,
                    'zemp_qualification_copy' => $emp_qualification_copy_uploaded,
                    'zemp_national_address_copy' => $emp_national_address_copy_uploaded,
                    'zemp_prof_licing_copy' => $emp_prof_licing_copy_uploaded,
                    'zemp_bank_account_copy' => $emp_bank_account_copy_uploaded,
                    'zother_copy1_name' => $other_copy1_nameee,
                    'zother_copy1' => $other_copy1_uploaded,
                    'zother_copy2_name' => $other_copy2_nameee,
                    'zother_copy2' => $other_copy2_uploaded,
                    'zother_copy3_name' => $other_copy3_nameee,
                    'zother_copy3' => $other_copy3_uploaded,
                ));
                if ($stmt) { ?>
                    <div class="container">
                        <div class="alert alert-success"> شكرا لك تم تسجيل بياناتك بنجاح </div>
                    </div>
                    <?php

                    header('refresh:3;url=index.php');

                    ?>
                <?php
                } else {
                ?>
                    <div class="container">
                        <?php
                        foreach ($forerror as $error) {
                        ?>
                            <div class="alert alert-danger"> <?php echo $error; ?> </div>
                        <?php
                        }

                        ?>

                    </div>
            <?php
                }
            }
            ?>
            <form method="POST" id="signup-form" class="signup-form" action="" enctype="multipart/form-data">

                <div class="print_content">
                    <h3>البيانــــات الشخصيــــــة </h3>
                    <fieldset>

                        <div class="form-group">
                            <label for="emp_brach" class="form-label"> تصنيف الموظف <span class="star"> * </span> </label>
                            <select name="emp_brach" id="emp_brach">
                                <option value=""> -- التصنيف -- </option>
                                <?php
                                $stmt = $connect->prepare("SELECT * FROM emp_branche");
                                $stmt->execute();
                                $alldata = $stmt->fetchAll();
                                foreach ($alldata as $data) { ?>
                                    <option value="<?php echo $data['name']; ?>"> <?php echo $data['name']; ?> </option>
                                <?php
                                }
                                ?>

                            </select>
                        </div>

                        <div class="form-group">
                            <label for="emp_gender" class="form-label"> النوع Gender <span class="star"> * </span> </label>
                            <select name="emp_gender" id="emp_gender">
                                <option value=""> -- اختر -- </option>
                                <option value="ذكر"> ذكر Male </option>
                                <option value="انثي"> انثي Female </option>

                            </select>
                        </div>


                        <h2>البيانــــات الشخصيــــــة (Personal Information )</h2>

                        <div class="fieldset-content">
                            <div class="form-group">
                                <label class="form-label"> الاسم بالكامل ( Full Name ) <span class="star"> * </span></label>
                                <input type="text" name="emp_name" id="name" required />
                            </div>

                            <div class="form-group">
                                <label for="emp_nationality" class="form-label"> الجنسية (Nationalit) <span class="star"> * </span> </label>
                                <select class="select" required name="emp_nationality" id="emp_nationality">
                                    <option value=""> اختر الدولة </option>
                                    <?php
                                    $stmt = $connect->prepare("SELECT * FROM countries");
                                    $stmt->execute();
                                    $allcount = $stmt->fetchAll();
                                    foreach ($allcount as $country) { ?>
                                        <option value="<?php echo $country['name']; ?>"> <?php echo $country['name']; ?> || <?php echo $country['name_ar']; ?></option>
                                    <?php
                                    }
                                    ?>


                                </select>
                            </div>
                            <div class="form-group">
                                <label for="emp_id_number" class="form-label">رقم الهوية (ID Number) <span class="star"> * </span> </label>
                                <input required maxlength="10" type="number" name="emp_id_number" id="emp_id_number" placeholder="من فضلك يجب ان يكون 10 ارقام" />
                            </div>

                            <div class="form-row">
                                <label for="" class="form-label"> تاريخ انتهاء الهوية (ID Expire Date) <span class="star">*</span> </label>

                                <div class="form-flex">
                                    <div class="form-group">
                                        <div id="cal-1" class="select_date">
                                            <input required id="date-1" type="text" name="emp_id_expire_date_m" />
                                            <button class="icon-button showcall1" id="btn1" onclick="showCal1();">&#x25a6;</button>
                                        </div>
                                        <!-- <input type="text" name="first_name" id="first_name" /> -->
                                    </div>
                                    <div class="form-group">

                                        <div id="cal-2" class="select_date">
                                            <input required id="date-2" type="text" name="emp_id_expire_date_h" />
                                            <button class="icon-button showcall1" onclick="showCal2();">&#x25a6;</button>
                                        </div>
                                        <!-- <input type="text" name="first_name" id="first_name" /> -->
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="emp_place_issue_m" class="form-label">مكان الإصدار (Place Of Issue) <span class="star"> * </span> </label>
                                <select class="select" required name="emp_place_issue_m" id="emp_place_issue_m">
                                    <option value=""> -- اختر المكان --</option>
                                    <?php
                                    $stmt = $connect->prepare("SELECT * FROM emp_place");
                                    $stmt->execute();
                                    $allcount = $stmt->fetchAll();
                                    foreach ($allcount as $place) { ?>
                                        <option value="<?php echo $place['name']; ?>"> <?php echo $place['name']; ?></option>
                                    <?php
                                    }
                                    ?>


                                </select>
                            </div>

                            <div class="form-row">
                                <label for="" class="form-label"> تاريـــخ الميـلاد (Date of Birth) <span class="star"> * </span> </label>

                                <div class="form-flex">
                                    <div class="form-group">
                                        <div id="cal-5" class="select_date">
                                            <input id="date-5" type="text" name="emp_date_birth_m" />
                                            <button class="icon-button showcall1" onclick="showCal5();">&#x25a6;</button>
                                        </div>
                                        <!-- <input type="text" name="first_name" id="first_name" /> -->
                                    </div>
                                    <div class="form-group">

                                        <div id="cal-6" class="select_date">
                                            <input id="date-6" type="text" name="emp_date_birth_h" />
                                            <button class="icon-button showcall1" onclick="showCal6();">&#x25a6;</button>
                                        </div>
                                        <!-- <input type="text" name="first_name" id="first_name" /> -->
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="emp_material_status" class="form-label"> الحالة الاجتماعية (Marital Status)<span class="star"> * </span> </label>
                                <select required name="emp_material_status" id="emp_material_status">
                                    <option value=""> -- اختر الحالة الاجتماعية -- </option>
                                    <option value="اعزب"> اعزب (single )</option>
                                    <option value="متزوج"> متزوج (married ) </option>
                                    <option value="منفصل"> منفصل (divorcee ) </option>
                                    <option value="ارمل"> ارمل (Widower ) </option>
                                </select>
                            </div>
                        </div>
                    </fieldset>

                    <h3>البيانات الاكاديمية</h3>
                    <fieldset>
                        <h2> البيانات الاكاديمية (Academic Information ) </h2>
                        <div class="fieldset-content">
                            <div class="form-group">
                                <label for="emp_qualification" class="form-label"> المؤهل (Qualification) <span class="star"> * </span> </label>
                                <select required name="emp_qualification" id="emp_qualification">
                                    <option value=""> -- المؤهل -- </option>
                                    <?php
                                    $stmt = $connect->prepare("SELECT * FROM qualification");
                                    $stmt->execute();
                                    $alldata = $stmt->fetchAll();
                                    foreach ($alldata as $data) { ?>
                                        <option value="<?php echo $data['name']; ?>"> <?php echo $data['name']; ?> </option>
                                    <?php
                                    }

                                    ?>

                                </select>
                            </div>
                            <div class="form-group">
                                <label for="emp_grade" class="form-label"> التقدير (Garde) <span class="star"> * </span> </label>
                                <select required name="emp_grade" id="emp_grade">
                                    <option value=""> -- التقدير -- </option>
                                    <?php
                                    $stmt = $connect->prepare("SELECT * FROM grade");
                                    $stmt->execute();
                                    $alldata = $stmt->fetchAll();
                                    foreach ($alldata as $data) { ?>
                                        <option value="<?php echo $data['name']; ?>"> <?php echo $data['name']; ?> </option>
                                    <?php
                                    }

                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="emp_specialist" class="form-label"> التخصص (Profession) <span class="star"> * </span> </label>
                                <select required name="emp_specialist" id="emp_specialist">
                                    <option value=""> -- التخصص -- </option>
                                    <?php
                                    $stmt = $connect->prepare("SELECT * FROM specialist");
                                    $stmt->execute();
                                    $alldata = $stmt->fetchAll();
                                    foreach ($alldata as $data) { ?>
                                        <option value="<?php echo $data['name']; ?>"> <?php echo $data['name']; ?> </option>
                                    <?php
                                    }

                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="emp_professional_licing" class="form-label"> الرخصة المهنية (Professional Licensing) <span class="star"> * </span> </label>

                                <div class="new_box check_box_div">
                                    <div class="input-group input-group-sm">
                                        <div class="check_box_items">
                                            <div class="form-check">
                                                <label class="form-check-label" for="tax_client_prev1">
                                                    يوجد
                                                </label>
                                                <input required class="form-check-input" type="radio" name="emp_professional_licing" id="tax_client_prev1" value="يوجد">
                                            </div>
                                            <div class="form-check">
                                                <label class="form-check-label" for="tax_client_prev2">
                                                    لا يوجد
                                                </label>
                                                <input required class="form-check-input" type="radio" name="emp_professional_licing" id="tax_client_prev2" value="لا يوجد">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <div class="form-row" id="checked_input">
                                <label for="" class="form-label"> تاريخ انتهاء الرخصة (Expiration Date of Professional Licensing) <span class="star"> * </span> </label>
                                <div class="form-flex">
                                    <div class="form-group">
                                        <div id="cal-7" class="select_date">
                                            <input id="date-7" type="text" name="emp_expire_date_pro_licing_m" />
                                            <button class="icon-button showcall1" onclick="showCal7();">&#x25a6;</button>
                                        </div>
                                        <!-- <input type="text" name="first_name" id="first_name" /> -->
                                    </div>
                                    <div class="form-group">

                                        <div id="cal-8" class="select_date">
                                            <input id="date-8" type="text" name="emp_expire_date_pro_licing_h" />
                                            <button class="icon-button showcall1" onclick="showCal8();">&#x25a6;</button>
                                        </div>
                                        <!-- <input type="text" name="first_name" id="first_name" /> -->
                                    </div>
                                </div>
                            </div>
                        </div>

                    </fieldset>

                    <h3> البيانات الوظيفية </h3>
                    <fieldset>
                        <h2> البيانات الوظيفية Job Information</h2>
                        <div class="fieldset-content">
                            <div class="form-group">
                                <label for="emp_school" class="form-label"> اسم المدرسة (School Name ) <span class="star"> * </span> </label>
                                <select required name="emp_school" id="emp_school">
                                    <option value=""> -- اختر -- </option>
                                    <?php
                                    $stmt = $connect->prepare("SELECT * FROM schools");
                                    $stmt->execute();
                                    $alldata = $stmt->fetchAll();
                                    foreach ($alldata as $data) { ?>
                                        <option value="<?php echo $data['name']; ?>"> <?php echo $data['name']; ?> </option>
                                    <?php
                                    }

                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="emp_job" class="form-label">الوظيفة(Job) <span class="star"> * </span> </label>
                                <select required name="emp_job" id="emp_job">
                                    <option value=""> -- اختر -- </option>
                                    <?php
                                    $stmt = $connect->prepare("SELECT * FROM jobs");
                                    $stmt->execute();
                                    $alldata = $stmt->fetchAll();
                                    foreach ($alldata as $data) { ?>
                                        <option value="<?php echo $data['name']; ?>"> <?php echo $data['name']; ?> </option>
                                    <?php
                                    }

                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="emp_stage" class="form-label">المرحلة(Stage) <span class="star"> * </span> </label>
                                <select required name="emp_stage" id="emp_stage">
                                    <option value=""> -- اختر -- </option>
                                    <?php
                                    $stmt = $connect->prepare("SELECT * FROM stage");
                                    $stmt->execute();
                                    $alldata = $stmt->fetchAll();
                                    foreach ($alldata as $data) { ?>
                                        <option value="<?php echo $data['name']; ?>"> <?php echo $data['name']; ?> </option>
                                    <?php
                                    }

                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="emp_teaching_subject" class="form-label">مادة التدريس (ان وجدت)(Teaching Subject ( if there )) <span class="star"> * </span> </label>
                                <select required name="emp_teaching_subject" id="emp_teaching_subject">
                                    <option value=""> -- اختر -- </option>
                                    <?php
                                    $stmt = $connect->prepare("SELECT * FROM teaching_subject");
                                    $stmt->execute();
                                    $alldata = $stmt->fetchAll();
                                    foreach ($alldata as $data) { ?>
                                        <option value="<?php echo $data['name']; ?>"> <?php echo $data['name']; ?> </option>
                                    <?php
                                    }

                                    ?>
                                </select>
                            </div>
                            <div class="form-row">
                                <label for="" class="form-label"> تاريخ انتهاء الرخصة (Expiration Date of Professional Licensing) <span class="star"> * </span> </label>

                                <div class="form-flex">
                                    <div class="form-group">
                                        <div id="cal-9" class="select_date">
                                            <input id="date-9" type="text" name="emp_date_start_y_m" />
                                            <button class="icon-button showcall1" onclick="showCal9();">&#x25a6;</button>
                                        </div>
                                        <!-- <input type="text" name="first_name" id="first_name" /> -->
                                    </div>
                                    <div class="form-group">

                                        <div id="cal-10" class="select_date">
                                            <input id="date-10" type="text" name="emp_date_start_y_h" />
                                            <button class="icon-button showcall1" onclick="showCal10();">&#x25a6;</button>
                                        </div>
                                        <!-- <input type="text" name="first_name" id="first_name" /> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <h3> العنوان الوطني والبنك </h3>
                    <fieldset>
                        <h2> العنوان الوطني والبنك National Address </h2>
                        <div class="fieldset-content">

                            <div class="form-group">
                                <label for="emp_building_num" class="form-label"> رقم المبنى الاساسي (Building No) <span class="star"> * </span> </label>
                                <input minlength="4" maxlength="4" required type="text" name="emp_building_num" id="emp_building_num" />
                            </div>
                            <div class="form-group">
                                <label for="emp_secondary_num" class="form-label"> الرقم الإضافي (Secondary No.) <span class="star"> * </span> </label>
                                <input minlength="4" maxlength="4" required type="text" name="emp_secondary_num" id="emp_secondary_num" />
                            </div>
                            <div class="form-group">
                                <label for="emp_postal_code" class="form-label">الرمز البريدي (Postal Code) <span class="star"> * </span> </label>
                                <input minlength="5" maxlength="5" required type="text" name="emp_postal_code" id="emp_postal_code" />
                            </div>
                            <div class="form-group">
                                <label for="emp_town" class="form-label"> المدينة (City) <span class="star"> * </span> </label>

                                <select class="select" required name="emp_town" id="emp_town">
                                    <option value=""> -- اختر --</option>
                                    <?php
                                    $stmt = $connect->prepare("SELECT * FROM emp_city");
                                    $stmt->execute();
                                    $allcount = $stmt->fetchAll();
                                    foreach ($allcount as $place) { ?>
                                        <option value="<?php echo $place['name']; ?>"> <?php echo $place['name']; ?></option>
                                    <?php
                                    }
                                    ?>


                                </select>

                            </div>
                            <div class="form-group">
                                <label for="emp_city" class="form-label"> الحي (Area) <span class="star"> * </span> </label>
                                <input required type="text" name="emp_city" id="emp_city" />
                            </div>
                            <div class="form-group">
                                <label for="emp_flate_number" class="form-label"> رقم الوحدة او الشقة (Flat Number) <span class="star"> * </span> </label>
                                <input type="text" name="emp_flate_number" id="emp_flate_number" />
                            </div>
                            <div class="form-group">
                                <label for="emp_street" class="form-label">الشارع (Street) <span class="star"> * </span> </label>
                                <input type="text" name="emp_street" id="emp_street" />
                            </div>
                            <div class="form-group">
                                <label for="emp_email_address" class="form-label">البريد الالكتروني (Email Address ) <span class="star"> * </span> </label>
                                <input required type="email" name="emp_email_address" id="emp_email_address" />
                            </div>
                            <div class="form-group">
                                <label for="emp_mobile" class="form-label"> الجوال المسجل بنظام أبشر (Abshir Mobile No.) <span class="star"> * </span> </label>
                                <input minlength="10" maxlength="10" required type="number" name="emp_mobile" id="emp_mobile" />
                            </div>
                            <div class="form-group iban">
                                <label for="iban_number" class="form-label"> رقم الآيبان (IBAN Number.) <span class="star"> * </span> </label>
                                <input required type="text" name="iban_number" id="iban_number" />
                                <span class="iban_span"> SA </span>
                            </div>
                            <div class="form-group">
                                <label for="emp_bank" class="form-label"> البنك ( Bank) <span class="star"> * </span> </label>
                                <select required name="emp_bank" id="emp_bank">
                                    <option value=""> -- اختر -- </option>
                                    <?php
                                    $stmt = $connect->prepare("SELECT * FROM bank");
                                    $stmt->execute();
                                    $alldata = $stmt->fetchAll();
                                    foreach ($alldata as $data) { ?>
                                        <option value="<?php echo $data['name']; ?>"> <?php echo $data['name']; ?> </option>
                                    <?php
                                    }

                                    ?>
                                </select>
                            </div>

                        </div>
                    </fieldset>
                    <h3> قسم الوثائق </h3>
                    <fieldset>
                        <h2> قسم الوثائق Document Section </h2>
                        <p> الرجاء ارسال الوثائق بشكل واضح لانها تستخدم للدوائر الرسمية الحكومية
                            Please Attach a Clear Copy Of document Because it’s Use for Official Government Department </p>
                        <div class="fieldset-content">
                            <div class="form-group">
                                <label for="emp_id_copy" class="form-label"> صورة الهوية (ID Copy) <span class="star"> * </span> </label>
                                <input required type="file" name="emp_id_copy" id="emp_id_copy" accept="application/pdf,image/*" />
                            </div>
                            <div class="form-group">
                                <label for="emp_qualification_copy" class="form-label"> صورة المؤهل (Qualification Copy) <span class="star"> * </span> </label>
                                <input required type="file" name="emp_qualification_copy" id="emp_qualification_copy" accept="application/pdf,image/*" />
                            </div>
                            <div class="form-group">
                                <label for="emp_national_address_copy" class="form-label">صورة العنوان الوطني(National Address Copy ) <span class="star"> * </span> </label>
                                <input required type="file" name="emp_national_address_copy" id="emp_national_address_copy" accept="application/pdf,image/*" />
                            </div>
                            <div class="form-group" id="checked_input2">
                                <label for="emp_prof_licing_copy" class="form-label"> صورة الرخصة المهنية ( Professional Licensing Copy ) <span class="star"> * </span> </label>
                                <input type="file" name="emp_prof_licing_copy" id="emp_prof_licing_copy" accept="application/pdf,image/*" />
                            </div>
                            <div class="form-group">
                                <label for="emp_bank_account_copy" class="form-label">صورة الحساب البنكي (Bank Account Information) <span class="star"> * </span> </label>
                                <input required type="file" name="emp_bank_account_copy" id="emp_bank_account_copy" accept="application/pdf,image/*" />
                            </div>
                            <div class="form-flex">
                                <div class="form-group">
                                    <div id="cal-11" class="select_date">
                                        <input id="date-11" type="text" name="emp_date_start_y_m" />
                                        <button class="icon-button showcall1" onclick="showCal11();">&#x25a6;</button>
                                    </div>
                                    <!-- <input type="text" name="first_name" id="first_name" /> -->
                                </div>
                                <div class="form-group">
                                    <div id="cal-12" class="select_date">
                                        <input id="date-12" type="text" name="emp_date_start_y_h" />
                                        <button class="icon-button showcall1" onclick="showCal12();">&#x25a6;</button>
                                    </div>
                                    <!-- <input type="text" name="first_name" id="first_name" /> -->
                                </div>
                            </div>
                            <div class="form-row">
                                <label for="" class="form-label">مرفقات أخرى 1 (Other Attachment 1) </label>

                                <div class="form-flex">
                                    <div class="form-group">
                                        <label class="form-label"> عنوان مرفق 1 (Attach1 Label) </label>
                                        <div>
                                            <input type="text" name="other_copy1_name" id="other_copy1_name" />
                                        </div>
                                        <!-- <input type="text" name="first_name" id="first_name" /> -->
                                    </div>
                                    <div class="form-group">
                                        <label for="other_copy1" class="form-label"> المرفق </label>
                                        <input type="file" name="other_copy1" id="other_copy1" accept="application/pdf,image/*" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <label for="" class="form-label">مرفقات أخرى 2 (Other Attachment 2) </label>

                                <div class="form-flex">
                                    <div class="form-group">
                                        <label class="form-label"> عنوان مرفق 2 (Attach2 Label) </label>
                                        <div>
                                            <input type="text" name="other_copy2_name" id="other_copy2_name" />
                                        </div>
                                        <!-- <input type="text" name="first_name" id="first_name" /> -->
                                    </div>
                                    <div class="form-group">
                                        <label for="other_copy2" class="form-label"> المرفق </label>
                                        <input type="file" name="other_copy2" id="other_copy2" accept="application/pdf,image/*" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <label for="" class="form-label">مرفقات أخرى 3 (Other Attachment 3) </label>

                                <div class="form-flex">
                                    <div class="form-group">
                                        <label class="form-label"> عنوان مرفق 3 (Attach3 Label) </label>
                                        <div>
                                            <input type="text" name="other_copy3_name" id="other_copy3_name" />
                                        </div>
                                        <!-- <input type="text" name="first_name" id="first_name" /> -->
                                    </div>
                                    <div class="form-group">
                                        <label for="other_copy3" class="form-label"> المرفق </label>
                                        <input type="file" name="other_copy3" id="other_copy3" accept="application/pdf,image/*" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group text-center" style="display: block;">
                                <button class="btn btn-primary" type="submit"> ارسال <i class="fa fa-plane"></i> </button>
                                <button type="reset" class="btn btn-warning"> <a href="index.php" style="color: #fff;"> مسح </a> </button>
                                <!-- <button class="printbtn">Print</button> -->
                            </div>
                        </div>

                    </fieldset>
                </div>
            </form>
        </div>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="vendor/jquery-validation/dist/additional-methods.min.js"></script>
    <script src="vendor/jquery-steps/jquery.steps.min.js"></script>
    <script src="vendor/minimalist-picker/dobpicker.js"></script>
    <script src="vendor/nouislider/nouislider.min.js"></script>
    <script src="vendor/wnumb/wNumb.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="js/jquery.PrintArea.js"></script>
    <script src="js/calendar.js"></script>
    <script src="js/hijri-date.js"></script>
    <script src="js/main.js"></script>
</body>

</html>
<!-- START GET DATE -->

<script>
    $(".select").select2();
    let checkbox = document.getElementById("tax_client_prev1");
    let checkbox2 = document.getElementById("tax_client_prev2");
    checkbox.addEventListener("change", () => {
        if (checkbox.checked) {
            $("#checked_input").css("display", "block");
            $("#checked_input2").css("display", "block");
        }
    });
    checkbox2.addEventListener("change", () => {
        if (checkbox2.checked) {
            $("#checked_input").css("display", "none");
            $("#checked_input2").css("display", "none");
        }
    });
</script>
<script>
    $(".printbtn").click(function() {

        var mode = "iframe";
        var close = mode == "popup";
        var options = {
            mode: mode,
            popClose: close
        };
        $(".print_content").printArea(options);
    });
</script>

<script>
    $(".showcall1").click(function(e) {
        e.preventDefault();
    });
    $(".printbtn").click(function(e) {
        e.preventDefault();
    })
    var cal1 = new Calendar(),
        cal2 = new Calendar(true, 0, false, true),
        date1 = document.getElementById('date-1'),
        date2 = document.getElementById('date-2'),
        cal1Mode = cal1.isHijriMode(),
        cal2Mode = cal2.isHijriMode(),


        // date3

        cal5 = new Calendar(),
        cal6 = new Calendar(true, 0, false, true),

        date5 = document.getElementById('date-5'),
        date6 = document.getElementById('date-6'),
        cal5Mode = cal5.isHijriMode(),
        cal6Mode = cal6.isHijriMode();
    // date4

    cal7 = new Calendar(),
        cal8 = new Calendar(true, 0, false, true),

        date7 = document.getElementById('date-7'),
        date8 = document.getElementById('date-8'),
        cal7Mode = cal7.isHijriMode(),
        cal8Mode = cal8.isHijriMode();

    // date5

    cal9 = new Calendar(),
        cal10 = new Calendar(true, 0, false, true),

        date9 = document.getElementById('date-9'),
        date10 = document.getElementById('date-10'),
        cal9Mode = cal9.isHijriMode(),
        cal10Mode = cal10.isHijriMode();

    // date6

    cal11 = new Calendar(),
        cal12 = new Calendar(true, 0, false, true),

        date11 = document.getElementById('date-11'),
        date12 = document.getElementById('date-12'),
        cal11Mode = cal11.isHijriMode(),
        cal12Mode = cal12.isHijriMode();

    document.getElementById('cal-1').appendChild(cal1.getElement());
    document.getElementById('cal-2').appendChild(cal2.getElement());
    cal1.hide();
    cal2.hide();

    document.getElementById('cal-5').appendChild(cal5.getElement());
    document.getElementById('cal-6').appendChild(cal6.getElement());
    cal5.hide();
    cal6.hide();
    document.getElementById('cal-7').appendChild(cal7.getElement());
    document.getElementById('cal-8').appendChild(cal8.getElement());
    cal7.hide();
    cal8.hide();
    document.getElementById('cal-9').appendChild(cal9.getElement());
    document.getElementById('cal-10').appendChild(cal10.getElement());
    cal9.hide();
    cal10.hide();
    document.getElementById('cal-11').appendChild(cal11.getElement());
    document.getElementById('cal-12').appendChild(cal12.getElement());
    cal11.hide();
    cal12.hide();
    setDateFields();

    cal1.callback = function() {
        if (cal1Mode !== cal1.isHijriMode()) {
            cal2.disableCallback(true);
            cal2.changeDateMode();
            cal2.disableCallback(false);
            cal1Mode = cal1.isHijriMode();
            cal2Mode = cal2.isHijriMode();
        } else
            cal2.setTime(cal1.getTime());
        setDateFields();
    };


    cal5.callback = function() {
        if (cal5Mode !== cal5.isHijriMode()) {
            cal5.disableCallback(true);
            cal5.changeDateMode();
            cal5.disableCallback(false);
            cal5Mode = cal6.isHijriMode();
            cal6Mode = cal6.isHijriMode();
        } else
            cal6.setTime(cal5.getTime());
        setDateFields();
    };
    cal7.callback = function() {
        if (cal7Mode !== cal7.isHijriMode()) {
            cal7.disableCallback(true);
            cal7.changeDateMode();
            cal7.disableCallback(false);
            cal7Mode = cal7.isHijriMode();
            cal8Mode = cal7.isHijriMode();
        } else
            cal8.setTime(cal7.getTime());
        setDateFields();
    };
    cal9.callback = function() {
        if (cal9Mode !== cal9.isHijriMode()) {
            cal9.disableCallback(true);
            cal9.changeDateMode();
            cal9.disableCallback(false);
            cal9Mode = cal9.isHijriMode();
            cal10Mode = cal9.isHijriMode();
        } else
            cal10.setTime(cal9.getTime());
        setDateFields();
    };
    cal11.callback = function() {
        if (cal11Mode !== cal11.isHijriMode()) {
            cal11.disableCallback(true);
            cal11.changeDateMode();
            cal11.disableCallback(false);
            cal11Mode = cal11.isHijriMode();
            cal12Mode = cal11.isHijriMode();
        } else
            cal12.setTime(cal11.getTime());
        setDateFields();
    };

    cal2.callback = function() {
        if (cal2Mode !== cal2.isHijriMode()) {
            cal1.disableCallback(true);
            cal1.changeDateMode();
            cal1.disableCallback(false);
            cal1Mode = cal1.isHijriMode();
            cal2Mode = cal2.isHijriMode();
        } else
            cal1.setTime(cal2.getTime());
        setDateFields();
    };



    cal6.callback = function() {
        if (cal6Mode !== cal6.isHijriMode()) {
            cal5.disableCallback(true);
            cal5.changeDateMode();
            cal5.disableCallback(false);
            cal5Mode = cal5.isHijriMode();
            cal6Mode = cal6.isHijriMode();
        } else
            cal5.setTime(cal6.getTime());
        setDateFields();
    };

    cal8.callback = function() {
        if (cal8Mode !== cal8.isHijriMode()) {
            cal7.disableCallback(true);
            cal7.changeDateMode();
            cal7.disableCallback(false);
            cal7Mode = cal7.isHijriMode();
            cal8Mode = cal8.isHijriMode();
        } else
            cal7.setTime(cal8.getTime());
        setDateFields();
    };



    cal10.callback = function() {
        if (cal10Mode !== cal10.isHijriMode()) {
            cal9.disableCallback(true);
            cal9.changeDateMode();
            cal9.disableCallback(false);
            cal9Mode = cal9.isHijriMode();
            cal10Mode = cal10.isHijriMode();
        } else
            cal9.setTime(cal10.getTime());
        setDateFields();
    };
    cal12.callback = function() {
        if (cal12Mode !== cal12.isHijriMode()) {
            cal11.disableCallback(true);
            cal11.changeDateMode();
            cal11.disableCallback(false);
            cal11Mode = cal11.isHijriMode();
            cal12Mode = cal12.isHijriMode();
        } else
            cal11.setTime(cal12.getTime());
        setDateFields();
    };



    function setDateFields() {
        date1.value = cal1.getDate().getDateString();
        date2.value = cal2.getDate().getDateString();
        date5.value = cal5.getDate().getDateString();
        date6.value = cal6.getDate().getDateString();
        date7.value = cal7.getDate().getDateString();
        date8.value = cal8.getDate().getDateString();
        date9.value = cal9.getDate().getDateString();
        date10.value = cal10.getDate().getDateString();
        date11.value = cal11.getDate().getDateString();
        date12.value = cal12.getDate().getDateString();
    }

    function showCal1() {
        if (cal1.isHidden()) cal1.show();
        else cal1.hide();
    }



    function showCal2() {
        if (cal2.isHidden()) cal2.show();
        else cal2.hide();
    }


    function showCal5() {
        if (cal5.isHidden()) cal5.show();
        else cal5.hide();
    }

    function showCal6() {
        if (cal6.isHidden()) cal6.show();
        else cal6.hide();
    }

    function showCal7() {
        if (cal7.isHidden()) cal7.show();
        else cal7.hide();
    }

    function showCal8() {
        if (cal8.isHidden()) cal8.show();
        else cal8.hide();
    }

    function showCal9() {
        if (cal9.isHidden()) cal9.show();
        else cal9.hide();
    }

    function showCal10() {
        if (cal10.isHidden()) cal10.show();
        else cal10.hide();
    }

    function showCal11() {
        if (cal11.isHidden()) cal11.show();
        else cal11.hide();
    }

    function showCal12() {
        if (cal12.isHidden()) cal12.show();
        else cal12.hide();
    }
</script>