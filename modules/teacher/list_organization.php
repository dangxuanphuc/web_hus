<?php
  include "../server/config.php";
  $sql_organization = mysqli_query($conn, "SELECT * FROM intern_organization_profile");
?>
<h1></h1>
<div class="w3-col w3-border w3-round">
  <h3 class="w3-center">DANH SÁCH CÔNG TY, DOANH NGHIỆP</h3>
  <table class="w3-table-all w3-bordered w3-centered">
    <tr>
      <th>Tên công ty</th>
      <th>Thông tin</th>
    </tr>
    <?php while($temp = mysqli_fetch_assoc($sql_organization)){?>
      <tr>
        <td><?php echo $temp["organization_name"] ?></td>
        <td><a href="teacher.php?status=organization_profile&organization_id=<?php echo $temp['id'] ?>" class="w3-button w3-white w3-border w3-border-grey w3-round-large">Xem chi tiết</a></td>
      </tr>
    <?php } ?>
  </table>
</div>
