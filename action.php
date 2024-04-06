<?php
include('connection.php');
// print_r($con);die();
$action = $_POST["action"];
$msg = '';

if ($action == "consigneedetails") {
    $id = isset($_POST['id']) ? $_POST['id'] : "";
    if ($id != "") {
      $query = "select * from consignee where id=$id";
      $exe=mysqli_query($con,$query);
      $result = mysqli_fetch_assoc($exe);
      if ($result) {
        $msg = "Success";
      } else {
        $msg = "Failure";
      }
    } else {
      $msg = "Failure";
    }
    $data = [];
    $data['msg'] = $msg;
    $data['data'] = $result;
    echo json_encode($data);
}

if ($action == "crackerdetails") {
    $id = isset($_POST['id']) ? $_POST['id'] : "";
    if ($id != "") {
      $query = "select * from cracker where id=$id";
      $exe=mysqli_query($con,$query);
      $result = mysqli_fetch_assoc($exe);
      if ($result) {
        $msg = "Success";
      } else {
        $msg = "Failure";
      }
    } else {
      $msg = "Failure";
    }
    $data = [];
    $data['msg'] = $msg;
    $data['data'] = $result;
    echo json_encode($data);
  }

  if ($action == "statetype") {
    $id = isset($_POST['id']) ? $_POST['id'] : "";
    if ($id != "") {
      $query = "select * from tax where id=$id";
      $exe=mysqli_query($con,$query);
      $result = mysqli_fetch_assoc($exe);
      if ($result) {
        $msg = "Success";
      } else {
        $msg = "Failure";
      }
    } else {
      $msg = "Failure";
    }
    $data = [];
    $data['msg'] = $msg;
    $data['data'] = $result;
    echo json_encode($data);
  }
  ?>