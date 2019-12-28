<?php
include("../server/config.php");
if(isset($_GET["page"])){
  $get_page = $_GET["page"];
} else $get_page = 1;
$page1 = ($get_page-1)*6;
$sql = mysqli_query($conn, "SELECT * FROM intern_organization_requests WHERE statuss='1000' limit $page1,6");
?>
<?php while($row = mysqli_fetch_assoc($sql)) { ?>
  <div class="organization">
    <p><?php name_organization($row["organization_id"]);?></p>
    <p><?php echo $row["request_name"]?></p>
    <p>Amount: <?php echo $row["amount"];?></p>
    <p>Status: <?php check_status($row["statuss"]);?></p>
    <a href="layout_teacher.php?status=detail_request_cancel&id=<?php echo $row['id'];?>&organization_id=<?php echo $row['organization_id'];?>">Show more</a>
  </div>
<?php } ?>
<div class="w3-row">
  <?php
    $sql_page = mysqli_query($conn, "SELECT * FROM intern_organization_requests WHERE statuss='1000' ");
    $count = mysqli_num_rows($sql_page);
    $page = ceil($count/6);
    echo "page:";
    for($b=1; $b<=$page; $b++){
      echo '<a href="?status=list_request_cancel&page='.$b.'" > '.$b . '</a>';
    }
  ?>
</div>
<?php
  function name_organization($organization_id){
    global $conn;
    $sql_name = mysqli_query($conn, "SELECT * from intern_organization_profile where id=$organization_id ");
    $dong = mysqli_fetch_assoc($sql_name);
    echo $dong["organization_name"];
  }
  function check_status($status){
    if($status == 1000)
    echo "Canceled";
  }
?>
