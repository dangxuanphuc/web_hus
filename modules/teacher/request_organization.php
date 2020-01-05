<?php
  include("../server/config.php");
  include("../server/function.php");
  $request_id = $_GET["id"];
  $sql = mysqli_query($conn, "SELECT * FROM intern_organization_requests WHERE id=$request_id ");
  $row = mysqli_fetch_assoc($sql);
  $sql2 = "SELECT ab.ability_name, l.ability_required
    FROM intern_organization_request_abilities l
    JOIN intern_ability_dictionary ab on ab.id = l.ability_id
    WHERE l.organization_request_id = $request_id";
  $sql_intern_ability_dictionary = mysqli_query($conn, $sql2);
?>
<div class="w3-container w3-margin">
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
<div class="w3-container" style="margin-left: 70px;">
  <div class="w3-row">
    <div class="w3-col">
      <h3>YÊU CẦU CÔNG VIỆC</h3>
      <ul>
        <?php
          $array_desc = explode_paragraph($row["description"]);
          foreach($array_desc as $arr) {
            echo "<li>".$arr."</li>";
          }
        ?>
      </ul>
    </div>
  </div>
  <div class="w3-row">
    <button class="w3-button w3-white w3-border w3-border-gray w3-round-large"><a href="teacher.php?status=list_request_organization">Quay lại</a></button>
  </div>
</div>
