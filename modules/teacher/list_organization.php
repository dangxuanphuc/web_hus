<?php
  include("../server/config.php");
  $sql_organization = mysqli_query($conn, "SELECT * from intern_organization_profile");
?>
<h1>List organization</h1>
<table class="w3-table">
  <tr>
    <th>Comapny name</th>
    <th>Information</th>
  </tr>
  <?php while($row1 = mysqli_fetch_assoc($sql_organization)){?>
    <tr>
      <td><?php echo $row1["organization_name"] ?></td>
      <td><a href="layout_teacher.php?status=intern_organization_profile&organization_id=<?php echo $row1['id'] ?>">Show info</a></td>
    </tr>
  <?php } ?>
</table>
