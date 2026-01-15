<?php
//menyertakan code dari file koneksi
include "koneksi.php";
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>FILMYou</title>

  <!-- Favicon -->
  <link rel="icon" href="img/logo.png">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

  <style>
    /* ========== LIGHT MODE (Default) ========== */
    body {
      background-color: #ffffff;
      color: #000000;
      transition: background-color 0.3s ease, color 0.3s ease;
    }

    .bg-success-subtle {
      background-color: #d1e7dd !important;
    }

    .card {
      background-color: #ffffff;
      color: #000;
      border: 1px solid #444648;
      transition: all 0.3s ease;
    }

    footer a:hover i {
      color: #28a745;
      transition: 0.3s;
    }

    /* ========== DARK MODE ========== */
    body.dark-mode {
      background-color: #2b2d31 !important;
      color: #e4e6eb !important;
    }

    /* Background hijau jadi abu terang */
    body.dark-mode .bg-success-subtle {
      background-color: #404249 !important;
    }

    /* Navbar dark mode */
    body.dark-mode .navbar {
      background-color: #c7c7d3 !important;
      border-bottom: 1px solid #1c1e1e;
    }

    body.dark-mode .navbar-brand,
    body.dark-mode .nav-link {
      color: #2c2d2e !important;
    }

    body.dark-mode .nav-link:hover {
      color: #ffffff !important;
    }

    /* Card dark mode - abu gelap semi transparan */
    body.dark-mode .card {
      background-color: rgba(48, 51, 57, 0.85) !important;
      color: #dfdddd !important;
      border: 1px solid #cbcdd1 !important;
      backdrop-filter: blur(10px);
    }

    body.dark-mode .card-title {
      color: #dfdddd !important;
      font-weight: 600;
    }

    body.dark-mode .card-text {
      color: #d1d4d8 !important;
      line-height: 1.6;
    }

    body.dark-mode .card-footer {
      background-color: rgba(35, 37, 41, 0.9) !important;
      color: #a8abad !important;
      border-top: 1px solid #3a3d42 !important;
    }

    /* Accordion dark mode */
    body.dark-mode .accordion-item {
      background-color: rgba(48, 51, 57, 0.9) !important;
      border: 1px solid #3a3d42 !important;
    }

    body.dark-mode .accordion-button {
      background-color: rgba(48, 51, 57, 0.9) !important;
      color: #e4e6eb !important;
      border: 1px solid #3a3d42 !important;
    }

    body.dark-mode .accordion-button:not(.collapsed) {
      background-color: #5a5d63 !important;
      color: #ffffff !important;
    }

    body.dark-mode .accordion-body {
      background-color: rgba(43, 45, 49, 0.95) !important;
      color: #d1d4d8 !important;
    }

    /* Footer dark mode */
    body.dark-mode footer {
      background-color: #1e1f22 !important;
      color: #e4e6eb !important;
      border-top: 1px solid #3a3d42;
    }

    body.dark-mode footer a i {
      color: #e4e6eb !important;
    }

    body.dark-mode footer a:hover i {
      color: #4ade80 !important;
    }

    /* Form dark mode */
    body.dark-mode .form-control,
    body.dark-mode .form-label {
      background-color: rgba(48, 51, 57, 0.9) !important;
      color: #e4e6eb !important;
      border: 1px solid #3a3d42 !important;
    }

    body.dark-mode .form-control::placeholder {
      color: #9ca3af !important;
    }

    body.dark-mode .form-control:focus {
      background-color: rgba(48, 51, 57, 1) !important;
      color: #ffffff !important;
      border-color: #79df9f !important;
      box-shadow: 0 0 0 0.25rem rgba(74, 222, 128, 0.25) !important;
    }

    /* Button dark mode */
    body.dark-mode .btn-success {
      background-color: #973c4e !important;
      border-color: #9eb5a7 !important;
      color: #141415 !important;
    }

    body.dark-mode .btn-success:hover {
      background-color: #d27896 !important;
      border-color: #e2e8e4 !important;
    }

    /* Carousel controls dark mode */
    body.dark-mode .carousel-control-prev-icon,
    body.dark-mode .carousel-control-next-icon {
      filter: invert(1);
    }

    /* Back to top button dark mode */
    body.dark-mode #backToTop {
      background-color: #a96868 !important;
      border-color: #a96868 !important;
    }

    body.dark-mode #backToTop:hover {
      background-color: #a96868 !important;
    }

    /* Accordion custom colors */
    .accordion-button:not(.collapsed) {
      background-color: rgb(233, 173, 173) !important;
      color: white !important;
      box-shadow: none !important;
    }

    .accordion {
      --bs-accordion-active-bg: rgb(223, 173, 173) !important;
      --bs-accordion-active-color: rgb(223, 173, 173) !important;
      --bs-accordion-border-color: rgb(223, 173, 173) !important;
    }

    .accordion-item {
      border: 1px solid rgb(233, 173, 173) !important;
    }

    .accordion-button {
      border: 1px solid rgb(233, 173, 173) !important;
    }
  </style>
