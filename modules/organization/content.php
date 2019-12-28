<?php
  if(isset($_GET["status"])) {
    $temp = $_GET["status"];
  } else {
    $temp = "";
  }
  if($temp == "list_request_organization") {
    include("../server/organization/list_request_organization.php");
  } else if($temp == "detail_request_organization") {
    include("detail_request_organization.php");
  } else if($temp == "showmore") {
    include("../server/organization/show_more.php");
  } else if($temp == "new_request") {
    include("new_request.php");
  } else if($temp == "intern_organization_profile") {
    include("intern_organization_profile.php");
  } else if($temp == "update_organization_profile") {
    include("update_organization_profile.php");
  } else if($temp == "update_pass_organization") {
    include("update_pass_organization.php");
  } else if($temp == "student_profile") {
    include("student_profile.php");
  }
?>
