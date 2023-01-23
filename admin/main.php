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
        <?php
        $page = '';
        if (isset($_GET['page']) && isset($_GET['dir'])) {
            $page = $_GET['page'];
            $dir = $_GET['dir'];
        } else {
            $page = 'manage';
        }



        //  Start Qualifiactions 

        if ($dir == 'qualifications' && $page == 'add') {
            include 'qualifications/add.php';
        } elseif ($dir == 'qualifications' && $page == 'edit') {
            include 'qualifications/edit.php';
        } elseif ($dir == 'qualifications' && $page == 'report') {
            include 'qualifications/report.php';
        } elseif ($dir == 'qualifications' && $page == 'delete') {
            include 'qualifications/delete.php';
        }
        // END Qualifications 

        //  Start grads 

        if ($dir == 'grads' && $page == 'add') {
            include 'grads/add.php';
        } elseif ($dir == 'grads' && $page == 'edit') {
            include 'grads/edit.php';
        } elseif ($dir == 'grads' && $page == 'report') {
            include 'grads/report.php';
        } elseif ($dir == 'grads' && $page == 'delete') {
            include 'grads/delete.php';
        }
        // END grads

        //  Start specialist 

        if ($dir == 'specialist' && $page == 'add') {
            include 'specialist/add.php';
        } elseif ($dir == 'specialist' && $page == 'edit') {
            include 'specialist/edit.php';
        } elseif ($dir == 'specialist' && $page == 'report') {
            include 'specialist/report.php';
        } elseif ($dir == 'specialist' && $page == 'delete') {
            include 'specialist/delete.php';
        }
        // END specialist
        //  Start professional_licing 

        if ($dir == 'professional_licing' && $page == 'add') {
            include 'professional_licing/add.php';
        } elseif ($dir == 'professional_licing' && $page == 'edit') {
            include 'professional_licing/edit.php';
        } elseif ($dir == 'professional_licing' && $page == 'report') {
            include 'professional_licing/report.php';
        } elseif ($dir == 'professional_licing' && $page == 'delete') {
            include 'professional_licing/delete.php';
        }
        // END professional_licing
        //  Start schools 

        if ($dir == 'schools' && $page == 'add') {
            include 'schools/add.php';
        } elseif ($dir == 'schools' && $page == 'edit') {
            include 'schools/edit.php';
        } elseif ($dir == 'schools' && $page == 'report') {
            include 'schools/report.php';
        } elseif ($dir == 'schools' && $page == 'delete') {
            include 'schools/delete.php';
        }
        // END schools
        //  Start jobs 

        if ($dir == 'jobs' && $page == 'add') {
            include 'jobs/add.php';
        } elseif ($dir == 'jobs' && $page == 'edit') {
            include 'jobs/edit.php';
        } elseif ($dir == 'jobs' && $page == 'report') {
            include 'jobs/report.php';
        } elseif ($dir == 'jobs' && $page == 'delete') {
            include 'jobs/delete.php';
        }
        // END jobs
        //  Start stage 

        if ($dir == 'stage' && $page == 'add') {
            include 'stage/add.php';
        } elseif ($dir == 'stage' && $page == 'edit') {
            include 'stage/edit.php';
        } elseif ($dir == 'stage' && $page == 'report') {
            include 'stage/report.php';
        } elseif ($dir == 'stage' && $page == 'delete') {
            include 'stage/delete.php';
        }
        // END stage
        //  Start teaching_subject 

        if ($dir == 'teaching_subject' && $page == 'add') {
            include 'teaching_subject/add.php';
        } elseif ($dir == 'teaching_subject' && $page == 'edit') {
            include 'teaching_subject/edit.php';
        } elseif ($dir == 'teaching_subject' && $page == 'report') {
            include 'teaching_subject/report.php';
        } elseif ($dir == 'teaching_subject' && $page == 'delete') {
            include 'teaching_subject/delete.php';
        }
        // END teaching_subject
        //  Start bank 

        if ($dir == 'bank' && $page == 'add') {
            include 'bank/add.php';
        } elseif ($dir == 'bank' && $page == 'edit') {
            include 'bank/edit.php';
        } elseif ($dir == 'bank' && $page == 'report') {
            include 'bank/report.php';
        } elseif ($dir == 'bank' && $page == 'delete') {
            include 'bank/delete.php';
        }
        // END bank

        //  Start emp_branche 

        if ($dir == 'emp_branche' && $page == 'add') {
            include 'emp_branche/add.php';
        } elseif ($dir == 'emp_branche' && $page == 'edit') {
            include 'emp_branche/edit.php';
        } elseif ($dir == 'emp_branche' && $page == 'report') {
            include 'emp_branche/report.php';
        } elseif ($dir == 'emp_branche' && $page == 'delete') {
            include 'emp_branche/delete.php';
        }
        // END emp_branche

        //  Start Job Insurance

        if ($dir == 'job_insurance' && $page == 'add') {
            include 'job_insurance/add.php';
        } elseif ($dir == 'job_insurance' && $page == 'edit') {
            include 'job_insurance/edit.php';
        } elseif ($dir == 'job_insurance' && $page == 'report') {
            include 'job_insurance/report.php';
        } elseif ($dir == 'job_insurance' && $page == 'delete') {
            include 'job_insurance/delete.php';
        }
        // END Job Insurance


        //  Start emp_register

        if ($dir == 'emp_register' && $page == 'add') {
            include 'emp_register/add.php';
        } elseif ($dir == 'emp_register' && $page == 'edit') {
            include 'emp_register/edit.php';
        } elseif ($dir == 'emp_register' && $page == 'report') {
            include 'emp_register/report.php';
        } elseif ($dir == 'emp_register' && $page == 'view') {
            include 'emp_register/view.php';
        } elseif ($dir == 'emp_register' && $page == 'delete') {
            include 'emp_register/delete.php';
        } elseif ($dir == 'emp_register' && $page == 'public_emp') {
            include 'emp_register/public_emp.php';
        }
        // END emp_register
        //  Start emp_place

        if ($dir == 'emp_place' && $page == 'add') {
            include 'emp_place/add.php';
        } elseif ($dir == 'emp_place' && $page == 'edit') {
            include 'emp_place/edit.php';
        } elseif ($dir == 'emp_place' && $page == 'report') {
            include 'emp_place/report.php';
        } elseif ($dir == 'emp_place' && $page == 'view') {
            include 'emp_place/view.php';
        } elseif ($dir == 'emp_place' && $page == 'delete') {
            include 'emp_place/delete.php';
        }
        // END emp_place

           //  Start emp_city

           if ($dir == 'emp_city' && $page == 'add') {
            include 'emp_city/add.php';
        } elseif ($dir == 'emp_city' && $page == 'edit') {
            include 'emp_city/edit.php';
        } elseif ($dir == 'emp_city' && $page == 'report') {
            include 'emp_city/report.php';
        } elseif ($dir == 'emp_city' && $page == 'view') {
            include 'emp_city/view.php';
        } elseif ($dir == 'emp_city' && $page == 'delete') {
            include 'emp_city/delete.php';
        }
        // END emp_city

        //  Start Settings 

        if ($dir == 'settings' && $page == 'add') {
            include 'settings/add.php';
        } elseif ($dir == 'settings' && $page == 'edit') {
            include 'settings/edit.php';
        } elseif ($dir == 'settings' && $page == 'report') {
            include 'settings/report.php';
        } elseif ($dir == 'settings' && $page == 'delete') {
            include 'settings/delete.php';
        }
        // END Settings


        // START REPORTS
        elseif ($dir = 'dashboard' && $page == 'dashboard') {
            include 'dashboard.php';
        }



        // if ($page != 'report') {
        ?>
    </div>
</div>
</div>
<?php
include $tem . 'footer.php';

ob_end_flush();


?>