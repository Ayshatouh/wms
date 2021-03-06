<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Login | UrbanWaste-MS</title>
    <meta
      name="description"
      content="Association of Point of Sales Users Membership Registation"
    />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link rel="icon" href="img/logo.png" type="image/gif" sizes="16x16" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
      integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"
      crossorigin="anonymous"
    />
  </head>

  <body class="d-flex flex-column min-vh-100 bg-light">
    <!-- Nav-->
   <?php include("include/full-header.php") ?>

    <!-- content -->
    <div class="container flex-grow-1 flex-shrink-0 py-5">
      <div class="mb-5 p-4 bg-white shadow-sm">
        <p>
          New to this website? <a href="register.php">Create an account</a>
        </p>
        <hr />
        <h3>Sign in to your account</h3>
        <form class="needs-validation m-4" novalidate>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputMailForm"
                >Email or phone number
                <span class="text-danger font-weight-bold">*</span></label
              >
              <input
                id="inputMailForm"
                type="text"
                class="form-control"
                placeholder="Enter your email or phone number"
                required
              />
              <div class="invalid-feedback">
                Please fill the email or phone number field
              </div>
            </div>
            <div class="form-group col-md-6">
              <label for="inputPasswordForm"
                >Password
                <span class="text-danger font-weight-bold">*</span></label
              >
              <input
                id="inputPasswordForm"
                type="password"
                class="form-control"
                placeholder="Enter your password"
                required
              />
              <div class="invalid-feedback">Please fill the password field</div>
              <button
                type="button"
                class="btn btn-link"
                data-toggle="collapse"
                data-target="#resetPassword"
                aria-expanded="false"
              >
                Forgot password?
              </button>
            </div>
          </div>
          <button class="btn btn-primary" type="submit">Sign in</button>
        </form>

        <div class="collapse" id="resetPassword">
          <div class="card-body">
            <hr />
            <h3>Reset your account password</h3>
            <p class="text-muted">
              Enter your email address and we will send you a password reset
              link.
            </p>
            <form class="needs-validation m-4" novalidate>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputMailForm"
                    >Email address
                    <span class="text-danger font-weight-bold">*</span></label
                  >
                  <input
                    id="inputMailForm"
                    type="email"
                    class="form-control"
                    placeholder="Enter your email address"
                    required
                  />
                  <div class="invalid-feedback">
                    Please fill the email address field
                  </div>
                </div>
              </div>
              <button class="btn btn-primary" type="submit">
                Send password reset link
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- footer -->
  <?php include("include/footer.php"); ?>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
  </body>
</html>
