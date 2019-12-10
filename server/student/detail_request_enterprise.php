<?php
$sql = "SELECT * from enterprise_recruitment_request_form where id = $request_id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>

<div class="w3-col s3" style="margin-top: 30px; margin-left: 10px;">
  <img src="teacher/modules/uploads/<?php echo $row['avatar']?> alt=" height="100px" width="80px">
</div>
<div class="w3-col s8" style="margin-left: 40px">
  <div class="w3-row">
    <div class=" w3-col w3-center"><h1 class="w3-card"><?php name_enterprise($row["organization_id"]);?></h1></div>
  </div>
  <div class="w3-row">
    <div class="w3-col w3-center"> <p><?php echo $row["request_name"]?></p></div>
  </div>
  <div class="w3-row">
    <p><?php address_enterprise($row["organization_id"]);?></p>
  </div>
  <div class="w3-row">
    <p>Number of registration: <?php number_of_registrations($row["organization_id"]);?></p>
  </div>
  <div class="w3-row">
    <p>Number of assigned: <?php number_of_assigned($row["organization_id"]);?></p>
  </div>
  <div class="w3-row">
    <p>Status: <?php check_status($row["statuss"]);?></p>
  </div>
</div>

<?php
  // Get company name
  function name_enterprise($organization_id){
    global $conn;
    $sql_name = mysqli_query($conn, "SELECT * from enterprise_profile where id=$organization_id");
    $dong = mysqli_fetch_assoc($sql_name);
    echo $dong["organization_name"];
  }
  // Get company address
  function address_enterprise($organization_id){
    global $conn;
    $sql_name = mysqli_query($conn, "SELECT * from enterprise_profile where id=$organization_id ");
    $dong = mysqli_fetch_assoc($sql_name);
    echo $dong["address"];
  }
  // Get number of register
  function number_of_registrations($organization_id) {
    global $conn;
    $dem = 0;
    $sql_number = mysqli_query($conn, "SELECT * FROM student_registration WHERE request_id=$organization_id ");
    while($sl = mysqli_fetch_assoc($sql_number)) {
      $dem++;
    }
    echo $dem;
  }

  // Get number of assigned
  function number_of_assigned($organization_id) {
    global $conn;
    $dem = 0;
    $sql_number = mysqli_query($conn,"SELECT * from assigned_table  where organization_request_id=$organization_id");
    while($sl = mysqli_fetch_assoc($sql_number)) {
      $dem++;
    }
    echo $dem;
  }

  // Check status
  function check_status($status) {
    if($status == 4000)
      echo " ngừng nhận đăng kí";
    elseif($status == 3000)
      echo " chờ sinh viên đăng kí";
  }
?>
