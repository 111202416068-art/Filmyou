<?php
session_start();
include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Login | FILMYou</title>

   <!-- Favicon -->
  <link rel="icon" href="ChatGPT Image 28 Okt 2025, 18.32.35.png">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  <link rel="icon" href="img/logo.png" />

  <style>
    /* ===== LIGHT MODE ===== */
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
      border-radius: 2rem;
    }

    /* ===== DARK MODE ===== */
    body.dark-mode {
      background-color: #2b2d31 !important;
      color: #e4e6eb !important;
    }

    body.dark-mode .bg-success-subtle {
      background-color: #404249 !important;
    }

    body.dark-mode .card {
      background-color: rgba(48, 51, 57, 0.85) !important;
      color: #dfdddd !important;
      border: 1px solid #cbcdd1 !important;
      backdrop-filter: blur(10px);
    }

    body.dark-mode .form-control {
      background-color: rgba(48, 51, 57, 0.9) !important;
      color: #e4e6eb !important;
      border: 1px solid #3a3d42 !important;
    }

    body.dark-mode .form-control::placeholder {
      color: #9ca3af !important;
    }

    body.dark-mode .btn-success {
      background-color: #973c4e !important;
      border-color: #9eb5a7 !important;
      color: #141415 !important;
    }

    body.dark-mode .btn-success:hover {
      background-color: #d27896 !important;
    }
  </style>
</head>

<body class="bg-success-subtle d-flex align-items-center" style="min-height:100vh;">

<div class="container">
  <div class="row justify-content-center">
    <div class="col-12 col-sm-8 col-md-5 col-lg-4">
      <div class="card shadow-lg p-4">
        <div class="text-center mb-3">
          <i class="bi bi-person-circle display-4"></i>
          <h5 class="mt-2">FILMYou</h5>
          <hr>
        </div>

        <form method="post">
          <input type="text" name="user" class="form-control mb-3 rounded-pill py-2" placeholder="Username">
          <input type="password" name="pass" class="form-control mb-4 rounded-pill py-2" placeholder="Password">

          <div class="d-grid">
            <button type="submit" class="btn btn-success rounded-pill py-2">
              Login
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $userInput = $_POST['user'];
  $passInput = $_POST['pass'];

  if ($userInput == "" || $passInput == "") {
    echo "<script>alert('Username dan Password tidak boleh kosong!')</script>";
    exit;
  }

  $username = $userInput;
  $password = md5($passInput);

  $stmt = $conn->prepare("SELECT * FROM user WHERE username=? AND password=?");
  $stmt->bind_param("ss", $username, $password);
  $stmt->execute();
  $hasil = $stmt->get_result();
  $row = $hasil->fetch_array(MYSQLI_ASSOC);

  if (!empty($row)) {
    $_SESSION['username'] = $username;
    header("Location: admin.php");
  } else {
    echo "<script>alert('Username atau Password salah!')</script>";
  }
}
?>

<!-- Auto dark mode ikut web utama -->
<script>
  if (localStorage.getItem("theme") === "dark") {
    document.body.classList.add("dark-mode");
  }
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
