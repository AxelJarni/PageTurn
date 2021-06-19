<?php
include "layout/header.php";
?>

<h2 class="d-flex justify-content-center">Add a new book to the DataBase :</h2>
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
    <label>Title</label>
    <input name="title" type="text" class="form-control">
  </div>
  <div class="form-group">
    <label>Author</label>
    <input name="author" type="text" class="form-control">
  </div>
  <div class="form-group">
    <label>Genre</label>
    <select name="genre" class="form-control">
      <option value="Biography">(Auto)Biography</option>
      <option value="Comics">Comics/Manga</option>
      <option value="Historical">Historical</option>
      <option value="Novel">Novel</option>
    </select>
  </div>
  <div class="form-group">
    <label>Release Date</label>
    <input name="release_date" type="date" class="form-control">
  </div>
  <div class="form-group">
    <label>Synopsis</label>
    <textarea name="synopsis" class="form-control" rows="5"></textarea>
  </div>
  <div class="form-group">
    <button name="submit" type="submit" class="btn btn-outline-dark m-3 justify-content-center">Add Book</button>
  </div>
</form>

<?php
include "layout/footer.php"; 
?>