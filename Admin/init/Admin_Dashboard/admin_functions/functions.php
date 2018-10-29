<?php
require( '../db/constants.php ');
require( '../db/db_connection.php');
$GLOBALS['conn'] = $conn;
?>

<?php 
function adminInfo() 
{
    global $session;
    $conn = $GLOBALS['conn'];

     $sql = "SELECT * FROM admin WHERE Admin_id = '$session'";

      $result = mysqli_query($conn, $sql);

      if(!$result) {
      die(mysqli_error($conn));
   }

    $count = mysqli_num_rows($result);

     if($count < 1) {

    $result = null;
      } else {
    $row = mysqli_fetch_assoc($result);

    $firstname = $row['Firstname'];
    $address = $row['Address'];
    $phone = $row['Phone_number'];
    $lastname = $row['Lastname'];
    $position = $row['Position'];
    $email = $row['Email'];
      }
}

?>
<?php
function AddEvents() 
{
    if(isset($_POST['Add_event'])) {
        $date = $_POST['event_date'];
        $title = $_POST['event_title'];
        $details = $_POST['event_details'];
        $event_image = $_POST['event_image'];
        $image = 'http://localhost/jci_ui/images/'.$event_image;
    
     $conn = $GLOBALS['conn'];
    $sql = "INSERT INTO  events (image, title, details, date) VALUES ('$image', '$title', '$details', '$date')" or die(mysqli_error($conn));
    $result = mysqli_query($conn, $sql);

    }
}
?>

<?php

?>
