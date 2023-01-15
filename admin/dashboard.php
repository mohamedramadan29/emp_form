<?php
ob_start();
$pagetitle = ' الرئيسية  ';
?>
<div class="container dashboard">
    <div class="bread bread_dasha">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"> <i class="fa fa-heart"></i> <a href="main.php?dir=dashboard&page=dashboard">  الإدارة العامة لمدارس الفرقان والفضل بن العباس والبتول ( إدارة الموارد البشرية ) </a> <i class="fa fa-chevron-left"></i> </li>
                <li class="breadcrumb-item active" aria-current="page"> <?php echo $lang['dashboard']; ?> </li>
            </ol>
        </nav>
    </div>
    <div class="dashboard_data">
        <div class="row">
            <div class="col-lg-4">
                <a href="main.php?dir=grads&page=report">
                    <div class="info info2">
                        <div class="alert_notification">
                            <h3> التقديرات </h3>
                            
                        </div>

                        <?php
                        $stmt = $connect->prepare(
                            'SELECT COUNT(id) FROM grade'
                        );
                        $stmt->execute();
                        $count = $stmt->fetchcolumn();
                        ?>
                        <span> <?php echo $count; ?></span>
                    </div>
                </a>
            </div>
            <div class="col-lg-4">
                <a href="main.php?dir=schools&page=report">
                    <div class="info info1">
                        <div class="alert_notification">
                            <h3> المدارس </h3>
                             
                        </div>

                        <?php
                        $stmt = $connect->prepare(
                            'SELECT COUNT(id) FROM schools'
                        );
                        $stmt->execute();
                        $count = $stmt->fetchcolumn();
                        ?>
                        <span> <?php echo $count; ?></span>
                    </div>
                </a>
            </div>
            <div class="col-lg-4">
                <a href="main.php?dir=jobs&page=report">
                    <div class="info info3">
                        <div class="alert_notification">
                            <h3> الوظائف </h3>
                             
                        </div>

                        <?php
                        $stmt = $connect->prepare(
                            'SELECT COUNT(id) FROM jobs'
                        );
                        $stmt->execute();
                        $count = $stmt->fetchcolumn();
                        ?>
                        <span> <?php echo $count; ?></span>
                    </div>
                </a>
            </div>
            <div class="col-lg-4">
                <a href="main.php?dir=stage&page=report">
                    <div class="info info4">
                        <div class="alert_notification">
                            <h3> المراحل </h3> 
                        </div>

                        <?php
                        $stmt = $connect->prepare(
                            'SELECT COUNT(id) FROM stage'
                        );
                        $stmt->execute();
                        $count = $stmt->fetchcolumn();
                        ?>
                        <span> <?php echo $count; ?></span>
                    </div>
                </a>
            </div>

            <div class="col-lg-4">
                <a href="main.php?dir=specialist&page=report">
                    <div class="info info6">
                        <h3> التخصصات </h3>
                        <?php
                        $stmt = $connect->prepare(
                            'SELECT COUNT(id) FROM specialist'
                        );
                        $stmt->execute();
                        $count = $stmt->fetchcolumn();
                        ?>
                        <span> <?php echo $count; ?></span>
                    </div>
                </a>
            </div>

        </div>
    </div>


</div>


<?php ob_end_flush();
?>