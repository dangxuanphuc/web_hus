<?php
  include "../server/config.php";
  $id = $_GET["id"];
  $sql = "SELECT ab.ability_name, l.ability_required, l.ability_id
    FROM intern_organization_request_abilities l
    JOIN intern_ability_dictionary ab ON ab.id = l.ability_id
    WHERE l.organization_request_id = $id";
  $result = mysqli_query($conn, $sql);
  $sql2 = "SELECT * FROM intern_ability_dictionary
    WHERE id NOT IN (SELECT l.ability_id
    FROM intern_organization_request_abilities l
    JOIN intern_ability_dictionary ab ON ab.id = l.ability_id
    WHERE l.organization_request_id = $id)";
  $sql_intern_ability_dictionary = mysqli_query($conn, $sql2);
?>
<div class="w3-container">
  <div class="w3-row w3-quarter">
    <h3 class="w3-center">THÊM NĂNG LỰC</h3>
    <form action="../server/organization/add_skill.php?request_id=<?php echo $id?>" method="POST">
      <div class="w3-row w3-section">
        <label for="ability_name">Tên năng lực</label>
        <select class="w3-select w3-light-gray w3-round" name="ability_id">
          <?php while ($temp = mysqli_fetch_assoc($sql_intern_ability_dictionary)) { ?>
            <option value="<?php echo $temp["id"]?>"><?php echo $temp["ability_name"]?></option>
          <?php }?>
        </select>
      </div>
      <div class="w3-row w3-section">
        <label for="ability_name">Mức đánh giá</label>
        <select class="w3-select w3-light-gray w3-round" name="rate">
          <?php for($x=1; $x<=10; $x++) { ?>
            <option value="<?php echo $x?>"><?php echo $x?></option>
          <?php }?>
        </select>
        </div>
      <input type="submit" value="Thêm" class="w3-button w3-white w3-border w3-border-green w3-round-large">
    </form>
  </div>
  <div class="w3-row w3-center w3-threequarter">
    <h3>DANH SÁCH NĂNG LỰC</h3>
    <table class="w3-table w3-striped w3-centered">
      <tr>
        <th>Tên Năng Lực</th>
        <th>Mức Đánh Giá</th>
        <th>Xóa</th>
      </tr>
      <?php while($temp = mysqli_fetch_assoc($result)) { ?>
        <tr>
          <td><?php echo $temp["ability_name"] ?></td>
          <td><?php echo $temp["ability_required"] ?> / 10</td>
          <td><a href="../server/organization/remove_skill.php?request_id=<?php echo $id;?>&ability_id=<?php echo $temp['ability_id'];?>" class="w3-button w3-white w3-border w3-border-red w3-round-large" onClick="return confirm('Bạn có chắc chắn không?')">Xóa</a></td>
        </tr>
      <?php } ?>
    </table>
  </div>
</div>
