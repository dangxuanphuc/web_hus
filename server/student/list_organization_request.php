<?php
  include("../server/config.php");
  $sql = mysqli_query($conn, "SELECT * FROM intern_organization_requests WHERE status='3000' OR status='4000' ORDER BY status ASC");
?>
<?php while($row = mysqli_fetch_assoc($sql)) { ?>
  <div class="w3-col w3-border content">
    <h3 class="w3-center">Phiếu tuyển dụng</h3>
    <div class="w3-padding" style="height: 180px;">
      <div class="w3-third w3-padding">
        <a href="<?php url_organization($row['organization_id'])?>"><img src="../public/uploads/<?php avatar_organization($row['organization_id']);?>" alt="image" style="height:150px;width:150px;margin-top:20px;" class="w3-border w3-hover-shadow"></a>
      </div>
      <div class="w3-twothird w3-padding">
        <p>Công ty: <?php get_name_org($row["organization_id"]);?></p>
        <p>Vị trí tuyển dụng: <?php echo $row["request_name"]?></p>
        <p>Số lượng cần tuyển: <?php echo $row["amount"];?></p>
        <p>Số lượng sinh viên đã đăng ký: <?php number_of_registrations($row["id"]);?></p>
        <p>Số lượng sinh viên đã phân công: <?php number_of_assigned($row["id"]);?></p>
        <p>Trạng thái: <?php check_status($row["status"]);?></p>
        <button class="w3-button w3-white w3-border w3-border-gray w3-round-large"><a href="student.php?status=detail_request_organization&id=<?php echo $row['id'];?>&organization_id=<?php echo $row['organization_id'];?>">Xem chi tiết</a></button>
      </div>
    </div>
  </div>
<?php } ?>
<?php
  function get_name_org($organization_id){
    global $conn;
    $sql_name = mysqli_query($conn, "SELECT * FROM intern_organization_profile
      WHERE id=$organization_id");
    $name = mysqli_fetch_assoc($sql_name);
    echo $name["organization_name"];
  }
  function avatar_organization($organization_id){
    global $conn;
    $sql_avatar = mysqli_query($conn, "SELECT * FROM intern_organization_profile
      WHERE id=$organization_id");
    $avatar = mysqli_fetch_assoc($sql_avatar);
    echo $avatar["avatar"];
  }
  function url_organization($organization_id){
    global $conn;
    $sql_url = mysqli_query($conn, "SELECT * FROM intern_organization_profile
      WHERE id=$organization_id");
    $url = mysqli_fetch_assoc($sql_url);
    echo $url["url"];
  }
  function number_of_registrations($organization_id){
    global $conn;
    $sql_number = mysqli_query($conn, "SELECT * FROM intern_student_register WHERE request_id=$organization_id");
    $count = mysqli_num_rows($sql_number);
    echo $count;
  }
  function number_of_assigned($organization_id){
    global $conn;
    $sql_number=mysqli_query($conn, "SELECT * from intern_organization_request_assignment  where organization_request_id=$organization_id");
    $count = mysqli_num_rows($sql_number);
    echo $count;
  }
  function check_status($status){
    if($status == 4000)
      echo "Ngừng nhận đăng kí";
    elseif($status == 3000)
      echo "Chờ sinh viên đăng kí";
  }
?>