</head>

<body>

  <!-- Navbar Begin -->
  <nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top shadow-sm">
    <div class="container">
      <a class="navbar-brand fw-bold" href="#">FILMYou</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-dark">
          <li class="nav-item d-flex align-items-center ms-3">
            <button id="themeToggle" class="btn btn-outline-dark rounded-circle">
              <i id="themeIcon" class="bi bi-moon-fill"></i>
            </button>
          </li>
          <li class="nav-item"><a class="nav-link" href="#">HOME</a></li>
          <li class="nav-item"><a class="nav-link" href="#">ARTICLE</a></li>
          <li class="nav-item"><a class="nav-link" href="#gallery">GALLERY</a></li>
          <li class="nav-item"><a class="nav-link" href="#schedule">SCHEDULE</a></li>
          <li class="nav-item"><a class="nav-link" href="#about">ABOUT ME</a></li>
          <li class="nav-item"><a class="nav-link" href="#kontak">KONTAK</a></li>
          <li class="nav-item"><a class="nav-link" href="login.php">LOGIN</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Navbar End -->

  <!-- Hero Begin -->
  <section id="Hero" class="text-center p-5 bg-success-subtle text-sm-start">
    <div class="container">
      <div class="d-sm-flex flex-sm-row-reverse align-items-">
        <img src="img/logo.png" class="img-fluid rounded" width="400" alt="FILMYou">
        <div class="text-sm-start ms-sm-5">
          <h1 class="fw-bold display-5">Let's Make Memories With Me</h1>
          <h4 class="lead display-6">Temukan Film Favoritmu di Sini</h4>
          <p class="mt-3">
            <span id="tanggal"></span> | <span id="jam"></span>
          </p>
        </div>
      </div>
    </div>
  </section>
  <!-- Hero End -->

  <html lang="en">

  <body>

    <!-- article begin -->
    <section id="article" class="text-center p-5">
      <div class="container">
        <h1 class="fw-bold display-4 pb-3">ARTICLE</h1>
        <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">

          <?php
          $sql = "SELECT * FROM article ORDER BY tanggal DESC";
          $hasil = $conn->query($sql);

          while ($row = $hasil->fetch_assoc()) {

          ?>
            <!-- col begin -->
            <div class="col">
              <div class="card h-100">
                <img src="img/<?= $row["gambar"] ?>" class="card-img-top" alt="... " />
                <div class="card-body">
                  <h5 class="card-title"><?= $row["judul"] ?></h5>
                  <p class="card-text">
                    <?= $row["isi"] ?>
                  </p>
                </div>
                <div class="card-footer">
                  <small class="text-body-secondary">
                    <?= $row["tanggal"] ?>
                  </small>
                </div>
              </div>
            </div>
            <!-- col end -->
          <?php
          }
          ?>
        </div>
      </div>
    </section>
    <!-- Article end -->

    <!-- gallery begin -->
    <section id="gallery" class="text-center p-5 bg-light">
      <div class="container">
        <h1 class="fw-bold display-5 pb-4">Gallery</h1>
        <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
          <?php
          $sql = "SELECT * FROM gallery ORDER BY tanggal DESC";
          $hasil = $conn->query($sql);

          while ($row = $hasil->fetch_assoc()) {
          ?>
          <div class="col">
            <div class="card h-100">
              <img src="img/<?= $row['Gambar']; ?>" class="card-img-top" alt="gallery">
              <div class="card-body">
                <p class="card-text"><?= $row['Deskripsi']; ?></p>
              </div>
              <div class="card-footer">
                <small class="text-body-secondary">
                  <?= $row['tanggal']; ?><br>
                  oleh : <?= $row['Username']; ?>
                </small>
              </div>
            </div>
          </div>
          <?php } ?>
        </div>
      </div>
    </section>
    <!-- gallery end -->

    <!-- Schedule Begin -->
    <section id="schedule" class="text-center p-5">
      <div class="container">
        <h1 class="fw-bold display-4 pb-3">SCHEDULE</h1>

        <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-4">

          <div class="col">
            <div class="card shadow-sm">
              <div class="card-body">
                <div><i class="bi bi-film" h2 p-3></i></div>
                <h5 class="card-title">Senin</h5>
                <p class="card-text">Nonton film Horror terbaru.</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card shadow-sm">
              <div class="card-body">
                <div><i class="bi bi-film" h2 p-3></i></div>
                <h5 class="card-title">Selasa</h5>
                <p class="card-text">Marathon Drama Korea.</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card shadow-sm">
              <div class="card-body">
                <div><i class="bi bi-film" h2 p-3></i></div>
                <h5 class="card-title">Rabu</h5>
                <p class="card-text">Rewatch Action favorit.</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card shadow-sm">
              <div class="card-body">
                <div><i class="bi bi-film" h2 p-3></i></div>
                <h5 class="card-title">Kamis</h5>
                <p class="card-text">Nonton film Romance.</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card shadow-sm">
              <div class="card-body">
                <div><i class="bi bi-film" h2 p-3></i></div>
                <h5 class="card-title">Jum'at</h5>
                <p class="card-text">Review film Horror.</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card shadow-sm">
              <div class="card-body">
                <div><i class="bi bi-film" h2 p-3></i></div>
                <h5 class="card-title">Sabtu</h5>
                <p class="card-text">Review film Romance.</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card shadow-sm">
              <div class="card-body">
                <div><i class="bi bi-film" h2 p-3></i></div>
                <h5 class="card-title">Minggu</h5>
                <p class="card-text">Review film Comedy.</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card shadow-sm">
              <div class="card-body">
                <div><i class="bi bi-film" h2 p-3></i></div>
                <h5 class="card-title">FREE DAY</h5>
                <p class="card-text">HEALING TIME.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Schedule End -->

    <!-- About Me Begin -->
    <section id="about" class="text-center p-5 bg-success-subtle">
      <div class="container">
        <h1 class="fw-bold display-4 pb-3">ABOUT ME</h1>

        <div class="row justify-content-center">
          <div class="col-md-8">

            <div class="accordion" id="aboutAccordion">

              <!-- Accordion 1 -->
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Tentang Saya
                  </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show"
                  aria-labelledby="headingOne" data-bs-parent="#aboutAccordion">
                  <div class="accordion-body text-start">
                    My name is Noor Laila Lutfia Fajrin, the creator of the FILMYou website.
                    I enjoy watching various film genres and sharing my recommendations.
                  </div>
                </div>
              </div>

              <!-- Accordion 2 -->
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Hobi & Ketertarikan
                  </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse"
                  aria-labelledby="headingTwo" data-bs-parent="#aboutAccordion">
                  <div class="accordion-body text-start">
                    I enjoy romance, drama, and horror films. I'm also interested in UI/UX design and website development.
                  </div>
                </div>
              </div>

              <!-- Accordion 3 -->
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Tujuan Pembuatan Website
                  </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse"
                  aria-labelledby="headingThree" data-bs-parent="#aboutAccordion">
                  <div class="accordion-body text-start">
                    The FILMYou website was created as an informational resource and for college project assignments,
                    with the goal of providing recommendations for interesting films to watch.
                  </div>
                </div>
              </div>

            </div>

          </div>
        </div>
      </div>
    </section>
    <!-- About Me End -->

    <!-- Kontak Begin -->
    <section id="kontak" class="text-center p-5">
      <div class="container">
        <h1 class="fw-bold display-4 pb-3">KONTAK</h1>

        <div class="row align-items-center">
          <!-- Gambar -->
          <div class="col-md-6 mb-4 mb-md-0">
            <img src="img/logo.png"
              alt="Film You Logo"
              class="img-fluid rounded shadow"
              style="width: 100%; max-height: 400px; object-fit: cover;">
          </div>

          <!-- Form -->
          <div class="col-md-6 text-start">
            <h5 class="card-title text-center mb-4">Film Favoritmu</h5>
            <form>
              <div class="row g-3">
                <div class="col-md-6">
                  <label for="nama" class="form-label">Nama:</label>
                  <input type="text" class="form-control" id="nama" placeholder="Masukkan nama">
                </div>
                <div class="col-md-6">
                  <label for="email" class="form-label">Email:</label>
                  <input type="email" class="form-control" id="email" placeholder="Masukkan email">
                </div>
                <div class="col-12">
                  <label for="komentar" class="form-label">Komentar tentang film favorit:</label>
                  <textarea class="form-control" id="komentar" rows="3" placeholder="Komentar singkat..."></textarea>
                </div>
              </div>
              <div class="text-center mt-4">
                <button type="submit" class="btn btn-success px-5">Kirim</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- Kontak End -->

    <!-- Footer Begin -->
    <footer class="text-center p-5">
      <div>
        <a href="https://www.instagram.com/lutflail_/" target="_blank">
          <i class="bi bi-instagram h2 p-2 text-dark"></i>
        </a>
        <a href="https://x.com/MilkymoOmm22798" target="_blank">
          <i class="bi bi-twitter h2 p-2 text-dark"></i>
        </a>
        <a href="https://wa.me/+6289627763893" target="_blank">
          <i class="bi bi-whatsapp h2 p-2 text-dark"></i>
        </a>
      </div>
      <div class="mt-3">Noor Laila Lutfia Fajrin © 2025</div>
    </footer>
    <!-- Footer End -->

    <!-- Tombol Back to Top -->
    <button
      id="backToTop"
      class="btn btn-danger rounded-circle position-fixed bottom-0 end-0 m-3 d-none"
      style="width: 50px; height: 50px; z-index: 1000;">
      <i class="bi bi-arrow-up" title="Back to Top"></i>
    </button>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

    <script>
      // Fungsi untuk menampilkan waktu
      function tampilWaktu() {
        const waktu = new Date();
        const tanggal = waktu.getDate();
        const bulan = waktu.getMonth();
        const tahun = waktu.getFullYear();
        const jam = String(waktu.getHours()).padStart(2, '0');
        const menit = String(waktu.getMinutes()).padStart(2, '0');
        const detik = String(waktu.getSeconds()).padStart(2, '0');

        const arrBulan = ["Jan", "Feb", "Mar", "Apr", "Mei", "Jun", "Jul", "Agu", "Sep", "Okt", "Nov", "Des"];

        const tanggalFull = tanggal + " " + arrBulan[bulan] + " " + tahun;
        const jamFull = jam + ":" + menit + ":" + detik;

        document.getElementById("tanggal").innerHTML = tanggalFull;
        document.getElementById("jam").innerHTML = jamFull;
      }

      // Panggil pertama kali
      tampilWaktu();

      // Update setiap detik
      setInterval(tampilWaktu, 1000);

      // Back to Top Button
      const backToTop = document.getElementById("backToTop");

      window.addEventListener("scroll", function() {
        if (window.scrollY > 300) {
          backToTop.classList.remove("d-none");
          backToTop.classList.add("d-block");
        } else {
          backToTop.classList.remove("d-block");
          backToTop.classList.add("d-none");
        }
      });

      backToTop.addEventListener("click", function() {
        window.scrollTo({
          top: 0,
          behavior: "smooth"
        });
      });

      // Dark Mode Toggle
      const themeToggle = document.getElementById("themeToggle");
      const themeIcon = document.getElementById("themeIcon");

      // Cek tema tersimpan
      if (localStorage.getItem("theme") === "dark") {
        document.body.classList.add("dark-mode");
        themeIcon.classList.replace("bi-moon-fill", "bi-sun-fill");
      }

      themeToggle.addEventListener("click", function() {
        document.body.classList.toggle("dark-mode");

        // Ganti ikon
        if (document.body.classList.contains("dark-mode")) {
          themeIcon.classList.replace("bi-moon-fill", "bi-sun-fill");
          localStorage.setItem("theme", "dark");
        } else {
          themeIcon.classList.replace("bi-sun-fill", "bi-moon-fill");
          localStorage.setItem("theme", "light");
        }
      });
    </script>
  </body>

  </html>
