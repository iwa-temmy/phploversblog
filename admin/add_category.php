<?php include "includes/header.php";?>
<?php 
    //Create Database Object
    $db = new Database();

    if (isset($_POST['submit'])) {
      $name = mysqli_real_escape_string($db->link, $_POST['name']);
      //Simple Validation
       // || means OR in php means if one condition is true.
      if ($name == '') {
            //Set Error
            $error = 'Please fill in the required fields' ;
      }else{
          $query = "INSERT INTO categories (name) VALUES ('$name') ";

          $update_row = $db->update($query);
      }
    }
?>
<form role="form" method="POST" action="add_category.php">
  <div class="form-group">
      <label>Category Name</label>
      <input name="name" type="text" class="form-control" placeholder="Enter Category">
  </div>
  <div>
      <input name="submit" type="submit" class="btn btn-primary" value="Submit">
      <a href="index.php" class="btn btn-default">Cancel</a>
  </div>
  <br>
</form>
<?php include "includes/footer.php";?>