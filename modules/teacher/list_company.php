<?php
  include("../server/config.php");
  $sql_enterprise = mysqli_query($conn, "SELECT * from enterprise_profile");
?>
<h1>List company</h1>
<table class="w3-table">
  <tr>
    <th>Comapny name</th>
    <th>Information</th>
  </tr>
  <?php while($row1 = mysqli_fetch_assoc($sql_enterprise)){?>
    <tr>
      <td><?php echo $row1["organization_name"] ?></td>
      <td><a href="layout_teacher.php?status=enterprise_profile&enterprise_id=<?php echo $row1['id'] ?>">Xem</a></td>
    </tr>
  <?php } ?>
</table>
