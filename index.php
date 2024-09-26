<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="scss/style.css" />

    <title>Login</title>
  </head>
  <body>
    <div class="wrapper-content">
      <main>
        <div class="main-wrapper d-flex">
          <section class="main-content w-100 bg-light">
            <div class="container py-3">
              <div class="row justify-content-center align-items-center vh-100">
                <div class="login-card col-lg-4 col-10 p-4 rounded-3">
                  <div class="header-form">
                    <div class="header-logo-form mb-4">
                      <div class="d-flex align-items center">
                        <div class="logo me-3">
                          <img
                            class="img-fluid"
                            src="img/Logo.png"
                            alt="logo UNIMED"
                          />
                        </div>
                        <div class="logo-name">
                          <p class="m-0 fw-bold fs-4">DEVAKAD</p>
                          <small>Universitas Negeri Medan</small>
                        </div>
                      </div>
                    </div>
                    <div class="header-text-form">
                      <p class="fw-bold mx-0 my-1">Halo! Selamat Datang</p>
                      <small>Silahkan masuk untuk melanjutkan</small>
                    </div>
                  </div>
                  <div class="main-login-form mt-3">
                    <form action="proses_login.php" method="post">
                      <div class="mb-4">
                        <input
                          type="text"
                          id="username"
                          class="form-control"
                          placeholder="Username"
                          name="username"
                          required
                        />
                      </div>
                      <div class="mb-4">
                        <input
                        id="password"
                          type="password"
                          class="form-control"
                          placeholder="Password"
                          name="password"
                          required
                        />
                      </div>
                      <div class="text-center">
                        <button
                          type="submit"
                          value="Login"
                          class="btn button-primary text-white px-4 w-100 rounded-3"
                        >
                          Masuk
                        </button>
                      </div>
                    </form>
                    <div class="login-footer text-center mt-4">
                      <small
                        >Memiliki kendala login?
                        <span><a href="#">Hubungi Admin</a></span></small
                      >
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
      </main>
    </div>
    <!-- <h1 class="text-primary">Hello World</h1> -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
