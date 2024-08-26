<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
      <title>Truelysell | Template</title>
      <link rel="shortcut icon" href="assets/img/favicon.png">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
      <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/css/admin2.css">
   </head>
   <body>
      <div class="main-wrapper">
         <div class="login-page">
            <div class="login-body container">
               <div class="loginbox">
                  <div class="login-right-wrap">
                     <div class="account-header">
                        <div class="account-logo text-center mb-4">
                           <a href="index">
                           <img src="assets/img/logo-icon.png" alt class="img-fluid">
                           </a>
                        </div>
                     </div>
                     <div class="login-header">
                        <h3>Login <span>Truelysell</span></h3>
                        <p class="text-muted">Access to our dashboard</p>
                     </div>
                     <form action="/admin-login" method="POST">
                        @csrf
                        <div class="form-group">
                           <label class="control-label">Email</label>
                           <input class="form-control" type="text" placeholder="Enter your Email" name="email">
                        </div>
                        <div class="form-group mb-4">
                           <label class="control-label">Password</label>
                           <input class="form-control" type="password" placeholder="Enter your password" name="password">
                        </div>
                        <div class="text-center">
                           <button class="btn btn-primary btn-block account-btn" type="submit">Login</button>
                        </div>
                     </form>
                     <div class="text-center forgotpass mt-4"><a href="forgot-password">Forgot Password?</a></div>
                     <div class="login-or">
                        <span class="or-line"></span>
                        <span class="span-or">or</span>
                     </div>
                     <div class="social-login">
                        <span>Login with</span>
                        <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a><a href="#" class="google"><i class="fab fa-google"></i></a>
                     </div>
                     <div class="text-center dont-have">Don’t have an account? <a href="register">Register</a></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <script src="assets/js/jquery-3.6.0.min.js"></script>
      <script src="assets/js/popper.min.js"></script>
      <script src="assets/js/bootstrap.bundle.min.js"></script>
      <script src="assets/js/admin.js"></script>
   </body>
</html>