<?php
include ('db_conn.php');
include ('session.php');

$update = false;
if(isset($_POST['edit']))
{
  $id = $_POST['edit'];
  $update = true;
     $query = "SELECT * FROM members WHERE id = '$id'";
     $result = mysqli_query($query);
     $row = mysqli_fetch_array($result);
     echo json_encode($row);
}
// update into database
if(isset($_POST['update'])){
  $id = $_POST['user_id'];
  $firstname=$_POST['edit_fname'];
  $lastname =$_POST['edit_lname'];
  $email =$_POST['edit_email'];
  $phone = $_POST['edit_phone'];
  $abn = $_POST['edit_abn'];



 $mysqli->query("UPDATE members SET firstname = '$firstname', lastname = '$lastname', email = '$email', phone = '$phone', abn = '$abn' WHERE id = '$id'") or die($mysqli->error());

 echo "<script type='text/javascript'>alert('Updated');
window.location='account.php';</script>";

}

if (isset($_GET['delete'])){
    $id = $_GET['delete'];
    $mysqli->query("DELETE FROM members WHERE id='$id'") or die($mysqli->error());

    echo "<script type='text/javascript'>alert('A participant is deleted!');
   window.location='account.php';</script>";

}


/*if(isset($_POST['mydetail_update']))
{

  $id = $_POST['mydetail_id'];
  $firstname=$_POST['mydetail_fname'];
  $lastname =$_POST['mydetail_lname'];
  $gender =$_POST['mydetail_gender'];
  $race = $_POST['mydetail_race'];
  $email = $_POST['mydetail_email'];
  $age = $_POST['mydetail_division'];



 $mysqli->query("UPDATE participant SET firstname = '$firstname', lastname = '$lastname', gender = '$gender', race = '$race', email = '$email', age_group = '$age' WHERE id = '$id'") or die($mysqli->error());

 echo "<script type='text/javascript'>alert('Updated');
window.location='participant_list.php';</script>";

}*/
 ?>
