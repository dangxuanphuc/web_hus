<?php
  $student_id = $_SESSION["student_id"];
  $sql = "SELECT ab.ability_name, l.ability_required
    FROM intern_organization_request_abilities l
    JOIN intern_ability_dictionary ab on ab.id=l.ability_id
    WHERE l.organization_request_id = $request_id";
  $result = mysqli_query($conn, $sql);
  $sql2 = "SELECT * FROM intern_organization_request_assignment WHERE student_id = $student_id";
  $sql_status_request_assigned = mysqli_query($conn, $sql2);
  $status_request_assigned = mysqli_fetch_assoc($sql_status_request_assigned);
  $sql_status_request = mysqli_query($conn, "SELECT * FROM intern_organization_requests WHERE id = $request_id");
  $status_intern_organization_requests = mysqli_fetch_assoc($sql_status_request);
  $sql3 = "SELECT student_id FROM intern_student_register";
  $result_sql3 = mysqli_fetch_assoc(mysqli_query($conn, $sql3));
?>
<div class="w3-container" style="margin-left: 70px;">
  <div class="w3-row">
    <div class="w3-col">
      <h3>YÊU CẦU NĂNG LỰC</h3>
      <?php while($temp = mysqli_fetch_assoc($result)) { ?>
        <div class="w3-row">
          <div class="w3-col s1" style="margin-bottom: 5px;"><?php echo $temp["ability_name"]?></div>
          <div class="w3-col s7 w3-light-grey w3-round">
            <div class="w3-green w3-center w3-round" style="width:<?php echo $temp['ability_required']*10?>%"><?php echo $temp['ability_required']*10?>%</div>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>
  <div class="w3-row">
    <div class="w3-col">
      <h3>YÊU CẦU CÔNG VIỆC</h3>
      <ul>
        <li><?php echo $row["description"]?></li>
      </ul>
    </div>
  </div>
  <div class="w3-row">
    <button class="w3-button w3-white w3-border w3-border-gray w3-round-large"><a href="student.php?status=list_organization_request">Quay lại</a></button>
    <?php
      if($status_request_assigned["status"] == "0" || $status_request_assigned["status"] == "1" ||$status_intern_organization_requests["status"] == "4000"){?>
        <button type="button" class="w3-button w3-teal w3-round-large" disabled>Đăng ký</button>
    <?php } else if(in_array($student_id, $result_sql3)) { ?>
      <button type="button" class="w3-button w3-green w3-round-large" disabled>Đã đăng ký</button>
    <?php } else { ?>
      <button class="w3-button w3-white w3-border w3-border-red w3-round-large"><a href="../server/student/request_registration_organization.php?id=<?php echo $request_id;?>&student_id=<?php echo $_SESSION['student_id']?>&date=<?php echo date('Y-m-d');?>">Đăng ký</a></button>
    <?php } ?>
  </div>
</div>
