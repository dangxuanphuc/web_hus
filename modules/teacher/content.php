<div class="container" style="margin-top:50px;">
  <div class="w3-sidebar w3-light-grey w3-bar-block" style="width:25%;margin-top:2px;">
    <a href="teacher.php?status=add_student" class="w3-bar-item w3-button"><h5>Thêm sinh viên</h5></a>
    <a href="teacher.php?status=add_teacher" class="w3-bar-item w3-button"><h5>Thêm giảng viên</h5></a>
    <a href="teacher.php?status=add_organization" class="w3-bar-item w3-button"><h5>Thêm doanh nghiệp</h5></a>
    <a href="teacher.php?status=add_capacity" class="w3-bar-item w3-button"><h5>Thêm năng lực</h5></a>
    <a href="teacher.php?status=list_request" class="w3-bar-item w3-button"><h5>Danh sách phiếu tuyển dụng</h5></a>
    <a href="teacher.php?status=list_student" class="w3-bar-item w3-button"><h5>Danh sách sinh viên</h5></a>
    <a href="teacher.php?status=list_teacher" class="w3-bar-item w3-button"><h5>Danh sách giảng viên</h5></a>
    <a href="teacher.php?status=list_organization" class="w3-bar-item w3-button"><h5>Danh sách doanh nghiệp</h5></a>
  </div>
  <div style="margin-left:25%;">
    <?php
      if(isset($_GET["status"])) {
      $temp = $_GET["status"];
      } else {
        $temp = "";
      }
      if($temp == "add_student") {
        include("add_student.php");
      } elseif ($temp == "add_organization") {
        include("add_organization.php");
      } elseif ($temp == "add_teacher") {
        include("add_teacher.php");
      } elseif ($temp == "add_capacity") {
        include("add_capacity.php");
      } elseif ($temp == "list_request") {
        include("list_request.php");
      } elseif ($temp == "detail_request") {
        include("detail_request.php");
      } elseif ($temp == "list_assigned") {
        include("list_assigned.php");
      } elseif ($temp == "list_student_register") {
        include("list_student_register.php");
      } elseif ($temp == "add_student_request") {
        include("../server/teacher/add_student_request.php");
      } elseif ($temp == "list_student") {
        include("list_student.php");
      } elseif ($temp == "list_organization") {
        include("list_organization.php");
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
      } elseif ($temp == "organization_profile") {
        include("organization_profile.php");
      } elseif ($temp == "update_teacher_profile") {
        include("update_teacher_profile.php");
      } elseif ($temp == "teacher_profile") {
        include("teacher_profile.php");
      }
    ?>
  </div>
</div>
