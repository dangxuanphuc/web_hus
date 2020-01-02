<?php
  include("../server/config.php");
  $sql = mysqli_query($conn, "SELECT * FROM intern_organization_requests WHERE status='3000'");
?>
<?php while($row = mysqli_fetch_assoc($sql)) { ?>
  <div class="organization">
    <p><?php name_organization($row["organization_id"]);?></p>
    <p><?php echo $row["request_name"]?></p>
    <p>Amount: <?php echo $row["amount"];?></p>
    <p>Number of registration: <?php number_of_registrations($row["organization_id"]);?> </p>
    <p>Number of assigned: <?php number_of_assigned($row["organization_id"]);?>  </p>
    <p>Status: <?php check_status($row["status"]);?></p>
    <a href="teacher.php?status=detail_request_confirm&id=<?php echo $row["id"];?>&organization_id=<?php echo $row["organization_id"];?>">Show more</a>
  </div>
<?php } ?>
<?php
  function name_organization($organization_id){
    global $conn;
    $sql_name = mysqli_query($conn, "SELECT * from intern_organization_profile where id=$organization_id ");
    $dong = mysqli_fetch_assoc($sql_name);
    echo $dong["organization_name"];
  }
  function number_of_registrations($organization_id){
    global $conn;
    $dem = 0;
    $sql_number = mysqli_query($conn, "SELECT * from intern_student_register  where request_id=$organization_id ");
    while($sl = mysqli_fetch_assoc($sql_number)){
      $dem++;
    }
    echo $dem;
  }
  function number_of_assigned($organization_id){
    global $conn;
    $dem = 0;
    $sql_number = mysqli_query($conn, "SELECT * from intern_organization_request_assignment  where organization_request_id=$organization_id ");
    while($sl = mysqli_fetch_assoc($sql_number)){
      $dem++;
    }
    echo $dem;
  }
  function check_status($status){
    if($status == 4000)
      echo "Ngừng nhận đăng kí";
    elseif($status == 3000)
      echo "Chờ sinh viên đăng kí";
  }
?>
