<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="addDriver.css?v=<?php echo time(); ?>">
    <title>Document</title>
</head>
<body>
    <div class="container">
    <form>
        <div class="heading">
      Create Driver Account
      </div>
    <div class="form-group col-md-6">
    </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label>First Name</label>
      <input type="input" class="form-control" id="f_name" placeholder="First Name">
    </div>
    <div class="form-group col-md-6">
      <label>Second Name</label>
      <input type="input" class="form-control" id="l_name" placeholder="Last Name">
    </div>
  </div>
  <div class="form-group">
    <label>Vechile Number</label>
    <input type="text" class="form-control" id="vecile_name" placeholder="vechile No">
  </div>
  <div class="form-group">
    <label>Phone No</label>
    <input type="text" class="form-control" id="phone_no" placeholder="Phone No">
  </div>
  <button type="submit" class="btn btn-primary">Create</button>
</form>
    </div>
</body>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
</html>