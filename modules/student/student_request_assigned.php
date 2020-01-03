<?php
  include_once("../server/config.php");
  include_once("../server/function.php");
  $sql = "SELECT * FROM intern_organization_requests";
  $result_request = mysqli_query($conn, $sql);
  $request_data = $result_request->fetch_array(MYSQLI_ASSOC);
  $value = $_SESSION["student_name"];
  $get_date = "SELECT start_date, end_date FROM intern_organization_request_assignment WHERE student_id=(
    SELECT id FROM intern_students WHERE intern_students.name = '$value')";
  $result = mysqli_query($conn, $get_date);
  $date_data = $result->fetch_array(MYSQLI_ASSOC);
?>
<div class="w3-container">
  <form action="../server/student/request_assigned.php?request_id=<?php echo $request_data['id']?>" method="POST">
    <div class="w3-panel w3-card" style="display: block;width: 400px;height: 30%; margin-left: 300px">
      <p><b>Công ty: </b><?php name_organization($request_data["id"]) ?></p>
      <p><b>Vị trí được phân công: </b><?php echo $request_data["request_name"] ?></p>
      <p><b>Mô tả: </b><?php echo $request_data["description"] ?></p>
      <p><b>Ngày bắt đầu: </b>
      <input type="date" class="w3-round" name="start_date" value="<?php echo $date_data["start_date"] ?>" required></p>
      <p><b>Ngày kết thúc: </b>
      <input type="date" class="w3-round" name="end_date" value="<?php echo $date_data["end_date"] ?>" required><p>
      <p><b>Trạng thái: </b>
      <select name="status" class="w3-round">
        <?php
          if($date_data["status"] == "0"){?>
            <option value="<?php echo '0'?>">Chờ thực hiện</option>
            <option value="<?php echo '1'?>">Đang thực hiện</option>";
          <?php } else {?>
            <option value="<?php echo '1'?>">Đang thực hiện</option>
            <option value="<?php echo '2'?>">Đã thực hiện xong</option>";
          <?php }
        ?>
      </select></p>
      <button type="submit" class="w3-button w3-white w3-border w3-border-green w3-round-large">Lưu</button>
    </div>
  </form>
</div>
