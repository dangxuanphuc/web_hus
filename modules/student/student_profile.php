<?php
  include("../server/config.php");
  $student_id = $_SESSION["student_id"];
  $sql = mysqli_query($conn, "SELECT * from intern_students where id=$student_id ");
  $row = mysqli_fetch_assoc($sql);
  $sql_intern_student_ability = mysqli_query($conn, "SELECT ab.ability_name, l.ability_rate
    FROM intern_student_ability l
    JOIN intern_ability_dictionary ab on ab.id=l.ability_id
    WHERE l.student_id=$student_id");
?>
<div class="w3-col s3" style="margin-top: 30px;margin-left: 10px;">
  <img src="<?php echo $row['avatar']?>" height="200px" width="200px">
</div>
<div class="w3-col s8" style="margin-left: 40px">
  <div class="w3-row">
    <div class="w3-col w3-center"><h1 class="w3-card"><?php echo $row["name"];?></h1></div>
  </div>
  <div class="w3-row">
    <div class="w3-col s2">
      <i class="fa fa-map-marker" style="font-size:30px;color: red;margin-top: 10px"></i>
    </div>
    <div class="w3-col s9">
      <p>Class: <?php echo $row["class_name"];?> </p>
    </div>
  </div>
  <div class="w3-row">
    <p>Birthday: <?php echo $row["date_of_birth"];?> </p>
  </div>
</div>

<div class="w3-col s6">
  <div class="w3-row">
    <div class="w3-col">
      <div class="w3-row">  <h3 style="margin-left:5px;">Skills</h3></div>
      <?php while($row1=mysqli_fetch_assoc($sql_intern_student_ability)) { ?>
        <div class="w3-row">
          <div class="w3-col s2"><p><?php echo $row1["ability_name"]?></p></div>
          <div class="w3-col s8 progres"><progress value="<?php echo $row1['ability_rate']?>" max="10"></div>
        </div>
      <?php }?>
    </div>
    <div class="w3-row">
      <button> <a href="layout_student.php?status=update_student_profile">Update information</a></button>
    </div>
    <div class="w3-row">
      <button> <a href="layout_student.php?status=update_pass_student">Update password</a></button>
    </div>
    <div class="w3-row">
      <button> <a href="layout_student.php?status=add_capacity_student">Add skill</a></button>
    </div>
    <div class="w3-row">
      <button> <a href="layout_student.php?status=list_organization_request">Back</a></button>
    </div>
  </div>
</div>
