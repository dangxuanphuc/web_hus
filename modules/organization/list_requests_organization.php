<?php
  include("../server/config.php");
  include("../server/function.php");
  $organization_id = $_SESSION["organization_id"];
  $sql = mysqli_query($conn, "SELECT * FROM intern_organization_requests WHERE organization_id = $organization_id ORDER BY date_submit DESC");
?>
<?php while($temp = mysqli_fetch_assoc($sql)) { ?>
  <div class="w3-col w3-border content w3-round">
    <h3 class="w3-center">PHIẾU TUYỂN DỤNG</h3>
    <div class="w3-padding" style="height: 180px;">
      <div class="w3-third w3-padding">
        <a href="<?php url_organization($temp['organization_id'])?>"><img src="../public/uploads/<?php avatar_organization($temp['organization_id']);?>" alt="image" style="height:150px;width:150px;margin-top:20px;" class="w3-border w3-round w3-hover-shadow"></a>
      </div>
      <div class="w3-twothird w3-padding">
        <p><b>Công ty: </b><?php name_organization($temp["organization_id"]);?></p>
        <p><b>Vị trí tuyển dụng: </b><?php echo $temp["request_name"]?></p>
        <p><b>Số lượng tuyển: </b><?php echo $temp["amount"];?></p>
        <p><b>Trạng thái: </b><span class="w3-tag w3-round w3-<?php add_label_to_status($temp["status"]);?>" style="padding:3px;"><?php check_status($temp["status"]);?></span></p>
        <button class="w3-button w3-white w3-border w3-border-gray w3-round-large"><a href="organization.php?status=detail_request_organization&id=<?php echo $organization_id;?>">Xem chi tiết</a></button>
        <button class="w3-button w3-white w3-border w3-border-gray w3-round-large"><a href="organization.php?status=student_assigned&id=<?php echo $organization_id;?>">Xem bảng phân công</a></button>
      </div>
    </div>
  </div>
<?php } ?>
