<?php
  $student_id = $_SESSION["student_id"];
  $sql = "SELECT ab.ablity_name, l.ability_required
    FROM list_of_required_capacity_of_each_request_coupon  l
    JOIN ablity_dictionary ab on ab.id=l.ability_id
    WHERE l.organization_request_id=$request_id";
  $result = mysqli_query($conn, $sql);

  // Check status assigned table
  $sql_status_assigned_table = mysqli_query($conn, "SELECT * from assigned_table WHERE organization_request_id = $request_id and student_id=$student_id");
  $status_assigned_table = mysqli_fetch_assoc($sql_status_assigned_table);
  // Check status request
  $sql_status_request = mysqli_query($conn, "SELECT * from enterprise_recruitment_request_form WHERE id=$request_id");
  $status_enterprise_recruitment_request_form = mysqli_fetch_assoc($sql_status_request);
?>

<div class="w3-col s6">
  <div class="w3-row">
    <div class="w3-col">
      <div class="w3-row"><h3 style="margin-left:5px;">Yeu cau tuyen dung</h3></div>
      <?php while($row = mysqli_fetch_assoc($result)) {
        ?>
        <div class="w3-row">
          <div class="w3-col s4"><p><?php echo $row["ablity_name"]?></p></div>
          <div class="w3-col s8 progres">
            <progress value="<?php echo $row['ability_required']?>" max="10">
          </div>
        </div>
      <?php }?>
    </div>
    <div class="w3-row">
      <button> <a href="layout_student.php?xem=list_enterprise_request">Back</a></button>
      <?php
        if($status_assigned_table["status"] == "0" || $status_assigned_table["status"] == "1" ||$status_enterprise_recruitment_request_form["statuss"] == "4000" ){?>
          <button type="button" disabled>Register</button>
      <?php }else { ?>
        <button><a href="xuli/request_registration_enterprise.php?id=<?php echo $request_id;?>&student_id=<?php echo $_SESSION['student_id']?>& date=<?php echo date('Y/m/d');?>">Register</a></button>
      <?php }?>
    </div>
  </div>
</div>
