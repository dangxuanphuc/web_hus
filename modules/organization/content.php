<?php
  if(isset($_GET["status"])) {
    $temp = $_GET["status"];
  } else {
    $temp = "";
  }
  if($temp == "list_requests") {
    include "list_requests.php";
  } else if($temp == "detail_request") {
    include "detail_request.php";
  } else if($temp == "student_assigned") {
    include "student_assigned.php";
  } else if($temp == "new_request") {
    include "new_request.php";
  } else if($temp == "organization_profile") {
    include "organization_profile.php";
  } else if($temp == "update_profile") {
    include "update_profile.php";
  } else if($temp == "update_pass") {
    include "update_pass.php";
  } else if($temp == "student_profile") {
    include "student_profile.php";
  }
?>
