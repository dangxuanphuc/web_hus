<?php
  $student_id = $_SESSION["student_id"];
  $sql = "SELECT ab.ability_name, l.ability_required
    FROM intern_organization_request_abilities  l
    JOIN intern_ability_dictionary ab on ab.id=l.ability_id
    WHERE l.organization_request_id=$request_id";
  $result = mysqli_query($conn, $sql);

  $sql2 = "SELECT * FROM intern_organization_request_assignment WHERE student_id=$student_id";
  $sql_status_request_assigned = mysqli_query($conn, $sql2);
  $status_request_assigned = mysqli_fetch_assoc($sql_status_request_assigned);
  $sql_status_request = mysqli_query($conn, "SELECT * from intern_organization_requests WHERE id=$request_id");
  $status_intern_organization_requests = mysqli_fetch_assoc($sql_status_request);
?>

<div class="w3-col s6">
  <div class="w3-row">
    <div class="w3-col">
      <div class="w3-row"><h3 style="margin-left:5px;">Yeu cau tuyen dung</h3></div>
      <?php while($row = mysqli_fetch_assoc($result)) {?>
        <div class="w3-row">
          <div class="w3-col s4"><p><?php echo $row["ability_name"]?></p></div>
          <div class="w3-col s8 progres">
            <progress value="<?php echo $row['ability_required']?>" max="10">
          </div>
        </div>
      <?php } ?>
    </div>
    <div class="w3-row">
      <button> <a href="layout_student.php?status=list_organization_request">Back</a></button>
      <?php
        if($status_request_assigned["status"] == "0" || $status_request_assigned["status"] == "1" ||$status_intern_organization_requests["status"] == "4000" ){?>
          <button type="button" disabled>Register</button>
      <?php } else { ?>
        <button><a href="../server/student/request_registration_organization.php?id=<?php echo $request_id;?>&student_id=<?php echo $_SESSION['student_id']?>&date=<?php echo date('Y/m/d');?>">Register</a></button>
      <?php } ?>
    </div>
  </div>
</div>
