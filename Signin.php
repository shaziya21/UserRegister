<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>User Signin</title>
  <link rel="stylesheet" type = "text/css" href="style.css">
    <link rel="stylesheet" type = "text/css"
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">

</head>
<body>
<div class="container">
    <div class ="login-box">
    <div class="row">
    <div class= "col-md-6 login-left">
        <h2> Signin here</h2>
        <form action ="validation.php" method="post">

          <div class = "form-group">
            <label> Username</label>
            <input type= "text" name="user" class="form-control" required>
            </div>

          <div class = "form-group">
            <label> Email</label>
            <input type= "email" name="email" class="form-control" required>
            </div>

          <div class = "form-group">
            <label> Password</label>
            <input type= "password" name="password" class="form-control" required>
            </div>
            <button type= "submit" class= "btn btn-primary">Signin</button>


      </form>
    </div>

    <!-- <div class= "col-md-6">
        <h2> Signup here</h2>
        <form action ="validation.php" method="post">

          <div class = "form-group">
            <label> Firstname</label>
            <input type= "text" name="fname" class="form-control" required>
            </div>

          <div class = "form-group">
              <label> Lastname</label>
              <input type= "text" name="Lname" class="form-control" required>
              </div>

          <div class = "form-group">
            <label> Email</label>
            <input type= "email" name="email" class="form-control" required>
            </div>

          <div class = "form-group">
            <label> Password</label>
            <input type= "password" name="password" class="form-control" required>
            </div>

          <div class = "form-group">
              <label> CPassword</label>
              <input type= "password" name="cpassword" class="form-control" required>
              </div>
              <button type= "submit" class= "btn btn-primary">Signup</button>


      </form>
    </div> -->
    </div>
    </div>
  </body>
</html>
