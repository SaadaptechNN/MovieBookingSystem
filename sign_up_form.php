
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
                               <!-- plugins_start-->

    <link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
    <script src="styles/bootstrap4/bootstrap.min.js"></script>
                               <!-- plugins_end-->
                               <!-- bootstrap_link-->

                               <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
                               <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
                               <!-- style_start-->

    <style>
    .gradient-custom-2 {
/* fallback for old browsers */
background: #fccb90;

/* Chrome 10-25, Safari 5.1-6 */
background: -webkit-linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);

/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
background: linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);
}

@media (min-width: 768px) {
.gradient-form {
height: 100vh !important;
}
}
@media (min-width: 769px) {
.gradient-custom-2 {
border-top-right-radius: .3rem;
border-bottom-right-radius: .3rem;
}
}
</style>
                               <!-- style_end-->

</head>
<!-- doc_start -->
<body>
<!-- form_start -->

<section class="h-100 gradient-form" style="background-color: #eee;">
  <div class="container py-5 h-100 ">
    <div class="row d-flex justify-content-center align-items-center h-100 ">
      <div class="col-xl-10">
        <div class="card rounded-3 text-light bg-dark">
          <div class="row g-0">
            <div class="col-lg-6">
              <div class="card-body p-md-5 mx-md-4">

                <div class="text-center">
                  <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/lotus.webp"
                    style="width: 185px;" alt="logo">
                  <h4 class="mt-1 mb-5 pb-1">We are The Movie Team</h4>
                </div>

                <form method="post">
                  <p>Please Create your account</p>

                  <div data-mdb-input-init class="form-outline mb-4">
                    <input type="text" id="form2Example11" class="form-control"
                      placeholder="Enter Your User Name" name="username" />
                    
                  </div>
                  

                  <div data-mdb-input-init class="form-outline mb-4">
                    <input type="Email" id="form2Example22" class="form-control" placeholder="Enter Your Email" name="email"/>
                 
                  </div>
                  <div data-mdb-input-init class="form-outline mb-4">
                    <input type="password" id="form2Example22" class="form-control" placeholder="Enter Your Password" name="password"/>
                 
                  </div>

                  <div class="text-center pt-1 mb-5 pb-1">
                    <button data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit" style="border: none;" name="sub">Sign
                      Up</button>
                 
                  </div>

                  

                </form>

              </div>
            </div>
            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
              <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                <h4 class="mb-4">We are more than just a company</h4>
                <p class="small mb-0">Our Company Is One Of The Main Branch Of The SHS Corporation ltd. We Feel Proud To Serve You In Any Way. So What's You Are Waiting For.  </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- form_end -->

</body>
</html>
<!-- doc_end -->

<?php
// connection_start
include("connection.php");
// connection_end
// insertquery_start

if (isset($_POST["sub"])) {
 
  $username = $_POST["username"];
  $email = $_POST["email"];  
  $password = $_POST["password"];

   $insert = "insert into login_data(user_name, email, password) values( '$username', '$email', '$password')";
               $run = mysqli_query($con, $insert);

                              if ($run) 
                             {
                          
                              echo "<script> alert('Sign Up Succefully Please Now Login ') 
                              window.location.href = 'Login_form.php';
                           
                              </script>" ;
                            }
                           
                           else
                           {
                              echo "<script> alert('In-Valid email or Password') 
                              window.location.href = 'sign_up_form.php';
                              
                              </script>" ;
                           }
}
?>
<!-- insertquery_end -->
