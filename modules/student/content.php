<?php
if(isset($_GET["status"])){
  $temp = $_GET["status"];
} else {
  $temp = "";
}
if($temp == "list_company_request"){
  include("../server/student/list_company_request.php");
} else if($temp == "detail_request_company"){
  include("detail_request_company.php");
} else if($temp == "student_assigned_table"){
  include("student_assigned_table.php");
} else if($temp == "student_profile"){
  include("student_profile.php");
} else if($temp == "update_student_profile"){
  include("update_student_profile.php");
} else if($temp == "update_pass_student"){
  include("update_pass_student.php");
} else if($temp == "add_capacity_student"){
  include("add_capacity_student.php");
}
?>
