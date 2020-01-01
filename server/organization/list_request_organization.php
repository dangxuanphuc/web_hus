<style>
  .scaled:hover {
    transform: scale(1.2);
    color: red;
  }
</style>

<?php
  include("../server/config.php");
  $organization_id = $_SESSION["organization_id"];
  $sql = mysqli_query($conn, "SELECT * FROM intern_organization_requests WHERE organization_id = $organization_id ORDER BY date_submitted DESC");
?>
<?php while($row = mysqli_fetch_assoc($sql)) { ?>
  <div class="organization">
    <p><?php name_organization($row["organization_id"]);?></p>
    <p><?php echo $row['request_name']?></p>
    <p>Amount can tuyen: <?php echo $row["amount"];?></p>
    <p>Number of registration: <?php number_of_registrations($row["id"]);?> </p>
    <p>Number of assigned: <?php number_of_assigned($row["id"]);?>  </p>
    <p>Status: <?php check_status($row["status"]);?></p>
    <a href="layout_organization.php?status=showmore&id=<?php echo $row["id"];?>">Show more</a>
  </div>
<?php } ?>
<?php
  function name_organization($organization_id){
    global $conn;
    $sql_name = mysqli_query($conn,"SELECT * from intern_organization_profile  where id=$organization_id ");
    $dong = mysqli_fetch_assoc($sql_name);
    echo $dong["organization_name"];
  }
  function number_of_registrations($organization_id){
    global $conn;
    $dem  = 0;
    $sql_number =  mysqli_query($conn,"SELECT * from intern_student_register  where request_id=$organization_id ");
    while($sl=mysqli_fetch_assoc($sql_number)){
      $dem++;
    }
    echo $dem;
  }
  function number_of_assigned($organization_id){
    global $conn;
    $dem = 0;
    $sql_number = mysqli_query($conn,"SELECT * from intern_organization_request_assignment  where organization_request_id=$organization_id ");
    while($sl=mysqli_fetch_assoc($sql_number)){
      $dem++;
    }
    echo $dem;
  }
  function check_status($status){
    if($status == 4000)
      echo "Ngừng nhận đăng kí";
    elseif($status == 3000)
      echo "Chờ sinh viên đăng kí";
    elseif($status == 1000)
      echo "Bị hủy";
    elseif($status == 2000)
      echo "Chờ duyệt";
  }
?>
