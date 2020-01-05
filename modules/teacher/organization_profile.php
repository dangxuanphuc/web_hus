<?php
  include("../server/config.php");
  include("../server/function.php");
  $id = $_GET["organization_id"] ;
  $sql = mysqli_query($conn, "SELECT * FROM intern_organization_profile WHERE id = $id");
  $row = mysqli_fetch_assoc($sql);
?>
<div class="w3-container w3-margin">
  <div class="w3-third">
    <a href="<?php url_organization($row['id'])?>"><img src="../public/uploads/<?php avatar_organization($row['id'])?>" style="height:200px;width:200px;margin:50px;" class="w3-border w3-hover-shadow w3-round"></a>
  </div>
  <div class="w3-twothird" style="line-height:1;margin-top:40px;">
    <div class="w3-row">
      <h1><?php echo $row["organization_name"]?></h1>
    </div>
    <div class="w3-row">
      <p><b>Địa chỉ: </b><?php echo $row["address"];?></p>
      <p><b>Mô tả: </b><?php echo $row["description"];?></p>
      <p><b>Số lượng nhân viên: </b><?php echo $row["employee_count"];?></p>
      <p><b>Doanh Thu: </b><?php echo $row["gross_revenue"];?></p>
    </div>
  </div>
  <button><a href="teacher.php?status=list_organization" class="w3-button w3-white w3-border w3-border-grey w3-round-large">Quay lại</a></button>
</div>
