/** @format */

$(document).ready(function () {
  $(".customer_menu").click(function () {
    $(".child_menu").slideToggle();
  });

  $(".mynavitem").click(function () {
    $("this").hide();
  });
  /*  HIDE BUTTON WHEN CLICK  */

  // START CONFIRM MESSAGE
  $(".confirm").click(function () {
    return confirm(" هل تريد حذف هذا العنصر ");
  });

  $(".btn_image").click(function () {
    $(".image_info").css("top", "0px");
  });

  $(".add_new_rental_accident").click(function () {
    $(".add_rental_accident").css("top", "100px");
    $(".overflow").css("display", "block");
  });
  $(".closebtn").click(function () {
    $(".add_rental_accident").css("top", "-900px");
    $(".overflow").css("display", "none");
  });

  $(".add_new_payment_accident").click(function () {
    $(".add_payment_accident").css("top", "100px");
    $(".overflow").css("display", "block");
  });
  $(".closebtn").click(function () {
    $(".add_payment_accident").css("top", "-900px");
    $(".overflow").css("display", "none");
  });
  ////// show payment customer
  $(".show_payment_customer").click(function () {
    $(".show_new_payment_customer").css("top", "100px");
    $(".overflow").css("display", "block");
  });
  $(".closebtn").click(function () {
    $(".show_new_payment_customer").css("top", "-900px");
    $(".overflow").css("display", "none");
  });

  ////// show infraction
  $(".show_payment_customer2").click(function () {
    $(".show_new_payment_customer2").css("top", "100px");
    $(".overflow").css("display", "block");
  });
  $(".closebtn").click(function () {
    $(".show_new_payment_customer2").css("top", "-900px");
    $(".overflow").css("display", "none");
  });

  ////// show Accident
  $(".show_payment_customer3").click(function () {
    $(".show_new_payment_customer3").css("top", "100px");
    $(".overflow").css("display", "block");
  });
  $(".closebtn").click(function () {
    $(".show_new_payment_customer3").css("top", "-900px");
    $(".overflow").css("display", "none");
  });

  $(".savebutton").click(function () {
    $(".image_info").css("top", "-600px");
  });
  $(".printbtn").click(function () {
    var mode = "iframe";
    var close = mode == "popup";
    var options = { mode: mode, popClose: close };
    $(".print_content").printArea(options);
  });
  $(".new_select").select2();
  // loader
  var loader = function () {
    setTimeout(function () {
      if ($("#ftco-loader").length > 0) {
        $("#ftco-loader").removeClass("show");
      }
    }, 1);
  };
  loader();

  var dev = $("#logo").dropify({});
  dev = dev.data("dropify");
  var dev2 = $("#logo2").dropify({});
  dev2 = dev2.data("dropify");
  var dev3 = $("#logo3").dropify({});
  dev3 = dev3.data("dropify");
  var dev4 = $("#logo4").dropify({});
  dev4 = dev4.data("dropify");
  var dev5 = $(".logo2").dropify({});
  dev5 = dev5.data("dropify");
  var dev = $("#logo").dropify({});
  dev.on("dropify.beforeClear", function (event, element) {
    //alert($(element).attr("data-table"));
    var data_table = $("#logo").attr("data_table");
    var col_pk = $("#logo").attr("col_pk");
    var col_val = $("#logo").attr("col_val");

    var img_column = $("#logo").attr("name");
    var data_value = $("#logo").attr("data_value");

    delete_image(data_table, col_pk, col_val, img_column, data_value);
  });

  var dev2 = $("#logo2").dropify({});
  dev2.on("dropify.beforeClear", function (event, element) {
    //alert($(element).attr("data-table"));
    var data_table = $("#logo2").attr("data_table");
    var col_pk = $("#logo2").attr("col_pk");
    var col_val = $("#logo2").attr("col_val");

    var img_column = $("#logo2").attr("name");
    var data_value = $("#logo2").attr("data_value");

    delete_image(data_table, col_pk, col_val, img_column, data_value);
  });
  var dev3 = $("#logo3").dropify({});
  dev3.on("dropify.beforeClear", function (event, element) {
    //alert($(element).attr("data-table"));
    var data_table = $("#logo3").attr("data_table");
    var col_pk = $("#logo3").attr("col_pk");
    var col_val = $("#logo3").attr("col_val");

    var img_column = $("#logo3").attr("name");
    var data_value = $("#logo3").attr("data_value");

    delete_image(data_table, col_pk, col_val, img_column, data_value);
  });
  var dev4 = $("#logo4").dropify({});
  dev4.on("dropify.beforeClear", function (event, element) {
    //alert($(element).attr("data-table"));
    var data_table = $("#logo4").attr("data_table");
    var col_pk = $("#logo4").attr("col_pk");
    var col_val = $("#logo4").attr("col_val");

    var img_column = $("#logo4").attr("name");
    var data_value = $("#logo4").attr("data_value");

    delete_image(data_table, col_pk, col_val, img_column, data_value);
  });

  // START NEW WEB SITE EDUCTION

  // START company
  if (window.location.href.indexOf("dir=company") != -1) {
    $("#lnk-company").addClass("active menu-is-opening menu-open");
    if (window.location.href.indexOf("add") != -1) {
      $("#lnk-add-company").addClass("active-tab");
    }
  }

  // END company
  // START projects
  if (window.location.href.indexOf("dir=projects") != -1) {
    $("#lnk-project").addClass("active menu-is-opening menu-open");
    if (window.location.href.indexOf("add") != -1) {
      $("#lnk-add-project").addClass("active-tab");
    }
  }

  // END projects
  // START employee
  if (window.location.href.indexOf("dir=employee") != -1) {
    $("#lnk-employee").addClass("active menu-is-opening menu-open");
    if (window.location.href.indexOf("add") != -1) {
      $("#lnk-add-employee").addClass("active-tab");
    }
  }
  // end employee
  // START Packeges
  if (window.location.href.indexOf("dir=packeges") != -1) {
    $("#lnk-packeges").addClass("active menu-is-opening menu-open");
    if (window.location.href.indexOf("add") != -1) {
      $("#lnk-add-packeges").addClass("active-tab");
    }

  }
  // end Packeges
  // START Subscribe
  if (window.location.href.indexOf("dir=subscribe") != -1) {
    $("#lnk-subscribe").addClass("active menu-is-opening menu-open");
    if (window.location.href.indexOf("add") != -1) {
      $("#lnk-add-subscribe").addClass("active-tab");
    }
  }
  // End Subscribe
  // END NEW WEBSITE EDUCATION

  $(".country").select2({
    dropdownParent: $("#staticBackdrop"),
  });
  $(".new_select").select2({
    dropdownParent: $(".modal"),
  });

  $("select:not(.normal)").each(function () {
    $(this).select2({
      dropdownParent: $(this).parent(),
    });
  });

  $("#tableone").DataTable({
    "order": [[0, "desc"]],


    language: {
      search: "ابحث:",
      emptyTable: " لا يوجد بيانات ",
      infoEmpty: " لا يوجد بيانات ",
      infoFiltered: " لا يوجد بيانات ",
      paginate: {
        first: "الأول",
        previous: "السابق",
        next: "التالي",
        last: "الأخير",
      },
      searchBuilder: {
        add: "اضافة شرط",
        clearAll: "ازالة الكل",
        condition: "الشرط",
        data: "المعلومة",
        logicAnd: "و",
        logicOr: "أو",
        value: "القيمة",
        conditions: {
          date: {
            after: "بعد",
            before: "قبل",
            between: "بين",
            empty: "فارغ",
            equals: "تساوي",
            notBetween: "ليست بين",
            notEmpty: "ليست فارغة",
            not: "ليست ",
          },
          number: {
            between: "بين",
            empty: "فارغة",
            equals: "تساوي",
            gt: "أكبر من",
            lt: "أقل من",
            not: "ليست",
            notBetween: "ليست بين",
            notEmpty: "ليست فارغة",
            gte: "أكبر أو تساوي",
            lte: "أقل أو تساوي",
          },
          string: {
            not: "ليست",
            notEmpty: "ليست فارغة",
            startsWith: " تبدأ بـ ",
            contains: "تحتوي",
            empty: "فارغة",
            endsWith: "تنتهي ب",
            equals: "تساوي",
            notContains: "لا تحتوي",
            notStartsWith: "لا تبدأ بـ",
            notEndsWith: "لا تنتهي بـ",
          },
          array: {
            equals: "تساوي",
            empty: "فارغة",
            contains: "تحتوي",
            not: "ليست",
            notEmpty: "ليست فارغة",
            without: "بدون",
          },
        },
        button: {
          0: "فلاتر البحث",
          _: "فلاتر البحث (%d)",
        },
        deleteTitle: "حذف فلاتر",
        leftTitle: "محاذاة يسار",
        rightTitle: "محاذاة يمين",
        title: {
          0: "البحث المتقدم",
          _: "البحث المتقدم (فعال)",
        },
      },
      searchPanes: {
        clearMessage: "ازالة الكل",
        collapse: {
          0: "بحث",
          _: "بحث (%d)",
        },
        count: "عدد",
        countFiltered: "عدد المفلتر",
        loadMessage: "جارِ التحميل ...",
        title: "الفلاتر النشطة",
        showMessage: "إظهار الجميع",
        collapseMessage: "إخفاء الجميع",
        emptyPanes: "لا يوجد مربع بحث",
      },
      infoThousands: ",",
      datetime: {
        previous: "السابق",
        next: "التالي",
        hours: "الساعة",
        minutes: "الدقيقة",
        seconds: "الثانية",
        unknown: "-",
        amPm: ["صباحا", "مساءا"],
        weekdays: [
          "الأحد",
          "الإثنين",
          "الثلاثاء",
          "الأربعاء",
          "الخميس",
          "الجمعة",
          "السبت",
        ],
        months: [
          "يناير",
          "فبراير",
          "مارس",
          "أبريل",
          "مايو",
          "يونيو",
          "يوليو",
          "أغسطس",
          "سبتمبر",
          "أكتوبر",
          "نوفمبر",
          "ديسمبر",
        ],
      },

      decimal: ",",
      infoFiltered: "(مرشحة من مجموع _MAX_ مُدخل)",
      searchPlaceholder: "ابحث",
    },
    select: true,
    dom: 'Bfrtip',
    buttons: [
      {
        extend: 'excel',
        className: 'btn btn-secondary btn-sm',
        text: ' <i class="fa fa-file-export"></i> تصدير لملف اكسل',
        exportOptions: {
          columns: ':visible'
        }
      },
      {
        extend: 'print',
        className: 'btn btn-primary btn-sm',
        text: '<i class="fa fa-print"></i>  طباعه   ',
        exportOptions: {
          columns: ':visible'
        }
      },
      {
        extend: 'colvis',
        className: 'btn btn-danger btn-sm',
        text: '<i class="fa fa-eye"></i>  اختر الاعمدة   ',
      } 
    ],
  });
});
