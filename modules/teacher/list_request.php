<?php
  include("../server/config.php");
  include("../server/function.php");
  $sql = mysqli_query($conn, "SELECT * FROM intern_organization_requests ORDER BY status ASC, date_submitted DESC");
?>
<?php while($row = mysqli_fetch_assoc($sql)) { ?>
  <div class="w3-col w3-border content w3-round">
    <h3 class="w3-center">PHIẾU TUYỂN DỤNG</h3>
    <div class="w3-padding" style="height: 180px;">
      <div class="w3-third">
        <a href="<?php url_organization($row['organization_id'])?>"><img src="../public/uploads/<?php avatar_organization($row['organization_id']);?>" alt="image" style="height:110px;width:110px;margin-top:20px;" class="w3-border w3-round w3-hover-shadow"></a>
      </div>
      <div class="w3-twothird">
        <p><b>Công ty: </b><?php name_organization($row["organization_id"]);?></p>
        <p><b>Vị trí tuyển dụng: </b><?php echo $row["request_name"]?></p>
        <p><b>Số lượng tuyển: </b><?php echo $row["amount"];?></p>
        <p><b>Trạng thái: </b><span class="w3-tag w3-round w3-<?php add_label_to_status($row["status"]);?>" style="padding:3px;"><?php check_status($row["status"]);?></span></p>
      </div>
    </div>
    <div class="w3-row w3-center">
      <a href="teacher.php?status=detail_request_confirm&id=<?php echo $row['id'];?>&organization_id=<?php echo $row['organization_id'];?>" class="w3-button w3-white w3-border w3-border-grey w3-round-large">Xem chi tiết</a>
      <a href="teacher.php?status=list_assigned&id=<?php echo $row['id']?>" class="w3-button w3-white w3-border w3-border-grey w3-round-large">Xem bảng phân công</a>
    </div>
  </div>
<?php } ?>
