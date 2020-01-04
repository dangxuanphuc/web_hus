<?php
  include("../server/config.php");
  $id = $_SESSION["organization_id"] ;
  $sql = mysqli_query($conn, "SELECT * FROM intern_organization_profile WHERE id = $id");
  $row = mysqli_fetch_assoc($sql);
?>
<div class="w3-container w3-margin">
  <div class="w3-third">
    <a href="<?php echo $row['url']?>"><img src="../public/uploads/<?php echo $row['avatar']?>" style="height:200px;width:200px;margin:50px;" class="w3-border w3-hover-shadow w3-round"></a>
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
  <?php if($id == ) ?>
    <button class="w3-button w3-white w3-border w3-border-red w3-round-large"><a href="organization.php?status=update_organization_profile&organization_id=<?php echo $id;?>">Cập nhật thông tin</a></button>
    <button class="w3-button w3-white w3-border w3-border-red w3-round-large"><a href="organization.php?status=update_pass_organization&organization_id=<?php echo $id;?>">Cập nhật mật khẩu</a></button>
  <button><a href="organization.php?status=list_requests_organization" class="w3-button w3-white w3-border w3-border-grey w3-round-large">Quay lại</a></button>
</div>
