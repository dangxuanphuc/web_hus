<?php
  include("../server/config.php");
  include("../server/function.php");
  $sql = mysqli_query($conn, "SELECT * FROM intern_organization_requests WHERE status='3000' ORDER BY status ASC");
?>
<?php while($row = mysqli_fetch_assoc($sql)) { ?>
  <div class="w3-col w3-border content w3-round">
    <h3 class="w3-center">PHIẾU TUYỂN DỤNG</h3>
    <div class="w3-padding" style="height: 180px;">
      <div class="w3-third w3-padding">
        <a href="<?php url_organization($row['organization_id'])?>"><img src="../public/uploads/<?php avatar_organization($row['organization_id']);?>" alt="image" style="height:150px;width:150px;margin-top:20px;" class="w3-border w3-round w3-hover-shadow"></a>
      </div>
      <div class="w3-twothird w3-padding">
        <p><b>Công ty: </b><?php name_organization($row["organization_id"]);?></p>
        <p><b>Vị trí tuyển dụng: </b><?php echo $row["request_name"]?></p>
        <p><b>Số lượng tuyển: </b><?php echo $row["amount"];?></p>
        <p><b>Trạng thái: </b><span class="w3-tag w3-round w3-<?php add_label_to_status($row["status"]);?>" style="padding:3px;"><?php check_status($row["status"]);?></span></p>
        <button class="w3-button w3-white w3-border w3-border-gray w3-round-large"><a href="student.php?status=detail_request_organization&id=<?php echo $row['id'];?>&organization_id=<?php echo $row['organization_id'];?>">Xem chi tiết</a></button>
      </div>
    </div>
  </div>
<?php } ?>
