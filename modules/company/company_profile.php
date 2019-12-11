<?php
  include("../server/config.php");
  $id = $_SESSION["organization_id"] ;
  $sql = mysqli_query($conn, "SELECT * from company_profile where id=$id");
  $row = mysqli_fetch_assoc($sql);
?>
<div class="w3-col s3" style="margin-top: 30px;margin-left: 10px;">
  <img src="../public/uploads/index.png" height="250px" width="200px">
</div>
<div class="w3-col s8" style="margin-left: 40px">
  <div class="w3-row">
    <div class=" w3-col w3-center">
      <h1 class="w3-card"><?php echo $row["organization_name"];?></h1>
    </div>
  </div>
  <div class="w3-row">
    <p>Address: <?php echo $row["address"];?></p>
  </div>
  <div class="w3-row">
    <div class="w3-col"><p>Revenue: <?php echo $row["gross_revenue"];?></p></div>
  </div>
  <div class="w3-row">
    <p>Number of employee: <?php echo $row["employee_count"];?></p>
  </div>
  <div class="w3-row">
    <p>Description: <?php echo $row["description"];?></p>
  </div>
  <div class="w3-row">
    <button><a href="layout_company.php?status=update_company_profile">Update information</a></button>
  </div>
  <div class="w3-row">
    <button><a href="layout_company.php?status=update_pass_company">Update password</a></button>
  </div>
</div>
<div class="w3-row">
  <button><a href="layout_company.php?status=list_request_company">Back</a></button>
</div>
