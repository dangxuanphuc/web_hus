<?php
  include("../server/config.php");
  $sql_intern_ability_dictionary = mysqli_query($conn, "SELECT * from intern_ability_dictionary");
?>
<div class="w3-container">
  <h3 class="w3-center">THÊM NĂNG LỰC</h3>
  <form action="../server/student/add_capacity_student.php" method="POST">
    <div class="w3-row w3-margin">
      <label for="skill_name">Tên năng lực</label>
      <select class="w3-select w3-round-large" name="ability_id">
        <?php while ($temp = mysqli_fetch_assoc($sql_intern_ability_dictionary)) { ?>
          <option value="<?php echo $temp['id']?>"><?php echo $temp["ability_name"]?></option>
        <?php } ?>
      </select>
    </div>
    <div class="w3-row w3-margin">
      <label for="skill_rate">Mức đánh giá</label>
      <select class="w3-select w3-round-large" name="rate">
        <?php for($x=1; $x<=10; $x++) { ?>
          <option class="w3-padding" value="<?php echo $x?>"><?php echo $x?></option>
        <?php } ?>
      </select>
    </div>
    <div class="w3-row w3-margin">
      <input type="submit" class="w3-button w3-white w3-border w3-border-green w3-round-large" value="Thêm">
      <button class="w3-button w3-white w3-border w3-border-gray w3-round-large"><a href="student.php?status=student_profile">Quay lại</a></button>
    </div>
  <form>
</div>
