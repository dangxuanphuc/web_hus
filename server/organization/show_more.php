<?php
  include("../server/config.php");
  $id = $_GET["id"];

  $sql = mysqli_query($conn, "SELECT ab.ability_name, l.ability_required, l.ability_id
    FROM intern_organization_request_abilities l
    JOIN intern_ability_dictionary ab on ab.id=l.ability_id
    WHERE l.organization_request_id=$id");

  $sql_intern_ability_dictionary = mysqli_query($conn, "SELECT * from intern_ability_dictionary ");
  $sql_request_assigned = mysqli_query($conn, "SELECT * from intern_organization_request_assignment ab join intern_students sp on ab.student_id=sp.id where organization_request_id=$id ");
?>

<table class="w3-table w3-light-green w3-border" style="margin-left: 30%">
  <tr>
    <th style="margin-left: 30%">Skill name</th>
    <th style="margin-left: 30%">Mức đánh giá</th>
    <th></th>
  </tr>
  <?php while($row = mysqli_fetch_assoc($sql)) { ?>
    <tr>
      <td><?php echo $row["ability_name"] ?></td>
      <td><?php echo $row["ability_required"] ?> </td>
      <td><a href="../server/organization/remove_skill.php?id_request=<?php echo $id;?>&ability_id=<?php echo $row['ability_id'];?> ">Delete</a></td>
    </tr>
  <?php } ?>
</table>

<p style="font-size: 24px; font-weight: bold; margin-left: 30%;">Add skill</p>
<form action="../server/organization/add_skill.php?id_REQUEST=<?php echo $id ?>" method="post">
  <select class="w3-select w3-light-gray w3-border" name="ability_id" style="margin-left: 30%">
    <?php while ($dong = mysqli_fetch_assoc($sql_intern_ability_dictionary)) { ?>
      <option value="<?php echo $dong["id"]?>"><?php echo $dong["ability_name"]?></option>
    <?php }?>
  </select>

  <select class="w3-select w3-light-gray w3-border" name="rate" style="margin-left: 30%">
    <?php for($x=1; $x<=10; $x++) { ?>
      <option value="<?php echo $x?> "><?php echo $x?></option>
    <?php }?>
  </select>
  <input type="text" name="note" value="Note" style="margin-left: 30%"></br>
  <input type="submit" name="submit" style="margin-left: 30%">
</form>

<p style="font-size: 24px; font-weight: bold;margin-left:30%">List student assigned</p>
<table class="w3-table" style="margin-left:30%">
  <tr>
    <th>Student name</th>
    <th>Information</th>
  </tr>
  <?php while($row1 = mysqli_fetch_assoc($sql_request_assigned)) { ?>
    <tr>
      <td> <?php echo $row1["name"] ?></td>
      <td><a href="organization.php?status=student_profile&student_id=<?php echo $row1['id']?>&request_id=<?php echo $id?>">Show more</a></td>
    </tr>
  <?php } ?>
</table>
<p style="font-size: 24px; font-weight: bold;margin-left:30%">Print list</p>
