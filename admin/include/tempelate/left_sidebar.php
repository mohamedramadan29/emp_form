  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="main.php?dir=dashboard&page=dashboard" class="brand-link">
          <span class="brand-text font-weight-light" style="display:block;margin:auto">إدارة الموارد البشرية
          </span>
      </a>
      <!-- Sidebar -->
      <div class="sidebar">
          <!-- Sidebar Menu -->
          <nav class="mt-2">
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                  <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                  <li class="nav-item" id="lnk-customer">
                      <a href="main.php?dir=dashboard&page=dashboard" class="nav-link">
                          <i class="nav-icon fas fa-tachometer-alt"></i>
                          <p>
                              الصفحة الرئيسية
                          </p>
                      </a>
                  </li>
                  <li class="nav-item" id="lnk-project">
                      <a href="#" class="nav-link nav-link2">
                          <i class="fa-solid fa-project-diagram color8"></i>
                          <p>
                              تسجلات الموظفين
                              <i class="right fas fa-angle-left "></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item" id="lnk-add-project">
                              <a href="main.php?dir=emp_register&page=report" class="nav-link">
                                  <i class="fa fa-eye color2"></i>
                                  <p> مشاهدة جميع التسجيلات </p>
                              </a>
                          </li>
                      </ul>
                  </li>

                  <li class="nav-item" id="lnk-project">
                      <a href="#" class="nav-link nav-link2">
                          <i class="fa-solid fa-project-diagram color8"></i>
                          <p>
                              البيانات الشخصية
                              <i class="right fas fa-angle-left "></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">

                          <li class="nav-item" id="lnk-add-project">
                              <a href="main.php?dir=emp_branche&page=report" class="nav-link">
                                  <i class="fa fa-eye color2"></i>
                                  <p> تصنيف الموظف </p>
                              </a>
                          </li>
                          <li class="nav-item" id="lnk-add-project">
                              <a href="main.php?dir=emp_place&page=report" class="nav-link">
                                  <i class="fa fa-eye color2"></i>
                                  <p>  مكان الإصدار </p>
                              </a>
                          </li>
                      </ul>
                  </li>


                  <li class="nav-item" id="lnk-project">
                      <a href="#" class="nav-link nav-link2">
                          <i class="fa-solid fa-project-diagram color8"></i>
                          <p>
                              البيانات الاكاديمية
                              <i class="right fas fa-angle-left "></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">

                          <li class="nav-item" id="lnk-add-project">
                              <a href="main.php?dir=qualifications&page=report" class="nav-link">
                                  <i class="fa fa-eye color2"></i>
                                  <p> مشاهدة جميع الموهلات </p>
                              </a>
                          </li>
                          <li class="nav-item" id="lnk-add-project">
                              <a href="main.php?dir=grads&page=report" class="nav-link">
                                  <i class="fa fa-eye color2"></i>
                                  <p> مشاهدة جميع التقديرات </p>
                              </a>
                          </li>
                          <li class="nav-item" id="lnk-add-project">
                              <a href="main.php?dir=specialist&page=report" class="nav-link">
                                  <i class="fa fa-eye color2"></i>
                                  <p> مشاهدة جميع التخصصات </p>
                              </a>
                          </li>
                      </ul>
                  </li>

                  <li class="nav-item" id="lnk-project">
                      <a href="#" class="nav-link nav-link2">
                          <i class="fa-solid fa-project-diagram color8"></i>
                          <p>
                              البيانات الوظيفية
                              <i class="right fas fa-angle-left "></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">

                          <li class="nav-item" id="lnk-add-project">
                              <a href="main.php?dir=schools&page=report" class="nav-link">
                                  <i class="fa fa-eye color2"></i>
                                  <p> مشاهدة جميع المدارس </p>
                              </a>
                          </li>
                          <li class="nav-item" id="lnk-add-project">
                              <a href="main.php?dir=jobs&page=report" class="nav-link">
                                  <i class="fa fa-eye color2"></i>
                                  <p> مشاهدة جميع الوظائف </p>
                              </a>
                          </li>
                          <li class="nav-item" id="lnk-add-project">
                              <a href="main.php?dir=stage&page=report" class="nav-link">
                                  <i class="fa fa-eye color2"></i>
                                  <p> مشاهدة جميع المراحل </p>
                              </a>
                          </li>
                          <li class="nav-item" id="lnk-add-project">
                              <a href="main.php?dir=teaching_subject&page=report" class="nav-link">
                                  <i class="fa fa-eye color2"></i>
                                  <p> مشاهدة جميع المواد </p>
                              </a>
                          </li>

                      </ul>
                  </li>

                  <li class="nav-item" id="lnk-project">
                      <a href="#" class="nav-link nav-link2">
                          <i class="fa-solid fa-project-diagram color8"></i>
                          <p>
                              العنوان الوطني والبنك
                              <i class="right fas fa-angle-left "></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item" id="lnk-add-project">
                              <a href="main.php?dir=bank&page=report" class="nav-link">
                                  <i class="fa fa-eye color2"></i>
                                  <p> مشاهدة جميع البنوك </p>
                              </a>
                          </li>
                          <li class="nav-item" id="lnk-add-project">
                              <a href="main.php?dir=emp_city&page=report" class="nav-link">
                                  <i class="fa fa-eye color2"></i>
                                  <p> مشاهدة جميع المدن </p>
                              </a>
                          </li>
                      </ul>
                  </li>

                  <li class="nav-item" id="lnk-project">
                      <a href="#" class="nav-link nav-link2">
                          <i class="fa-solid fa-project-diagram color8"></i>
                          <p>
                              وظائف التأمينات
                              <i class="right fas fa-angle-left "></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item" id="lnk-add-project">
                              <a href="main.php?dir=job_insurance&page=report" class="nav-link">
                                  <i class="fa fa-eye color2"></i>
                                  <p> مشاهدة جميع الوظائف </p>
                              </a>
                          </li>

                      </ul>
                  </li>

                  <li class="nav-item" id="lnk-project">
                      <a href="#" class="nav-link nav-link2">
                          <i class="fa-solid fa-project-diagram color8"></i>
                          <p>
                              اعدادات الموقع
                              <i class="right fas fa-angle-left "></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">

                          <li class="nav-item" id="lnk-add-project">
                              <a href="main.php?dir=settings&page=report" class="nav-link">
                                  <i class="fa fa-eye color2"></i>
                                  <p> تحديد العام الدراسي </p>
                              </a>
                          </li>
                      </ul>
                  </li>


              </ul>
          </nav>
          <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
  </aside>