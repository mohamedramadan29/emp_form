<div class="container customer_report">
    <div class="data">
        <div class="bread">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"> <i class="fa fa-heart"></i> <a href="main.php?dir=dashboard&page=dashboard"> إدارة الموارد البشرية </a> <i class="fa fa-chevron-left"></i>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">   مكان اصدار الهوية  </li>
                </ol>
            </nav>
        </div>
        <!-------------------------- START NEW WHATSAPP MEMEBER------------------------->
        <!-- Content Row -->

        <!-- Modal -->
        <div class="modal fade" id="addrecord" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">اضافه </h5>
                    </div>
                    <div class="modal-body">
                        <div class="myform">
                            <form class="form-group insert ajax_form" action="main_ajax.php?dir=emp_place&page=add" method="POST" autocomplete="on" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="box2">
                                            <label id="name">الاسم
                                                <span> * </span> </label>
                                            <input required class="form-control" type="text" name="name">
                                        </div>
                                        <div class="box submit_box">
                                            <input class="btn btn-outline-primary btn-sm" name="" type="submit" value=" اضافه   جديد ">
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
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal"> <i class="fa fa-close"></i> اغلاق</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- END RECORD TO EDIT NEW RECORD  -->

        <div class="table-responsive">
            <div class="add_new_record">
                <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#addrecord">
                    اضافه جديد<i class="fa fa-plus"></i>
                </button>

            </div>
            <table id="tableone" class="table table-light table-striped table-hover table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th> الاسم </th>
                        <th> </th>
                    </tr>
                </thead>
                <tbody> <?php
                        $i = 1;
                        $stmt = $connect->prepare('SELECT * FROM emp_place');
                        $stmt->execute();
                        $alltype = $stmt->fetchAll();
                        foreach ($alltype as $type) { ?> <tr>
                            <td><?php echo $i++; ?> </td>

                            <td><?php echo $type['name']; ?> </td>

                            <td>
                                <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#editrecord<?php echo $type['id']; ?>">
                                    تعديل <i class="fa fa-edit"></i>
                                </button>
                                <a class="confirm btn btn-danger btn-sm" href="main.php?dir=emp_place&page=delete&id=<?php echo $type['id']; ?> ">
                                    حذف <i class="fa fa-trash"></i>
                                </a>
                            </td>
                        </tr> <?php
                                ?>
                        <!-- START MODEL TO Edit RECORD  -->
                        <!-- Modal -->
                        <div class="modal fade" id="editrecord<?php echo $type['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel"> تعديل </h5>
                                    </div>
                                    <div class="modal-body">
                                        <div class="myform">
                                            <form class="form-group insert ajax_form" action="main_ajax.php?dir=emp_place&page=edit" method="POST" autocomplete="on" enctype="multipart/form-data">
                                                <input type="hidden" name="id" value="<?php echo $type['id'] ?>">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="box2">
                                                            <label id="name"> الاسم
                                                                <span> * </span> </label>
                                                            <input required class="form-control" type="text" name="name" value="<?php echo $type['name'] ?>">
                                                        </div>
                                                        <div class="box submit_box">
                                                            <input class="btn btn-outline-primary btn-sm" name="" type="submit" value=" تعديل  ">
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                            <!-- START RESPONSE SPACE  -->
                                            <!-- area to display a message after completion of upload -->
                                            <br>
                                            <div class='status'></div>
                                            <!-- END RESPONSE SPACE  -->
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal"> <i class="fa fa-close"></i> اغلاق</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END RECORD TO EDIT NEW RECORD  -->
                    <?php
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>