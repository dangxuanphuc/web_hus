<?php
  include("../server/config.php");
  // pagination
  if(isset($_GET['page'])){
    $get_page = $_GET['page'];
  } else $get_page=1;

  $page1 = ($get_page-1)*6;
  $sql = mysqli_query($conn, "SELECT * FROM enterprise_recruitment_request_form WHERE statuss='3000' OR statuss='4000' LIMIT $page1,6 ");
?>
<?php while($row = mysqli_fetch_assoc($sql)) { ?>
  <div class="w3-row enterprise w3-light-green">
    <p><?php name_enterprise($row["organization_id"]);?></p>
    <p><?php echo $row["request_name"]?></p>
    <p>số lương người cần tuyển: <?php echo $row["amount"];?></p>
    <p>số lượng người đăng kí: <?php number_of_registrations($row["id"]);?> </p>
    <p>số lượng người đã phân công: <?php number_of_assigned($row["id"]);?>  </p>
    <p>Trạng thái: <?php check_status($row["statuss"]);?></p>
    <a href="layout_student.php?status=detail_request_enterprise&id=<?php echo $row["id"];?>&organization_id=<?php echo $row["organization_id"];?>">XEM CHI TIET</a>
  </div>
<?php } ?>

<div class="w3-row">
  <?php
    // pagination
    $sql_page = mysqli_query($conn, "SELECT * FROM enterprise_recruitment_request_form WHERE statuss='3000' OR statuss='4000'");
    $count = mysqli_num_rows($sql_page);
    $page = ceil($count/6);
    echo "page:";
    for($b=1; $b<=$page; $b++){
      echo "<a href='?status=list_enterprise_request&page=".$b."' > ".$b . "</a>";
    }
  ?>
</div>

<?php
  // Get company name
  function name_enterprise($organization_id){
    global $conn;
    $sql_name = mysqli_query($conn, "SELECT * FROM enterprise_profile
      WHERE id=$organization_id");
    $dong = mysqli_fetch_assoc($sql_name);
    echo $dong["organization_name"];
  }
  // Get number registration
  function number_of_registrations($organization_id){
    global $conn;
    $sql_number = mysqli_query($conn, "SELECT * FROM student_registration WHERE request_id=$organization_id");
    $sl = mysqli_fetch_assoc($sql_number);
    $count = mysqli_num_rows($sql_number);
    echo $count;
  }
    // Get number assigned
    function number_of_assigned($organization_id){
    global $conn;
    $sql_number=mysqli_query($conn, "SELECT * from assigned_table  where organization_request_id=$organization_id");
    $sl = mysqli_fetch_assoc($sql_number);
    $count = mysqli_num_rows($sql_number);
    echo $count;
  }
  // Check status
  function check_status($status){
    if($status == 4000)
      echo " ngừng nhận đăng kí ";
    elseif($status == 3000)
      echo " chờ sinh viên đăng kí";
  }
?>
