<?php
  include("../server/config.php");
  $request_id = $_GET["id"];
  $sql = mysqli_query($conn, "SELECT * from intern_organization_requests where id=$request_id ");
  $row = mysqli_fetch_assoc($sql);
  $sql2 = "SELECT ab.ability_name, l.ability_required
    FROM intern_organization_request_abilities  l
    JOIN intern_ability_dictionary ab  on ab.id = l.ability_id
    WHERE l.organization_request_id = $request_id";
  $sql_intern_ability_dictionary = mysqli_query($conn, $sql2);
?>

<div class="w3-col s3" style="margin-top: 30px;margin-left: 10px;">
  <img src="../public/uploads/teacher<?php img_organization($row['organization_id'])?> " height="250px" width="200px">
</div>
<div class="w3-col s8" style="margin-left: 40px">
  <div class="w3-row">
    <div class=" w3-col w3-center"><h1 class="w3-card"><?php name_organization($row["organization_id"]);?></h1></div>
  </div>
  <div class="w3-row">
    <div class="w3-col w3-center"><p><?php echo $row["request_name"]?></p></div>
  </div>
  <div class="w3-row">
    <div class="w3-col s2">
      <i class="fa fa-map-marker" style="font-size:30px;color: red;margin-top: 10px"></i>
    </div>
    <div class="w3-col s9">
      <p style="margin-left: -50px;"><?php address_organization($row["organization_id"]);?></p>
    </div>
  </div>
  <div class="w3-row">
    <p>Number of registration: <?php number_of_registrations($row["organization_id"]);?></p>
  </div>
  <div class="w3-row">
    <p>Number of assigned: <?php number_of_assigned($row["organization_id"]);?>  </p>
  </div>
  <div class="w3-row">
    <p>Status: <?php check_status($row["status"]);?></p>
  </div>
</div>
<div class="w3-col s6">
  <div class="w3-row">
    <div class="w3-col">
      <div class="w3-row"><h3 style="margin-left:5px;">Request tuyen dung</h3></div>
      <?php while($row = mysqli_fetch_assoc($sql_intern_ability_dictionary)) { ?>
        <div class="w3-row">
          <div class="w3-col s2 "><p><?php echo $row['ability_name']?></p></div>
          <div class="w3-col s8 progres"><progress value="<?php echo $row['ability_required']?>" max="10"></div>
        </div>
      <?php } ?>
    </div>
  </div>
</div>
<div class="w3-row">
  <button> <a href="layout_teacher.php?status=list_assigned&id=<?php echo $request_id?>"  > Show assigned table</a></button>
</div>

<?php
  function img_organization($organization_id){
    global $conn;
    $sql_img = mysqli_query($conn, "SELECT * from intern_organization_profile where id=$organization_id ");
    $dong = mysqli_fetch_assoc($sql_img);
    echo $dong["avatar"];
  }
  function name_organization($organization_id){
    global $conn;
    $sql_name = mysqli_query($conn,"SELECT * from intern_organization_profile where id=$organization_id ");
    $dong = mysqli_fetch_assoc($sql_name);
    echo $dong["organization_name"];
  }
  function address_organization($organization_id){
    global $conn;
    $sql_name = mysqli_query($conn,"SELECT * from intern_organization_profile where id=$organization_id ");
    $dong = mysqli_fetch_assoc($sql_name);
    echo $dong["address"];
  }
  function number_of_registrations($organization_id){
    global $conn;
    $dem=0;
    $sql_number = mysqli_query($conn,"SELECT * from intern_student_register  where request_id=$organization_id ");
    while($sl = mysqli_fetch_assoc($sql_number)){
      $dem++;
    }
    echo $dem;
  }
  function number_of_assigned($organization_id){
    global $conn;
    $dem = 0;
    $sql_number = mysqli_query($conn,"SELECT * from intern_organization_request_assignment where organization_request_id=$organization_id ");
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
  }
?>
