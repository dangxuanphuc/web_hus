<?php
  include("../server/config.php");
  $id = $_SESSION["organization_id"] ;
  $sql = mysqli_query($conn, "SELECT * from intern_organization_profile where id=$id");
  $row = mysqli_fetch_assoc($sql);
?>
<div class="w3-col s3" style="margin-top: 30px;margin-left: 10px;">
  <img src="../public/uploads/index.png" height="250px" width="200px">
</div>
<div class="w3-col s8" style="margin-left: 40px">
  <div class="w3-row">
    <div class="w3-col w3-center">
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
    <button>
      <a class="w3-button w3-light-green" href="organization.php?status=update_organization_profile" style="width: 200px; margin:10px 0px;border-radius: 5px; box-shadow: 2px 2px 2px gray;">Update information</a>
    </button>
  </div>
  <div class="w3-row">
    <button>
      <a class="w3-button w3-light-green" href="organization.php?status=update_pass_organization" style="width: 200px; margin:10px 0px;border-radius: 5px; box-shadow: 2px 2px 2px gray;">Update password</a>
    </button>
  </div>
</div>
<div class="w3-row">
  <button><a class="w3-button w3-red" href="organization.php?status=list_request_organization">Back</a></button>
</div>
