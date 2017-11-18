<?php require  '../includes/header.php';?>
<?php require  '../includes/menu.php';?>
<form>
  <div class="form-group">
    <label for="numSubDirecs">selecciona el número de subdirectores</label>
    <input type="text" class="form-control" id="numSubDirecs" name="numSubDirecs">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="text" class="form-control" id="pwd">
  </div>
  <div class="checkbox">
    <label><input type="checkbox"> Remember me</label>
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>

<?php require  '../includes/footer.php';?>