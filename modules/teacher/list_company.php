<?php
  include("../server/config.php");
  $sql_company = mysqli_query($conn, "SELECT * from company_profile");
?>
<h1>List company</h1>
<table class="w3-table">
  <tr>
    <th>Comapny name</th>
    <th>Information</th>
  </tr>
  <?php while($row1 = mysqli_fetch_assoc($sql_company)){?>
    <tr>
      <td><?php echo $row1["organization_name"] ?></td>
      <td><a href="layout_teacher.php?status=company_profile&company_id=<?php echo $row1['id'] ?>">Show info</a></td>
    </tr>
  <?php } ?>
</table>
