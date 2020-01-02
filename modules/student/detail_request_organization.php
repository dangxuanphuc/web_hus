<?php include("../server/config.php");
  $request_id = $_GET["id"];
  $organization_id = $_GET["organization_id"]
?>
<div class="w3-row">
  <?php include("../server/student/detail_request_organization.php");?>
</div>
<div class="w3-row w3-margin-top ">
  <?php include("../server/student/detail_request_organization_capacity.php");?>
</div>
