<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>User Signiup</title>
  <link rel="stylesheet" type = "text/css" href="style.css">
    <link rel="stylesheet" type = "text/css"
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">

</head>
<body>
  <div class="container">
  <div class ="login-box">
  <div class="row">
  <div class= "col-md-6 login-right">
      <h2> Signup here</h2>
      <form action ="validation.php" method="POST">

        <div class = "form-group">
          <label> Firstname</label>
          <input type= "text" name="Firstname" class="form-control" required>
          </div>

        <div class = "form-group">
            <label> Lastname</label>
            <input type= "text" name="Lastname" class="form-control" required>
            </div>

        <div class = "form-group">
          <label> Email</label>
          <input type= "email" name="Email" class="form-control" required>
          </div>

        <div class = "form-group">
          <label> Password</label>
          <input type= "password" name="Password" class="form-control" required>
          </div>

        <div class = "form-group">
            <label> Confirm Password</label>
            <input type= "password" name="ConfirmPassword" class="form-control" required>
            </div>
            <button type= "submit" class= "btn btn-primary">Signup</button>


    </form>
  </div>
  </div>
  </div>
</body>
</html>
