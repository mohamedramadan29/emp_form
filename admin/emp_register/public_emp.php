<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="colorlib.com">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> استمارة بيانات موظف </title>
    <!-- Font Icon -->
    <link rel="stylesheet" href="emp_register/fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="emp_register/vendor/nouislider/nouislider.min.css">
    <!-- Google   font  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Kufi+Arabic&display=swap" rel="stylesheet">
    <!-- Main css -->
    <link rel="stylesheet" href="emp_register/css/style.css">
</head>

<body>
    <div class="main">
        <div class="container">

            <?php
            include "../connect.php";
            if (isset($_GET['emp_id'])) {
                $emp_id = $_GET['emp_id'];
            }
            $stmt = $connect->prepare("SELECT * FROM emp_form WHERE emp_id=?");
            $stmt->execute(array($emp_id));
            $emp_data = $stmt->fetch();
            ?>

            <?php

            if ($_SERVER['REQUEST_METHOD'] == "POST") {
                $exper_school = $_POST['exper_school'];
                $insurance_start_date_m = $_POST['insurance_start_date_m'];
                $insurance_start_date_h = $_POST['insurance_start_date_h'];
                $job_in_insurance = $_POST['job_in_insurance'];
                $electronic_contract_start_m = $_POST['electronic_contract_start_m'];
                $electronic_contract_start_h = $_POST['electronic_contract_start_h'];
                $electronic_contract_end_m = $_POST['electronic_contract_end_m'];
                $electronic_contract_end_h = $_POST['electronic_contract_end_h'];
                $basic_salary = $_POST['basic_salary'];
                $housing = $_POST['housing'];
                $other_earns = $_POST['other_earns'];
                $total = $_POST['total'];
                $insurance_deduce = $_POST['insurance_deduce'];
                $net_of_insurance = $_POST['net_of_insurance'];
                $cash = $_POST['cash'];
                $total_get = $_POST['total_get'];
                $daam_ability = $_POST['daam_ability'];
                $daam_kind = $_POST['daam_kind'];
                $daam_start_date = $_POST['daam_start_date'];
                $daam_end_date = $_POST['daam_end_date'];
                $expire_month_reminder = $_POST['expire_month_reminder'];
                //$daam_status = $_POST['daam_status'];
                $notes = $_POST['notes'];

                $stmt = $connect->prepare("UPDATE emp_form SET exper_school=?,insurance_start_date_m=?,
                    insurance_start_date_h=?,job_in_insurance=?,electronic_contract_start_m=?,
                    electronic_contract_start_h=?,electronic_contract_end_m=?,electronic_contract_end_h=?,
                    basic_salary=?,housing=?,other_earns=?,total=?,insurance_deduce=?,net_of_insurance=?,
                    cash=?,total_get=?,daam_ability=?,daam_kind=?,daam_start_date=?,
                    daam_end_date=?,expire_month_reminder=?,notes=? WHERE emp_id=?");
                $stmt->execute(array(
                    $exper_school, $insurance_start_date_m,
                    $insurance_start_date_h, $job_in_insurance, $electronic_contract_start_m,
                    $electronic_contract_start_h, $electronic_contract_end_m, $electronic_contract_end_h,
                    $basic_salary, $housing, $other_earns, $total, $insurance_deduce, $net_of_insurance,
                    $cash, $total_get, $daam_ability, $daam_kind, $daam_start_date,
                    $daam_end_date, $expire_month_reminder, $notes, $emp_id
                ));
                if ($stmt) { ?>
                    <div class="container">
                        <div class="alert alert-success"> تم تعديل واضافة البيانات بنجاح </div>
                    </div>
            <?php
                }
            }
            ?>
            <form method="POST" id="signup-form" class="signup-form form-group" action="" enctype="multipart/form-data">
                <div>
                    <div class="print_content">
                        <div class="fieldset-content">
                            <div class="form-flex">
                                <div class="form-group">
                                    <label class="form-label"> الاسم بالكامل ( Full Name ) <span class="star"> * </span></label>
                                    <input type="text" name="emp_name" id="name" value="<?php echo $emp_data['emp_name']; ?>" />
                                </div>
                                <div class="form-group">
                                    <label for="emp_school" class="form-label"> اسم المدرسة (School Name ) <span class="star"> * </span> </label>
                                    <select name="emp_school" id="emp_school">
                                        <option value=""> -- اختر -- </option>
                                        <?php
                                        $stmt = $connect->prepare("SELECT * FROM schools");
                                        $stmt->execute();
                                        $alldata = $stmt->fetchAll();
                                        foreach ($alldata as $data) { ?>
                                            <option <?php if ($data['name'] == $emp_data['emp_school']) echo "selected"; ?> value="<?php echo $data['name']; ?>"> <?php echo $data['name']; ?> </option>
                                        <?php
                                        }

                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="emp_job" class="form-label">الوظيفة(Job) <span class="star"> * </span> </label>
                                    <select name="emp_job" id="emp_job">
                                        <option value=""> -- اختر -- </option>
                                        <?php
                                        $stmt = $connect->prepare("SELECT * FROM jobs");
                                        $stmt->execute();
                                        $alldata = $stmt->fetchAll();
                                        foreach ($alldata as $data) { ?>
                                            <option <?php if ($data['name'] == $emp_data['emp_job']) echo "selected"; ?> value="<?php echo $data['name']; ?>"> <?php echo $data['name']; ?> </option>
                                        <?php
                                        }

                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-flex">
                                <div class="form-group">
                                    <label for="emp_specialist" class="form-label"> التخصص (Specialist) <span class="star"> * </span> </label>
                                    <select name="emp_specialist" id="emp_specialist">
                                        <option value=""> -- التخصص -- </option>
                                        <?php
                                        $stmt = $connect->prepare("SELECT * FROM specialist");
                                        $stmt->execute();
                                        $alldata = $stmt->fetchAll();
                                        foreach ($alldata as $data) { ?>
                                            <option <?php if ($data['name'] == $emp_data['emp_specialist']) echo "selected"; ?> value="<?php echo $data['name']; ?>"> <?php echo $data['name']; ?> </option>
                                        <?php
                                        }

                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exper_school" class="form-label"> سنوات الخبرة لدينا (Experience in our School) <span class="star"> * </span> </label>
                                    <input maxlength="10" type="number" name="exper_school" id="exper_school" value="<?php echo $emp_data['exper_school']; ?>" />
                                </div>
                                <div class="form-group">
                                    <label for="job_in_insurance" class="form-label"> الوظيفة بالتأمينات (Job In Insurance) <span class="star"> * </span> </label>
                                    <select name="job_in_insurance" id="job_in_insurance">
                                        <option value=""> -- اختر -- </option>
                                        <?php
                                        $stmt = $connect->prepare("SELECT * FROM job_insurance");
                                        $stmt->execute();
                                        $alldata = $stmt->fetchAll();
                                        foreach ($alldata as $data) { ?>
                                            <option <?php if ($data['name'] == $emp_data['job_in_insurance']) echo "selected"; ?> value="<?php echo $data['name']; ?>"> <?php echo $data['name']; ?> </option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>

                            <div class="form-row">
                                <label for="" class="form-label"> تاريخ التسجيل بالتأمينات (Insurance Start Date) <span class="star">*</span> </label>

                                <div class="form-flex">
                                    <div class="form-group">
 
                                        <div id="cal-1" class="select_date">
                                            <?php
                                            if (empty($emp_data['insurance_start_date_m'])) { ?>
                                                <input id="date-1" type="text" name="insurance_start_date_m" value="<?php echo $emp_data['insurance_start_date_m']; ?>" />
                                                <button class="icon-button showcall1" id="btn1" onclick="showCal1();">&#x25a6;</button>

                                            <?php

                                            } else { ?>

                                                <input type="text" name="insurance_start_date_m" value="<?php echo $emp_data['insurance_start_date_m']; ?>" />
                                            <?php

                                            }

                                            ?>

                                        </div>
                                        <!-- <input type="text" name="first_name" id="first_name" /> -->
                                    </div>
                                    <div class="form-group"> 
                                        <div id="cal-2" class="select_date">
                                            <?php
                                            if (empty($emp_data['insurance_start_date_h'])) {
                                            ?>
                                                <input id="date-2" type="text" name="insurance_start_date_h" value="<?php echo $emp_data['insurance_start_date_h']; ?>" />
                                                <button class="icon-button showcall1" id="btn1" onclick="showCal2();">&#x25a6;</button>
                                            <?php
                                            } else {
                                            ?>
                                                <input type="text" name="insurance_start_date_h" value="<?php echo $emp_data['insurance_start_date_h']; ?>" />
                                            <?php
                                            }
                                            ?>
                                        </div>
                                        <!-- <input type="text" name="first_name" id="first_name" /> -->
                                    </div>
                                </div>
                            </div>


                            <div class="form-row">
                                <label for="" class="form-label"> بداية العقد الالكتروني (Electronic Contarct Starting) <span class="star"> * </span> </label>
                                <div class="form-flex">
                                    <div class="form-group"> 
                                        <div id="cal-3" class="select_date">
                                            <?php
                                            if (empty($emp_data['electronic_contract_start_m'])) { ?>

                                                <input id="date-3" type="text" name="electronic_contract_start_m" value="<?php echo $emp_data['electronic_contract_start_m']; ?>" />
                                                <button class="icon-button showcall1" onclick="showCal3();">&#x25a6;</button>
                                            <?php
                                            } else { ?>
                                                <input id="" type="text" name="electronic_contract_start_m" value="<?php echo $emp_data['electronic_contract_start_m']; ?>" />
                                            <?php
                                            }
                                            ?>
                                        </div>
                                        <!-- <input type="text" name="first_name" id="first_name" /> -->
                                    </div>
                                    <div class="form-group"> 

                                        <div id="cal-4" class="select_date">
                                            <?php
                                            if (empty($emp_data['electronic_contract_start_h'])) {
                                            ?>
                                                <input id="date-4" type="text" name="electronic_contract_start_h" value="<?php echo $emp_data['electronic_contract_start_h']; ?>" />
                                                <button class="icon-button showcall1" onclick="showCal4();">&#x25a6;</button>
                                            <?php
                                            } else {
                                            ?>
                                                <input type="text" name="electronic_contract_start_h" value="<?php echo $emp_data['electronic_contract_start_h']; ?>" />
                                            <?php
                                            }
                                            ?>
                                        </div>
                                        <!-- <input type="text" name="first_name" id="first_name" /> -->
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <label for="" class="form-label">نهاية العقد الالكتروني(Electronic Contarct Ending) <span class="star"> * </span> </label>

                                <div class="form-flex">
                                    <div class="form-group"> 
                                        <div id="cal-5" class="select_date">
                                            <?php
                                            if (empty($emp_data['electronic_contract_end_m'])) { ?>
                                                <input id="date-5" type="text" name="electronic_contract_end_m" value="<?php echo $emp_data['electronic_contract_end_m']; ?>" />
                                                <button class="icon-button showcall1" onclick="showCal5();">&#x25a6;</button>


                                            <?php

                                            } else { ?>
                                                <input type="text" name="electronic_contract_end_m" value="<?php echo $emp_data['electronic_contract_end_m']; ?>" />

                                            <?php

                                            }

                                            ?>

                                        </div>
                                        <!-- <input type="text" name="first_name" id="first_name" /> -->
                                    </div>
                                    <div class="form-group"> 

                                        <div id="cal-6" class="select_date">
                                            <?php
                                            if (empty($emp_data['electronic_contract_end_h'])) {
                                            ?>
                                                <input id="date-6" type="text" name="electronic_contract_end_h" value="<?php echo $emp_data['electronic_contract_end_h']; ?>" />
                                                <button class="icon-button showcall1" onclick="showCal6();">&#x25a6;</button>

                                            <?php
                                            } else { ?>
                                                <input type="text" name="electronic_contract_end_h" value="<?php echo $emp_data['electronic_contract_end_h']; ?>" />

                                            <?php

                                            }

                                            ?>

                                        </div>
                                        <!-- <input type="text" name="first_name" id="first_name" /> -->
                                    </div>
                                </div>
                            </div>
                            <div class="form-flex">
                                <div class="form-group">
                                    <label class="form-label">الراتب الأساسي( Basic Salary) <span class="star"> * </span></label>
                                    <input class="basic_salary" type="text" name="basic_salary" id="name" value="<?php echo $emp_data['basic_salary']; ?>" />
                                </div>
                                <div class="form-group">
                                    <label class="form-label"> بدل السكن ( Housing ) <span class="star"> * </span></label>
                                    <input class="housing" type="text" name="housing" id="housing" value="<?php echo $emp_data['housing']; ?>" />
                                </div>
                                <div class="form-group">
                                    <label class="form-label"> بدلات أخرى ( Other Earns ) <span class="star"> * </span></label>
                                    <input class="other_earns" type="text" name="other_earns" id="other_earns" value="<?php echo $emp_data['other_earns']; ?>" />
                                </div>
                            </div>

                            <div class="form-flex">
                                <div class="form-group">
                                    <label class="form-label">إجمالي الراتب( Total ) <span class="star"> * </span></label>
                                    <input class="total" type="text" name="total" id="total" value="<?php echo $emp_data['total']; ?>" />
                                </div>
                                <div class="form-group">
                                    <label class="form-label"> خصم التأمينات ( Insurance Deduct ) <span class="star"> * </span></label>
                                    <input type="text" class="insurance_deduce" name="insurance_deduce" id="insurance_deduce" value="<?php echo $emp_data['insurance_deduce']; ?>" />
                                </div>
                                <div class="form-group">
                                    <label class="form-label"> صافي الراتب( Net Of Salary ) <span class="star"> * </span></label>
                                    <input type="text" class="net_of_insurance" name="net_of_insurance" id="net_of_insurance" value="<?php echo $emp_data['net_of_insurance']; ?>" />
                                </div>

                            </div>

                            <div class="form-flex">
                                <div class="form-group">
                                    <label class="form-label"> إضافي كاش ( Cash ) <span class="star"> * </span></label>
                                    <input type="text" class="cash" name="cash" id="cash" value="<?php echo $emp_data['cash']; ?>" />
                                </div>

                                <div class="form-group">
                                    <label class="form-label"> إجمالي المُستلم ( Total Get ) <span class="star"> * </span></label>
                                    <input type="text" class="total_get" name="total_get" id="total_get" value="<?php echo $emp_data['total_get']; ?>" />
                                </div>
                                <div class="form-group"> <!-- daam_elig  -->
                                    <label class="form-label"> أهلية الدعم ( Daam Ability ) <span class="star"> * </span></label>
                                    <select name="daam_ability" id="daam_ability">
                                        <option value=""> -- اختر -- </option>
                                        <?php
                                        $stmt = $connect->prepare("SELECT * FROM daam_elig");
                                        $stmt->execute();
                                        $alldata = $stmt->fetchAll();
                                        foreach ($alldata as $data) { ?>
                                            <option <?php if ($data['name'] == $emp_data['daam_ability']) echo "selected"; ?> value="<?php echo $data['name']; ?>"> <?php echo $data['name']; ?> </option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                    <?php ?>
                                </div>
                            </div>

                            <div class="form-flex">
                                <div class="form-group"> <!-- Support -->
                                    <label class="form-label">نوع الدعم ( Daam Kind ) <span class="star"> * </span></label>
                                    <select name="daam_kind" id="daam_kind">
                                        <option value=""> -- اختر -- </option>
                                        <?php
                                        $stmt = $connect->prepare("SELECT * FROM daam_support");
                                        $stmt->execute();
                                        $alldata = $stmt->fetchAll();
                                        foreach ($alldata as $data) { ?>
                                            <option <?php if ($data['name'] == $emp_data['daam_kind']) echo "selected"; ?> value="<?php echo $data['name']; ?>"> <?php echo $data['name']; ?> </option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="form-label"> تاريخ بداية الدعم ( Daam Start Date ) <span class="star"> * </span></label>
                                    <input type="date" class="daam_start_date" name="daam_start_date" id="daam_start_date" value="<?php echo $emp_data['daam_start_date']; ?>" />
                                </div>
                                <div class="form-group">
                                    <label class="form-label"> تاريخ نهاية الدعم ( Daam end Date ) <span class="star"> * </span></label>
                                    <input type="date" class="daam_end_date" name="daam_end_date" id="daam_end_date" value="<?php echo $emp_data['daam_end_date']; ?>" />
                                </div>
                            </div>
                            <div class="form-flex">
                                <div class="form-group">
                                    <label class="form-label"> متبقى على نهاية الدعم ( Expire Month Reminder ) (بالايام) <span class="star"> * </span></label>
                                    <input type="text" class="expire_month_reminder" name="expire_month_reminder" id="expire_month_reminder" value="<?php echo $emp_data['expire_month_reminder']; ?>" />
                                </div>
                                <div class="form-group">
                                    <label class="form-label">حالة الدعم( Daam Status ) </label>
                                    <p class="daam_status">
                                        <?php
                                        if ($emp_data['expire_month_reminder'] >= 180) { ?>
                                            <span style="background-color: green;"> </span>
                                        <?php

                                        } elseif ($emp_data['expire_month_reminder'] >= 90 || $emp_data['expire_month_reminder'] <= 179) {
                                        ?>
                                            <span style="background-color: yellow;"> </span>
                                        <?php
                                        } elseif ($emp_data['expire_month_reminder'] <= 90) {
                                        ?>
                                            <span style="background-color: red;"> </span>
                                        <?php
                                        } else {
                                        ?>
                                            <span style="background-color: black;"> </span>

                                        <?php
                                        }


                                        ?>

                                    </p>
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="form-label"> ملاحظات (Notes) <span class="star"> * </span></label>
                                <textarea name="notes" id="" class="form-control"> <?php echo $emp_data['notes']; ?></textarea>
                            </div>
                        </div>

                    </div>
                    <button class="btn btn-primary" type="submit"> تعديل <i class="fa fa-pen"></i> </button>
                    <p class="printbtn btn btn-warning"> طباعه <i class="fa fa-print"></i></p>
                </div>
            </form>
        </div>

    </div>

    <!-- JS -->
    <script src="emp_register/vendor/jquery/jquery.min.js"></script>
    <script src="emp_register/vendor/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="emp_register/vendor/jquery-validation/dist/additional-methods.min.js"></script>
    <script src="emp_register/vendor/jquery-steps/jquery.steps.min.js"></script>
    <script src="emp_register/vendor/minimalist-picker/dobpicker.js"></script>
    <script src="emp_register/vendor/nouislider/nouislider.min.js"></script>
    <script src="emp_register/vendor/wnumb/wNumb.js"></script>
    <script src="emp_register/js/calendar.js"></script>
    <script src="emp_register/js/hijri-date.js"></script>
    <script src="emp_register/js/main.js"></script>
</body>

</html>
<!-- START GET DATE -->


<script type="text/javascript">
    $(".form-group").on("input", function() {
        // total distance
        var basic_salary = $(".form-group .basic_salary").val();
        var housing = $(".form-group .housing").val();
        var other_earns = $(".form-group .other_earns").val();
        var total = Number(basic_salary) + Number(housing) + Number(other_earns);
        $(".total").val(total);

        var insurance_deduce = $(".form-group .insurance_deduce").val();
        var net_of_insurance = Number(total) - Number(insurance_deduce);
        $(".net_of_insurance").val(net_of_insurance);

        var cash = $(".form-group .cash").val();
        var total_get = Number(net_of_insurance) + Number(cash);
        $(".total_get").val(total_get);

        var daam_start_date = $(".form-group .daam_start_date").val();
        var daam_end_date = $(".form-group .daam_end_date").val();
        var num_days = daam_end_date - daam_start_date;

        var date1 = new Date(daam_start_date);
        var date2 = new Date(daam_end_date);
        var time_difference = date2.getTime() - date1.getTime();
        var days_difference = time_difference / (1000 * 60 * 60 * 24);
        var num_days = days_difference;

        $(".expire_month_reminder").val(num_days);


    });
</script>


<script>
    $(".showcall1").click(function(e) {
        e.preventDefault();
    })
    var cal1 = new Calendar(),
        cal2 = new Calendar(true, 0, false, true),
        date1 = document.getElementById('date-1'),
        date2 = document.getElementById('date-2'),
        cal1Mode = cal1.isHijriMode(),
        cal2Mode = cal2.isHijriMode(),
        // date2
        cal3 = new Calendar(),
        cal4 = new Calendar(true, 0, false, true),

        date3 = document.getElementById('date-3'),
        date4 = document.getElementById('date-4'),
        cal3Mode = cal3.isHijriMode(),
        cal4Mode = cal4.isHijriMode();

    // date3

    cal5 = new Calendar(),
        cal6 = new Calendar(true, 0, false, true),

        date5 = document.getElementById('date-5'),
        date6 = document.getElementById('date-6'),
        cal5Mode = cal5.isHijriMode(),
        cal6Mode = cal6.isHijriMode();
    // date4



    document.getElementById('cal-1').appendChild(cal1.getElement());
    document.getElementById('cal-2').appendChild(cal2.getElement());
    cal1.hide();
    cal2.hide();
    document.getElementById('cal-3').appendChild(cal3.getElement());
    document.getElementById('cal-4').appendChild(cal4.getElement());
    cal3.hide();
    cal4.hide();
    document.getElementById('cal-5').appendChild(cal5.getElement());
    document.getElementById('cal-6').appendChild(cal6.getElement());
    cal5.hide();
    cal6.hide();

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
    cal3.callback = function() {
        if (cal3Mode !== cal3.isHijriMode()) {
            cal3.disableCallback(true);
            cal3.changeDateMode();
            cal3.disableCallback(false);
            cal3Mode = cal3.isHijriMode();
            cal4Mode = cal4.isHijriMode();
        } else
            cal4.setTime(cal3.getTime());
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

    cal4.callback = function() {
        if (cal4Mode !== cal4.isHijriMode()) {
            cal3.disableCallback(true);
            cal3.changeDateMode();
            cal3.disableCallback(false);
            cal3Mode = cal3.isHijriMode();
            cal4Mode = cal4.isHijriMode();
        } else
            cal3.setTime(cal4.getTime());
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


    function setDateFields() {
        date1.value = cal1.getDate().getDateString();
        date2.value = cal2.getDate().getDateString();
        date3.value = cal3.getDate().getDateString();
        date4.value = cal4.getDate().getDateString();
        date5.value = cal5.getDate().getDateString();
        date6.value = cal6.getDate().getDateString();

    }

    function showCal1() {
        if (cal1.isHidden()) cal1.show();
        else cal1.hide();
    }

    function showCal3() {
        if (cal3.isHidden()) cal3.show();
        else cal3.hide();
    }

    function showCal2() {
        if (cal2.isHidden()) cal2.show();
        else cal2.hide();
    }

    function showCal4() {
        if (cal4.isHidden()) cal4.show();
        else cal4.hide();
    }

    function showCal5() {
        if (cal5.isHidden()) cal5.show();
        else cal5.hide();
    }

    function showCal6() {
        if (cal6.isHidden()) cal6.show();
        else cal6.hide();
    }
</script>