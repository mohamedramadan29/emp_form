<?php
ob_start();
$pagetitle = 'الرئيسية';
session_start();
include 'init.php';
?>
<?php
$page = '';
if (isset($_GET['page']) && isset($_GET['dir'])) {
    $page = $_GET['page'];
    $dir = $_GET['dir'];
} else {
    $page = 'manage';
}
// START EDUCATION WEB  /////////////////////////////////////////
// START COMPANY
if ($dir == 'company' && $page == 'add') {
    include 'company/add.php';
} elseif ($dir == 'company' && $page == 'edit') {
    include 'company/edit.php';
}

// START COMPANY
if ($dir == 'qualifications' && $page == 'add') {
    include 'qualifications/add.php';
} elseif ($dir == 'qualifications' && $page == 'edit') {
    include 'qualifications/edit.php';
}
// START grads
if ($dir == 'grads' && $page == 'add') {
    include 'grads/add.php';
} elseif ($dir == 'grads' && $page == 'edit') {
    include 'grads/edit.php';
}
// START specialist
if ($dir == 'specialist' && $page == 'add') {
    include 'specialist/add.php';
} elseif ($dir == 'specialist' && $page == 'edit') {
    include 'specialist/edit.php';
}

// START professional_licing
if ($dir == 'professional_licing' && $page == 'add') {
    include 'professional_licing/add.php';
} elseif ($dir == 'professional_licing' && $page == 'edit') {
    include 'professional_licing/edit.php';
}
// START schools
if ($dir == 'schools' && $page == 'add') {
    include 'schools/add.php';
} elseif ($dir == 'schools' && $page == 'edit') {
    include 'schools/edit.php';
}

// START jobs
if ($dir == 'jobs' && $page == 'add') {
    include 'jobs/add.php';
} elseif ($dir == 'jobs' && $page == 'edit') {
    include 'jobs/edit.php';
}

// START stage
if ($dir == 'stage' && $page == 'add') {
    include 'stage/add.php';
} elseif ($dir == 'stage' && $page == 'edit') {
    include 'stage/edit.php';
}


// START teaching_subject
if ($dir == 'teaching_subject' && $page == 'add') {
    include 'teaching_subject/add.php';
} elseif ($dir == 'teaching_subject' && $page == 'edit') {
    include 'teaching_subject/edit.php';
}
// START bank
if ($dir == 'bank' && $page == 'add') {
    include 'bank/add.php';
} elseif ($dir == 'bank' && $page == 'edit') {
    include 'bank/edit.php';
}
// START emp_branche
if ($dir == 'emp_branche' && $page == 'add') {
    include 'emp_branche/add.php';
} elseif ($dir == 'emp_branche' && $page == 'edit') {
    include 'emp_branche/edit.php';
}

// START emp_register
if ($dir == 'emp_register' && $page == 'add') {
    include 'emp_register/add.php';
} elseif ($dir == 'emp_register' && $page == 'edit') {
    include 'emp_register/edit.php';
}

//  Start Job Insurance

if ($dir == 'jobs_insurance' && $page == 'add') {
    include 'jobs_insurance/add.php';
} elseif ($dir == 'jobs_insurance' && $page == 'edit') {
    include 'jobs_insurance/edit.php';
}
// END Job Insurance
//  Start Job Insurance

if ($dir == 'emp_place' && $page == 'add') {
    include 'emp_place/add.php';
} elseif ($dir == 'emp_place' && $page == 'edit') {
    include 'emp_place/edit.php';
}
// END Job Insurance

//  Start Emp City

if ($dir == 'emp_city' && $page == 'add') {
    include 'emp_city/add.php';
} elseif ($dir == 'emp_city' && $page == 'edit') {
    include 'emp_city/edit.php';
}
// END Emp City
?>