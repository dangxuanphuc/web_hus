<?php
  if(isset($_GET["status"])){
    $temp = $_GET["status"];
  } else {
    $temp = "";
  }
  if($temp == "list_request_organization") {
    include "../server/student/list_request_organization.php";
  } else if ($temp == "request_organization") {
    include "request_organization.php";
  } else if ($temp == "request_assigned") {
    include "request_assigned.php";
  } else if ($temp == "add_capacity") {
    include "add_capacity.php";
  } else if ($temp == "student_profile") {
    include "student_profile.php";
  } else if ($temp == "update_profile") {
    include "update_profile.php";
  } else if ($temp == "update_pass") {
    include "update_pass.php";
  }
?>
