<?php
  include("../server/config.php");
  $sql = mysqli_query($conn, "SELECT * from intern_organization_requests where status='2000'");
?>
<?php while($row = mysqli_fetch_assoc($sql)) { ?>
  <div class="organization">
    <p><?php name_organization($row["organization_id"]);?></p>
    <p><?php echo $row["request_name"]?></p>
    <p>Amount: <?php echo $row["amount"];?></p>
    <p>Status: <?php check_status($row["status"]);?></p>
    <a href="layout_teacher.php?status=detail_request_organization&id=<?php echo $row['id'];?>&organization_id=<?php echo $row['organization_id'];?>">Show more</a>
  </div>
<?php } ?>
<?php
  function name_organization($organization_id){
    global $conn;
    $sql_name = mysqli_query($conn, "SELECT * from intern_organization_profile where id=$organization_id ");
    $dong = mysqli_fetch_assoc($sql_name);
    echo $dong["organization_name"];
  }
  function check_status($status){
    if($status == 2000)
    echo "Chờ trường duyệt";
  }
?>
