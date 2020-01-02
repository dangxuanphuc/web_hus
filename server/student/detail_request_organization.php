<?php
  $sql = "SELECT * from intern_organization_requests where id = $request_id";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);
?>
<div class="w3-container w3-card w3-margin">
  <div class="w3-third">
    <img src="../public/uploads/<?php avatar_organization($row['organization_id'])?>" style="height:200px;width:200px;margin:50px;" class="w3-border w3-hover-shadow">
  </div>
  <div class="w3-twothird" style="line-height:1;margin-top:40px;">
    <div class="w3-row">
      <div class="w3-col"><h1><?php echo $row["request_name"]?></h1></div>
    </div>
    <div class="w3-row">
      <p>Công ty: <?php name_organization($row["organization_id"]);?></p>
      <p>Địa chỉ: <?php address_organization($row["organization_id"]);?></p>
      <p>Số sinh viên đã đăng ký: <?php number_of_registrations($row["id"]);?></p>
      <p>Số sinh viên đã phân công: <?php number_of_assigned($row["id"]);?></p>
      <p>Trạng thái: <?php check_status($row["status"]);?></p>
    </div>
  </div>
</div>
<?php
  function name_organization($organization_id){
    global $conn;
    $sql_name = mysqli_query($conn, "SELECT * from intern_organization_profile where id=$organization_id");
    $dong = mysqli_fetch_assoc($sql_name);
    echo $dong["organization_name"];
  }
  function address_organization($organization_id){
    global $conn;
    $sql_name = mysqli_query($conn, "SELECT * from intern_organization_profile where id=$organization_id ");
    $dong = mysqli_fetch_assoc($sql_name);
    echo $dong["address"];
  }
  function avatar_organization($organization_id){
    global $conn;
    $sql_avatar = mysqli_query($conn, "SELECT * FROM intern_organization_profile
      WHERE id=$organization_id");
    $avatar = mysqli_fetch_assoc($sql_avatar);
    echo $avatar["avatar"];
  }
  function number_of_registrations($organization_id) {
    global $conn;
    $dem = 0;
    $sql_number = mysqli_query($conn, "SELECT * FROM intern_student_register WHERE request_id=$organization_id ");
    while($sl = mysqli_fetch_assoc($sql_number)) {
      $dem++;
    }
    echo $dem;
  }
  function number_of_assigned($organization_id) {
    global $conn;
    $dem = 0;
    $sql_number = mysqli_query($conn,"SELECT * from intern_organization_request_assignment  where organization_request_id=$organization_id");
    while($sl = mysqli_fetch_assoc($sql_number)) {
      $dem++;
    }
    echo $dem;
  }
  function check_status($status) {
    if($status == 4000)
      echo "Ngừng nhận đăng kí";
    elseif($status == 3000)
      echo "Chờ sinh viên đăng kí";
  }
?>
