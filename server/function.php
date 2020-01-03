<?php
  function name_organization($organization_id){
    global $conn;
    $sql_name = mysqli_query($conn, "SELECT * FROM intern_organization_profile
      WHERE id=$organization_id");
    $name = mysqli_fetch_assoc($sql_name);
    echo $name["organization_name"];
  }
  function address_organization($organization_id){
    global $conn;
    $sql_name = mysqli_query($conn, "SELECT * FROM intern_organization_profile WHERE id=$organization_id ");
    $row = mysqli_fetch_assoc($sql_name);
    echo $row["address"];
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
    if($status == 1000)
      echo "Đang soạn";
    elseif($status == 2000)
      echo "Chờ nhà trường duyệt";
    elseif($status == 3000)
      echo "Chờ sinh viên đăng kí";
    elseif($status == 4000)
      echo "Ngừng nhận đăng ký";
    elseif($status == 5000)
      echo "Không phê duyệt";
  }
  function add_label_to_status($status) {
    if($status == 1000)
      echo "blue";
    elseif($status == 2000)
      echo "yellow";
    elseif($status == 3000)
      echo "green";
    elseif($status == 4000)
      echo "light-grey";
    elseif($status == 5000)
      echo "gray";
  }
?>
