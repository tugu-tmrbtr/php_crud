<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/add.css">
</head>
<body>
  <?php
    include_once "menu.html";
  ?>
<div id="container">
  <div class="form-wrap">
    <form action="add.php" method="post">
      <h1>Sign up</h1>
      <div class="form-group">
        <label for="st_code">Code</label>
        <input type="text" name="st_code" id="st_code" />
      </div>
      <div class="form-group">
        <label for="st_firstname">Last name</label>
        <input type="text" name="st_firstname" id="st_firstname" />
      </div>
      <div class="form-group">
        <label for="st_lastname">First name</label>
        <input type="text" name="st_lastname" id="st_lastname" />
      </div>
      <div class="form-group">
        <label for="st_age">Age</label>
        <input type="number" name="st_age" id="st_age" />
      </div>
      <div class="form-group">
        <label for="st_sex">Sex</label>
        <input type="text" name="st_sex" id="st_sex" />
      </div>
      <button type="submit" name="submit" class="btn">Sign up</button>
    </form>
  </div>
</body>
</html>