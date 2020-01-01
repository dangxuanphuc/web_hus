<?php
include("../server/config.php");
$request_id = $_GET["id"];
$sql = mysqli_query($conn, "SELECT * from intern_organization_requests where id=$request_id ");
$row = mysqli_fetch_assoc($sql);
$sql = mysqli_query($conn, "SELECT ab.ability_name, l.ability_required
  FROM intern_organization_request_abilities  l
  JOIN intern_ability_dictionary ab  on ab.id=l.ability_id
  WHERE l.organization_request_id=$request_id ");
?>
<div class="w3-col s3" style="margin-top: 30px ;margin-left: 10px ;">
  <img src="../public/uploads/teacher/index.png" height="250px" width="200px">
</div>
<div class="w3-col s8" style="margin-left: 40px">
  <div class="w3-row">
    <div class=" w3-col w3-center"><h1 class="w3-card"><?php name_organization($row["organization_id"]);?></h1></div>
  </div>
  <div class="w3-row">
    <div class="w3-col w3-center"> <p><?php echo $row["request_name"]?></p></div>
  </div>
  <div class="w3-row">
    <div class="w3-col s2">
      <h3>Address</h3>
    </div>
    <div class="w3-col s9">
      <p ><?php address_organization($row["organization_id"]);?></p>
    </div>
  </div>
  <div class="w3-row">
    <div class="w3-col s3"><h3>Status: </h3></div>
    <div class="w3-col s8"><p><?php check_status($row["status"]);?></p></div>
  </div>
  <div class="w3-row">
    <div class="w3-col s2"><h3>Description: </h3></div>
    <div class="w3-col s9"><p><?php echo $row["description"]?></p></div>
  </div>
</div>
<div class="w3-col s6">
  <div class="w3-row">
    <div class="w3-col ">
      <div class="w3-row"><h3 style="margin-left:5px;">Request tuyen dung</h3></div>
      <?php while($row=mysqli_fetch_assoc($sql)) { ?>
        <div class="w3-row">
          <div class="w3-col s4 "><p><?php echo $row["ability_name"]?></p></div>
          <div class="w3-col s8 progres"><progress value="<?php echo $row['ability_required']?>" max="10" ></div>
        </div>
      <?php } ?>
    </div>
    <div class="w3-row w3-center">
      <div class="w3-col s4 w3-center"><a href="confirm.php?id=<?php echo $request_id ?>">Confirm</a></div>
      <div class="w3-col s4 w3-center"><a href="cancel.php?id=<?php echo $request_id ?>">Cancel</a></div>
    </div>
  </div>
</div>


<?php
  function img_organization($organization_id){
    global $conn;
    $sql_name = mysqli_query($conn, "SELECT * from intern_organization_profile  where id=$organization_id ");
    $dong = mysqli_fetch_assoc($sql_name);
    echo $dong["avatar"];
  }
  function name_organization($organization_id){
    global $conn;
    $sql_name = mysqli_query($conn, "SELECT * from intern_organization_profile  where id=$organization_id ");
    $dong = mysqli_fetch_assoc($sql_name);
    echo $dong["organization_name"];
  }
  function address_organization($organization_id){
    global $conn;
    $sql_name = mysqli_query($conn, "SELECT * from intern_organization_profile where id=$organization_id ");
    $dong = mysqli_fetch_assoc($sql_name);
    echo $dong["address"];
  }
  function check_status($status){
    if($status == 2000)
    echo "Chờ nhà trường duyệt";
  }
?>
