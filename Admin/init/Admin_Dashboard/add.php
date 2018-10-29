
<?php
require('./admin_functions/functions.php');
?>
 <?php 
 include './header.php';
 ?>

 <?php  addEvents(); ?>

 <body>
     
<div class="row justify-content-center">
    <form action="add" METHOD="POST">
  <h3>Manage Event</h3>

  <div class="form-group">
  <label>Title</label>
  <input type="text" name="event_title"  class="form-control" placeholder="Enter the title of Event">
</div>
  <div class="form-group">
  <label >Details</label>
  <textarea  placeholder="Give brief details about the event" class="form-control" name="event_details"> </textarea>
</div>

<div class="form-group">
  <label>Date</label>
  <input type="text" name="event_date" class="form-control" placeholder="Enter date like this November 20, 2018">
</div>

<div class="form-group">
  <label>Image</label>
  <input type="file" name="event_image" class="form-control">
</div>

<div>
  <button type="submit" name="Add_event" class="btn btn-primary">Add</button>
</form>
</div>

    <?php 
    include './footer.php';
    ?>
 </body>