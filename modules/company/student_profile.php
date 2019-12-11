<?php
  include("../server/config.php");
  $request_id = $_GET["request_id"];
  $student_id = $_GET["student_id"];

  $sql = mysqli_query($conn, "SELECT * from student_profile where id=$student_id ");
  $row = mysqli_fetch_assoc($sql);
  $sql2 = "SELECT ab.ablity_name, l.ability_rate
    FROM student_skill_profile l
    JOIN ablity_dictionary ab on ab.id = l.ability_id
    WHERE l.student_id = $student_id";
  $sql_student_skill_profile = mysqli_query($conn, $sql2);
?>
<div class="w3-col s3" style="margin-top: 30px ;margin-left: 10px ;">
  <img src="../public/uploads/teacher/<?php echo $row['avatar']?> " height="250px" width="200px">
</div>
<div class="w3-col s8" style="margin-left: 40px">
  <div class="w3-row">
    <div class=" w3-col w3-center"><h1 class="w3-card"><?php echo $row["name"];?></h1></div>
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
      <div class="w3-row"><h3 style="margin-left:5px;">Skill</h3></div>
      <?php while($row1 = mysqli_fetch_assoc($sql_student_skill_profile)) { ?>
        <div class="w3-row">
          <div class="w3-col s2"><p><?php echo $row1["ablity_name"]?></p></div>
          <div class="w3-col s8 progres"><progress value="<?php echo $row1['ability_rate']?>" max="10" ></div>
        </div>
      <?php } ?>
    </div>
    <div class="w3-row">
      <button><a href="layout_company.php?status=showmore&id=<?php echo $request_id;?>"  >Back</a></button>
    </div>
  </div>
</div>