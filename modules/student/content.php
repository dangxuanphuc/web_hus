<?php
  if(isset($_GET["status"])){
    $temp = $_GET["status"];
  } else {
    $temp = "";
  }
  if($temp == "list_organization_request"){
    include("../server/student/list_organization_request.php");
  } else if($temp == "detail_request_organization"){
    include("detail_request_organization.php");
  } else if($temp == "student_request_assigned"){
    include("student_request_assigned.php");
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
