<?php
  include("../server/config.php");
  include("../server/function.php");
  $sql = "SELECT * from intern_organization_requests where id = $request_id";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);
?>
<div class="w3-container w3-card w3-margin">
  <div class="w3-third">
    <a href="<?php url_organization($row['organization_id'])?>"><img src="../public/uploads/<?php avatar_organization($row['organization_id'])?>" style="height:200px;width:200px;margin:50px;" class="w3-border w3-hover-shadow w3-round"></a>
  </div>
  <div class="w3-twothird" style="line-height:1;margin-top:40px;">
    <div class="w3-row">
      <div class="w3-col"><h1><?php echo $row["request_name"]?></h1></div>
    </div>
    <div class="w3-row">
      <p><b>Công ty: </b><?php name_organization($row["organization_id"]);?></p>
      <p><b>Địa chỉ: </b><?php address_organization($row["organization_id"]);?></p>
      <p><b>Số sinh viên đã đăng ký: </b><?php number_of_registrations($row["id"]);?></p>
      <p><b>Số sinh viên đã phân công: </b><?php number_of_assigned($row["id"]);?></p>
      <p><b>Trạng thái: </b><span class="w3-tag w3-round w3-<?php add_label_to_status($row["status"]);?>" style="padding:3px;"><?php check_status($row["status"]);?></span></p>
    </div>
  </div>
</div>
