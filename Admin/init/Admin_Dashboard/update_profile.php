<?php 

// Developed with Loved by Narcisse 

require('db/constants.php');
require('db/db_connection.php');
session_start();

if(empty($_SESSION['Admin_id'])) {

    header('location: /jci_uii/Admin/index');
}else {
    $session = $_SESSION['Admin_id'];
}

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
?>

<?php

$sql = "SELECT * FROM admin WHERE Admin_id = '$session'";

$result = mysqli_query($conn, $sql);

if(!$result) {
    die(mysqli_error($conn));
}

$count = mysqli_num_rows($result);

if($count == 1) {


if(isset($_POST['update'])) {

    $update_Firstname = $_POST['update_Firstname'];
    $update_Lastname = $_POST['update_Lastname'];
    $update_Address = $_POST['update_Address'];
    $update_Email = $_POST['update_Email'];
    $update_Phone = $_POST['update_Phone'];

   $sql = " UPDATE admin SET Email = '$update_Email', Address = '$update_Address', Phone_number= '$update_Phone' WHERE Admin_id = '$session'";

   $result = mysqli_query($conn, $sql);

   if(!$result) {

    die('Error ' . mysqli_error($conn));
   }else{

    header("location: update_profile.php");
   }

}

}

?>

<?php include './header.php'?>

            <!-- Main -->
            <div class="wrapper" style="text-align: justify;">

            <form action="update_profile" method="Post" role="form">
                <div class="form-group">
            <center><table class="table table-striped">
                <tr>
                    <td><label for="firstname">Firstname</label></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td><input type="text" name="update_Firstname" class="form-control" value=<?php echo $firstname; ?> disabled></td>
                </tr>

                <tr>
                    <td><label for="firstname">Lastname</label></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td><input type="text" name="update_Lastname" class="form-control" value=<?php echo $lastname; ?> disabled></td>
                </tr>

                <tr>
                    <td><label for="lastname">Email</label></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td><input type="text" name="update_Email" class="form-control" value=<?php echo $email; ?>></td>
                </tr>

                <tr>
                    <td><label for="address">Phone Number</label></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td><input type="tel" name="update_Phone"  maxlength="11" class="form-control" value=<?php echo $phone; ?>></td>
                </tr>

                <tr>
                    <td><label for="phone">Position</label></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td><input type="text" name="update_phone"  class="form-control" value= <?php echo $position;?> ></td>
                </tr>

                <tr>
                    <td><label for="address">Address</label></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td><input type="text" name="update_Address" class="form-control" value= <?php echo $address ?>></td>
                </tr>

                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>

                    <td><button type="Update" name="update" class="btn btn-primary">Update</button></td>
                </tr>

                </form>






            </table></center>

            

            </div>
              
    <!--Footer-->

    <?php include './footer.php' ?>

</body>

</html>