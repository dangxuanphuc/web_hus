<?php
  include "../server/config.php";
  $student_id = $_GET["student_id"];
  $sql = mysqli_query($conn, "SELECT * from intern_students where id=$student_id");
  $row = mysqli_fetch_assoc($sql);
  $sql2 = "SELECT ab.ability_name, l.ability_rate
    FROM intern_student_ability l
    JOIN intern_ability_dictionary ab on ab.id = l.ability_id
    WHERE l.student_id = $student_id";
  $sql_intern_student_ability = mysqli_query($conn, $sql2);
?>
<div class="w3-container">
  <div class="w3-third w3-center" style="margin-top:30px;">
    <img src="../public/uploads/<?php echo $row['avatar']?>" style="height:200px;width:200px" class="w3-circle">
    <p class="w3-large"><?php echo $row["name"];?></p>
  </div>
  <div class="w3-twothird" style="margin-top:20px;">
    <h3>THÔNG TIN CÁ NHÂN</h3>
    <p>Lớp: <?php echo $row["class_name"];?></p>
    <p>Ngày sinh: <?php echo date("m-d-Y", strtotime($row["date_of_birth"]));?></p>
    <h3>NĂNG LỰC</h3>
    <?php while($temp = mysqli_fetch_assoc($sql_intern_student_ability)) { ?>
      <div class="w3-row">
        <div class="w3-col s2" style="margin-bottom: 5px;"><?php echo $temp["ability_name"]?></div>
        <div class="w3-col s8 w3-light-grey w3-round">
          <div class="w3-green w3-center w3-round" style="width:<?php echo $temp['ability_rate']*10?>%"><?php echo $temp['ability_rate']*10?>%</div>
        </div>
      </div>
    <?php }?>
    <button class="w3-button w3-white w3-border w3-border-gray w3-round-large"><a href="teacher.php?status=list_student">Quay lại</a></button></p>
  </div>
</div>
