<?php
session_start();
if (!isset($_SESSION['username'])) {
 header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <!-- font -->
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
      rel="stylesheet"
    />
    <!-- ICON -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"
    />
    <!-- bootstrap -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
    <!-- style css -->
    <link rel="stylesheet" href="scss/style.css" />

    <title>DEVAKAD</title>
  </head>
  <body>
    <div class="wrapper-content">
      <!-- navbar -->
      <header>
        <nav class="navbar py-2">
          <div class="container">
            <!-- logo -->
            <div class="logo-humburger d-flex align-items-center">
              <div class="humburger me-2 me-lg-3">
                <i class="bi bi-list fs-4 px-2 py-1" id="humburger"></i>
              </div>
              <div class="logo d-flex align-items-center">
                <div class="logo-image me-3">
                  <img src="img/Logo.png" alt="Logo UNIMED" class="img-fluid" />
                </div>
                <div class="logo-name">
                  <div class="logo-name-desktop d-none d-lg-block">
                    <p class="m-0 fw-bold fs-4">Sistem Informasi Akademik</p>
                    <small>Universitas Negeri Medan</small>
                  </div>
                  <div class="logo-name-mobile d-block d-lg-none">
                    <p class="m-0 fw-bold fs-4">Sistem Informasi Akademik</p>
                  </div>
                </div>
              </div>
            </div>
            <!-- logo -->

            <!-- logout button -->
            <div class="button-logout d-none d-lg-block me-3">
              <div class="dropdown">
                <button
                  class="btn dropdown-toggle"
                  type="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  <img src="img/boy.png" alt="boy" width="50" />
                </button>
                <ul class="dropdown-menu dropdown-menu-light">
                  <li><hr class="dropdown-divider" /></li>
                  <li>
                    <button class="dropdown-item">
                        <a href="logout.php" class="btn">Log Out</a>
                    </button>
                  </li>
                </ul>
              </div>
            </div>
            <!-- logout button -->
          </div>
        </nav>
      </header>
      <!-- navbar -->
      <main>
        <div class="main-wrapper d-flex">
          <!-- sidebar -->
          <aside class="aside-sidebar">
            <div class="sidebar py-3 px-3 py-lg-5">
              <!-- list sidebar -->
              <div class="link-sidebar">
                <ul class="p-0 m-0">
                  <li class="link-item mb-2">
                    <a href="dashboard.html" class="nav-link px-3 py-2 rounded"
                      >Beranda</a
                    >
                  </li>
                  <li class="link-item mb-2">
                    <a href="profil.html" class="nav-link px-3 py-2 rounded"
                      >Profil Mahasiswa</a
                    >
                  </li>
                  <li class="link-item mb-2">
                    <div
                      class="accordion accordion-flush"
                      id="accordionFlushExample"
                    >
                      <div class="accordion-item rounded-3">
                        <p class="accordion-header rounded m-0">
                          <button
                            class="accordion-button collapsed px-3 py-2 rounded"
                            type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseOne"
                            aria-expanded="false"
                            aria-controls="flush-collapseOne"
                          >
                            Registrasi
                          </button>
                        </p>
                        <div
                          id="flush-collapseOne"
                          class="accordion-collapse collapse"
                          data-bs-parent="#accordionFlushExample"
                        >
                          <div class="accordion-body">
                            <div class="link-wrapper">
                              <a href="#" class="nav-link px-2 py-1 rounded"
                                >Kartu Rencana Studi</a
                              >
                            </div>
                            <div class="link-wrapper">
                              <a href="#" class="nav-link px-2 py-1 rounded m-0"
                                >Jadwal</a
                              >
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="link-item d-block d-lg-none">
                    <button class="btn text-light px-3 py-2 rounded">
                      Log Out
                    </button>
                  </li>
                </ul>
              </div>
              <!-- list sidebar -->
            </div>
          </aside>
          <!-- sidebar -->

          <!-- main content -->
          <section class="main-content w-100 bg-light">
            <div class="container py-3">
              <!-- welcome -->
              <div
                class="row welcome p-2 mb-4 rounded-4 justify-content-center"
              >
                <div class="col-11 col-lg-12 welcome-text">
                  <h3 class="fw-bolder">Selamat datang, <?php echo $_SESSION['username']; ?>!</h3>
                  <h6 class="m-0">
                    Sistem Informasi Akademik Universitas Negeri Medan
                  </h6>
                </div>
              </div>

              <!-- profil -->
              <div
                class="row profile-identity justify-content-center justify-content-lg-between"
              >
                <div class="col-11 col-lg-3 profile-section rounded-4 py-4">
                  <div
                    class="profile-image-wrapper d-flex justify-content-center"
                  >
                    <img src="img/profil.jfif" alt="Profile" />
                  </div>
                </div>
                <div
                  class="col-11 col-lg-4 identity-section p-3 my-3 my-lg-0 rounded-4"
                >
                  <div class="identity-wrapper">
                    <table class="table">
                      <tbody>
                        <tr>
                          <td></td>
                          <td></td>
                        </tr>
                        <tr>
                          <td class="fw-bold py-3">Tahun Akademik</td>
                          <td class="py-3">2024/2025 Ganjil</td>
                        </tr>
                        <tr>
                          <td class="fw-bold py-3">Semester</td>
                          <td class="py-3">7</td>
                        </tr>
                        <tr>
                          <td class="fw-bold py-3">IPK</td>
                          <td>
                            <p
                              class="button-primary d-inline-block rounded-5 px-2 mb-0 mt-2 mx-0"
                            >
                              4.0
                            </p>
                          </td>
                        </tr>
                        <tr>
                          <td class="fw-bold py-3">SKS</td>
                          <td class="py-3">126</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>

                <!-- Anouncement -->
                <div class="col-11 col-lg-4 anouncement-section p-3 rounded-4">
                  <div class="anouncement-wrapper">
                    <h6 class="fw-bold p-2">Pengumuman</h6>
                    <div class="row align-items-center">
                      <div class="col my-5">
                        <marquee
                          >Penginputan KRS Semester Ganjil Tahun
                          2024/2025</marquee
                        >
                      </div>
                    </div>
                  </div>
                </div>
                <!-- anouncement -->
              </div>
              <!-- profil -->
            </div>
          </section>
          <!-- main content -->
        </div>
      </main>
      <footer class="footer py-3">
        <div class="text-center">
          <small>Copyright 2024-2025 | Universitas Negeri Medan</small>
        </div>
      </footer>
    </div>
    <!-- <h1 class="text-primary">Hello World</h1> -->
    <script src="js/script.js"></script>
    <script src="bootstrap/js/bootstrap.bundle.js"></script>
  </body>
</html>
