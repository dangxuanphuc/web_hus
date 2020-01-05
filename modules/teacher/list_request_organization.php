<?php
  include("../server/config.php");
  include("../server/function.php");
  $sql = mysqli_query($conn, "SELECT * FROM intern_organization_requests ORDER BY status ASC, date_submit DESC");
?>
<?php while($temp = mysqli_fetch_assoc($sql)) { ?>
  <div class="w3-col w3-border content w3-round">
    <h3 class="w3-center">PHIẾU TUYỂN DỤNG</h3>
    <div class="w3-padding" style="height: 180px;">
      <div class="w3-third">
        <a href="<?php url_organization($temp['organization_id'])?>"><img src="../public/uploads/<?php avatar_organization($temp['organization_id']);?>" alt="image" style="height:110px;width:110px;margin-top:20px;" class="w3-border w3-round w3-hover-shadow"></a>
      </div>
      <div class="w3-twothird">
        <p><b>Công ty: </b><?php name_organization($temp["organization_id"]);?></p>
        <p><b>Vị trí tuyển dụng: </b><?php echo $temp["request_name"]?></p>
        <p><b>Số lượng tuyển: </b><?php echo $temp["amount"];?></p>
        <p><b>Trạng thái: </b><span class="w3-tag w3-round w3-<?php add_label_to_status($temp["status"]);?>" style="padding:3px;"><?php check_status($temp["status"]);?></span></p>
      </div>
    </div>
    <div class="w3-row w3-center">
      <button><a href="teacher.php?status=request_organization&id=<?php echo $temp['id'];?>&organization_id=<?php echo $temp['organization_id'];?>" class="w3-button w3-white w3-border w3-border-grey w3-round-large">Xem chi tiết</a></button>
      <button><a href="teacher.php?status=list_assigned&id=<?php echo $temp['id']?>" class="w3-button w3-white w3-border w3-border-grey w3-round-large">Xem bảng phân công</a></button>
    </div>
  </div>
<?php } ?>
