<?php
include "layout/header.php";
?>

<h2 class="d-flex justify-content-center">Add a new User to the DataBase :</h2>
<?php
    if(!empty($error)) {
    echo "<div class='container alert alert-danger col-6'><p>There was an error : </p><ul>$error</ul></div>";
    }
    if(!empty($success)) {
        echo "<div class='container alert alert-success col-6'><p>$success</p></div>";
    }
?>
<form class="container col-6" method="POST">
  <div class="form-group">
    <label>Firstname</label>
    <input name="firstname" type="text" class="form-control">
  </div>
  <div class="form-group">
    <label>Lastname</label>
    <input name="lastname" type="text" class="form-control">
  </div>
  <div class="form-group">
    <label>Adress</label>
    <input name="adress" type="text" class="form-control">
  </div>
  <div class="form-group">
    <label>Postcode</label>
    <input name="postcode" type="number" class="form-control">
  </div>
  <div class="form-group">
    <label>City</label>
    <input name="city" type="text" class="form-control">
  </div>
  <div class="form-group">
    <label>Email</label>
    <input name="email" type="email" class="form-control">
  </div>
  <div class="form-group">
    <label>Date of Birth</label>
    <input name="birth_date" type="date" class="form-control">
  </div>
  <div class="form-group">
    <button name="submit" type="submit" class="btn btn-outline-dark m-3 justify-content-center">Add User</button>
  </div>
</form>

<?php
include "layout/footer.php"; 
?>