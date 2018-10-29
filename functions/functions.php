
<?php
require_once './db/constants.php';
require_once './db/db_connection.php';
$GLOBALS['conn'] = $conn;
?>
<?php

function getALLEvents () {
$conn = $GLOBALS['conn'];
$sql = "SELECT * FROM events LIMIT 3" or die(mysqli_error($conn));
 $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
 $event_details = mysqli_fetch_all($result, MYSQLI_ASSOC);

 if (empty($event_details)){

   } else {
  return $event_details;
    }
}

function getAllChiefs(){
    $conn = $GLOBALS['conn'];
    $sql = "SELECT * FROM chiefs" or die(mysqli_error($conn));
    $result = mysqli_query($conn, $sql);

     $chiefDetails = mysqli_fetch_all($result, MYSQLI_ASSOC);

     if (empty($chiefDetails)){

    } else {
      return $chiefDetails;
    }
}

function getAllProjects() {
  $conn = $GLOBALS['conn'];
  $sql = "SELECT * FROM projects LIMIT 4 " or die(mysqli_error($conn));
  $result = mysqli_query($conn, $sql);
  $projects = mysqli_fetch_all($result, MYSQLI_ASSOC);

   if (empty($projects)) {

   }else {
     return $projects;
   }
}
?>