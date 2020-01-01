<?php
  include("../server/config.php");
  $sql = mysqli_query($conn, "SELECT * FROM intern_organization_requests WHERE status='3000' OR status='4000'");
?>
<?php while($row = mysqli_fetch_assoc($sql)) { ?>
  <div class="w3-row organization w3-light-green">
    <p><?php name_organization($row["organization_id"]);?></p>
    <p><?php echo $row["request_name"]?></p>
    <p>Amount: <?php echo $row["amount"];?></p>
    <p>Number of registration: <?php number_of_registrations($row["id"]);?> </p>
    <p>Number of assigned: <?php number_of_assigned($row["id"]);?>  </p>
    <p>Status: <?php check_status($row["status"]);?></p>
    <a href="layout_student.php?status=detail_request_organization&id=<?php echo $row['id'];?>&organization_id=<?php echo $row['organization_id'];?>">Show more</a>
  </div>
<?php } ?>
<?php
  function name_organization($organization_id){
    global $conn;
    $sql_name = mysqli_query($conn, "SELECT * FROM intern_organization_profile
      WHERE id=$organization_id");
    $dong = mysqli_fetch_assoc($sql_name);
    echo $dong["organization_name"];
  }
  function number_of_registrations($organization_id){
    global $conn;
    $sql_number = mysqli_query($conn, "SELECT * FROM intern_student_register WHERE request_id=$organization_id");
    $sl = mysqli_fetch_assoc($sql_number);
    $count = mysqli_num_rows($sql_number);
    echo $count;
  }
    function number_of_assigned($organization_id){
    global $conn;
    $sql_number=mysqli_query($conn, "SELECT * from intern_organization_request_assignment  where organization_request_id=$organization_id");
    $sl = mysqli_fetch_assoc($sql_number);
    $count = mysqli_num_rows($sql_number);
    echo $count;
  }
    function check_status($status){
    if($status == 4000)
      echo "Ngừng nhận đăng kí ";
    elseif($status == 3000)
      echo "Chờ sinh viên đăng kí";
  }
?>
