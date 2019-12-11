<?php
  include("../server/config.php");
  $id = $_GET["id"];

  $sql = mysqli_query($conn, "SELECT ab.ablity_name, l.ability_required, l.ability_id
    FROM list_of_required_capacity_of_each_request_coupon l
    JOIN ablity_dictionary ab on ab.id=l.ability_id
    WHERE l.organization_request_id=$id");

  $sql_ablity_dictionary = mysqli_query($conn, "SELECT * from ablity_dictionary ");
  $sql_assigned_table = mysqli_query($conn, "SELECT * from assigned_table ab join student_profile sp on ab.student_id=sp.id where organization_request_id=$id ");
?>

<table class="w3-table">
  <tr>
    <th>Skill name</th>
    <th>Mức đánh giá</th>
    <th></th>
  </tr>
  <?php while($row = mysqli_fetch_assoc($sql)) { ?>
    <tr>
      <td><?php echo $row["ablity_name"] ?></td>
      <td><?php echo $row["ability_required"] ?> </td>
      <td><a href="../server/company/remove_skill.php?id_request=<?php echo $id;?>&ability_id=<?php echo $row['ability_id'];?> ">Delete</a></td>
    </tr>
  <?php } ?>
</table>

<h3>Add skill</h3>
<form action="../server/company/add_skill.php?id_REQUEST=<?php echo $id ?>" method="post">
  <select class="w3-select" name="ablity_id">
    <?php while ($dong=mysqli_fetch_assoc($sql_ablity_dictionary)) { ?>
      <option value="<?php echo $dong["id"]?>"><?php echo $dong["ablity_name"]?></option>
    <?php }?>
  </select>

  <select class="w3-select" name="rate">
    <?php for($x=1; $x<=10; $x++) { ?>
      <option value="<?php echo $x?> "><?php echo $x?></option>
    <?php }?>
  </select>
  <input type="text" name="note" value="note"></br>
  <input type="submit" name="add" value="Add">
</form>

<h3>List student assigned</h3>
<table class="w3-table">
  <tr>
    <th>Student name</th>
    <th>Information</th>
  </tr>
  <?php while($row1 = mysqli_fetch_assoc($sql_assigned_table)) { ?>
    <tr>
      <td> <?php echo $row1["name"] ?></td>
      <td><a href="layout_company.php?status=student_profile&student_id=<?php echo $row1['id']?>&request_id=<?php echo $id?>">Show more</a></td>
    </tr>
  <?php } ?>
</table>
<h3>Print list</h3>
