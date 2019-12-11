<?php
  if(isset($_GET["status"])) {
    $temp = $_GET["status"];
  } else {
    $temp = "";
  }
  if($temp == "list_request_company") {
    include("../server/company/list_request_company.php");
  } else if($temp == "detail_request_company") {
    include("detail_request_company.php");
  } else if($temp == "showmore") {
    include("../server/company/show_more.php");
  } else if($temp == "new_request") {
    include("new_request.php");
  } else if($temp == "company_profile") {
    include("company_profile.php");
  } else if($temp == "update_company_profile") {
    include("update_company_profile.php");
  } else if($temp == "update_pass_company") {
    include("update_pass_company.php");
  } else if($temp == "student_profile") {
    include("student_profile.php");
  }
?>
