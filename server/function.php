<?php
  function access_student_table($student_id) {
    global $conn;
    $sql = mysqli_query($conn, "SELECT * FROM intern_students WHERE id = $student_id");
    $data = mysqli_fetch_assoc($sql);
    return $data;
  }
  function name_student($student_id) {
    $name = access_student_table($student_id);
    echo $name["name"];
  }
  function class_student($student_id) {
    $class = access_student_table($student_id);
    echo $class["class_name"];
  }
  function birthday_student($student_id) {
    $birthday = access_student_table($student_id);
    $date = $birthday["date_of_birth"];
    echo date("Y-m-d", strtotime($date));
  }
  function access_teacher_table($teacher_id) {
    global $conn;
    $sql = mysqli_query($conn, "SELECT * FROM intern_teachers WHERE id = $teacher_id");
    $data = mysqli_fetch_assoc($sql);
    return $data;
  }
  function name_teacher($teacher_id) {
    $name = access_teacher_table($teacher_id);
    echo $name["name"];
  }
  function gender_teacher($teacher_id) {
    $gender = access_teacher_table($teacher_id);
    echo $gender["sex"];
  }
  function birthday_teacher($teacher_id) {
    $birthday = access_teacher_table($teacher_id);
    $date = $birthday["date_of_birth"];
    echo date("Y-m-d", strtotime($date));
  }
  function access_organization_table($organization_id) {
    global $conn;
    $sql_organization = mysqli_query($conn, "SELECT * FROM intern_organization_profile
      WHERE id = $organization_id");
    $data = mysqli_fetch_assoc($sql_organization);
    return $data;
  }
  function name_organization($organization_id) {
    $name = access_organization_table($organization_id);
    echo $name["organization_name"];
  }
  function address_organization($organization_id) {
    $address = access_organization_table($organization_id);
    echo $address["address"];
  }
  function employee_organization($organization_id) {
    $employee = access_organization_table($organization_id);
    echo $employee["employee_count"];
  }
  function revenue_organization($organization_id) {
    $revenue = access_organization_table($organization_id);
    echo $revenue["gross_revenue"];
  }
  function avatar_organization($organization_id) {
    $avatar = access_organization_table($organization_id);
    echo $avatar["avatar"];
  }
  function url_organization($organization_id) {
    $url = access_organization_table($organization_id);
    echo $url["url"];
  }
  function number_of_registrations($organization_id) {
    global $conn;
    $count = 0;
    $sql_number = mysqli_query($conn, "SELECT * FROM intern_student_register
      WHERE request_id = $organization_id ");
    while($number = mysqli_fetch_assoc($sql_number)){
      $count++;
    }
    echo $count;
  }
  function number_of_assigned($organization_id) {
    global $conn;
    $count = 0;
    $sql_number = mysqli_query($conn, "SELECT * FROM intern_organization_request_assignment
      WHERE organization_request_id = $organization_id ");
    while($number = mysqli_fetch_assoc($sql_number)){
      $count++;
    }
    echo $count;
  }
  function number_amount($organization_id) {
    global $conn;
    $sql_amount = mysqli_query($conn, "SELECT * FROM intern_organization_requests
      WHERE organization_id = $organization_id");
    $amount = mysqli_fetch_assoc($sql_amount);
    echo $amount["amount"];
  }
  function check_status($status) {
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
      echo "gray";
    elseif($status == 5000)
      echo "dark-gray";
  }
  function explode_paragraph($paragraph) {
    $result = preg_split('/(?<=[.?!;])\s+/', $paragraph, -1, PREG_SPLIT_NO_EMPTY);
    return $result;
  }
  function check_amount($request_id) {
    global $conn;
    $sql_amount = mysqli_query($conn, "SELECT * FROM intern_student_register l
      WHERE l.request_id = $request_id");
    $num = mysqli_num_rows($sql_amount);
    $sql_request_amount = mysqli_query($conn, "SELECT *
      FROM intern_organization_requests l
      WHERE l.id = $request_id");
    $row = mysqli_fetch_assoc($sql_request_amount);
    $amount = $row["amount"];
    echo "num: $num";
    echo "amount: $amount";
    if ($num <= $amount) {
      $sql = "UPDATE intern_organization_requests SET status='4000' WHERE id = $request_id";
      mysqli_query($conn, $sql);
    } else {
      echo "Đã hết lượt đăng ký";
    }
  }
?>
