<?php
  include "../server/config.php";
  $id = $_GET["id"];
  $sql_request_assigned = mysqli_query($conn, "SELECT * FROM intern_organization_request_assignment ab JOIN intern_students sp ON ab.student_id=sp.id WHERE organization_request_id = $id");
?>
<div class="w3-container">
  <div class="w3-row w3-center">
    <h3>DANH SÁCH SINH VIÊN ĐƯỢC PHÂN CÔNG</h3>
  </div>
  <table class="w3-table-all w3-centered">
    <tr>
      <th>Tên Sinh Viên</th>
      <th>Thông Tin Cá Nhân</th>
    </tr>
    <?php while($temp = mysqli_fetch_assoc($sql_request_assigned)) { ?>
      <tr>
        <td><?php echo $temp["name"]?></td>
        <td><a href="organization.php?status=student_profile&student_id=<?php echo $temp['id']?>&request_id=<?php echo $id?>" class="w3-button w3-white w3-border w3-border-grey w3-round-large">Xem chi tiết</a></td>
      </tr>
    <?php } ?>
  </table>
  <br>
  <button class="w3-button w3-white w3-border w3-border-gray w3-round-large"><a href="organization.php?status=list_requests">Quay lại</a></button>
</div>
