<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Register</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />

    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-7 col-lg-5">
            <div class="wrap">
              <div class="img" style="background-image: url(images/bg-1.jpg)"></div>
              <div class="login-wrap p-4 p-md-5">
                <div class="d-flex">
                  <div class="w-100">
                    <h3 class="mb-4">Register</h3>
                  </div>
                  <div class="w-100">
                    <p class="social-media d-flex justify-content-end">
                      <a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
                      <a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a>
                    </p>
                  </div>
                </div>
                <form action="../functions/authcode.php" method="post" class="signin-form">
                  <div class="form-group mt-3">
                    <input type="text" class="form-control" id="username" name="username" required />
                    <label class="form-control-placeholder" for="username">Username</label>
                  </div>
                  <div class="form-group mt-3">
                    <input type="text" class="form-control" id="email" name="email" required />
                    <label class="form-control-placeholder" for="email">Email</label>
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control" id="password" name="password" required />
                    <label class="form-control-placeholder" for="password">Password</label>
                    <span toggle="#password" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control" id="cpassword" name="cpassword" required />
                    <label class="form-control-placeholder" for="password">Confirm Password</label>
                    <span toggle="#cpassword" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                  </div>
                  <div class="form-group">
                    <button type="submit" name="register_btn" class="form-control btn btn-primary rounded submit px-3">Sign Up</button>
                  </div>
                </form>
                <p class="text-center">Sudah punya akun? <a href="/TravelTales/login/index2.php">Login User</a></p>
                <br>
                <p class="text-center"><a href="/TravelTales/login/admin.php">Admin Login</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>