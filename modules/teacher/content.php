<div class="w3-row">
  <div class="w3-green w3-container w3-quarter left ">
    <a href="layout_teacher.php?status=add_student"><h3>Add student</h3></a>
    <a href="layout_teacher.php?status=add_teacher"><h3>Add teacher</h3></a>
    <a href="layout_teacher.php?status=add_company"><h3>Add company</h3></a>
    <a href="layout_teacher.php?status=add_capacity"><h3>Add capacity</h3></a>
    <a href="layout_teacher.php?status=list_request_confirm"><h3>List request confirm</h3></a>
    <a href="layout_teacher.php?status=list_request_unconfimred"><h3>List request unconfirmed</h3></a>
    <a href="layout_teacher.php?status=list_request_cancel"><h3>List request cancel</h3></a>
    <a href="layout_teacher.php?status=list_teacher"><h3>List teacher</h3></a>
    <a href="layout_teacher.php?status=list_student"><h3>List student</h3></a>
    <a href="layout_teacher.php?status=list_enterprise"><h3>List company</h3></a>
    <a href="layout_teacher.php?status=update_pass_teacher"><h3>Change password</h3></a>
  </div>

  <div class="w3-container w3-threequarter right">
    <?php
      if(isset($_GET["status"])) {
      $temp = $_GET["status"];
      } else {
        $temp = "";
      }
      if($temp == "add_student") {
        include("add_student.php");
      } elseif ($temp == "add_company") {
        include("add_company.php");
      } elseif ($temp == "add_teacher") {
        include("add_teacher.php");
      } elseif ($temp == "add_capacity") {
        include("add_capacity.php");
      } elseif ($temp == "list_request_unconfimred") {
        include("list_request_unconfimred.php");
      } elseif ($temp == "detail_request_enerprise") {
        include("../server/teacher/detail_request_unconfimred.php");
      } elseif ($temp == "list_request_cancel") {
        include("list_request_cancel.php");
      } elseif ($temp == "detail_request_cancel") {
        include("../server/teacher/detail_request_cancel.php");
      } elseif ($temp == "list_request_confirm") {
        include("list_request_confirm.php");
      } elseif ($temp == "detail_request_confirm") {
        include("../server/teacher/detail_request_confirm.php");
      } elseif ($temp == "list_assigned") {
        include("list_assigned.php");
      } elseif ($temp == "list_student_regster") {
        include("list_student_register.php");
      } elseif ($temp == "add_student_request") {
        include("../server/teacher/add_student_request.php");
      } elseif ($temp == "detail_request_confirm") {
        include("detail_request_confirm.php");
      } elseif ($temp == "list_student") {
        include("list_student.php");
      } elseif ($temp == "list_company") {
        include("list_company.php");
      } elseif ($temp == "list_teacher") {
        include("list_teacher.php");
      } elseif($temp == "teacher_profile") {
        include("teacher_profile.php");
      } elseif ($temp == "list_student_not_assigned") {
        include("list_student_not_assigned.php");
      } elseif ($temp == "update_pass_teacher") {
        include("update_pass_teacher.php");
      } elseif ($temp == "student_profile") {
        include("student_profile.php");
      } elseif ($temp == "company_profile") {
        include("company_profile.php");
      }
    ?>
  </div>
</div>
